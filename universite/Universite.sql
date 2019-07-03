if (! is_null($options) && count((array)$options) > 0) {{-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juillet 2019 à 08:39
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `Batiment`
--

CREATE TABLE `Batiment` (
  `NomBat` varchar(255) NOT NULL,
  `Id_batiment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Batiment`
--

INSERT INTO `Batiment` (`NomBat`, `Id_batiment`) VALUES
('Pavillion A', 1),
('Pavillion B', 2),
('Pavillion C', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Boursiers`
--

CREATE TABLE `Boursiers` (
  `Id_Etudiant` int(11) NOT NULL,
  `Id_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Boursiers`
--

INSERT INTO `Boursiers` (`Id_Etudiant`, `Id_Type`) VALUES
(7, 2),
(50, 2),
(51, 1),
(52, 1),
(66, 1),
(67, 1),
(71, 2),
(77, 1),
(92, 1),
(93, 2),
(100, 1),
(105, 1),
(106, 1),
(108, 2),
(114, 2),
(128, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Chambre`
--

CREATE TABLE `Chambre` (
  `Id_batiment` int(11) NOT NULL,
  `NChambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Chambre`
--

INSERT INTO `Chambre` (`Id_batiment`, `NChambre`) VALUES
(1, 10),
(2, 106);

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `Id_Etudiant` int(11) NOT NULL,
  `Matricule` varchar(100) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Etudiant`
--

INSERT INTO `Etudiant` (`Id_Etudiant`, `Matricule`, `Nom`, `Prenom`, `Tel`, `Email`, `Date_naissance`) VALUES
(7, '9xcvb', 'ngom', 'Abdoulaye', 9520, 'nsafi@gmail.com', '0065-05-08'),
(43, '54', 'ngom', 'Abdoulaye', 946, 'mkh@yvhbj', '5488-04-05'),
(44, '79UNJH', 'Faye', 'Maman', 777941094, 'mamzy@yahoo.fr', '2007-05-01'),
(50, '12M', 'fall', 'Mariama', 77655923, 'nd@yahoo.fr', '1999-04-04'),
(51, '12M', 'fall', 'Mariama', 77655923, 'nd@yahoo.fr', '1999-04-04'),
(52, 'QHjj656', 'ndir', 'Betty', 659, 'jhg@yahoo.fr', '0019-12-27'),
(64, '54', 'ndour', 'Abdoulaye', 54961, 'ngom9118@gmail.com', '0661-12-04'),
(66, '54', 'ndour', 'Abdoulaye', 54961, 'ngom9118@gmail.com', '0661-12-04'),
(67, 'DQN15', 'Ngom', 'Sokhna', 95, 'nd@yahoo.fr', '1999-09-04'),
(71, '54', 'BMW', 'by', 8945612, 'mkh@yvhbj35', '2019-06-22'),
(77, 'oklk', 'tfgyhj', 'dfghj', 8952, 'nsafi@gmail.com', '9585-08-09'),
(79, 'oklk', 'tfgyhj', 'dfghj', 8952, 'nsafi@gmail.com', '9585-08-09'),
(80, 'oklk', 'tfgyhj', 'dfghj', 8952, 'nsafi@gmail.com', '9585-08-09'),
(83, '15', 'ngom', 'saliou', 6295, 'nd@yahoo.fr', '2006-09-16'),
(86, 'NG52', 'Dia', 'Nabou', 776296626, 'nd@yahoo.fr', '1997-01-08'),
(87, 'NG52', 'Dia', 'Nabou', 776296626, 'nd@yahoo.fr', '1997-01-08'),
(88, '136YH', 'Diouf', 'Issa', 772915647, 'dioufis@gmail.com', '1990-04-02'),
(89, 'nkl,lk', 'bih', 'tfyubjlnk', 8465132, 'tgyu@drtf.t', '2855-05-08'),
(90, 'nkl,lk', 'bih', 'tfyubjlnk', 8465132, 'tgyu@drtf.t', '2855-05-08'),
(91, 'nkl,lk', 'bih', 'tfyubjlnk', 8465132, 'tgyu@drtf.t', '2855-05-08'),
(92, 'nk', 'moi', 'gjhkl', 45615, 'jhbjk@', '2019-05-30'),
(93, 'okok', 'moi', 'gjhkl', 45615, 'jhbjk@', '2019-05-30'),
(94, '7510', 'Ngom', 'Abdoulaye', 776418887, 'ngom9118@gmail.com', '1992-04-04'),
(95, '64347', 'Ngom', 'Abdoulaye', 776418887, 'ngom9118@gmail.com', '1992-04-04'),
(96, '51109', 'Ngom', 'Abdoulaye', 776418887, 'ngom9118@gmail.com', '1992-04-04'),
(97, '64743', 'Ngom', 'Sokhna ', 776542521, 'sokhna10@gmail.com', '2016-04-02'),
(98, '38907', 'Ngom', 'Sokhna ', 776542521, 'sokhna10@gmail.com', '2016-04-02'),
(99, '5497', 'Ngom', 'Abdoulaye', 781191843, 'mayajolie95@gmail.com', '1995-01-28'),
(100, '32650', 'ngom', 'Abdoulaye', 1894166, 'nsngom@gmail.com', '0020-12-06'),
(101, '5576', 'ngom', 'Abdoulaye', 1894166, 'nsngom@gmail.com', '0020-12-06'),
(102, '5920', 'ngom', 'Mariama', 1894166, 'nsngom@gmail.com', '0020-12-06'),
(103, '18251', 'ngom', 'Mariama', 1894166, 'nsngom@gmail.com', '0020-12-06'),
(104, '56444', 'ndour', 'Abdoulaye', 649, 'nsafi@gmail.com', '9494-04-06'),
(105, '63533', 'ghjk', 'ghj', 84, 'ghjn@gmk.com', '1494-10-01'),
(106, '55764', 'ghjk', 'ghj', 84, 'ghjn@gmk.com', '1494-10-01'),
(107, '17612', 'dfgh', 'cv', 9521, 'knkji@ftfyh.vo', '0004-12-02'),
(108, '2598', 'ertyu', 'dfghj', 2949, 'huhu@wdc.com', '0019-04-05'),
(109, '31057', 'ertyu', 'dfghj', 2949, 'huhu@wdc.com', '0019-04-05'),
(110, '12219', 'ertyu', 'dfghj', 2949, 'huhu@wdc.com', '0019-04-05'),
(111, '50211', 'ertyu', 'dfghj', 2949, 'huhu@wdc.com', '0019-04-05'),
(112, '59018', 'fghjk', 'fghjk', 9652, 'dfg@dfghj.fg', '9959-05-19'),
(113, '52237', 'dfghj', 'dfghj', 952, 'cgvhbj@fghj.com', '5416-06-13'),
(114, '12723', 'dfghj', 'dfghj', 952, 'cgvhbj@fghj.com', '5416-06-13'),
(115, '50866', 'sall', 'jin', 9499, 'ngom9118@gmail.com', '4255-06-05'),
(116, '30186', 'sall', 'jin', 9499, 'ngom9118@gmail.com', '4255-06-05'),
(117, '24526', 'dsd', 'dzd', 494, 'mkh@yvhbj', '2656-12-06'),
(118, '13208', 'dsd', 'dzd', 494, 'mkh@yvhbj', '2656-12-06'),
(119, '11788', 'gr', 'dz', 116, 'nd@yahoo.fr', '0654-06-16'),
(120, '41315', 'fef', 'efff', 2666, 'mkh@yvhbj', '0062-02-06'),
(121, '64091', 'fef', 'efff', 2666, 'mkh@yvhbj', '0062-02-06'),
(122, '28556', 'fef', 'efff', 2666, 'mkh@yvhbj', '0062-02-06'),
(123, '13971', 'ad', 'czs', 566666, 'nd@yahoo.fr', '0626-06-22'),
(124, '31693', 'fall', 'sokhna', 776523214, 'nd@live.fr', '2009-01-02'),
(125, '6005', 'ndour', 'Mouhamed', 770283518, 'moha@gmail.com', '2017-01-02'),
(126, '42337', 'Ndour', 'Rokhaya', 772586545, 'khaya@gmail.com', '2016-04-02'),
(127, '22397', 'Diongue', 'Diarra', 776542554, 'diond@yahoo.fr', '1987-08-03'),
(128, '26384', 'ngom', 'Abdoulaye', 6494, 'nsafi@gmail.com', '1252-06-26');

-- --------------------------------------------------------

--
-- Structure de la table `Loger`
--

CREATE TABLE `Loger` (
  `Id_Etudiant` int(11) NOT NULL,
  `NChambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Loger`
--

INSERT INTO `Loger` (`Id_Etudiant`, `NChambre`) VALUES
(7, 10),
(114, 106);

-- --------------------------------------------------------

--
-- Structure de la table `Non_boursier`
--

CREATE TABLE `Non_boursier` (
  `Id_Etudiant` int(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Non_boursier`
--

INSERT INTO `Non_boursier` (`Id_Etudiant`, `Adresse`) VALUES
(44, 'Diourbel'),
(52, 'thies'),
(64, 'Ndar'),
(83, 'thies'),
(86, 'Thies'),
(87, 'Thies'),
(88, 'Kaolack'),
(119, 'Ndar'),
(124, 'walo'),
(125, 'Gossass'),
(126, 'Fatick'),
(127, 'Gossass');

-- --------------------------------------------------------

--
-- Structure de la table `TypeB`
--

CREATE TABLE `TypeB` (
  `Id_Type` int(11) NOT NULL,
  `Libelle` varchar(255) NOT NULL,
  `Montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TypeB`
--

INSERT INTO `TypeB` (`Id_Type`, `Libelle`, `Montant`) VALUES
(1, 'Demi', 20000),
(2, 'Entier', 40000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Batiment`
--
ALTER TABLE `Batiment`
  ADD PRIMARY KEY (`Id_batiment`);

--
-- Index pour la table `Boursiers`
--
ALTER TABLE `Boursiers`
  ADD PRIMARY KEY (`Id_Etudiant`,`Id_Type`),
  ADD KEY `Id_Etudiant` (`Id_Etudiant`),
  ADD KEY `Boursiers_ibfk_2` (`Id_Type`);

--
-- Index pour la table `Chambre`
--
ALTER TABLE `Chambre`
  ADD PRIMARY KEY (`NChambre`),
  ADD KEY `Id_batiment` (`Id_batiment`);

--
-- Index pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`Id_Etudiant`);

--
-- Index pour la table `Loger`
--
ALTER TABLE `Loger`
  ADD PRIMARY KEY (`Id_Etudiant`),
  ADD UNIQUE KEY `NChambre` (`NChambre`),
  ADD UNIQUE KEY `NChambre_2` (`NChambre`);

--
-- Index pour la table `Non_boursier`
--
ALTER TABLE `Non_boursier`
  ADD PRIMARY KEY (`Id_Etudiant`),
  ADD KEY `Id_Etudiant` (`Id_Etudiant`);

--
-- Index pour la table `TypeB`
--
ALTER TABLE `TypeB`
  ADD PRIMARY KEY (`Id_Type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Batiment`
--
ALTER TABLE `Batiment`
  MODIFY `Id_batiment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Chambre`
--
ALTER TABLE `Chambre`
  MODIFY `NChambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  MODIFY `Id_Etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT pour la table `TypeB`
--
ALTER TABLE `TypeB`
  MODIFY `Id_Type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Boursiers`
--
ALTER TABLE `Boursiers`
  ADD CONSTRAINT `Boursiers_ibfk_1` FOREIGN KEY (`Id_Etudiant`) REFERENCES `Etudiant` (`Id_Etudiant`),
  ADD CONSTRAINT `Boursiers_ibfk_2` FOREIGN KEY (`Id_Type`) REFERENCES `TypeB` (`Id_Type`);

--
-- Contraintes pour la table `Chambre`
--
ALTER TABLE `Chambre`
  ADD CONSTRAINT `Chambre_ibfk_1` FOREIGN KEY (`Id_batiment`) REFERENCES `Batiment` (`Id_batiment`);

--
-- Contraintes pour la table `Loger`
--
ALTER TABLE `Loger`
  ADD CONSTRAINT `Loger_ibfk_1` FOREIGN KEY (`Id_Etudiant`) REFERENCES `Etudiant` (`Id_Etudiant`),
  ADD CONSTRAINT `Loger_ibfk_2` FOREIGN KEY (`NChambre`) REFERENCES `Chambre` (`NChambre`);

--
-- Contraintes pour la table `Non_boursier`
--
ALTER TABLE `Non_boursier`
  ADD CONSTRAINT `Non_boursier_ibfk_1` FOREIGN KEY (`Id_Etudiant`) REFERENCES `Etudiant` (`Id_Etudiant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
