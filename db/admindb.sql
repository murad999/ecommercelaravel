-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 12:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_09_07_102640_create_roles_table', 1),
(4, '2016_09_07_104930_update_users_table', 1),
(5, '2016_09_07_110555_create_permissions_table', 1),
(6, '2016_09_07_110717_create_role_permissions_table', 1),
(7, '2016_09_07_113734_create_site_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `parent_id`) VALUES
(1, 'RolesController', NULL),
(2, 'index', 1),
(3, 'create', 1),
(4, 'store', 1),
(5, 'show', 1),
(6, 'edit', 1),
(7, 'update', 1),
(8, 'destroy', 1),
(9, 'RegisterController', NULL),
(10, 'showUserLists', 9),
(11, 'showUser', 9),
(12, 'editUser', 9),
(13, 'destroyUser', 9),
(14, 'showRegistrationForm', 9),
(15, 'register', 9),
(16, 'SiteSettingsController', NULL),
(17, 'edit', 16),
(18, 'update', 16);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `is_deletable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `status`, `is_deletable`, `created_at`, `updated_at`) VALUES
(1, 'Supper Admin', '<p>Blanditiis velit quis quisquam dolorum exercitationem labore perspiciatis esse. Illum dolorem sunt dolores consequatur ullam. Qui numquam impedit pariatur similique rerum eligendi assumenda.</p>\r\n', '1', 0, '2017-02-02 01:48:56', '2017-02-02 04:01:52'),
(2, 'Admin', '<p>Qui ut animi et magni quia voluptas suscipit dolores. Quaerat eius deleniti facere corrupti. Neque quas eveniet fuga sequi quo molestiae saepe. Voluptates dolores quas molestiae rerum sed.</p>\r\n', 'active', 1, '2017-02-02 01:48:56', '2017-02-02 05:02:48'),
(3, 'Agent', 'Ducimus et quis dignissimos dolorem molestiae. Magni excepturi voluptatem excepturi iusto placeat perferendis laudantium. Occaecati consequatur esse dolor qui a.', 'active', 1, '2017-02-02 01:48:56', '2017-02-02 01:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(2, 9),
(2, 10),
(2, 11),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo_alt` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `email`, `logo`, `logo_alt`) VALUES
(1, 'Laravel App', 'info@example.com', '1486030068_untitled.png', 'App Logo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Ms. Dessie Shields', 'abc@example.com', '$2y$10$U/V09t8pUklwMIk9O617Re410Ex5l0GGlHZO.4pUviBN7.rSIcHqu', 'z9HPWlFbXvnwuRZT6uIuqfXjlsPWBFH69ivNJo8ZkQEni1776w6OFpjRYcAr', 'active', '2017-02-02 01:49:39', '2017-02-02 05:02:51'),
(3, 2, 'Randi Mitchell', 'alysa.schroeder@example.org', '$2y$10$U/V09t8pUklwMIk9O617Re410Ex5l0GGlHZO.4pUviBN7.rSIcHqu', 'nY1wVq4nWvrEid8OzMF3j7LXgCQ3NO6544DZcuvJuqCq6Wn3KqFNJ1KFvDer', 'active', '2017-02-02 01:49:39', '2017-02-02 04:37:43'),
(4, 2, 'Lorenzo Streich', 'rowe.adan@example.net', '$2y$10$U/V09t8pUklwMIk9O617Re410Ex5l0GGlHZO.4pUviBN7.rSIcHqu', 'D7Hsgi5EL1', 'active', '2017-02-02 01:49:39', '2017-02-02 01:49:39'),
(5, 3, 'Patricia Sanford Sr.', 'pgerhold@example.net', '$2y$10$U/V09t8pUklwMIk9O617Re410Ex5l0GGlHZO.4pUviBN7.rSIcHqu', 'TiXhQfaHfo', 'active', '2017-02-02 01:49:39', '2017-02-02 01:49:39'),
(6, 3, 'Maude Moore Jr.', 'arnaldo.dibbert@example.com', '$2y$10$U/V09t8pUklwMIk9O617Re410Ex5l0GGlHZO.4pUviBN7.rSIcHqu', 'utFibkf4hU', 'active', '2017-02-02 01:49:39', '2017-02-02 01:49:39'),
(7, 2, 'Hassan', 'hassan@gmail.com', '$2y$10$2VX0h4m9joW.C7A8jIrBku0U6uQTJroiSyrQhGLy5Akzo6Xo2wI.y', '8EoMblv3oUtPNgu9HVIkYcHrPLlbVXK6YTNOHE50mxFapa6eiiCbyppHXtuX', 'active', '2017-02-02 04:45:57', '2017-02-02 05:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `role_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_settings_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
