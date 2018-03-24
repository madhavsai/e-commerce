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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `imagee` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `product_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`imagee`, `name`, `price`, `product_id`) VALUES
('product/1.jpg', 'mirchi', '20', '501'),
('product/2.jpg', 'Onione', '22', '502'),
('product/3.jpg', 'Carrot', '', '503'),
('product/amarantus.jpg', '', '', '504'),
('product/beet root.jpg', '', '', '505'),
('product/beet_root.jpg', '', '', '506'),
('product/bitter ground.jpg', '', '', '507'),
('product/Bottle-gourd.jpg', '', '', '508'),
('product/brinjal.jpg', '', '', '509'),
('product/cabbage.jpg', '', '', '510'),
('product/Capsicum.jpg', '', '', '511'),
('product/Cauliflower.jpg', '', '', '512'),
('product/chikudu.jpg', '', '', '513'),
('product/coriander-leaves.jpg', '', '', '514'),
('product/Curry-leaves.jpg', '', '', '515'),
('product/Fresh_Lady_s_Finger.jpg', '', '', '516'),
('product/fenugreek-leaves-methi.jpg', '', '', '517'),
('product/Fresh_Lady_s_Finger.jpg', '', '', '518'),
('product/garlic.jpg', '', '', '519'),
('product/ginger.jpg', '', '', '520'),
('product/gourd_sponge.jpg', '', '', '521'),
('product/lady_fger.jpg', '', '', '522'),
('product/lemon.jpg', '', '', '523'),
('product/pea.jpg', '', '', '524'),
('product/potato.jpg', '', '', '525'),
('', '', '', '526'),
('', '', '', '527'),
('', '', '', '528'),
('', '', '', '529'),
('', '', '', '530'),
('', '', '', '531'),
('', '', '', '532'),
('', '', '', '533'),
('', '', '', '534'),
('', '', '', '535'),
('', '', '', '536'),
('', '', '', '537'),
('', '', '', '538'),
('', '', '', '539'),
('', '', '', '540'),
('', '', '', '541'),
('', '', '', '542'),
('', '', '', '543'),
('', '', '', '544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
