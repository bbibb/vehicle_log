-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2017 at 08:23 PM
-- Server version: 5.1.73
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `favmovies2`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movieID`, `movieTitle`, `releaseYear`, `movieRating`, `dateEntered`, `dateModified`) VALUES
(1, 'Pretty Woman', 1990, 'R', '2017-10-20 00:00:00', '2017-10-20 00:00:00'),
(3, 'Animal House', 1978, 'R', '2017-10-20 00:00:00', '2017-10-22 18:29:42'),
(6, 'Friday Night Lights', 2014, 'PG-13', '2017-10-21 14:02:24', '2017-10-25 11:00:27'),
(9, 'When Harry Met Sally', 1989, 'R', '2017-10-21 18:19:53', '0000-00-00 00:00:00'),
(10, 'E.T. the Extra-Terrestrial', 1983, 'PG', '2017-10-21 18:21:23', '2017-10-23 14:03:36'),
(14, 'Space Cowboys', 2000, 'PG-13', '2017-10-25 21:28:03', '0000-00-00 00:00:00'),
(24, 'Good Will Hunting', 1997, 'R', '2017-12-23 15:16:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `movie_rating`
--

CREATE TABLE IF NOT EXISTS `movie_rating` (
  `ratingID` int(2) NOT NULL AUTO_INCREMENT,
  `rating` varchar(50) NOT NULL,
  `rating_description` varchar(50) NOT NULL,
  PRIMARY KEY (`ratingID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `movie_rating`
--

INSERT INTO `movie_rating` (`ratingID`, `rating`, `rating_description`) VALUES
(1, 'G', 'General Audiences'),
(2, 'PG', 'Parental Guidance Suggested'),
(3, 'PG-13', 'Parents Strongly Cautioned'),
(4, 'R', 'Restricted'),
(5, 'NC-17', 'Adults Only (replaced X)');

-- --------------------------------------------------------

--
-- Table structure for table `release_year`
--

CREATE TABLE IF NOT EXISTS `release_year` (
  `releaseYear` int(4) NOT NULL,
  PRIMARY KEY (`releaseYear`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `release_year`
--

INSERT INTO `release_year` (`releaseYear`) VALUES
(1960),
(1961),
(1962),
(1963),
(1964),
(1965),
(1966),
(1967),
(1968),
(1969),
(1970),
(1971),
(1972),
(1973),
(1974),
(1975),
(1976),
(1977),
(1978),
(1979),
(1980),
(1981),
(1982),
(1983),
(1984),
(1985),
(1986),
(1987),
(1988),
(1989),
(1990),
(1991),
(1992),
(1993),
(1994),
(1995),
(1996),
(1997),
(1998),
(1999),
(2000),
(2001),
(2002),
(2003),
(2004),
(2005),
(2006),
(2007),
(2008),
(2009),
(2010),
(2011),
(2012),
(2013),
(2014),
(2015),
(2016),
(2017),
(2018);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
