<?php
require_once 'database.php';
require_once 'anak_tk.php';

// buat objek
$db = new Database();
$ank = new anak_tk();

// LINE 10 (DIBENERIN) -------------------------------
$id_anak_lama = $_GET['id_anak']; 
// --------------------------------------------------

// ambil data berdasarkan id
$data = $ank->getById($id_anak_lama)->fetch_assoc();

// proses update data
if (isset($_POST['submit'])) {

    // ID tidak berubah
    $id_anak = $id_anak_lama;

    $nama_anak      = $_POST['nama_anak'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $umur_anak      = $_POST['umur_anak'];

    // LINE 44 (DIBENERIN)
    // LINE 51 (DIBENERIN)
    if ($ank->update($id_anak, $id_anak_lama, $nama_anak, $tanggal_lahir, $jenis_kelamin, $umur_anak)) {
        header("Location: index.php?msg=updated");
        exit;
    } else {
        echo "Gagal update data!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Anak TK Annur</title>
</head>
<body>

<h2>Edit Data Anak TK Annur</h2>

<form method="POST">

    Nama Anak:<br>
    <input type="text" name="nama_anak" value="<?= $data['nama_anak'] ?>" required><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" required><br><br>

    Jenis Kelamin:<br>
    <select name="jenis_kelamin" required>
        <option value="Laki-Laki" <?= ($data['jenis_kelamin']=="Laki-Laki") ? "selected" : "" ?>>Laki-Laki</option>
        <option value="Perempuan" <?= ($data['jenis_kelamin']=="Perempuan") ? "selected" : "" ?>>Perempuan</option>
    </select><br><br>

    Umur Anak:<br>
    <input type="number" name="umur_anak" value="<?= $data['umur_anak'] ?>" required><br><br>

    <button type="submit" name="submit">Simpan Perubahan Data</button>
</form>

</body>
</html>