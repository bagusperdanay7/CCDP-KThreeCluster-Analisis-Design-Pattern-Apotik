<?php 	
include('Database.php');
$db = new Database();
$data_barang = $db->tampil_data();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Apotek Sejahtera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
        <h1>Data Obat</h1>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
        </button>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
            $no = 1;
            foreach($data_barang as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row["namaObat"]?></td>
                    <td><?= $row["jenisObat"]?></td>
                    <td><?= $row["deskripsi"]?></td>
                    <td>
                        <a href="edit_obat.php?id=<?php echo $row['kodeObat']; ?>" class="btn btn-primary">Update</a>

                        <a href="proses_obat.php?action=delete&id=<?php echo $row['kodeObat']; ?>"
                            class="btn btn-danger" onclick="confirm('Are You Sure ?')">Delete</a>
                    </td>
                </tr>

                <?php }?>
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
                        <form method="POST" action="proses_obat.php?action=add">
                            <div class="mb-3">
                                <label for="namaObat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="namaObat" name="namaObat" required
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="jenisObat" class="form-label">jenis Obat</label>
                                <input type="text" class="form-control" id="jenisObat" name="jenisObat" required
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30"
                                    rows="10"></textarea>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>