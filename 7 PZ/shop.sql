-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 05 2022 г., 16:10
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `prod_id` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `prod_id`, `price`) VALUES
(3, '1', 1, 1),
(17, 'ds3ol9cileghgl0akdtsh0srsft6244o', 0, 15),
(18, 'ds3ol9cileghgl0akdtsh0srsft6244o', 0, 15),
(19, 'ds3ol9cileghgl0akdtsh0srsft6244o', 0, 15),
(20, 'ds3ol9cileghgl0akdtsh0srsft6244o', 0, 0),
(26, 'ds3ol9cileghgl0akdtsh0srsft6244o', 1, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `id_com` varchar(255) NOT NULL,
  `com` varchar(255) NOT NULL,
  `name_com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `id_com`, `com`, `name_com`) VALUES
(10, '17', 'test', 'test'),
(14, '16', 'q', 'q'),
(15, '16', 'tester', 'Adminka'),
(17, '1', 'e', 'adminer'),
(18, '1', 'testing', 'admin'),
(24, '2', 'test', 'test'),
(25, '0', '', ''),
(26, '0', '', ''),
(27, '0', '', ''),
(28, '0', '', ''),
(29, '0', '', ''),
(30, '0', '', ''),
(31, '0', '', ''),
(32, '0', '', ''),
(33, '0', '', ''),
(34, '0', '', ''),
(35, '0', '', ''),
(36, '0', '', ''),
(37, '0', '', ''),
(38, '0', '', ''),
(39, '0', '', ''),
(40, '0', '', ''),
(41, '0', '', ''),
(42, '0', '', ''),
(43, '0', '', ''),
(44, '0', '', ''),
(45, '0', '', ''),
(46, '0', '', ''),
(47, '0', '', ''),
(48, '0', '', ''),
(49, '0', '', ''),
(50, '0', '', ''),
(51, '0', '', ''),
(52, '0', '', ''),
(53, '0', '', ''),
(54, '0', '', ''),
(55, '0', '', ''),
(56, '0', '', ''),
(57, '0', '', ''),
(58, '0', '', ''),
(59, '0', '', ''),
(60, '0', '', ''),
(61, '0', '', ''),
(62, '0', '', ''),
(63, '0', '', ''),
(64, '0', '', ''),
(65, '0', '', ''),
(66, '0', '', ''),
(67, '0', '', ''),
(68, '0', '', ''),
(69, '0', '', ''),
(70, '0', '', ''),
(71, '0', '', ''),
(72, '0', '', ''),
(73, '0', '', ''),
(74, '0', '', ''),
(75, '0', '', ''),
(76, '0', '', ''),
(77, '0', '', ''),
(78, '0', '', ''),
(79, '0', '', ''),
(80, '0', '', ''),
(81, '0', '', ''),
(82, '0', '', ''),
(83, '0', '', ''),
(84, '3', 'test', 'test'),
(85, '3', 'test', 'test'),
(86, '4', 'test', 'еуые'),
(87, '4', 'test', 'еуые');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `img`, `description`, `price`) VALUES
(1, 'Ручка', '1.jpg', 'Состоит из стержня (обычно — пластиковой трубочки), заполненной пастообразными чернилами, и шарикового пишущего наконечника, размещённого на конце стержня.', '15'),
(2, 'Простой карандаш', '2.jpg', 'Простой карандаш имеет графитовый грифель и пишет серым цветом с оттенками от светлого до почти чёрного (зависит от твёрдости графита). Оправа грифеля может быть деревянной, пластиковой, бумажной, верёвочной. Такие карандаши считаются одноразовыми. Иногда на обратном конце карандаша укреплён ластик в обойме.', '10'),
(3, 'Ластик', '3.jpg', 'Стирательная резинка, Резинка для стирания, Ластик[1] (резина[2], ластик, канцелярская резинка, стёрка) — писчая принадлежность для удаления карандашных (и иногда чернильных) надписей с бумаги и других поверхностей для письма, кусок натурального или вулканизированного каучука.', '20'),
(4, 'Степлер', '4.jpg', 'Сте́плер или Сшиватель (англ. stapler, /ˈsteɪplə(r)/) — устройство для скрепления листов бумаги металлическими скобами.', '200');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '123', '112197582624c3db4594502.37767592'),
(2, 'user', '321', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
