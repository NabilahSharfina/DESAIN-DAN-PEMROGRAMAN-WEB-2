-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_practice_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_04_032359_create_students_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nim`, `name`, `gender`, `department`, `address`, `created_at`, `updated_at`) VALUES
(1, 19104025, 'Nabilah Sharfina', 'P', 'S1 Software Engineering', 'East Java, Indonesia', '2022-01-10 09:36:48', '2022-01-10 10:56:15'),
(3, 19103000, 'William Hopskins', 'L', 'S1 System Information', 'Manchester, United Kingdom', '2022-01-10 10:51:04', '2022-01-22 12:35:05'),
(5, 20102000, 'Stephanie Lee', 'P', 'S1 Informatic Engineering', 'Seoul, South Korea', '2022-01-22 13:18:33', '2022-01-22 13:33:15'),
(6, 18104000, 'Jacob Lee', 'L', 'S1 Software Engineering', 'Queensland, Australia', '2022-01-22 13:27:59', '2022-01-22 13:27:59'),
(7, 18101010, 'Asabeneh', 'L', 'S1 Data Science', 'Helsinki, Finland', '2022-01-23 02:15:33', '2022-01-23 02:18:43'),
(8, 17101020, 'Mona Rizqa', 'P', 'S1 Data Science', 'Bellevue, Washington', '2022-01-23 02:20:58', '2022-01-23 02:20:58'),
(9, 19103010, 'Peter', 'L', 'S1 System Information', 'Wales', '2022-01-23 02:23:01', '2022-01-23 02:23:01'),
(10, 19104040, 'Lucy', 'P', 'S1 Software Engineering', 'London', '2022-01-23 02:23:56', '2022-01-23 02:23:56'),
(11, 20102020, 'Edmund', 'L', 'S1 Informatic Engineering', 'Cambridge', '2022-01-23 02:25:31', '2022-01-23 02:25:31'),
(12, 17102050, 'Susan', 'P', 'S1 Informatic Engineering', 'Birmingham', '2022-01-23 02:26:53', '2022-01-23 02:26:53'),
(13, 17104050, 'Aslan', 'L', 'S1 Software Engineering', 'Barcelona', '2022-01-23 02:28:02', '2022-01-23 02:28:02'),
(14, 20101030, 'Zachary Nelson', 'L', 'S1 Data Science', 'Texas', '2022-01-23 02:29:52', '2022-01-23 02:31:52'),
(16, 18103040, 'Daniel Radcliffe', 'L', 'S1 System Information', 'Boston', '2022-01-23 02:35:06', '2022-01-23 02:35:06'),
(17, 18101060, 'Tom Felton', 'L', 'S1 Data Science', 'Liverpool', '2022-01-23 02:36:22', '2022-01-23 02:36:22'),
(20, 19101030, 'McGonagall', 'P', 'S1 Data Science', 'Madrid', '2022-01-23 06:02:41', '2022-01-23 06:02:41');

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
(1, 'Mr. Merl Gorczany', 'tmoore@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qDF82iosOw', '2022-01-22 15:16:25', '2022-01-22 15:16:25'),
(2, 'Wyman Johnson', 'antone.kozey@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1CjA6WOCkJ', '2022-01-22 15:16:25', '2022-01-22 15:16:25'),
(3, 'Rigoberto Schaden DDS', 'watsica.jermain@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fOhq2sf1Ml', '2022-01-22 15:16:25', '2022-01-22 15:16:25'),
(4, 'Gust Daniel', 'selmer86@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H3xm3t7Bg3', '2022-01-22 15:16:25', '2022-01-22 15:16:25'),
(5, 'Osborne McGlynn', 'rconsidine@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Xx44OZH5TN', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(6, 'Dr. Giovanny Langworth', 'quinn30@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rMGKWCD4EL', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(7, 'Sophia Hamill', 'wilderman.brant@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Xwi0TeMGy7', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(8, 'Estrella Hintz', 'franecki.walter@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nyGUdKp1yS', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(9, 'Velda Jenkins PhD', 'oreilly.lukas@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2n4OOxNTG6', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(10, 'Kelsi Tremblay V', 'thickle@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g27bspzW25', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(11, 'Linnie Strosin', 'freida25@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b7460vV6CH', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(12, 'Rosetta Koss DDS', 'simonis.sadie@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ij6DVmx4gj', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(13, 'Astrid Zemlak', 'avery90@example.org', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nGLq5TUJuT', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(14, 'Luciano Hoeger', 'greenfelder.jared@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1TQbQUxg6a', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(15, 'Alene Shanahan', 'karlee.brekke@example.com', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gFBSLYlakW', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(16, 'Erick Streich', 'solon.rutherford@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LEmblRyLc0', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(17, 'Elliott Reichert', 'mohammed79@example.org', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CmZWJDXJzo', '2022-01-22 15:16:26', '2022-01-22 15:16:26'),
(18, 'Coty Conroy', 'dylan.kunze@example.org', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'G4UOFQr6ap', '2022-01-22 15:16:27', '2022-01-22 15:16:27'),
(19, 'Dr. Albertha Schulist', 'davin.schmeler@example.org', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JQmKXilyRK', '2022-01-22 15:16:27', '2022-01-22 15:16:27'),
(20, 'Dejah Hessel', 'kayden32@example.net', '2022-01-22 15:16:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'phTa3ecs0m', '2022-01-22 15:16:27', '2022-01-22 15:16:27'),
(21, 'Kendrick Zulauf MD', 'walter.aryanna@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BZTmmMX7D0', '2022-01-22 15:27:17', '2022-01-22 15:27:17'),
(22, 'Cory Toy', 'eanderson@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dm81Rqe1WX', '2022-01-22 15:27:17', '2022-01-22 15:27:17'),
(23, 'Jermaine Emmerich', 'amalia.schuppe@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'apyBF80V9y', '2022-01-22 15:27:17', '2022-01-22 15:27:17'),
(24, 'Glenna Mertz', 'qcorwin@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UeJRUuweQg', '2022-01-22 15:27:17', '2022-01-22 15:27:17'),
(25, 'Bethel Rohan I', 'nlarson@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yhjUg3H1kq', '2022-01-22 15:27:17', '2022-01-22 15:27:17'),
(26, 'Dewitt Lockman', 'kareem64@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y2KQFeCVlV', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(27, 'Meghan Schamberger', 'cleta80@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CnyKT559hL', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(28, 'Prof. Valentina Willms', 'lrogahn@example.com', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TPutLq4jGN', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(29, 'Miss Karlie Hahn Jr.', 'amuller@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gWxzMIDFC3', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(30, 'Dr. Duncan Reilly MD', 'ibode@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l3He9rGc3v', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(31, 'Miss Destiny Gleichner IV', 'rweimann@example.com', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bVsAlyNkbd', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(32, 'Miss Elise Schaefer V', 'leola.leffler@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '81t6RHM4Ku', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(33, 'Weston Schoen', 'orie.abbott@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LUQhO40L6L', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(34, 'Mrs. Nannie Ferry I', 'leannon.kallie@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a5ippDD4OY', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(35, 'Devin Bailey', 'astanton@example.com', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z7aBq4wJ4X', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(36, 'Aniya Huel', 'vbayer@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nK3epyyC5i', '2022-01-22 15:27:18', '2022-01-22 15:27:18'),
(37, 'Alfreda Strosin', 'eli.kirlin@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'm8lYtoHKdq', '2022-01-22 15:27:19', '2022-01-22 15:27:19'),
(38, 'Dr. Dayne Mohr PhD', 'adelbert54@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tesmL7KACx', '2022-01-22 15:27:19', '2022-01-22 15:27:19'),
(39, 'Maiya Buckridge DVM', 'runolfsdottir.dessie@example.org', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PmtxDX5yFZ', '2022-01-22 15:27:19', '2022-01-22 15:27:19'),
(40, 'Angus Waelchi', 'dexter34@example.net', '2022-01-22 15:27:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tK4Ezapobj', '2022-01-22 15:27:19', '2022-01-22 15:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
