<section id="fasilitas" class="section-cream py-5">
<div class="container">
<p class="text-muted mb-1">Fasilitas</p>
<h2 class="fw-bold mb-5 text-center">Yang Bisa Kamu Nikmati di Sini</h2>

<div class="row g-4">

<?php if(isset($fasilitas) && mysqli_num_rows($fasilitas) > 0) { ?>
    <?php while($f = mysqli_fetch_assoc($fasilitas)) { ?>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="fasilitas-card">
            <div class="fasilitas-image">
                <img src="assets/img/<?php echo $f['gambar']; ?>" alt="<?php echo $f['nama']; ?>">
            </div>
            <div class="fasilitas-content">
                <h5><?php echo $f['nama']; ?></h5>
                <p><?php echo $f['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>

<div class="col-12 col-md-6 col-lg-3">
    <div class="fasilitas-card">
        <div class="fasilitas-image">
            <img src="assets/img/paddleboard.jpg" alt="Paddleboard">
        </div>
        <div class="fasilitas-content">
            <h5>Paddleboard</h5>
            <p>Aktivitas air seru dan menyehatkan di tengah alam.</p>
        </div>
    </div>
</div>

</div>
</div>
</section>