-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2015 at 09:27 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-pass`
--

-- --------------------------------------------------------

--
-- Table structure for table `ksrtcadmin`
--

CREATE TABLE IF NOT EXISTS `ksrtcadmin` (
  `Applicaation ID` varchar(500) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `bdate` datetime NOT NULL,
  `collegename` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `From` varchar(25) NOT NULL,
  `To` varchar(25) NOT NULL,
  `studentphotos` varchar(90) NOT NULL,
  `AddressProf` varchar(90) NOT NULL,
  `payment` varchar(90) NOT NULL,
  PRIMARY KEY (`Applicaation ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ksrtcadmin`
--

INSERT INTO `ksrtcadmin` (`Applicaation ID`, `fname`, `lname`, `email`, `gender`, `bdate`, `collegename`, `address`, `city`, `zipcode`, `phone`, `mobile`, `From`, `To`, `studentphotos`, `AddressProf`, `payment`) VALUES
('54d498a046337', 'MOHAN', 'A', 'ramesh@gmail.com', 'Male', '1990-05-03 00:00:00', 'kle', '123', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'DHARWAD', 'upload/dfdremotebuddy.JPG', 'upload/dfdremotebuddy.JPG', '1455'),
('54db26b728a7a', 'sasas', 'asasa', 'abcdef@gmail.com', 'Male', '2015-02-09 00:00:00', 'asas', 'asas', 'asas', '580024', '31212', '21212', 'hubli', 'DHARWAD', 'upload/Lighthouse.jpg', 'upload/Lighthouse.jpg', '1455'),
('5500149e48e1d', 'Student', 'kl', 'abcdef@gmail.com', 'Male', '1993-05-05 00:00:00', 'kle', 'HUBLI', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'DHARWAD', 'upload/badge_eslWeotobs6351.png', 'upload/badge_losbeoesWt6354.png', '1455'),
('55053ef7205f3', 'MOHAN', 'WARMA', 'shabaz@gmail.com', 'Male', '2015-03-01 00:00:00', 'kle', 'hubli', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'DHARWAD', 'upload/girl1.jpg', 'upload/Rawn_Media_Wallpaper_HD_wallpaper.jpg', '1455');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_login`
--

CREATE TABLE IF NOT EXISTS `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) DEFAULT 'student',
  `status` varchar(10) DEFAULT NULL,
  `last_logindatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

INSERT INTO `mstr_login` (`username`, `password`, `type`, `status`, `last_logindatetime`) VALUES
('admin', '123', 'admin', 'active', '2014-11-16 16:32:00'),
('citizen1', '123', 'student', 'active', '2014-11-26 10:02:09'),
('jabi', '<td>&nbsp;', NULL, NULL, '2015-01-26 23:28:18'),
('ksrtc', '123', 'ksrtc', 'active', '2014-12-09 02:14:22'),
('ksrtc123', 'qwerty', 'student', NULL, '2015-03-11 15:37:15'),
('malik', '123456', NULL, NULL, '2014-11-16 18:14:21'),
('sa', 'admin', 'student', NULL, '2015-03-15 13:39:44'),
('st', '123', NULL, NULL, '2015-01-12 09:56:12'),
('thahir', '1234', NULL, NULL, '2015-03-11 14:32:35'),
('vasu', '1234', 'student', NULL, '2015-03-15 14:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `Applicaation ID` varchar(500) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `bdate` datetime NOT NULL,
  `collegename` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `From` varchar(25) NOT NULL,
  `To` varchar(25) NOT NULL,
  `studentphotos` varchar(90) NOT NULL,
  `AddressProf` varchar(90) NOT NULL,
  `payment` varchar(90) NOT NULL,
  PRIMARY KEY (`Applicaation ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`Applicaation ID`, `fname`, `lname`, `email`, `gender`, `bdate`, `collegename`, `address`, `city`, `zipcode`, `phone`, `mobile`, `From`, `To`, `studentphotos`, `AddressProf`, `payment`) VALUES
('54c683a68e84e', 'MOHAN', 'WARMA', 'MOHAN@GMAIL.COM', 'Male', '2015-01-07 00:00:00', 'kle', 'hubli', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'cbt', 'upload/Star Baby_13.jpg', 'upload/543841_591309334228271_1399669187_n.jpg', '1455'),
('5500149e48e1d', 'Student', 'kl', 'abcdef@gmail.com', 'Male', '1993-05-05 00:00:00', 'kle', 'HUBLI', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'DHARWAD', 'upload/badge_eslWeotobs6351.png', 'upload/badge_losbeoesWt6354.png', '1455'),
('55053ef7205f3', 'MOHAN', 'WARMA', 'shabaz@gmail.com', 'Male', '2015-03-01 00:00:00', 'kle', 'hubli', 'HUBLI', '580024', '2435672', '9985485785', 'hubli', 'DHARWAD', 'upload/girl1.jpg', 'upload/Rawn_Media_Wallpaper_HD_wallpaper.jpg', '1455');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `appid` varchar(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `card` varchar(90) NOT NULL,
  `pin` varchar(90) NOT NULL,
  `amount` bigint(20) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`appid`, `name`, `card`, `pin`, `amount`) VALUES
('54c683a68e84e', 'Tahir', 'admin', '123', 1455),
('54d498a046337', 'rohan ghai', '9852554662215', '', 1455),
('54db26b728a7a', 'asa', 'asas', '000', 1455),
('5500149e48e1d', 'Student1', '4557776090909', '5675', 1455),
('55053ef7205f3', 'MOHAN', '0090989089', '2314', 1455);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `bdate` datetime NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`fname`, `lname`, `email`, `gender`, `bdate`, `address`, `city`, `zipcode`, `phone`, `mobile`) VALUES
('bsp', 'A', 'XYZ@GMAIL.COM', '', '0000-00-00 00:00:00', '', '', '', '', ''),
('MOHAN', 'A', 'abcdef@gmail.com', 'Male', '2015-02-09 00:00:00', 'dasdsa', 'HUBLI', '123541', '2435672', '9985485785'),
('ecypher', 'solutions', 'mohammedtahirm@gmail.com', 'Male', '1904-03-03 00:00:00', '', '', '', '', ''),
('thahir', 'mirji', 'shabaz@gmail.com', 'Male', '2015-03-09 00:00:00', 'hubli', 'HUBLI', '580024', '2435672', '9985485785'),
('thahir', 'mirji', 'abcdef@gmail.com', 'Male', '2015-03-09 00:00:00', 'hubli', 'HUBLI', '123541', '2435672', '9985485785'),
('MOHAN', 'WARMA', 'shabaz@gmail.com', 'Male', '1915-04-01 00:00:00', 'hubli', 'HUBLI', '580024', '2435672', '9985485785'),
('MOHAN', 'WARMA', 'abcdef@gmail.com', 'Male', '2015-03-02 00:00:00', 'hubli', 'HUBLI', '580024', '2435672', '9985485785'),
('vasudev', 'm', 'tahiritguru@gmail,com', 'Male', '2015-03-09 00:00:00', 'bijapur', 'bijapur', '23233', '123123123', '3323232');
