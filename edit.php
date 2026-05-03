<?php
include "koneksi.php";


$id = $_GET['id'];


$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
$row = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    mysqli_query($koneksi,
        "UPDATE produk SET
        nama_produk='$nama_produk',
        harga='$harga',
        stok='$stok'
        WHERE id_produk='$id'"
    );

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h2 class="mb-4">Edit Produk</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk"
            value="<?php echo $row['nama_produk']; ?>"
            class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga"
            value="<?php echo $row['harga']; ?>"
            class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok"
            value="<?php echo $row['stok']; ?>"
            class="form-control" required>
        </div>

        <button type="submit" name="update" class="btn btn-success">
            Update
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>
</div>

</body>
</html>