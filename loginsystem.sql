-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for loginsystem
CREATE DATABASE IF NOT EXISTS `loginsystem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loginsystem`;

-- Dumping structure for table loginsystem.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table loginsystem.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT IGNORE INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table loginsystem.group_list
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

-- Dumping data for table loginsystem.group_list: ~0 rows (approximately)
/*!40000 ALTER TABLE `group_list` DISABLE KEYS */;
INSERT IGNORE INTO `group_list` (`id`, `First_name`, `Last_name`, `D.O.B`, `Marital_status`, `Phone`, `Address`, `Primary_provider`, `Proof_of_condition`, `Proof`, `Photo`, `Identification`, `Reg.Date`) VALUES
	(1, 'Yaa', 'Santa', '2019-05-31', 'Single', '24153412015', 'Nima', 'Niirich Coperation', '', '', '', '211114554', '');
/*!40000 ALTER TABLE `group_list` ENABLE KEYS */;

-- Dumping structure for table loginsystem.list
CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `paid` enum('0','1') DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table loginsystem.list: ~0 rows (approximately)
/*!40000 ALTER TABLE `list` DISABLE KEYS */;
/*!40000 ALTER TABLE `list` ENABLE KEYS */;

-- Dumping structure for table loginsystem.users
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

-- Dumping data for table loginsystem.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
	(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2015-11-12', '2015-11-12'),
	(10, 'Amit', 'tomar', 'dfhfd@gm.com', 'f925916e2754e5e03f75dd58a5733251', '82888888888', '2017-12-16'),
	(11, 'nii', 'nii', 'niilantei@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-05-16', '2019-05-16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
