-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2020 pada 18.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrawatjalan`
--

CREATE TABLE `tbrawatjalan` (
  `idPasien` int(4) NOT NULL,
  `nPasien` varchar(25) NOT NULL,
  `nRekammedis` varchar(6) NOT NULL,
  `poli` varchar(10) NOT NULL,
  `tPeriksa` date NOT NULL,
  `jBayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbrawatjalan`
--

INSERT INTO `tbrawatjalan` (`idPasien`, `nPasien`, `nRekammedis`, `poli`, `tPeriksa`, `jBayar`) VALUES
(1, 'Ahmad Jalal', 'PNS123', 'Umu', '2020-09-10', 'BPJS'),
(4, 'Kalingga Fadel', 'Asn124', 'THT', '2020-09-09', 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbrawatjalan`
--
ALTER TABLE `tbrawatjalan`
  ADD PRIMARY KEY (`idPasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbrawatjalan`
--
ALTER TABLE `tbrawatjalan`
  MODIFY `idPasien` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
