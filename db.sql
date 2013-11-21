-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 06:16 PM
-- Server version: 5.1.63-rel13.4-log
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rudrag_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `batch` text NOT NULL,
  `stream` char(3) NOT NULL,
  `name` text NOT NULL,
  `age` date NOT NULL,
  `profile` text NOT NULL,
  `skills` text NOT NULL,
  `lang` text NOT NULL,
  `api` text NOT NULL,
  `tools` text NOT NULL,
  `interest` text NOT NULL,
  `marks10` text NOT NULL,
  `marks12` text NOT NULL,
  `marksem` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61271 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `username`, `password`, `batch`, `stream`, `name`, `age`, `profile`, `skills`, `lang`, `api`, `tools`, `interest`, `marks10`, `marks12`, `marksem`) VALUES
(61200, 'username', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2016', 'I.T', 'YOURNAME', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(61263, 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2014', 'it', 'Senior Profile', '0000-00-00', '', '', ' ', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
