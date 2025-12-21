<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn,
        "INSERT INTO buku (judul, penulis, tahun)
        VALUES ('$judul', '$penulis', '$tahun')");

    // pindah ke halaman utama setelah simpan
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Data Buku</h2>

<form method="post">
    <label>Judul</label><br>
    <input type="text" name="judul" required><br><br>

    <label>Penulis</label><br>
    <input type="text" name="penulis" required><br><br>

    <label>Tahun</label><br>
    <input type="number" name="tahun" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>
