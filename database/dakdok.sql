-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2021 at 10:21 PM
-- Server version: 5.7.34-log
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dakdok`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` bigint(20) UNSIGNED NOT NULL,
  `nama_iklan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_iklan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `nama_iklan`, `deskripsi_iklan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Iklan 1', 'Deskrpsi 1', '1630682564Contoh-Iklan.jpg', '2021-09-03 15:22:44', '2021-09-03 15:22:44'),
(2, 'Iklan 2', 'Deskripsi 2', '1630934457bg.jpg', '2021-09-03 15:27:42', '2021-09-06 13:20:57'),
(7, 'Iklan 3', 'deksripsi', '1631125976Kartu-Indonesia-Pintar.jpg', '2021-09-09 01:32:56', '2021-09-09 01:32:56'),
(8, 'Iklan 4', 'iklan 4', '1631126106Contoh-Iklan.jpg', '2021-09-09 01:35:06', '2021-09-09 01:35:06'),
(9, 'Iklan 5', 'deskrpsi 5', '1631126199logo.png', '2021-09-09 01:36:39', '2021-09-09 01:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2021_08_30_211845_create_iklan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_layanan`
--

CREATE TABLE `order_layanan` (
  `id_order_layanan` bigint(20) NOT NULL,
  `detail_pekerjaan` longtext NOT NULL,
  `keterangan` longtext NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_layanan`
--

INSERT INTO `order_layanan` (`id_order_layanan`, `detail_pekerjaan`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(57, 'a', 'a', '0', '2021-08-29 02:20:32', '2021-08-29 02:20:32'),
(58, 'b', 'b', '0', '2021-08-29 02:20:32', '2021-08-29 02:20:32'),
(59, 'a', 'a', '0', '2021-08-29 11:56:39', '2021-08-29 11:56:39'),
(60, 'b', 'b', '0', '2021-08-29 11:56:39', '2021-08-29 11:56:39'),
(61, 'a', 'a', '0', '2021-08-29 13:17:34', '2021-08-29 13:17:34'),
(62, 'b', 'b', '0', '2021-08-29 13:17:34', '2021-08-29 13:17:34'),
(63, 'a', 'a', '0', '2021-08-29 13:18:51', '2021-08-29 13:18:51'),
(64, 'b', 'b', '0', '2021-08-29 13:18:51', '2021-08-29 13:18:51'),
(65, 'a', 'a', '0', '2021-08-29 13:21:27', '2021-08-29 13:21:27'),
(66, 'b', 'b', '0', '2021-08-29 13:21:27', '2021-08-29 13:21:27'),
(67, 'a', 'a', '0', '2021-08-29 13:25:37', '2021-08-29 13:25:37'),
(68, 'a', 'a', '0', '2021-08-29 13:31:30', '2021-08-29 13:31:30'),
(69, 'a', 'a', '0', '2021-08-29 13:32:33', '2021-08-29 13:32:33'),
(70, 'a', 'a', '0', '2021-08-29 13:38:39', '2021-08-29 13:38:39'),
(71, 'a', 'a', '0', '2021-08-29 13:40:47', '2021-08-29 13:40:47'),
(72, 'a', 'a', '0', '2021-08-29 13:42:57', '2021-08-29 13:42:57'),
(73, 'a', 'a', '0', '2021-08-29 14:14:32', '2021-08-29 14:14:32'),
(74, 'a', 'a', '0', '2021-08-29 15:35:27', '2021-08-29 15:35:27'),
(75, 'b', 'b', '0', '2021-08-29 15:35:27', '2021-08-29 15:35:27'),
(78, 'a', 'a', '0', '2021-08-29 15:41:24', '2021-08-29 15:41:24'),
(79, 'b', 'b', '0', '2021-08-29 15:41:24', '2021-08-29 15:41:24'),
(82, 'a', 'a', '0', '2021-09-03 15:49:44', '2021-09-03 15:49:44'),
(83, 'a', 'a', '0', '2021-09-03 15:50:20', '2021-09-03 15:50:20'),
(84, 'a', 'a', '0', '2021-09-03 15:51:49', '2021-09-03 15:51:49'),
(85, 'a', 'a', '0', '2021-09-06 11:05:32', '2021-09-06 11:05:32'),
(86, 'a', 'a', '0', '2021-09-06 11:17:47', '2021-09-06 11:17:47'),
(87, 'a', 'a', '0', '2021-09-06 11:18:03', '2021-09-06 11:18:03'),
(88, 'a', 'a', '0', '2021-09-06 11:20:17', '2021-09-06 11:20:17'),
(89, 'a', 'a', '0', '2021-09-06 11:20:47', '2021-09-06 11:20:47'),
(90, 'a', 'a', '0', '2021-09-06 11:26:22', '2021-09-06 11:26:22'),
(91, 'a', 'a', '0', '2021-09-06 14:05:18', '2021-09-06 14:05:18'),
(92, 'a', 'a', '0', '2021-09-06 15:41:48', '2021-09-06 15:41:48'),
(93, 'a', 'a', '0', '2021-09-06 15:42:19', '2021-09-06 15:42:19'),
(94, 'a', 'a', '0', '2021-09-06 15:43:21', '2021-09-06 15:43:21'),
(95, 'a', 'a', '0', '2021-09-06 15:44:32', '2021-09-06 15:44:32'),
(96, 'a', 'a', '0', '2021-09-06 15:44:54', '2021-09-06 15:44:54'),
(97, 'a', 'a', '0', '2021-09-07 01:39:50', '2021-09-07 01:39:50'),
(98, 'a', 'a', '0', '2021-09-07 01:40:14', '2021-09-07 01:40:14'),
(99, 'a', 'a', '0', '2021-09-07 02:01:50', '2021-09-07 02:01:50'),
(100, 'a', 'a', '0', '2021-09-07 04:06:37', '2021-09-07 04:06:37'),
(101, 'a', 'a', '0', '2021-09-07 04:07:06', '2021-09-07 04:07:06'),
(102, 'a', 'a', '0', '2021-09-07 04:19:45', '2021-09-07 04:19:45'),
(103, 'a', 'a', '0', '2021-09-08 03:19:18', '2021-09-08 03:19:18'),
(104, 'b', 'b', '0', '2021-09-08 03:19:19', '2021-09-08 03:19:19'),
(107, 'a', 'a', '0', '2021-09-08 03:50:46', '2021-09-08 03:50:46'),
(108, 'b', 'b', '0', '2021-09-08 03:50:46', '2021-09-08 03:50:46'),
(109, 'a', 'a', '0', '2021-09-08 03:52:53', '2021-09-08 03:52:53'),
(110, 'b', 'b', '0', '2021-09-08 03:52:53', '2021-09-08 03:52:53'),
(111, 'a', 'a', '0', '2021-09-08 04:11:52', '2021-09-08 04:11:52'),
(112, 'a', 'a', '0', '2021-09-08 04:13:19', '2021-09-08 04:13:19'),
(113, 'a', 'a', '0', '2021-09-08 04:20:20', '2021-09-08 04:20:20'),
(114, 'a', 'a', '0', '2021-09-08 04:21:06', '2021-09-08 04:21:06'),
(115, 'a', 'a', '0', '2021-09-08 04:24:56', '2021-09-08 04:24:56'),
(116, 'a', 'a', '0', '2021-09-08 04:26:39', '2021-09-08 04:26:39'),
(117, 'a', 'a', '0', '2021-09-08 04:28:29', '2021-09-08 04:28:29'),
(118, 'a', 'a', '0', '2021-09-08 04:29:08', '2021-09-08 04:29:08'),
(119, 'a', 'a', '0', '2021-09-08 04:30:46', '2021-09-08 04:30:46'),
(120, 'a', 'a', '0', '2021-09-08 04:31:32', '2021-09-08 04:31:32'),
(121, 'a', 'a', '0', '2021-09-08 04:32:34', '2021-09-08 04:32:34'),
(122, 'a', 'a', '0', '2021-09-08 04:33:26', '2021-09-08 04:33:26'),
(123, 'a', 'a', '0', '2021-09-08 04:34:53', '2021-09-08 04:34:53'),
(124, 'a', 'a', '0', '2021-09-08 04:36:06', '2021-09-08 04:36:06'),
(125, 'a', 'a', '0', '2021-09-08 04:37:01', '2021-09-08 04:37:01'),
(126, 'a', 'a', '0', '2021-09-08 04:39:19', '2021-09-08 04:39:19'),
(127, 'a', 'a', '0', '2021-09-08 04:40:35', '2021-09-08 04:40:35'),
(128, 'a', 'a', '0', '2021-09-08 04:42:18', '2021-09-08 04:42:18'),
(129, 'a', 'a', '0', '2021-09-08 04:46:42', '2021-09-08 04:46:42'),
(130, 'a', 'a', '0', '2021-09-08 04:48:14', '2021-09-08 04:48:14'),
(131, 'a', 'a', '0', '2021-09-08 04:49:17', '2021-09-08 04:49:17'),
(132, 'a', 'a', '0', '2021-09-08 04:53:47', '2021-09-08 04:53:47'),
(133, 'a', 'a', '0', '2021-09-08 04:54:54', '2021-09-08 04:54:54'),
(134, 'a', 'a', '0', '2021-09-08 04:56:44', '2021-09-08 04:56:44'),
(135, 'a', 'a', '0', '2021-09-08 04:57:26', '2021-09-08 04:57:26'),
(136, 'a', 'a', '0', '2021-09-08 04:58:40', '2021-09-08 04:58:40'),
(137, 'a', 'a', '0', '2021-09-08 04:59:25', '2021-09-08 04:59:25'),
(138, 'a', 'a', '0', '2021-09-08 05:01:53', '2021-09-08 05:01:53'),
(139, 'a', 'a', '0', '2021-09-08 12:17:55', '2021-09-08 12:17:55'),
(140, 'a', 'a', '0', '2021-09-08 12:21:12', '2021-09-08 12:21:12'),
(141, 'a', 'a', '0', '2021-09-08 12:22:14', '2021-09-08 12:22:14'),
(142, 'a', 'a', '0', '2021-09-09 00:28:55', '2021-09-09 00:28:55'),
(143, 'Test', 'Test', '0', '2021-09-09 02:35:31', '2021-09-09 02:35:31'),
(144, 'detail', 'keterngan', '0', '2021-09-09 10:36:32', '2021-09-09 10:36:32'),
(145, 'a', 'a', '0', '2021-09-09 10:36:32', '2021-09-09 10:36:32'),
(146, 'a', 'a', '0', '2021-09-09 10:43:45', '2021-09-09 10:43:45'),
(147, 'A', 'A', '0', '2021-09-09 11:23:57', '2021-09-09 11:23:57'),
(148, 'a', 'a', '0', '2021-09-09 11:25:20', '2021-09-09 11:25:20'),
(149, 'A', 'A', '0', '2021-09-09 11:26:47', '2021-09-09 11:26:47'),
(150, 'a', 'a', '0', '2021-09-09 11:29:33', '2021-09-09 11:29:33'),
(151, 'Tes', 'Tes', '0', '2021-09-09 11:29:56', '2021-09-09 11:29:56'),
(152, 'a', 'a', '0', '2021-09-09 11:50:33', '2021-09-09 11:50:33'),
(153, 'A', 'A', '0', '2021-09-09 11:54:40', '2021-09-09 11:54:40'),
(154, 'Merik', 'Amerika', '0', '2021-09-09 12:19:58', '2021-09-09 12:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'ridho_device', '76fda5e9c2b53d346fbfc8a0c58cb912d49468de6ccd1e64a128af8bc0e8fbd3', '[\"*\"]', '2021-08-30 10:40:40', '2021-08-30 10:20:20', '2021-08-30 10:40:40'),
(2, 'App\\Models\\User', 4, 'ridho_3_device', '36626392eb534d56e315ac86abc8bd6e6d0cbeb2abf677fd40747392d7cea122', '[\"*\"]', '2021-09-02 03:58:48', '2021-09-02 03:47:15', '2021-09-02 03:58:48'),
(3, 'App\\Models\\User', 6, 'device_08899776764757', '652aa6c961ccae97db9acb6c4092b2505fbce2fd143e09c6cc7c6a0c5f3ec5ff', '[\"*\"]', NULL, '2021-09-09 00:51:38', '2021-09-09 00:51:38'),
(4, 'App\\Models\\User', 5, 'device_08123456789', '4214072dbd9f73d6a1f4f5c57aebf4b5306c2832f3cc43a9d57138b26f5bf47b', '[\"*\"]', NULL, '2021-09-09 01:01:19', '2021-09-09 01:01:19'),
(5, 'App\\Models\\User', 5, 'device_08123456789', '2ac06ce8e0c77c8b36bf23e37e1d2250e11ea17ba0610af03e6e0d75ffc3762a', '[\"*\"]', NULL, '2021-09-09 01:01:21', '2021-09-09 01:01:21'),
(6, 'App\\Models\\User', 5, 'device_08123456789', '07a0025afd0d8bb0908223d1276cfad1cc36f64795061dda68040884c8b21c5a', '[\"*\"]', NULL, '2021-09-09 01:01:27', '2021-09-09 01:01:27'),
(7, 'App\\Models\\User', 5, 'device_08123456789', 'e880a016108d6f25f6af7c44c6236c50172d6c5313f76569cb06226b1e5fa1ac', '[\"*\"]', NULL, '2021-09-09 01:25:47', '2021-09-09 01:25:47'),
(8, 'App\\Models\\User', 5, 'device_08123456789', '1d97f9159a1c2c4644601b24e14f89c0f99843c2a365bf9578049ff2bb59d03e', '[\"*\"]', NULL, '2021-09-09 01:32:34', '2021-09-09 01:32:34'),
(9, 'App\\Models\\User', 5, 'device_08123456789', '5f57667cdd924d30d3cae69aadaf198006ae101d77cb2ce8b7966667a842423c', '[\"*\"]', NULL, '2021-09-09 01:32:43', '2021-09-09 01:32:43'),
(10, 'App\\Models\\User', 5, 'device_08123456789', '1dbd439d7069e5db85a6bb134f018c6546ecb3527b375b423d9bb41baa6b5e72', '[\"*\"]', NULL, '2021-09-09 01:32:56', '2021-09-09 01:32:56'),
(11, 'App\\Models\\User', 5, 'device_08123456789', 'e029d74205ab4a761b8c5725fb19bb9256137aabccc941cebac0c31890b16fd8', '[\"*\"]', NULL, '2021-09-09 01:34:20', '2021-09-09 01:34:20'),
(12, 'App\\Models\\User', 6, '08899776764757', 'e097a6750bf50c2ab9d4a9d3cc5fbd097b9ea0288c3cf5dd5683d0755d2c42b2', '[\"*\"]', NULL, '2021-09-09 01:40:36', '2021-09-09 01:40:36'),
(13, 'App\\Models\\User', 5, 'device_08123456789', '445ea092fd8b23d802f607a37c01998dc1842d62dd38a9fdbf3c9339ad1802d1', '[\"*\"]', NULL, '2021-09-09 01:44:25', '2021-09-09 01:44:25'),
(14, 'App\\Models\\User', 5, 'device_08123456789', '916edd10ca38c7a8aef83902308d50a8a754bd6bcad1dd115604b734230653cf', '[\"*\"]', NULL, '2021-09-09 01:44:35', '2021-09-09 01:44:35'),
(15, 'App\\Models\\User', 5, 'device_08123456789', '9e1021ed8b10b8b92c87613b12f762e170848ed088f3441c570116981c8cde58', '[\"*\"]', NULL, '2021-09-09 01:44:37', '2021-09-09 01:44:37'),
(16, 'App\\Models\\User', 5, 'device_08123456789', 'ece2bee2d0ae684e24934a1d3bd6e6b787d60242d9379ee7002dd2c860f68448', '[\"*\"]', NULL, '2021-09-09 01:44:37', '2021-09-09 01:44:37'),
(17, 'App\\Models\\User', 5, 'device_08123456789', '12a57b9fb145573e5107cf410080123f5404086ba7e1a7c1f22cd04bee83f2e8', '[\"*\"]', NULL, '2021-09-09 01:44:38', '2021-09-09 01:44:38'),
(18, 'App\\Models\\User', 5, 'device_08123456789', '986ab0e7215eca549dafaa2b3b350daa7c60a95be951a355fe9b860870a38975', '[\"*\"]', NULL, '2021-09-09 01:46:55', '2021-09-09 01:46:55'),
(19, 'App\\Models\\User', 6, '08899776764757', 'c47bdf93d57d6fda6db08f1dc429e47cf957dc50338bf9fb81e9a6e10a0579a9', '[\"*\"]', NULL, '2021-09-09 01:58:07', '2021-09-09 01:58:07'),
(20, 'App\\Models\\User', 5, 'device_08123456789', '03fbda0194a27e6ddb3dada1e013f087a061d8e3c5e52ad0aab9b93ad6bfb2e3', '[\"*\"]', NULL, '2021-09-09 01:59:05', '2021-09-09 01:59:05'),
(21, 'App\\Models\\User', 6, '08899776764757', 'c9908a51aeaecf846a6e5eac2cc77377b03c6165d13c564c98c807fef5741161', '[\"*\"]', NULL, '2021-09-09 02:04:53', '2021-09-09 02:04:53'),
(22, 'App\\Models\\User', 6, '08899776764757', 'd65ac5ffd56729a6303ea6d827698abb9b836f905029429f34600d595946acdd', '[\"*\"]', NULL, '2021-09-09 02:05:35', '2021-09-09 02:05:35'),
(23, 'App\\Models\\User', 5, 'device_08123456789', 'a01bdfcabcfd87261cca1de4618e1f5a789cc2453beb2fac53fa8b5756a71d53', '[\"*\"]', NULL, '2021-09-09 02:05:50', '2021-09-09 02:05:50'),
(24, 'App\\Models\\User', 6, '08899776764757', 'a5852f5085b7e88535c30277e7d158bb76936a610ab62f05ca42b60d53310a41', '[\"*\"]', NULL, '2021-09-09 02:05:56', '2021-09-09 02:05:56'),
(25, 'App\\Models\\User', 5, 'device_08123456789', '71a0f00069e85d5582e93507d1c12849ce596365da3253a2f8bc5fd8b76006fb', '[\"*\"]', NULL, '2021-09-09 02:05:57', '2021-09-09 02:05:57'),
(26, 'App\\Models\\User', 5, 'device_08123456789', '1a210da25c68af6631f35d7d578e1fe1d17bf203fd6f5bd8b46f16c4e3ad5cd4', '[\"*\"]', NULL, '2021-09-09 02:06:10', '2021-09-09 02:06:10'),
(27, 'App\\Models\\User', 6, '08899776764757', '6d91850eb2e68d2449316dddfd51bf85908cfd719661a4f1572ca23ec5de9645', '[\"*\"]', NULL, '2021-09-09 02:06:24', '2021-09-09 02:06:24'),
(28, 'App\\Models\\User', 5, 'device_08123456789', 'f3c29d0df5f2322d6469ddbe9c6a145198b94ef53d0376f5fbd5ab712884cd1e', '[\"*\"]', NULL, '2021-09-09 02:06:46', '2021-09-09 02:06:46'),
(29, 'App\\Models\\User', 5, 'device_08123456789', '90fc597d68abd49bc82a3500dd8a24426031ce744dfa91133e5b2df2b1fe48f0', '[\"*\"]', NULL, '2021-09-09 02:06:52', '2021-09-09 02:06:52'),
(30, 'App\\Models\\User', 5, 'device_08123456789', '7c8de1e3f444d37eeec53a59eb4867d4c377364c6c9f039b13723d300c1ed15a', '[\"*\"]', NULL, '2021-09-09 02:08:35', '2021-09-09 02:08:35'),
(31, 'App\\Models\\User', 5, 'device_08123456789', '0638d0faaee1038162de8744e5e696b6f3e4fa595eda23143f170bea6b69e94c', '[\"*\"]', NULL, '2021-09-09 02:10:35', '2021-09-09 02:10:35'),
(32, 'App\\Models\\User', 5, 'device_08123456789', 'f7189242e1634218992149be48760d639bf219202412d4638933ecd9c0ffd4ff', '[\"*\"]', NULL, '2021-09-09 02:12:57', '2021-09-09 02:12:57'),
(33, 'App\\Models\\User', 5, 'device_08123456789', 'fec35dced4b80ff354f6ab2cd565f5d74adb5d65ec71056e88fb45115d0e6df6', '[\"*\"]', NULL, '2021-09-09 02:13:10', '2021-09-09 02:13:10'),
(34, 'App\\Models\\User', 5, 'device_08123456789', '72c185a569cb5eb9ea86a7ceb447b628dbae9f645322a75126591af278196ab9', '[\"*\"]', NULL, '2021-09-09 02:13:22', '2021-09-09 02:13:22'),
(35, 'App\\Models\\User', 5, 'device_08123456789', 'f2f8b4037ba35221d332fefe71884fc3bc97077b1e87c5df665982a6240df724', '[\"*\"]', NULL, '2021-09-09 02:23:45', '2021-09-09 02:23:45'),
(36, 'App\\Models\\User', 5, 'device_08123456789', '68f927bffe2ec44c061ec9ea2f9759ad0b77b08e049849ff4684eedb98f22f00', '[\"*\"]', NULL, '2021-09-09 02:25:03', '2021-09-09 02:25:03'),
(37, 'App\\Models\\User', 5, 'device_08123456789', '12f793aca75ab24437656110adb0a6d33badfe5f0656474b7e49f474123b03a4', '[\"*\"]', NULL, '2021-09-09 02:25:42', '2021-09-09 02:25:42'),
(38, 'App\\Models\\User', 5, 'device_08123456789', '88d8a90accce5278cce07394d508e525b717bb5301e40de90e9dbb7d7ce60bf2', '[\"*\"]', NULL, '2021-09-09 02:28:26', '2021-09-09 02:28:26'),
(39, 'App\\Models\\User', 5, 'device_08123456789', '795b35bee8361a974a510321e9e2f4e6aae7dbcaca22a72a7773e2b26c593bf5', '[\"*\"]', NULL, '2021-09-09 11:17:11', '2021-09-09 11:17:11'),
(40, 'App\\Models\\User', 7, 'device_08123789456', '559f79bd4e950336c8e9e6d3494e95da85e7b89e79bd29a8573d893605808cc3', '[\"*\"]', NULL, '2021-09-09 11:20:46', '2021-09-09 11:20:46'),
(41, 'App\\Models\\User', 9, 'device_0812347894567', 'e784cab32ab38d3ebf5d0dcf17ce9be9b522079d957a5cd8d20c7e9c021188b2', '[\"*\"]', NULL, '2021-09-09 11:37:44', '2021-09-09 11:37:44'),
(42, 'App\\Models\\User', 5, 'device_08123456789', '4df7dccaf42f72bff18e788b3e50fcaa5142cba78dfae4720bcd7b408104a870', '[\"*\"]', NULL, '2021-09-09 11:52:49', '2021-09-09 11:52:49'),
(43, 'App\\Models\\User', 5, 'device_08123456789', '9c5919e3653b438dc14821b4c302275f9fe31c5883a65a9e69a609c8a5f55601', '[\"*\"]', NULL, '2021-09-09 12:55:20', '2021-09-09 12:55:20'),
(44, 'App\\Models\\User', 5, 'device_08123456789', '8e540fc5105606d63782bd9bfacac0af01acc170de4d8b454b9047b3f6ea17cb', '[\"*\"]', NULL, '2021-09-09 12:59:10', '2021-09-09 12:59:10'),
(45, 'App\\Models\\User', 5, 'device_08123456789', '6be72b622b3366d3fb048831d24306b5b0ae9bd2ed581f848bc9f06069734230', '[\"*\"]', NULL, '2021-09-09 13:00:45', '2021-09-09 13:00:45'),
(46, 'App\\Models\\User', 5, 'device_08123456789', '2532b44b7bded2f55bba3908c140fadee2de8ed24ffc960dc03e6cf93c4d1f47', '[\"*\"]', NULL, '2021-09-09 13:00:46', '2021-09-09 13:00:46'),
(47, 'App\\Models\\User', 5, 'device_08123456789', 'c6f179c28945153ebae01c6c9568b723aab6727c7d7be2c0b8c9a023047b2981', '[\"*\"]', NULL, '2021-09-09 13:00:46', '2021-09-09 13:00:46'),
(48, 'App\\Models\\User', 5, 'device_08123456789', '9e49ed0ae4bd3f4ebd18a053b16037513dd894da32e590650a609f77a3fa7b4f', '[\"*\"]', NULL, '2021-09-09 13:00:47', '2021-09-09 13:00:47'),
(49, 'App\\Models\\User', 5, 'device_08123456789', '2c830278600988444535f3e5dcdbb02d5c0cd8e6fe926615e14294736b79d28f', '[\"*\"]', NULL, '2021-09-09 13:00:47', '2021-09-09 13:00:47'),
(50, 'App\\Models\\User', 5, 'device_08123456789', '33bf07ae8a93b11ae1d96ab9783843cf8164acc3424099a23f157fb721e9fd1e', '[\"*\"]', NULL, '2021-09-09 13:00:47', '2021-09-09 13:00:47'),
(51, 'App\\Models\\User', 5, 'device_08123456789', '658d6e519fa8c77277470e9e22169d25e30516212a17b58a341690347d242b08', '[\"*\"]', NULL, '2021-09-09 13:00:50', '2021-09-09 13:00:50'),
(52, 'App\\Models\\User', 5, 'device_08123456789', '8bda4a059e7a30328c92818b4ed807ae695271887ee0fde6679394fdaf22a4b8', '[\"*\"]', NULL, '2021-09-09 13:00:50', '2021-09-09 13:00:50'),
(53, 'App\\Models\\User', 5, 'device_08123456789', 'c8e612cbd539e78bd40be2d4a4d609f0f59dc9517cf3f81d0ae464f57e5f9a0a', '[\"*\"]', NULL, '2021-09-09 13:00:50', '2021-09-09 13:00:50'),
(54, 'App\\Models\\User', 5, 'device_08123456789', 'e6b1b61dafcd581f9e853a74eea36c49cb77c3ff400bc4875a7b0b0499e8bfd2', '[\"*\"]', NULL, '2021-09-09 13:00:50', '2021-09-09 13:00:50'),
(55, 'App\\Models\\User', 5, 'device_08123456789', '2ccce58c74fa72b2505df147274846cfc4b8761d167ec3f1d6148fe27e2df6d1', '[\"*\"]', NULL, '2021-09-09 13:00:50', '2021-09-09 13:00:50'),
(56, 'App\\Models\\User', 5, 'device_08123456789', '4d6e9abd0cae846d9ca0d8d1cdea7b426fc1048803e974cc1fe4eb5c00476496', '[\"*\"]', NULL, '2021-09-09 13:00:51', '2021-09-09 13:00:51'),
(57, 'App\\Models\\User', 5, 'device_08123456789', '7f6c908134e6dc34073b3d39488bce8f260bdae62046c136ae3e9fc11b3ffd40', '[\"*\"]', NULL, '2021-09-09 13:01:11', '2021-09-09 13:01:11'),
(58, 'App\\Models\\User', 5, 'device_08123456789', '7dbcb9aa1516a4d97e13bcd70917bba883b048cb038abf6333788be7e204a4dc', '[\"*\"]', NULL, '2021-09-09 13:01:11', '2021-09-09 13:01:11'),
(59, 'App\\Models\\User', 5, 'device_08123456789', '9680e2ba35cb05fcc820edc5ba94f84fda12530ec9b3ddaab975ead32aef2206', '[\"*\"]', NULL, '2021-09-09 13:06:20', '2021-09-09 13:06:20'),
(60, 'App\\Models\\User', 5, 'device_08123456789', '609346473657af744fa4debfe903a026f5adc90225e2000e572aa96a72cea009', '[\"*\"]', NULL, '2021-09-09 13:19:19', '2021-09-09 13:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'order'),
(2, 'survey'),
(3, 'cancel'),
(4, 'deal'),
(5, 'dikerjakan'),
(6, 'selesai'),
(7, 'dibayar'),
(8, 'close');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_order_layanan` char(255) NOT NULL,
  `id_invoice` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_order_layanan` varchar(255) NOT NULL,
  `judul_pekerjaan` varchar(255) NOT NULL,
  `kontak_penerima` varchar(255) NOT NULL,
  `lokasi_pekerjaan` longtext NOT NULL,
  `deskripsi_pekerjaan` longtext NOT NULL,
  `pdf` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_order_layanan`, `id_invoice`, `nama_customer`, `alamat_lengkap`, `no_hp`, `jenis_order_layanan`, `judul_pekerjaan`, `kontak_penerima`, `lokasi_pekerjaan`, `deskripsi_pekerjaan`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
(12, '[57,58]', 'INV-20/29/08/2021-09:20', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630203627_Ridho Pujiono (Testing).pdf', 1, '2021-08-29 02:20:32', '2021-08-29 02:20:32'),
(13, '[59,60]', 'INV-56/29/08/2021-18:56', 'Ridho Pujiono (Testing 3)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630238190_Ridho Pujiono (Testing 3).pdf', 1, '2021-08-29 11:56:39', '2021-08-29 11:56:39'),
(14, '[61,62]', 'INV-17/29/08/2021-20:17', 'Ridho Pujiono (Testing 3)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243046_Ridho Pujiono (Testing 3).pdf', 1, '2021-08-29 13:17:35', '2021-08-29 13:17:35'),
(15, '[63,64]', 'INV-18/29/08/2021-20:18', 'Ridho Pujiono (Testing 3)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243124_Ridho Pujiono (Testing 3).pdf', 1, '2021-08-29 13:18:51', '2021-08-29 13:18:51'),
(16, '[65,66]', 'INV-21/29/08/2021-20:21', 'Ridho Pujiono (Testing 3)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243280_Ridho Pujiono (Testing 3).pdf', 1, '2021-08-29 13:21:27', '2021-08-29 13:21:27'),
(17, '[67]', 'INV-25/29/08/2021-20:25', 'Ridho Pujiono (Testing 4)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243532_Ridho Pujiono (Testing 4).pdf', 1, '2021-08-29 13:25:37', '2021-08-29 13:25:37'),
(18, '[68]', 'INV-31/29/08/2021-20:31', 'Ridho Pujiono (Testing 4)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243872_Ridho Pujiono (Testing 4).pdf', 1, '2021-08-29 13:31:30', '2021-08-29 13:31:30'),
(19, '[69]', 'INV-32/29/08/2021-20:32', 'Ridho Pujiono (Testing 5)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630243925_Ridho Pujiono (Testing 5).pdf', 1, '2021-08-29 13:32:33', '2021-08-29 13:32:33'),
(20, '[70]', 'INV-38/29/08/2021-20:38', 'Ridho Pujiono (Testing 5)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630244288_Ridho Pujiono (Testing 5).pdf', 1, '2021-08-29 13:38:40', '2021-08-29 13:38:40'),
(21, '[71]', 'INV-40/29/08/2021-20:40', 'Ridho Pujiono (Testing 5)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630244441_Ridho Pujiono (Testing 5).pdf', 1, '2021-08-29 13:40:47', '2021-08-29 13:40:47'),
(22, '[72]', 'INV-42/29/08/2021-20:42', 'Ridho Pujiono (Testing 5)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630244571_Ridho Pujiono (Testing 5).pdf', 1, '2021-08-29 13:42:57', '2021-08-29 13:42:57'),
(23, '[73]', 'INV-14/29/08/2021-21:14', 'Ridho Pujiono (Testing 5)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '088996825018', 'lokasi', 'deskripsi', '1630246466_Ridho Pujiono (Testing 5).pdf', 1, '2021-08-29 14:14:33', '2021-08-29 14:14:33'),
(24, '[74,75]', 'INV-35/29/08/2021-22:35', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630251320_Ridho Pujiono (Testing 6).pdf', 1, '2021-08-29 15:35:28', '2021-08-29 15:35:28'),
(26, '[78,79]', 'INV-41/29/08/2021-22:41', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630251674_Ridho Pujiono (Testing 6).pdf', 1, '2021-08-29 15:41:24', '2021-08-29 15:41:24'),
(28, '[82]', 'INV-49/03/09/2021-22:49', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'Tuban', 'des', '1630684174_Ridho Pujiono (Testing 6).pdf', 1, '2021-09-03 15:49:45', '2021-09-03 15:49:45'),
(29, '[83]', 'INV-50/03/09/2021-22:50', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'Tuban', 'des', '1630684209_Ridho Pujiono (Testing 6).pdf', 1, '2021-09-03 15:50:20', '2021-09-03 15:50:20'),
(30, '[84]', 'INV-51/03/09/2021-22:51', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pemasangan CCTV Baru', 'Perbaikan CCTV', '088996825018', 'Tuban', 'des', '1630684302_Ridho Pujiono (Testing 6).pdf', 1, '2021-09-03 15:51:49', '2021-09-03 15:51:49'),
(31, '[85]', 'INV-05/06/09/2021-18:05', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630926324_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:05:32', '2021-09-06 11:05:32'),
(32, '[86]', 'INV-17/06/09/2021-18:17', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630927061_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:17:47', '2021-09-06 11:17:47'),
(33, '[87]', 'INV-17/06/09/2021-18:17', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630927077_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:18:03', '2021-09-06 11:18:03'),
(34, '[88]', 'INV-20/06/09/2021-18:20', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630927208_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:20:17', '2021-09-06 11:20:17'),
(35, '[89]', 'INV-20/06/09/2021-18:20', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630927240_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:20:47', '2021-09-06 11:20:47'),
(36, '[90]', 'INV-26/06/09/2021-18:26', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630927572_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 11:26:22', '2021-09-06 11:26:22'),
(37, '[91]', 'INV-05/06/09/2021-21:05', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630937111_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 14:05:18', '2021-09-06 14:05:18'),
(38, '[92]', 'INV-41/06/09/2021-22:41', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630942899_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 15:41:49', '2021-09-06 15:41:49'),
(39, '[93]', 'INV-42/06/09/2021-22:42', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630942933_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 15:42:19', '2021-09-06 15:42:19'),
(40, '[94]', 'INV-43/06/09/2021-22:43', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630942995_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 15:43:21', '2021-09-06 15:43:21'),
(41, '[95]', 'INV-44/06/09/2021-22:44', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630943066_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 15:44:32', '2021-09-06 15:44:32'),
(42, '[96]', 'INV-44/06/09/2021-22:44', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Instalasi Kabel', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630943088_Ridho Pujiono (Testing).pdf', 1, '2021-09-06 15:44:54', '2021-09-06 15:44:54'),
(43, '[97]', 'INV-39/07/09/2021-08:39', 'Ridho Pujiono (Testing) 7', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Koneksi Online', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630978781_Ridho Pujiono (Testing) 7.pdf', 1, '2021-09-07 01:39:50', '2021-09-07 01:39:50'),
(44, '[98]', 'INV-40/07/09/2021-08:40', 'Ridho Pujiono (Testing) 7', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Koneksi Online', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630978806_Ridho Pujiono (Testing) 7.pdf', 1, '2021-09-07 01:40:14', '2021-09-07 01:47:18'),
(45, '[99]', 'INV-01/07/09/2021-09:01', 'Ridho Pujiono (Testing) 7', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Koneksi Online', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630980103_Ridho Pujiono (Testing) 7.pdf', 1, '2021-09-07 02:01:50', '2021-09-07 02:01:50'),
(46, '[100]', 'INV-06/07/09/2021-11:06', 'Ridho Pujiono (Testing a)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Pagar Dinding', 'Renovasi Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1630987590_Ridho Pujiono (Testing a).pdf', 1, '2021-09-07 04:06:37', '2021-09-07 04:06:37'),
(47, '[101]', 'INV-07/07/09/2021-11:07', 'Ridho Pujiono (Testing a)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Pagar Dinding', 'Renovasi Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1630987620_Ridho Pujiono (Testing a).pdf', 3, '2021-09-07 04:07:06', '2021-09-07 04:10:55'),
(48, '[102]', 'INV-19/07/09/2021-11:19', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Lainya', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1630988379_Ridho Pujiono (Testing).pdf', 1, '2021-09-07 04:19:45', '2021-09-07 04:19:45'),
(49, '[103,104]', 'INV-19/08/09/2021-10:19', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Atap Bocor', 'Renovasi Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1631071150_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 03:19:19', '2021-09-08 03:19:19'),
(51, '[107,108]', 'INV-50/08/09/2021-10:50', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Atap Bocor', 'Renovasi Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1631073042_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 03:50:47', '2021-09-08 03:50:47'),
(52, '[109,110]', 'INV-52/08/09/2021-10:52', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Atap Bocor', 'Renovasi Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1631073165_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 03:52:53', '2021-09-08 03:52:53'),
(53, '[111]', 'INV-11/08/09/2021-11:11', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631074304_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:11:52', '2021-09-08 04:11:52'),
(54, '[112]', 'INV-13/08/09/2021-11:13', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631074392_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:13:19', '2021-09-08 04:13:19'),
(55, '[113]', 'INV-20/08/09/2021-11:20', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631074812_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:20:20', '2021-09-08 04:20:20'),
(56, '[114]', 'INV-20/08/09/2021-11:20', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631074846_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:21:06', '2021-09-08 04:21:06'),
(57, '[115]', 'INV-24/08/09/2021-11:24', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075063_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:24:56', '2021-09-08 04:24:56'),
(58, '[116]', 'INV-26/08/09/2021-11:26', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075189_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:26:39', '2021-09-08 04:26:39'),
(59, '[117]', 'INV-28/08/09/2021-11:28', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075302_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:28:29', '2021-09-08 04:28:29'),
(60, '[118]', 'INV-29/08/09/2021-11:29', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075340_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:29:08', '2021-09-08 04:29:08'),
(61, '[119]', 'INV-30/08/09/2021-11:30', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075436_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:30:46', '2021-09-08 04:30:46'),
(62, '[120]', 'INV-31/08/09/2021-11:31', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075487_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:31:32', '2021-09-08 04:31:32'),
(63, '[121]', 'INV-32/08/09/2021-11:32', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075541_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:32:34', '2021-09-08 04:32:34'),
(64, '[122]', 'INV-33/08/09/2021-11:33', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075588_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:33:27', '2021-09-08 04:33:27'),
(65, '[123]', 'INV-34/08/09/2021-11:34', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075688_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:34:53', '2021-09-08 04:34:53'),
(66, '[124]', 'INV-35/08/09/2021-11:35', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075758_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:36:06', '2021-09-08 04:36:06'),
(67, '[125]', 'INV-36/08/09/2021-11:36', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075814_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:37:01', '2021-09-08 04:37:01'),
(68, '[126]', 'INV-39/08/09/2021-11:39', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631075953_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:39:19', '2021-09-08 04:39:19'),
(69, '[127]', 'INV-40/08/09/2021-11:40', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076030_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:40:35', '2021-09-08 04:40:35'),
(70, '[128]', 'INV-42/08/09/2021-11:42', 'Ridho Pujiono (Testing 10)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076132_Ridho Pujiono (Testing 10).pdf', 1, '2021-09-08 04:42:18', '2021-09-08 04:42:18'),
(71, '[129]', 'INV-46/08/09/2021-11:46', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076396_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:46:42', '2021-09-08 04:46:42'),
(72, '[130]', 'INV-48/08/09/2021-11:48', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076489_Ridho Pujiono (Testing 16).pdf', 3, '2021-09-08 04:48:14', '2021-09-08 12:24:04'),
(73, '[131]', 'INV-49/08/09/2021-11:49', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076552_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:49:17', '2021-09-08 04:49:17'),
(74, '[132]', 'INV-53/08/09/2021-11:53', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076820_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:53:47', '2021-09-08 04:53:47'),
(75, '[133]', 'INV-54/08/09/2021-11:54', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076888_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:54:54', '2021-09-08 04:54:54'),
(76, '[134]', 'INV-56/08/09/2021-11:56', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631076996_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:56:44', '2021-09-08 04:56:44'),
(77, '[135]', 'INV-57/08/09/2021-11:57', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631077041_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:57:26', '2021-09-08 04:57:26'),
(78, '[136]', 'INV-58/08/09/2021-11:58', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631077113_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:58:40', '2021-09-08 04:58:40'),
(79, '[137]', 'INV-59/08/09/2021-11:59', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631077158_Ridho Pujiono (Testing 16).pdf', 1, '2021-09-08 04:59:25', '2021-09-08 04:59:25'),
(80, '[138]', 'INV-01/08/09/2021-12:01', 'Ridho Pujiono (Testing 16)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Kaligrafi Mural Dinding', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631077306_Ridho Pujiono (Testing 16).pdf', 2, '2021-09-08 05:01:53', '2021-09-08 05:02:32'),
(81, '[139]', 'INV-17/08/09/2021-19:17', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsii', '1631103469_Ridho Pujiono (Testing 6).pdf', 1, '2021-09-08 12:17:55', '2021-09-08 12:17:55'),
(82, '[140]', 'INV-21/08/09/2021-19:21', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsii', '1631103660_Ridho Pujiono (Testing 6).pdf', 1, '2021-09-08 12:21:12', '2021-09-08 12:21:12'),
(83, '[141]', 'INV-22/08/09/2021-19:22', 'Ridho Pujiono (Testing 6)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsii', '1631103721_Ridho Pujiono (Testing 6).pdf', 4, '2021-09-08 12:22:14', '2021-09-08 12:24:12'),
(84, '[142]', 'INV-28/09/09/2021-00:28', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pagar', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'deskripsi', '1631122132_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 00:28:55', '2021-09-09 00:28:55'),
(85, '[143]', 'INV-35/09/09/2021-02:35', 'Tes', 'Tes', '08123456789', 'Perbaikan Atap Bocor', 'Perbaikan Skala Kecil', '09123456789', 'Test', 'Test', '1631129728_Tes.pdf', 1, '2021-09-09 02:35:31', '2021-09-09 02:35:31'),
(86, '[144,145]', 'INV-36/09/09/2021-10:36', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Koneksi Online', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deskripsi', '1631158588_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 10:36:32', '2021-09-09 10:36:32'),
(87, '[146]', 'INV-43/09/09/2021-10:43', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Lainya', 'Perbaikan CCTV', '088996825018', 'lokasi', 'deksipsi', '1631159022_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 10:43:45', '2021-09-09 10:43:45'),
(88, '[147]', 'INV-23/09/09/2021-11:23', 'Gilang', 'Tuban', '0889962816271', 'Perbaikan atau Pasang Keramik', 'Perbaikan Skala Kecil', '0889962816271', 'Lokasi', 'Deskripsi', '1631161434_Gilang.pdf', 1, '2021-09-09 11:23:57', '2021-09-09 11:23:57'),
(89, '[148]', 'INV-25/09/09/2021-11:25', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pengecatan Pintu / Kusen', 'Pekerjaan Pengecatan', '088996825018', 'lokasi', 'des', '1631161517_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 11:25:20', '2021-09-09 11:25:20'),
(90, '[149]', 'INV-26/09/09/2021-11:26', 'Ridho', 'Tuban', '0889962816271', 'Perbaikan Kran Bocor', 'Perbaikan Sanitair', '0889962816271', 'Lokasi', 'Des', '1631161604_Ridho.pdf', 1, '2021-09-09 11:26:47', '2021-09-09 11:26:47'),
(91, '[150]', 'INV-29/09/09/2021-11:29', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'PengecatanDinding Rumah', 'Perbaikan Skala Kecil', '088996825018', 'lokasi', 'deskripsi', '1631161771_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 11:29:33', '2021-09-09 11:29:33'),
(92, '[151]', 'INV-29/09/09/2021-11:29', 'Tester', 'Merik', '08123456789', 'Bongkar Pasang Meteran', 'Perbaikan Kelistrikan', '08123456789', 'Merik', 'Merik Tester', '1631161794_Tester.pdf', 1, '2021-09-09 11:29:56', '2021-09-09 11:29:56'),
(93, '[152]', 'INV-50/09/09/2021-11:50', 'Ridho Pujiono (Testing)', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Perbaikan Lainya', 'Perbaikan CCTV', '088996825018', 'lokasi', 'des', '1631163030_Ridho Pujiono (Testing).pdf', 1, '2021-09-09 11:50:33', '2021-09-09 11:50:33'),
(94, '[153]', 'INV-54/09/09/2021-11:54', 'Test', 'Test', '08123456789', 'Perbaikan Atap Bocor', 'Perbaikan Skala Kecil', '08123456789', 'Test', 'Test', '1631163278_Test.pdf', 1, '2021-09-09 11:54:40', '2021-09-09 11:54:40'),
(95, '[154]', 'INV-19/09/09/2021-12:19', 'Gilang', 'Merik', '08123456789', 'Perbaikan Atap Bocor', 'Perbaikan Skala Kecil', '08123456789', 'Merik', 'Merik', '1631164795_Gilang.pdf', 1, '2021-09-09 12:19:58', '2021-09-09 12:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_proyek`
--

CREATE TABLE `transaksi_proyek` (
  `id_transaksi_proyek` bigint(20) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `id_invoice` varchar(255) NOT NULL,
  `alamat_lengkap` longtext NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_order_proyek` varchar(255) NOT NULL,
  `kontak_penerima` varchar(255) NOT NULL,
  `lokasi_pekerjaan` longtext NOT NULL,
  `deskripsi_pekerjaan` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_proyek`
--

INSERT INTO `transaksi_proyek` (`id_transaksi_proyek`, `nama_customer`, `id_invoice`, `alamat_lengkap`, `no_hp`, `jenis_order_proyek`, `kontak_penerima`, `lokasi_pekerjaan`, `deskripsi_pekerjaan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ridho Pujiono (Testing)', 'INV-15/08/09/2021-22:15', 'Dsn. Krajan Indah, Tegalbang, Palang', '0888996825018', 'Pembangunan Rumah', '088996825018', 'Tuban', 'deskripsi', 2, '2021-09-08 17:35:59', '2021-09-09 00:35:59'),
(2, 'Ridho Pujiono (Testing 3)', 'INV-01/09/09/2021-02:01', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'desskripsi', 1, '2021-09-09 02:01:36', '2021-09-09 02:01:36'),
(3, 'Ridho Pujiono (Testing)', 'INV-53/09/09/2021-09:53', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'deskripsi', 1, '2021-09-09 09:53:13', '2021-09-09 09:53:13'),
(4, 'Ridho Pujiono (Testing)', 'INV-55/09/09/2021-09:55', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'deskripsi', 1, '2021-09-09 09:55:56', '2021-09-09 09:55:56'),
(5, 'Ridho Pujiono (Testing)', 'INV-12/09/09/2021-10:12', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'deskripsi', 1, '2021-09-09 10:12:09', '2021-09-09 10:12:09'),
(6, 'Ridho Pujiono (Testing)', 'INV-18/09/09/2021-10:18', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'deskripsi', 1, '2021-09-09 10:18:24', '2021-09-09 10:18:24'),
(7, 'Ridho Pujiono (Testing)', 'INV-22/09/09/2021-10:22', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'des', 1, '2021-09-09 10:22:56', '2021-09-09 10:22:56'),
(8, 'Ridho Pujiono (Testing 6)', 'INV-07/09/09/2021-11:07', 'Dsn. Krajan Indah, Tegalbang, Palang', '088996825018', 'Pembangunan Perumahan', '088996825018', 'lokasi', 'deksirpis', 1, '2021-09-09 11:07:52', '2021-09-09 11:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `no_telp`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dhihin', '-', 'dakdok.id@gmail.com', NULL, '$2y$10$WWbKmdyTzXkFKFpt3r9hY.FBd7RQ27cg91qkVnBRbp5Cox./XhxEu', '1', NULL, '2021-08-30 09:39:18', '2021-08-30 09:39:18'),
(3, 'Ridho', '081217595625', NULL, NULL, '$2y$10$a1.ofwa0t0huPhEDD3MLZ.ujFFlxsV7jm2D/8G3rvcFHIZZBTk2Jy', '0', NULL, '2021-08-30 10:11:34', '2021-08-30 10:11:34'),
(4, 'Ridho3', '0812175956253', NULL, NULL, '$2y$10$HvMElBLOQH0Mco3KyoH9GucOcpl4hIpETvHV4rWTnp4aGbb4mYpam', '0', NULL, '2021-09-02 03:43:27', '2021-09-02 03:43:27'),
(5, 'Slamet', '08123456789', NULL, NULL, '$2y$10$Twt3ikpVK6HkoEixbJcfQO2kzKI4Fvyud.etb2n6dxs6yAugJfV.O', '0', NULL, '2021-09-09 00:33:49', '2021-09-09 00:33:49'),
(6, 'ridhooo', '08899776764757', NULL, NULL, '$2y$10$7U3hk5TTRAswoFyHA0ccXOJ4Wsp/8OB9YBMKkM8tJHanYi53MTjQC', '0', NULL, '2021-09-09 00:50:46', '2021-09-09 00:50:46'),
(7, 'Slamat', '08123789456', NULL, NULL, '$2y$10$w8k/YURx8O59oruXliO2/Omu7Ph3UzvNU6BH2c1EjbRloQ6rx00Zi', '0', NULL, '2021-09-09 01:17:54', '2021-09-09 01:17:54'),
(8, 'Slamat', '081999999999', NULL, NULL, '$2y$10$Osr35wA3L9BSRfjAM4y96.nYxqyzEDKFgilOpSkHAib5ZGmE79ueG', '0', NULL, '2021-09-09 11:20:07', '2021-09-09 11:20:07'),
(9, 'ahmad slamat', '0812347894567', NULL, NULL, '$2y$10$7cC/TcLlPPXlN2mPDkI5pOPinhVRYCLpaBxQd3l0SR9PQYXOervWi', '0', NULL, '2021-09-09 11:37:13', '2021-09-09 11:37:13'),
(10, 'Kijang', '08123321123', NULL, NULL, '$2y$10$PndtUNJwSw8IZfgm4vNnReW.nrUqqAN1M3oUSI3UHMFSOW2mEa/tm', '0', NULL, '2021-09-09 13:11:18', '2021-09-09 13:11:18'),
(11, 'Wedos', '08123321122', NULL, NULL, '$2y$10$xMRrZwsOQ9YOxvpC6Sg4UeR5mqPfWZ7chtAXPvUvbnXzg03AQc77u', '0', NULL, '2021-09-09 13:14:06', '2021-09-09 13:14:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_layanan`
--
ALTER TABLE `order_layanan`
  ADD PRIMARY KEY (`id_order_layanan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_proyek`
--
ALTER TABLE `transaksi_proyek`
  ADD PRIMARY KEY (`id_transaksi_proyek`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_layanan`
--
ALTER TABLE `order_layanan`
  MODIFY `id_order_layanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `transaksi_proyek`
--
ALTER TABLE `transaksi_proyek`
  MODIFY `id_transaksi_proyek` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
