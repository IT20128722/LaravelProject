-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 09:10 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(3) UNSIGNED NOT NULL,
  `PName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `PName`, `PPrice`, `PImage`, `created_at`, `updated_at`) VALUES
(1, 'School Bag', '1500', 'school_bag.png', '2022-07-07 07:57:46', '2022-07-07 07:57:46'),
(2, 'Dell aptop', '78000', 'laptop.jpg', '2022-07-07 11:14:42', '2022-07-07 14:27:04'),
(3, 'Men Jacket', '10500', 'jacket.jpg', '2022-07-07 11:15:17', '2022-07-07 14:15:56'),
(4, 'Water Bottle', '880', 'bottle.jpg', '2022-07-07 11:16:53', '2022-07-07 14:22:01'),
(5, 'NY Cap', '1250', 'cap.jpg', '2022-07-07 11:18:10', '2022-07-07 14:16:05'),
(6, 'Highlighter', '250', 'highlight.jpg', '2022-07-07 11:37:18', '2022-07-07 11:37:18'),
(7, 'NIKE Shoes', '4800', 'shoes.jpg', '2022-07-07 14:13:16', '2022-07-07 14:26:12'),
(8, 'Clear Bag', '65', 'clearbag.jpg', '2022-07-07 14:21:31', '2022-07-07 14:21:31'),
(9, 'CASIO Calculator', '1590', 'cal.jpg', '2022-07-07 14:25:33', '2022-07-07 14:26:39'),
(10, 'Pentel Water Colours Box', '2600', 'watercolors.jpg', '2022-07-07 14:34:48', '2022-07-07 14:34:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
