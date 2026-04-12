<?php
require 'config/koneksi.php';

$id = (int)$_GET['id'];

$query = mysqli_query($conn, "DELETE FROM fasilitas WHERE id = $id");

if ($query) {
    header("Location: admin/fasilitas.php");
    exit;
} else {
    echo "Gagal menghapus fasilitas: " . mysqli_error($conn);
}
?>