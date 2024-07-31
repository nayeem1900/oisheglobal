-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 03:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oisheglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2024-07-13 06:31:59', '2024-07-27 13:47:58'),
(3, 'bagura', '2024-07-25 23:38:22', '2024-07-25 23:38:22'),
(4, 'dinajpur', '2024-07-25 23:41:29', '2024-07-25 23:41:29'),
(6, 'Coxs Bazar', '2024-07-25 23:43:16', '2024-07-25 23:43:16'),
(7, 'Sylhet', '2024-07-28 09:18:33', '2024-07-28 09:18:33'),
(9, 'Sylhetr', '2024-07-28 09:21:57', '2024-07-28 09:21:57'),
(12, 'dinajpurjj', '2024-07-28 09:26:01', '2024-07-28 09:26:01'),
(14, 'dinajpurjjsss', '2024-07-28 09:28:46', '2024-07-28 09:28:46'),
(15, 'Naraygonj', '2024-07-28 09:31:51', '2024-07-28 09:31:51'),
(16, 'khulna', '2024-07-28 09:37:55', '2024-07-28 09:37:55'),
(17, 'Head Office', '2024-07-30 04:26:36', '2024-07-30 04:26:36');

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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladeshi', '2024-07-13 07:50:25', '2024-07-13 08:10:25'),
(3, 'srilankar', '2024-07-13 07:55:08', '2024-07-13 08:14:43'),
(4, 'Austriliaa', '2024-07-13 07:56:09', '2024-07-13 07:57:51'),
(5, 'Denmark', '2024-07-13 07:58:11', '2024-07-13 07:58:11'),
(7, 'Soudiarab', '2024-07-13 07:59:59', '2024-07-13 07:59:59'),
(8, 'UAE', '2024-07-13 08:06:32', '2024-07-13 08:06:32'),
(10, 'USA', '2024-07-13 08:08:27', '2024-07-13 08:08:27'),
(11, 'Argentina', '2024-07-13 08:15:05', '2024-07-13 08:15:05'),
(13, 'Brazil', '2024-07-13 08:18:14', '2024-07-13 08:18:14'),
(14, 'japan', '2024-07-25 23:37:45', '2024-07-25 23:37:45'),
(15, 'fff', '2024-07-28 09:44:37', '2024-07-28 09:44:37'),
(16, 'Afganistan', '2024-07-30 04:26:57', '2024-07-30 04:26:57');

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
(4, '2024_07_11_160721_create_roles_table', 2),
(6, '2024_07_13_104509_create_branches_table', 3),
(7, '2024_07_13_134404_create_countries_table', 4),
(14, '2024_07_17_045918_create_user_infos_table', 6),
(15, '2024_07_25_121934_create_permissions_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$BiXABDoWLSo/mpdsdV6xPOcpKK0uYMI3kZumzEgRVRSiM6cN/K/We', '2024-07-12 20:43:46'),
('nayeembd84@gmail.com', '$2y$12$KkwoPErgWCRTvf.Pqu5esuQmekO4X9NrT4Fwno/5n28Wkp/S75pc6', '2024-07-13 00:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(10, 3, '{\"createuser\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"setteing\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2024-07-26 07:48:39', '2024-07-30 18:47:52'),
(11, 5, '{\"createuser\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"setteing\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"list\":\"1\"}}', '2024-07-27 05:55:51', '2024-07-27 05:55:51'),
(13, 1, '{\"createuser\":{\"list\":\"1\"},\"rolemanagement\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"list\":\"1\"},\"setteing\":{\"add\":\"1\",\"view\":\"1\",\"edit\":\"1\",\"delete\":\"1\",\"list\":\"1\"}}', '2024-07-27 07:25:18', '2024-07-27 09:32:22'),
(14, 4, '{\"setteing\":{\"add\":\"1\"}}', '2024-07-27 09:36:14', '2024-07-27 09:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Passenger', NULL, NULL),
(3, 'Agent', '2024-07-17 05:43:02', '2024-07-24 19:46:33'),
(4, 'Branch', '2024-07-18 19:15:28', '2024-07-24 19:45:41'),
(5, 'subadmin', NULL, NULL);

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
('HC58ikHoHRILuYMiphOmuZjFq5sVU8IUMU64ogOV', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR01URk1rdmdMWlRlYnQyMVBXNm9kTnlPdzA2SEUzMDBLR1NkaUpUeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Q6OTA5MC9vaXNoZWdsb2JhbC9wdWJsaWMvZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1722390274);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(32) NOT NULL DEFAULT 2,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `branch_id` int(255) DEFAULT NULL,
  `agent_id` int(255) DEFAULT NULL,
  `otp` int(32) DEFAULT NULL,
  `code` int(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `status`, `branch_id`, `agent_id`, `otp`, `code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', NULL, 'admin@gmail.com', NULL, '$2y$12$4Q2nzLRPwtzOvs5kuMyUfuNrz9IfIFnG02hj8EhQmDkgh.47GGzL.', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-11 00:01:24', '2024-07-29 12:20:10'),
(2, 2, 'raju', '01818811220', 'nayeembd84@gmail.com', NULL, '$2y$12$Lx.m/sPumoexqZ6RWALzIuENh2KMtlOKXKNOn8INeWx.duV6nlEiK', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-11 00:12:41', '2024-07-13 00:59:35'),
(3, 2, 'test', '123456789', 'test@gmail.com', NULL, '$2y$12$IrBFwTg7DzmnMxAMgN75UeHTDTg4MpYwD/rx4xjDRnCz8MFIoSyXy', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-13 00:20:09', '2024-07-13 00:20:09'),
(4, 2, 'ppppp', '1234567890', 'p@gmail.com', NULL, '$2y$12$YOBSXiu9Tt1QYzroR/Hn8uAUItxcp9GrVdHs43yabXyRSf0QC479C', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-13 00:40:24', '2024-07-13 00:40:24'),
(5, 2, 't', '1234567890', 't@gmail.com', NULL, '$2y$12$bg6.ynRY5uXCSN6gwe3Q5uBl4RseAxYQp3Urk6BJxkExshlC6xxku', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-13 01:23:59', '2024-07-13 01:23:59'),
(6, 2, 'laravel', '123456789', 'laravel@gmail.com', NULL, '$2y$12$Iz8X75pQscPYMTEInqb/6uJIX3C6x83dCBT6lFEWkekQOLP8JN/Hq', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-14 10:44:55', '2024-07-14 10:44:55'),
(7, 2, 'haru', '0167811220', 'harun@ibfbd.org', NULL, '$2y$12$nOI4tykFsOonopHUfMbYXeq4lOYVxLKR9Dme7gfwMSqjy3yrvyazy', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-14 13:07:45', '2024-07-14 13:07:45'),
(9, 1, 'oishe', '01617811220', 'info@oishe.com', NULL, '$2y$12$V74vlXitGhnx9pjREcqbKeapCseHWX2NvfYOZk1CwSxqcd92gf4hW', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-27 03:43:17', '2024-07-27 05:58:18'),
(11, 5, 'subadmin', '123456789', 'subadmin@gmail.com', NULL, '$2y$12$mOUvWsgGj6YC5WRAn4aqReR5m.uTQNHdyd0zXXxbfG53jJ0oHwv/K', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-27 05:55:17', '2024-07-30 19:18:52'),
(12, 4, 'oisheeg', '0187112200', 'oisheglo@gmail.com', NULL, '$2y$12$xYU8Y.isONL2InSS9W3dV.y48swt4anX.J3doyp76GyUh4DsSGLFa', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-27 09:33:25', '2024-07-27 09:33:25'),
(13, 4, 'rwss', '01784455662', 'res@osu.com', NULL, '$2y$12$safTqlz5rZsLbzzPF3NQYexNhWNV9UZZcJaNtGh/e1eR37Uy9BmmC', 1, 1, NULL, NULL, NULL, NULL, '2024-07-27 09:45:30', '2024-07-29 18:04:29'),
(14, 4, 'oshifa', '0178112200', 'testbranch@oshi.com', NULL, '$2y$12$ym375bbmfCbpY98HGQytFu6sqKuZXjUlnLV44IW9uqCZF2KpAbtNa', 1, 1, NULL, NULL, NULL, NULL, '2024-07-27 11:32:04', '2024-07-27 11:32:04'),
(15, 5, 'rf', 'rm', 'rasel@oishe.com', NULL, '$2y$12$3DPPgTwGs9eJZnGEy0l0W.jNnLAqMQ2RY5454tvZhBYS/kYNQZ6OG', 1, 1, NULL, NULL, NULL, NULL, '2024-07-27 12:13:08', '2024-07-27 12:13:08'),
(16, 5, 'branch', '01818811220', 'br@gmail.com', NULL, '$2y$12$2wcRv9/0nqggtzVUV4BkfO3FR8ImsM/XbDZoVTHbeGh7Esxm3Jw/S', 1, 1, NULL, NULL, NULL, NULL, '2024-07-27 19:43:26', '2024-07-27 19:43:26'),
(18, 3, 'agent', '0171811220', 'agent@gmail.com', NULL, '$2y$12$OKnccC69FSxSzskiwdHgFexIR/klx00oZx7jWjg9MoSYAqpCESuKS', 1, 6, NULL, NULL, NULL, NULL, '2024-07-29 07:28:30', '2024-07-29 07:28:30'),
(19, 2, 'aggg', '01918811220', 'a@gmail.com', NULL, '$2y$12$.59LWXStQf4tRGcYq.t79uigv8JH2CuQSmRfLhcsDbcuBxd8DoqJm', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 09:09:25', '2024-07-29 09:09:25'),
(20, 2, 'agent12', '017452200', 'aff@gmail.com', NULL, '$2y$12$mDhdmIrI8vpFp5E.IDnSzu0SqwkZ9Dt3Pwk4ahj9rrzY8GezInBh.', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 09:30:45', '2024-07-29 09:30:45'),
(21, 2, 'agrtyu', '0145632147`', 'aagtr@gmail.com', NULL, '$2y$12$TNN5FiWioeKtdTJa5r8TRuUbQ9/fpzXKYOV9ixX.SMjF4/bMSjouG', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 09:46:30', '2024-07-29 09:46:30'),
(22, 2, 'test', '0147895623', 'tst@agent.com', NULL, '$2y$12$mCaoHQpK7g6vIuzqAMzHOuJUAQP1scIphsyC0VjOol/QaJyH8AREK', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 10:16:10', '2024-07-29 10:16:10'),
(23, 2, 'eeeeee', '43444443434', 'create@agent.com', NULL, '$2y$12$qffArewzk8HK3xX4m7T5xuU6QY2AffbKFAU9wkihBuAfms5M1IHBK', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 10:17:41', '2024-07-29 10:17:41'),
(24, 3, 'ddddd', '014789653', 'tttt@test.com', NULL, '$2y$12$rSezZ9h6aWWfxxCWjW8jo.As22TCEJwJWdm4Cq0YaQPGtv5tAPUyC', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 11:06:58', '2024-07-29 11:06:58'),
(25, 2, 'nayeeeeeem', '0148756322', 'eee@gmail.com', NULL, '$2y$12$/MM.vbK8ZH3lwB6/UApiC.Vun2Xlx8oP6ETSiwAz5pR5MlRaUcDHG', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 11:09:30', '2024-07-29 11:09:30'),
(27, 3, 'Harun or Rashid Chowd', NULL, 'embd84@gmail.com', NULL, '$2y$12$UfbbbiZ6QR6JlXRJwLXRruI4zbA1zaJdD97AWePpy45guUNQ6eMCe', 1, 3, NULL, NULL, 72, NULL, '2024-07-29 11:41:29', '2024-07-29 11:41:29'),
(28, 3, 'testoii', NULL, 'oisho@oinn.com', NULL, '$2y$12$xX9WeDGWe.aOeyF47lUnbO85xp5yrMHeaTWq6226g5HDvFIscxsuC', 0, 6, NULL, NULL, 67, NULL, '2024-07-29 11:47:27', '2024-07-29 11:47:27'),
(29, 3, 'oooooooeeee', '01818811220', 'ooooo@ooooo.com', NULL, '$2y$12$.kHjwHCl4pOaBZSYbWbmuusZv4mOaUW53pY1ZQezFau2MzEAA9ATi', 0, 3, NULL, NULL, 14, NULL, '2024-07-29 11:49:11', '2024-07-29 11:49:11'),
(30, 2, 'rtest@gmail.com', '1223456789', 'rtest@gmail.com', NULL, '$2y$12$jEEUzerUcRqNM0pAcUjkk.0lcKk5WLNAbREY8iYP84LzTc0eZFBqC', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 20:32:37', '2024-07-29 20:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `name`, `phone`, `email`, `f_name`, `m_name`, `nid`, `passport`, `image`, `user_id`, `address`, `country_id`, `branch_id`, `agent_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Harun or Rashid Chowdhury', '01818811220', 'nayeembd84@gmail.com', 'abul khair', 'Nasrin', '123456789000', NULL, NULL, 29, 'KHALEDA MONZIL,MEARASTAMATHA,SHAMSERABAD.', 1, NULL, NULL, 29, 29, '2024-07-27 11:25:54', '2024-07-29 11:51:59'),
(2, 'Harun or Rashid Chowdhury', '01818811220', 'user@gmail.com', 'abul khair', 'Nasrin', '12345678902', '202407271940const.jpeg', NULL, 1, 'Lakshmipur', 7, NULL, NULL, 1, 1, '2024-07-27 13:40:14', '2024-07-27 13:40:14'),
(3, 'nnn', '0181881120', 'pp@ois.com', 'abul khair', 'd', '123456789', NULL, NULL, 29, 'fff', 13, NULL, NULL, 29, 29, '2024-07-27 19:45:08', '2024-07-29 12:01:04'),
(4, 'oshiiiiii', '018177445552', 'oiss@gmail.com', 'hhhhh', 'kkkkk', '145555555', NULL, NULL, 29, 'jatrabar', 10, NULL, NULL, 29, 29, '2024-07-29 11:50:39', '2024-07-29 12:01:41'),
(5, 'Harun or Rashid Chowdhury', '01818811220', 'nayeembd84@gmail.com', 'd', 'dd', '4444444', '202407291845const.jpeg', NULL, 13, 'KHALEDA MONZIL,MEARASTAMATHA,SHAMSERABAD.', 7, NULL, NULL, 13, 13, '2024-07-29 12:45:41', '2024-07-29 12:45:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branches_name_unique` (`name`);

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
