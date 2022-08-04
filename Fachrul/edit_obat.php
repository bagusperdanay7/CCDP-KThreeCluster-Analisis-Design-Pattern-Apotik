<?php 	
include('Database.php');
$db = new Database();
$kodeObat = $_GET['id'];
if(! is_null($kodeObat))
{
	$data_obat = $db->get_by_id($kodeObat);
}
else
{
	header('location:tampil_obat.php');
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
        <h1>Update Data Obat</h1>

        <form method="POST" action="proses_obat.php?action=update">
            <input type="hidden" name="kodeObat" value="<?php echo $data_obat['kodeObat']; ?>" />
            <div class="mb-3">
                <label for="namaObat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="namaObat" name="namaObat" required
                    aria-describedby="emailHelp" value="<?php echo $data_obat['namaObat']; ?>">

            </div>
            <div class="mb-3">
                <label for="jenisObat" class="form-label">jenis Obat</label>
                <input type="text" class="form-control" id="jenisObat" name="jenisObat" required
                    aria-describedby="emailHelp" value="<?php echo $data_obat['jenisObat']; ?>">

            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"
                    value="<?php echo $data_obat['deskripsi']; ?>"><?php echo $data_obat['deskripsi']; ?></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>