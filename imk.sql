-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 10.1.28-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk entrepreneur
DROP DATABASE IF EXISTS `entrepreneur`;
CREATE DATABASE IF NOT EXISTS `entrepreneur` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `entrepreneur`;

-- membuang struktur untuk table entrepreneur.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.admins: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT IGNORE INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '$2y$10$PI.F6OaRcTOZHDmcpllWaubVUXuEUuuOf/ue9As.T1OfFH5waKULC', NULL, '2017-05-23 22:18:25', '2017-05-23 22:18:25'),
	(2, 'yoga', 'yoga@admin.com', '$2y$10$fnZmWjkYs4rChQ/443IX3OnMCQ3UpZq/Xqup.6TLoUoSLn17CF5BO', NULL, '2018-05-14 10:05:09', '2018-05-14 10:05:09'),
	(3, 'yogas', 'yogas@admin.com', '$2y$10$A4bMUKZ7yrASMkTMiidW1OpeS.mxj22NVteJ7e/ZtCMSCLmF7SLCe', NULL, '2018-05-14 10:07:06', '2018-05-14 10:07:06');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.logs
DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logging` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.logs: ~81 rows (lebih kurang)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT IGNORE INTO `logs` (`id`, `logging`, `created_at`, `updated_at`) VALUES
	(1, 'User dengan email user4@gmail.com telah mendaftar', '2017-05-23 23:43:52', '2017-05-23 23:43:52'),
	(4, 'User dengan email user4@gmail.com mengedit profil', '2017-05-23 23:47:08', '2017-05-23 23:47:08'),
	(5, 'User dengan email user4@gmail.com membuat postingan', '2017-05-23 23:49:46', '2017-05-23 23:49:46'),
	(6, 'User dengan email user4@gmail.com mengedit postingan', '2017-05-23 23:51:23', '2017-05-23 23:51:23'),
	(7, 'User dengan email user4@gmail.com mendelet postingan', '2017-05-23 23:52:13', '2017-05-23 23:52:13'),
	(8, 'User dengan email user4@gmail.com mengedit profil', '2017-05-24 00:02:54', '2017-05-24 00:02:54'),
	(9, 'User dengan email user@gmail.com mendelet postingan', '2017-05-24 00:03:15', '2017-05-24 00:03:15'),
	(10, 'User dengan email user@gmail.com mengedit profil', '2017-05-24 05:31:44', '2017-05-24 05:31:44'),
	(11, 'User dengan email user@gmail.com mendelet postingan', '2017-05-24 05:58:11', '2017-05-24 05:58:11'),
	(12, 'User dengan email user@gmail.com mengedit postingan', '2017-05-25 16:35:29', '2017-05-25 16:35:29'),
	(13, 'User dengan email user@gmail.com mengedit postingan', '2017-05-25 16:47:03', '2017-05-25 16:47:03'),
	(14, 'User dengan email user@gmail.com mengedit postingan', '2017-05-25 16:50:01', '2017-05-25 16:50:01'),
	(15, 'User dengan email user@gmail.com membuat postingan', '2017-05-26 10:57:13', '2017-05-26 10:57:13'),
	(16, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 11:25:38', '2017-05-26 11:25:38'),
	(17, 'User dengan email user@gmail.com membuat postingan', '2017-05-26 12:46:23', '2017-05-26 12:46:23'),
	(18, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 12:47:05', '2017-05-26 12:47:05'),
	(19, 'User dengan email user@gmail.com mendelet postingan', '2017-05-26 12:48:35', '2017-05-26 12:48:35'),
	(20, 'User dengan email user@gmail.com mendelet postingan', '2017-05-26 12:48:39', '2017-05-26 12:48:39'),
	(21, 'User dengan email user@gmail.com mendelet postingan', '2017-05-26 12:48:41', '2017-05-26 12:48:41'),
	(22, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 12:57:34', '2017-05-26 12:57:34'),
	(23, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 12:57:56', '2017-05-26 12:57:56'),
	(24, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 12:58:18', '2017-05-26 12:58:18'),
	(25, 'User dengan email user@gmail.com mengedit postingan', '2017-05-26 12:58:36', '2017-05-26 12:58:36'),
	(26, 'User dengan email user@gmail.com membuat postingan', '2017-05-27 07:02:51', '2017-05-27 07:02:51'),
	(27, 'User dengan email user@gmail.com mendelet postingan', '2017-05-27 07:04:48', '2017-05-27 07:04:48'),
	(28, 'User dengan email user@gmail.com membuat postingan', '2017-05-27 07:05:28', '2017-05-27 07:05:28'),
	(29, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 12:50:27', '2017-05-28 12:50:27'),
	(30, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 12:56:26', '2017-05-28 12:56:26'),
	(31, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 12:57:04', '2017-05-28 12:57:04'),
	(32, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 13:46:57', '2017-05-28 13:46:57'),
	(33, 'User dengan email user@gmail.com mendelet postingan', '2017-05-28 16:47:28', '2017-05-28 16:47:28'),
	(34, 'User dengan email user@gmail.com mendelet postingan', '2017-05-28 16:47:31', '2017-05-28 16:47:31'),
	(35, 'User dengan email user@gmail.com membuat postingan', '2017-05-28 16:48:54', '2017-05-28 16:48:54'),
	(36, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 17:49:55', '2017-05-28 17:49:55'),
	(37, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 21:00:52', '2017-05-28 21:00:52'),
	(38, 'User dengan email user@gmail.com membuat postingan', '2017-05-28 21:02:09', '2017-05-28 21:02:09'),
	(39, 'User dengan email user@gmail.com mendelet postingan', '2017-05-28 21:02:19', '2017-05-28 21:02:19'),
	(40, 'User dengan email user@gmail.com mengedit profil', '2017-05-28 21:03:23', '2017-05-28 21:03:23'),
	(41, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:05:24', '2017-06-03 11:05:24'),
	(42, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:07:04', '2017-06-03 11:07:04'),
	(43, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:07:55', '2017-06-03 11:07:55'),
	(44, 'User dengan email user@gmail.com mengedit profil', '2017-06-03 11:10:10', '2017-06-03 11:10:10'),
	(45, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:11:22', '2017-06-03 11:11:22'),
	(46, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:11:32', '2017-06-03 11:11:32'),
	(47, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:13:22', '2017-06-03 11:13:22'),
	(48, 'User dengan email user@gmail.com mengedit postingan', '2017-06-03 11:13:43', '2017-06-03 11:13:43'),
	(49, 'User dengan email user@gmail.com mengedit profil', '2017-06-03 11:19:41', '2017-06-03 11:19:41'),
	(50, 'User dengan email user@gmail.com mengedit profil', '2017-07-20 14:03:50', '2017-07-20 14:03:50'),
	(51, 'User dengan email Bappenas@gmail.com telah mendaftar', '2017-07-20 14:04:28', '2017-07-20 14:04:28'),
	(52, 'User dengan email Bappenas@gmail.com mengedit profil', '2017-07-20 14:04:54', '2017-07-20 14:04:54'),
	(53, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 14:44:05', '2017-07-20 14:44:05'),
	(54, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 14:44:43', '2017-07-20 14:44:43'),
	(55, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 14:52:52', '2017-07-20 14:52:52'),
	(56, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 14:54:34', '2017-07-20 14:54:34'),
	(57, 'User dengan email user@gmail.com membuat postingan', '2017-07-20 14:55:48', '2017-07-20 14:55:48'),
	(58, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:54:52', '2017-07-20 15:54:52'),
	(59, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:55:21', '2017-07-20 15:55:21'),
	(60, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:55:32', '2017-07-20 15:55:32'),
	(61, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:56:09', '2017-07-20 15:56:09'),
	(62, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:56:20', '2017-07-20 15:56:20'),
	(63, 'User dengan email user@gmail.com mengedit postingan', '2017-07-20 15:56:47', '2017-07-20 15:56:47'),
	(64, 'User dengan email tejamukti03@gmail.com telah mendaftar', '2018-04-25 04:00:12', '2018-04-25 04:00:12'),
	(65, 'User dengan email tejamukti03@gmail.com membuat postingan', '2018-04-25 04:01:37', '2018-04-25 04:01:37'),
	(66, 'User dengan email tejamukti03@gmail.com mengedit profil', '2018-04-25 07:32:17', '2018-04-25 07:32:17'),
	(67, 'User dengan email dani@gmail.com telah mendaftar', '2018-04-25 08:26:30', '2018-04-25 08:26:30'),
	(68, 'User dengan email dani@gmail.com membuat postingan', '2018-04-25 08:29:15', '2018-04-25 08:29:15'),
	(69, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 08:55:06', '2018-04-25 08:55:06'),
	(70, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 10:05:54', '2018-04-25 10:05:54'),
	(71, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 10:11:06', '2018-04-25 10:11:06'),
	(72, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 11:26:34', '2018-04-25 11:26:34'),
	(73, 'User dengan email tejamukti03@gmail.com mengedit profil', '2018-04-25 11:27:50', '2018-04-25 11:27:50'),
	(74, 'User dengan email dani@gmail.com membuat postingan', '2018-04-25 11:57:20', '2018-04-25 11:57:20'),
	(75, 'User dengan email dani@gmail.com mendelet postingan', '2018-04-25 11:57:24', '2018-04-25 11:57:24'),
	(76, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 12:16:23', '2018-04-25 12:16:23'),
	(77, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 12:36:13', '2018-04-25 12:36:13'),
	(78, 'User dengan email dani@gmail.com membuat postingan', '2018-04-25 13:12:17', '2018-04-25 13:12:17'),
	(79, 'User dengan email dani@gmail.com mendelet postingan', '2018-04-25 13:12:25', '2018-04-25 13:12:25'),
	(80, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 13:13:46', '2018-04-25 13:13:46'),
	(81, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 13:19:33', '2018-04-25 13:19:33'),
	(82, 'User dengan email dani@gmail.com mengedit profil', '2018-04-25 13:29:22', '2018-04-25 13:29:22'),
	(83, 'User dengan email tejamukti03@gmail.com mengedit profil', '2018-04-25 13:29:30', '2018-04-25 13:29:30'),
	(84, 'User dengan email yoga@yoga.com telah mendaftar', '2018-05-13 20:57:54', '2018-05-13 20:57:54'),
	(85, 'User dengan email yoga@yoga.com mengedit profil', '2018-05-14 11:07:16', '2018-05-14 11:07:16'),
	(86, 'User dengan email user@gmail.com mendelet postingan', '2018-05-14 17:07:37', '2018-05-14 17:07:37'),
	(87, 'User dengan email user@gmail.com mendelet postingan', '2018-05-14 17:07:39', '2018-05-14 17:07:39'),
	(88, 'User dengan email user@gmail.com mendelet postingan', '2018-05-14 17:07:40', '2018-05-14 17:07:40'),
	(89, 'User dengan email yoga@yoga.com mengedit profil', '2018-05-14 19:08:26', '2018-05-14 19:08:26'),
	(90, 'User dengan email yoga@yoga.com mengedit profil', '2018-05-14 19:10:55', '2018-05-14 19:10:55'),
	(91, 'User dengan email yoga@yoga.com mengedit profil', '2018-05-14 19:11:17', '2018-05-14 19:11:17'),
	(92, 'User dengan email yoga@yoga.com mengedit profil', '2018-05-14 19:18:10', '2018-05-14 19:18:10');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.messages: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT IGNORE INTO `messages` (`id`, `sender`, `receiver`, `msg`, `created_at`, `updated_at`) VALUES
	(2, 'user@gmail.com', 'Bappenas@gmail.com', 'Seamat Pagi Pak, Saya berencana menyumbang pembangunan Infrastruktur Trans Papua. Untuk Target selesai pembangunan Trans Papua Kapan pak?', '2017-07-20 07:07:45', '2017-07-20 07:07:45'),
	(3, 'dani@gmail.com', 'tejamukti03@gmail.com', 'Apakah Bapak ingin Membantu?', '2018-04-25 04:26:25', '2018-04-25 04:26:25'),
	(4, 'tejamukti03@gmail.com', 'dani@gmail.com', 'Iya Pak, Kira kira pengerjaannya berapa bulan Pak?', '2018-04-25 04:27:46', '2018-04-25 04:27:46'),
	(5, 'tejamukti03@gmail.com', 'dani@gmail.com', 'Bagaimana pak?', '2018-04-25 06:26:23', '2018-04-25 06:26:23'),
	(6, 'dani@gmail.com', 'tejamukti03@gmail.com', 'tanya', '2018-04-25 06:38:14', '2018-04-25 06:38:14'),
	(7, 'yoga@yoga.com', 'yogas@admin.com', 'Halo Admin. Mau kenalan.', '2018-05-14 12:09:40', '2018-05-14 12:09:40');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.migrations: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2017_05_16_010344_create_admins_table', 1),
	(4, '2017_05_18_210652_Postingan', 1),
	(5, '2017_05_19_015032_create_messages_table', 1),
	(6, '2017_05_23_162840_logging', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.password_resets: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.postingans
DROP TABLE IF EXISTS `postingans`;
CREATE TABLE IF NOT EXISTS `postingans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namausaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatusaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namafoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typefoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.postingans: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `postingans` DISABLE KEYS */;
INSERT IGNORE INTO `postingans` (`id`, `email`, `namausaha`, `biaya`, `tempatusaha`, `namafoto`, `typefoto`, `diskripsi`, `created_at`, `updated_at`, `kategori`) VALUES
	(17, 'tejamukti03@gmail.com', 'bakso', '150000', 'Kediri', '1524603696.luasnya ampunan Alla.jpg', 'image/jpeg', 'semoga lancar', '2018-04-24 21:01:37', '2018-04-24 21:01:37', 'Wirausaha'),
	(18, 'dani@gmail.com', 'Usaha Warung', '2000000', 'Keputih GG 1 A', '1524619755.warung.jpg', 'image/jpeg', 'dalam usaha warung saya menjual aneka macam kopi dan aneka manakan ringan, biaya ini digunakan untuk menambah modal usaha agar lebih besar dagangan saya', '2018-04-25 01:29:15', '2018-04-25 01:29:15', 'Wirausaha');
/*!40000 ALTER TABLE `postingans` ENABLE KEYS */;

-- membuang struktur untuk table entrepreneur.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel entrepreneur.users: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'user', 'user@gmail.com', '1495968595.png', '$2y$10$qVfXK.wbc1/WMdsVjFelkOj62GEoxxrf7PM6kVYPe7ZObCVmOhNFi', '80uOouuMG7wsANnD0nvktXH3DDoMtUdyGf7BKGRVARU4cRg3AupJjQ1hnK1P', '2017-05-22 10:27:14', '2017-05-28 10:49:55'),
	(3, 'user2', 'user2@gmail.com', 'default.jpg', '$2y$10$6hmZj70XK/OAKf3RCN9mT.pAchzyqQQR./bMFuwwt1rCxEquGsWvW', 'shkd6F7f5DvHrWXF8eg6bxfIBehvykcTTTjaw3r69u6wX4j80BMG0RHA7lfO', '2017-05-23 16:40:20', '2017-05-23 16:40:20'),
	(4, 'user3', 'user3@gmail.com', 'default.jpg', '$2y$10$W6w7..wKdkAok2h101QcJu1WfUGDcTM4MqVVCmOu0lsfk6X4QmdJe', 'cR9RH7ZUwRfpddOZhapGdaDsFEQAa0cV3VsqK3cAt3OTQHyYrdFFhm1EtFrk', '2017-05-23 16:42:07', '2017-05-23 16:42:07'),
	(5, 'user4', 'user4@gmail.com', '1495558028.JPG', '$2y$10$6Y90STwGMvuT7MJrO2.op.x0ZK344jm0txTNZKwjt6f2sbp90btrO', 'SHvjovUwJk8TsycmcKTFx38gpJzq0jFNZkIAQWSdGCmAIXsLgv2QE5dusBWM', '2017-05-23 16:43:52', '2017-05-23 16:47:08'),
	(6, 'Bappenas', 'Bappenas@gmail.com', 'default.jpg', '$2y$10$LTKCBHGyUfboO.ffikhj0.p7qvA5rzcPyW8sb/CQwUWQekH6.nzlW', 'lfy4YEiDWgnpkxZwDeZ9PeoOOOgolQV8jtb0ybCJjm2AzH6zEs4wpwUxKbxU', '2017-07-20 07:04:28', '2017-07-20 07:04:28'),
	(7, 'teja', 'tejamukti03@gmail.com', 'default.jpg', '$2y$10$zi9DRxPyHwatSfInyWTSjOVrC8XQpvCExNK8ds4vpIef/GSuRs6jW', '4jvjW36bbaOiYuU4u3JPZt0up6RTMOblG2UVxZltQN4AfsKcpAdNbmLZ6bpH', '2018-04-24 21:00:12', '2018-04-24 21:00:12'),
	(8, 'dani', 'dani@gmail.com', 'default.jpg', '$2y$10$octFhave9lw6xCtuJFNSU.TyXrDP5c3UkWBRNzezEcHRH6eTujEsu', 'DuCyGDhXVPPlDitGH3xiDk50xQzV3YDHanHojeYbV748hjffDg195wbsxt7h', '2018-04-25 01:26:30', '2018-04-25 01:26:30'),
	(9, 'yoga', 'yoga@yoga.com', '1526299855.jpg', '$2y$10$qJqTia5062lLPH7YEV9pReQNYB.pHwSYz3blMFCNH60lOF86DvdA2', 'BgIJ6b6zNLcHHRhPRPQRRVzsp5zZ4VAxUEIfTdVBjhlLkIfIbuFmQtvFvQdS', '2018-05-13 13:57:54', '2018-05-14 12:10:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- membuang struktur untuk trigger entrepreneur.addPostingan
DROP TRIGGER IF EXISTS `addPostingan`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `addPostingan` AFTER INSERT ON `postingans` FOR EACH ROW BEGIN
	INSERT INTO LOGS(logging,created_at,updated_at) VALUES (CONCAT("User dengan email ",new.email," membuat postingan"),NOW(),NOW());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- membuang struktur untuk trigger entrepreneur.addUser
DROP TRIGGER IF EXISTS `addUser`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `addUser` AFTER INSERT ON `users` FOR EACH ROW BEGIN
	INSERT INTO logs(logging,created_at,updated_at) VALUES (concat("User dengan email ",new.email," telah mendaftar"),now(),now());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- membuang struktur untuk trigger entrepreneur.auditPostingan
DROP TRIGGER IF EXISTS `auditPostingan`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `auditPostingan` AFTER UPDATE ON `postingans` FOR EACH ROW BEGIN
	INSERT INTO LOGS(logging,created_at,updated_at) VALUES (CONCAT("User dengan email ",old.email," mengedit postingan"),NOW(),NOW());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- membuang struktur untuk trigger entrepreneur.auditUser
DROP TRIGGER IF EXISTS `auditUser`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `auditUser` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
	INSERT INTO LOGS(logging,created_at,updated_at) VALUES (CONCAT("User dengan email ",old.email," mengedit profil"),NOW(),NOW());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- membuang struktur untuk trigger entrepreneur.deletePostingan
DROP TRIGGER IF EXISTS `deletePostingan`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `deletePostingan` AFTER DELETE ON `postingans` FOR EACH ROW BEGIN
	INSERT INTO LOGS(logging,created_at,updated_at) VALUES (CONCAT("User dengan email ",old.email," mendelet postingan"),NOW(),NOW());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- membuang struktur untuk trigger entrepreneur.deleteUser
DROP TRIGGER IF EXISTS `deleteUser`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `deleteUser` AFTER DELETE ON `users` FOR EACH ROW BEGIN
	INSERT INTO LOGS(logging,created_at,updated_at) VALUES (CONCAT("User dengan email ",old.email," menghapus akun"),NOW(),NOW());
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
