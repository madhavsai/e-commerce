-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 06:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `500`
--

CREATE TABLE `500` (
  `products_ids` varchar(250) DEFAULT NULL,
  `productsname` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `totalprice` varchar(15) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `500`
--

INSERT INTO `500` (`products_ids`, `productsname`, `quantity`, `totalprice`, `address`) VALUES
('501', NULL, '1', '20', 'ksdfialsf'),
('42', NULL, '1', '0', 'kakinada '),
('1,501,511,509,503', NULL, '1,1,1,1,1', 'NaN', 'kakinada, gandhi nagar');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(500) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `totalcost` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `mobno`, `pid`, `quantity`, `totalcost`, `address`) VALUES
('madhav', '9848209783', '1,501,511,', '1,1,1,1,1', 'NaN', 'kakinada, gandhi nagar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
