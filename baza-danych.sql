-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Gru 2020, 23:02
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza-danych`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delegacje`
--

CREATE TABLE `delegacje` (
  `Lp.` int(11) NOT NULL,
  `imie i nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `data od:` date NOT NULL,
  `data do:` date NOT NULL,
  `miejsce wyjazdu` text COLLATE utf8_polish_ci NOT NULL,
  `miejsce przyjazdu` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `delegacje`
--

INSERT INTO `delegacje` (`Lp.`, `imie i nazwisko`, `data od:`, `data do:`, `miejsce wyjazdu`, `miejsce przyjazdu`) VALUES
(1, 'Rafał Bobek', '2020-12-06', '2020-12-10', 'Kraków', 'Poznań'),
(2, 'Wiktor Jobda', '2020-11-10', '2020-11-12', 'Warszawa', 'Poznań'),
(3, 'Barbara Gruda', '2020-12-08', '2020-12-10', 'Gdańsk', 'Katowice'),
(4, 'Marek Linda', '2020-08-11', '2020-10-05', 'Katowice', 'Kielce'),
(5, 'Jan Kowalski', '2020-05-17', '2020-07-06', 'Gdynia', 'Szczecin'),
(6, 'Robert Surma', '2020-12-01', '2020-12-04', 'Poznań', 'Gniezno');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontrahenci`
--

CREATE TABLE `kontrahenci` (
  `NIP` text COLLATE utf8_polish_ci NOT NULL,
  `REGON` text COLLATE utf8_polish_ci NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `czyplatnikvat` text COLLATE utf8_polish_ci NOT NULL,
  `ulica` text COLLATE utf8_polish_ci NOT NULL,
  `numerdomu` text COLLATE utf8_polish_ci NOT NULL,
  `numermieszkania` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kontrahenci`
--

INSERT INTO `kontrahenci` (`NIP`, `REGON`, `nazwa`, `czyplatnikvat`, `ulica`, `numerdomu`, `numermieszkania`) VALUES
('1234567890', '123456789', 'Kontrahent nr 1', 'TAK', 'Akacjowa', '70', NULL),
('3456789102', '345678912', 'Kontrahent nr 3', 'NIE', 'Morska', '21', '4');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `delegacje`
--
ALTER TABLE `delegacje`
  ADD PRIMARY KEY (`Lp.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `delegacje`
--
ALTER TABLE `delegacje`
  MODIFY `Lp.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
