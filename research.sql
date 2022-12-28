-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2022 at 10:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `gradelevel`
--

CREATE TABLE `gradelevel` (
  `gl_id` int(100) NOT NULL,
  `gradelevel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradelevel`
--

INSERT INTO `gradelevel` (`gl_id`, `gradelevel`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` double NOT NULL,
  `u_id` int(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `u_id`, `action`, `time`) VALUES
(1, 1, 'User 1 , Updated the data of Kiara Villanueva.', '2022-08-16 03:32:22'),
(2, 1, 'User 1 , Register JB Padilla to the system.', '2022-08-16 03:33:39'),
(3, 1, 'User 1 , Updated the data of Rheaa Calvo.', '2022-08-16 04:53:34'),
(4, 1, 'User 1 , Updated the data of Bode John Villanueva.', '2022-08-16 04:57:54'),
(5, 1, 'User 1 , Updated the data of Rhean Calvo.', '2022-08-16 04:58:51'),
(10, 1, 'User 1 , Register Karen Magno to the system.', '2022-08-16 05:08:18'),
(11, 1, 'User 1 , Updated the data of Karena Magno.', '2022-08-16 05:30:55'),
(12, 1, 'User 1 , Updated the data of Karena Magnoa.', '2022-08-16 05:31:05'),
(13, 1, 'User 1 , Updated the data of Karen Magno.', '2022-08-16 05:31:37'),
(14, 1, 'User 1 , Updated the data of Rhea Calvo.', '2022-08-16 05:34:17'),
(15, 1, 'User 1 , Updated the data of Rhea Calvo.', '2022-08-16 05:37:27'),
(16, 1, 'User 1 , Updated the data of Rhea Calvo.', '2022-08-16 05:48:25'),
(17, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-12 08:01:26'),
(18, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-12 08:14:29'),
(19, 3, 'User 3 , Register Eric Jorbina to the system.', '2022-10-12 08:51:56'),
(20, 1, 'User 1 , Register princess anne maglantay to the system.', '2022-10-17 09:51:04'),
(21, 1, 'User 1 , Register nicole segarra to the system.', '2022-10-17 10:01:16'),
(22, 1, 'User 1 , Register rhdo jawbdawbd to the system.', '2022-10-17 10:09:00'),
(23, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-17 10:11:43'),
(24, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-17 10:15:26'),
(25, 1, 'User 1 , Register Rhod Arriola to the system.', '2022-10-17 11:22:07'),
(26, 1, 'User 1 , Register princess maglantay to the system.', '2022-10-17 11:24:40'),
(27, 1, 'User 1 , Register Rhod Arriola to the system.', '2022-10-17 11:30:14'),
(28, 1, 'User 1 , Register Creighlon Tellano to the system.', '2022-10-17 11:32:13'),
(29, 1, 'User 1 , Register ajwdawg dwuhaduwh to the system.', '2022-10-17 11:44:36'),
(30, 1, 'User 1 , Register jewela amorganda to the system.', '2022-10-17 21:53:35'),
(31, 1, 'User 1 , Register tisay alegria to the system.', '2022-10-17 22:05:06'),
(32, 1, 'User 1 , Register lemuel legada to the system.', '2022-10-17 22:05:56'),
(33, 1, 'User 1 , Register rhim arriola to the system.', '2022-10-17 22:10:04'),
(34, 1, 'User 1 , Register rhim arriola to the system.', '2022-10-17 22:17:19'),
(35, 1, 'User 1 , Register bode rhea to the system.', '2022-10-17 22:17:42'),
(36, 1, 'User 1 , Register creighlon jorbina to the system.', '2022-10-17 22:19:26'),
(37, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-17 23:03:45'),
(38, 1, 'User 1 , Register rhod arriola to the system.', '2022-10-17 23:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `s.id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mid` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `id_num` int(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `cpnum` int(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`s.id`, `name`, `mid`, `last`, `id_num`, `position`, `grade`, `section`, `age`, `gender`, `cpnum`, `email`) VALUES
(1, 'rhod', 'deslate', 'arriola', 89020, 'president', '3', 'bsit', 21, 'male', 93893999, 'rhodarriola@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `s_id` int(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`s_id`, `section`) VALUES
(1, 'BSIT'),
(2, 'BLIS');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s.id` bigint(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `mid` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `last` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `id_num` int(20) NOT NULL,
  `grade` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `section` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `cpnum` int(255) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s.id`, `name`, `mid`, `last`, `id_num`, `grade`, `section`, `age`, `gender`, `cpnum`, `email`) VALUES
(21, 'creighlon', 'tellano', 'jorbina', 965899, '1', 'BSIT', 21, 'Male', 93457768, 'creig@gmail.com'),
(22, 'rhod', 'deslate', 'arriola', 93458, '1', 'BSIT', 24, 'Male', 92348748, 'rhodarriola@gmail.com'),
(23, 'rhod', 'deslate', 'arriola', 387458, '1', 'BSIT', 21, 'Male', 93458488, 'rhodarriola@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_mid` varchar(50) NOT NULL,
  `u_last` varchar(100) NOT NULL,
  `auth_id` varchar(255) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_mid`, `u_last`, `auth_id`, `uname`, `pass`, `role`) VALUES
(1, 'Bode John', 'Cadiao', 'Villanueva', 'auth12345', 'Admin', 'Admin', 1),
(3, 'rhod', 'deslate', 'arriola', 'd6e106b5047db26431684488c30bc92a', 'rhod', 'Encoder', 2),
(4, 'jewela', 'grecia', 'amorganda', '15f05694206e90a274ce7af114d333d5', 'jewela', 'Encoder', 2),
(5, 'rhim', 'delstae', 'arriola', '56977305a8b65da44f55dc6db028a063', 'rhim', 'Encoder', 2),
(6, 'bode', 'john', 'rhea', '9198d71c869c9e3756d50bb6d0625fae', 'rhea', 'Encoder', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gradelevel`
--
ALTER TABLE `gradelevel`
  ADD PRIMARY KEY (`gl_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`s.id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s.id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gradelevel`
--
ALTER TABLE `gradelevel`
  MODIFY `gl_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `s.id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s.id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
