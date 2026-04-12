<?php
require '../config/auth.php';
require '../config/koneksi.php';

$id = (int)$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Edit Menu</h2>

            <form action="../aksi_edit_menu.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" value="<?= htmlspecialchars($data['nama_menu']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= htmlspecialchars($data['harga']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="text" name="gambar" class="form-control" value="<?= htmlspecialchars($data['gambar']); ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="menu.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>