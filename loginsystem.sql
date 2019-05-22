-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2019 at 09:06 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--
CREATE DATABASE IF NOT EXISTS `loginsystem`;
USE `loginsystem`;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `group_list`
--

DROP TABLE IF EXISTS `group_list`;
CREATE TABLE IF NOT EXISTS `group_list` (
  `id` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `D.O.B` date NOT NULL,
  `Marital_status` text NOT NULL,
  `Phone` text NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Primary_provider` varchar(80) NOT NULL,
  `Proof_of_condition` text NOT NULL,
  `Proof` text NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Identification` varchar(30) NOT NULL,
  `Reg.Date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_list`
--

INSERT INTO `group_list` (`id`, `First_name`, `Last_name`, `D.O.B`, `Marital_status`, `Phone`, `Address`, `Primary_provider`, `Proof_of_condition`, `Proof`, `Photo`, `Identification`, `Reg.Date`) VALUES
(1, 'Yaa', 'Santa', '2019-05-31', 'Single', '24153412015', 'Nima', 'Niirich Coperation', '', '', '', '211114554', '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `D.O.B` date NOT NULL,
  `Marital_status` text NOT NULL,
  `Phone` text NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Provider` text NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Identification` varchar(30) NOT NULL,
  `Reg. Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `First_name`, `Last_name`, `D.O.B`, `Marital_status`, `Phone`, `Address`, `Provider`, `Photo`, `Identification`, `Reg. Date`) VALUES
(0, 'Michael', 'Lamptey', '2019-05-15', '', '+233573934415', 'Ogle Rd', 'Nii Santa', '', '64866854', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `posting_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2015-11-12', '2015-11-12'),
(10, 'Amit', 'tomar', 'dfhfd@gm.com', 'f925916e2754e5e03f75dd58a5733251', '82888888888', '2017-12-16'),
(11, 'nii', 'nii', 'niilantei@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-05-16', '2019-05-16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
