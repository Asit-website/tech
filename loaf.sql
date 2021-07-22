-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2021 at 06:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `commen`
--

CREATE TABLE `commen` (
  `comment_id` int(12) NOT NULL,
  `comment_content` text NOT NULL,
  `blog_id` int(12) NOT NULL,
  `comment_by` int(13) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commen`
--

INSERT INTO `commen` (`comment_id`, `comment_content`, `blog_id`, `comment_by`, `comment_time`) VALUES
(1, 'hi', 1, 1, '2021-07-18 13:22:13'),
(110, '  good', 18, 16, '2021-07-18 13:22:39'),
(111, '  hi', 2, 16, '2021-07-18 17:52:58'),
(112, '  hi', 19, 16, '2021-07-18 18:06:14'),
(113, '  hi', 19, 16, '2021-07-18 18:06:33'),
(114, '  hi', 19, 16, '2021-07-18 18:07:40'),
(115, '  hi', 19, 16, '2021-07-18 18:16:43'),
(116, '  ha sikh sakti ho for learning purpose', 20, 16, '2021-07-18 23:27:46'),
(117, '  hora', 18, 15, '2021-07-19 13:04:57'),
(118, '  thank u mr for advice', 20, 15, '2021-07-19 14:57:52'),
(119, '  yes sir sikh sakte ho bilkul', 21, 15, '2021-07-19 21:33:15'),
(120, '  hi', 22, 15, '2021-07-21 22:59:19'),
(121, '  good', 22, 16, '2021-07-22 22:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `confess`
--

CREATE TABLE `confess` (
  `sno` int(11) NOT NULL,
  `des` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confess`
--

INSERT INTO `confess` (`sno`, `des`, `timestamp`) VALUES
(1, 'i love you', '2021-07-14 18:55:14'),
(2, 'i htae u', '2021-07-14 19:12:28'),
(3, 'i htae u', '2021-07-14 19:12:51'),
(4, 'we', '2021-07-14 19:13:41'),
(5, '', '2021-07-14 19:33:19'),
(6, '', '2021-07-14 19:33:26'),
(7, 'i love you', '2021-07-15 20:32:58'),
(8, 'i love you', '2021-07-15 20:33:04'),
(9, 'i love you', '2021-07-18 17:53:42'),
(10, '', '2021-07-18 18:02:28'),
(11, '', '2021-07-22 15:13:12'),
(12, '', '2021-07-22 15:14:54'),
(13, '', '2021-07-22 15:15:20'),
(14, '', '2021-07-22 15:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `times` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sno`, `name`, `email`, `phone`, `gender`, `description`, `times`) VALUES
(1, 'as', 'ek@123.com', 1, 'male', 'thi sis ', '2021-07-14 12:56:06'),
(2, 'Asit Mandal', 'am9519492@gmail', 12, 'tr', 'gh', '2021-07-14 13:08:56'),
(3, 'Asit Mandal', 'am9519492@gmail', 12, 'tr', 'gh', '2021-07-14 13:09:53'),
(4, 'hi', 'gg@123', 23, 'female', 'yyy', '2021-07-14 19:21:49'),
(5, 'hi', 'gg@123', 23, 'female', 'yyy', '2021-07-14 19:23:09'),
(6, 'hi', 'gg@123', 23, 'female', 'yyy', '2021-07-14 19:23:30'),
(7, 'sona', 'asitmandal492@g', 23, 'female', 'hi', '2021-07-14 23:15:40'),
(8, '', '', 0, '', '', '2021-07-15 22:49:12'),
(9, '', '', 0, '', '', '2021-07-15 22:50:16'),
(10, '', '', 0, '', '', '2021-07-15 22:50:20'),
(11, 'Asit Mandal', 'asitmandal492@g', 12, 'male', 'hi', '2021-07-21 20:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_tit` varchar(15) NOT NULL,
  `event_desc` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_tit`, `event_desc`, `dt`) VALUES
(1, 'Events', 'click here for events.', '2021-07-14 12:43:29'),
(2, 'Events', 'Here You See Upcoming events.', '2021-07-14 12:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `college` text NOT NULL,
  `branch` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `name`, `email`, `college`, `branch`, `description`, `time`) VALUES
(1, 'sumit', 'as@4.com', 'indra', 'EEE', 'good', '2021-07-14 07:02:42'),
(2, 're', 'rt@3', 'hindi college', 'EEE', 'good', '2021-07-14 13:03:44'),
(3, 're', 'rt@3', 'hindi college', 'EEE', 'good', '2021-07-14 13:07:40'),
(4, 're', 'rt@3', 'hindi college', 'EEE', 'good', '2021-07-14 13:08:04'),
(5, 'g', '', '', '', '', '2021-07-14 13:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(12) NOT NULL,
  `reply_content` text NOT NULL,
  `comment_id` int(12) NOT NULL,
  `reply_by` int(12) NOT NULL,
  `reply_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `reply_content`, `comment_id`, `reply_by`, `reply_time`) VALUES
(1, 'good', 1, 1, '2021-07-18 19:36:48'),
(12, 'The history of Indian Railways dates back to over 160 years ago. On 16th April 1853, the first passenger train ran between Bori Bunder (Bombay) and Thane, a distance of 34 km. It was operated by three locomotives, named Sahib, Sultan and Sindh, and had thirteen carriages.', 113, 16, '2021-07-18 23:19:49'),
(13, 'The history of Indian Railways dates back to over 160 years ago. On 16th April 1853, the first passenger train ran between Bori Bunder (Bombay) and Thane, a distance of 34 km. It was operated by three locomotives, named Sahib, Sultan and Sindh, and had thirteen carriages.', 113, 16, '2021-07-18 23:20:25'),
(14, 'ok', 110, 16, '2021-07-18 23:22:50'),
(15, 'yes', 112, 15, '2021-07-18 23:25:15'),
(16, 'bilkul yes why not', 116, 16, '2021-07-18 23:28:30'),
(17, 'bolo dost', 117, 15, '2021-07-19 13:05:14'),
(18, 'welcome', 118, 15, '2021-07-19 14:58:13'),
(19, 'sona ap vi sikh lo', 119, 16, '2021-07-19 21:34:29'),
(20, 'ooo', 121, 16, '2021-07-22 22:13:02'),
(21, '', 121, 16, '2021-07-22 22:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(15) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`blog_id`, `blog_title`, `blog_desc`, `blog_user_id`, `timestamp`) VALUES
(1, 'love for', 'good to see', 1, '2021-07-19 20:50:57'),
(21, 'python', 'is python best?', 19, '2021-07-19 21:31:49'),
(22, 'hi', 'dost', 15, '2021-07-21 22:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `userval`
--

CREATE TABLE `userval` (
  `sno` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `timest` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userval`
--

INSERT INTO `userval` (`sno`, `username`, `password`, `timest`) VALUES
(1, 'pi', '$2y$10$MWmYi0F6h953M7KNvqj5Q.HAgw2zYT84aPbFmutPLDWbor.sz/6sK', '2021-07-14 12:48:42'),
(2, 'm', '$2y$10$6t62bqZZclLmNC2Z0Qh0b.WzMv1za5RGif8M8oulw0nOgOfRU9M4i', '2021-07-14 13:13:42'),
(3, 's', '$2y$10$Jzh.1veesTUW/Jf2/0XRnuh9btpboXAcqM34T9QUdCKZr7DLK.HWa', '2021-07-14 13:25:58'),
(4, 'rt', '$2y$10$PIsTJQpqHVnqVd3bt4pz/ucRkg9wGYKyOVncMSTEyHh74twVanyXO', '2021-07-14 13:27:15'),
(5, 'mt', '$2y$10$ujrsisy506untYZK94N52.QDdQDpzyFhmKpUqGlDQEsc6AXRg9KaK', '2021-07-14 13:31:27'),
(6, 'ew', '$2y$10$ymGT8kbcrMIWv/ojhvcjoeuCdBLdvZRxP9XFjaRJdGe0oR6L5A.au', '2021-07-14 13:34:03'),
(7, 'ra', '$2y$10$2go4CVvpaZmQz094bM9aKOOXfHpsSYZakHxj7NJYluEVUv/4XN0p6', '2021-07-14 14:51:00'),
(8, 'p', '$2y$10$DLPae3hI49vHa1EUThNxLejxQuPFWYk1nl.Ub6zvXuCavBcOOIPfS', '2021-07-14 15:34:57'),
(9, 'sumit', '$2y$10$.dIuTImjoEVVDrK2TROuUOKeMLclSYWj.YZWwmDk1w.J31lkoTer.', '2021-07-14 15:49:27'),
(10, 't5', '$2y$10$FIwi7T.S5G5Jkh6G5KuI5eHYhmu0TNiT1Be6NuEFc9ggMIxV4z31C', '2021-07-14 17:41:20'),
(11, 'em', '$2y$10$K.M3Ggk1kude7c3TibmwG.j3qoCWYfLttY86DVc.mplX5qVLiyCI.', '2021-07-14 18:45:27'),
(12, 'mysir', '$2y$10$bAV8KCgrKjKZ0Xbg8Ds7..CzLuh.cmCyb35f6j4e5e3wDCAucMJRe', '2021-07-14 20:21:18'),
(13, 'sit', '$2y$10$0RuoTSUdAtiklSoNCu0ke.4AclTABFbNmii5uTeVQWVc06YJeVfUi', '2021-07-14 23:01:55'),
(14, 'try', '$2y$10$ve91itDcqX.ElvrMRbrDKeJ0RjxlMC5JpeQYKC2tUIbG0nqpl5lGi', '2021-07-14 23:06:25'),
(15, 'sona', '$2y$10$9sILa0zyi2ovl6A6N2pmNO1/iLu1pqraoPOwUw8uwqrG.erT8PnAS', '2021-07-14 23:16:13'),
(16, 'mr', '$2y$10$WEWO7jBAkZsWVJLo8yML6.YyWCwzfXhqwkG4DC/m4PysIIxxrzX8q', '2021-07-16 18:58:36'),
(17, 'priya', '$2y$10$3/Nk.1cT9NUU6aTCH59IwOxF06GQGeUcWfcgZnNghsQyK4aRhxcMq', '2021-07-19 17:44:15'),
(18, 'hi', '$2y$10$Qxt.vjhCd1KSrs1JTc/XZeoZ3WMf0enuB5hin7pPTY/udXx81SgVu', '2021-07-19 18:04:39'),
(19, 'mr sing', '$2y$10$c5CPVHRlT1JhP14NlLc1O.6I8N5cPdraEvftJvhpSFKWheuLbHAp.', '2021-07-19 20:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commen`
--
ALTER TABLE `commen`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `confess`
--
ALTER TABLE `confess`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `userval`
--
ALTER TABLE `userval`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commen`
--
ALTER TABLE `commen`
  MODIFY `comment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `confess`
--
ALTER TABLE `confess`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userval`
--
ALTER TABLE `userval`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
