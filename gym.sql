-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2020 at 02:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanarina`
--

DROP TABLE IF EXISTS `clanarina`;
CREATE TABLE IF NOT EXISTS `clanarina` (
  `idClan` int(1) NOT NULL,
  `nazivClan` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `cijena` int(4) NOT NULL,
  `maxDolasci` int(2) NOT NULL,
  PRIMARY KEY (`idClan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `idClana` int(1) NOT NULL,
  `imeClana` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `prezimeClana` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `idProg` int(1) NOT NULL,
  `idClan` int(1) NOT NULL,
  `dolasci` int(2) NOT NULL,
  `idKor` int(1) NOT NULL,
  PRIMARY KEY (`idClana`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programi`
--

DROP TABLE IF EXISTS `programi`;
CREATE TABLE IF NOT EXISTS `programi` (
  `idProg` int(1) NOT NULL,
  `nazivProg` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `opisProg` text COLLATE utf8_croatian_ci NOT NULL,
  `grupni` tinyint(1) NOT NULL,
  `idTren` int(1) NOT NULL,
  PRIMARY KEY (`idProg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

DROP TABLE IF EXISTS `tip_korisnika`;
CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `idKor` int(1) NOT NULL,
  `tipKor` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`idKor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zaposlenici`
--

DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `idZap` int(1) NOT NULL,
  `imeZap` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `prezimeZap` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `idKor` int(1) NOT NULL,
  `idProg` int(1) NOT NULL,
  PRIMARY KEY (`idZap`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
