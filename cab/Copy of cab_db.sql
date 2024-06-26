-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 06:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('24'),
('24');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `username`, `password`) VALUES
(1, '21', '21');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `from1` varchar(255) NOT NULL,
  `to1` varchar(255) NOT NULL,
  `distance` decimal(10,0) NOT NULL,
  `hours` int(11) NOT NULL,
  `minutes` int(11) NOT NULL,
  `money` decimal(10,0) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user`, `driver`, `from1`, `to1`, `distance`, `hours`, `minutes`, `money`, `status`) VALUES
(16, 'user1', 'driver2', 'kerala', 'madurai', 304, 5, 25, 5176, 3),
(18, 'sk', 'driver1', 'teppakulam madurai', 'kalavasal maduari', 5, 0, 16, 93, 3),
(19, 'logu', 'driver2', 'othakadai', 'salem', 194, 2, 48, 3303, 3),
(20, 'vishnu', 'driver1', 'madurai', 'coimbatore', 212, 3, 52, 4235, 3),
(22, 'suriya', 'driver3', 'nigeria', 'madurai', 15875, 191, 58, 301627, 3),
(23, 'user1', 'driver1', 'madurai', 'tirunelveli', 160, 2, 25, 3201, 3),
(31, 'user1', 'driver1', 'goripalayam,madurai', 'tirunelveli', 160, 2, 25, 3201, 3),
(33, 'user1', 'driver2', 'goripalayam,madurai', 'tirunelveli', 160, 2, 25, 2721, 3),
(34, 'raghul', 'driver3', 'madurai', 'ladakh', 3563, 54, 56, 67687, 0),
(39, 'user1', 'driver4', 'goripalayam,madurai', 'periyar,madurai', 2, 0, 8, 33, 3),
(40, 'new', 'driver1', 'madurai', 'kottampatti,melur', 59, 0, 59, 1186, 0),
(42, 'user1', 'driver1', '1', '1', 1, 1, 1, 1, 3),
(44, 'naresh', 'driver1', 'madurai', 'trichy', 127, 1, 49, 2546, 3),
(45, 'new', 'driver2', 'madurai', 'kottampatti,melur', 59, 0, 59, 1008, 3),
(46, 'user1', 'driver4', '1', '1', 1, 1, 1, 1, 3),
(47, 'naresh', 'driver1', '1', '1', 1, 1, 11, 1, 3),
(48, 'user1', 'driver3', 'srilanka', 'madurai', 1008, 19, 9, 19147, 0),
(49, 'user1', 'driver4', 'madurai', 'tirunelveli', 160, 2, 25, 2561, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `register_code` int(11) NOT NULL,
  `car` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `driver` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `username`, `password`, `register_code`, `car`, `category`, `driver`, `address`, `status`) VALUES
(14, 'driver1', '1', 1000, 'audi', '2 seater', 'driver1', 'jeevanagar', 1),
(15, 'driver2', '1', 1001, 'bmw', '5 seater', 'driver2', 'kk nagar', 1),
(17, 'driver3', '1', 1003, 'benz', '7 seater', 'driver3', 'thiruchili', 1),
(18, 'driver4', '1', 1004, 'swift', '5 seater', 'driver4', 'theppakulam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `username`, `password`) VALUES
(1, '21cos301', '21cos301');

-- --------------------------------------------------------

--
-- Table structure for table `sample_login`
--

CREATE TABLE `sample_login` (
  `username` varchar(75) NOT NULL,
  `mobilenumber` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `confirm` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample_login`
--

INSERT INTO `sample_login` (`username`, `mobilenumber`, `password`, `confirm`) VALUES
('user1', '1234567890', '1', '1'),
('user1', '1234567890', '1', '1'),
('user2', '1234567890', '1', '1'),
('user2', '1234567890', '1', '1'),
('34', '9888734453', 'cv', 'cv'),
('34', '9888734453', 'cv', 'cv'),
('sk', '9344678135', 'billask7', 'billask7'),
('sk', '9344678135', 'billask7', 'billask7'),
('amc', '1234567890', '1', '1'),
('amc', '1234567890', '1', '1'),
('logu', '1234567890', '1', '1'),
('logu', '1234567890', '1', '1'),
('mani', '1234567890', '1', '1'),
('mani', '1234567890', '1', '1'),
('vishnu', '1234567890', '1', '1'),
('vishnu', '1234567890', '1', '1'),
('hari', '1234567890', '1', '1'),
('hari', '1234567890', '1', '1'),
('suriya', '1234567890', '1', '1'),
('suriya', '1234567890', '1', '1'),
('raghul', '0123456789', '1', '1'),
('raghul', '0123456789', '1', '1'),
('naresh', '0123456789', '1', '1'),
('naresh', '0123456789', '1', '1'),
('new', '1234567890', '1', '1'),
('new', '1234567890', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`,`register_code`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
