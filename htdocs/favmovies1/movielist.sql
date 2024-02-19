-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2017 at 07:47 PM
-- Server version: 5.1.73
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `favmovies1`
--

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE IF NOT EXISTS `movielist` (
  `movieID` int(4) NOT NULL AUTO_INCREMENT,
  `movieTitle` varchar(255) CHARACTER SET utf8 NOT NULL,
  `releaseYear` int(4) NOT NULL,
  `movieRating` varchar(5) CHARACTER SET utf8 NOT NULL,
  `dateEntered` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  PRIMARY KEY (`movieID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movieID`, `movieTitle`, `releaseYear`, `movieRating`, `dateEntered`, `dateModified`) VALUES
(1, 'Pretty Woman', 1990, 'R', '2017-10-20 00:00:00', '2017-10-20 00:00:00'),
(3, 'Animal House', 1978, 'R', '2017-10-20 00:00:00', '2017-10-20 00:00:00'),
(6, 'Friday Night Lights', 2014, 'PG-13', '2017-10-21 14:02:24', '2017-10-22 15:42:20'),
(9, 'When Harry Met Sally', 1989, 'R', '2017-10-21 18:19:53', '0000-00-00 00:00:00'),
(10, 'E.T. the Extra-Terrestrial', 1983, 'PG', '2017-10-21 18:21:23', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
