-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 25 juin 2017 à 21:31
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `like_photo`
--

CREATE TABLE `like_photo` (
  `id_like` int(11) NOT NULL,
  `id_liker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(2) NOT NULL,
  `nom` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexe` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_de_naissance` varchar(20) NOT NULL,
  `ville` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cp` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `nom`, `prenom`, `mdp`, `sexe`, `date_de_naissance`, `ville`, `cp`, `email`) VALUES
(50, 'Kielbowicz', 'Marine', '1fd1b4516473c36c8fb30bbf7c4490fc20419a10', 'femme', '28-12-1991', 'Paris', '75020', 'marine@kielbowicz.fr'),
(51, 'guillermic', 'remy', 'bd98fd75568558683b2f49214b88b8ef60b1c5f1', 'homme', '12-06-1992', 'Massy', '91300', 'remy@guillermic.fr'),
(52, 'beau', 'alison', '4a4f22fbabc5d6375b354538de0249eb0a80f614', 'femme', '03-07-1993', 'Gennevilliers', '92230', 'alison@epitech.eu'),
(53, 'Gnahore', 'Virgil', '8460e247a3dbc5da1ba0ca46c5321ac9db046fb9', 'homme', '20-06-1991', 'Paris', '75020', 'virgil@gnahore.com'),
(63, 'Villaret', 'Tom', '1d5f29d807ee33b3f42481108436c7026584cb3d', 'homme', '23-06-1995', 'Rueil-malmaison', '92500', 'tom@villaret.fr'),
(64, 'damiens', 'guillaume', 'b81d9d756d5930ce7004a794df01196c26c77e0e', 'homme', '14-02-1991', 'gennevilliers', '92230', 'damiens.gui@gmail.co'),
(65, 'Beau', 'Luna', '4b7fad4f3f945dedf976096ae7cdae1f59f394a9', 'femme', '05-02-1995', 'Epinay-sous-senart', '91860', 'luna@beau.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `like_photo`
--
ALTER TABLE `like_photo`
  ADD KEY `id_membre` (`id_like`),
  ADD KEY `id_membre_liker` (`id_liker`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `like_photo`
--
ALTER TABLE `like_photo`
  ADD CONSTRAINT `id_membre` FOREIGN KEY (`id_like`) REFERENCES `membres` (`id_membre`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_membre_liker` FOREIGN KEY (`id_liker`) REFERENCES `membres` (`id_membre`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
