-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 07:33 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `css` tinyint(1) NOT NULL,
  `html` tinyint(1) NOT NULL,
  `javascript` tinyint(1) NOT NULL,
  `php` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`emp_id`, `emp_name`, `emp_gender`, `status`, `address`, `phone_number`, `css`, `html`, `javascript`, `php`) VALUES
(3, 'kalana', '1', '1', 'Matara', '0715468789', 1, 1, 0, 0),
(7, 'Tahmila', '2', '1', 'Middeniya', '7755695254', 1, 1, 1, 1),
(9, 'kalana', '1', '5', 'Middeniya', '0775549015', 0, 1, 0, 0),
(11, 'Damindu', '1', '2', 'Thissa', '0123456456', 0, 0, 1, 0),
(12, 'Hematha', '1', '3', 'Galle', '0774568522', 1, 1, 0, 0),
(13, 'Meenu', '2', '4', 'Dikwella', '0778965412', 1, 1, 1, 1),
(14, 'Malindu', '1', '3', 'Malabe', '0114569872', 0, 1, 0, 0),
(15, 'Sankalpa', '1', '4', 'Kaduwela', '0456258865', 1, 1, 1, 0),
(16, 'Isuri', '2', '4', 'Weligama', '0745698454', 1, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
