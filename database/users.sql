-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 11:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothingstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_pass` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirm_pass`, `type`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'admin', '2022-10-03 13:16:32', '2022-09-30 11:43:58'),
(17, 'TEST', 'TEST1@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 06:31:07', '2022-10-03 13:16:59'),
(18, 'Pratik', 'Pratik@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 06:30:42', '2022-10-04 05:18:28'),
(19, 'amit', 'amit@fermion.in', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 06:30:32', '2022-10-04 05:19:08'),
(20, 'mukesh', 'mukesh@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 07:19:50', '2022-10-04 07:17:40'),
(21, 'ganesh', 'g@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 07:26:14', '2022-10-04 07:17:56'),
(22, 'hrithik', 'hrithik@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-06 12:55:23', '2022-10-04 07:18:14'),
(23, 'Umakant', 'Umakant@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 07:18:30', '2022-10-04 07:18:30'),
(24, 'rohan', 'rohan@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-04 07:18:46', '2022-10-04 07:18:46'),
(25, 'alex1', 'alex@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-06 05:07:11', '2022-10-04 07:19:07'),
(26, 'accolades something', 'accolades@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-07 05:06:35', '2022-10-04 07:19:33'),
(27, 'gayatri', 'gayatri@eamil.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-06 10:12:53', '2022-10-06 10:12:53'),
(28, 'something', 's@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-07 06:06:32', '2022-10-07 06:06:32'),
(29, 'hitesh', 'hitesh@email.com', 'eff7d5dba32b4da32d9a67a519434d3f', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', '2022-10-07 08:18:54', '2022-10-07 08:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
