-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 27, 2023 at 10:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(100) NOT NULL,
  `id_tipe` int(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_tipe`, `keterangan`) VALUES
(101, 201, 'Terisi'),
(102, 201, 'Kosong'),
(106, 201, 'Terisi'),
(109, 202, 'Kosong'),
(110, 201, 'Kosong'),
(113, 201, 'Kosong'),
(117, 202, 'Terisi');

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis`
--

CREATE TABLE `resepsionis` (
  `id_karyawan [int]` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resepsionis`
--

INSERT INTO `resepsionis` (`id_karyawan [int]`, `username`, `password`, `nama`) VALUES
(301, 'iifalifah', 'iif', 'Iif Alifah'),
(302, 'adymutalib', 'ady', 'Ady Mutalib');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_kamar`
--

CREATE TABLE `reservasi_kamar` (
  `id_pesan` int(100) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `jumlah_orang` int(100) NOT NULL,
  `id_tamu` int(100) NOT NULL,
  `id_kamar` int(100) NOT NULL,
  `id_karyawan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi_kamar`
--

INSERT INTO `reservasi_kamar` (`id_pesan`, `tgl_checkin`, `tgl_checkout`, `jumlah_orang`, `id_tamu`, `id_kamar`, `id_karyawan`) VALUES
(601, '2023-03-01', '2023-03-09', 3, 402, 101, 301),
(602, '2023-03-07', '2023-03-10', 2, 408, 106, 302),
(604, '2023-03-28', '2023-03-29', 2, 402, 109, 301);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_ruangan`
--

CREATE TABLE `reservasi_ruangan` (
  `id_pesan` int(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_tamu` int(100) NOT NULL,
  `id_ruangan` int(100) NOT NULL,
  `id_karyawan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi_ruangan`
--

INSERT INTO `reservasi_ruangan` (`id_pesan`, `tgl_pesan`, `id_tamu`, `id_ruangan`, `id_karyawan`) VALUES
(701, '2023-03-14', 402, 502, 301),
(704, '2023-03-01', 408, 501, 302);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(100) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `status`, `fasilitas`) VALUES
(501, 'Aula 1', 'Terisi', 'Perlengkapan audio-visual, proyektor LCD dan layar portabel, akses internet gratis.'),
(502, 'Aula 2', 'Kosong', 'Perlengkapan audio-visual, proyektor LCD dan layar portabel, akses internet gratis.');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `no_ktp`, `nama`, `alamat`, `no_telp`) VALUES
(402, '300012782634783', 'Delphia Aryana', 'Jalan Simpang Gusti', '0897654234'),
(405, '309358972383', 'Ana', 'Jalan Kayu Tangi 2', '089656543167'),
(406, '30045286328324', 'Maysarah', 'Jalan Perdagangan', '085465437890'),
(407, '3001872385789', 'Adel Delepipipi', 'Sungai Lulut', '085643218965'),
(408, '3001872385876', 'Ocha ', 'Sungai Andai', '089765432134'),
(409, '3093589723987', 'Ana Maria Parasanti', 'Jalan Kayu Tangi', '087654321234'),
(410, '3093589723876', 'Julita Hasanah', 'Handil Bakti', '0854321236578'),
(411, '30045286328345', 'Iif Alifah', 'Jalan Kayu Tangi 2', '085465437543'),
(412, '3001872332001', 'Difana Nanda P.Z', 'Jalan Karang Anyar 2', '083271862421');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe` int(100) NOT NULL,
  `nama_tipe` varchar(100) NOT NULL,
  `fasilitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe`, `nama_tipe`, `fasilitas`) VALUES
(201, 'Standar room', 'Tempat tidur, televisi, meja, kamar mandi, lemari es.'),
(202, 'Suit room', 'Tempat tidur, televisi, meja, kamar mandi, dapur, lemari es, ruang tamu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `resepsionis`
--
ALTER TABLE `resepsionis`
  ADD PRIMARY KEY (`id_karyawan [int]`);

--
-- Indexes for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_tamu` (`id_tamu`);

--
-- Indexes for table `reservasi_ruangan`
--
ALTER TABLE `reservasi_ruangan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_tamu` (`id_tamu`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `resepsionis`
--
ALTER TABLE `resepsionis`
  MODIFY `id_karyawan [int]` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `reservasi_ruangan`
--
ALTER TABLE `reservasi_ruangan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_kamar` (`id_tipe`);

--
-- Constraints for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  ADD CONSTRAINT `reservasi_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `reservasi_kamar_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `resepsionis` (`id_karyawan [int]`),
  ADD CONSTRAINT `reservasi_kamar_ibfk_4` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`);

--
-- Constraints for table `reservasi_ruangan`
--
ALTER TABLE `reservasi_ruangan`
  ADD CONSTRAINT `reservasi_ruangan_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  ADD CONSTRAINT `reservasi_ruangan_ibfk_2` FOREIGN KEY (`id_tamu`) REFERENCES `tamu` (`id_tamu`),
  ADD CONSTRAINT `reservasi_ruangan_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `resepsionis` (`id_karyawan [int]`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
