<?php require_once 'config/koneksi.php'; ?>

<?php
require_once 'controllers/fasilitasController.php';
require_once 'controllers/galeriController.php';
require_once 'controllers/menuController.php';
require_once 'controllers/testimoniController.php';
require_once 'controllers/reservasiController.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Teras Alam Ulin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
<div class="container">
    <a class="navbar-brand fw-bold text-success" href="#">TERAS ALAM ULIN</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
            <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
            <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
            <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="#reservasi">Kontak</a></li>
        </ul>

        <a href="#reservasi" class="btn btn-success rounded-3">Reservasi Sekarang</a>
    </div>
</div>
</nav>

<!-- HERO -->
<section class="hero d-flex align-items-center">
<div class="container hero-content text-center">
    <h1 class="fw-bold display-5">
        Tempat Healing & Rekreasi <br> Keluarga di Samarinda
    </h1>
    <p>Nikmati terapi ikan, pemancingan, dan aktivitas seru bersama keluarga.</p>

    <a href="#reservasi" class="btn btn-success me-2">Reservasi Sekarang</a>
    <a href="#fasilitas" class="btn btn-outline-light">Lihat Fasilitas</a>
</div>
</section>

<!-- TENTANG -->
<section id="tentang" class="section bg-light">
<div class="container">

<p class="text-muted mb-1">Tentang</p>
<h2 class="fw-bold mb-3">Teras Alam Ulin</h2>

<div class="row tentang-row">

    <!-- IMAGE -->
    <div class="col-md-6 mb-4 tentang-img-wrapper">
        <img src="assets/img/tentang.jpg" class="tentang-img">
    </div>

    <!-- CONTENT -->
    <div class="col-md-6">
        <p>
        Teras Alam Ulin merupakan destinasi wisata keluarga di Samarinda yang menawarkan suasana alam yang asri dan menenangkan.
        </p>

        <p>
        Tempat ini memanfaatkan kolam bekas tambang yang diubah menjadi area rekreasi, sehingga memberikan pengalaman unik bagi setiap pengunjung.
        </p>

        <p>
        Dengan konsep wisata keluarga dan komunitas, Teras Alam Ulin menjadi pilihan yang tepat untuk berbagai kegiatan seperti arisan, gathering, hingga aktivitas santai bersama keluarga.
        </p>

        <!-- HIGHLIGHT -->
        <div class="row mt-4 g-3">
            <div class="col-6 mb-3">
                <div class="highlight-box">
                    ✔ Terapi ikan sebagai daya tarik utama
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="highlight-box">
                    ✔ Cocok untuk kegiatan keluarga dan komunitas
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="highlight-box">
                    ✔ Suasana alam yang nyaman dan asri
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="highlight-box">
                    ✔ Beragam aktivitas rekreasi dalam satu tempat
                </div>
            </div>

        </div>

        <!-- STATS -->
        <div class="row mt-3 text-center">
            <div class="col-4">
                <h6 class="fw-bold text-success">2022</h6>
                <small class="text-muted">Mulai Beroperasi</small>
            </div>

            <div class="col-4">
                <h6 class="fw-bold text-success">Rp10.000</h6>
                <small class="text-muted">Tiket Masuk</small>
            </div>

            <div class="col-4">
                <h6 class="fw-bold text-success">5+ Fasilitas</h6>
                <small class="text-muted">Tersedia</small>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="btn-wrapper mt-4">
            <a href="#fasilitas" class="btn btn-primary-custom btn-full">
                Lihat Fasilitas →
            </a>
            <a href="#reservasi" class="btn btn-outline-custom btn-full">
                Reservasi Sekarang
            </a>
        </div>
    </div>

</div>
</div>
</section>

<!-- FASILITAS -->
<section id="fasilitas" class="py-5" style="background:#F5F5DC;">
<div class="container">
<p class="text-muted mb-1">Fasilitas</p>
<h2 class="fw-bold mb-3">Fasilitas Unggulan</h2>

<div class="row">
<?php if(isset($fasilitas) && mysqli_num_rows($fasilitas) > 0) { ?>
    <?php while($f = mysqli_fetch_assoc($fasilitas)) { ?>
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow rounded-4">
            <img src="assets/img/<?php echo $f['gambar']; ?>" class="card-img-top" style="height:200px;object-fit:cover;">
            <div class="card-body">
                <h5><?php echo $f['nama']; ?></h5>
                <p><?php echo $f['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } else { ?>
    <p>Data fasilitas belum tersedia</p>
<?php } ?>
</div>
</div>
</section>

<!-- GALERI -->
<section id="galeri" class="py-5 bg-light">
<div class="container">
<p class="text-center mb-1">Galeri</p>
<h2 class="fw-bold text-center mb-4">Galeri Wisata</h2>

<div class="row">
<?php if(isset($galeri) && mysqli_num_rows($galeri) > 0) { ?>
    <?php while($g = mysqli_fetch_assoc($galeri)) { ?>
        <div class="col-md-4 mb-4">
            <img src="assets/img/<?php echo $g['gambar']; ?>" class="img-fluid rounded-4">
        </div>
    <?php } ?>
<?php } else { ?>
    <p class="text-center">Data galeri belum tersedia</p>
<?php } ?>
</div>

<div class="mt-5">
    <a href="#" class="btn-galeri-full text-center d-block">
        Lihat Galeri Lengkap →
    </a>
</div>
</div>
</section>

<!-- TESTIMONI -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>

        <div class="row">
            <?php if(isset($testimoni) && mysqli_num_rows($testimoni) > 0) { ?>
                <?php while($t = mysqli_fetch_assoc($testimoni)) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card testimoni-card shadow">
                        <p>"<?php echo $t['komentar']; ?>"</p>
                        <div class="rating">
                        <?php
                        for($i = 1; $i <= 5; $i++){
                            if($i <= $t['rating']){
                                echo "★";
                            } else {
                                echo "☆";
                            }
                        }
                        ?>
                        </div>
                        <h6><?php echo $t['nama']; ?></h6>
                    </div>
                </div>
                <?php } ?>
            <?php } else { ?>
                <p>Belum ada testimoni</p>
            <?php } ?>
        </div>
                <!-- FORM TESTIMONI -->
        <form method="POST" class="mt-5">
            <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
            <textarea name="komentar" class="form-control mb-2" placeholder="Komentar" required></textarea>

            <div class="rating-input mb-3">
                <input type="hidden" name="rating" id="rating-value" value="5">
                <span data-value="1">★</span>
                <span data-value="2">★</span>
                <span data-value="3">★</span>
                <span data-value="4">★</span>
                <span data-value="5">★</span>
            </div>

            <button name="kirim_testimoni" class="btn btn-success w-100">
                Kirim Testimoni
            </button>
        </form>
    </div>
</section>


<!-- MENU -->
<section id="menu" class="py-5" style="background:#F5F5DC;">
<div class="container">
<h2 class="fw-bold mb-4">Menu Kantin</h2>

<div class="row">
<?php if(isset($menu) && mysqli_num_rows($menu) > 0) { ?>
    <?php while($m = mysqli_fetch_assoc($menu)) { ?>
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow rounded-4">
            <img src="assets/img/<?php echo $m['gambar']; ?>" style="height:150px;object-fit:cover;">
            <div class="card-body">
                <h6><?php echo $m['nama_menu']; ?></h6>
                <p class="text-success">Rp<?php echo number_format($m['harga']); ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } else { ?>
    <p>Menu belum tersedia</p>
<?php } ?>
</div>
</div>
</section>





<!-- RESERVASI -->
<section id="reservasi" class="section-cream">
<div class="container">
<div class="row align-items-center">

    <!-- LEFT CONTENT -->
    <div class="col-md-6 mb-4">
        <h2 class="fw-bold mb-3">Rencanakan Kunjungan Anda</h2>
        <p class="text-muted">
            Pastikan tempat untuk acara keluarga, gathering, atau sekadar kunjungan akhir pekan Anda.
            Tim kami akan segera menghubungi Anda untuk konfirmasi.
        </p>
        <div class="mt-4">
            <div class="d-flex align-items-start mb-3">
                <div class="icon-box me-3">✔</div>
                <div>
                    <strong>Reservasi Fleksibel</strong>
                    <p class="mb-0 small text-muted">Ubah jadwal hingga 24 jam sebelum kedatangan.</p>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="icon-box me-3">👥</div>
                <div>
                    <strong>Paket Gathering</strong>
                    <p class="mb-0 small text-muted">Harga khusus untuk rombongan lebih dari 20 orang.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT FORM CARD -->
    <div class="col-md-6">
        <div class="reservasi-card">
            <form id="formReservasi">
                <div class="row g-3">
                    <div class="col-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Tanggal Kunjungan</label>
                        <input type="date" id="tanggal" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Jumlah Orang</label>
                        <input type="number" id="jumlah" class="form-control" placeholder="Contoh: 5">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Jenis Acara</label>
                        <select id="jenis" class="form-control">
                            <option>Keluarga</option>
                            <option>Gathering</option>
                        </select>
                    </div>
                </div>
                <button type="button" onclick="kirimWhatsApp()" class="btn btn-success w-100 mt-4">
                    Kirim Reservasi
                </button>
                <div class="text-center my-3 text-muted">Atau</div>
                <a href="https://wa.me/6281258254443" target="_blank" class="btn btn-outline-success w-100">
                    Reservasi via WhatsApp
                </a>
            </form>
        </div>
    </div>
</div>
</div>
</section>

<!-- LOKASI -->
<section id="lokasi" class="section section-light">
<div class="container">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Lokasi & Jam Operasional</h2>
        <p class="text-muted">
            Temukan ketenangan di tengah rimbunnya hutan Kalimantan.
            Kami mengundang Anda untuk merasakan harmoni alam di Teras Alam Ulin.
        </p>
    </div>

    <div class="row g-4 align-items-center">

        <!-- LEFT CARD -->
        <div class="col-md-6">
            <div class="lokasi-card">

                <!-- ALAMAT -->
                <div class="mb-4">
                    <h6 class="lokasi-title">📍 Alamat</h6>
                    <p>
                        Jl. Alam Ulin No. 123, Kelurahan Mugirejo,
                        Kecamatan Sungai Pinang, Samarinda.
                    </p>
                </div>

                <!-- JAM -->
                <div class="mb-4">
                    <h6 class="lokasi-title">🕒 Jam Operasional</h6>

                    <div class="jadwal-item">
                        <span>Senin - Kamis</span>
                        <span>09:00 - 18:00</span>
                    </div>

                    <div class="jadwal-item">
                        <span>Jumat</span>
                        <span class="badge-tutup">Tutup</span>
                    </div>

                    <div class="jadwal-item">
                        <span>Sabtu - Minggu</span>
                        <span>09:00 - 18:00</span>
                    </div>
                </div>

                <a href="#" class="btn btn-success w-100">
                    Buka di Google Maps →
                </a>

            </div>
        </div>

        <!-- RIGHT MAP -->
        <div class="col-md-6">
            <div class="map-card">
                <iframe 
                    src="https://www.google.com/maps?q=samarinda&output=embed"
                    width="100%" height="100%" 
                    style="border:0;" 
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

                <!-- LABEL -->
                <div class="map-label">
                    📍 Teras Alam Ulin <br>
                    <small>Samarinda, East Kalimantan</small>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- FOOTER -->
<footer class="py-4 text-center">
<p>© 2026 Teras Alam Ulin</p>
</footer>
<script src="assets/js/rating.js"></script>
<script src="assets/js/reservasi.js"></script>
</body>
</html>