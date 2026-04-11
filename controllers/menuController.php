<?php
// Pastikan koneksi sudah ada
require_once 'config/koneksi.php';

// Ambil data menu dari database
$query = "SELECT * FROM menu ORDER BY id DESC";
$menu = mysqli_query($conn, $query);

// Cek error query (biar gampang debug)
if(!$menu){
    die("Query menu gagal: " . mysqli_error($conn));
}
?>