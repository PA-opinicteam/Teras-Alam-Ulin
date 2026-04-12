<?php
require 'config/koneksi.php';

$gambar = $_FILES['gambar']['name'];
$tmp    = $_FILES['gambar']['tmp_name'];

if ($gambar != '') {
    move_uploaded_file($tmp, 'assets/img/' . $gambar);

    $query = mysqli_query($conn, "INSERT INTO galeri (gambar) VALUES ('$gambar')");

    if ($query) {
        header("Location: admin/galeri.php");
        exit;
    } else {
        echo "Gagal menambahkan galeri: " . mysqli_error($conn);
    }
} else {
    echo "File gambar belum dipilih.";
}
?>