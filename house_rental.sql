-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2022 at 02:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `township_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `user_id`, `township_id`, `type_id`, `title`, `area`, `price`, `room`, `street`, `hno`, `image`, `phone`, `status`, `description`, `created_at`, `updated_at`) VALUES
(8, 17, 1, 5, 'Su House', '230sqft', '400000.00', '5', '26st 71st', 'A23', '/storage/image/1574740048.jpg', '09784095658', 1, 'good facilities and nice house', '2019-11-25 21:07:18', '2019-11-25 21:17:28'),
(9, 19, 5, 5, 'Sein Chel Eain Yar', '340sqft', '450000.00', '6', '34st 35st,27st', 'B21', '/storage/image/1574740574.jpg', '0923456788', 1, 'nice house and safe environment', '2019-11-25 21:23:36', '2019-11-25 22:48:41'),
(10, 19, 7, 5, 'Sein Chel Eain Yar  2', '230sqft', '400000.00', '5', '40st 35st,27st', 'S12', '/storage/image/1574740881.jpg', '0987654345678', 0, 'best recommand for the people who want to live comfortably', '2019-11-25 21:30:02', '2019-11-25 21:31:21'),
(11, 20, 5, 4, 'Khin Lay Condos', '230sqft', '300000.00', '3', '12st bet 34st and 35st', 'K-16', '/storage/image/1574741596.jpeg', '0912346789', 1, 'very nice condos', '2019-11-25 21:36:18', '2019-11-26 03:18:24'),
(12, 21, 1, 2, 'ShopPlace', '130sqft', '500000.00', '3', '71st bet 34st and 35st', 'K-162', '/storage/image/1574742189.jpg', '09876543234567', 1, 'good', '2019-11-25 21:53:09', '2019-11-25 22:55:36'),
(14, 21, 9, 5, 'Home Sweet Home', '130sqft', '500000.00', '2', '25st bet 80st 81st', 'h123', '/storage/image/1574742516.jpg', '098765434', 1, 'very nice house', '2019-11-25 21:58:37', '2019-11-26 07:00:20'),
(15, 22, 9, 2, 'SoeLin', '230sqft', '400000.00', '5', '34st 35st,27st', 'K-16', '/storage/image/1574753378.jpg', '09876543223', 0, 'good nice', '2019-11-25 22:19:12', '2019-11-26 00:59:38'),
(17, 22, 8, 2, 'SoeLin', '230sqft', '400000.00', '3', '34st 35st,27st', 'house-12', '/storage/image/1574753527.jpg', '098765432', 1, 'good nice house', '2019-11-25 22:19:42', '2021-07-12 04:47:55'),
(18, 25, 7, 2, 'Blue House', '230sqft', '200000.00', '3', '78st', '789', '/storage/image/1574753724.jpg', '0998765432', 1, 'special house', '2019-11-26 01:05:25', '2019-11-26 03:35:02'),
(28, 29, 1, 5, 'Rose House', '130sqft', '350000.00', '3', '34st 35st,27st', 'K-16', '/storage/image/1574850928.jpg', '09950134371', 1, 'adsfdgfhgfjhgkjhkjkll', '2019-11-27 04:05:28', '2021-12-12 22:26:57'),
(30, 22, 9, 4, 'Sweet House', '130sqft', '400000.00', '3', '40st 35st,27st', 'B21', '/storage/image/1574851140.jpg', '098765434567', 0, 'safe environment and good facilities', '2019-11-27 04:09:00', '2019-11-27 04:09:00'),
(31, 19, 1, 2, 'Diamond Land House', '230sqft', '500000.00', '3', '12st bet 34st and 35st', 'S12', '/storage/image/1574851320.jpg', '009474747969', 0, 'have aircon in each room and good facilities', '2019-11-27 04:12:00', '2019-11-27 04:12:00'),
(32, 36, 5, 4, 'MYo MYo House', '230sqft', '5000000.00', '5', '78st', '89', '/storage/image/1574911143.jpg', '09786543210', 0, 'good', '2019-11-27 20:49:03', '2019-11-27 20:49:03');

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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_11_21_045723_create_townships_table', 1),
(24, '2019_11_21_063143_create_houses_table', 1),
(25, '2019_11_21_074200_create_types_table', 1),
(26, '2019_11_21_074625_create_rents_table', 1),
(27, '2019_11_22_093531_create_permission_tables', 1),
(28, '2019_11_22_151040_modify_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(2, 'App\\User', 23),
(2, 'App\\User', 24),
(2, 'App\\User', 26),
(2, 'App\\User', 27),
(2, 'App\\User', 28),
(2, 'App\\User', 30),
(2, 'App\\User', 31),
(2, 'App\\User', 32),
(2, 'App\\User', 35),
(2, 'App\\User', 37),
(2, 'App\\User', 38),
(3, 'App\\User', 17),
(3, 'App\\User', 19),
(3, 'App\\User', 20),
(3, 'App\\User', 21),
(3, 'App\\User', 22),
(3, 'App\\User', 25),
(3, 'App\\User', 29),
(3, 'App\\User', 36);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `house_id` bigint(20) UNSIGNED NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `user_id`, `house_id`, `from`, `to`, `address`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(15, 26, 18, '2019-11-30', '2019-12-31', 'Mandalay', '0098765432', 'Nothing special', 1, '2019-11-26 01:15:45', '2019-11-26 03:35:02'),
(16, 23, 14, '2019-11-05', '2019-11-12', 'Yangon', '0912345729', 'I want to rent', 1, '2019-11-26 01:25:25', '2019-11-27 20:52:57'),
(18, 28, 11, '2019-11-12', '2019-11-14', 'Mandalay', '0934567823', 'To rent New hot', 1, '2019-11-26 01:31:57', '2019-11-26 03:18:24'),
(19, 30, 10, '2019-11-04', '2019-11-12', 'Mandalay', '091234098', 'hi', 0, '2019-11-26 03:17:31', '2019-11-26 03:17:31'),
(20, 31, 14, '2019-11-23', '2019-11-30', 'Mandalay', '0912346789', 'good hi', 1, '2019-11-26 06:59:52', '2019-11-26 07:00:20'),
(22, 35, 15, '2019-11-30', '2020-03-31', 'Naypyitaw', '0987654334', 'hi', 0, '2019-11-27 20:34:33', '2019-11-27 20:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-11-22 03:35:09', '2019-11-22 03:35:09'),
(2, 'user', 'web', '2019-11-22 03:35:09', '2019-11-22 03:35:09'),
(3, 'owner', 'web', '2019-11-22 03:35:09', '2019-11-22 03:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AungMyayTharZan', '2019-11-22 22:37:03', '2019-11-23 02:38:03'),
(5, 'ChanAyeTharZan', '2019-11-23 23:27:08', '2019-11-23 23:27:08'),
(7, 'ChanMyaTharSi', '2019-11-24 07:48:59', '2019-11-24 07:48:59'),
(8, 'Mahar Aung Myay', '2019-11-25 20:49:14', '2019-11-25 20:49:14'),
(9, 'Pyi Gyi Tan Kon', '2019-11-25 20:49:30', '2019-11-25 20:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Apartments', '2019-11-23 09:22:20', '2019-11-23 09:28:20'),
(4, 'Condos', '2019-11-23 09:59:26', '2019-11-23 09:59:26'),
(5, 'House', '2019-11-24 07:48:20', '2019-11-24 07:48:20'),
(6, 'Shop', '2019-11-24 07:48:31', '2021-07-12 04:44:00'),
(7, 'Office', '2021-07-12 04:44:08', '2021-07-12 04:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nrc`, `email_verified_at`, `password`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@gmail.com', '9/MANATA(N)123456', NULL, '$2y$10$8xh/V0enK1Kwe37AVtkOqebD6n5RkKl4UaG1Y7cmXXI8o.w.QeSRK', '/storage/image/1574487284.jpg', '2019-11-22 23:04:44', '2019-11-22 23:04:44'),
(17, 'Su Su Hlaing', 'suhlaing7840@gmail.com', '9/maanta(N)7878787', NULL, '$2y$10$BkQFz2IMdjmJnbQkhsOpwuN2pjOrnbN3DOZJcoFgx8Sp5vVDJP/3q', '1574739322.png', '2019-11-25 21:00:03', '2019-11-25 21:05:22'),
(19, 'Daw Sein Sein', 'seinsein12@gmail.com', '9/MANATA(N)094657', NULL, '$2y$10$MSPT3Kt4.UwH15QGAGmNweq3LizVSGnkT6ulNKC4S0Ks7/L8dPYJe', '/storage/image/1574740294.jpg', '2019-11-25 21:21:34', '2019-11-25 21:21:34'),
(20, 'Daw Khin Ma Ma', 'khinlay123@gmail.com', '9/MANATA(N)675846', NULL, '$2y$10$gyyr3fQXwXjUCT3goSFes.nctKuLMUbAN0fKAOTUzbe6BIy3Ci0GK', '/storage/image/1574741005.jpg', '2019-11-25 21:33:26', '2019-11-25 21:33:26'),
(21, 'Ma Shwe Yi', 'shweyi12345@gmail.com', '9/MANATA(N)096756', NULL, '$2y$10$xc6ll2mf2HiLXMx/EwAPhOmJ9C88CujPK9kd.aR5GY2.wPdug/MwC', '/storage/image/1574741708.jpg', '2019-11-25 21:45:08', '2019-11-25 21:45:08'),
(22, 'U Soe Lin', 'soelin123@gmail.com', '9/MANATA(N)896745', NULL, '$2y$10$brlYlGnjm4w8aZuh5KYIje0Onpz6.Iu0OsR1yp6iUOpccUm14kxJi', '/storage/image/1574743592.jpg', '2019-11-25 22:16:32', '2019-11-25 22:16:32'),
(23, 'Kyi Soe Lynn', 'kyisoelynn@gmail.com', '1/MAAHNA(N)146916', NULL, '$2y$10$DVkAg0ePc5iCztaWmj/SEu7lhyDU6s2HK54E2Jj6MIaD5qCcczXBK', '/storage/image/1574744748.jpg', '2019-11-25 22:35:48', '2019-11-25 22:35:48'),
(24, 'ChueEiSan', 'chue@gmail.com', '9/MANATA(N)097645', NULL, '$2y$10$NEP0M0MfBTXBLRzmV9bt9.KUxOM1d95mPfasJDFpN.i04TBDGfmHq', '/storage/image/1574749793.jpg', '2019-11-25 23:59:54', '2019-11-25 23:59:54'),
(25, 'U Hein', 'hein@gmail.com', '4/mahtala(N)567890', NULL, '$2y$10$BR40BFl51BwS1SjGvHy4bO3qAvYSBd5Cub3pg.tATg0xnjf5BZRX.', '/storage/image/1574753636.jpg', '2019-11-26 01:03:56', '2019-11-26 01:03:56'),
(26, 'Ma May Zin Phyoe', 'mayzinphyoeibct@gmail.com', '9/MANATA(N)453627', NULL, '$2y$10$GenbovEfHA3qtEnvbX26je5GROkEvM10KPyyB5GH2DxRcPeKA3J0C', '/storage/image/1574754293.jpg', '2019-11-26 01:14:53', '2019-11-26 01:14:53'),
(27, 'NanYuYuMaw', 'yuyumaw1236@gmail.com', '1/BMN(N)094567', NULL, '$2y$10$PkTigLgKwIYHylOiKaWIbOL2.CkGpEikm.m1FfEsXDsKThUxCBb2O', '/storage/image/1574755029.png', '2019-11-26 01:27:10', '2019-11-26 01:27:10'),
(28, 'Win Pa Pa Theint', 'winpapatheint1111.wppt@gmail.com', '1/BMN(N)094582', NULL, '$2y$10$QN/KyPsLNfjIMnBfWywivu4.XXixUFnWwQm/Yu53.iK40plVzBz7C', '/storage/image/1574755200.png', '2019-11-26 01:30:01', '2019-11-26 01:30:01'),
(29, 'Daw Hnin Hsi', 'hnin123@gmail.com', '9/456778', NULL, '$2y$10$XPc7HqaPNyDgiHU0Ftfyou5QDbeE4402cgJ3PmGDARCbaBVfShnhG', '/storage/image/1574761436.jpg', '2019-11-26 03:13:56', '2019-11-26 03:13:56'),
(30, 'Mya Mya', 'mya786@gmail.com', '8/567808', NULL, '$2y$10$I0vqhydDgV9/n2sEDAgsU.rXfKIhSwKiSLWh30/CrDUicOUx2Qi/.', '/storage/image/1574761605.jpg', '2019-11-26 03:16:45', '2019-11-26 03:16:45'),
(31, 'Nilar Tun', 'nilar456@gmail.com', '9/MANATA(N)004229', NULL, '$2y$10$mIa2cLXLVMHMkKeeEEB.QOIVy0ySshflqfprL3XhzHQG1ypZTWJmS', '/storage/image/1574774944.jpg', '2019-11-26 06:59:04', '2019-11-26 06:59:04'),
(32, 'ThandarTun', 'thandartun@gmail.com', '9/MANATA(N)096758', NULL, '$2y$10$HCSXIuvQRyj5xrCKvhtCYucsl920OjcN02Scr0S0vYhle5JsWOuse', '1574843553.png', '2019-11-27 02:01:58', '2019-11-27 02:02:33'),
(35, 'ThandarTun', 'yyy@gmail.com', '9/vvsiua', NULL, '$2y$10$YpMrb5uGoBOzTi7cY.OOTed/id0WpNJqRu60zV/IDVs1uSdyhvzEy', '/storage/image/1574910228.jpeg', '2019-11-27 20:33:48', '2019-11-27 20:33:48'),
(36, 'Daw Myo MYo', 'myo123@gmail.com', '9/678543', NULL, '$2y$10$iKoutv.6RSN7j03.1D0gFenYU9aGkZmpciJuimKeiAnKdq3vz/z22', '/storage/image/1574911064.jpg', '2019-11-27 20:47:44', '2019-11-27 20:47:44'),
(37, 'myayoon', 'mya789@gmail.com', '9/874532', NULL, '$2y$10$YH3DKLIAEBBzprKH2utB3OzCSwVESMfL3FoTkpNnuQqzYD6LL5ZIK', '/storage/image/1574911208.jpg', '2019-11-27 20:50:08', '2019-11-27 20:50:08'),
(38, 'NewUser', 'thandarannie12@gmail.com', '9/manata(N)123655', NULL, '$2y$10$uUdvj1/nixwOWk1VX40bhe3ywN.CNe5kMGB7qh2fyRKc79jI8LImK', '/storage/image/1626088598.jpg', '2021-07-12 04:46:38', '2021-07-12 04:46:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `houses_phone_unique` (`phone`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rents_phone_unique` (`phone`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nrc_unique` (`nrc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
