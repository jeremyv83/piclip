-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 22 fév. 2021 à 14:53
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `piclip`
--

-- --------------------------------------------------------

--
-- Structure de la table `coeur`
--

CREATE TABLE `coeur` (
  `id_coeur` int(11) NOT NULL,
  `coeur` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_coeur` int(11) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_image` varchar(100) NOT NULL,
  `date_poste` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `route_avatar` varchar(100) DEFAULT '../img/bebeyoda.png',
  `date_inscript` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(14, 'dcbeb2608763b332ea6fcc7d287bfa940da9cf69', 'Maitre', 'Yoda', 'MaitreYoda', 'myoda@gmail.com', '1987-02-01', '../img/bebeyoda2.png', '2021-02-22');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_coeur` int(11) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `route_video` varchar(100) NOT NULL,
  `route_minia` varchar(100) NOT NULL,
  `date_poste` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coeur`
--
ALTER TABLE `coeur`
  ADD PRIMARY KEY (`id_coeur`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_coeur` (`id_coeur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_coeur` (`id_coeur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coeur`
--
ALTER TABLE `coeur`
  MODIFY `id_coeur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;

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
