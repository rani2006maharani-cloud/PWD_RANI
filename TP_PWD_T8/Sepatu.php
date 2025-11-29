<?php
class Sepatu {
    private $conn;
    private $table = "sepatu";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT sepatu.nama_sepatu, sepatu.harga, kategori.nama_kategori 
                  FROM sepatu 
                  INNER JOIN kategori 
                  ON sepatu.id_kategori = kategori.id_kategori";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
?>
