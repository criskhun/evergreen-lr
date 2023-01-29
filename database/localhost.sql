-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2012 at 08:43 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservation`
--
CREATE DATABASE `reservation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reservation`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(50) NOT NULL,
  `datemake` varchar(25) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activity`
--


-- --------------------------------------------------------

--
-- Table structure for table `activitylist`
--

CREATE TABLE IF NOT EXISTS `activitylist` (
  `activitylist_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(30) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  PRIMARY KEY (`activitylist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activitylist`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `adminpass` varchar(10) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `adminpass`, `firstname`, `lastname`, `email`) VALUES
(1, 'admin', 'a', 'Joebert', 'Visto', ''),
(6, 'admin1', 'admin1', 'Dynamic Properties and', 'Realty Corporation', 'fhgf ');

-- --------------------------------------------------------

--
-- Table structure for table `billingstatement`
--

CREATE TABLE IF NOT EXISTS `billingstatement` (
  `billstat_id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`billstat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `billingstatement`
--


-- --------------------------------------------------------

--
-- Table structure for table `birth_marriage`
--

CREATE TABLE IF NOT EXISTS `birth_marriage` (
  `birth_marriageid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dateuploaded` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`birth_marriageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `birth_marriage`
--


-- --------------------------------------------------------

--
-- Table structure for table `birthcert`
--

CREATE TABLE IF NOT EXISTS `birthcert` (
  `birthcer_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  PRIMARY KEY (`birthcer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `birthcert`
--


-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `block_id` int(11) NOT NULL AUTO_INCREMENT,
  `block` int(11) NOT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `block`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40);

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE IF NOT EXISTS `cedula` (
  `cedulaid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`cedulaid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cedula`
--


-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `subdname` varchar(25) NOT NULL,
  `model` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `lotarea` int(11) NOT NULL,
  `floorarea` int(11) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `costprice` decimal(11,0) NOT NULL,
  `downpayment` decimal(11,0) NOT NULL,
  `balance` decimal(11,0) NOT NULL,
  `five` decimal(11,0) NOT NULL,
  `seven` decimal(11,0) NOT NULL,
  `ten` decimal(11,0) NOT NULL,
  `houseimg` varchar(1000) NOT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `subdname`, `model`, `type`, `description`, `lotarea`, `floorarea`, `price`, `costprice`, `downpayment`, `balance`, `five`, `seven`, `ten`, `houseimg`) VALUES
(1, 'Oasis', 'Teresa', '2 Storey', 'wla kwarto, wala cr, wala tubig, wala kuryente', 120, 100, '1000', '120000', '24000', '96000', '493460', '5998586', '703225', 'houseimg/Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE IF NOT EXISTS `lot` (
  `lot_id` int(11) NOT NULL AUTO_INCREMENT,
  `subdname` varchar(25) NOT NULL,
  `phase` varchar(5) NOT NULL,
  `block` int(3) NOT NULL,
  `lotno` int(3) NOT NULL,
  `lotarea` int(11) NOT NULL,
  `class` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `tcp` int(11) NOT NULL,
  `lotstatus` varchar(20) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `soldto` varchar(50) NOT NULL,
  PRIMARY KEY (`lot_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=444 ;

--
-- Dumping data for table `lot`
--

INSERT INTO `lot` (`lot_id`, `subdname`, `phase`, `block`, `lotno`, `lotarea`, `class`, `price`, `tcp`, `lotstatus`, `remarks`, `soldto`) VALUES
(49, 'Oasis', '1-A', 10, 5, 120, 'Regular', '3700', 444000, 'Sold', '', ''),
(15, 'Oasis', '1-A', 14, 5, 245, 'fjhg', '300000', 120000, 'Sold', '', ''),
(13, 'Oasis', '1-A', 14, 3, 206, 'ghgk', '300000', 120000, 'Sold', '', ''),
(14, 'Oasis', '1-A', 14, 4, 161, 'hgh', '300000', 120000, 'Available', '', ''),
(160, 'Oasis', '1-B', 2, 19, 627, '', '300000', 0, 'Available', '', ''),
(10, 'Oasis', '1-A', 14, 2, 134, 'ghkhkj', '300000', 0, 'Available', '', ''),
(9, 'Oasis', '1-A', 14, 1, 114, 'jj', '42235', 0, 'Available', '', ''),
(16, 'Oasis', '1-A', 13, 1, 189, 'ghgj', '300000', 0, 'Available', '', ''),
(17, 'Oasis', '1-A', 13, 2, 130, 'gkjghj', '300000', 0, 'Available', '', ''),
(18, 'Oasis', '1-A', 13, 3, 140, 'jj', '300000', 0, 'Available', '', ''),
(19, 'Oasis', '1-A', 13, 4, 120, 'hjk', '300000', 0, 'Available', '', ''),
(20, 'Oasis', '1-A', 13, 5, 140, 'gk', '300000', 0, 'Available', '', ''),
(21, 'Oasis', '1-A', 13, 6, 120, 'hkj', '300000', 0, 'Available', '', ''),
(22, 'Oasis', '1-A', 13, 7, 140, 'hjkh', '300000', 0, 'Available', '', ''),
(23, 'Oasis', '1-A', 13, 8, 120, 'jjkhjkh', '300000', 0, 'Available', '', ''),
(24, 'Oasis', '1-A', 13, 9, 140, 'jlj', '300000', 0, 'Available', '', ''),
(25, 'Oasis', '1-A', 13, 10, 120, 'hghjg', '300000', 0, 'Available', '', ''),
(26, 'Oasis', '1-A', 13, 11, 140, 'ghg', '300000', 0, 'Available', '', ''),
(27, 'Oasis', '1-A', 13, 12, 120, 'hjhjh', '300000', 0, 'Available', '', ''),
(28, 'Oasis', '1-A', 13, 13, 140, 'ykhjk', '300000', 0, 'Available', '', ''),
(29, 'Oasis', '1-A', 13, 14, 120, 'hjhj', '300000', 0, 'Available', '', ''),
(30, 'Oasis', '1-A', 13, 15, 140, 'ggf', '300000', 0, 'Available', '', ''),
(31, 'Oasis', '1-A', 13, 16, 120, 'jjj', '300000', 0, 'Available', '', ''),
(32, 'Oasis', '1-A', 13, 17, 140, 'hgh', '300000', 0, 'Available', '', ''),
(33, 'Oasis', '1-A', 13, 18, 120, 'hhg', '300000', 0, 'Available', '', ''),
(34, 'Oasis', '1-A', 13, 19, 140, 'hhgh', '300000', 0, 'Available', '', ''),
(35, 'Oasis', '1-A', 13, 20, 120, 'hgfg', '300000', 0, 'Available', '', ''),
(36, 'Oasis', '1-A', 13, 21, 149, 'fgfg', '300000', 0, 'Available', '', ''),
(37, 'Oasis', '1-A', 13, 22, 127, 'jghg', '300000', 0, 'Available', '', ''),
(38, 'Oasis', '1-A', 10, 1, 170, 'Corner Lot', '3900', 663000, 'Available', '', ''),
(64, 'Oasis', '1-A', 10, 19, 138, 'Regular', '3700', 510600, 'Sold', '', ''),
(40, 'Oasis', '1-A', 10, 3, 141, 'Regular', '3700', 521700, 'Sold', '', ''),
(41, 'Oasis', '1-A', 10, 4, 141, 'Regular', '3700', 521700, 'Sold', '', ''),
(163, 'Oasis', '1-B', 5, 4, 173, 'Regular', '4000', 692000, 'Available', '', ''),
(162, 'Oasis', '1-B', 5, 2, 147, 'Regular Corner', '4200', 0, 'Available', '', ''),
(161, 'Oasis', '1-B', 2, 6, 144, 'Regular Corner', '4200', 604800, 'Available', '', ''),
(159, 'Oasis', '1-B', 8, 14, 168, '', '300000', 0, 'Available', '', ''),
(156, 'Oasis', '1-B', 8, 1, 157, 'Main Avenue Cor', '4500', 0, 'Available', '', ''),
(50, 'Oasis', '1-A', 10, 6, 120, 'Regular', '3700', 444000, 'Sold', '', ''),
(51, 'Oasis', '1-A', 10, 7, 120, 'Regular', '3700', 444000, 'Sold', '', ''),
(52, 'Oasis', '1-A', 10, 8, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(53, 'Oasis', '1-A', 10, 9, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(54, 'Oasis', '1-A', 10, 10, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(55, 'Oasis', '1-A', 10, 11, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(56, 'Oasis', '1-A', 10, 12, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(57, 'Oasis', '1-A', 10, 13, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(58, 'Oasis', '1-A', 10, 14, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(59, 'Oasis', '1-A', 10, 15, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(60, 'Oasis', '1-A', 10, 16, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(61, 'Oasis', '1-A', 10, 17, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(62, 'Oasis', '1-A', 10, 18, 119, 'Regular', '3700', 440300, 'Available', '', ''),
(63, 'Oasis', '1-A', 10, 2, 155, 'Corner Lot', '3900', 604500, 'Available', '', ''),
(65, 'Oasis', '1-A', 10, 20, 165, 'Corner Lot', '3900', 643500, 'Future Development', '', ''),
(66, 'Oasis', '1-A', 10, 21, 162, 'Irregular', '3600', 583200, 'Available', '', ''),
(67, 'Oasis', '1-A', 10, 22, 120, 'Facing East', '3800', 456000, 'Future Development', '', ''),
(68, 'Oasis', '1-A', 10, 23, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(69, 'Oasis', '1-A', 10, 24, 130, 'Facing East', '3800', 494000, 'Future Development', '', ''),
(70, 'Oasis', '1-A', 10, 25, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(71, 'Oasis', '1-A', 10, 26, 120, 'Facing East', '3800', 456000, 'Future Development', '', ''),
(72, 'Oasis', '1-A', 10, 27, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(73, 'Oasis', '1-A', 10, 28, 120, 'Facing East', '3800', 456000, 'Future Development', '', ''),
(74, 'Oasis', '1-A', 10, 29, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(75, 'Oasis', '1-A', 10, 30, 120, 'Facing East', '3800', 456000, 'Future Development', '', ''),
(76, 'Oasis', '1-A', 10, 31, 133, 'Facing East', '3800', 505400, 'Sold', '', ''),
(77, 'Oasis', '1-A', 10, 32, 132, 'Corner Lot', '3900', 514800, 'Available', '', ''),
(78, 'Oasis', '1-A', 10, 33, 188, 'Irregular', '3600', 676800, 'Available', '', ''),
(79, 'Oasis', '1-A', 10, 34, 144, 'Regular', '3700', 532800, 'Available', '', ''),
(80, 'Oasis', '1-A', 10, 35, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(81, 'Oasis', '1-A', 10, 36, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(82, 'Oasis', '1-A', 10, 37, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(83, 'Oasis', '1-A', 10, 38, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(84, 'Oasis', '1-A', 10, 39, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(85, 'Oasis', '1-A', 10, 40, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(86, 'Oasis', '1-A', 10, 41, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(87, 'Oasis', '1-A', 10, 42, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(88, 'Oasis', '1-A', 10, 43, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(89, 'Oasis', '1-A', 10, 44, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(90, 'Oasis', '1-A', 10, 45, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(91, 'Oasis', '1-A', 10, 46, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(92, 'Oasis', '1-A', 10, 47, 135, 'Regular', '3700', 499500, 'Available', '', ''),
(93, 'Oasis', '1-A', 10, 48, 135, 'Regular', '3700', 499500, 'Available', '', ''),
(94, 'Oasis', '1-A', 10, 49, 169, 'Corner Lot', '3900', 659100, 'Available', '', ''),
(95, 'Oasis', '1-A', 10, 50, 154, 'Corner Lot', '3900', 600600, 'Available', '', ''),
(96, 'Oasis', '1-A', 11, 1, 170, 'Corner Lot', '3900', 663000, 'Available', '', ''),
(97, 'Oasis', '1-A', 11, 2, 155, 'Corner Lot', '3900', 604500, 'Available', '', ''),
(98, 'Oasis', '1-A', 11, 3, 121, 'Regular', '3700', 447700, 'Available', '', ''),
(99, 'Oasis', '1-A', 11, 4, 121, 'Regular', '3700', 447700, 'Available', '', ''),
(100, 'Oasis', '1-A', 11, 5, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(101, 'Oasis', '1-A', 11, 6, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(102, 'Oasis', '1-A', 11, 7, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(103, 'Oasis', '1-A', 11, 8, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(104, 'Oasis', '1-A', 11, 9, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(105, 'Oasis', '1-A', 11, 10, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(106, 'Oasis', '1-A', 11, 11, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(107, 'Oasis', '1-A', 11, 12, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(108, 'Oasis', '1-A', 11, 13, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(109, 'Oasis', '1-A', 11, 14, 120, 'Regular', '3700', 444000, 'Available', '', ''),
(110, 'Oasis', '1-A', 11, 15, 130, 'Corner Lot', '3900', 507000, 'Available', '', ''),
(111, 'Oasis', '1-A', 11, 16, 125, 'Corner Lot', '3900', 487500, 'Available', '', ''),
(112, 'Oasis', '1-A', 9, 1, 149, 'Corner Lot', '3900', 581100, 'Sold', '', ''),
(113, 'Oasis', '1-A', 9, 2, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(114, 'Oasis', '1-A', 9, 3, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(115, 'Oasis', '1-A', 9, 4, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(116, 'Oasis', '1-A', 9, 5, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(117, 'Oasis', '1-A', 9, 6, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(118, 'Oasis', '1-A', 9, 7, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(119, 'Oasis', '1-A', 9, 8, 120, 'Regular', '3700', 0, 'Sold', '', ''),
(120, 'Oasis', '1-A', 9, 9, 180, 'Regular', '3700', 0, 'Sold', '', ''),
(121, 'Oasis', '1-A', 9, 10, 213, 'Corner Lot', '3900', 0, 'Sold', '', ''),
(122, 'Oasis', '1-A', 9, 11, 190, 'Corner Lot', '3900', 0, 'Sold', '', ''),
(123, 'Oasis', '1-A', 1, 1, 153, 'Corner Lot', '3900.00', 596700, 'Available', '', 'fshgfh'),
(124, 'Oasis', '1-A', 1, 2, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(125, 'Oasis', '1-A', 1, 3, 156, 'Regular', '3700', 577200, 'Available', '', ''),
(126, 'Oasis', '1-A', 1, 4, 155, 'Regular', '3700', 573500, 'Available', '', ''),
(127, 'Oasis', '1-A', 1, 5, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(128, 'Oasis', '1-A', 1, 6, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(129, 'Oasis', '1-A', 1, 7, 155, 'Regular', '3700', 573500, 'Available', '', ''),
(130, 'Oasis', '1-A', 1, 8, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(131, 'Oasis', '1-A', 1, 9, 148, 'Regular', '3700', 547600, 'Available', '', ''),
(132, 'Oasis', '1-A', 1, 10, 155, 'Regular', '3700', 573500, 'Available', '', ''),
(133, 'Oasis', '1-A', 1, 11, 130, 'Regular', '3700', 481000, 'Available', '', ''),
(134, 'Oasis', '1-A', 1, 12, 121, 'Regular', '3700', 447700, 'Available', '', ''),
(135, 'Oasis', '1-A', 1, 13, 131, 'Corner Lot', '3900', 510900, 'Available', '', ''),
(136, 'Oasis', '1-A', 1, 14, 701, 'a', '30000', 0, 'Available', '', ''),
(137, 'Oasis', '1-B', 7, 1, 139, 'a', '30000', 0, 'Sold', '', ''),
(138, 'Oasis', '1-B', 7, 2, 143, 'Corner Facing E', '4400', 629200, 'Available', '', ''),
(139, 'Oasis', '1-B', 7, 3, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(140, 'Oasis', '1-B', 7, 4, 120, 'Regular-Facing ', '4300', 516000, 'Available', '', ''),
(141, 'Oasis', '1-B', 7, 5, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(142, 'Oasis', '1-B', 7, 6, 120, 'Regular Facing ', '4300', 516000, 'Available', '', ''),
(143, 'Oasis', '1-B', 7, 7, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(144, 'Oasis', '1-B', 7, 8, 123, 'Regular', '4300', 516000, 'Available', '', ''),
(145, 'Oasis', '1-B', 7, 9, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(146, 'Oasis', '1-B', 7, 10, 120, 'Regular Facing ', '4300', 516000, 'Available', '', ''),
(147, 'Oasis', '1-B', 7, 11, 133, 'Main Avenue', '4400', 585200, 'Available', '', ''),
(148, 'Oasis', '1-B', 7, 12, 153, 'Regular Facing ', '4300', 657900, 'Available', '', ''),
(149, 'Oasis', '1-B', 7, 13, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(150, 'Oasis', '1-B', 7, 14, 120, 'a', '30000', 0, 'Sold', '', ''),
(151, 'Oasis', '1-B', 7, 15, 115, 'Main Avenue', '4400', 506000, 'Available', '', ''),
(152, 'Oasis', '1-B', 7, 16, 141, 'Regular Facing ', '4300', 0, 'Sold', '', ''),
(153, 'Oasis', '1-B', 7, 17, 131, 'Main Avenue', '4400', 0, 'Sold', '', ''),
(154, 'Oasis', '1-B', 7, 18, 159, 'Corner Facing E', '4400', 0, 'Sold', '', ''),
(164, 'Oasis', '1-B', 5, 6, 140, 'Regular ', '4000', 560000, 'Available', '', ''),
(165, 'Oasis', '1-B', 5, 7, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(166, 'Oasis', '1-B', 5, 8, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(167, 'Oasis', '1-B', 5, 10, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(168, 'Oasis', '1-B', 5, 12, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(169, 'Oasis', '1-B', 5, 14, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(170, 'Oasis', '1-B', 5, 16, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(171, 'Oasis', '1-B', 5, 18, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(172, 'Oasis', '1-B', 5, 19, 172, 'Regular Corner', '4200', 722400, 'Available', '', ''),
(173, 'Oasis', '1-B', 5, 38, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(174, 'Oasis', '1-B', 3, 1, 214, 'Regular-Corner', '4200', 898800, 'Available', '', ''),
(175, 'Oasis', '1-B', 3, 2, 194, 'Regular-Corner', '4200', 814800, 'Available', '', ''),
(176, 'Oasis', '1-B', 3, 11, 214, 'Regular Corner', '4200', 898800, 'Available', '', ''),
(177, 'Oasis', '1-B', 4, 6, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(178, 'Oasis', '1-B', 4, 8, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(179, 'Oasis', '1-B', 4, 11, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(180, 'Oasis', '1-B', 4, 13, 144, 'Regular Corner', '4200', 604800, 'Available', '', ''),
(181, 'Oasis', '2-A', 15, 1, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(182, 'Oasis', '2-A', 15, 2, 146, 'Facing East', '3700', 540200, 'Available', '', ''),
(183, 'Oasis', '2-A', 15, 3, 244, 'Facing East', '3700', 902800, 'Available', '', ''),
(184, 'Oasis', '2-A', 15, 4, 194, 'Facing East', '3700', 717800, 'Reserved', '', 'srgdfgh'),
(185, 'Oasis', '2-A', 15, 5, 164, 'Facing East', '3700', 606800, 'Available', '', ''),
(186, 'Oasis', '2-A', 15, 6, 141, 'Facing East', '3700', 521700, 'Available', '', ''),
(187, 'Oasis', '2-A', 15, 7, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(188, 'Oasis', '2-A', 15, 8, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(189, 'Oasis', '2-A', 15, 9, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(190, 'Oasis', '2-A', 15, 10, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(191, 'Oasis', '2-A', 15, 11, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(192, 'Oasis', '2-A', 15, 12, 140, 'Facing East', '3700', 518000, 'Available', '', ''),
(193, 'Oasis', '2-A', 15, 13, 144, 'Facing East', '3700', 532800, 'Available', '', ''),
(194, 'Oasis', '2-A', 15, 14, 169, 'Facing East', '3700', 625300, 'Available', '', ''),
(195, 'Oasis', '2-A', 15, 16, 167, 'Regular', '3600', 673200, 'Available', '', ''),
(196, 'Oasis', '2-A', 15, 17, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(197, 'Oasis', '2-A', 15, 18, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(198, 'Oasis', '2-A', 15, 19, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(199, 'Oasis', '2-A', 15, 20, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(200, 'Oasis', '2-A', 15, 21, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(201, 'Oasis', '2-A', 15, 22, 160, 'Regular', '3600', 576000, 'Available', '', ''),
(202, 'Oasis', '2-A', 15, 23, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(203, 'Oasis', '2-A', 15, 24, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(204, 'Oasis', '2-A', 15, 25, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(205, 'Oasis', '2-A', 15, 26, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(206, 'Oasis', '2-A', 15, 27, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(207, 'Oasis', '2-A', 15, 28, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(208, 'Oasis', '2-A', 15, 29, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(209, 'Oasis', '2-A', 15, 30, 140, 'Regular', '3600', 504000, 'Available', '', ''),
(210, 'Oasis', '2-A', 15, 31, 161, 'Regular', '3600', 579600, 'Available', '', ''),
(211, 'Oasis', '2-A', 16, 1, 304, 'Corner Lot', '3900', 1185600, 'Available', '', ''),
(212, 'Oasis', '2-A', 16, 3, 197, 'Regular', '3600', 709200, 'Available', '', ''),
(213, 'Oasis', '2-A', 16, 5, 169, 'Regular', '3600', 608400, 'Available', '', ''),
(214, 'Oasis', '2-A', 16, 7, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(215, 'Oasis', '2-A', 16, 9, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(216, 'Oasis', '2-A', 16, 11, 127, 'Regular', '3600', 457200, 'Available', '', ''),
(217, 'Oasis', '2-A', 16, 13, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(218, 'Oasis', '2-A', 16, 15, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(219, 'Oasis', '2-A', 16, 17, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(220, 'Oasis', '2-A', 16, 19, 163, 'Regular', '3600', 586800, 'Available', '', ''),
(221, 'Oasis', '2-A', 16, 21, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(222, 'Oasis', '2-A', 16, 23, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(223, 'Oasis', '2-A', 16, 25, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(224, 'Oasis', '2-A', 16, 27, 141, 'Regular', '3600', 507600, 'Available', '', ''),
(225, 'Oasis', '1-B', 4, 14, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(226, 'Oasis', '1-B', 4, 15, 120, 'Regular', '4000', 480000, 'Available', '', ''),
(227, 'Oasis', '1-B', 4, 16, 140, 'Regular', '4000', 560000, 'Available', '', ''),
(228, 'Oasis', '1-B', 4, 17, 196, 'Regular', '4000', 784000, 'Available', '', ''),
(229, 'Oasis', '1-B', 4, 18, 154, 'Regular', '4000', 616000, 'Available', '', ''),
(230, 'Oasis', '1-B', 4, 20, 168, 'Regular Corner', '4200', 705600, 'Available', '', ''),
(231, 'Oasis', '2-A', 17, 5, 161, 'Regular', '3700', 595700, 'Available', '', ''),
(232, 'Oasis', '2-A', 17, 7, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(233, 'Oasis', '2-A', 17, 9, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(234, 'Oasis', '2-A', 17, 11, 129, 'Regular', '3600', 464400, 'Available', '', ''),
(235, 'Oasis', '2-A', 17, 13, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(236, 'Oasis', '2-A', 17, 15, 154, 'Regular', '3600', 554400, 'Available', '', ''),
(237, 'Oasis', '2-A', 17, 17, 127, 'Regular', '3600', 457200, 'Available', '', ''),
(238, 'Oasis', '2-A', 17, 19, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(239, 'Oasis', '2-A', 17, 21, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(240, 'Oasis', '2-A', 17, 23, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(241, 'Oasis', '2-A', 17, 25, 167, 'Corner Lot', '3900', 651300, 'Available', '', ''),
(242, 'Oasis', '2-A', 18, 1, 133, 'Corner Lot', '3900', 518700, 'Available', '', ''),
(243, 'Oasis', '2-A', 18, 3, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(244, 'Oasis', '2-A', 18, 5, 146, 'Regular', '3600', 525600, 'Available', '', ''),
(245, 'Oasis', '2-A', 18, 7, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(246, 'Oasis', '2-A', 18, 9, 130, 'Regular', '3600', 468000, 'Available', '', ''),
(247, 'Oasis', '2-A', 18, 11, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(248, 'Oasis', '2-A', 18, 13, 143, 'Regular', '3600', 514800, 'Available', '', ''),
(249, 'Oasis', '2-A', 18, 14, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(250, 'Oasis', '2-A', 18, 16, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(251, 'Oasis', '2-A', 18, 18, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(252, 'Oasis', '2-A', 18, 20, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(253, 'Oasis', '2-A', 18, 22, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(254, 'Oasis', '2-A', 18, 24, 129, 'Regular', '3600', 464400, 'Available', '', ''),
(255, 'Oasis', '2-A', 18, 26, 158, 'Irregular', '3600', 568800, 'Available', '', ''),
(256, 'Oasis', '2-A', 18, 29, 127, 'Regular', '3600', 457200, 'Available', '', ''),
(257, 'Oasis', '2-A', 18, 30, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(258, 'Oasis', '2-A', 18, 31, 133, 'Regular', '3600', 478800, 'Available', '', ''),
(259, 'Oasis', '2-A', 18, 32, 185, 'Regular', '3600', 666000, 'Available', '', ''),
(260, 'Oasis', '2-A', 18, 33, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(261, 'Oasis', '2-A', 18, 34, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(262, 'Oasis', '2-A', 18, 35, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(263, 'Oasis', '2-A', 18, 36, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(264, 'Oasis', '2-A', 18, 37, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(265, 'Oasis', '2-A', 18, 38, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(266, 'Oasis', '2-A', 18, 39, 196, 'Regular', '3600', 705600, 'Available', '', ''),
(267, 'Oasis', '2-A', 18, 40, 120, 'Regular', '6300', 756000, 'Available', '', ''),
(268, 'Oasis', '2-A', 18, 41, 143, 'Corner Lot', '3900', 557700, 'Available', '', ''),
(269, 'Oasis', '2-A', 20, 1, 128, 'Corner Lot', '3900', 499200, 'Available', '', ''),
(270, 'Oasis', '2-A', 20, 2, 140, 'Corner Lot', '3900', 546000, 'Available', '', ''),
(271, 'Oasis', '2-A', 20, 5, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(272, 'Oasis', '2-A', 20, 6, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(273, 'Oasis', '2-A', 20, 7, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(274, 'Oasis', '2-A', 20, 8, 153, 'Regular', '3600', 550800, 'Available', '', ''),
(275, 'Oasis', '2-A', 20, 9, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(276, 'Oasis', '2-A', 20, 10, 133, 'Regular', '3600', 478800, 'Available', '', ''),
(277, 'Oasis', '2-A', 20, 15, 131, 'Regular', '3600', 471600, 'Available', '', ''),
(278, 'Oasis', '2-B', 22, 15, 144, 'Regular', '3600', 518400, 'Available', '', ''),
(279, 'Oasis', '2-B', 22, 24, 148, 'Regular', '3600', 532800, 'Available', '', ''),
(280, 'Oasis', '2-B', 22, 33, 160, 'Regular', '3000', 0, 'Available', '', ''),
(281, 'Oasis', '2-B', 22, 35, 160, '', '3000', 0, 'Available', '', ''),
(282, 'Oasis', '2-B', 22, 38, 164, 'Regular', '3600', 590400, 'Available', '', ''),
(283, 'Oasis', '2-B', 22, 44, 141, 'Regular-Corner', '3600', 507600, 'Available', '', ''),
(284, 'Oasis', '2-B', 23, 8, 131, 'Regular', '3600', 471600, 'Available', '', ''),
(285, 'Oasis', '2-B', 23, 9, 204, 'Regular', '3600', 734400, 'Available', '', ''),
(286, 'Oasis', '2-B', 23, 10, 132, 'Regular', '3600', 475200, 'Available', '', ''),
(287, 'Oasis', '2-B', 23, 11, 120, 'Regular', '3600', 540000, 'Available', '', ''),
(288, 'Oasis', '2-B', 23, 16, 137, 'Regular', '3600', 493200, 'Available', '', ''),
(289, 'Oasis', '2-B', 23, 18, 120, 'Regular', '3800', 456000, 'Available', '', ''),
(290, 'Oasis', '2-B', 23, 19, 137, 'Regular', '3600', 493200, 'Available', '', ''),
(291, 'Oasis', '2-B', 23, 20, 120, 'Regular', '3600', 432000, 'Available', '', ''),
(292, 'Oasis', '2-B', 23, 21, 132, 'Regular', '3600', 475300, 'Available', '', ''),
(293, 'Oasis', '2-B', 24, 1, 143, 'Regular-Corner', '3100', 443300, 'Available', '', ''),
(294, 'Oasis', '2-B', 24, 2, 195, 'Regular-Corner', '3100', 604500, 'Available', '', ''),
(295, 'Oasis', '2-B', 24, 3, 150, 'Regular-Corner', '3100', 465000, 'Available', '', ''),
(296, 'Oasis', '2-B', 24, 4, 190, 'Regular', '3000', 570000, 'Available', '', ''),
(297, 'Oasis', '2-B', 25, 1, 157, 'Regular-Corner', '3100', 517700, 'Available', '', ''),
(298, 'Oasis', '2-B', 25, 2, 184, 'Regular', '3000', 552000, 'Available', '', ''),
(299, 'Oasis', '2-B', 25, 3, 135, 'Regular', '3000', 418500, 'Available', '', ''),
(300, 'Oasis', '2-B', 25, 4, 161, 'Regular', '3000', 483000, 'Available', '', ''),
(301, 'Oasis', '2-B', 25, 5, 197, 'Regular-Corner', '3100', 610700, 'Available', '', ''),
(302, 'Oasis', '2-B', 25, 6, 192, 'Regular-Corner', '3100', 595200, 'Available', '', ''),
(303, 'Oasis', '2-B', 26, 1, 147, 'Regular-Corner', '3100', 455700, 'Available', '', ''),
(304, 'Oasis', '2-B', 26, 2, 198, 'Regular', '3000', 594000, 'Available', '', ''),
(305, 'Oasis', '2-B', 26, 3, 136, 'Regular-Corner', '3100', 421600, 'Available', '', ''),
(306, 'Oasis', '2-B', 26, 4, 178, 'Regular', '3000', 534000, 'Available', '', ''),
(307, 'Oasis', '2-B', 27, 1, 140, 'Regular-Corner', '3100', 434000, 'Available', '', ''),
(308, 'Oasis', '2-B', 27, 2, 153, 'Regular', '3000', 459000, 'Available', '', ''),
(309, 'Oasis', '2-B', 27, 3, 122, 'Regular-Corner', '3100', 378200, 'Available', '', ''),
(310, 'Oasis', '2-B', 27, 4, 143, 'Regular-Corner', '3100', 443300, 'Available', '', ''),
(311, 'Oasis', '2-B', 27, 5, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(312, 'Oasis', '2-B', 27, 6, 168, 'Regular-Corner', '3100', 520000, 'Available', '', ''),
(313, 'Oasis', '2-B', 27, 7, 185, 'Regular', '3000', 555000, 'Available', '', ''),
(314, 'Oasis', '2-B', 27, 8, 131, 'Regular', '3000', 393000, 'Available', '', ''),
(315, 'Oasis', '2-B', 27, 9, 146, 'Regular', '3000', 438000, 'Available', '', ''),
(316, 'Oasis', '2-B', 27, 10, 185, 'Regular', '3000', 555000, 'Available', '', ''),
(317, 'Oasis', '2-B', 27, 11, 131, 'Regular-Corner', '3100', 406100, 'Available', '', ''),
(318, 'Oasis', '2-B', 27, 12, 116, 'Regular-Corner', '3100', 359600, 'Available', '', ''),
(319, 'Oasis', '2-B', 27, 13, 164, 'Regular', '3000', 492000, 'Available', '', ''),
(320, 'Oasis', '2-B', 28, 1, 156, 'Regular-Corner', '3100', 483600, 'Available', '', ''),
(321, 'Oasis', '2-B', 28, 2, 196, 'Regular-Corner', '3100', 607600, 'Available', '', ''),
(322, 'Oasis', '2-B', 28, 3, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(323, 'Oasis', '2-B', 28, 4, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(324, 'Oasis', '2-B', 28, 5, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(325, 'Oasis', '2-B', 28, 6, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(326, 'Oasis', '2-B', 28, 7, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(327, 'Oasis', '2-B', 28, 8, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(328, 'Oasis', '2-B', 28, 9, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(329, 'Oasis', '2-B', 28, 10, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(330, 'Oasis', '2-B', 28, 11, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(331, 'Oasis', '2-B', 28, 12, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(332, 'Oasis', '2-B', 28, 13, 153, 'Regular-Corner', '3100', 474300, 'Available', '', ''),
(333, 'Oasis', '2-B', 28, 14, 126, '', '3000', 0, 'Available', '', ''),
(334, 'Oasis', '3-A', 30, 2, 114, '', '3000', 0, 'Available', '', ''),
(335, 'Oasis', '3-A', 30, 4, 110, '', '3000', 0, 'Available', '', ''),
(336, 'Oasis', '3-A', 30, 5, 104, '', '3000', 0, 'Available', '', ''),
(337, 'Oasis', '3-A', 30, 6, 104, '', '3000', 0, 'Available', '', ''),
(338, 'Oasis', '3-A', 31, 3, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(339, 'Oasis', '3-A', 31, 12, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(340, 'Oasis', '3-A', 31, 13, 186, 'Regular', '3000', 558000, 'Available', '', ''),
(341, 'Oasis', '3-A', 31, 17, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(342, 'Oasis', '3-A', 31, 20, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(343, 'Oasis', '3-A', 31, 22, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(344, 'Oasis', '3-A', 31, 24, 110, '', '3000', 0, 'Available', '', ''),
(345, 'Oasis', '3-A', 31, 26, 110, '', '3000', 0, 'Available', '', ''),
(346, 'Oasis', '3-A', 31, 28, 189, 'Regular', '3000', 567000, 'Available', '', ''),
(347, 'Oasis', '3-A', 31, 36, 121, 'Regular', '3000', 363000, 'Available', '', ''),
(348, 'Oasis', '3-A', 31, 38, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(349, 'Oasis', '3-A', 31, 40, 121, 'Regular', '3000', 363000, 'Available', '', ''),
(350, 'Oasis', '3-A', 31, 48, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(351, 'Oasis', '3-A', 33, 18, 196, 'Regular', '3000', 588000, 'Available', '', ''),
(352, 'Oasis', '3-A', 33, 19, 200, 'Regular', '3000', 600000, 'Available', '', ''),
(353, 'Oasis', '3-A', 33, 20, 205, 'Regular', '3000', 615000, 'Available', '', ''),
(354, 'Oasis', '3-A', 33, 21, 209, 'Regular', '3000', 627000, 'Available', '', ''),
(355, 'Oasis', '3-A', 33, 22, 214, 'Regular', '3000', 642000, 'Available', '', ''),
(356, 'Oasis', '3-A', 33, 23, 218, 'Regular', '3000', 654000, 'Available', '', ''),
(357, 'Oasis', '3-A', 33, 24, 223, 'Regular', '3000', 669000, 'Available', '', ''),
(358, 'Oasis', '3-A', 33, 25, 228, 'Regular', '3000', 684000, 'Available', '', ''),
(359, 'Oasis', '3-A', 33, 26, 232, 'Regular', '3000', 696000, 'Available', '', ''),
(360, 'Oasis', '3-A', 33, 27, 237, 'Regular', '3000', 711000, 'Available', '', ''),
(361, 'Oasis', '3-A', 33, 28, 241, 'Regular', '3000', 723000, 'Available', '', ''),
(362, 'Oasis', '3-A', 33, 29, 233, 'Regular', '3000', 699000, 'Available', '', ''),
(363, 'Oasis', '3-A', 33, 30, 197, 'Regular', '3000', 591000, 'Available', '', ''),
(364, 'Oasis', '3-A', 33, 31, 165, 'Regular', '3000', 495000, 'Available', '', ''),
(365, 'Oasis', '3-A', 33, 32, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(366, 'Oasis', '3-A', 33, 33, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(367, 'Oasis', '3-A', 33, 34, 160, 'Regular', '3000', 480000, 'Available', '', ''),
(368, 'Oasis', '3-A', 33, 35, 165, 'Regular', '3000', 495000, 'Available', '', ''),
(369, 'Oasis', '3-A', 33, 36, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(370, 'Oasis', '3-A', 33, 37, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(371, 'Oasis', '3-A', 33, 38, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(372, 'Oasis', '3-A', 33, 39, 151, 'Regular', '3000', 453000, 'Available', '', ''),
(373, 'Oasis', '3-A', 33, 45, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(374, 'Oasis', '3-A', 33, 46, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(375, 'Oasis', '3-A', 33, 47, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(376, 'Oasis', '3-A', 33, 48, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(377, 'Oasis', '3-A', 33, 49, 140, 'Regular', '3000', 420000, 'Available', '', ''),
(378, 'Oasis', '3-A', 33, 50, 171, 'Regular', '3000', 513000, 'Available', '', ''),
(380, '', '', 0, 0, 0, '', '', 0, 'Available', '', ''),
(381, 'Oasis', '3-A', 38, 8, 132, 'Regular', '3000', 396000, 'Available', '', ''),
(382, 'Oasis', '3-A', 38, 10, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(383, 'Oasis', '3-A', 38, 14, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(384, 'Oasis', '3-A', 38, 16, 110, 'Regular', '3000', 330000, 'Available', '', ''),
(385, 'Oasis', '3-A', 38, 17, 120, 'Regular', '3000', 360000, 'Available', '', ''),
(386, 'Oasis', '3-B', 34, 13, 120, 'Regular', '2700', 324000, 'Available', '', ''),
(387, 'Oasis', '3-B', 34, 14, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(388, 'Oasis', '3-B', 34, 18, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(389, 'Oasis', '3-B', 34, 19, 120, 'Regular', '2700', 324000, 'Available', '', ''),
(390, 'Oasis', '3-B', 34, 24, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(391, 'Oasis', '3-B', 35, 5, 110, '', '3000', 0, 'Available', '', ''),
(392, 'Oasis', '3-B', 35, 6, 110, '', '3000', 0, 'Available', '', ''),
(393, 'Oasis', '3-B', 35, 9, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(394, 'Oasis', '3-B', 35, 10, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(395, 'Oasis', '3-B', 35, 11, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(396, 'Oasis', '3-B', 35, 12, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(397, 'Oasis', '3-B', 35, 13, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(398, 'Oasis', '3-B', 35, 14, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(399, 'Oasis', '3-B', 35, 19, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(400, 'Oasis', '3-B', 35, 20, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(401, 'Oasis', '3-B', 35, 21, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(402, 'Oasis', '3-B', 35, 22, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(403, 'Oasis', '3-B', 35, 23, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(404, 'Oasis', '3-B', 35, 24, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(405, 'Oasis', '3-B', 35, 26, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(406, 'Oasis', '3-B', 36, 11, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(407, 'Oasis', '3-B', 36, 19, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(408, 'Oasis', '3-B', 36, 21, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(409, 'Oasis', '3-B', 36, 23, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(410, 'Oasis', '3-B', 36, 25, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(411, 'Oasis', '3-B', 36, 27, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(412, 'Oasis', '3-B', 36, 29, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(413, 'Oasis', '3-B', 36, 31, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(415, 'Oasis', '3-B', 37, 6, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(416, 'Oasis', '3-B', 37, 8, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(417, 'Oasis', '3-B', 37, 10, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(418, 'Oasis', '3-B', 37, 12, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(419, 'Oasis', '3-B', 37, 16, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(420, 'Oasis', '3-B', 37, 18, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(421, 'Oasis', '3-B', 37, 20, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(422, 'Oasis', '3-B', 37, 22, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(423, 'Oasis', '3-B', 39, 3, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(424, 'Oasis', '3-B', 39, 4, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(425, 'Oasis', '3-B', 39, 5, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(426, 'Oasis', '3-B', 39, 6, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(427, 'Oasis', '3-B', 39, 7, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(428, 'Oasis', '3-B', 39, 8, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(429, 'Oasis', '3-B', 39, 9, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(430, 'Oasis', '3-B', 39, 10, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(431, 'Oasis', '3-B', 39, 11, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(432, 'Oasis', '3-B', 39, 12, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(433, 'Oasis', '3-B', 39, 13, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(434, 'Oasis', '3-B', 39, 14, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(435, 'Oasis', '3-B', 39, 15, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(436, 'Oasis', '3-B', 39, 16, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(437, 'Oasis', '3-B', 39, 17, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(438, 'Oasis', '3-B', 39, 18, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(439, 'Oasis', '3-B', 39, 19, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(440, 'Oasis', '3-B', 39, 20, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(441, 'Oasis', '3-B', 39, 21, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(442, 'Oasis', '3-B', 39, 22, 110, 'Regular', '2700', 297000, 'Available', '', ''),
(443, 'Oasis', '3-B', 39, 23, 136, '', '3000', 0, 'Available', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `email`, `content`, `status`, `date`) VALUES
(8, 'vistojoebert@yahoo.com', 'jhshdd', 'read', 'Sun, Nov 13, 2011');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
  `phase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phase` varchar(5) NOT NULL,
  PRIMARY KEY (`phase_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`phase_id`, `phase`) VALUES
(1, '1-A'),
(2, '1-B'),
(3, '2-A'),
(4, '2-B'),
(5, '3-A'),
(6, '3-B');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `pictureid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(50) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`pictureid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `picture`
--


-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `reserveid` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `spouse` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tax` int(11) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `sss` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `phase` varchar(11) NOT NULL,
  `block` int(11) NOT NULL,
  `lotno` int(3) NOT NULL,
  `area` int(11) NOT NULL,
  `price` float NOT NULL,
  `terms` varchar(4) NOT NULL,
  `downpayment` double NOT NULL,
  `discount` double NOT NULL,
  `amortbal` double NOT NULL,
  `amort` double NOT NULL,
  `ccode` varchar(6) NOT NULL,
  `Rstatus` varchar(20) NOT NULL,
  PRIMARY KEY (`reserveid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reserveid`, `date`, `buyer`, `spouse`, `address`, `status`, `gender`, `tax`, `bday`, `sss`, `mobile`, `email`, `subname`, `phase`, `block`, `lotno`, `area`, `price`, `terms`, `downpayment`, `discount`, `amortbal`, `amort`, `ccode`, `Rstatus`) VALUES
(1, 'Sep 25, 2011', 'z', '', 'z', 'single', 'Male', 111, '11-11-1111', 11, '1111111111111', 'jgfshj@jhksd.com', 'Oasis', '1-A', 14, 2, 134, 3000, '5yrs', 80400, 80400, 321600, 0, '', 'Sold'),
(40, 'Jan 19, 2012', 'a', '', 'a', '', '', 0, '', 0, '45756765', 'vistojoebert@yahoo.com', 'Oasis', '2-A', 16, 5, 0, 3600, '5yrs', 121680, 121680, 486720, 83055.02, 'y79n6m', 'Reserved'),
(41, 'Jan 27, 2012', 'dgjhdfjh', '', 'dsgdf', '', '', 0, '', 0, '43654', 'ako@yahoo.com', 'Oasis', '2-A', 15, 7, 140, 3, '7yrs', 0, 0, 0, 0, 'cbg775', 'deleted'),
(42, 'Jan 27, 2012', 'srgdfgh', '', 'dfhfdhdf', '', '', 0, '', 0, '34645756', 'ako@yahoo.com', 'Oasis', '2-A', 15, 4, 194, 3700, '10yr', 143560, 143560, 574240, 11487.51, 'b749j8', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subdivision`
--

CREATE TABLE IF NOT EXISTS `subdivision` (
  `subd_id` int(11) NOT NULL AUTO_INCREMENT,
  `subdname` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal` int(11) NOT NULL,
  PRIMARY KEY (`subd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `subdivision`
--

INSERT INTO `subdivision` (`subd_id`, `subdname`, `location`, `city`, `postal`) VALUES
(81, 'Oasis', 'Mansilingan', 'Bacolod City', 6110);

-- --------------------------------------------------------

--
-- Table structure for table `tincard`
--

CREATE TABLE IF NOT EXISTS `tincard` (
  `tinid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(100) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`tinid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tincard`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `address`, `gender`, `bday`, `email`, `password`) VALUES
(2, 'Nikki Lambert', 'E.B. Magalona', 'Female', '05-05-1990', 'nikki_lambrtz@yahoo.com', 'dhe'),
(12, 'Joebert Visto', 'E.B. Magalona', 'Male', '11-17-1987', 'vistojoebert11@gmail.com', 'mhe'),
(5, 'Joan Rose Baldia', 'Brgy. Banago, Bacolod City', 'Female', '', 'joanrosebaldia@yahoo.com', 'joan'),
(41, 'vina rose', 'talisay', 'Male', '12-04-1992', 'jgfshj@jhksd.com', '123456'),
(42, 'a', 'a', 'Male', '11-11-1111', 'vistojoebert@yahoo.com', 'a'),
(43, 'dgjhdfjh', 'dsgdf', '', '', 'ako@yahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `validid`
--

CREATE TABLE IF NOT EXISTS `validid` (
  `validid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `dateuploaded` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`validid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `validid`
--

