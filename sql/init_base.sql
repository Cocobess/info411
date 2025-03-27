-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 mars 2025 à 12:49
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

USE info411;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info411`
--

-- --------------------------------------------------------

--
-- Structure de la table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE IF NOT EXISTS `fruit` (
  `id_fruit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `poid` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  PRIMARY KEY (`id_fruit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fruit`
--


-- --------------------------------------------------------

--
-- Structure de la table `fruit_pays`
--

DROP TABLE IF EXISTS `fruit_pays`;
CREATE TABLE IF NOT EXISTS `fruit_pays` (
  `id_fruit` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL,
  KEY `fruit_pays_ibfk_1` (`id_fruit`),
  KEY `id_pays` (`id_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fruit_pays`
--



-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fruit_pays`
--
ALTER TABLE `fruit_pays`
  ADD CONSTRAINT `fruit_pays_ibfk_1` FOREIGN KEY (`id_fruit`) REFERENCES `fruit` (`id_fruit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fruit_pays_ibfk_2` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
