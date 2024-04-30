-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Yusuf Tobing', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `almt_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`) VALUES
('P202400001', '2024-04-29', '2024/2025', 'Rekayasa Perangkat Lunak', 'Yusuf Lumban Tobing', 'Medan', '2006-05-12', 'Laki-laki', 'Kristen', 'JL.BINJAI KM 13 JL.BERSAMA'),
('P202400002', '2024-04-29', '2024/2025', 'Teknik Komputer Dan Jaringan', 'Deswita', 'Medan', '2006-08-02', 'Perempuan', 'Kristen', 'JL.Kampung Lalang km 8'),
('P202400003', '2024-04-29', '2024/2025', 'Animasi', 'Anton Sinaga', 'Medan', '2024-04-29', 'Laki-laki', 'Kristen', 'JL.Medan Selayang'),
('P202400004', '2024-04-30', '2024/2025', 'Animasi', 'Tina Ariana', 'Jakarta', '2006-05-11', 'Perempuan', 'Islam', 'Jl.soekarno hatta gg.kenduri'),
('P202400005', '2024-04-30', '2024/2025', 'Desain Grafis', 'Rina ', 'Medan', '2011-06-30', 'Perempuan', 'Kristen', 'Jl.gatotsubroto jl.medan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Aktar', 'aktar@gmail.com', '$2y$10$Jmf9Xk2y8m.fo3c/ZgKmzOrdIRkU05KSGLI0picKLEtr68ll7hjB.'),
(2, 'yusuf', 'yusuftobing687@gmail.com', '$2y$10$567WTkFgIL6J2Zwc321KfOPOOMcNBJZ/JZ6yNROdF7MHSYsLFRTPu'),
(3, 'toni', 'Tobing@kasir.com', '$2y$10$N.d7PlP.Hg31qJqempKOkOvhG./yxN87RA5iQl/4HGUm0msLRGzOm'),
(4, 'lukman', 'yusuflumbantobing@gmail.com', '$2y$10$feQSTMTTtgBcVs5EN6ago.NhX2QnHyPvQYj23ixT/4dPpJ/t6kDMe'),
(5, 'lia', 'lia@gmail.com', '$2y$10$BFqk2uV24JCeJQ/iLE1UR.HTzSaHR8cbwGFrtYYiCJC5JjtfXhxP.'),
(6, 'tina', 'tina@gmail.com', '$2y$10$GDuA35yQkbzRJ0Ls7ytVKeoMs0HtvRe2LKCwaOyna1n1udTCK.dn2'),
(7, 'nov', 'nov@gmail.com', '$2y$10$ifPyIzu/8LdjYRcchOCiTe24aaAM2p7KcrPzeKPHGpfHoJpgn2Irm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
