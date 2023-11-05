-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 06:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-market`
--

-- --------------------------------------------------------

--
-- Table structure for table `api users`
--

CREATE TABLE `api users` (
  `username` varchar(256) NOT NULL,
  `password1` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api users`
--

INSERT INTO `api users` (`username`, `password1`) VALUES
('Aashik', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `phone` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `phone`, `user_id`, `comments`) VALUES
('aaaa', 'aa', 11, 1, '121'),
('Jhony', 'Depp', 112344233, 2, 'God work'),
('Jhony', 'Depp', 778956220, 3, 'Good work'),
('Jhony', 'Depp', 778956220, 4, 'Unbelievable'),
('Jhony', 'Depp', 778956220, 5, 'Hei'),
('asad', 'fassaf', 1312412421, 6, 'GOod'),
('Aashiq', 'Ahmed', 779696301, 7, 'wafaegfeadfedfa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID` int(11) NOT NULL,
  `test` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID`, `test`, `link`, `name`) VALUES
(1, 'Bing', 'http://www.bing.com', 'Bing'),
(2, 'Google', 'http://www.google.com', 'Google'),
(3, 'Register', 'engine/_reg.php', 'reg'),
(5, 'Products', 'engine/Products.php', 'Products');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(100) NOT NULL,
  `pname` varchar(256) NOT NULL,
  `brand` varchar(256) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `descr` varchar(256) NOT NULL,
  `filename` varchar(256) NOT NULL,
  `category` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `pname`, `brand`, `price`, `discount`, `descr`, `filename`, `category`) VALUES
(15, 'Motorolla F12', 'Motorolla', 25000, 2, 'Smart Phone', 'c038f6644a0c6830b06103debc10a93a-img.jpg', 'Mobile Phones'),
(20, 'Apple AirPods ', 'Apple', 20000, 10, 'Automatically on off', '130fb8982b3bccb22f3366772d98d677-img.jpg', 'Phone Accessories'),
(21, 'Echo Dot (3rd Gen) ', 'Amazon', 1300, 15, 'Good Quality', '9372c4a3207db7c9eea8bf21e72ccaa4-img.jpg', 'Phone Accessories'),
(22, 'Hidden Camera - 1080P  ', 'AVRY', 1500, 10, 'High Quality', '4ea9c657f09f7b1207ef19ad825e9ae6-img.jpg', 'Phone Accessories'),
(23, '2 Pack AirTag ', 'Yugofine', 2000, 5, 'High-Quality Material', '0e25c974e2520cb2d36b1f288986537c-img.jpg', 'Phone Accessories'),
(25, 'Ring Light Selfie Light', 'MircleM', 900, 3, 'Selfie Light dimmer', '7a275910026f5dc15e38ca8c89dc52ed-img.jpg', 'Phone Accessories'),
(26, 'TOZO T6 ', 'TOZO', 600, 5, 'High Quality ', '08846557ec4c56a5b4e04bdc4e27e606-img.jpg', 'Phone Accessories'),
(27, 'OontZ Angle 3', 'OontZ Angle ', 850, 11, 'Very Promising', '7e583c2c8eea0dbfb9e5fadd6436b6da-img.jpg', 'Phone Accessories'),
(28, 'Wireless Hands-Free', 'Abmotiy', 4500, 10, 'Safe & painless wearing', 'ba0d66d01222760094c589fbc92b36e9-img.jpg', 'Phone Accessories'),
(29, 'Wireless Gaming Keyboard and Mouse', 'LexonElec', 10000, 2, ' 2.4G Wireless Technology', '88105565424292b9d4cd94cd5b443640-img.jpg', 'Computer Accessories'),
(30, 'Apple Iphone XR', 'Apple', 70000, 3, '64GB Unlocked ', '6c10c248289756ad4642f364570a0ef0-img.jpg', 'Mobile Phones'),
(31, 'MK270 Keyboard and Mouse', 'Logitech', 5000, 1, '2.4 GHz Wireless, Compact Mouse', '5f51984692dcc1098d94c1b5e662e5fa-img.jpg', 'Computer Accessories'),
(32, 'Redragon S101 Wired Gaming Keyboard and Mouse', 'Redragon', 7500, 10, 'RGB Backlight, Multimedia Support', '61c17816f26728451b900869d15fc1cf-img.jpg', 'Computer Accessories'),
(33, 'Samsung Galaxy S22', 'Samsung', 200000, 1, '8K SUPER STEADY VIDEO, ADAPTIVE COLOR CONTRAST', 'a35985e591e70a5026d4a87cac43356b-img.jpg', 'Mobile Phones'),
(37, 'TCL 10L', 'TCL', 45000, 2, '256GB+6GB RAM, with 6.53\" FHD + LCD Display, 48MP Quad Rear Camera System, 4000mAh Battery, Arctic White', '7af624653b95d15c9ec75f2f709ff7de-img.jpg', 'Mobile Phones'),
(40, 'Google Pixel 6', 'Google', 224000, 2, '5G Android Phone - Unlocked Smartphone with Advanced Pixel Camera and Telephoto Lens - 128GB - Cloudy White', 'b9fbc137567352f75a6e2a4a60bd82b2-img.jpg', 'Mobile Phones'),
(41, 'Humixx Car Phone Holder Mount', 'Humixx', 6000, 2, 'Universal Hands-Free Cell Phone Holder for Car Dashboard Windshield Air Vent Car Mount for iPhone Samsung All Smartphones & Cars', 'c43064eae1b78dadcf4d64f789700510-img.jpg', 'Phone Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `UID` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Joining` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`UID`, `fname`, `lname`, `email`, `password`, `Joining`, `status`) VALUES
(42, 'Aashiq ', 'Ahmed', 'aashikahamed8@gmail.com', '1234', '2021-08-31', 1),
(43, 'Aashiq Ahmed', 'Ahmed', 'aashikah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', '2021-09-02', 1),
(44, 'Aashiq', 'aashikahamed8@gmail.', '', '81dc9bdb52d04dc20036dbd8313ed0', '2021-09-02', 1),
(45, 'Aashiq Ahmed', 'Ahmed', 'aashikahamed8@gmail.com', '47bce5c74f589f4867dbd57e9ca9f8', '2021-09-02', 1),
(46, 'Aashiq Ahmed', 'Ahmed', 'aashikahamed8@gmail.com', '827ccb0eea8a706c4c34a16891f84e', '2021-09-02', 1),
(47, 'Arshad', ' Khan', 'arshad@gmail.com', '912ec803b2ce49e4a541068d495ab5', '2021-09-23', 1),
(48, 'Aashiq', 'Ahmed', 'aashiqahmed0228@gmail.com', '123asd', '2021-11-10', 1),
(49, 'Ashmal', 'Ahmed', 'ahamed8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', '2021-11-10', 1),
(50, 'Asmal', 'Adhil', 'ashmal@gmail.com', '12345', '2022-01-03', 1),
(51, 'Sabry', 'Mahroof', 'Sabry@gamil.com', '123sabry', '2022-01-11', 1),
(52, 'Jhony', 'Depp', 'Jhonnydepp@gmail.com', '123456', '2022-01-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user contacts`
--

CREATE TABLE `user contacts` (
  `Uname` varchar(256) NOT NULL,
  `Uemail` varchar(256) NOT NULL,
  `Usubject` text NOT NULL,
  `Umessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`) VALUES
('1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
