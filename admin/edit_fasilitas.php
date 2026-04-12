<?php
require '../config/auth.php';
require '../config/koneksi.php';

$id = (int)$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM fasilitas WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Edit Fasilitas</h2>

            <form action="../aksi_edit_fasilitas.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Fasilitas</label>
                    <input type="text" name="nama_fasilitas" class="form-control" value="<?= htmlspecialchars($data['nama_fasilitas']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" value="<?= htmlspecialchars($data['icon']); ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="fasilitas.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>