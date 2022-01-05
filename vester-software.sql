-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 09:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Desktop'),
(2, 'website');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(70) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `review` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `description`, `email`, `name`, `phone`, `review`) VALUES
(22, 'i have a problem in adding my product', 'mohamedhesham@gmail.com', 'mohamed hesham', '01061840564', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review` tinyint(1) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text DEFAULT NULL,
  `price` smallint(5) UNSIGNED NOT NULL,
  `discound` tinyint(4) DEFAULT NULL,
  `image` varchar(100) DEFAULT 'logo.jpg',
  `thumbnail` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `file` varchar(100) NOT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `support_mac` tinyint(1) NOT NULL DEFAULT 0,
  `support_linux` tinyint(1) NOT NULL DEFAULT 0,
  `support_windows` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `discound`, `image`, `thumbnail`, `created_at`, `file`, `img1`, `img2`, `img3`, `user_id`, `category_id`, `support_mac`, `support_linux`, `support_windows`) VALUES
(16, 'Camera motion sensor system', 'This camera motion sensor system can detect motion (even the slightest ones) and trigger an alarm. It uses a motion detector algorithm for detecting movements. ', 50, NULL, '61d5b3a08c6dc.jpg', '61d5b3a08cff4.jpg', '2022-01-05 17:05:04', '61d5b3a08d09b.zip', '61d5b3a08cda4.jpg', '61d5b3a08ce98.jpg', '61d5b3a08cf4c.jpg', 8, 1, 0, 0, 1),
(18, ' Android task monitoring', 'This project is exclusively designed to simplify the tracking and monitoring of day-to-day activities of the busy modern life. We are so busy in our daily lives right now that it becomes impossible to keep track of our daily events, meetings, and appointments.', 60, NULL, '61d5b71f32e1e.jpg', '61d5b71f3370a.jpg', '2022-01-05 17:19:59', '61d5b71f337b5.zip', '61d5b71f334d0.jpg', '61d5b71f3359e.jpg', '61d5b71f3365c.jpg', 8, 1, 1, 0, 0),
(19, 'employee management system', 'This project aims to build an employee management system that consolidates all the relevant information on a company’s human resources. It has two major components – Admin and Employee.', 80, NULL, '61d5b99bcb732.jpg', '61d5b99bcbd84.jpg', '2022-01-05 17:30:35', '61d5b99bcbe2c.zip', '61d5b99bcbb6d.jpg', '61d5b99bcbc25.jpg', '61d5b99bcbce0.jpg', 8, 2, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `host` varchar(30) NOT NULL,
  `review` tinyint(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slaes`
--

CREATE TABLE `slaes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slaes`
--

INSERT INTO `slaes` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(62, 8, 18, '2022-01-05 17:20:34'),
(63, 8, 18, '2022-01-05 17:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `job_title` varchar(30) DEFAULT NULL,
  `photo` varchar(50) DEFAULT 'r.png',
  `created_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `role` varchar(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `github` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `email`, `phone`, `job_title`, `photo`, `created_at`, `last_login`, `role`, `password`, `country`, `about`, `github`, `twitter`, `linkedin`, `website`) VALUES
(8, 'alaa', 'attia', 'alaaatia147@gmail.com', '01061840560', 'Software Engineer', 'r.png', '2022-01-05 16:49:15', '2022-01-05 22:20:22', 'admin', '$2y$10$abW4FTimQaXb3KJGB4dmYOuAu1lv4LU/KfkKTNLwBYmdyqUw/Yho6', 'Egypt', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `slaes`
--
ALTER TABLE `slaes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slaes`
--
ALTER TABLE `slaes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slaes`
--
ALTER TABLE `slaes`
  ADD CONSTRAINT `slaes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `slaes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
