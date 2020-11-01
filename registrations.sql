-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 05:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `name` varchar(10) NOT NULL,
  `Email` varchar(10) NOT NULL,
  `Mobile_no` decimal(10,0) NOT NULL,
  `seats` text NOT NULL,
  `reason` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `No_of_members` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Comment` text NOT NULL,
  `Time Stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`name`, `Email`, `Mobile_no`, `seats`, `reason`, `Gender`, `No_of_members`, `Type`, `Comment`, `Time Stamp`) VALUES
('adsad', 'adsd@dadad', '0', '9632587415', 45, 'Male', 5, 'Ballet', '456454', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
