-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 09:12 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`name`, `prenom`, `adress`, `telephone`, `email`, `password`) VALUES
('', '', '', '', 'ljuigiu@dst', '81dc9bdb52d04dc20036dbd83'),
('', '', '', '', 'medmostafaa@gmail.com', '202cb962ac59075b964b07152'),
('', '', '', '', 'mariem@gmail.com', '202cb962ac59075b964b07152'),
('', '', '', '', 'med.mostafaa@yahoo.com', '202cb962ac59075b964b07152');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `idProdui` int(11) NOT NULL,
  `design` varchar(50) NOT NULL,
  `qte` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `idClient`, `idProdui`, `design`, `qte`, `email`, `photo`, `total`) VALUES
(29, 0, 3, 'Shirts', 1, 'medmostafaa@gmail.com', 'mw2', 46),
(40, 0, 1, 'watch', 3, 'medmostafaa@gmail.com', 'a2', 3000),
(41, 0, 2, 'Blazers', 1, '', 'a2', 100),
(42, 0, 1, 'watch', 1, 'medmostafaa@gmail.com', 'a2', 1000),
(43, 0, 1, 'watch', 1, 'mariem@gmail.com', 'a2', 1000),
(45, 0, 4, 'Blazer', 1, '', 'a8', 46),
(46, 0, 34, 'Watches', 1, 'mariem@gmail.com', 'ep4', 120),
(47, 0, 34, 'Watches', 1, 'med.mostafaa@yahoo.com', 'ep4', 120),
(48, 0, 34, 'Watches', 1, 'med.mostafaa@yahoo.com', 'ep4', 120);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `design` varchar(50) NOT NULL,
  `quantite` int(50) NOT NULL,
  `prix` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `design`, `quantite`, `prix`, `photo`, `categorie`, `type`) VALUES
(2, 'Blazers', 100, 100, 'a2', 'clother', 'mens'),
(3, 'Shirts', 1000, 46, 'mw2', 'clother', 'mens'),
(4, 'Blazer', 100, 46, 'a8', 'clother', 'mens'),
(5, 'Sandals', 100, 46, 'mw1', 'shoes', 'women'),
(6, 'Shoes', 100, 45, 'mw3', 'shoes', 'mens'),
(7, 'Shirts', 0, 45, 'g3', 'clother', 'mens'),
(8, 'Watches', 100, 119, 'ep4', 'clother', 'mens'),
(9, 'T shirts', 100, 45, 'mw2', 'clother', 'mens'),
(10, 'Shirts', 100, 45, 'g2', 'clother', 'men'),
(11, 'Next Blue Blazer', 100, 99, 'a8', 'clother', 'mens'),
(12, 'Air Tshirt Black', 0, 119, 'a3', 'clother', 'women'),
(13, 'Next Blue Blazer', 100, 99, 'a8', 'clother', 'mens'),
(14, 'Air Tshirt Black ', 100, 119, 'a3', 'clother', 'women'),
(15, 'Maroon Puma Tshirt', 100, 79, 'a4', 'clother', 'women'),
(16, 'Multicoloured TShirts', 100, 129, 'a5', 'clother', 'mens'),
(17, 'Wedding Blazers', 100, 129, 'a2', 'clother', 'mens'),
(18, 'Wedges', 100, 45, 'w1', 'shoes', 'women'),
(19, 'Hand Bag', 100, 45, 'w3', 'sac', 'women'),
(20, 'Hand Bag', 100, 45, 'w4', 'bag', 'women'),
(21, 'Sandals', 0, 45, 'w2', 'shoes', 'women'),
(22, 'Hand Bag', 100, 45, 'w4', 'bag', 'women'),
(23, 'Sandals', 100, 45, 'w2', 'shoes', 'women'),
(24, 'Watches', 100, 69, 'ep3', 'shoes', 'women'),
(25, 'Dresses', 100, 69, 'g1', 'clother', 'women'),
(26, 'Dresses', 100, 150, 'a7', 'clother', 'women'),
(27, 'Apple Iphone 6', 1000, 500, 'ph1', 'electronics', ''),
(28, 'Apple Iphone 6s', 100, 799, 'ph3', 'electronics', ''),
(29, 'Apple Iphone 6', 100, 180, 'ph2', 'electronics', ''),
(30, 'Apple Iphone 6s', 100, 179, 'ph4', 'electronics', ''),
(31, 'Watches', 100, 109, 'ep1', '', 'mens'),
(32, 'Watches', 100, 130, 'ep2', '', 'mens'),
(33, 'Watches', 100, 150, 'ep3', '', 'mens'),
(34, 'Watches', 100, 120, 'ep4', '', 'mens'),
(35, 'Branded Watches', 100, 500, 'e2', 'electronics', ''),
(37, 'Mobiles', 100, 600, 'e1', 'electronics', ''),
(38, 'Branded Watches', 100, 400, 'watch', '', ''),
(39, 'Mobiles', 100, 500, 'e4', 'electronics', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
