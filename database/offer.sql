-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 20. Nov 2019 um 10:12
-- Server-Version: 10.0.28-MariaDB-2+b1
-- PHP-Version: 7.3.11-1+0~20191026.48+debian10~1.gbpf71ca0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bkwi1920`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `creatorid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` longtext NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `offer`
--

INSERT INTO `offer` (`id`, `creatorid`, `title`, `createdate`, `description`, `price`) VALUES
(1, 0, 'Test-Verkauf', '2019-11-20 10:01:01', 'Dies ist ein Test-Verkauf', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
