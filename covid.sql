-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 09:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_in`
--

CREATE TABLE `admin_in` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_in`
--

INSERT INTO `admin_in` (`name`, `password`) VALUES
('tahsif', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `Password`, `country`, `gender`) VALUES
('tahsif', '', '', '', 'male'),
('tahsif', 'tahsif@gmail.com', '1010', 'Bangladesh', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `new_count`
--

CREATE TABLE `new_count` (
  `country` varchar(255) NOT NULL,
  `new_cases` varchar(255) NOT NULL,
  `new_deaths` varchar(255) NOT NULL,
  `new_recoverd` varchar(255) NOT NULL,
  `active_cases` varchar(255) NOT NULL,
  `serious` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_count`
--

INSERT INTO `new_count` (`country`, `new_cases`, `new_deaths`, `new_recoverd`, `active_cases`, `serious`) VALUES
('USA', '+43,631', '+751', '+31,059', '2,558,060', '14,188'),
('India', '+79,774', '+1,069', '+76,290', '945,918', '8,944'),
('Brazil', '+6,795', '+199', '', '498,286', '8,318'),
('Russia', '+9,412', '+186', '+6,054', '203,270', '2,300'),
('Spain', '+3,722', '+113', 'N/A', 'N/A', '1,566'),
('France', '+12,148', '+136', '+981', '459,720', '1,276'),
('UK', '+6,968', '+66 	', 'N/A', 'N/A', '341'),
('Bangladesh', '+1,396', '+33', '+1,549', '82,451', ''),
('Italy', '+2,499', '+23', '+1,126', '53,997', '294'),
('World', '+259,125', '+4,585', '+175,659', '7,890,740', '66,232');

-- --------------------------------------------------------

--
-- Table structure for table `total_count`
--

CREATE TABLE `total_count` (
  `country` varchar(100) NOT NULL,
  `total_cases` varchar(255) NOT NULL,
  `total_deaths` varchar(255) NOT NULL,
  `total_recoverd` varchar(255) NOT NULL,
  `total_test` varchar(255) NOT NULL,
  `population` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_count`
--

INSERT INTO `total_count` (`country`, `total_cases`, `total_deaths`, `total_recoverd`, `total_test`, `population`) VALUES
('Brazil', '4,856,024', '144,966', '4,212,772', '17,900,000', '212,941,524'),
('USA', '7,539,151', '213,411', '4,767,680', ' 	109,458,734', '331,494,557'),
('India', '6,471,734', '100,873 ', '5,424,943', '76,717,728', '1,383,419,254'),
(' 	Germany', '298,363', '9,596 ', '259,500', '16,999,253', '83,852,143'),
('Bangladesh', '366,383', '5,305', '278,627', '1,970,251', '165,102,254'),
('Japan', '84,215', '1,578 ', '77,219', '2,125,762 	', '126,376,879'),
('Uganda', '8,491', '79', '4,470', '486,658', '46,089,942'),
('Thailand', '3,575', '59 	', '3,384 	', '749,213', '69,844,617');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
