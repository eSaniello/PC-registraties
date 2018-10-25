-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 03:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_registration_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `nummer` int(11) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `office` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `user_login` varchar(255) DEFAULT NULL,
  `device` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `new_hostname` varchar(255) DEFAULT NULL,
  `primary_ip` varchar(255) DEFAULT NULL,
  `mac_address` varchar(255) NOT NULL,
  `windows_edition` varchar(255) NOT NULL,
  `windows_version` varchar(255) NOT NULL,
  `antivirus` varchar(255) NOT NULL,
  `ms_office_edition` varchar(255) NOT NULL,
  `ms_office_version` varchar(255) NOT NULL,
  `netwerk_acces_point` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `notes` varchar(4096) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`) VALUES
(5, 'jramsaran', '$2y$10$XjbbjJZhcl2pE9uzcl6BwuTIgbrm71OEc2kcoFA3O.ml/EeGHGcMe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`nummer`),
  ADD UNIQUE KEY `serial_no` (`serial_no`),
  ADD UNIQUE KEY `mac_address` (`mac_address`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `nummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
