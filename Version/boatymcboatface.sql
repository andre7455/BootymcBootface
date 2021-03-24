-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 feb 2021 om 12:56
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boatymcboatface`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boten`
--

CREATE TABLE `boten` (
  `ID` int(255) NOT NULL,
  `Titel` varchar(255) NOT NULL,
  `Beschijving` varchar(255) NOT NULL,
  `Locatie` varchar(255) NOT NULL,
  `prijs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` int(255) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `telefoonnummer` varchar(20) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Woonplaats` varchar(255) NOT NULL,
  `Postcode` varchar(255) NOT NULL,
  `Huisnummer` varchar(12) NOT NULL,
  `Rol` int(10) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `havens`
--

CREATE TABLE `havens` (
  `ID` int(255) NOT NULL,
  `Titel` varchar(255) NOT NULL,
  `Telefoonnummer` varchar(255) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Postcode` varchar(255) NOT NULL,
  `Havennummer` varchar(255) NOT NULL,
  `Plaats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kthavens`
--

CREATE TABLE `kthavens` (
  `ID` int(255) NOT NULL,
  `BoatID` int(255) NOT NULL,
  `HavenID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ktuserrentals`
--

CREATE TABLE `ktuserrentals` (
  `ID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `BoatID` int(255) NOT NULL,
  `StartID` date NOT NULL,
  `Enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rols`
--

CREATE TABLE `rols` (
  `ID` int(2) NOT NULL,
  `Rolnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boten`
--
ALTER TABLE `boten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `havens`
--
ALTER TABLE `havens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `kthavens`
--
ALTER TABLE `kthavens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `ktuserrentals`
--
ALTER TABLE `ktuserrentals`
  ADD PRIMARY KEY (`ID`,`BoatID`);

--
-- Indexen voor tabel `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `boten`
--
ALTER TABLE `boten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `havens`
--
ALTER TABLE `havens`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `kthavens`
--
ALTER TABLE `kthavens`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `ktuserrentals`
--
ALTER TABLE `ktuserrentals`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `rols`
--
ALTER TABLE `rols`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
