<?php
require_once 'mahasiswa.php';

$ank = new anak_tk();

//Create (simpan data)
if (isset($_POST['simpan'])) {

    
    $id_anak = $_POST['id_anak'];
    $nama_anak = $_POST['nama_anak'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $umur_anak = $_POST['umur_anak'];

    if ($ank->simpan($id_anak, $nama_anak, $tanggal_lahir, $jenis_kelamin, $umur_anak)) {
        //cegah data double saat refresh
        header("Location: index.php");
        exit;
    }
}
?>
