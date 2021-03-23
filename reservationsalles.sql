-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mars 2021 à 16:01
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
-- Base de données : `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(1, 'bachata', 'aadd', '2021-02-01 08:00:00', '2021-02-01 09:00:00', 5),
(2, 'etienne', 'dzd;qzdqdqz', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(3, 'etienne', 'dzd;qzdqdqz', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(4, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(5, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(6, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(7, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(8, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(9, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(10, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(11, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(12, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(13, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(14, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(15, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(16, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(17, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(18, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(19, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(20, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(21, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(22, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(23, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(24, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(25, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(26, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(27, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(28, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(29, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(30, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(31, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(32, 'adhzazudj', '0', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1),
(33, 'test', '0', '2021-03-24 11:00:00', '1970-01-01 12:00:00', 10),
(34, 'test', '0', '2021-03-24 11:00:00', '2021-03-24 12:00:00', 10),
(35, 'test', '0', '2021-03-24 11:00:00', '2021-03-24 12:00:00', 10),
(36, 'toto', '0', '2021-03-27 11:00:00', '2021-03-27 17:00:00', 10),
(37, 'gesgseg', 'segseg', '2021-03-27 11:00:00', '2021-03-27 19:00:00', 10),
(38, 'test', 'vatefaireenculer', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(39, 'test', 'dedededeed', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(40, 'gtgtg', 'dedededeed', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(41, 'test', 'donnez votre avis', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(42, 'bachata', 'donnez votre avie', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(43, 'gtgt', 'gtgtg', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(44, 'bachata', 'vatefaireenculer', '2021-03-25 11:00:00', '2021-03-25 12:00:00', 10),
(45, 'test', 'donnez votre avis', '2021-03-24 11:00:00', '2021-03-24 12:00:00', 10),
(46, 'test', 'donnez votre avis', '2021-03-24 11:00:00', '2021-03-24 12:00:00', 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'mathis455', '123123'),
(2, 'remy13', '$2y$10$6rZ7t5reVTIkvp7P.TJVJ.CQI1nDqFpEnwBSWKZEi4drYPSf9obo.'),
(3, 'xxxxx', 'xxxxxx'),
(8, 'kikiki', '123123'),
(4, 'habib', '$2y$10$vs1Hg6C5sV2LqxialkMME.GyxJH7EnsRYZen5tQCBsiaoHuQ3zIXS'),
(5, 'hugoc', '$2y$10$9wZCiEJx44WWnHaCBnm1yeEvvdimgNws9ZyXiYWpULcOfBi59eLHm'),
(6, 'coucou11', '$2y$10$801ptXoE8EmfvaGXjn6peufx57uBnwgkSUBlqOmMz6bJtKmnLeXt.'),
(7, 'coucou456', '$2y$10$AhsDfUTO9HKUlbtIdMs6Xu7CMfJaaNnb7JvZFGQzXE83kMgh9RlT2'),
(10, 'robin', '$2y$10$VdckaPizL0PRdLEsRUs8zujcC4u9bshdWViQ8akqlnL6vEQhRFjyW'),
(9, 'bvnvhghg', '$2y$10$F/BQp7GsCEJ5rXz3KYz7EuKmjHluDe0hxfSQoaocdMf9T7U8hk34G');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
