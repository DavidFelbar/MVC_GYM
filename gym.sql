-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2020 at 05:36 PM
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
  `idClan` int(1) NOT NULL AUTO_INCREMENT,
  `nazivClan` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `cijena` int(4) NOT NULL,
  `maxDolasci` int(2) NOT NULL,
  PRIMARY KEY (`idClan`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clanarina`
--

INSERT INTO `clanarina` (`idClan`, `nazivClan`, `cijena`, `maxDolasci`) VALUES
(7, 'Dvaput tjedno', 99, 99),
(8, 'Tri puta tjedno', 220, 13),
(10, 'No limit', 250, 99);

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `idClana` int(1) NOT NULL AUTO_INCREMENT,
  `usernameClana` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `passwordClana` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `imeClana` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `prezimeClana` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `idProg` int(1) DEFAULT NULL,
  `idClan` int(1) DEFAULT NULL,
  `dolasci` int(2) DEFAULT NULL,
  `idKor` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idClana`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`idClana`, `usernameClana`, `passwordClana`, `imeClana`, `prezimeClana`, `idProg`, `idClan`, `dolasci`, `idKor`) VALUES
(20, 'dfelbar', 'david', 'David', 'Felbar', NULL, 10, 99, 1),
(21, 'jurajfox', 'jure', 'Juraj', 'Lisica', NULL, 8, 13, 1),
(22, '', '', '', '', NULL, 11, 9, 1),
(24, 'jurajfox', 'jure', 'Juraj', 'Lisica', NULL, 7, 99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `programi`
--

DROP TABLE IF EXISTS `programi`;
CREATE TABLE IF NOT EXISTS `programi` (
  `idProg` int(1) NOT NULL AUTO_INCREMENT,
  `nazivProg` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `opisProg` text COLLATE utf8_croatian_ci NOT NULL,
  `tipProg` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `idTren` int(1) NOT NULL,
  `ocjena` float DEFAULT NULL,
  PRIMARY KEY (`idProg`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `programi`
--

INSERT INTO `programi` (`idProg`, `nazivProg`, `opisProg`, `tipProg`, `idTren`, `ocjena`) VALUES
(1, 'nene', ' aaaa', 'grupni', 1, 5),
(2, 'Upper lower', 'aspdadpoado', 'individualni', 1, 5),
(4, 'dada', ' dada', 'individualni', 1, NULL),
(5, 'lKAS', 'aalkdsa ', 'individualni', 1, NULL);

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

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`idKor`, `tipKor`) VALUES
(1, 'clan'),
(2, 'trener'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `zaposlenici`
--

DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `idZap` int(1) NOT NULL AUTO_INCREMENT,
  `usernameZap` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `passwordZap` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `imeZap` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `prezimeZap` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `idKor` int(1) NOT NULL,
  PRIMARY KEY (`idZap`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `zaposlenici`
--

INSERT INTO `zaposlenici` (`idZap`, `usernameZap`, `passwordZap`, `imeZap`, `prezimeZap`, `idKor`) VALUES
(1, 'david2', 'david2', '', '', 2),
(2, 'david3', 'david3', '', '', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
