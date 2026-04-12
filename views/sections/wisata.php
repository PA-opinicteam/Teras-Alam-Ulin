<section id="wisata" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Wisata di Samarinda</h2>
            <p class="text-muted">Informasi objek wisata yang tersedia.</p>
        </div>

        <div class="row">
            <?php if ($data_wisata && mysqli_num_rows($data_wisata) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($data_wisata)) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= htmlspecialchars($row['nama_wisata']); ?></h5>
                                <p class="card-text text-muted">
                                    <?= htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 100, "...")); ?>
                                </p>
                                <p class="mb-1"><strong>Harga Tiket:</strong> Rp<?= number_format($row['harga_tiket'], 0, ',', '.'); ?></p>
                                <p class="mb-1"><strong>Lokasi:</strong> <?= htmlspecialchars($row['lokasi']); ?></p>
                                <p class="mb-3"><strong>Jam Buka:</strong> <?= htmlspecialchars($row['jam_buka']); ?></p>
                                <a href="detail_wisata.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        Belum ada data wisata.
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
