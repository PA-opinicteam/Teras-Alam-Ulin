<?php
session_start();
require 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

if (!$query) {
    die("Query error: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];

    header("Location: admin/dashboard.php");
    exit;
} else {
    echo "<script>
        alert('Login gagal!');
        window.location='login.php';
    </script>";
}
?>