-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2022 pada 09.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abyan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_173`
--

CREATE TABLE `tbl_173` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(48) NOT NULL,
  `sutradara` varchar(36) NOT NULL,
  `tahun_rilis` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_173`
--

INSERT INTO `tbl_173` (`id_film`, `judul_film`, `sutradara`, `tahun_rilis`) VALUES
(1, 'Sing 2', 'Garth Jennings', 2022),
(2, 'Fistful of Vengeance', 'Roel Reiné', 2022),
(3, 'Hotel Transylvania: Transformaniaa', 'Jennifer Kluska', 2021),
(4, 'new era', 'myself', 2024);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_173`
--
ALTER TABLE `tbl_173`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_173`
--
ALTER TABLE `tbl_173`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
