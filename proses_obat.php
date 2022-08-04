<?php 
include('Database.php');
include('Obat.php');

// $obatBuilder = new ObatBuilder($_POST['namaObat'],$_POST['jenisObat'],$_POST['deskripsi']);

$obatBuilder = (new ObatBuilder())
    ->setNamaObat($_POST['namaObat'])
    ->setJenisObat($_POST['jenisObat'])
    ->setDeskripsi($_POST['deskripsi'])
    ->build();



$koneksi = new Database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($obatBuilder->getNamaObat(),$obatBuilder->getJenisObat(),$obatBuilder->getDeskripsi());
	header('location:tampil_obat.php');
}
elseif($action=="update")
{
	$koneksi->update_data($obatBuilder->getNamaObat(),$obatBuilder->getJenisObat(),$obatBuilder->getDeskripsi(),$_POST['kodeObat']);
	header('location:tampil_obat.php');
}
elseif($action=="delete")
{
	$kodeObat = $_GET['id'];
	$koneksi->delete_data($kodeObat);
	header('location:tampil_obat.php');
}
?>