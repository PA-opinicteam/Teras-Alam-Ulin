<?php
require '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Tambah Fasilitas</h2>

            <form action="../aksi_tambah_fasilitas.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Fasilitas</label>
                    <input type="text" name="nama_fasilitas" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" placeholder="contoh: bi bi-tree-fill" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="fasilitas.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>