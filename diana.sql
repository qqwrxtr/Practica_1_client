-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2023 г., 21:27
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `admin`) VALUES
(2, 'Bugatinca', 'teodorghirba1@gmail.com', '$2y$10$o9ccCQzQx.6xXSkoVv.L7u52vyx9T.8vj5Z56avlQLITLr0FxSS52', 1),
(3, 'NoName', 'asd@gmail.com', '$2y$10$Zl2T6JYCHa3d0Kt6Dpxvqe1ql5yyqKqIrlXMYOEZr.Ff3KETZuS8W', 0),
(4, 'W1ld', 'asddsa@gmail.com', '$2y$10$YXxRcQd3GS9.xZgWUXJzkOuOF.l689.J/3YSeQ9KGE3GtXinHqXTm', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `details`, `name`, `price`) VALUES
(1, '/diana/images/shop1.png', 'Elite Blinds, Happy Kids', 'Zen Duck Egg Plain Eyelet Curtains', '$55.99 - $60.99'),
(2, '/diana/images/shop2.png', 'Another Brands, Exclusive Curtains', 'Suedine Chocolate Plain Woven Eyelet Curtains', '$57.99 – $58.99'),
(3, '/diana/images/shop3.png', 'Another Brands, Elite Blinds', 'Salla Ecru Plain Woven Eyelet Lined Curtains', '$49.99 – $50.99'),
(4, '/diana/images/shop4.png', 'Exclusive Curtains, Happy Kids', 'Zen Ecru Plain Eyelet Curtains', '$27.99 – $29.99'),
(5, '/diana/images/shop5.png', 'Exclusive Curtains, Happy Kids', 'Victoria Rose Natural Tiebacks', '$15.99 – $20.99'),
(6, '/diana/images/shop6.png', 'Another Brands, Happy Kids, Your Blinds', '50mm Teak Extended Drop Wooden Venetian Blinds', '$65.99 – $68.99'),
(7, '/diana/images/shop7.png', 'Another Brands, Your Blinds', 'Kensington Elite Cotton Blend Golden Tiebacks', '$19.99 – $20.99'),
(9, '/diana/images/shop8.png', 'asdsadsadsadas', 'NoName', '5600'),
(10, '/diana/images/shop2.png', 'Do re mi fa sol la si dooooooo', 'Bugatinca', '500000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
