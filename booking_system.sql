-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 02:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `booking_starttime` datetime NOT NULL,
  `booking_end` datetime NOT NULL,
  `booking_date` date NOT NULL,
  `booking_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_id`, `therapist_id`, `booking_starttime`, `booking_end`, `booking_date`, `booking_type_id`) VALUES
(1, 1, 1, '2019-09-12 16:00:00', '2019-09-12 16:40:00', '2019-09-12', 5);

-- --------------------------------------------------------

--
-- Table structure for table `booking_type`
--

CREATE TABLE `booking_type` (
  `booking_type_id` int(11) NOT NULL,
  `booking_type_name` varchar(20) NOT NULL,
  `booking_type_desc` varchar(50) NOT NULL,
  `booking_type_duration` time NOT NULL,
  `booking_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_type`
--

INSERT INTO `booking_type` (`booking_type_id`, `booking_type_name`, `booking_type_desc`, `booking_type_duration`, `booking_cost`) VALUES
(4, 'Short Massage', 'Just a short massage', '00:30:00', 40),
(5, 'Medium Massage', 'To get those knots out', '00:40:00', 60),
(6, 'Long Massage', 'Full body massage with targeted relief', '01:00:00', 80);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_firstname` varchar(20) NOT NULL,
  `cust_lastname` varchar(20) NOT NULL,
  `cust_username` varchar(16) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_number` int(15) NOT NULL,
  `cust_motivation` varchar(100) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_firstname`, `cust_lastname`, `cust_username`, `cust_password`, `cust_email`, `cust_number`, `cust_motivation`, `booking_id`) VALUES
(1, 'sally', 'sandbox', 'sallysand', 'sally123', 'sally@sand.com', 221924810, 'sports injury', 0);

-- --------------------------------------------------------

--
-- Table structure for table `motivation`
--

CREATE TABLE `motivation` (
  `motivation_id` int(11) NOT NULL,
  `motivation_desc` varchar(255) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE `therapist` (
  `therapist_id` int(11) NOT NULL,
  `therapist_firstname` varchar(20) NOT NULL,
  `therapist_lastname` varchar(20) NOT NULL,
  `therapist_username` varchar(20) NOT NULL,
  `therapist_email` varchar(50) NOT NULL,
  `therapist_password` varchar(255) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`therapist_id`, `therapist_firstname`, `therapist_lastname`, `therapist_username`, `therapist_email`, `therapist_password`, `booking_id`) VALUES
(1, 'blue', 'boots', 'blueboots', 'blueboots@wrx.com', 'blueboots', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `therapist_id` (`therapist_id`),
  ADD KEY `booking_type_id` (`booking_type_id`);

--
-- Indexes for table `booking_type`
--
ALTER TABLE `booking_type`
  ADD PRIMARY KEY (`booking_type_id`),
  ADD KEY `booking_type_id` (`booking_type_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `motivation`
--
ALTER TABLE `motivation`
  ADD PRIMARY KEY (`motivation_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `therapist_id` (`therapist_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `therapist`
--
ALTER TABLE `therapist`
  ADD PRIMARY KEY (`therapist_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_type`
--
ALTER TABLE `booking_type`
  MODIFY `booking_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `motivation`
--
ALTER TABLE `motivation`
  MODIFY `motivation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `therapist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`therapist_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`booking_type_id`) REFERENCES `booking_type` (`booking_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motivation`
--
ALTER TABLE `motivation`
  ADD CONSTRAINT `motivation_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `customer` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `motivation_ibfk_2` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`therapist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `motivation_ibfk_3` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
