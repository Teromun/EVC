-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 mars 2025 à 19:44
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `administratif`
--

CREATE TABLE `administratif` (
  `user_id` int(11) NOT NULL,
  `categorie` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administratif`
--

INSERT INTO `administratif` (`user_id`, `categorie`, `name`, `date`) VALUES
(1, 'AG', 'CR_AG_05.11.24', '2024-11-05'),
(2, 'CA', 'CR_CA_03.09.24', '2024-09-03');

-- --------------------------------------------------------

--
-- Structure de la table `partitions`
--

CREATE TABLE `partitions` (
  `sheet_id` int(11) NOT NULL,
  `categorie` varchar(16) NOT NULL,
  `name_part` varchar(256) NOT NULL,
  `author` varchar(224) NOT NULL,
  `midi` tinyint(1) NOT NULL DEFAULT 1,
  `voices` varchar(24) NOT NULL DEFAULT 'SATB',
  `name_doc` varchar(126) NOT NULL,
  `pdf` tinyint(1) NOT NULL DEFAULT 1,
  `format` varchar(24) NOT NULL DEFAULT '.mid',
  `record` tinyint(1) NOT NULL DEFAULT 0,
  `name_record` text NOT NULL,
  `odt` tinyint(1) NOT NULL DEFAULT 0,
  `odtpupitre` tinyint(1) NOT NULL DEFAULT 0,
  `next_concert` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partitions`
--

INSERT INTO `partitions` (`sheet_id`, `categorie`, `name_part`, `author`, `midi`, `voices`, `name_doc`, `pdf`, `format`, `record`, `name_record`, `odt`, `odtpupitre`, `next_concert`) VALUES
(1, 'ABC', 'A clare benediction', '', 1, 'SATB', 'a_clare_benediction', 1, '.mid', 0, '', 1, 0, 0),
(2, 'ABC', 'Adeste fideles', '', 1, 'SATB', 'adeste_fideles', 1, '.mp4', 0, '', 1, 0, 0),
(3, 'ABC', 'Adio kerida', '', 1, 'SATB', 'adio_kerida', 1, '.mid', 0, '', 1, 0, 0),
(4, 'MNO', 'Noël capital', '', 1, 'SATB', 'noel_capital', 1, '.mid', 0, '', 0, 0, 0),
(5, 'MNO', 'Noël bourguignon', '', 1, 'SATB', 'noel_bourguignon', 1, '.mid', 0, '', 0, 0, 0),
(6, 'JKL', 'La dama de Mallorca', '', 1, 'SATB', 'la_dama_de_mallorca', 1, '.mid', 0, '', 1, 0, 0),
(7, 'DEF', 'Dans la troupe', '', 1, 'SA1A2T1T2B', 'dans_la_troupe', 1, '.mp3', 0, '', 0, 0, 0),
(8, 'ABC', 'Adorar al niño', '', 1, 'SATB', 'adorar_al_nino', 1, '.mid', 0, '', 1, 0, 0),
(9, 'ABC', 'Allons gay bergères', '', 1, 'SATB', 'allons_gay_bergeres', 1, '.mid', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LBTzMnOj0VA?si=o16Tmsv2XPtU-KDE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(10, 'ABC', 'Amsterdam', '', 1, 'S1S2A1A2TB', 'amsterdam', 1, '.mid', 0, '', 0, 0, 0),
(11, 'ABC', 'An irish blessing', '', 1, 'SATB', 'an_irish_blessing', 1, '.mid', 0, '', 1, 0, 0),
(12, 'ABC', 'Barekhu', '', 1, 'SAH', 'barekhu', 1, '.mid', 0, '', 0, 0, 0),
(13, 'ABC', 'Canon de la paix', '', 1, 'FTB', 'canon_de_la_paix', 1, '.mid', 0, '', 1, 0, 0),
(14, 'ABC', 'Cantique de Jean Racine', '', 1, 'SATB', 'cantique_jean_racine', 1, '.mid', 0, '', 0, 0, 0),
(15, 'ABC', 'Chanson à boire', '', 1, 'SATB', 'chanson_a_boire', 1, '.mid', 0, '', 0, 0, 0),
(16, 'ABC', 'Comme le cerf', '', 1, 'SATB', 'comme_le_cerf', 1, '.mid', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/URJX39t8Sok?si=PI0NXa0YDFh_Ehy_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(17, 'DEF', 'Deck the hall', '', 1, 'SATB', 'deck_the_hall', 1, '.mid', 0, '', 0, 0, 0),
(18, 'DEF', 'En sortant de l\'école', '', 1, 'SA1A2TB1B2', 'en_sortant_de_l_ecole', 1, '.mid', 0, '', 0, 0, 0),
(19, 'GHI', 'Go down Moses', '', 1, 'SATB', 'go_down_moses', 1, '.mid', 0, '', 1, 0, 0),
(20, 'GHI', 'In splendoribus', '', 1, 'SATB', 'in_splendoribus', 1, '.mid', 0, '', 0, 0, 0),
(21, 'JKL', 'Jouluhymni', '', 1, 'SATB', 'jouluhymni', 1, '.mid', 0, '', 0, 0, 0),
(22, 'JKL', 'La lune est morte', '', 1, 'SATB', 'la_lune_est_morte', 1, '.mid', 0, '', 0, 0, 0),
(23, 'JKL', 'La nuit des roses', '', 1, 'SATB', 'la_nuit_des_roses', 1, '.mid', 0, '', 0, 0, 0),
(24, 'JKL', 'La pêche à la baleine', '', 1, 'SATB', 'la_peche_a_la_baleine', 1, '.mid', 0, '', 0, 0, 0),
(25, 'JKL', 'La source', '', 1, 'SATB', 'la_source', 1, '.mid', 0, '', 0, 0, 0),
(26, 'JKL', 'L\'âme des poètes', '', 1, 'SATB', 'l_ame_des_poetes', 1, '.mid', 0, '', 0, 0, 0),
(27, 'JKL', 'L\'amour est une forteresse', '', 1, 'SATB', 'l_amour_est_une_forteresse', 1, '.mid', 0, '', 0, 0, 0),
(28, 'JKL', 'Le message des anges', '', 1, 'SATB', 'le_message_des_anges', 1, '.mid', 0, '', 0, 0, 0),
(29, 'JKL', 'Le temps chemine - 1 : Hiver', '', 1, 'SATB', 'le_temps_chemine_1hiver', 0, '.mid', 0, '', 0, 0, 0),
(30, 'JKL', 'Les comédiens', '', 1, 'SATB', 'les_comediens', 1, '.mid', 0, '', 0, 0, 0),
(31, 'JKL', 'Les sabots d\'Hélène', '', 1, 'SATB', 'les_sabots_d_helene', 1, '.mid', 0, '', 0, 0, 0),
(32, 'JKL', 'Locus iste', '', 1, 'SATB', 'locus_iste', 1, '.mid', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/udZCjXbwkzk?si=7XpBEDxkIx38XcZ-\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(33, 'MNO', 'Mille regrets de vous abandonner', '', 1, 'SATB', 'mille_regrets', 1, '.mid', 0, '', 0, 0, 0),
(34, 'MNO', 'Nit de vetlla', '', 1, 'SATB', 'nit_de_vetlla', 1, '.mid', 0, '', 0, 0, 0),
(35, 'MNO', 'Noël créole', '', 1, 'SATB', 'noel_creole', 1, '.mid', 0, '', 1, 0, 0),
(36, 'MNO', 'Noël ukrainien - Nova radist stala', '', 1, 'SATB', 'noel_ukrainien', 1, '.mid', 0, '', 1, 0, 0),
(37, 'MNO', 'Noël, noël, noël', '', 1, 'SATB', 'noel_noel_noel', 1, '.mid', 0, '', 0, 0, 0),
(38, 'MNO', 'O jesu christe', '', 1, 'SATB', 'o_jesu_christe', 1, '.mid', 0, '', 0, 0, 0),
(39, 'MNO', 'O little town of Bethlehem', '', 1, 'SATB', 'o_little_town', 1, '.mid', 0, '', 0, 0, 0),
(40, 'MNO', 'O vos omnes', '', 1, 'SATB', 'o_vos_omnes', 1, '.mid', 0, '', 0, 0, 0),
(41, 'PQR', 'Patapan', '', 1, 'SATB', 'patapan', 1, '.mid', 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LSQBxgbVa8E?si=S_wFAtzRS1u0pwuE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(42, 'PQR', 'Pavane', '', 1, 'SATB', 'pavane', 1, '.mid', 0, '', 0, 0, 0),
(43, 'PQR', 'Quand on n\'a que l\'amour', '', 1, 'SATB', 'quand_on_n_a_que_l_amour', 1, '.mid', 0, '', 0, 0, 0),
(44, 'PQR', 'Revelabitur', '', 1, 'SATB', 'revelabitur', 1, '.mid', 0, '', 0, 0, 0),
(45, 'PQR', 'Rise up, shepherd', '', 1, 'SATB', 'rise_up', 1, '.mid', 0, '', 0, 0, 0),
(46, 'PQR', 'Riu riu chiu', '', 1, 'SATB', 'riu_riu_chiu', 1, '.mid', 0, '', 1, 0, 0),
(47, 'STU', 'Sancta Maria Mater Christi', '', 1, 'SATB', 'sancta_maria_mater_christi', 1, '.mid', 0, '', 0, 0, 0),
(48, 'STU', 'Shchedryk shchedryk', '', 1, 'SATB', 'shchedryk', 1, '.mid', 0, '', 1, 0, 0),
(49, 'STU', 'Shen Khar Venakhi', '', 1, 'SATB', 'shen_khar_venakhi', 1, '.mid', 0, '', 0, 0, 0),
(50, 'STU', 'Slava Vichnih Bogou', '', 1, 'SATB', 'slava_vichnih_bogou', 1, '.mid', 0, '', 0, 0, 0),
(51, 'STU', 'Ta Katie t\'a quitté', '', 1, 'SATB', 'ta_katie_t_a_quitte', 1, '.mid', 0, '', 0, 0, 0),
(52, 'STU', 'Tebe poem - Tchaïkovsky', '', 1, 'SATB', 'tebe_poem_tchaikovsky', 1, '.mid', 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XfQZoUnmU5U?si=EzdUOnga80wStmFf\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(53, 'STU', 'The Gift', '', 1, 'SATB', 'the_gift', 1, '.mid', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KfF8V1wEoeo?si=0VWfT0PGJ9qII9S8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(54, 'STU', 'Toutes les nuits', '', 1, 'SATB', 'toutes_les_nuits', 1, '.mid', 0, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1mCw57leo_4?si=BQ8df8lWGuQFUA5F\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 0, 0, 0),
(55, 'VWX', 'Weep o mine eyes', '', 1, 'SATB', 'weep_o_mine_eyes', 1, '.mid', 0, '', 0, 0, 0),
(56, 'VWX', 'Were you there', '', 1, 'SATB', 'were_you_there', 1, '.mid', 0, '', 0, 0, 0),
(57, 'DEF', 'Dans une étable obscure', '', 1, 'SATB', 'dans_une_etable_obscure', 1, '.mid', 0, '', 0, 0, 0),
(58, 'PQR', 'Patapan - pages 3 et 4 lent', '', 1, 'SAB', 'patapan_23_lent', 1, '.mid', 0, '', 0, 0, 0),
(59, 'JKL', 'Le temps chemine - 2 : Printemps', '', 1, 'SATB', 'le_temps_chemine_2printemps', 0, '.mid', 0, '', 0, 0, 0),
(60, 'JKL', 'Le temps chemine - 3 : Été', '', 1, 'SATB', 'le_temps_chemine_3ete', 0, '.mid', 0, '', 0, 0, 0),
(61, 'JKL', 'Le temps chemine - 4 : automne', '', 1, 'SATB', 'le_temps_chemine_4automne', 0, '.mid', 0, '', 0, 0, 0),
(62, 'JKL', 'Le temps chemine', '', 0, 'SATB', 'le_temps_chemine', 1, '', 0, '', 1, 1, 1),
(63, 'DEF', 'Don Quichotte', 'CRUCHON-MEYLAN', 1, 'SATB', 'don_quichotte', 1, '.mid', 0, '', 0, 0, 1),
(64, 'ABC', 'Ay linda amiga', 'Anonyme', 1, 'SATB', 'ay_linda_amiga', 1, '.mid', 0, '', 0, 0, 1),
(65, 'ABC', 'Armstrong', 'Claude NOUGARO', 1, 'SATB', 'armstrong', 1, '.mid', 0, '', 0, 0, 1),
(66, 'JKL', 'Les yeux de la Marianita', 'Jacques CHAILLEY', 1, 'SATB', 'les_yeux_de_la_marianita', 1, '.mid', 0, '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(24) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `admin`, `password`) VALUES
('Admin', 1, 'musique30650'),
('choriste', 0, 'evc30650');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administratif`
--
ALTER TABLE `administratif`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `partitions`
--
ALTER TABLE `partitions`
  ADD UNIQUE KEY `sheet_id` (`sheet_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administratif`
--
ALTER TABLE `administratif`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `partitions`
--
ALTER TABLE `partitions`
  MODIFY `sheet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
