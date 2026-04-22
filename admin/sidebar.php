<?php
if (!isset($activePage)) {
    $activePage = '';
}
?>
<div class="sidebar">
    <div>
        <div class="brand">
            <div class="brand-icon">
                <img src="../assets/img/logo.jpg" alt="Logo" width="40" height="40" style="object-fit:cover; border-radius:8px;">
            </div>
            <div>
                <div class="brand-title">Teras Alam Ulin</div>
                <div class="brand-subtitle">Admin Panel</div>
            </div>
        </div>

        <div class="menu-label">MENU</div>
        <a href="dashboard.php" class="sidebar-link <?= $activePage === 'dashboard' ? 'active' : ''; ?>">📊 Dashboard</a>
        <a href="fasilitas.php" class="sidebar-link <?= $activePage === 'fasilitas' ? 'active' : ''; ?>">🏕 Fasilitas</a>
        <a href="galeri.php" class="sidebar-link <?= $activePage === 'galeri' ? 'active' : ''; ?>">🖼️ Galeri</a>
        <a href="menu.php" class="sidebar-link <?= $activePage === 'menu' ? 'active' : ''; ?>">🍽️ Menu</a>
        <a href="testimoni.php" class="sidebar-link <?= $activePage === 'testimoni' ? 'active' : ''; ?>">💬 Testimoni</a>

        <div class="menu-label mt-4">GENERAL</div>
        <a href="../index.php" class="sidebar-link">🌐 Lihat Website</a>
        <a href="../logout.php" class="sidebar-link">🚪 Logout</a>
    </div>
</div>