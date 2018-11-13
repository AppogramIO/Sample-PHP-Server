-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2018 at 09:18 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appogram_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities_population`
--

DROP TABLE IF EXISTS `cities_population`;
CREATE TABLE IF NOT EXISTS `cities_population` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities_population`
--

INSERT INTO `cities_population` (`id`, `name`, `population`) VALUES
(1, 'Rome', 4353775),
(2, 'London', 9787426),
(3, 'Paris', 10601122),
(4, 'Bern', 142656);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `name` varchar(20) NOT NULL,
  `value` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`name`, `value`) VALUES
('red', '#f44336'),
('pink', '#E91E63'),
('purple', '#9C27B0'),
('deep purple', '#3F51B5'),
('blue', '#2196F3'),
('Light Blue', '#03A9F4'),
('Cyan', '#00BCD4'),
('Teal', '#009688'),
('green', '#4CAF50'),
('light green', '#8BC34A'),
('lime', '#CDDC39'),
('yellow', '#FFEB3B'),
('amber', '#FFC107'),
('orange', '#FF9800'),
('deep orange', '#FF5722'),
('brown', '#795548'),
('grey', '#9E9E9E'),
('blue grey', '#607D8B');

-- --------------------------------------------------------

--
-- Table structure for table `countries_capital_weather`
--

DROP TABLE IF EXISTS `countries_capital_weather`;
CREATE TABLE IF NOT EXISTS `countries_capital_weather` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `celsius` int(11) NOT NULL,
  `fahrenheit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries_capital_weather`
--

INSERT INTO `countries_capital_weather` (`id`, `name`, `celsius`, `fahrenheit`) VALUES
(1, 'Abu Dahbi', 32, 89),
(2, 'Ankara', 17, 62),
(3, 'Athens', 18, 64),
(4, 'Beijing', 8, 46),
(5, 'Bern', 10, 50),
(6, 'Berlin', 10, 50),
(7, 'Budapest', 19, 0),
(8, 'Dublin', 11, 5),
(9, 'Helsinki', 9, 48),
(10, 'Stockholm', 7, 44),
(11, 'Jakarta', 30, 86);

-- --------------------------------------------------------

--
-- Table structure for table `countries_population`
--

DROP TABLE IF EXISTS `countries_population`;
CREATE TABLE IF NOT EXISTS `countries_population` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries_population`
--

INSERT INTO `countries_population` (`id`, `name`, `population`) VALUES
(1, 'Fiji', 905502),
(2, 'USA', 324459463),
(3, 'UK', 66181585),
(4, 'Italy', 59359900),
(5, 'Portugal', 10329506),
(6, 'India', 1339180127),
(7, 'China', 1409517397);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Laptop', 300),
(2, 'Macbook', 1000),
(3, 'Samsung TV', 200),
(4, 'LG TV', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `personal_code` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `personal_code`) VALUES
(1, 'John', '1234', 'John', 'Smith', 123456);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
