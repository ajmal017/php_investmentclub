-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 01:00 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `qualified_btree`
--

CREATE TABLE `qualified_btree` (
  `id` int(20) NOT NULL,
  `ownid` varchar(20) NOT NULL,
  `sponsorid` varchar(20) NOT NULL,
  `placementid` varchar(20) NOT NULL,
  `placement` varchar(20) NOT NULL,
  `leftmember` varchar(20) NOT NULL,
  `rightmember` varchar(20) NOT NULL,
  `createddate` datetime NOT NULL,
  `active` tinyint(2) NOT NULL,
  `entry` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualified_btree`
--

INSERT INTO `qualified_btree` (`id`, `ownid`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `createddate`, `active`, `entry`) VALUES
(1, '140619007007', '', '', '', '140809007008', '140809007009', '2014-08-09 15:28:45', 0, 1),
(5, '140809007008', '140619007007', '140619007007', 'Left', '140809007010', '140809007011', '0000-00-00 00:00:00', 0, 1),
(6, '140809007009', '140619007007', '140619007007', 'Right', '140809007012', '140809007013', '0000-00-00 00:00:00', 0, 1),
(7, '140809007010', '140809007008', '140809007008', 'Left', '140809007014', '140816007015', '0000-00-00 00:00:00', 0, 1),
(8, '140809007011', '140809007008', '140809007008', 'Right', '140819007016', '140819007017', '0000-00-00 00:00:00', 0, 1),
(9, '140809007012', '140809007008', '140809007009', 'Left', '140819007018', '140819007019', '0000-00-00 00:00:00', 0, 1),
(10, '140809007013', '140619007007', '140809007009', 'Right', '140820007020', '140820007021', '0000-00-00 00:00:00', 0, 1),
(11, '140809007014', '140619007007', '140809007010', 'Left', '2312312312', '', '0000-00-00 00:00:00', 0, 1),
(12, '140816007015', '140619007007', '140809007010', 'Right', '', '', '0000-00-00 00:00:00', 0, 1),
(13, '140819007016', '140809007013', '140809007011', 'Left', '', '', '0000-00-00 00:00:00', 0, 1),
(14, '140819007017', '140809007012', '140809007011', 'Right', '', '', '0000-00-00 00:00:00', 0, 1),
(15, '140819007018', '140809007012', '140809007012', 'Left', '', '', '0000-00-00 00:00:00', 0, 1),
(16, '140819007019', '140819007018', '140809007012', 'Right', '', '', '0000-00-00 00:00:00', 0, 1),
(17, '140820007020', '140619007007', '140809007013', 'Left', '', '', '0000-00-00 00:00:00', 0, 1),
(18, '140820007021', '140619007007', '140809007013', 'Right', '', '', '0000-00-00 00:00:00', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualified_btree`
--
ALTER TABLE `qualified_btree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualified_btree`
--
ALTER TABLE `qualified_btree`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
