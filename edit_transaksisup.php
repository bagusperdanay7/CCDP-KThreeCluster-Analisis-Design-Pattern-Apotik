<?php
include_once('Database.php');
include_once('TransaksiSupplierPrototype.php');

$db = new Database();
$id = $_GET['id'];
if (!is_null($id)) {
    $data_transaksiSup = $db->get_id_transaksi_supplier($id);
} else {
    header('location:TransaksiSupplierIndex.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <h1>Update Data Transaksi</h1>

        <form method="POST" action="proses_TransaksiSupplier.php?action=update">
            <input type="hidden" name="kodeNota" value="<?php echo $data_transaksiSup['kodeNota']; ?>" />
            <div class="mb-3">
                <label for="tanggalTransaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggalTransaksi" name="tanggalTransaksi" required aria-describedby="emailHelp" value="<?= $data_transaksiSup['tanggalTransaksi'] ?>">

            </div>
            <div class="mb-3">
                <label for="namaSupplier" class="form-label">Nama Supplier</label>
                <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" required aria-describedby="emailHelp" value="<?= $data_transaksiSup['namaSupplier'] ?>">

            </div>

            <div class="mb-3">
                <label for="kategoriSupplier" class="form-label">Kategori Supplier</label>
                <select name="kategoriSupplier" id="kategoriSupplier" class="form-select">
                    <option>Perusahaan</option>
                    <option>Perseorangan</option>
                </select>

            </div>

            <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama Baran</label>
                <input type="text" class="form-control" id="namaBarang" name="namaBarang" required aria-describedby="emailHelp" value="<?= $data_transaksiSup['namaBarang'] ?>">

            </div>

            <div class="mb-3">
                <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlahBarang" name="jumlahBarang" required aria-describedby="emailHelp" value="<?= $data_transaksiSup['jumlahBarang'] ?>">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>