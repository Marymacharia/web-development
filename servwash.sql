-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 06:03 PM
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
-- Database: `carserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `servwash`
--

CREATE TABLE `servwash` (
  `id` int(255) NOT NULL,
  `carModel` varchar(50) NOT NULL,
  `carColor` varchar(50) NOT NULL,
  `carPlate` varchar(50) NOT NULL,
  `carType` varchar(50) NOT NULL,
  `checkservice` varchar(255) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servwash`
--

INSERT INTO `servwash` (`id`, `carModel`, `carColor`, `carPlate`, `carType`, `checkservice`, `PaymentMethod`) VALUES
(1, 'MitsEvo', 'Red', 'KAR 335B', 'Sedan', 'Body Washing', 'Mpesa'),
(2, 'Subaru Impreza', 'Blue', 'KAS 777B', 'Sedan', 'Engine Washing', 'AirtelMoney'),
(5, 'FORD MONDEO', 'SILVER', 'KAW 999X', 'Convertible', 'Interior Cleaning', 'Mpesa'),
(6, 'TOYOTA HARRIER', 'WHITE', 'KBH 111 T', 'SUV', 'Body Washing', 'Mpesa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servwash`
--
ALTER TABLE `servwash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servwash`
--
ALTER TABLE `servwash`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
