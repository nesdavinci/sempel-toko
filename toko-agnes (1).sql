-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 04:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-agnes`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` enum('gelang','cincin','kalung') NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'tiny heart', 'gelang', 10, 6000, '2024-01-25 01:23:32', '2024-02-21 05:18:19'),
(2, 'hand bracelet', 'gelang', 20, 8000, '2024-01-25 01:23:32', '2024-02-21 05:18:05'),
(3, 'beaded butterfly', 'kalung', 30, 10000, '2024-01-25 01:23:32', '2024-02-21 05:19:48'),
(4, 'water-drop', 'kalung', 40, 5000, '2024-01-25 01:23:32', '2024-02-21 05:21:12'),
(5, 'solitaire rings', 'cincin', 50, 3000, '2024-01-25 01:23:32', '2024-02-21 05:22:45'),
(7, 'wedding ring', 'cincin', 60, 50000, '2024-02-21 05:23:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updad_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nomor_telepon`, `created_at`, `updad_at`) VALUES
(1, 'maria', 'jl. anggrek', '081234567890', '2024-02-19 07:37:07', NULL),
(2, 'sarah', 'jl.melati', '0989698765432', '2024-02-19 07:37:07', NULL),
(3, 'john', 'jl. street', '2125556789', '2024-02-19 07:37:07', NULL),
(4, 'mei ling', 'jl. shanghai', '013812345678', '2024-02-19 07:37:07', NULL),
(5, 'juan', 'jl.mexico', '085512345678', '2024-02-19 07:37:07', NULL),
(6, 'emily', 'jl. taronto', '084165554321', '2024-02-19 07:37:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `created_at`, `update_at`) VALUES
(1, 1, 1, 12000, 2, '2024-01-25 01:42:17', NULL),
(2, 2, 2, 10000, 5, '2024-01-25 01:42:17', NULL),
(3, 5, 2, 30000, 2, '2024-01-25 01:42:17', NULL),
(4, 4, 2, 5000, 2, '2024-01-25 01:42:17', NULL),
(5, 3, 1, 7000, 5, '2024-01-25 01:42:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','keuangan','logistik') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Yery', '$2a$12$iZ7sshzbp6Y14y43t999FuzJgk3OfTuaSLPlxgAF3jPrjdDCg2Ng2', 'logistik', '2024-01-25 01:19:11', NULL),
(3, 'Jastin', '$2a$12$fDLSf/1XNUC9ZVnRUP3eD.V8Gpq98bgaP0.AJy1HvaMZPSnqKiDQ6', 'keuangan', '2024-01-25 01:19:11', '2024-02-21 05:32:21'),
(5, 'tina', '$2y$10$YxwzxOGr4/izGINydF2y9eNTcMuDNLFQRwTESN41BXq5/f2Pz844a', 'admin', '2024-01-25 01:19:11', '2024-01-26 02:17:30'),
(6, 'jino', '$2y$10$R/BknK2XmBMi4tqr.d6qf.bfrvo4QTkX/LcBF0BLjW1E29LmMEftK', 'keuangan', '2024-01-26 01:47:41', '2024-01-26 01:56:55'),
(7, 'amel', '$2a$12$4Q72hf7kgO1jNWr9XE5uyuJflGSzgo.CiszVcq/LaVYiKmLwYaSIq', 'admin', '2024-02-21 05:36:56', NULL),
(8, 'cia', '$2a$12$QlyTQ6ShEvl15g1Pvzdklumyucogj4Sd9o65YGtkt3i7duTR34QqS', 'logistik', '2024-02-21 05:36:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
