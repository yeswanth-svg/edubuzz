-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 11:57 AM
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
-- Database: `edubuzz`
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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(10, 'Grade PRE-K', 'grade-pre-k', '2024-10-29 23:52:45', '2024-10-29 23:52:45'),
(11, 'Grade K', 'grade-k', '2024-10-29 23:52:58', '2024-10-29 23:52:58'),
(12, 'Grade 1', 'grade-1', '2024-10-29 23:53:08', '2024-10-29 23:53:08'),
(13, 'Grade 2', 'grade-2', '2024-10-29 23:53:21', '2024-10-29 23:53:21');

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
(4, '2024_10_28_062836_create_grades_table', 1),
(5, '2024_10_28_062901_create_subject_table', 1),
(6, '2024_10_28_062932_create_topic_table', 1),
(7, '2024_10_28_063242_create_subtopic_table', 1),
(9, '2024_10_29_064647_create_worksheets_table', 2);

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
('KdOslrJe00XY5ndZgluhJvSa2Ub2Yzmk8i3eGT3N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEdiVHpaYkVPbk1YSG14TlFRMHlMYnZhSXZhbHQwZXQyMTVaT2E1UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730717841),
('nUetsnyZO3Ld5LdjQwIGcQsQl2lJpRtnTjoH98pz', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkJkbGhBU2pzUk56WXZZc0tVNFJhbW5LaHIxUzR3b0lEdUttVVBReSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zdWJ0b3BpY3MvMjgvd29ya3NoZWV0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1730717434),
('PVLsbt8WAs92idVkQvvIFvCCVTPfbUoTz156b9dP', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWXZ6dkplQUxZRmZYdUU3aUZrckFnMDhyeEwzZ0x5VUJYOVFna241VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1730712994);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `grade_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(5, 10, 'English', 'english', '2024-10-29 23:56:55', '2024-10-29 23:56:55'),
(6, 10, 'Math', 'math', '2024-10-29 23:57:05', '2024-10-29 23:58:47'),
(7, 10, 'Science', 'science', '2024-10-29 23:57:18', '2024-10-29 23:57:18'),
(8, 11, 'English', 'english', '2024-10-29 23:57:37', '2024-10-29 23:57:46'),
(9, 11, 'Math', 'math-2', '2024-10-29 23:57:55', '2024-10-29 23:58:52'),
(10, 11, 'Science', 'science', '2024-10-29 23:58:07', '2024-10-29 23:58:07'),
(11, 12, 'English', 'english', '2024-10-29 23:58:22', '2024-10-29 23:58:22'),
(12, 12, 'Math', 'math-2', '2024-10-29 23:58:31', '2024-10-29 23:58:58'),
(13, 13, 'English', 'english-3', '2024-10-29 23:58:40', '2024-10-29 23:59:11'),
(14, 13, 'Math', 'math', '2024-10-29 23:59:20', '2024-10-29 23:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `subtopics`
--

CREATE TABLE `subtopics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subtopics`
--

INSERT INTO `subtopics` (`id`, `topic_id`, `name`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 10, 'Match Alphabet Fruits', 'match-alphabet-fruits', 'build/subtopics_thumbnails/1730268203_A_Match-alphabet-fruits-a to e.jpg', '2024-10-30 00:33:23', '2024-10-30 00:33:23'),
(5, 10, 'Match letters', 'match-letters', 'build/subtopics_thumbnails/1730268226_A_Match-upper-and-lowercase-letters-thumb_a to e.jpg', '2024-10-30 00:33:46', '2024-10-30 00:33:46'),
(6, 10, 'Recognize letters', 'recognize-letters', 'build/subtopics_thumbnails/1730268248_A_Recognize-letter-question_a.jpg', '2024-10-30 00:34:08', '2024-10-30 00:34:08'),
(7, 14, 'Find the Same', 'find-the-same', 'build/subtopics_thumbnails/1730268284_1_A_Find-the-Same.jpg', '2024-10-30 00:34:44', '2024-10-30 00:34:44'),
(8, 14, 'Find the Different', 'find-the-different', 'build/subtopics_thumbnails/1730268314_5_A_Find-the-Odd-one.jpg', '2024-10-30 00:35:14', '2024-10-30 00:35:14'),
(9, 20, 'Farm Animals', 'farm-animals', 'build/subtopics_thumbnails/1730268358_A_Farm-Animals.jpg', '2024-10-30 00:35:58', '2024-10-30 00:35:58'),
(10, 20, 'Wild Animals', 'wild-animals', 'build/subtopics_thumbnails/1730268391_A_Wild-Animals.jpg', '2024-10-30 00:36:31', '2024-10-30 00:36:31'),
(11, 26, 'Missing Letters', 'missing-letters', 'build/subtopics_thumbnails/1730268441_1_A_Missing-Letters-K.jpg', '2024-10-30 00:37:21', '2024-10-30 00:37:21'),
(12, 26, 'Color by Letter', 'color-by-letter', 'build/subtopics_thumbnails/1730268463_1_A_Color-by-Letter-K.jpg', '2024-10-30 00:37:43', '2024-10-30 00:37:43'),
(13, 27, 'Articles', 'articles', 'build/subtopics_thumbnails/1730268504_1_A_Articles.jpg', '2024-10-30 00:38:24', '2024-10-30 00:38:24'),
(14, 39, 'Color by addition', 'color-by-addition', 'build/subtopics_thumbnails/1730268584_A_color-by-addition-1.jpg', '2024-10-30 00:39:44', '2024-10-30 00:39:44'),
(15, 39, 'Add numbers', 'add-numbers', 'build/subtopics_thumbnails/1730268605_2_A_Addition.jpg', '2024-10-30 00:40:05', '2024-10-30 00:40:05'),
(16, 47, 'Wild Animals', 'wild-animals', 'build/subtopics_thumbnails/1730268688_1_A_Wild-Animals1.jpg', '2024-10-30 00:41:13', '2024-10-30 00:41:28'),
(17, 47, 'Animal Food', 'animal-food', 'build/subtopics_thumbnails/1730268719_1_A_Animal-Food.png', '2024-10-30 00:41:59', '2024-10-30 00:41:59'),
(18, 49, 'Identify Adjectives', 'identify-adjectives', 'build/subtopics_thumbnails/1730268767_1_A_Identify-Adjectives.jpg', '2024-10-30 00:42:47', '2024-10-30 00:42:47'),
(19, 49, 'Opposite Adjectives', 'opposite-adjectives', 'build/subtopics_thumbnails/1730268789_1_A_Opposite-adjectives.jpg', '2024-10-30 00:43:09', '2024-10-30 00:43:09'),
(20, 51, 'Add numbers', 'add-numbers', 'build/subtopics_thumbnails/1730268839_A_1_Addition_sentences_sums_upto_20.jpg', '2024-10-30 00:43:59', '2024-10-30 00:43:59'),
(21, 51, 'Addition sentences', 'addition-sentences', 'build/subtopics_thumbnails/1730268870_A_1_Addition-sentences-associativity.jpg', '2024-10-30 00:44:30', '2024-10-30 00:44:30'),
(22, 54, 'Identify Adjectives', 'identify-adjectives', 'build/subtopics_thumbnails/1730268914_A_1_Identify-adjectives.jpg', '2024-10-30 00:45:14', '2024-10-30 00:45:14'),
(23, 54, 'Use adjectives', 'use-adjectives', 'build/subtopics_thumbnails/1730268928_A_1_Use-adjectives.jpg', '2024-10-30 00:45:28', '2024-10-30 00:45:28'),
(24, 57, 'Repeated Addition Arrays', 'repeated-addition-arrays', 'build/subtopics_thumbnails/1730268971_A_1_Arrangements-of-rows-and-columns.jpg', '2024-10-30 00:46:11', '2024-10-30 00:46:11'),
(25, 57, 'Numbers in Unit Form', 'numbers-in-unit-form', 'build/subtopics_thumbnails/1730269008_A_1_Expanded-numbers-in-unit-form.jpg', '2024-10-30 00:46:31', '2024-10-30 00:46:48'),
(28, 63, 'Color by addition', 'color-by-addition', 'build/subtopics_thumbnails/1730717135_color-by-addition-1.jpg', '2024-11-04 05:15:35', '2024-11-04 05:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subject_id`, `name`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(10, 5, 'Alphabets', 'alphabets', 'build/topics_thumbnails/1730266353_alphabets.jpg', '2024-10-30 00:02:33', '2024-10-30 00:02:33'),
(11, 5, 'Phonics', 'phonics', 'build/topics_thumbnails/1730266382_phonics.png', '2024-10-30 00:03:02', '2024-10-30 00:03:02'),
(12, 5, 'Vocabulary', 'vocabulary', 'build/topics_thumbnails/1730266405_vocabulary.png', '2024-10-30 00:03:25', '2024-10-30 00:03:25'),
(13, 5, 'Writing', 'writing', 'build/topics_thumbnails/1730266437_writing.png', '2024-10-30 00:03:57', '2024-10-30 00:03:57'),
(14, 6, 'Classification', 'classification', 'build/topics_thumbnails/1730266480_classification.jpg', '2024-10-30 00:04:40', '2024-10-30 00:04:40'),
(15, 6, 'Connect the Dots', 'connect-the-dots', 'build/topics_thumbnails/1730266523_connect-the-dots.jpg', '2024-10-30 00:05:23', '2024-10-30 00:05:23'),
(16, 6, 'counting', 'counting', 'build/topics_thumbnails/1730266544_counting.png', '2024-10-30 00:05:44', '2024-10-30 00:05:44'),
(17, 6, 'Measurements', 'measurements', 'build/topics_thumbnails/1730266570_measurements.jpg', '2024-10-30 00:06:10', '2024-10-30 00:06:10'),
(18, 6, 'Numbers', 'numbers', 'build/topics_thumbnails/1730266595_numbers.png', '2024-10-30 00:06:35', '2024-10-30 00:06:35'),
(19, 6, 'Shapes', 'shapes', 'build/topics_thumbnails/1730266616_shapes-wksht.jpg', '2024-10-30 00:06:56', '2024-10-30 00:06:56'),
(20, 7, 'Animals', 'animals', 'build/topics_thumbnails/1730266642_animals.png', '2024-10-30 00:07:22', '2024-10-30 00:07:22'),
(21, 7, 'Birds and Insects', 'birds-and-insects', 'build/topics_thumbnails/1730266655_birds-insects.png', '2024-10-30 00:07:35', '2024-10-30 00:07:35'),
(22, 7, 'Colors', 'colors', 'build/topics_thumbnails/1730266675_colors.png', '2024-10-30 00:07:55', '2024-10-30 00:07:55'),
(23, 7, 'Fruits and Vegetables', 'fruits-and-vegetables', 'build/topics_thumbnails/1730266688_fruits-vegetables.png', '2024-10-30 00:08:08', '2024-10-30 00:08:08'),
(24, 7, 'Humans', 'humans', 'build/topics_thumbnails/1730266729_humans.png', '2024-10-30 00:08:49', '2024-10-30 00:08:49'),
(25, 7, 'Transportation', 'transportation', 'build/topics_thumbnails/1730266745_Transportation.png', '2024-10-30 00:09:05', '2024-10-30 00:09:05'),
(26, 8, 'Alphabets', 'alphabets', 'build/topics_thumbnails/1730266797_alphabets.jpg', '2024-10-30 00:09:57', '2024-10-30 00:09:57'),
(27, 8, 'Articles', 'articles', 'build/topics_thumbnails/1730266862_articles.png', '2024-10-30 00:11:02', '2024-10-30 00:11:02'),
(28, 8, 'Blends and Digraphs', 'blends-and-digraphs', 'build/topics_thumbnails/1730266904_blends-digraphs.png', '2024-10-30 00:11:44', '2024-10-30 00:11:44'),
(29, 8, 'Compound Words', 'compound-words', 'build/topics_thumbnails/1730266954_compound-words.png', '2024-10-30 00:12:34', '2024-10-30 00:12:34'),
(30, 8, 'Consonants', 'consonants', 'build/topics_thumbnails/1730266974_consonants.png', '2024-10-30 00:12:54', '2024-10-30 00:12:54'),
(31, 8, 'Homophones', 'homophones', 'build/topics_thumbnails/1730266993_homophones.png', '2024-10-30 00:13:13', '2024-10-30 00:13:13'),
(32, 8, 'Nouns', 'nouns', 'build/topics_thumbnails/1730267014_nouns.png', '2024-10-30 00:13:34', '2024-10-30 00:13:34'),
(33, 8, 'Phonics', 'phonics', 'build/topics_thumbnails/1730267030_phonics.png', '2024-10-30 00:13:50', '2024-10-30 00:13:50'),
(34, 8, 'Prepositions', 'prepositions', 'build/topics_thumbnails/1730267046_prepositions.png', '2024-10-30 00:14:06', '2024-10-30 00:14:06'),
(35, 8, 'Pronouns', 'pronouns', 'build/topics_thumbnails/1730267067_pronouns.png', '2024-10-30 00:14:27', '2024-10-30 00:14:27'),
(36, 8, 'Vocabulary', 'vocabulary', 'build/topics_thumbnails/1730267088_vocabulary.png', '2024-10-30 00:14:48', '2024-10-30 00:14:48'),
(37, 8, 'vowels', 'vowels', 'build/topics_thumbnails/1730267105_vowels.png', '2024-10-30 00:15:05', '2024-10-30 00:15:05'),
(38, 8, 'Writing', 'writing', 'build/topics_thumbnails/1730267126_writing.png', '2024-10-30 00:15:26', '2024-10-30 00:15:26'),
(39, 9, 'addition', 'addition', 'build/topics_thumbnails/1730267204_addition.png', '2024-10-30 00:16:44', '2024-10-30 00:16:44'),
(40, 9, 'Classification', 'classification', 'build/topics_thumbnails/1730267218_classification.jpg', '2024-10-30 00:16:58', '2024-10-30 00:16:58'),
(41, 9, 'counting', 'counting', 'build/topics_thumbnails/1730267233_counting.png', '2024-10-30 00:17:13', '2024-10-30 00:17:13'),
(42, 9, 'Measurements', 'measurements', 'build/topics_thumbnails/1730267251_measurements.jpg', '2024-10-30 00:17:31', '2024-10-30 00:17:31'),
(43, 9, 'Numbers', 'numbers', 'build/topics_thumbnails/1730267267_numbers.png', '2024-10-30 00:17:48', '2024-10-30 00:17:48'),
(44, 9, 'Shapes', 'shapes', 'build/topics_thumbnails/1730267280_shapes-wksht.jpg', '2024-10-30 00:18:00', '2024-10-30 00:18:00'),
(45, 9, 'subtraction', 'subtraction', 'build/topics_thumbnails/1730267312_subtraction.png', '2024-10-30 00:18:32', '2024-10-30 00:18:32'),
(46, 9, 'Time', 'time', 'build/topics_thumbnails/1730267327_time.png', '2024-10-30 00:18:47', '2024-10-30 00:18:47'),
(47, 10, 'Animals', 'animals', 'build/topics_thumbnails/1730267348_animals.png', '2024-10-30 00:19:08', '2024-10-30 00:19:08'),
(48, 10, 'Birds and Insects', 'birds-and-insects', 'build/topics_thumbnails/1730267363_birds-insects.png', '2024-10-30 00:19:23', '2024-10-30 00:19:23'),
(49, 11, 'Adjectives', 'adjectives', 'build/topics_thumbnails/1730267401_adjectives.jpg', '2024-10-30 00:20:01', '2024-10-30 00:20:01'),
(50, 11, 'Articles', 'articles', 'build/topics_thumbnails/1730267414_articles.png', '2024-10-30 00:20:14', '2024-10-30 00:20:14'),
(51, 12, 'Addition', 'addition', 'build/topics_thumbnails/1730267438_addition.png', '2024-10-30 00:20:38', '2024-10-30 00:20:38'),
(52, 12, 'Charts and Graphs', 'charts-and-graphs', 'build/topics_thumbnails/1730267469_charts-graphs.jpg', '2024-10-30 00:21:09', '2024-10-30 00:21:09'),
(53, 12, 'Comparing', 'comparing', 'build/topics_thumbnails/1730267480_comparing.jpg', '2024-10-30 00:21:20', '2024-10-30 00:21:20'),
(54, 13, 'Adjectives', 'adjectives', 'build/topics_thumbnails/1730267510_adjectives.jpg', '2024-10-30 00:21:50', '2024-10-30 00:21:50'),
(55, 13, 'Adverbs', 'adverbs', 'build/topics_thumbnails/1730267530_adverbs.jpg', '2024-10-30 00:22:10', '2024-10-30 00:22:10'),
(56, 13, 'grammar', 'grammar', 'build/topics_thumbnails/1730267558_grammar.png', '2024-10-30 00:22:38', '2024-10-30 00:22:38'),
(57, 14, 'addition', 'addition', 'build/topics_thumbnails/1730267577_addition.png', '2024-10-30 00:22:57', '2024-10-30 00:22:57'),
(58, 14, 'Charts and Graphs', 'charts-and-graphs', 'build/topics_thumbnails/1730267589_charts-graphs.jpg', '2024-10-30 00:23:09', '2024-10-30 00:23:09'),
(59, 14, 'counting', 'counting', 'build/topics_thumbnails/1730267607_counting.png', '2024-10-30 00:23:27', '2024-10-30 00:23:27'),
(60, 13, 'test', 'test', 'build/topics_thumbnails/1730278304_grades.png', '2024-10-30 03:21:44', '2024-10-30 03:21:44'),
(63, 6, 'Color by addition', 'color-by-addition', 'build/topics_thumbnails/1730717105_color-by-addition-1.jpg', '2024-11-04 05:15:05', '2024-11-04 05:15:05');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$IWxQL4fXjQBUkz64sveZm.E89hcspIbmHnXva0zUiKr/TwVtKRMsS', NULL, '2024-10-28 02:30:19', '2024-10-28 02:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `worksheets`
--

CREATE TABLE `worksheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtopic_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worksheets`
--

INSERT INTO `worksheets` (`id`, `subtopic_id`, `name`, `slug`, `description`, `thumbnail`, `file_path`, `created_at`, `updated_at`) VALUES
(10, 25, 'Expanded Number in Unit Form', 'expanded-number-in-unit-form', 'This is the description of the Expanded Number in Unit Form', 'build/worksheets/thumbnails/1730269088_1_Expanded-numbers-in-unit-form.jpg', 'build/worksheets/1730269088_1_Expanded-numbers-in-unit-form.pdf', '2024-10-30 00:48:08', '2024-10-30 00:48:08'),
(11, 10, 'Wild Animals', 'wild-animals', 'description', 'build/worksheets/thumbnails/1730269992_A_Wild-Animals.jpg', 'build/worksheets/1730269992_Wild-Animals.pdf', '2024-10-30 01:03:12', '2024-10-30 01:03:12'),
(12, 9, 'Farm Animals', 'farm-animals', 'description', 'build/worksheets/thumbnails/1730270404_A_Farm-Animals.jpg', 'build/worksheets/1730270404_Farm-Animals.pdf', '2024-10-30 01:10:04', '2024-10-30 01:10:04'),
(13, 4, 'Match Alphabet Fruits a to e', 'match-alphabet-fruits-a-to-e', 'Match Alphabet Fruits a to e', 'build/worksheets/thumbnails/1730270484_Match-alphabet-fruits-a to e.jpg', 'build/worksheets/1730270484_Match-alphabet-fruits-a to e.pdf', '2024-10-30 01:11:24', '2024-10-30 01:11:24'),
(14, 5, 'Match upper and lowercase letters a to e', 'match-upper-and-lowercase-letters-a-to-e', 'Match upper and lowercase letters a to e', 'build/worksheets/thumbnails/1730270545_Match-upper-and-lowercase-letters-thumb_a to e.jpg', 'build/worksheets/1730270546_Match-upper-and-lowercase-letters-question_a to e.pdf', '2024-10-30 01:12:26', '2024-10-30 01:12:26'),
(15, 6, 'Recognize letter A', 'recognize-letter-a', 'Recognize letter A', 'build/worksheets/thumbnails/1730270738_Recognize-letter-question_a.jpg', 'build/worksheets/1730270721_Recognize-letter-question_a.pdf', '2024-10-30 01:15:21', '2024-10-30 01:15:38'),
(16, 7, 'Find the Same', 'find-the-same', 'Find the Same', 'build/worksheets/thumbnails/1730270792_1_A_Find-the-Same.jpg', 'build/worksheets/1730270792_1_Find-the-Same.pdf', '2024-10-30 01:16:32', '2024-10-30 01:16:32'),
(17, 8, 'Find the Odd One', 'find-the-odd-one', 'Find the Odd One', 'build/worksheets/thumbnails/1730270829_5_A_Find-the-Odd-one.jpg', 'build/worksheets/1730270829_5_Find-the-Odd-one.pdf', '2024-10-30 01:17:09', '2024-10-30 01:17:09'),
(18, 11, 'Missing Letters', 'missing-letters', 'Missing Letters', 'build/worksheets/thumbnails/1730270923_1_A_Missing-Letters-K.jpg', 'build/worksheets/1730270923_1_Missing-Letters.pdf', '2024-10-30 01:18:43', '2024-10-30 01:18:43'),
(19, 12, 'Color by Letter', 'color-by-letter', 'Color by Letter', 'build/worksheets/thumbnails/1730271035_1_Color-by-Letter.jpg', 'build/worksheets/1730271035_1_Color-by-Letter.pdf', '2024-10-30 01:20:35', '2024-10-30 01:20:35'),
(20, 13, 'Articles', 'articles', 'Articles', 'build/worksheets/thumbnails/1730271181_1_A_Articles.jpg', 'build/worksheets/1730271181_1_Articles.pdf', '2024-10-30 01:23:01', '2024-10-30 01:23:01'),
(21, 14, 'Color by addition', 'color-by-addition', 'Color by addition', 'build/worksheets/thumbnails/1730271251_color-by-addition-1.jpg', 'build/worksheets/1730271251_color-by-addition-1.pdf', '2024-10-30 01:24:11', '2024-10-30 01:24:11'),
(22, 18, 'Identify Adjectives', 'identify-adjectives', 'Identify Adjectives', 'build/worksheets/thumbnails/1730271590_1_A_Identify-Adjectives.jpg', 'build/worksheets/1730271590_1_Identify-adjectives.pdf', '2024-10-30 01:29:50', '2024-10-30 01:29:50'),
(23, 20, 'Fill the missing number', 'fill-the-missing-number', 'Fill the missing number', 'build/worksheets/thumbnails/1730271682_1_Additions.jpg', 'build/worksheets/1730271682_1_Additions.pdf', '2024-10-30 01:31:22', '2024-10-30 01:31:22'),
(24, 22, 'Circle the adjectives', 'circle-the-adjectives', 'Circle the adjectives', 'build/worksheets/thumbnails/1730271750_1_Identify-adjectives.jpg', 'build/worksheets/1730271750_1_Identify-adjectives.pdf', '2024-10-30 01:32:30', '2024-10-30 01:32:30'),
(25, 24, 'Arrangement of Rows and coloumns', 'arrangement-of-rows-and-coloumns', 'Arrangement of Rows and coloumns', 'build/worksheets/thumbnails/1730271919_1_Arrangements-of-rows-and-columns.jpg', 'build/worksheets/1730271919_1_Arrangements-of-rows-and-columns.pdf', '2024-10-30 01:35:19', '2024-10-30 01:35:19'),
(26, 4, 'Match Alphabet Fruits f to j', 'match-alphabet-fruits-f-to-j', 'Match Alphabet Fruits f to j', 'build/worksheets/thumbnails/1730462185_Match-alphabet-fruits-f to j.jpg', 'build/worksheets/1730462185_Match-alphabet-fruits-f to j.pdf', '2024-11-01 06:26:25', '2024-11-01 06:26:25'),
(27, 15, 'Add numbers', 'add-numbers', 'Add numbers', 'build/worksheets/thumbnails/1730712991_Match-alphabet-fruits-f to j.jpg', 'build/worksheets/1730712991_Match-alphabet-fruits-f to j.pdf', '2024-11-04 04:06:31', '2024-11-04 04:06:31'),
(31, 28, 'Color by addition', 'color-by-addition', 'Color by Addition', 'build/worksheets/thumbnails/1730717200_color-by-addition-1.jpg', 'build/worksheets/1730717200_color-by-addition-1.pdf', '2024-11-04 05:16:40', '2024-11-04 05:16:40'),
(32, 28, 'Color by addition', 'color-by-addition', 'Color by Addition', 'build/worksheets/thumbnails/1730717434_color-by-addition-2.jpg', 'build/worksheets/1730717434_color-by-addition-2.pdf', '2024-11-04 05:20:34', '2024-11-04 05:20:34');

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
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_grade_id_foreign` (`grade_id`);

--
-- Indexes for table `subtopics`
--
ALTER TABLE `subtopics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtopics_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `worksheets`
--
ALTER TABLE `worksheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worksheets_subtopic_id_foreign` (`subtopic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subtopics`
--
ALTER TABLE `subtopics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worksheets`
--
ALTER TABLE `worksheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subtopics`
--
ALTER TABLE `subtopics`
  ADD CONSTRAINT `subtopics_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `worksheets`
--
ALTER TABLE `worksheets`
  ADD CONSTRAINT `worksheets_subtopic_id_foreign` FOREIGN KEY (`subtopic_id`) REFERENCES `subtopics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
