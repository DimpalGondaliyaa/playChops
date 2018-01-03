-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 02:07 PM
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
(2, 'sadASD', 0, 0, '', '', ''),
(3, '', 0, 0, '', '', '');

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

INSERT INTO `user_ragister` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `Birthday`, `Birthplace`, `Status`, `Lives_In`, `country`, `state`, `college`, `college_start_year`, `college_end_year`, `primaryschool`, `start_primary_year`, `end_primary_year`, `highersecondary`, `start_higher_year`, `end_higher_year`, `hobby`, `Favourite_TV_Shows`, `Favourite_Music_Bands_Artists`, `FavouriteBooks`, `FavouriteWriters`, `FavouriteMovies`, `FavouriteGames`, `OtherInterests`, `profile_photo`) VALUES
(1, 'priya', 'shah', 'priya@123', 'priya@123', 9898989899, '2 January, 2018', 'rajkot', 'merrid', 'adb', 'india', 'gujrat', 'mirambica college', '2012', '2014', 'ram krushna school', '2010', '2011', 'ram krushna', '2008', '2009', 'I like to ride the bike to work, swimming, and working out. I also like reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.', 'Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.', 'Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.', 'The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.', 'Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth.', 'Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man.', 'The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.', 'Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.', '1_userImage.jpg'),
(6, 'Dimpal', 'Gondaliya', 'priya@123', 'priya@123', 9898989899, '2 January, 2018', 'rajkot', 'merrid', 'adb', 'india', 'gujrat', 'mirambica college', '2012', '2014', 'ram krushna school', '2010', '2011', 'ram krushna', '2008', '2009', 'I like to ride the bike to work, swimming, and working out. I also like reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.', 'Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.', 'Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.', 'The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.', 'Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth.', 'Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad, Ferrum Man.', 'The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.', 'Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.', '1_userImage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buddyposts`
--
ALTER TABLE `buddyposts`
  ADD PRIMARY KEY (`post_Id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
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
  MODIFY `post_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ragister`
--
ALTER TABLE `user_ragister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
