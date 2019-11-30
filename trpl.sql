-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bayu Pratama', 'bpratama148@gmail.com', NULL, '12345', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `gambar`, `deskripsi`, `konten`, `created_at`, `updated_at`) VALUES
(12, 'Semester 5 Menyebabkan Beberapa Penyakit Kronis', 'm-blog-5.jpg', 'Trpl Menyenangkan Lorem Ipsum', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower\r\n\r\nMCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually', '2019-10-05 20:09:37', '2019-10-06 00:39:41'),
(13, 'Semester 5 Menyebabkan Beberapa Penyakit Kronis', 'm-blog-3.jpg', 'TRPL Menyenangkan Lorem Ipsum', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower\r\n\r\nMCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually', '2019-10-06 00:17:22', '2019-10-06 00:39:11'),
(14, 'Semester 5 Menyebabkan Beberapa Penyakit Kronis', 'm-blog-4.jpg', 'TRPL Menyenangkan Lorem Ipsum', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower\r\n\r\nMCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually', '2019-10-06 00:18:10', '2019-10-06 00:18:10'),
(15, 'Semester 5 Menyebabkan Beberapa Penyakit Kronis', 'cat-widget3.jpg', 'Trpl Menyenangkan Lorem Ipsum', 'AAAAAAAAAAAAAAAAAAAAAA', '2019-10-17 20:17:56', '2019-10-17 20:17:56'),
(16, 'Water Quality Monitoring System (OOD-12B)', 'blog2.png', 'Trpl Menyenangkan Lorem Ipsum', 'aaa', '2019-10-17 20:20:37', '2019-10-17 20:20:37'),
(17, 'Semester 5 Menyebabkan Beberapa Penyakit Kronis', '176862.jpg', 'Trpl Menyenangkan Lorem Ipsum', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually', '2019-10-29 20:08:04', '2019-10-29 20:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosas`
--

CREATE TABLE `diagnosas` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `value` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosas`
--

INSERT INTO `diagnosas` (`id`, `nama`, `value`, `created_at`, `updated_at`) VALUES
(4, 'Diabetes Mellitus Type I', '110', '2019-11-30 08:55:43', '2019-11-30 08:55:43'),
(5, 'Diabetes Mellitus Type 2', '126', '2019-11-30 08:58:26', '2019-11-30 08:58:26'),
(6, 'Neuropati Diabetes', '191', '2019-11-30 09:02:14', '2019-11-30 09:02:14'),
(7, 'Retinopati Diabates', '116', '2019-11-30 09:04:32', '2019-11-30 09:04:32'),
(8, 'Nefropati Diabetes', '198', '2019-11-30 09:08:22', '2019-11-30 09:08:22'),
(9, 'Ketoasidosis Diabetes', '163', '2019-11-30 09:12:43', '2019-11-30 09:12:43'),
(10, 'Gestasional Diabetes', '171', '2019-11-30 09:16:06', '2019-11-30 09:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `name`, `profesi`, `bidang`, `kontak`, `alamat`, `foto`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Suryadi', 'Dokter Umum', 'Gizi dan Pangan', '0895399649215', 'Jember Utara', '1.jpg', 'bambang123@gmail.com', '12345', '2019-10-06 05:16:21', '2019-10-06 05:16:21'),
(2, 'Soegiono', 'Dokter Umum', 'Gizi dan Pangan', '0895399649215', 'Jember Utara', '2.jpg', 'sugik123@gmail.com', '12345', '2019-10-06 05:20:36', '2019-10-06 05:20:36'),
(3, 'Bambang Sutardi', 'Dokter Umum', 'Gizi dan Pangan', '0895399649215', 'Jember Utara', '176862.jpg', 'Danigoblok@gmail', '12345', '2019-10-29 20:09:08', '2019-10-29 20:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `thread` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `id_pengguna`, `nama`, `thread`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(8, 2, 'Bayu Pratama', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'm-blog-5.jpg', '2019-10-17 07:50:09', '2019-10-17 07:50:09'),
(9, 2, 'Bayu Pratama', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser', 'test', 'm-blog-1.jpg', '2019-10-17 08:05:41', '2019-10-17 08:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `nama`, `kode`, `value`, `created_at`, `updated_at`) VALUES
(18, 'Banyak kencing di malam hari   (lebih dari 5 kali)', 'G01', '21', '2019-11-30 08:01:26', '2019-11-30 08:01:26'),
(19, 'Sering haus atau lapar', 'G02', '23', '2019-11-30 08:02:32', '2019-11-30 08:02:32'),
(20, 'Berat badan turun drastis', 'G03', '11', '2019-11-30 08:03:13', '2019-11-30 08:03:13'),
(21, 'Sering pusing', 'G04', '12', '2019-11-30 08:11:07', '2019-11-30 08:11:07'),
(22, 'Luka sulit / lama sembuh', 'G05', '15', '2019-11-30 08:11:30', '2019-11-30 08:11:30'),
(23, 'Penglihatan kabur', 'G06', '52', '2019-11-30 08:12:00', '2019-11-30 08:12:00'),
(24, 'Keputihan', 'G07', '8', '2019-11-30 08:12:25', '2019-11-30 08:12:25'),
(25, 'Sering kesemutan pada tangan dan kaki', 'G08', '19', '2019-11-30 08:12:47', '2019-11-30 08:12:47'),
(26, 'Sering cepat lelah saat beraktivitas', 'G09', '17', '2019-11-30 08:13:08', '2019-11-30 08:13:08'),
(27, 'Infeksi saluran kemih', 'G10', '27', '2019-11-30 08:13:25', '2019-11-30 08:13:25'),
(28, 'Sering gatal-gatal atau alergi pada kulit', 'G11', '1', '2019-11-30 08:13:40', '2019-11-30 08:13:40'),
(29, 'Sering mual-mual', 'G12', '6', '2019-11-30 08:14:04', '2019-11-30 08:14:04'),
(30, 'Sering muntah', 'G13', '31', '2019-11-30 08:14:47', '2019-11-30 08:14:47'),
(31, 'Sering nyeri perut', 'G14', '24', '2019-11-30 08:15:11', '2019-11-30 08:15:11'),
(32, 'Hipertensi (tekanan darah tinggi lebih  dari 120/80 mmHg)', 'G15', '13', '2019-11-30 08:18:02', '2019-11-30 08:18:02'),
(33, 'Obesitas (kegemukan)', 'G16', '39', '2019-11-30 08:18:30', '2019-11-30 08:18:30'),
(34, 'Katarak', 'G17', '29', '2019-11-30 08:18:56', '2019-11-30 08:18:56'),
(35, 'Berkeringat dengan keringat lengket', 'G18', '10', '2019-11-30 08:19:32', '2019-11-30 08:19:32'),
(36, 'Sering diare', 'G19', '36', '2019-11-30 08:19:56', '2019-11-30 08:19:56'),
(37, 'Sering sesak nafas', 'G20', '25', '2019-11-30 08:20:42', '2019-11-30 08:20:42'),
(38, 'Sering nyeri di ulu hati', 'G21', '9', '2019-11-30 08:21:16', '2019-11-30 08:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `hasil_id` int(11) NOT NULL,
  `g1` varchar(50) DEFAULT NULL,
  `g2` varchar(50) DEFAULT NULL,
  `g3` varchar(50) DEFAULT NULL,
  `g4` varchar(50) DEFAULT NULL,
  `g5` varchar(50) DEFAULT NULL,
  `g6` varchar(50) DEFAULT NULL,
  `g7` varchar(50) DEFAULT NULL,
  `g8` varchar(50) DEFAULT NULL,
  `g9` varchar(50) DEFAULT NULL,
  `g10` varchar(50) DEFAULT NULL,
  `g11` varchar(50) DEFAULT NULL,
  `g12` varchar(50) DEFAULT NULL,
  `g13` varchar(50) DEFAULT NULL,
  `g14` varchar(50) DEFAULT NULL,
  `g15` varchar(50) DEFAULT NULL,
  `g16` varchar(50) DEFAULT NULL,
  `g17` varchar(50) DEFAULT NULL,
  `g18` varchar(50) DEFAULT NULL,
  `g19` varchar(50) DEFAULT NULL,
  `g20` varchar(50) DEFAULT NULL,
  `g21` varchar(50) DEFAULT NULL,
  `total` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komens`
--

CREATE TABLE `komens` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `komen` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komens`
--

INSERT INTO `komens` (`id`, `id_pengguna`, `id_dokter`, `nama`, `commentable_id`, `commentable_type`, `komen`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'Suryadi', 8, 'App\\forum', 'Wow', '2019-10-17 08:32:36', '2019-10-17 08:32:36'),
(6, 2, 2, 'Bayu Pratama', 8, 'App\\forum', 'Edi Wow', '2019-10-17 08:34:27', '2019-10-17 08:34:27'),
(7, 2, 2, 'Bayu Pratama', 8, 'App\\forum', 'uwow', '2019-10-17 08:37:18', '2019-10-17 08:37:18');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_29_162607_create_admin_table', 1),
(5, '2019_09_29_162646_create_pengguna_table', 1),
(6, '2019_09_29_162702_create_dokter_table', 1),
(7, '2019_10_05_040338_create_artikel_table', 1);

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
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Bayu Pratama', 'uyab123@gmail.com', NULL, '12345', NULL, '2019-10-07 11:55:31', '2019-10-07 11:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`hasil_id`);

--
-- Indexes for table `komens`
--
ALTER TABLE `komens`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunas_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `diagnosas`
--
ALTER TABLE `diagnosas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `hasil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komens`
--
ALTER TABLE `komens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
