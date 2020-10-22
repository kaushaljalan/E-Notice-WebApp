-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `a_id` varchar(80) DEFAULT NULL,
  `number` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `name`, `a_id`, `number`) VALUES
(1, 'admin@gmail.com', 'admin123', 'hod', '1234', 1234567899),
(3, 'admin2@gmail.com', 'admin123', 'prin', '1234', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `cont_info`
--

CREATE TABLE `cont_info` (
  `admin_id` int(11) NOT NULL,
  `clg_name` text,
  `clg_email` text,
  `clg_phone` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont_info`
--

INSERT INTO `cont_info` (`admin_id`, `clg_name`, `clg_email`, `clg_phone`) VALUES
(1, 'BMSCE', 'bms@bmsce.ac.in', 6666662);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `admin_id` int(11) NOT NULL,
  `hod_msg` text,
  `prin_msg` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`admin_id`, `hod_msg`, `prin_msg`, `date`) VALUES
(3, 'aaaaaa', 'admin2', '2020-04-30 07:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(70) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `Description` text,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(1, 'virat@gmail.com', 'locdown holidays vv', 'aaaa', '2020-04-30 07:16:45'),
(3, 'virat@gmail.com', 'attendance shortage', '111qqq', '2020-04-30 08:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `public_notifications`
--

CREATE TABLE `public_notifications` (
  `admin_id` int(11) NOT NULL,
  `title` varchar(130) DEFAULT NULL,
  `link` varchar(130) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_notifications`
--

INSERT INTO `public_notifications` (`admin_id`, `title`, `link`, `date`) VALUES
(1, 'india', 'india.com', '2020-04-30 07:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `usn` varchar(60) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `mobile` bigint(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `dob` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `usn`, `sem`, `mobile`, `gender`, `image`, `dob`) VALUES
(4, 'virat', 'virat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1BM19CS401', 4, 1236549888, 'm', 'high-tech-background.jpg', '1991-11-18 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cont_info`
--
ALTER TABLE `cont_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `public_notifications`
--
ALTER TABLE `public_notifications`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cont_info`
--
ALTER TABLE `cont_info`
  ADD CONSTRAINT `cont_info_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE;

--
-- Constraints for table `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `msg_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE;

--
-- Constraints for table `public_notifications`
--
ALTER TABLE `public_notifications`
  ADD CONSTRAINT `public_notifications_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
