<?php
require_once __DIR__ . "/../Database.php";

class Buku {
    private $conn;
    private $table = "buku";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $query = $this->conn->prepare("SELECT * FROM $this->table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($judul, $penulis, $tahun) {
        $query = $this->conn->prepare(
            "INSERT INTO $this->table (judul, penulis, tahun)
             VALUES (?, ?, ?)"
        );
        return $query->execute([$judul, $penulis, $tahun]);
    }

    public function getById($id) {
        $query = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $judul, $penulis, $tahun) {
        $query = $this->conn->prepare(
            "UPDATE $this->table SET judul=?, penulis=?, tahun=? WHERE id=?"
        );
        return $query->execute([$judul, $penulis, $tahun, $id]);
    }

    public function delete($id) {
        $query = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        return $query->execute([$id]);
    }
}
