<?php
require_once __DIR__ . '/../config/koneksi.php';

header('Content-Type: application/json; charset=utf-8');

$nama     = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$komentar = isset($_POST['komentar']) ? trim($_POST['komentar']) : '';
$rating   = isset($_POST['rating']) ? (int) $_POST['rating'] : 0;

if ($nama === '' || $komentar === '' || $rating < 1 || $rating > 5) {
    echo json_encode([
        'success' => false,
        'message' => 'Data tidak lengkap.'
    ]);
    exit;
}

$nama     = mysqli_real_escape_string($conn, $nama);
$komentar = mysqli_real_escape_string($conn, $komentar);

$sql = "INSERT INTO testimoni (nama, komentar, rating, status)
        VALUES ('$nama', '$komentar', '$rating', 'pending')";

if (mysqli_query($conn, $sql)) {
    echo json_encode([
        'success' => true,
        'message' => 'Ulasan berhasil dikirim.'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Gagal menyimpan testimoni: ' . mysqli_error($conn)
    ]);
}
exit;
?>