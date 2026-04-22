<?php
require '../config/auth.php';
require '../config/koneksi.php';

$activePage = 'menu';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'layout_style.php'; ?>
</head>
<body>
<div class="admin-layout">
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="topbar">
            <h2>Tambah Menu</h2>
            <p>Tambahkan menu baru.</p>
        </div>

        <div class="content-card">
            <form action="../aksi/aksi_tambah_menu.php" method="POST">
                <div class="mb-3">
                    <label class="form-label text-white">Kategori</label>
                    <select name="kategori" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Rice Bowl">Rice Bowl</option>
                        <option value="Snack">Snack</option>
                        <option value="Mocktail">Mocktail</option>
                        <option value="Other Drink">Other Drink</option>
                        <option value="Milky">Milky</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="menu.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>