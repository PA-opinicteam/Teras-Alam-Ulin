<?php
require '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-4">Tambah Menu</h2>

            <form action="../aksi_tambah_menu.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="text" name="gambar" class="form-control" placeholder="contoh: menu1.jpg" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="menu.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>