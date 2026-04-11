<section id="fasilitas">
<div class="container">
<div class="row">

<?php while($f = mysqli_fetch_assoc($fasilitas)) { ?>
<div class="col-md-4">
    <div class="card">
        <img src="../assets/img/<?php echo $f['gambar']; ?>">
        <h5><?php echo $f['nama']; ?></h5>
        <p><?php echo $f['deskripsi']; ?></p>
    </div>
</div>
<?php } ?>

</div>
</div>
</section>