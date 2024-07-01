-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2024 at 08:18 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tehtopnotch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int NOT NULL,
  `admin_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_phone`, `admin_name`, `admin_password`, `admin_token`, `admin_status`) VALUES
(1, 'admin@tnfinancialsolutions.com', '0788606765', 'Admin', 'password', 'LNPWZuasNNPNY45VAOlBA89VSpi2tTq1wUniJOpT8JkpvXEcHC50s46lWSaGKjzuolWtfR5Ynr8YUXAYGqYOuy3WlZaqK2OUegcIb8YFMuHuGkCKcfQoWHo9M1ANrJQ4w5qmI8SXSebwxhdwm3V6bq0pwQqzuWwNlwEghUDUOMFvls7Ms9BB3qiqFdApoNxotQ1Pkk8iM6GwFA9AETKslVpNNbl4mDw4QbofCyIdLU57Kctn9ojwux0KB6nSCGjBeqg38PDRmsHz3F9FbNzOFBY2Ch9vPTPeDALCrDauta4O7PDyjaLXkgt0hX6v4gmaDgpOC1n3gAvPoigWSGXBo6wlC4BmHb4wnct7kCF7krQ24IO3sNHCAWsOaP5yql0A84R1y0BrK4VSPAyQkBTCUpAUxmqqZz9MOJBCN2yAnDE1lqcOACmyb7v8pVEDjifQDvbzZXglswUfVU1PbkCR1XJAfwsxPMoFr6Lkr4DeN6P9GkR0cYOg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `views` int NOT NULL DEFAULT '1',
  `slug` text,
  `thumb_url` text NOT NULL,
  `published_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
