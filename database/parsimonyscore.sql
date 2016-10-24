-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Octobre 2016 à 12:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `parsimonyscore`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `send_date` datetime NOT NULL,
  `seen_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `message`, `email`, `seen`, `send_date`, `seen_date`) VALUES
(1, 'ok', 'elfaqir963@gmail.com', 0, '2016-10-20 14:57:24', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `problem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `k` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `r` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `rn` int(11) NOT NULL,
  `rg` int(11) NOT NULL,
  `rb` int(11) NOT NULL,
  `nb` int(11) DEFAULT NULL,
  `file_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ng` int(11) DEFAULT NULL,
  `gb` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `score_t_m_p`
--

CREATE TABLE IF NOT EXISTS `score_t_m_p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `problem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `k` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `n` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `rn` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `rb` int(11) DEFAULT NULL,
  `ng` int(11) DEFAULT NULL,
  `nb` int(11) DEFAULT NULL,
  `file_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gb` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `score_t_m_p`
--

INSERT INTO `score_t_m_p` (`id`, `problem`, `k`, `l`, `r`, `n`, `g`, `b`, `s`, `rn`, `rg`, `rb`, `ng`, `nb`, `file_name`, `gb`) VALUES
(4, 'my_test', 2, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '147696053038910_my_test.txt', NULL),
(8, 'tmp', 22, 1582, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '147730155312753_tmp.txt', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'go3w4mj1rtsgswgkw4o088gc0scsww8', '$2y$13$go3w4mj1rtsgswgkw4o08u17Fi2yjXSz56Etsd4n9fSaWsWICVGoC', '2016-10-24 12:17:38', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(2, 'ismail', 'ismail', 'elfaqir963@gmail.com', 'elfaqir963@gmail.com', 1, 'a5un6z28j1cgc84kc8o0w04ow8kgwgc', '$2y$13$a5un6z28j1cgc84kc8o0wuY1dm2bQSHswhX00I1rp0mqDrjRaW5iS', '2016-10-20 15:46:55', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_USER";}', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
