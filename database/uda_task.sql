-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Feb 10, 2021 at 07:11 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `uda_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_recovery`
--

CREATE TABLE `account_recovery` (
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

CREATE TABLE `assign` (
                          `task_id` varchar(200) DEFAULT NULL,
                          `userID` varchar(200) DEFAULT NULL,
                          `userID_2_opt` varchar(200) DEFAULT NULL,
                          `assigned_to_user_date` varchar(200) DEFAULT NULL,
                          `assigned_by` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`task_id`, `userID`, `userID_2_opt`, `assigned_to_user_date`, `assigned_by`) VALUES
('84', '22', '14', '2020-10-28 15:08:36', '29'),
('96', '14', NULL, '2020-11-12 22:04:16', '29'),
('90', '51', '56', '2020-11-12 12:59:25', '29'),
('92', '14', '22', '2020-11-02 17:03:11', '29'),
('101', '36', NULL, '2021-02-08 12:04:03', '29'),
('95', '56', NULL, '2020-11-13 20:01:52', '29'),
('102', '36', '14', '2021-02-08 12:00:35', '29'),
('91', '36', NULL, '2021-02-08 11:41:33', '29');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
                            `division_id` int(200) NOT NULL,
                            `division_name` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`) VALUES
(1, 'ITS Division'),
(2, 'Project Management Division'),
(3, 'Finance Division'),
(4, 'Landscape Division'),
(5, 'Western Province Division'),
(6, 'CMR Division'),
(7, 'GIS Division'),
(8, 'PPM Division');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
                            `feedbackID` int(200) NOT NULL,
                            `name_added` varchar(200) DEFAULT NULL,
                            `feedback` varchar(200) DEFAULT NULL,
                            `extension` varchar(200) DEFAULT NULL,
                            `date_feedback` varchar(200) DEFAULT NULL,
                            `client_ip` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `name_added`, `feedback`, `extension`, `date_feedback`, `client_ip`) VALUES
(6, 'etsfg', 'gdf', '5363', '2020-11-19 22:32:47', '::1'),
(5, '', 'ffgd', '53', '2020-11-19 22:32:39', '::1'),
(4, 'fgd', 'df', '543', '2020-11-19 21:59:11', '::1'),
(7, '', 'dgf', '', '2020-11-19 22:32:53', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
                       `logID` int(200) NOT NULL,
                       `log_userID` varchar(200) DEFAULT NULL,
                       `log_date_time` varchar(200) DEFAULT NULL,
                       `log_action` varchar(200) DEFAULT NULL,
                       `log_emp_code` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(11, '29', '2020-11-12 22:04:16', 'User ID: 29 assigned the ticket ID: 96 for User ID : 14 as person No. 1', NULL),
(12, NULL, '2020-11-13 15:11:21', 'New ticket added by fasliya in Finance Division', '245653653'),
(13, '15', '2020-11-13 15:11:55', 'User ID: 15 Approved the ticket with ID: 97', NULL),
(14, '29', '2020-11-13 20:01:46', 'User ID: 29 assigned the ticket ID: 97 for User ID : 51 as person No. 1', NULL),
(15, '29', '2020-11-13 20:01:52', 'User ID: 29 assigned the ticket ID: 95 for User ID : 56 as person No. 1', NULL),
(16, '29', '2020-11-13 21:05:14', 'User ID: 29 Disabled the user with ID: 55', NULL),
(17, '29', '2020-11-13 21:05:45', 'User ID: 29 Disabled the user with ID: 55', NULL),
(18, '29', '2020-11-13 21:06:31', 'User ID: 29 Disabled the user with ID: 55', NULL),
(19, '29', '2020-11-13 22:21:01', 'User ID: 29 Disabled the user with ID: 55', NULL),
(20, '29', '2020-11-13 22:21:04', 'User ID: 29 Disabled the user with ID: 55', NULL),
(21, '29', '2020-11-13 22:21:12', 'User ID: 29 Disabled the user with ID: 54', NULL),
(22, '29', '2020-11-13 22:22:55', 'User ID: 29 Disabled the user with ID: 55', NULL),
(23, '29', '2020-11-13 22:23:40', 'User ID: 29 Disabled the user with ID: 55', NULL),
(24, '29', '2020-11-13 22:23:41', 'User ID: 29 Disabled the user with ID: 57', NULL),
(25, '29', '2020-11-13 22:32:20', 'User ID: 29 Disabled the user with ID: 55', NULL),
(26, '29', '2020-11-13 22:33:29', 'User ID: 29 Disabled the user with ID: 56', NULL),
(27, '29', '2020-11-13 22:34:25', 'User ID: 29 Disabled the user with ID: 56', NULL),
(28, '29', '2020-11-13 22:34:30', 'User ID: 29 Disabled the user with ID: 55', NULL),
(29, '29', '2020-11-13 22:39:47', 'User ID: 29 Disabled the user with ID: 55', NULL),
(30, '29', '2020-11-13 22:42:09', 'User ID: 29 Disabled the user with ID: 55', NULL),
(31, '29', '2020-11-13 22:43:49', 'User ID: 29 Disabled the user with ID: 55', NULL),
(32, '29', '2020-11-13 23:54:58', 'User ID: 29 Activated the user with ID: 55', NULL),
(33, '29', '2020-11-14 08:13:13', 'User ID: 29 Disabled the user with ID: 50', NULL),
(34, '29', '2020-11-14 15:50:55', 'User ID: 29 Deleted the user with ID: 34', NULL),
(35, '29', '2020-11-14 16:22:39', 'User ID: 29 Disabled the user with ID: 51', NULL),
(36, '29', '2020-11-14 16:22:49', 'User ID: 29 Activated the user with ID: 51', NULL),
(37, '29', '2020-11-15 22:39:54', 'User ID: 29 Updated an existing user with Employee Code: 6464435 named t hdf', NULL),
(38, '29', '2020-11-15 22:40:44', 'User ID: 29 Updated an existing user with Employee Code: 6464435 named t hdf', NULL),
(39, '29', '2020-11-15 22:58:43', 'User ID: 29 Updated an existing user with Employee Code: 6464435 named t hdf', NULL),
(40, '29', '2020-11-15 23:01:26', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(41, '29', '2020-11-15 23:01:46', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(42, '29', '2020-11-15 23:03:51', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named jghjg ghj', NULL),
(43, '29', '2020-11-15 23:04:08', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named jghjg ghj', NULL),
(44, '29', '2020-11-15 23:04:20', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named jghjg ghj', NULL),
(45, '29', '2020-11-15 23:05:05', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(46, '29', '2020-11-15 23:11:05', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(47, '29', '2020-11-15 23:12:56', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(48, '29', '2020-11-16 07:14:10', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(49, '29', '2020-11-16 17:14:47', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(50, '29', '2020-11-16 17:15:46', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(51, '29', '2020-11-16 17:18:44', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(52, '29', '2020-11-16 17:19:37', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(53, '29', '2020-11-16 17:21:54', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(54, '29', '2020-11-16 17:22:17', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(55, '29', '2020-11-16 17:23:33', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(56, '29', '2020-11-16 17:25:41', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(57, '29', '2020-11-16 17:25:57', 'User ID: 29 Updated an existing user with Employee Code: 6464 named f sdf', NULL),
(58, '29', '2020-11-16 17:57:22', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(59, '29', '2020-11-16 17:57:37', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(60, '29', '2020-11-16 17:58:15', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(61, '29', '2020-11-16 18:03:25', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(62, '29', '2020-11-16 18:03:45', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(63, '29', '2020-11-16 18:03:53', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(64, '29', '2020-11-16 18:05:01', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(65, '29', '2020-11-16 18:05:10', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(66, '29', '2020-11-16 18:05:17', 'User ID: 29 Updated an existing user with Employee Code: 6464 named f sdf', NULL),
(67, '29', '2020-11-16 18:05:27', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(68, '29', '2020-11-16 18:09:44', 'User ID: 29 Updated an existing user with Employee Code: 6464647 named abc d', NULL),
(69, '29', '2020-11-16 18:27:10', 'User ID: 29 Updated an existing user with Employee Code: 4238567 named dfs fsfs', NULL),
(70, '29', '2020-11-16 18:44:54', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(71, '29', '2020-11-16 18:46:15', 'User ID: 29 Updated an existing user with Employee Code: 12389 named abc xy', NULL),
(72, '29', '2020-11-16 18:46:25', 'User ID: 29 Updated an existing user with Employee Code: 4238567 named dfs fsfs', NULL),
(73, '29', '2020-11-16 18:58:50', 'User ID: 29 Updated an existing user with Employee Code: 4238567 named dfs fsfs', NULL),
(74, '29', '2020-11-18 09:36:34', 'User ID: 29 re-assigned the previously assigned ticket with ID: 97 for User ID: 14 as person No. 1', NULL),
(77, NULL, '2020-11-18 17:39:43', 'New ticket added by rdgery in ITS Division', '324'),
(76, NULL, '2020-11-18 16:51:53', 'New ticket added by dfg in ITS Division', '45'),
(78, '29', '2020-11-18 21:29:35', 'User ID: 29 Deleted the ticket with ID: 97', NULL),
(79, NULL, '2020-11-19 08:22:03', 'New ticket added by hr in ITS Division', '43'),
(80, '29', '2020-11-19 15:36:36', 'User ID: 29 assigned the ticket ID: 101 for User ID : 22 as person No. 1', NULL),
(81, '29', '2021-02-06 11:47:04', 'User ID: 29 Added a new user (Acc Type: IT Staff) named abc xy with Employee Code: 151', NULL),
(82, '29', '2021-02-06 11:47:30', 'User ID: 29 Activated the user with ID: 50', NULL),
(83, NULL, '2021-02-06 11:54:40', 'New ticket added by amare in ITS Division', '65'),
(84, '29', '2021-02-06 11:56:16', 'User ID: 29 Added a new user (Acc Type: IT Staff) named amare sfg with Employee Code: 444', NULL),
(85, '29', '2021-02-06 12:11:13', 'User ID: 29 Added a new user (Acc Type: IT Staff) named gfh fgh with Employee Code: 561', NULL),
(86, '29', '2021-02-06 19:07:40', 'User ID: 29 Added a new user (Acc Type: Administrative Officer) named am a with Employee Code: 111', NULL),
(87, '61', '2021-02-06 19:16:23', 'User ID: 61 Approved the ticket with ID: 102', NULL),
(88, '29', '2021-02-06 19:21:43', 'User ID: 29 assigned the ticket ID: 102 for User ID : 14 as person No. 1', NULL),
(89, NULL, '2021-02-07 21:01:50', 'New ticket added by fas1 in Project Management Division', '123'),
(90, NULL, '2021-02-07 21:06:50', 'New ticket added by zdfg in Landscape Division', '23423'),
(91, NULL, '2021-02-07 22:10:33', 'New ticket added by gdth in ITS Division', '345'),
(92, '29', '2021-02-08 11:41:33', 'User ID: 29 assigned the ticket ID: 91 for User ID : 36 as person No. 1', NULL),
(93, '29', '2021-02-08 11:56:12', 'User ID: 29 re-assigned the previously assigned ticket with ID: 102 for User ID: 22 as person No. 1', NULL),
(94, '29', '2021-02-08 11:56:22', 'User ID: 29 assigned the ticket ID: 102 for User ID : 14 as person No. 2', NULL),
(95, '29', '2021-02-08 12:00:35', 'User ID: 29 re-assigned the previously assigned ticket with ID: 102 for User ID: 36 as person No. 1', NULL),
(96, '29', '2021-02-08 12:04:03', 'User ID: 29 re-assigned the previously assigned ticket with ID: 101 for User ID: 36 as person No. 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
    `task_id` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`task_id`) VALUES
('801420');

-- --------------------------------------------------------

--
-- Table structure for table `notify_ao`
--

CREATE TABLE `notify_ao` (
                             `random_id` varchar(200) DEFAULT NULL,
                             `assigned_by_ao_notify` varchar(200) DEFAULT NULL,
                             `issue_ao_notify` varchar(200) DEFAULT NULL,
                             `designation_ao_notify` varchar(200) DEFAULT NULL,
                             `division_ao_notify` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notify_staff`
--

CREATE TABLE `notify_staff` (
                                `task_id` varchar(200) DEFAULT NULL,
                                `user_id_selected` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify_staff`
--

INSERT INTO `notify_staff` (`task_id`, `user_id_selected`) VALUES
('101', '36');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
                        `task_id` double NOT NULL,
                        `assigned_by` varchar(200) NOT NULL,
                        `emp_code` varchar(200) NOT NULL,
                        `assigned_date` varchar(200) NOT NULL,
                        `issue` varchar(200) NOT NULL,
                        `category` varchar(200) NOT NULL,
                        `status` varchar(200) NOT NULL,
                        `designation` varchar(200) NOT NULL,
                        `division` varchar(200) NOT NULL,
                        `extension_no` varchar(200) DEFAULT NULL,
                        `priority` varchar(200) NOT NULL,
                        `asset_code` varchar(200) NOT NULL,
                        `ip_address` varchar(200) NOT NULL,
                        `approved_by` varchar(200) DEFAULT NULL,
                        `approved_date` varchar(200) DEFAULT NULL,
                        `task_completed_date` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `assigned_by`, `emp_code`, `assigned_date`, `issue`, `category`, `status`, `designation`, `division`, `extension_no`, `priority`, `asset_code`, `ip_address`, `approved_by`, `approved_date`, `task_completed_date`) VALUES
(84, 'hgh', 'hg', '2020-10-28 14:17:32', 'gh', 'Software Issue', 'Completed', 'hg', 'Finance Division', 'h', 'Medium', 'ghf', '192.168.1.2', '15', '2020-10-28 14:18:01', '2020-11-02 16:49:16'),
(92, 'rt', 'sfgh', '2020-11-01 13:24:30', 'fgh', 'Software Issue', 'Completed', 'fgh', 'Finance Division', '545', 'Medium', 'gh', '192.168.1.2', '15', '2020-11-01 14:20:13', '2020-11-02 17:04:51'),
(95, 'adf', '43543', '2020-11-12 19:45:57', 'fdgd', 'Software Issue', 'Assigned', 'dzgd', 'Finance Division', '4540', 'Medium', 'ftj', '192.168.1.2', '15', '2020-11-12 19:46:09', NULL),
(90, 's', 's', '2020-10-30 11:49:11', 'd', 'Software Issue', 'Assigned', 's', 'Finance Division', '21', 'Medium', 'd', '192.168.1.2', '15', '2020-11-03 11:34:20', ''),
(96, 'rgdegf', '34543', '2020-11-12 19:53:38', 'zdgfd', 'Software Issue', 'In Progress', 'dfhd', 'Finance Division', '4534', 'Medium', 'dsfg', '192.168.1.2', '15', '2020-11-12 19:53:45', ''),
(91, 'sfgd', 'fd', '2020-11-01 07:47:27', 'gfh', 'Software Issue', 'Assigned', 'fg', 'Finance Division', '443', 'Medium', 'hr', '192.168.1.2', '15', '2020-11-12 16:29:39', NULL),
(101, 'hr', '43', '2020-11-19 08:22:03', 'fdg', 'Other', 'Assigned', 'sgd', 'ITS Division', '4', 'Medium', 'efg', '192.168.8.100', NULL, NULL, NULL),
(100, 'rdgery', '324', '2020-11-18 17:39:43', 'fdger', 'General Issue', 'Completed', 'eg', 'ITS Division', '2342', 'Low', 'setr', '192.168.8.100', NULL, NULL, NULL),
(99, 'dfg', '45', '2020-11-18 16:51:53', 'gfxdh', 'Software Issue', 'Completed', 'ghx', 'ITS Division', '54', 'Medium', 'fgh', '192.168.8.100', NULL, NULL, NULL),
(102, 'amare', '65', '2021-02-06 11:54:40', 'bjhs', 'Software Issue', 'Assigned', 'Dg', 'ITS Division', '120', 'Medium', 'dfsfs', '192.168.8.100', '61', '2021-02-06 19:16:23', NULL),
(103, 'fas1', '123', '2021-02-07 21:01:50', 'sfdf', 'Software Issue', 'Approval Required', 'sdf', 'Project Management Division', '120', 'Low', 'sfg', '192.168.1.30', NULL, NULL, NULL),
(104, 'zdfg', '23423', '2021-02-07 21:06:50', 'dtghsert', 'Hardware Issue', 'Approval Required', 'wafe', 'Landscape Division', '120', 'Low', 'drgaer', '192.168.1.30', NULL, NULL, NULL),
(105, 'gdth', '345', '2021-02-07 22:10:33', 'cxhdfh', 'Software Issue', 'Approval Required', 'Dg', 'ITS Division', '344', 'Low', 'dgrd', '192.168.1.30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `userID` int(11) NOT NULL,
                        `employeeCode` varchar(200) NOT NULL,
                        `firstName` varchar(200) NOT NULL,
                        `lastName` varchar(200) NOT NULL,
                        `email` varchar(200) NOT NULL,
                        `password` varchar(200) NOT NULL,
                        `date_created` varchar(200) NOT NULL,
                        `status` varchar(200) NOT NULL,
                        `acc_type` varchar(200) NOT NULL,
                        `title` varchar(200) NOT NULL,
                        `division` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(35, '2', 'fgd', 'fgdz', 'sg@d.com', '$2y$10$34nn03/jVD4VIaa5LevwJ.ahmDo2vzgStoi5HUSaqIi4iY/M6rePi', '2020-11-08 16:43:10', 'Active', 'Observer', 'Mr.', 'ITS Division'),
(36, '123564', 'ulidu', 't', 'ulidutheerake@gmail.com', '$2y$10$3VZGQZxN.i0KzITs.5v3ROCCs7UWOKRks2Rjd.oN09bi9h29cs5Ky', '2020-11-08 18:15:22', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(37, '5', 'fg', 'gh', 'udatmsproject@gmail.com', '$2y$10$p02Wgu2ib7j/UcMyNNDPue61H7tZcfk8h0FtKS1RSSmv8hX7Euvge', '2020-11-08 18:37:01', 'Active', 'IT Staff', 'Mrs.', 'ITS Division'),
(38, '34', 'gfd', 'fghd', 'ulidutheerake@gmail.com', '$2y$10$O3BeTeoKEmGVZS3w8aCz1uh2Aj2ukw1nX1/7O5yjMezgAzZt0FbsK', '2020-11-08 18:48:06', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(39, '123454', 'Sumiiii', 'Wijeeee', 'weelasanthi@gmail.com', '$2y$10$/ZjMZS2QLfkvjgSacpFeDO72yQbys4g0JgNQfUYgPflbmc5d/j5IW', '2020-11-08 18:51:44', 'Active', 'Administrator', 'Mrs.', 'ITS Division'),
(40, '0123', 'd', 'fgd', 'ulidutheerake@gmail.com', '$2y$10$ofsxP.hM/X8tMvVXHIjWJezphRMUtK0sbffIFDFSe6.2Z0XPsXCIq', '2020-11-08 18:52:51', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(41, '01234', 'K', 'Gunathilake', 'kgunathilake333@gmail.com', '$2y$10$DMfAI5dY0nP2VVQSEStzMeDYn55Nl.UfqzmyJkj9HRoQvz4bL7Tpq', '2020-11-08 18:54:17', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(42, '123444564e5', 'Bimidu', 'Gunathilake', 'bimidugunathilake@gmail.com', '$2y$10$38reRge66gK9zQrJlF1oc.90YXStHcRfoihv..IhZNd3DhtZdotAe', '2020-11-08 18:55:21', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(43, '0153', 'Fathima', 'Fasliya', 'fazy.hfb@gmail.com', '$2y$10$G5HiqX2V/QJPIkYLVegPPu0i5Ho.Kz.vTDs3NraxpDo8n8ICGmP66', '2020-11-08 22:01:06', 'Active', 'Administrator', 'Miss.', 'ITS Division'),
(45, '012345', 'f', 'fgd', 'f@d.com', '$2y$10$JeGPQ5Eap7mO4/5HajxVUulk0AprT9zNSU8tRpBgVGA1BHzcvljca', '2020-11-08 22:32:40', 'Active', 'Administrator', 'Mr.', 'ITS Division'),
(46, '454356467547', 'vkjhvg', 'sfgsdrg', 'ulidutheerake@gmail.com', '$2y$10$iXP6ZMoJeEgGObG22K/Gc.aPU9gEil4zU.FaCSSibNpieriOpc3US', '2020-11-11 14:50:39', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(47, '8678685576567', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$F.FPONCpCrHIGGBI9JcxVuJGmH4liPlgnN/Yxjt8cVQYycmEpKn4S', '2020-11-11 14:59:21', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(48, '867868556', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$cCl3dq7lKaGIFeQPI0jJ8uzVbla91WEjDQvObn06JJ3Rz77bwivfS', '2020-11-11 15:02:22', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(49, '86786', 'zfghrsth', 'fgserg', 'ulidutheerake@gmail.com', '$2y$10$hIPFQd2lvJiw39O8P9FV/ekwEhvOYw0MMHZVCY9L1dqRWyRathPJi', '2020-11-11 15:02:30', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(50, '6464', 'f', 'sdf', 'fsd@fs.com', '$2y$10$F5yDTBzG.IAzmxIvmDyQwurzSUIlol24sTRMGfjfLI/O5g3.WVHDK', '2020-11-11 15:03:05', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(51, '232423', 'fgdz', 'fg', 'dfsd@dsf.com', '$2y$10$u8UXouYXPZZxsYpByqZPxez7wG4kYf0R6nIQWtEhAajuuS0jv3LXm', '2020-11-11 15:04:20', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(52, '353454', 'fgsdzfg', 'fdgdt', 'ulidutheerake@gmail.com', '$2y$10$YtenZfAZOghWC8gJKstRQuohHsMJNHBdAkP3JzdfbFwekFrzNWNUC', '2020-11-11 15:12:45', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(53, '4238567', 'dfs', 'fsfs', 'h@gmail.com', '$2y$10$r1pTgBTJw2uFDGBfywTja.Kk11SCNFi94gOjksoYSSwQ79r4A3EXu', '2020-11-11 15:14:42', 'Active', 'Observer', 'Miss.', 'ITS Division'),
(54, '12389', 'abc', 'xy', 'abc@xy.com', '$2y$10$c0BpcNYzb20LXGSkMB5ip.l8McLcgZ6Cgw6.yU7afkeXzUsajs8oe', '2020-11-11 15:27:53', 'Active', 'IT Staff', 'Mr.', 'CMR Division'),
(55, '6464647', 'abc', 'd', 'af@sf.com', '$2y$10$yeNUwxH2oBeJGbTyAW9LYOmPoU93ojjxLF6lgjDWv2wSG3Ied6rU2', '2020-11-11 15:30:59', 'Active', 'IT Staff', 'Mrs.', 'GIS Division'),
(56, '546547457', 'gsg', 'sdg', 'uliduthegerake@gmail.com', '$2y$10$2nVG5Abn5BeDlV.okzEMEuON4kpf4eNXkMuBHA0bRH7EU2RWFlfXy', '2020-11-11 15:37:13', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(57, '4534535', 'sda', 'afe', 'ulidutheerahke@gmail.com', '$2y$10$1Qg6q.JZC/cKe7gHW6k81edjDAMwix6Ut4D5QQDysi.dv6VdDD4GO', '2020-11-11 15:52:37', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(58, '151', 'abc', 'xy', 'zdf@das.com', '$2y$10$YqQF64WXocrDN1QfVfrlOOr7/dKRBN5ivP75pLLkHogN0.OUYq.AC', '2021-02-06 11:46:58', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(59, '444', 'amare', 'sfg', 'asda@bhjk.com', '$2y$10$d.R6Ih1LFak5W4nZz/Stp.yVrdO.Xbj9lP9EE7eX6DBvdjYKXaR7G', '2021-02-06 11:56:11', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(60, '561', 'gfh', 'fgh', 'dfg@dfs.com', '$2y$10$v7fOiDE9.VTmlPO0xQ74leHhYWDDnOeDwk0k/RDH/1mZeyuyRoq0q', '2021-02-06 12:11:07', 'Active', 'IT Staff', 'Mr.', 'ITS Division'),
(61, '111', 'am', 'a', 'am@am.com', '$2y$10$GAgoSZM12e.3zenFJWJJR.sSfVlJ7xEj5iA.Q1HtjRkHSWMCkpCwa', '2021-02-06 19:07:35', 'Active', 'Administrative Officer', 'Mr.', 'ITS Division');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `division`
--
ALTER TABLE `division`
    ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
    ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
    ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
    ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
    MODIFY `division_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
    MODIFY `feedbackID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
    MODIFY `logID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
    MODIFY `task_id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
