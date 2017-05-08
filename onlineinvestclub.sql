-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 02:30 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineinvestclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `package_master`
--

CREATE TABLE `package_master` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_amount` float NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `package_image` text NOT NULL,
  `package_desc` text NOT NULL,
  `package_created_date` datetime NOT NULL,
  `package_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_master`
--

INSERT INTO `package_master` (`package_id`, `package_name`, `package_amount`, `package_type`, `package_image`, `package_desc`, `package_created_date`, `package_status`) VALUES
(6, 'Gold', 10000, 'Lumsum', '1494010761_4322_package1.jpg', 'Gold New                                ', '2017-05-06 00:29:21', 'active'),
(7, 'Platinum', 20000, 'Lumsum', '1494010804_4278_package3.jpg', 'Platinum', '2017-05-06 00:30:04', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` bigint(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `pancard` varchar(20) NOT NULL,
  `pancard_image` text NOT NULL,
  `aadhaar_card` varchar(20) NOT NULL,
  `aadhar_card_image` text NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `sponsorid` bigint(255) NOT NULL,
  `placementid` bigint(255) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `leftmember` bigint(255) NOT NULL,
  `rightmember` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verification_token` text NOT NULL,
  `email_verified` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `firstname`, `middlename`, `lastname`, `email`, `email_verification_token`, `email_verified`, `user_type`, `status`, `created_date`) VALUES
(1, 'amitjain', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '', 0, 0, 'Amit', '', 'Jain', 'amit.jain@gmail.com', '', 'yes', 'admin', 'active', '2017-05-09 00:00:00'),
(3, 'ambekar', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0, '', 0, 0, '', '', '', 'amit@gmail.com', '123456', '', '', '', '2017-05-09 02:01:36'),
(4, 'asds', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0, '', 0, 0, '', '', '', 'as', '123456', '', '', '', '2017-05-09 02:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `userid` bigint(255) NOT NULL,
  `user_alignment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_master`
--
ALTER TABLE `package_master`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_master`
--
ALTER TABLE `package_master`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
