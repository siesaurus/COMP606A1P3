-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 07:41 AM
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
  `cust_email` varchar(50) NOT NULL,
  `therapist_firstname` varchar(50) NOT NULL,
  `booking_starttime` datetime NOT NULL,
  `booking_type_name` varchar(50) NOT NULL,
  `motivation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_email`, `therapist_firstname`, `booking_starttime`, `booking_type_name`, `motivation`) VALUES
(1, '1', '1', '2019-09-12 16:00:00', '5', ''),
(2, '2', '2', '2019-09-20 16:00:00', '5', '');

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
(6, 'Long Massage', 'Full body massage with targeted relief', '01:00:00', 80),
(5, 'Medium Massage', 'To get those knots out', '00:40:00', 60),
(4, 'Short Massage', 'Just a short massage', '00:30:00', 40);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_firstname` varchar(20) NOT NULL,
  `cust_lastname` varchar(20) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_number` int(15) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_firstname`, `cust_lastname`, `cust_password`, `cust_email`, `cust_number`, `booking_id`) VALUES
(3, 'bob', 'builder', '$2y$10$vo6xVsvflVcuQqzP2RG95O/QP0vNE3qisCbCfTEWwpAzLu/Aj3Hau', 'bob@builder.com', 214281974, 0),
(1, 'sally', 'sandbox', 'sally123', 'sally@sand.com', 221924810, 0),
(2, 'tumai', 'tumutoa', '$2y$10$i9tJazAgEzGEe9xVivO0iuC6Yt7hR.KYxcql7LK4Pc1feTeBGpKyq', 'tumai@tumutoa.com', 211234567, 0);

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
  `therapist_email` varchar(50) NOT NULL,
  `therapist_password` varchar(255) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`therapist_id`, `therapist_firstname`, `therapist_lastname`, `therapist_email`, `therapist_password`, `booking_id`) VALUES
(1, 'blue', 'boots', 'blueboots@wrx.com', 'blueboots', 0),
(3, 'david', 'butter', 'david@therapeuticsolutions.co.nz', '$2y$10$7YBIG4OatPO2wtQDrWdZeujqK46Xs.Iewz1V0qtk9Mn5d4TrlDG5e', 0),
(2, 'lucy', 'lawless', 'lucylawless@therapeuticsolutions.co.nz', '$2y$10$km2/sKs6U81EKo1bBY0wlOH9wCB6CJsvQg2Iz1hRYdUEWAgx0ijsS', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cust_email` (`cust_email`),
  ADD KEY `therapist_email` (`therapist_firstname`),
  ADD KEY `booking_type_name` (`booking_type_name`);

--
-- Indexes for table `booking_type`
--
ALTER TABLE `booking_type`
  ADD PRIMARY KEY (`booking_type_name`),
  ADD UNIQUE KEY `booking_type_id` (`booking_type_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_email`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

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
  ADD PRIMARY KEY (`therapist_email`),
  ADD UNIQUE KEY `therapist_id` (`therapist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_type`
--
ALTER TABLE `booking_type`
  MODIFY `booking_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `motivation`
--
ALTER TABLE `motivation`
  MODIFY `motivation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `therapist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
