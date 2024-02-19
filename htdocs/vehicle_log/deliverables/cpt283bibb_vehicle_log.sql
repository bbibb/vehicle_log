-- phpMyAdmin SQL Dump
-- version 
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2024 at 07:45 PM
-- Server version: 8.0.32-percona-sure1
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpt283bibb_vehicle_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuel_id` int NOT NULL,
  `vehicle_id` int NOT NULL,
  `fuel_source` varchar(100) NOT NULL,
  `fuel_gallons` int NOT NULL,
  `fuel_cost` decimal(10,2) NOT NULL,
  `fuel_mileage` decimal(10,1) NOT NULL,
  `fuel_date` datetime NOT NULL,
  `fuel_date_modified` datetime NOT NULL,
  `entry_user_ID` int DEFAULT NULL,
  `edit_user_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int NOT NULL,
  `maintenance_type_id` int NOT NULL,
  `vehicle_id` int NOT NULL,
  `maintenance_vendor` varchar(100) NOT NULL,
  `maintenance_description` varchar(255) NOT NULL,
  `maintenance_vendor_address` varchar(255) NOT NULL,
  `maintenance_cost` decimal(10,2) NOT NULL,
  `maintenance_mileage` decimal(10,1) NOT NULL,
  `maintenance_date` datetime NOT NULL,
  `maintenance_date_modified` datetime NOT NULL,
  `entry_user_id` int NOT NULL,
  `edit_user_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_type`
--

CREATE TABLE `maintenance_type` (
  `maintenance_type_id` int NOT NULL,
  `maintenance_type` varchar(255) NOT NULL,
  `entry_user_ID` int NOT NULL,
  `edit_user_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_role` varchar(26) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_lastlogin` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `entry_user_ID` int NOT NULL,
  `edit_user_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_model` varchar(100) NOT NULL,
  `vehicle_year` int NOT NULL,
  `vehicle_year_purchased` int NOT NULL,
  `vehicle_color` varchar(50) NOT NULL,
  `vehicle_VIN` varchar(30) NOT NULL,
  `vehicle_license_tag` varchar(100) NOT NULL,
  `vehicle_license_state` varchar(50) NOT NULL,
  `vehicle_purchase_price` decimal(10,2) NOT NULL,
  `vehicle_purchase_mileage` decimal(10,1) NOT NULL,
  `entry_user_ID` int NOT NULL,
  `edit_user_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  ADD PRIMARY KEY (`maintenance_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuel_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenance_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance_type`
--
ALTER TABLE `maintenance_type`
  MODIFY `maintenance_type_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
