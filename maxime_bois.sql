-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 18 fév. 2018 à 11:38
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Structure de la table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sections` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`id`, `id_sections`, `file`) VALUES
(1, 1, 'section1-1.png'),
(2, 2, 'section2-1.png'),
(3, 2, 'section2-2.png'),
(4, 2, 'section2-3.png'),
(5, 3, 'section3-1.png'),
(6, 4, 'section4-1.png'),
(7, 5, 'section5-1.png'),
(8, 5, 'section5-2.png'),
(9, 5, 'section5-3.png'),
(10, 5, 'section5-4.png'),
(11, 5, 'section5-5.png'),
(12, 5, 'section5-6.png'),
(13, 5, 'section5-7.png'),
(14, 6, 'section6-1.png'),
(15, 6, 'section6-2.png'),
(16, 6, 'section6-3.png'),
(17, 6, 'section6-4.png'),
(18, 6, 'section6-5.png'),
(19, 6, 'section6-6.png');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projects` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `id_projects`, `title`, `image`) VALUES
(1, 1, 'Persona', '1-persona.jpg'),
(2, 1, 'Customer journey', '1-customer-journey.jpg'),
(3, 2, 'Desktop wireframe', 'wireframe-d.png'),
(4, 2, 'Mobile wireframe', 'wireframe-m.png');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `result` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `image_home`, `texte_home`, `name`, `image_header`, `speciality`, `context`, `solo`, `year`, `goals`, `problematics`, `solutions`, `strengths`, `result`) VALUES
(1, 'obataimu_home.jpg', 'Obataimu is a clothing brand  mixing Japanese art and Indian  know-how.', 'Obataimu', 'obataimu_header.jpg', 'UX/UI Design', 'School project', 0, 2017, 'Redesign the website of the Obataimu brand.', 'Obataimu is a clothing brand mixing Japanese art and Indian know-how.  Clothes are made to measure, by a craftsman who designs all the pieces from scratch.  Obataimu has very strong values and transcribing these values was difficult.', 'The first one was to create an interactive online experience highlighting the main  value of Obtaimu : « Take the time to … ». The goal of this experiment was to bring out all the  everyday things that you never take the time to do. In the different actions presented,  Obataimu products will be of course highlighted and the user will be able to interact with.  The second one was to create a web page highlighting the other strong values of Obataimu.', '', ''),
(2, 'disney_home.jpg', 'We participated to the Disneyland  Paris challenge to design their new  home page.', 'Disneyland Paris', 'disney-header.png', 'UX/UI Design', 'School project', 0, 2017, 'Disneyland Paris organized a challenge at ECV Digital School.\r\nThe purpose of the contest was to create a new home page to encourage users \r\nto purchase a Disney vacation.', 'Today Disneyland Paris have a homepage with very little information. \r\n25% of visitors stay less than 15 seconds on the website because they can’t find \r\nwhat they wants. During this project we had to structure and prioritize the information \r\nin order to make them want to discover Disney universe as soon as they arrive online. \r\nIn addition, the digital and marketing team of Disney wanted to highlight some information \r\nsuch as offers, annual pass and social networks.\r\nThe difficulty of this project was to take into account the customizable and flexible part \r\nof the website. In other words, according to the country or region in which we look the \r\nwebsite, we have to push different offers. So we had going to find a way to structure \r\nthe information that the marketing department could customize the site easily.', 'We decided to make a home page highlighting the Disney experience users\r\n could live at Disney. The goal was to create an immersive experience in the world of Disney \r\nas soon as he arrived on the website.', '- A reservation bar always accessible\r\n- Highlighting the experiences that the users could lives in Disney\r\n- Modular blocks for offers\r\n- Disney\'s social networks highlighting', 'We won the Disneyland Paris challenge. \r\nThe team was composed of @Lucie Pouderoux (UX), @Endza Djergaian (UX), \r\n@Benoit Delbique (UI), @Claire Bartoux (UI) and myself.');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projects` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`id`, `id_projects`, `name`) VALUES
(1, 1, 'Home Page'),
(2, 1, 'Interactive experience'),
(3, 1, 'Page concept'),
(4, 2, 'Motion design'),
(5, 2, 'Home page'),
(6, 2, 'Mobile');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
