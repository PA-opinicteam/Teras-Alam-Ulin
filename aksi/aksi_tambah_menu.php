<?php
require '../config/koneksi.php';

$kategori  = mysqli_real_escape_string($conn, $_POST['kategori']);
$nama_menu = mysqli_real_escape_string($conn, $_POST['nama_menu']);
$harga     = (int) $_POST['harga'];

$query = "INSERT INTO menu (kategori, nama_menu, harga)
          VALUES ('$kategori', '$nama_menu', '$harga')";

if (mysqli_query($conn, $query)) {
    header("Location: ../admin/menu.php");
} else {
    echo "Gagal menambahkan menu.";
}
exit;