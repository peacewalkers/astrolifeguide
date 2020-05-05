-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2020 at 10:26 PM
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
-- Table structure for table `matchmakers`
--

CREATE TABLE `matchmakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `orderID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reftype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refdetails` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matchmaker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dobone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tobone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pobone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cobone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nametwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dobtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tobtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cobtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pobtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namethree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dobthree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tobthree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pobthree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cobthree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comthree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `razorpayOrderId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matchmakers`
--

INSERT INTO `matchmakers` (`id`, `user_id`, `orderID`, `productamount`, `name`, `email`, `phone`, `gender`, `dob`, `tob`, `pob`, `cob`, `comments`, `status`, `reftype`, `refdetails`, `matchmaker`, `paymentstatus`, `nameone`, `dobone`, `tobone`, `pobone`, `cobone`, `comone`, `nametwo`, `dobtwo`, `tobtwo`, `cobtwo`, `pobtwo`, `comtwo`, `namethree`, `dobthree`, `tobthree`, `pobthree`, `cobthree`, `comthree`, `amount`, `razorpayOrderId`, `created_at`, `updated_at`) VALUES
(1, 1, '1588544587-1', NULL, 'santosh', 'ksk.lifeguide@gmail.com', '7995439537', 'Male', '24 May, 2020', '12:00AM', 'Hyderabad', 'India', 'test', NULL, NULL, NULL, NULL, NULL, 'Usha', '5 May, 2020', '07:00AM', 'Vijayawada', 'INdia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 150000.00, 'order_Em31XBWql2ltAz', '2020-05-03 16:53:07', '2020-05-03 16:53:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchmakers`
--
ALTER TABLE `matchmakers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matchmakers_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchmakers`
--
ALTER TABLE `matchmakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
