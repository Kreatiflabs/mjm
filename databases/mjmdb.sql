-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 02:39 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mjmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `idkonten` int(12) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('post','page') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`idkonten`, `title`, `slug`, `konten`, `type`, `created_date`, `created_by`) VALUES
(5, 'aa', '', '', 'post', '2018-06-22 02:22:43', 'admin'),
(6, 'aa', '', '', 'post', '2018-06-22 02:23:01', 'admin'),
(7, 'ok', '', '<p>ok<br></p>', 'post', '2018-06-22 02:24:37', 'admin'),
(8, 'dia', '', '<p>dia </p>', 'post', '2018-06-22 02:38:58', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `idmachine` int(12) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnails` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`idmachine`, `nama`, `deskripsi`, `thumbnails`, `file`, `created_date`, `created_by`, `status`) VALUES
(4, 'as', 's', 'IMG_1', 'IMG_1', '2018-06-20 10:07:32', 'admin', 1),
(5, 'sa', 'sd', 'IMG_1', 'IMG_1', '2018-06-20 10:08:36', 'admin', 1),
(6, 'sa', 'sd', 'IMG_6', 'IMG_6', '2018-06-20 10:10:27', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(20) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `nama`) VALUES
(1, 'Product'),
(2, 'Machine'),
(3, 'Content'),
(4, 'Messages');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'yuli', 'yuli@gmial.com', 'feedBack', 'bagaimana ya ?');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(12) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnails` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `nama`, `deskripsi`, `thumbnails`, `file`, `created_date`, `created_by`, `status`) VALUES
(1, 'satu', 'produksa', '1.jpg', '1.jpg', '2018-06-22 02:18:45', 'admin', 1),
(2, 'dua', 'gambar gambar gambar gambar ', '2.jpg', '2.jpg', '2018-06-22 01:41:03', 'admin', 1),
(3, 'tiga', 'tiga', '3.jpg', '', '2018-06-22 02:59:08', 'admin', 1),
(4, 'empat', 'empat', '4.jpg', '4.jpg', '2018-06-22 02:57:52', 'admin', 1),
(5, 'lima', 'lima', '5.jpg', '5.jpg', '0000-00-00 00:00:00', 'admin', 1),
(6, 'enam', 'enam', '6.jpg', '6.jpg', '2018-06-22 11:33:34', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(20) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `password`, `createddate`) VALUES
(1, 'admin', 'admin', '2018-06-20 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`idkonten`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`idmachine`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `idkonten` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `idmachine` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
