-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_tambahan`
--

CREATE TABLE `tbl_data_tambahan` (
  `id_data_tambahan` int(11) NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `alamat_ip` varchar(50) NOT NULL,
  `frekuensi` varchar(55) NOT NULL,
  `lebar_frekuensi` varchar(55) NOT NULL,
  `nama_wifi` varchar(255) NOT NULL,
  `password_wifi` varchar(255) NOT NULL,
  `tanggal_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_tambahan`
--

INSERT INTO `tbl_data_tambahan` (`id_data_tambahan`, `id_peralatan`, `alamat_ip`, `frekuensi`, `lebar_frekuensi`, `nama_wifi`, `password_wifi`, `tanggal_input`) VALUES
(1, 17, 'tambahanAlamatIP', '3.4', 'tambahanLebarFrekuensi', 'tambahanNamaWifi', 'tambahanPassWifi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gangguan`
--

CREATE TABLE `tbl_gangguan` (
  `id_gangguan` int(11) NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `jenis_gangguan` text NOT NULL,
  `tanggal_gangguan` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi_peralatan`
--

CREATE TABLE `tbl_lokasi_peralatan` (
  `id_lokasi` int(11) NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `nama_lokasi_peralatan` varchar(255) NOT NULL,
  `lokasi_jalan` varchar(255) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lokasi_peralatan`
--

INSERT INTO `tbl_lokasi_peralatan` (`id_lokasi`, `id_peralatan`, `nama_lokasi_peralatan`, `lokasi_jalan`, `tanggal_input`) VALUES
(1, 1, 'Dinas Sosial', 'Jalan Diponegoro', '0000-00-00'),
(2, 1, 'Dinas Sosial', 'Jalan Pancasila', '0000-00-00'),
(3, 1, 'Dinas Sosial', 'Jalan Pancasila', '2021-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penanganan_gangguan`
--

CREATE TABLE `tbl_penanganan_gangguan` (
  `id_penanganan_gangguan` int(11) NOT NULL,
  `id_gangguan` int(11) NOT NULL,
  `proses_status` varchar(50) NOT NULL,
  `tanggal_ditangani` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status_tertangani` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peralatan_utama`
--

CREATE TABLE `tbl_peralatan_utama` (
  `id_peralatan` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `tahun_pembelian` varchar(50) NOT NULL,
  `jenis_alat` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `spesifikasi` text NOT NULL,
  `id_user_input` int(11) NOT NULL,
  `tanggal_input` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peralatan_utama`
--

INSERT INTO `tbl_peralatan_utama` (`id_peralatan`, `nama_alat`, `tahun_pembelian`, `jenis_alat`, `username`, `password`, `spesifikasi`, `id_user_input`, `tanggal_input`) VALUES
(1, 'D-LINK Wireless AC750 Dual Band', '2021-01-01', 'ROUTER', 'router001', 'router001', 'Wireless-N Extender\r\nIEEE 802.11n\r\nWi-Fi Protected Access (WPA\r\nWPA2)', 1, '2021-05-28 11:46:52'),
(2, 'TOTOLINK AC1200 Wireless Dual Band Router A810R', '2021-01-01', 'ROUTER', 'router002', 'router002', 'Router\r\nStandards Protocols : IEEE 802.11a/b/g/n/ac\r\nDual Band (2.4GHz/5GHz)', 1, '2021-05-28 11:46:52'),
(14, 'alatNama', '2021-01-01', 'alatJenis', 'alatUsername', 'alatpassword', 'alatDeskripsi', 0, '2021-12-20 15:22:48'),
(15, 'alatNama', '2021-01-01', 'alatJenis', 'alatUsername', 'alatpassword', 'alatDeskripsi', 0, '2021-12-20 15:22:49'),
(16, 'alatNama', '2021-01-01', 'alatJenis', 'alatUsername', 'alatpassword', 'alatDeskripsi', 0, '2021-12-20 15:22:49'),
(17, 'alatNama', '2021-01-01', 'alatJenis', 'alatUsername', 'alatpassword', 'alatDeskripsi', 0, '2021-12-20 15:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekam_jejak`
--

CREATE TABLE `tbl_rekam_jejak` (
  `id_history` int(11) NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `nama_lokasi_peralatan` varchar(255) NOT NULL,
  `jalan_lokasi` varchar(255) NOT NULL,
  `tanggal_pindah` varchar(50) NOT NULL,
  `lokasi_dari` varchar(50) NOT NULL,
  `lokasi_ke` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `role`) VALUES
(8, 'admin', 'VWdsOWxSN0FNQmY0cUtXY1BBRWlzZz09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_tambahan`
--
ALTER TABLE `tbl_data_tambahan`
  ADD PRIMARY KEY (`id_data_tambahan`);

--
-- Indexes for table `tbl_gangguan`
--
ALTER TABLE `tbl_gangguan`
  ADD PRIMARY KEY (`id_gangguan`),
  ADD KEY `g_peralatan_utama` (`id_peralatan`);

--
-- Indexes for table `tbl_lokasi_peralatan`
--
ALTER TABLE `tbl_lokasi_peralatan`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `lok_peralatan_utama` (`id_peralatan`);

--
-- Indexes for table `tbl_penanganan_gangguan`
--
ALTER TABLE `tbl_penanganan_gangguan`
  ADD PRIMARY KEY (`id_penanganan_gangguan`);

--
-- Indexes for table `tbl_peralatan_utama`
--
ALTER TABLE `tbl_peralatan_utama`
  ADD PRIMARY KEY (`id_peralatan`),
  ADD KEY `id_user_input` (`id_user_input`);

--
-- Indexes for table `tbl_rekam_jejak`
--
ALTER TABLE `tbl_rekam_jejak`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `rek_peralatan_taman` (`id_peralatan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_tambahan`
--
ALTER TABLE `tbl_data_tambahan`
  MODIFY `id_data_tambahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gangguan`
--
ALTER TABLE `tbl_gangguan`
  MODIFY `id_gangguan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lokasi_peralatan`
--
ALTER TABLE `tbl_lokasi_peralatan`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_penanganan_gangguan`
--
ALTER TABLE `tbl_penanganan_gangguan`
  MODIFY `id_penanganan_gangguan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peralatan_utama`
--
ALTER TABLE `tbl_peralatan_utama`
  MODIFY `id_peralatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_rekam_jejak`
--
ALTER TABLE `tbl_rekam_jejak`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_data_tambahan`
--
ALTER TABLE `tbl_data_tambahan`
  ADD CONSTRAINT `dt_peralatan_utama` FOREIGN KEY (`id_data_tambahan`) REFERENCES `tbl_peralatan_utama` (`id_peralatan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_gangguan`
--
ALTER TABLE `tbl_gangguan`
  ADD CONSTRAINT `g_peralatan_utama` FOREIGN KEY (`id_peralatan`) REFERENCES `tbl_peralatan_utama` (`id_peralatan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lokasi_peralatan`
--
ALTER TABLE `tbl_lokasi_peralatan`
  ADD CONSTRAINT `lok_peralatan_utama` FOREIGN KEY (`id_peralatan`) REFERENCES `tbl_peralatan_utama` (`id_peralatan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penanganan_gangguan`
--
ALTER TABLE `tbl_penanganan_gangguan`
  ADD CONSTRAINT `pen_gangguan` FOREIGN KEY (`id_penanganan_gangguan`) REFERENCES `tbl_gangguan` (`id_gangguan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_rekam_jejak`
--
ALTER TABLE `tbl_rekam_jejak`
  ADD CONSTRAINT `rek_peralatan_taman` FOREIGN KEY (`id_peralatan`) REFERENCES `tbl_peralatan_utama` (`id_peralatan`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
