-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `idpass`
--

CREATE TABLE `idpass` (
  `s.no` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL,
  `class` int(11) NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idpass`
--

INSERT INTO `idpass` (`s.no`, `name`, `username`, `password`, `role_as`, `date`, `class`, `section`) VALUES
(1, 'Bhavya Dwivedi', 'dw1vedibhavya2007@gmail.com', '2412', 0, '2022-11-07 17:22:13', 10, 'C'),
(2, 'Aishwarya', 'babitahitender@gmail.com', 'Aish2007', 0, '2022-11-07 17:24:07', 10, 'C'),
(3, 'Sejal', 'Sejaly137@gmail.com ', 'SEJU0987', 0, '2022-11-07 17:24:07', 10, 'C'),
(4, 'Ayush', 'ayushmeena798@gmail.com', '9891940748', 0, '2022-11-07 17:26:11', 10, 'C'),
(5, 'Piyush', 'piyushmeena382@gmail.com', '9625341483', 0, '2022-11-07 17:26:11', 10, 'C'),
(6, 'Aditya', 'a2345aditya@gmail.com', 'adi12345676548', 0, '2022-11-07 17:28:09', 10, 'C'),
(7, 'Eshika Thakur ', 'eshikathakur2007@gmail.com', 'Pari06', 0, '2022-11-07 17:31:31', 10, 'C'),
(8, 'Harsh Shankar', 'harsh.shankar2205@gmail.com', 'Harsh@123', 0, '2022-11-07 17:32:54', 10, 'C'),
(9, 'Archana Ray', 'archanaray917@gmail.com', 'Nothing.', 0, '2022-11-07 17:32:54', 10, 'C'),
(10, 'Aditya Rana', 'adityarana2k7@gmail.com', 'Behne Do!', 0, '2022-11-07 17:34:37', 10, 'C'),
(11, 'Pradeep Kumar', 'pklgk2007@gmail.com', '{[(ab)]}', 1, '2022-11-07 17:36:30', 10, 'C'),
(12, 'Sachin Stark', 'sachinjorwal17504@gmail.com', 'SACHINMEENA', 2, '2022-11-07 17:36:30', 10, 'C'),
(13, 'Mohd Shef Ali Anshari', 'shefmd2018@gmail.com', 'SHEF@28BK21', 0, '2022-11-07 17:38:16', 10, 'C'),
(14, 'Mohd Saif Ali', 'alimohdsaif2008@gmail.com', 'saif02@sose', 0, '2022-11-07 17:38:16', 10, 'C'),
(15, 'Prince Kumar', 'prince931017kumar@gmail.com', 'sose910641', 0, '2022-11-07 17:40:50', 10, 'C'),
(16, 'avneesh', 'gautampoonam669gmail.com', 'gold digger', 0, '2022-11-07 17:40:50', 10, 'C'),
(17, 'Adityansh Ray', 'adityanshsose@gmail.com', 'adityansh@20210525835', 0, '2022-11-07 17:45:39', 10, 'C'),
(18, 'Modit Singhania', 'singhaniaModit@outlook.com', 'maddypal@2007', 1, '2022-11-07 18:35:04', 10, 'C'),
(19, 'Aryan Jha', 'aryanjha150607@gmail.com', '140707', 0, '2022-11-07 20:28:50', 10, 'C'),
(20, 'Jaya', 'Jaya082006@gmail.com', 'Jaya08', 0, '2022-11-07 20:28:50', 10, 'C'),
(21, 'Bhavya Chaudhary', '1515bhavya@gmail.com', '9868789869', 0, '2022-11-07 20:30:58', 10, 'C'),
(22, 'Rupesh Meena', 'rupeshmeena730@gmail.com', 'rupesh1122', 0, '2022-11-07 20:30:58', 10, 'C'),
(23, 'Shobhit Paul', 'shobhitpaul@gmail.com', 'mradmin', 1, '2022-11-23 15:29:26', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idpass`
--
ALTER TABLE `idpass`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idpass`
--
ALTER TABLE `idpass`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
