-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 03 Décembre 2017 à 21:27
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `NameProduct` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FirstCat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SecondCat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThirdCat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`Id`, `NameProduct`, `Image`, `Description`, `Price`, `Type`, `FirstCat`, `SecondCat`, `ThirdCat`, `Image2`) VALUES
(1, 'Ahri', '/images/AhriDefault.jpg', 'The Nine-Tailed Fox', 6300, 'Ranged', 'Mage', 'Assassin', NULL, '/images/AhriSG.jpg'),
(5, 'Katarina', '/images/KataDefault.jpg', 'The Sinister Blade', 3150, 'Melee', 'Assassin', NULL, NULL, '/images/KatarinaDS.jpg'),
(7, 'Soraka', '/images/SorakaDefault.jpg', 'The StarChild', 450, 'Ranged', 'Support', NULL, NULL, NULL),
(8, 'Sion', '/images/SionDefault.jpg', 'The Undead Juggernaut', 6300, 'Melee', 'Tank', NULL, NULL, NULL),
(9, 'Fiddlesticks', '/images/FiddlesticksSP.jpg', 'The Harbinger of Doom', 3150, 'Ranged', 'Mage', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;