-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 01:14 AM
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
-- Table structure for table `binary_income`
--

CREATE TABLE `binary_income` (
  `id` bigint(255) NOT NULL,
  `userid` bigint(255) NOT NULL,
  `binary_total` double(255,4) NOT NULL,
  `left_binary_total` double(255,4) NOT NULL,
  `right_binary_total` double(255,4) NOT NULL,
  `carry_forward` double(255,4) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `payout_status` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `binary_income`
--

INSERT INTO `binary_income` (`id`, `userid`, `binary_total`, `left_binary_total`, `right_binary_total`, `carry_forward`, `placement`, `payout_status`, `created_date`) VALUES
(1, 1, 1500.0000, 25000.0000, 15000.0000, 10000.0000, 'left', 'generated', '2017-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactus_id` bigint(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `enquiry` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `direct_comm`
--

CREATE TABLE `direct_comm` (
  `id` bigint(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `direct_comm_from_userid` bigint(255) NOT NULL,
  `amount` double(255,4) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direct_comm`
--

INSERT INTO `direct_comm` (`id`, `userid`, `direct_comm_from_userid`, `amount`, `date`, `status`) VALUES
(1, 1, 9, 1500.0000, '2017-07-09', 'generated'),
(2, 1, 10, 1000.0000, '2017-07-09', 'generated'),
(3, 10, 11, 1500.0000, '2017-07-09', 'generated');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `news_id` int(255) NOT NULL,
  `news_heading` text NOT NULL,
  `news_desc` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`news_id`, `news_heading`, `news_desc`, `created_date`) VALUES
(2, 'news 1', '&lt;b&gt;abcd&lt;/b&gt;', '2017-06-12 02:16:24'),
(3, 'News 2', '&lt;b&gt;asdsadasd&lt;/b&gt;', '2017-06-12 02:17:40'),
(4, 'Courses', '&lt;b&gt;Lorem Ipsum&lt;/b&gt;&lt;span&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;', '2017-07-06 17:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(255) NOT NULL,
  `packages` varchar(255) NOT NULL,
  `notification` text NOT NULL,
  `notification_email` text NOT NULL,
  `notification_status` varchar(255) NOT NULL,
  `notification_created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `packages`, `notification`, `notification_email`, `notification_status`, `notification_created_time`) VALUES
(3, '', 'ANCBD', '', 'active', '2017-05-22 17:24:13'),
(5, '', 'dfsdfsdfsdfs', '', 'active', '2017-05-22 17:47:14'),
(6, '', 'Welcome&nbsp;', '', 'active', '2017-05-23 15:12:00'),
(7, '2,3', 'gfhfgh', '', 'active', '2017-07-06 07:06:30'),
(8, '1,2', 'hhhhh', 'dfgdfgdf', 'active', '2017-07-06 07:15:38'),
(9, '', 'jhjhjhjhjh', '', 'active', '2017-07-06 07:16:26'),
(10, '1,2,3', 'ghghg', 'aaaaaaaaaaaaaaaaaaa', 'active', '2017-07-06 07:37:48'),
(11, '1,2,3', 'ghghg', 'aaaaaaaaaaaaaaaaaaa', 'active', '2017-07-06 07:38:41'),
(12, '1,2,3', 'ghghg', 'aaaaaaaaaaaaaaaaaaa', 'active', '2017-07-06 07:38:55'),
(13, '1,2,3', 'ghghg', 'aaaaaaaaaaaaaaaaaaa', 'active', '2017-07-06 07:38:55'),
(14, '1,2,3', 'abcd', 'a', 'active', '2017-07-06 07:40:04'),
(15, '', 'hhhh', 'bb', 'active', '2017-07-06 07:40:46'),
(16, '', 'hhhh', 'bb', 'active', '2017-07-06 07:40:57'),
(17, '', '789', '098', 'active', '2017-07-06 07:48:54'),
(18, '', '7890', '098', 'active', '2017-07-06 07:50:36'),
(19, '3', 'XYZ', 'XYZXYZ', 'active', '2017-07-06 11:50:38');

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
(1, 'Options Trading', 15000, 'Lumsum', '1499785243_4831_options.jpg', 'They say that only 5% of the people make money in the markets, well we say that 100% of these 5% people are trading derivatives, futures and options…&amp;nbsp;&lt;ol&gt;&lt;li&gt;WHAT IS OPTIONS&lt;/li&gt;&lt;li&gt;TYPES OF OPTIONS&lt;/li&gt;&lt;li&gt;OPTION INGRIDENTS&lt;/li&gt;&lt;li&gt;DELTA&lt;/li&gt;&lt;li&gt;GAMA&lt;/li&gt;&lt;li&gt;VEGA&lt;/li&gt;&lt;li&gt;THETA&lt;/li&gt;&lt;li&gt;OPTION TECHNIQUES&lt;/li&gt;&lt;li&gt;OPTION WRITING&lt;/li&gt;&lt;li&gt;HOW TO DO TRADE IN OPTION&lt;/li&gt;&lt;li&gt;IMPORTANCE OF OPEN INTREST AND PRICE&lt;/li&gt;&lt;/ol&gt;', '2017-06-29 23:16:30', 'active'),
(2, 'Technical Trading', 10000, 'Lumsum', '1499785266_3191_technical.jpg', 'Technical Analysis is the study of discounting future happening in the market on the bases of charts with price action analysis &amp;amp; candlestick patterns&lt;br&gt;&lt;br&gt;&lt;ol&gt;&lt;li&gt;BAR CHART READING&lt;/li&gt;&lt;li&gt;CANDLE CHART READING&lt;/li&gt;&lt;li&gt;MOVING AVERAGE&lt;/li&gt;&lt;li&gt;INDICATORS&lt;/li&gt;&lt;li&gt;OSCALITORS&lt;/li&gt;&lt;li&gt;RESISTANCE LEVEL&lt;/li&gt;&lt;li&gt;SUPPORT LEVEL&lt;/li&gt;&lt;li&gt;PIVOT POINT&lt;/li&gt;&lt;li&gt;TREND-LINE&lt;/li&gt;&lt;li&gt;BUY &amp;amp; SELL SIGNAL&lt;/li&gt;&lt;li&gt;TARGET AND STOP LOSS&lt;/li&gt;&lt;/ol&gt;', '2017-06-29 23:18:59', 'active'),
(3, 'Stock Trading', 5000, 'Lumsum', '1499785283_6663_stocks.jpg', 'We have often seen that the best traders are those who trades and understands the inter-markets relationships,i.e.they have a complete knowledge of stock market..&amp;nbsp;&lt;ol&gt;&lt;li&gt;TERMINOLOGY IN EQUITY AND DEBT MARKET&lt;/li&gt;&lt;li&gt;FUNDAMENTAL OF RESEARCH&lt;/li&gt;&lt;li&gt;ECONOMIC ANALYSIS&lt;/li&gt;&lt;li&gt;INDUSTRY ANALYSIS&lt;/li&gt;&lt;li&gt;COMPANY ANALYSIS – QUALITATIVE DIMENSION&lt;/li&gt;&lt;li&gt;COMPANY ANALYSIS – QUANTITATIVE DIMENSION&lt;/li&gt;&lt;li&gt;VALUATION PRINCIPLES&lt;/li&gt;&lt;li&gt;FUNDAMENTAL OF RISK AND RETURN&lt;/li&gt;&lt;/ol&gt;', '2017-06-29 23:20:27', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `package_media`
--

CREATE TABLE `package_media` (
  `package_media_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `image_path` text NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_media`
--

INSERT INTO `package_media` (`package_media_id`, `package_id`, `image_path`, `file_type`, `created_date`) VALUES
(1, 1, '1498758390_9508_patharkesanam06(www.songs.pk).mp3', 'audio/mpeg', '2017-06-29 23:16:30'),
(2, 1, '1498758390_6891_patharkesanam05(www.songs.pk).mp3', 'audio/mpeg', '2017-06-29 23:16:30'),
(3, 2, '1498758539_8794_Songs.PK_Ramaiya_Vastavaiya_-_01_-_Jeene_Laga_Hoon.mp3', 'audio/mpeg', '2017-06-29 23:18:59'),
(4, 3, '1498758627_7889_52_KYO_KISI_KO_TERE_NAAM.mp3', 'audio/mpeg', '2017-06-29 23:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `payout_id` bigint(255) NOT NULL,
  `userid` bigint(255) NOT NULL,
  `payout_amount` double(255,4) NOT NULL,
  `payment_desc` text,
  `status` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`payout_id`, `userid`, `payout_amount`, `payment_desc`, `status`, `created_date`) VALUES
(1, 1, 4000.0000, NULL, 'generated', '2017-07-09 01:41:42'),
(2, 10, 1500.0000, NULL, 'generated', '2017-07-09 01:41:42'),
(3, 1, 2000.0000, 'Paid', 'paid', '2017-07-11 20:11:30');

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
(1, '', '', '', '', '', '2017-06-29', '', '1231231231', '', '', '', '', '', '', '', '', '', '2017-07-05 20:38:43'),
(9, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 10:57:45'),
(10, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 10:58:19'),
(11, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 11:20:59'),
(12, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 11:21:18'),
(13, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 11:21:37'),
(14, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-06 11:21:54'),
(15, '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '2017-07-11 15:04:03');

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
  `forgot_password_token` text NOT NULL,
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

INSERT INTO `users` (`userid`, `username`, `password`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `firstname`, `middlename`, `lastname`, `email`, `profile_image`, `forgot_password_token`, `email_verification_token`, `email_verified`, `role_id`, `status`, `entry`, `last_login`, `created_date`) VALUES
(1, 'amitjain', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, '', 10, 9, 'Amit', 'A', 'Jain', 'amit@onlinetradinginstitute.in', '1499287123_3688_6689430.jpg', '5ac542a585b4dbcbbdc34755d4df329d', '', 'yes', '1', 'active', 0, '2017-07-20 00:04:58', '2017-06-29 00:00:00'),
(9, 'amit', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 'right', 13, 14, '', '', '', 'amitt@onlinetradinginstitute.in', '', '', '1749faeb8b38e01fb8ea2236b0c14816', 'yes', '', 'active', 0, '2017-07-06 16:49:27', '2017-07-06 16:27:45'),
(10, 'amit1', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 'left', 11, 12, '', '', '', 'amit1@onlinetradinginstitute.in', '', '', 'e16ed05da4b977861395c5fb297bb518', 'yes', '', 'active', 0, '2017-07-06 16:29:02', '2017-07-06 16:28:19'),
(11, 'amit3', 'e10adc3949ba59abbe56e057f20f883e', 10, 10, 'left', 15, 0, '', '', '', 'amit3@onlinetradinginstitute.in', '', '', '571ceb7dbd89c430f665bb4e5d99bafa', 'yes', '', 'active', 0, '2017-07-06 16:53:02', '2017-07-06 16:50:59'),
(12, 'amit4', 'e10adc3949ba59abbe56e057f20f883e', 10, 10, 'right', 0, 0, '', '', '', 'amit4@onlinetradinginstitute.in', '', '', '7a4508c10e21e462367a62e5a571fd64', 'yes', '', '', 0, '2017-07-06 22:45:40', '2017-07-06 16:51:18'),
(13, 'amit5', 'e10adc3949ba59abbe56e057f20f883e', 9, 9, 'left', 0, 0, '', '', '', 'amit5@onlinetradinginstitute.in', '', '', '1d2a7e333c86eb388d0e47903ba62e9d', 'yes', '', '', 0, '2017-07-08 00:49:03', '2017-07-06 16:51:37'),
(14, 'amit6', 'e10adc3949ba59abbe56e057f20f883e', 9, 9, 'right', 0, 0, '', '', '', 'amit6@onlinetradinginstitute.in', '', '', '2e1d1350228e6716e6b1fce50dd927ac', 'yes', '', '', 0, NULL, '2017-07-06 16:51:54'),
(15, 'smith', '18c158022ef122cca464b98a2cc36974', 1, 11, 'left', 0, 0, '', '', '', 'sumitjpd@gmail.com', '', '', 'cda4b7f954362c6bb0ca56a44b5be782', 'yes', '', 'active', 0, '2017-07-11 20:34:59', '2017-07-11 20:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` int(255) NOT NULL,
  `userid` bigint(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `payment_details` text NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `acceptance_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `userid`, `package_id`, `quantity`, `payment_details`, `payment_type`, `status`, `purchase_date`, `acceptance_date`) VALUES
(1, 1, 1, 1, '', '', 'accepted', '2017-07-06 16:25:42', '2017-07-06 16:26:02'),
(2, 10, 2, 1, '', '', 'accepted', '2017-07-06 16:44:51', '2017-07-06 16:48:45'),
(3, 9, 1, 1, '', '', 'accepted', '2017-07-06 16:49:35', '2017-07-06 16:49:44'),
(4, 11, 1, 1, '', '', 'accepted', '2017-07-06 16:53:08', '2017-07-06 16:53:23'),
(5, 15, 3, 1, '', '', 'accepted', '2017-07-11 20:36:05', '2017-07-11 20:43:03'),
(8, 1, 2, 1, 'dfgfd', 'bank', 'requested', '2017-07-20 01:02:57', '0000-00-00 00:00:00');

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
(9, 'left'),
(10, 'left'),
(11, 'left'),
(12, 'left'),
(13, 'left'),
(14, 'left'),
(15, 'left');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binary_income`
--
ALTER TABLE `binary_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `direct_comm`
--
ALTER TABLE `direct_comm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`news_id`);

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
-- Indexes for table `package_media`
--
ALTER TABLE `package_media`
  ADD PRIMARY KEY (`package_media_id`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`payout_id`);

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
-- AUTO_INCREMENT for table `binary_income`
--
ALTER TABLE `binary_income`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contactus_id` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `direct_comm`
--
ALTER TABLE `direct_comm`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `package_master`
--
ALTER TABLE `package_master`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package_media`
--
ALTER TABLE `package_media`
  MODIFY `package_media_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `payout_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
