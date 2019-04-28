-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 02:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fciflix1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_des` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `created_at`, `updated_at`, `cat_des`) VALUES
(2, 'drama', '2019-03-29 22:00:00', '2019-04-19 10:18:07', 'SAAAAAAAAAAAAAAAAA!!!!!!!!'),
(3, 'comedy', '2019-03-29 22:00:00', '2019-04-19 10:18:20', 'HAHAHAHAHAHAHAHA!!!'),
(4, 'horror', '2019-04-12 16:53:10', '2019-04-12 16:53:10', 'RealllllllllllllllllllllllllllllllyScarrrrrrrrrrrrrry!!!!!!!!!!!!'),
(5, 'sciencefiction', '2019-04-12 16:56:01', '2019-04-12 16:56:01', 'RealllllllllllllllllllllllllllllllyWoooooooooooooooooooooW!!!!!!!!!!!!'),
(6, 'arabic', '2019-04-12 16:57:07', '2019-04-12 16:57:07', 'ReallllllllllllllllllllllllllllllllllyShitttttttttttttttttttttttttttttt!!!!!!'),
(7, 'indea', '2019-04-12 16:58:39', '2019-04-12 16:58:39', 't-badddddddddddddddddddddddd!!!!!!!!!!'),
(8, 'Hollywood', '2019-04-12 17:00:12', '2019-04-12 17:00:12', 'Amaaaaaaaaaaaaaaaaaaaaaaaaaaaaazing!');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2019_03_30_195056_create_category_data_table', 2),
(12, '2019_03_30_211552_create_tests_table', 3),
(13, '2019_03_30_222525_create_movies_data_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mov_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `img_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `mov_name`, `cat_id`, `img_path`, `source_path`, `created_at`, `updated_at`) VALUES
(2, 'Alita: Battle Angel', 2, '71PCt2W7KiL._SY606_.jpg', 'http://thevid.tv/e/ghhovezwdujwvts/', '2019-03-31 00:36:34', '2019-03-31 00:36:34'),
(3, 'Shazam', 5, '1418571730.jpg', 'http://thevid.tv/e/gmzyuydo4klmewq1bm1zxl04/', '2019-04-16 19:07:23', '2019-04-16 19:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hazem', 'hazem.fcih12@gmail.com', NULL, '$2y$10$939q4/LO2wLN4cU6.GqTuuTBOxloLmUYK/3P3CZBLy6jXAIOVyJYe', 'FDP4AgjSPMQ63XN9HHTuiZBKlXxYGbqLIBZcEstnO1xLB2eYRCEB0T9g0EGJ', '2019-03-31 01:02:07', '2019-03-31 01:02:07'),
(2, 'eman', 'eman.fcih@a.com', NULL, '$2y$10$Z/.RxetfaSv0Q1ED.g3e/ujW4UgVN8w7SNbXAvFvMojA0XE2yrnrC', NULL, '2019-03-31 07:34:20', '2019-03-31 07:34:20'),
(3, 'eman tarek 20', 'e@gmail.com', NULL, '$2y$10$2PxaUFv.IGLOVTXgVOepku54WaSfqoAnpQh3CX51WNmVd5Ch.fCYO', NULL, '2019-04-20 20:09:44', '2019-04-22 10:39:13'),
(4, 'radwa', 'radwa@radwa.com', NULL, '$2y$10$5I5UkGTG29spCKxmH2i7vOta4KiC/IHAJ9fzrGTxN4zCP7ix4CUi6', NULL, '2019-04-28 00:48:44', '2019-04-28 00:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`id`, `user_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(11, 4, 2, '2019-04-28 19:52:17', '2019-04-28 19:52:17'),
(12, 4, 2, '2019-04-28 19:52:30', '2019-04-28 19:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_movies` (`movie_id`),
  ADD KEY `FK_users` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `FK_movies` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
