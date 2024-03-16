-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 11:27 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arma`
--

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
(1, 'Rahim uddin', 'admin@gmail.com', NULL, '$2y$10$mSOSucNfiaHihAzzz8Ud3OTlZMRDw37grHlKahB4j9qcfFTiS1uzK', NULL, '2024-03-16 03:09:10', '2024-03-16 03:09:10'),
(2, 'atik', 'atik@gmail.com', NULL, '$2y$10$9ktl0u.jrJmj0MDiWmPNJuVpUMq0S3qre3ekpM1QvFJVbQ5xIy06q', NULL, '2024-03-16 03:24:01', '2024-03-16 03:24:01'),
(3, 'SHANJOY DAS SHANJIT', 'shanjit@gmail.com', NULL, '$2y$10$838Xbk2Dqi6/tdy.scv5p.D7shpYhBeEWXxgxWeiEyYnWaVmkg3le', NULL, '2024-03-16 03:43:12', '2024-03-16 03:43:12'),
(4, 'tawfiq', 'tawfiq@gmail.com', NULL, '$2y$10$EL4WIn7hp97SUrRJ8XQekOcE7cIK2McZCBOhiHtGv27cUKo4qCNH6', NULL, '2024-03-16 04:14:07', '2024-03-16 04:14:07'),
(5, 'tamim', 'tamim@gmail.com', NULL, '$2y$10$90xMdEw4aAyNoP9NbiZqK.9NplLsoBaI0oYpGbyhgG6nfVrjUJbxK', NULL, '2024-03-16 04:24:54', '2024-03-16 04:24:54'),
(6, 'sakib', 'sakib@gmail.com', NULL, '$2y$10$MD3n1mFZGHre9VSnWl3ZQOeqaqMB9dsyCNSley57VVyHkVqCBvrqm', NULL, '2024-03-16 04:25:40', '2024-03-16 04:25:40');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
