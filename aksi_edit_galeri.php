<?php
require 'config/koneksi.php';

$id          = (int)$_POST['id'];
$gambar_lama = $_POST['gambar_lama'];

$gambar_baru = $_FILES['gambar']['name'];
$tmp         = $_FILES['gambar']['tmp_name'];

if ($gambar_baru != '') {
    move_uploaded_file($tmp, 'assets/img/' . $gambar_baru);

    $query = mysqli_query($conn, "UPDATE galeri SET gambar = '$gambar_baru' WHERE id = $id");

    if ($query) {
        header("Location: admin/galeri.php");
        exit;
    } else {
        echo "Gagal mengedit galeri: " . mysqli_error($conn);
    }
} else {
    $query = mysqli_query($conn, "UPDATE galeri SET gambar = '$gambar_lama' WHERE id = $id");

    if ($query) {
        header("Location: admin/galeri.php");
        exit;
    } else {
        echo "Gagal mengedit galeri: " . mysqli_error($conn);
    }
}
?>