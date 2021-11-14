-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 13 nov. 2021 à 12:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iai`
--

-- --------------------------------------------------------

--
-- Structure de la table `l1`
--

DROP TABLE IF EXISTS `l1`;
CREATE TABLE IF NOT EXISTS `l1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num_parainage` varchar(255) NOT NULL,
  `nom_parain` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `l1`
--

INSERT INTO `l1` (`id`, `nom`, `password`, `email`, `num_parainage`, `nom_parain`, `niveau`) VALUES
(143, '', '', '', '6', 'null', ''),
(144, '', '', '', '5', 'null', ''),
(145, '', '', '', '3', 'null', ''),
(146, '', '', '', '6', 'null', ''),
(147, '', '', '', '3', 'null', ''),
(148, '', '', '', '9', 'null', ''),
(149, '', '', '', '5', 'null', ''),
(150, '', '', '', '6', 'null', ''),
(151, '', '', '', '1', 'null', ''),
(152, '', '', '', '3', 'null', ''),
(153, '', '', '', '10', 'null', '');

-- --------------------------------------------------------

--
-- Structure de la table `l2`
--

DROP TABLE IF EXISTS `l2`;
CREATE TABLE IF NOT EXISTS `l2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_p` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `filleule` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `l2`
--

INSERT INTO `l2` (`id`, `nom_p`, `email`, `filleule`, `date`) VALUES
(1, 'The Marduk', 'azerty@gmail.com', 'Guimatsa', '0000-00-00 00:00:00'),
(2, 'Zambou', 'dilanzambou@gmail.com', 'Auth0 React Sample', '0000-00-00 00:00:00'),
(3, 'kenfack', 'dilanzambou@gmail.com', 'Auth0 React Sample', '0000-00-00 00:00:00'),
(4, 'donfack', 'dilanzambou@gmail.com', 'Guimatsa', '0000-00-00 00:00:00'),
(5, 'zemfack', 'dilanzambou@gmail.com', 'Guimatsa', '0000-00-00 00:00:00'),
(6, 'dongmo', 'dilanzambou@gmail.com', 'Guimatsa', '2021-11-02 09:11:04'),
(7, 'AZAFACK', 'dilanzmbou2@gmail.com', 'Auth0 React Sample', NULL),
(9, 'rude', 'dilanzambou2@gmail.com', 'Guimatsa', NULL),
(10, 'adama', 'dilanzambou2@gmail.com', 'Guimatsa', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
