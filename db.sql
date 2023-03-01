-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2023 at 10:59 AM
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
(1, 'kishan ', 'Patel', '1997-09-24', 'Male', 'krishanpatel105@gmail.com', '8128836095', 'MTIzNDU2', 'CorePHP,', 'uploads/download (3).jpg'),
(2, 'ass', 'ssa', '2023-03-01', 'Male', 'john@gmail.com', '9999999999', 'YzJodmR3PT0=', 'CorePHP,AdvancePHP,', 'uploads/image_2022_05_12T09_10_21_335Z.png'),
(3, 'abc', 'abc', '2023-02-28', 'Male', 'user@gmail.com', '1111111111', 'MTIzNDU2', 'CorePHP,AdvancePHP,Laravel,', 'uploads/1674804971642.jpg'),
(4, 'aaa', 'aaa', '2023-02-27', 'Male', 'zara@gmail.com', '7894561239', 'YWFhY2NjYmJiZGRk', 'CorePHP,Laravel,', 'uploads/rack4.jpeg'),
(5, 'kishan', 'Patel', '2023-03-01', 'Male', 'user@gmail.com', '4489778778', 'YWFzc3h4enpkZGNj', 'AdvancePHP,Laravel,', 'uploads/usgs-uGrT85dVK9U-unsplash.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
