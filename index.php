<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Data Produk</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Produk</a>

    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        $no=1;
        while($row = mysqli_fetch_assoc($data)) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($row['harga']); ?></td>
            <td><?php echo $row['stok']; ?></td>

            <td>
                <a href="edit.php?id=<?php echo $row['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>

                <a href="hapus.php?id=<?php echo $row['id_produk']; ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>