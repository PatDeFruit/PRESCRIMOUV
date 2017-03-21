-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Février 2017 à 22:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `prescrimouv`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE IF NOT EXISTS `activites` (
  `id_activite` int(10) NOT NULL AUTO_INCREMENT,
  `activite` varchar(200) NOT NULL,
  `type_activite` varchar(200) NOT NULL,
  PRIMARY KEY (`id_activite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`id_activite`, `activite`, `type_activite`) VALUES
(1, 'Running', 'Cardio'),
(2, 'Volley-Ball', 'Collectif');

-- --------------------------------------------------------

--
-- Structure de la table `a_participe_a`
--

CREATE TABLE IF NOT EXISTS `a_participe_a` (
  `id_creneau` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  KEY `id_creneau` (`id_creneau`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `a_pour_motivation`
--

CREATE TABLE IF NOT EXISTS `a_pour_motivation` (
  `id_entretien` int(11) NOT NULL,
  `id_motivation` int(11) NOT NULL,
  KEY `id_entretien` (`id_entretien`),
  KEY `id_motivation` (`id_motivation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `a_pour_motivation`
--

INSERT INTO `a_pour_motivation` (`id_entretien`, `id_motivation`) VALUES
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `a_pour_objectif`
--

CREATE TABLE IF NOT EXISTS `a_pour_objectif` (
  `id_objectif` int(11) NOT NULL,
  `id_entretien` int(11) NOT NULL,
  KEY `id_entretien` (`id_entretien`),
  KEY `id_objectif` (`id_objectif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `a_pour_objectif`
--

INSERT INTO `a_pour_objectif` (`id_objectif`, `id_entretien`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `a_pour_obstacle`
--

CREATE TABLE IF NOT EXISTS `a_pour_obstacle` (
  `id_obstacle` int(11) NOT NULL,
  `id_entretien` int(11) NOT NULL,
  KEY `id_entretien` (`id_entretien`),
  KEY `id_obstacle` (`id_obstacle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `a_pour_obstacle`
--

INSERT INTO `a_pour_obstacle` (`id_obstacle`, `id_entretien`) VALUES
(6, 3),
(4, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `a_pour_result`
--

CREATE TABLE IF NOT EXISTS `a_pour_result` (
  `id_test_equilibre` int(11) NOT NULL,
  `id_entretien` int(11) NOT NULL,
  KEY `id_entretien` (`id_entretien`),
  KEY `id_test_equilibre` (`id_test_equilibre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `a_pour_result`
--

INSERT INTO `a_pour_result` (`id_test_equilibre`, `id_entretien`) VALUES
(2, 3),
(1, 3),
(3, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `centres`
--

CREATE TABLE IF NOT EXISTS `centres` (
  `id_centre` int(10) NOT NULL AUTO_INCREMENT,
  `nom_centre` varchar(200) NOT NULL,
  `adresse_centre` varchar(500) NOT NULL,
  `CP_centre` int(5) NOT NULL,
  `ville_centre` varchar(200) NOT NULL,
  `tel_centre` int(10) NOT NULL,
  `email_centre` varchar(200) NOT NULL,
  `type_centre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_centre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `centres`
--

INSERT INTO `centres` (`id_centre`, `nom_centre`, `adresse_centre`, `CP_centre`, `ville_centre`, `tel_centre`, `email_centre`, `type_centre`) VALUES
(1, 'Gymnase Beaulien', '12 rue bance', 86000, 'Poitiers', 563254612, 'gymnase@beaulieu.com', 'Gymnase'),
(2, 'Salle NEONESS', '75 boulevard Saint Martin', 75011, 'Paris', 546320592, 'test@test.com', 'Salle de sport');

-- --------------------------------------------------------

--
-- Structure de la table `coordinateur`
--

CREATE TABLE IF NOT EXISTS `coordinateur` (
  `id_coordinateur` int(10) NOT NULL AUTO_INCREMENT,
  `nom_coordinateur` varchar(200) NOT NULL,
  `prenom_coordinateur` varchar(200) NOT NULL,
  `email_coordinateur` varchar(200) NOT NULL,
  `tel_coordinateur` int(10) NOT NULL,
  `pswd` varchar(15) NOT NULL,
  PRIMARY KEY (`id_coordinateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `coordinateur`
--

INSERT INTO `coordinateur` (`id_coordinateur`, `nom_coordinateur`, `prenom_coordinateur`, `email_coordinateur`, `tel_coordinateur`, `pswd`) VALUES
(1, 'Admin', 'Admin', 'mgx.billon@gmail.com', 603760254, '123');

-- --------------------------------------------------------

--
-- Structure de la table `creneaux`
--

CREATE TABLE IF NOT EXISTS `creneaux` (
  `id_creneau` int(10) NOT NULL AUTO_INCREMENT,
  `jour_creneau` varchar(10) NOT NULL,
  `heure_creneau_debut` time NOT NULL,
  `heure_creneau_fin` time NOT NULL,
  PRIMARY KEY (`id_creneau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `creneaux`
--

INSERT INTO `creneaux` (`id_creneau`, `jour_creneau`, `heure_creneau_debut`, `heure_creneau_fin`) VALUES
(1, 'Lundi', '17:00:00', '18:00:00'),
(2, 'Jeudi', '11:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `doit_pratiquer`
--

CREATE TABLE IF NOT EXISTS `doit_pratiquer` (
  `id_patient` int(11) NOT NULL AUTO_INCREMENT,
  `id_activite` int(11) NOT NULL,
  `frequence` int(10) NOT NULL,
  `duree` int(10) NOT NULL,
  `intensite` varchar(200) DEFAULT NULL,
  `nb_seances_prevues` int(10) NOT NULL,
  `nb_seances_effect` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `id_activite` (`id_activite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `doit_pratiquer`
--

INSERT INTO `doit_pratiquer` (`id_patient`, `id_activite`, `frequence`, `duree`, `intensite`, `nb_seances_prevues`, `nb_seances_effect`) VALUES
(3, 1, 3, 60, 'modérée', 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entretiens`
--

CREATE TABLE IF NOT EXISTS `entretiens` (
  `id_entretien` int(10) NOT NULL AUTO_INCREMENT,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `FC_repos` int(11) DEFAULT NULL,
  `SPO2_repos` float DEFAULT NULL,
  `m_grasse` float DEFAULT NULL,
  `m_hydrique` float DEFAULT NULL,
  `m_muscu` float DEFAULT NULL,
  `RG_CS` int(11) NOT NULL,
  `RG_APL1` int(11) NOT NULL,
  `RG_APL2` int(11) NOT NULL,
  `RG_APL3` int(11) NOT NULL,
  `RG_APL4` int(11) NOT NULL,
  `RG_APQ1` int(11) NOT NULL,
  `RG_APQ2` int(11) NOT NULL,
  `RG_APQ3` int(11) NOT NULL,
  `RG_APQ4` int(11) NOT NULL,
  `scoreCS` int(11) NOT NULL,
  `scoreAPL` int(11) NOT NULL,
  `scoreAPQ` int(11) NOT NULL,
  `score_RG` int(11) DEFAULT NULL,
  `IMC` float DEFAULT NULL,
  `AP_anterieure` varchar(1500) DEFAULT NULL,
  `niveau_AP` int(11) DEFAULT NULL,
  `activite_actuelle` varchar(2500) DEFAULT NULL,
  `niveau_AP_souhaite` int(11) DEFAULT NULL,
  `niveau_CS` int(11) DEFAULT NULL,
  `id_whoqol` int(11) DEFAULT NULL,
  `id_test_marche` int(11) DEFAULT NULL,
  `id_test_assis` int(11) DEFAULT NULL,
  `id_type_entretien` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `date_entretien` date NOT NULL,
  `commentaire` varchar(2500) DEFAULT NULL,
  `solutions_freins` varchar(2500) DEFAULT NULL,
  `ressenti_positif` varchar(2500) DEFAULT NULL,
  `ressenti_negatif` varchar(2500) DEFAULT NULL,
  `AP_envisagee_apres` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id_entretien`),
  KEY `id_patient` (`id_patient`),
  KEY `id_type_entretien` (`id_type_entretien`),
  KEY `id_test_assis` (`id_test_assis`),
  KEY `id_test_marche` (`id_test_marche`),
  KEY `id_whoqol` (`id_whoqol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `entretiens`
--

INSERT INTO `entretiens` (`id_entretien`, `taille`, `poids`, `FC_repos`, `SPO2_repos`, `m_grasse`, `m_hydrique`, `m_muscu`, `RG_CS`, `RG_APL1`, `RG_APL2`, `RG_APL3`, `RG_APL4`, `RG_APQ1`, `RG_APQ2`, `RG_APQ3`, `RG_APQ4`, `scoreCS`, `scoreAPL`, `scoreAPQ`, `score_RG`, `IMC`, `AP_anterieure`, `niveau_AP`, `activite_actuelle`, `niveau_AP_souhaite`, `niveau_CS`, `id_whoqol`, `id_test_marche`, `id_test_assis`, `id_type_entretien`, `id_patient`, `date_entretien`, `commentaire`, `solutions_freins`, `ressenti_positif`, `ressenti_negatif`, `AP_envisagee_apres`) VALUES
(3, 163, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24.4646, 'jklk', 6, 'jkhj', 6, 3, 1, 1, 1, 1, 3, '2017-02-12', NULL, '', NULL, NULL, NULL),
(4, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 6, NULL, NULL, 6, NULL, NULL, NULL, 2, 3, '2017-02-12', 'rtuj', 'thyuj', 'thyuj', 'tyhuj', 'tyujh');

-- --------------------------------------------------------

--
-- Structure de la table `est_affilie`
--

CREATE TABLE IF NOT EXISTS `est_affilie` (
  `id_mutuelle` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `num_affiliation` int(10) NOT NULL,
  KEY `id_mutuelle` (`id_mutuelle`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `est_diagnostique`
--

CREATE TABLE IF NOT EXISTS `est_diagnostique` (
  `id_patient` int(11) NOT NULL,
  `id_pathologie` int(11) NOT NULL,
  KEY `id_pathologie` (`id_pathologie`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `est_diagnostique`
--

INSERT INTO `est_diagnostique` (`id_patient`, `id_pathologie`) VALUES
(3, 3),
(3, 7),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `est_encadre_par`
--

CREATE TABLE IF NOT EXISTS `est_encadre_par` (
  `id_creneau` int(11) NOT NULL,
  `id_intervenant` int(11) NOT NULL,
  KEY `id_creneau` (`id_creneau`),
  KEY `id_intervenant` (`id_intervenant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `est_soigne_par`
--

CREATE TABLE IF NOT EXISTS `est_soigne_par` (
  `id_medecin` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `certificat_medical` tinyint(4) DEFAULT NULL,
  `ordonnance` tinyint(4) DEFAULT NULL,
  `date_prescription` date NOT NULL,
  `commentaires_prescription` varchar(15000) DEFAULT NULL,
  `appLocomoteur` varchar(15000) DEFAULT NULL,
  `sysCardio` varchar(2500) DEFAULT NULL,
  `sysRespi` varchar(2500) DEFAULT NULL,
  `autreReco` varchar(2500) DEFAULT NULL,
  KEY `id_medecin` (`id_medecin`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `est_soigne_par`
--

INSERT INTO `est_soigne_par` (`id_medecin`, `id_patient`, `certificat_medical`, `ordonnance`, `date_prescription`, `commentaires_prescription`, `appLocomoteur`, `sysCardio`, `sysRespi`, `autreReco`) VALUES
(2, 3, 0, 1, '2016-10-04', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `intervenants`
--

CREATE TABLE IF NOT EXISTS `intervenants` (
  `id_intervenant` int(10) NOT NULL AUTO_INCREMENT,
  `nom_intervenant` varchar(200) NOT NULL,
  `prenom_intervenant` varchar(200) NOT NULL,
  `email_intervenant` varchar(200) NOT NULL,
  `tel_intervenant` int(10) NOT NULL,
  PRIMARY KEY (`id_intervenant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

CREATE TABLE IF NOT EXISTS `medecins` (
  `id_medecin` int(10) NOT NULL AUTO_INCREMENT,
  `nom_medecin` varchar(200) NOT NULL,
  `prenom_medecin` varchar(200) NOT NULL,
  `num_adeli` int(20) NOT NULL,
  `adresse_medecin` varchar(500) DEFAULT NULL,
  `CP_medecin` int(5) DEFAULT NULL,
  `ville_medecin` varchar(200) DEFAULT NULL,
  `email_medecin` varchar(200) NOT NULL,
  `tel_medecin` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_medecin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `medecins`
--

INSERT INTO `medecins` (`id_medecin`, `nom_medecin`, `prenom_medecin`, `num_adeli`, `adresse_medecin`, `CP_medecin`, `ville_medecin`, `email_medecin`, `tel_medecin`) VALUES
(1, 'CHAMPENOIS', 'Emmanuel', 23256563, NULL, NULL, NULL, 'champenois@gmail.com', NULL),
(2, 'LAVILLENIE', 'Magalie', 23165431, 'dfgh', 86026, 'sdfgh', 'dfgh', 635269838);

-- --------------------------------------------------------

--
-- Structure de la table `motivations`
--

CREATE TABLE IF NOT EXISTS `motivations` (
  `id_motivation` int(11) NOT NULL AUTO_INCREMENT,
  `motivation` varchar(200) NOT NULL,
  PRIMARY KEY (`id_motivation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `motivations`
--

INSERT INTO `motivations` (`id_motivation`, `motivation`) VALUES
(1, 'test'),
(2, 'test2');

-- --------------------------------------------------------

--
-- Structure de la table `mutuelles`
--

CREATE TABLE IF NOT EXISTS `mutuelles` (
  `id_mutuelle` int(10) NOT NULL AUTO_INCREMENT,
  `nom_mutuelle` varchar(100) NOT NULL,
  `adresse_mutuelle` varchar(500) DEFAULT NULL,
  `CP_mutuelle` int(5) DEFAULT NULL,
  `ville_mutuelle` varchar(100) DEFAULT NULL,
  `email_mutuelle` varchar(100) NOT NULL,
  `tel_mutuelle` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_mutuelle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `objectifs`
--

CREATE TABLE IF NOT EXISTS `objectifs` (
  `id_objectif` int(11) NOT NULL AUTO_INCREMENT,
  `objectif` varchar(200) NOT NULL,
  PRIMARY KEY (`id_objectif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `objectifs`
--

INSERT INTO `objectifs` (`id_objectif`, `objectif`) VALUES
(1, 'Aucun'),
(2, 'Mieux gérer l''effort'),
(3, 'Reprendre une ou des AP suite au programme'),
(4, 'Maintenir des AP mises en place lors du programme'),
(5, 'Encore améliorer mes capacités'),
(6, 'Améliorer ma santé'),
(7, 'Prendre moins de médicaments'),
(8, 'Reprendre confiance en mes capacités'),
(9, 'Pouvoir gérer mon poids'),
(10, 'Retrouver du souffle'),
(11, 'Trouver quelque chose pour continuer'),
(12, 'Améliorer ma qualité de vie'),
(13, 'Pouvoir intégrer de l''AP le week-end'),
(14, 'Me dérouiller'),
(15, 'Me donner envie de faire autre chose'),
(16, 'Faire des AP plus adaptées à ma santé'),
(17, 'Travailler l''équilibre'),
(18, 'Retrouver des capacités'),
(19, 'Accompagner l''AP d''autre chose pour mieux gérer mon pouds'),
(20, 'Ne pas être en difficulté pour jouer avec mes enfants'),
(21, 'Retrouver de la motivation pour l''AP'),
(22, 'Penser à autre chose'),
(23, 'Me sentir mieux'),
(24, 'Rencontrer d''autres personnes'),
(25, 'Gestion du stress'),
(26, 'Autonomie au quotidien');

-- --------------------------------------------------------

--
-- Structure de la table `obstacles`
--

CREATE TABLE IF NOT EXISTS `obstacles` (
  `id_obstacle` int(11) NOT NULL AUTO_INCREMENT,
  `obstacle` varchar(200) NOT NULL,
  PRIMARY KEY (`id_obstacle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `obstacles`
--

INSERT INTO `obstacles` (`id_obstacle`, `obstacle`) VALUES
(1, 'Aucun'),
(2, 'Manque de souffle'),
(3, 'Frein financier'),
(4, 'Confiance dans les capacités'),
(5, 'Motivation'),
(6, 'Devoir pratiquer seule/seul'),
(7, 'Fatigue'),
(8, 'Douleurs physiques'),
(9, 'Peur de chuter'),
(10, 'Capacités trop faibles'),
(11, 'Problèmes de santé'),
(12, 'Contre-indication médicale'),
(13, 'Image corporelle/estime de soi'),
(14, 'Organisation/Temps'),
(15, 'Je fais assez mais pas ce qu''il faut'),
(16, 'La météo est trop variable'),
(17, 'Aucun plaisir dans l''AP'),
(18, 'Pas nécessaire de pratiquer l''AP'),
(19, 'Je pratique suffisamment'),
(20, 'Ne pas être encadré'),
(21, 'Personne dans mon entourage pour m''inciter à l''AP'),
(22, 'Douleurs aux jambes'),
(23, 'Stress, craintes'),
(24, 'Confiance');

-- --------------------------------------------------------

--
-- Structure de la table `pathologies`
--

CREATE TABLE IF NOT EXISTS `pathologies` (
  `id_pathologie` int(10) NOT NULL AUTO_INCREMENT,
  `pathologie` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pathologie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `pathologies`
--

INSERT INTO `pathologies` (`id_pathologie`, `pathologie`) VALUES
(1, 'DT2'),
(2, 'HTA'),
(3, 'Ob'),
(4, 'IR'),
(5, 'ICar'),
(6, 'ICor'),
(7, 'AOMI'),
(8, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id_patient` int(10) NOT NULL AUTO_INCREMENT,
  `nom_patient` varchar(200) NOT NULL,
  `prenom_patient` varchar(200) NOT NULL,
  `num_SS` int(15) NOT NULL,
  `sexe_patient` tinyint(1) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse_patient` varchar(500) NOT NULL,
  `CP_patient` int(5) NOT NULL,
  `ville_patient` varchar(100) NOT NULL,
  `email_patient` varchar(200) NOT NULL,
  `tel_patient` int(10) NOT NULL,
  `nb_enfant` int(2) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `historique_patho` varchar(1500) NOT NULL,
  `situation` smallint(6) NOT NULL,
  `id_coordinateur` int(10) NOT NULL,
  `id_statut` int(10) NOT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `id_coordinateur` (`id_coordinateur`),
  KEY `id_statut` (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id_patient`, `nom_patient`, `prenom_patient`, `num_SS`, `sexe_patient`, `date_naissance`, `adresse_patient`, `CP_patient`, `ville_patient`, `email_patient`, `tel_patient`, `nb_enfant`, `profession`, `historique_patho`, `situation`, `id_coordinateur`, `id_statut`) VALUES
(3, 'BILLON', 'Margaux', 23266452, 1, '1994-06-17', '12 Rue de la Bataille', 86190, 'Quincay', 'm@orange.fr', 603760254, 0, '', 'test', 0, 1, 5),
(5, 'SEGUIN', 'Patricia', 23654566, 1, '2017-02-01', 'jhgfds', 48562, 'hgfd', 'gfd', 635268655, 0, 'jhgfds', 'hgfds', 0, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `se_fait_a`
--

CREATE TABLE IF NOT EXISTS `se_fait_a` (
  `id_activite` int(11) NOT NULL,
  `id_creneau` int(11) NOT NULL,
  KEY `id_activite` (`id_activite`),
  KEY `id_creneau` (`id_creneau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `se_fait_a`
--

INSERT INTO `se_fait_a` (`id_activite`, `id_creneau`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `se_fait_dans`
--

CREATE TABLE IF NOT EXISTS `se_fait_dans` (
  `id_centre` int(11) NOT NULL,
  `id_creneau` int(11) NOT NULL,
  KEY `id_centre` (`id_centre`),
  KEY `id_creneau` (`id_creneau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `se_fait_dans`
--

INSERT INTO `se_fait_dans` (`id_centre`, `id_creneau`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `stats_perso`
--

CREATE TABLE IF NOT EXISTS `stats_perso` (
  `id_stats` int(11) NOT NULL AUTO_INCREMENT,
  `delta_poids` float NOT NULL,
  `delta_taille` float NOT NULL,
  `delta_IMC` float NOT NULL,
  `delta_m_grasse` float NOT NULL,
  `delta_m_hydrique` float NOT NULL,
  `delta_m_muscu` float NOT NULL,
  `delta_FC_repos` int(11) NOT NULL,
  `delta_SPO2_repos` float NOT NULL,
  `delta_RG` int(11) NOT NULL,
  `delta_TDM_distance` float NOT NULL,
  `delta_TDM_theo` float NOT NULL,
  `delta_D_YO` int(11) NOT NULL,
  `delta_D_YF` int(11) NOT NULL,
  `delta_G_YO` int(11) NOT NULL,
  `delta_G_YF` int(11) NOT NULL,
  `delta_assis_repet` int(11) NOT NULL,
  `delta_WHOQOL_qdv` int(11) NOT NULL,
  `delta_WHOQOL_phy` int(11) NOT NULL,
  `delta_WHOQOL_psy` int(11) NOT NULL,
  `delta_WHOQOL_relation` int(11) NOT NULL,
  `delta_WHOQOL_env` int(11) NOT NULL,
  `delta_CS` int(11) NOT NULL,
  `delta_AP` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id_stats`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE IF NOT EXISTS `statuts` (
  `id_statut` int(10) NOT NULL AUTO_INCREMENT,
  `statut` varchar(100) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`id_statut`, `statut`) VALUES
(1, 'Actif - Entretien initial'),
(2, 'Actif - Entretien intermédiaire'),
(3, 'Actif - Entretien final'),
(4, 'En attente'),
(5, 'Archivé');

-- --------------------------------------------------------

--
-- Structure de la table `test_assis`
--

CREATE TABLE IF NOT EXISTS `test_assis` (
  `id_test_assis` int(10) NOT NULL AUTO_INCREMENT,
  `nb_repet` int(11) NOT NULL,
  `FC_fin` int(11) NOT NULL,
  `FC_2min` int(11) NOT NULL,
  PRIMARY KEY (`id_test_assis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `test_assis`
--

INSERT INTO `test_assis` (`id_test_assis`, `nb_repet`, `FC_fin`, `FC_2min`) VALUES
(1, 45, 75, 221);

-- --------------------------------------------------------

--
-- Structure de la table `test_equilibre`
--

CREATE TABLE IF NOT EXISTS `test_equilibre` (
  `id_test_equilibre` int(10) NOT NULL AUTO_INCREMENT,
  `temps` float NOT NULL,
  `pied` tinyint(4) NOT NULL,
  `yeux_ouverts` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_test_equilibre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `test_equilibre`
--

INSERT INTO `test_equilibre` (`id_test_equilibre`, `temps`, `pied`, `yeux_ouverts`) VALUES
(1, 12, 0, 1),
(2, 23, 1, 1),
(3, 30, 0, 0),
(5, 45, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `test_marche`
--

CREATE TABLE IF NOT EXISTS `test_marche` (
  `id_test_marche` int(11) NOT NULL AUTO_INCREMENT,
  `dateTM` date NOT NULL,
  `dist_theo` float NOT NULL,
  `dist_reelle` float NOT NULL,
  `pour_theo` float NOT NULL,
  `aide_marche` tinyint(4) NOT NULL,
  `FC_avant` int(11) NOT NULL,
  `FC_fin` int(11) NOT NULL,
  `FC_1min` int(11) NOT NULL,
  `FC_2min` int(11) NOT NULL,
  `SPO2_avant` float NOT NULL,
  `SPO2_fin` float NOT NULL,
  `SPO2_1min` float NOT NULL,
  `SPO2_2min` float NOT NULL,
  `Borg_avant` float NOT NULL,
  `Borg_fin` float NOT NULL,
  `Borg_1min` float NOT NULL,
  `Borg_2min` float NOT NULL,
  `nb_arrets` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_test_marche`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `test_marche`
--

INSERT INTO `test_marche` (`id_test_marche`, `dateTM`, `dist_theo`, `dist_reelle`, `pour_theo`, `aide_marche`, `FC_avant`, `FC_fin`, `FC_1min`, `FC_2min`, `SPO2_avant`, `SPO2_fin`, `SPO2_1min`, `SPO2_2min`, `Borg_avant`, `Borg_fin`, `Borg_1min`, `Borg_2min`, `nb_arrets`) VALUES
(1, '2017-02-06', 536.032, 15, -521.032, 4, 86, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Structure de la table `type_entretien`
--

CREATE TABLE IF NOT EXISTS `type_entretien` (
  `id_type_entretien` int(10) NOT NULL AUTO_INCREMENT,
  `type_entretien` varchar(200) NOT NULL,
  PRIMARY KEY (`id_type_entretien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_entretien`
--

INSERT INTO `type_entretien` (`id_type_entretien`, `type_entretien`) VALUES
(1, 'Entretien initial'),
(2, 'Entretien intermédiaire'),
(3, 'Entretien final');

-- --------------------------------------------------------

--
-- Structure de la table `whoqol`
--

CREATE TABLE IF NOT EXISTS `whoqol` (
  `id_whoqol` int(10) NOT NULL AUTO_INCREMENT,
  `eval_qualite_vie` int(11) NOT NULL,
  `satisfaction_sante` int(11) NOT NULL,
  `douleur_physique` int(11) NOT NULL,
  `traitement_quotidien` int(11) NOT NULL,
  `aimer_vie` int(11) NOT NULL,
  `sens_vie` int(11) NOT NULL,
  `concentration` int(11) NOT NULL,
  `securite_vie` int(11) NOT NULL,
  `environnement_sain` int(11) NOT NULL,
  `apparence` int(11) NOT NULL,
  `energie_vie` int(11) NOT NULL,
  `argent` int(11) NOT NULL,
  `acces_info_vie` int(11) NOT NULL,
  `pratique_loisir` int(11) NOT NULL,
  `deplacement` int(11) NOT NULL,
  `sommeil` int(11) NOT NULL,
  `taches_vie` int(11) NOT NULL,
  `act_pro` int(11) NOT NULL,
  `vous` int(11) NOT NULL,
  `relation` int(11) NOT NULL,
  `vie_sexuelle` int(11) NOT NULL,
  `amis_soutien` int(11) NOT NULL,
  `lieu_vie` int(11) NOT NULL,
  `acces_service` int(11) NOT NULL,
  `moyen_transport` int(11) NOT NULL,
  `sentiment_negatif` int(11) NOT NULL,
  `score_qdv` int(11) NOT NULL,
  `score_phy` int(11) NOT NULL,
  `score_psy` int(11) NOT NULL,
  `score_relation` int(11) NOT NULL,
  `score_env` int(11) NOT NULL,
  PRIMARY KEY (`id_whoqol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `whoqol`
--

INSERT INTO `whoqol` (`id_whoqol`, `eval_qualite_vie`, `satisfaction_sante`, `douleur_physique`, `traitement_quotidien`, `aimer_vie`, `sens_vie`, `concentration`, `securite_vie`, `environnement_sain`, `apparence`, `energie_vie`, `argent`, `acces_info_vie`, `pratique_loisir`, `deplacement`, `sommeil`, `taches_vie`, `act_pro`, `vous`, `relation`, `vie_sexuelle`, `amis_soutien`, `lieu_vie`, `acces_service`, `moyen_transport`, `sentiment_negatif`, `score_qdv`, `score_phy`, `score_psy`, `score_relation`, `score_env`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `a_participe_a`
--
ALTER TABLE `a_participe_a`
  ADD CONSTRAINT `a_participe_a_ibfk_1` FOREIGN KEY (`id_creneau`) REFERENCES `creneaux` (`id_creneau`),
  ADD CONSTRAINT `a_participe_a_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`);

--
-- Contraintes pour la table `a_pour_motivation`
--
ALTER TABLE `a_pour_motivation`
  ADD CONSTRAINT `a_pour_motivation_ibfk_1` FOREIGN KEY (`id_entretien`) REFERENCES `entretiens` (`id_entretien`),
  ADD CONSTRAINT `a_pour_motivation_ibfk_2` FOREIGN KEY (`id_motivation`) REFERENCES `motivations` (`id_motivation`);

--
-- Contraintes pour la table `a_pour_objectif`
--
ALTER TABLE `a_pour_objectif`
  ADD CONSTRAINT `a_pour_objectif_ibfk_1` FOREIGN KEY (`id_entretien`) REFERENCES `entretiens` (`id_entretien`),
  ADD CONSTRAINT `a_pour_objectif_ibfk_2` FOREIGN KEY (`id_objectif`) REFERENCES `objectifs` (`id_objectif`);

--
-- Contraintes pour la table `a_pour_obstacle`
--
ALTER TABLE `a_pour_obstacle`
  ADD CONSTRAINT `a_pour_obstacle_ibfk_1` FOREIGN KEY (`id_entretien`) REFERENCES `entretiens` (`id_entretien`),
  ADD CONSTRAINT `a_pour_obstacle_ibfk_2` FOREIGN KEY (`id_obstacle`) REFERENCES `obstacles` (`id_obstacle`);

--
-- Contraintes pour la table `a_pour_result`
--
ALTER TABLE `a_pour_result`
  ADD CONSTRAINT `a_pour_result_ibfk_1` FOREIGN KEY (`id_entretien`) REFERENCES `entretiens` (`id_entretien`),
  ADD CONSTRAINT `a_pour_result_ibfk_2` FOREIGN KEY (`id_test_equilibre`) REFERENCES `test_equilibre` (`id_test_equilibre`);

--
-- Contraintes pour la table `doit_pratiquer`
--
ALTER TABLE `doit_pratiquer`
  ADD CONSTRAINT `doit_pratiquer_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`),
  ADD CONSTRAINT `doit_pratiquer_ibfk_2` FOREIGN KEY (`id_activite`) REFERENCES `activites` (`id_activite`);

--
-- Contraintes pour la table `entretiens`
--
ALTER TABLE `entretiens`
  ADD CONSTRAINT `entretiens_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`),
  ADD CONSTRAINT `entretiens_ibfk_2` FOREIGN KEY (`id_type_entretien`) REFERENCES `type_entretien` (`id_type_entretien`),
  ADD CONSTRAINT `entretiens_ibfk_3` FOREIGN KEY (`id_test_assis`) REFERENCES `test_assis` (`id_test_assis`),
  ADD CONSTRAINT `entretiens_ibfk_4` FOREIGN KEY (`id_test_marche`) REFERENCES `test_marche` (`id_test_marche`),
  ADD CONSTRAINT `entretiens_ibfk_5` FOREIGN KEY (`id_whoqol`) REFERENCES `whoqol` (`id_whoqol`);

--
-- Contraintes pour la table `est_affilie`
--
ALTER TABLE `est_affilie`
  ADD CONSTRAINT `est_affilie_ibfk_1` FOREIGN KEY (`id_mutuelle`) REFERENCES `mutuelles` (`id_mutuelle`),
  ADD CONSTRAINT `est_affilie_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`);

--
-- Contraintes pour la table `est_diagnostique`
--
ALTER TABLE `est_diagnostique`
  ADD CONSTRAINT `est_diagnostique_ibfk_1` FOREIGN KEY (`id_pathologie`) REFERENCES `pathologies` (`id_pathologie`),
  ADD CONSTRAINT `est_diagnostique_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`);

--
-- Contraintes pour la table `est_encadre_par`
--
ALTER TABLE `est_encadre_par`
  ADD CONSTRAINT `est_encadre_par_ibfk_1` FOREIGN KEY (`id_creneau`) REFERENCES `creneaux` (`id_creneau`),
  ADD CONSTRAINT `est_encadre_par_ibfk_2` FOREIGN KEY (`id_intervenant`) REFERENCES `intervenants` (`id_intervenant`);

--
-- Contraintes pour la table `est_soigne_par`
--
ALTER TABLE `est_soigne_par`
  ADD CONSTRAINT `est_soigne_par_ibfk_1` FOREIGN KEY (`id_medecin`) REFERENCES `medecins` (`id_medecin`),
  ADD CONSTRAINT `est_soigne_par_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`);

--
-- Contraintes pour la table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`id_coordinateur`) REFERENCES `coordinateur` (`id_coordinateur`),
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`id_statut`) REFERENCES `statuts` (`id_statut`);

--
-- Contraintes pour la table `se_fait_a`
--
ALTER TABLE `se_fait_a`
  ADD CONSTRAINT `se_fait_a_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activites` (`id_activite`),
  ADD CONSTRAINT `se_fait_a_ibfk_2` FOREIGN KEY (`id_creneau`) REFERENCES `creneaux` (`id_creneau`);

--
-- Contraintes pour la table `se_fait_dans`
--
ALTER TABLE `se_fait_dans`
  ADD CONSTRAINT `se_fait_dans_ibfk_1` FOREIGN KEY (`id_centre`) REFERENCES `centres` (`id_centre`),
  ADD CONSTRAINT `se_fait_dans_ibfk_2` FOREIGN KEY (`id_creneau`) REFERENCES `creneaux` (`id_creneau`);

--
-- Contraintes pour la table `stats_perso`
--
ALTER TABLE `stats_perso`
  ADD CONSTRAINT `stats_perso_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
