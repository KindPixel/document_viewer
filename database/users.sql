-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 déc. 2021 à 09:36
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
  `allName` varchar(64) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(64) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `access` int(11) NOT NULL,
  `filesAccess` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `namecomp`, `allName`, `mail`, `password`, `access`, `filesAccess`) VALUES
(2, 'thomas', 'thomascorp', 'Thomas Lima', 'thomas.lima@viacesi.fr', '$2y$10$CRlZPd.81ci9SfIF0GDYWOkn7TfewBSmog464HzzK2kvVqRyWFCDW', 999, '[\"page1.html\",\"page3.html\"]'),
(10, 'test', 'test Corporation', '0', 'saja.rachid@viacesi.fr', '$2y$10$W.6ntxCoSvgO.BmolTbiv./EkfKTLeVM1zEQnY7SVhXFwh2sb0JBi', 1, '[\"page1.html\",\"page3.html\"]'),
(11, 'elisa', 'lima corpo', '0', 'elisa.lima@viacesi.fr', '$2y$10$vwt8XbEy6/rWyPVMcM3PvOfpYL1MDqSQfEDPHnxaEJfZvxwmXdaom', 1, '[\"page1.html\",\"page2.html\",\"page3.html\"]'),
(17, 'julopipou', 'thomascorpo', '0', 'jul@cesi.fr', '$2y$10$ArXKJHpLel0s0jS.O0VGf.GyekQkcaL2bCAXJ8ej5X6wS.Q0JgAkK', 1, 'null'),
(18, 'Celia', 'thomascorpo', 'Célia Chibah', 'celia.chibah@gmail.com', '$2y$10$2jG8ufiDa4/58CMRMtXlEugqeYlWwETobMc6LYS6SEjf/3Pjus25K', 1, 'null'),
(19, 'thomasll', 'thomascorpo', 'Thomas Lima', 'thomas.lima@viacesi.com', '$2y$10$D6BFvWmxBkSoaib24pizdO5V/BIo7j5PpHKDZTl3LR2hBoMRZjjHC', 1, 'null');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
