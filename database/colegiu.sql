-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 13 2025 г., 22:00
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `colegiu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `elevi`
--

CREATE TABLE `elevi` (
  `IDELEV` int(11) NOT NULL,
  `NUMELE` varchar(25) NOT NULL,
  `PRENUMELE` varchar(25) NOT NULL,
  `Adresa` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `DataNasterii` date DEFAULT NULL,
  `SEX` varchar(1) NOT NULL,
  `NotaMedieBac` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `elevi`
--

INSERT INTO `elevi` (`IDELEV`, `NUMELE`, `PRENUMELE`, `Adresa`, `Email`, `DataNasterii`, `SEX`, `NotaMedieBac`) VALUES
(1, 'Gurdis', 'Artemii', 'Str. Cuza Voda 4/1', 'artiom@gmail.com', '2006-06-17', 'M', 10),
(5, 'Albu', 'Marina', 'Str. Cuza Voda 6/1', 'albumarina@gmail.com', '2005-10-14', 'F', 3),
(8, 'Panov', 'Alexandr', 'Str. Cuza Voda 5/1', 'panova@gmail.com', '2006-10-05', 'M', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `elevi`
--
ALTER TABLE `elevi`
  ADD PRIMARY KEY (`IDELEV`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `elevi`
--
ALTER TABLE `elevi`
  MODIFY `IDELEV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
