<?php
require 'config/koneksi.php';

$nama_wisata = $_POST['nama_wisata'];
$deskripsi   = $_POST['deskripsi'];
$harga_tiket = $_POST['harga_tiket'];
$lokasi      = $_POST['lokasi'];
$jam_buka    = $_POST['jam_buka'];

$query = mysqli_query($conn, "INSERT INTO wisata (
    nama_wisata,
    deskripsi,
    harga_tiket,
    lokasi,
    jam_buka
) VALUES (
    '$nama_wisata',
    '$deskripsi',
    '$harga_tiket',
    '$lokasi',
    '$jam_buka'
)");

if ($query) {
    header("Location: admin/wisata.php");
    exit;
} else {
    echo "Gagal menambahkan data: " . mysqli_error($conn);
}
?>