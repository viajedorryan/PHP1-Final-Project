
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 04:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `custId` int(11) NOT NULL AUTO_INCREMENT,
  `custFname` varchar(50) NOT NULL,
  `custLname` varchar(50) NOT NULL,
  `custMname` varchar(2) NOT NULL,
  `gender` text,
  `custAddress` varchar(100) NOT NULL,
  `custContactNo` varchar(100) NOT NULL,
  `b_date` varchar(10) NOT NULL,
  `date_added` varchar(10) NOT NULL,
  `stat` varchar(10) NOT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custId`, `custFname`, `custLname`, `custMname`, `gender`, `custAddress`, `custContactNo`, `b_date`, `date_added`, `stat`) VALUES
(2, 'Lourence', 'Traya', 'B.', 'M', 'Dream Homes, Green Valley,Lahug', '09226663075', '1994-6-Sep', '2015-03-08', 'active'),
(3, 'Fee', 'Foo', 'M.', 'M', 'Cebu, City', '09226663075', '1985-10-Se', '2015-03-10', 'active'),
(4, 'Noel', 'Cagat', 'B.', 'M', 'Mandaue,City', '09323653206', '1982-18-Ma', '2015-03-10', 'active'),
(5, 'Bohol-Traya', 'Rexus', 'G.', 'M', 'Dream Homes, Green Valley,Lahug', '09323653206', '1985-15-Se', '2015-03-12', 'active'),
(6, 'jobeth huzain', 'adjaddin', 'e', 'M', '21jump street', '09227443796', '1993-18-Ma', '2015-03-15', 'active'),
(7, 'mark', 'mamogay', 'e', 'M', 'moalboal', 'asd', '1980-18-Ma', '2015-03-15', 'active'),
(8, 'Lalaine Ivy', 'Patalinghug', 'S', 'F', 'Cebu,City', '09331834241', '1995-9-Oct', '2015-03-15', 'active'),
(9, 'Joshua', 'Agapay', 'M', 'M', 'Guadalupe City', '09324876511', '1994-6-Aug', '2015-03-17', 'active'),
(10, 'Albert', 'Cueme', 'B.', 'M', 'Cebu,City', '09436601442', '1987-18-Fe', '2015-03-18', 'active'),
(11, 'Robin', 'Barvero', 'B', 'M', 'Cebu,City', '09067474827', '1993-7-Jun', '2015-03-19', 'active'),
(12, 'Mikee Rose', 'Bersabal', 'In', 'F', 'Hollowblock, Lagtang-tabunok, Talisay City', '09231482169', '1995-3-Nov', '2015-03-19', 'active'),
(13, 'Jade Lourene', 'Traya', 'B.', 'F', 'Teguis, Poro, Camotes, Cebu', '12345678', '1997-10-Ju', '2015-04-22', 'active'),
(14, 'Pilip', 'Traya', 'B', 'M', 'Teguis Poro', '45465465465', '1996-18-Ma', '2015-06-20', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryDate` varchar(10) NOT NULL,
  `deliveryPrice` float NOT NULL,
  `custId` int(11) NOT NULL,
  `rentalNo` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  PRIMARY KEY (`deliveryID`),
  KEY `custId` (`custId`),
  KEY `rentalNo` (`rentalNo`),
  KEY `movieID` (`movieID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empID` int(11) NOT NULL AUTO_INCREMENT,
  `empLname` varchar(100) NOT NULL,
  `empFname` varchar(100) NOT NULL,
  `empMname` varchar(2) NOT NULL,
  `empContactNo` varchar(100) NOT NULL,
  `empAddress` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(100) NOT NULL,
  `movie_copies` varchar(100) NOT NULL,
  `filename` text,
  `stat` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `category` text,
  `desce` text,
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inv_id`, `movie_title`, `movie_copies`, `filename`, `stat`, `price`, `category`, `desce`) VALUES
(1, 'Annabelle', '20', 'Annabelle.jpg', 'not', 100, 'horror', NULL),
(2, 'Carrie', '20', 'Carrie.jpg', 'available', 130.5, 'horror', NULL),
(3, 'Deliver us From Evil', '20', 'DUFE.jpg', 'available', 100.5, 'horror', NULL),
(4, 'Devils Due', '30', 'DevilsDue.jpg', 'not', 140.4, 'horror', NULL),
(5, 'Dark Touch', '30', 'DarkTouch.jpg', 'available', 130.5, 'horror', NULL),
(6, 'Insidius 2', '30', 'Insidious2.jpg', 'available', 140.5, 'horror', NULL),
(7, 'Oujia 2014', '30', 'Oujia.jpg', 'available', 500, 'horror', NULL),
(8, 'The Mark Ones', '30', 'PA4.jpg', 'available', 500, 'horror', NULL),
(9, 'You will know Her Name', '30', 'Carrie.jpg', 'available', 500, 'horror', NULL),
(10, 'Rec Apocalypse', '30', 'Rec4.jpg', 'available', 500, 'horror', NULL),
(11, 'Crank', '30', 'crank.jpg', 'available', 500, 'action', NULL),
(12, 'First of The North Start', '30', 'FTN.jpg', 'available', 500, 'action', NULL),
(13, 'Ghost Protocol', '30', 'GP.jpg', 'available', 500, 'action', NULL),
(14, '12 Rounds 2', '30', 'ROUND2.jpg', 'available', 500, 'action', NULL),
(15, 'Eragon', '30', 'ERAGON.jpg', 'available', 500, 'action', NULL),
(17, 'The Bourne Legacy', '30', 'SUPERMACY.jpg', 'available', 500, 'action', NULL),
(18, 'X-Men', '30', 'xmen.jpg', 'available', 500, 'action', NULL),
(19, 'Troy', '30', 'troy.jpg', 'available', 500, 'action', NULL),
(20, 'The Lucky Once', '30', 'TLO.jpg', 'available', 500, 'romantic', NULL),
(21, 'Beastly', '30', 'BEASTY.jpg', 'available', 500, 'romantic', NULL),
(22, 'Amour', '30', 'AMOUR.JPG', 'available', 500, 'romantic', NULL),
(23, 'The Lucky One', '30', 'TLO.jpg', 'available', 500, 'romantic', NULL),
(24, 'The Indies', '30', 'TH.jpg', 'available', 500, 'romantic', NULL),
(25, 'Titanic', '30', 'TITANIC.jpg', 'available', 500, 'romantic', NULL),
(26, 'Lovers Liars', '30', 'LL.jpg', 'available', 500, 'romantic', NULL),
(27, 'Superman', '30', 'SUPERMAN.jpg', 'available', 500, 'action', 'Superhero of the Earth'),
(28, 'Ironman', '30', 'IRONMAN.jpg', 'available', 500, 'action', 'Ironman the new superhero'),
(29, 'Troy', '20', 'TROY.jpt', 'available', 140.5, 'action', 'Troy Patay patay'),
(30, '', '', '', 'not', 0, 'Category', ''),
(31, '', '', '', 'available', 0, 'Category', ''),
(32, '', '', '', 'available', 0, 'Category', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movieID` int(11) NOT NULL AUTO_INCREMENT,
  `movieTitle` varchar(100) NOT NULL,
  `movieStat` varchar(10) NOT NULL,
  `movieCopies` int(11) NOT NULL,
  `movieRentPrice` float NOT NULL,
  PRIMARY KEY (`movieID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pick_up`
--

CREATE TABLE IF NOT EXISTS `pick_up` (
  `pickUpID` int(11) NOT NULL AUTO_INCREMENT,
  `pickUpDate` varchar(10) NOT NULL,
  `custId` int(11) NOT NULL,
  `rentalNo` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `movieID` int(11) NOT NULL,
  PRIMARY KEY (`pickUpID`),
  KEY `rentalNo` (`rentalNo`),
  KEY `movieID` (`movieID`),
  KEY `custId` (`custId`),
  KEY `empID` (`empID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
  `rentalNo` int(11) NOT NULL AUTO_INCREMENT,
  `custId` int(11) NOT NULL,
  `inv_id` int(11) NOT NULL,
  `rentDate` varchar(10) NOT NULL,
  `returnDate` varchar(10) NOT NULL,
  `movieRentPrice` float NOT NULL,
  `deposit` float NOT NULL,
  PRIMARY KEY (`rentalNo`),
  KEY `custId` (`custId`),
  KEY `rental_ibfk_2` (`inv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rentalNo`, `custId`, `inv_id`, `rentDate`, `returnDate`, `movieRentPrice`, `deposit`) VALUES
(49, 6, 13, '2015-03-17', '15-19-15', 500, 100.5),
(50, 3, 12, '2015-03-17', '15-19-15', 500, 100.5),
(51, 3, 3, '2015-03-17', '15-19-15', 500, 100.5),
(52, 3, 2, '2015-03-17', '15-19-15', 500, 100.5),
(53, 3, 2, '2015-03-17', '15-19-15', 500, 100.5),
(54, 3, 2, '2015-03-17', '15-19-15', 500, 100.5),
(74, 3, 12, '2015-03-17', '15-19-15', 500, 100.5),
(75, 3, 2, '2015-03-17', '15-19-15', 500, 100.5),
(76, 3, 12, '2015-03-18', '15-20-15', 500, 100.5),
(77, 3, 24, '2015-03-18', '15-20-15', 500, 100.5),
(78, 3, 13, '2015-03-18', '15-20-15', 500, 100.5),
(79, 2, 4, '2015-03-18', '15-20-15', 140.4, 100.5),
(80, 3, 13, '2015-03-18', '15-20-15', 500, 100.5),
(81, 3, 13, '2015-03-18', '15-20-15', 500, 100.5),
(82, 3, 14, '2015-03-18', '15-20-15', 500, 100.5),
(83, 3, 14, '2015-03-18', '15-20-15', 500, 100.5),
(84, 3, 13, '2015-03-18', '15-20-15', 500, 100.5),
(85, 3, 13, '2015-03-18', '15-20-15', 500, 100.5),
(86, 3, 2, '2015-03-18', '15-20-15', 130.5, 100.5),
(87, 3, 2, '2015-03-18', '15-20-15', 130.5, 100.5),
(88, 3, 2, '2015-03-18', '15-20-15', 130.5, 100.5),
(89, 3, 2, '2015-03-18', '15-20-15', 130.5, 100.5),
(90, 3, 2, '2015-03-18', '15-20-15', 130.5, 100.5),
(95, 3, 13, '2015-03-19', '15-21-15', 500, 100.5),
(96, 3, 14, '2015-03-19', '15-21-15', 500, 100.5),
(97, 6, 4, '2015-03-19', '15-21-15', 140.4, 100.5),
(98, 3, 14, '2015-03-19', '15-21-15', 500, 100.5),
(99, 3, 15, '2015-03-19', '15-21-15', 500, 100.5),
(100, 8, 14, '2015-03-19', '15-21-15', 500, 100.5),
(105, 6, 23, '2015-03-19', '15-21-15', 500, 100.5),
(106, 3, 14, '2015-03-20', '15-22-15', 500, 100.5),
(107, 13, 3, '2015-04-22', '15-24-15', 100.5, 100.5),
(108, 14, 13, '2015-06-20', '15-22-15', 500, 100.5),
(109, 3, 2, '2015-06-20', '15-22-15', 130.5, 100.5),
(110, 3, 14, '2015-06-20', '15-22-15', 500, 100.5),
(111, 3, 21, '2015-06-20', '15-22-15', 500, 100.5),
(112, 3, 25, '2015-06-27', '15-29-15', 500, 100.5),
(113, 3, 13, '2015-06-27', '15-29-15', 500, 100.5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stat` varchar(10) NOT NULL,
  `custId` int(11) DEFAULT NULL,
  `type` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `stat`, `custId`, `type`) VALUES
(1, 'lourence', '123', 'active', 2, 'admin'),
(2, 'userx', '4321', 'active', 3, 'guest'),
(3, 'noel', 'cagat', 'active', 4, 'guest'),
(4, 'rexus', 'lrbtctuusc', 'active', 5, 'guest'),
(5, 'adja', 'iloveyou143', 'active', 6, 'guest'),
(6, 'mark', 'choy', 'active', 7, 'guest'),
(7, 'ibyang0924', 'ibyang', 'active', 8, 'guest'),
(8, 'joshua', '12345', 'active', 9, NULL),
(9, 'cueme', 'albert', 'active', 10, NULL),
(10, 'barbs', 'abcd', 'active', 11, NULL),
(11, 'mikee', 'jojo', 'active', 12, NULL),
(12, 'jade', 'bata', 'active', 13, NULL),
(13, 'pilip', 'pilip', 'active', 14, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customer` (`custId`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`rentalNo`) REFERENCES `rental` (`rentalNo`),
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`movieID`) REFERENCES `movie` (`movieID`);

--
-- Constraints for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `pick_up_ibfk_1` FOREIGN KEY (`rentalNo`) REFERENCES `rental` (`rentalNo`),
  ADD CONSTRAINT `pick_up_ibfk_2` FOREIGN KEY (`movieID`) REFERENCES `movie` (`movieID`),
  ADD CONSTRAINT `pick_up_ibfk_3` FOREIGN KEY (`custId`) REFERENCES `customer` (`custId`),
  ADD CONSTRAINT `pick_up_ibfk_4` FOREIGN KEY (`empID`) REFERENCES `employee` (`empID`);

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customer` (`custId`),
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`inv_id`) REFERENCES `inventory` (`inv_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
