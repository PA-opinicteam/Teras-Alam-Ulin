# 🌿 TERAS ALAM ULIN - WEBSITE WISATA

## Anggota Tim - 

| Nama                        |     NIM    |
| :-------------------------- | :--------: |
| Moch. Farris Alfiansyah     | 2409116079 |
| Muhammad Irdhan Nur Faudzan | 2409116077 |
| Khairunisa Aprilia          | 2409116060 |
| Elmy Fadillah               | 2409116075 |

---

# A. Deskripsi Aplikasi

Website **Teras Alam Ulin** merupakan aplikasi berbasis web yang dikembangkan untuk menampilkan informasi wisata keluarga di Samarinda secara lengkap, menarik, dan interaktif.

Website ini bertujuan untuk membantu pengunjung dalam memperoleh informasi terkait **fasilitas, galeri, menu makanan, testimoni, hingga reservasi secara online**.

Selain itu, sistem ini juga dilengkapi dengan **halaman admin** yang memungkinkan pengelolaan data dilakukan secara dinamis seperti **menambah, mengedit, dan menghapus data**.

---

# B. Fitur Aplikasi

👥 Pengunjung
- Landing page (hero section & navigasi)
- Informasi tentang wisata
- Daftar fasilitas (dengan gambar & deskripsi)
- Galeri (slider foto)
- Menu makanan & minuman
- Testimoni pengunjung + rating ⭐
- Form ulasan (tanpa reload / AJAX)
- Reservasi via WhatsApp
- Lokasi & Jam Operasional

🔐 Admin
- Login admin (session)
- Dashboard (ringkasan data)
- Kelola fasilitas (CRUD)
- Kelola galeri (CRUD)
- Kelola menu (CRUD)
- Kelola testimoni (approve / pending)
- Upload gamb


# C. Komponen & Teknologi yang Digunakan

## 1. Struktur Halaman (Layout)

| Komponen | Deskripsi |
|---------|----------|
| Navbar | Navigasi utama website |
| Hero Section | Tampilan utama |
| Section | Pembagian halaman |
| Footer | Informasi tambahan |

---

## 2. Tampilan & Styling

| Teknologi | Fungsi |
|----------|--------|
| Bootstrap 5 | Layout responsive |
| CSS | Styling tambahan |
| Flexbox | Pengaturan posisi |
| Grid System | Layout kolom |

---

## 3. Interaksi & UI

| Komponen | Deskripsi |
|----------|----------|
| Button | Aksi seperti kirim, edit |
| Card | Menampilkan data |
| Modal | Popup informasi |
| Form | Input data |
| Rating Bintang | Input rating ⭐ |

---

## 4. JavaScript & Interaktivitas

| Teknologi | Fungsi |
|----------|--------|
| JavaScript | Logic frontend |
| Vue JS | Data dinamis |
| Fetch API | Kirim data tanpa reload |
| DOM | Manipulasi tampilan |

---

## 5. Backend (Server Side)

| Teknologi | Fungsi |
|----------|--------|
| PHP Native | Logic backend |
| MySQL | Database |
| mysqli | Koneksi database |

---

## 6. Sistem Admin

| Fitur | Deskripsi |
|------|----------|
| Login Session | Autentikasi admin |
| CRUD Data | Tambah, edit, hapus |
| Upload Gambar | Upload foto |
| Testimoni | Approve / pending |

---

# D. Teknologi yang Digunakan

<p align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="60"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="60"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" width="60"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="60"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" width="60"/>
</p>

<p align="center">
  <sub><b>Built with PHP, MySQL, Bootstrap, JavaScript & Vue JS</b></sub>
</p>

---

# E. Struktur Folder

```bash
Teras-Alam-Ulin/
├── admin/
├── aksi/
├── assets/
├── config/
├── controllers/
├── models/
├── views/
├── index.php
├── login.php
├── logout.php
```

# F. Tampilan Website

## **a). Halaman Landing Page**

<img width="1920" height="1080" alt="Screenshot (626)" src="https://github.com/user-attachments/assets/c90057da-8aae-445d-b2ad-2f6c398bc800" />


* Menampilkan halaman utama (landing page) sebagai tampilan awal website.
* Terdapat navbar untuk navigasi (Home, Tentang, Fasilitas, Galeri, Menu, Kontak).
* Menampilkan hero section berisi judul, deskripsi, dan tombol aksi.
* Terdapat tombol “Reservasi Sekarang” dan “Lihat Fasilitas”.

---

## **b). Halaman Tentang**

<img width="1920" height="1080" alt="Screenshot (627)" src="https://github.com/user-attachments/assets/55d9f772-2653-4483-a5c2-5f61c7e6d46d" />



- Menampilkan halaman Tentang yang berisi deskripsi Teras Alam Ulin.
- Menampilkan gambar utama sebagai ilustrasi tempat wisata.
- Menampilkan informasi keunggulan seperti terapi ikan, suasana alam, dan aktivitas rekreasi.
- Menampilkan informasi tambahan seperti tahun berdiri, harga tiket, dan jumlah fasilitas.
- Terdapat tombol aksi **Lihat Detail** dan **Reservasi Sekarang**.

---

## **c). Halaman Detail Informasi**

<img width="1920" height="1080" alt="Screenshot (628)" src="https://github.com/user-attachments/assets/1407b930-74c7-4d7d-8ff0-7b0bfda73bef" />


- Menampilkan popup detail informasi Teras Alam Ulin.
- Berisi informasi umum seperti nama tempat, alamat, kontak, dan link Google Maps.
- Menampilkan sejarah dan latar belakang berdirinya tempat wisata.
- Menampilkan konsep tempat dan suasana yang ditawarkan kepada pengunjung.
- Menampilkan keunikan dan kelebihan dibanding tempat wisata lain.
- Terdapat tombol untuk menutup popup (Tutup).

---

## **d). Halaman Fasilitas**

<img width="1920" height="1080" alt="Screenshot (629)" src="https://github.com/user-attachments/assets/bdabb6a7-1861-4431-8acf-786015cda3ec" />



- Menampilkan daftar fasilitas yang tersedia di Teras Alam Ulin.
- Setiap fasilitas ditampilkan dalam bentuk card berisi gambar, nama, dan deskripsi.
- Menampilkan beberapa fasilitas seperti ikan hias, terapi ikan, gazebo, dan paddleboard.
- Menggunakan layout grid agar tampilan rapi dan responsif

---

## **e). Halaman Galeri**

<img width="1920" height="1080" alt="Screenshot (630)" src="https://github.com/user-attachments/assets/51e29893-8187-4036-9aa8-93bfdf1d642b" />



- Menampilkan galeri foto Teras Alam Ulin.
- Menggunakan tampilan slider/carousel untuk menampilkan beberapa gambar.
- Setiap gambar dilengkapi dengan judul dan deskripsi singkat.
- Terdapat navigasi (panah/indikator) untuk berpindah antar gambar.
- Menampilkan suasana dan fasilitas tempat wisata melalui gambar.
---

## **f). Halaman Testimoni**

<img width="1920" height="1080" alt="Screenshot (631)" src="https://github.com/user-attachments/assets/7fcbeb4d-88d2-48a6-ae7c-cedf79a887be" />



- Menampilkan ulasan dari pengunjung Teras Alam Ulin.
- Setiap testimoni ditampilkan dalam bentuk card berisi nama, rating, dan komentar.
- Menampilkan beberapa contoh ulasan dari pengunjung.
- Terdapat form untuk menambahkan ulasan baru (nama dan komentar).

---

## **g). Halaman Form Ulasan**

<img width="1920" height="1080" alt="Screenshot (632)" src="https://github.com/user-attachments/assets/ee4516dc-627a-4968-b2e2-6ba8713ba7ca" />



- Menampilkan ulasan dari pengunjung Teras Alam Ulin.
- Setiap testimoni ditampilkan dalam bentuk card berisi nama, rating, dan komentar.
- Menampilkan beberapa contoh ulasan dari pengunjung.
- Terdapat form untuk menambahkan ulasan baru.
- Form terdiri dari input nama, komentar, dan pilihan rating (bintang).
- Tersedia tombol "Kirim Testimoni" untuk mengirim ulasan..

---

## **h). Halaman Menu**

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/bc275358-ad21-4adb-befc-4315a5361113" />



- Menampilkan daftar menu makanan dan minuman.
- Menu dibagi berdasarkan kategori (Rice Bowl, Snack, Mocktail, dan Other Drink).
- Setiap item menampilkan nama menu dan harga.
- Tampilan dibagi menjadi dua kolom untuk memudahkan pembacaan.
- Desain menggunakan garis titik (dots) antara nama menu dan harga agar lebih rapi.
- Data menu dapat diambil dari database dan ditampilkan secara dinamis.

---

## **i). Halaman Reservasi**

<img width="1920" height="1080" alt="Screenshot (635)" src="https://github.com/user-attachments/assets/5cf9fe92-c0af-45c1-9537-00c737ee7235" />



- Menampilkan form untuk melakukan reservasi kunjungan.
- Pengguna dapat mengisi nama lengkap, tanggal kunjungan, jumlah orang, dan jenis acara.
- Terdapat tombol "Kirim Reservasi" untuk mengirim data.
- Disediakan opsi alternatif reservasi melalui WhatsApp.
- Menampilkan informasi tambahan seperti reservasi fleksibel dan paket gathering.
- Desain form dibuat sederhana dan mudah digunakan.

---

## **j). Halaman Lokasi & Jam Operasional**

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/8aa76e8c-ca10-4115-8189-fd5146931850" />



- Menampilkan informasi lokasi dan jam operasional Teras Alam Ulin.
- Data yang ditampilkan meliputi:
  - Alamat lengkap
  - Jam operasional
- Jam operasional terdiri dari:
  - Senin – Kamis (jam buka)
  - Jumat (tutup)
  - Sabtu – Minggu (jam buka)
- Terdapat peta lokasi menggunakan Google Maps.
- Tersedia tombol:
  - "Buka di Google Maps" → untuk menuju lokasi secara langsung.

## **K). Footer & Social Media**

<img width="1920" height="1080" alt="Screenshot (637)" src="https://github.com/user-attachments/assets/d5b4c970-2dbc-4e5e-b22e-7312dc25e94f" />

- Menampilkan ikon media sosial (TikTok, Facebook, Instagram).
- Terdapat navigasi cepat ke halaman Home, Galeri, Tentang, Menu, dan Kontak.
- Menampilkan informasi hak cipta (copyright).
- Berfungsi sebagai penutup halaman dengan akses cepat ke bagian penting website.
---
**ADMIN**

## **a). Halaman Login Admin**

<img width="1920" height="1080" alt="Screenshot (639)" src="https://github.com/user-attachments/assets/c7a7216f-5272-4df2-959d-75ba3655a658" />


- Menampilkan form login untuk admin.
- Admin dapat memasukkan username dan password.
- Terdapat tombol "Login" untuk masuk ke sistem admin.
- Disediakan tombol "Kembali ke Website" untuk kembali ke halaman utama.
- Digunakan untuk mengakses fitur pengelolaan data (menu, galeri, dll).
- Tampilan dibuat sederhana dengan fokus pada kemudahan akses

---

## **b). Dashboard Admin**

<img width="1920" height="1080" alt="Screenshot (640)" src="https://github.com/user-attachments/assets/89a4961f-4d02-4a4a-a05d-73714aed763e" />


- Menampilkan halaman utama setelah admin berhasil login.
- Menampilkan ringkasan data seperti total fasilitas, galeri, menu, dan testimoni.
- Terdapat sidebar navigasi untuk mengelola data (Fasilitas, Galeri, Menu, Testimoni).
- Disediakan menu "Lihat Website" untuk kembali ke halaman user.
- Terdapat tombol "Logout" untuk keluar dari sistem.
- Membantu admin memantau dan mengelola data secara cepat.

---

## **c). Halaman Data Fasilitas**

<img width="1920" height="1080" alt="Screenshot (641)" src="https://github.com/user-attachments/assets/c82c63e3-1e90-491d-968d-c69fb4aefca0" />


- Menampilkan daftar fasilitas yang tersedia.
- Data yang ditampilkan:
  - Nama fasilitas
  - Deskripsi
  - Gambar
- Terdapat tombol aksi:
  - Edit
  - Hapus

---

## **d). Halaman Tambah Fasilitas**

<img width="1920" height="1080" alt="Screenshot (642)" src="https://github.com/user-attachments/assets/77e52cc0-1564-4a95-91b0-51840d24bdc4" />


- Admin dapat menambahkan data fasilitas baru.
- Form berisi:
  - Nama fasilitas
  - Deskripsi fasilitas
  - Upload gambar fasilitas
- Tombol "Simpan" untuk menyimpan data ke sistem.
- Tombol "Kembali" untuk membatalkan dan kembali ke halaman sebelumnya.

---

## **e). Halaman Edit Fasilitas**

<img width="1920" height="1080" alt="Screenshot (643)" src="https://github.com/user-attachments/assets/cd2f522b-b945-4b19-bab6-54e600076d1a" />


- Admin dapat mengedit data fasilitas.
- Form berisi:
  - Nama fasilitas
  - Deskripsi
  - Gambar saat ini
  - Upload gambar baru (opsional)
- Tombol "Update" untuk menyimpan perubahan.
- Tombol "Kembali" untuk membatalkan.

---

## **f). Halaman Data Galeri**

<img width="1920" height="1080" alt="Screenshot (644)" src="https://github.com/user-attachments/assets/726b5822-1fd0-4714-8ce3-85444f65e34a" />

- Menampilkan daftar gambar galeri yang ada di website.
- Data yang ditampilkan meliputi:
  - Nomor
  - Gambar
  - Keterangan
- Setiap data memiliki tombol aksi:
  - Edit → untuk mengubah data galeri
  - Hapus → untuk menghapus data galeri
- Tersedia tombol "+ Tambah Galeri" untuk menambahkan data baru.

---

## **g). Halaman Tambah Galeri**

<img width="1920" height="1080" alt="Screenshot (645)" src="https://github.com/user-attachments/assets/c682c38a-c9e1-4ee1-8072-f99bc99b805a" />


- Admin dapat menambahkan data galeri baru.
- Form berisi:
  - Upload gambar
  - Keterangan
- Tombol "Simpan" untuk menyimpan data.
- Tombol "Kembali" untuk membatalk

---

## **h). Halaman Edit Galeri**

<img width="1920" height="1080" alt="Screenshot (646)" src="https://github.com/user-attachments/assets/765c6d6b-74aa-4c33-a788-2bd7800f2ebc" />


- Admin dapat mengedit data galeri.
- Form berisi:
  - Gambar saat ini
  - Upload gambar baru (opsional)
  - Keterangan
- Tombol "Update" untuk menyimpan perubahan.
- Tombol "Kembali" untuk membatalkan.
---

## **i). Halaman Data Menu**

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/9d0a3cd1-381a-4495-a548-94cf7da9b299" />


- Menampilkan daftar menu makanan dan minuman.
- Data yang ditampilkan meliputi:
  - Nama menu
  - Kategori
  - Harga
- Terdapat tombol aksi:
  - Edit
  - Hapus

---

## **j). Halaman Tambah Menu**

<img width="1919" height="872" alt="image" src="https://github.com/user-attachments/assets/45aeaf1e-a62a-4ab9-be77-9a630493cfd6" />


- Admin dapat menambahkan menu baru.
- Form berisi:
  - Kategori
  - Nama menu
  - Harga

- Tombol "Simpan" untuk menyimpan data.
- Tombol "Kembali" untuk membatalkan.

---

## **k). Halaman Edit Menu**

<img width="1919" height="869" alt="image" src="https://github.com/user-attachments/assets/5acceed8-7306-4c60-a9b5-f766726c09ed" />


- Admin dapat mengedit data menu.
- Form berisi:
  - Kategori
  - Nama menu
  - Harga
- Tombol "Update" untuk menyimpan perubahan.
- Tombol "Kembali" untuk membatalkan.

---

## **l). Halaman Data Testimoni**

<img width="1920" height="1080" alt="Screenshot (650)" src="https://github.com/user-attachments/assets/caf5965b-2ece-482b-a3bb-b58f600d5340" />


- Menampilkan daftar testimoni pengunjung.
- Data yang ditampilkan:
  - Nama
  - Komentar
  - Rating
  - Status
- Status terdiri dari:
  - Tampil
  - Pending

---

## **m). Halaman Edit Testimoni**

<img width="1920" height="1080" alt="Screenshot (651)" src="https://github.com/user-attachments/assets/2529e7ed-78de-4361-807b-f2df4cb3e875" />


- Admin dapat mengedit isi testimoni.
- Form berisi:
  - Nama
  - Komentar
  - Rating
  - Status
- Tombol "Simpan" untuk menyimpan perubahan.
- Tombol "Kembali" untuk kembali.


TAMPILAN JIKA TESTIMONI DITAMPILKAN

<img width="1920" height="1080" alt="Screenshot (652)" src="https://github.com/user-attachments/assets/5f749391-74de-4585-9041-79b22081cbde" />

---


# **G. Teknologi yang Digunakan**

- **PHP Native**  
  Digunakan sebagai bahasa pemrograman utama untuk membangun logika sistem, mengelola data, serta menghubungkan aplikasi dengan database tanpa menggunakan framework.

- **MySQL**  
  Digunakan sebagai database untuk menyimpan data seperti menu, galeri, fasilitas, testimoni, dan data admin.

- **Bootstrap 5**  
  Digunakan untuk membuat tampilan website yang responsif dan modern dengan komponen UI siap pakai seperti navbar, card, dan form.

- **JavaScript**  
  Digunakan untuk menambahkan interaksi pada website, seperti slider, popup, dan validasi form.

- **CSS**  
  Digunakan untuk mengatur tampilan dan desain website agar lebih menarik, seperti warna, layout, dan styling elemen.

- **Laragon**  
  Digunakan sebagai local server untuk menjalankan aplikasi web secara lokal, yang menyediakan Apache, MySQL, dan PHP dalam satu paket.

---

# **H. Cara Menjalankan**

1. **Clone repository**
2. **Pindahkan ke laragon/www**
3. **Import database**
4. **Atur koneksi database**
5. **Jalankan server**
6. Akses:
   **http://localhost/Teras-Alam-Ulin**

---

# **I. Tujuan Pembuatan**

* Memenuhi tugas **Pemrograman Berbasis Web**
* Membuat website wisata yang **informatif dan interaktif**
* Menyediakan **sistem reservasi online**
* Mempermudah **pengelolaan data admin**

---
