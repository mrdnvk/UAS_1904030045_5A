-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 12:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030045`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mobil`
--

CREATE TABLE `daftar_mobil` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(40) NOT NULL,
  `tahun_mobil` varchar(20) NOT NULL,
  `jenis_transmisi` varchar(40) NOT NULL,
  `jenis_bahanbakar` varchar(40) NOT NULL,
  `tempat_duduk` varchar(20) NOT NULL,
  `kapasitas_mesin` varchar(40) NOT NULL,
  `harga` int(225) NOT NULL,
  `foto_mobil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_mobil`
--

INSERT INTO `daftar_mobil` (`id`, `nama_mobil`, `tahun_mobil`, `jenis_transmisi`, `jenis_bahanbakar`, `tempat_duduk`, `kapasitas_mesin`, `harga`, `foto_mobil`) VALUES
(1, 'zyrus', '2020', 'automatic', 'bensin', '4', '3000cc', 5000000, 'vehicle-1.png'),
(3, 'necroma', '2020', 'Manual', 'bensin', '4', '2500cc', 350000, 'vehicle-2.png'),
(5, 'vexzoo', '2021', 'automatic', 'bensin', '2', '4500cc', 6000000, 'vehicle-3.png'),
(7, 'vexzoo-V2', '2022', 'automatic', 'bensin', '2', '5500cc', 6500000, 'vehicle-4.png'),
(9, 'zyrus-V2', '2020', 'automatic', 'bensin', '2', '4000cc', 7500000, 'vehicle-5.png'),
(11, 'Avalone', '2018', 'Manual', 'bensin', '5', '2500cc', 1900000, 'vehicle-6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mobil`
--
ALTER TABLE `daftar_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mobil`
--
ALTER TABLE `daftar_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
