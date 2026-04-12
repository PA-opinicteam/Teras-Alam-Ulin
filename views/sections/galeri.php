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
