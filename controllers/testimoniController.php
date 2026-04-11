<?php
require_once 'config/koneksi.php';

$query = "SELECT * FROM testimoni 
          WHERE status = 'approved' 
          ORDER BY id DESC 
          LIMIT 3";

$testimoni = mysqli_query($conn, $query);

if(isset($_POST['kirim_testimoni'])){

    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $rating = $_POST['rating'];

    $query = "INSERT INTO testimoni (nama, komentar, rating, status) 
              VALUES ('$nama', '$komentar', '$rating', 'pending')";

    mysqli_query($conn, $query);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>