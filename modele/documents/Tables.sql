-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 19 Septembre 2012 à 16:16
-- Version du serveur: 5.1.62
-- Version de PHP: 5.3.2-1ubuntu4.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `FM_ALIMENTS_PROPEL`
--

-- --------------------------------------------------------

--
-- Structure de la table `Aliment`
--

CREATE TABLE IF NOT EXISTS `Aliment` (
  `numAliment` double NOT NULL,
  `nomFrAliment` varchar(255) NOT NULL,
  `nomAnAliment` varchar(24) NOT NULL,
  `numGenre` varchar(4) NOT NULL,
  PRIMARY KEY (`numAliment`),
  KEY `Aliment_FI_1` (`numGenre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `CompNutri`
--

CREATE TABLE IF NOT EXISTS `CompNutri` (
  `numAliment` double NOT NULL,
  `numConst` int(11) NOT NULL,
  `valNutri` varchar(255) DEFAULT NULL,
  `valMinNutri` double DEFAULT NULL,
  `nbEchantNutri` double DEFAULT NULL,
  `ccEurNutri` varchar(255) DEFAULT NULL,
  `numSource` int(11) DEFAULT NULL,
  PRIMARY KEY (`numAliment`,`numConst`),
  KEY `CompNutri_FI_2` (`numConst`),
  KEY `CompNutri_FI_3` (`numSource`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Constituant`
--

CREATE TABLE IF NOT EXISTS `Constituant` (
  `numConst` int(11) NOT NULL AUTO_INCREMENT,
  `origineFrConst` varchar(80) DEFAULT NULL,
  `origineAnConst` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`numConst`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE IF NOT EXISTS `Genre` (
  `numGenre` varchar(4) NOT NULL,
  `nomAnGenre` varchar(128) NOT NULL,
  `nomFrGenre` varchar(128) NOT NULL,
  PRIMARY KEY (`numGenre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Source`
--

CREATE TABLE IF NOT EXISTS `Source` (
  `numSource` int(11) NOT NULL AUTO_INCREMENT,
  `origineSource` double DEFAULT NULL,
  `citationSource` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
