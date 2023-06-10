-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 08:30 PM
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
  `contact_num` int(11) NOT NULL,
  `city` varchar(244) NOT NULL,
  `barangay` varchar(244) NOT NULL,
  `street` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `userinfo_id`, `contact_num`, `city`, `barangay`, `street`) VALUES
(1, 1, 2232, 'student', 'student', 'student'),
(2, 2, 2222, 'teacher', 'teacher', 'teacher'),
(3, 3, 2222, 'teacher', 'teacher', 'teacher'),
(4, 4, 2232, 'student', 'student', 'student'),
(5, 5, 2232, 'student', 'student', 'student'),
(6, 6, 22231, 'city', 'barangay', 'street'),
(7, 7, 11211, 'Humms', 'Humms', 'Humms'),
(8, 8, 222, 'Student', 'Student', 'Student'),
(9, 9, 2312, 'teacer', 'teacer', 'teacer'),
(10, 10, 123123, 'lin', 'lin', 'lin'),
(11, 11, 222, 'An', 'An', 'An'),
(12, 12, 2222, 'Daisy', 'Daisy', 'Daisy'),
(13, 13, 22311, 'D', 'D', 'D'),
(14, 14, 22231, 'Jane', 'Jane', 'Jane');

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
(1, 1, 'student', '$2y$10$vPFObdxuuxYbzUPic4NYpejpJu8bfNAhRC6k1YJZmRt9c7cLxrSzy'),
(2, 2, 'teacher', '$2y$10$LTA.whyNPjLT5oODsxdKWOsOOmlI9pj4YTv3O26gTszr.pbDjArhm'),
(3, 3, 'teacher', '$2y$10$IUkLf4QzJpq8l5g9OT7Mw.AluYjnodW2goH2n452p5sDAZSNL3gV2'),
(4, 4, 'student', '$2y$10$XGkmX7iySPmR0En/sXkng.weKZYIGgEySkBm4NnleX7y4vSCuMdu.'),
(5, 5, 'student', '$2y$10$Xm8xO7.GsoNgOJmt2QMJrOhcAPsMesRTXX.1bkuwNGuh50qm0iNdm'),
(6, 6, 'student', '$2y$10$hGCTOgRIesKrpWIXrXqh8uBG4YH9WSpvAIohYb.B9EyHJx/tcJNue'),
(7, 7, 'Humms', '$2y$10$m55ymZ.dt81q60DOQy78ju0lasmjfOJjJiL6tEsoi2.2pcs4ySbAW'),
(8, 8, 'bs', '$2y$10$XS/vfgcDpvErf1oValUM6OC9qy4gjJKQV3VOMyvQZvXaq6LwwRgVC'),
(9, 9, 'teacer', '$2y$10$38S20EytAwdkHEHoJubi9uFAAE9UrXqK8Ad5nPVpUnD5Brn400D6.'),
(10, 10, 'lin', '$2y$10$3IClYJVtEuPCKF.9vKcYqeFpHfRkJeKvIJBlmKBt/PFd3kdFZ9s5G'),
(11, 11, 'An', '$2y$10$Uu6XRr5oAq.K..yWPQt9Qel3gi549PxUku42UpH41d5mu7aISEc2m'),
(12, 12, 'Daisy', '$2y$10$O/PVxKzhF2hl8GfQ2cdDveCBqsECk0ADKoCgeIc4xkQzyxK460YTu'),
(13, 13, 'D', '$2y$10$uBKiBXKsyzcLRW/bJi2gbeSM4arzHAGduCHBJ6toh5pYnkSLSjo3O'),
(14, 14, 'Jane', '$2y$10$lcLtH0J9IyjEdyLZhLc/IOTTlvB97si6uGrlnNMjPkeV5KBGtYIl6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `gender` varchar(244) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `grade` varchar(244) NOT NULL,
  `strand` varchar(244) NOT NULL,
  `lrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`user_id`, `firstname`, `lastname`, `gender`, `birthday`, `age`, `grade`, `strand`, `lrn`) VALUES
(1, 'Name', 'Student', 'male', '2023-06-02', 22, 'transferee', 'fbs', 9999),
(2, '', '', 'male', '2023-05-31', 23, '', '', 0),
(3, '', '', 'male', '2023-05-31', 23, '', '', 0),
(4, 'student', 'two', 'male', '2023-06-10', 22, 'grade12', 'stem', 2311231),
(5, 'student', 'fifth', 'male', '2023-06-10', 22, 'transferee', 'smaw', 333),
(6, 'first', 'student', 'male', '2023-06-01', 22, 'grade11', 'humms', 2132),
(7, 'Student', 'Humms', 'male', '2023-05-31', 11, 'grade12', 'humms', 121211121),
(8, 'Student', 'Banisil', 'male', '2023-06-02', 22, 'transferee', 'eim', 3321),
(9, 'teacer', 'teacer', 'male', '2023-05-30', 22, 'grade11', 'abm', 0),
(10, 'teacher', 'lin', 'male', '2023-06-09', 22, 'transferee', 'abm', 0),
(11, 'Teacher', 'An', 'male', '2023-06-02', 22, 'grade11', 'smaw', 0),
(12, 'Student', 'Daisy', 'male', '2023-05-31', 20, 'grade12', 'abm', 21242),
(13, 'Teacher', 'D', 'male', '2023-06-07', 22, 'grade12', 'humms', 0),
(14, 'Student', 'Jane', 'female', '2023-05-30', 22, 'grade12', 'abm', 0);

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
(2, 2, 'TEACHER'),
(3, 3, 'TEACHER'),
(4, 4, 'STUDENT'),
(5, 5, 'STUDENT'),
(6, 6, 'STUDENT'),
(7, 7, 'STUDENT'),
(8, 8, 'STUDENT'),
(9, 9, 'TEACHER'),
(10, 10, 'TEACHER'),
(11, 11, 'TEACHER'),
(12, 12, 'STUDENT'),
(13, 13, 'TEACHER'),
(14, 14, 'STUDENT');

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
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 0),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 0);

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
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `usercredentials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD CONSTRAINT `tbl_contactinfo_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
