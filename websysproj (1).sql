-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220528.43a644e6b1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websysproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'password'),
(3, 'user', 'user'),
(4, 'user', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`, `total`) VALUES
(1, 'Avocado Macchiatto', '70', 'Avocado Macchiato.png', '1', 0),
(2, 'Macapuno Caramel', '70', 'Macapuno Caramel.png', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`, `status`) VALUES
(1, 'Ma. Mariel More Dagohoy', '+6399945046', 'marielmoredags30@gmail.com', 'cash on delivery', '', '2485 Radium St., San Andres Bukid Manila', 'SANTA ANA', 'NCR - 1st DISTRICT (Manila)', 'Philippines', 10, ' Avocado Macchiatto (1)  Macapuno Caramel (1) ', 140, 2),
(2, 'Ma. Mariel More Dagohoy', '+6399945046', 'marielmoredags30@gmail.com', 'cash on delivery', '', '2485 Radium St., San Andres Bukid Manila', 'SANTA ANA', 'NCR - 1st DISTRICT (Manila)', 'Philippines', 10, ' Avocado Macchiatto (1)  Macapuno Caramel (1) ', 140, 3),
(3, 'Ma. Mariel More Dagohoy', '+6399945046', 'marielmoredags30@gmail.com', 'cash on delivery', '', '2485 Radium St., San Andres Bukid Manila', 'SANTA ANA', 'NCR - 1st DISTRICT (Manila)', 'Philippines', 10, ' Avocado Macchiatto (1)  Macapuno Caramel (1) ', 140, 1),
(4, 'Ma. Mariel More Dagohoy', '+6399945046', 'marielmoredags30@gmail.com', 'cash on delivery', '', '2485 Radium St., San Andres Bukid Manila', 'SANTA ANA', 'NCR - 1st DISTRICT (Manila)', 'Philippines', 10, ' Avocado Macchiatto (1)  Macapuno Caramel (1) ', 140, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `product_desc`) VALUES
(1, 'Avocado Macchiatto', '70', 'Avocado Macchiato.png', ''),
(2, 'Macapuno Caramel', '70', 'Macapuno Caramel.png', ''),
(3, 'Mango Dark Chocolate', '70', 'Mango Dark Chocolate.png', ''),
(4, 'Mango Salted Caramel', '70', 'Mango Salted Caramel.png', ''),
(5, 'Ube Caramelized Sugar', '70', 'Ube Caramelized Sugar.png', ''),
(6, 'Ube Keso', '70', 'Ube Keso.png', ''),
(8, '90\'s Kid Mix', '160', '90_s Kid Mix.png', ''),
(9, 'Brown Sugar Milk Tea', '160', 'Brown Sugar Milk Tea.png', ''),
(10, 'Campfire Smores', '160', 'Campfire Smores.png', ''),
(11, 'Choco Butternut', '160', 'Coco Butternut.png', ''),
(12, 'Cookie Cheesecake', '160', 'Cookie Cheesecake.png', ''),
(13, 'Mango Graham', '160', 'Mango Graham.png', ''),
(14, 'Milk & Cookies', '160', 'Milk _ Cookies.png', ''),
(15, 'Keso Pandesal', '50', 'kesopan.jpg', ''),
(16, 'Strawberry Pandesal', '50', 'strawberrypan.png', ''),
(17, 'Ube Pandesal', '50', 'ubepan.jpg', ''),
(18, 'Assorted Mochi', '50', 'mochi.jpg', ''),
(19, 'Combo 1', '210', 'Combo1.png', '90\'s Kids Mix 1L + Keso Pandesal'),
(20, 'Combo 2', '210', 'Combo2.png', 'Brown Sugar Milk Tea 1L + Mochi'),
(21, 'Combo 3', '210', 'Combo3.png', 'Campfire Smores 1L + Strawberry Pandesal'),
(22, 'Combo 4', '210', 'Combo4.png', 'Choco Butternut 1L + Strawberry Pandesal'),
(23, 'Combo 5', '120', 'Combo5.png', 'Ube Caramelized Sugar 26oz + Ube Pandesal'),
(24, 'Combo 6', '120', 'Combo6.png', 'Mango Dark Chocolate 26oz + Mochi');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(11) NOT NULL,
  `Email_add` varchar(50) NOT NULL,
  `Mobile_Num` bigint(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `User_Address` varchar(50) NOT NULL,
  `ZipCode` int(4) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `User_Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `PRODUCT_QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`sid`, `id`, `PRODUCT_QTY`) VALUES
(1, 1, 60),
(2, 2, 34),
(3, 3, 30),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 17, 0),
(18, 18, 0),
(19, 19, 0),
(20, 20, 0),
(21, 21, 0),
(22, 22, 0),
(23, 23, 0),
(24, 24, 0),
(25, 25, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `stocks_ibfk_1` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
