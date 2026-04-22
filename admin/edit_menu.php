<?php
require '../config/auth.php';
require '../config/koneksi.php';

$activePage = 'menu';

$id = (int) $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: menu.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'layout_style.php'; ?>
</head>
<body>
<div class="admin-layout">
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="topbar">
            <h2>Edit Menu</h2>
            <p>Ubah data menu.</p>
        </div>

        <div class="content-card">
            <form action="../aksi/aksi_edit_menu.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <div class="mb-3">
                    <label class="form-label text-white">Kategori</label>
                    <select name="kategori" class="form-select" required>
                        <option value="Rice Bowl" <?= $data['kategori'] == 'Rice Bowl' ? 'selected' : ''; ?>>Rice Bowl</option>
                        <option value="Snack" <?= $data['kategori'] == 'Snack' ? 'selected' : ''; ?>>Snack</option>
                        <option value="Mocktail" <?= $data['kategori'] == 'Mocktail' ? 'selected' : ''; ?>>Mocktail</option>
                        <option value="Other Drink" <?= $data['kategori'] == 'Other Drink' ? 'selected' : ''; ?>>Other Drink</option>
                        <option value="Milky" <?= $data['kategori'] == 'Milky' ? 'selected' : ''; ?>>Milky</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" value="<?= htmlspecialchars($data['nama_menu']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="menu.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>