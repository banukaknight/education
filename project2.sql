-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2021 at 02:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `at_g_1`
--

CREATE TABLE `at_g_1` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `10000000` tinyint(4) NOT NULL DEFAULT '2',
  `10000001` tinyint(4) NOT NULL DEFAULT '2',
  `10000003` tinyint(4) NOT NULL DEFAULT '2',
  `10001000` tinyint(4) NOT NULL DEFAULT '2',
  `12345678` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `at_g_1`
--

INSERT INTO `at_g_1` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `10000000`, `10000001`, `10000003`, `10001000`, `12345678`) VALUES
(1, 20000000, '2021-04-24', '2021-04-24 22:30:14', 'Maths 101', 1, 1, 0, 2, 2),
(2, 20000000, '2021-04-25', '2021-04-26 03:37:42', 'Topic', 1, 0, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `at_g_2`
--

CREATE TABLE `at_g_2` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `20000000` tinyint(4) NOT NULL DEFAULT '2',
  `20000001` tinyint(4) NOT NULL DEFAULT '2',
  `20000003` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `at_g_2`
--

INSERT INTO `at_g_2` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `20000000`, `20000001`, `20000003`) VALUES
(1, 20000000, '2021-04-25', '2021-04-26 03:38:01', 'Maths today', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `at_g_3`
--

CREATE TABLE `at_g_3` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `30000000` tinyint(4) NOT NULL DEFAULT '2',
  `30000003` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `at_g_3`
--

INSERT INTO `at_g_3` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `30000000`, `30000003`) VALUES
(1, 20000000, '2021-04-25', '2021-04-26 03:38:15', 'Sciecne stuff', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `at_g_4`
--

CREATE TABLE `at_g_4` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `40000000` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_5`
--

CREATE TABLE `at_g_5` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_6`
--

CREATE TABLE `at_g_6` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_7`
--

CREATE TABLE `at_g_7` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_8`
--

CREATE TABLE `at_g_8` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_9`
--

CREATE TABLE `at_g_9` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_10`
--

CREATE TABLE `at_g_10` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_11`
--

CREATE TABLE `at_g_11` (
  `sesh_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_data`
--

CREATE TABLE `contact_us_data` (
  `id` int(12) NOT NULL,
  `cn_name` varchar(50) NOT NULL,
  `cn_email` varchar(50) NOT NULL,
  `cn_phone` varchar(15) NOT NULL,
  `cn_subject` varchar(30) NOT NULL,
  `cn_msg` varchar(100) NOT NULL,
  `cn_ip` varchar(20) NOT NULL,
  `cn_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us_data`
--

INSERT INTO `contact_us_data` (`id`, `cn_name`, `cn_email`, `cn_phone`, `cn_subject`, `cn_msg`, `cn_ip`, `cn_time`) VALUES
(1, 'Sdfsd', 'fsd@dfgdf', '543', 'dgdf', 'dfgdf', '127.0.0.1', '2021-04-19 23:21:53'),
(2, 'Rewe', 'dfsd@gfdf', '4534', 'efsd', 'gd gdfgdf', '127.0.0.1', '2021-04-19 23:26:12'),
(3, 'Vcxvx', 'xvbx@dfd', '4534534', 'gdfgdf', 'gdf gdfg dg df dgdf dg gdf gdfg fdsg sdf gdfshsh shsdghds sfhsdfhgdfs', '127.0.0.1', '2021-04-22 10:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `fc_assignments`
--

CREATE TABLE `fc_assignments` (
  `assi_id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `assi_dateup` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assi_deadline` date NOT NULL,
  `assi_subject` varchar(20) NOT NULL,
  `assi_title` varchar(50) NOT NULL,
  `assi_grade` int(5) NOT NULL,
  `assi_location` varchar(90) NOT NULL,
  `assi_size` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fc_assignments`
--

INSERT INTO `fc_assignments` (`assi_id`, `t_username`, `assi_dateup`, `assi_deadline`, `assi_subject`, `assi_title`, `assi_grade`, `assi_location`, `assi_size`) VALUES
(36, 20000000, '2021-04-15 14:58:04', '2021-04-22', 'Maths', 'a1-maths', 1, 'Uploaded/210415-092804-photo_1.jpg', 49796),
(37, 20000000, '2021-04-15 14:58:38', '2021-04-15', 'Science', 'a1 Science', 1, 'Uploaded/210415-092838-logo2.png', 19276),
(38, 20000000, '2021-04-15 14:58:52', '2021-04-22', '-', 'a1-math del', 0, 'Uploaded/Removed.png', 0),
(39, 20000000, '2021-04-15 14:59:35', '2021-04-22', 'Maths', 'a2 math', 2, 'Uploaded/210415-092935-photo_1.jpg', 49796),
(40, 20000000, '2021-04-15 19:51:32', '2021-04-14', 'English', 'eng1', 1, 'Uploaded/210415-022132-photo_1.jpg', 49796),
(41, 20000000, '2021-04-23 15:26:02', '2021-04-30', 'Maths', 'new asssignment', 1, 'Uploaded/210423-095602-50-507370_line-break-artistic-line-png-clipart.png', 44238),
(42, 20000000, '2021-04-23 15:26:24', '2021-04-30', 'Maths', 'Assignment 2 grade 2', 2, 'Uploaded/210423-095624-50-507370_line-break-artistic-line-png-clipart.png', 44238);

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(12) NOT NULL,
  `website_name` varchar(400) NOT NULL,
  `website_address` varchar(500) NOT NULL,
  `website_phone1` varchar(30) NOT NULL,
  `website_phone2` varchar(30) NOT NULL,
  `website_email1` varchar(200) NOT NULL,
  `website_email2` varchar(200) NOT NULL,
  `website_start` varchar(25) NOT NULL,
  `web_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `website_name`, `website_address`, `website_phone1`, `website_phone2`, `website_email1`, `website_email2`, `website_start`, `web_about`) VALUES
(5, 'E-App Yudaganawa Vidyalaya', 'Yudaganawa Vidyalaya, \r\nColombo - Batticaloa Hwy, Buttala', '+94 55 2273711', ' ', 'thebkrox@gmail.com', 'info@lpu.co.in', '2021', 'Welcome to \"E-App for Yudganawa Vidyalaya\" created by BCA & BSC IT Final year Students of LPU, India');

-- --------------------------------------------------------

--
-- Table structure for table `meadmin`
--

CREATE TABLE `meadmin` (
  `id` int(12) NOT NULL,
  `admin_username` int(12) NOT NULL,
  `admin_password` varchar(128) CHARACTER SET utf8 NOT NULL,
  `t_staff_type` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meadmin`
--

INSERT INTO `meadmin` (`id`, `admin_username`, `admin_password`, `t_staff_type`) VALUES
(1, 10000000, '1a52e17fa899cf40fb04cfc42e6352f1', 'Admin'),
(3, 10000001, '8660318fd8b801a28aa3800b51d5dda4', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `news_data`
--

CREATE TABLE `news_data` (
  `n_id` int(12) NOT NULL,
  `n_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `n_head` varchar(50) NOT NULL,
  `n_shead` varchar(50) NOT NULL,
  `n_details` varchar(200) NOT NULL,
  `n_image` varchar(50) NOT NULL DEFAULT '../News-Img/default.jpg',
  `n_audience` varchar(10) NOT NULL,
  `n_author` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_data`
--

INSERT INTO `news_data` (`n_id`, `n_date`, `n_head`, `n_shead`, `n_details`, `n_image`, `n_audience`, `n_author`) VALUES
(5, '2021-04-26 03:55:13', 'BK release new website', 'New release', 'BK has released a new PHP project to market', '../News-Img/210422-071125_10000000.jpg', 'Public', 10000000),
(6, '2021-04-26 03:56:11', 'Faculty Meeting', 'Mandatory Meeting Notice', 'All Faculty are expected to be at the main hall on 30th May 2pm', '../News-Img/210422-071153_10000000.png', 'Faculty', 10000000),
(7, '2021-04-26 03:54:26', 'LPU make it to top 200', 'LPU Achivement', 'LPU has made it to top 200 universities worldwide', '../News-Img/210422-073155_20000000.jpg', 'Student', 20000000),
(8, '2021-04-26 01:04:23', 'Western Music Band Intake', 'Tryouts Are Commencing On July 4th', 'Western Musical Team is looking for new Members. Tryouts are open for all age groups.', '../News-Img/210425-073423_10000000.jpg', 'Public', 10000000),
(9, '2021-04-26 01:05:53', 'Annual School Sports Meet', 'August 2021', 'School Sports Meet scheduled for August 16th. All are Welcome', '../News-Img/210425-073553_10000000.jpg', 'Public', 10000000),
(10, '2021-04-26 01:20:27', 'Vesak Bathi Gee', 'Bathi Gee Event Is Scheduled For May', 'Vesak Bathi Gee - Music Event is Scheduled along with Vesak Poya', '../News-Img/210425-075027_10000000.jpg', 'Public', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

CREATE TABLE `st_info` (
  `st_id` int(10) NOT NULL,
  `st_fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `st_username` int(20) NOT NULL,
  `st_password` varchar(30) NOT NULL,
  `st_grade` int(5) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `st_dob` date NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_gender` varchar(10) NOT NULL,
  `st_parents_contact` varchar(15) NOT NULL,
  `st_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`st_id`, `st_fullname`, `st_username`, `st_password`, `st_grade`, `roll_no`, `st_dob`, `st_address`, `st_gender`, `st_parents_contact`, `st_created`) VALUES
(43, 'James Bond', 10000000, 'pw1', 1, 7, '1993-09-21', '25, Ally Road, Mason', 'Male', '123456789', '2021-04-23 01:39:28'),
(44, 'Kate Vincelet', 10000001, 'pw1', 1, 3, '1993-09-01', '43, Terry Road, Gaha', 'Female', '123456789', '2021-04-23 01:40:16'),
(45, 'Yolanda Fiona', 10000003, 'pw1', 1, 32, '1993-09-21', '54, Heyaa', 'Female', '123456789', '2021-04-23 01:41:09'),
(53, 'Samantha Soyza', 10001000, 'pw1', 1, 12, '1993-09-21', 'Sri Lanka', 'Female', '123456789', '2021-04-27 12:24:39'),
(54, 'Yohan', 12345678, 'Samplepw1', 1, 15, '1993-09-21', 'Address Here', 'Male', '123456789', '2021-04-27 14:46:03'),
(46, 'Terry Cruse', 20000000, 'pw2', 2, 19, '1998-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:42:05'),
(47, 'Grace Wandarwal', 20000001, 'pw2', 2, 6, '1993-09-21', 'Grace Home', 'Female', '11111111111', '2021-04-23 01:42:47'),
(51, 'Amaradewa Jr', 20000003, 'pw2', 2, 22, '1993-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:45:32'),
(48, 'Sumal Perera', 30000000, 'pw3', 3, 15, '1993-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:43:25'),
(49, 'Jaya Sri', 30000003, 'pw3', 3, 15, '1993-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:43:52'),
(50, 'Sanath Kumara', 40000000, 'pw4', 4, 44, '1993-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `st_submissions`
--

CREATE TABLE `st_submissions` (
  `sub_id` int(12) NOT NULL,
  `assi_id` int(12) NOT NULL,
  `st_username` int(20) NOT NULL,
  `sub_dateup` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sub_location` varchar(90) NOT NULL,
  `sub_size` int(8) NOT NULL DEFAULT '0',
  `initial_marks` int(5) DEFAULT NULL,
  `final_marks` int(5) DEFAULT NULL,
  `scrutiny_req` varchar(50) NOT NULL DEFAULT '-',
  `fc_response` varchar(50) NOT NULL DEFAULT 'Pending Evaluation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_submissions`
--

INSERT INTO `st_submissions` (`sub_id`, `assi_id`, `st_username`, `sub_dateup`, `sub_location`, `sub_size`, `initial_marks`, `final_marks`, `scrutiny_req`, `fc_response`) VALUES
(13, 36, 10000000, '2021-04-23 01:50:49', 'Submitted/36_10000000.jpg', 441336, 59, 59, '-', 'Need improvment'),
(14, 42, 20000000, '2021-04-26 04:14:18', 'Submitted/42_20000000.jpg', 74896, NULL, NULL, '-', 'Pending Evaluation'),
(15, 41, 10000001, '2021-04-24 22:13:07', 'Submitted/41_10000001.png', 2261, NULL, NULL, '-', 'Pending Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `sub_info`
--

CREATE TABLE `sub_info` (
  `id` int(12) NOT NULL,
  `t_username` int(12) NOT NULL,
  `st_grade` int(5) NOT NULL,
  `sub_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_info`
--

INSERT INTO `sub_info` (`id`, `t_username`, `st_grade`, `sub_name`) VALUES
(6, 12345611, 1, 'Buddhism'),
(7, 12345611, 2, 'Buddhism'),
(9, 20000001, 1, 'Catholicism'),
(13, 10000002, 1, 'English'),
(1, 12345611, 2, 'English'),
(14, 20000002, 3, 'Maths'),
(4, 12345611, 1, 'Science'),
(2, 20000000, 3, 'Science'),
(12, 20000002, 1, 'Science'),
(11, 20000002, 3, 'Science'),
(15, 10000002, 2, 'Sinhala'),
(3, 12345611, 1, 'Tamil'),
(8, 20000001, 2, 'Tamil'),
(10, 20000002, 2, 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `t_id` int(12) NOT NULL,
  `t_fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `t_username` int(12) NOT NULL,
  `t_pass` varchar(30) CHARACTER SET utf8 NOT NULL,
  `t_dob` varchar(20) CHARACTER SET utf8 NOT NULL,
  `t_contact` varchar(15) CHARACTER SET utf8 NOT NULL,
  `t_staff_type` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'Teacher',
  `t_gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `t_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`t_id`, `t_fullname`, `t_address`, `t_email`, `t_username`, `t_pass`, `t_dob`, `t_contact`, `t_staff_type`, `t_gender`, `t_created`) VALUES
(2, 'Banuka Vidusanka', 'Sri Lanka', 'thebkrox@gmail.com', 10000000, '-', '1993-09-22', '986840000', 'Admin', 'Male', '2021-04-13 11:42:45'),
(23, 'Sonam K', 'India', 'admin@lpu123.com', 10000001, '-', '1993-09-21', '123456789', 'Admin', 'Female', '2021-04-25 16:28:06'),
(25, 'Disha Yohani', 'Sri Lanka', 'disha@gmail.com', 10000002, 'pw1', '1993-09-21', '123456789', 'Teacher', 'Female', '2021-04-26 03:22:11'),
(17, 'Kumara Silva', 'Reredfsds', 'bk@gmail.com', 12345611, 'pw1', '1993-09-21', '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45'),
(19, 'Gayan Perera', '3333', 'bk@gmail.com', 20000000, 'pw2', '1993-09-21', '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45'),
(24, 'Katherine Dias', 'Sri Lnka', 'bk@gmail.com', 20000001, 'pw2', '1993-09-21', '123456789', 'Teacher', 'Female', '2021-04-25 16:45:12'),
(26, 'Rishab Kumar', 'Sri Lanka', 'rishab@gmail.com', 20000002, 'pw2', '1993-09-21', '123456789', 'Teacher', 'Male', '2021-04-26 03:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `text_books`
--

CREATE TABLE `text_books` (
  `b_id` int(12) NOT NULL,
  `b_grade` int(5) NOT NULL,
  `b_subject` varchar(30) NOT NULL,
  `b_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text_books`
--

INSERT INTO `text_books` (`b_id`, `b_grade`, `b_subject`, `b_url`) VALUES
(1, 1, 'Buddhism', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/budda%20g-1%20S/budda%20g-1%20S.pdf'),
(2, 1, 'Catholicism', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/catho%20g1%20S/catholic%20g1%20S.pdf'),
(3, 1, 'Christianity', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/kristhu%20g1%20S/kristhu%20g1%20S.pdf'),
(4, 1, 'Ismailism', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/islam%20gi%20S/islam%20gi%20S.pdf'),
(5, 1, 'Maths', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/maths%20g-1%20s/maths%20g-1%20s.pdf'),
(6, 1, 'Sinhala', 'http://www.edupub.gov.lk/Administrator/Sinhala/1/sin%20pb%20g-1/sin%20pb%20g-1.pdf'),
(8, 2, 'Buddhism', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/budda%20g-2/budda%20g-2.pdf'),
(10, 2, 'Ismailism', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/islam%20g-2%20S/islam%20g-2%20S.pdf'),
(11, 2, 'Christianity', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/kristhu%20G-2%20S/kristhu%20G-2%20S.pdf'),
(12, 2, 'Catholicism', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/catho%20g2%20S/catho%20g2%20S.pdf'),
(13, 2, 'Sinhala', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/sin%20pb%20g-2/sin%20pb%20g-2.pdf'),
(14, 2, 'Maths', 'http://www.edupub.gov.lk/Administrator/Sinhala/2/maths%20g-2%20S/A104348%20Maths%20Grade%202%20Sinhala%202020.pdf'),
(15, 3, 'Buddhism', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/budda%20g-3/budi%20g-3.pdf'),
(16, 3, 'Catholicism', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/kath%20g-3%20S/3%20Catholic%20Final_Neo.pdf'),
(17, 3, 'Ismailism', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/islam%20g-3%20S/islam%20g3%20S.pdf'),
(18, 3, 'Christianity', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/kristhu%203%20S/kristhu%20%203%20S.pdf'),
(19, 3, 'Sinhala', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/sin%20pb%20g-3/si%20pb%20g-3.pdf'),
(20, 3, 'Maths', 'http://www.edupub.gov.lk/SelectSyllabuss.php#Syllabuss'),
(21, 3, 'Maths P2', 'http://www.edupub.gov.lk/Administrator/Sinhala/3/maths%20g3%20p-II%20S/maths%20g%203%20p-II%20S.pdf'),
(22, 4, 'Buddhism', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/budda%20g4%20S%20new/budda%20g-4.pdf'),
(23, 4, 'Christianity', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/kristhu%20g4%20S/kristhu%20g4%20S.pdf'),
(24, 4, 'Catholicism', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/katholika%20g4%20S/katholika%204%20S.pdf'),
(25, 4, 'Ismailism', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/islam%20G-4%20S/islam%20G-4%20S.pdf'),
(26, 4, 'Maths', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/maths%20g-4%20S/Maths%20Grade%2004%20-%20(S)%20Binder..pdf'),
(27, 4, 'Sinhala', 'http://www.edupub.gov.lk/Administrator/Sinhala/4/sinhala%20pb%20g-4/sinhala%20pb%20g-4.pdf'),
(28, 5, 'Buddhism', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/budfda%20g-5/budda%20g-5.pdf'),
(29, 5, 'Ismailism', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/islam%205%20S/islam5%20S.pdf'),
(30, 5, 'Christianity', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/kristhu%20g5%20S/kristhu%20g5%20S.pdf'),
(31, 5, 'Catholicism', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/katholika%20g5%20S/katholika%20g5%20S.pdf'),
(32, 5, 'Maths', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/maths%20g%205%20S/Grade%205%20-%20Maths%20(S).pdf'),
(33, 5, 'Sinhala', 'http://www.edupub.gov.lk/Administrator/Sinhala/5/sinhala%20pb%20g5/sinhala%20pb%20g5.pdf'),
(34, 5, 'English', 'http://www.edupub.gov.lk/Administrator/English/5/english%20pb%20G-5/English%20PB%20G-5.pdf'),
(35, 4, 'English', 'http://www.edupub.gov.lk/Administrator/English/4/en%20pb%20G-4/english%20PB%20G-4.pdf'),
(36, 3, 'English', 'http://www.edupub.gov.lk/Administrator/English/3/english%20PB%20G-3/english%20PB%20G-3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `st_grade` int(5) NOT NULL,
  `slot` int(5) NOT NULL,
  `time` varchar(20) DEFAULT NULL,
  `Monday` varchar(50) DEFAULT NULL,
  `Tuesday` varchar(50) DEFAULT NULL,
  `Wednesday` varchar(50) DEFAULT NULL,
  `Thursday` varchar(50) DEFAULT NULL,
  `Friday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`st_grade`, `slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`) VALUES
(1, 1, '07:50-08:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala'),
(1, 2, '08:30-09:10', 'Science', 'Maths', 'Maths', 'Buddhism', 'Science'),
(1, 3, '09:10-09:50', 'Buddhism', 'Science', 'Science', 'Science', 'Buddhism'),
(1, 4, '09:50-10:30', 'Sinhala', 'Sinhala', 'Buddhism', 'English', 'English'),
(1, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(1, 6, '10:50-11:30', 'English', 'English', 'English', 'Tamil', 'Tamil'),
(1, 7, '11:30-12:10', 'Tamil', 'Tamil', 'Sinhala', 'Sinhala', 'Sinhala'),
(1, 8, '12:10-12:50', 'Sports', 'Sports', 'Sports', 'Sports', 'Sports'),
(1, 9, '12:50-13:30', 'Library', 'Library', 'Library', 'Library', 'Library'),
(2, 1, '07:50-08:30', 'English', 'English', 'English', 'Tamil', 'Tamil'),
(2, 2, '08:30-09:10', 'Tamil', 'Tamil', 'Sinhala', 'Sinhala', 'Sinhala'),
(2, 3, '09:10-09:50', 'Sports', 'Sports', 'Sports', 'Sports', 'Sports'),
(2, 4, '09:50-10:30', 'Buddhism', 'Science', 'Science', 'Science', 'Buddhism'),
(2, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(2, 6, '10:50-11:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala'),
(2, 7, '11:30-12:10', 'Science', 'Maths', 'Maths', 'Buddhism', 'Science'),
(2, 8, '12:10-12:50', 'Library', 'Library', 'Library', 'Library', 'Library'),
(2, 9, '12:50-13:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala'),
(3, 1, '07:50-08:30', 'Sinhala', 'Assembly', 'Library', 'Art', 'Art'),
(3, 2, '08:30-09:10', 'Reading', 'Buddhism', 'Sports', 'Sports', 'Art'),
(3, 3, '09:10-09:50', 'Music', 'Maths', 'English', 'English', 'Sinhala'),
(3, 4, '09:50-10:30', 'English', 'Tamil', 'Art', 'Environmental studies', 'Buddhism'),
(3, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(3, 6, '10:50-11:30', 'Maths', 'Environmental studies', 'Scouting', 'Buddhism', 'Scouting'),
(3, 7, '11:30-12:10', 'Buddhism', 'Sinhala', 'Maths', 'Maths', 'Environmental studies'),
(3, 8, '12:10-12:50', 'Library', 'English', 'Sinhala', 'Sinhala', 'Environmental studies'),
(3, 9, '12:50-13:30', 'Library', 'Swimming', 'Buddhism', 'Sinhala', 'English'),
(4, 1, '07:50-08:30', 'English', 'Maths', 'English', 'Maths', 'English'),
(4, 2, '08:30-09:10', 'Maths', 'Sinhala', 'Sinhala', 'Sinhala', 'Maths'),
(4, 3, '09:10-09:50', 'Maths', 'English', 'Maths', 'English', 'Sinhala'),
(4, 4, '09:50-10:30', 'Environmental studies', 'Tamil', 'Buddhism', 'Buddhism', 'Environmental studies'),
(4, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(4, 6, '10:50-11:30', 'Tamil', 'Environmental studies', 'Library', 'Sports', 'Buddhism'),
(4, 7, '11:30-12:10', 'Buddhism', 'Environmental studies', 'Sports', 'Reading', 'Tamil'),
(4, 8, '12:10-12:50', 'Scouting', 'Buddhism', 'Scouting', 'Music', 'Art'),
(4, 9, '12:50-13:30', 'Swimming', 'Assembly', 'Art', 'Tamil', 'Swimming'),
(5, 1, '07:50-08:30', 'Assembly', 'Sinhala', 'Music', 'Sinhala', 'Art'),
(5, 2, '08:30-09:10', 'Buddhism', 'Reading', 'Maths', 'Environmental studies', 'Art'),
(5, 3, '09:10-09:50', 'Maths', 'Music', 'Library', 'Library', 'Sinhala'),
(5, 4, '09:50-10:30', 'Tamil', 'English', 'Music', 'Sinhala', 'Buddhism'),
(5, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(5, 6, '10:50-11:30', 'Art', 'English', 'Buddhism', 'Maths', 'Library'),
(5, 7, '11:30-12:10', 'Environmental studies', 'Maths', 'Sinhala', 'Music', 'Library'),
(5, 8, '12:10-12:50', 'Sinhala', 'art', 'tamil', 'Tamil', 'English'),
(5, 9, '12:50-13:30', 'Buddhism', 'Environmental studies', 'Art', 'Swimming', 'Maths'),
(6, 1, '07:50-08:30', 'L.S', 'Science', 'Science', 'Science', 'Library'),
(6, 2, '08:30-09:10', 'Geography', 'L.S', 'Maths', 'Sinhala', 'Geography'),
(6, 3, '09:10-09:50', 'History', 'History', 'Maths', 'Maths', 'L.S'),
(6, 4, '09:50-10:30', 'Sinhala', 'English', 'Basket Sub.', 'English', 'English'),
(6, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(6, 6, '10:50-11:30', 'Science', 'Buddhism', 'History', 'English', 'Science'),
(6, 7, '11:30-12:10', 'Basket Sub.', 'Sinhala', 'Sinhala', 'History', 'Sinhala'),
(6, 8, '12:10-12:50', 'Basket Sub.', 'Sinhala', 'Library', 'Buddhism', 'Maths'),
(6, 9, '12:50-13:30', 'Buddhism', 'Maths', 'Library', 'Geography', 'Basket Sub.'),
(7, 1, '07:50-08:30', 'Science', 'L.S', 'Science', 'Science', 'History'),
(7, 2, '08:30-09:10', 'Sinhala', 'Geography', 'Sinhala', 'Sinhala', 'Sinhala'),
(7, 3, '09:10-09:50', 'Maths', 'History', 'Maths', 'Maths', 'Library'),
(7, 4, '09:50-10:30', 'Basket Sub.', 'Sinhala', 'Basket Sub.', 'English', 'Library'),
(7, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(7, 6, '10:50-11:30', 'Library', 'Science', 'Library', 'Buddhism', 'Science'),
(7, 7, '11:30-12:10', 'Geography', 'Basket Sub.', 'Geography', 'History', 'Maths'),
(7, 8, '12:10-12:50', 'L.S', 'Maths', 'L.S', 'History', 'Maths'),
(7, 9, '12:50-13:30', 'English', 'Buddhism', 'English', 'Maths', 'Basket Sub.'),
(8, 1, '07:50-08:30', 'English', 'Assembly', 'English', 'Assembly', 'English'),
(8, 2, '08:30-09:10', 'Science', 'Library', 'Maths', 'Basket sub.', 'Sinhala'),
(8, 3, '09:10-09:50', 'Science', 'English', 'History', 'Tamil', 'History'),
(8, 4, '09:50-10:30', 'Maths', 'Maths', 'P.T', 'IT', 'Geography'),
(8, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(8, 6, '10:50-11:30', 'Sinhala', 'Geography', 'IT', 'Science', 'Buddhism'),
(8, 7, '11:30-12:10', 'History', 'Buddhism', 'IT', 'Sinhala', 'L.S'),
(8, 8, '12:10-12:50', 'L.S', 'Tamil', 'Science', 'History', 'Maths'),
(8, 9, '12:50-13:30', 'P.T', 'Sinhala', 'Library', 'Buddhism', 'Maths'),
(9, 1, '07:50-08:30', 'Buddhism', 'Sinhala', 'Assembly', 'Basket sub.', 'L.S'),
(9, 2, '08:30-09:10', 'L.S', 'History', 'Library', 'Basket sub.', 'Library'),
(9, 3, '09:10-09:50', 'Maths', 'L.S', 'English', 'IT', 'English'),
(9, 4, '09:50-10:30', 'Maths', 'P.T', 'Maths', 'Tamil', 'Science'),
(9, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(9, 6, '10:50-11:30', 'English', 'English', 'Geography', 'Science', 'Maths'),
(9, 7, '11:30-12:10', 'Sinhala', 'Science', 'Buddhism', 'Sinhala', 'Buddhism'),
(9, 8, '12:10-12:50', 'History', 'Science', 'Sinhala', 'History', 'Basket Sub.'),
(9, 9, '12:50-13:30', 'Geography', 'Maths', 'Sinhala', 'Buddhism', 'IT'),
(10, 1, '07:50-08:30', 'Elective 01', 'English', 'Elective 03', 'Science', 'Science'),
(10, 2, '08:30-09:10', 'Maths', 'Elective 02', 'Elective 01', 'English', 'English'),
(10, 3, '09:10-09:50', 'Maths', 'Elective 02', 'English', 'Elective 03', 'Maths'),
(10, 4, '09:50-10:30', 'Sinhala', 'Sinhala', 'Science', 'Sinhala', 'Sinhala'),
(10, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(10, 6, '10:50-11:30', 'Science', 'Science', 'P.T', 'Buddhism', 'Buddhism'),
(10, 7, '11:30-12:10', 'Buddhism', 'History', 'Sinhala', 'History', 'History'),
(10, 8, '12:10-12:50', 'History', 'Maths', 'History', 'Maths', 'Library'),
(10, 9, '12:50-13:30', 'Library', 'Science', 'Maths', 'Assembly', 'P.T'),
(11, 1, '07:50-08:30', 'Assembly', 'English', 'Buddhism', 'Science', 'Elective 01'),
(11, 2, '08:30-09:10', 'History', 'Elective 02', 'History', 'Sinhala', 'Maths'),
(11, 3, '09:10-09:50', 'Maths', 'Elective 02', 'Library', 'Maths', 'Maths'),
(11, 4, '09:50-10:30', 'Buddhism', 'Sinhala', 'P.T', 'Elective 03', 'Sinhala'),
(11, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL'),
(11, 6, '10:50-11:30', 'Science', 'Science', 'Science', 'Elective 02', 'Science'),
(11, 7, '11:30-12:10', 'English', 'History', 'English', 'Elective 03', 'Buddhism'),
(11, 8, '12:10-12:50', 'Elective 03', 'Maths', 'Maths', 'History', 'History'),
(11, 9, '12:50-13:30', 'Sinhala', 'Science', 'Sinhala', 'Buddhism', 'Library');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_g_1`
--
ALTER TABLE `at_g_1`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_t1` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username1` (`t_username`);

--
-- Indexes for table `at_g_2`
--
ALTER TABLE `at_g_2`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_t2` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username2` (`t_username`);

--
-- Indexes for table `at_g_3`
--
ALTER TABLE `at_g_3`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_t3` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username3` (`t_username`);

--
-- Indexes for table `at_g_4`
--
ALTER TABLE `at_g_4`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_t4` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username4` (`t_username`);

--
-- Indexes for table `at_g_5`
--
ALTER TABLE `at_g_5`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_t5` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username5` (`t_username`);

--
-- Indexes for table `at_g_6`
--
ALTER TABLE `at_g_6`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_6` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_6` (`t_username`);

--
-- Indexes for table `at_g_7`
--
ALTER TABLE `at_g_7`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_7` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_7` (`t_username`);

--
-- Indexes for table `at_g_8`
--
ALTER TABLE `at_g_8`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_8` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_8` (`t_username`);

--
-- Indexes for table `at_g_9`
--
ALTER TABLE `at_g_9`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_9` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_9` (`t_username`);

--
-- Indexes for table `at_g_10`
--
ALTER TABLE `at_g_10`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_10` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_10` (`t_username`);

--
-- Indexes for table `at_g_11`
--
ALTER TABLE `at_g_11`
  ADD PRIMARY KEY (`sesh_id`),
  ADD UNIQUE KEY `UC_sesh_g_11` (`sesh_date`,`t_username`),
  ADD KEY `FK_t_username_g_11` (`t_username`);

--
-- Indexes for table `contact_us_data`
--
ALTER TABLE `contact_us_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  ADD PRIMARY KEY (`assi_id`),
  ADD KEY `FKk_t_username` (`t_username`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meadmin`
--
ALTER TABLE `meadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_admin_username` (`admin_username`);

--
-- Indexes for table `news_data`
--
ALTER TABLE `news_data`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `FK_n_auther` (`n_author`);

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`st_username`),
  ADD UNIQUE KEY `UC_st_id` (`st_id`);

--
-- Indexes for table `st_submissions`
--
ALTER TABLE `st_submissions`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `UC_SUBMISSION` (`assi_id`,`st_username`),
  ADD KEY `FK_st_username_sub` (`st_username`);

--
-- Indexes for table `sub_info`
--
ALTER TABLE `sub_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_SUB` (`sub_name`,`t_username`,`st_grade`),
  ADD KEY `FKkk_t_username` (`t_username`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`t_username`),
  ADD UNIQUE KEY `t_id` (`t_id`) USING BTREE;

--
-- Indexes for table `text_books`
--
ALTER TABLE `text_books`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `UC_grade_subj` (`b_grade`,`b_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_g_1`
--
ALTER TABLE `at_g_1`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `at_g_2`
--
ALTER TABLE `at_g_2`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `at_g_3`
--
ALTER TABLE `at_g_3`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `at_g_4`
--
ALTER TABLE `at_g_4`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_5`
--
ALTER TABLE `at_g_5`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_6`
--
ALTER TABLE `at_g_6`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_7`
--
ALTER TABLE `at_g_7`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_8`
--
ALTER TABLE `at_g_8`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_9`
--
ALTER TABLE `at_g_9`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_10`
--
ALTER TABLE `at_g_10`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_11`
--
ALTER TABLE `at_g_11`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_data`
--
ALTER TABLE `contact_us_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  MODIFY `assi_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meadmin`
--
ALTER TABLE `meadmin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_data`
--
ALTER TABLE `news_data`
  MODIFY `n_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `st_submissions`
--
ALTER TABLE `st_submissions`
  MODIFY `sub_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_info`
--
ALTER TABLE `sub_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `t_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `text_books`
--
ALTER TABLE `text_books`
  MODIFY `b_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `at_g_1`
--
ALTER TABLE `at_g_1`
  ADD CONSTRAINT `FK_t_username1` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_2`
--
ALTER TABLE `at_g_2`
  ADD CONSTRAINT `FK_t_username2` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_3`
--
ALTER TABLE `at_g_3`
  ADD CONSTRAINT `FK_t_username3` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_4`
--
ALTER TABLE `at_g_4`
  ADD CONSTRAINT `FK_t_username4` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_5`
--
ALTER TABLE `at_g_5`
  ADD CONSTRAINT `FK_t_username5` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_6`
--
ALTER TABLE `at_g_6`
  ADD CONSTRAINT `FK_t_username_g_6` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_7`
--
ALTER TABLE `at_g_7`
  ADD CONSTRAINT `FK_t_username_g_7` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_8`
--
ALTER TABLE `at_g_8`
  ADD CONSTRAINT `FK_t_username_g_8` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_9`
--
ALTER TABLE `at_g_9`
  ADD CONSTRAINT `FK_t_username_g_9` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_10`
--
ALTER TABLE `at_g_10`
  ADD CONSTRAINT `FK_t_username_g_10` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `at_g_11`
--
ALTER TABLE `at_g_11`
  ADD CONSTRAINT `FK_t_username_g_11` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  ADD CONSTRAINT `FKk_t_username` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `meadmin`
--
ALTER TABLE `meadmin`
  ADD CONSTRAINT `FK_admin_username` FOREIGN KEY (`admin_username`) REFERENCES `teacher_info` (`t_username`),
  ADD CONSTRAINT `FK_admin_username2` FOREIGN KEY (`admin_username`) REFERENCES `teacher_info` (`t_username`),
  ADD CONSTRAINT `meadmin_ibfk_1` FOREIGN KEY (`admin_username`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `news_data`
--
ALTER TABLE `news_data`
  ADD CONSTRAINT `FK_n_auther` FOREIGN KEY (`n_author`) REFERENCES `teacher_info` (`t_username`);

--
-- Constraints for table `st_submissions`
--
ALTER TABLE `st_submissions`
  ADD CONSTRAINT `FK_assi_id` FOREIGN KEY (`assi_id`) REFERENCES `fc_assignments` (`assi_id`),
  ADD CONSTRAINT `FK_st_username_sub` FOREIGN KEY (`st_username`) REFERENCES `st_info` (`st_username`),
  ADD CONSTRAINT `FKk_assi_id` FOREIGN KEY (`assi_id`) REFERENCES `fc_assignments` (`assi_id`),
  ADD CONSTRAINT `st_submissions_ibfk_1` FOREIGN KEY (`assi_id`) REFERENCES `fc_assignments` (`assi_id`);

--
-- Constraints for table `sub_info`
--
ALTER TABLE `sub_info`
  ADD CONSTRAINT `FKkk_t_username` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
