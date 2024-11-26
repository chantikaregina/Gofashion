-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 02:41 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
