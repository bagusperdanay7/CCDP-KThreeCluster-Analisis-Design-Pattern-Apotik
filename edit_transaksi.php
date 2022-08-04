<?php 	
include('Database.php');
include('Transaksi.php');
$db = new Database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_transaksi = $db->get_by_id_transaksi($id);
}
else
{
	header('location:tampil_transaksi.php');
}
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

    <div class="container mt-4">
        <h1>Update Data Transaksi</h1>

        <form method="POST" action="proses_transaksi.php?action=update">
            <input type="hidden" name="id_transaksi" value="<?php echo $data_transaksi['id_transaksi']; ?>" />
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="nama" name="nama_pembeli" required
                    aria-describedby="emailHelp" value="<?= $data_transaksi['nama_pembeli'] ?>">

            </div>
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required
                    aria-describedby="emailHelp" value="<?= $data_transaksi['nama_obat'] ?>">

            </div>

            <div class="mb-3">
                <label for="jenis_obat" class="form-label">Jenis Obat</label>
                <select name="jenis_obat" id="jenis_obat" class="form-select">
                    <option>Anak</option>
                    <option>Dewasa</option>
                </select>

            </div>

            <div class="mb-3">
                <label for="harga_obat" class="form-label">Harga Obat</label>
                <input type="text" class="form-control" id="harga_obat" name="harga_obat" required
                    aria-describedby="emailHelp" value="<?= $data_transaksi['harga_obat'] ?>">

            </div>

            <div class="mb-3">
                <label for="jumlah_beli" class="form-label">Jumlah Beli</label>
                <input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli" required
                    aria-describedby="emailHelp" value="<?= $data_transaksi['jumlah_beli'] ?>">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>