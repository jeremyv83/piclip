-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 18 fév. 2021 à 14:06
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

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
  `id_user` int(11) NOT NULL,
  `id_coeur` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_image` varchar(100) NOT NULL,
  `date_poste` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_user` (`id_user`),
  KEY `id_coeur` (`id_coeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `date_naissance` date NOT NULL,
  `route_avatar` varchar(100) DEFAULT NULL,
  `date_inscript` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `mot_de_passe`, `nom`, `prenom`, `pseudo`, `email`, `date_naissance`, `route_avatar`, `date_inscript`) VALUES
(3, 'ac402df71ef82153a93573dd7068b96ec760278b', NULL, NULL, 'test125874', 'jeremy@gmail.com', '2021-02-21', NULL, NULL),
(4, '9854508d6d98da3cf5b69ee3c12accb20879a7c0', NULL, NULL, 'Erode83', 'jeremyvivie@hotmail.fr', '2000-12-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_coeur` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_video` varchar(100) NOT NULL,
  `route_minia` varchar(100) NOT NULL,
  `date_poste` date DEFAULT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_user` (`id_user`),
  KEY `id_coeur` (`id_coeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
