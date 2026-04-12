<?php
require '../config/auth.php';
require '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM menu ORDER BY id DESC");
if (!$data) {
    die("Query menu error: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background:
                linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.65)),
                url('../assets/img/hero.jpg') no-repeat center center/cover;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 270px;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(14px);
            padding: 24px 18px;
            border-right: 1px solid rgba(255,255,255,0.18);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            background: rgba(25,135,84,0.95);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
        }

        .brand-title {
            font-weight: 700;
            font-size: 16px;
            color: white;
        }

        .brand-subtitle {
            font-size: 12px;
            color: rgba(255,255,255,0.75);
        }

        .menu-label {
            font-size: 12px;
            font-weight: 700;
            color: rgba(255,255,255,0.65);
            margin: 14px 10px 10px;
        }

        .sidebar-link {
            display: block;
            text-decoration: none;
            color: white;
            padding: 12px 14px;
            border-radius: 14px;
            margin-bottom: 8px;
            transition: 0.25s;
            font-weight: 500;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.14);
            color: white;
        }

        .sidebar-link.active {
            background: rgba(25,135,84,0.95);
            color: white;
            font-weight: 700;
        }

        .sidebar-card {
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.14);
            color: white;
            border-radius: 20px;
            padding: 18px;
        }

        .main-content {
            flex: 1;
            padding: 28px;
        }

        .topbar-box,
        .table-box {
            background: rgba(255,255,255,0.14);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 22px;
            box-shadow: 0 10px 24px rgba(0,0,0,0.12);
            color: white;
        }

        .topbar-box {
            padding: 22px 24px;
            margin-bottom: 24px;
        }

        .table-box {
            padding: 22px;
        }

        .table {
            color: white;
        }

        .table thead th {
            background: rgba(25,135,84,0.9) !important;
            color: white !important;
            border-color: rgba(255,255,255,0.15) !important;
        }

        .table td {
            background: rgba(255,255,255,0.08) !important;
            color: white !important;
            border-color: rgba(255,255,255,0.08) !important;
            vertical-align: middle;
        }

        .text-muted-custom {
            color: rgba(255,255,255,0.75);
        }

        @media (max-width: 991px) {
            .admin-layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="admin-layout">
    <div class="sidebar">
        <div>
            <div class="brand">
                <div class="brand-icon">T</div>
                <div>
                    <div class="brand-title">Teras Alam Ulin</div>
                    <div class="brand-subtitle">Admin Panel</div>
                </div>
            </div>

            <div class="menu-label">MENU</div>
            <a href="dashboard.php" class="sidebar-link">📊 Dashboard</a>
            <a href="fasilitas.php" class="sidebar-link">🏕 Fasilitas</a>
            <a href="galeri.php" class="sidebar-link">🖼️ Galeri</a>
            <a href="menu.php" class="sidebar-link active">🍽️ Menu</a>
            <a href="testimoni.php" class="sidebar-link">💬 Testimoni</a>

            <div class="menu-label mt-4">GENERAL</div>
            <a href="../index.php" class="sidebar-link">🌐 Lihat Website</a>
            <a href="../logout.php" class="sidebar-link">🚪 Logout</a>
        </div>

        <div class="sidebar-card">
            <div class="small mb-2">Kelola konten utama website</div>
            <div class="fw-semibold mb-3">Atur daftar makanan dan minuman.</div>
            <a href="../index.php" class="btn btn-success btn-sm w-100">Buka Website</a>
        </div>
    </div>

    <div class="main-content">
        <div class="topbar-box d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Data Menu</h2>
                <p class="text-muted-custom mb-0">Kelola data menu yang tampil di website utama.</p>
            </div>
            <a href="tambah_menu.php" class="btn btn-success">+ Tambah Menu</a>
        </div>

        <div class="table-box">
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; while($row = mysqli_fetch_assoc($data)): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($row['nama_menu'] ?? ''); ?></td>
                            <td>Rp<?= number_format($row['harga'] ?? 0, 0, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($row['gambar'] ?? ''); ?></td>
                            <td class="text-end pe-4">
                                <div class="d-inline-flex gap-2">
                                    <a href="edit_menu.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../aksi_hapus_menu.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>