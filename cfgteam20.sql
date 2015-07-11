-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2015 at 01:12 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cfgteam20`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` varchar(30) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mob` bigint(20) NOT NULL,
  `Sr` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Sr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `Sr` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `NoOfStudents` int(10) DEFAULT NULL,
  `CostOfSchool` int(20) DEFAULT NULL,
  `Responsiveness` varchar(30) DEFAULT NULL,
  `Support` varchar(30) DEFAULT NULL,
  `TimeLine` varchar(20) DEFAULT NULL,
  `Intake` int(10) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `FreqND` int(11) NOT NULL,
  `collaborate` varchar(20) NOT NULL,
  PRIMARY KEY (`Sr`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`Sr`, `Name`, `UserName`, `NoOfStudents`, `CostOfSchool`, `Responsiveness`, `Support`, `TimeLine`, `Intake`, `State`, `Country`, `Place`, `FreqND`, `collaborate`) VALUES
(1, 'ABC', 'karan', 123, 1212, 'NGO', 'FULL', '<5 years', 1233, 'maha', 'india', 'mumbai', 0, ''),
(2, 'XYZ', 'jawad', 123, 1234, 'NGO', 'MODERATE', '<3 years', 1235, 'maha', 'ind', 'mumbai', 0, ''),
(3, 'KJBKJ', 'jhv', 1234, 123, 'Very Frequent', 'FULL', '<5 years', 2343, 'kjvkj', 'kvkj', 'kjvjv', 0, 'NGO'),
(4, 'IBI', 'ytduk', 6747, 354, 'Very Frequent', 'FULL', '<5 years', 7857, 'ivhu', 'iviv', 'uovu', 0, 'NGO');

-- --------------------------------------------------------

--
-- Table structure for table `solu`
--

CREATE TABLE IF NOT EXISTS `solu` (
  `coste` int(10) NOT NULL,
  `timee` int(10) NOT NULL,
  `respc` int(10) NOT NULL,
  `disr` int(10) NOT NULL,
  `coll` int(10) NOT NULL,
  `support` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solu`
--

INSERT INTO `solu` (`coste`, `timee`, `respc`, `disr`, `coll`, `support`) VALUES
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 5),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 5),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 5),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 5),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 5),
(7, 0, 0, 0, 1, 10),
(7, 0, 0, 0, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
  `coste` int(10) NOT NULL,
  `timee` int(10) NOT NULL,
  `respc` int(10) NOT NULL,
  `disr` int(10) NOT NULL,
  `coll` int(10) NOT NULL,
  `support` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Password` varchar(200) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Mob` bigint(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sr` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`Sr`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Password`, `Name`, `Country`, `City`, `Mob`, `Email`, `Sr`, `status`) VALUES
('39fd39fb8eeca4c33cc92db4af771bec99db91286cd338102784b37be27fc654', 'abc', 'india', 'mumbai', 9323232323, 'thadaninilesh@gmail.com', 1, 1),
('9f94c95cc64bb6bc2d6ae3292b825d636b04042c0a91c5e7bf42df967f9630ac', 'Karan', 'India', 'Kalyan', 8979872397, 'uderani29karan@gmail.com', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
