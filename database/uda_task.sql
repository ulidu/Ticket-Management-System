-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 25, 2020 at 03:29 PM
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
  `task_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `assigned_by`, `emp_code`, `assigned_date`, `issue`, `category`, `status`, `designation`, `division`, `extension_no`, `priority`, `asset_code`, `ip_address`) VALUES
(28, 'yu', 'fgy', 'Wednesday 16th of September 2020 04:06:22 PM', 'jh', 'Hardware Issue', 'Approval Required', 'gh', 'Landscape Division', 'uh', 'Medium', 'yug', '192.168.1.102'),
(69, 'fserd', 'gbtr', 'Friday 25th of September 2020 09:38:46 AM', 'trv', 'Software Issue', 'Approved', 'ttr', 'Finance Division', 'tv', 'Low', 'rvt', '192.168.8.101'),
(27, 'rb', 'bg', 'Wednesday 16th of September 2020 12:20:23 PM', 'bg', 'Hardware Issue', 'Approval Required', 'bg', 'GIS Division', 'bg', 'Medium', 'bg', '192.168.1.102'),
(32, 'vfdvdfvdfvd', 'vdfv', 'Monday 21st of September 2020 10:24:54 AM', 'vfdvdfvdf', 'Network Issue', 'Approval Required', 'vdf', 'Landscape Division', 'vfd', 'Medium', 'vf', '::1');

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
  `division` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `employeeCode`, `firstName`, `lastName`, `email`, `password`, `date_created`, `status`, `acc_type`, `title`, `division`) VALUES
(14, '0868', 'Ulidu', 'Theerake', 'ulidutheerake@gmail.com', '333', 'Saturday 19th of September 2020 12:16:05 AM', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(12, '0000', 'System', 'Administrator', 'udatmsproject@gmail.com', 'admin', 'Saturday 19th of September 2020 12:14:48 AM', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(15, '0155', 'Amarabandu', 'Rupasinghe', 'amare@gmail.com', '333', 'Sunday 20th of September 2020 01:08:59 PM', 'Active', 'Administrative Officer', 'Mr.', 'Finance Division'),
(22, '123e1er1q3req1r', 'fde', 'sfd', 'df@fedc.com', '123456', 'Sunday 20th of September 2020 05:10:20 PM', 'Active', 'IT Staff', 'Mr.', 'Project Management Division');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
