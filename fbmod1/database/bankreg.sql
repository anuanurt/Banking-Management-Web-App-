-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 02:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `breg`
--

CREATE TABLE `breg` (
  `accno` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breg`
--

INSERT INTO `breg` (`accno`, `name`, `surname`, `email`, `password`, `date`, `month`, `year`, `gender`, `balance`) VALUES
('202920', '', '', '', '', '', '', '', '', 0),
('258325', 'akash ', 'dutta', 'ad8087166@gmail.com', '9830akas', '10', 'sep', '2003', 'Male', 18000),
('52219', '', '', '', '', '', '', '', '', 0),
('81738', '', '', '', '', '', '', '', '', 0),
('417212', '', '', '', '', '', '', '', '', 0),
('264239', '', '', '', 'L.vXsjxTc2h}4L*', '1', 'jan', 'above 2000', '', 0),
('311699', 'mohon', 'das', 'abc@gmail.com', '9830akas', '7', 'mar', '2002', 'Male', 10000),
('145485', 'akki', 'dem', 'akki99@gmail.com', '9900', '1', 'oct', '2003', 'Male', 50),
('266808', 'akki ', 'dem', 'akki22@gmail.com', '98akki', '14', 'may', '2003', 'Male', 50),
('428612', 'pranab', 'das', 'pn200@gmail.com', '99008833', '3', 'apr', '2001', 'Male', 8950);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `depositer` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`depositer`, `date`, `amount`) VALUES
('ad8087166@gmail.com', '2023-10-17', 9000),
('ad8087166@gmail.com', '2023-10-17', 5000),
('abc@gmail.com', '2023-10-17', 5000),
('pn200@gmail.com', '2023-10-17', 8900),
('ad8087166@gmail.com', '2023-10-18', 6000),
('ad8087166@gmail.com', '2023-10-24', 500),
('ad8087166@gmail.com', '2023-10-24', 500),
('ad8087166@gmail.com', '2023-10-24', 500),
('ad8087166@gmail.com', '2023-10-24', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `sender` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `reciver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`sender`, `date`, `amount`, `reciver`) VALUES
('ad8087166@gmail.com', '2023-10-18', 690, 'abc@gmail.com'),
('ad8087166@gmail.com', '2023-10-21', 500, 'abc@gmail.com'),
('ad8087166@gmail.com', '2023-10-21', 400, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdrawer` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
