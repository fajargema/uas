-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 11:28 PM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fajargem_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tgl_dikirim` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stat` int(1) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `kode`, `judul`, `isi`, `tgl_dikirim`, `id_kategori`, `stat`, `gambar`) VALUES
(1, 'PEN-080220210001', 'tes', 'tes', '2021-02-08', 3, 0, '419-WhatsApp Image 2021-01-28 at 11.12.52.jpeg'),
(2, 'PEN-090220210002', 'pasang wifi', 'pasang wifi di penjuru desa', '2021-02-09', 6, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tgl_dikirim` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `stat` int(1) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `kode`, `judul`, `isi`, `tgl_dikirim`, `id_kategori`, `no_wa`, `stat`, `gambar`) VALUES
(1, 'INF-080220210001', 'tes', 'tes', '2021-02-08', 4, '085155137765', 1, '47-WhatsApp Image 2021-01-28 at 11.12.11.jpeg'),
(2, 'INF-090220210002', 'bagaimana jika kita terkena covid', 'bagaimana ketika kita kena covid, apa yang harus dilakukan', '2021-02-09', 1, '081224718794', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Corona Virus'),
(2, 'Ketenteraman, Ketertiban Umum, Perlindungan Masyarakat'),
(3, 'Pendidikan dan Kebudayaan'),
(4, 'Pertanian dan Peternakan'),
(5, 'Kependudukan'),
(6, 'Teknologi Informasi dan Komunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tgl_terjadi` date NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `tgl_dikirim` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 0,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `kode`, `judul`, `isi`, `tgl_terjadi`, `lokasi`, `tgl_dikirim`, `id_kategori`, `stat`, `gambar`) VALUES
(1, 'PEN-080220210001', 'tes', 'tes', '2021-02-04', 'rumah', '2021-02-08', 6, 1, '515-WhatsApp Image 2021-01-28 at 11.12.11.jpeg'),
(2, 'PEN-080220210002', 'Pemerasan', 'Terjadi pemarasan di pasar A yang dilakukan oleh oknum preman', '2021-02-08', 'Pasar A', '2021-02-08', 2, 0, '419-DSC_0163.JPG'),
(3, 'PEN-090220210003', 'Test', 'Halo', '2021-02-09', 'Tegalwangi', '2021-02-09', 2, 0, '450-Screenshot_20210206_132411_com.tencent.ig.jpg'),
(5, 'PEN-090220210004', 'mau ngadu', 'adu layangan', '2021-02-04', 'lapangan', '2021-02-09', 5, 0, NULL),
(6, 'PEN-090220210005', 'Gas', 'Gas', '2021-02-09', 'Pasar A', '2021-02-09', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `user_login` varchar(128) NOT NULL,
  `pass_login` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_login`, `user_login`, `pass_login`, `nama`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Fajar Gema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
