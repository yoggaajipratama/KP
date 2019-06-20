-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2019 at 03:46 PM
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

--
-- Dumping data for table `dt_stkr`
--

INSERT INTO `dt_stkr` (`id`, `nama`, `tlp`, `jenis_kertas`, `warna_kertas`, `image`, `status`, `tanggal`) VALUES
('Agus089891828282_l.jpg', 'Agus', '089891828282', 'Glossy', 'Merah', 'l.jpg', 'Selesai', '2019-06-20 14:56:55'),
('Dian089891821987_5.jpg', 'Dian', '089891821987', 'Glossy', 'Merah', '5.jpg', 'Selesai', '2019-06-20 15:03:51');

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
  `sMerah` int(11) DEFAULT NULL,
  `sHijau` int(11) DEFAULT NULL,
  `sKuning` int(11) DEFAULT NULL,
  `sHitam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sTinta`
--

CREATE TABLE `sTinta` (
  `id` int(11) NOT NULL,
  `sMerah` int(11) DEFAULT NULL,
  `sHijau` int(11) DEFAULT NULL,
  `sKuning` int(11) DEFAULT NULL,
  `sHitam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id` int(11) NOT NULL,
  `warna_kertas` varchar(255) NOT NULL,
  `warna_tinta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `warna_kertas`, `warna_tinta`) VALUES
(1, 'Merah', 'Merah'),
(2, 'Kuning', 'Kuning'),
(3, 'Hijau', 'Hijau'),
(4, 'Hitam', 'Hitam'),
(5, 'Biru', 'Biru');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sTinta`
--
ALTER TABLE `sTinta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
