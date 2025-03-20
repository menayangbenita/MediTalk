-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2025 at 04:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','ongoing','completed','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `dokter_id`, `pasien_id`, `transaksi_id`, `status`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(26, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:28', '2025-02-18 17:29:28'),
(27, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:30', '2025-02-18 17:29:30'),
(28, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
(29, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
(30, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
(31, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
(32, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
(33, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
(34, 28, 23, 'ORDER-1739924972-1474', 'ongoing', '2025-02-19 00:30:03', '2025-02-19 01:30:03', '2025-02-18 17:30:03', '2025-02-18 17:30:03'),
(35, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 19:53:56', '2025-02-18 19:53:56'),
(36, 28, 23, 'ORDER-1739933636-8413', 'ongoing', '2025-02-19 02:54:14', '2025-02-19 03:54:14', '2025-02-18 19:54:14', '2025-02-18 19:54:14'),
(37, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 20:00:23', '2025-02-18 20:00:23'),
(38, 28, 23, 'ORDER-1739934023-1627', 'ongoing', '2025-02-19 03:00:47', '2025-02-19 04:00:47', '2025-02-18 20:00:47', '2025-02-18 20:00:47'),
(39, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 22:42:40', '2025-02-18 22:42:40'),
(40, 28, 23, '0', 'pending', NULL, NULL, '2025-02-18 22:44:08', '2025-02-18 22:44:08'),
(41, 28, 23, 'ORDER-1739943848-1625', 'ongoing', '2025-02-19 05:44:39', '2025-02-19 06:44:39', '2025-02-18 22:44:39', '2025-02-18 22:44:39'),
(42, 28, 23, 'ORDER-1739943848-1625', 'ongoing', '2025-02-19 05:44:40', '2025-02-19 06:44:40', '2025-02-18 22:44:40', '2025-02-18 22:44:40'),
(43, 28, 23, '0', 'pending', NULL, NULL, '2025-03-09 21:20:26', '2025-03-09 21:20:26'),
(44, 28, 23, '0', 'pending', NULL, NULL, '2025-03-09 21:21:19', '2025-03-09 21:21:19'),
(45, 28, 23, '0', 'pending', NULL, NULL, '2025-03-10 20:58:56', '2025-03-10 20:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `konsultasi_id` bigint NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `seen` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_files`
--

CREATE TABLE `message_files` (
  `id` bigint UNSIGNED NOT NULL,
  `message_id` bigint UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_02_05_013507_create_sessions_table', 1),
(4, '2025_02_09_164306_create_dokters_table', 2),
(5, '2025_02_13_022445_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_chat`
--

CREATE TABLE `permintaan_chat` (
  `id` int NOT NULL,
  `id_pasien` bigint UNSIGNED DEFAULT NULL,
  `id_dokter` bigint UNSIGNED DEFAULT NULL,
  `status` enum('Menunggu Konfirmasi','Diterima','Ditolak') DEFAULT 'Menunggu Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `anamnesis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanda_vital` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `diagnosis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `medikasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `pasien_id`, `dokter_id`, `tanggal`, `anamnesis`, `tanda_vital`, `diagnosis`, `medikasi`, `created_at`, `updated_at`) VALUES
(4, 23, 28, '2025-02-19', 'Sakit tenggorokan', 'Suhu: 37.5', 'Tonsilitis', 'Paracetamol 300mg', '2025-02-18 17:27:52', '2025-02-18 17:27:52'),
(5, 23, 28, '2025-02-19', 'Sakit tenggorokan', 'Suhu: 37', 'Tonsilitis', 'Paracetamol 500mg', '2025-02-18 22:50:10', '2025-02-18 22:50:10'),
(6, 23, 30, '2025-02-19', 'Sakit tenggorokan', 'Suhu: 37', 'Tonsilitis', 'Paracetamol 500mg', '2025-02-18 22:51:11', '2025-02-18 22:51:11'),
(7, 23, 28, '2025-02-19', 'Sakit batuk', 'Suhu: 38', 'Tonsilitis', 'Paracetamol 500g', '2025-02-18 22:51:48', '2025-02-18 22:51:48'),
(8, 13, 28, '2025-02-13', 'Sakit tenggorokan', 'Suhu: 39', 'Tonsilitis', 'Paracetamol 500mg', '2025-02-18 22:52:41', '2025-02-18 22:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5azSczRL3bAw8vZx4vmr4LdxcdAPMFSi3odJxOoI', 21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY1JiQTV2VXVUamRlc0dhRGFKWGJtelNMM0VFNlhuTWZzN21PblZmdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvTWVkaVRhbGsvcHVibGljL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7fQ==', 1741839326),
('5oj26c1TO89DZcwd6belBknOdRLHMT4I8FkA87iG', 21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiekg3SWc0UnBTZUtIMnM1QXZIcGhMNHo0UE5RNXB3ajB5S0sxSG5kViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdC9NZWRpVGFsay9wdWJsaWMvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvTWVkaVRhbGsvcHVibGljL3Jla2FtbWVkaXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMTt9', 1741840729),
('KoIaMLwYHXMhSiZDhZ11OA3V7XvmHRwIJYLJNitg', 21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlduQU5McEdPNlpBRkE5dVZCd09LVDBUanRqbjAzZUx0Ym83Q2NxdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHA6Ly9saXZpbmctc2FsbW9uLWNvbXBsZXRlbHkubmdyb2stZnJlZS5hcHAvTWVkaVRhbGsvcHVibGljL3Jla2FtbWVkaXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMTt9', 1741838738),
('xe8pL8adzd7dDcpmXXyBG8vAhLBcIWkGtof3yFOo', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjhrZEF6NEFzemFLVlJRQjZxc3VZakZNTHphTFQxVUxkT3k4NTQ0ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3QvTWVkaVRhbGsvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741832297);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(56) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `dokter_id` int NOT NULL,
  `midtrans_order_id` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('pending','success','failed') DEFAULT 'pending',
  `payment_type` varchar(50) DEFAULT NULL,
  `transaction_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `dokter_id`, `midtrans_order_id`, `amount`, `payment_status`, `payment_type`, `transaction_time`, `created_at`, `updated_at`) VALUES
('03b91904-b416-4eb7-87ae-2e2bd221a876', 23, 28, 'ORDER-1739943848-1625', 102000.00, 'pending', NULL, '2025-02-19 12:44:08', '2025-02-18 22:44:08', '2025-02-18 22:44:08'),
('0cf225d1-52d3-44c5-9b00-1f5772503260', 23, 28, 'ORDER-1739924971-8079', 102000.00, 'pending', NULL, '2025-02-19 07:29:31', '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
('14041401-e76a-44dc-b30a-3993c4307099', 13, 25, 'ORDER-1739762603-1533', 82000.00, 'pending', NULL, '2025-02-17 10:23:23', '2025-02-16 20:23:23', '2025-02-16 20:23:23'),
('2d4790de-3059-4766-8e95-479ad431622b', 23, 28, 'ORDER-1739924971-8307', 102000.00, 'pending', NULL, '2025-02-19 07:29:31', '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
('3c4d75a2-7f98-4cad-99da-9057a930162b', 23, 28, 'ORDER-1739924972-1458', 102000.00, 'pending', NULL, '2025-02-19 07:29:32', '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
('4103d029-a864-46cf-b94b-8ca89c5a5143', 13, 26, 'ORDER-1739758807-4153', 12000.00, 'pending', NULL, '2025-02-17 09:20:07', '2025-02-16 19:20:07', '2025-02-16 19:20:07'),
('603f3618-0d1c-4e06-8065-5e432a3cad0e', 23, 25, 'ORDER-1739763322-3568', 82000.00, 'pending', NULL, '2025-02-17 10:35:22', '2025-02-16 20:35:22', '2025-02-16 20:35:22'),
('689f7ffc-6f01-452d-9ec3-f75310aca126', 23, 28, 'ORDER-1739924968-7689', 102000.00, 'pending', NULL, '2025-02-19 07:29:28', '2025-02-18 17:29:28', '2025-02-18 17:29:28'),
('6f693d75-0358-453f-8232-53223db9b701', 23, 28, 'ORDER-1739934023-1627', 102000.00, 'pending', NULL, '2025-02-19 10:00:23', '2025-02-18 20:00:23', '2025-02-18 20:00:23'),
('70561068-28af-4290-86dc-3c208c5b43e0', 23, 28, 'ORDER-1739943760-9356', 102000.00, 'pending', NULL, '2025-02-19 12:42:40', '2025-02-18 22:42:40', '2025-02-18 22:42:40'),
('70a45772-78e7-4cf1-9762-909d99e5de4f', 23, 25, 'ORDER-1739763949-1842', 82000.00, 'pending', NULL, '2025-02-17 10:45:49', '2025-02-16 20:45:49', '2025-02-16 20:45:49'),
('75dd9e4d-7eb3-47db-be77-721accc9a930', 23, 28, 'ORDER-1739924970-9452', 102000.00, 'pending', NULL, '2025-02-19 07:29:30', '2025-02-18 17:29:30', '2025-02-18 17:29:30'),
('7900b8d8-0687-4861-ad9f-626a4237b1e7', 23, 28, 'ORDER-1739924971-3463', 102000.00, 'pending', NULL, '2025-02-19 07:29:31', '2025-02-18 17:29:31', '2025-02-18 17:29:31'),
('79d9e2fe-7082-4640-9238-e576bae7c70c', 13, 26, 'ORDER-1739758788-5192', 12000.00, 'pending', NULL, '2025-02-17 09:19:48', '2025-02-16 19:19:48', '2025-02-16 19:19:48'),
('96d01f31-cd82-422b-b1b3-0f69cba46e69', 23, 26, 'ORDER-1739765582-5589', 12000.00, 'pending', NULL, '2025-02-17 11:13:02', '2025-02-16 21:13:02', '2025-02-16 21:13:02'),
('96eab16e-31d9-4483-91ab-b2c52d8d7031', 23, 28, 'ORDER-1739933636-8413', 102000.00, 'pending', NULL, '2025-02-19 09:53:56', '2025-02-18 19:53:56', '2025-02-18 19:53:56'),
('978aa731-636e-4784-9a2a-08c6e003fc67', 13, 26, 'ORDER-1739758786-7068', 12000.00, 'pending', NULL, '2025-02-17 09:19:46', '2025-02-16 19:19:46', '2025-02-16 19:19:46'),
('a03bface-1101-479e-90cc-e57ede7e6342', 23, 28, 'ORDER-1741580426-4697', 102000.00, 'pending', NULL, '2025-03-10 11:20:26', '2025-03-09 21:20:26', '2025-03-09 21:20:26'),
('a91d559f-544a-415c-a1a6-7d885915bcdd', 23, 26, 'ORDER-1739803538-5600', 12000.00, 'pending', NULL, '2025-02-17 21:45:38', '2025-02-17 07:45:38', '2025-02-17 07:45:38'),
('c738bc5d-5a09-44fa-bd69-8859e4e281ab', 23, 28, 'ORDER-1739924972-1474', 102000.00, 'pending', NULL, '2025-02-19 07:29:32', '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
('d9358b7e-5ee3-4d36-9568-30f6e22fc075', 23, 25, 'ORDER-1739764207-3812', 82000.00, 'pending', NULL, '2025-02-17 10:50:07', '2025-02-16 20:50:07', '2025-02-16 20:50:07'),
('dc168f7d-f8c2-47c2-b66d-32ed37cde1a4', 23, 25, 'ORDER-1739775975-3964', 82000.00, 'pending', NULL, '2025-02-17 14:06:15', '2025-02-17 00:06:15', '2025-02-17 00:06:15'),
('df75b520-b7e4-4e74-93c2-8ef655ae7a26', 23, 28, 'ORDER-1739924972-6737', 102000.00, 'pending', NULL, '2025-02-19 07:29:32', '2025-02-18 17:29:32', '2025-02-18 17:29:32'),
('e8dba58b-8a38-422f-aa48-f153cd54a8eb', 23, 25, 'ORDER-1739763321-6813', 82000.00, 'pending', NULL, '2025-02-17 10:35:21', '2025-02-16 20:35:21', '2025-02-16 20:35:21'),
('e9294cd8-046b-4030-9a68-522b80e2d5bf', 23, 28, 'ORDER-1741665536-6710', 102000.00, 'pending', NULL, '2025-03-11 10:58:56', '2025-03-10 20:58:56', '2025-03-10 20:58:56'),
('f864c365-05b1-4ce4-988f-299715c41d38', 13, 26, 'ORDER-1739758785-4247', 12000.00, 'pending', NULL, '2025-02-17 09:19:45', '2025-02-16 19:19:45', '2025-02-16 19:19:45'),
('fef6ec0e-e492-48fb-8d2a-50770e03f473', 23, 28, 'ORDER-1741580479-3526', 102000.00, 'pending', NULL, '2025-03-10 11:21:19', '2025-03-09 21:21:19', '2025-03-09 21:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rekammedis` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('pasien','dokter','laborat','superadmin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `spesialis` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alumnus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `str` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tempat_praktik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lama_praktik` int DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  `maksimal_chat` int DEFAULT '3',
  `foto` varchar(100) DEFAULT NULL,
  `status_chat` enum('Tersedia','Tidak Tersedia','Menunggu Konfirmasi','Sibuk') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `rekammedis`, `password`, `role`, `spesialis`, `alumnus`, `str`, `tempat_praktik`, `lama_praktik`, `tarif`, `maksimal_chat`, `foto`, `status_chat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'ale', 'menayangbenita@gmail.com', '3649823', '$2y$12$ByElZkG9jYXWnD6/QRX0MOKdJRhNCb6iS.HLPqFSFWQRrmXppKrJK', 'pasien', NULL, '', '', '', NULL, NULL, NULL, NULL, 'Tidak Tersedia', '2025-02-09 07:08:09', '2025-02-09 07:08:09', NULL),
(11, 'jake', 'jake@gmail.com', '12948024', '$2y$12$lgth3Y9Pj4Jw6HmPuNwaxO0oUCfhD4znBvaoq3zlGUpkmBAjfNIMC', 'pasien', NULL, '', '', '', NULL, NULL, NULL, NULL, 'Tidak Tersedia', '2025-02-09 07:43:27', '2025-02-09 07:43:27', NULL),
(13, 'Al Haitham', 'alhaitham@gmail.com', '53879', '$2y$12$wR7kGDjXeLvBRZ5a/mFbj.wTNBpp.TOD0/1y60ETIOBQuyyw9CBBm', 'pasien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Tersedia', '2025-02-09 18:53:28', '2025-02-09 18:53:28', NULL),
(21, 'Kaeya Alberich', 'kaeyaalberich@gmail.com', NULL, '$2y$12$emFsAL/gtRRy9Ax94NcoCuNHRgUozUS0xfSSm4ditlvfshYta6CKy', 'laborat', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'Tidak Tersedia', '2025-02-09 22:12:03', '2025-02-09 22:12:03', NULL),
(23, 'Kaedehara Kazuha', 'kaedeharakazuha@gmail.com', 'NR736493', '$2y$12$YSrGsswjuqTy8RCJHL11lOmewDvkLDFbAS/DXWdcM.QEBrguNAKR6', 'pasien', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'Tidak Tersedia', '2025-02-09 22:26:49', '2025-02-09 22:26:49', NULL),
(24, 'chika', 'misschikasw@gmail.com', '3u49834', '$2y$12$FPUCBxAqE1tqz/i.qsIoX.vrPmQGIFrU/6lOFVxOmEiXrDBMoDHZa', 'pasien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Tersedia', '2025-02-10 21:05:07', '2025-02-10 21:05:07', NULL),
(27, 'Jean', 'jean@gmail.com', NULL, '$2y$12$WDNU69SDIZM47Lqdtn19wuXdeteQeeb07XOFAGyjYw6weL/YAvF9W', 'laborat', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'Tidak Tersedia', '2025-02-16 19:55:30', '2025-02-16 19:55:30', NULL),
(28, 'Dr. Ghina Balqis Rasyidah, Sp.PD-KGEH', 'ghinabrr@gmail.com', NULL, '$2y$12$ZmEir5YYX8ffF8anVVYCcOUFLL6n5SHIxjm9uZSbyQZLzHV.bJDMS', 'dokter', 'Penyakit Dalam', 'Universitas Airlangga', 'GBR37498394729', 'Malang, Jawa Timur', 1, 100000, 3, 'dokter_foto/yu08payxr8UKtXN7XJLrBeSFSNJaimRjr0mFuxvD.png', 'Tersedia', '2025-02-18 00:50:41', '2025-03-09 21:01:51', NULL),
(30, 'Dr. Rea Alfani', 'reaalfani@gmail.com', NULL, '$2y$12$eE4PUMvUF3fLMESKj2bgleZH2sGYFx/0/IBsp22DP.w2VhUaGNla.', 'dokter', 'Bedah Plastik', 'Universitas Airlangga', 'GF8734593788998', 'Surabaya', 3, 200000, 3, 'dokter_foto/3fhmhWIcR8CZHDagv6AbX8neXwFEYtYZUI3XO6Bq.jpg', 'Tidak Tersedia', '2025-02-18 17:25:31', '2025-02-18 17:25:31', NULL),
(31, 'Hana', 'hana@gmail.com', NULL, '$2y$12$rLCxSIpYIgT5vFKXQJnqveHgrnRt/mGZxfpiaTTg0PSgrx7lhGVMW', 'laborat', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 'Tidak Tersedia', '2025-02-18 17:25:53', '2025-02-18 17:25:53', NULL);

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
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsultasi_dokter_id_foreign` (`dokter_id`),
  ADD KEY `konsultasi_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender_id`),
  ADD KEY `receiver` (`receiver_id`);

--
-- Indexes for table `message_files`
--
ALTER TABLE `message_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_id` (`message_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan_chat`
--
ALTER TABLE `permintaan_chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien` (`pasien_id`),
  ADD KEY `dokter` (`dokter_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `midtrans_order_id` (`midtrans_order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message_files`
--
ALTER TABLE `message_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permintaan_chat`
--
ALTER TABLE `permintaan_chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `konsultasi_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `receiver` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sender` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `dokter` FOREIGN KEY (`dokter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasien` FOREIGN KEY (`pasien_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
