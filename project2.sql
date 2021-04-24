-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 07:56 AM
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
  `10000003` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(40, 20000000, '2021-04-15 19:51:32', '2021-04-14', 'English', 'eng1', 1, 'Uploaded/210415-022132-photo_1.jpg', 49796);

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
  `admin_password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `t_staff_type` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meadmin`
--

INSERT INTO `meadmin` (`id`, `admin_username`, `admin_password`, `t_staff_type`) VALUES
(1, 10000000, 'pw1', 'Admin');

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
(5, '2021-04-23 00:41:25', 'Sample Headingsd', 'Sample Subheading', 'Sample Anfsdontent', '../News-Img/210422-071125_10000000.jpg', 'Public', 10000000),
(6, '2021-04-23 00:41:53', 'Faculty Only', 'Sample Subheading', 'Safac', '../News-Img/210422-071153_10000000.png', 'Faculty', 10000000),
(7, '2021-04-23 01:01:55', 'Test 6', 'Sample Subheading', 'Sample Announcement Content', '../News-Img/210422-073155_20000000.jpg', 'Student', 20000000);

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
(45, 'Yolanda Fia', 10000003, 'pw1', 1, 32, '1993-09-21', '54, Heyaa', 'Female', '123456789', '2021-04-23 01:41:09'),
(46, 'Terry Cruse', 20000000, 'pw2', 2, 22, '1998-09-21', 'Address Here', 'Male', '123456789', '2021-04-23 01:42:05'),
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
(13, 36, 10000000, '2021-04-23 01:50:49', 'Submitted/36_10000000.jpg', 441336, 59, 59, '-', 'Need improvment');

-- --------------------------------------------------------

--
-- Table structure for table `sub_info`
--

CREATE TABLE `sub_info` (
  `id` int(12) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `t_username` int(12) NOT NULL,
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
(2, 'Banuka Vidusanka', 'Sri Lanka', 'thebkrox@gmail.com', 10000000, 'pw1', '1993-09-22', '986840000', 'Admin', 'Male', '2021-04-13 11:42:45'),
(17, 'Kumara Silva', 'Reredfsds', 'bk@gmail.com', 12345611, 'pw1', '1993-09-21', '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45'),
(19, 'Gayan Perera', '3333', 'bk@gmail.com', 20000000, 'pw2', '1993-09-21', '123456789', 'Teacher', 'Male', '2021-04-13 11:42:45');

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
  ADD KEY `FK_st_username` (`st_username`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_g_1`
--
ALTER TABLE `at_g_1`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_2`
--
ALTER TABLE `at_g_2`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `at_g_3`
--
ALTER TABLE `at_g_3`
  MODIFY `sesh_id` int(12) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `contact_us_data`
--
ALTER TABLE `contact_us_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `news_data`
--
ALTER TABLE `news_data`
  MODIFY `n_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `st_submissions`
--
ALTER TABLE `st_submissions`
  MODIFY `sub_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Constraints for table `fc_assignments`
--
ALTER TABLE `fc_assignments`
  ADD CONSTRAINT `FKk_t_username` FOREIGN KEY (`t_username`) REFERENCES `teacher_info` (`t_username`);

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
