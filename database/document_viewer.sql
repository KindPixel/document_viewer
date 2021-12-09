-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 déc. 2021 à 15:54
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
-- Base de données : `document_viewer`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) CHARACTER SET utf8 NOT NULL,
  `namecomp` varchar(64) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(64) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `access` int(11) NOT NULL,
  `filesAccess` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `namecomp`, `mail`, `password`, `access`, `filesAccess`) VALUES
(2, 'thomas', 'thomascorp', 'thomas.lima@viacesi.fr', '$2y$10$CRlZPd.81ci9SfIF0GDYWOkn7TfewBSmog464HzzK2kvVqRyWFCDW', 999, '[\"page1.html\",\"page2.html\",\"page3.html\"]'),
(10, 'test', 'test Corporation', 'saja.rachid@viacesi.fr', '$2y$10$W.6ntxCoSvgO.BmolTbiv./EkfKTLeVM1zEQnY7SVhXFwh2sb0JBi', 1, '[\"page1.html\"]'),
(11, 'elisa', 'lima corpo', 'elisa.lima@viacesi.fr', '$2y$10$vwt8XbEy6/rWyPVMcM3PvOfpYL1MDqSQfEDPHnxaEJfZvxwmXdaom', 1, '[\"page1.html\",\"page2.html\",\"page3.html\"]'),
(12, 'testo', 'testo', 'testo@gmail.com', '$2y$10$MmE7ZPcM7NYisiMYZ8MmJu56f2NF8UforH5DbjjQ5SL8t.Dblyfam', 1, '[\"page3.html\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
