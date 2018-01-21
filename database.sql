-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Janvier 2018 à 21:07
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `maxime_bois`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `image_home` varchar(255) NOT NULL,
  `texte_home` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_header` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `context` text NOT NULL,
  `solo` int(1) NOT NULL,
  `year` int(4) NOT NULL,
  `goals` text NOT NULL,
  `problematics` text NOT NULL,
  `solutions` text NOT NULL,
  `strengths` text NOT NULL,
  `result` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id_project`, `image_home`, `texte_home`, `name`, `image_header`, `speciality`, `context`, `solo`, `year`, `goals`, `problematics`, `solutions`, `strengths`, `result`) VALUES
(1, 'obataimu_home.jpg', 'Obataimu is a clothing brand  mixing Japanese art and Indian  know-how.', 'Obataimu', 'obataimu_header.jpg', 'UX/UI Design', 'School project', 0, 2017, 'Redesign the website of the Obataimu brand.', 'Obataimu is a clothing brand mixing Japanese art and Indian know-how.  Clothes are made to measure, by a craftsman who designs all the pieces from scratch.  Obataimu has very strong values and transcribing these values was difficult.', 'The first one was to create an interactive online experience highlighting the main  value of Obtaimu : « Take the time to … ». The goal of this experiment was to bring out all the  everyday things that you never take the time to do. In the different actions presented,  Obataimu products will be of course highlighted and the user will be able to interact with.  The second one was to create a web page highlighting the other strong values of Obataimu.', '', ''),
(2, 'disney_home.jpg', 'We participated to the Disneyland  Paris challenge to design their new  home page.', 'Disneyland Paris', 'disneylan_disney.jpg', 'UX/UI Design', 'School project', 0, 2017, 'Disneyland Paris organized a challenge at ECV Digital School.\r\nThe purpose of the contest was to create a new home page to encourage users \r\nto purchase a Disney vacation.', 'Today Disneyland Paris have a homepage with very little information. \r\n25% of visitors stay less than 15 seconds on the website because they can’t find \r\nwhat they wants. During this project we had to structure and prioritize the information \r\nin order to make them want to discover Disney universe as soon as they arrive online. \r\nIn addition, the digital and marketing team of Disney wanted to highlight some information \r\nsuch as offers, annual pass and social networks.\r\nThe difficulty of this project was to take into account the customizable and flexible part \r\nof the website. In other words, according to the country or region in which we look the \r\nwebsite, we have to push different offers. So we had going to find a way to structure \r\nthe information that the marketing department could customize the site easily.', 'We decided to make a home page highlighting the Disney experience users\r\n could live at Disney. The goal was to create an immersive experience in the world of Disney \r\nas soon as he arrived on the website.', '- A reservation bar always accessible\r\n- Highlighting the experiences that the users could lives in Disney\r\n- Modular blocks for offers\r\n- Disney\'s social networks highlighting', 'We won the Disneyland Paris challenge. \r\nThe team was composed of @Lucie Pouderoux (UX), @Endza Djergaian (UX), \r\n@Benoit Delbique (UI), @Claire Bartoux (UI) and myself.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
