-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2019 at 10:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upliftdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagestb`
--

CREATE TABLE `messagestb` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messagestb`
--

INSERT INTO `messagestb` (`id`, `msg`, `date`, `name`) VALUES
(2, ' comer', '2019-09-23 17:28:09', 'Rapheal Augustine'),
(4, ' whats up', '2019-09-23 17:47:28', 'Rapheal Augustine'),
(5, ' how are you', '2019-09-23 18:13:23', 'Rapheal Augustine'),
(6, ' hello boo\r\n', '2019-09-24 09:54:41', 'Rapheal Augustine'),
(7, ' whats up with', '2019-09-24 09:55:34', 'Rapheal Augustine'),
(8, ' wheytin dey sup', '2019-09-24 09:56:14', 'Rapheal Augustine'),
(9, ' iusfiusfhoi;sfifihsodhiopsdpofkmopskjhp[kjpdf\r\n', '2019-09-24 09:56:42', 'Rapheal Augustine'),
(10, ' ', '2019-09-24 09:56:47', 'Rapheal Augustine');

-- --------------------------------------------------------

--
-- Table structure for table `patienttb`
--

CREATE TABLE `patienttb` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Images` blob NOT NULL,
  `Pwd` varchar(250) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `email`, `Images`, `Pwd`, `gender`, `likes`) VALUES
(4, 'Rapheal', 'Augustine', '090', 'adeyinkaadedeji07@gmail.com', '', '12345678', 'Male', 0),
(5, 'Rapheal', 'Augustine', 'name', 'augustinerapheal@yahoo.com', '', '123456789bcmb', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagestb`
--
ALTER TABLE `messagestb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patienttb`
--
ALTER TABLE `patienttb`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagestb`
--
ALTER TABLE `messagestb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patienttb`
--
ALTER TABLE `patienttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
