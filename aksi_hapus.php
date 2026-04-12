<?php
require 'config/koneksi.php';

$id = (int)$_GET['id'];

$query = mysqli_query($conn, "DELETE FROM wisata WHERE id = $id");

if ($query) {
    header("Location: admin/wisata.php");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>