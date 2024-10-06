-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  at 04:59 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(40) NOT NULL,
  `food` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` int(20) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `extra` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `price` int(40) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `active`) VALUES
(3, 'Burger', 'ok', 188, 'burgar.jpeg', 'Yes'),
(5, 'Noodles', 'dgfhgjhkj', 200, 'noodle.jpeg', 'Yes'),
(6, 'Sandwich', 'ccvbnm', 200, 'sandwich.jpeg', 'Yes'),
(7, 'Spring Rool', 'sdfghjk', 200, 'roll.jpeg', 'Yes'),
(8, 'Pizza', 'xcvb', 200, 'pizza.jpeg', 'Yes'),
(9, 'Paneer Tikka', 'sdfgh', 200, 'tikka.jpeg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `active` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`id`, `title`, `description`, `price`, `image_name`, `active`) VALUES
(10, 'Chocolate Shake', '', 200, 'cshake.jpeg', 'Yes'),
(11, 'Momos', 'ok', 180, 'momos.jpeg', 'Yes'),
(12, 'Salad', 'ok', 140, 'salad.jpeg', 'Yes'),
(13, 'Chinise noodles', '', 220, 'noodles.jpeg', 'Yes'),
(14, 'combo', '', 500, 'pexels-photo-2454533.jpeg', 'Yes'),
(15, 'Shake', 'ok', 150, 'shake.jpeg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `confirm_password`) VALUES
('abhi', 'iabhi@gmail.com', '1234', '1234'),
('rahul', 'irahulchoudhary1@gma', '123456', '123456'),
('akshay', 'kumarakshay62165@gma', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
