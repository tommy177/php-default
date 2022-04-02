-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2022 г., 18:36
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `description`, `price`) VALUES
(16, NULL, '01.jpg', NULL, NULL),
(17, NULL, '02.jpg', NULL, NULL),
(18, NULL, '03.jpg', NULL, NULL),
(19, NULL, '04.jpg', NULL, NULL),
(20, NULL, '05.jpg', NULL, NULL),
(21, NULL, '06.jpg', NULL, NULL),
(22, NULL, '07.jpg', NULL, NULL),
(23, NULL, '08.jpg', NULL, NULL),
(24, NULL, '09.jpg', NULL, NULL),
(25, NULL, '10.jpg', NULL, NULL),
(26, NULL, '11.jpg', NULL, NULL),
(27, '1', '12.jpg', '1', 1),
(28, NULL, '13.jpg', NULL, NULL),
(29, NULL, '14.jpg', NULL, NULL),
(30, NULL, '15.jpg', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
