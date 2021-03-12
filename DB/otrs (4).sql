-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 06:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_seats`
--

CREATE TABLE `booked_seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `businfo_id` bigint(20) UNSIGNED NOT NULL,
  `seat_name` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boarding_point` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bus_journey_date` date NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `demo_user_id` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booked_seats`
--

INSERT INTO `booked_seats` (`id`, `businfo_id`, `seat_name`, `boarding_point`, `bus_journey_date`, `status`, `demo_user_id`, `created_at`, `updated_at`) VALUES
(87, 1, 'A1', 'Mohakhali Bus Point (10:30 PM)', '2021-02-01', 'confirmed', 'IOFtrtBJlA6A3IwH42DMV8Ft1odteDBeZLkafJGh4qcym3dSVQGRo6G8pv8lzdzCE24dhFxOBfPqGcJTRekQygacnXlKH1HIttG9', '2021-02-28 09:48:52', '2021-02-28 09:48:52'),
(90, 1, 'E2', 'Mohakhali Bus Point (10:30 PM)', '2021-03-08', 'reserved', 'JJvxGONBrWAyMDOEK2lQ0bLE0YItM190DUWXupklDJdLGk7JObxcaFJsc7fONPPJH01n3wab7zHF5qWBdAGAdK0rwmCaGjGKsT9H', '2021-02-28 11:10:14', '2021-02-28 11:10:14'),
(91, 1, 'A1', 'Mohakhali Bus Point (10:30 PM)', '2021-03-22', 'reserved', 'ctiLKh65ajPeexrdaf8et6bJZ6hcX6ZxMdqXu3C3EIGjB2QundFnNcwsNPhHwWPaQhRPwpWehcMhXpdfYBRTBj9Hu5bX7Mtvv1xU', '2021-02-28 22:36:49', '2021-02-28 22:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `businfos`
--

CREATE TABLE `businfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bustyp_id` bigint(20) UNSIGNED NOT NULL,
  `leaving_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `going_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seattype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seatcapacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businfos`
--

INSERT INTO `businfos` (`id`, `bustyp_id`, `leaving_from`, `going_to`, `name`, `seattype`, `seatcapacity`, `fare`, `day`, `departure_time`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', 'Chittagong', 'Green Line01', 'Business', '40', '1200', 'Monday', '14:36', '110-DD-GAB-LOWER DECK', NULL, '2021-02-17 11:37:01', '2021-02-18 04:38:38'),
(2, 1, 'Dhaka', 'Chittagong', 'Green Line00', 'Economy', '40', '1200', 'Sunday', '16:40', '110-DD-GAB-LOWER DECK', '2021-02-18 04:07:55', '2021-02-17 11:39:30', '2021-02-18 04:07:55'),
(3, 1, 'Cox\'s Bazar', 'Chittagong', 'Green Line06', 'Business', '40', '1200', 'Saturday', '09:46', '110-DD-GAB-LOWER DECK', NULL, '2021-02-18 04:41:39', '2021-02-18 04:44:00'),
(4, 1, 'Dhaka', 'Chittagong', 'Greenline 2', 'Business', '40', '1250', 'Monday', '20:25', 'This is a good bus', NULL, '2021-02-20 04:26:53', '2021-02-20 04:26:53'),
(5, 1, 'Chittagong', 'Dhaka', 'Green Line 01', 'Business', '40', '1200', 'Saturday', '12:25', '120-DD-GAB-LOWER DECK', NULL, '2021-02-28 11:24:51', '2021-02-28 11:26:06'),
(6, 4, 'Dhaka', 'Cox\'s Bazar', 'Green Line01', 'Economy', '40', '1200', 'Sunday', '14:28', '110-DD-GAB-LOWER DECK', NULL, '2021-02-28 11:25:39', '2021-02-28 11:25:39'),
(7, 5, 'Sylhet', 'Khulna', 'Green Line01', 'Economy', '40', '1200', 'Tuesday', '13:28', '110-DD-GAB-LOWER DECK', NULL, '2021-02-28 11:27:06', '2021-02-28 11:27:06'),
(8, 1, 'Dhaka', 'Chittagong', 'Green Line03', 'Business', '40', '1200', 'Monday', '01:31', '110-DD-GAB-LOWER DECK', NULL, '2021-02-28 11:30:52', '2021-02-28 11:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `bustypes`
--

CREATE TABLE `bustypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bustypename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bustypes`
--

INSERT INTO `bustypes` (`id`, `bustypename`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DOUBLE DECKER-LOWER', NULL, '2021-02-17 10:31:45', '2021-02-17 10:31:45'),
(2, 'DOUBLE DECKER-UPPER', NULL, '2021-02-17 10:31:52', '2021-02-18 04:20:15'),
(3, '23, Sleeper Premium AC, AC', NULL, '2021-02-28 11:21:09', '2021-02-28 11:21:09'),
(4, 'Hino 1J Pluss, AC', NULL, '2021-02-28 11:22:13', '2021-02-28 11:22:23'),
(5, 'Hino, AK1J Super Salon Chair Coach', NULL, '2021-02-28 11:22:43', '2021-02-28 11:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `counter_name`, `contact_num`, `location`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kallyanpur bus counter', '0173278737', 'Kallyanpur', NULL, '2021-02-28 12:24:40', '2021-02-28 12:24:40'),
(2, 'Gabtoli', '01739000000', 'Gabtoli', NULL, '2021-02-28 12:25:09', '2021-02-28 12:25:09'),
(3, 'Mohakhali Bus Counter', '01739000000', 'Mohakhali Bus Stand', NULL, '2021-02-28 11:19:12', '2021-02-28 11:19:12');

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
(4, '2021_02_17_162451_create_bustypes_table', 2),
(5, '2021_02_17_163307_create_businfos_table', 3),
(6, '2021_02_18_102932_create_trip_details_table', 4),
(7, '2021_02_18_174310_create_sell_tickets_table', 5),
(8, '2021_02_19_055301_create_booked_seats_table', 6),
(9, '2021_02_19_091213_create_paymentdetails_table', 7),
(10, '2021_02_28_172415_create_counters_table', 8);

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
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_user_id` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `payment_number`, `demo_user_id`, `created_at`, `updated_at`) VALUES
(12, '01234567', 'IOFtrtBJlA6A3IwH42DMV8Ft1odteDBeZLkafJGh4qcym3dSVQGRo6G8pv8lzdzCE24dhFxOBfPqGcJTRekQygacnXlKH1HIttG9', '2021-02-28 09:49:28', '2021-02-28 09:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `seat_name_list`
--

CREATE TABLE `seat_name_list` (
  `id` int(11) NOT NULL,
  `name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_name_list`
--

INSERT INTO `seat_name_list` (`id`, `name`) VALUES
(1, 'A1'),
(11, 'A2'),
(21, 'A3'),
(2, 'B1'),
(12, 'B2'),
(22, 'B3'),
(3, 'C1'),
(13, 'C2'),
(4, 'D1'),
(14, 'D2'),
(5, 'E1'),
(15, 'E2'),
(6, 'F1'),
(16, 'F2'),
(7, 'G1'),
(17, 'G2'),
(8, 'H1'),
(18, 'H2'),
(9, 'I1'),
(19, 'I2'),
(10, 'J1'),
(20, 'J2');

-- --------------------------------------------------------

--
-- Table structure for table `sell_tickets`
--

CREATE TABLE `sell_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `seat_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE `trip_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_user_id` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_details`
--

INSERT INTO `trip_details` (`id`, `name`, `gender`, `phn`, `email`, `demo_user_id`, `created_at`, `updated_at`) VALUES
(17, 'jarin', 'female', '01705940000', 'jarin@gmail.com', 'IOFtrtBJlA6A3IwH42DMV8Ft1odteDBeZLkafJGh4qcym3dSVQGRo6G8pv8lzdzCE24dhFxOBfPqGcJTRekQygacnXlKH1HIttG9', '2021-02-28 09:49:22', '2021-02-28 09:49:22'),
(18, 'jarin', 'female', '01705940000', 'jarin@gmail.com', 'ctiLKh65ajPeexrdaf8et6bJZ6hcX6ZxMdqXu3C3EIGjB2QundFnNcwsNPhHwWPaQhRPwpWehcMhXpdfYBRTBj9Hu5bX7Mtvv1xU', '2021-02-28 22:37:32', '2021-02-28 22:37:32');

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
(1, 'jarin', 'jarin@gmail.com', NULL, '$2y$10$6oD2tnN9mtbUsevWWKCWOeTny2ZrvjWSzQTH16KmhQ9ADP1NezSsy', NULL, '2021-02-17 10:20:34', '2021-02-17 10:20:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_seats`
--
ALTER TABLE `booked_seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booked_seats_businfo_id_foreign` (`businfo_id`);

--
-- Indexes for table `businfos`
--
ALTER TABLE `businfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businfos_bustyp_id_foreign` (`bustyp_id`);

--
-- Indexes for table `bustypes`
--
ALTER TABLE `bustypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_name_list`
--
ALTER TABLE `seat_name_list`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `sell_tickets`
--
ALTER TABLE `sell_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_details`
--
ALTER TABLE `trip_details`
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
-- AUTO_INCREMENT for table `booked_seats`
--
ALTER TABLE `booked_seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `businfos`
--
ALTER TABLE `businfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bustypes`
--
ALTER TABLE `bustypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sell_tickets`
--
ALTER TABLE `sell_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_details`
--
ALTER TABLE `trip_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businfos`
--
ALTER TABLE `businfos`
  ADD CONSTRAINT `businfos_bustyp_id_foreign` FOREIGN KEY (`bustyp_id`) REFERENCES `bustypes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
