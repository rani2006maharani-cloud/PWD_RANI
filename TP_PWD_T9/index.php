<?php
require_once "crud/Buku.php";
$buku = new Buku();
$data = $buku->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Buku</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">PerpusKu</div>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="crud/tambah.php">Tambah Buku</a></li>
        <li><a href="#">About</a></li>
    </ul>
</nav>


<div class="container mt-4 p-4 bg-white rounded shadow">
    <h2 class="mb-4">Daftar Buku</h2>

    <a class="btn btn-success mb-3" href="crud/tambah.php">+ Tambah Buku</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['penulis']; ?></td>
                <td><?= $row['tahun']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="crud/ubah.php?id=<?= $row['id']; ?>">Ubah</a>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $row['id']; ?>)">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
