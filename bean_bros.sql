-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2022 at 11:35 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`Coffeepedia_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coffee_bean`
--

DROP TABLE IF EXISTS `coffee_bean`;
CREATE TABLE IF NOT EXISTS `coffee_bean` (
  `Bean_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Coffee_Bean` text NOT NULL,
  `Country` text NOT NULL,
  `Roast` text NOT NULL,
  `Price_Per_kg` int(255) NOT NULL,
  `Description` varchar(432) NOT NULL,
  PRIMARY KEY (`Bean_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Company_Contact` int(255) NOT NULL,
  `Personal_Contact` int(255) NOT NULL,
  `Subscription` text,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`Order_ID`)
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
  PRIMARY KEY (`Feedback_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
