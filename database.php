<?php
class Database {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "studi_kasus");

        if ($this->conn->connect_error) {
            die ("koneksi gagal : " . $this->conn->connect_error);
        }
    }
}
?>