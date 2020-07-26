-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 05:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchodatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemId` int(11) NOT NULL,
  `ItemName` tinytext NOT NULL,
  `ItemImage` longtext NOT NULL,
  `ItemPrice` tinytext NOT NULL,
  `ItemDesc` longtext NOT NULL,
  `ItemType` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ItemId`, `ItemName`, `ItemImage`, `ItemPrice`, `ItemDesc`, `ItemType`) VALUES
(17, 'Tom Yam Wrap', 'tomyamwrap.jpg', '16.00', 'Homemade Tom Yam meat with tomatoes, lettuce &amp; cheese.', 'Mains'),
(18, 'Chicken Nuggets with Nacho Cheese', 'nachocheesenuggets.jpg', '12.00', 'Air fried chicken nuggets topped with googey nacho cheese, scallions and fried shallots', 'Mains'),
(19, 'Carbonara Spaghetti', 'carbonara.jpg', '17.00', 'Creamy homemade carbonara sauce with mushrooms and ham with spaghetti.', 'Mains'),
(20, 'Black Current Grilled Cheese', 'blackcurrent.jpg', '14.00', 'Grilled cheese with black current jam. An interesting combination of sweet and savoury!', 'Mains'),
(21, 'Signature Burnt Cheesecake', 'burntcheesecake.jpg', '16.00', 'Homemade cheesecake that is slightly burnt on the outside to give it a roasted taste!', 'Desserts'),
(22, 'Matcho Toast', 'matchotoast.jpg', '16.00', 'Signature toast that is topped off with a scoop of ice cream of your choice, fruits, edible pink floss and caramel sauce!', 'Desserts'),
(23, 'Matcha Cheesecake', 'matchacheesecake.jpg', '16.00', 'Homemade rich matcha cheesecake that is a perfect balanced between sweet and bitter!', 'Desserts'),
(24, 'Matcha Pancake', 'matchapancake.jpg', '18.00', 'Rich matcha pancakes with matcha ice cream, red beans, whipped cream and a side of honey!', 'Desserts'),
(25, 'Pink Flamingo', 'pinkflamingo.jpg', '13.00', 'A mixture of blood orange and strawberries in soda and top it off with a slice of watermelon. Both sweet and tangy!', 'Drinks'),
(26, 'Iced Chocolate Float', 'chocolatefloat.jpg', '15.00', 'Rich iced chocolate with a scoop of vanilla ice cream on top. Perfect for anyone at any age!', 'Drinks'),
(27, 'Hot Matcha Latte', 'hotmatcha.jpg', '12.00', 'freshly brewed hot matcha latte that is not so sweet and not so bitter. A matcha lover\'s fantasy!', 'Drinks'),
(28, 'Matcha Frappe', 'matchablended.jpg', '15.00', 'Iced blended matcha topped off with a edible pink floss. Perfect for a hot sunny day!', 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idUsers` int(11) NOT NULL,
  `CName` tinytext NOT NULL,
  `CEmail` tinytext NOT NULL,
  `Phone` int(11) NOT NULL,
  `NumPerson` int(11) NOT NULL,
  `RDate` tinytext NOT NULL,
  `RTime` tinyint(4) NOT NULL,
  `CMessage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idUsers`, `CName`, `CEmail`, `Phone`, `NumPerson`, `RDate`, `RTime`, `CMessage`) VALUES
(6, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 4, '7/21/2020', 4, 'test'),
(7, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, ''),
(8, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 2, '7/21/2020', 12, ''),
(9, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/14/2020', 1, ''),
(10, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 5, '7/20/2020', 5, ''),
(11, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 5, '7/21/2020', 2, ''),
(12, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 3, '7/25/2020', 1, ''),
(13, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 14, ''),
(14, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 14, ''),
(15, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 2, '7/21/2020', 5, ''),
(16, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 3, '7/20/2020', 12, ''),
(17, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, ''),
(18, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/21/2020', 12, 'test'),
(19, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/21/2020', 12, 'test'),
(20, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, 't'),
(21, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, 'test'),
(22, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, ''),
(23, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/21/2020', 12, ''),
(24, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/25/2020', 12, ''),
(26, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 2, '7/29/2020', 3, 'Birthday Celebration'),
(27, 'Sean Ng', 'seanng98@yahoo.com', 122248978, 1, '7/20/2020', 12, 'Birthday Celebration');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `UsernameUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `passwordUsers` longtext NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `UsernameUsers`, `emailUsers`, `passwordUsers`, `type`) VALUES
(2, 'seangks', 'seanng98@yahoo.com', '$2y$10$LhpKR1TlAAZYPK.83s.HpObmpT7S9qxDnjgfjGFi9eWl/mUOs/Z.C', 0),
(3, 'Monkeycarrot', 'seanng998@gmail.com', '$2y$10$M6GbP6mOaOUK46IahtjWxu6b5Xg6sAEZNWGShmXUmFqHdpZHhC21m', 0),
(7, 'testing', 'seanng98@yahoo.com', '$2y$10$UX8b.avP882Ua6yuDy7KY.nS40P0CgveL4TSE/2IW481HqT0dIrVq', 0),
(8, 'test', 'seanng98@yahoo.com', '$2y$10$g24kReUSoqgk0.tX7A7nceYG.bsxsGstOsZblYkYA5Jzk/ROZrvNC', 0),
(9, 'test2', 'seanng98@yahoo.com', '$2y$10$4FiVRLCx62fYHs/PzxRn6OBFZ/vWPhKReDWyq4X6EyYw3xbO4y9bS', 0),
(10, 'admin', 'seanng98@yahoo.com', '$2y$10$VwlMdkqbujgVMBQLkcoppeTb1hdpB5dxNrqWIQ5NZYHwzOqW69X8i', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
