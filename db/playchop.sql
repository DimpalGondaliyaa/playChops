-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 09:53 AM
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
(1, 'qqq', '02:08:pm', 'January 6, 2018', 'abc@me.com', 'status', 1, '', '', '1_postImage.jpg'),
(2, '', '02:21:pm', 'January 6, 2018', 'abc@me.com', 'status', 1, '', '', '2_postImage.jpg');

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
(1, 1, 'abc@me.com', 'meeeeeee'),
(2, 1, 'abc@me.com', 'meeeeeee'),
(3, 1, 'abc@me.com', 'meeeeeee'),
(4, 1, 'abc@me.com', 'meeeeeee'),
(5, 1, 'abc@me.com', 'meeeeeee'),
(6, 1, 'abc@me.com', 'meeeeeee'),
(7, 1, 'abc@me.com', 'meeeeeee'),
(8, 1, 'abc@me.com', 'meeeeeee'),
(9, 1, 'abc@me.com', 'meeeeeee'),
(10, 1, 'abc@me.com', 'meeeeeee'),
(11, 1, 'abc@me.com', 'meeeeeee'),
(12, 1, 'abc@me.com', 'meeeeeee'),
(13, 1, 'abc@me.com', 'meeeeeee'),
(14, 1, 'abc@me.com', 'qqqqqq'),
(15, 1, 'abc@me.com', 'dddddd'),
(16, 1, 'abc@me.com', 'rrrrrrr'),
(17, 1, 'abc@me.com', 'fdfdfd');

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
  `likes` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Favourite_TV_Shows` varchar(233) NOT NULL,
  `Favourite_Music_Bands_Artists` varchar(233) NOT NULL,
  `FavouriteBooks` varchar(233) NOT NULL,
  `FavouriteWriters` varchar(233) NOT NULL,
  `FavouriteMovies` varchar(233) NOT NULL,
  `FavouriteGames` varchar(232) NOT NULL,
  `OtherInterests` varchar(233) NOT NULL,
  `profile_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ragister`
--

INSERT INTO `user_ragister` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `Birthday`, `Birthplace`, `Status`, `about_me`, `Occupation`, `Joined`, `Website`, `Lives_In`, `country`, `state`, `college`, `college_start_year`, `college_end_year`, `primaryschool`, `start_primary_year`, `end_primary_year`, `highersecondary`, `start_higher_year`, `end_higher_year`, `hobby`, `Favourite_TV_Shows`, `Favourite_Music_Bands_Artists`, `FavouriteBooks`, `FavouriteWriters`, `FavouriteMovies`, `FavouriteGames`, `OtherInterests`, `profile_photo`) VALUES
(3, 'riya', 'shah', 'abc@me.com', '123', 0, '  Hi, I’m James, I’m 36 and I work as a Digital Designer for the “Daydreams” Agency in Pier resrdrererererterererer', '         abd', '         marrid', '  Hi, I’m James, I’m 36 and I work as a Digital sdsdsDesigner for the “Daydreams” Agency in Pier resrdrererererterererer', 'UI/UX Designer', ' April 31st, 2014', '', '         abd', 'ffdfd', 'fdfd', 'dfdfdfdwwwwwwwwww', 'fdfdfdfdfdf', 'dfdfdfdfd', 'fdfdf', 'dfdfddfdfdfd', 'dfdfdfdfdsdsd', 'fdfd', 'sadsd', 'fdfdfdfd', 'eerere', 'rtererer', 'dfdfdfrererer', 'rtrterererer', 'rtrtr', 'trtrererere', 'trtrdsdssd', 'trtrtr', '2_userImage.jpg'),
(4, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4_userImage.');

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
  MODIFY `post_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ragister`
--
ALTER TABLE `user_ragister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
