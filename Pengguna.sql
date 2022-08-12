-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2022 at 03:21 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19396861_revan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pengguna`
--

CREATE TABLE `Pengguna` (
  `KodePengguna` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NamaPengguna` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoHp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `TanggalDaftar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Pengguna`
--

INSERT INTO `Pengguna` (`KodePengguna`, `NamaPengguna`, `Password`, `Alamat`, `NoHp`, `TanggalDaftar`) VALUES
('1234567', 'Revantri', '1234', 'jl. sebrang baru 21', '08123123123', '2022-08-11 13:36:25'),
('212121', 'Revantri', '212121', 'jl. sebrang baru', '08123123123', '2022-08-11 14:44:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`KodePengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
