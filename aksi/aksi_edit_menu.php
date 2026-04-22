<?php
require '../config/koneksi.php';

$id        = (int) $_POST['id'];
$kategori  = mysqli_real_escape_string($conn, $_POST['kategori']);
$nama_menu = mysqli_real_escape_string($conn, $_POST['nama_menu']);
$harga     = (int) $_POST['harga'];

$query = "UPDATE menu
          SET kategori = '$kategori',
              nama_menu = '$nama_menu',
              harga = '$harga'
          WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: ../admin/menu.php");
} else {
    echo "Gagal update data menu.";
}
exit;