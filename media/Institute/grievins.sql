-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 10:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `grievins`
--

CREATE TABLE `grievins` (
  `comp_id` varchar(200) DEFAULT NULL,
  `inst_id` varchar(200) DEFAULT NULL,
  `univ_id` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `comp_desc` varchar(200) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `sent` varchar(200) DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grievins`
--

INSERT INTO `grievins` (`comp_id`, `inst_id`, `univ_id`, `category`, `comp_desc`, `comment`, `sent`, `keyword`) VALUES
('456', 'vit', 'pune', 'admission', 'this is second test', 'successful', 'university', ''),
('103exING9Wndc', 'vit', 'pune', 'exam', 'paper evaluation !!', 'send image file', 'university', ''),
('114adzVOyiIAw', 'vit', 'pune', 'admission', 'admission not done', '', '', ''),
('114exSs7BolfE', 'vit', 'pune', 'exam', 'this is my complaint!!', '', '', ''),
('114exxOo5yQe3', 'vit', 'pune', 'exam', 'this is my grievance', 'require a image file', 'university', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
