-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwdblogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cwdblogposts`
--

CREATE TABLE `cwdblogposts` (
  `id` int(11) NOT NULL,
  `src` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `descrition` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cwdblogposts`
--

INSERT INTO `cwdblogposts` (`id`, `src`, `title`, `descrition`, `date`) VALUES
(1, 'http://localhost/cwdportfolio/IMG/webdev.png', 'How to set a variable in CSS ?', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(2, 'http://localhost/cwdportfolio/IMG/webdev.png', 'blog posting', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(4, 'http://localhost/cwdportfolio/IMG/webdev.png', 'web development', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(5, 'http://localhost/cwdportfolio/IMG/webdev.png', 'designing', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(6, 'http://localhost/cwdportfolio/IMG/webdev.png', 'Tech industry', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(7, 'http://localhost/cwdportfolio/IMG/webdev.png', 'Communication', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(8, 'http://localhost/cwdportfolio/IMG/webdev.png', '5 best ai tools', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(9, 'http://localhost/cwdportfolio/IMG/webdev.png', '10 New Twchnolgys ?', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(10, 'http://localhost/cwdportfolio/IMG/webdev.png', 'How to set a variable in CSS ?', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(11, 'http://localhost/cwdportfolio/IMG/webdev.png', 'How to set a variable in HTML ?', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(12, 'http://localhost/cwdportfolio/IMG/webdev.png', '7 Facts About JS', 'Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips', '2023-06-24'),
(13, 'http://localhost/cwdportfolio/IMG/webdev.png', 'my name is Govind Gour ', 'my name is Govind Gour and iam a profacinal programmer in front end devlopment', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cwdcontactinfo`
--

CREATE TABLE `cwdcontactinfo` (
  `sr.n` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `massage1` varchar(2000) NOT NULL,
  `massage2` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cwdcontactinfo`
--

INSERT INTO `cwdcontactinfo` (`sr.n`, `fullname`, `email`, `phone`, `massage1`, `massage2`) VALUES
(1, 'govind', 'govindgour68@gmail.c', 2147483647, 'my name is govind ', 'yes iam in'),
(2, 'amiyt', 'chsdkbvc@gmail.com', 2147483647, 'jhb lkjnm:ml:f,;, ;.', ''),
(3, 'amiyt', 'chsdkbvc@gmail.com', 2147483647, 'jhb lkjnm:ml:f,;, ;.', ''),
(4, 'sanjay', 'sanjay@4735287gmail.', 2147483647, 'hello ', 'yes hy'),
(5, 'sanjay', 'sanjay@4735287gmail.', 2147483647, 'hello ', 'yes hy'),
(6, 'deep', 'deepjaat2@gmail.com', 2147483647, 'hello govind', 'yes my name is deep');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cwdblogposts`
--
ALTER TABLE `cwdblogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cwdcontactinfo`
--
ALTER TABLE `cwdcontactinfo`
  ADD PRIMARY KEY (`sr.n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cwdblogposts`
--
ALTER TABLE `cwdblogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cwdcontactinfo`
--
ALTER TABLE `cwdcontactinfo`
  MODIFY `sr.n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
