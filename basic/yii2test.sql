-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 08 2017 г., 17:49
-- Версия сервера: 5.7.19-0ubuntu0.16.04.1
-- Версия PHP: 5.6.31-1~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Структура таблицы `sountry`
--

CREATE TABLE `sountry` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sountry`
--

INSERT INTO `sountry` (`code`, `name`, `population`, `id`) VALUES
('AU', 'Гондурас', 112, 1),
('BR', 'Brazil333', 7788, 2),
('CA', 'Canada', 3, 3),
('ап', 'парапр', 54, 23),
('gg', 'gfgfhf', 3453, 31),
('RR', 'RRRRR', 1111, 32);

-- --------------------------------------------------------

--
-- Структура таблицы `zountry`
--

CREATE TABLE `zountry` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zountry`
--

INSERT INTO `zountry` (`code`, `name`, `population`, `id`) VALUES
('AU', 'Австралия2', 24016400, 1),
('BR', 'Brazil', 205722000, 2),
('CA', 'Canada', 35985751, 3),
('CN', 'China', 1375210000, 4),
('DE', 'Germany', 81459000, 5),
('FR', 'France', 64513242, 6),
('GB', 'United Kingdom', 65097000, 7),
('IN', 'India', 1285400000, 8),
('RU', 'Russia', 146519759, 9),
('AD', 'Ad', 666, 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Индексы таблицы `sountry`
--
ALTER TABLE `sountry`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zountry`
--
ALTER TABLE `zountry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sountry`
--
ALTER TABLE `sountry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `zountry`
--
ALTER TABLE `zountry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
