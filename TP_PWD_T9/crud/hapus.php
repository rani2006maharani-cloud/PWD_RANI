<?php
require_once "Buku.php";
$buku = new Buku();

$id = $_GET['id'];
$buku->delete($id);

header("Location: ../index.php");
