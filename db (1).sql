-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2023 at 05:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 2, 'Panaji'),
(4, 2, 'Margao'),
(5, 3, 'Raipur'),
(6, 3, 'Raigarh'),
(7, 4, 'Patna'),
(8, 4, 'Muzaffarpur'),
(9, 5, 'Guwahati'),
(10, 5, 'Silchar'),
(11, 6, 'Brisbane'),
(12, 6, 'Gold Coast'),
(13, 7, 'Adelaide'),
(14, 7, 'Ceduna'),
(15, 8, 'fvxdv xcvx'),
(16, 8, 'zcvzxcvzxcvzxc'),
(17, 9, 'sfgsdfgsfdsg'),
(18, 9, 'fdsgsdfg'),
(19, 10, 'sdfsdfsd'),
(20, 10, 'sdfsdfsdferfr'),
(21, 11, 'hknogkh'),
(22, 11, 'fgfghklfkjm'),
(23, 12, 'dfcdfgc'),
(24, 12, 'vbtvghvjh'),
(25, 13, 'tyuhgnb'),
(26, 13, 'hgfghfjhv'),
(27, 14, 'vnfdvndf'),
(28, 14, 'sdfskjdfn'),
(29, 15, 'asdasd'),
(30, 15, 'asdascxzc'),
(31, 16, 'asdfasd'),
(32, 16, 'qweqdczxcs'),
(33, 17, 'yutghngfvb'),
(34, 7, 'xcvbhfygnhcfv'),
(35, 18, 'fghfgxs'),
(36, 18, 'gbfvgbxcv'),
(37, 19, 'ojmlbmfmb '),
(38, 19, 'ojmnclkmv '),
(39, 20, 'uytfhnc'),
(40, 20, 'ghjfghncv'),
(41, 21, 'gfhfgc'),
(42, 21, 'dfsdf'),
(43, 22, 'okmokm'),
(44, 22, 'mkomko'),
(45, 23, 'bvccvb'),
(46, 23, 'vcbvcb'),
(47, 24, 'vgfvgf'),
(48, 24, 'kgfkgf'),
(49, 25, 'gfdgfd'),
(50, 25, 'gfdfdvfd');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'India'),
(2, 'Australia'),
(3, 'Brazil'),
(4, 'Canada'),
(5, 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state_name`) VALUES
(1, 1, 'Gujarat'),
(2, 1, 'Goa'),
(3, 1, 'Chhattisgarh'),
(4, 1, 'Bihar'),
(5, 1, 'Assam'),
(6, 2, 'Queensland'),
(7, 2, 'South Australia'),
(8, 2, 'Tasmania'),
(9, 2, 'Victoria'),
(10, 2, 'Western Australia'),
(11, 3, 'Rio de Janeiro'),
(12, 3, 'Mato Grosso'),
(13, 3, 'Minas Gerais'),
(14, 3, 'Alagoas'),
(15, 3, 'Acre'),
(16, 4, 'Nova Scotia'),
(17, 4, 'New Brunswick'),
(18, 4, 'Manitoba'),
(19, 4, 'British Columbia'),
(20, 4, 'Alberta'),
(21, 5, 'Pangasinan'),
(22, 5, 'Abra'),
(23, 5, 'Agusan del Norte'),
(24, 5, 'Bohol'),
(25, 5, 'Cagayan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fn`, `ln`, `dob`, `gender`, `email`, `phone`, `pass`, `subject`, `photo`) VALUES
(1, 'kishan', 'Patel', '1997-09-24', 'Male', 'krishanpatel105@gmail.com', '8128836095', 'S2lzaGFuQDEyMw==', 'CorePHP,AdvancePHP,Laravel,', 'uploads/avatar.png'),
(2, 'test', 'test', '2022-12-12', 'Female', 'test@gmail.com', '7894561239', 'dGVzdEAxMjM0', 'CorePHP,AdvancePHP,', 'uploads/194938.png'),
(3, 'abc', 'abc', '2022-12-01', 'Other', 'abc@gmail.com', '9876543210', 'YWJjQDEyMzQ1Ng==', 'CorePHP,Laravel,', 'uploads/avatar (1).png'),
(4, 'aaa', 'aaa', '2023-12-31', 'Female', 'aaa@gmail.com', '9999999999', 'YWFhQDEyMw==', 'CorePHP,', 'uploads/avatar (2).png'),
(5, 'bbb', 'bbb', '2022-12-31', 'Male', 'bbb@gmail.com', '1111111111', 'YmJiQDEyMw==', 'AdvancePHP,', 'uploads/writer.png'),
(6, 'ccc', 'ccc', '2022-03-18', 'Other', 'user@gmail.com', '4489778778', 'Y2NjQDEyMw==', 'Laravel,', 'uploads/box.ico'),
(7, 'kishan', 'Patel', '2023-01-01', 'Male', 'john@gmail.com', '1234567890', 'YXNkeGN2cXdl', 'CorePHP,AdvancePHP,', 'uploads/writer.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
