-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 11:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

CREATE TABLE `tbl_contactinfo` (
  `contact_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `contact_num` bigint(11) NOT NULL,
  `city` varchar(244) NOT NULL,
  `barangay` varchar(244) NOT NULL,
  `street` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `userinfo_id`, `email`, `contact_num`, `city`, `barangay`, `street`) VALUES
(1, 1, 'ryanlaroco@gmail.com', 12312, 'first', 'student', 'first'),
(4, 4, 'ryanlaroco@gmail.com', 12312, 'first', 'student', 'first'),
(5, 5, 'Student@gmail.com', 231231, 'Student', 'Student', 'Student'),
(13, 13, 'sssd@gmail.com', 23, 'ss', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollment`
--

CREATE TABLE `tbl_enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `admit_type` varchar(244) NOT NULL,
  `grade` varchar(244) NOT NULL,
  `program` varchar(244) NOT NULL,
  `term` varchar(244) NOT NULL,
  `lrn` int(11) NOT NULL,
  `lsa` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_enrollment`
--

INSERT INTO `tbl_enrollment` (`enrollment_id`, `userinfo_id`, `admit_type`, `grade`, `program`, `term`, `lrn`, `lsa`) VALUES
(1, 1, 'new', '12', 'abm', '2nd', 222, 'For transferee only'),
(4, 4, '', '', '', '', 222, 'For transferee only'),
(5, 5, 'old', '11', 'humss', '1st', 231231, ''),
(13, 13, 'transferee', '12', 'smaw', '1st', 231231, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `usercredentials_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `username` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`usercredentials_id`, `userinfo_id`, `username`, `password`) VALUES
(4, 1, '', '$2y$10$8VFvkvfJqa8CDA89Iic/TeqmhwdbYeZF/tm.KtlwQGbp27PmG0RZa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `middlename` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `suffix` varchar(244) NOT NULL,
  `gender` varchar(244) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `birthday`, `age`) VALUES
(1, 'Ryan', 'XD', 'laroco', 'watapampa', '', '2023-06-03', 23),
(4, 'Ryan', 'XD', 'laroco', 'watapampa', '', '2023-06-03', 23),
(5, 'Student', 'Student', 'Student', 'Student', 'male', '2023-06-06', 22),
(13, 'ss', 'ss', 'ss', 'ss', 'male', '2023-05-31', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `user_level_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `level` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`user_level_id`, `userinfo_id`, `level`) VALUES
(1, 1, 'STUDENT'),
(4, 4, 'STUDENT'),
(5, 5, 'STUDENT'),
(13, 13, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_status`
--

CREATE TABLE `tbl_user_status` (
  `status_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_status`
--

INSERT INTO `tbl_user_status` (`status_id`, `userinfo_id`, `status`) VALUES
(1, 1, 1),
(4, 4, 0),
(5, 5, 0),
(13, 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD PRIMARY KEY (`usercredentials_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`user_level_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `usercredentials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD CONSTRAINT `tbl_contactinfo_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD CONSTRAINT `tbl_enrollment_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD CONSTRAINT `tbl_usercredentials_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD CONSTRAINT `tbl_user_level_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD CONSTRAINT `tbl_user_status_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
