-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 03:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `idbank` int(3) NOT NULL,
  `namebank` varchar(20) NOT NULL,
  `addresbank` varchar(50) NOT NULL,
  `telpbank` varchar(12) NOT NULL,
  `personbank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`idbank`, `namebank`, `addresbank`, `telpbank`, `personbank`) VALUES
(123, 'nama bank', 'jakarta', '0839282727', 'person bank');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trip`
--

CREATE TABLE `tbl_trip` (
  `idtrip` int(11) NOT NULL,
  `nametrip` varchar(20) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trip`
--

INSERT INTO `tbl_trip` (`idtrip`, `nametrip`, `deskripsi`) VALUES
(2, 'trip1', 'ini trip ke daerah rawamangun'),
(3, 'trip2', 'ini trip pulogadung'),
(4, 'trip3', 'ini trip durensawit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_personal`
--

CREATE TABLE `tb_personal` (
  `id_personal` int(4) NOT NULL,
  `nama_personal` varchar(20) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `unitkerja` varchar(10) NOT NULL,
  `descperson` varchar(30) NOT NULL,
  `idtrip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_personal`
--

INSERT INTO `tb_personal` (`id_personal`, `nama_personal`, `dept`, `unitkerja`, `descperson`, `idtrip`) VALUES
(123929, 'nama personal edit', 'departemen', 'ATM', 'descripsi oke edit', 3),
(87382732, 'amir', 'departemen', 'SPC', 'deskripsi nya itu dsni', 2),
(2147483647, 'nama perosnal', 'departemen', 'CIT', 'descripsi oke ', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`idbank`);

--
-- Indexes for table `tbl_trip`
--
ALTER TABLE `tbl_trip`
  ADD PRIMARY KEY (`idtrip`);

--
-- Indexes for table `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `idtrip` (`idtrip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_trip`
--
ALTER TABLE `tbl_trip`
  MODIFY `idtrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD CONSTRAINT `tb_personal_ibfk_1` FOREIGN KEY (`idtrip`) REFERENCES `tbl_trip` (`idtrip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
