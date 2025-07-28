-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 07:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('admin', 'admin', 'admin@gmail.com', '0000000000', 'testing', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', '8903079750', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'asd', 'hfgdsfsx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('anshu', 'anshubaghel', ' bhs@gmail.com ', '1111111111 ', 'fef', '111111'),
('anu', 'anshubaghel', 'anshu@gmail.com', '7745990607', 'testing ', '111111'),
('avni', 'avni', ' anshu1111@gmail.com ', '7458963258 ', 'testing', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(3, 'food one', 199, 'aaaaaaaaaaaaaaaaa', 3, 'pizza.png', 'ENABLE'),
(5, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(6, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(7, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(8, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(9, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(10, 'food one', 700, 'aaaaaaaaaaaaaaaaaaaaaaaa', 2, 'Untitled design.png', 'ENABLE'),
(11, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(12, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(13, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(14, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(15, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(16, 'food testing', 152, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'pizza.png', 'ENABLE'),
(17, 'food testing', 456, 'xxxxxxxxxxxxxxxxxxxxx', 3, 'download.png', 'ENABLE'),
(18, 'food one', 500, 'aaaaaaaaaaaaaa', 4, 'download.png', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `email`, `contact`, `password`) VALUES
('anshu', 'anshubaghel13jun97@gmail.com', '7745990607', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(1, 13, 'food testing', 152, 1, '2020-01-04', 'anu', 3),
(2, 5, 'food one', 700, 1, '2020-01-04', 'anu', 2),
(3, 8, 'food one', 700, 1, '2020-01-04', 'anu', 2),
(4, 7, 'food one', 700, 3, '2020-01-04', 'anu', 2),
(5, 3, 'food one', 199, 1, '2020-01-04', 'anu', 3),
(6, 3, 'food one', 199, 1, '2020-01-04', 'anu', 3),
(7, 3, 'food one', 199, 1, '2020-01-04', 'anu', 3),
(8, 3, 'food one', 199, 1, '2020-01-04', 'anu', 3),
(9, 3, 'food one', 199, 1, '2020-01-04', 'anu', 3),
(10, 5, 'food one', 700, 1, '2020-01-04', 'avni', 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `manager` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `email`, `contact`, `address`, `manager`) VALUES
(1, 'testing', 'testing@gmail.com', '7745990607', 'testing ', 'anshu'),
(2, 'testing trrrr', 'test@gmail.com', '7458965555', 'urritiuryiuty', 'anshu'),
(3, 'testing trrrr ttttttttt', 'tuytiuyrti@gmail. com', '7458965555', 'testing ttttttttttttttttttttttttt', 'anshu'),
(4, 'restaurant testing', 'res@gmail.com', '7452369512', '12587jgkhgehru', 'anshu');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
