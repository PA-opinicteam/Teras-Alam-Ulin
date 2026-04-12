<?php
require 'config/koneksi.php';

$nama_fasilitas = $_POST['nama_fasilitas'];
$icon = $_POST['icon'];

$query = mysqli_query($conn, "INSERT INTO fasilitas (nama_fasilitas, icon)
VALUES ('$nama_fasilitas', '$icon')");

if ($query) {
    header("Location: admin/fasilitas.php");
    exit;
} else {
    echo "Gagal menambahkan fasilitas: " . mysqli_error($conn);
}
?>