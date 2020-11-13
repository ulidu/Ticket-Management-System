-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 13, 2020 at 01:38 AM
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
-- Table structure for table `account_recovery`
--

DROP TABLE IF EXISTS `account_recovery`;
CREATE TABLE IF NOT EXISTS `account_recovery` (
  `userID` varchar(200) DEFAULT NULL,
  `selector` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `expires` varchar(200) DEFAULT NULL,
  `email_reset` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
('96', '14', NULL, '2020-11-12 22:04:16', '29'),
('90', '51', '56', '2020-11-12 12:59:25', '29'),
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`logID`, `log_userID`, `log_date_time`, `log_action`, `log_emp_code`) VALUES
(1, NULL, '2020-11-12 17:14:15', 'New ticket added by teh in Finance Division', '561545'),
(2, '15', '2020-11-12 17:21:40', 'User ID: 15 Approved the ticket with ID: 93', NULL),
(3, NULL, '2020-11-12 19:42:03', 'New ticket added by xfgh in Finance Division', '4643'),
(4, '15', '2020-11-12 19:43:20', 'User ID: 15 Approved the ticket with ID: 94', NULL),
(5, '15', '2020-11-12 19:44:33', 'User ID: 15 Rejected and Deleted the ticket with ID: 94', NULL),
(6, '15', '2020-11-12 19:44:35', 'User ID: 15 Rejected and Deleted the ticket with ID: 93', NULL),
(7, NULL, '2020-11-12 19:45:57', 'New ticket added by adf in Finance Division', '43543'),
(8, '15', '2020-11-12 19:46:09', 'User ID: 15 Approved the ticket with ID: 95', NULL),
(9, NULL, '2020-11-12 19:53:38', 'New ticket added by rgdegf in Finance Division', '34543'),
(10, '15', '2020-11-12 19:53:45', 'User ID: 15 Approved the ticket with ID: 96', NULL),
(11, '29', '2020-11-12 22:04:16', 'User ID: 29 assigned the ticket ID: 96 for User ID : 14 as person No. 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
CREATE TABLE IF NOT EXISTS `notify` (
  `task_id` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`task_id`) VALUES
('95'),
('96');

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
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `assigned_by`, `emp_code`, `assigned_date`, `issue`, `category`, `status`, `designation`, `division`, `extension_no`, `priority`, `asset_code`, `ip_address`, `approved_by`, `approved_date`, `task_completed_date`) VALUES
(84, 'hgh', 'hg', '2020-10-28 14:17:32', 'gh', 'Software Issue', 'Completed', 'hg', 'Finance Division', 'h', 'Medium', 'ghf', '192.168.1.2', '15', '2020-10-28 14:18:01', '2020-11-02 16:49:16'),
(92, 'rt', 'sfgh', '2020-11-01 13:24:30', 'fgh', 'Software Issue', 'Completed', 'fgh', 'Finance Division', '545', 'Medium', 'gh', '192.168.1.2', '15', '2020-11-01 14:20:13', '2020-11-02 17:04:51'),
(95, 'adf', '43543', '2020-11-12 19:45:57', 'fdgd', 'Software Issue', 'Approved', 'dzgd', 'Finance Division', '4540', 'Medium', 'ftj', '192.168.1.2', '15', '2020-11-12 19:46:09', NULL),
(90, 's', 's', '2020-10-30 11:49:11', 'd', 'Software Issue', 'Assigned', 's', 'Finance Division', '21', 'Medium', 'd', '192.168.1.2', '15', '2020-11-03 11:34:20', ''),
(96, 'rgdegf', '34543', '2020-11-12 19:53:38', 'zdgfd', 'Software Issue', 'In Progress', 'dfhd', 'Finance Division', '4534', 'Medium', 'dsfg', '192.168.1.2', '15', '2020-11-12 19:53:45', ''),
(91, 'sfgd', 'fd', '2020-11-01 07:47:27', 'gfh', 'Software Issue', 'Approved', 'fg', 'Finance Division', '443', 'Medium', 'hr', '192.168.1.2', '15', '2020-11-12 16:29:39', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `employeeCode`, `firstName`, `lastName`, `email`, `password`, `date_created`, `status`, `acc_type`, `title`, `division`) VALUES
(14, '0868', 'Ulidu', 'Theerake', 'ulidutheerake@gmail.com', '$2y$10$L5Hoi/kQjDKbhnS0V8BzMOAx3ULdvekN0F/Lfko0TV5S.hH0JQHuO', 'Saturday 19th of September 2020 12:16:05 AM', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(12, '0000', 'System', 'Administrator', 'ud@gmail.com', '$2y$10$nTxOB9ro.s8tbSKH6WIjReoqbE1ooFpzxjOIvFKYoyzkEtFaninSm', 'Saturday 19th of September 2020 12:14:48 AM', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(15, '0155', 'Amarabandu', 'Rupasinghe', 'bimidugunathilake@gmail.com', '$2y$10$Rdcairg06Yjr86awsWDv7Oknud4TvIr1I3xLpAWh50yzAPoyScGvi', 'Sunday 20th of September 2020 01:08:59 PM', 'Active', 'Administrative Officer', 'Mr.', 'Finance Division'),
(22, '123', 'fde', 'sfd', 'udatmsproject@gmail.com', '$2y$10$Rdcairg06Yjr86awsWDv7Oknud4TvIr1I3xLpAWh50yzAPoyScGvi', 'Sunday 20th of September 2020 05:10:20 PM', 'Active', 'IT Staff', 'Mr.', 'Project Management Division'),
(29, '5656', 'admin', 'account', 'admin@admin.com', '$2y$10$i8T701XY1pJdYfrcDkcjnuJII.kIep9BPHlr.XvTpk/nEV0kwAY4i', 'Tuesday 20th of October 2020 08:41:06 AM', 'Active', 'Administrator', 'Mr.', 'Project Management Division'),
(30, '11', 'K', 'Gunathilake', 'kgunathilake333@gmail.com', '$2y$10$vaIBZ3JPl3hzFUC8897xZObx/HlwYXZWaHzPyKVx5X3f6zhk4qz0i', '2000-07-01T00:00:00+06:00', 'Active', 'Observer', 'Mr.', 'Project Management Division'),
(31, '1', 'Fathima', 'Fasliya', 'fazy.hfb@gmail.com', '$2y$10$2aCg1/WAlkI.7Fc2mNmVmurGke36djrvYEvV9UyDuubPgbK5VhM9a', '2020-10-22 09:15:12', 'Active', 'Administrative Officer', 'Mrs.', 'Project Management Division'),
(32, '53', 'Nalika', 'Damayanthi', 'nalikadamayanthi333@gmail.com', '$2y$10$I6wp1AYR/15QRv/Yd5Lp..aKye8n59cVR/kUlw6zJ08ei.biInAfu', '2020-11-01 13:13:57', 'Active', 'Observer', 'Mr.', 'Project Management Division'),
(33, '324', 'thd', 'fh', 'jb@jkh.com', '$2y$10$I9Knf6sbaZZPHsCd9QDqgO09pSoHORgk4spSwnWEK7ikFHWd67SzS', '2020-11-01 13:15:37', 'Active', 'Administrator', 'Mr.', 'Project Management Division'),
(34, '32', 'db', 'fgd', 'fhdh@gh.com', '$2y$10$c74MiGbke4zXpq85rZAqw.qKZTH8F2c9nk5UhXe3399epBqPgUQLu', '2020-11-08 16:40:25', 'Active', 'Observer', 'Mrs.', 'ITS Division'),
(35, '2', 'fgd', 'fgdz', 'sg@d.com', '$2y$10$34nn03/jVD4VIaa5LevwJ.ahmDo2vzgStoi5HUSaqIi4iY/M6rePi', '2020-11-08 16:43:10', 'Active', 'Observer', 'Mr.', 'ITS Division'),
(36, '123', 'ulidu', 't', 'ulidutheerake@gmail.com', '$2y$10$3VZGQZxN.i0KzITs.5v3ROCCs7UWOKRks2Rjd.oN09bi9h29cs5Ky', '2020-11-08 18:15:22', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(37, '5', 'fg', 'gh', 'udatmsproject@gmail.com', '$2y$10$p02Wgu2ib7j/UcMyNNDPue61H7tZcfk8h0FtKS1RSSmv8hX7Euvge', '2020-11-08 18:37:01', 'Active', 'IT Staff', 'Mrs.', 'ITS Division'),
(38, '34', 'gfd', 'fghd', 'ulidutheerake@gmail.com', '$2y$10$O3BeTeoKEmGVZS3w8aCz1uh2Aj2ukw1nX1/7O5yjMezgAzZt0FbsK', '2020-11-08 18:48:06', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(39, '1234', 'Sumiiii', 'Wijeeee', 'weelasanthi@gmail.com', '$2y$10$/ZjMZS2QLfkvjgSacpFeDO72yQbys4g0JgNQfUYgPflbmc5d/j5IW', '2020-11-08 18:51:44', 'Active', 'Administrator', 'Mrs.', 'ITS Division'),
(40, '0123', 'd', 'fgd', 'ulidutheerake@gmail.com', '$2y$10$ofsxP.hM/X8tMvVXHIjWJezphRMUtK0sbffIFDFSe6.2Z0XPsXCIq', '2020-11-08 18:52:51', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(41, '0123', 'K', 'Gunathilake', 'kgunathilake333@gmail.com', '$2y$10$DMfAI5dY0nP2VVQSEStzMeDYn55Nl.UfqzmyJkj9HRoQvz4bL7Tpq', '2020-11-08 18:54:17', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(42, '1234', 'Bimidu', 'Gunathilake', 'bimidugunathilake@gmail.com', '$2y$10$38reRge66gK9zQrJlF1oc.90YXStHcRfoihv..IhZNd3DhtZdotAe', '2020-11-08 18:55:21', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(43, '0153', 'Fathima', 'Fasliya', 'fazy.hfb@gmail.com', '$2y$10$G5HiqX2V/QJPIkYLVegPPu0i5Ho.Kz.vTDs3NraxpDo8n8ICGmP66', '2020-11-08 22:01:06', 'Active', 'Administrator', 'Miss.', 'ITS Division'),
(44, 'dfg', 'fgd', 'fd', 'fgdz@rc.com', '$2y$10$JL1FB6Iw332MiQuJiOxX0u5YEq/SLti6qoGWxqYE0e.JCu3WsHUby', '2020-11-08 22:28:53', 'Active', 'Administrator', 'Miss.', 'ITS Division'),
(45, '0123', 'f', 'fgd', 'f@d.com', '$2y$10$JeGPQ5Eap7mO4/5HajxVUulk0AprT9zNSU8tRpBgVGA1BHzcvljca', '2020-11-08 22:32:40', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(46, '454356467547', 'vkjhvg', 'sfgsdrg', 'ulidutheerake@gmail.com', '$2y$10$iXP6ZMoJeEgGObG22K/Gc.aPU9gEil4zU.FaCSSibNpieriOpc3US', '2020-11-11 14:50:39', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(47, '8678685', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$F.FPONCpCrHIGGBI9JcxVuJGmH4liPlgnN/Yxjt8cVQYycmEpKn4S', '2020-11-11 14:59:21', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(48, '8678685', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$cCl3dq7lKaGIFeQPI0jJ8uzVbla91WEjDQvObn06JJ3Rz77bwivfS', '2020-11-11 15:02:22', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(49, '8678685', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$hIPFQd2lvJiw39O8P9FV/ekwEhvOYw0MMHZVCY9L1dqRWyRathPJi', '2020-11-11 15:02:30', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(50, '6464', 'f', 'sdf', 'fsd@fs.com', '$2y$10$F5yDTBzG.IAzmxIvmDyQwurzSUIlol24sTRMGfjfLI/O5g3.WVHDK', '2020-11-11 15:03:05', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(51, '232423', 'fgdz', 'fg', 'dfsd@dsf.com', '$2y$10$u8UXouYXPZZxsYpByqZPxez7wG4kYf0R6nIQWtEhAajuuS0jv3LXm', '2020-11-11 15:04:20', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(52, '353454', 'fgsdzfg', 'fdgdt', 'ulidutheerake@gmail.com', '$2y$10$YtenZfAZOghWC8gJKstRQuohHsMJNHBdAkP3JzdfbFwekFrzNWNUC', '2020-11-11 15:12:45', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(53, '4238567', 'dfs', 'fsfs', 'ulidutheerake@gmail.com', '$2y$10$r1pTgBTJw2uFDGBfywTja.Kk11SCNFi94gOjksoYSSwQ79r4A3EXu', '2020-11-11 15:14:42', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(54, '6464', 't', 'hdf', 'dgs@gfsd.com', '$2y$10$c0BpcNYzb20LXGSkMB5ip.l8McLcgZ6Cgw6.yU7afkeXzUsajs8oe', '2020-11-11 15:27:53', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(55, '6464', 'jghjg', 'ghj', 'af@sf.com', '$2y$10$dk1FI1X.LoQau8VNemR7TOqY4QktNscAAFv2weIYo8EoOrnvoQ3SS', '2020-11-11 15:30:59', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(56, '546547457', 'gsg', 'sdg', 'uliduthegerake@gmail.com', '$2y$10$2nVG5Abn5BeDlV.okzEMEuON4kpf4eNXkMuBHA0bRH7EU2RWFlfXy', '2020-11-11 15:37:13', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(57, '4534535', 'sda', 'afe', 'ulidutheerahke@gmail.com', '$2y$10$1Qg6q.JZC/cKe7gHW6k81edjDAMwix6Ut4D5QQDysi.dv6VdDD4GO', '2020-11-11 15:52:37', 'Active', 'IT Staff', 'Mr.', 'ITS Division');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
