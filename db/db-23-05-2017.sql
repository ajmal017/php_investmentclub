-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 02:04 AM
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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(255) NOT NULL,
  `notification` text NOT NULL,
  `notification_status` varchar(255) NOT NULL,
  `notification_created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification`, `notification_status`, `notification_created_time`) VALUES
(3, 'ANCBD', 'active', '2017-05-22 17:24:13'),
(5, 'dfsdfsdfsdfs', 'active', '2017-05-22 17:47:14');

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
(7, 'Platinum', 20000, 'Lumsum', '1494010804_4278_package3.jpg', 'Platinum', '2017-05-06 00:30:04', 'active'),
(8, 'new', 1231, 'Lumsum', '1494684537_4901_body-bg.png', 'asdasd', '2017-05-13 19:38:57', 'active'),
(9, 'asd', 100000, 'Lumsum', '1494684595_3831_message_avatar2.png', 'asd', '2017-05-13 19:39:54', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(255) NOT NULL,
  `notification` text NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `notification`, `updated_time`) VALUES
(1, 'ABCD', '2017-05-22 16:45:12');

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
  `aadhaar_card_image` text NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_account_holder_name` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userid`, `address`, `city`, `state`, `country`, `pincode`, `dateofbirth`, `gender`, `mobile`, `pancard`, `pancard_image`, `aadhaar_card`, `aadhaar_card_image`, `bank_name`, `bank_account_holder_name`, `branch`, `account_number`, `ifsc_code`, `last_updated`) VALUES
(1, 'jkh', 'jkh', 'hju', 'INDIA', 'jhj', '1992-01-14', '', '123213123', '123', '1494793519_7506_GANESHA.jpg', '1234', '1494794851_3352_3291520494_da75bdb069.jpg', 'HDFC', 'Amit Jain', 'Vasai', '878987898798', '7878998', '2017-05-14 20:48:09'),
(61, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-05-22 14:59:58'),
(62, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-05-22 15:03:56');

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
  `profile_image` text NOT NULL,
  `email_verification_token` text NOT NULL,
  `email_verified` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `entry` int(10) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `firstname`, `middlename`, `lastname`, `email`, `profile_image`, `email_verification_token`, `email_verified`, `role_id`, `status`, `entry`, `last_login`, `created_date`) VALUES
(1, 'amitjain', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '', 0, 60, 'Amit', 'A', 'jain', 'amit@gmail.com', '1494794889_3300_3587478037_4f36f99023.jpg', '', 'true', '1', 'active', 1, '2017-05-23 01:57:51', '2017-05-11 01:08:12'),
(57, 'ambekar1', '123456', 0, 1, 'right', 0, 0, '', '', '', '', '', '', '', '', '', 1, '2017-05-11 00:00:00', '2017-05-11 00:00:00'),
(60, 'ambekar1', '123456', 0, 1, 'right', 0, 0, '', '', '', '', '', '', '', '', '', 0, '2017-05-11 00:00:00', '2017-05-11 00:00:00'),
(61, 'amit', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '', 0, 0, '', '', '', 'amit@gmai1l.com', '', '123456', '', '', 'active', 0, '2017-05-22 20:35:29', '2017-05-22 20:29:58'),
(62, 'amit1', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0, '', 0, 0, '', '', '', 'amit1@gmail.com', '', '123456', '', '', '', 0, NULL, '2017-05-22 20:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` int(255) NOT NULL,
  `userid` bigint(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `userid`, `package_id`, `quantity`, `status`, `purchase_date`) VALUES
(4, 1, 6, 2, 'accepted', '2017-05-22 20:19:45'),
(5, 61, 6, 1, 'accepted', '2017-05-22 20:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `userid` bigint(255) NOT NULL,
  `user_alignment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`userid`, `user_alignment`) VALUES
(1, 'left'),
(2, 'left'),
(3, 'left'),
(4, 'left'),
(5, 'left'),
(6, 'left'),
(7, 'left'),
(8, 'left'),
(9, 'left'),
(61, 'left'),
(62, 'left');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `package_master`
--
ALTER TABLE `package_master`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

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
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package_master`
--
ALTER TABLE `package_master`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
