<?php
include('Database.php');
$db = new Database();
$data_pembeli = $db->tampil_data_pembeli();
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


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Apotek Sejahtera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Apotek
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tampil_obat.php">Obat</a></li>
                            <li><a class="dropdown-item" href="tampil_transaksi.php">Transaksi</a></li>
                            <li><a class="dropdown-item" href="tampil_pembeli.php">Pembeli</a></li>


                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Data Pembeli</h1>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Alamat</th>
                    <th>Jumlah Beli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($data_pembeli as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["jumlah_beli"] ?></td>
                        <td>
                            <a href="edit_pembeli.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>

                            <a href="proses_pembeli.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="confirm('Are You Sure ?')">Delete</a>
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
                        <form method="POST" action="proses_pembeli.php?action=add">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pembeli</label>
                                <input type="text" class="form-control" id="nama" name="nama" required aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="jumlah_beli" class="form-label">Jumlah Beli</label>
                                <input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli" required aria-describedby="emailHelp">

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