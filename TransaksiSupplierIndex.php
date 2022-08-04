<?php
include('Database.php');
$db = new Database();
$data_transaksiSup = $db->tampil_data_transaksi_supplier();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Data Transaksi Supplier</h1>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Total Harga</th>
                    <th>Kategori Supplier</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($data_transaksiSup as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row["tanggalTransaksi"] ?></td>
                        <td><?= $row["namaSupplier"] ?></td>
                        <td><?= $row["namaBarang"] ?></td>
                        <td><?= $row["jumlahBarang"] ?></td>
                        <td><?= $row["hargaBarang"] ?></td>
                        <td><?= $row["totalHarga"] ?></td>
                        <td><?= $row["kategoriSupplier"] ?></td>
                        <td>
                            <a href="edit_transaksisup.php?id=<?php echo $row['kodeNota']; ?>" class="btn btn-primary">Update</a>

                            <a href="proses_TransaksiSupplier.php?action=delete&id=<?php echo $row['kodeNota']; ?>" class="btn btn-danger" onclick="confirm('Are You Sure ?')">Delete</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="proses_TransaksiSupplier.php?action=add">
                            <div class="mb-3">
                                <label for="tanggalTransaksi" class="form-label">Tanggal Transaksi</label>
                                <input type="date" class="form-control" id="tanggalTransaksi" name="tanggalTransaksi" required aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="namaSupplier" class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" required aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="namaBarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namaBarang" name="namaBarang" required aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="hargaBarang" class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" id="hargaBarang" name="hargaBarang" required aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                                <input type="text" class="form-control" id="jumlahBarang" name="jumlahBarang" required aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="kategoriSupplier" class="form-label">Kategori Supplier</label>
                                <select name="kategoriSupplier" id="kategoriSupplier" class="form-select" required>
                                    <option>Perusahaan</option>
                                    <option>Perseorangan</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">

                        
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>