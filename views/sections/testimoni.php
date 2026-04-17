<section id="testimoni" class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center fw-bold mb-2">Apa Kata Mereka?</h2>
        <p class="text-center text-muted mb-5">Beberapa ulasan pengunjung Teras Alam Ulin.</p>

        <?php if (isset($testimoni) && $testimoni && mysqli_num_rows($testimoni) > 0) { ?>
            <div class="testimoni-review-wrapper">
                <div class="row justify-content-center g-4 mb-5">
                    <?php while ($t = mysqli_fetch_assoc($testimoni)) { ?>
                        <div class="col-12 col-md-4 d-flex justify-content-center">
                            <div class="testimoni-card">
                                <h5 class="fw-bold"><?php echo htmlspecialchars($t['nama']); ?></h5>

                                <div class="rating">
                                    <?php
                                    $rating = (int)($t['rating'] ?? 0);
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo $i <= $rating ? '★' : '☆';
                                    }
                                    ?>
                                </div>

                                <p>“<?php echo htmlspecialchars($t['pesan'] ?? $t['komentar'] ?? ''); ?>”</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <hr style="max-width:1100px; margin:0 auto 40px;">

        <div id="appTestimoni" class="testimoni-form-wrapper">
            <h3 class="text-center fw-bold mb-4">Beri Ulasan</h3>

            <form id="formTestimoni" class="testimoni-form">
                <div class="mb-3">
                    <input type="text" name="nama" class="form-control" placeholder="Nama" v-model="nama" required>
                </div>

                <div class="mb-3">
                    <textarea name="pesan" class="form-control" rows="5" placeholder="Komentar" v-model="komentar" required></textarea>
                </div>

<input type="hidden" name="rating" id="ratingInput" value="0">

                <div class="rating-input text-center mb-2">
                    <span @click="rating=1" :class="{ active: rating>=1 }">★</span>
                    <span @click="rating=2" :class="{ active: rating>=2 }">★</span>
                    <span @click="rating=3" :class="{ active: rating>=3 }">★</span>
                    <span @click="rating=4" :class="{ active: rating>=4 }">★</span>
                    <span @click="rating=5" :class="{ active: rating>=5 }">★</span>
                </div>

                <p class="text-center text-muted small mb-4">
                    {{ rating > 0 ? 'Rating: ' + rating + ' bintang' : 'Pilih rating' }}
                </p>

                <div id="notifTestimoni" class="alert alert-success text-center d-none mb-3">
                    Ulasan berhasil dikirim.
                </div>

                <div id="errorTestimoni" class="alert alert-danger text-center d-none mb-3">
                    Gagal mengirim ulasan.
                </div>

                <button type="submit" class="btn btn-success w-100">Kirim Testimoni</button>
            </form>
        </div>

    </div>
</section>