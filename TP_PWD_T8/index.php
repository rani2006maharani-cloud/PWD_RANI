<?php
include "Database.php";
include "Sepatu.php";

$db = new Database();
$conn = $db->connect();

$sepatuObj = new Sepatu($conn);
$data = $sepatuObj->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toko Sepatu</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    </style>
</head>
<body>

    <h1>Daftar Sepatu</h1>

    <div class="container">
        <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="card">
                <div class="nama"><?= $row['nama_sepatu']; ?></div>
                <div class="kategori"><?= $row['nama_kategori']; ?></div>
                <div class="harga">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></div>
            </div>
        <?php } ?>
    </div>

</body>
</html>
