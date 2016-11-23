-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Novembre 2016 à 13:21
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bob_bob`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `idAgence` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`idAgence`, `nom`, `adresse`) VALUES
(1, 'Auxerre', '10 rue de paris'),
(2, 'Lille', '20 rue Nationale'),
(3, 'Marseille', 'dfjskqlm'),
(4, 'Lyon', 'uieren'),
(5, 'Paris', 'fdjskql'),
(6, 'Roubaix', 'sdffd'),
(7, 'Dijon', 'fdsjkle');

-- --------------------------------------------------------

--
-- Structure de la table `agence_has_client`
--

CREATE TABLE `agence_has_client` (
  `agence_idAgence` int(11) NOT NULL,
  `client_idClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `idPostCom` int(11) NOT NULL,
  `commentaires_idCom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `tel`, `idPostCom`, `commentaires_idCom`) VALUES
(1, 'LANOY', 'Henri', 'jfdklqjkfldsmq, Hem', NULL, 1, 1),
(2, 'SYLVESTRE', 'Mike', 'jfkdslqmjfkdlqm, Paris', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `idCom` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL,
  `client-idClient` int(11) NOT NULL,
  `post_idPost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`idCom`, `numero`, `texte`, `client-idClient`, `post_idPost`) VALUES
(1, 1, 'blablabla', 2, 0);

--
-- Déclencheurs `commentaires`
--
DELIMITER $$
CREATE TRIGGER `Ajout_commentaires_has_post` AFTER INSERT ON `commentaires` FOR EACH ROW INSERT INTO `commentaires`(`idCom`, `numero`, `texte`, `client-idClient`, `post_idPost`) VALUES (2,002,'youpi, très bonne location !',4,2)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `concessionnaire`
--

CREATE TABLE `concessionnaire` (
  `idConcessionnaire` int(11) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `tel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `concessionnaire`
--

INSERT INTO `concessionnaire` (`idConcessionnaire`, `adresse`, `nom`, `tel`) VALUES
(1, '10 rue plouc, Auxerre', 'VAG', NULL),
(2, '15 Avenue Alfred Motte, Roubaix', 'VAG', NULL),
(3, 'rue blabla', 'Opel', NULL),
(4, 'route vvv', 'Peugeot', NULL),
(5, 'fjdsklqm', 'Lamborghini', NULL),
(6, 'skfjdlqm', 'Ferrari', NULL),
(7, 'fhsqkjm', 'Porsche', NULL),
(8, 'jkdlsqm', 'Citroen', NULL),
(9, 'fjdkslqm', 'Renault', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `idLouer` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `voitures_idVoitures` int(11) NOT NULL,
  `voitures_immatriculation` varchar(20) NOT NULL,
  `voitures_numeroSerie` varchar(20) NOT NULL,
  `client_idClient` int(11) NOT NULL,
  `saison_idSaison` int(11) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `idMarque` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`idMarque`, `nom`) VALUES
(1, 'Audi'),
(2, 'Lamborghini'),
(3, 'Ferrari'),
(4, 'Peugeot'),
(5, 'Renault'),
(6, 'Citroen'),
(7, 'Saab'),
(8, 'Dacia'),
(9, 'Porsche'),
(10, 'Fiat'),
(11, 'Seat'),
(12, 'Lancia'),
(13, 'Opel');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `date` date NOT NULL,
  `commentaires_idCom` int(11) NOT NULL,
  `client_idCient` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `libre` tinyint(1) NOT NULL,
  `voitures_idVoitures` int(11) NOT NULL,
  `voitures_immatriculation` varchar(20) NOT NULL,
  `voitures_numeroSerie` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reservations`
--

INSERT INTO `reservations` (`idReservation`, `debut`, `fin`, `libre`, `voitures_idVoitures`, `voitures_immatriculation`, `voitures_numeroSerie`) VALUES
(1, '2016-11-22', '2016-11-22', 0, 1, '', ''),
(2, '2016-11-19', '2017-01-11', 0, 3, '', ''),
(3, '2016-11-20', '2016-11-21', 1, 17, '', ''),
(4, '2016-11-23', '2017-01-07', 0, 17, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `idSaison` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `pourcentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `saison`
--

INSERT INTO `saison` (`idSaison`, `nom`, `debut`, `fin`, `pourcentage`) VALUES
(1, 'automne', '2016-10-21', '2016-12-20', 10),
(2, 'hiver', '2016-12-21', '2017-03-20', 5),
(3, 'printemps', '2016-03-21', '2016-06-20', 25),
(4, 'ete', '2016-06-21', '2016-10-20', 50);

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `idTarif` int(11) NOT NULL,
  `journee` varchar(20) NOT NULL,
  `marque_idMarque` int(11) NOT NULL,
  `voitures_idVoitures` int(11) NOT NULL,
  `saison_idSaison` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tarif`
--

INSERT INTO `tarif` (`idTarif`, `journee`, `marque_idMarque`, `voitures_idVoitures`, `saison_idSaison`) VALUES
(1, '200.00 €', 1, 4, 6),
(2, '50.00€', 4, 6, 2),
(3, '150.00€', 2, 2, 6),
(4, '1000.00€', 2, 3, 2),
(5, '200.000€', 6, 17, 6),
(6, '200€', 13, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `idVoitures` int(11) NOT NULL,
  `modele` varchar(45) NOT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `numeroSerie` varchar(20) NOT NULL,
  `img_voiture` varchar(255) DEFAULT NULL,
  `nbrDePortes` int(11) NOT NULL,
  `nbrDePlaces` int(11) NOT NULL,
  `categorie` varchar(45) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `kilometrage` int(10) NOT NULL,
  `annee` int(4) NOT NULL,
  `prix_achat` varchar(45) NOT NULL,
  `tarif_idTarif` int(11) NOT NULL,
  `reservations_libre` tinyint(1) NOT NULL,
  `marques_idMarque` int(11) NOT NULL,
  `concessionnaires_idConcessionnaire` int(11) NOT NULL,
  `agence_idAgence` int(11) NOT NULL,
  `commentaires_idCom` int(11) DEFAULT NULL,
  `locations_idLocation` int(11) DEFAULT NULL,
  `saison_idSaison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voitures`
--

INSERT INTO `voitures` (`idVoitures`, `modele`, `immatriculation`, `numeroSerie`, `img_voiture`, `nbrDePortes`, `nbrDePlaces`, `categorie`, `transmission`, `kilometrage`, `annee`, `prix_achat`, `tarif_idTarif`, `reservations_libre`, `marques_idMarque`, `concessionnaires_idConcessionnaire`, `agence_idAgence`, `commentaires_idCom`, `locations_idLocation`, `saison_idSaison`) VALUES
(1, 'TT', 'BB-123-CC', '123456sf1231231', 'url(\'img/img.jpg\')', 3, 2, 'sport', 'manuelle', 1500, 2016, '200000', 2, 0, 1, 1, 1, 0, 0, 2),
(2, 'F430', 'AA-456-AA', 'fds456789kmlo', 'url(\'img/img.jpg\')', 3, 2, 'sport', 'manelle', 200, 2016, '500000', 2, 0, 3, 2, 2, 0, 0, 2),
(3, 'Astra', 'BB-789-BB', 'ui879456412', 'url(\'img/img.jpg\')', 5, 5, 'berline', 'manuelle', 130000, 2010, '22000', 2, 0, 13, 2, 1, 0, 0, 2),
(4, 'Corsa', 'AA-456-BB', '4569aze2145', 'url(\'img/img.jpg\')', 5, 4, 'berline', 'manuelle', 60000, 2015, '65000', 2, 0, 13, 3, 5, 0, 0, 2),
(6, '307', '123 AB 95', '456ser25889', 'url(\'img/img.jpg\')', 5, 5, 'berline', 'automatique', 156000, 2005, '22000', 2, 0, 4, 3, 2, 0, 0, 2),
(7, 'TT', 'AA-159VV', 'ol15789za', 'url(\'img/img.jpg\')', 3, 2, 'sport', 'manelle', 123123, 2010, '1235645', 2, 0, 1, 2, 1, 0, 0, 2),
(8, 'TT', 'BB-654-CC', 'res4587lm', 'url(\'img/img.jpg\')', 3, 2, 'sport', 'automatique', 123, 2014, '45663221', 2, 0, 1, 2, 2, 0, 0, 2),
(9, 'vectra', 'BC-589-CC', 'plm12365dez', 'url(\'img/img.jpg\')', 3, 4, 'berline', 'semiauto', 4562, 2013, '789456', 2, 0, 13, 3, 5, 0, 0, 2),
(10, 'xcara', 'AA-897-DD', 'por45254pc', 'url(\'img/img.jpg\')', 5, 5, 'berline', 'manuelle', 125, 2016, '456321', 2, 0, 6, 8, 7, 0, 0, 2),
(11, 'F488', 'AA-852-GG', 'jkl5897plo', 'url(\'img/img.jpg\')', 2, 2, 'sport', 'manelle', 10, 2015, '789654123', 2, 0, 3, 6, 5, 0, 0, 2),
(12, 'TT', 'VV-564-lo', '4569ki254ki', 'url(\'img/img.jpg\')', 2, 2, 'sport', 'manuelle', 6, 2016, '999999999', 2, 0, 1, 2, 2, 0, 0, 2),
(13, 'TT', 'RV-160-LA', 'kiki5896lolo', 'url(\'img/img.jpg\')', 2, 2, 'sport', 'manuelle', 6, 2016, '999999999', 2, 0, 1, 2, 2, 0, 0, 2),
(14, 'vectra', 'PP-456-MM', 'uio852369pml', 'url(\'img/img.jpg\')', 5, 5, 'berline', 'manuelle', 4562, 2012, '78945', 2, 0, 13, 3, 1, 0, 0, 2),
(15, 'Astra', '4569 KQ 59', 'iopn63485i', 'url(\'img/img.jpg\')', 3, 5, 'berline', 'automatique', 130000, 1999, '22000', 2, 0, 13, 2, 4, 0, 0, 2),
(16, 'clio', '1601RV69', 'jules5965214mol', 'url(\'img/img.jpg\')', 2, 2, 'sport', 'manuelle', 12, 1989, '999999999999999', 2, 0, 5, 5, 2, 0, 0, 2),
(17, '2cv', '892VL62', 'julie21587p', 'url(\'img/img.jpg\')', 5, 4, 'antiquité/collection', 'manuelle', 500000, 1940, '250€', 2, 0, 6, 1, 1, 0, 0, 2),
(18, '307', 'AQ-220-MM', 'uile78965412lki', 'url(\'img/img.jpg\')', 3, 5, 'berline', 'manuelle', 200000, 2005, '20.000€', 2, 0, 4, 3, 1, 0, 0, 2),
(19, 'quatro', '45VGA75', '45698213moli596', NULL, 5, 4, 'berline', 'essence', 260, 1998, '35.000', 2, 1, 1, 2, 3, 2, 0, 2);

--
-- Déclencheurs `voitures`
--
DELIMITER $$
CREATE TRIGGER `Ajout_voitures_has_marques` AFTER INSERT ON `voitures` FOR EACH ROW INSERT INTO `voitures`(`idVoitures`, `modele`, `img_voiture`, `nbrDePortes`, `nbrDePlaces`, `categorie`, `transmission`, `kilometrage`, `annee`, `prix_achat`, `tarif_idTarif`, `reservations_libre`, `marques_idMarque`, `concessionnaires_idConcessionnaire`, `agence_idAgence`, `commentaires_idCom`, `locations_idLocation`, `saison_idSaison`) VALUES (20,'marbella',NULL,3,4,'cacahuette',manuelle,25.000,1988,4500,3,1,11,1,1,NULL,3,4)
$$
DELIMITER ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`idAgence`);

--
-- Index pour la table `agence_has_client`
--
ALTER TABLE `agence_has_client`
  ADD PRIMARY KEY (`agence_idAgence`,`client_idClient`),
  ADD KEY `fk_agence_has_client_client1_idx` (`client_idClient`),
  ADD KEY `fk_agence_has_client_agence1_idx` (`agence_idAgence`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`idCom`);

--
-- Index pour la table `concessionnaire`
--
ALTER TABLE `concessionnaire`
  ADD PRIMARY KEY (`idConcessionnaire`);

--
-- Index pour la table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`idLouer`),
  ADD KEY `fk_louer_achat1_idx` (`voitures_idVoitures`),
  ADD KEY `fk_louer_client1_idx` (`client_idClient`),
  ADD KEY `fk_louer_saison1_idx` (`saison_idSaison`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`);

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`idSaison`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`idTarif`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`idVoitures`),
  ADD KEY `fk_achat_concessionnaire1_idx` (`concessionnaires_idConcessionnaire`),
  ADD KEY `fk_voitures_agence1_idx` (`agence_idAgence`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `idAgence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `agence_has_client`
--
ALTER TABLE `agence_has_client`
  MODIFY `agence_idAgence` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `concessionnaire`
--
ALTER TABLE `concessionnaire`
  MODIFY `idConcessionnaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `locations`
--
ALTER TABLE `locations`
  MODIFY `idLouer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `saison`
--
ALTER TABLE `saison`
  MODIFY `idSaison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `idTarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `idVoitures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agence_has_client`
--
ALTER TABLE `agence_has_client`
  ADD CONSTRAINT `fk_agence_has_client_agence1` FOREIGN KEY (`agence_idAgence`) REFERENCES `agence` (`idAgence`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agence_has_client_client1` FOREIGN KEY (`client_idClient`) REFERENCES `client` (`idClient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_louer_achat1` FOREIGN KEY (`voitures_idVoitures`) REFERENCES `voitures` (`idVoitures`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_louer_client1` FOREIGN KEY (`client_idClient`) REFERENCES `client` (`idClient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_louer_saison1` FOREIGN KEY (`saison_idSaison`) REFERENCES `saison` (`idSaison`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD CONSTRAINT `fk_achat_concessionnaire1` FOREIGN KEY (`concessionnaires_idConcessionnaire`) REFERENCES `concessionnaire` (`idConcessionnaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voitures_agence1` FOREIGN KEY (`agence_idAgence`) REFERENCES `agence` (`idAgence`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
