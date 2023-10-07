-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2017 at 04:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `caab`
--
CREATE DATABASE IF NOT EXISTS `caab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `caab`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `v_id` int(222) NOT NULL AUTO_INCREMENT,
  `cimage` varchar(222) NOT NULL,
  `cname` varchar(222) NOT NULL,
  `seat` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `ctext` text NOT NULL,
  `location` varchar(222) NOT NULL,
  `comfort` varchar(222) NOT NULL,
  `air_c` varchar(222) NOT NULL,
  `fuel` varchar(222) NOT NULL,
  `gps` varchar(222) NOT NULL,
  `safety` varchar(222) NOT NULL,
  `km` varchar(222) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`v_id`, `cimage`, `cname`, `seat`, `price`, `ctext`, `location`, `comfort`, `air_c`, `fuel`, `gps`, `safety`, `km`) VALUES
(1, '59c934808103c.jpg', 'swift zdi', '5', '22000', '30% Off On Your 1st Rentals Ride. Cabs By The Hour. One Cab-Many Destinations\nBook Upto 2 Days Advance · Airport Transfers · Hourly Packages · Top Rated Drivers · No Peak Pricing\nModels: Indica, Ertiga, Swift, Etios, Indigo, Innova', 'JALANDHAR', 'eco', 'yes', 'petrol', 'yes', 'Airbags', '6'),
(2, '59c934aca10d9.jpg', 'swift vdi', '5', '20000', 'Instant Booking ... Cab Service in Mumbai, Radio Taxis in Mumbai ... Cab service in Mumbai can be very useful if you are unaware about the roads of Mumbai or ...', 'jalandhar', 'eco', '0', '0', '0', '0', '0'),
(4, '59c934e86b13a.jpg', 'indica', '5', '15000', 'Oneway Taxi, 24x7 Customer Support On Time Service, Book Now!\r\n24/7 Customer Support · Transparent Pricing · AC, Safe & Secure Cabs · Pay Oneside Fare', 'MOGA', 'lux', '0', '0', '0', '0', '0'),
(5, '59c9352338765.png', 'swift dezire', '5', '50000', 'Status and other details of all the flights arriving and departing from the International and Domestic - CSIA Mumbai Airport - Passenger Flights.Status and other details of all the flights arriving and departing from the International and Domestic - CSIA Mumbai Airport - Passenger Flights.', 'MOGA', 'lux', '0', '0', '0', '0', '0'),
(6, '59c93548899e6.jpg', 'maruti sazuki 800', '4', '2000', 'Status and other details of all the flights arriving and departing from the International and Domestic - CSIA Mumbai Airport - Passenger Flights.Status and other details of all the flights arriving and departing from the International and Domestic - CSIA Mumbai Airport - Passenger Flights.', 'JALANDHAR', 'eco', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE IF NOT EXISTS `admin_dir` (
  `a_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `Message` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup` varchar(222) NOT NULL,
  `dropoff` varchar(222) NOT NULL,
  `phone` int(222) NOT NULL,
  `first` varchar(222) NOT NULL,
  `mid` varchar(222) NOT NULL,
  `last` varchar(222) NOT NULL,
  `cod` int(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `cardno` int(222) NOT NULL,
  `cardbrand` varchar(222) NOT NULL,
  `ed` int(222) NOT NULL,
  `ey` int(222) NOT NULL,
  `em` int(222) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`p_id`, `pickup`, `dropoff`, `phone`, `first`, `mid`, `last`, `cod`, `address`, `cardno`, `cardbrand`, `ed`, `ey`, `em`, `message`) VALUES
(24, 'MOGA', 'JALANDHAR', 2147483647, 'himanshu', 'singh', 'crivatva', 144002, 'badri colony phase 2 danishmandhan, phase 2', 2147483647, 'Master Card', 14, 2016, 5, 'good!'),
(25, '', '', 0, '', '', '', 0, '', 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `Dfrom` varchar(222) NOT NULL,
  `Dto` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` varchar(222) NOT NULL,
  `adult` varchar(222) NOT NULL,
  `child` varchar(222) NOT NULL,
  `text` text NOT NULL,
  `pack` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
