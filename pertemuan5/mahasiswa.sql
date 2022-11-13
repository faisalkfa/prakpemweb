-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2022 at 11:15 AM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faisalkh_prak5`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `program_studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `program_studi`) VALUES
('118140037', 'Markus Togi Fedrian Rivaldi Sinaga', 'Teknik Informatika'),
('120240045', 'Retha Priska Divanza', 'Arsitektur Lanskap'),
('120240070', 'Dwi Putri Utami', 'Arsitektur Lanskap'),
('120140158', 'Faisal Khairul Fasha', 'Teknik Informatika'),
('119210185', 'M. Rendi Adhitya', 'Teknik Sipil'),
('118140015', 'Defangga Aby Vonega', 'Teknik Informatika'),
('120210224', 'Nabil Juadi', 'Teknik Sipil'),
('120210221', 'Eka Aji Saputro', 'Teknik Sipil'),
('121250048', 'Puji Samosir', 'Teknik Lingkungan'),
('121280006', 'Jabir Shoji Arhab', 'Teknik Kimia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
