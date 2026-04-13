<?php
require '../config/auth.php';
require '../config/koneksi.php';

$activePage = 'testimoni';
$data = mysqli_query($conn, "SELECT * FROM testimoni ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Testimoni</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php include 'layout_style.php'; ?>
</head>
<body>

<div class="admin-layout">
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="topbar">
            <h2>Data Testimoni</h2>
            <p>Kelola seluruh testimoni pengunjung Teras Alam Ulin.</p>
        </div>

        <div class="content-card">
            <h4 class="mb-4">Daftar Testimoni</h4>

            <table class="table-dark-glass">
                <thead>
                    <tr>
                        <th style="width: 80px;">No</th>
                        <th>Nama</th>
                        <th>Komentar</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th style="width: 140px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($data && mysqli_num_rows($data) > 0): ?>
                        <?php $no = 1; while ($row = mysqli_fetch_assoc($data)): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($row['nama'] ?? ''); ?></td>
                                <td><?= htmlspecialchars($row['komentar'] ?? ''); ?></td>
                                <td>
                                    <?php
                                    $rating = (int)($row['rating'] ?? 0);
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo ($i <= $rating) ? '★' : '☆';
                                    }
                                    ?>
                                </td>
                                <td><?= htmlspecialchars($row['status'] ?? ''); ?></td>
                                <td>
                                    <a href="../aksi/aksi_hapus_testimoni.php?id=<?= $row['id']; ?>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Yakin hapus testimoni ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><p class="empty-text">Belum ada data testimoni.</p></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>