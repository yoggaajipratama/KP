-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 22.37
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_stkr`
--

CREATE TABLE `dt_stkr` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `jenis_kertas` varchar(100) NOT NULL,
  `warna_kertas` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tahap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_stkr`
--

INSERT INTO `dt_stkr` (`id`, `nama`, `tlp`, `jenis_kertas`, `warna_kertas`, `image`, `status`, `tanggal`, `tahap`) VALUES
('Agus089765567456_download.jpeg', 'Agus', '089765567456', 'matte', 'red', 'download.jpeg', 'Belum selesai', '2019-07-01 08:49:35', 'pending'),
('Agus089891821987_l.jpg', 'Agus', '089891821987', 'glossy', 'blue', 'l.jpg', 'Belum selesai', '2019-06-29 13:09:43', 'print'),
('Agus089891828282_tutorial3_bb-768x553.png', 'Agus', '089891828282', 'glossy', 'blue', 'tutorial3_bb-768x553.png', 'Belum selesai', '2019-06-29 23:26:20', 'pending'),
('Aji089625617181_images.jpeg', 'Aji', '089625617181', 'matte', 'green', 'images.jpeg', 'Belum selesai', '2019-06-30 10:38:34', 'print'),
('Bale089678121567_images.jpeg', 'Bale', '089678121567', 'glossy', 'red', 'images.jpeg', 'Belum selesai', '2019-07-01 08:51:14', 'pending'),
('Bale089891821987_download.jpeg', 'Bale', '089891821987', 'glossy', 'blue', 'download.jpeg', 'Belum selesai', '2019-06-29 14:43:44', 'pending'),
('Dian082134181718_images.jpeg', 'Dian', '082134181718', 'matte', 'red', 'images.jpeg', 'Belum selesai', '2019-07-01 08:51:47', 'print'),
('Dian089891821987_l.jpg', 'Dian', '089891821987', 'glossy', 'blue', 'l.jpg', 'Selesai', '2019-06-28 11:39:01', 'pending'),
('Fitur087898717819_download.png', 'Fitur', '087898717819', 'matte', 'red', 'download.png', 'Belum selesai', '2019-06-30 10:40:30', 'print'),
('Resski089781819010_download.png', 'Resski', '089781819010', 'matte', 'red', 'download.png', 'Belum selesai', '2019-07-01 08:53:13', 'print'),
('Reszki082145145145_images (4).jpeg', 'Reszki', '082145145145', 'glossy', 'white', 'images (4).jpeg', 'Belum selesai', '2019-06-30 10:40:54', 'print'),
('Rizal083136781687_download (1).png', 'Rizal', '083136781687', 'matte', 'yellow', 'download (1).png', 'Belum selesai', '2019-06-30 10:39:05', 'print'),
('Yogga089429102929_images (2).jpeg', 'Yogga', '089429102929', 'glossy', 'green', 'images (2).jpeg', 'Belum selesai', '2019-06-30 10:38:07', 'pending'),
('Yongki089621761987_images (3).jpeg', 'Yongki', '089621761987', 'matte', 'red', 'images (3).jpeg', 'Belum selesai', '2019-06-30 10:39:31', 'print');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerugian`
--

CREATE TABLE `kerugian` (
  `id` int(11) NOT NULL,
  `potongan_kertas` int(11) NOT NULL,
  `kerugian_uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerugian`
--

INSERT INTO `kerugian` (`id`, `potongan_kertas`, `kerugian_uang`) VALUES
(3, 24, 1200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skertas`
--

CREATE TABLE `skertas` (
  `id` int(11) NOT NULL,
  `warna_kertas` varchar(100) NOT NULL,
  `jml` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skertas`
--

INSERT INTO `skertas` (`id`, `warna_kertas`, `jml`, `jenis`, `tgl`) VALUES
(1, 'black', 9, 'glossy', '2019-06-30 13:08:01'),
(2, 'blue', 6, 'glossy', '2019-07-01 08:54:39'),
(3, 'red', 7, 'glossy', '2019-06-30 13:46:32'),
(4, 'yellow', 10, 'glossy', '2019-06-30 10:16:31'),
(5, 'green', 9, 'glossy', '2019-06-30 13:07:54'),
(6, 'white', 10, 'glossy', '2019-06-30 10:16:43'),
(7, 'black', 10, 'matte', '2019-06-30 10:17:03'),
(8, 'blue', 10, 'matte', '2019-06-30 10:16:56'),
(9, 'red', 9, 'matte', '2019-06-30 13:14:48'),
(10, 'yellow', 10, 'matte', '2019-06-30 10:17:15'),
(11, 'green', 9, 'matte', '2019-07-01 08:46:53'),
(12, 'white', 10, 'matte', '2019-06-30 10:17:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stinta`
--

CREATE TABLE `stinta` (
  `id` int(11) NOT NULL,
  `warna_tinta` varchar(100) NOT NULL,
  `jml` int(11) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stinta`
--

INSERT INTO `stinta` (`id`, `warna_tinta`, `jml`, `tgl`) VALUES
(1, 'Hitam', 11, '2019-06-30 10:59:26'),
(2, 'Kuning', 11, '2019-06-30 10:59:31'),
(3, 'Biru', 11, '2019-06-30 10:59:38'),
(4, 'Merah', 11, '2019-06-30 10:59:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_stkr`
--
ALTER TABLE `dt_stkr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerugian`
--
ALTER TABLE `kerugian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skertas`
--
ALTER TABLE `skertas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stinta`
--
ALTER TABLE `stinta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kerugian`
--
ALTER TABLE `kerugian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skertas`
--
ALTER TABLE `skertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stinta`
--
ALTER TABLE `stinta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
