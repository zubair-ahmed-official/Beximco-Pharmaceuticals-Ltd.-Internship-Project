-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `aname`, `code`, `updated_at`, `created_at`) VALUES
(1, 'Asif Khan', '123456', '2022-08-24 21:49:20', '2022-08-22 21:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `booked_appointment`
--

CREATE TABLE `booked_appointment` (
  `id` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `no_of_people` int(20) NOT NULL,
  `avt` varchar(100) NOT NULL,
  `doctors_payment` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_appointment`
--

INSERT INTO `booked_appointment` (`id`, `cname`, `p_email`, `name`, `phone`, `email`, `department`, `no_of_people`, `avt`, `doctors_payment`, `updated_at`, `created_at`) VALUES
(22, 'Tania Ahmed', 'saad03261@gmail.com', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 2, 'Zubair Ahmed Monday 7:40 pm', '1000 BDT', '2022-11-14 05:10:34', '2022-11-14 05:10:34'),
(23, 'Zubair Ahmed', 'saad03261@gmail.com', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 2, 'Zubair Ahmed Sunday 7pm', '1000 BDT', '2022-11-21 05:20:01', '2022-11-21 05:20:01'),
(24, 'Zubair Ahmed', 'saad03261@gmail.com', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 7, 'Sakib Rahman Monday 9:00 pm', '1500 BDT', '2022-11-21 05:32:05', '2022-11-21 05:32:05'),
(25, 'Zubair Ahmed', 'saad03261@gmail.com', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 2, 'Sakib Rahman Tuesday 7pm', '1500 BDT', '2022-11-21 05:32:20', '2022-11-21 05:32:20'),
(26, 'Zubair Ahmed', 'saad03261@gmail.com', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 2, 'Sakib Rahman Thursday 7pm', '1500 BDT', '2022-11-21 06:12:18', '2022-11-21 06:12:18'),
(27, 'Zubair Ahmed', 'saad03261@gmail.com', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 2, 'Sakib Rahman Thursday 7:40 pm', '1500 BDT', '2022-11-21 06:12:47', '2022-11-21 06:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `delivered_orders`
--

CREATE TABLE `delivered_orders` (
  `id` int(200) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `num` int(20) NOT NULL,
  `tprice` int(100) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivered_orders`
--

INSERT INTO `delivered_orders` (`id`, `cname`, `address`, `phone`, `email`, `name`, `disease`, `price`, `num`, `tprice`, `payment`, `updated_at`, `created_at`) VALUES
(46, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 5, 1250, 'Cash', '2022-10-19 06:41:47', '2022-10-19 06:41:47'),
(47, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1818219812, 'saad03261@gmail.com', 'Napa 500', 'Fever, Weakness', 250, 3, 750, 'Cash', '2022-10-31 06:52:25', '2022-10-31 06:52:25'),
(48, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 6, 1500, 'Cash', '2022-11-09 04:36:24', '2022-11-09 04:36:24'),
(49, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 3, 750, 'Cash', '2022-11-10 04:54:52', '2022-11-10 04:54:52'),
(50, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 2, 500, 'Cash', '2022-11-14 05:19:01', '2022-11-14 05:19:01'),
(51, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1818219812, 'saad03261@gmail.com', 'Paracetamol 500', 'Cold, Fever', 315, 2, 630, 'Cash', '2022-11-14 05:19:36', '2022-11-14 05:19:36'),
(52, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 20, 5000, 'Cash', '2022-11-21 05:38:54', '2022-11-21 05:38:54'),
(53, 'Zubair Ahmed', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'saad03261@gmail.com', 'Acetaminophen', 'Dengue', 250, 2, 500, 'Cash', '2022-11-21 05:39:58', '2022-11-21 05:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `medicine` varchar(20) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `updated_at` varchar(2000) NOT NULL,
  `created_at` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `medicine`, `details`, `updated_at`, `created_at`) VALUES
(2, 'Aceedity', 'Antaceed', 'Acidity occurs when the gastric glands produce a large amount of acid, more than what is needed for the digestion process. In some, the amount of acid is high, or the end of one\'s food pipe is open.', '2022-09-20 05:59:53', ''),
(3, 'Fever', 'Napa', 'A fever is a temporary increase in your body temperature, often due to an illness. Having a fever is a sign that something out of the ordinary is going on in your body. For an adult, a fever may be uncomfortable, but usually isn\'t a cause for concern unless it reaches 103 F (39.4 C) or higher.', '', ''),
(4, 'Cold', 'Piriton', 'The common cold, also known simply as a cold, is a viral infectious disease of the upper respiratory tract that primarily affects the respiratory mucosa of the nose, throat, sinuses, and larynx. Signs and symptoms may appear less than two days after exposure to the virus.', '', ''),
(8, 'Dengue', 'Napa Extraa', 'Dengue is caused by a virus that is mostly transmitted by the bite of female mosquitoes of the species Aedes aegypti. Dengue symptoms range from none to serious flu-like symptoms. A small proportion of people develop severe dengue, which can be fatal.', '2022-10-10 08:10:12', '2022-10-10 08:10:01'),
(9, 'Covid 19', 'Napa 500', 'The common cold, also known simply as a cold, is a viral infectious disease of the upper respiratory tract that primarily affects the respiratory mucosa of the nose, throat, sinuses, and larynx. Signs and symptoms may appear less than two days after exposure to the virus.', '2022-11-21 05:36:17', '2022-10-11 04:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `bio` varchar(2000) NOT NULL,
  `joining_date` varchar(20) NOT NULL,
  `doctors_payment` int(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `email`, `department`, `bio`, `joining_date`, `doctors_payment`, `updated_at`, `created_at`) VALUES
(13, 'Zubair Ahmed', '01854678948', 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', '22-2-2022', 1000, '2022-03-11 17:08:40', '2022-03-09 13:31:23'),
(16, 'Sakib Rahman', '01961445786', 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', '2-9-2022', 1500, '2022-09-12 03:54:01', '2022-09-12 03:53:48'),
(17, 'Saif Khan', '01854788965', 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', '6-9-2022', 1200, '2022-09-12 05:21:18', '2022-09-12 05:21:18'),
(20, 'Asif Khan', '0185478965', 'asif03261@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', '22-8-2022', 1500, '2022-10-10 08:08:07', '2022-10-10 08:06:56'),
(21, 'Raihan Khan', '0187459632', 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', '22-8-2022', 1000, '2022-10-10 08:24:44', '2022-10-10 08:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_appointment`
--

CREATE TABLE `doctors_appointment` (
  `id` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `no_of_people` int(20) NOT NULL,
  `avt` varchar(100) NOT NULL,
  `doctors_payment` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_appointment`
--

INSERT INTO `doctors_appointment` (`id`, `cname`, `name`, `phone`, `email`, `department`, `bio`, `no_of_people`, `avt`, `doctors_payment`, `updated_at`, `created_at`) VALUES
(4, 'Zubair Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Sunday 7pm', '0', '2022-10-10 06:19:27', '2022-10-10 06:19:27'),
(5, 'Sadia Ahmed', 'Raihan Khan', 187459632, 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 3, 'Raihan Khan Sunday 7pm', '0', '2022-10-11 05:07:12', '2022-10-11 05:07:12'),
(6, 'Sadia Ahmed', 'Raihan Khan', 187459632, 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 3, 'Raihan Khan Sunday 7:30pm', '0', '2022-10-11 05:07:19', '2022-10-11 05:07:19'),
(7, 'Sadia Ahmed', 'Raihan Khan', 187459632, 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 3, 'Raihan Khan Sunday 7:30pm', '0', '2022-10-11 05:07:58', '2022-10-11 05:07:58'),
(8, 'Rayhan Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Sunday 7pm', '0', '2022-10-23 05:54:40', '2022-10-23 05:54:40'),
(9, 'Rayhan Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Sunday 7pm', '0', '2022-11-06 04:12:11', '2022-11-06 04:12:11'),
(10, 'Rayhan Ahmed', 'Asif Khan', 185478965, 'asif03261@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 7, 'Asif Khan Sunday 7pm', '0', '2022-11-06 04:52:12', '2022-11-06 04:52:12'),
(11, 'Rayhan Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Sunday 7pm', '1000 BDT', '2022-11-06 05:06:07', '2022-11-06 05:06:07'),
(12, 'Rayhan Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Sunday 7:30pm', '1500 BDT', '2022-11-06 05:15:49', '2022-11-06 05:15:49'),
(13, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 7, 'Sakib Rahman Sunday 7pm', '1500 BDT', '2022-11-06 05:17:04', '2022-11-06 05:17:04'),
(14, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 7, 'Sakib Rahman Sunday 7pm', '1500 BDT', '2022-11-06 05:17:04', '2022-11-06 05:17:04'),
(15, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 7, 'Sakib Rahman Sunday 7pm', '1500 BDT', '2022-11-06 05:18:05', '2022-11-06 05:18:05'),
(16, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 7, 'Sakib Rahman Sunday 7pm', '1500 BDT', '2022-11-06 05:18:25', '2022-11-06 05:18:25'),
(17, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Sunday 7pm', '1500 BDT', '2022-11-06 05:19:52', '2022-11-06 05:19:52'),
(18, 'Arnob Khan', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 7, 'Zubair Ahmed Sunday 7:30pm', '1000 BDT', '2022-11-06 05:49:58', '2022-11-06 05:49:58'),
(19, 'Tania Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 3, 'Zubair Ahmed Sunday 7pm', '1000 BDT', '2022-11-06 05:50:43', '2022-11-06 05:50:43'),
(20, 'Tania Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Sunday 7:30pm', '1200 BDT', '2022-11-07 04:06:27', '2022-11-07 04:06:27'),
(21, 'Tania Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Sunday 7:30pm', '1200 BDT', '2022-11-07 04:08:14', '2022-11-07 04:08:14'),
(22, 'Tania Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Sunday 7:30pm', '1200 BDT', '2022-11-07 04:09:32', '2022-11-07 04:09:32'),
(23, 'Rayhan Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 2, 'Saif Khan Sunday 10:00 pm', '1200 BDT', '2022-11-07 04:12:39', '2022-11-07 04:12:39'),
(24, 'Saad Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 7, 'Zubair Ahmed Sunday 7:20pm', '1000 BDT', '2022-11-07 05:32:19', '2022-11-07 05:32:19'),
(25, 'Nafiz Karim', 'Raihan Khan', 187459632, 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Raihan Khan Sunday 7pm', '1000 BDT', '2022-11-07 06:15:05', '2022-11-07 06:15:05'),
(26, 'Nafiz Karim', 'Raihan Khan', 187459632, 'raihan474@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 1, 'Raihan Khan Sunday 7pm', '1000 BDT', '2022-11-07 06:30:55', '2022-11-07 06:30:55'),
(27, 'Nafiz Karim', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 3, 'Zubair Ahmed Sunday 7:40pm', '1000 BDT', '2022-11-07 06:42:23', '2022-11-07 06:42:23'),
(28, 'Nafiz Karim', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Wednesday 9:00 pm', '1000 BDT', '2022-11-07 06:42:33', '2022-11-07 06:42:33'),
(29, 'Zubair Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Sunday 7pm', '1200 BDT', '2022-11-09 04:32:08', '2022-11-09 04:32:08'),
(30, 'Zubair Ahmed', 'Saif Khan', 1854788965, 'saif0601@gmail.com', 'Bone', 'MBBS, Dhaka Medical College', 7, 'Saif Khan Monday 7pm', '1200 BDT', '2022-11-09 04:32:54', '2022-11-09 04:32:54'),
(31, 'Nafiz Karim', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Sunday 7pm', '1000 BDT', '2022-11-09 09:33:31', '2022-11-09 09:33:31'),
(32, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Sunday 7:40pm', '1500 BDT', '2022-11-10 04:56:40', '2022-11-10 04:56:40'),
(33, 'Tania Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Monday 7:40 pm', '1000 BDT', '2022-11-14 05:10:34', '2022-11-14 05:10:34'),
(34, 'Zubair Ahmed', 'Zubair Ahmed', 1854678948, 'zub0601@gmail.com', 'Cardiology', 'MBBS, Dhaka Medical College', 2, 'Zubair Ahmed Sunday 7pm', '1000 BDT', '2022-11-21 05:20:01', '2022-11-21 05:20:01'),
(35, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 7, 'Sakib Rahman Monday 9:00 pm', '1500 BDT', '2022-11-21 05:32:05', '2022-11-21 05:32:05'),
(36, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Tuesday 7pm', '1500 BDT', '2022-11-21 05:32:20', '2022-11-21 05:32:20'),
(37, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Thursday 7pm', '1500 BDT', '2022-11-21 06:12:18', '2022-11-21 06:12:18'),
(38, 'Zubair Ahmed', 'Sakib Rahman', 1961445786, 'sakib856@gmail.com', 'Neurology', 'MBBS, Shirajul Haque Medical College', 2, 'Sakib Rahman Thursday 7:40 pm', '1500 BDT', '2022-11-21 06:12:47', '2022-11-21 06:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(20) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `details`, `updated_at`, `created_at`) VALUES
(2, 'World Diabetes Day', '7:00pm, 14th November 2022', 'World Diabetes Day is the primary global awareness campaign focusing on diabetes mellitus and is held on 14 November each year.', '2022-11-09 05:26:00', '2022-11-09 05:26:00'),
(5, 'World Health Day', '7th April 2023', 'World Health Day is a global health awareness day celebrated every year on 7 April, under the sponsorship of the World Health Organization, as well as other related organizations. In 1948, the WHO held the First World Health Assembly.', '2022-11-21 06:19:52', '2022-11-21 06:19:52');

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
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` int(20) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `code`, `updated_at`, `created_at`) VALUES
(1, 'Saad Ahmed', 123456, '2022-08-24 21:49:20', '2022-08-22 21:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `disease` varchar(20) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `discount` int(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `disease`, `details`, `discount`, `price`, `updated_at`, `created_at`) VALUES
(29, 'Paracetamol 500', 'Cold, Fever', 'The common cold, also known simply as a cold, is a viral infectious disease of the upper respiratory tract that primarily affects the respiratory mucosa of the nose, throat, sinuses, and larynx. Signs and symptoms may appear less than two days after exposure to the virus.', 10, '315', '2022-11-02 04:49:17', '2022-11-02 04:23:17'),
(30, 'Antaceed', 'Acidity', 'Acetaminophen is used to relieve mild to moderate pain from headaches, muscle aches, menstrual periods, colds and sore throats, toothaches, backaches, and reactions to vaccinations (shots), and to reduce fever.', 5, '190', '2022-11-02 04:50:20', '2022-11-02 04:26:43'),
(34, 'Napa 650', 'Cold, Fever', 'The common cold, also known simply as a cold, is a viral infectious disease of the upper respiratory tract that primarily affects the respiratory mucosa of the nose, throat, sinuses, and larynx. Signs and symptoms may appear less than two days after exposure to the virus.', 5, '190', '2022-11-21 06:10:12', '2022-11-21 06:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_diseases`
--

CREATE TABLE `medicines_diseases` (
  `id` int(20) NOT NULL,
  `Medicines_id` int(20) NOT NULL,
  `Diseases_id` int(20) NOT NULL,
  `updated_at` varchar(2000) NOT NULL,
  `created_at` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines_diseases`
--

INSERT INTO `medicines_diseases` (`id`, `Medicines_id`, `Diseases_id`, `updated_at`, `created_at`) VALUES
(3, 3, 1, '', ''),
(51, 30, 2, '2022-11-09 04:48:59', '2022-11-09 04:48:59'),
(52, 29, 9, '2022-11-09 04:49:30', '2022-11-09 04:49:30'),
(54, 29, 3, '2022-11-21 05:36:44', '2022-11-21 05:36:44');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_26_081843_create_students_table', 2),
(6, '2022_10_19_051800_create_postimages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(50) NOT NULL,
  `headline` varchar(50) NOT NULL,
  `details` mediumtext NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `headline`, `details`, `updated_at`, `created_at`) VALUES
(2, 'Pharmacy Laws', 'Pharmacy Act - The Texas Pharmacy Act is located in Chapters 551-569 of the Texas Occupations Code.   Pharmacy Rules - The Texas Pharmacy Rules are located in Chapters 281-315 of the Texas Administrative Code.   Other Laws and Rules  Rule Changes  Order the Texas Pharmacy Laws and Regulations through: LexisNexis or call: 1-800-533-1637. Pharmacies operating in Texas are required to maintain a copy of the laws and rules governing the practice of pharmacy in hard copy or electronic format. Please note that the electronic version must be accessible to pharmacy personnel at all times.  You can join our email list to receive news and updates, including updates about rules.', '2022-11-10 06:00:29', '2022-11-10 05:30:02'),
(4, 'Pharmacy Laws & Rules', 'World Health Day is a global health awareness day celebrated every year on 7 April, under the sponsorship of the World Health Organization, as well as other related organizations. In 1948, the WHO held the First World Health Assembly.', '2022-11-21 05:42:02', '2022-11-21 05:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `num` int(20) NOT NULL,
  `tprice` int(100) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cname`, `email`, `address`, `phone`, `name`, `disease`, `price`, `num`, `tprice`, `payment`, `updated_at`, `created_at`) VALUES
(61, 'Zubair Ahmed', 'saad03261@gmail.com', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1818219812, 'Paracetamol 500', 'Cold, Fever', 315, 2, 630, 'Cash', '2022-11-21 05:30:13', '2022-11-21 05:30:13'),
(63, 'Zubair Ahmed', 'saad03261@gmail.com', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'Acetaminophen', 'Dengue', 250, 3, 750, 'Cash', '2022-11-21 05:40:51', '2022-11-21 05:40:51'),
(64, 'Zubair Ahmed', 'saad03261@gmail.com', '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 1748589644, 'Acetaminophen', 'Dengue', 250, 3, 750, 'Cash', '2022-11-21 06:11:16', '2022-11-21 06:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `updated_at` varchar(2000) NOT NULL,
  `created_at` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_table`
--

INSERT INTO `otp_table` (`id`, `name`, `email`, `phone`, `code`, `updated_at`, `created_at`) VALUES
(37, 'Nafiz Karim', 'nafizkarim9@gmail.com', '01759620729', '1310192448#Vic', '2022-11-13 15:45:45', '2022-10-19 08:29:13'),
(38, 'Sayemur Rahman', 'sayem543@gmail.com', '+8801867855558', '102588', '2022-10-23 04:19:17', '2022-10-23 04:19:17'),
(41, 'Sakib Rahman', 'sakib856@gmail.com', '01818219812', '1310192448#Vic', '2022-10-31 05:54:35', '2022-10-31 05:54:35'),
(47, 'Zubair Ahmed', 'saad03261@gmail.com', '01867855558', '01818219812#Vic', '2022-11-21 06:06:25', '2022-11-21 06:04:58'),
(48, 'Zubair Ahmed', 'saad03261@gmail.com', '+8801867855558', '399881', '2022-11-21 06:07:40', '2022-11-21 06:07:40');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postimages`
--

CREATE TABLE `postimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques_anss`
--

CREATE TABLE `ques_anss` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ques` varchar(5000) DEFAULT NULL,
  `ans` varchar(5000) DEFAULT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques_anss`
--

INSERT INTO `ques_anss` (`id`, `name`, `email`, `ques`, `ans`, `updated_at`, `created_at`) VALUES
(3, 'Nafiz Karim', 'nafizkarim9@gmail.com', 'How can I remove headache?', 'Take Napa.', '2022-11-10 09:50:22', '2022-11-10 09:11:52'),
(4, 'Zubair Ahmed', 'saad03261@gmail.com', 'How can I remove back pain?', 'Take Paracetamol 500.', '2022-11-10 09:55:34', '2022-11-10 09:16:31'),
(5, 'Zubair Ahmed', 'saad03261@gmail.com', 'How can I remove headache?', 'Take Napa.', '2022-11-14 05:12:48', '2022-11-14 05:12:08'),
(6, 'Zubair Ahmed', 'saad03261@gmail.com', 'How can I remove headache?', 'Take Napa.', '2022-11-21 05:33:38', '2022-11-21 05:33:09'),
(7, 'Zubair Ahmed', 'saad03261@gmail.com', 'How can I remove headache?', 'Take Paracetamol 500.', '2022-11-21 06:23:25', '2022-11-21 06:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `image` varchar(2000) DEFAULT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `code`, `email`, `phone`, `nid`, `address`, `gender`, `age`, `edu`, `image`, `updated_at`, `created_at`) VALUES
(32, 'Nafiz Karim', '1310192448#Vic', 'nafizkarim9@gmail.com', 1759620729, 753159, '30/6, Dinnath Sen Road, Gendaria, Dhaka 1204', 'Male', 23, 'BBA', '2022101908291661530105043.jpg', '2022-10-19 08:29:13', '2022-10-19 08:29:13'),
(39, 'Zubair Ahmed', '1310192448#Vic', 'saad03261@gmail.com', 1867855558, 415263, '81 Dinnath Sen Road, Gandaria, Dhaka 1204', 'Male', 23, 'CSE', '202211210604Zubair Ahmed.jpg', '2022-11-21 06:04:58', '2022-11-21 06:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` int(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`id`, `name`, `code`, `updated_at`, `created_at`) VALUES
(1, 'Rayhan Ahmed', 123456, '2022-08-24 21:49:20', '2022-08-22 21:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_appointment`
--
ALTER TABLE `booked_appointment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `avt` (`avt`);

--
-- Indexes for table `delivered_orders`
--
ALTER TABLE `delivered_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_appointment`
--
ALTER TABLE `doctors_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines_diseases`
--
ALTER TABLE `medicines_diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_table`
--
ALTER TABLE `otp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postimages`
--
ALTER TABLE `postimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_anss`
--
ALTER TABLE `ques_anss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked_appointment`
--
ALTER TABLE `booked_appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `delivered_orders`
--
ALTER TABLE `delivered_orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctors_appointment`
--
ALTER TABLE `doctors_appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `medicines_diseases`
--
ALTER TABLE `medicines_diseases`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postimages`
--
ALTER TABLE `postimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ques_anss`
--
ALTER TABLE `ques_anss`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
