-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 02:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musa`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`) VALUES
(1, 'sales'),
(2, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-05-18-184349', 'App\\Database\\Migrations\\Users', 'default', 'App', 1652899715, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prority`
--

CREATE TABLE `prority` (
  `id` int(11) NOT NULL,
  `prorityName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prority`
--

INSERT INTO `prority` (`id`, `prorityName`) VALUES
(1, 'height'),
(2, 'meduim'),
(3, 'low');

-- --------------------------------------------------------

--
-- Table structure for table `repalyticket`
--

CREATE TABLE `repalyticket` (
  `rid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `repalyTicket` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `updateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statuss`
--

CREATE TABLE `statuss` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuss`
--

INSERT INTO `statuss` (`sid`, `name`) VALUES
(1, 'notanswered'),
(2, 'progress'),
(3, 'answered');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `departMentId` int(11) DEFAULT NULL,
  `propity_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleProblem` varchar(255) DEFAULT NULL,
  `problemDescription` text,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `customerName`, `user_id`, `departMentId`, `propity_id`, `status_id`, `titleProblem`, `problemDescription`, `createdAt`) VALUES
(2, 'Amin', 1, 1, 1, 1, ';lslslslls', ',,mmcmcmmsmcmm', NULL),
(5, 'Alaeldin', NULL, 1, 1, 1, 'kskkskskksks', 'kdkdkdkd', NULL),
(9, 'Alaeldin', NULL, 1, 1, 1, 'kskkskskksks', 'kdkdkdkd', NULL),
(12, 'mdmdm', NULL, 1, 1, 3, 'kdfkdkdk', 'mfmf,,ff,', NULL),
(20, 'mnsmms', NULL, 1, 2, 1, ',lalallala', 'jjjjjsssjjsjsjj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstNameUser` varchar(250) DEFAULT NULL,
  `lastNameUser` varchar(250) NOT NULL,
  `emailUser` varchar(250) NOT NULL,
  `password` varchar(1234) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstNameUser`, `lastNameUser`, `emailUser`, `password`) VALUES
(1, 'Alaeldin', 'Musa', 'alaeldinmusa91@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prority`
--
ALTER TABLE `prority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repalyticket`
--
ALTER TABLE `repalyticket`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `statuss`
--
ALTER TABLE `statuss`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `departMentId` (`departMentId`),
  ADD KEY `propity_id` (`propity_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prority`
--
ALTER TABLE `prority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repalyticket`
--
ALTER TABLE `repalyticket`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`departMentId`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`propity_id`) REFERENCES `prority` (`id`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `statuss` (`sid`),
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
