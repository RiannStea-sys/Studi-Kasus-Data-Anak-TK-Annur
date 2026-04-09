<?php
require_once 'database.php';

Class anak_tk extends Database {
    public function simpan($id_anak, $nama_anak, $tanggal_lahir, $jenis_kelamin, $umur_anak) {
        $sql = "INSERT INTO anak_tk (id_anak, nama_anak, tanggal_lahir, jenis_kelamin, umur_anak)
                VALUES ('$id_anak', '$nama_anak', '$tanggal_lahir', '$jenis_kelamin', '$umur_anak')";
        return $this->conn->query($sql);
    }

    public function tampil () {
        $sql = "SELECT * FROM anak_tk ORDER BY id_anak DESC";
        return $this->conn->query($sql);
    }

    
//tambahan pertemuan 6

    public function getById($id_anak) {
        $sql = "SELECT * FROM anak_tk WHERE id_anak='$id_anak'";
        return $this->conn->query($sql);
    }

    public function update($id_anak, $id_anak_lama, $nama_anak, $tanggal_lahir, $jenis_kelamin, $umur_anak) {
        $sql = "UPDATE anak_tk
                SET id_anak= '$id_anak', nama_anak='$nama_anak', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', umur_anak='$umur_anak'
                WHERE id_anak='$id_anak_lama'";
        return $this->conn->query($sql);
    }

    public function delete($id_anak) {
    $sql = "DELETE FROM anak_tk WHERE id_anak='$id_anak'";
    return $this->conn->query($sql);
}
}

?>