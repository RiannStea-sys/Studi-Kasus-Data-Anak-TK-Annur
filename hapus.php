<?php
require_once 'database.php';
require_once 'anak_tk.php';

$db = new Database();
$ank = new anak_tk($db);

// cek apakah id ada di URL
if (!isset($_GET['id'])) {
    header("Location: index.php?msg=invalid_id");
    exit;
}

// ambil id
$id_anak = intval($_GET['id']);

// hapus data
$ank->delete($id_anak);

// redirect setelah hapus
header("Location: index.php?msg=deleted");
exit;
?>