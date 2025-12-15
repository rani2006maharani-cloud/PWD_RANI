<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 1) {
    die("Akses ditolak!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
   
</head>

<body>

    <div class="header">
        <h1>Dashboard User</h1>
        <p>Selamat datang, <?= htmlspecialchars($_SESSION['username']); ?>!</p>
    </div>


        <a class="logout" href="logout.php">Logout</a>
    </div>

</body>

</html>