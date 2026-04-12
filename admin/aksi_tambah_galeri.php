<?php
require 'config/koneksi.php';

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, "assets/img/".$gambar);

mysqli_query($conn, "INSERT INTO galeri (gambar) VALUES ('$gambar')");

header("Location: admin/galeri.php");