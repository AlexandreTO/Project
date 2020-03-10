-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 09:46 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PWD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateDeNaissance` date NOT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CodePostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Nom`, `Prenom`, `Email`, `PWD`, `DateDeNaissance`, `Adresse`, `Telephone`, `Username`, `Ville`, `CodePostal`) VALUES
(1, 'TO', 'ALex', 'alexandreto1996@gmail.com', '$2y$10$AFjse5YTXOsaF.r7CU0bYeL4SQeQKXtZ/gJjo.828TYtXzotOScXi', '1996-11-18', '52 Avenue du Général De Gaulle', '0750070877', 'Net', 'Bussy Saint Georges', '77600'),
(2, 'Herrington', 'Billy', 'billy@gmail.com', '$2y$10$iv5D1wPOcCzlHGYJQKSmc.qOKmHIqkZojVfhfGXtfWKVR4uj7.Q26', '1980-11-02', '69 Ram Ranch', '0652157498', 'Aniki', 'Paris', '75015');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_produit` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix` float NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `Vendu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `Nom`, `Reference`, `Prix`, `Description`, `Image`, `Categorie`, `quantite`, `Vendu`) VALUES
(1, 'Macaron chocolat', 'MC01ES', 0.25, 'Superbe macaron au chocolat', 'macaron_choco.jpg', 'macaron', 6, 32),
(2, 'Macaron vanille', 'MV02ES', 0.25, 'Délicieux macaron à la vanille', 'macaron_van.jpg', 'macaron', 9, 53),
(3, 'Macaron fraise', 'MF03ES', 0.25, 'Un délice de macaron saveur fraise', 'macaron_fr.jpg', 'macaron', 12, 36),
(4, 'Cookies chocolat au lait', 'CCAL04ES', 0.35, 'Grand cookie au pépite de chocolat au lait', 'cookie_choco.jpg', 'cookies', 32, 75),
(5, 'Muffin au caramel', 'MAC05ES', 0.35, 'Excellent muffin fourré au caramel.', 'muffin_car.jpg', 'muffin', 15, 68),
(6, 'Tartes aux fraises', 'TAF06ES', 1, 'Merveilleuse tartes aux fraises', 'tarte_fraise.jpg', 'tarte', 30, 52),
(7, 'Gâteau au chocolat', 'GACH07ES', 2, 'Le classique gâteau au chocolat revisité par nos plus grands pâtissiers ', 'gateau_chocolat.jpg', 'gâteau', 5, 87),
(8, 'Tarte aux pommes', 'TAPM08ES', 1.5, 'Délicieuse tartes aux pommes de nos régions', 'tarte_aux_pommes.jpg', 'tarte', 14, 82),
(9, 'Macaron pistache', 'MPCHO9ES', 0.15, 'Savoureux macaron à la pistache', 'macaron_pistache.jpg', 'macaron', 8, 36),
(10, 'Macaron citron', 'MCTRN10ES', 0.15, 'Pour les fans d\'acidité ', 'macaron_citron.jpg', 'macaron', 6, 29),
(11, 'Macaron cassis', 'MCSS11ES', 0.25, 'Pour les amoureux du cassis', 'macaron_cassis.jpg', 'macaron', 7, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_produit`,`id`),
  ADD KEY `Commande_clients0_FK` (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `Commande_Produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `Commande_clients0_FK` FOREIGN KEY (`id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
