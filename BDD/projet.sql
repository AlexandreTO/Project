-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2019 at 11:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

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
-- Table structure for table `Commande`
--

CREATE TABLE `Commande` (
  `id_produit` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Produit`
--

CREATE TABLE `Produit` (
  `id_produit` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix` float NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`id_produit`,`id`),
  ADD KEY `Commande_clients0_FK` (`id`);

--
-- Indexes for table `Produit`
--
ALTER TABLE `Produit`
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
-- AUTO_INCREMENT for table `Produit`
--
ALTER TABLE `Produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Commande`
--
ALTER TABLE `Commande`
  ADD CONSTRAINT `Commande_Produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `Produit` (`id_produit`),
  ADD CONSTRAINT `Commande_clients0_FK` FOREIGN KEY (`id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
