<?php
require '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Tambah Galeri</h2>

            <form action="../aksi_tambah_galeri.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Upload Gambar</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="galeri.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>