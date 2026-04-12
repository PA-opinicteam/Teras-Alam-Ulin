<?php
require '../config/auth.php';
require '../config/koneksi.php';

$id = (int)$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM galeri WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data galeri tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Edit Galeri</h2>

            <div class="mb-3">
                <label class="form-label">Gambar Saat Ini</label><br>
                <img src="../assets/img/<?= htmlspecialchars($data['gambar']); ?>" width="180" class="img-thumbnail">
            </div>

            <form action="../aksi_edit_galeri.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <input type="hidden" name="gambar_lama" value="<?= htmlspecialchars($data['gambar']); ?>">

                <div class="mb-3">
                    <label class="form-label">Ganti Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="galeri.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>