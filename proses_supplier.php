<?php
include('Database.php');
include('SupplierPool.php');
include_once('SupplierEntity.php');

$supplier = new SupplierEntity($_POST['kodeSupplier'], $_POST['namaSupplier'], $_POST['AlamatSupplier']);

$koneksi = new Database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data_supplier($supplier->getnamaSupplier(), $supplier->getalamatSupplier());
    header('location:tampil_Supplier.php');
} elseif ($action == "update") {
    $koneksi->update_data_supplier($supplier->getnamaSupplier(), $supplier->getalamatSupplier(), $_POST['id']);
    header('location:tampil_Supplier.php');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_datasupplier($id);
    header('location:tampil_Supplier.php');
}
