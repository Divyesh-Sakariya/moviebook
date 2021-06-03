-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 03:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `listmovies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `bio`, `birthdate`, `listmovies`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Akashay Kumar', 'Rajiv Hari Om Bhatia, known professionally as Akshay Kumar, is an India-born naturalised Canadian actor, producer, martial artist and television personality who works in Bollywood,', '1988-05-09', 'Holidays, Gabbar,', '210521120009.jpg', '2021-05-21 06:30:09', '2021-05-21 06:30:09'),
(11, 'Tiger Shroff', 'Jai Hemant \"Tiger\" Shroff is an Indian actor and singer known for his work in Hindi-language action films. The son of actor Jackie Shroff and producer Ayesha Dutt, he made his film debut with the 2014 romantic action film Heropanti.', '1992-02-03', 'Heropanti, Bagghi 2, 3', '210521121327.jpg', '2021-05-21 06:43:27', '2021-05-30 23:56:52'),
(12, 'Johnny Depp', 'John Christopher Depp II is an American actor, producer, and musician. He has been nominated for ten Golden Globe Awards, winning one for Best Actor for Sweeney Todd: The Demon Barber of Fleet Street,', '1988-06-07', 'Fantastic Beasts and Where to Find Them 3, The Flash', '210601054421.jpg', '2021-06-01 00:14:21', '2021-06-01 00:14:21');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_17_131723_create_sessions_table', 1),
(7, '2021_05_18_043011_create_movie_table', 2),
(8, '2021_05_18_045053_create_movie_table', 3),
(9, '2021_05_21_032808_admin', 4),
(10, '2021_05_21_100628_actor', 5),
(11, '2021_05_31_023229_create_theatres_table', 6),
(12, '2021_06_03_061914_create_ticket_books_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `movieposts`
--

CREATE TABLE `movieposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_id` bigint(20) UNSIGNED NOT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movieposts`
--

INSERT INTO `movieposts` (`id`, `t_id`, `m_id`, `created_at`, `updated_at`) VALUES
(1, 6, 5, '2021-05-14 06:55:38', '2021-05-07 06:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `runtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `overview`, `year`, `runtime`, `cast`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Yeh Jawaani Hai Deewani', 'Yeh jawaani hai deewani is truly a treat to watch.Such a masterpiece. The joy that runs through you mind when you enjoy golden days with your best friends.when you don\'t know interacting with people still someone comes to your life,changes the rhythm,makes you fall in love with the most unexpected person and of course yourself too.6 years passed still the love and craze is same! it\'s insanely beautiful.A worth watching movie for all ages. But amidst all of these, i love naina the most.', '2013', '159 Minutes', 'Ranbir Kapoor and Dipika Padukone', 'Yeh Jawaani Hai Deewani 1.jpg', '2021-05-19 06:45:54', '2021-05-18 05:20:59'),
(3, 'Secret Superstar', 'Secret Superstar is a 2017 Indian Hindi-language musical drama film written and directed by Advait Chandan, and produced by Aamir Khan and Kiran Rao under the studio Aamir Khan Productions. The film stars Zaira Wasim, Meher Vij, Raj Arjun and Aamir Khan. ... Wasim won the National Child Award for Exceptional Achievement.', '2017', '150 Minutes', 'Zaira Wasim and Aamir Khan', 'secret superstar.jpg', '2021-05-18 03:46:17', '2021-05-18 05:29:47'),
(4, 'Hichki', 'Hichki ( transl. Hiccup) is a 2018 Indian Hindi drama film, directed by Siddharth P. Malhotra, written by Malhotra, Ankur Chaudhry, Ambar Hadap and Ganesh Pandit, and produced by Maneesh Sharma under the banner Yash Raj Films, with Aditya Chopra serving as presenter.', '2018', '116 Minutes', 'Rani Mukerji', 'hichki.jpg', '2021-05-18 03:51:41', '2021-05-18 05:26:19'),
(5, 'Chhichhore', 'Indian Hindi-language coming of age comedy-drama film directed by Nitesh Tiwari, written by Tiwari in association with Piyush Gupta and Nikhil Mehrotra, and produced by Sajid Nadiadwala under Nadiadwala Grandson Entertainment, with Fox Star Studios acquiring the distribution rights.', '2019', '143 Minutes', 'Sushant Singh Rajput, Shraddha Kapoor and Varun Sharma', 'chhichhore.jpg', '2021-05-18 05:33:50', '2021-05-19 22:10:22'),
(19, 'Radhe - The Most Wanted Bhai', 'Radhe - The Most Wanted Bhai is an adrenaline-pumping action entertainer. The story revolves around the rampant usage of drugs in our society and how the youth are getting destroyed in the bargain. The protagonist is a smart and tough cop with a kind heart and witty personality. He usually likes to do things his way to get justice restored in society. How far RADHE goes to bring justice, clean the streets from drugs to save the youth and to restore peace in society forms the crux of the story.', '2021', '120 Minutes', 'Sushant Singh Rajput, Shraddha Kapoor and Salman bhai', '210520112821.jpg', '2021-05-20 05:58:21', '2021-05-20 07:03:23');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('879MQebygCiQFP0mkLWay9Z6GKFfbjbViMpz9tFq', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR25ES1dZWlpFdWxZS0RZTWRMekRJN3o0Mm9pOTMwRWJaamxaNjRCYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tb3ZpZXBvc3QiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHc1MVNvN2QvcXUzQUVZdGxIVWI3ZHVKYXBJVWM0QUpaZnF5TlJKbGVGa2RUdkFmdGd1RXJxIjt9', 1622725249);

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `price` int(11) NOT NULL,
  `seatsAvailable` int(11) NOT NULL,
  `totalseat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`id`, `name`, `starttime`, `endtime`, `price`, `seatsAvailable`, `totalseat`, `created_at`, `updated_at`) VALUES
(6, 'Balaji Cineplex', '02:21:00', '04:21:00', 120, 20, 50, '2021-05-31 00:21:57', '2021-05-31 00:21:57'),
(7, 'Acropolise', '02:25:00', '04:25:00', 350, 25, 65, '2021-05-31 00:25:19', '2021-05-31 00:25:19'),
(8, 'PVR P1 XL', '12:30:00', '15:00:00', 250, 10, 40, '2021-05-31 05:38:20', '2021-05-31 05:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_books`
--

CREATE TABLE `ticket_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_books`
--

INSERT INTO `ticket_books` (`id`, `name`, `number`, `seats`, `created_at`, `updated_at`) VALUES
(62, 'Divyesh', 2, 'A6,A7', '2021-06-03 04:45:04', '2021-06-03 04:45:04'),
(63, 'Jay', 3, 'C10,C11,C12', '2021-06-03 05:44:44', '2021-06-03 05:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `city`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'Divyesh', '9106264344', 'jetpur', 'admin@admin.com', NULL, '$2y$10$w51So7d/qu3AEYtlHUb7duJapIUc4AJZfqyNRJleFkdTvAftguErq', NULL, NULL, NULL, NULL, NULL, '2021-05-19 07:59:36', '2021-05-19 07:59:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `movieposts`
--
ALTER TABLE `movieposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movieposts_t_id_foreign` (`t_id`),
  ADD KEY `movieposts_m_id_foreign` (`m_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_books`
--
ALTER TABLE `ticket_books`
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
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movieposts`
--
ALTER TABLE `movieposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theatres`
--
ALTER TABLE `theatres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket_books`
--
ALTER TABLE `ticket_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieposts`
--
ALTER TABLE `movieposts`
  ADD CONSTRAINT `movieposts_m_id_foreign` FOREIGN KEY (`m_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movieposts_t_id_foreign` FOREIGN KEY (`t_id`) REFERENCES `theatres` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
