<?php
require 'config/koneksi.php';

$id = (int)$_GET['id'];

$query = mysqli_query($conn, "DELETE FROM galeri WHERE id = $id");

if ($query) {
    header("Location: admin/galeri.php");
    exit;
} else {
    echo "Gagal menghapus galeri: " . mysqli_error($conn);
}
?>