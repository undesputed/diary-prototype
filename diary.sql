-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 12:02 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `diary_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `diary_datecreated` date NOT NULL,
  `diary_label` varchar(225) DEFAULT NULL,
  `diary_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`diary_id`, `owner_id`, `diary_datecreated`, `diary_label`, `diary_status`) VALUES
(11, 11, '2018-09-15', 'asdasd', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `owner_lastname` varchar(255) DEFAULT NULL,
  `owner_firstname` varchar(255) DEFAULT NULL,
  `owner_mi` varchar(3) NOT NULL,
  `owner_username` varchar(255) DEFAULT NULL,
  `owner_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_lastname`, `owner_firstname`, `owner_mi`, `owner_username`, `owner_password`) VALUES
(11, 'asd', 'asdasd', 'asd', 'asd@asd', '123'),
(10, 'asd', 'asdasd', 'asd', 'asd@asd', '123'),
(9, 'asd', 'asdasd', 'asd', 'asd@asd', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `story_date` varchar(255) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `story_title` varchar(255) DEFAULT NULL,
  `story_content` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `diary_id`, `story_date`, `owner_id`, `story_title`, `story_content`) VALUES
(1, 11, '2018-09-15', 11, 'shut', ''),
(2, 11, '2018-09-15', 11, 'shut', ''),
(3, 11, '2018-09-15', 11, 'asdas', ''),
(4, 11, '2018-09-15', 11, 'asdas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diary_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `diary_id` (`diary_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
