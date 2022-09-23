-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 06:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduanmasyarakat`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `laporanbaru` ()  MODIFIES SQL DATA
SELECT 
masyarakat.nama,
pengaduan.nik,
pengaduan.isi_laporan,
pengaduan.foto,
pengaduan.status,
pengaduan.id_pengaduan
FROM masyarakat,pengaduan
WHERE masyarakat.nik = pengaduan.nik
AND pengaduan.status = '0'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `laporanproses` ()  MODIFIES SQL DATA
SELECT 
masyarakat.nama,
pengaduan.nik,
pengaduan.isi_laporan,
pengaduan.foto,
pengaduan.status,
pengaduan.id_pengaduan
FROM masyarakat,pengaduan
WHERE masyarakat.nik = pengaduan.nik
AND pengaduan.status = 'proses'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `laporanselesai` ()  MODIFIES SQL DATA
SELECT
masyarakat.nama,
pengaduan.id_pengaduan,
pengaduan.tgl_pengaduan,
pengaduan.nik,
pengaduan.isi_laporan,
pengaduan.foto,
pengaduan.status,
petugas.nama_petugas,
tanggapan.id_petugas,
tanggapan.tgl_tanggapan,
tanggapan.tanggapan
FROM pengaduan, masyarakat, petugas, tanggapan
WHERE masyarakat.nik = pengaduan.nik
AND pengaduan.id_pengaduan = tanggapan.id_pengaduan
AND petugas.id_petugas = tanggapan.id_petugas
AND pengaduan.status = 'selesai'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `masyarakat` ()  MODIFIES SQL DATA
SELECT * FROM masyarakat$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `petugas` ()  MODIFIES SQL DATA
SELECT * FROM petugas$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `generate`
-- (See below for the actual view)
--
CREATE TABLE `generate` (
`nama` varchar(35)
,`id_pengaduan` int(11)
,`tgl_pengaduan` date
,`nik` char(16)
,`isi_laporan` text
,`foto` varchar(225)
,`status` enum('0','proses','selesai')
,`nama_petugas` varchar(35)
,`id_petugas` int(11)
,`tgl_tanggapan` date
,`tanggapan` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporanprosess`
-- (See below for the actual view)
--
CREATE TABLE `laporanprosess` (
`nama` varchar(35)
,`nik` char(16)
,`isi_laporan` text
,`foto` varchar(225)
,`status` enum('0','proses','selesai')
,`id_pengaduan` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pengaduanmas`
-- (See below for the actual view)
--
CREATE TABLE `pengaduanmas` (
`nama` varchar(35)
,`nik` char(16)
,`isi_laporan` text
,`foto` varchar(225)
,`status` enum('0','proses','selesai')
,`id_pengaduan` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `foto` varchar(225) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `generate`
--
DROP TABLE IF EXISTS `generate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `generate`  AS SELECT `masyarakat`.`nama` AS `nama`, `pengaduan`.`id_pengaduan` AS `id_pengaduan`, `pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`, `pengaduan`.`nik` AS `nik`, `pengaduan`.`isi_laporan` AS `isi_laporan`, `pengaduan`.`foto` AS `foto`, `pengaduan`.`status` AS `status`, `petugas`.`nama_petugas` AS `nama_petugas`, `tanggapan`.`id_petugas` AS `id_petugas`, `tanggapan`.`tgl_tanggapan` AS `tgl_tanggapan`, `tanggapan`.`tanggapan` AS `tanggapan` FROM (((`pengaduan` join `masyarakat`) join `petugas`) join `tanggapan`) WHERE `masyarakat`.`nik` = `pengaduan`.`nik` AND `pengaduan`.`id_pengaduan` = `tanggapan`.`id_pengaduan` AND `petugas`.`id_petugas` = `tanggapan`.`id_petugas` ;

-- --------------------------------------------------------

--
-- Structure for view `laporanprosess`
--
DROP TABLE IF EXISTS `laporanprosess`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporanprosess`  AS SELECT `masyarakat`.`nama` AS `nama`, `pengaduan`.`nik` AS `nik`, `pengaduan`.`isi_laporan` AS `isi_laporan`, `pengaduan`.`foto` AS `foto`, `pengaduan`.`status` AS `status`, `pengaduan`.`id_pengaduan` AS `id_pengaduan` FROM (`masyarakat` join `pengaduan`) WHERE `masyarakat`.`nik` = `pengaduan`.`nik` AND `pengaduan`.`status` = 'proses' ;

-- --------------------------------------------------------

--
-- Structure for view `pengaduanmas`
--
DROP TABLE IF EXISTS `pengaduanmas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengaduanmas`  AS SELECT `masyarakat`.`nama` AS `nama`, `pengaduan`.`nik` AS `nik`, `pengaduan`.`isi_laporan` AS `isi_laporan`, `pengaduan`.`foto` AS `foto`, `pengaduan`.`status` AS `status`, `pengaduan`.`id_pengaduan` AS `id_pengaduan` FROM (`masyarakat` join `pengaduan`) WHERE `masyarakat`.`nik` = `pengaduan`.`nik` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
