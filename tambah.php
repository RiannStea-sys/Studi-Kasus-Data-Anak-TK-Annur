<?php
require_once 'database.php';
require_once 'anak_tk.php';

$db = new Database();
$ank = new anak_tk($db);

if (isset($_POST['submit'])) {
    
    $id_anak        = $_POST['id_anak'];
    $nama_anak      = $_POST['nama_anak'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $umur_anak      = $_POST['umur_anak'];

    // Simpan data
    if ($ank->simpan($id_anak, $nama_anak, $tanggal_lahir, $jenis_kelamin, $umur_anak)) {
        header("Location: index.php?msg=added");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Anak TK Annur</title>
</head>
<body>

<h2>Tambah Data Anak TK Annur</h2>

<form id="formTambah" method="POST">
    
    ID Anak:<br>
    <input type="text" name="id_anak"><br><br>

    Nama Anak:<br>
    <input type="text" name="nama_anak"><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir"><br><br>

    Jenis Kelamin:<br>
    <select name="jenis_kelamin">
        <option value="">---Pilih---</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br><br>

    Umur Anak:<br>
    <input type="number" name="umur_anak"><br><br>

    <button type="submit" name="submit">Tambah Data</button>

</form>

<script>
// Validasi form sebelum submit
document.getElementById("formTambah").onsubmit = function() {

    let f = document.forms["formTambah"];

    if (
        f["id_anak"].value == "" ||
        f["nama_anak"].value == "" ||
        f["tanggal_lahir"].value == "" ||
        f["jenis_kelamin"].value == "" ||
        f["umur_anak"].value == ""
    ) {
        alert("Semua field harus diisi!");
        return false;
    }
};
</script>

</body>
</html>