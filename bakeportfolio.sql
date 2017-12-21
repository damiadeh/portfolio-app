-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 06:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `logotext` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `first_paragraph` text NOT NULL,
  `second_paragraph` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone1` int(15) NOT NULL,
  `phone2` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `logotext`, `name`, `quote`, `about_heading`, `first_paragraph`, `second_paragraph`, `image`, `address`, `phone1`, `phone2`, `email`, `website`, `created`, `modified`, `phone`) VALUES
(1, 'KW', 'Ken Waribo', '#Web Development   #Game Development   #Cyber Security', 'Hi, i’m Ken Waribo, Programmer from Rivers State', 'I\'m a full stack web developer and game developer with a lot of experience. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat', 'Duis autem vel eum iriure dolorin hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.', '', '23, Trans-Amadi road, PortHarcourt', 2147483647, 2147483647, 'waribo@gmail.com', 'www.kenwaribo.com', '2017-12-16 18:46:27', '2017-12-20 17:44:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `sch_duration` varchar(255) NOT NULL,
  `sch_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school_name`, `sch_duration`, `sch_description`) VALUES
(1, 'Rivers State University', 'January 1995 - september 2016', 'orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'),
(2, 'University of Lagos', 'May 2000 - May 2005', 'Bsc Hons Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `exp_duration` varchar(255) NOT NULL,
  `exp_description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `company`, `exp_duration`, `exp_description`, `created`, `modified`) VALUES
(2, 'Microsoft', 'October 2013 - June 2014', 'orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', '2017-12-17 19:08:53', '2017-12-17 19:08:53'),
(3, 'Jumia', 'Febuary 2013 - January 2016', 'Software engineer in the company for 3 years with effective deliverty  of services and ideas that grew the company to it pressent state and brand', '2017-12-19 14:29:34', '2017-12-19 14:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20171216113804, 'CreateUsers', '2017-12-16 10:39:16', '2017-12-16 10:39:16', 0),
(20171216120934, 'CreateAdmin', '2017-12-16 11:09:53', '2017-12-16 11:09:53', 0),
(20171216123945, 'CreateExperience', '2017-12-16 11:40:21', '2017-12-16 11:40:22', 0),
(20171216124230, 'CreateEducation', '2017-12-16 11:42:50', '2017-12-16 11:42:50', 0),
(20171216124428, 'CreateTestimony', '2017-12-16 17:14:22', '2017-12-16 17:14:23', 0),
(20171216182517, 'CreateAdmin', '2017-12-16 17:25:44', '2017-12-16 17:25:44', 0),
(20171218132513, 'CreateHomepage', '2017-12-18 12:25:27', '2017-12-18 12:25:29', 0),
(20171221120041, 'Modifyphone1toProducts', '2017-12-21 11:06:01', '2017-12-21 11:06:01', 0),
(20171221120516, 'AddPhoneToAdmin', '2017-12-21 11:06:01', '2017-12-21 11:06:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `testimony` text NOT NULL,
  `testifier_name` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `testifier_profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `testimony`, `testifier_name`, `signature`, `testifier_profession`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat', 'Mr Ajayi', 'soc', 'Head Teacher, Pan AFrican');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `phone`, `created`, `modified`) VALUES
(1, 'Ken', 'Waribo', 'waribo@gmail.com', 'waribo', '$2y$10$gis94AZUTQ5IfJ/RC/6JwOx7Qa3yhUp6iyaJGBPjBLXgac/ChIJm6', 2147483647, '2017-12-16 12:13:59', '2017-12-21 08:48:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
