-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 08:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sys_kehadiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kata_laluan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `kata_laluan`) VALUES
(1, 'admin', '12345'),
(2, 'ecah', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `kakitangan`
--

CREATE TABLE IF NOT EXISTS `kakitangan` (
`id` int(20) NOT NULL,
  `id_kakitangan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_laluan` varchar(50) NOT NULL,
  `no_tel` int(20) NOT NULL,
  `kad_pengenalan` int(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jawatan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kakitangan`
--

INSERT INTO `kakitangan` (`id`, `id_kakitangan`, `nama`, `kata_laluan`, `no_tel`, `kad_pengenalan`, `jabatan`, `jawatan`) VALUES
(1, '2021234567', 'aishah', '12345', 123456789, 2147483647, 'JKE', 'Lecturer'),
(3, '2021345678', 'alia', '12345', 123456789, 2147483647, 'JP', 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
`id` int(11) NOT NULL,
  `id_kakitangan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `datetime_log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kakitangan`
--
ALTER TABLE `kakitangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kakitangan`
--
ALTER TABLE `kakitangan`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
