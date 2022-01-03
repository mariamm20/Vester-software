-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 08:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vester_software`
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
(1, 'hospital'),
(2, 'clinic');

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
(19, 'hhhh', 'h@gmail.com', 'hesham', '01282304755', 1),
(21, ' hello', 'O@gmail.com', 'shady', '01282306599', 1);

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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `content`, `product_id`, `review`, `created_at`) VALUES
(3, 1, ' no no no no no no', 8, 1, '2022-01-03'),
(4, 1, ' no no no no no no 12', 8, 1, '2022-01-03'),
(5, 1, ' no no no no no no 321', 8, 1, '2022-01-03'),
(6, 6, 'done', 8, 1, '2022-01-03'),
(7, 6, 'ok', 8, NULL, '2022-01-03'),
(8, 6, 'ok', 8, 1, '2022-01-03');

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
(8, 'test', 'this is goooood', 9768, 7, '61ceb700a47a2.jpg', '61ceb700a50b9.png', '2021-12-31 09:53:36', '61ceb700a52a0.rar', '61ceb700a49c6.jpg', '61ceb700a4bcb.jpg', '61ceb700a4eca.jpg', 1, 1, 1, 0, 1),
(9, 'Finall', '   finallly', 625, 0, '61cf329e9fe2d.png', '61cf17b50cb01.png', '2021-12-31 10:19:21', '61cf329ea0ca8.rar', '61cf329ea0276.png', '61cf329ea0614.png', '61cf329ea0984.png', 1, 1, 0, 1, 1),
(10, 'Finall 2', '   finallly', 625, 0, '61cf329e9fe2d.png', '61cf17b50cb01.png', '2021-12-31 10:19:21', '61cf329ea0ca8.rar', '61cf329ea0276.png', '61cf329ea0614.png', '61cf329ea0984.png', 1, 1, 0, 1, 1),
(11, 'test all', '\r\n this is my description  this is my description  this is my description  this is my description  this is my description  this is my description  this is my description ', 1292, 12, '61d21bfeb9c46.jpg', '61d21bfeba2b6.png', '2022-01-02 23:41:18', '61d21bfeba4a4.rar', '61d21bfeb9da4.jpg', '61d21bfeb9f8e.jpg', '61d21bfeba10c.jpg', 6, 1, 0, 1, 1),
(12, 'jknkj', 'hjhjg', 8798, NULL, '61d2978b49dda.png', '61d2978b4a6a5.jpg', '2022-01-03 08:28:27', '61d2978b4a861.rar', '61d2978b49f99.png', '61d2978b4a1aa.png', '61d2978b4a466.png', 6, 2, 0, 0, 1),
(13, 'jhkjhj', 'hbjhj', 65535, NULL, '61d297c3c982b.png', NULL, '2022-01-03 08:29:23', '61d297c3c9b65.rar', '61d297c3c99ac.png', NULL, NULL, 6, 2, 0, 1, 0),
(14, 'jnj', 'jnkjnkj', 9987, NULL, '61d29a88a9377.png', NULL, '2022-01-03 08:41:12', '61d29a88a9765.rar', '61d29a88a9507.png', NULL, NULL, 6, 2, 0, 1, 1);

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

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `description`, `type`, `host`, `review`, `user_id`, `created_at`) VALUES
(2, 'Maps,Email,Camera,Premium support', 'Desktop Application', 'Premium support', NULL, 6, '2022-01-03 07:10:56'),
(3, 'Maps,Forms,Chat,Email,Social Media,other,Camera,API\'s,Business support', 'Mobile Application', 'Business support', NULL, 6, '2022-01-03 07:12:13'),
(4, 'Email,Camera,Premium support', 'Desktop Application', 'Maps', 1, 6, '2022-01-03 07:39:49'),
(5, 'Email,Camera,Premium support', 'Desktop Application', 'Maps', 0, 6, '2022-01-03 07:40:31'),
(6, 'Maps,Email,Camera', 'Desktop Application', 'Premium support', 1, 6, '2022-01-03 07:41:38');

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
(3, 6, 11, '2021-12-31 14:19:29'),
(4, 6, 9, '2021-12-31 14:19:46');

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
(1, 'mohamed', 'hesham', 'm@gmail.com', '01282304755', NULL, 'logo.jpg', '0000-00-00 00:00:00', '2021-12-31 16:24:13', 'admin', '$2y$10$4hGWRGRUTNc4nDhGLhhqQe91fRGV7vf2CUOMxalTbqxgil22gCL9e', 'Egypt', 'mk', 'mariamm20', 'elonmusk', 'mohammedhesham888', 'mk'),
(3, 'omar', 'nader', 'O@gmail.com', '01282306599', NULL, '61cf4eb2e7bcd.png', '2021-12-31 20:40:51', '0000-00-00 00:00:00', 'user', '$2y$10$OIkT.x69AAkn9q52PiCOrONB.kTK7bWHZO0sdp/1JgNiF/llXYX4S', 'Egypt', '', '', '', '', ''),
(5, 'mohamed', 'hesham', 'm2@gmail.com', '01282309985', NULL, 'r.png', '2021-12-31 20:53:13', '0000-00-00 00:00:00', 'admin', '$2y$10$K1QjEmjvTNmQZLYb4vO4zOpGuyFR6PYvkl.nVEGvkhn3L8s6YujWG', 'Egypt', '', '', '', '', ''),
(6, 'ka', 'ma', 'ka@gmail.com', '01295847236', 'django-developer', '61d26ad9668e9.jpg', '2022-01-01 17:41:42', '2022-01-03 09:23:06', 'user', '$2y$10$IKsH/2fclmj8f2yHgRUnn..LAXEpTj4LvXkYRehTi0A.E0fE92iYe', 'alex', 'kqn qw', 'BJ.git', 'HH', 'LL', 'MO.com');

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
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`) VALUES
(14, 6, 10),
(15, 6, 9),
(17, 6, 8),
(18, 6, 13);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slaes`
--
ALTER TABLE `slaes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  ADD CONSTRAINT `slaes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `slaes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION;

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
