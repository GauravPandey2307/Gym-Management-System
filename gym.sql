-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2020 at 11:22 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` char(10) DEFAULT NULL,
  `cust_name` char(30) DEFAULT NULL,
  `address` char(40) DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `state` char(50) DEFAULT NULL,
  `contactperson` char(60) DEFAULT NULL,
  `email` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `city`, `state`, `contactperson`, `email`) VALUES
('1', 'Aman', 'A-80', 'Delhi', 'New Delhi', '976554443', 'gvsbaluja@yahoo.com'),
('2', 'Anuj', 'n-78,janak puri', 'Delhi', 'New Delhi', '9876666666', 'gvsbaluja@yahoo.com'),
('7', 'Farry', 'A-1,17 R.Nagar', 'New Delhi', 'Delhi', '999888999', 'balujainstitutes@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_no` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `email_id` varchar(30) NOT NULL DEFAULT '',
  `phone_no` varchar(30) NOT NULL DEFAULT '',
  `state` varchar(30) NOT NULL DEFAULT '',
  `comment` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `festive_offer`
--

CREATE TABLE IF NOT EXISTS `festive_offer` (
  `offer_no` varchar(30) NOT NULL DEFAULT '',
  `date` varchar(30) NOT NULL DEFAULT '',
  `offer_detail` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festive_offer`
--

INSERT INTO `festive_offer` (`offer_no`, `date`, `offer_detail`) VALUES
('2', '3/11/2019', 'Diwali season offer, discount'),
('3', '05-02-2020', 'Feb Discount Offer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `email_id` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `phone`, `email_id`) VALUES
('Shweta', '1234', '9212002599', 'shweta@gmail.com'),
('Kapil', '1234', '986744332', 'gvsbala@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` char(30) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `address` char(30) DEFAULT NULL,
  `email_id` char(30) DEFAULT NULL,
  `contact` char(30) DEFAULT NULL,
  `payment` char(30) DEFAULT NULL,
  `date_of_pay` char(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `address`, `email_id`, `contact`, `payment`, `date_of_pay`) VALUES
('4', 'Deepak', 'K-29 FATEH NAGAR', 'contactgurmeetkaur@gmail.com', '9854333455', 'Rs.4000', '09-03-2020'),
('7', 'Sam', 'D-67 FATEH NAGAR', 'contaeetkaur@gmail.com', '77854333455', 'Rs.7000', '08-03-2020');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supp_id` varchar(30) NOT NULL DEFAULT '',
  `supp_name` varchar(30) NOT NULL DEFAULT '',
  `comp_name` varchar(30) NOT NULL DEFAULT '',
  `productt` varchar(30) NOT NULL DEFAULT '',
  `email_id` varchar(30) NOT NULL DEFAULT '',
  `phone_no` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_name`, `comp_name`, `productt`, `email_id`, `phone_no`) VALUES
('101', 'Amit', 'A.M.Enterprises', 'Suppliments', 'amit@yahoo.com', '9834222278'),
('102', 'Daman', 'D.S.Suppliments', 'Food Suppliments', 'daman@yahoo.com', '9323456777');

-- --------------------------------------------------------

--
-- Table structure for table `trainr_detail`
--

CREATE TABLE IF NOT EXISTS `trainr_detail` (
  `trainer_id` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `designation` varchar(30) NOT NULL DEFAULT '',
  `quaification` varchar(30) NOT NULL DEFAULT '',
  `email_id` varchar(30) NOT NULL DEFAULT '',
  `date_of_joining` varchar(30) NOT NULL DEFAULT '',
  `phone_no` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainr_detail`
--

INSERT INTO `trainr_detail` (`trainer_id`, `name`, `designation`, `quaification`, `email_id`, `date_of_joining`, `phone_no`) VALUES
('2', 'Deepak', 'Trainer', 'BA', 'deepak@yahoo.com', '23-05-2019', '9834671290'),
('3', 'Anil Kumar', 'Junior Trainer', 'B.Com', 'gvsbaluja@yahoo.com', '09-09-2019', '09015596280'),
('3', 'Ady', 'A.S', 'MBA', 'balujs@gmail.com', '', '0988999280'),
('3', 'Anuj', 'Trainer', 'MA', 'gvsbalu@yahoo.com', '09-04-2019', '945555280');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
