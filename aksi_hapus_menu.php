<?php
require 'config/koneksi.php';

$id = (int)$_GET['id'];

$query = mysqli_query($conn, "DELETE FROM menu WHERE id = $id");

if ($query) {
    header("Location: admin/menu.php");
    exit;
} else {
    echo "Gagal menghapus menu: " . mysqli_error($conn);
}
?>