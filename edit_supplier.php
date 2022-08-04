<?php
include('Database.php');
$db = new Database();
$id = $_GET['id'];
if (!is_null($id)) {
    $data_supplier = $db->get_by_id_supplier($id);
} else {
    header('location:tampil_supplier.php');
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
        <h1>Update Data Supplier</h1>

        <form method="POST" action="proses_supplier.php?action=update">
            <input type="hidden" name="id" value="<?php echo $data_supplier['kodeSupplier']; ?>" />
            <div class="mb-3">
                <label for="namaSupplier" class="form-label">Nama Supplier </label>
                <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" required aria-describedby="emailHelp" value="<?php echo $data_supplier['namaSupplier']; ?>">

            </div>
            <div class="mb-3">
                <label for="AlamatSupplier" class="form-label">AlamatSupplier</label>
                <input type="text" class="form-control" id="AlamatSupplier" name="AlamatSupplier" required aria-describedby="emailHelp" value="<?php echo $data_supplier['AlamatSupplier']; ?>">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>