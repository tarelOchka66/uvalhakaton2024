-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 05 2024 г., 09:03
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
-- База данных: `cad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `golos`
--

CREATE TABLE `golos` (
  `id` int(7) NOT NULL,
  `1.1` int(7) NOT NULL,
  `2.1` int(7) NOT NULL,
  `3.1` int(7) NOT NULL,
  `4.1` int(7) NOT NULL,
  `5.1` int(7) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `6.1` int(7) NOT NULL,
  `7.1` int(7) NOT NULL,
  `8.1` int(7) NOT NULL,
  `9.1` int(7) NOT NULL,
  `10.1` int(7) NOT NULL,
  `11.1` int(7) NOT NULL,
  `12.1` int(7) NOT NULL,
  `13.1` int(7) NOT NULL,
  `14.1` int(7) NOT NULL,
  `15.1` int(7) NOT NULL,
  `16.1` int(7) NOT NULL,
  `17.1` int(7) NOT NULL,
  `18.1` int(7) NOT NULL,
  `19.1` int(7) NOT NULL,
  `1.2` int(7) NOT NULL,
  `2.2` int(7) NOT NULL,
  `3.2` int(7) NOT NULL,
  `4.2` int(7) NOT NULL,
  `5.2` int(7) NOT NULL,
  `6.2` int(7) NOT NULL,
  `7.2` int(7) NOT NULL,
  `8.2` int(7) NOT NULL,
  `9.2` int(7) NOT NULL,
  `10.2` int(7) NOT NULL,
  `11.2` int(7) NOT NULL,
  `12.2` int(7) NOT NULL,
  `13.2` int(7) NOT NULL,
  `14.2` int(7) NOT NULL,
  `15.2` int(7) NOT NULL,
  `16.2` int(7) NOT NULL,
  `17.2` int(7) NOT NULL,
  `18.2` int(7) NOT NULL,
  `19.2` int(7) NOT NULL,
  `20.1` int(7) NOT NULL,
  `6.3` int(7) NOT NULL,
  `7.3` int(7) NOT NULL,
  `7.4` int(7) NOT NULL,
  `11.3` int(7) NOT NULL,
  `11.4` int(7) NOT NULL,
  `11.5` int(7) NOT NULL,
  `11.6` int(7) NOT NULL,
  `12.3` int(7) NOT NULL,
  `12.4` int(7) NOT NULL,
  `13.3` int(7) NOT NULL,
  `14.3` int(7) NOT NULL,
  `17.3` int(7) NOT NULL,
  `17.4` int(7) NOT NULL,
  `17.5` int(7) NOT NULL,
  `19.3` int(7) NOT NULL,
  `19.4` int(7) NOT NULL,
  `fio` text NOT NULL,
  `godRojd` int(4) NOT NULL,
  `sferaDeit` int(2) NOT NULL,
  `muj` int(7) NOT NULL,
  `jen` int(7) NOT NULL,
  `predlog` text NOT NULL,
  `1` int(7) NOT NULL,
  `2` int(7) NOT NULL,
  `3` int(7) NOT NULL,
  `4` int(7) NOT NULL,
  `5` int(7) NOT NULL,
  `6` int(7) NOT NULL,
  `7` int(7) NOT NULL,
  `8` int(7) NOT NULL,
  `9` int(7) NOT NULL,
  `10` int(7) NOT NULL,
  `11` int(7) NOT NULL,
  `12` int(7) NOT NULL,
  `13` int(7) NOT NULL,
  `14` int(7) NOT NULL,
  `15` int(7) NOT NULL,
  `16` int(7) NOT NULL,
  `17` int(7) NOT NULL,
  `18` int(7) NOT NULL,
  `19` int(7) NOT NULL,
  `20` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `golos`
--

INSERT INTO `golos` (`id`, `1.1`, `2.1`, `3.1`, `4.1`, `5.1`, `password`, `login`, `6.1`, `7.1`, `8.1`, `9.1`, `10.1`, `11.1`, `12.1`, `13.1`, `14.1`, `15.1`, `16.1`, `17.1`, `18.1`, `19.1`, `1.2`, `2.2`, `3.2`, `4.2`, `5.2`, `6.2`, `7.2`, `8.2`, `9.2`, `10.2`, `11.2`, `12.2`, `13.2`, `14.2`, `15.2`, `16.2`, `17.2`, `18.2`, `19.2`, `20.1`, `6.3`, `7.3`, `7.4`, `11.3`, `11.4`, `11.5`, `11.6`, `12.3`, `12.4`, `13.3`, `14.3`, `17.3`, `17.4`, `17.5`, `19.3`, `19.4`, `fio`, `godRojd`, `sferaDeit`, `muj`, `jen`, `predlog`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
(6, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, '6deeca542c21e94b598a576d4deeb267', 'efc0602af64e0befd93c69b78c465ed4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `golos`
--
ALTER TABLE `golos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `golos`
--
ALTER TABLE `golos`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
