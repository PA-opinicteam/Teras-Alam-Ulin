<section id="galeri" class="py-5 bg-light">
    <div class="container">
        <p class="text-muted mb-1 text-center">Galeri</p>
        <h2 class="fw-bold text-center mb-4">Galeri Teras Alam Ulin</h2>

        <div id="galeriCarousel" class="carousel slide galeri-carousel" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <?php
                if (isset($galeri) && mysqli_num_rows($galeri) > 0):
                    mysqli_data_seek($galeri, 0);
                    $i = 0;
                    while ($g = mysqli_fetch_assoc($galeri)):
                ?>
                    <button type="button"
                            data-bs-target="#galeriCarousel"
                            data-bs-slide-to="<?= $i; ?>"
                            class="<?= $i === 0 ? 'active' : ''; ?>"
                            aria-current="<?= $i === 0 ? 'true' : 'false'; ?>"
                            aria-label="Slide <?= $i + 1; ?>">
                    </button>
                <?php
                    $i++;
                    endwhile;
                endif;
                ?>
            </div>

            <div class="carousel-inner rounded-4 overflow-hidden">
                <?php
                if (isset($galeri) && mysqli_num_rows($galeri) > 0):
                    mysqli_data_seek($galeri, 0);
                    $no = 0;
                    while ($g = mysqli_fetch_assoc($galeri)):
                ?>
                    <div class="carousel-item <?= $no === 0 ? 'active' : ''; ?>">
                        <div class="galeri-slide-wrapper">
                            <img src="assets/img/<?= htmlspecialchars($g['gambar']); ?>"
                                class="d-block w-100 galeri-slide-img"
                                alt="<?= htmlspecialchars($g['judul'] ?? 'Galeri Teras Alam Ulin'); ?>">

<div class="galeri-overlay">
    <h5 class="mb-1"><?= htmlspecialchars($g['keterangan'] ?? 'Teras Alam Ulin'); ?></h5>
    <p class="mb-0">Galeri Teras Alam Ulin</p>
</div>
                        </div>
                    </div>
                <?php
                        $no++;
                    endwhile;
                else:
                ?>
                    <div class="text-center py-5 text-muted">
                        Belum ada data galeri.
                    </div>
                <?php endif; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galeriCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-galeri-control" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#galeriCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-galeri-control" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
    </div>
</section>