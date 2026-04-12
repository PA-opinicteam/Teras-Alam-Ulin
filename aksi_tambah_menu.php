<?php
require 'config/koneksi.php';

$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];

$query = mysqli_query($conn, "INSERT INTO menu (nama_menu, harga, gambar)
VALUES ('$nama_menu', '$harga', '$gambar')");

if ($query) {
    header("Location: admin/menu.php");
    exit;
} else {
    echo "Gagal menambahkan menu: " . mysqli_error($conn);
}
?>