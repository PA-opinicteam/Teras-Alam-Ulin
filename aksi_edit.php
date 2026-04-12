<?php
require 'config/koneksi.php';

$id          = (int)$_POST['id'];
$nama_wisata = $_POST['nama_wisata'];
$deskripsi   = $_POST['deskripsi'];
$harga_tiket = $_POST['harga_tiket'];
$lokasi      = $_POST['lokasi'];
$jam_buka    = $_POST['jam_buka'];

$query = mysqli_query($conn, "UPDATE wisata SET
    nama_wisata = '$nama_wisata',
    deskripsi = '$deskripsi',
    harga_tiket = '$harga_tiket',
    lokasi = '$lokasi',
    jam_buka = '$jam_buka'
    WHERE id = $id
");

if ($query) {
    header("Location: admin/wisata.php");
    exit;
} else {
    echo "Gagal mengedit data: " . mysqli_error($conn);
}
?>