-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(20) PRIMARY KEY NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `gender` tinytext DEFAULT NULL,
  `org` text DEFAULT NULL,
  `field` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(15) DEFAULT NULL,
  `phno` bigint(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `user_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `gender`, `org`, `field`, `email`, `pwd`, `phno`, `dob`, `user_created`) VALUES
('201801330033', 'Uppada', 'Ananda Rao', 'M', 'CUTM', 'student', '201801330011@cutmap.ac.in', 'erp@13565', 7030265684, '2022-09-28', '2022-09-29 09:34:55');

--
-- Indexes for dumped tables
--



COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
