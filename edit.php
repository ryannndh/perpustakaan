<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE buku SET 
        judul='$judul', 
        penulis='$penulis', 
        tahun='$tahun', 
        status='$status' 
        WHERE id='$id'");
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Edit Buku</h2>

<form method="post">
    <input type="text" name="judul" value="<?= $row['judul'] ?>" required>
    <input type="text" name="penulis" value="<?= $row['penulis'] ?>" required>
    <input type="number" name="tahun" value="<?= $row['tahun'] ?>" required>

    <select name="status">
        <option <?= ($row['status']=='Tersedia')?'selected':'' ?>>Tersedia</option>
        <option <?= ($row['status']=='Dipinjam')?'selected':'' ?>>Dipinjam</option>
    </select>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
