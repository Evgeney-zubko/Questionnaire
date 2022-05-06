-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2022 г., 19:51
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_1` tinyint(1) NOT NULL,
  `answer_2` tinyint(1) NOT NULL,
  `answer_3` tinyint(1) NOT NULL,
  `answer_4` tinyint(1) NOT NULL,
  `answer_5` tinyint(1) NOT NULL,
  `answer_6` tinyint(1) NOT NULL,
  `answer_7` tinyint(1) NOT NULL,
  `answer_8` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `name`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `answer_6`, `answer_7`, `answer_8`) VALUES
(1, 'Егор', 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Андрей К.', 0, 1, 0, 0, 0, 1, 1, 1),
(3, 'Ваня', 1, 0, 0, 1, 1, 1, 1, 0),
(4, 'Лиза', 1, 0, 1, 0, 1, 1, 1, 1),
(6, 'Вася', 1, 1, 0, 0, 0, 0, 0, 0),
(7, 'Евгений', 0, 1, 0, 0, 0, 0, 0, 0),
(8, 'test', 0, 1, 0, 0, 0, 1, 1, 1),
(10, 'test', 0, 1, 0, 0, 0, 1, 1, 1),
(13, 'Гриша', 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Шон', 0, 1, 0, 1, 0, 0, 0, 1),
(21, 'Имир', 1, 1, 0, 0, 0, 0, 0, 0),
(22, 'Леша', 1, 0, 0, 0, 0, 0, 0, 0),
(24, 'Эрвин', 1, 1, 1, 1, 0, 1, 0, 0),
(25, 'Арсен', 1, 1, 0, 0, 0, 1, 0, 0),
(26, 'Кеша', 0, 1, 1, 0, 0, 1, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
