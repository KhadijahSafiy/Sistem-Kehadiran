-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 10:36 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `kata_laluan`) VALUES
(1, 'admin', '12345'),
(5, 'superman', '12345'),
(6, 'kiki', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `kakitangan`
--

CREATE TABLE IF NOT EXISTS `kakitangan` (
`id` int(11) NOT NULL,
  `id_kakitangan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_laluan` varchar(50) NOT NULL,
  `no_tel` varchar(100) NOT NULL,
  `kad_pengenalan` bigint(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jawatan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kakitangan`
--

INSERT INTO `kakitangan` (`id`, `id_kakitangan`, `nama`, `kata_laluan`, `no_tel`, `kad_pengenalan`, `jabatan`, `jawatan`) VALUES
(38, '2017123456', 'kim hanbin ', '12345', '0134546756', 412220936809, 'JTMK', 'Lecturer'),
(39, '2017787654', 'kim jinhwan ', '12345', '0138765665', 506210210982, 'JP', 'Lecturer'),
(40, '2017567483', 'kim jiwon ', '12345', '0124539876', 904219876565, 'JKE', 'Lecturer'),
(41, '2017334567', 'song yunhyeong ', '12345', '0135646565', 961221091987, 'JKM', 'Lecturer'),
(42, '2017224326', 'koo junhoe', '12345', '0198787656', 960421298787, 'JMSK', 'Lecturer'),
(43, '2017098765', 'kim donghyuk ', '12345', '0125434323', 991209876543, 'JTMK', 'Lecturer'),
(44, '2017778564', 'jung chanwoo', '12345', '0192345678', 101021098756, 'JP', 'Lecturer'),
(45, '2017213453', 'jung jaehyun ', '12345', '0123009789', 960598679880, 'JKM', 'Lecturer'),
(46, '2017656787', 'na jaemin', '12345', '0187657786', 302109098761, 'JMSK', 'Lecturer'),
(47, '2017126658', 'lucas', '12345', '0123459879', 991990019912, 'JP', 'Lecturer'),
(48, '2017090775', 'taeyong ', '12345', '0137465876', 986754342123, 'JMSK', 'Lecturer'),
(49, '2017884563', 'nakamoto yuta ', '12345', '0198786654', 970921087654, 'JKE', 'Lecturer'),
(50, '2017663342', 'park jisung', '12345', '0186758473', 951312897654, 'JKE', 'Lecturer'),
(51, '2017334543', 'mark lee', '12345', '0123456777', 200102109811, 'JKE', 'Lecturer'),
(52, '2017700964', 'ten', '12345', '0123457654', 990222015881, 'JTMK', 'Lecturer'),
(53, '2017994556', 'jeno', '12345', '0196723412', 961027867547, 'JP', 'Lecturer'),
(54, '2017009643', 'haechan ', '12345', '0192345555', 960907129880, 'JMSK', 'Lecturer'),
(55, '2017888888', 'jungwoo', '12345', '0123456000', 960504120000, 'JKE', 'Lecturer'),
(56, '2017666666', 'renjun', '12345', '0190099888', 30219909876, 'JMSK', 'Lecturer'),
(57, '2017333333', 'johnny suh ', '12345', '0109876529', 961023453687, 'JKM', 'Lecturer'),
(58, '2017778899', 'shotaro', '12345', '0187659900', 90453456789, 'JTMK', 'Lecturer'),
(59, '2017984326', 'winwin ', '12345', '0123452222', 41222656580, 'JP', 'Lecturer'),
(60, '2017774685', 'doyoung ', '12345', '0129876777', 991228099876, 'JKE', 'Lecturer'),
(61, '2017129898', 'chenle', '12345', '0123555449', 412820934844, 'JKM', 'Lecturer'),
(62, '2017989898', 'sungchan', '12345', '0184657788', 930721098765, 'JP', 'Lecturer'),
(63, '2017994646', 'yangyang', '12345', '0192987654', 991228019999, 'JTMK', 'Lecturer'),
(64, '2017886726', 'xiaojun', '12345', '0189897676', 30212998834, 'JMSK', 'Lecturer'),
(65, '2017222324', 'kun', '12345', '0187653452', 40504675654, 'JTMK', 'Lecturer'),
(66, '2017988909', 'taeil ', '12345', '0190956777', 991220987881, 'JTMK', 'Lecturer'),
(67, '2028778676', 'hendery', '12345', '0192349900', 41220908780, 'JKE', 'Lecturer'),
(68, '2017489856', 'ok taecyon', '6789', '0134388841', 30406018800, 'JKE', 'Lecturer'),
(69, '2021345643', 'doctor strange', '6789', '0134386841', 991214025510, 'JTMK', 'Lecturer'),
(70, '2021398468', 'jimin', '6789', '0134383981', 40807025679, 'JP', 'Lecturer'),
(71, '2021643643', 'strawberry', '6789', '0136545981', 981207018800, 'JP', 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
`id` int(11) NOT NULL,
  `id_kakitangan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_laluan` varchar(50) NOT NULL,
  `no_tel` int(20) NOT NULL,
  `kad_pengenalan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jawatan` varchar(100) NOT NULL,
  `log_type` tinyint(1) NOT NULL,
  `datetime_log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `id_kakitangan`, `nama`, `kata_laluan`, `no_tel`, `kad_pengenalan`, `jabatan`, `jawatan`, `log_type`, `datetime_log`, `date_updated`) VALUES
(1, '2021234567', 'aishah', '12345', 123456789, '2147483647', 'JKE', 'Lecturer', 1, '2021-05-15 17:49:57', '2021-05-15 17:49:57'),
(2, '2021234567', 'aishah', '12345', 124365879, '2147483647', 'JKE', 'Lecturer', 1, '2021-05-15 18:20:11', '2021-05-15 18:20:11'),
(3, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 00:17:07', '2021-05-16 00:17:07'),
(4, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 00:54:42', '2021-05-16 00:54:42'),
(5, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 03:00:52', '2021-05-16 03:00:52'),
(6, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 03:03:32', '2021-05-16 03:03:32'),
(7, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 03:07:40', '2021-05-16 03:07:40'),
(8, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 13:46:39', '2021-05-16 13:46:39'),
(9, '2018989898', 'coconutmix', '54321', 187654329, '960504129880', 'JKE', 'Lecturer', 1, '2021-05-16 13:49:19', '2021-05-16 13:49:19'),
(10, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 14:11:33', '2021-05-16 14:11:33'),
(11, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 14:56:29', '2021-05-16 14:56:29'),
(12, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 15:11:21', '2021-05-16 15:11:21'),
(13, '2017224326', 'batman', '12345', 134388841, '991229025880', 'JKE', 'Lecturer', 1, '2021-05-16 16:03:46', '2021-05-16 16:03:46'),
(14, '2021657688', 'superman', '12345', 123456789, '991228015881', 'JP', 'Lecturer', 1, '2021-05-16 16:08:51', '2021-05-16 16:08:51'),
(15, '2017334567', 'song yunhyeong ', '12345', 135646565, '961221091987', 'JKM', 'Lecturer', 1, '2021-05-18 16:35:11', '2021-05-18 16:35:11');

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
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kakitangan`
--
ALTER TABLE `kakitangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
