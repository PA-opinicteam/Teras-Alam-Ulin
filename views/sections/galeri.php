<?php if(isset($galeri) && mysqli_num_rows($galeri) > 0) { ?>
    
    <?php while($g = mysqli_fetch_assoc($galeri)) { ?>
        <img src="assets/img/<?php echo $g['gambar']; ?>">
    <?php } ?>

<?php } else { ?>
    <p>Data galeri belum tersedia</p>
<?php } ?>