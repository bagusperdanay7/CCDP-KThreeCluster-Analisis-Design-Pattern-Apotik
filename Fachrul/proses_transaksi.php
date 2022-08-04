<?php 
include('Database.php');
include('Transaksi.php');

// $pembeli = new Pembeli($_POST['nama'],$_POST['alamat'],$_POST['jumlah_beli']);

$transaksi = new Transaksi;
$transaksi->setNamaPembeli($_POST["nama_pembeli"])
    ->setNamaObat($_POST["nama_obat"])
    ->setJenisObat($_POST["jenis_obat"])
    ->setHargaObat(100)
    ->setJumlahBeli($_POST["jumlah_beli"]);

switch($transaksi->getJenisObat()){
    case "Anak":
        $str = new ObatAnak;
        break;
    case "Dewasa":
        $str = new ObatDewasa;
        break;
    default:
    echo "Tidak diketahui";
};

$context2 = new NewContext($str);
$context2->hitungDiskon($transaksi);

// echo $transaksi->getHargaObat()."<br>";
// echo $transaksi->getDiskon();
$transaksi->setTotalBayar($transaksi->getHargaObat() + $transaksi->getDiskon());





$koneksi = new Database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data_transaksi($transaksi->getNamaPembeli(),$transaksi->getNamaObat(),$transaksi->getJenisObat(),$transaksi->getHargaObat(),$transaksi->getJumlahBeli(),$transaksi->getDiskon(),$transaksi->getTotalBayar());
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