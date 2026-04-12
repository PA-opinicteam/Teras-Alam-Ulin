<?php
require '../config/auth.php';
require '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM wisata ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
        <div class="ms-auto">
            <a href="dashboard.php" class="btn btn-light btn-sm me-2">Dashboard</a>
            <a href="../logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Data Wisata</h2>
        <a href="tambah_wisata.php" class="btn btn-success">+ Tambah Wisata</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div id="app">
                <input type="text" class="form-control mb-3" v-model="keyword" placeholder="Cari nama wisata...">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Nama Wisata</th>
                                <th>Deskripsi</th>
                                <th>Harga Tiket</th>
                                <th>Lokasi</th>
                                <th>Jam Buka</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; while($row = mysqli_fetch_assoc($data)) : ?>
                            <tr v-show="'<?= strtolower(htmlspecialchars($row['nama_wisata'])); ?>'.includes(keyword.toLowerCase())">
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($row['nama_wisata']); ?></td>
                                <td><?= htmlspecialchars($row['deskripsi']); ?></td>
                                <td>Rp<?= number_format($row['harga_tiket'], 0, ',', '.'); ?></td>
                                <td><?= htmlspecialchars($row['lokasi']); ?></td>
                                <td><?= htmlspecialchars($row['jam_buka']); ?></td>
                                <td>
                                    <a href="edit_wisata.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../aksi_hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
Vue.createApp({
    data() {
        return {
            keyword: ''
        }
    }
}).mount('#app');
</script>

</body>
</html>