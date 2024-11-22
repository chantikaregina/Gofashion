-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 02:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_id_category_foreign` (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
