-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 jan. 2021 à 15:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `millenary`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `numachat` int(11) NOT NULL AUTO_INCREMENT,
  `dateachat` date NOT NULL,
  `montanttotalachat` int(11) NOT NULL,
  `numclient` int(11) NOT NULL,
  PRIMARY KEY (`numachat`),
  KEY `numclient` (`numclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `acheter_montre_achat`
--

DROP TABLE IF EXISTS `acheter_montre_achat`;
CREATE TABLE IF NOT EXISTS `acheter_montre_achat` (
  `nummontre` int(11) NOT NULL,
  `numachat` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`nummontre`,`numachat`),
  KEY `nummontre` (`nummontre`),
  KEY `numachat` (`numachat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `numcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libellecategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`numcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`numcategorie`, `libellecategorie`) VALUES
(1, 'EN VITRINE'),
(2, 'CLASSIQUES');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `numclient` int(11) NOT NULL AUTO_INCREMENT,
  `nomclient` varchar(50) NOT NULL,
  `emailclient` varchar(50) NOT NULL,
  `mdpclient` varchar(255) NOT NULL,
  PRIMARY KEY (`numclient`),
  UNIQUE KEY `emailclient` (`emailclient`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numclient`, `nomclient`, `emailclient`, `mdpclient`) VALUES
(100, 'Samuel', 'chat@gmail.com', '123456'),
(107, 'nathan', 'nathan@gmail.com', '123456'),
(114, 'elias', 'elias@gmail.com', '12456');

-- --------------------------------------------------------

--
-- Structure de la table `montre`
--

DROP TABLE IF EXISTS `montre`;
CREATE TABLE IF NOT EXISTS `montre` (
  `nummontre` int(11) NOT NULL AUTO_INCREMENT,
  `libellemontre` varchar(50) NOT NULL,
  `descrptionmontre` varchar(400) NOT NULL,
  `prixmontre` int(11) NOT NULL,
  `numcategorie` int(11) NOT NULL,
  PRIMARY KEY (`nummontre`),
  KEY `numcategorie` (`numcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `montre`
--

INSERT INTO `montre` (`nummontre`, `libellemontre`, `descrptionmontre`, `prixmontre`, `numcategorie`) VALUES
(1, 'DATEJUST 31', 'Oyster, 31 mm, acier Oystersteel, or gris et diamants, Nouveau modèle 2020', 15200, 1),
(2, 'SUBARINER', 'Oyster, 41 mm, acier Oystersteel, Nouveau modèle 2020', 7650, 1),
(3, 'SKY-DWELLER', 'Oyster, 42 mm, or jaune, Nouveau modèle 2020', 37700, 1),
(4, 'GMT - MASTER II', 'Oyster, 40 mm, acier Oystersteel et or Everose', 13950, 1),
(5, 'COSMOGRAPH DAYTONA', 'Oyster, 40 mm, or gris', 28000, 2),
(6, 'EXPLORER', 'Oyster, 39 mm, acier Oystersteel', 6150, 2),
(7, 'MILGAUSS', 'Oyster, 40 mm, acier Oystersteel', 7850, 2),
(8, 'OYSTER PERPETUAL 41', 'Oyster, 41 mm, acier Oystersteel, Nouveau modèle 2020', 5550, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`numclient`) REFERENCES `client` (`numclient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `acheter_montre_achat`
--
ALTER TABLE `acheter_montre_achat`
  ADD CONSTRAINT `acheter_montre_achat_ibfk_1` FOREIGN KEY (`nummontre`) REFERENCES `montre` (`nummontre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acheter_montre_achat_ibfk_2` FOREIGN KEY (`numachat`) REFERENCES `achat` (`numachat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `montre`
--
ALTER TABLE `montre`
  ADD CONSTRAINT `montre_ibfk_1` FOREIGN KEY (`numcategorie`) REFERENCES `categorie` (`numcategorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
