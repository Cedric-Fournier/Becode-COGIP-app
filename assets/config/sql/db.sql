-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 29 Août 2018 à 09:09
-- Version du serveur :  5.7.23-0ubuntu0.16.04.1
-- Version de PHP :  7.0.31-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `COGIPapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `bill`
--

CREATE TABLE `bill` (
  `number` tinyint(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `object` varchar(30) NOT NULL,
  `company` tinyint(3) UNSIGNED NOT NULL,
  `person` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bill`
--

INSERT INTO `bill` (`number`, `date`, `object`, `company`, `person`) VALUES
(1, '2018-08-07', 'allez-ciné', 1, 3),
(2, '2018-07-08', 'challenge php', 1, 4),
(3, '2018-06-10', 'onepage unicode', 1, 5),
(4, '2018-04-09', 'onepage orange', 1, 6),
(5, '2018-08-12', 'livraison 2 pal', 2, 7),
(6, '2018-08-14', 'livraison 5pal', 2, 8),
(7, '2018-08-17', 'opération marketing', 2, 9),
(8, '2018-08-21', 'joyeux noel', 2, 10),
(9, '2018-08-29', 'assomption', 2, 11),
(10, '2018-08-15', '3 pizza + 2pates', 5, 12),
(11, '2018-08-28', 'panier surprise Web Dev', 5, 13),
(12, '2018-08-29', 'panier surprise coca-cola', 5, 14),
(13, '2018-08-23', 'panier surprise BeCode', 5, 15),
(14, '2018-08-27', 'panier surprise BeCentral', 5, 16),
(15, '2018-08-08', 'devis chantier Charleroi', 6, 17),
(16, '2018-08-21', 'livraison matériel Charleroi', 6, 18),
(17, '2018-08-29', 'Main d\'oeuvre Charleroi', 6, 19),
(18, '2018-07-01', 'Devis Chantier Bruxelles', 6, 20),
(19, '2018-05-07', 'Devis Chantier BeCode', 6, 21),
(20, '2018-08-13', 'Main d\'Oreuvre BeCode', 6, 22),
(21, '2018-05-16', 'Template Coca-Cola', 7, 23),
(22, '2018-03-20', 'Design Becode', 7, 24),
(23, '2017-11-01', 'Multiple Design for WebDev', 7, 25),
(24, '2018-07-06', 'Client', 7, 26),
(25, '2018-06-02', 'Refonte de notre site', 7, 27);

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `number` varchar(5) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `VAT` varchar(12) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `name`, `street`, `number`, `zip`, `city`, `country`, `VAT`, `phone`) VALUES
(1, 'WebDevelopper', 'rue de la putterie', '6', '1000', 'Bruxelles', 'Belgique', '048349728', '024215736'),
(2, 'Coca-Cola', 'avenue de l\'obésité', '99', '1030', 'Bruxelles', 'Belgique', '347812395', '024753214'),
(5, 'Chez Jonny', 'rue des jonnys', '1', '1000', 'Bruxelles', 'Belgique', '351745029', '023219854'),
(6, 'Paul & Company', 'avenue des pendus', '5', '1040', 'Bruxelles', 'Belgique', '032478159', '022540120'),
(7, 'WebDesign', 'boulevard de Monaco', '145', '1020', 'Bruxelles', 'Belgique', '325149657', '022198530');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `company` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`id`, `firstname`, `lastname`, `phone`, `email`, `company`) VALUES
(3, 'Cedric', 'Fournier', '0499123456', 'cedricfournier@email.com', 1),
(4, 'Adrien', 'd\'Oreye', '0489824514', 'adriendoreye@email;com', 1),
(5, 'Stephane', 'Wilfort', '04172569', 'stephanewilfort@email.com', 1),
(6, 'Genièvre', 'Van Chou', '0429541239', 'genievrevanchou@email.com', 2),
(7, 'Julie', 'Dupont', '0478503654', 'juliedupont', 1),
(8, 'Marie', 'Dupont', '0478500200', 'mariedupont@email.com', 1),
(9, 'John', 'Smith', '0497007977', 'johnsmith@email.com', 2),
(10, 'Henry', 'Salvador', '024821214', 'henrysalvador@email.com', 2),
(11, 'Nadege', 'Demae', '0415326701', 'nadegedemae@email.com', 2),
(12, 'Simon', 'Simon', '0428012088', 'simonsimon@email.com', 2),
(13, 'Simon', 'Puech', '0491366769', 'puech.simon@gmail.com', 5),
(14, 'Hulk', 'Hogan', '0491568453', 'hh@gmail.com', 5),
(15, 'Jules', 'Verne', '0491199546', 'jv@gmail.com', 5),
(16, 'Thibault', 'Gribaumont', '04912366589', 't.g@gmail.com', 5),
(17, 'Geraldine', 'Gribaumont', '0491758426', 'gg@gmail.com', 5),
(18, 'David', 'Goodenough', '0491112233', 'david.doodenough@gmail.com', 6),
(19, 'Bob', 'Lennon', '0491733742', 'lelennon@gmail.com', 6),
(20, 'Fanatsio', 'Ilien', '0491568451', 'fantasio974@gmail.com', 6),
(21, 'Vanessa', 'Paradis', '0491654875', 'rondoudou@gmail.com', 6),
(22, 'Guillaume', 'Kreit', '0491010203', 'dodo@gmail.com', 6),
(23, 'Jean-Rachid', 'Rochefort', '021473254', 'jr-rochefort@email.com', 7),
(24, 'Emily', 'Marghella', '021540266', 'em.marghella@email.com', 7),
(25, 'Cookie', 'Chocolat', '0426241709', 'cookie.choco@email.com', 7),
(26, 'Salami', 'Manger', '0475241895', 'salamiemanger@email.com', 7),
(27, 'François', 'Du Voison', '0429661144', 'francoisduvoisin@email.com', 7);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `company` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `type`, `company`) VALUES
(1, 'client', 1),
(2, 'fournisseur', 2),
(3, 'client', 5),
(4, 'fournisseur', 6),
(5, 'client', 7);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`number`),
  ADD KEY `company` (`company`),
  ADD KEY `person` (`person`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company` (`company`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company` (`company`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bill`
--
ALTER TABLE `bill`
  MODIFY `number` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
