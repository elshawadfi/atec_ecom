-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2020 at 02:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grad_ibrahim_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(3, 'root', '$2y$10$syHHgu.lgAUcLH/p1bJNRuQcLqwBVDNsL5mYnS3uVL4gs7apT1pni', NULL, NULL, NULL, 'admin'),
(4, 'superadmin', '$2y$10$xpZc5KC.aU2XHkcqhuZGFuAnqmtL4Unt8MysOyylceq.19XIyoZpG', 'xE7PdjQ3rf7AXLgC', '$2y$10$m4v36FNIl//JOT/v2VXd1e0HRufPagzVCGuCgE1tfVKEuS3befdni', '2020-05-18 18:46:37', 'super'),
(5, 'admin', '$2y$10$12mUh2Gm8whTplS1zqfdRenBp24osPFe7Llli3OKxn2ijYkHuxxve', NULL, NULL, NULL, 'admin'),
(6, 'chetanw', '$2y$10$iJSznl9t/iJmJWW1GcJyS.QJJ/pt8bR.jaixq5eZRzhbmGTW2QMLK', NULL, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `category_id`, `name`, `image`, `desc`) VALUES
(1, 4, 'test', 'ed964e3c12cc353ae36ad35eca5f7ecc.jpeg', ''),
(2, 11, 'testeenbbnxc', 'ed964e3c12cc353ae36ad35eca5f7ecc.jpeg', ''),
(4, 15, 'new ', '23f146bc3f46f2b59aea05460f87d7c0.jpg', ''),
(5, 15, 'test test etst tetst ', '9d05f758f203b0e3518ef3b51ab1db77.jpg', 'desc desc ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(15, 'clothes', '523f76c65541ae63809b17931350e745.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `f_name`, `l_name`, `gender`, `address`, `city`, `state`, `phone`, `email`, `date_of_birth`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(18, 'bhushan', 'Chhadva', 'male', 'Padmavati', 'mumbai', 'Maharashtra', '34343432', 'bhusahan2@gmail.com', '1991-06-18', 0, NULL, 0, NULL),
(19, 'Jayant', 'atre', 'male', 'Priyadarshini A102, adwa2', 'wad', 'Maharashtra', '34343432', 'bhusahan2@gmail.com', '1998-05-18', 0, NULL, 0, NULL),
(21, 'bhushan', 'sutar', 'male', 'Priyadarshini A102, adwa2', 'mumbai', 'Maharashtra', '34343432', 'bhusahan2@gmail.com', '2016-11-24', 0, NULL, 0, NULL),
(23, 'Paolo', ' Accorti', 'male', 'Priyadarshini A102, adwa2', 'mumbai', 'Maharashtra', '34343432', 'bhusahan2@gmail.com', '1992-02-04', 0, NULL, 0, NULL),
(24, 'Roland', ' Mendel', 'male', 'Priyadarshini A102, adwa2', 'mumbai', 'Maharashtra', '34343432', 'bhusahan2@gmail.com', '2016-11-30', 0, NULL, 0, NULL),
(25, 'John', 'doe', 'male', 'City, view', '', 'Maharashtra', '8875207658', 'john@abc.com', '2017-01-27', 0, NULL, 0, NULL),
(26, 'Maria', 'Anders', 'female', 'New york city', '', 'Maharashtra', '8856705387', 'chetanshenai9@gmail.com', '2017-01-28', 0, NULL, 0, NULL),
(27, 'Ana', ' Trujillo', 'female', 'Street view', '', 'Maharashtra', '9975658478', 'chetanshenai9@gmail.com', '1992-07-16', 0, NULL, 0, NULL),
(28, 'Thomas', 'Hardy', 'male', '120 Hanover Sq', '', 'Maharashtra', '885115323', 'abc@abc.com', '1985-06-24', 0, NULL, 0, NULL),
(29, 'Christina', 'Berglund', 'female', 'Berguvsvägen 8', '', 'Maharashtra', '9985125366', 'chetanshenai9@gmail.com', '1997-02-12', 0, NULL, 0, NULL),
(30, 'Ann', 'Devon', 'male', '35 King George', '', 'Maharashtra', '8865356988', 'abc@abc.com', '1988-02-09', 0, NULL, 0, NULL),
(31, 'Helen', 'Bennett', 'female', 'Garden House Crowther Way', '', 'Maharashtra', '75207654', 'chetanshenai9@gmail.com', '1983-06-15', 0, NULL, 0, NULL),
(32, 'Annette', 'Roulet', 'female', '1 rue Alsace-Lorraine', '', ' ', '3410005687', 'abc@abc.com', '1992-01-13', 0, NULL, 0, NULL),
(33, 'Yoshi', 'Tannamuri', 'male', '1900 Oak St.', '', 'Maharashtra', '8855647899', 'chetanshenai9@gmail.com', '1994-07-28', 0, NULL, 0, NULL),
(34, 'Carlos', 'González', 'male', 'Barquisimeto', '', 'Maharashtra', '9966447554', 'abc@abc.com', '1997-06-24', 0, NULL, 0, NULL),
(35, 'Fran', ' Wilson', 'male', 'Priyadarshini ', '', 'Maharashtra', '5844775565', 'fran@abc.com', '1997-01-27', 0, NULL, 0, NULL),
(36, 'Jean', ' Fresnière', 'female', '43 rue St. Laurent', '', 'Maharashtra', '9975586123', 'chetanshenai9@gmail.com', '2002-01-28', 0, NULL, 0, NULL),
(37, 'Jose', 'Pavarotti', 'male', '187 Suffolk Ln.', '', 'Maharashtra', '875213654', ' Pavarotti@gmail.com', '1997-02-04', 0, NULL, 0, NULL),
(38, 'Palle', 'Ibsen', 'female', 'Smagsløget 45', '', 'Maharashtra', '9975245588', 'Palle@gmail.com', '1991-06-17', 0, NULL, 0, '2018-01-14 17:11:42'),
(39, 'Paula', 'Parente', 'male', 'Rua do Mercado, 12', '', 'Maharashtra', '659984878', 'abc@gmail.com', '1996-02-06', 0, NULL, 0, NULL),
(40, 'Matti', ' Karttunen', 'female', 'Keskuskatu 45', '', 'Maharashtra', '845555125', 'abc@abc.com', '1984-06-19', 0, NULL, 0, NULL),
(47, 'Chetan ', 'Doe', 'male', 'afa', NULL, 'Maharashtra', '9934678658', 'chetanshenai9@gmail.com', NULL, 0, '2018-11-17 18:26:16', 0, NULL),
(48, 'Chetan ', 'Singh', 'male', NULL, NULL, ' ', NULL, NULL, NULL, 0, '2018-11-18 06:51:27', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `order_id`, `product_id`, `qty`, `cost`) VALUES
(1, 23, 2, 6, 60);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `careated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `deliver_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `careated_date`, `address`, `email`, `phone`, `name`, `status`, `zipcode`, `deliver_date`) VALUES
(1, '2020-04-20 02:47:11', 'erere', 'ye', '010001', 'item', 'pending', NULL, NULL),
(2, '2020-04-20 02:58:38', 'test', 'test ', '12345', 'test', 'pending', NULL, NULL),
(3, '2020-04-20 03:08:48', 'su', 'sd', '01000', 'sd', 'pending', 2323, NULL),
(4, '2020-04-20 03:12:24', 'su', 'sd', '01000', 'sd', 'pending', 2323, NULL),
(5, '2020-04-20 03:13:03', 'sd', 'sd', '1212', 'sd', 'pending', 12121, NULL),
(6, '2020-04-20 03:13:22', 'sd', 'sd', '1212', 'sd', 'pending', 12121, NULL),
(7, '2020-04-20 03:14:13', 'sd', 'sd', '1212', 'sd', 'pending', 12121, NULL),
(8, '2020-04-20 10:49:19', 'a', 'sa', '892173', 'sd', 'pending', 8237, NULL),
(9, '2020-04-20 10:50:20', 'wwew', 'we', '12312', 'tte', 'pending', 2323, NULL),
(10, '2020-04-20 10:51:21', 'qwe', 'weqw', '123', 'qwe', 'pending', 1231, NULL),
(11, '2020-04-20 10:52:28', 'qw', 'qwe', '321', '231', 'pending', 342, NULL),
(12, '2020-04-20 10:53:33', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(13, '2020-04-20 10:57:52', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(14, '2020-04-20 11:00:25', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(15, '2020-04-20 11:00:25', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(16, '2020-04-20 11:00:37', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(17, '2020-04-20 11:00:37', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(18, '2020-04-20 11:01:59', 'qwe', 'qwe', '123', 'weq', 'pending', 2131, NULL),
(19, '2020-04-20 11:02:36', 'ukhyi', 'tess', '213', 'test', 'pending', 2213, NULL),
(20, '2020-04-20 11:03:23', 'te', 'te', '213', 'tet', 'pending', 123, NULL),
(21, '2020-04-20 11:04:10', '324', '234', '324', '234', 'pending', 234, NULL),
(22, '2020-04-20 11:06:00', 'qwe', 'qwe', '123', 'qwe', 'pending', 123, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(200) NOT NULL,
  `is_new` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `qty`, `price`, `image`, `is_new`, `brand_id`) VALUES
(1, 'testtestc', '12 test', 4, '10', 'a84724911a62725b43e056c67ff2a95e.jpeg', 1, 1),
(2, 'test n', 'test test test ', 8, '10', '5606c0a014e2a38a24cc17bf3a8414e2.jpg', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
