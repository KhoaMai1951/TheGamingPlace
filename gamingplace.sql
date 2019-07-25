-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 02:08 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Xbox'),
(2, 'Playstation'),
(3, 'Nintendo');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `order_date` date NOT NULL,
  `payment_confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `quantity`, `total_price`, `customer_name`, `email`, `address`, `order_date`, `payment_confirm`) VALUES
(2, 'Total War - Warhammer', 1, 46, 'Khoa', 'test', 'sdf', '2019-06-01', 1),
(3, 'Total War - Warhammer', 1, 46, 'sdfsdfsd', 're', 'test', '2019-06-04', 1),
(5, 'Total War - Warhammer', 1, 46, 'mai Ä‘Äƒng khoa', '', '', '0000-00-00', 0),
(6, 'Total War - Warhammer', 1, 46, 'mai Ä‘Äƒng khoa', '', '', '0000-00-00', 0),
(8, 'Star Wars ', 13, 585, '', '', '', '2019-06-02', 1),
(9, 'Star Wars ', 1, 45, '', '', '', '0000-00-00', 0),
(10, 'Star Wars ', 1, 45, '', '', '', '2019-06-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `image`, `price`) VALUES
(2, 2, 'World of Warcraft - Legion', 'World of Warcraft: Legion is the sixth expansion set in the massively multiplayer online role-playing game (MMORPG) World of Warcraft, following Warlords of Draenor. ', 'game2.jpg', '56.50'),
(3, 1, 'GTA V', 'A bold new direction in open-world freedom, storytelling, mission-based gameplay and online multiplayer, Grand Theft Auto V focuses on the pursuit of the almighty dollar in a re-imagined, present day Southern California.', 'game3.jpg', '44.55'),
(4, 2, 'Overwatch', ' Overwatch is a vibrant team-based shooter set on a near-future earth. Every match is an intense 6v6 battle between a cast of unique heroes, each with their own incredible powers and abilities.', 'game4.jpg', '51.00'),
(5, 3, 'Assassin\'s Creed - Unity', 'Gameplay. Assassin\'s Creed Unity is an action-adventure stealth game set in an open world environment. The game was meant to be rebuilt, with fencing being used as an inspiration for the new system. In addition to returning weapons from previous games, Assassin\'s Creed Unity introduces the Phantom Blade.', 'game5.jpg', '40.00'),
(6, 2, 'Fallout 76', 'Bethesda Game Studios, the creators of Skyrim and Fallout 4, welcome you to Fallout 76, the online prequel where every surviving human is a real person.', 'game6.jpg', '45.00'),
(7, 1, 'Battlefield V', 'The single-player War Stories portray the untold stories of WW2 with people facing brutal warfare filled with classic Battlefield moments. Take on unexpected stories of human drama across the globe. Experience freezing Norwegian landscapes, the desert heat of North Africa and more.', 'game7.jpg', '33.00'),
(8, 2, 'Total War - Warhammer', 'Addictive turn-based empire-building with colossal, real-time battles. All set in a world of legendary heroes, giant monsters, flying creatures and storms of magical power.', 'game8.jpg', '45.99'),
(9, 1, 'Star Wars ', 'Become the Hero in a galaxy at war in Star Wars Battlefront II. Available for PlayStation 4, Xbox One, and on Origin for PC November 2017.', 'game9.jpg', '45.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `join_date`) VALUES
(1, 'Khoa', 'Mai', 'chronicle1951@gmail.com', 'khoa', '123', '2019-05-18 12:52:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
