-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 02:29 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictatjcu_dion`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_ph` varchar(11) NOT NULL,
  `pickup_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `total_price`, `customer_name`, `customer_mail`, `customer_ph`, `pickup_time`) VALUES
(1, 25, 'bojak', 'ict1@gmail.com', '431488697', '05 : 15 PM'),
(2, 75, 'bojak', 'ict1@gmail.com', '431488697', '02 : 45 PM');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`product_id`, `order_id`, `quantity`, `price`) VALUES
(0, 2, 1, 25),
(5, 1, 1, 25),
(7, 2, 1, 25),
(9, 2, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(140) NOT NULL DEFAULT '0',
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `pname`, `product_price`, `image`, `description`, `category`) VALUES
(0, 'Chicken pad thai', 25, 'img/cpt1.jpg', 'crispy chicken ', 'chicken'),
(1, 'Mongolian beef', 25, 'img/mbeef2.jpg', 'Description', 'beef'),
(2, 'Pork', 25, 'img/pork1.jpeg', 'Description', 'pork'),
(3, 'Item 3', 25, 'image/3.jpg', 'descriptionaboutthisproduct', 'veg'),
(4, 'prawns', 25, 'img/seafood1.jpg', 'descriptionaboutthisproduct', 'sea food'),
(5, 'garlic chicken', 25, 'img/garchicken.jpg', 'garlic chicken curry', 'chicken'),
(6, 'grilled chicken', 25, 'img/gchicken1.jpg', 'chicken grilled finely with herbs', 'chicken'),
(7, 'Chilly willy chicken', 25, 'img/chilchic.jpg', 'Sliced chicken with sauces', 'chicken'),
(8, 'chicken fried rice', 25, 'img/chick.jpg', 'mixed rice and chicken sauces', 'chicken'),
(9, 'chicken manchurian', 25, 'img/cm1.jpg', 'chicken manchurian', 'chicken');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `qid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`qid`, `name`, `email`, `query`) VALUES
(1, 'Dheeraj Narra', 'dheeraj.narra14@gmail.com', 'hiuuscbzzcjsbsjsdjbsbd '),
(2, 'suhas suhasg', 'dsad@gmail.com', 'hdcntdh'),
(3, 'Dheeraj Narra', 'vhg', 'jfhtf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` decimal(4,0) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `address`, `postcode`, `phone`) VALUES
('bojanapaedllishashidhar@gmail.com', 'ghvchgf', 'Vamsi', 'qed3', '21\r\nunit 4 lever street', '4010', 481880296),
('bojanapallishashiecdfwefdhar@gmail.com', 'asdcvc', 'Vamsi', 'qd', '21\r\nunit 4 lever street', '4010', 481880296),
('edw@gmail.com', 'qwd', 'Vamsi', 'Tumrukota', '121 Brunswick street,Fortitude valley', '4006', 468470599),
('eqfq@gmail.com', '123', 'Vamsi', 'Tumrukota', '121 Brunswick street,Fortitude valley', '4006', 468470599),
('ict1@gmail.com', 'panda1', 'bojak', 'horseman', '349 queen street', '4000', 431488697),
('jc476845', 'panda', 'name', 'pppppp', 'brunswick street fortitude valley ', '4006', 431488697),
('one@gmail.com', 'sfkdfmkdf', 'kfksf', 'dfkdgn', '21\r\nunit 4 lever street', '4010', 431488691);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_fk_users` (`customer_mail`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_item_order_fk` (`order_id`,`product_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk_users` FOREIGN KEY (`customer_mail`) REFERENCES `users` (`username`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_order_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_item_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
