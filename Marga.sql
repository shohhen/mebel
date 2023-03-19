-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 19 2023 г., 19:23
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Marga`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `img`) VALUES
(1, 'Creative Stairs', '001-stairs.svg'),
(2, 'Kitchen Design', '002-kitchen.svg'),
(3, 'LAMP DECORATION', '003-lamp.svg'),
(4, 'INTERIOR BLUEPRINT', '004-blueprint.svg'),
(5, 'DINING TABLE', '005-dinning-table.svg'),
(6, 'MODERN DESIGN', '006-pantone.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desciption` varchar(300) NOT NULL,
  `img` varchar(100) NOT NULL,
  `cat_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `desciption`, `img`, `cat_id`) VALUES
(1, 'Oxford and Cotswolds - work', 'vibrant and elegant design services and architectural services by paul turner and charlotte holmes.', '1.jpeg', 1),
(2, 'Wood cabinets kitchen design', 'Here are some of the best kitchen design ideas with wood cabinets.', '2.jpeg', 2),
(3, 'Antique Gold Palm Leaf Floor Lamp', 'This stunning floor lamp is statement lighting at its finest. As well as being superbly practical with space for three bulbs, its elegant and modern design is simply spectacular.', '3.jpeg', 3),
(4, 'Home Designs', 'Display Homes The best way to experience the quality and style of our home designs is by visiting our stunning single and double-storey display homes, located throughout the Perth Metro area and the South West region. Let us help you discover new ideas and be inspired to build a single…', '4.jpeg', 4),
(5, '“The Contemporary Taupe”', '“The Contemporary Taupe” : A Home with Variety of Timeless Materials, Patterns and Textures in a Neutral Palette | Spaxis Design', '5.jpeg', 5),
(6, 'Black Brick Vila in Damavand, Iran by Reza Mohtashami', 'The Iranian architect Reza Mohtashami revealed his new villa design project \'\'Black Brick\'\' a single-family home to be built in Damavand, Tehran, Iran for a family with a modern mind .', '6.jpeg', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `login` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'adsfasdf', 'sh.n.karimberganov@gmail.com', '12312314rqew'),
(2, 'shohhen', 'karimberganoff@gmail.com', 'qw3312sdfa'),
(3, 'shohhen', 'sh.n@gmail.com', '1234567');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
