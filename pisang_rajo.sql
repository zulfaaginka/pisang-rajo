-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pisang_rajo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nopem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_bayar` bigint(20) NOT NULL,
  `gambar_bukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id`, `nopem`, `norek`, `nama`, `jumlah_bayar`, `gambar_bukti`, `created_at`, `updated_at`) VALUES
(3, '20181107720D', '12312312', 'zulfa', 2122222, '20181107720D.png', '2018-11-07 06:56:24', '2018-11-07 06:56:24'),
(5, '2018110740F7', '12345667123', 'Zulfa', 120000, '2018110740F7.png', '2018-11-07 09:10:15', '2018-11-07 09:10:15'),
(6, '2018110740F7', '12312312', 'Zulfa', 12345123, '2018110740F7.png', '2018-11-07 09:11:20', '2018-11-07 09:11:20'),
(7, '20181108C36C', '231231312', 'zULFA', 64000, '20181108C36C.png', '2018-11-07 17:57:15', '2018-11-07 17:57:15'),
(8, '20181108162F', '23123', 'Zulfa', 218000, '20181108162F.png', '2018-11-07 20:44:24', '2018-11-07 20:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_menu`
--

CREATE TABLE `daftar_menu` (
  `id` int(11) NOT NULL,
  `id_menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `gambar_menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_menu`
--

INSERT INTO `daftar_menu` (`id`, `id_menu`, `nama_menu`, `harga_menu`, `gambar_menu`, `stok`) VALUES
(1, 'cheese-01', 'Cheese', 16000, 'cheese-01.png', 1),
(2, 'cheese-02', 'Choco Cheese', 20000, 'cheese-02.png', 1),
(3, 'ori-01', 'Original', 10000, 'ori-01.png', 1),
(7, 'testmenu2', 'testmenulagi', 100000, 'testmenu2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesan`
--

CREATE TABLE `data_pemesan` (
  `id` int(11) NOT NULL,
  `nopem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_pengambilan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_pengambilan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengambilan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pemesan`
--

INSERT INTO `data_pemesan` (`id`, `nopem`, `nama`, `email`, `no_telp`, `alamat`, `cara_pengambilan`, `tempat_pengambilan`, `tanggal_pengambilan`, `jumlah_pembayaran`, `status`, `created_at`, `updated_at`) VALUES
(3, '201811071C8A', 'Zulfa', 'zulfaaginka@gmail.com', '0829292821', 'Jl. Kebalet Raya no 11 Rt 02/ Rw 05, Rawa Timur, Kebayoran Dulu', 'Ambil Di Toko', 'Toko 2', '2018-11-10T13:00', '48.000,00', 4, '2018-11-07 09:57:38', '2018-11-07 11:11:41'),
(1, '2018110740F7', 'Zulfa', 'zulfaaginka@gmail.com', '082122131231', 'Jl kebagusan banget no 16 rt 02 rw 001', 'Ambil Di Toko', 'Toko2', '2018-12-31T12:59', '70.000,00', 1, '2018-11-07 05:06:12', '2018-11-07 09:15:47'),
(2, '20181107720D', 'Zulfa', 'zulfaaginka@gmail.com', '0824214211', 'Jl kebagusan banget no 16 rt 02 rw 001', 'Ambil Di Toko', 'Toko 1', '2018-12-31T12:59', '110.000,00', 1, '2018-11-07 04:43:59', '2018-11-07 08:26:43'),
(5, '20181108162F', 'Zulfa', 'zulfaaginka@gmail.com', '082222222222', 'Jl kebagusan banget no 16 rt 02 rw 001', 'Ambil Di Toko', 'Cabang Rawamangun', '2018-11-15T12:05', '218.000,00', 4, '2018-11-07 20:42:10', '2018-11-07 20:45:31'),
(4, '20181108C36C', 'Zulfa', 'zulfaaginka@gmail.com', '082222222222', 'Jl. Kebalet Raya no 11 Rt 02/ Rw 05, Rawa Timur, Kebayoran Dulu', 'Ambil Di Toko', 'Cabang Rawamangun', '2018-11-16T12:59', '64.000,00', 2, '2018-11-07 17:54:03', '2018-11-07 17:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_17_100516_create_daftar_menu', 1),
(4, '2018_10_30_170231_create_data_pembeli', 1),
(5, '2018_11_01_012934_create_pesanan', 1),
(6, '2018_11_01_170905_bukti_pembayaran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nopem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nopem`, `id_menu`, `qty`, `harga`) VALUES
(1, '20181107720D', 'ori-01', 3, 30000),
(2, '20181107720D', 'cheese-02', 4, 80000),
(3, '2018110740F7', 'cheese-02', 3, 60000),
(4, '2018110740F7', 'ori-01', 1, 10000),
(5, '201811071C8A', 'cheese-01', 3, 48000),
(6, '20181108C36C', 'cheese-01', 4, 64000),
(7, '20181108162F', 'cheese-01', 3, 48000),
(8, '20181108162F', 'ori-01', 5, 50000),
(9, '20181108162F', 'testmenu2', 1, 100000),
(10, '20181108162F', 'cheese-02', 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin Rajo', 'pnrajo@gmail.com', 1, '$2y$10$F9RDZ83qfzbkRSAcTi8IK.2hjG1PIwpwurXNu6/2EhEYLe2wgMOgy', 'fdXlWT502MjBzoqtx32FVh6j70oIvnaU2JXt8xJ475nHRZoDOJv7bRLkcM8R', '2018-11-07 02:22:21', '2018-11-07 02:22:21'),
(3, 'test', 'test@gmail.com', 1, '$2y$10$lAXK9SCqfedxmPPNQDbwJ.BJwgpX/ZNGtcDy6GXYhAtIQDyoMUOa6', 'r27ik2cWyBxfTTREkC6Z3P4Qibh6zhKf7Df8KpeTeZzYcKJIePvcl0uvkBis', '2018-11-07 18:05:36', '2018-11-07 18:05:36'),
(4, 'test2', 'test@test.com', 1, '$2y$10$Aa8jS3S6xCEHgei1mqpdEuklmPijxMYtnmeagevEYOsZtHfd.rReW', NULL, '2018-11-07 20:37:32', '2018-11-07 20:37:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukti_pembayaran_nopem_foreign` (`nopem`);

--
-- Indexes for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  ADD PRIMARY KEY (`nopem`),
  ADD UNIQUE KEY `data_pemesan_nopem_unique` (`nopem`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_nopem_foreign` (`nopem`),
  ADD KEY `pesanan_id_menu_foreign` (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD CONSTRAINT `bukti_pembayaran_nopem_foreign` FOREIGN KEY (`nopem`) REFERENCES `data_pemesan` (`nopem`) ON DELETE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `daftar_menu` (`id_menu`),
  ADD CONSTRAINT `pesanan_nopem_foreign` FOREIGN KEY (`nopem`) REFERENCES `data_pemesan` (`nopem`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
