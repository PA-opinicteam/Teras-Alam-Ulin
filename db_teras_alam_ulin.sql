-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2026 at 05:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teras_alam_ulin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Gazebo', 'Nikmati pemandangan alam dari balkon kayu terbuka.', 'gazebo.jpg'),
(2, 'Terapi Ikan', 'Sensasi terapi ikan yang menjadi daya tarik utama.', 'terapi.jpg'),
(3, 'Ikan Hias', 'Berbagai jenis ikan yang dapat diberi makan.', 'ikan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`) VALUES
(1, 'galeri1.jpg', 'Gerbang Teras Alam Ulin'),
(2, 'galeri2.jpg', 'Senja di Teras Alam Ulin'),
(3, 'galeri3.jpg', 'Serunya Paddle Board di Teras Alam Ulin'),
(4, 'galeri4.jpg', 'Pelangi di Teras Alam Ulin'),
(5, 'galeri5.jpg', 'Suasana Asri Teras Alam Ulinn');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text,
  `harga` int DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `kategori`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Ayam Geprek', 'Rice Bowl', NULL, 20000, NULL),
(2, 'Ayam Geprek Mozzarella', 'Rice Bowl', NULL, 25000, NULL),
(3, 'Chicken Katsu', 'Rice Bowl', NULL, 25000, NULL),
(4, 'Beef Belly', 'Rice Bowl', NULL, 30000, NULL),
(5, 'Kentang Goreng', 'Snack', NULL, 15000, NULL),
(6, 'Sosis Goreng', 'Snack', NULL, 15000, NULL),
(7, 'Nugget', 'Snack', NULL, 15000, NULL),
(8, 'Mix Snack', 'Snack', NULL, 30000, NULL),
(9, 'Singkong', 'Snack', NULL, 18000, NULL),
(10, 'Cireng', 'Snack', NULL, 12000, NULL),
(11, 'Pisang Keju', 'Snack', NULL, 15000, NULL),
(12, 'Pisang Goreng', 'Snack', NULL, 15000, NULL),
(13, 'Ocean Blue', 'Mocktail', NULL, 18000, NULL),
(14, 'Blue Blood', 'Mocktail', NULL, 18000, NULL),
(15, 'Rainbow', 'Mocktail', NULL, 18000, NULL),
(16, 'Strawberry Breeze', 'Mocktail', NULL, 18000, NULL),
(17, 'Lychee Breeze', 'Mocktail', NULL, 18000, NULL),
(18, 'Blue Lacoon', 'Mocktail', NULL, 18000, NULL),
(19, 'Es Teh', 'Other Drink', NULL, 8000, NULL),
(20, 'Lemon Tea', 'Other Drink', NULL, 12000, NULL),
(21, 'Lychee Tea', 'Other Drink', NULL, 15000, NULL),
(22, 'Kopi Hitam', 'Other Drink', NULL, 10000, NULL),
(23, 'Kopi Susu (Es/Panas)', 'Other Drink', NULL, 12000, NULL),
(24, 'Wedang Jahe', 'Other Drink', NULL, 15000, NULL),
(25, 'Strawberry', 'Milky', NULL, 16000, NULL),
(26, 'Blue Citrus', 'Milky', NULL, 16000, NULL),
(27, 'Coffee Latte', 'Milky', NULL, 16000, NULL),
(28, 'Cappucino', 'Milky', NULL, 16000, NULL),
(29, 'Chocolate', 'Milky', NULL, 16000, NULL),
(30, 'Red Velvet', 'Milky', NULL, 16000, NULL),
(31, 'Green Tea', 'Milky', NULL, 16000, NULL),
(32, 'Thai Tea', 'Milky', NULL, 16000, NULL),
(33, 'Milo', 'Milky', NULL, 16000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah_orang` int DEFAULT NULL,
  `jenis_acara` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama`, `tanggal`, `jumlah_orang`, `jenis_acara`, `created_at`, `status`) VALUES
(1, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 14:52:51', 'pending'),
(2, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 14:57:31', 'pending'),
(3, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:16:49', 'pending'),
(4, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:17:35', 'pending'),
(5, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:29:46', 'pending'),
(6, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:30:11', 'pending'),
(7, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:36:21', 'pending'),
(8, 'ican', '2026-04-10', 9, 'Gathering', '2026-04-09 15:42:27', 'pending'),
(9, 'dwi', '2026-04-30', 4, 'Gathering', '2026-04-11 11:30:05', 'pending'),
(10, 'pian', '2026-04-08', 7, 'Keluarga', '2026-04-11 11:31:47', 'pending'),
(11, 'ya', '2026-04-02', 1, 'Keluarga', '2026-04-20 07:51:13', 'pending'),
(12, 'tes', '2026-03-30', 3, 'Keluarga', '2026-04-27 12:02:43', 'pending'),
(13, 'se', '2026-03-31', 3, 'Keluarga', '2026-04-27 12:04:10', 'pending'),
(14, 'da', '2026-04-14', 2, 'Keluarga', '2026-04-27 12:06:19', 'pending'),
(15, '21', '2026-03-31', 32, 'Keluarga', '2026-04-27 12:08:00', 'pending'),
(16, '2', '2026-03-30', 2, 'Keluarga', '2026-04-27 12:10:51', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `komentar` text,
  `rating` int DEFAULT NULL,
  `status` enum('pending','tampil') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `komentar`, `rating`, `status`) VALUES
(1, 'Budi Santoso', 'Tempatnya nyaman dan cocok untuk keluarga.', 5, 'pending'),
(2, 'Sari Wijaya', 'Anak-anak sangat senang bermain di sini.', 5, 'tampil'),
(3, 'Andi Pratama', 'Suasana tenang dan asri.', 4, 'tampil'),
(4, 'Andi', 'Tempatnya sangat nyaman dan cocok untuk keluarga!', 1, 'pending'),
(5, 'Budi', 'Anak-anak suka sekali terapi ikan di sini.', NULL, 'pending'),
(6, 'Sari', 'Suasana asri dan harga terjangkau.', 1, 'tampil');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int NOT NULL,
  `nama_wisata` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `harga_tiket` int DEFAULT NULL,
  `lokasi` text,
  `jam_buka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `deskripsi`, `harga_tiket`, `lokasi`, `jam_buka`) VALUES
(1, 'Teras Alam Ulin', 'Destinasi wisata keluarga dengan suasana alam yang nyaman dan asri.', 10000, 'Jl. Alam Ulin No. 123, Samarinda', 'Senin-Kamis: 09.00-18.00 | Sabtu-Minggu: 09.00-18.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
