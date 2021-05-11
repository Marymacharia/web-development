-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 06:04 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(255) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `email` varchar(20) NOT NULL,
  `countrycode` varchar(4) NOT NULL,
  `phonenumber` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `firstName`, `lastName`, `Gender`, `email`, `countrycode`, `phonenumber`) VALUES
(3, 'Marcus', 'Dj', 'male', 'WAWESHDJ@GMAIL.COM', '+254', 2147483647),
(5, 'alvin', 'chipmunk', 'male', 'alv@gmail.com', '+254', 1234566543),
(6, 'JOSHUA', 'Marc', 'male', 'joshu@gmail', '+254', 1234566737),
(7, 'mary', 'mary', 'female', 'mary@gmail.com', '+254', 434251688),
(8, 'Kirsten', 'K', 'female', 'k@gmail.com', '254', 14141414),
(9, 'Preston', 'J', 'male', 'press@gmail.com', '+254', 765434567),
(10, 'Mercy', 'M', 'female', 'mercy@gmail.com', '+254', 7654345),
(11, 'Loise', 'L', 'female', 'L@gmail.com', '+255', 2147483647),
(12, 'Cyprian', 'Mavindu', 'male', 'cm@gmail.com', '+254', 845362728);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
