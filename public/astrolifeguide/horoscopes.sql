-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2020 at 12:45 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrolife`
--

-- --------------------------------------------------------

--
-- Table structure for table `horoscopes`
--

CREATE TABLE `horoscopes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reptype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `razorpayOrderId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reftype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refdetails` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horoscope` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `horoscopes`
--

INSERT INTO `horoscopes` (`id`, `orderID`, `productamount`, `user_id`, `reptype`, `name`, `email`, `phone`, `gender`, `dob`, `tob`, `pob`, `cob`, `amount`, `razorpayOrderId`, `comments`, `reftype`, `refdetails`, `horoscope`, `status`, `created_at`, `updated_at`) VALUES
(1, '1588419431-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElTU5QOtvM5V2X', 'test', 'EU', NULL, NULL, NULL, '2020-05-02 06:07:11', '2020-05-02 06:07:12'),
(2, '1588421839-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUAT8z6SCkUKU', 'test', 'SMM', NULL, NULL, NULL, '2020-05-02 06:47:19', '2020-05-02 06:47:20'),
(3, '1588422244-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUHbgIc0PSrz9', 'test', 'SMM', NULL, NULL, NULL, '2020-05-02 06:54:04', '2020-05-02 06:54:05'),
(4, '1588422572-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUNNu69VuaoUa', 'test', 'SMM', NULL, NULL, NULL, '2020-05-02 06:59:32', '2020-05-02 06:59:33'),
(5, '1588422651-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUOmJTJeRd830', 'test', 'PM', NULL, NULL, NULL, '2020-05-02 07:00:51', '2020-05-02 07:00:52'),
(6, '1588422732-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUQC4gVWiOXeL', 'test', 'SMM', NULL, NULL, NULL, '2020-05-02 07:02:12', '2020-05-02 07:02:13'),
(7, '1588422873-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUSgC905icARV', 'test', 'SMM', NULL, NULL, NULL, '2020-05-02 07:04:33', '2020-05-02 07:04:34'),
(8, '1588423157-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUXhddSIkhbvB', 'test', 'EU', NULL, NULL, NULL, '2020-05-02 07:09:17', '2020-05-02 07:09:19'),
(9, '1588423224-1', NULL, 1, 'career', 'santosh', 'santosh@gmail.com', '9959982433', 'Male', '22 April, 2020', '12:03AM', 'Hyd', 'India', 1200.00, 'order_ElUYrFzlygrWj5', 'test', 'EU', NULL, NULL, NULL, '2020-05-02 07:10:24', '2020-05-02 07:10:25'),
(10, '1588505739-1', NULL, 1, 'Career', 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Male', '31 May, 2020', '12:00AM', 'Hyderabad', 'INdia', 1200.00, 'order_ElrzcfenBEiMEK', 'test', 'PM', NULL, NULL, NULL, '2020-05-03 06:05:39', '2020-05-03 06:05:41'),
(11, '1588505976-1', NULL, 1, 'Career', 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Female', '25 May, 2020', '06:00AM', 'Hyderabad', 'India', 1000.00, 'order_Els3mKTPz0EVqF', 'te', 'EU', NULL, NULL, NULL, '2020-05-03 06:09:36', '2020-05-03 06:09:37'),
(12, '1588506042-1', NULL, 1, 'Career', 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Female', '12 May, 2020', '07:00AM', 'Hyderabad', 'INdia', 900.00, 'order_Els4w5jHH5cDSL', 'test', 'EU', NULL, NULL, NULL, '2020-05-03 06:10:42', '2020-05-03 06:10:42'),
(13, '1588508710-1', NULL, 1, 'Career', 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Female', '25 May, 2020', '07:35AM', 'Hyderabad', 'India', 800.00, 'order_ElspvJ0bYfDh9X', 'test', 'PM', NULL, NULL, NULL, '2020-05-03 06:55:10', '2020-05-03 06:55:11'),
(14, '1588509492-1', NULL, 1, 'horoscope', 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Male', '11 May, 2020', '04:00AM', 'Hyderabad', 'INdia', 800.00, 'order_Elt3gzORAIgvYH', 'test', 'EU', NULL, NULL, NULL, '2020-05-03 07:08:12', '2020-05-03 07:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horoscopes`
--
ALTER TABLE `horoscopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horoscopes_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horoscopes`
--
ALTER TABLE `horoscopes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
