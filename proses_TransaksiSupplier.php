<?php
include('Database.php');
include('TransaksiSupplierPrototype.php');

// $pembeli = new Pembeli($_POST['nama'],$_POST['alamat'],$_POST['jumlah_beli']);

$transaksiSup = new TransaksiSupplierPrototype();
$transaksiSup->setTanggalTransaksi($_POST["tanggalTransaksi"])
    ->setNamaSupplier($_POST["namaSupplier"])
    ->setnamaBarang($_POST["namaBarang"])
    ->setHargaBarang($_POST["hargaBarang"])
    ->setJumlahBarang($_POST["jumlahBarang"]);

switch ($transaksiSup->getNamaSupplier()) {
    case "Perusahaan":
        $perusahaan = new TransaksiSupplier1();
        $sup1 = clone $perusahaan;
        break;
    case "Perseorangan":
        $perseorangan = new TransaksiSupplier2();
        $sup2 = clone $perseorangan;
        break;
    default:
        echo "Perseorangan";
};

$transaksiSup->setTotalHarga($transaksiSup->getJumlahBarang() * $transaksiSup->getHargaBarang());

$koneksi = new Database();

$action = $_GET['action'];
if ($action == "add") {

    $koneksi->tambah_data_transaksi_supplier($transaksiSup->getTanggalTransaksi(), $transaksiSup->getNamaSupplier(), $transaksiSup->getnamaBarang(), $transaksiSup->getJumlahBarang(), $transaksiSup->getHargaBarang(), $transaksiSup->getTotalHarga(), $transaksiSup->getkategoriSupplier());
    header('location:TransaksiSupplierIndex.php');
} elseif ($action == "update") {
    $koneksi->update_transaksi_supplier($transaksiSup->getTanggalTransaksi(), $transaksiSup->getNamaSupplier(), $transaksiSup->getnamaBarang(), $transaksiSup->getJumlahBarang(), $transaksiSup->getHargaBarang(), $transaksiSup->getTotalHarga(), $transaksiSup->getkategoriSupplier(), $_POST['kodeNota']);
    header('location:TransaksiSupplierIndex.php');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_data_transaksi_supplier($id);
    header('location:TransaksiSupplierIndex.php');
}
