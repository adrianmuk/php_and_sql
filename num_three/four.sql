-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 03:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `fours`
--

-- --------------------------------------------------------

--
-- Table structure for table `four`
--
CREATE TABLE `four` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `assmrk` varchar(64) NOT NULL,
  `testmrk` varchar(64) NOT NULL,
  `exammrk` varchar(64) NOT NULL,
  `totalmrk` varchar(64) NOT NULL,
  `grade` varchar(64) NOT NULL,
  PRIMARY KEY (id)
);