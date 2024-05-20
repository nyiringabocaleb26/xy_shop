-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 10:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_02_201257_shopkeeper', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productCode` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productCode`, `productName`, `created_at`, `updated_at`) VALUES
(1, 8545, 'Aidan Sharp', '2024-04-11 09:13:15', '2024-04-11 09:13:15'),
(2, 9598, 'Kitra Olsen', '2024-04-11 09:13:35', '2024-04-11 09:13:35'),
(3, 4887, 'Raja Rowe', '2024-04-11 09:13:46', '2024-04-11 09:13:46'),
(4, 4523, 'Ezra Hinton', '2024-04-11 09:13:56', '2024-04-11 09:13:56'),
(5, 4890, 'Colin Roberts', '2024-04-11 09:16:46', '2024-04-11 09:16:46'),
(6, 2687, 'Bryar Erickson', '2024-04-11 09:16:57', '2024-04-11 09:16:57'),
(7, 3376, 'Mariko Velasquez', '2024-04-11 11:21:16', '2024-04-11 11:21:16'),
(8, 1790, 'Gannon Barry', '2024-04-12 19:20:36', '2024-04-12 19:20:36'),
(9, 1667, 'Elaine Oconnor', '2024-04-14 18:15:46', '2024-04-14 18:15:46'),
(10, 2365, 'Hanna Farley', '2024-04-14 18:16:30', '2024-04-14 18:16:30'),
(11, 2390, 'Hanna', '2024-04-14 18:17:23', '2024-04-14 18:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `productin`
--

CREATE TABLE `productin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Quantity` int(11) NOT NULL,
  `UnitPrice` int(255) DEFAULT NULL,
  `TotalPrice` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productin`
--

INSERT INTO `productin` (`id`, `product_id`, `DateTime`, `Quantity`, `UnitPrice`, `TotalPrice`, `created_at`, `updated_at`, `image`) VALUES
(6, 1790, '2020-10-12 22:00:00', 488, 209, 101992, '2024-04-13 19:36:11', '2024-04-13 19:36:11', 'uploads/202404132136urukweto.jpg'),
(13, 2687, '2015-08-21 22:00:00', 832, 111, 92352, '2024-04-14 16:38:07', '2024-04-14 16:38:07', 'uploads/202404141838urukweto.jpg'),
(14, 4523, '2003-03-01 22:00:00', 434, 261, 113274, '2024-04-14 16:38:18', '2024-04-14 16:38:18', 'uploads/202404141838product.jpg'),
(15, 8545, '1980-02-08 22:00:00', 503, 995, 500485, '2024-04-14 16:39:30', '2024-04-14 16:39:30', 'uploads/202404141839product.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productout`
--

CREATE TABLE `productout` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Quantity` int(11) NOT NULL,
  `UnitPrice` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productout`
--

INSERT INTO `productout` (`id`, `product_id`, `DateTime`, `Quantity`, `UnitPrice`, `TotalPrice`, `image`, `created_at`, `updated_at`) VALUES
(1, 9598, '2020-01-19 22:00:00', 15, 726, 10890, 'uploads/202404132057urukweto.jpg', '2024-04-13 21:32:09', '2024-04-13 21:32:09'),
(2, 8545, '2005-12-13 22:00:00', 249, 170, 42330, 'uploads/202404132058pexels-gustavo-fring-6050440.jpg', '2024-04-13 21:28:58', '2024-04-13 21:28:58'),
(4, 9598, '2024-04-12 22:00:00', 10, 20000, 200000, 'uploads/202404132135pexels-kai-pilger-996329.jpg', '2024-04-13 21:38:03', '2024-04-13 21:38:03'),
(5, 4890, '1983-08-08 22:00:00', 971, 523, 507833, 'uploads/202404132135product.jpg', '2024-04-13 21:38:08', '2024-04-13 21:38:08'),
(7, 2687, '1973-04-09 22:00:00', 232, 155, 35960, 'uploads/202404132136pexels-gustavo-fring-6050440.jpg', '2024-04-14 19:03:38', '2024-04-14 19:03:38'),
(9, 1790, '2021-01-20 22:00:00', 342, 120, 41040, 'uploads/202404132145urukweto.jpg', '2024-04-14 19:04:26', '2024-04-14 19:04:26'),
(10, 4887, '2002-03-05 22:00:00', 944, 190, 179360, 'uploads/202404141713pexels-kai-pilger-996329.jpg', '2024-04-14 18:35:39', '2024-04-14 18:35:39'),
(11, 1790, '1992-04-30 22:00:00', 903, 286, 258258, 'uploads/202404141714product.jpg', '2024-04-14 17:36:39', '2024-04-14 17:36:39'),
(12, 3376, '2018-03-30 22:00:00', 560, 431, 241360, 'uploads/202404141837bg.jpg', '2024-04-14 19:05:34', '2024-04-14 19:05:34'),
(16, 1790, '1976-10-23 22:00:00', 24, 761, 18264, 'uploads/202404141840pexels-kai-pilger-996329.jpg', '2024-04-14 19:08:11', '2024-04-14 19:08:11'),
(17, 9598, '2018-03-22 22:00:00', 712, 594, 422928, 'uploads/202404141840urukweto.jpg', '2024-04-14 19:05:38', '2024-04-14 19:05:38'),
(18, 8545, '1971-11-27 22:00:00', 853, 809, 690077, 'uploads/202404141841bg.jpg', '2024-04-14 18:42:25', '2024-04-14 18:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2b7Of1s8Q423SR6qrZZph6ojujTU2giyqBKITVML', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFVycXhMUDNidWlBcURyajZ5QThnZnl0V2dvWGdadzcxeWtITmZwVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1713125874);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`id`, `Username`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '123456789', '2024-04-04 15:23:21', '2024-04-04 15:23:21'),
(2, 'admin@admin.com', '123456789', '2024-04-04 15:23:49', '2024-04-04 15:23:49'),
(3, 'zufunib', 'Pa$$w0rd!', '2024-04-04 15:25:02', '2024-04-04 15:25:02'),
(4, 'admin@admin.com', '87777675785654646', '2024-04-04 15:25:32', '2024-04-04 15:25:32'),
(5, '98', 'Nesciunt dolore est', '2024-04-04 15:34:23', '2024-04-04 15:34:23'),
(6, 'admin@admin.com', '123456789', '2024-04-04 15:57:50', '2024-04-04 15:57:50'),
(7, 'lycoxy', '$2y$12$Z4RKHTHAY1EHuMURUZJFbe3aYDhE4yYUBgoJ3/NVYT6QA2VDCmQkW', '2024-04-04 16:56:42', '2024-04-04 16:56:42'),
(8, 'piwazenyko', '$2y$12$QBvRw7Ru4uAmH5pQkNGLfO8vsd3PalGItMjdGf0uINUB8rrWsk1RG', '2024-04-04 17:02:20', '2024-04-04 17:02:20'),
(9, 'admin@admin.com', '$2y$12$UzsF6rjNpn6YbJrZXgD0..gjm4bhUnG4jdYcqYDJm2fI35R2SYZnC', '2024-04-04 19:15:49', '2024-04-04 19:15:49'),
(10, 'becujufa', '$2y$12$Yzdr3zo5YpZXX3N7ZpKU9.vDQdsUJ8ipgJQTSWMn1WO7TprNwQ8Fu', '2024-04-04 19:17:19', '2024-04-04 19:17:19'),
(11, 'admin@admin.com', '$2y$12$KNtFb7ocUJ/7rnnx6HUBVemWGyfYXzVkeqIGILtWLD/GUYxi0k6au', '2024-04-04 19:20:29', '2024-04-04 19:20:29'),
(12, 'admin@admin.com', '$2y$12$nzlnmxXsWWASgxupKRgcH.2DfeX1qbsGqsWqrSLIk1eAUzcxYTMum', '2024-04-04 19:56:13', '2024-04-04 19:56:13'),
(13, 'admin@admin.com', '$2y$12$3HyUuT611niajKUlxGrbAe6U1VYYfz08iFgOVYHkKCmBXQ4WBzRIS', '2024-04-04 19:56:30', '2024-04-04 19:56:30'),
(14, 'admin@admin.com', '$2y$12$Pc9hVvU2cSjpvGlI9DfbsuP6NXebzi4lgICnQjr6FgJrL/dBhKCmq', '2024-04-11 06:21:56', '2024-04-11 06:21:56'),
(15, 'admin@admin.com', '$2y$12$cowfiluOFF.9AvMNgdbYyeXYHc5y6RqOluemXU7x1TFTuHz1.//Ya', '2024-04-11 06:22:38', '2024-04-11 06:22:38'),
(16, 'luhakolu', '$2y$12$t5TpPVW5S9F8HFQ14HpqGuZZWKQ0rGk269dbfoM/qFLbVHyCUOame', '2024-04-14 17:10:08', '2024-04-14 17:10:08'),
(17, 'hatevasag', '$2y$12$8uC5SXoS0FRp1Iy99S2xGubTUNW9iUEE5n7N225LSpjR.hnLbvCmy', '2024-04-14 17:10:46', '2024-04-14 17:10:46'),
(18, 'hatevasag', '$2y$12$/bIJYa8gkXYMidqvZ8feiueYlEuZqIia5ItSQLEnVq0LQVpHkdRlq', '2024-04-14 17:11:51', '2024-04-14 17:11:51'),
(19, 'lifoky', '$2y$12$jLRD42OogRJ0HBISpqDibO7MdLrDUOPyjFCyEAPpHEm0TCRwy6CAi', '2024-04-14 17:15:17', '2024-04-14 17:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productin`
--
ALTER TABLE `productin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productin_product_id_index` (`product_id`);

--
-- Indexes for table `productout`
--
ALTER TABLE `productout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productout_product_id_index` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `productin`
--
ALTER TABLE `productin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `productout`
--
ALTER TABLE `productout`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
