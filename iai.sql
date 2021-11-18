-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 nov. 2021 à 14:51
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
  `nom_parain` varchar(255) DEFAULT NULL,
  `filiere` varchar(250) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `active` enum('0','1') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `l1`
--

INSERT INTO `l1` (`id`, `nom`, `password`, `email`, `nom_parain`, `filiere`, `niveau`, `active`, `date`) VALUES
(154, 'Dilan Zambou', 'bbn', 'dilanzambou2@gmail.com', '', '', ',', '0', '2021-11-17 14:22:51'),
(155, '', '', '', '', '', '', '0', '2021-11-17 14:22:51'),
(156, 'Andre Dilan', 'aaaaaa', 'dilanzambou3@gmail.com', 'donfack', '', 'l1', '0', '2021-11-17 14:22:51'),
(157, 'kenfack ange', 'aaaaaa', 'dilanzambou@gmail.com', 'donfack', '', 'l1', '0', '2021-11-17 13:24:52'),
(158, 'Donfack Jean', 'azerty', 'dilanzambou4@gmail.com', 'Zambou', '', 'l1', '0', '2021-11-17 13:28:10'),
(159, 'Durand Dupond', 'azerty', 'dilanzambou6@gmail.com', 'kenfack', 'SR', 'l1', '0', '2021-11-17 13:31:31');

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
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `l2`
--

INSERT INTO `l2` (`id`, `nom_p`, `email`, `filleule`, `date`) VALUES
(1, 'The Marduk', 'azerty@gmail.com', 'Guimatsa', '0000-00-00 00:00:00'),
(2, 'Zambou', 'dilanzambou@gmail.com', 'Donfack Jean', '0000-00-00 00:00:00'),
(3, 'kenfack', 'dilanzambou@gmail.com', 'Durand Dupond', '0000-00-00 00:00:00'),
(4, 'donfack', 'dilanzambou@gmail.com', NULL, '0000-00-00 00:00:00'),
(5, 'zemfack', 'dilanzambou@gmail.com', NULL, '0000-00-00 00:00:00'),
(6, 'dongmo', 'dilanzambou@gmail.com', NULL, '2021-11-02 09:11:04'),
(7, 'AZAFACK', 'dilanzmbou2@gmail.com', NULL, NULL),
(9, 'rude', 'dilanzambou2@gmail.com', NULL, NULL),
(10, 'adama', 'dilanzambou2@gmail.com', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
