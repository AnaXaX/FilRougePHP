-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 27 mars 2018 à 17:29
-- Version du serveur :  5.7.20-19-log
-- Version de PHP :  5.5.38-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `u142208db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTIVITE`
--

CREATE TABLE `ACTIVITE` (
  `CODEACTIVITE` tinyint(2) NOT NULL,
  `CODEPRIX` smallint(4) NOT NULL,
  `LIBELLEACTIVITE` varchar(30) DEFAULT NULL,
  `TYPEACTIVITE` varchar(25) DEFAULT NULL,
  `DATEDEBUTACTIVITE` datetime DEFAULT NULL,
  `DATEFINACTIVITE` datetime DEFAULT NULL,
  `AGEMINACTIVITE` tinyint(2) DEFAULT NULL,
  `ACCES` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `codeClient` int(6) NOT NULL,
  `nomClient` varchar(20) DEFAULT NULL,
  `prenomClient` varchar(20) DEFAULT NULL,
  `dateNaissanceClient` date DEFAULT NULL,
  `adresseClient` varchar(50) DEFAULT NULL,
  `villeClient` varchar(25) DEFAULT NULL,
  `telClient` varchar(12) DEFAULT NULL,
  `newsletterClient` tinyint(1) DEFAULT NULL,
  `emailClient` varchar(45) DEFAULT NULL,
  `motDePasseClient` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`codeClient`, `nomClient`, `prenomClient`, `dateNaissanceClient`, `adresseClient`, `villeClient`, `telClient`, `newsletterClient`, `emailClient`, `motDePasseClient`) VALUES
(0, 'Boudyach', 'Anas', '2018-03-13', '87 cours gambetta', 'Lyon', '06671112221', 1, 'anas.boudyach@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `ENTREEVISITEUR`
--

CREATE TABLE `ENTREEVISITEUR` (
  `CODEENTREEVISITEUR` int(4) NOT NULL,
  `CODERESERVATION` int(6) NOT NULL,
  `CODEPRIX` smallint(4) NOT NULL,
  `NOMVISITEUR` varchar(40) DEFAULT NULL,
  `AGEVISITEUR` tinyint(2) DEFAULT NULL,
  `DATEENTREE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `PRIX`
--

CREATE TABLE `PRIX` (
  `CODEPRIX` smallint(4) NOT NULL,
  `AGEMINPRIX` tinyint(2) DEFAULT NULL,
  `AGEMAXPRIX` tinyint(2) DEFAULT NULL,
  `PRIX` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `REDUCTION`
--

CREATE TABLE `REDUCTION` (
  `CODEREDUC` tinyint(1) NOT NULL,
  `CODEPROMO` varchar(6) DEFAULT NULL,
  `DATEFINPROMO` date DEFAULT NULL,
  `DATEDEBUTPROMO` date DEFAULT NULL,
  `POURCENTAGEPROMO` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `RESERVATION`
--

CREATE TABLE `RESERVATION` (
  `CODERESERVATION` int(6) NOT NULL,
  `CODECLIENT` int(6) NOT NULL,
  `CODEREDUC` tinyint(1) DEFAULT NULL,
  `ANNULABLE` tinyint(1) DEFAULT NULL,
  `MOYENPAYEMENT` varchar(40) DEFAULT NULL,
  `DATEOPERATION` datetime DEFAULT NULL,
  `DATERESERVATION` date DEFAULT NULL,
  `TOTALPAYE` decimal(7,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ACTIVITE`
--
ALTER TABLE `ACTIVITE`
  ADD PRIMARY KEY (`CODEACTIVITE`),
  ADD KEY `ix_Activite` (`LIBELLEACTIVITE`),
  ADD KEY `FK_S_APPLIQUE` (`CODEPRIX`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`codeClient`),
  ADD KEY `ix_Email` (`emailClient`);

--
-- Index pour la table `ENTREEVISITEUR`
--
ALTER TABLE `ENTREEVISITEUR`
  ADD PRIMARY KEY (`CODEENTREEVISITEUR`),
  ADD KEY `FK_RESERVE` (`CODERESERVATION`),
  ADD KEY `FK_P_APPLIQUE` (`CODEPRIX`);

--
-- Index pour la table `PRIX`
--
ALTER TABLE `PRIX`
  ADD PRIMARY KEY (`CODEPRIX`);

--
-- Index pour la table `REDUCTION`
--
ALTER TABLE `REDUCTION`
  ADD PRIMARY KEY (`CODEREDUC`),
  ADD KEY `ix_Promo` (`CODEPROMO`);

--
-- Index pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD PRIMARY KEY (`CODERESERVATION`),
  ADD KEY `FK_EFFECTUE` (`CODECLIENT`),
  ADD KEY `FK_S_APPLIQUE_` (`CODEREDUC`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ACTIVITE`
--
ALTER TABLE `ACTIVITE`
  ADD CONSTRAINT `FK_S_APPLIQUE` FOREIGN KEY (`CODEPRIX`) REFERENCES `PRIX` (`CODEPRIX`);

--
-- Contraintes pour la table `ENTREEVISITEUR`
--
ALTER TABLE `ENTREEVISITEUR`
  ADD CONSTRAINT `FK_P_APPLIQUE` FOREIGN KEY (`CODEPRIX`) REFERENCES `PRIX` (`CODEPRIX`),
  ADD CONSTRAINT `FK_RESERVE` FOREIGN KEY (`CODERESERVATION`) REFERENCES `RESERVATION` (`CODERESERVATION`);

--
-- Contraintes pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD CONSTRAINT `FK_EFFECTUE` FOREIGN KEY (`CODECLIENT`) REFERENCES `Client` (`codeClient`),
  ADD CONSTRAINT `FK_S_APPLIQUE_` FOREIGN KEY (`CODEREDUC`) REFERENCES `REDUCTION` (`CODEREDUC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
