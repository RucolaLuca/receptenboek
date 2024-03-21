-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mrt 2024 om 10:49
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `colombite`
--

CREATE TABLE `colombite` (
  `id` int(1) NOT NULL,
  `naam` varchar(15) NOT NULL,
  `duur(min)` int(3) NOT NULL,
  `beschrijving` varchar(1000) NOT NULL,
  `menugang` varchar(12) NOT NULL,
  `vegetarisch_vegan` varchar(11) DEFAULT NULL,
  `aantal_ingrediënten` int(2) NOT NULL,
  `ingrediënten_specefiek` varchar(1000) DEFAULT NULL,
  `afbeelding` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `colombite`
--

INSERT INTO `colombite` (`id`, `naam`, `duur(min)`, `beschrijving`, `menugang`, `vegetarisch_vegan`, `aantal_ingrediënten`, `ingrediënten_specefiek`, `afbeelding`) VALUES
(1, 'Ajiaco', 95, 'Het is een soep die meestal wordt gemaakt met kip, drie soorten aardappelen, maïs en een kruid genaamd guascas.', 'Hoofdgerecht', NULL, 9, NULL, NULL),
(2, 'Bandeja Paisa', 200, 'Bandeja Paisa: Typisch Colombiaans gerecht, rijk aan smaak, bestaande uit rijst, bonen, ei, vlees, avocado en maïsbrood, gekend om royale porties.', 'Voorgerecht', NULL, 12, NULL, NULL),
(3, 'Empanadas', 105, 'Colombiaanse Empanadas zijn een populaire snack of aperitiefhapje in Colombia en worden door de meeste Colombiaanse restaurants in de Verenigde Staten geserveerd met ají-saus.', 'Voorgerecht', NULL, 16, NULL, NULL),
(4, 'Arepas', 15, 'Arepa Rellena con Queso is een populair gerecht in Colombia en Venezuela. Dit is een recept voor met kaas gevulde Arepa in Colombiaanse stijl. Het is heel gemakkelijk te maken en heerlijk.', 'Voorgerecht', NULL, 5, NULL, NULL),
(5, 'Lechona', 900, 'Lechona is een traditioneel Colombiaans gerecht van gevuld varken, gekruid met een mengsel van vlees, maïs en groenten. Het wordt langzaam gegaard tot het vlees mals is en de buitenkant knapperig, waardoor het een geliefd gerecht is bij feestelijke gelegenheden.', 'Hoofdgerecht', NULL, 18, NULL, NULL),
(6, 'Patacones', 30, 'Patacones zijn knapperige groene bakbanaanplakjes, tweemaal gebakken tot een goudbruine perfectie.', 'Bijgerecht', 'Vegetarisch', 3, NULL, NULL),
(7, 'Sancocho', 90, 'Sancocho is de perfecte eenpansmaaltijd. Het is een dikke, geruststellende en vullende soep, gemaakt met verschillende soorten maaltijden, specerijen, kruiden en vlees. Deze sancocho de pollo y costilla de res is perfect voor een zondagse maaltijd.', 'Hoofdgerecht', NULL, 13, NULL, NULL),
(8, 'Tamales', 135, 'Tamal is een traditioneel gerecht in veel Latijns-Amerikaanse landen. Iedere kok, regio en familie heeft zijn eigen variatie. Ze gebruiken verschillende vullingen, kookmethodes en manieren om de tamales te verpakken, maar het principe is hetzelfde.', 'Hoofdgerecht', NULL, 9, NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `colombite`
--
ALTER TABLE `colombite`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
