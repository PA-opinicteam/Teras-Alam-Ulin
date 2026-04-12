<?php
require 'config/koneksi.php';

$id = (int)$_POST['id'];
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];

$query = mysqli_query($conn, "UPDATE menu SET
nama_menu = '$nama_menu',
harga = '$harga',
gambar = '$gambar'
WHERE id = $id");

if ($query) {
    header("Location: admin/menu.php");
    exit;
} else {
    echo "Gagal mengedit menu: " . mysqli_error($conn);
}
?>