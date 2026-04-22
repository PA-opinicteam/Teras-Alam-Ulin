<?php
require '../config/auth.php';
require '../config/koneksi.php';

$activePage = 'menu';
$query = mysqli_query($conn, "SELECT * FROM menu ORDER BY kategori ASC, nama_menu ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'layout_style.php'; ?>
</head>
<body>
<div class="admin-layout">
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="topbar">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h2>Data Menu</h2>
                    <p>Kelola data menu sesuai website.</p>
                </div>
                <a href="tambah_menu.php" class="btn btn-success">+ Tambah Menu</a>
            </div>
        </div>

        <div class="content-card">
            <h4 class="m-0 text-white mb-4">Daftar Menu</h4>

            <div class="table-responsive">
                <table class="table-dark-glass">
                    <thead>
                        <tr>
                            <th style="width: 70px;">No</th>
                            <th style="width: 220px;">Kategori</th>
                            <th>Nama Menu</th>
                            <th style="width: 150px;">Harga</th>
                            <th style="width: 170px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($query && mysqli_num_rows($query) > 0): ?>
                            <?php $no = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= htmlspecialchars($row['kategori']); ?></td>
                                    <td><?= htmlspecialchars($row['nama_menu']); ?></td>
                                    <td>Rp<?= number_format((int)$row['harga'], 0, ',', '.'); ?></td>
                                    <td>
                                        <a href="edit_menu.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="../aksi/aksi_hapus_menu.php?id=<?= $row['id']; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Yakin hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data menu.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>