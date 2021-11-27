-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 03:43 PM
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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `positions` varchar(50) NOT NULL,
  `basicpay` varchar(50) NOT NULL,
  `overtime` varchar(50) NOT NULL,
  `overtimePay` varchar(50) NOT NULL,
  `grossPay` varchar(50) NOT NULL,
  `HA` varchar(50) NOT NULL,
  `TA` varchar(50) NOT NULL,
  `MA` varchar(50) NOT NULL,
  `NSSF` varchar(50) NOT NULL,
  `PAYEE` varchar(50) NOT NULL,
  `netPay` varchar(50) NOT NULL,
  `totalAllowances` varchar(50) NOT NULL,
  PRIMARY KEY(`id`)
);