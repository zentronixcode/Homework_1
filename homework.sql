-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 03:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- Table structure for table `ec_cats`
--

CREATE TABLE `ec_cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ec_cats`
--

INSERT INTO `ec_cats` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Sports', NULL, NULL),
(2, 'Community Service Manager', '2019-07-24 20:52:26', '2019-07-24 20:52:26'),
(3, 'Biophysicist', '2019-07-24 20:52:26', '2019-07-24 20:52:26'),
(4, 'Preschool Teacher', '2019-07-24 20:52:26', '2019-07-24 20:52:26'),
(5, 'Sports Book Writer', '2019-07-24 20:52:26', '2019-07-24 20:52:26'),
(6, 'Internist', '2019-07-24 20:52:26', '2019-07-24 20:52:26'),
(7, 'Nuclear Monitoring Technician', '2019-07-25 05:21:35', '2019-07-25 05:21:35'),
(8, 'Industrial Engineering Technician', '2019-07-25 05:21:36', '2019-07-25 05:21:36'),
(9, 'Nonfarm Animal Caretaker', '2019-07-25 05:21:36', '2019-07-25 05:21:36'),
(10, 'Drycleaning Machine Operator', '2019-07-25 05:21:36', '2019-07-25 05:21:36'),
(11, 'Production Worker', '2019-07-25 05:21:36', '2019-07-25 05:21:36'),
(12, 'Computer Hardware Engineer', '2019-07-25 05:23:02', '2019-07-25 05:23:02'),
(13, 'Pastry Chef', '2019-07-25 05:23:02', '2019-07-25 05:23:02'),
(14, 'Diagnostic Medical Sonographer', '2019-07-25 05:23:02', '2019-07-25 05:23:02'),
(15, 'Marine Oiler', '2019-07-25 05:23:02', '2019-07-25 05:23:02'),
(16, 'Mail Clerk', '2019-07-25 05:23:02', '2019-07-25 05:23:02'),
(17, 'Supervisor of Police', '2019-07-25 05:23:24', '2019-07-25 05:23:24'),
(18, 'Aircraft Launch Specialist', '2019-07-25 05:23:24', '2019-07-25 05:23:24'),
(19, 'Carpenter', '2019-07-25 05:23:24', '2019-07-25 05:23:24'),
(20, 'Speech-Language Pathologist', '2019-07-25 05:23:24', '2019-07-25 05:23:24'),
(21, 'Optical Instrument Assembler', '2019-07-25 05:23:24', '2019-07-25 05:23:24'),
(22, 'Numerical Tool Programmer OR Process Control Programmer', '2019-07-25 05:24:12', '2019-07-25 05:24:12'),
(23, 'Order Clerk', '2019-07-25 05:24:12', '2019-07-25 05:24:12'),
(24, 'Precision Etcher and Engraver', '2019-07-25 05:24:12', '2019-07-25 05:24:12'),
(25, 'Computer Scientist', '2019-07-25 05:24:12', '2019-07-25 05:24:12'),
(26, 'Police Identification OR Records Officer', '2019-07-25 05:24:12', '2019-07-25 05:24:12'),
(27, 'Employment Interviewer', '2019-07-25 05:26:25', '2019-07-25 05:26:25'),
(28, 'Medical Secretary', '2019-07-25 05:26:25', '2019-07-25 05:26:25'),
(29, 'Management Analyst', '2019-07-25 05:26:26', '2019-07-25 05:26:26'),
(30, 'Claims Adjuster', '2019-07-25 05:26:26', '2019-07-25 05:26:26'),
(31, 'Foreign Language Teacher', '2019-07-25 05:26:26', '2019-07-25 05:26:26'),
(32, 'Pressure Vessel Inspector', '2019-07-25 05:29:01', '2019-07-25 05:29:01'),
(33, 'Advertising Manager OR Promotions Manager', '2019-07-25 05:29:01', '2019-07-25 05:29:01'),
(34, 'Budget Analyst', '2019-07-25 05:29:01', '2019-07-25 05:29:01'),
(35, 'Registered Nurse', '2019-07-25 05:29:01', '2019-07-25 05:29:01'),
(36, 'Product Specialist', '2019-07-25 05:29:01', '2019-07-25 05:29:01'),
(37, 'Fishery Worker', '2019-07-25 05:29:39', '2019-07-25 05:29:39'),
(38, 'HR Manager', '2019-07-25 05:29:39', '2019-07-25 05:29:39'),
(39, 'Agricultural Product Grader Sorter', '2019-07-25 05:29:39', '2019-07-25 05:29:39'),
(40, 'Coating Machine Operator', '2019-07-25 05:29:39', '2019-07-25 05:29:39'),
(41, 'General Farmworker', '2019-07-25 05:29:39', '2019-07-25 05:29:39'),
(42, 'Refinery Operator', '2019-07-25 05:33:51', '2019-07-25 05:33:51'),
(43, 'Epidemiologist', '2019-07-25 05:33:51', '2019-07-25 05:33:51'),
(44, 'Nonfarm Animal Caretaker', '2019-07-25 05:33:51', '2019-07-25 05:33:51'),
(45, 'Terrazzo Workes and Finisher', '2019-07-25 05:33:51', '2019-07-25 05:33:51'),
(46, 'Stationary Engineer', '2019-07-25 05:33:51', '2019-07-25 05:33:51'),
(47, 'Fire Inspector', '2019-07-25 05:35:57', '2019-07-25 05:35:57'),
(48, 'Financial Analyst', '2019-07-25 05:35:57', '2019-07-25 05:35:57'),
(49, 'Materials Engineer', '2019-07-25 05:35:57', '2019-07-25 05:35:57'),
(50, 'Nuclear Technician', '2019-07-25 05:35:57', '2019-07-25 05:35:57'),
(51, 'Fire Investigator', '2019-07-25 05:35:58', '2019-07-25 05:35:58'),
(52, 'Forest Fire Fighting Supervisor', '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(53, 'Algorithm Developer', '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(54, 'Electric Motor Repairer', '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(55, 'Embossing Machine Operator', '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(56, 'Maintenance and Repair Worker', '2019-07-25 05:37:21', '2019-07-25 05:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `ec_items`
--

CREATE TABLE `ec_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ec_items`
--

INSERT INTO `ec_items` (`id`, `product_name`, `amount`, `price`, `photo`, `cat_id`, `created_at`, `updated_at`) VALUES
(8, 'dolorem', 17, 239, 'Daniel', 2, '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(9, 'praesentium', 10, 676639, 'Johnson', 5, '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(10, 'accusantium', 50, 644, 'Jakubowski', 4, '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(11, 'ad', 50, 30680, 'Miller', 4, '2019-07-25 05:37:21', '2019-07-25 05:37:21'),
(12, 'corporis', 43, 1061606, 'Beatty', 2, '2019-07-25 05:37:21', '2019-07-25 05:37:21');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_07_23_135856_create_ec_cats_table', 1),
(28, '2019_07_23_140939_create_ec_items_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rasyif', 'rasyif1', 'rasyif@gmail.com', NULL, '$2y$10$40rb81.nmyyHN7FMamS6eem4IEWqN1lLqgeNbw9kDToH608Wcvr56', NULL, '2019-07-23 20:27:21', '2019-07-23 20:27:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_cats`
--
ALTER TABLE `ec_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_items`
--
ALTER TABLE `ec_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ec_items_cat_id_foreign` (`cat_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_cats`
--
ALTER TABLE `ec_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ec_items`
--
ALTER TABLE `ec_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ec_items`
--
ALTER TABLE `ec_items`
  ADD CONSTRAINT `ec_items_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `ec_cats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
