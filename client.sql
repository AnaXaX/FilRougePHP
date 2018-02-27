-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2018 at 03:20 PM
-- Server version: 5.7.20-19-log
-- PHP Version: 5.5.38-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u142208db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `codeClient` int(11) NOT NULL,
  `nomClient` varchar(100) DEFAULT NULL,
  `prenomClient` varchar(100) DEFAULT NULL,
  `dateNaissanceClient` date DEFAULT NULL,
  `AdresseClient` varchar(500) DEFAULT NULL,
  `villeClient` varchar(100) DEFAULT NULL,
  `telClient` int(11) DEFAULT NULL,
  `newsletterClient` tinyint(1) DEFAULT NULL,
  `emailClient` varchar(200) DEFAULT NULL,
  `motDePasseClient` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`codeClient`, `nomClient`, `prenomClient`, `dateNaissanceClient`, `AdresseClient`, `villeClient`, `telClient`, `newsletterClient`, `emailClient`, `motDePasseClient`) VALUES
(1, 'Boudyach', 'Anas', '0000-00-00', '87 Cours gambetta', 'Lyon', 2147483647, 1, 'anas.boudyach@gmail.com', '2f51931bb04fe3973e8d572c87a0b1b87e96d86b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`codeClient`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
