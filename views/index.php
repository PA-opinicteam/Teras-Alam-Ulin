<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/koneksi.php';

require_once 'controllers/fasilitasController.php';
require_once 'controllers/galeriController.php';
require_once 'controllers/testimoniController.php';
require_once 'controllers/reservasiController.php';

$data_wisata = mysqli_query($conn, "SELECT * FROM wisata ORDER BY id DESC");
$data_menu   = mysqli_query($conn, "SELECT * FROM menu ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teras Alam Ulin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=6">
</head>
<body>

<?php include 'views/components/navbar.php'; ?>

<?php include 'views/sections/hero.php'; ?>
<?php include 'views/sections/tentang.php'; ?>
<?php include 'views/sections/wisata.php'; ?>
<?php include 'views/sections/fasilitas.php'; ?>
<?php include 'views/sections/galeri.php'; ?>
<?php include 'views/sections/testimoni.php'; ?>
<?php include 'views/sections/menu.php'; ?>
<?php include 'views/sections/reservasi.php'; ?>
<?php include 'views/sections/lokasi.php'; ?>

<?php include 'views/components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/reservasi.js?v=3"></script>

<!-- Penerapan vue js -->
<script>
const { createApp } = Vue;

/* ================= MENU ================= */
const appMenu = document.getElementById('appMenu');
if (appMenu) {
    createApp({
        data() {
            return {
                menus: []
            };
        },  
        mounted() {
            fetch('controllers/menuApi.php')
                .then(res => res.json())
                .then(data => {
                    this.menus = data;
                })
                .catch(error => {
                    console.error('Gagal mengambil data menu:', error);
                });
        },
        methods: {
            formatRupiah(angka) {
                return new Intl.NumberFormat('id-ID').format(angka);
            }
        }
    }).mount('#appMenu');
}

/* ================= TESTIMONI ================= */
window.testimoniVue = null;

const appTestimoni = document.getElementById('appTestimoni');
if (appTestimoni) {
    window.testimoniVue = createApp({
        data() {
            return {
                nama: '',
                komentar: '',
                rating: 0
            };
        }
    }).mount('#appTestimoni');
}

/* ================= SUBMIT TESTIMONI ================= */
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formTestimoni');
    const notif = document.getElementById('notifTestimoni');
    const errorNotif = document.getElementById('errorTestimoni');

    if (!form) return;

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        if (notif) notif.classList.add('d-none');
        if (errorNotif) errorNotif.classList.add('d-none');

        const formData = new FormData();
        formData.set('nama', window.testimoniVue ? window.testimoniVue.nama : '');
        formData.set('komentar', window.testimoniVue ? window.testimoniVue.komentar : '');
        formData.set('rating', window.testimoniVue ? window.testimoniVue.rating : 0);

        try {
            const response = await fetch('aksi/aksi_tambah_testimoni.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            console.log('Response testimoni:', text);

            let result;
            try {
                result = JSON.parse(text);
            } catch (e) {
                throw new Error('Response bukan JSON valid: ' + text);
            }

            if (result.success) {
                if (notif) {
                    notif.textContent = result.message;
                    notif.classList.remove('d-none');

                    setTimeout(() => {
                        notif.classList.add('d-none');
                    }, 3000);
                }

                form.reset();

                if (window.testimoniVue) {
                    window.testimoniVue.nama = '';
                    window.testimoniVue.komentar = '';
                    window.testimoniVue.rating = 0;
                }
            } else {
                if (errorNotif) {
                    errorNotif.textContent = result.message;
                    errorNotif.classList.remove('d-none');

                    setTimeout(() => {
                        errorNotif.classList.add('d-none');
                    }, 3000);
                } else {
                    alert(result.message);
                }
            }

        } catch (error) {
            if (errorNotif) {
                errorNotif.textContent = 'Terjadi kesalahan saat mengirim ulasan.';
                errorNotif.classList.remove('d-none');

                setTimeout(() => {
                    errorNotif.classList.add('d-none');
                }, 3000);
            } else {
                alert('Terjadi kesalahan saat mengirim ulasan.');
            }

            console.error(error);
        }
    });
});

/* ================= NAVBAR SCROLL ================= */
let prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    const navbar = document.querySelector(".navbar");

    if (!navbar) return;

    if (prevScrollpos > currentScrollPos || currentScrollPos < 10) {
        navbar.style.top = "0";
    } else {
        navbar.style.top = "-100px";
    }

    prevScrollpos = currentScrollPos;
};
</script>

</body>
</html>

/* ================= udah update ya ================= */