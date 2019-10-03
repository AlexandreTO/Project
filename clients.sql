-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 oct. 2019 à 14:59
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Utilisateur` varchar(255) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Adresse` varchar(35) CHARACTER SET utf8mb4 NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MDP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`Nom`, `Prenom`, `Utilisateur`, `DateNaissance`, `Adresse`, `CodePostal`, `Email`, `MDP`) VALUES
('TO', 'Alexandre', 'AlexTO', '1996-11-18', '02 Avenue du Marie Curie', 77600, 'alexandreto1996@gmail.com', '$2y$10$7I59TZ.kz4Sb4VAbkWNMHeWSgd7tyqdGR/eK/fmiPdg3/wmeV92Hm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Utilisateur` (`Utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
