-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 04:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `inventory` int(100) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `category`, `inventory`, `image`, `description`) VALUES
(1, 'Armani Leather', 'Armani', 299, 'Leather', 50, './img/watch-images/Female/Leather/Armani Leather.jpg', 'Armani Leather Wristwatch for Women'),
(2, 'Fossil Leather', 'Fossil', 399, 'Leather', 30, './img/watch-images/Female/Leather/Fossil Leather.jpg', 'Fossil Leather Watch for Women'),
(3, 'Lacoste Leather', 'Lacoste', 499, 'Leather', 60, './img/watch-images/Female/Leather/Lacoste Leather.jpg', 'Lacoste Leather Watch for Women'),
(4, 'Skagen Leather', 'Skagen', 159, 'Leather', 70, './img/watch-images/Female/Leather/Skagen Leather.jpg', 'Skagen Leather Watch for Women'),
(5, 'Vincero Leather', 'Vincero', 699, 'Leather', 25, './img/watch-images/Female/Leather/Armani Leather.jpg', 'Vincero Leather Watch for Women'),
(6, 'Armani Leather Men', 'Armani', 459, 'Leather', 45, './img/watch-images/Men/Leather/Armani Leather.jpg', 'Armani Leather Watch for Men'),
(7, 'Diesel Mega Chief Men', 'Diesel', 399, 'Leather', 55, './img/watch-images/Men/Leather/Diesel Mega Chief.jpg', 'Diesel Mega Chief for Men'),
(8, 'Omega Speedmaster Men', 'Omega', 299, 'Leather', 32, './img/watch-images/Men/Leather/Omega Speedmaster.jpg', 'Omega Speedmaster Watch for Men'),
(9, 'Vincero Chrono Men', 'Chrono', 369, 'Leather', 39, './img/watch-images/Men/Leather/Vincero Chrono.jpg', 'Vincero Chrono Watch for Men');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
