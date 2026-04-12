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
            background:
                linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.55)),
                url('../assets/img/hero.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 270px;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(10px);
            padding: 24px 18px;
            border-right: 1px solid rgba(255,255,255,0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #198754;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .brand-title {
            font-weight: 700;
            font-size: 16px;
        }

        .brand-subtitle {
            font-size: 12px;
            color: #6b7280;
        }

        .menu-label {
            font-size: 12px;
            font-weight: 700;
            color: #9ca3af;
            margin: 12px 10px 10px;
        }

        .sidebar-link {
            display: block;
            text-decoration: none;
            color: #374151;
            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 8px;
            transition: 0.2s;
            font-weight: 500;
        }

        .sidebar-link:hover {
            background: #f3f4f6;
            color: #111827;
        }

        .sidebar-card {
            background: linear-gradient(135deg, #111827, #198754);
            color: white;
            border-radius: 18px;
            padding: 18px;
            margin-top: 20px;
        }

        .main-content {
            flex: 1;
            padding: 28px;
        }

        .topbar {
            background: rgba(255,255,255,0.92);
            border-radius: 20px;
            padding: 22px 24px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            margin-bottom: 24px;
        }

        .topbar h2 {
            margin: 0;
            font-weight: 700;
        }

        .topbar p {
            margin: 6px 0 0;
            color: #6b7280;
        }

        .stat-card {
            background: rgba(255,255,255,0.92);
            border: none;
            border-radius: 20px;
            padding: 22px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            height: 100%;
        }

        .stat-title {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 36px;
            font-weight: 700;
            color: #198754;
            margin: 0;
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
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="topbar">
            <div>
                <h2>Dashboard</h2>
                <p>Kelola fasilitas, galeri, menu, dan testimoni website utama.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Total Fasilitas</div>
                    <p class="stat-value"><?= $total_fasilitas; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Total Galeri</div>
                    <p class="stat-value"><?= $total_galeri; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Total Menu</div>
                    <p class="stat-value"><?= $total_menu; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Total Testimoni</div>
                    <p class="stat-value"><?= $total_testimoni; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>