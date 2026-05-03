```php
<?php
include "koneksi.php";


if (isset($_POST['simpan'])) {

    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    mysqli_query($koneksi,
        "INSERT INTO produk (nama_produk, harga, stok)
         VALUES ('$nama_produk', '$harga', '$stok')"
    );

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">


    <h2 class="mb-4">Tambah Produk</h2>

   
    <form method="POST">

        
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>

     
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

    
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-success">
            Simpan
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>
```
