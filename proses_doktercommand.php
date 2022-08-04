<?php
include_once('Database.php');
include_once('DokterCommandee.php');

$dokterCom = new DokterCommandee($_POST['idDokter'], $_POST['namaDokter'], $_POST['alamatDokter'], $_POST['namaPasien']);

$starsOn = new DokterStarsOnCommand($dokterCom);
callCommand($starsOn);
echo 'book after stars on: ';
echo $dokterCom->getDokterdanPasien();

$starsOff = new DokterStarsOffCommand($dokterCom);
callCommand($starsOff);
echo "book after stars off: ";
echo $dokterCom->getDokterdanPasien();

function callCommand(DokterCommand $dokterCommand)
{
    $dokterCommand->execute();
}

$koneksi = new Database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data_doktercommand($dokterCom->getNamaDokter(), $dokterCom->getAlamatDokter(), $dokterCom->getNamaPasien());
    header('location:tampil_doktercom.php');
} elseif ($action == "update") {
    $koneksi->update_data_doktercommand($dokterCom->getNamaDokter(), $dokterCom->getAlamatDokter(), $dokterCom->getNamaPasien(), $_POST['id']);
    header('location:tampil_doktercom.php');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_data_doktercommand($id);
    header('location:tampil_doktercom.php');
}
