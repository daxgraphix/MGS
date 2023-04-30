-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 06:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MGS`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `subject` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `division`, `subject`) VALUES
(1, 'kisiju', 'mambo'),
(2, 'mkuranga', 'wozaa'),
(3, 'kisiju', 'nakubali'),
(4, 'mkuranga', 'sdcedqwd23d'),
(5, 'shungubweni', ''),
(6, 'mkamba', 'fddss'),
(7, 'kisiju', 'gfds'),
(8, 'mkamba', 'fddsss'),
(9, 'shungubweni', 'testing 1'),
(10, 'shungubweni', 'dsfffds'),
(11, 'kisiju', 'testing 3'),
(12, 'mkuranga', 'wetuuu'),
(13, 'kisiju', 'aa'),
(14, 'mkamba', 'presentation');

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int(11) NOT NULL,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(1, 12, 'in process', 'saw', '2022-07-07 11:34:35'),
(2, 12, 'closed', 'hamna kitu', '2022-07-07 12:19:10'),
(3, 19, 'closed', 'nilikosea', '2022-07-07 12:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaintNumber` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `division` int(11) NOT NULL,
  `ward` int(11) NOT NULL,
  `complaintDetails` mediumtext NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaintNumber`, `userid`, `usertype`, `division`, `ward`, `complaintDetails`, `regDate`, `status`, `lastUpdationDate`) VALUES
(9, 4, 'ward', 0, 0, '', '2022-07-06 17:56:32', '', NULL),
(10, 4, 'ward', 0, 0, '', '2022-07-06 17:56:50', '', NULL),
(11, 4, 'ward', 0, 0, '', '2022-07-06 18:03:19', '', NULL),
(12, 4, 'ward', 2, 0, 'oyyy', '2022-07-07 12:19:10', 'closed', NULL),
(13, 4, 'ward', 0, 0, '', '2022-07-06 18:06:52', '', NULL),
(14, 4, 'ward', 0, 0, '', '2022-07-06 18:08:15', '', NULL),
(15, 4, 'ward', 0, 0, '', '2022-07-06 18:08:52', '', NULL),
(16, 4, 'ward', 2, 0, 'hyaaaa', '2022-07-06 18:20:56', '', NULL),
(17, 4, 'ward', 2, 2, 'uwjjshhjs', '2022-07-06 18:36:15', '', NULL),
(19, 3, 'village', 3, 2, 'village mm', '2022-07-07 12:20:55', 'closed', NULL),
(20, 4, 'ward', 4, 2, 'ward mm', '2022-07-06 18:50:33', '', NULL),
(21, 5, 'division', 3, 2, 'division mm', '2022-07-06 18:51:18', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `divisionName` varchar(255) NOT NULL,
  `divisionDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `divisionName`, `divisionDescription`, `creationDate`, `updationDate`) VALUES
(1, 'mkuranga', '', '2022-07-06 18:01:31', ''),
(3, 'mkamba', '', '2022-07-06 18:02:12', ''),
(4, 'shungubweni', '', '2022-07-06 18:02:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`, `status`) VALUES
(1, 'admin', 123456, 'admin@gmail.com', 'admin', '12345', 1),
(3, 'village', 12345678, 'village@gmail.com', 'village', '12345', 0),
(4, 'ward', 12345678, 'ward@gmail.com', 'ward', '12345', 0),
(5, 'division', 123456789, 'division@gmail.com', 'division', '12345', 0),
(21, 'hamlet', 12345, 'hamlet@gmail.com', 'hamlet', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(11) NOT NULL,
  `divisionid` int(11) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `divisionid`, `ward`, `creationDate`, `updationDate`) VALUES
(1, 1, 'kimanzichana', '2022-07-06 18:30:51', ''),
(2, 1, 'mkamba', '2022-07-06 18:33:51', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaintNumber` (`complaintNumber`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaintNumber`),
  ADD KEY `userid` (`userid`),
  ADD KEY `division` (`division`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisionid` (`divisionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaintNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD CONSTRAINT `complaintremark_ibfk_1` FOREIGN KEY (`complaintNumber`) REFERENCES `complaints` (`complaintNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`divisionid`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
