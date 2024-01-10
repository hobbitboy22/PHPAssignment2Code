-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2024 at 03:37 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'vegetable'),
(2, 'bread');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `buy_price` float NOT NULL,
  `sell_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `description`, `image`, `stock`, `buy_price`, `sell_price`) VALUES
(1, 'Carrot', 'A simple orange carrot', 'https://media.istockphoto.com/id/694934682/vector/carrot-flat-icon-vegetable-and-diet-vector-graphics-a-colorful-solid-pattern-on-a-white.jpg?s=612x612&w=0&k=20&c=tY3mALAe1MY3Xe7-YSZUNPwilsS8idA-mkWk2lrf67w=', 10, 0.5, 1.25),
(4, 'jack', 'a lil bit smeely', 'images/659e7e21cb4f02.24048727.jpg', 52, 1.1, 0.12),
(5, 'help', 'ahhhhh', 'images/659e7e6f5bd3e9.20636672.png', 12, 2.36, 5.24),
(6, 'Barrot', 'Carrot', 'images/659eb927bb9551.94929454.webp', 1, 0.5, 1.15),
(7, 'Carrot', 'no', 'images/659eb996c8c8d8.45432601.webp', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_category`
--

CREATE TABLE `equipment_category` (
  `equipment_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_category`
--

INSERT INTO `equipment_category` (`equipment_id`, `category_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_supplier`
--

CREATE TABLE `equipment_supplier` (
  `equipment_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_supplier`
--

INSERT INTO `equipment_supplier` (`equipment_id`, `supplier_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `createdOn`, `modifiedOn`) VALUES
(1, 'admin', '2023-12-06 09:39:15', '2023-12-06 09:39:15'),
(2, 'user', '2023-12-06 09:41:37', '2023-12-06 09:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`) VALUES
(1, 'Morrisons');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` text,
  `email` varchar(255) DEFAULT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `password`, `email`, `createdOn`, `modifiedOn`) VALUES
(2, 'egeger', 'ergergerg', '$2y$10$dnrsO8mMy6RSaDvSO1UxoOLe.0PJopTZzp0FomWbVGcp77Kn0.Um.', 'regregreg@egerg.com', '2023-11-08 11:50:20', '2023-11-08 11:50:20'),
(3, 'Fred', 'Smith', '$2y$10$OtCIgHEYWtmm2umQShCLBu6KyJ48NefqkRzJ8t2OMCsPof3WnhVhO', 'Fred@Smith.com', '2023-11-15 11:17:49', '2023-11-15 11:17:49'),
(7, 'katie', 'smith', '$2y$10$AKpd5R3rl5PU4aGl0DQK3OE4p3uT19XRWhxCJ/wI5VnQOY8wUXSF2', 'katiesmith2@gmail.com', '2023-11-15 11:37:49', '2023-11-15 14:25:23'),
(8, 'jim', 'smith', '$2y$10$7j56SeGeR5YRMSAjo5LVYu/og703KV1uodU1YDMX73Tg85YNQFTva', 'jimsmith@gmail.com', '2023-11-15 14:31:29', '2023-11-15 14:31:29'),
(9, 'jim', 'smith', '$2y$10$7j56SeGeR5YRMSAjo5LVYu/og703KV1uodU1YDMX73Tg85YNQFTva', 'jimsmith@gmail.com', '2023-11-15 14:31:29', '2023-11-15 14:31:47'),
(10, 'amy', 'smith', '$2y$10$XJpmJ9LHeUUe0dE7YQVf6uQI9.lQcYjV1ks0IEnDb4w0njBZ/cQ/a', 'amysmith@test.com', '2023-11-28 15:03:11', '2023-11-28 15:03:11'),
(11, 'amy', 'smith', '$2y$10$XJpmJ9LHeUUe0dE7YQVf6uQI9.lQcYjV1ks0IEnDb4w0njBZ/cQ/a', 'amysmith@test.com', '2023-11-28 15:03:11', '2023-11-28 15:03:11'),
(12, 'kieran', 'Sucks', '$2y$10$Uw1/LA.M.lvKPg5VoFosO.3CYgCT6Q/IOSTRsVgXO56GsgkIx8Tbq', 'KieranSucksNot@gmail.com', '2023-12-06 09:31:14', '2023-12-06 09:31:14'),
(14, 'Bing', 'Chilling', '$2y$10$.ytmXDGq01gaw7cwZdmtDOwq3Yks/J5pvffmoeOnrwhwFVr/ACtjC', 'HeHeHeHa@gmail.com', '2023-12-06 09:45:48', '2023-12-06 09:45:48'),
(16, 'someone', 'else', '$2y$10$zTiIRdbpPPU10SRehaq32ePkIL3POGfChdRS8Y3fSyOx0mhCCYk9G', 'ahh@aol.com', '2023-12-06 09:47:50', '2023-12-06 09:47:50'),
(19, 'Jack', 'Hine', '$2y$10$oiFc9Qg7a1G2Zm.YM3kUbe.KuhxPh7uayjyzklG8j3KNFbl3reNAK', 'JackHine@gmail.com', '2023-12-06 10:17:32', '2023-12-06 10:17:32'),
(20, 'Example', 'Account', '$2y$10$3Z.4NqWWNoPP0fBJdZjxHunAaOd.ZEuhJmjhZTmyJE6z48fb9Vq4m', 'example@gmail.com', '2024-01-03 09:57:51', '2024-01-03 09:57:51'),
(21, 'test123', 'test123', '$2y$10$jAjjL5walaJfe12DoJp2nOPYjHt.H9C0k9LxSc47SN3jngSqM7Qxy', 'test123@gmail.com', '2024-01-10 09:26:53', '2024-01-10 09:26:53'),
(22, 'ahh', 'ahh', '$2y$10$9/JQ64tS3UlM.TPho4rZfeRq0ZUfIQZykOLlqHWnohXyupvBic.aK', 'ahh@gmail.com', '2024-01-10 09:32:14', '2024-01-10 09:32:14'),
(23, 'ting', 'ting', '$2y$10$H.TweOl6sBgzwrSiigwbweYrKFsX47O5xPD8h4tD8l.05/0j8EUZG', 'ting@gmail.com', '2024-01-10 09:35:59', '2024-01-10 09:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(20, 1),
(20, 1),
(20, 1),
(23, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_category`
--
ALTER TABLE `equipment_category`
  ADD KEY `foreign key 1` (`equipment_id`),
  ADD KEY `foreign key 2` (`category_id`);

--
-- Indexes for table `equipment_supplier`
--
ALTER TABLE `equipment_supplier`
  ADD KEY `equipment_relation` (`equipment_id`),
  ADD KEY `supplier_relation` (`supplier_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`,`role_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipment_category`
--
ALTER TABLE `equipment_category`
  ADD CONSTRAINT `foreign key 1` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign key 2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment_supplier`
--
ALTER TABLE `equipment_supplier`
  ADD CONSTRAINT `equipment_relation` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplier_relation` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
