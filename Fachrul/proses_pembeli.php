<?php 
include('Database.php');
include('Pembeli.php');

$pembeli = new Pembeli($_POST['nama'],$_POST['alamat'],$_POST['jumlah_beli']);



$koneksi = new Database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data_pembeli($pembeli->getNamaPembeli(),$pembeli->getAlamat(),$pembeli->getJumlahBeli());
	header('location:tampil_pembeli.php');
}
elseif($action=="update")
{
	$koneksi->update_data_pembeli($pembeli->getNamaPembeli(),$pembeli->getAlamat(),$pembeli->getJumlahBeli(),$_POST['id']);
	header('location:tampil_pembeli.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data_pembeli($id);
	header('location:tampil_pembeli.php');
}
?>