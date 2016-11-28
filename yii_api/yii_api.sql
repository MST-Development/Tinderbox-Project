-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Nov 28. 18:18
-- Kiszolgáló verziója: 5.6.26
-- PHP verzió: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `yii_api`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(15) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `announcement`
--

INSERT INTO `announcement` (`id`, `author`, `title`, `content`, `date`) VALUES
(1, '', 'This is a test announcement', 'There is some text coming here to test the function.', '2016-11-26 00:00:00'),
(2, '', 'This is also', 'Here are some more stuff.', '2016-11-26 00:00:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `faq`
--

INSERT INTO `faq` (`id`, `title`, `content`) VALUES
(1, 'Where is that place?', 'The place you can find on the map menu.'),
(2, 'Where should I be there?', 'You can find the answer for this questions on the my shift page.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `information`
--

INSERT INTO `information` (`id`, `title`, `content`) VALUES
(1, 'Welcome on Tinderbox', 'We are dying you motherfucker. made by Tony Chen (masta)'),
(2, 'Added new one', 'Tony Chen is gay for sure');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `sender` int(25) NOT NULL,
  `recipient` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `message`
--

INSERT INTO `message` (`id`, `name`, `date`, `content`, `sender`, `recipient`) VALUES
(1, 'Boss Ben Jensen', '2016-11-28 13:02:37', 'Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text', 1, 2),
(2, 'testing person', '2016-11-28 13:43:37', 'Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text. Hello, this is a testing text', 2, 1),
(3, 'random message guy', '2016-11-28 13:55:45', 'This is should be updated!', 1, 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1480163770),
('m130524_201442_init', 1480163890);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `shift`
--

INSERT INTO `shift` (`id`, `title`, `supervisor`, `date`, `status`) VALUES
(1, 'Test', 'Peter', '2016-11-01', 1),
(2, 'test2', 'Okay', '2016-11-01', 2),
(4, 'jack', 'Never okay', '2016-11-01', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `team` varchar(100) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(155) NOT NULL,
  `portrait` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `supervisor`
--

INSERT INTO `supervisor` (`id`, `name`, `title`, `team`, `phone`, `email`, `portrait`) VALUES
(1, 'Firstname Lastname', 'Supervisor', 'Pizza Area 51', 22553344, 'supervisor1@tinderbox.dk', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'randomauthkey', '$2y$13$N/D5NS79Iy3xzEB7NPb75u.3jRcqDw03Ozu6GjapYJFbliNvQ8qse', NULL, 'test@test.com', 10, 0, 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- A tábla indexei `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT a táblához `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT a táblához `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT a táblához `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
