-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `USER_NAME` varchar(100) NOT NULL,
  `USER_EMAIL` varchar(100) NOT NULL,
  `USER_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USER_NAME`, `USER_EMAIL`, `USER_PASS`) VALUES
(1, 'Adrian', 'Cuarteros', 'iancuarts', 'test@gmail.com', 'test'),
(2, 'help', 'help', 'help', 'help@gmail.com', 'help'),
(3, 'Jam', 'Santos', 'JAM', 'abcdef@gmail.com', 'jam'),
(4, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(100) NOT NULL,
  `messages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `messages`) VALUES
('adasfadsgscvzx', ' qwewqeqdsfdgsfdssadsa'),
('asdasewqdasdase', ' qwdsaadqwdasd'),
('qwerty', ' asdasfevxcsadwaqadsa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `u_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_num`, `p_id`, `quantity`, `user`, `u_time`) VALUES
(6, 1, 3, 0, 0),
(8, 2, 2, 0, 0),
(9, 2, 0, 0, 0),
(10, 2, 0, 0, 0),
(11, 2, 2, 0, 0),
(12, 9, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(100) NOT NULL,
  `PRODUCT_PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `PRODUCT_CODE`, `PRODUCT_PRICE`) VALUES
(1, 'Baked Salmon', 300),
(2, 'Buttered Chicken', 200),
(4, 'Fish Fillet', 300),
(5, 'Garlic Salpicao', 150),
(6, 'Grilled Steak', 400),
(7, 'Roasted Chicken', 400),
(8, 'Teriyaki Salmon', 150),
(9, 'Vegitarian Lasagna', 350);

-- --------------------------------------------------------

--
-- Table structure for table `tb_schedule`
--

CREATE TABLE `tb_schedule` (
  `sched_id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dine_with` int(11) NOT NULL,
  `occasion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_schedule`
--

INSERT INTO `tb_schedule` (`sched_id`, `username`, `date`, `time`, `dine_with`, `occasion`) VALUES
(26, 'asdasasda', '2023-06-01', '17:17:00', 4, 'noadas'),
(27, 'asdasasda', '2023-06-01', '17:17:00', 4, 'noadas'),
(28, 'sdasdasaeqweqe', '2023-06-03', '15:20:00', 3, '2wdasdadweqwe'),
(29, 'sdasdasaeqweqe', '2023-06-03', '15:20:00', 3, '2wdasdadweqwe'),
(30, 'sdasdasdad', '2023-06-08', '18:23:00', 1, 'sadwqeqwe'),
(33, 'asd', '2023-06-08', '16:10:00', 4, 'none'),
(34, 'try y', '2023-06-07', '11:19:00', 3, 'none'),
(35, 'sdasld2eq', '2023-06-08', '11:33:00', 2, 'birthday'),
(36, 'jam', '2023-06-15', '19:33:00', 1, 'me time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_num`),
  ADD KEY `Test` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODUCT_ID`);

--
-- Indexes for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  MODIFY `sched_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Test` FOREIGN KEY (`p_id`) REFERENCES `products` (`PRODUCT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
