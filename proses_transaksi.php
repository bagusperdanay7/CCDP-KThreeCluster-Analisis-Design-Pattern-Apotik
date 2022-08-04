<?php 
include('Database.php');
include('Transaksi.php');

// $pembeli = new Pembeli($_POST['nama'],$_POST['alamat'],$_POST['jumlah_beli']);
$transaksi = new Transaksi;
    $transaksi->setNamaPembeli($_POST["nama_pembeli"])
        ->setNamaObat($_POST["nama_obat"])
        ->setJenisObat($_POST["jenis_obat"])
        ->setHargaObat($_POST["harga_obat"])
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
    $transaksi->setTotalBayar($transaksi->getHargaObat() * $transaksi->getJumlahBeli() - $transaksi->getDiskon());




$koneksi = new Database();

$action = $_GET['action'];
if($action == "add")
{

	$koneksi->tambah_data_transaksi($transaksi->getNamaPembeli(),$transaksi->getNamaObat(),$transaksi->getJenisObat(),$transaksi->getHargaObat(),$transaksi->getJumlahBeli(),$transaksi->getDiskon(),$transaksi->getTotalBayar());
	header('location:tampil_transaksi.php');
}
elseif($action=="update")
{

	$koneksi->update_data_transaksi($transaksi->getNamaPembeli(),$transaksi->getNamaObat(),$transaksi->getJenisObat(),$transaksi->getHargaObat(),$transaksi->getJumlahBeli(),$transaksi->getDiskon(),$transaksi->getTotalBayar(),$_POST['id_transaksi']);
	header('location:tampil_transaksi.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data_transaksi($id);
	header('location:tampil_transaksi.php');
}
?>