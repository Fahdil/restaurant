-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 23 Novembre 2022 à 15:11
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `bd`
--

CREATE TABLE `bd` (
  `id` int(5) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bd`
--

INSERT INTO `bd` (`id`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
(5, 'BELLO', 'Fahdil', 'fahdilbel90@gmail.com', '$2y$12$UaRLIcP3FR3sbtuT3UZIzeCHfAHXRy9GoX0J75/IahiCEGUpE6mgq', 1),
(6, 'nya', 'boris', 'boris.nya@groupe-esigelec.org', '$2y$12$OZc6oaZ7dvx/r.NH8coBxuimx7nMH14JjV9ALhWuhYEMZajUgZ8Ea', 1),
(7, 'Claude', 'NYA', 'claude.nya@groupe-esigelec.org', '$2y$12$rEMtxZ.Zmk8/p2O97fmrpugaPh2hwqdAnJ1fmafomfJ8ZOml674Sm', 0),
(8, 'bob', 'bobbi', 'bob.bobi@gmail.com', '$2y$12$SGnezx5MCiZ0R03OFzxTeuMRWmV9jrcTEf.wFTDoAAUm2DNoLHRg6', 0),
(9, 'Bello', 'falcao', 'bello.falcao@gmail.com', '$2y$12$DVdZDuh/109WU/P1F/SDe.X8/GrUd1WoBAOegTXgF872VhDiZ3QkG', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcom` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idrep` int(11) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `heure` varchar(255) DEFAULT NULL,
  `supprimer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`idcom`, `iduser`, `idrep`, `Etat`, `quantite`, `heure`, `supprimer`) VALUES
(2, 7, 2, 'pret', 2, '13:04', 1),
(3, 7, 2, 'prise en charge', 13, '11:04', 1),
(4, 7, 2, 'prise en charge', 3, '17:03', 1),
(5, 7, 3, 'prise en charge', 1, '15:37', 0);

-- --------------------------------------------------------

--
-- Structure de la table `platsduresto`
--

CREATE TABLE `platsduresto` (
  `nomplat` varchar(50) NOT NULL,
  `typeplat` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `lien_nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idplat` int(11) NOT NULL,
  `supprimer` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `platsduresto`
--

INSERT INTO `platsduresto` (`nomplat`, `typeplat`, `prix`, `lien_nom`, `description`, `idplat`, `supprimer`) VALUES
(' za', ' zzz', 22, '  https://media.istockphoto.com/photos/shot-of-an-unrecognisable-man-preparing-a-delicious-meal-at-home-picture-id1332612615?b=1&amp;k=20&amp;m=1332612615&amp;s=170667a&amp;w=0&amp;h=3em2mqOFssJZlXQM4b4zdaj86L2YutgPuiv07_pHU3A=', ' chgchg tiy&egrave;ri&egrave; rlti&egrave;yri r&egrave;-ir&egrave;-__&egrave; r&egrave;ir--&egrave;yryri&egrave; r-&egrave;iri&egrave;yri&egrave;r -riiri&egrave;ri&egrave;-r r-&egrave;', 2, 1),
('Salade', 'plat de r&eacute;sistance', 1.98, '      https://th.bing.com/th/id/OIP.TQG4vz6_5PJl2iEyBM1OTwHaD5?w=309&amp;h=180&amp;c=7&amp;r=0&amp;o=5&amp;pid=1.7', '   salade exotique', 3, 0),
('Pomme de terre farcie au lardon', 'plat de r&eacute;sistance ', 8.23, 'https://img.cuisineaz.com/660x660/2015/05/13/i106505-pomme-de-terre-farcie-aux-lardons-et-brocoli.webp', '0', 4, 0),
('Risotto', 'plat de resistance', 2.2, 'https://th.bing.com/th/id/OIP._IW7W5TNYmejbYi7vwPiaQHaI1?w=160&amp;h=189&amp;c=7&amp;r=0&amp;o=5&amp;pid=1.7', 'risotto s&eacute;n&eacute;galais', 5, 0),
('okok', 'plat de resistance', 2, 'https://th.bing.com/th/id/OIP.G2KbBQixyBn79oOmInwqNQHaHa?w=157&amp;h=180&amp;c=7&amp;r=0&amp;o=5&amp;pid=1.7', 'plat camerounais bon avec du bobolo', 6, 0),
('Cr&egrave;me au chocolat', 'Dessert', 0.99, 'https://th.bing.com/th/id/OIP.rMKkx-nmkK4WyGiUwpBSxQHaFj?w=232&amp;h=180&amp;c=7&amp;r=0&amp;o=5&amp;pid=1.7', 'A base de chocolat lat&eacute;', 7, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcom`);

--
-- Index pour la table `platsduresto`
--
ALTER TABLE `platsduresto`
  ADD PRIMARY KEY (`idplat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bd`
--
ALTER TABLE `bd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `platsduresto`
--
ALTER TABLE `platsduresto`
  MODIFY `idplat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
