<?php 
include('Database.php');
include('ObatBuilder.php');

$obatBuilder = new ObatBuilder($_POST['namaObat'],$_POST['jenisObat'],$_POST['deskripsi']);



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