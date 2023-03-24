-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2023 at 09:52 AM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-65+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inastekdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_produksi`
--

CREATE TABLE `batch_produksi` (
  `id` int(100) NOT NULL,
  `kode_batch` int(100) NOT NULL,
  `tgl_mulai` varchar(100) NOT NULL,
  `tgl_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(10) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `date`, `note`) VALUES
(1, 'haii', 'haii2'),
(2, '20.03.2023 03:14pm', 'Percobaan login salah dengan user :  '),
(3, '20-03-2023 03:14pm', 'Percobaan login salah dengan user :  '),
(4, '20-03-2023 15:15', 'Percobaan login salah dengan user :  '),
(5, '20-03-2023 (15:16)', 'Percobaan login salah dengan user :  '),
(6, '20-03-2023 15:17:32', 'Percobaan login salah dengan user :  '),
(7, '20-03-2023 15:20:22', 'Percobaan login salah dengan user :  '),
(8, '20-03-2023 15:21:43', 'Percobaan login salah dengan user :  dccdcd'),
(9, '20-03-2023 15:21:51', 'Percobaan login salah dengan user :  cdcdcdcdcd'),
(11, '20-03-2023 15:23:05', 'Percobaan login salah dengan user : cxzxxzc'),
(12, '20-03-2023 16:21:43', 'Pendaftaran user baru (dcdffdfdfdf) oleh sesii'),
(13, '20-03-2023 16:27:22', 'Pendaftaran user baru (bismillah) oleh '),
(14, '20-03-2023 16:34:11', 'Pendaftaran user baru (Aushaf Fakhri) oleh '),
(15, '20-03-2023 16:44:17', 'Pendaftaran user baru (Cendikia I) oleh '),
(16, '21-03-2023 10:14:34', 'login berhasil aushaffahri -- root'),
(17, '21-03-2023 10:18:39', 'login berhasil aushaffahri -- root'),
(18, '21-03-2023 10:30:54', 'login berhasil aushaffahri -- root'),
(19, '21-03-2023 10:34:49', 'Percobaan login salah dengan user : aushaffahri'),
(20, '21-03-2023 10:34:57', 'login berhasil aushaffahri -- root'),
(21, '21-03-2023 10:41:29', 'login berhasil aushaffahri -- root'),
(22, '21-03-2023 10:57:46', 'login berhasil aushaffahri -- root'),
(23, '21-03-2023 10:59:14', 'login berhasil aushaffahri -- root'),
(24, '21-03-2023 11:23:13', 'Percobaan login salah dengan user : aushaffahri'),
(25, '21-03-2023 11:23:20', 'login berhasil aushaffahri -- root'),
(26, '21-03-2023 11:26:11', 'login berhasil aushaffahri -- root'),
(27, '21-03-2023 11:34:25', 'login berhasil aushaffahri -- root'),
(28, '21-03-2023 11:40:01', 'Percobaan login salah dengan user : '),
(29, '21-03-2023 11:40:09', 'login berhasil aushaffahri -- root'),
(30, '21-03-2023 11:41:22', 'Percobaan login salah dengan user : aushaffahri'),
(31, '21-03-2023 11:41:32', 'Percobaan login salah dengan user : aushaffahri'),
(32, '21-03-2023 11:45:01', 'Pendaftaran user baru (aushaf) oleh '),
(33, '21-03-2023 11:45:14', 'login berhasil aushaf -- root'),
(34, '21-03-2023 11:47:06', 'login berhasil aushaf -- root'),
(35, '21-03-2023 11:48:20', 'login berhasil aushaf -- root'),
(36, '21-03-2023 11:50:02', 'login berhasil aushaf -- root'),
(37, '21-03-2023 11:51:38', 'login berhasil aushaf -- root'),
(38, '21-03-2023 11:51:52', 'login berhasil aushaffahri -- root'),
(39, '21-03-2023 12:01:05', 'login berhasil aushaf -- root'),
(40, '21-03-2023 15:03:43', 'login berhasil aushaf -- root'),
(41, '21-03-2023 16:57:26', 'Login berhasil aushaf (root)'),
(42, '21-03-2023 16:57:51', 'Login berhasil aushaffahri (root)'),
(43, '23-03-2023 08:32:19', 'Percobaan login salah dengan user : aushaffahri'),
(44, '23-03-2023 08:32:26', 'Percobaan login salah dengan user : aushaffahri'),
(45, '23-03-2023 08:32:38', 'Login berhasil aushaffahri (root)'),
(46, '23-03-2023 08:33:50', 'Login berhasil aushaffahri (root)'),
(47, '23-03-2023 09:27:11', 'Percobaan login salah dengan user : cencendi'),
(48, '23-03-2023 09:27:25', 'Login berhasil aushaffahri (root)');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id` int(10) NOT NULL,
  `unit_barang` varchar(100) NOT NULL,
  `tgl_datang` varchar(100) NOT NULL,
  `no_batch` varchar(100) NOT NULL,
  `no_kardus` varchar(100) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serial_number`
--

CREATE TABLE `serial_number` (
  `id` int(100) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `LCD` varchar(100) NOT NULL,
  `PCB` varchar(100) NOT NULL,
  `LOADCELL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `idid` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(15) NOT NULL,
  `ugroup` varchar(15) DEFAULT NULL,
  `lastlogin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`idid`, `user`, `nama`, `password`, `level`, `ugroup`, `lastlogin`) VALUES
(4, 'aushaffahri', 'Aushaf Fakhri', '2d14ab97cc3dc294c51c0d6814f4ea45f4b4e312', 'root', 'Engineer', '23-03-2023 09:27:25'),
(5, 'cencendi', 'Cendikia I', 'c2030c5f7059c1e3cfb8331d7960e9d01947acfc', 'root', 'Engineer', NULL),
(6, 'aushaf', 'aushaf', '2d14ab97cc3dc294c51c0d6814f4ea45f4b4e312', 'root', 'Engineer', '21-03-2023 16:57:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_produksi`
--
ALTER TABLE `batch_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_perangkat` (`nama_perangkat`);

--
-- Indexes for table `serial_number`
--
ALTER TABLE `serial_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`idid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_produksi`
--
ALTER TABLE `batch_produksi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `serial_number`
--
ALTER TABLE `serial_number`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `idid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
