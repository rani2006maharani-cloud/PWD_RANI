<?php
require_once "Buku.php";
$buku = new Buku();

$id = $_GET['id'];
$data = $buku->getById($id);

if (isset($_POST['submit'])) {
    $buku->update($id, $_POST['judul'], $_POST['penulis'], $_POST['tahun']);
    header("Location: ../index.php");
}
?>
<html>
<head>
    <title>Ubah Buku</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Ubah Buku</h2>
    <form method="POST">
        <input type="text" name="judul" value="<?= $data['judul']; ?>">
        <input type="text" name="penulis" value="<?= $data['penulis']; ?>">
        <input type="number" name="tahun" value="<?= $data['tahun']; ?>">
        <button type="submit" name="submit" class="btn edit">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>
