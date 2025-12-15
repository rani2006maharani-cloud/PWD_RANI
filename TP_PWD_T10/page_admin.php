<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 0) {
    die("Akses ditolak!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    
       
</head>

<body>

    <div class="header">
        <h1>Dashboard Admin</h1>
        <p>Halo, <?= htmlspecialchars($_SESSION['username']); ?>!</p>
    </div>

        <a class="logout" href="logout.php">Logout</a>
    </div>

</body>

</html>