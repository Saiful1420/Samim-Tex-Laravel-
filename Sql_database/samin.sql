-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 05:16 PM
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
-- Database: `samin`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrers`
--

CREATE TABLE `carrers` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrers`
--

INSERT INTO `carrers` (`id`, `department_name`, `requirements`, `created_at`, `updated_at`) VALUES
(13, '3', 'Excellent Communication skills', '2019-10-26 04:05:38', '2019-10-26 04:05:38'),
(14, '8', 'Maintain consistency, focus, high level of accuracy, sense of confidentiality, efficiency and attention to detail', '2019-10-26 04:19:00', '2019-10-26 04:19:00'),
(17, NULL, 'Proficiency in MS Office Suite – Especially MS Excel', '2019-10-26 07:05:37', '2019-10-26 07:05:37'),
(18, NULL, 'Ability to work independently and under pressure', '2019-10-26 07:07:39', '2019-10-26 07:07:39'),
(19, NULL, '2-3 year’s relevant experience with a special focus on Talent Acquisition', '2019-10-26 07:07:55', '2019-10-26 07:07:55'),
(20, NULL, 'Prior knowledge and experience on working with HRIS', '2019-10-27 07:58:12', '2019-10-27 07:58:12'),
(21, NULL, 'Possess/Following a Degree in HR/PQHRM', '2019-10-27 07:58:26', '2019-10-27 07:58:26'),
(22, NULL, 'Talent Acquisition Functions', '2019-10-27 07:58:45', '2019-10-27 07:58:45'),
(23, NULL, 'Strategic HR Planning', '2019-10-27 07:58:57', '2019-10-27 07:58:57'),
(24, NULL, 'Disciplinary Procedures', '2019-10-27 07:59:09', '2019-10-27 07:59:09'),
(25, NULL, 'Involvement in Corporate Settings', '2019-10-27 07:59:22', '2019-10-27 07:59:22'),
(26, NULL, 'Employee Life Cycle Management', '2019-10-27 07:59:32', '2019-10-27 07:59:32'),
(28, NULL, 'Preparation of Management Information', '2019-10-27 08:00:30', '2019-10-27 08:00:30'),
(29, NULL, 'Possess/Following a Degree in HR/PQHRM', '2019-10-27 08:00:43', '2019-10-27 08:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL),
(2, 'women', NULL, NULL),
(3, 'Kid\'s & Babie\'s', NULL, NULL),
(4, 'Lingeries', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_name`, `image`, `created_at`, `updated_at`) VALUES
(5, 'B', 'public/company/5db5ab3805d1e2.jpg', '2019-10-27 08:05:39', '2019-10-27 08:35:36'),
(6, 'C', 'public/company/5db5a43e71aeb7.jpg', '2019-10-27 08:05:50', '2019-10-27 08:05:50'),
(7, 'D', 'public/company/5db5a44db57621.jpg', '2019-10-27 08:06:05', '2019-10-27 08:06:05'),
(8, 'E', 'public/company/5db5a458884299.jpg', '2019-10-27 08:06:16', '2019-10-27 08:06:16'),
(9, 'F', 'public/company/5db5a4679534f10.jpg', '2019-10-27 08:06:31', '2019-10-27 08:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(3, 'Manager Cutting (Knit Garments)', '2019-10-25 06:37:13', '2019-10-25 06:37:13'),
(8, 'HR PARTNER - TALENT ACQUISITION', '2019-10-26 01:32:16', '2019-10-26 01:32:16');

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
(3, '2019_02_24_193233_create_verify_tokens_table', 1),
(4, '2019_03_25_060543_create_companies_table', 2),
(5, '2019_03_25_081800_create_companies_table', 3),
(6, '2019_03_25_093258_create_branches_table', 4),
(7, '2019_03_25_101142_create_custormers_table', 5),
(8, '2019_03_25_102732_create_suppliers_table', 6),
(9, '2019_03_26_120029_create_company_users_table', 7),
(10, '2019_03_27_050006_create_groups_table', 8),
(11, '2019_03_27_053824_create_categories_table', 9),
(12, '2019_03_27_092214_create_accountheads_table', 10),
(13, '2019_03_30_105844_create_transvouchers_table', 11),
(14, '2019_03_30_111633_create_paymentvouchers_table', 11),
(15, '2019_03_30_111722_create_collectionvouchers_table', 11),
(16, '2019_10_23_115502_create_products_table', 12),
(17, '2019_10_23_115955_create_categories_table', 13),
(18, '2019_10_25_112535_create_departments_table', 14),
(19, '2019_10_25_141011_create_carrers_table', 15),
(20, '2019_10_26_134456_create_customers_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagory`, `product_name`, `image`, `created_at`, `updated_at`) VALUES
(6, '3', 'Baby Shirt', 'public/image/5db063e4f38f8Screenshot_52.jpg', '2019-10-23 08:29:57', '2019-10-23 08:29:57'),
(9, '2', 'women-pant', 'public/image/5db06464d4154Screenshot_17.jpg', '2019-10-23 08:32:04', '2019-10-23 08:32:04'),
(10, '3', 'Baby-Jacket', 'public/image/5db064a082eceScreenshot_30.jpg', '2019-10-23 08:33:04', '2019-10-23 08:33:04'),
(12, '1', 'Man-Underware', 'public/image/5db077c48d2f2Screenshot_1.jpg', '2019-10-23 09:54:44', '2019-10-27 08:41:37'),
(14, '1', 'T-shirt', 'public/image/5db0785933571Screenshot_6.jpg', '2019-10-23 09:57:13', '2019-10-23 09:57:13'),
(15, '1', 'Man-Pant', 'public/image/5db078b795558Screenshot_13.jpg', '2019-10-23 09:58:47', '2019-10-23 09:58:47'),
(16, '1', 'Man-Underware', 'public/image/5db078d0c10e8Screenshot_2.jpg', '2019-10-23 09:59:12', '2019-10-23 09:59:12'),
(17, '1', 'T-shirt', 'public/image/5db07904d2800Screenshot_4.jpg', '2019-10-23 10:00:04', '2019-10-23 10:00:04'),
(18, '1', 'Men-trousers', 'public/image/5db1478d4d47bScreenshot_14.jpg', '2019-10-24 00:41:17', '2019-10-24 00:41:17'),
(19, '1', 'T-shirt', 'public/image/5db147cc45543Screenshot_7.jpg', '2019-10-24 00:42:20', '2019-10-24 00:42:20'),
(20, '1', 'Man-Underware', 'public/image/5db147e2a71d6Screenshot_3.jpg', '2019-10-24 00:42:42', '2019-10-24 00:42:42'),
(22, '1', 'Man-Pant', 'public/image/5db14833213e6Screenshot_18.jpg', '2019-10-24 00:44:03', '2019-10-24 00:44:03'),
(23, '1', 'Man-Underware', 'public/image/5db14862a5703Screenshot_40.jpg', '2019-10-24 00:44:50', '2019-10-24 00:44:50'),
(24, '1', 'Man-Jacket', 'public/image/5db14887a28e3Screenshot_24.jpg', '2019-10-24 00:45:27', '2019-10-24 00:45:27'),
(25, '1', 'T-shirt', 'public/image/5db148c9eaa44Screenshot_9.jpg', '2019-10-24 00:46:33', '2019-10-24 00:46:33'),
(26, '1', 'T-shirt', 'public/image/5db148d6d80d3Screenshot_8.jpg', '2019-10-24 00:46:46', '2019-10-24 00:46:46'),
(27, '1', 'Men-trousers', 'public/image/5db149140a271Screenshot_16.jpg', '2019-10-24 00:47:48', '2019-10-24 00:47:48'),
(28, '1', 'T-shirt', 'public/image/5db1492f0a69aScreenshot_11.jpg', '2019-10-24 00:48:15', '2019-10-24 00:48:15'),
(29, '1', 'Men-trousers', 'public/image/5db14943c552cScreenshot_17.jpg', '2019-10-24 00:48:35', '2019-10-24 00:48:35'),
(30, '1', 'Man-Jacket', 'public/image/5db149aedfd1cScreenshot_28.jpg', '2019-10-24 00:50:22', '2019-10-24 00:50:22'),
(31, '1', 'Men-trousers', 'public/image/5db149be00bfbScreenshot_19.jpg', '2019-10-24 00:50:38', '2019-10-24 00:50:38'),
(32, '1', 'T-shirt', 'public/image/5db14a0ad022aScreenshot_10.jpg', '2019-10-24 00:51:54', '2019-10-24 00:51:54'),
(33, '1', 'Men-trousers', 'public/image/5db14a1a3e431Screenshot_15.jpg', '2019-10-24 00:52:10', '2019-10-24 00:52:10'),
(34, '1', 'Man-Jacket', 'public/image/5db14a78990c7Screenshot_22.jpg', '2019-10-24 00:53:44', '2019-10-24 00:53:44'),
(35, '1', 'Man-Jacket', 'public/image/5db14a89cef41Screenshot_23.jpg', '2019-10-24 00:54:01', '2019-10-24 00:54:01'),
(36, '1', 'Man-Jacket', 'public/image/5db14aa120ed1Screenshot_25.jpg', '2019-10-24 00:54:25', '2019-10-24 00:54:25'),
(37, '1', 'Man-Jacket', 'public/image/5db14ab0a5a32Screenshot_26.jpg', '2019-10-24 00:54:40', '2019-10-24 00:54:40'),
(38, '1', 'Man-Jacket', 'public/image/5db14abe4310fScreenshot_27.jpg', '2019-10-24 00:54:54', '2019-10-24 00:54:54'),
(39, '1', 'Man-Jacket', 'public/image/5db14af8b5aecScreenshot_29.jpg', '2019-10-24 00:55:52', '2019-10-24 00:55:52'),
(40, '1', 'Man-Jacket', 'public/image/5db14b05cd7c6Screenshot_30.jpg', '2019-10-24 00:56:05', '2019-10-24 00:56:05'),
(41, '1', 'Man-Jacket', 'public/image/5db14b177e72eScreenshot_32.jpg', '2019-10-24 00:56:23', '2019-10-24 00:56:23'),
(42, '1', 'Man-Jacket', 'public/image/5db14b27373d1Screenshot_31.jpg', '2019-10-24 00:56:39', '2019-10-24 00:56:39'),
(43, '1', 'Man-Jacket', 'public/image/5db14b32efc98Screenshot_33.jpg', '2019-10-24 00:56:50', '2019-10-24 00:56:50'),
(44, '1', 'Man-Jacket', 'public/image/5db14b3fa3962Screenshot_35.jpg', '2019-10-24 00:57:03', '2019-10-24 00:57:03'),
(45, '1', 'Man-Jacket', 'public/image/5db14b4cba061Screenshot_34.jpg', '2019-10-24 00:57:16', '2019-10-24 00:57:16'),
(46, '1', 'Man-Jacket', 'public/image/5db14b69e966eScreenshot_37.jpg', '2019-10-24 00:57:45', '2019-10-24 00:57:45'),
(47, '1', 'Man-Jacket', 'public/image/5db14b74d00e8Screenshot_39.jpg', '2019-10-24 00:57:56', '2019-10-24 00:57:56'),
(48, '1', 'Man-Jacket', 'public/image/5db14b8014965Screenshot_38.jpg', '2019-10-24 00:58:08', '2019-10-24 00:58:08'),
(49, '2', 'Women-Jacket', 'public/image/5db14be183f76Screenshot_24.jpg', '2019-10-24 00:59:45', '2019-10-24 00:59:45'),
(50, '2', 'women-short-pants', 'public/image/5db14c37bf14fScreenshot_12.jpg', '2019-10-24 01:01:11', '2019-10-24 01:01:11'),
(51, '2', 'T-shirt', 'public/image/5db14c4dab3e6Screenshot_1.jpg', '2019-10-24 01:01:33', '2019-10-24 01:01:33'),
(52, '2', 'women-Shirt', 'public/image/5db14c713da05Screenshot_10.jpg', '2019-10-24 01:02:09', '2019-10-24 01:02:09'),
(53, '2', 'Women-T-shirt', 'public/image/5db14ca3d0a4eScreenshot_2.jpg', '2019-10-24 01:02:59', '2019-10-24 01:02:59'),
(54, '2', 'Women-T-shirt', 'public/image/5db14cc67acaaScreenshot_9.jpg', '2019-10-24 01:03:34', '2019-10-24 01:03:34'),
(55, '2', 'women-pant', 'public/image/5db14cdbd96b8Screenshot_16.jpg', '2019-10-24 01:03:55', '2019-10-24 01:03:55'),
(57, '2', 'Women-Jacket', 'public/image/5db14d0776635Screenshot_30.jpg', '2019-10-24 01:04:39', '2019-10-24 01:04:39'),
(58, '2', 'women-short-pants', 'public/image/5db14d29c40d9Screenshot_13.jpg', '2019-10-24 01:05:13', '2019-10-24 01:05:13'),
(59, '2', 'Women-Jacket', 'public/image/5db14d38e8dcfScreenshot_33.jpg', '2019-10-24 01:05:29', '2019-10-24 01:05:29'),
(60, '2', 'Women-T-shirt', 'public/image/5db14d58e2211Screenshot_5.jpg', '2019-10-24 01:06:00', '2019-10-24 01:06:00'),
(61, '2', 'Women-T-shirt', 'public/image/5db14d7d82140Screenshot_3.jpg', '2019-10-24 01:06:37', '2019-10-24 01:06:37'),
(62, '2', 'Women-T-shirt', 'public/image/5db14da3c0a83Screenshot_4.jpg', '2019-10-24 01:07:15', '2019-10-24 01:07:15'),
(63, '2', 'Women-T-shirt', 'public/image/5db14db4f18e9Screenshot_6.jpg', '2019-10-24 01:07:33', '2019-10-24 01:07:33'),
(64, '2', 'Women-T-shirt', 'public/image/5db14df4d009eScreenshot_7.jpg', '2019-10-24 01:08:36', '2019-10-24 01:08:36'),
(65, '2', 'Women-T-shirt', 'public/image/5db14e1747c5bScreenshot_11.jpg', '2019-10-24 01:09:11', '2019-10-24 01:09:11'),
(66, '2', 'women-short-pants', 'public/image/5db14e50d096eScreenshot_14.jpg', '2019-10-24 01:10:08', '2019-10-24 01:10:08'),
(67, '2', 'women-pant', 'public/image/5db14e672802cScreenshot_18.jpg', '2019-10-24 01:10:31', '2019-10-24 01:10:31'),
(68, '2', 'women-short-pants', 'public/image/5db14e75e63a1Screenshot_15.jpg', '2019-10-24 01:10:45', '2019-10-24 01:10:45'),
(69, '2', 'women-pant', 'public/image/5db15251ab464Screenshot_19.jpg', '2019-10-24 01:27:13', '2019-10-24 01:27:13'),
(70, '2', 'women-pant', 'public/image/5db1527e304e5Screenshot_21.jpg', '2019-10-24 01:27:58', '2019-10-24 01:27:58'),
(71, '2', 'women-pant', 'public/image/5db1529e5dfa3Screenshot_22.jpg', '2019-10-24 01:28:30', '2019-10-24 01:28:30'),
(72, '2', 'women-pant', 'public/image/5db152b227d48Screenshot_20.jpg', '2019-10-24 01:28:50', '2019-10-24 01:28:50'),
(73, '2', 'Women-Jacket', 'public/image/5db152ddd4e70Screenshot_25.jpg', '2019-10-24 01:29:33', '2019-10-24 01:29:33'),
(74, '2', 'Women-Jacket', 'public/image/5db152ea86e66Screenshot_26.jpg', '2019-10-24 01:29:46', '2019-10-24 01:29:46'),
(75, '2', 'Women-Jacket', 'public/image/5db152faeebf4Screenshot_27.jpg', '2019-10-24 01:30:02', '2019-10-24 01:30:02'),
(76, '2', 'Women-Jacket', 'public/image/5db1530a84fadScreenshot_28.jpg', '2019-10-24 01:30:18', '2019-10-24 01:30:18'),
(77, '2', 'Women-Jacket', 'public/image/5db153170e69eScreenshot_29.jpg', '2019-10-24 01:30:31', '2019-10-24 01:30:31'),
(78, '2', 'Women-Jacket', 'public/image/5db1532a68112Screenshot_31.jpg', '2019-10-24 01:30:50', '2019-10-24 01:30:50'),
(79, '2', 'Women-Jacket', 'public/image/5db1533a4813eScreenshot_32.jpg', '2019-10-24 01:31:06', '2019-10-24 01:31:06'),
(80, '2', 'Women-Jacket', 'public/image/5db1534f07774Screenshot_35.jpg', '2019-10-24 01:31:27', '2019-10-24 01:31:27'),
(81, '2', 'Women-Jacket', 'public/image/5db1535aed73aScreenshot_34.jpg', '2019-10-24 01:31:38', '2019-10-24 01:31:38'),
(82, '2', 'Women-Jacket', 'public/image/5db1536b3f72fScreenshot_36.jpg', '2019-10-24 01:31:55', '2019-10-24 01:31:55'),
(83, '2', 'Women-Jacket', 'public/image/5db1538c750c5Screenshot_37.jpg', '2019-10-24 01:32:28', '2019-10-24 01:32:28'),
(84, '2', 'Women-Jacket', 'public/image/5db153993e2dcScreenshot_38.jpg', '2019-10-24 01:32:41', '2019-10-24 01:32:41'),
(85, '2', 'Women-T-shirt', 'public/image/5db153b1436a5Screenshot_53.jpg', '2019-10-24 01:33:05', '2019-10-24 01:33:05'),
(86, '3', 'kid', 'public/image/5db1544f51237Screenshot_1.jpg', '2019-10-24 01:35:43', '2019-10-24 01:35:43'),
(87, '3', 'kid', 'public/image/5db1546b9a9cfScreenshot_2.jpg', '2019-10-24 01:36:11', '2019-10-24 01:36:11'),
(88, '3', 'kid', 'public/image/5db1547837f25Screenshot_3.jpg', '2019-10-24 01:36:24', '2019-10-24 01:36:24'),
(89, '3', 'kid', 'public/image/5db1548799b63Screenshot_4.jpg', '2019-10-24 01:36:39', '2019-10-24 01:36:39'),
(90, '3', 'kid', 'public/image/5db1549b0b64cScreenshot_5.jpg', '2019-10-24 01:36:59', '2019-10-24 01:36:59'),
(91, '3', 'kid', 'public/image/5db154a800b44Screenshot_6.jpg', '2019-10-24 01:37:12', '2019-10-24 01:37:12'),
(92, '3', 'kid', 'public/image/5db154b4071b7Screenshot_7.jpg', '2019-10-24 01:37:24', '2019-10-24 01:37:24'),
(93, '3', 'kid', 'public/image/5db154c0ee2bfScreenshot_8.jpg', '2019-10-24 01:37:36', '2019-10-24 01:37:36'),
(94, '3', 'kid', 'public/image/5db154cf32ca2Screenshot_9.jpg', '2019-10-24 01:37:51', '2019-10-24 01:37:51'),
(95, '3', 'kid', 'public/image/5db154db84a63Screenshot_10.jpg', '2019-10-24 01:38:03', '2019-10-24 01:38:03'),
(96, '3', 'kid', 'public/image/5db154e5aed39Screenshot_11.jpg', '2019-10-24 01:38:13', '2019-10-24 01:38:13'),
(97, '3', 'kid', 'public/image/5db154f00df6aScreenshot_12.jpg', '2019-10-24 01:38:24', '2019-10-24 01:38:24'),
(98, '3', 'kid', 'public/image/5db154fd3613eScreenshot_13.jpg', '2019-10-24 01:38:37', '2019-10-24 01:38:37'),
(99, '3', 'kid', 'public/image/5db1550c1a9feScreenshot_14.jpg', '2019-10-24 01:38:52', '2019-10-24 01:38:52'),
(100, '3', 'kid', 'public/image/5db15517b14a5Screenshot_15.jpg', '2019-10-24 01:39:03', '2019-10-24 01:39:03'),
(101, '3', 'kid', 'public/image/5db15524d1c6fScreenshot_16.jpg', '2019-10-24 01:39:16', '2019-10-24 01:39:16'),
(102, '3', 'Babies', 'public/image/5db155650e5edScreenshot_17.jpg', '2019-10-24 01:40:21', '2019-10-24 01:40:21'),
(103, '3', 'Babies', 'public/image/5db1557411b2eScreenshot_18.jpg', '2019-10-24 01:40:36', '2019-10-24 01:40:36'),
(104, '3', 'Babies', 'public/image/5db1557f06ebcScreenshot_19.jpg', '2019-10-24 01:40:47', '2019-10-24 01:40:47'),
(105, '3', 'Babies', 'public/image/5db1558ad96d9Screenshot_20.jpg', '2019-10-24 01:40:58', '2019-10-24 01:40:58'),
(106, '3', 'Baby pant', 'public/image/5db17485de9c2Screenshot_21.jpg', '2019-10-24 03:53:09', '2019-10-24 03:53:09'),
(107, '3', 'Baby pant', 'public/image/5db17497244f9Screenshot_23.jpg', '2019-10-24 03:53:27', '2019-10-24 03:53:27'),
(108, '3', 'Baby pant', 'public/image/5db174a72c844Screenshot_22.jpg', '2019-10-24 03:53:43', '2019-10-24 03:53:43'),
(109, '3', 'Baby pant', 'public/image/5db174b78a9e8Screenshot_24.jpg', '2019-10-24 03:53:59', '2019-10-24 03:53:59'),
(110, '3', 'Baby pant', 'public/image/5db174c566eb0Screenshot_25.jpg', '2019-10-24 03:54:13', '2019-10-24 03:54:13'),
(111, '3', 'Baby pant', 'public/image/5db174d477c11Screenshot_26.jpg', '2019-10-24 03:54:28', '2019-10-24 03:54:28'),
(112, '3', 'Baby pant', 'public/image/5db174f9120fcScreenshot_27.jpg', '2019-10-24 03:55:05', '2019-10-24 03:55:05'),
(113, '3', 'Baby pant', 'public/image/5db1750b732f1Screenshot_28.jpg', '2019-10-24 03:55:23', '2019-10-24 03:55:23'),
(114, '3', 'Baby-Jacket', 'public/image/5db1751918735Screenshot_29.jpg', '2019-10-24 03:55:37', '2019-10-24 03:55:37'),
(116, '3', 'Baby-Jacket', 'public/image/5db1753cca88eScreenshot_31.jpg', '2019-10-24 03:56:12', '2019-10-24 03:56:12'),
(117, '3', 'Baby-Jacket', 'public/image/5db1754c1462dScreenshot_32.jpg', '2019-10-24 03:56:28', '2019-10-24 03:56:28'),
(118, '3', 'Baby-Jacket', 'public/image/5db1758276857Screenshot_33.jpg', '2019-10-24 03:57:22', '2019-10-24 03:57:22'),
(120, '3', 'Baby-Jacket', 'public/image/5db1765c59235Screenshot_35.jpg', '2019-10-24 04:01:00', '2019-10-24 04:01:00'),
(121, '3', 'Baby-Jacket', 'public/image/5db176dd45524Screenshot_34.jpg', '2019-10-24 04:03:09', '2019-10-24 04:03:09'),
(122, '3', 'Baby-Jacket', 'public/image/5db176ed5ba58Screenshot_36.jpg', '2019-10-24 04:03:25', '2019-10-24 04:03:25'),
(123, '3', 'Baby Shirt', 'public/image/5db177186f0c3Screenshot_37.jpg', '2019-10-24 04:04:08', '2019-10-24 04:04:08'),
(124, '3', 'Baby Shirt', 'public/image/5db177276287aScreenshot_38.jpg', '2019-10-24 04:04:23', '2019-10-24 04:04:23'),
(125, '3', 'Baby Shirt', 'public/image/5db177749fc74Screenshot_39.jpg', '2019-10-24 04:05:40', '2019-10-24 04:05:40'),
(126, '3', 'Baby Shirt', 'public/image/5db177878fe2dScreenshot_40.jpg', '2019-10-24 04:05:59', '2019-10-24 04:05:59'),
(128, '4', 'Bra', 'public/image/5db19ed508889Untitled-1.jpg', '2019-10-24 06:53:41', '2019-10-24 06:53:41'),
(129, '4', 'Panty', 'public/image/5db19eeae1b0aUntitled-7.jpg', '2019-10-24 06:54:02', '2019-10-24 06:54:02'),
(130, '4', 'Bra', 'public/image/5db19efed3079Untitled-47.jpg', '2019-10-24 06:54:22', '2019-10-24 06:54:22'),
(131, '4', 'Panty', 'public/image/5db19f114d1b9Untitled-11.jpg', '2019-10-24 06:54:41', '2019-10-24 06:54:41'),
(132, '4', 'Bra', 'public/image/5db19f4294172fdf.jpg', '2019-10-24 06:55:30', '2019-10-24 06:55:30'),
(133, '4', 'Bra', 'public/image/5db19f52481c0Untitled-2.jpg', '2019-10-24 06:55:46', '2019-10-24 06:55:46'),
(134, '4', 'Bra', 'public/image/5db19f5eef56dUntitled-3.jpg', '2019-10-24 06:55:59', '2019-10-24 06:55:59'),
(135, '4', 'Bra', 'public/image/5db19f70dc621Untitled-4.jpg', '2019-10-24 06:56:16', '2019-10-24 06:56:16'),
(136, '4', 'Bra', 'public/image/5db19f7d10865Untitled-5.jpg', '2019-10-24 06:56:29', '2019-10-24 06:56:29'),
(137, '4', 'Bra', 'public/image/5db19fba2dc93Untitled-5dc.jpg', '2019-10-24 06:57:30', '2019-10-24 06:57:30'),
(138, '4', 'Panty', 'public/image/5db19fcb1adb6Untitled-9.jpg', '2019-10-24 06:57:47', '2019-10-24 06:57:47'),
(139, '4', 'Panty', 'public/image/5db19feca0b70Untitled-13.jpg', '2019-10-24 06:58:20', '2019-10-24 06:58:20'),
(140, '4', 'Panty', 'public/image/5db19ffc70532Untitled-10.jpg', '2019-10-24 06:58:36', '2019-10-24 06:58:36'),
(141, '4', 'Panty', 'public/image/5db1a02eb08ebUntitled-12.jpg', '2019-10-24 06:59:26', '2019-10-24 06:59:26'),
(143, '4', 'Panty', 'public/image/5db1a0664e818Untitled-8.jpg', '2019-10-24 07:00:22', '2019-10-24 07:00:22'),
(144, '1', 'Man-Jacket', 'public/image/5db46b22a471eScreenshot_20.jpg', '2019-10-26 09:49:54', '2019-10-26 09:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'samin', 'samin@gmail.com', NULL, '$2y$10$4VhcF/dxtD664bk0QiyYQ.cbAJr6SAZps/zuUFDULW/fQEvmbLDjG', NULL, 0, '2019-03-24 01:19:30', '2019-03-24 02:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `verify_tokens`
--

CREATE TABLE `verify_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_tokens`
--

INSERT INTO `verify_tokens` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(10, 'monsurahmedshafiq@gmail.com', '787501', '2019-03-24 02:04:50', '2019-03-24 02:04:50'),
(11, 'samin@gmail.com', '202029', '2019-10-26 01:14:03', '2019-10-26 01:14:03'),
(12, 'samin@gmail.com', '216018', '2019-10-26 01:14:03', '2019-10-26 01:14:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrers`
--
ALTER TABLE `carrers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrers`
--
ALTER TABLE `carrers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
