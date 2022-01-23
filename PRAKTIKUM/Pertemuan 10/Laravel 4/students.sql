-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 12:50 PM
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
(17, 18101060, 'Tom Felton', 'L', 'S1 Data Science', 'Liverpool', '2022-01-23 02:36:22', '2022-01-23 02:36:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
