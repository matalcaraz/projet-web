-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Février 2017 à 20:03
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `masterclass`
--

-- --------------------------------------------------------

--
-- Structure de la table `identites`
--

CREATE TABLE `identites` (
  `id` int(255) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `instrument` varchar(255) NOT NULL,
  `navette` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `niveaux` varchar(255) NOT NULL,
  `Validation` tinyint(1) NOT NULL,
  `superutilisateur` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `identites`
--

INSERT INTO `identites` (`id`, `annee`, `nom`, `prenom`, `mail`, `instrument`, `navette`, `password`, `niveaux`, `Validation`, `superutilisateur`) VALUES
(3, '23/11/1983', 'Giauffret', 'Vincent', 'giauffret@orange.fr', 'Batterie', 'Non', '123', 'Confirmé', 0, 'Non'),
(4, '06/07/1998', 'Belotti', 'Thomas', 'belotti@sfr.fr', 'Piano', 'Non', '123456', 'Débutant', 0, 'Non'),
(2, '10/09/1968', 'Admin', 'Admin', 'admin@sfr.fr', 'Saxophone', 'Non', 'root', 'Débutant', 0, 'Oui'),
(1, '15/02/1996', 'Alcaraz', 'Mathieu', 'mathieu@sfr.fr', 'Trompette', 'Oui', '123456', 'Intermédiaire', 0, 'Non');

-- --------------------------------------------------------

--
-- Structure de la table `morceaux`
--

CREATE TABLE `morceaux` (
  `ID` int(255) NOT NULL,
  `batterie` varchar(255) NOT NULL,
  `trompette` varchar(255) NOT NULL,
  `guitare` varchar(255) NOT NULL,
  `saxophone` varchar(255) NOT NULL,
  `contrebasse` varchar(255) NOT NULL,
  `piano` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `jour` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `morceaux`
--

INSERT INTO `morceaux` (`ID`, `batterie`, `trompette`, `guitare`, `saxophone`, `contrebasse`, `piano`, `artiste`, `titre`, `jour`) VALUES
(6, 'Giauffret Vincent', 'Null', 'Null', 'Null', 'Null', 'Null', 'Louis Armstrong & Ella Fitzgerald', 'Summertime', 'Samedi'),
(3, 'Null', 'Null', 'Null', 'Null', 'Null', 'Belotti Thomas', 'Nat King Cole', 'Unforgettable', 'Mercredi'),
(5, 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Louis Armstrong & Ella Fitzgerald', 'Dream a Little Dream of Me', 'Vendredi'),
(4, 'Giauffret Vincent', 'Null', 'Null', 'Null', 'Null', 'Null', 'Louis Prima', 'Just a Gigolo', 'Jeudi'),
(1, 'Null', 'Null', 'Null', 'Null', 'Null', 'Belotti Thomas', 'Ray Charles', 'Hit the Road Jack', 'Lundi'),
(2, 'Giauffret Vincent', 'Null', 'Null', 'Null', 'Null', 'Null', 'Frank Sinatra', 'I ve Got You Under My Skin', 'Mardi');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `annee` varchar(200) NOT NULL,
  `chemin` varchar(500) NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`annee`, `chemin`, `ID`) VALUES
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 1),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 2),
('2013', 'upload/2013/Jazz-615.jpg', 3),
('2013', 'upload/2013/jazz-concert-artists.jpg', 4),
('2013', 'upload/2013/maxresdefault.jpg', 5),
('2013', 'upload/2013/telechargement.jpg', 6),
('2013', 'upload/2013/village-vanguard.jpg', 7),
('2014', 'upload/2014/201210110447.jpg', 8),
('2014', 'upload/2014/6139057_f9ae5c92-8005-11e6-8362-2fa3e310993c-1_1000x625.jpg', 9),
('2014', 'upload/2014/concert-jazz-a-toulon.jpg', 10),
('2014', 'upload/2014/dsc5422_1.jpg', 11),
('2014', 'upload/2014/German-Jazz-Concert-by-Jons-Schoen-Quartett-at-Peerus-Cafe-4-May-2011-6.jpg', 12),
('2014', 'upload/2014/hancock-lang-international-jazz-day-sunset-concert-02.jpg', 13),
('2014', 'upload/2014/maxresdefault.jpg', 14),
('2014', 'upload/2014/UZYHcjn.jpg', 15),
('2015', 'upload/2015/403.jpg', 17),
('2015', 'upload/2015/affiche-de-concert-de-jazz-45070697.jpg', 18),
('2015', 'upload/2015/CONCERT-NOUVEL-AN.jpg', 20),
('2015', 'upload/2015/HD_MB3_trio_paysage_copyright_Eric-Soudan-1024x684.jpg', 21),
('2015', 'upload/2015/IANNETTI Piero_25Sextet Messengers 3_3029_fr.jpg', 22),
('2015', 'upload/2015/International-Jazz-Day.jpg', 23),
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 24),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 25),
('2013', 'upload/2013/Jazz-615.jpg', 26),
('2013', 'upload/2013/jazz-concert-artists.jpg', 27),
('2013', 'upload/2013/maxresdefault.jpg', 28),
('2013', 'upload/2013/telechargement.jpg', 29),
('2013', 'upload/2013/village-vanguard.jpg', 30),
('2016', 'upload/2016/black_history_jazz_concert_post.jpg', 34),
('2016', 'upload/2016/CONCERT-NOUVEL-AN.jpg', 35),
('2016', 'upload/2016/HD_MB3_trio_paysage_copyright_Eric-Soudan-1024x684.jpg', 36),
('2016', 'upload/2016/IANNETTI Piero_25Sextet Messengers 3_3029_fr.jpg', 37),
('2016', 'upload/2016/International-Jazz-Day.jpg', 38),
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 39),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 40),
('2013', 'upload/2013/Jazz-615.jpg', 41),
('2013', 'upload/2013/jazz-concert-artists.jpg', 42),
('2013', 'upload/2013/maxresdefault.jpg', 43),
('2013', 'upload/2013/telechargement.jpg', 44),
('2013', 'upload/2013/village-vanguard.jpg', 45),
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 55),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 56),
('2013', 'upload/2013/Jazz-615.jpg', 57),
('2013', 'upload/2013/jazz-concert-artists.jpg', 58),
('2013', 'upload/2013/maxresdefault.jpg', 59),
('2013', 'upload/2013/telechargement.jpg', 60),
('2013', 'upload/2013/village-vanguard.jpg', 61),
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 62),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 63),
('2013', 'upload/2013/Jazz-615.jpg', 64),
('2013', 'upload/2013/jazz-concert-artists.jpg', 65),
('2013', 'upload/2013/maxresdefault.jpg', 66),
('2013', 'upload/2013/telechargement.jpg', 67),
('2013', 'upload/2013/village-vanguard.jpg', 68),
('2013', 'upload/2013/concert-jazz-bar-restaurant-caravelle.jpg', 69),
('2013', 'upload/2013/imperial-quartet-jazz.jpg', 70),
('2013', 'upload/2013/Jazz-615.jpg', 71),
('2013', 'upload/2013/jazz-concert-artists.jpg', 72),
('2013', 'upload/2013/maxresdefault.jpg', 73),
('2013', 'upload/2013/telechargement.jpg', 74),
('2013', 'upload/2013/village-vanguard.jpg', 75),
('2014', 'upload/2014/201210110447.jpg', 76),
('2014', 'upload/2014/6139057_f9ae5c92-8005-11e6-8362-2fa3e310993c-1_1000x625.jpg', 77),
('2014', 'upload/2014/concert-jazz-a-toulon.jpg', 78),
('2014', 'upload/2014/dsc5422_1.jpg', 79),
('2014', 'upload/2014/German-Jazz-Concert-by-Jons-Schoen-Quartett-at-Peerus-Cafe-4-May-2011-6.jpg', 80),
('2014', 'upload/2014/hancock-lang-international-jazz-day-sunset-concert-02.jpg', 81),
('2014', 'upload/2014/maxresdefault.jpg', 82),
('2014', 'upload/2014/UZYHcjn.jpg', 83),
('2014', 'upload/2014/201210110447.jpg', 84),
('2014', 'upload/2014/6139057_f9ae5c92-8005-11e6-8362-2fa3e310993c-1_1000x625.jpg', 85),
('2014', 'upload/2014/concert-jazz-a-toulon.jpg', 86),
('2014', 'upload/2014/dsc5422_1.jpg', 87),
('2014', 'upload/2014/German-Jazz-Concert-by-Jons-Schoen-Quartett-at-Peerus-Cafe-4-May-2011-6.jpg', 88),
('2014', 'upload/2014/hancock-lang-international-jazz-day-sunset-concert-02.jpg', 89),
('2014', 'upload/2014/maxresdefault.jpg', 90),
('2014', 'upload/2014/UZYHcjn.jpg', 91),
('2012', 'upload/2012/maxresdefault.jpg', 101),
('2012', 'upload/2012/telechargement.jpg', 102),
('2012', 'upload/2012/UZYHcjn.jpg', 103),
('2012', 'upload/2012/village-vanguard.jpg', 104);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `identites`
--
ALTER TABLE `identites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `morceaux`
--
ALTER TABLE `morceaux`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `identites`
--
ALTER TABLE `identites`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `morceaux`
--
ALTER TABLE `morceaux`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
