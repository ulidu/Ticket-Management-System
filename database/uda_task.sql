-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 20, 2020 at 07:16 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uda_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

DROP TABLE IF EXISTS `approve`;
CREATE TABLE IF NOT EXISTS `approve` (
  `tasktask_id` varchar(200) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `approved_by` varchar(200) NOT NULL,
  `approved_date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

DROP TABLE IF EXISTS `assign`;
CREATE TABLE IF NOT EXISTS `assign` (
  `task_id` varchar(200) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `assigned_to_user_date` varchar(200) NOT NULL,
  `assigned_by` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackID` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `extension` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  PRIMARY KEY (`feedbackID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `task_id` double NOT NULL AUTO_INCREMENT,
  `assigned_by` varchar(200) NOT NULL,
  `emp_code` varchar(200) NOT NULL,
  `assigned_date` varchar(200) NOT NULL,
  `issue` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `extension_no` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `priority` varchar(200) NOT NULL,
  `asset_code` varchar(200) NOT NULL,
  `ip_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `assigned_by`, `emp_code`, `assigned_date`, `issue`, `category`, `status`, `designation`, `division`, `extension_no`, `priority`, `asset_code`, `ip_address`) VALUES
(28, 'yu', 'fgy', 'Wednesday 16th of September 2020 04:06:22 PM', 'jh', 'Hardware Issue', 'Approval Required', 'gh', 'Landscape Division', 'uh', 'Medium', 'yug', '192.168.1.102'),
(26, 'srbfd', 'bg', 'Wednesday 16th of September 2020 12:13:54 PM', 'g', 'Software Issue', 'Approval Required', 'gb', 'Finance Division', 'gf', 'Low', 'gb', '192.168.1.102'),
(24, 'nf', 'b', 'Thursday 10th of September 2020 03:43:48 PM', 'rfsg', 'Hardware Issue', 'Approval Required', 'bfd', 'Finance Division', '43r2w', 'Medium', 'dfbg', '192.168.1.103'),
(22, 'Ulidu', '868', 'Thursday 10th of September 2020 01:47:35 PM', 'PC not working', 'hardware', 'submitted', 'ITS Officer - Intern', 'GIS Division', '1578', 'Low', '2018/C/018', '192.168.8.102'),
(23, 'fg', 'N', 'Thursday 10th of September 2020 03:43:11 PM', 'dh', 'Software Issue', 'Need Approval', 'fh', 'Finance Division', '54563', 'Medium', 'dh', '192.168.1.103'),
(27, 'rb', 'bg', 'Wednesday 16th of September 2020 12:20:23 PM', 'bg', 'Hardware Issue', 'Approval Required', 'bg', 'GIS Division', 'bg', 'Medium', 'bg', '192.168.1.102'),
(29, 'sc', 'cd', 'Saturday 19th of September 2020 01:59:42 AM', 'c', 'Hardware Issue', 'Approval Required', 'c', 'Finance Division', 'dc', 'Low', 'c', '192.168.8.100'),
(30, 'ulidu', 'f', 'Saturday 19th of September 2020 09:22:30 AM', 'cwda', 'Software Issue', 'Approval Required', 'sc', 'Finance Division', 'c3', 'Medium', 'wc', '192.168.8.100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `employeeCode` varchar(200) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `acc_type` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `employeeCode`, `firstName`, `lastName`, `email`, `password`, `date_created`, `status`, `acc_type`, `title`) VALUES
(14, '0868', 'Ulidu', 'Theerake', 'ulidutheerake@gmail.com', '333', 'Saturday 19th of September 2020 12:16:05 AM', 'Active', 'IT Staff', 'Mr.'),
(12, '0000', 'System', 'Administrator', 'udatmsproject@gmail.com', 'admin', 'Saturday 19th of September 2020 12:14:48 AM', 'Active', 'Administrator', 'Mr.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
