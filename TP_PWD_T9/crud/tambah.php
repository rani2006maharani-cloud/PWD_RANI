<?php
require_once "Buku.php";
$buku = new Buku();

if (isset($_POST['submit'])) {
    $buku->insert($_POST['judul'], $_POST['penulis'], $_POST['tahun']);
    header("Location: ../index.php");
}
?>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Tambah Buku</h2>
    <form method="POST">
        <input type="text" name="judul" placeholder="Judul Buku" required>
        <input type="text" name="penulis" placeholder="Penulis" required>
        <input type="number" name="tahun" placeholder="Tahun Terbit" required>
        <button type="submit" name="submit" class="btn tambah">Simpan</button>
    </form>
</div>

</body>
</html>
