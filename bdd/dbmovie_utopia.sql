-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 jan. 2024 à 14:19
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dmovie_utopia`
--

-- --------------------------------------------------------

--
-- Structure de la table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE IF NOT EXISTS `director` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `director`
--

INSERT INTO `director` (`id`, `name`) VALUES
(1, 'Frank Darabont'),
(2, 'Francis Ford Coppola'),
(3, 'Christopher Nolan'),
(4, 'Sidney Lumet'),
(5, 'Steven Spielberg'),
(6, 'Peter Jackson'),
(7, 'Quentin Tarantino'),
(8, 'Sergio Leone'),
(9, 'Robert Zemeckis'),
(10, 'Olivier Nakache'),
(11, 'Jonathan Demme'),
(12, 'Abdellatif Kechiche');

-- --------------------------------------------------------

--
-- Structure de la table `distribution_company`
--

DROP TABLE IF EXISTS `distribution_company`;
CREATE TABLE IF NOT EXISTS `distribution_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `distribution_company`
--

INSERT INTO `distribution_company` (`id`, `name`) VALUES
(1, 'Paramount Pictures'),
(2, 'Columbia Pictures'),
(3, 'Gaumont Film Company'),
(4, 'Miramax Films'),
(5, 'New Line Cinema'),
(6, 'Orion Pictures'),
(7, 'The Weinstein Company'),
(8, 'United Artists'),
(9, 'Universal Pictures'),
(10, 'Warner Bros'),
(11, 'Wild Bunch');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Drama'),
(2, 'Crime'),
(3, 'Action'),
(4, 'Fantasy'),
(5, 'Western'),
(6, 'Comedy'),
(7, 'Thriller'),
(8, 'War'),
(9, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Sicilian'),
(3, 'German'),
(4, 'Yiddish'),
(5, 'Italian'),
(6, 'Spanish'),
(7, 'French');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `rating` float NOT NULL,
  `year_released` int NOT NULL,
  `box_office` int NOT NULL,
  `budget` bigint NOT NULL,
  `duration` int NOT NULL,
  `companyID` int NOT NULL,
  `genreID` int NOT NULL,
  `directorID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genreID` (`genreID`),
  KEY `companyID` (`companyID`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `rating`, `year_released`, `box_office`, `budget`, `duration`, `companyID`, `genreID`, `directorID`) VALUES
(1, 'Intouchables', 8.5, 2011, 426600000, 10800000, 112, 3, 6, 10),
(2, 'Pulp Fiction', 8.8, 1994, 213900000, 8500000, 154, 4, 2, 7),
(3, 'The Lord of the Rings: The Return of the King', 8.9, 2003, 1146000000, 94000000, 201, 5, 4, 6),
(4, 'The Lord of the Rings: The Fellowship of the Ring', 8.8, 2001, 898200000, 93000000, 178, 5, 4, 6),
(6, '12 Angry Men', 9, 1957, 2000000, 340000, 96, 6, 1, 4),
(7, 'The Silence of the Lambs', 8.6, 1991, 272700000, 19000000, 118, 6, 7, 11),
(8, 'The Godfather', 9.2, 1972, 291000000, 7200000, 175, 1, 2, 2),
(9, 'The Godfather Part II', 9, 1974, 93000000, 13000000, 202, 1, 2, 2),
(10, 'Inglourious Bastards', 8.4, 2009, 321500000, 70000000, 153, 7, 8, 7),
(11, 'The Good, the Bad and the Ugly', 8.8, 1966, 38900000, 1200000, 161, 8, 5, 8),
(12, 'Schindler\'s List', 8.9, 1993, 322200000, 22000000, 195, 9, 1, 5),
(13, 'Forrest Gump', 8.7, 1994, 677400000, 55000000, 142, 9, 1, 9),
(14, 'The Dark Knight', 9, 2008, 1006000000, 185000000, 152, 10, 3, 3),
(15, 'La Vie d\'Adèle', 7.7, 2013, 19000000, 4000000, 180, 11, 9, 12);

-- --------------------------------------------------------

--
-- Structure de la table `movie_language`
--

DROP TABLE IF EXISTS `movie_language`;
CREATE TABLE IF NOT EXISTS `movie_language` (
  `movieID` int NOT NULL,
  `languageID` int NOT NULL DEFAULT '1',
  KEY `languageID` (`languageID`),
  KEY `movieID` (`movieID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`genreID`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`companyID`) REFERENCES `distribution_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_ibfk_3` FOREIGN KEY (`directorID`) REFERENCES `director` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `movie_language`
--
ALTER TABLE `movie_language`
  ADD CONSTRAINT `movie_language_ibfk_1` FOREIGN KEY (`languageID`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_language_ibfk_2` FOREIGN KEY (`movieID`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
