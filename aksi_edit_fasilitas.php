<?php
require 'config/koneksi.php';

$id = (int)$_POST['id'];
$nama_fasilitas = $_POST['nama_fasilitas'];
$icon = $_POST['icon'];

$query = mysqli_query($conn, "UPDATE fasilitas SET
nama_fasilitas = '$nama_fasilitas',
icon = '$icon'
WHERE id = $id");

if ($query) {
    header("Location: admin/fasilitas.php");
    exit;
} else {
    echo "Gagal mengedit fasilitas: " . mysqli_error($conn);
}
?>