-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2016 г., 14:13
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tabl`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `who` varchar(100) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `who`, `theme`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'Vitaliy', 'Проверка', 'Делаем первые шаги!', NULL, '2016-03-01 21:54:25', '2016-03-01 21:54:25'),
(24, 'Vitaliy', 'Проверка', 'Делаем второй шаг!', NULL, '2016-03-01 21:54:48', '2016-03-01 21:54:48'),
(25, 'Vitaliy', 'Работоспособность сайта', 'Пока на нуле!', NULL, '2016-03-01 21:55:19', '2016-03-01 21:55:19'),
(26, 'Vitaliy', 'Работоспособность сайта', 'Все также!', NULL, '2016-03-01 21:56:08', '2016-03-01 21:56:08'),
(27, 'Vitaliy', 'Общее', 'Здравствуй', NULL, '2016-03-01 21:56:32', '2016-03-01 21:56:32'),
(28, 'Vitaliy', 'Здравствуй', 'Здравствуй', NULL, '2016-03-01 21:56:39', '2016-03-01 21:56:39'),
(29, 'Vitaliy', 'Что-то еще', 'Привет', NULL, '2016-03-01 22:27:10', '2016-03-01 22:27:10');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_02_21_224420_create_login', 1),
('2014_10_12_000000_create_users_table', 2),
('2014_10_12_100000_create_password_resets_table', 2),
('2016_02_24_203903_photo', 3),
('2016_02_25_003720_photo', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` varchar(100) NOT NULL,
  `news_picture` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `news_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `news`, `news_picture`, `section`, `news_message`, `created_at`, `updated_at`) VALUES
(20, 'Награждение за баскетбол', 'basketbol-zastavka.jpg', '', 'Наргаждение                         ', '2016-03-10 22:03:35', '2016-03-10 22:03:35'),
(21, 'Награждение за баскетбол', 'basketbol-zastavka.jpg', '', 'Наргаждение                         ', '2016-03-10 22:03:35', '2016-03-10 22:03:35'),
(22, 'Турнир по хоккею.', 'hockey_stick_and_a_puck.jpg', 'Футбол', '                                                \r\n                                йцукйцксц            ', '2016-03-12 15:30:30', '2016-04-11 18:54:31'),
(23, 'Теннис', 'tennis.jpg', 'Теннис', '                                                \r\n       йцкуйцук                                     ', '2016-03-13 09:11:06', '2016-03-22 15:49:06');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('the_lefthander@mail.ru', '80f80ed8df94206a074a3c26f57925039885fe771b26986f8e22fd6ffad6c41b', '2016-02-23 19:29:52');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name_f` varchar(25) NOT NULL,
  `name_s` varchar(25) NOT NULL,
  `yo` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `about` varchar(300) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `email`, `photo`, `name_f`, `name_s`, `yo`, `city`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(65, 'the4_lefthander@mail.ru', '1Nr0l5CdikQ.jpg', 'Кристина', ' Вихрова ', '23', 'Санкт-Петербург', '', NULL, '2016-02-25 18:27:05', '2016-02-25 18:27:05'),
(66, 'the3_lefthander@mail.ru', 'vbAv6lh8aII.jpg', 'Капитонов', 'Виталий', '22', 'Санкт-Петербург', 'Делаю этот сайтик.........', NULL, '2016-02-27 18:15:30', '2016-03-09 09:58:38'),
(67, 'admin@admin.admin', 'D5VgItaMW8k.jpg', 'Админ', '', '', '', '', NULL, '2016-02-27 19:05:20', '2016-02-27 19:05:20'),
(68, 'admin@admin.admin1', '1.jpg', '', '', '', '', '', NULL, '2016-03-22 17:43:09', '2016-03-22 17:43:09'),
(69, 'qwerty@mail.ru', '1.jpg', '', '', '', '', '', NULL, '2016-04-08 12:27:37', '2016-04-08 12:27:37');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `section_about` text NOT NULL,
  `section_picture` varchar(100) NOT NULL,
  `trainers` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `section_about`, `section_picture`, `trainers`, `created_at`, `updated_at`) VALUES
(1, 'Футбол', '                                                        \r\n                                                    ', '1.jpg', 'Ильин И.И.', '2016-04-11 18:54:30', '2016-04-11 18:54:30'),
(2, 'Волейбол', '                                                                                                                                                                                                                                \r\n                                                    \r\n                                                    \r\n                                                    \r\n                                                    ', '123.jpg', '', '2016-03-22 17:24:07', '2016-03-22 17:24:07'),
(3, 'Теннис', '                                                        \r\n                                                    ', 'tennis.jpg', '', '2016-03-22 15:49:06', '2016-03-22 15:49:06'),
(7, 'Хоккей', 'Готовим хоккеистов для СКА!!!', 'hockey_stick_and_a_puck.jpg', '', '2016-03-03 23:23:32', '2016-03-03 23:23:32'),
(8, 'Баскетбол', '                                                                                                                мяч+кольцо+секта\r\n                                                    \r\n                                                    ', '14131921.jpg', 'Сергеев С.С.,Андреев А.А.', '2016-03-22 15:44:11', '2016-03-22 15:44:11'),
(9, 'Армрестлинг', '                                                                                                                                                                                                                                    Армспорт (Борьба на руках или Армрестлинг; от англ. Arm sport, arm wrestling, где arm — предплечье) — вид борьбы на руках между двумя участниками (вид Спортивных единоборств). Во время матча одноимённые руки соревнующихся ставятся на твёрдую, ровную поверхность (как правило, стол), и ладони сцепляются в замок. Задачей соревнующегося рукоборца является прижатие руки противника к поверхности. На участников поединка накладывается ряд временных, технических и тактических ограничений (см. подробнее: Правила).\r\n\r\nНесмотря на то, что армрестлинг не является олимпийским видом спорта, борьба на руках обладает большой популярностью во многих частях света.\r\n\r\nВ ходе поединка можно выделить следующие фазы: стартовая позиция, достижение преимущества, реализация преимущества.\r\n\r\n                                                    \r\n                                                    \r\n                                                    \r\n                                                    ', '59-1.jpg', 'Лобанов В.В.,Яков Я.Я.,Андреев А.А.,Иванов И.И.,Ильин И.И.,Сергеев С.С.', '2016-04-11 19:29:38', '2016-04-11 19:29:38'),
(10, 'Настольный теннис', 'теннис', '2.jpg', '', '2016-03-06 13:53:14', '2016-03-06 13:53:14');

-- --------------------------------------------------------

--
-- Структура таблицы `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `trainer_name` varchar(100) NOT NULL,
  `trainer_name_first` varchar(100) NOT NULL,
  `trainer_name_second` varchar(100) NOT NULL,
  `trainer_name_third` varchar(100) NOT NULL,
  `trainer_about` text NOT NULL,
  `trainer_picture` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_name`, `trainer_name_first`, `trainer_name_second`, `trainer_name_third`, `trainer_about`, `trainer_picture`, `created_at`, `updated_at`) VALUES
(2, 'Иванов И.И.', 'Иванов', 'Илья', 'Иванович', 'Заслуженный и тд......', '', '2016-03-03 17:57:44', '2016-03-03 17:57:44'),
(3, 'Андреев А.А.', 'Андреев', 'Андрей', 'Андреевич', 'Заслуженный и тд...', '', '2016-03-03 17:58:37', '2016-03-03 17:58:37'),
(4, 'Сергеев С.С.', 'Сергеев', 'Сергей', 'Сергеевич', 'Заслуженный и.....', 'th1WXW3VY0.jpg', '2016-03-03 18:00:13', '2016-03-03 18:00:13'),
(5, 'Ильин И.И.', 'Ильин', 'Илья', 'Ильич', 'проверка', 'eee.jpg', '2016-03-03 18:18:30', '2016-03-03 18:18:30'),
(6, 'Лобанов В.В.', 'Лобанов', 'укйцк', 'цкйцукйцук', '', '', '2016-04-11 19:28:51', '2016-04-11 19:28:51'),
(7, 'Яков Я.Я.', 'Яков', 'Я', 'Я', '', '', '2016-04-11 19:29:21', '2016-04-11 19:29:21');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'admin@admin.admin', 1, '$2y$10$Y9QnLrq.0TNSDjdLaFDRfe0rSW0Z1TXBHopNCd.UIB5u9Ihe0J0pm', 'B0roGYD4PiT6n3N3QiuLX33zYQySiPFPR2BDJ08MgUi7yLtHopZyPSEynMW3', '2016-02-27 19:05:20', '2016-05-19 14:25:24'),
(8, 'qwerty', 'admin@admin.admin1', 0, '$2y$10$3pUNZAqJgy7abrbTh9c.0.45wli8DzDzyK9zdk3P.KjGmOpizAh0e', 'x79JeuqvoRwYBXmNRjlSx5jlJYLm2qCBJCT8oTM5Vek7p2zhBBXbDXptkp6v', '2016-03-22 17:43:09', '2016-03-22 17:44:47'),
(9, 'qwerty', 'qwerty@mail.ru', 0, '$2y$10$U3VSJTt58N.2jQCBdK48He9Llhyk28NVPJa4g2vnw2QclY6Ng3WnC', 'FFJIryxYtllQSrti9sHYbr0ynWl35KeRWM2SGNUPm0W8S3EgSy4cNn7QN0Td', '2016-04-08 12:27:37', '2016-04-08 12:42:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
