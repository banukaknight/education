-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2021 at 08:45 AM
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
  `t_username` varchar(20) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `10000000` tinyint(4) NOT NULL DEFAULT '2',
  `10000001` tinyint(4) NOT NULL DEFAULT '2',
  `10000007` tinyint(4) NOT NULL DEFAULT '2',
  `10000006` tinyint(4) NOT NULL DEFAULT '2',
  `10000003` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `at_g_1`
--

INSERT INTO `at_g_1` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `10000000`, `10000001`, `10000007`, `10000006`, `10000003`) VALUES
(1, '1000', '2021-04-11', '2021-04-12 23:13:57', 'test2', 1, 0, 1, 2, 2),
(2, '1000', '2021-04-12', '2021-04-11 23:19:33', 'test1', 1, 0, 1, 2, 2),
(3, '20000000', '2021-12-12', '2021-04-13 23:13:02', 'Topic', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `at_g_2`
--

CREATE TABLE `at_g_2` (
  `sesh_id` int(12) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `20000000` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_3`
--

CREATE TABLE `at_g_3` (
  `sesh_id` int(12) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL,
  `10000003` tinyint(4) NOT NULL DEFAULT '2',
  `12345678` tinyint(4) NOT NULL DEFAULT '2',
  `92345678` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `at_g_3`
--

INSERT INTO `at_g_3` (`sesh_id`, `t_username`, `sesh_date`, `sesh_datetime`, `sesh_info`, `10000003`, `12345678`, `92345678`) VALUES
(1, '1000', '2021-04-11', '2021-04-11 23:21:13', 'test1', 1, 0, 2),
(2, '1000', '2021-12-12', '2021-04-11 23:35:03', 'Session Topic', 0, 0, 2),
(3, '1000', '2021-12-12', '2021-04-11 23:43:19', 'Session Topic', 1, 2, 0),
(4, '1000', '2021-12-12', '2021-04-11 23:44:48', 'Session Topic', 0, 0, 0),
(5, '12345611', '2021-12-12', '2021-04-12 03:11:04', 'Topic', 2, 1, 0),
(6, '20000000', '2021-12-12', '2021-04-13 23:00:47', 'Topics', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `at_g_4`
--

CREATE TABLE `at_g_4` (
  `sesh_id` int(12) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `at_g_5`
--

CREATE TABLE `at_g_5` (
  `sesh_id` int(12) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `sesh_date` date NOT NULL,
  `sesh_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesh_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exam_term`
--

CREATE TABLE `exam_term` (
  `id` int(12) NOT NULL,
  `name` varchar(450) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_term`
--

INSERT INTO `exam_term` (`id`, `name`) VALUES
(6, 'mid_term_1'),
(5, 'first_term'),
(7, 'trd');

-- --------------------------------------------------------

--
-- Table structure for table `fc_assignments`
--

CREATE TABLE `fc_assignments` (
  `assi_id` int(12) NOT NULL,
  `t_username` varchar(20) NOT NULL,
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
(36, '20000000', '2021-04-15 14:58:04', '2021-04-22', 'Maths', 'a1-maths', 1, 'Uploaded/210415-092804-photo_1.jpg', 49796),
(37, '20000000', '2021-04-15 14:58:38', '2021-04-15', 'Science', 'a1 Science', 1, 'Uploaded/210415-092838-logo2.png', 19276),
(38, '20000000', '2021-04-15 14:58:52', '2021-04-22', '-', 'a1-math del', 0, 'Uploaded/Removed.png', 0),
(39, '20000000', '2021-04-15 14:59:35', '2021-04-22', 'Maths', 'a2 math', 2, 'Uploaded/210415-092935-photo_1.jpg', 49796),
(40, '20000000', '2021-04-15 19:51:32', '2021-04-14', 'English', 'eng1', 1, 'Uploaded/210415-022132-photo_1.jpg', 49796);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `website_name`, `website_address`, `website_phone1`, `website_phone2`, `website_email1`, `website_email2`, `website_start`, `web_about`) VALUES
(5, 'E-App Yudaganawa Vidyalaya', 'Yudaganawa Vidyalaya, \r\nColombo - Batticaloa Hwy, Buttala', '+94 55 2273711', '', 'thebkrox@gmail.com', 'info@lpu.co.in', '2021', 'Welcome to \"E-App for Yudganawa Vidyalaya\" created by BCA & BSC IT Final year Students of LPU, India');

-- --------------------------------------------------------

--
-- Table structure for table `meadmin`
--

CREATE TABLE `meadmin` (
  `id` int(12) NOT NULL,
  `admin_username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `admin_password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `t_staff_type` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meadmin`
--

INSERT INTO `meadmin` (`id`, `admin_username`, `admin_password`, `t_staff_type`) VALUES
(1, '10000000', 'pw1', 'Admin'),
(2, 'user', 'pw', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `name` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `class` int(255) NOT NULL,
  `bangla_first` int(255) NOT NULL,
  `bangla_sec` int(255) NOT NULL,
  `eng_first` int(255) NOT NULL,
  `eng_sec` int(255) NOT NULL,
  `math` int(255) NOT NULL,
  `bngs` int(255) NOT NULL,
  `physics` int(255) NOT NULL,
  `chemistry` int(255) NOT NULL,
  `biology` int(255) NOT NULL,
  `ict` int(255) NOT NULL,
  `hmath` int(255) NOT NULL,
  `GPA` int(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `roll`, `class`, `bangla_first`, `bangla_sec`, `eng_first`, `eng_sec`, `math`, `bngs`, `physics`, `chemistry`, `biology`, `ict`, `hmath`, `GPA`, `id`) VALUES
('ASHFAQUL AREFIN PROTTOY', 7, 10, 90, 88, 87, 91, 94, 92, 85, 88, 90, 47, 84, 5, 5),
('ABU SAEED EMON', 2, 10, 94, 97, 95, 98, 99, 95, 96, 95, 95, 50, 98, 5, 4),
('SHAHORIAR RAHMAN SHAZIN', 1, 10, 96, 97, 96, 99, 100, 94, 95, 96, 97, 50, 99, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `st_attendance`
--

CREATE TABLE `st_attendance` (
  `id` int(11) NOT NULL,
  `st_username` varchar(20) NOT NULL,
  `st_ip` varchar(15) NOT NULL,
  `at_iddateh` varchar(35) NOT NULL,
  `at_date` date NOT NULL,
  `at_time` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_attendance`
--

INSERT INTO `st_attendance` (`id`, `st_username`, `st_ip`, `at_iddateh`, `at_date`, `at_time`) VALUES
(1, 'hari2055', '127.0.0.1', 'hari2055_2021-04-05_09', '2021-04-05', '09:35:52'),
(4, 'hari2055', '127.0.0.1', 'hari2055_2021-04-05_10', '2021-04-05', '10:43:42'),
(16, 'asdf', '127.0.0.1', 'asdf_2021-04-05_10', '2021-04-05', '10:54:56'),
(17, 'asdf', '127.0.0.1', 'asdf_2021-04-05_11', '2021-04-05', '11:02:47'),
(23, 'asdf', '127.0.0.1', 'asdf_2021-04-05_12', '2021-04-05', '12:59:57'),
(24, 'hari2055', '127.0.0.1', 'hari2055_2021-04-05_14', '2021-04-05', '14:31:02'),
(25, 'hari2055', '127.0.0.1', 'hari2055_2021-04-05_20', '2021-04-05', '20:50:55'),
(26, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_18', '2021-04-06', '18:21:28'),
(30, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_19', '2021-04-06', '19:54:55'),
(32, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_20', '2021-04-06', '20:00:31'),
(45, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_21', '2021-04-06', '21:09:15'),
(57, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_22', '2021-04-06', '22:17:32'),
(80, 'hari2055', '127.0.0.1', 'hari2055_2021-04-06_23', '2021-04-06', '23:35:23'),
(82, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_00', '2021-04-07', '00:02:39'),
(113, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_02', '2021-04-07', '02:18:51'),
(137, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_08', '2021-04-07', '08:53:46'),
(146, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_09', '2021-04-07', '09:00:28'),
(187, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_10', '2021-04-07', '10:01:16'),
(234, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_11', '2021-04-07', '11:02:03'),
(235, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_13', '2021-04-07', '13:08:03'),
(257, 'hari2055', '127.0.0.1', 'hari2055_2021-04-07_23', '2021-04-07', '23:48:56'),
(275, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_00', '2021-04-08', '00:00:00'),
(335, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_01', '2021-04-08', '01:27:20'),
(348, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_02', '2021-04-08', '02:00:23'),
(349, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_04', '2021-04-08', '04:13:39'),
(352, 'aaaa', '127.0.0.1', 'aaaa_2021-04-08_06', '2021-04-08', '06:17:16'),
(400, 'aaaa', '127.0.0.1', 'aaaa_2021-04-08_07', '2021-04-08', '07:29:52'),
(414, 'aaaa', '127.0.0.1', 'aaaa_2021-04-08_08', '2021-04-08', '08:07:32'),
(435, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_09', '2021-04-08', '09:12:23'),
(436, 'aaaa', '127.0.0.1', 'aaaa_2021-04-08_09', '2021-04-08', '09:15:46'),
(437, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_10', '2021-04-08', '10:17:25'),
(438, 'aaaa', '127.0.0.1', 'aaaa_2021-04-08_11', '2021-04-08', '11:15:00'),
(439, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_15', '2021-04-08', '15:03:31'),
(440, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_16', '2021-04-08', '16:19:36'),
(441, 'hari2055', '127.0.0.1', 'hari2055_2021-04-08_20', '2021-04-08', '20:39:04'),
(442, '12345688', '127.0.0.1', '12345688_2021-04-08_23', '2021-04-08', '23:42:01'),
(444, '12345677', '127.0.0.1', '12345677_2021-04-09_09', '2021-04-09', '09:59:05'),
(445, '12345677', '127.0.0.1', '12345677_2021-04-09_15', '2021-04-09', '15:04:22'),
(449, '12345677', '127.0.0.1', '12345677_2021-04-09_16', '2021-04-09', '16:12:49'),
(450, '12345677', '127.0.0.1', '12345677_2021-04-09_18', '2021-04-09', '18:31:58'),
(474, '12345677', '127.0.0.1', '12345677_2021-04-09_22', '2021-04-09', '22:19:25'),
(475, '10000000', '127.0.0.1', '10000000_2021-04-09_22', '2021-04-09', '22:19:49'),
(489, '10000000', '127.0.0.1', '10000000_2021-04-09_23', '2021-04-09', '23:20:36'),
(490, '', '127.0.0.1', '_2021-04-10_00', '2021-04-10', '00:12:01'),
(524, '10000000', '127.0.0.1', '10000000_2021-04-10_09', '2021-04-10', '09:52:32'),
(525, '10000000', '127.0.0.1', '10000000_2021-04-12_02', '2021-04-12', '02:38:43'),
(527, '10000000', '127.0.0.1', '10000000_2021-04-12_21', '2021-04-12', '21:26:14'),
(528, '10000000', '127.0.0.1', '10000000_2021-04-13_21', '2021-04-13', '21:11:51'),
(529, '10000000', '127.0.0.1', '10000000_2021-04-13_23', '2021-04-13', '23:45:41'),
(531, '10000000', '127.0.0.1', '10000000_2021-04-14_00', '2021-04-14', '00:29:58'),
(547, '10000000', '127.0.0.1', '10000000_2021-04-14_23', '2021-04-14', '23:48:36'),
(548, '10000000', '127.0.0.1', '10000000_2021-04-15_00', '2021-04-15', '00:11:19'),
(555, '10000000', '127.0.0.1', '10000000_2021-04-15_02', '2021-04-15', '02:49:22'),
(561, '10000000', '127.0.0.1', '10000000_2021-04-15_13', '2021-04-15', '13:26:12'),
(562, '10000000', '127.0.0.1', '10000000_2021-04-15_15', '2021-04-15', '15:23:03'),
(564, '10000000', '127.0.0.1', '10000000_2021-04-15_20', '2021-04-15', '20:37:50'),
(565, '20000000', '127.0.0.1', '20000000_2021-04-16_08', '2021-04-16', '08:15:01'),
(567, '20000000', '127.0.0.1', '20000000_2021-04-16_10', '2021-04-16', '10:23:33'),
(568, '20000000', '127.0.0.1', '20000000_2021-04-16_11', '2021-04-16', '11:49:06');

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
  `st_district` varchar(100) DEFAULT NULL,
  `st_gender` varchar(10) NOT NULL,
  `st_father` varchar(100) DEFAULT NULL,
  `st_mother` varchar(100) DEFAULT NULL,
  `st_parents_contact` varchar(15) NOT NULL,
  `st_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`st_id`, `st_fullname`, `st_username`, `st_password`, `st_grade`, `roll_no`, `st_dob`, `st_address`, `st_district`, `st_gender`, `st_father`, `st_mother`, `st_parents_contact`, `st_created`) VALUES
(34, 'St', 10000000, 'pw1', 1, 15, '1993-09-21', 'Addr', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(35, 'St Two', 10000001, 'pw2', 1, 15, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(36, 'St Three', 10000003, 'Samplepw1', 1, 44, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(40, 'Add Again', 12345678, 'Samplepw1', 3, 15, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(38, 'Stttt Ter', 10000007, 'pw1', 1, 15, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(39, 'Sample Hg', 92345678, 'Samplepw1', 3, 15, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 11:40:45'),
(41, 'Sample Ere', 10000006, 'Samplepw1', 1, 15, '1993-09-21', 'Address Here', NULL, 'Male', NULL, NULL, '123456789', '2021-04-13 23:11:00'),
(42, 'Grade Two St', 20000000, 'pw2', 2, 15, '1993-09-21', 'Address Here', NULL, 'Female', NULL, NULL, '123456789', '2021-04-16 08:13:30');

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
  `sub_size` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_submissions`
--

INSERT INTO `st_submissions` (`sub_id`, `assi_id`, `st_username`, `sub_dateup`, `sub_location`, `sub_size`) VALUES
(8, 36, 10000000, '2021-04-15 19:36:41', 'Submitted/36_10000000.png', 19276),
(9, 37, 10000000, '2021-04-15 19:36:31', 'Submitted/37_10000000.png', 19276);

-- --------------------------------------------------------

--
-- Table structure for table `subjects_info`
--

CREATE TABLE `subjects_info` (
  `id` int(12) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `t_fullname` varchar(200) NOT NULL,
  `t_email` varchar(200) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `time` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_info`
--

INSERT INTO `subjects_info` (`id`, `subject_name`, `t_fullname`, `t_email`, `grade`, `time`) VALUES
(1, 'Math', 'ram parsad thapa', 'ram@ram', '9', '10:00AM - 10:45AM'),
(2, 'Computer', 'Ravi Khadka', 'rrrrr@gmail.com', '10', '10:00AM - 10:45AM'),
(3, 'English', 'Rabin Khadka', 'rabin@gmail.com', '10', '10:45AM - 11:30AM');

-- --------------------------------------------------------

--
-- Table structure for table `sub_class_name`
--

CREATE TABLE `sub_class_name` (
  `id` int(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_class_name`
--

INSERT INTO `sub_class_name` (`id`, `subject`, `class`) VALUES
(1, 'English', '1'),
(2, 'Nepali', '2'),
(3, 'Social', '3'),
(4, 'Computer ', '4'),
(5, 'Math', '5'),
(6, 'Optional Math', '6'),
(7, 'Health', '7'),
(8, 'Grammar', '8'),
(9, 'GK', '9'),
(10, 'Science', '10');

-- --------------------------------------------------------

--
-- Table structure for table `sub_info`
--

CREATE TABLE `sub_info` (
  `id` int(12) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `st_grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

CREATE TABLE `table_name` (
  `st_grade` double DEFAULT NULL,
  `slot` double DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `Monday` varchar(100) DEFAULT NULL,
  `Tuesday` varchar(100) DEFAULT NULL,
  `Wednesday` varchar(100) DEFAULT NULL,
  `Thursday` varchar(100) DEFAULT NULL,
  `Friday` varchar(100) DEFAULT NULL,
  `column_8` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_name`
--

INSERT INTO `table_name` (`st_grade`, `slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `column_8`) VALUES
(1, 1, '07:50-08:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala', ''),
(1, 2, '08:30-09:10', 'Science', 'Maths', 'Maths', 'Buddhism', 'Science', ''),
(1, 3, '09:10-09:50', 'Buddhism', 'Science', 'Science', 'Science', 'Buddhism', ''),
(1, 4, '09:50-10:30', 'Sinhala', 'Sinhala', 'Buddhism', 'English', 'English', ''),
(1, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', ''),
(1, 6, '10:50-11:30', 'English', 'English', 'English', 'Tamil', 'Tamil', ''),
(1, 7, '11:30-12:10', 'Tamil', 'Tamil', 'Sinhala', 'Sinhala', 'Sinhala', ''),
(1, 8, '12:10-12:50', 'Sports', 'Sports', 'Sports', 'Sports', 'Sports', ''),
(1, 9, '12:50-13:30', 'Library', 'Library', 'Library', 'Library', 'Library', ''),
(2, 1, '07:50-08:30', 'English', 'English', 'English', 'Tamil', 'Tamil', ''),
(2, 2, '08:30-09:10', 'Tamil', 'Tamil', 'Sinhala', 'Sinhala', 'Sinhala', ''),
(2, 3, '09:10-09:50', 'Sports', 'Sports', 'Sports', 'Sports', 'Sports', ''),
(2, 4, '09:50-10:30', 'Buddhism', 'Science', 'Science', 'Science', 'Buddhism', ''),
(2, 5, '10:30-10:50', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', 'INTERVAL', ''),
(2, 6, '10:50-11:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala', ''),
(2, 7, '11:30-12:10', 'Science', 'Maths', 'Maths', 'Buddhism', 'Science', ''),
(2, 8, '12:10-12:50', 'Library', 'Library', 'Library', 'Library', 'Library', ''),
(2, 9, '12:50-13:30', 'Scouting', 'Music', 'Music', 'Scouting', 'Sinhala', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `t_id` int(12) NOT NULL,
  `t_fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `t_username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `t_pass` varchar(30) CHARACTER SET utf8 NOT NULL,
  `t_father` varchar(150) DEFAULT NULL,
  `t_mother` varchar(150) DEFAULT NULL,
  `t_dob` varchar(20) CHARACTER SET utf8 NOT NULL,
  `t_qualification` varchar(800) DEFAULT NULL,
  `t_contact` varchar(15) CHARACTER SET utf8 NOT NULL,
  `t_staff_type` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'Teacher',
  `t_gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `t_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`t_id`, `t_fullname`, `t_address`, `t_email`, `t_username`, `t_pass`, `t_father`, `t_mother`, `t_dob`, `t_qualification`, `t_contact`, `t_staff_type`, `t_gender`, `t_created`) VALUES
(2, 'Hello MeRavi', 'Lokanthali', 'abc@xyz', '10000000', 'pw1', 'ABC XYZ', 'Bcd Xyz', '1990-09-21', '+2', '986840000', 'Admin', 'Male', '2021-04-13 11:42:45'),
(21, 'Fe T', '3333', 'bk@gmail.com', 'user', 'pw', NULL, NULL, '1993-09-21', NULL, '123456789', 'Admin', 'Female', '2021-04-13 11:42:45'),
(19, 'Samplqw', '3333', 'bk@gmail.com', '20000000', 'pw2', NULL, NULL, '1993-09-21', NULL, '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45'),
(17, 'Sample Te', 'Reredfsds', 'bk@gmail.com', '12345611', 'pw1', NULL, NULL, '1993-09-21', NULL, '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_g_1`
--
ALTER TABLE `at_g_1`
  ADD PRIMARY KEY (`sesh_id`);

--
-- Indexes for table `at_g_2`
--
ALTER TABLE `at_g_2`
  ADD PRIMARY KEY (`sesh_id`);

--
-- Indexes for table `at_g_3`
--
ALTER TABLE `at_g_3`
  ADD PRIMARY KEY (`sesh_id`);

--
-- Indexes for table `at_g_4`
--
ALTER TABLE `at_g_4`
  ADD PRIMARY KEY (`sesh_id`);

--
-- Indexes for table `at_g_5`
--
ALTER TABLE `at_g_5`
  ADD PRIMARY KEY (`sesh_id`);

--
-- Indexes for table `exam_term`
--
ALTER TABLE `exam_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  ADD PRIMARY KEY (`assi_id`);

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
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_attendance`
--
ALTER TABLE `st_attendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `at_iddateh` (`at_iddateh`);

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_username` (`st_username`);

--
-- Indexes for table `st_submissions`
--
ALTER TABLE `st_submissions`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `UC_SUBMISSION` (`assi_id`,`st_username`);

--
-- Indexes for table `subjects_info`
--
ALTER TABLE `subjects_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_class_name`
--
ALTER TABLE `sub_class_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_info`
--
ALTER TABLE `sub_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_SUB` (`sub_name`,`t_username`,`st_grade`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `UC_t_username` (`t_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_g_1`
--
ALTER TABLE `at_g_1`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `at_g_2`
--
ALTER TABLE `at_g_2`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_3`
--
ALTER TABLE `at_g_3`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `exam_term`
--
ALTER TABLE `exam_term`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  MODIFY `assi_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meadmin`
--
ALTER TABLE `meadmin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `st_attendance`
--
ALTER TABLE `st_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=569;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `st_submissions`
--
ALTER TABLE `st_submissions`
  MODIFY `sub_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects_info`
--
ALTER TABLE `subjects_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_class_name`
--
ALTER TABLE `sub_class_name`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_info`
--
ALTER TABLE `sub_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `t_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
