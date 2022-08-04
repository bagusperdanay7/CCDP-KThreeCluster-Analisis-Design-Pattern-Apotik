<?php
include('Database.php');
$db = new Database();
$id = $_GET['id'];

if (!is_null($id)) {
    $data_dokcom = $db->get_by_id_doktercommand($id);
} else {
    header('location:tampil_doktercommand.php');
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
        <h1>Update Data Dokter Com</h1>

        <form method="POST" action="proses_doktercommand.php?action=update">
            <input type="hidden" name="id" value="<?php echo $data_dokcom['idDokter']; ?>" />
            <div class="mb-3">
                <label for="namaDokter" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control" id="namaDokter" name="namaDokter" required aria-describedby="emailHelp" value="<?php echo $data_dokcom['namaDokter']; ?>">

            </div>

            <div class="mb-3">
                <label for="alamatDokter" class="form-label">Alamat Dokter</label>
                <textarea class="form-control" name="alamatDokter" id="alamatDokter" cols="30" rows="10" value="<?php echo $data_dokcom['alamatDokter']; ?>"><?php echo $data_dokcom['alamatDokter']; ?></textarea>

            </div>

            <div class="mb-3">
                <label for="namaPasien" class="form-label">Nama Pasien Dokter</label>
                <input type="text" class="form-control" id="namaPasien" name="namaPasien" required aria-describedby="emailHelp" value="<?php echo $data_dokcom['namaPasien']; ?>">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>