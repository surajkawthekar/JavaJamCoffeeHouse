-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 05:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacific`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `Name`, `Email`, `Experience`) VALUES
(1, 'suraj', 'kawthekar.suraj@gmail.com', 'Hello'),
(2, 'Akash', 'akash.l@gmail.com', '10 years'),
(8, 'Amit', 'shaunak@gmail.com', '30 years'),
(9, 'surajk', 'abcdh@gmail.com', '30 years'),
(10, 'surajkawthekar', 'kawthekar.suraj@gmail.com', '20 years');

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `MusicianId` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Musician_Image_URL` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`MusicianId`, `Name`, `Musician_Image_URL`) VALUES
(1000, 'Melanie Thumb', 'http://localhost/kawthekar_javacoffee/images/melaniethumb.jpg'),
(1001, 'Greg Tahoe', 'http://localhost/kawthekar_javacoffee/images/gregthumb.jpg'),
(1002, 'Brayn Adams', 'http://localhost/kawthekar_javacoffee/images/bryan_adams.jpg'),
(1003, 'Arijit Singh', 'http://localhost/kawthekar_javacoffee/images/arijit_singh.jpg'),
(1004, 'Bryan Adams', 'http://localhost/kawthekar_javacoffee/images/bryan_adams.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderId`, `ProductId`, `price`, `quantity`) VALUES
(39, 1, 14.95, 1),
(39, 2, 20, 1),
(40, 2, 20, 1),
(40, 4, 16, 3),
(41, 1, 14.95, 1),
(41, 2, 20, 1),
(43, 1, 14.95, 1),
(43, 2, 20, 1),
(43, 3, 10, 1),
(43, 4, 16, 1),
(44, 1, 14.95, 1),
(44, 2, 20, 1),
(46, 3, 10, 1),
(47, 1, 14.95, 1),
(47, 3, 10, 1),
(48, 1, 14.95, 2),
(48, 2, 20, 1),
(49, 1, 14.95, 1),
(49, 2, 20, 2),
(50, 1, 14.95, 1),
(50, 2, 20, 2),
(51, 1, 14.95, 1),
(51, 2, 20, 1),
(52, 1, 14.95, 5),
(52, 2, 20, 2),
(52, 4, 16, 2),
(53, 1, 14.95, 1),
(53, 2, 20, 1),
(53, 3, 10, 4),
(53, 4, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `EmailId` varchar(30) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Zip` int(11) DEFAULT NULL,
  `CreditCard` varchar(30) DEFAULT NULL,
  `Month` varchar(50) DEFAULT NULL,
  `Year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `Name`, `EmailId`, `Address`, `City`, `State`, `Zip`, `CreditCard`, `Month`, `Year`) VALUES
(31, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '2880e3fc92feb8076877436c14ae78', '10', 1997),
(32, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '2880e3fc92feb8076877436c14ae78', '10', 2009),
(33, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '2880e3fc92feb8076877436c14ae78', '10', 1990),
(34, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '2880e3fc92feb8076877436c14ae78', '10', 1990),
(39, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '20', 8888),
(40, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '2880e3fc92feb8076877436c14ae78', '02', 2009),
(41, 'testing', 't@gmail.com', '1002 greek ro', 'etasd', 'asdhas', 12345, 'cd8e1b48ededcc8823ecc6f5836a4e', '23', 2009),
(42, 'testing', 't@gmail.com', '1002 greek ro', 'etasd', 'asdhas', 12345, 'cd8e1b48ededcc8823ecc6f5836a4e', '23', 2009),
(43, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '7d186f5c5deb3dd7baf1dcac6b40c4', '20', 1223),
(44, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '7d186f5c5deb3dd7baf1dcac6b40c4', '23', 1997),
(45, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '7d186f5c5deb3dd7baf1dcac6b40c4', '23', 1997),
(46, 'testing', 't@gmail.com', '1002 greek ro', 'etasd', 'asdhas', 12345, '522c88530c38f56f72e6cda1871e04', '10', 1997),
(47, 'testing', 't@gmail.com', '1002 greek ro', 'etasd', 'asdhas', 12345, '7d186f5c5deb3dd7baf1dcac6b40c4', '02', 1990),
(48, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '02', 8080),
(49, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '02', 1990),
(50, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '02', 1997),
(51, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '02', 1990),
(52, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, 'cd8e1b48ededcc8823ecc6f5836a4e', '02', 1990),
(53, 'suraj', 'kawthekar.suraj@gmail.com', 'Arbor', 'Arlington', 'Texas', 41134, '522c88530c38f56f72e6cda1871e04', '67', 1997);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `PerformnceID` int(20) NOT NULL,
  `MusicianId` int(20) DEFAULT NULL,
  `Month_Year` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`PerformnceID`, `MusicianId`, `Month_Year`, `Description`) VALUES
(1, 1000, 'JANUARY', 'entertains with her melodic folk style.'),
(2, 1001, 'FEBRUARY', 'is back from his tour. New Songs. New Stories.'),
(3, 1002, 'MARCH', 'will be back with his Superhits.'),
(4, 1003, 'APRIL', 'will perform his melodies.'),
(5, 1004, 'FEBRUARY', 'with the superhits of 90\'s');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Product_Image_URL` varchar(100) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Name`, `Description`, `Product_Image_URL`, `Price`) VALUES
(1, 'JavaJam shirts', 'are comfortable to wear to school and around town.100% cotton. XL only. $', 'http://localhost/kawthekar_javacoffee/images/javashirt.jpg', 14.95),
(2, 'JavaJam mugs', 'carry a full load of Caffeine(12 oz.) to jump start your morning.$', 'http://localhost/kawthekar_javacoffee/images/javamug.jpg', 20),
(3, 'JavaJam Coffee beans', 'brew the best and enjoy the finest cup of coffee at home.$', 'http://localhost/kawthekar_javacoffee/images/coffee_beans.jpg', 10),
(4, 'JavaJam Coffee flask', 'Keep your coffee always warm with our Coffee Flask.$', 'http://localhost/kawthekar_javacoffee/images/coffee_flask.jpg', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`MusicianId`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`PerformnceID`),
  ADD KEY `MusicianId` (`MusicianId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `musician`
--
ALTER TABLE `musician`
  MODIFY `MusicianId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `PerformnceID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`);

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`MusicianId`) REFERENCES `musician` (`MusicianId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
