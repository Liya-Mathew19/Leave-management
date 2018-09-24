-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 01:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `reg_no` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`reg_no`, `password`, `role`) VALUES
('admin', 'admin', 0),
('7170', '123', 1),
('7173', '111', 1),
('7179', '111', 1),
('7181', '111', 1),
('7182', '111', 1),
('7199', '111', 1),
('7212', '123', 1),
('7224', '111', 1),
('7226', '111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reg_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `reg_no`, `name`, `date`, `day`, `reason`, `status`) VALUES
(3, 7199, 'JANNET GEORGE', '2016-12-14', 'AN', 'Headache.', 'APPROVED'),
(4, 7212, 'LIYA MATHEW', '2016-12-13', 'AN', 'Stomachache', 'APPROVED'),
(8, 7212, 'LIYA MATHEW', '2016-12-07', 'FN', 'msd', 'APPROVED'),
(12, 7173, 'AKHILA', '2017-01-20', 'FN', 'drses', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(500) NOT NULL,
  `reg_no` int(100) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `role` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `reg_no`, `batch`, `phone`, `email`, `image`, `role`) VALUES
('ABHAYA MOL P', 7170, 'DDMCA', '9876543210', 'abhayam@gmail.com', '7170Abhaya.jpg', 1),
('AKHILA MADHU', 7173, 'DDMCA', '9876543210', 'akhila@gmail.com', '7173Akhila.jpg', 1),
('ANJANA ASHOK', 7179, 'DDMCA', '9876543210', 'anchana@gmail.com', '7179Anchana Ashok.jpg', 1),
('ANJALY NELSON', 7181, 'DDMCA', '9876543210', 'anjaly@gmail.com', '7181Anjaly Nelson.jpg', 1),
('ANJANA VINOD', 7182, 'DDMCA', '9876543210', 'anjana@gmail.com', '7182Anjana Vinod.jpg', 1),
('JANNET GEORGE', 7199, 'DDMCA', '9876543210', 'jannet@gmail.com', '7199Janet George.jpg', 1),
('LIYA MATHEW', 7212, 'DDMCA', '9876543210', 'liyamathew11@gmail.com', '7212Liya Mathew.jpg', 1),
('SHILPA SABU', 7224, 'DDMCA', '9876543210', 'shilpa@gmail.com', '7224Shilpa Sabu.jpg', 1),
('TEENA MATHEW', 7226, 'DDMCA', '9876543210', 'teena@gmail.com', '7226Teena Mathew.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `reg_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`reg_no`, `name`, `dept`, `phone`, `email`, `image`) VALUES
(329, 'vtg', 'hgtr', '6598', 'liyamathew11@gmail.com', '2017-01-06-19-34-20-635.jpg'),
(1111, 'MERIN MANOJ', 'DDMCA', '9876543210', 'merinmanoj@gmail.com', 'merin-profile.jpg'),
(2222, 'ANKITHA PHILIP', 'MCA', '8594075060', 'ankitha@gmail.com', 'Ankitha-philip-new.jpg'),
(3333, 'ANIT JAMES', 'MCA', '8521463910', 'anit@gmail.com', 'Anit-.jpg'),
(4444, 'NIMMY FRANCIS', 'MCA', '8974563210', 'nimmyfrancis@gmail.com', 'nimmy-francis-profile.jpg'),
(5555, 'SRUTHIMOL KURIAN', 'MCA', '7896541230', 'sruthy@gmail.com', 'sruthi-profile.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
