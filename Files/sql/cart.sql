-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 09:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `email`, `password`) VALUES
('DANN', 'Aryan_test', 'himanshusingh@gmail.com', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `itemname` varchar(202) NOT NULL,
  `itemquantity` int(200) NOT NULL,
  `itemprice` int(200) NOT NULL,
  `itemid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`itemname`, `itemquantity`, `itemprice`, `itemid`) VALUES
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0),
('item_name', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(2, 'Cheese Sandwich', 'CheeseSandwich.png', 100.00),
(1, 'Cheese Grilled Sandwich', 'CheeseGrilledSandwich.png', 45.00),
(6, 'Grilled Sandwich', 'GrilledSandwich.png', 40.00),
(8, 'Vada Pav', 'VadaPav.png', 13.00),
(9, 'Veg Sandwich', 'VegSandwich.png', 25.00),
(10, 'Noodles', 'HakkaNoodles.png', 40.00),
(11, 'Masala Dosa', 'MasalaDosa.png', 35.00),
(12, 'Schezwan Rice', 'SchezwanRice.png', 40.00),
(14, 'Dal Khichdi', 'DalKhichdi.png', 50.00),
(15, 'Chai', 'Chai.png', 10.00),
(16, 'Coffee', 'Coffee.png', 15.00),
(17, 'Kokam Sherbat', 'KokamSherbat.png', 15.00),
(18, 'Chhaas', 'Chhaas.png', 18.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `classno` int(20) NOT NULL,
  `mobilemo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`classno`, `mobilemo`) VALUES
(303, 986752359),
(401, 98762233),
(121, 879857368),
(111, 123456789),
(313, 2147483647),
(313, 987654321),
(313, 986752359),
(303, 986752359);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
