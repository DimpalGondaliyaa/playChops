-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 12:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playchop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buddyposts`
--

CREATE TABLE `buddyposts` (
  `post_Id` int(5) NOT NULL,
  `postData` text NOT NULL,
  `postType` int(255) NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_location` text NOT NULL,
  `postTag` text NOT NULL,
  `post_attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buddyposts`
--

INSERT INTO `buddyposts` (`post_Id`, `postData`, `postType`, `post_status`, `post_location`, `postTag`, `post_attachment`) VALUES
(1, '', 0, 0, '', '', ''),
(2, 'sadASD', 0, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buddyposts`
--
ALTER TABLE `buddyposts`
  ADD PRIMARY KEY (`post_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buddyposts`
--
ALTER TABLE `buddyposts`
  MODIFY `post_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
