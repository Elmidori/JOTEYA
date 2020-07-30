-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 30, 2020 at 05:45 AM
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
-- Database: `joteya`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ID_CAT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_CAT`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID_CAT`, `NOM`) VALUES
(1, 'Processeurs'),
(2, 'Cartes Graphiques'),
(3, 'Cartes Meres');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `REF` varchar(20) NOT NULL,
  `PRIX` int(11) NOT NULL,
  `PHOTO` varchar(30) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `ID_CAT` int(11) NOT NULL,
  PRIMARY KEY (`REF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`REF`, `PRIX`, `PHOTO`, `Nom`, `ID_CAT`) VALUES
('i5', 5232, 'i5', 'Intel core i5', 1),
('i7', 6546, 'i7', 'Intel Core i7', 1),
('i9', 7898, 'i9', 'Intel Core i9', 1),
('ryzen9', 5675, 'ryzen9', 'AMD Ryzen 9', 1),
('rtx2070', 4332, 'rtx 2070', 'Nvidia RTX 2070', 2),
('gtx 1660', 5444, 'gtx 1660', 'Nvidia GTX 1660', 2),
('z490', 3200, 'z490', 'ASUS STRIX Z490', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `LOGIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `LVL` int(11) NOT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`LOGIN`, `PASSWORD`, `LVL`) VALUES
('user3', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('anass', '68b69cabd7d4eb28c18b18f280a133c9', 0),
('user2', 'e034fb6b66aacc1d48f445ddfb08da98', 1),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
