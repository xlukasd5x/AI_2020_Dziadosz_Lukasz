-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2020, 20:00
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `apka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auta`
--

CREATE TABLE `auta` (
  `id_auta` int(11) NOT NULL,
  `img` text COLLATE utf8_polish_ci NOT NULL,
  `Marka` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Przebieg` int(11) NOT NULL,
  `Cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `auta`
--

INSERT INTO `auta` (`id_auta`, `img`, `Marka`, `Model`, `Przebieg`, `Cena`) VALUES
(1, 'https://carnet.pl/assets/Car/_resampled/SetWidth368-picento.png', 'Kia Picanto', 'Picanto', 100000, 99),
(2, 'https://carnet.pl/assets/Car/_resampled/SetWidth368-astra-czarna.png', 'Opel', ' Astra', 5000, 99),
(3, 'https://carnet.pl/assets/Car/_resampled/SetWidth368-toyotayaris-18.png', 'Toyota ', 'Yaris', 10, 99),
(4, 'https://carnet.pl/assets/Car/_resampled/SetWidth368-kia-ceed-019.png', 'Kia', 'Cee\'d', 10000, 139),
(5, 'https://carnet.pl/assets/Car/_resampled/SetWidth368-nissan-juke-18.png', 'Nissan ', 'Juke', 8000, 159);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext COLLATE utf8_polish_ci NOT NULL,
  `emailUsers` tinytext COLLATE utf8_polish_ci NOT NULL,
  `pwdUsers` longtext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'asd123', 'asd@gmail.com', '$2y$10$VdjxmryrEyUviPQN6.uNeuWvev63jylE8HtIdQ9UmoK7fyVhb/hSC'),
(3, 'test', 'test@gmail.com', '$2y$10$IlP4r/xR3OIa/m5utORdjuqiFVGehlwIoGbOE1xjEQu2ggq7oXlmO'),
(4, 'test1', 'test1@gmail.com', '$2y$10$WZqLIjIdDszBPXF6rsQlvedmPwAw2eTPRX3HA.CB8q9dTtHskT0RK'),
(5, 'test2', 'test2@gmail.com', '$2y$10$1qwmw90Kzb7LVzkhcRxV5.7lj9GZO0xwDAjt2562j4VgxPYN0gFwa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auta`
--
ALTER TABLE `auta`
  ADD PRIMARY KEY (`id_auta`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `auta`
--
ALTER TABLE `auta`
  MODIFY `id_auta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
