-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2024 at 04:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_IT1_Bima_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_data`
--

CREATE TABLE `item_data` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `statusitem` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `penempatan` varchar(30) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_data`
--

INSERT INTO `item_data` (`id`, `nama`, `jumlah`, `harga`, `statusitem`, `tanggal`, `penempatan`, `alamat`) VALUES
(1, 'Laptop Lenovo', 5, 25000000, 'Pengiriman', '2023-11-12', 'Gudang Lt 3', 'Jakarta Pusat'),
(2, 'GPU Nvidia 3090', 1, 10000000, 'Pengiriman', '2024-10-01', 'Kantor Perwakilan Bandung', 'Jakarta Selatan'),
(3, 'Maheswara Bimasena Tedja', 5, 25000000, 'Sukses', '2024-10-09', 'Gudang Lt 3', 'hgh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_IT1_Bima_19`
--

CREATE TABLE `tb_IT1_Bima_19` (
  `id` int(3) NOT NULL,
  `pengunjung` varchar(80) NOT NULL,
  `panggilan` varchar(15) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `jurus` varchar(3) NOT NULL,
  `rumah` varchar(200) NOT NULL,
  `kelamin` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `asal` varchar(75) NOT NULL,
  `UAN` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_IT1_Bima_19`
--

INSERT INTO `tb_IT1_Bima_19` (`id`, `pengunjung`, `panggilan`, `lahir`, `jurus`, `rumah`, `kelamin`, `asal`, `UAN`) VALUES
(1, 'Maheswara Bimasena Tedja', 'Bimasena', 'Jakarta', 'IPA', 'MDT LAGOON', 'laki-laki', 'MGS', 90),
(3, 'Paramita Tedja', 'Mita', 'Jakarta', 'IPS', 'MDT', 'perempuan', 'MGS', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_data`
--
ALTER TABLE `item_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_IT1_Bima_19`
--
ALTER TABLE `tb_IT1_Bima_19`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_data`
--
ALTER TABLE `item_data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_IT1_Bima_19`
--
ALTER TABLE `tb_IT1_Bima_19`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
