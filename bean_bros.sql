-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2022 at 11:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bean_bros`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Username`, `Email`, `Password`) VALUES
(1, 'Admin', 'beanbros2022@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coffeepedia`
--

DROP TABLE IF EXISTS `coffeepedia`;
CREATE TABLE IF NOT EXISTS `coffeepedia` (
  `Coffeepedia_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Admin_ID` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` varchar(432) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Written_Date` date NOT NULL,
  PRIMARY KEY (`Coffeepedia_ID`),
  KEY `Admin_ID` (`Admin_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coffee_bean`
--

DROP TABLE IF EXISTS `coffee_bean`;
CREATE TABLE IF NOT EXISTS `coffee_bean` (
  `Bean_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Coffee_Bean` text NOT NULL,
  `Coffee_Bean_Image` longblob NOT NULL,
  `Country` text NOT NULL,
  `Roast` text NOT NULL,
  `Price_Per_kg` int(255) NOT NULL,
  `Description` varchar(432) NOT NULL,
  PRIMARY KEY (`Bean_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee_bean`
--

INSERT INTO `coffee_bean` (`Bean_ID`, `Coffee_Bean`, `Coffee_Bean_Image`, `Country`, `Roast`, `Price_Per_kg`, `Description`) VALUES
(1, 'Tanzanian Peaberry Coffee', 0x74616e7a616e69616e2d70656162657272792e6a7067, 'Tanzania', 'Dark Roast', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.'),
(2, 'Hawaii Kona Coffee', 0x686177616969616e2d6b6f6e612e6a7067, 'USA', 'Medium Roast', 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.'),
(3, 'Mocha Java Coffee', 0x6d6f6368612d6a6176612d636f666665652e6a7067, 'Yemen & Indonesia', 'Medium Roast', 70, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.'),
(4, 'Guatemala Antigua Coffee', 0x67756174656d616c612e6a7067, 'Antigua, Guatemala', 'Medium Roast', 55, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.'),
(5, 'Kenya AA Coffee', 0x4b656e796141412e6a7067, 'Kenya', 'Medium Roast', 80, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.'),
(6, 'Ethiopian Yirgacheffe Coffee', 0x657468696f7069612e6a7067, 'Southern Ethiopia', 'Light-Medium Roast', 75, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex. Nunc eu nisl sit amet justo eleifend rutrum.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Company_Contact` varchar(255) NOT NULL,
  `Personal_Contact` varchar(255) NOT NULL,
  `Subscription` text,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Username`, `Email`, `Password`, `Company_Contact`, `Personal_Contact`, `Subscription`) VALUES
(2, 'NF', 'xianzyip8@gmail.com', '1111', '053223511', '0128981055', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

DROP TABLE IF EXISTS `customer_order`;
CREATE TABLE IF NOT EXISTS `customer_order` (
  `Order_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(255) NOT NULL,
  `Bean_ID` int(255) NOT NULL,
  `Coffee_Bean` text NOT NULL,
  `Amount` int(255) NOT NULL,
  `Price_Per_kg` int(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `Status` text NOT NULL,
  `Order_Date` date NOT NULL,
  PRIMARY KEY (`Order_ID`),
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Bean_ID` (`Bean_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Customer_ID` int(255) NOT NULL,
  `Feedback` varchar(432) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Feedback_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coffeepedia`
--
ALTER TABLE `coffeepedia`
  ADD CONSTRAINT `coffeepedia_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`Bean_ID`) REFERENCES `coffee_bean` (`Bean_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
