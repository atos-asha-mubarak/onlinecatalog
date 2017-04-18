-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2016 at 08:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksearch`
--

CREATE TABLE IF NOT EXISTS `booksearch` (
  `BOOKTITLE` varchar(30) NOT NULL,
  `BOOKID` int(5) NOT NULL AUTO_INCREMENT,
  `AUTHOR` varchar(30) NOT NULL,
  `YEAR` int(10) NOT NULL,
  `PUBLISHER` varchar(30) NOT NULL,
  `PUBLISHER_DATE` date NOT NULL,
  `ISBN` int(5) NOT NULL,
  `LANGUAGE` varchar(20) NOT NULL,
  `SUBJECT` varchar(30) NOT NULL,
  PRIMARY KEY (`BOOKID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `booksearch`
--

INSERT INTO `booksearch` (`BOOKTITLE`, `BOOKID`, `AUTHOR`, `YEAR`, `PUBLISHER`, `PUBLISHER_DATE`, `ISBN`, `LANGUAGE`, `SUBJECT`) VALUES
('MCJP', 1, 'Victor', 1984, 'Microsoft', '2012-06-26', 5656, 'Spanish', 'Science'),
('ACCA', 2, 'ACCA org', 1964, 'ACCA globel', '2000-04-23', 2222, 'English', 'Managmeent'),
('JavaScript', 3, 'Oliver', 1975, 'Jane', '2000-04-04', 1414, 'Arabic', 'Programming'),
('c#', 4, 'Poloo', 1986, 'microsoft', '1999-04-04', 6767, 'Turkish', 'Programming'),
('SCJP', 5, 'Httsera', 1966, 'challes', '2012-09-21', 1313, 'Lithuanian', 'Science'),
('Database', 6, 'dana', 1976, 'challls', '2016-01-06', 4545, 'Czech', 'History'),
('oracle', 7, 'Pola', 1985, '24/05/2011', '2016-05-04', 4565, 'Tamil', 'ART'),
('Business Management', 8, 'Poter', 1983, 'poterPvt', '2014-02-12', 7879, 'Deutch ', 'Managmeent');
