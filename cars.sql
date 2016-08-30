-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2016 at 10:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(8, 'Pajero', 'Mitsubishi', 'pajero indian car photo.JPG', 5000, 7, 'Available'),
(10, 'Harrier', 'Toyota', 'Toyota_Harrier_Myanmar.jpg', 6000, 7, 'Available'),
(12, 'Creta', 'Hundai', 'o-HYUNDAI-CRETA-facebook.jpg', 4500, 7, 'Available'),
(15, 'Allion', 'Toyota', 'allion_A9I_PakWheels(com).jpg', 5000, 5, 'Available'),
(19, 'parado', 'Toyota', 'prado_newwide.jpg', 10000, 12, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `driver_pic` text NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driver_exprience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_pic`, `driver_name`, `driver_exprience`) VALUES
(6, '5.png', 'alex jordan', 10),
(7, '402730e84c6706c1f1ef41c3dfea8a3be70fb187-big.jpg', 'jon cutter', 5),
(8, 'profile_picture_by_the_underwriter-d5kux99.jpg', 'jordan bally', 8),
(10, 'profile.jpg', 'jone dow', 6),
(12, '7015202_300x300.jpg', 'jack pow', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `Rent` double NOT NULL,
  `bkash_tran_id` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `start_time` int(20) NOT NULL,
  `end_time` int(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `driver_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `client_id`, `car_id`, `Rent`, `bkash_tran_id`, `status`, `start_time`, `end_time`, `datetime`, `driver_id`) VALUES
(16, 8, 1, 2000, '100', 1, 0, 0, '2016-08-18 17:18:37', 1),
(17, 8, 1, 2000, '100', 0, 0, 0, '2016-08-18 17:18:37', 2),
(18, 5, 10, 6000, '111', 0, 0, 0, '2016-08-18 17:18:37', 2),
(19, 5, 13, 1500, '100', 0, 0, 0, '2016-08-18 17:18:37', 2),
(20, 5, 8, 5000, '5555', 0, 0, 0, '2016-08-18 17:18:37', 4),
(21, 5, 10, 6000, '8787878', 0, 0, 0, '2016-08-18 17:18:37', 2),
(22, 8, 15, 5000, '555577', 0, 0, 0, '2016-08-18 17:18:37', 2),
(23, 5, 12, 4500, '888888', 0, 0, 0, '2016-08-18 17:18:37', 2),
(24, 5, 10, 6000, '11111', 0, 0, 0, '2016-08-18 17:18:37', 2),
(25, 10, 10, 6000, '191999954503', 0, 0, 0, '2016-08-18 17:18:37', 2),
(26, 5, 10, 6000, '222111555', 0, 0, 0, '2016-08-18 17:18:37', 7),
(27, 11, 19, 10000, '8888899999', 1, 0, 0, '2016-08-18 17:18:37', 7),
(28, 5, 10, 6000, '111', 0, 0, 200, '2016-08-18 17:56:24', 7),
(29, 5, 10, 6000, '9988', 0, 0, 0, '2016-08-22 02:21:13', 7),
(30, 11, 10, 6000, '999', 0, 0, 0, '2016-08-22 02:46:04', 7),
(31, 11, 10, 6000, '11122', 0, 0, 225959, '2016-08-22 03:05:51', 12),
(32, 11, 10, 6000, '6666', 0, 1500, 1715, '2016-08-22 07:19:42', 8),
(33, 11, 8, 5000, '9933', 0, 400, 800, '2016-08-22 07:25:08', 6),
(34, 10, 12, 4500, '9191', 0, 1100, 1400, '2016-08-22 07:32:08', 8);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(14, 5, 'hi', 'Unread', '2016-07-24 11:43:03'),
(15, 5, 'hello', 'Unread', '2016-07-24 11:43:16'),
(16, 10, 'Hi ...', 'Unread', '2016-08-10 12:12:13'),
(17, 5, 'HI i am new\r\n', 'Unread', '2016-08-11 14:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `access_level` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `status`, `access_level`) VALUES
(5, 'Emad', 'emad@gmail.com', 1234, 1767696300, 'Nikunjo-2', 'Male', 'Approved', 0),
(8, 'mizan', 'mizan@gmail.com', 1234, 123456789, 'Nikunjo-2', 'Male', 'Approved', 0),
(9, 'admin', 'admin@gmail.com', 1234, 1912201879, 'dhaka', 'Male', 'Approved', 9),
(10, 'hamza rahman', 'hamza@pickme.com', 1234, 1912201879, 'Shamoli', 'Male', 'Approved', 0),
(11, 'walid', 'walid@gmail.com', 1234, 1915566998, 'bannai', 'Male', 'Approved', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
