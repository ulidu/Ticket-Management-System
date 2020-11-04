-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 04, 2020 at 11:44 AM
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
-- Table structure for table `assign`
--

DROP TABLE IF EXISTS `assign`;
CREATE TABLE IF NOT EXISTS `assign` (
  `task_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `userID` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `userID_2_opt` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `assigned_to_user_date` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `assigned_by` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`task_id`, `userID`, `userID_2_opt`, `assigned_to_user_date`, `assigned_by`) VALUES
('84', '22', '14', '2020-10-28 15:08:36', '29'),
('92', '14', '22', '2020-11-02 17:03:11', '29');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackID` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `feedback` varchar(200) NOT NULL,
  `extension` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `division` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`feedbackID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `logID` int(200) NOT NULL AUTO_INCREMENT,
  `log_userID` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `log_date_time` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `log_action` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `log_emp_code` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`logID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`logID`, `log_userID`, `log_date_time`, `log_action`, `log_emp_code`) VALUES
(46, '29', '2020-11-04 10:58:47', 'User ID: 29 Removed previously assigned person(s) for the ticket with ID: 90', NULL),
(45, '29', '2020-11-04 10:50:06', 'User ID: 29 assigned the ticket ID: 90 for User ID : 22 as person No. 1', NULL),
(44, '29', '2020-11-02 17:03:11', 'User ID: 29 assigned the ticket ID: 92 for User ID : 22 as person No. 2', NULL),
(43, '29', '2020-11-02 17:03:08', 'User ID: 29 assigned the ticket ID: 92 for User ID : 14 as person No. 1', NULL),
(42, '29', '2020-11-02 17:02:39', 'User ID: 29 Deleted the ticket with ID: 89', NULL),
(41, NULL, '2020-11-01 13:24:30', 'New ticket added by rt in Finance Division', 'sfgh'),
(40, '29', '2020-11-01 13:15:37', 'User ID: 29 Added a new user (Acc Type: Administrator) named thd fh with Employee Code: 324', NULL),
(39, '29', '2020-11-01 13:13:57', 'User ID: 29 Added a new user (Acc  Type: Observer) with EmpCode: 53 named ggj gh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `task_id` double NOT NULL AUTO_INCREMENT,
  `assigned_by` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emp_code` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `assigned_date` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `issue` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `designation` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `division` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `extension_no` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `priority` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `asset_code` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ip_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `approved_by` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `approved_date` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `task_completed_date` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `assigned_by`, `emp_code`, `assigned_date`, `issue`, `category`, `status`, `designation`, `division`, `extension_no`, `priority`, `asset_code`, `ip_address`, `approved_by`, `approved_date`, `task_completed_date`) VALUES
(84, 'hgh', 'hg', '2020-10-28 14:17:32', 'gh', 'Software Issue', 'Completed', 'hg', 'Finance Division', 'h', 'Medium', 'ghf', '192.168.1.2', '15', '2020-10-28 14:18:01', '2020-11-02 16:49:16'),
(92, 'rt', 'sfgh', '2020-11-01 13:24:30', 'fgh', 'Software Issue', 'Completed', 'fgh', 'Finance Division', '545', 'Medium', 'gh', '192.168.1.2', '15', '2020-11-01 14:20:13', '2020-11-02 17:04:51'),
(90, 's', 's', '2020-10-30 11:49:11', 'd', 'Software Issue', 'Approved', 's', 'Finance Division', '21', 'Medium', 'd', '192.168.1.2', '15', '2020-11-03 11:34:20', ''),
(91, 'sfgd', 'fd', '2020-11-01 07:47:27', 'gfh', 'Software Issue', 'Approval Required', 'fg', 'Finance Division', '443', 'Medium', 'hr', '192.168.1.2', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `employeeCode`, `firstName`, `lastName`, `email`, `password`, `date_created`, `status`, `acc_type`, `title`, `division`) VALUES
(14, '0868', 'Ulidu', 'Theerake', 'ulidutheerake@gmail.com', '$2y$10$Rdcairg06Yjr86awsWDv7Oknud4TvIr1I3xLpAWh50yzAPoyScGvi', 'Saturday 19th of September 2020 12:16:05 AM', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(12, '0000', 'System', 'Administrator', 'udatmsproject@gmail.com', '$2y$10$nTxOB9ro.s8tbSKH6WIjReoqbE1ooFpzxjOIvFKYoyzkEtFaninSm', 'Saturday 19th of September 2020 12:14:48 AM', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(15, '0155', 'Amarabandu', 'Rupasinghe', 'amare@gmail.com', '$2y$10$Rdcairg06Yjr86awsWDv7Oknud4TvIr1I3xLpAWh50yzAPoyScGvi', 'Sunday 20th of September 2020 01:08:59 PM', 'Active', 'Administrative Officer', 'Mr.', 'Finance Division'),
(22, '123', 'fde', 'sfd', 'df@fedc.com', '$2y$10$Rdcairg06Yjr86awsWDv7Oknud4TvIr1I3xLpAWh50yzAPoyScGvi', 'Sunday 20th of September 2020 05:10:20 PM', 'Active', 'IT Staff', 'Mr.', 'Project Management Division'),
(29, '5656', 'admin', 'account', 'admin@admin.com', '$2y$10$lwW0IwMrZkDgr.sP4ZrvbuPBfgPi7iNOpfntqm/XHdTijEaFq1MLS', 'Tuesday 20th of October 2020 08:41:06 AM', 'Active', 'Administrator', 'Mr.', 'Project Management Division'),
(30, '11', 'aaa', 'aa', 'a@a.com', '$2y$10$vaIBZ3JPl3hzFUC8897xZObx/HlwYXZWaHzPyKVx5X3f6zhk4qz0i', '2000-07-01T00:00:00+06:00', 'Active', 'Observer', 'Mr.', 'Project Management Division'),
(31, '1', 's', 's', 's@a.com', '$2y$10$2aCg1/WAlkI.7Fc2mNmVmurGke36djrvYEvV9UyDuubPgbK5VhM9a', '2020-10-22 09:15:12', 'Active', 'Administrative Officer', 'Mrs.', 'Project Management Division'),
(32, '53', 'ggj', 'gh', 'ds@fgs.com', '$2y$10$I6wp1AYR/15QRv/Yd5Lp..aKye8n59cVR/kUlw6zJ08ei.biInAfu', '2020-11-01 13:13:57', 'Active', 'Observer', 'Mr.', 'Project Management Division'),
(33, '324', 'thd', 'fh', 'jb@jkh.com', '$2y$10$I9Knf6sbaZZPHsCd9QDqgO09pSoHORgk4spSwnWEK7ikFHWd67SzS', '2020-11-01 13:15:37', 'Active', 'Administrator', 'Mr.', 'Project Management Division');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
