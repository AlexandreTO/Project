-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 04 oct. 2019 à 11:24
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
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DateDeNaissance` date NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `CodePostal` varchar(5) DEFAULT 'NULL',
  `Ville` varchar(255) NOT NULL,
  `Telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `Nom`, `Prenom`, `Username`, `PWD`, `Email`, `DateDeNaissance`, `Adresse`, `CodePostal`, `Ville`, `Telephone`) VALUES
(818, 'Suleski', 'Tristan', 'Trist', '$2y$10$pENKwTGQ.XPTzHzwam.uP.8jSwMstEoxUtUA6oIi9P7rFndYh74IW', 'tristan@lol.com', '1996-12-19', '52 Avenue du Marie Curie', '75012', 'Paris', '0750070877'),
(1032, 'TO', 'Alexandre', 'Net', '$2y$10$0CfiBErm60ksumUm5qwAgO3TUEK.Iasd1MndGKb3ifyKQggt2hhRC', 'alexandreto1996@gmail.com', '1996-11-18', '52 Avenue du GÃ©nÃ©ral de Gaulle', '77600', 'Bussy Saint Georges', '0750070877');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_produit` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Reference` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--
  INSERT INTO `produit` values (1,"Cupcake","ref",5,"Cupcake avec pépite chocolats");
--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_produit`,`id`),
  ADD KEY `Commande_clients0_FK` (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `Commande_Produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `Commande_clients0_FK` FOREIGN KEY (`id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
