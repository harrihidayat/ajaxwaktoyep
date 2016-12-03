-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 10:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produksi`
--
CREATE DATABASE IF NOT EXISTS `produksi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `produksi`;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL,
  `barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `barang`) VALUES
(1, 'Karet'),
(2, 'Plastik');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_satuan`
--

CREATE TABLE `jenis_satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_satuan`
--

INSERT INTO `jenis_satuan` (`id`, `satuan`) VALUES
(1, 'Sachet'),
(2, 'Bungkus');

-- --------------------------------------------------------

--
-- Table structure for table `pending_barang`
--

CREATE TABLE `pending_barang` (
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_stok`
--

CREATE TABLE `pending_stok` (
  `id_stok_pending` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_user_tambah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`kode`, `nama`, `jenis`, `qty`, `harga`, `satuan`, `tanggal`, `id_user`, `id_user_tambah_stok`) VALUES
('PCA001', 'Mouse Logicrot', 'Plastik', 5, 25000, 'Bungkus', '2016-12-03 08:59:18', 1, 1),
('PCA002', 'Keyboard Logicrot', 'Karet', 67, 40000, 'Sachet', '2016-12-03 09:19:45', 1, 1),
('PCA003', 'Keyboard Mecha', 'Karet', 5, 25000, 'Bungkus', '2016-12-03 08:57:48', 1, 1),
('PCA004', 'Mouse Gaming', 'Karet', 10, 90000, 'Sachet', '2016-12-03 05:57:13', 1, 0),
('PCA005', 'Mousepad Gaming', 'Karet', 100, 25000, 'Bungkus', '2016-12-03 05:57:13', 1, 0),
('PCA006', 'Monitor LCD 14', 'Karet', 3, 800000, 'Sachet', '2016-12-03 06:01:31', 1, 0),
('PCA007', 'Sarung Tangan Gaming', 'Karet', 50, 15000, 'Sachet', '2016-12-03 06:05:30', 1, 0),
('PCA008', 'Headset Sades 903', 'Plastik', 5, 375000, 'Bungkus', '2016-12-03 08:57:48', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_satuan`
--
ALTER TABLE `jenis_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_barang`
--
ALTER TABLE `pending_barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pending_stok`
--
ALTER TABLE `pending_stok`
  ADD PRIMARY KEY (`id_stok_pending`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_satuan`
--
ALTER TABLE `jenis_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pending_stok`
--
ALTER TABLE `pending_stok`
  MODIFY `id_stok_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
