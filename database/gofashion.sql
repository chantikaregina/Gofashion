-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 07:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gofashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `nama_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'Sweater', 'Sweater', '2024-11-19 01:02:09', '2024-11-19 01:02:09'),
(6, 'Celana', 'Celana', '2024-11-19 01:44:10', '2024-11-19 01:44:10'),
(7, 'Jaket', 'Jaket', '2024-11-19 19:55:40', '2024-11-19 19:55:40'),
(8, 'Dress', 'Dress', '2024-11-19 20:02:18', '2024-11-19 20:02:18'),
(9, 'Rok', 'Rok', '2024-11-19 20:17:23', '2024-11-19 20:17:23'),
(10, 'Hijab', 'Hijab', '2024-11-19 20:21:59', '2024-11-19 20:21:59'),
(11, 'Blazer', 'Blazer', '2024-11-19 20:28:19', '2024-11-19 20:28:19'),
(12, 'Tas', 'Tas', '2024-11-19 20:37:28', '2024-11-19 20:44:57'),
(13, 'Heels', 'Heels', '2024-11-19 20:59:02', '2024-11-19 20:59:02'),
(14, 'Sepatu', 'Sepatu', '2024-11-19 21:07:06', '2024-11-19 21:07:29'),
(15, 'Gamis', 'Gamis', '2024-11-19 21:24:54', '2024-11-19 21:24:54'),
(16, 'Dompet', 'Dompet', '2024-11-19 21:35:25', '2024-11-19 21:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `cupon`
--

CREATE TABLE `cupon` (
  `id_cupon` int NOT NULL,
  `kode_diskon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_diskon` enum('percentage','fixed_amount') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_diskon` int NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `minimum_pembelian` int NOT NULL,
  `maksimum_pemakaian` int NOT NULL,
  `jumlah_pengguna` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `id_users` int NOT NULL,
  `nama_pengguna` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pengguna` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_06_041745_create_category_table', 1),
(5, '2024_11_06_042005_create_product_table', 1),
(6, '2024_11_06_042942_create_product_images_table', 1),
(7, '2024_11_06_043223_create_customer_table', 1),
(8, '2024_11_06_043339_create_order_table', 1),
(9, '2024_11_06_043407_create_order_items_table', 1),
(10, '2024_11_06_043421_create_payment_table', 1),
(11, '2024_11_06_043434_create_shipping_table', 1),
(12, '2024_11_06_043443_create_review_table', 1),
(13, '2024_11_06_043455_create_setting_table', 1),
(14, '2024_11_06_043506_create_cupon_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int NOT NULL,
  `id_customer` int NOT NULL,
  `tanggal_pesanan` timestamp NOT NULL,
  `status_pesanan` enum('pending','shipped','completed','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pembayaran` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id_order_items` int NOT NULL,
  `id_order` int NOT NULL,
  `id_product` int NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_pembayaran` int NOT NULL,
  `id_order` int NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL,
  `jumlah` int NOT NULL,
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` enum('pending','completed','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `id_category` int NOT NULL,
  `nama_product` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_product` int NOT NULL,
  `stock_product` int NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `nama_product`, `deskripsi`, `harga_product`, `stock_product`, `foto`, `created_at`, `updated_at`) VALUES
(7, 6, 'Celana', 'Celana Panjang', 340000, 16, 'foto_product/673d4e3dd4a94_celana-satu.png', '2024-11-19 01:46:19', '2024-11-19 19:53:45'),
(8, 6, 'Celana', 'Celana Panjang', 360000, 5, 'foto_product/673c50b12b596_celana.2.png', '2024-11-19 01:47:45', '2024-11-19 19:54:03'),
(9, 5, 'Sweater', 'Sweater', 250000, 14, 'foto_product/673d4d2f9df12_sweater.3.jpg', '2024-11-19 19:33:20', '2024-11-19 19:45:03'),
(11, 5, 'Sweater', 'Sweater', 290000, 16, 'foto_product/673d4d19ce97a_sweater.2.png', '2024-11-19 19:40:54', '2024-11-19 19:44:41'),
(12, 5, 'Sweater', 'Sweater', 230000, 16, 'foto_product/673d4ceaeeed3_sweater.9.png', '2024-11-19 19:42:02', '2024-11-19 19:43:54'),
(13, 5, 'Sweater', 'Sweater', 320000, 10, 'foto_product/673d4daee7891_sweater.8.png', '2024-11-19 19:46:02', '2024-11-19 19:47:10'),
(14, 6, 'Celana', 'Celana Panjang', 370000, 20, 'foto_product/673d4ecb52951_celana.3.png', '2024-11-19 19:51:55', '2024-11-19 19:51:55'),
(15, 6, 'Celana', 'Celana Panjang', 350000, 18, 'foto_product/673d4f219a2e9_celana.4.png', '2024-11-19 19:53:21', '2024-11-19 19:53:21'),
(16, 7, 'Jaket', 'Jaket', 450000, 16, 'foto_product/673d4ff6cdd1e_jaket-satu.png', '2024-11-19 19:56:54', '2024-11-19 19:56:54'),
(17, 7, 'Jaket', 'Jaket', 310000, 10, 'foto_product/673d5076c30f7_jaket.1.png', '2024-11-19 19:58:05', '2024-11-19 19:59:02'),
(18, 7, 'Jaket', 'Jaket', 260000, 17, 'foto_product/673d50bb429b8_jaket.3.png', '2024-11-19 20:00:11', '2024-11-19 20:00:11'),
(19, 7, 'Jaket', 'Jaket', 350000, 23, 'foto_product/673d50f6d7b81_jaket.4.png', '2024-11-19 20:01:10', '2024-11-19 20:01:10'),
(20, 8, 'Dress', 'Dress', 290000, 15, 'foto_product/673d5469858c4_dress.3.png', '2024-11-19 20:03:28', '2024-11-19 20:15:53'),
(21, 8, 'Dress', 'Dress', 340000, 9, 'foto_product/673d52b9a1490_dress.4.png', '2024-11-19 20:04:39', '2024-11-19 20:08:41'),
(22, 8, 'Dress', 'Dress', 265000, 13, 'foto_product/673d52e831303_dress.5.png', '2024-11-19 20:07:56', '2024-11-19 20:09:28'),
(23, 8, 'Dress', 'Dress', 320000, 18, 'foto_product/673d53e9d991a_dress.1.png', '2024-11-19 20:13:45', '2024-11-19 20:13:45'),
(24, 9, 'Rok', 'Rok', 380000, 17, 'foto_product/673d54f3a2a87_rok1.png', '2024-11-19 20:18:11', '2024-11-19 20:18:11'),
(25, 9, 'Rok', 'Rok', 245000, 22, 'foto_product/673d5535a2bba_rok2.png', '2024-11-19 20:19:17', '2024-11-19 20:19:17'),
(26, 9, 'Rok', 'Rok', 376000, 22, 'foto_product/673d556275e28_rok3.png', '2024-11-19 20:20:02', '2024-11-19 20:20:02'),
(27, 9, 'Rok', 'Rok', 400000, 9, 'foto_product/673d558dc54c6_rok4.png', '2024-11-19 20:20:45', '2024-11-19 20:20:45'),
(28, 10, 'Hijab', 'Hijab', 130000, 12, 'foto_product/673d561f723db_hijab-satu.png', '2024-11-19 20:23:11', '2024-11-19 20:23:11'),
(29, 10, 'Hijab', 'Hijab', 130000, 16, 'foto_product/673d56ab00a5d_hijab1.png', '2024-11-19 20:23:59', '2024-11-19 20:25:31'),
(30, 10, 'Hijab', 'HIjab', 130000, 6, 'foto_product/673d56d502fde_hijab3.png', '2024-11-19 20:26:13', '2024-11-19 20:26:13'),
(31, 10, 'Hijab', 'Hijab', 130000, 11, 'foto_product/673d572642997_hijab4.png', '2024-11-19 20:27:34', '2024-11-19 20:27:34'),
(32, 11, 'Blazer', 'Blazer', 222000, 29, 'foto_product/673d5795179b6_blazer1.png', '2024-11-19 20:29:25', '2024-11-19 20:29:25'),
(33, 11, 'Blazer', 'Balzer', 360000, 14, 'foto_product/673d57c7f05dd_blazer2.png', '2024-11-19 20:30:16', '2024-11-19 20:30:16'),
(34, 11, 'Blazer', 'Blazer', 270000, 8, 'foto_product/673d586478ff3_blazer5.png', '2024-11-19 20:31:00', '2024-11-19 20:32:52'),
(35, 11, 'Blazer', 'Blazer', 330000, 24, 'foto_product/673d59128c275_blazer3.png', '2024-11-19 20:32:10', '2024-11-19 20:35:46'),
(36, 12, 'Tas', 'Tas', 330000, 15, 'foto_product/673d5b635817d_tas1.png', '2024-11-19 20:40:34', '2024-11-19 20:45:39'),
(37, 12, 'Tas', 'Tas', 320000, 5, 'foto_product/673d5bd60f50f_tas2.png', '2024-11-19 20:47:34', '2024-11-19 20:47:34'),
(38, 12, 'Tas', 'Tas', 320000, 5, 'foto_product/673d5beea7762_tas3.png', '2024-11-19 20:47:36', '2024-11-19 20:47:58'),
(39, 12, 'Tas', 'Tas', 210000, 17, 'foto_product/673d5c1c412a6_tas5.png', '2024-11-19 20:48:44', '2024-11-19 20:48:44'),
(40, 12, 'Tas', 'Tas', 333000, 8, 'foto_product/673d5c7be1983_tas6.png', '2024-11-19 20:50:19', '2024-11-19 20:50:19'),
(41, 12, 'Tas', 'Tas', 369000, 8, 'foto_product/673d5cf79aedc_tas8.png', '2024-11-19 20:51:19', '2024-11-19 20:52:23'),
(42, 13, 'Heels', 'Sendal Heels', 290000, 16, 'foto_product/673d5ec070edc_heels1.png', '2024-11-19 21:00:00', '2024-11-19 21:00:00'),
(43, 13, 'Heels', 'Sendal Heels', 280000, 6, 'foto_product/673d5efc2613d_heels2.png', '2024-11-19 21:01:00', '2024-11-19 21:01:00'),
(44, 13, 'Heels', 'Pantofel Heels', 290000, 10, 'foto_product/673d5f40f018c_heels3.png', '2024-11-19 21:02:09', '2024-11-19 21:02:09'),
(45, 13, 'Heels', 'Pantofel', 310000, 13, 'foto_product/673d5f7808c02_heels4.png', '2024-11-19 21:03:04', '2024-11-19 21:03:04'),
(46, 14, 'Sepatu', 'Sepatu', 350000, 4, 'foto_product/673d60dae6569_sepatu3.png', '2024-11-19 21:08:59', '2024-11-19 21:08:59'),
(47, 14, 'Sepatu', 'Sepatu Sneakers', 390000, 7, 'foto_product/673d611be53a1_sepatuu.png', '2024-11-19 21:10:03', '2024-11-19 21:10:03'),
(48, 14, 'Sepatu', 'Sepatu Sneakers', 370000, 9, 'foto_product/673d6296df280_sepatusatu.png', '2024-11-19 21:16:23', '2024-11-19 21:16:23'),
(49, 14, 'Sepatu', 'Sepatu Sneakers', 380000, 11, 'foto_product/673d6415dc4be_sepatu67.png', '2024-11-19 21:16:53', '2024-11-19 21:22:45'),
(50, 14, 'Sepatu', 'Sepatu Sneakers', 399000, 9, 'foto_product/673d63c8b68f7_sepatuuu.png', '2024-11-19 21:17:41', '2024-11-19 21:21:28'),
(51, 14, 'Sepatu', 'Sepatu Sneakers', 367000, 10, 'foto_product/673d6307dd3de_sepatumpat.png', '2024-11-19 21:18:15', '2024-11-19 21:18:15'),
(52, 15, 'Gamis', 'Gamis Long Dress', 332000, 25, 'foto_product/673d65845ec9f_gamis1.png', '2024-11-19 21:28:52', '2024-11-19 21:28:52'),
(53, 15, 'Gamis', 'Gamis Linen Bordir', 290000, 26, 'foto_product/673d65b56c247_gamis2.png', '2024-11-19 21:29:41', '2024-11-19 21:29:41'),
(54, 15, 'Gamis', 'Gamis Vest Brokat', 288000, 30, 'foto_product/673d65fedf100_gamis3.png', '2024-11-19 21:30:54', '2024-11-19 21:30:54'),
(55, 15, 'Gamis', 'Gamis Flolar Plisket', 228000, 22, 'foto_product/673d66524e71c_gamis4.png', '2024-11-19 21:32:18', '2024-11-19 21:32:18'),
(57, 16, 'Dompet', 'Dompet', 90000, 24, 'foto_product/673d69a9ae2e0_dompet1.jpg', '2024-11-19 21:45:11', '2024-11-19 21:46:33'),
(58, 16, 'Dompet', 'Dompet', 120000, 19, 'foto_product/673d69e0beef6_dompet2.jpg', '2024-11-19 21:47:28', '2024-11-19 21:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id_product_images` int NOT NULL,
  `id_product` int NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int NOT NULL,
  `id_product` int NOT NULL,
  `id_customer` int NOT NULL,
  `rating_produk` int NOT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vTbsuPISIMtTAQnOcArRl2uCw9yd1l6RYCb00vSg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibGFXa0RPZmwzelpEbDJSbGEyNzdqaGFzdDNzd2ZEazVkWkhpTEhZTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1732173598);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_settings` int NOT NULL,
  `kunci_pengaturan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_pengaturan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id_pengiriman` int NOT NULL,
  `id_order` int NOT NULL,
  `tanggal_pengiriman` timestamp NOT NULL,
  `status_pengiriman` enum('pending','shipped','delivered') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_pelacakan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `email_verified_at`, `password`, `name`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', NULL, '$2y$12$KsWl1Hi3Vog.6MYZN6RzaeiLeM2mYy9hZ2QVnxiyhqe2yAih09YYK', 'Admin Satu', 'admin', NULL, '2024-11-07 21:29:32', '2024-11-14 23:18:18'),
(2, 'user1', 'user1@gmail.com', NULL, '$2y$12$Rvf2LJF6kq/AHU0MVq6DwOCNc./6.6ut3uOHV6K9f1e0Hoo4z9lSa', 'pelanggan 1', 'user', NULL, '2024-11-07 21:29:33', '2024-11-07 21:29:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `customer_id_users_foreign` (`id_users`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id_order_items`),
  ADD KEY `order_items_id_order_foreign` (`id_order`),
  ADD KEY `order_items_id_product_foreign` (`id_product`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `payment_id_order_foreign` (`id_order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_id_category_foreign` (`id_category`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id_product_images`),
  ADD KEY `product_images_id_product_foreign` (`id_product`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `review_id_product_foreign` (`id_product`),
  ADD KEY `review_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `shipping_id_order_foreign` (`id_order`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id_order_items` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id_product_images` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_settings` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_pengiriman` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
