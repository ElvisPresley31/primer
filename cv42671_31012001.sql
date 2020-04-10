-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 10 2020 г., 19:14
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cv42671_31012001`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `data`, `tel`, `mail`, `password`) VALUES
(1, 'testeradmin', '31012001', '+7 (925) 495-87-47', 'dimonstalkers@mail.ru', 'AdminPanel');

-- --------------------------------------------------------

--
-- Структура таблицы `coffe`
--

CREATE TABLE IF NOT EXISTS `coffe` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `opis` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `coffe`
--

INSERT INTO `coffe` (`id`, `name`, `opis`, `price`) VALUES
(1, 'Капучино', 'Кофейный напиток итальянской кухни на основе эспрессо с добавлением в него подогретого вспененного молока.', '$49'),
(2, 'Американо', 'Способ приготовления кофе, заключающийся в соединении горячей воды и эспрессо.', '$49'),
(3, 'Эспрессо', 'Метод приготовления кофе путём прохождения горячей воды под давлением 9 бар через фильтр с молотым кофе.', '$49'),
(4, 'Макиато', 'Кофейный напиток, изготавливаемый из порции эспрессо и небольшого количества молока, обычно взбитого.', '$49'),
(5, 'Моккачино', 'Кофейный напиток, созданный в Америке и являющийся разновидностью латте с добавлением шоколада.', '$49'),
(6, 'Латте', 'Кофейный напиток родом из Италии, состоящий из молока, молочной пены и кофе эспрессо.', '$49'),
(7, 'Пикколо', 'Кофейный напиток небольшого объёма, состоящий только из кофе и молока, объем – 80-100 мл.', '$49'),
(8, 'Ристретто', 'Эспрессо, в котором отношение массы напитка к массе перемолотого зерна ниже, чем в нормале и лунго.', '$49'),
(9, 'Аффогато', 'Десерт обычно готовится из ванильного мороженого, которое заливается порцией горячего эспрессо.', '$49');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`login`, `password`) VALUES
('sdc', 'sdc'),
('qwe', 'qwe'),
('qwe', 'qwe'),
('', ''),
('dsc', 'sdc'),
('dsc9', ''),
('dsf', 'df'),
('dsf', 'df'),
('dsf', 'dc'),
('dsf', 'dc'),
('dsf', 'dc'),
('dsf', 'dc'),
('dsf', 'dc'),
('dsf', 'dc'),
('efb', 'gb'),
('efb', 'dfv'),
('sdc', 'dsc'),
('f', 'dc'),
('выс', 'вс'),
('куп', 'укп'),
('ено', ''),
('ено', 'н'),
('е', ''),
('1', '1'),
('', ''),
('test', 'test'),
('test', 'test'),
('test', ''),
('', ''),
('test1 ', 'TEST1'),
('', ''),
('', ''),
('', ''),
('test', 'test'),
('test', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `name` varchar(20) NOT NULL,
  `text` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subcribe`
--

CREATE TABLE IF NOT EXISTS `subcribe` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `subcribe`
--

INSERT INTO `subcribe` (`id`, `mail`) VALUES
(1, 'dimonstalkers@mail.ru'),
(24, 'dimonsuper12345@mail.ru'),
(30, 'dipoleta@rambler.ru'),
(37, 'severez@yandex.ru'),
(43, 'zxc@zxc.zx');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `data`, `tel`, `mail`, `password`, `code`) VALUES
(84, 'asfalt', '03.09.2019', '8005553535', 'qwerty@ya.ru', '$2y$10$ysi7Sr7m8G1YvHPu9eHRZ.Aospdo5lQFp0y3XFEJRpdKyqt0qi3Z6', '0123456789'),
(85, 'sancheszone', '09.12.1991', '9663576613', 'sancheszone@gmail.com', '$2y$10$nIuWQjsfdKrboUDCSkoqMufW6AFLmW14xitwP941.GdLcbipPfvH2', '0987654321'),
(89, 'qwe', '10.04.2019', '9254958747', 'dimonstalkers@mail.ru', '$2y$10$vc.bn4xSRGPMXGPfV3l5VuIrHBcS9Fv5Ug61noWlHTI8MQnZ/rHa2', '6509439'),
(127, 'wqer', '03.04.2019', '2386450684', 'sdfuogiweoguiwbe@mail.ru', '$2y$10$x3ulKxVvdDidRwuWHnf1pejewqFo2hvAVVy0NPylc6PgbF7dzInTG', '7578230'),
(131, 'gnytntnh', '2020-04-10', '+7 (321) 321-32-13', 'qwasdeaasdasdsd@mail.ru', '$2y$10$GQBaTppDQy4DpvdndHkRGOpdnmRortPcAwsq4BkQIjcV2aA2ouFwO', '332299');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `url`) VALUES
(1, 'https://www.youtube.com/watch?v=f-rY7skoB9M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
