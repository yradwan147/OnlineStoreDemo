-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 04:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugrf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `date`) VALUES
(1, 'CyberShadow', 'Cybershadow is coming out today! Are you ready for this awaited sidescroller? We\'ve created a few LAPTOP SKINS designs for this occasion, DM us to get more information! \r\n#we_premiumize_gaming \r\n#startup #instagaming #laptop #gamingcommunity #laptopgaming #gaminglaptop #laptopstickers #gaming #laptopgaming #republicofgamers #laptops #pcgamer #gamingsetup #laptop #gamingnotebook', 'assets/cybershadow.jpg', '26/01/2021'),
(2, 'Play with a friend', 'ONE-TIME OFFER! \r\nFor the next 24 hours, order a skin for you and your friend and get free shipping on your order. \r\n#gamingismorefunwithfriends \r\n#we_premiumize_gaming \r\n#startup #instagaming #laptop #gamingcommunity #laptopgaming #gaminglaptop #laptopstickers #gaming #laptopgaming #republicofgamers #laptops #pcgamer #gamingsetup #laptop #gamingnotebook', 'assets/offer.jpg', '14/01/2021'),
(3, 'NEW SEASON', 'The new season of GAIMIZ is here.\r\nComing with new products, new designs, and premium as usual!\r\n#we_premiumize_gaming', 'assets/season.jpg', '08/01/2021');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_type` varchar(128) NOT NULL,
  `productdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_image`, `product_type`, `productdesc`) VALUES
(1, 'Laptop Skin 1', 200, 'assets/L1.jpg', 'Laptop', ''),
(2, 'Laptop Skin 2', 200, 'assets/L2.jpg', 'Laptop', ''),
(3, 'Laptop Skin 3', 200, 'assets/L3.jpg', 'Laptop', ''),
(4, 'Laptop Skin 4', 200, 'assets/L4.jpg', 'Laptop', ''),
(5, 'Laptop Skin 5', 200, 'assets/L5.jpg', 'Laptop', ''),
(6, 'Laptop Skin 6', 200, 'assets/L6.jpg', 'Laptop', ''),
(7, 'Laptop Skin 7', 200, 'assets/L7.jpg', 'Laptop', ''),
(8, 'Laptop Skin 8', 200, 'assets/L8.jpg', 'Laptop', ''),
(9, 'Sticker 1', 5, 'assets/S1.jpg', 'Sticker', ''),
(10, 'Sticker 2', 5, 'assets/S2.jpg', 'Sticker', ''),
(11, 'Sticker 3', 5, 'assets/S3.jpg', 'Sticker', ''),
(12, 'Sticker 4', 5, 'assets/S4.jpg', 'Sticker', ''),
(13, 'Sticker 5', 5, 'assets/S5.jpg', 'Sticker', ''),
(14, 'Sticker 6', 5, 'assets/S6.jpg', 'Sticker', ''),
(15, 'Sticker 7', 5, 'assets/S7.jpg', 'Sticker', ''),
(16, 'Sticker 8', 5, 'assets/S8.jpg', 'Sticker', ''),
(17, 'Sticker 9', 5, 'assets/S9.jpg', 'Sticker', ''),
(18, 'Sticker 10', 5, 'assets/S10.jpg', 'Sticker', ''),
(19, 'Sticker 11', 5, 'assets/S11.jpg', 'Sticker', ''),
(20, 'Sticker 12', 5, 'assets/S12.jpg', 'Sticker', ''),
(21, 'Console 1', 350, 'assets/P1.jpg', 'Console', ''),
(22, 'Console 2', 350, 'assets/P2.jpg', 'Console', ''),
(23, 'Console 3', 350, 'assets/P3.jpg', 'Console', ''),
(24, 'Console 4', 350, 'assets/P4.jpg', 'Console', ''),
(25, 'Console 5', 350, 'assets/P5.jpg', 'Console', ''),
(26, 'Console 6', 350, 'assets/P6.jpg', 'Console', ''),
(27, 'Console 7', 350, 'assets/P7.jpg', 'Console', ''),
(28, 'Custom 1', 250, 'assets/C1.jpg', 'Custom Laptop', ''),
(29, 'Custom 2', 250, 'assets/C2.jpg', 'Custom Laptop', ''),
(30, 'Custom 3', 250, 'assets/C3.jpg', 'Custom Laptop', ''),
(31, 'Custom 4', 250, 'assets/C4.jpg', 'Custom Laptop', ''),
(32, 'Custom 5', 250, 'assets/C5.jpg', 'Custom Laptop', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersPnumber` int(15) NOT NULL,
  `usersAddress` text NOT NULL,
  `usersGender` varchar(10) DEFAULT NULL CHECK (`usersGender` in ('Female','Male')),
  `usersArea` varchar(128) NOT NULL,
  `usersPerm` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersPnumber`, `usersAddress`, `usersGender`, `usersArea`, `usersPerm`) VALUES
(2, 'Yousef Radwan', 'yradwan147.yr@gmail.com', 'yradwan147', '$2y$10$kQG5lfbkL2chgmSUmTNaRuI4eV007ILekX72.L8eOSqvzauhuEnOO', 1151474809, 'Address', 'male', 'Greater Cairo', 'ADMIN'),
(3, 'User', 'user@gmail.com', 'user123', '$2y$10$7BHF7szjPnlSrrn0t9Uek.DE3jGGLf79KqH/AX0jgDxfeFZJ9grvm', 1182732731, 'adjffff', 'female', 'Greater Cairo', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
