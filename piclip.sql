-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 fév. 2021 à 13:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piclip`
--

-- --------------------------------------------------------

--
-- Structure de la table `coeur`
--

DROP TABLE IF EXISTS `coeur`;
CREATE TABLE IF NOT EXISTS `coeur` (
  `id_coeur` int(11) NOT NULL AUTO_INCREMENT,
  `coeur` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_coeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_coeur` int(11) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_image` varchar(100) NOT NULL,
  `date_poste` datetime DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_user` (`id_user`),
  KEY `id_coeur` (`id_coeur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `id_user`, `id_coeur`, `titre`, `description`, `route_image`, `date_poste`) VALUES
(1, 15, NULL, 'Angkor', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/Ang 7 copie.jpg', '2021-02-24 10:19:20'),
(2, 15, NULL, 'Matchu pitchu', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/2.jpg', '2021-02-24 10:21:17'),
(3, 15, NULL, 'Chili', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/Chil 2.jpg', '2021-02-24 10:22:12'),
(4, 15, NULL, 'Pont du Dragon', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/DSC_0130.jpg', '2021-02-24 10:23:00'),
(5, 16, NULL, 'Chutes eaux', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/GOPR1583.JPG', '2021-02-24 11:03:56'),
(6, 16, NULL, 'Cascade', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/DSC_0026.JPG', '2021-02-24 11:04:45'),
(7, 17, NULL, 'Rio', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/DSC_0527.JPG', '2021-02-24 11:09:28'),
(8, 17, NULL, 'Soirée', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/DSC_0728.JPG', '2021-02-24 11:09:51'),
(9, 17, NULL, 'Escalier', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis totam similique architecto fugit perspiciatis aut nihil dolore illum deserunt. Odit odio beatae quo modi autem voluptatum accusamus eius, totam obcaecati!', '../poste/image/IMG_5241.JPG', '2021-02-24 11:10:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `mot_de_passe` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `route_avatar` varchar(100) DEFAULT '../img/bebeyoda.png',
  `date_inscript` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `mot_de_passe`, `nom`, `prenom`, `pseudo`, `email`, `date_naissance`, `route_avatar`, `date_inscript`) VALUES
(8, 'b510ac65bca06dda1b60ceb2d7840220f52a5ec2', NULL, NULL, 'dazdzad', 'christiane.creous@orange.fr', '2010-05-01', NULL, '2019-02-21'),
(9, 'b510ac65bca06dda1b60ceb2d7840220f52a5ec2', NULL, NULL, 'dzadza1', 'jjuan@live.fr', '2012-11-10', NULL, '2019-02-21'),
(10, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', 'bebe', 'Yoda', 'BebeYoda', 'bebeyoda@gmail.com', '1900-01-01', '../img/bebeyoda2.png', '2021-02-19'),
(11, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', NULL, NULL, 'test1245', 'dodo78@gmail.com', '2010-10-10', NULL, '2021-02-21'),
(12, 'b510ac65bca06dda1b60ceb2d7840220f52a5ec2', NULL, NULL, 'Testeur84', 'testeur84@gmail.com', '1876-10-10', '../img/bebeyoda.png', '2021-02-22'),
(13, 'b510ac65bca06dda1b60ceb2d7840220f52a5ec2', 'Jeanjacque', NULL, 'test1278', 'gege@gmail.com', '1987-10-10', '../img/bebeyoda.png', '2021-02-22'),
(14, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', 'Maitre', 'Yoda', 'MaitreYoda', 'myoda@gmail.com', '1987-02-01', '../img/bebeyoda2.png', '2021-02-22'),
(15, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', 'Dorian', 'Dodo', 'Dorian84', 'dodo84300@gmail.com', '1943-03-12', '../img/bebeyoda.png', '2021-02-24'),
(16, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', NULL, NULL, 'Jerem13', 'jeje13@gmail.com', '2012-11-03', '../img/bebeyoda.png', '2021-02-24'),
(17, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', NULL, NULL, 'Guigui13', 'guigui13@gmail.com', '1987-03-09', '../img/bebeyoda.png', '2021-02-24'),
(18, '7e64db4679ba9d396777e805af35fd864ebd1b9a', 'Vivié', 'Jérémy', 'Erode3', 'jeremyvivie@hotmail.fr', '2000-12-23', '../img/TETENE.jpg', '2021-02-24');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_coeur` int(11) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_video` varchar(100) NOT NULL,
  `route_minia` varchar(100) NOT NULL,
  `date_poste` datetime DEFAULT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_user` (`id_user`),
  KEY `id_coeur` (`id_coeur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id_video`, `id_user`, `id_coeur`, `titre`, `description`, `route_video`, `route_minia`, `date_poste`) VALUES
(1, 15, NULL, 'drone', 'drone', '../poste/video/A002_C009_092221_001.mp4', '../poste/video/miniature/UNADJUSTEDNONRAW_thumb_100c.jpg', '2021-02-24 10:34:55'),
(2, 15, NULL, 'cocotier', 'timelapse', '../poste/video/DockAtitlanTL.mp4', '../poste/video/miniature/sample-1.jpg', '2021-02-24 10:52:09'),
(3, 15, NULL, 'tikal', 'tikal timelapse', '../poste/video/TIkal.mp4', '../poste/video/miniature/UNADJUSTEDNONRAW_thumb_fdb.jpg', '2021-02-24 10:54:32'),
(4, 15, NULL, 'testeur', 'testeur testeur', '../poste/video/A004_C002_09244Q_001.mp4', '../poste/video/miniature/DSC_009.jpg', '2021-02-24 10:57:21'),
(5, 16, NULL, 'la montagna', 'utilisation timeline', '../poste/video/using-timeline.mp4', '../poste/video/miniature/UNADJUSTEDNONRAW_thumb_ff7.jpg', '2021-02-24 11:00:21'),
(6, 16, NULL, 'ballon de foot', 'ballon de foot', '../poste/video/A002_C086_09220G_001.mp4', '../poste/video/miniature/DSC_0847.JPG', '2021-02-24 11:01:22'),
(7, 16, NULL, 'neige', 'il neige', '../poste/video/CrossGuateTL.mp4', '../poste/video/miniature/IMGP9229.jpg', '2021-02-24 11:02:21'),
(8, 17, NULL, 'videoencore', 'ajout video', '../poste/video/A005_C037_09255G_001.mp4', '../poste/video/miniature/DSC_0033.JPG', '2021-02-24 11:07:42'),
(9, 17, NULL, 'jouer foot', 'enfants jouent foot', '../poste/video/A003_C092_09231C_001.mp4', '../poste/video/miniature/DSC_0549.JPG', '2021-02-24 11:09:00');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_image_id_coeur` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_img_id_coeur` FOREIGN KEY (`id_coeur`) REFERENCES `coeur` (`id_coeur`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `fk_video_id_coeur` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_video_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_vod_id_coeur` FOREIGN KEY (`id_coeur`) REFERENCES `coeur` (`id_coeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
