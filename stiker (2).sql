-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2019 at 11:23 AM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-7+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stiker`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_stkr`
--

CREATE TABLE `dt_stkr` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `jenis_kertas` varchar(100) NOT NULL,
  `warna_kertas` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kertas`
--

CREATE TABLE `jenis_kertas` (
  `id` int(11) NOT NULL,
  `jenis_kertas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kertas`
--

INSERT INTO `jenis_kertas` (`id`, `jenis_kertas`) VALUES
(1, 'Glossy'),
(2, 'Matte');

-- --------------------------------------------------------

--
-- Table structure for table `sKertas`
--

CREATE TABLE `sKertas` (
  `id` int(11) NOT NULL,
  `warna_kertas` varchar(100) NOT NULL,
  `jml` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sKertas`
--

INSERT INTO `sKertas` (`id`, `warna_kertas`, `jml`, `jenis`, `tgl`) VALUES
(1, 'Hitam', 7, 'Glossy', '2019-06-24 11:13:20'),
(2, 'Biru', 6, 'Glossy', '2019-06-24 21:37:39'),
(3, 'Merah', 8, 'Glossy', '2019-06-22 19:37:09'),
(4, 'Kuning', 4, 'Glossy', '2019-06-21 21:10:34'),
(5, 'Hijau', 9, 'Glossy', '2019-06-21 20:22:50'),
(6, 'Putih', 4, 'Glossy', '2019-06-21 16:45:15'),
(7, 'Hitam', 1, 'Matte', '2019-06-21 21:24:05'),
(8, 'Biru', 5, 'Matte', '2019-06-24 11:13:32'),
(9, 'Merah', 0, 'Matte', '2019-06-21 00:00:00'),
(10, 'Kuning', 0, 'Matte', '2019-06-21 00:00:00'),
(11, 'Hijau', 0, 'Matte', '2019-06-21 00:00:00'),
(12, 'Putih', 0, 'Matte', '2019-06-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sTinta`
--

CREATE TABLE `sTinta` (
  `id` int(11) NOT NULL,
  `warna_tinta` varchar(100) NOT NULL,
  `jml` int(11) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sTinta`
--

INSERT INTO `sTinta` (`id`, `warna_tinta`, `jml`, `tgl`) VALUES
(1, 'Hitam', 1, '2019-06-21 00:00:00'),
(2, 'Kuning', 1, '2019-06-21 00:00:00'),
(3, 'Biru', 5, '2019-06-21 00:00:00'),
(4, 'Merah', 0, '2019-06-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id` int(11) NOT NULL,
  `warna_kertas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `warna_kertas`) VALUES
(1, 'Merah'),
(2, 'Kuning'),
(3, 'Hijau'),
(4, 'Hitam'),
(5, 'Biru'),
(6, 'Putih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_stkr`
--
ALTER TABLE `dt_stkr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kertas`
--
ALTER TABLE `jenis_kertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sKertas`
--
ALTER TABLE `sKertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sTinta`
--
ALTER TABLE `sTinta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kertas`
--
ALTER TABLE `jenis_kertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sKertas`
--
ALTER TABLE `sKertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sTinta`
--
ALTER TABLE `sTinta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
