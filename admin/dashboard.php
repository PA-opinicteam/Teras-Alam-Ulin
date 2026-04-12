<?php
require '../config/auth.php';
require '../config/koneksi.php';

$total_fasilitas = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM fasilitas"));
$total_galeri    = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM galeri"));
$total_menu      = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM menu"));
$total_testimoni = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM testimoni"));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
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
            -webkit-backdrop-filter: blur(14px);
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
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
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
            letter-spacing: 0.5px;
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
            background: transparent;
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
            margin-top: 20px;
        }

        .main-content {
            flex: 1;
            padding: 28px;
        }

        .topbar {
            background: rgba(255,255,255,0.14);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 24px;
            padding: 24px 26px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            margin-bottom: 26px;
            color: white;
        }

        .topbar h2 {
            margin: 0;
            font-weight: 700;
            font-size: 30px;
        }

        .topbar p {
            margin: 8px 0 0;
            color: rgba(255,255,255,0.78);
        }

        .stat-card {
            background: rgba(255,255,255,0.14);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 10px 24px rgba(0,0,0,0.12);
            height: 100%;
            color: white;
            transition: 0.25s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
        }

        .stat-title {
            font-size: 14px;
            color: rgba(255,255,255,0.78);
            margin-bottom: 12px;
        }

        .stat-value {
            font-size: 38px;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
        }

        .stat-icon {
            font-size: 26px;
            margin-bottom: 10px;
        }

        @media (max-width: 991px) {
            .admin-layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .topbar h2 {
                font-size: 24px;
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
            <a href="dashboard.php" class="sidebar-link active">📊 Dashboard</a>
            <a href="fasilitas.php" class="sidebar-link">🏕 Fasilitas</a>
            <a href="galeri.php" class="sidebar-link">🖼️ Galeri</a>
            <a href="menu.php" class="sidebar-link">🍽️ Menu</a>
            <a href="testimoni.php" class="sidebar-link">💬 Testimoni</a>

            <div class="menu-label mt-4">GENERAL</div>
            <a href="../index.php" class="sidebar-link">🌐 Lihat Website</a>
            <a href="../logout.php" class="sidebar-link">🚪 Logout</a>
        </div>

        <div class="sidebar-card">
            <div class="small mb-2">Kelola konten utama website</div>
            <div class="fw-semibold mb-3">Semua data website bisa diatur dari panel admin ini.</div>
            <a href="../index.php" class="btn btn-success btn-sm w-100">Buka Website</a>
        </div>
    </div>

    <div class="main-content">
        <div class="topbar">
            <h2>Dashboard Admin</h2>
            <p>Selamat datang di panel pengelolaan Teras Alam Ulin.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-icon">🏕</div>
                    <div class="stat-title">Total Fasilitas</div>
                    <p class="stat-value"><?= $total_fasilitas; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-icon">🖼️</div>
                    <div class="stat-title">Total Galeri</div>
                    <p class="stat-value"><?= $total_galeri; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-icon">🍽️</div>
                    <div class="stat-title">Total Menu</div>
                    <p class="stat-value"><?= $total_menu; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-icon">💬</div>
                    <div class="stat-title">Total Testimoni</div>
                    <p class="stat-value"><?= $total_testimoni; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>