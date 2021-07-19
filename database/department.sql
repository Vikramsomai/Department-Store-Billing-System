-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 01:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `description`, `add_date`) VALUES
(10, 'mobile', 'mobile', '2021-05-04 03:37:01'),
(11, 'Computers', 'Computers', '2021-05-04 04:54:26'),
(12, 'Apps & Games', 'Apps & Games', '2021-05-04 04:54:42'),
(13, 'Movies & TV', 'Movies & TV', '2021-05-04 04:54:55'),
(14, 'shon', 'shon', '2021-06-04 05:12:46'),
(15, 'tv', 'tv', '2021-06-04 05:25:36'),
(16, 'tv', 'tv', '2021-06-04 05:26:00'),
(17, 'tv', 'tv', '2021-06-04 05:26:41'),
(18, 'tv', 'tv', '2021-06-04 05:26:49'),
(19, 'tv', 'tv', '2021-06-04 05:27:17'),
(20, 'tv', 'tv', '2021-06-04 05:27:20'),
(21, 'tv', 'tv', '2021-06-04 05:27:41'),
(22, '<button>sjdchv</button>', 'tv', '2021-06-07 03:32:16'),
(23, 'hey', '838', '2021-06-07 03:34:23'),
(24, '<b>jshf</b>', 'shdfhv', '2021-06-07 03:34:41'),
(25, '&lt;button&gt;sjdchv&lt;/button&gt;', 'efv', '2021-06-07 03:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `cust_email` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `contact`, `address`, `add_date`) VALUES
(872986, 'hello world', '', 385889, '', '0000-00-00 00:00:00'),
(872987, 'vikram somai', '', 2147483647, '', '0000-00-00 00:00:00'),
(872988, 'shon', '', 2147483647, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `rate` double NOT NULL,
  `qty` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `product_name`, `category`, `description`, `rate`, `qty`, `add_date`) VALUES
(25, 'oppo', 'mobile', 'oppo', 10000, -2, '2021-06-07 03:22:36'),
(26, 'redmi 7a', 'mobile', 'redmi 7a', 7000, 48, '2021-06-04 05:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `discount` int(11) NOT NULL,
  `trans_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `cust_id`, `p_id`, `rate`, `qty`, `total`, `discount`, `trans_date`) VALUES
(215, 872986, 21, 10000, 80, 800000, 0, '2021-06-03 04:47:21'),
(216, 872987, 25, 10000, 5, 50000, 0, '2021-06-03 10:10:41'),
(217, 872987, 26, 7000, 1, 7000, 0, '2021-06-03 10:10:41'),
(218, 872988, 25, 10000, 2, 20000, 0, '2021-06-04 05:13:47'),
(219, 872988, 26, 7000, 1, 7000, 0, '2021-06-04 05:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `username`, `password`) VALUES
(3, 'vikram', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=872989;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
