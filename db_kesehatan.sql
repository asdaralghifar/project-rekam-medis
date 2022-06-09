-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2020 pada 16.30
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kesehatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_admin`
--

CREATE TABLE `table_admin` (
  `namapengguna` varchar(100) NOT NULL,
  `sandi` varchar(100) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_admin`
--

INSERT INTO `table_admin` (`namapengguna`, `sandi`, `level`) VALUES
('asdar123', 'b094f54be051fc42d02719cb59692cd4', '1'),
('ghazi123', 'fa2f5c695989a8a2027d96088da51b73', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_regis`
--

CREATE TABLE `table_regis` (
  `namapengguna` varchar(25) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jeniskelamin` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sandi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_regis`
--

INSERT INTO `table_regis` (`namapengguna`, `namalengkap`, `alamat`, `jeniskelamin`, `email`, `sandi`) VALUES
('asdar123', 'Asdar syaputra', 'Talinduka', 'Laki-laki', 'alfatihghazi035@gmail.com', 'b094f54be051fc42d02719cb59692cd4'),
('ghazi123', 'ghazi alfatih', 'turki', 'Laki-laki', 'ghaziasdar1453@gmail.com', 'fa2f5c695989a8a2027d96088da51b73');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`namapengguna`);

--
-- Indeks untuk tabel `table_regis`
--
ALTER TABLE `table_regis`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
