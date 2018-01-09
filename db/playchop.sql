-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 10:28 AM
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
  `postTime` varchar(255) NOT NULL,
  `postDate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postType` varchar(255) NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_location` text NOT NULL,
  `postTag` text NOT NULL,
  `post_attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buddyposts`
--

INSERT INTO `buddyposts` (`post_Id`, `postData`, `postTime`, `postDate`, `email`, `postType`, `post_status`, `post_location`, `postTag`, `post_attachment`) VALUES
(1, '', '04:17:pm', 'January 8, 2018', 'riya', 'status', 1, '', '', '1_postImage.jpg'),
(2, '', '04:17:pm', 'January 8, 2018', 'riya', 'status', 1, '', '', '2_postImage.jpg'),
(3, '', '04:27:pm', 'January 8, 2018', 'riya', 'status', 1, '', '', '3_postImage.jpg'),
(4, 'fgffg', '05:30:pm', 'January 8, 2018', 'riya', 'status', 1, '', '', ''),
(5, '', '06:41:pm', 'January 8, 2018', 'priya@123', 'status', 1, '', '', '5_postImage.jpg'),
(6, '', '06:45:pm', 'January 8, 2018', 'riya123', 'status', 1, '', '', '6_postImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commenttbl`
--

CREATE TABLE `commenttbl` (
  `id` int(11) NOT NULL,
  `post_id` int(12) NOT NULL,
  `email` varchar(222) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttbl`
--

INSERT INTO `commenttbl` (`id`, `post_id`, `email`, `comment`) VALUES
(1, 2, '', ''),
(2, 1, '', ''),
(3, 3, '', 'dfdfd'),
(4, 2, '', ''),
(5, 3, '', 'dfdfd'),
(6, 2, '', 'dfdfd'),
(7, 1, '', 'dfdfd'),
(8, 3, '', ''),
(9, 0, '', ''),
(10, 0, '', ''),
(11, 0, '', ''),
(12, 0, '', ''),
(13, 0, '', ''),
(14, 0, '', ''),
(15, 2, '', ''),
(16, 0, '', ''),
(17, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `user_id` int(12) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `About_Me` varchar(222) NOT NULL,
  `Birthday` varchar(222) NOT NULL,
  `Birthplace` varchar(222) NOT NULL,
  `Lives_In` varchar(222) NOT NULL,
  `Occupation` varchar(222) NOT NULL,
  `Joined` varchar(222) NOT NULL,
  `Status` varchar(222) NOT NULL,
  `Website` varchar(222) NOT NULL,
  `Religious_Belifs` varchar(222) NOT NULL,
  `Political_Incline` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userliks`
--

CREATE TABLE `userliks` (
  `id` int(5) NOT NULL,
  `post_id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userliks`
--

INSERT INTO `userliks` (`id`, `post_id`, `email`, `rate`, `status`) VALUES
(1, 6, '', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_ragister`
--

CREATE TABLE `user_ragister` (
  `id` int(11) NOT NULL,
  `fname` varchar(233) NOT NULL,
  `lname` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  `mobile` bigint(23) NOT NULL,
  `Birthday` varchar(233) NOT NULL,
  `Birthplace` varchar(233) NOT NULL,
  `Status` varchar(233) NOT NULL,
  `about_me` varchar(244) NOT NULL,
  `Occupation` varchar(222) NOT NULL,
  `Joined` varchar(222) NOT NULL,
  `Website` varchar(222) NOT NULL,
  `Lives_In` varchar(255) NOT NULL,
  `country` varchar(233) NOT NULL,
  `state` varchar(233) NOT NULL,
  `college` varchar(222) NOT NULL,
  `college_start_year` varchar(233) NOT NULL,
  `college_end_year` varchar(233) NOT NULL,
  `primaryschool` varchar(233) NOT NULL,
  `start_primary_year` varchar(233) NOT NULL,
  `end_primary_year` varchar(233) NOT NULL,
  `highersecondary` varchar(233) NOT NULL,
  `start_higher_year` varchar(233) NOT NULL,
  `end_higher_year` varchar(233) NOT NULL,
  `hobby` varchar(233) NOT NULL,
  `OtherInterests` varchar(233) NOT NULL,
  `profile_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ragister`
--

INSERT INTO `user_ragister` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `Birthday`, `Birthplace`, `Status`, `about_me`, `Occupation`, `Joined`, `Website`, `Lives_In`, `country`, `state`, `college`, `college_start_year`, `college_end_year`, `primaryschool`, `start_primary_year`, `end_primary_year`, `highersecondary`, `start_higher_year`, `end_higher_year`, `hobby`, `OtherInterests`, `profile_photo`) VALUES
(1, 'riya', 'shah', 'riya@123', 'riya', 9898989899, '21 January, 2018', 'abd', 'marrid', '', '', '', '', 'abd', 'india', 'gujrat', '', '', '', '', '', '', '', '', '', 'event,movies,', '', '1_userImage.png'),
(2, 'maya', 'shah', 'maya@123', 'maya', 989898100, '1 January, 2018', 'abd', 'marrid', '', '', '', '', 'abd', 'india', 'gujrat', '', '', '', '', '', '', '', '', '', 'event,movies,', '', '2_postImage.png'),
(3, 'anita', 'shah', 'anu@123', 'anu', 989898100, '1 January, 2018', 'abd', 'marrid', '', '', '', '', 'abd', 'india', 'gujrat', '', '', '', '', '', '', '', '', '', 'travileng', '', '5_postImage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buddyposts`
--
ALTER TABLE `buddyposts`
  ADD PRIMARY KEY (`post_Id`);

--
-- Indexes for table `commenttbl`
--
ALTER TABLE `commenttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userliks`
--
ALTER TABLE `userliks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ragister`
--
ALTER TABLE `user_ragister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buddyposts`
--
ALTER TABLE `buddyposts`
  MODIFY `post_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commenttbl`
--
ALTER TABLE `commenttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userliks`
--
ALTER TABLE `userliks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_ragister`
--
ALTER TABLE `user_ragister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
