<?php
$groupedMenus = [];

if (isset($data_menu) && $data_menu) {
    mysqli_data_seek($data_menu, 0);

    while ($row = mysqli_fetch_assoc($data_menu)) {
        $kategori = $row['kategori'] ?? 'Lainnya';
        $groupedMenus[$kategori][] = $row;
    }
}

$leftCategories = ['Rice Bowl', 'Snack'];
$rightCategories = ['Mocktail', 'Other Drink', 'Milky'];
?>

<section id="menu" class="py-5" style="background:#d8d4b0;">
    <div class="container">
        <p class="text-center mb-2" style="letter-spacing:4px; color:#6c757d; font-size:14px;">MENU</p>
        <h2 class="text-center fw-bold mb-3">Temani Waktu Santai Anda</h2>
        <p class="text-center text-muted mb-5">
            Pilihan makanan dan minuman sederhana untuk menemani pengalaman Anda di Teras Alam Ulin.
        </p>

        <div class="menu-box">
            <div class="row g-4">

                <div class="col-md-6">
                    <?php foreach ($leftCategories as $kategori): ?>
                        <?php if (!empty($groupedMenus[$kategori])): ?>
                            <div class="menu-category-block">
                                <div class="menu-category-title"><?= htmlspecialchars($kategori); ?></div>

                                <?php foreach ($groupedMenus[$kategori] as $item): ?>
                                    <div class="menu-item">
                                        <span class="menu-name"><?= htmlspecialchars($item['nama_menu']); ?></span>
                                        <span class="menu-dots"></span>
                                        <span class="menu-price">
                                            Rp<?= number_format((int)$item['harga'], 0, ',', '.'); ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="col-md-6">
                    <?php foreach ($rightCategories as $kategori): ?>
                        <?php if (!empty($groupedMenus[$kategori])): ?>
                            <div class="menu-category-block">
                                <div class="menu-category-title"><?= htmlspecialchars($kategori); ?></div>

                                <?php foreach ($groupedMenus[$kategori] as $item): ?>
                                    <div class="menu-item">
                                        <span class="menu-name"><?= htmlspecialchars($item['nama_menu']); ?></span>
                                        <span class="menu-dots"></span>
                                        <span class="menu-price">
                                            Rp<?= number_format((int)$item['harga'], 0, ',', '.'); ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>