-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost:3306
-- Létrehozás ideje: 2017. Jan 13. 15:34
-- Szerver verzió: 5.6.34-log
-- PHP verzió: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `mstdev_collection`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_announcement`
--

CREATE TABLE IF NOT EXISTS `tb_announcement` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `tb_announcement`
--

INSERT INTO `tb_announcement` (`id`, `author`, `title`, `content`, `date`) VALUES
(1, '', 'This is a test announcement', 'There is some text coming here to test the function.', '2016-11-26 00:00:00'),
(2, '', 'This is also', 'Here are some more stuff.', '2016-11-26 00:00:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_auth_assignment`
--

CREATE TABLE IF NOT EXISTS `tb_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `tb_auth_assignment`
--

INSERT INTO `tb_auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', NULL),
('user', '2', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_auth_item`
--

CREATE TABLE IF NOT EXISTS `tb_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `tb_auth_item`
--

INSERT INTO `tb_auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Site administrator', NULL, NULL, NULL, NULL),
('user', 1, 'Site user', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_auth_item_child`
--

CREATE TABLE IF NOT EXISTS `tb_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `tb_auth_item_child`
--

INSERT INTO `tb_auth_item_child` (`parent`, `child`) VALUES
('admin', 'user');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_auth_rule`
--

CREATE TABLE IF NOT EXISTS `tb_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_faq`
--

CREATE TABLE IF NOT EXISTS `tb_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- A tábla adatainak kiíratása `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `title`, `content`) VALUES
(1, 'Where is that place?', 'The place you can find on the map menu.'),
(2, 'Where should I be there?', 'You can find the answer for this questions on the my shift page.'),
(3, 'Where are you?', 'Where are you?');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_information`
--

CREATE TABLE IF NOT EXISTS `tb_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- A tábla adatainak kiíratása `tb_information`
--

INSERT INTO `tb_information` (`id`, `title`, `content`) VALUES
(1, 'Welcome on Tinderbox', 'We are really tired. made by Tony Chen (masta)'),
(2, 'Good to know', 'Some things are always good to know.'),
(4, 'Rules', 'Rules applied to volunteer.'),
(5, 'Supervisor system', 'How does the supervisor system work?'),
(6, 'This is long text here', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(7, 'Hello ', 'this is a sample text');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_message`
--

CREATE TABLE IF NOT EXISTS `tb_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `sender` int(25) NOT NULL,
  `recipient` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- A tábla adatainak kiíratása `tb_message`
--

INSERT INTO `tb_message` (`id`, `name`, `date`, `content`, `sender`, `recipient`) VALUES
(1, 'Boss Ben Jensen', '2016-11-28 13:02:37', 'Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text', 1, 2),
(2, 'testing person', '2016-11-28 13:43:37', 'Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text', 2, 1),
(3, 'random message guy', '2016-11-28 13:55:45', 'This is should be updated!', 1, 3),
(5, 'Randomshit', '2016-11-28 15:15:15', 'everything is random', 1, 2),
(6, 'test', '2016-11-28 13:02:37', 'sajt', 2, 1),
(7, 'test subject', '2016-11-30 12:56:58', 'kuki', 2, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_migration`
--

CREATE TABLE IF NOT EXISTS `tb_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `tb_migration`
--

INSERT INTO `tb_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1480163770),
('m130524_201442_init', 1480163890);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_shift`
--

CREATE TABLE IF NOT EXISTS `tb_shift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(3) NOT NULL,
  `location` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- A tábla adatainak kiíratása `tb_shift`
--

INSERT INTO `tb_shift` (`id`, `title`, `supervisor`, `assigned_to`, `date`, `status`, `location`) VALUES
(1, 'Test', 1, 2, '2016-12-01 07:20:21', 0, 'Bar'),
(2, 'test2', 1, 2, '2016-12-01 19:42:14', 2, 'Toilet'),
(4, 'jack', 1, 2, '2016-12-01 06:13:13', 1, 'Entrance'),
(5, 'Csoki', 1, 2, '2016-12-01 13:30:22', 2, 'Hall');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_supervisor`
--

CREATE TABLE IF NOT EXISTS `tb_supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `team` varchar(100) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(155) NOT NULL,
  `portrait` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `tb_supervisor`
--

INSERT INTO `tb_supervisor` (`id`, `name`, `title`, `team`, `phone`, `email`, `portrait`) VALUES
(1, 'Firstname Lastname', 'Supervisor', 'Pizza Area 51', 22553344, 'supervisor1@tinderbox.dk', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `supervisor` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- A tábla adatainak kiíratása `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `supervisor`) VALUES
(1, 'test', 'randomauthkey', '$2y$13$N/D5NS79Iy3xzEB7NPb75u.3jRcqDw03Ozu6GjapYJFbliNvQ8qse', NULL, 'test@test.com', 10, 0, 0, 1),
(2, 'test_user', 'aaaauthkey', '$2y$13$N/D5NS79Iy3xzEB7NPb75u.3jRcqDw03Ozu6GjapYJFbliNvQ8qse', NULL, '', 10, 0, 0, 0);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `tb_auth_assignment`
--
ALTER TABLE `tb_auth_assignment`
  ADD CONSTRAINT `tb_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `tb_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `tb_auth_item`
--
ALTER TABLE `tb_auth_item`
  ADD CONSTRAINT `tb_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `tb_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Megkötések a táblához `tb_auth_item_child`
--
ALTER TABLE `tb_auth_item_child`
  ADD CONSTRAINT `tb_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `tb_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `tb_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
