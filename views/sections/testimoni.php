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