-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 юни 2017 в 21:25
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biography` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `authors`
--

INSERT INTO `authors` (`id`, `name`, `img_path`, `biography`, `created_at`, `updated_at`) VALUES
(10, 'James Clavell', 'djames  clavell.jpg', 'James Clavell', '2017-01-12 18:51:51', '2017-01-12 18:51:51'),
(11, 'Stephen King', 'st.JPG', 'Stephen King', '2017-06-11 16:03:23', '2017-06-11 16:03:23'),
(12, 'Isaak Asimov', 'Isaac.Asimov01.jpg', 'Isaak Asimov', '2017-06-11 16:05:55', '2017-06-11 16:05:55'),
(13, 'George Orwell', 'George_Orwell_press_photo.jpg', 'George Orwell', '2017-06-11 16:07:22', '2017-06-11 16:07:22'),
(14, 'Howard Phillips Lovecraft ', 'H._P._Lovecraft,_June_1934.jpg', 'Howard Phillips Lovecraft ', '2017-06-11 16:08:31', '2017-06-11 16:08:31'),
(15, 'Димитър Димов', '01_Dimityr_Dimov.jpg', 'Димитър Димов', '2017-06-11 16:11:20', '2017-06-11 16:11:20');

-- --------------------------------------------------------

--
-- Структура на таблица `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `genre` text NOT NULL,
  `author` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `books`
--

INSERT INTO `books` (`id`, `book_name`, `img_path`, `genre`, `author`, `created_at`, `updated_at`) VALUES
(18, 'The green mile', '1250.max.jpg', 'drama', 'Stephen King', '2017-06-11 13:08:09', '2017-06-11 13:08:09'),
(19, 'The Kite Runner', '2367.max.jpg', 'drama', 'khaled hosseini', '2017-06-11 13:14:28', '2017-06-11 13:14:28'),
(20, 'Hearts in atlantis', '2385.max.jpg', 'drama', 'Stephen King', '2017-06-11 13:16:08', '2017-06-11 13:16:08'),
(21, 'The Lurking Fear', '458.max.jpg', 'horror', 'H.P lovecraft', '2017-06-11 13:22:22', '2017-06-11 13:22:22'),
(22, 'shadow over innsmouth', 'shadow_over_innsmouth_poster_by_gato_chico.jpg', 'horror', 'H.P lovecraft', '2017-06-11 14:00:14', '2017-06-11 14:00:14'),
(23, 'Salem''s lot', 'kniga-seylms-lot_0.jpg', 'horror', 'Stephen King', '2017-06-11 14:01:54', '2017-06-11 14:01:54'),
(24, '1984', '53.max.jpg', 'dystopia', 'George Orwell', '2017-06-11 14:04:54', '2017-06-11 14:04:54'),
(25, 'Белият Гущер', '475.max.jpg', 'dystopia', 'Павел  Вежинов', '2017-06-11 14:07:30', '2017-06-11 14:07:30'),
(26, 'Shooting an elephant', 'no-photo.jpg', 'dystopia', 'George Orwell', '2017-06-11 14:09:22', '2017-06-11 14:09:22'),
(27, 'The end of eternity', '1196.max.jpg', 'Science fantasy', 'Isaac Asimov', '2017-06-11 14:12:21', '2017-06-11 14:12:21'),
(28, 'Dreaming is a private thing', '6974.max.jpg', 'Science Fantasy', 'Isaac Asimov', '2017-06-11 14:16:06', '2017-06-11 14:16:06'),
(29, 'The robots of dawn', '1396.max.jpg', 'Science fantasy', 'Isaac Asimov', '2017-06-11 14:20:25', '2017-06-11 14:20:25');

-- --------------------------------------------------------

--
-- Структура на таблица `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(3, 'Horror'),
(4, 'Science Fantasy'),
(5, 'Drama'),
(6, 'Dystopia');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cenovdenis@gmail.com', '48866ad8588d401dc9ceb3ca6e887a15f58ab0db9d7d474766481f68cfb07184', '2017-06-09 02:58:12');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'user_1', 'cenovdenis@gmail.com', '$2y$10$0t7SG5ChvD.3XYZfA8Ow7ex.6PANrKr1GkXV6lWclLxxuvIAGN55K', 'mybcVtyckfAaS3rYOwGnXtnf1RsA5qGATNmU8dPKrGkvyDSc6NG3MEvPUT9Y', '2017-06-11 16:37:04', '2017-06-11 16:41:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
