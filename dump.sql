-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 01 juin 2023 à 11:21
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`) VALUES
(1, 'Article de testeeee', 'Contenu de démo', NULL, 2),
(2, 'Article de test 2', 'Contenu de démo', NULL, 1),
(4, 'd\"n\"ofno\"fn', 'eeeee', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Catégorie 1'),
(2, 'Catégorie 2');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `prix_total` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `donnees` text,
  `date_achat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `prix_total`, `user_id`, `donnees`, `date_achat`) VALUES
(83, 45, 4, '{\"produit\":{\"41\":{\"id\":\"41\",\"titre\":\"Brassi\\u00e8re\",\"nbr\":\"1\",\"total\":\"45\",\"img\":\"Fh1.jpeg\"}},\"commande-total\":\"45\",\"user_id\":\"4\"}', '2022-06-25 18:12:21'),
(84, 81, 4, '{\"produit\":{\"40\":{\"id\":\"40\",\"titre\":\"T-shirt\",\"nbr\":\"1\",\"total\":\"33\",\"img\":\"Fh4.jpeg\"},\"53\":{\"id\":\"53\",\"titre\":\"Sweat Shirt manche longue\",\"nbr\":\"1\",\"total\":\"48\",\"img\":\"Hh2.webp\"}},\"commande-total\":\"81\",\"user_id\":\"4\"}', '2022-06-25 18:13:39'),
(85, 192, 9, '{\"produit\":{\"53\":{\"id\":\"53\",\"titre\":\"Sweat Shirt manche longue\",\"nbr\":\"4\",\"total\":\"192\",\"img\":\"Hh2.webp\"}},\"commande-total\":\"192\",\"user_id\":\"9\",\"paiement\":\"on\"}', '2022-06-25 18:22:58'),
(86, 90, 1, '{\"produit\":{\"44\":{\"id\":\"44\",\"titre\":\"T-shirt\",\"nbr\":\"1\",\"total\":\"45\",\"img\":\"Fh3.jpeg\"},\"56\":{\"id\":\"56\",\"titre\":\"Pull\",\"nbr\":\"1\",\"total\":\"45\",\"img\":\"Hh5.1.webp\"}},\"commande-total\":\"90\",\"user_id\":\"1\"}', '2022-06-26 15:45:10'),
(87, 37, 4, '{\"produit\":{\"67\":{\"id\":\"67\",\"titre\":\"D\\u00e9bardeur\",\"nbr\":\"1\",\"total\":\"37\",\"img\":\"Hh8.1.webp\"}},\"commande-total\":\"37\",\"user_id\":\"4\"}', '2022-06-28 11:56:47'),
(88, 111, 4, '{\"produit\":{\"67\":{\"id\":\"67\",\"titre\":\"D\\u00e9bardeur\",\"nbr\":\"3\",\"total\":\"111\",\"img\":\"Hh8.1.webp\"}},\"commande-total\":\"111\",\"user_id\":\"4\"}', '2022-06-29 15:39:14'),
(89, 37, 4, '{\"produit\":{\"67\":{\"id\":\"67\",\"titre\":\"D\\u00e9bardeur\",\"nbr\":\"1\",\"total\":\"37\",\"img\":\"Hh8.1.webp\"}},\"commande-total\":\"37\",\"user_id\":\"4\"}', '2022-06-29 15:42:35'),
(90, 45, 4, '{\"produit\":{\"68\":{\"id\":\"68\",\"titre\":\"T-Shirt\",\"nbr\":\"1\",\"total\":\"45\",\"img\":\"Hh9.1.webp\"}},\"commande-total\":\"45\",\"user_id\":\"4\"}', '2022-06-29 16:05:58'),
(91, 64, 1, '{\"produit\":{\"82\":{\"id\":\"82\",\"titre\":\"Sweat\",\"nbr\":\"4\",\"total\":\"64\",\"img\":\"Fh3.1.jpeg\"}},\"commande-total\":\"64\",\"user_id\":\"1\"}', '2022-11-08 15:51:06'),
(92, 37, 1, '{\"produit\":{\"67\":{\"id\":\"67\",\"titre\":\"D\\u00e9bardeur\",\"nbr\":\"1\",\"total\":\"37\",\"img\":\"Hh8.1.webp\"}},\"commande-total\":\"37\",\"user_id\":\"1\"}', '2023-05-23 14:50:27');

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `img` text,
  `prix` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sous_category_id` int(11) DEFAULT NULL,
  `img2` text,
  `img3` text,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `date`, `img`, `prix`, `category_id`, `sous_category_id`, `img2`, `img3`, `type`) VALUES
(52, 'Veste', 'Veste Rouge', '2022-06-24', 'Hh1.1.webp', 45, 1, NULL, 'Hh1.2.webp', 'Hh1.3.webp', 'Homme'),
(53, 'Sweat Shirt manche longue', 'Sweat Shirt manche longue Vert', '2022-06-24', 'Hh2.webp', 48, 1, NULL, 'Hh2.2.webp', 'Hh2.3.webp', 'Homme'),
(54, 'Sweat Shirt manche longue', 'Sweat Shirt manche longue Gris', '2022-06-24', 'Hh3.webp', 36, 1, NULL, 'Hh3.2.webp', 'Hh3.3.webp', 'Homme'),
(55, 'T-shirt', 'T-Shirt Gris', '2022-06-24', 'Hh4.1.webp', 45, 1, NULL, 'Hh4.2.webp', 'Hh4.3.webp', 'Homme'),
(56, 'Pull', 'Pull Gris', '2022-06-24', 'Hh5.1.webp', 45, 1, NULL, 'Hh5.2.webp', 'Hh5.3.webp', 'Homme'),
(57, 'Sweat', 'Sweat Noir', '2022-06-24', 'Hh6.1.webp', 45, 1, NULL, 'Hh6.2.webp', 'Hh6.3.webp', 'Homme'),
(66, 'Débardeur', 'Débardeur', '2022-06-26', 'Hh7.1.webp', 54, 1, NULL, 'Hh7.2.webp', 'Hh7.3.webp', 'Homme'),
(67, 'Débardeur', 'Débardeur', '2022-06-26', 'Hh8.1.webp', 37, 1, NULL, 'Hh8.2.webp', 'Hh8.3.webp', 'Homme'),
(68, 'T-Shirt', 'T-Shirt', '2022-06-26', 'Hh9.1.webp', 45, 1, NULL, 'Hh9.2.webp', 'Hh9.3.webp', 'Homme'),
(69, 'T-Shirt', 'T-Shirt', '2022-06-26', 'Hh10.1.webp', 45, 1, NULL, 'Hh10.2.webp', 'Hh10.3.webp', 'Homme'),
(70, 'Legging', 'Legging', '2022-06-26', 'Hb1.1.webp', 45, 2, NULL, 'Hb1.2.webp', 'Hb1.3.webp', 'Homme'),
(71, 'Legging', 'Legging', '2022-06-26', 'Hb2.1.webp', 45, 2, NULL, 'Hb2.2.webp', 'Hb2.3.webp', 'Homme'),
(72, 'Jogging', 'Jogging', '2022-06-26', 'Hb3.1.webp', 33, 2, NULL, 'Hb3.2.webp', 'Hb3.3.webp', 'Homme'),
(73, 'Jogging', 'Jogging', '2022-06-26', 'Hb4.1.webp', 33, 2, NULL, 'Hb4.2.webp', 'Hb4.3.webp', 'Homme'),
(74, 'Jogging', 'Jogging', '2022-06-26', 'Hb5.1.webp', 61, 2, NULL, 'Hb5.2.webp', 'Hb5.3.webp', 'Homme'),
(75, 'Short', 'Short', '2022-06-26', 'Hb6.1.webp', 61, 2, NULL, 'Hb6.2.webp', 'Hb6.3.webp', 'Homme'),
(76, 'Short', 'Short', '2022-06-26', 'Hb7.1.webp', 45, 2, NULL, 'Hb7.2.webp', 'Hb7.3.webp', 'Homme'),
(77, 'Short', 'Short', '2022-06-26', 'Hb8.1.webp', 32, 2, NULL, 'Hb8.2.webp', 'Hb8.3.webp', 'Homme'),
(81, 'Ensemble', 'Ensemble', '2022-06-26', 'Fh2.1.jpeg', 45, 1, NULL, 'Fh2.3.jpeg', 'Fh2.3.jpeg', 'Femme'),
(82, 'Sweat', 'Sweat', '2022-06-26', 'Fh3.1.jpeg', 16, 1, NULL, 'Fh3.2.jpeg', 'Fh3.3.jpeg', 'Femme'),
(83, 'Sweat', 'Sweat', '2022-06-26', 'Fh4.1.jpeg', 45, 1, NULL, 'Fh4.2.jpeg', 'Fh4.3.jpeg', 'Femme'),
(84, 'Débardeur', 'Débardeur', '2022-06-26', 'Fh5.1.jpeg', 7, 1, NULL, 'Fh5.2.jpeg', 'Fh5.3.jpeg', 'Femme'),
(85, 'Débardeur', 'Débardeur', '2022-06-26', 'Fh6.1.jpeg', 45, 1, NULL, 'Fh6.2.jpeg', 'Fh6.3.jpeg', 'Femme'),
(86, 'Débardeur', 'Débardeur', '2022-06-26', 'Fh7.1.jpeg', 45, 1, NULL, 'Fh7.2.jpeg', 'Fh7.3.jpeg', 'Femme'),
(87, 'T-Shirt', 'T-Shirt', '2022-06-26', 'Fh8.1.jpeg', 45, 1, NULL, 'Fh8.2.jpeg', 'Fh8.3.jpeg', 'Femme'),
(88, 'Ensemble', 'Ensemble', '2022-06-26', 'Fh9.1.jpeg', 45, 1, NULL, 'Fh9.2.jpeg', 'Fh9.3.jpeg', 'Femme'),
(89, 'Ensemble', 'Ensemble', '2022-06-26', 'Fh10.1.jpeg', 24, 1, NULL, 'Fh10.2.jpeg', 'Fh10.3.jpeg', 'Femme'),
(90, 'Short', 'Short', '2022-06-26', 'Fb1.1.jpeg', 15, 2, NULL, 'Fb1.2.jpeg', 'Fb1.3.jpeg', 'Femme'),
(91, 'Short', 'Short', '2022-06-26', 'Fb2.1.jpeg', 45, 1, NULL, 'Fb2.2.jpeg', 'Fb2.3.jpeg', 'Femme'),
(92, 'Jogging', 'Jogging', '2022-06-26', 'Fb3.1.jpeg', 49, 2, NULL, 'Fb3.2.jpeg', 'Fb3.3.jpeg', 'Femme'),
(93, 'Jogging', 'Jogging', '2022-06-26', 'Fb4.1.jpeg', 45, 2, NULL, 'Fb4.2.jpeg', 'Fb4.3.jpeg', 'Femme'),
(94, 'Legging', 'Legging', '2022-06-26', 'Fb5.1.jpeg', 45, 2, NULL, 'Fb5.2.jpeg', 'Fb5.3.jpeg', 'Femme'),
(95, 'Legging', 'Legging', '2022-06-26', 'Fb6.1.jpeg', 45, 2, NULL, 'Fb6.2.jpeg', 'Fb6.3.jpeg', 'Femme'),
(96, 'Legging', 'Legging', '2022-06-26', 'Fb7.1.jpeg', 45, 2, NULL, 'Fb7.2.jpeg', 'Fb7.3.jpeg', 'Femme'),
(97, 'Legging', 'Legging', '2022-06-26', 'Fb8.1.jpeg', 45, 2, NULL, 'Fb8.2.jpeg', 'Fb8.3.jpeg', 'Femme'),
(98, 'Legging', 'Legging', '2022-06-26', 'Fb9.1.jpeg', 45, 2, NULL, 'Fb9.2.jpeg', 'Fb9.3.jpeg', 'Femme'),
(99, 'Legging', 'Legging', '2022-06-26', 'Fb10.1.jpeg', 45, 2, NULL, 'Fb10.2.jpeg', 'Fb10.3.jpeg', 'Femme'),
(100, 'Ensemble', 'Ensemble', '2022-06-26', 'Fh1.2.jpeg', 45, 1, NULL, 'Fh1.2.jpeg', 'Fh1.3.jpeg', 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `tel`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, 'damien.coualan@gmail.com', NULL, 'ROLE_ADMIN'),
(3, 'Michael', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Michael', 'Michael', 'm.mavrodis@gmail.com', '0676119429', 'ROLE_USER'),
(4, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'Damien', 'Coualan', 'damien.coualan1@gmail.com', NULL, 'ROLE_USER'),
(5, NULL, NULL, NULL, NULL, 'damien.coualan@gmail.com', NULL, NULL),
(6, NULL, NULL, NULL, NULL, 'damien.coualan@gmail.com', NULL, NULL),
(7, NULL, '1efcfaab69361232b5e5e39265464be84f6e484f', 'Damien', 'Coualan', 'damien.coualan2@gmail.com', NULL, 'ROLE_USER'),
(8, NULL, '45b75c25860895f4271e4b948413ce42aae19c84', 'Damien3', 'Coualan3', 'damien.coualan3@gmail.com', NULL, 'ROLE_USER'),
(9, NULL, '9cf95dacd226dcf43da376cdb6cbba7035218921', 'banbanban', 'jojojo', 'jojojo@yopmail.com', NULL, 'ROLE_USER'),
(10, NULL, 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Damien', 'Coualan', 'damien.coualan@gmail.com', NULL, 'ROLE_USER'),
(11, NULL, '2b4e98c43605fdf5102b73e3fcf008b8aafb573a', 'Damien2', 'Coualan2', 'damien.coualan2@gmail.com', NULL, 'ROLE_USER'),
(12, NULL, '2b4e98c43605fdf5102b73e3fcf008b8aafb573a', 'Damien2', 'Coualan2', 'damien.coualan2@gmail.com', NULL, 'ROLE_USER'),
(13, NULL, 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4', 'user2', 'user2', 'Damien.coualan@gmail.com', NULL, 'ROLE_USER'),
(14, NULL, '2f8d4739ae358ad37db46ddaf2ff61e36d0dc1a0', 'Damien', 'Coualan', 'damien.coualan5@gmail.com', NULL, 'ROLE_USER'),
(15, NULL, '12dea96fec20593566ab75692c9949596833adc9', 'Damien', 'Coualan', 'damien.coualan@gmail.com', NULL, 'ROLE_USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
