-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 09:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinerestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `resturantN` varchar(20) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `regest` enum('') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `resturantN`, `place`, `time`, `regest`) VALUES
(1, 'KFC', 'Sohar', '9Am', NULL),
(2, 'Macdonald', 'Barka', '11Pm', NULL),
(4, 'sadaf', 'Muscat', '7Am', NULL),
(5, 'Albraki', 'sohar', '2pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`) VALUES
(0, 'majdamm', '10', 'jhgf@gmail.com', 'M'),
(1, 'majda', 'mm', 'jhgf@gmail.com', 'M'),
(11, 'majda', 'mm', 'jhgf@gmail.com', 'M'),
(12, 'majdammm', '8965', 'jhgf@gmail.com', 'M'),
(111, 'majdam', 'mm', 'jhgf@gmail.com', 'M'),
(112, 's', 's', 'jhgf@gmail.com', 'M'),
(147, 'bb', 'b', 'jhgf@gmail.com', 'M'),
(222, 'mmm', 'm', 'jhgf@gmail.com', 'F'),
(5544, 'nn', 'nn', 'jhgf@gmail.com', 'M'),
(23456895, 'noor12345', '12345', 'jhgf@gmail.com', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
