<?php
require_once 'anak_tk.php';

// buat objek
$ank = new anak_tk();

// ambil semua data
$data = $ank->tampil();

// pesan sukses
$pesan = "";
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'added') $pesan = "Data berhasil ditambahkan!";
    if ($_GET['msg'] == 'updated') $pesan = "Data berhasil diupdate!";
    if ($_GET['msg'] == 'deleted') $pesan = "Data berhasil dihapus!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pengisian Data Anak TK Annur</title>
    <link rel="stylesheet" href="warna.css">
</head>
<body>

    <h2>Data Anak-Anak TK Annur</h2>

    <?php if ($pesan != ""): ?>
        <div class="alert"><?= $pesan ?></div>
    <?php endif; ?>

    <a class="btn tambah" href="tambah.php">+ Tambah Data</a>

    <table>
        <tr>
            <th>ID Anak</th>
            <th>Nama Anak</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($data as $anak): ?>
        <tr>
            <td><?= $anak['id_anak'] ?></td>
            <td><?= $anak['nama_anak'] ?></td>
            <td><?= $anak['tanggal_lahir'] ?></td>
            <td><?= $anak['jenis_kelamin'] ?></td>
            <td><?= $anak['umur_anak'] ?></td>
            <td>
                <a class="btn edit" href="edit.php?id=<?= $anak['id_anak'] ?>">Edit</a>
                <a class="btn hapus" href="hapus.php?id=<?= $anak['id_anak'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>