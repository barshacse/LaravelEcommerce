-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 01:19 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerces`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dominos', 'pizza', 1, '2019-12-10 14:46:31', '2019-12-10 14:46:31'),
(2, 'American Burger', 'burger', 1, '2019-12-10 14:46:44', '2019-12-10 14:46:44'),
(3, 'Shwapno', 'fruit', 1, '2019-12-10 14:47:03', '2019-12-10 14:47:03'),
(4, 'Pran', 'juice', 1, '2019-12-10 14:47:22', '2019-12-10 14:47:22'),
(5, 'Agura', 'Vegetable', 1, '2019-12-10 14:47:51', '2019-12-10 14:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', 'fresh fruit', 1, '2019-12-18 03:15:02', '2019-12-18 03:15:02'),
(2, 'Vegetable', 'mixed vegetable', 1, '2019-12-18 03:15:34', '2019-12-18 03:15:34'),
(3, 'PIzza', 'fast food', 1, '2019-12-18 03:16:21', '2019-12-18 03:16:21'),
(4, 'Burger', 'fast food', 1, '2019-12-18 03:16:49', '2019-12-18 03:16:49'),
(5, 'Juice', 'fresh juice', 1, '2019-12-18 03:17:13', '2019-12-18 03:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(5, 'suvashish', 'sarker', 'suvasish@gmail.com', '$2y$10$FOk6e05cIc84msYU9SfLH.9RY.Vvem/NqXMcEsJaDk/zY5Ofi.C0S', '029347893', 'Uttara', '2019-12-15 05:45:59', '2019-12-15 05:45:59'),
(6, 'suvashish', 'sarker', 'admin@gmail.com', '$2y$10$V2XFUH8GnSFpQBIMI2RIWOIF8DFEvu7E.N2devQbiClBQYQQMx2NK', '01717001122', 'Dhaka', '2019-12-15 05:54:58', '2019-12-15 05:54:58'),
(7, 'Pooja', 'Saha', 'poja@gmail.com', '$2y$10$ReT3zYC6rsNEHCjqNqKLduZ9MmDP8DrsvgWJtet9zkH65vcQ3dJRO', '01717001122', 'Dhaka', '2019-12-15 13:19:30', '2019-12-15 13:19:30'),
(8, 'Barsha', 'Sarker', 'bsarker.cse@gmail.com', '$2y$10$WCfms98swkAXi/1MxcVTFe6XePTs3vZ2BHtt.pJdcL5dsveYhKteW', '01761443854', 'Mohakhali', '2019-12-17 10:34:14', '2019-12-17 10:34:14'),
(19, 'shanta', 'islam', 'shanta.soma04@gmail.com', '$2y$10$4nsNHP6S5BSm83ALdefYdehiT/M02JKvUo3P8ARF4czXxFRYL/GwO', '0172354654', 'Mirpur', '2019-12-24 11:29:26', '2019-12-24 11:29:26');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_08_202503_create_categories_table', 1),
(5, '2019_12_09_160318_create_brands_table', 1),
(6, '2019_12_09_212545_create_products_table', 1),
(7, '2019_12_09_215619_create_sub_images_table', 1),
(8, '2019_12_10_212315_create_sliders_table', 2),
(9, '2019_12_10_220212_create_sliders_table', 3),
(10, '2019_12_14_103424_create_customers_table', 4),
(11, '2019_12_15_063428_create_shippings_table', 5),
(12, '2019_12_15_093232_create_orders_table', 6),
(13, '2019_12_15_093315_create_order_details_table', 6),
(14, '2019_12_15_093352_create_payments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`, `created_at`, `updated_at`) VALUES
(3, 6, 3, 731, 'pending', '12/15/2019', '2019-12-15 05:55:28', '2019-12-15 05:55:28'),
(5, 6, 4, 374, 'pending', '12/15/2019', '2019-12-15 11:26:15', '2019-12-15 11:26:15'),
(6, 6, 4, 374, 'pending', '12/15/2019', '2019-12-15 11:27:48', '2019-12-15 11:27:48'),
(7, 6, 4, 374, 'pending', '12/15/2019', '2019-12-15 11:35:10', '2019-12-15 11:35:10'),
(9, 6, 7, 983, 'pending', '12/17/2019', '2019-12-17 00:00:26', '2019-12-17 00:00:26'),
(10, 6, 8, 426, 'pending', '12/21/2019', '2019-12-20 23:27:37', '2019-12-20 23:27:37'),
(11, 6, 9, 962, 'pending', '12/24/2019', '2019-12-24 11:19:46', '2019-12-24 11:19:46'),
(12, 19, 10, 479, 'pending', '12/24/2019', '2019-12-24 11:29:57', '2019-12-24 11:29:57'),
(13, 6, 11, 416, 'pending', '12/25/2019', '2019-12-25 06:56:16', '2019-12-25 06:56:16'),
(14, 6, 12, 248, 'pending', '01/10/2020', '2020-01-09 22:05:13', '2020-01-09 22:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Burger', 340.00, 1, '2019-12-15 05:50:07', '2019-12-15 05:50:07'),
(2, 3, 4, 'Burger', 340.00, 1, '2019-12-15 05:55:28', '2019-12-15 05:55:28'),
(3, 3, 3, 'Mango', 280.00, 1, '2019-12-15 05:55:28', '2019-12-15 05:55:28'),
(4, 4, 3, 'Mango', 280.00, 1, '2019-12-15 11:04:12', '2019-12-15 11:04:12'),
(5, 5, 3, 'Mango', 280.00, 1, '2019-12-15 11:26:15', '2019-12-15 11:26:15'),
(6, 6, 3, 'Mango', 280.00, 1, '2019-12-15 11:27:48', '2019-12-15 11:27:48'),
(7, 7, 3, 'Mango', 280.00, 1, '2019-12-15 11:35:10', '2019-12-15 11:35:10'),
(8, 8, 5, 'Pizza', 180.00, 1, '2019-12-15 13:19:46', '2019-12-15 13:19:46'),
(9, 8, 4, 'Burger', 340.00, 1, '2019-12-15 13:19:46', '2019-12-15 13:19:46'),
(10, 9, 5, 'Pizza', 180.00, 1, '2019-12-17 00:00:26', '2019-12-17 00:00:26'),
(11, 9, 4, 'Burger', 340.00, 2, '2019-12-17 00:00:26', '2019-12-17 00:00:26'),
(12, 10, 5, 'orange', 130.00, 1, '2019-12-20 23:27:37', '2019-12-20 23:27:37'),
(13, 10, 1, 'Mixed Vegetable', 100.00, 2, '2019-12-20 23:27:37', '2019-12-20 23:27:37'),
(14, 11, 4, 'orange Juice', 80.00, 1, '2019-12-24 11:19:46', '2019-12-24 11:19:46'),
(15, 11, 2, 'Burger', 380.00, 2, '2019-12-24 11:19:46', '2019-12-24 11:19:46'),
(16, 12, 2, 'Burger', 380.00, 1, '2019-12-24 11:29:57', '2019-12-24 11:29:57'),
(17, 13, 4, 'orange Juice', 80.00, 1, '2019-12-25 06:56:16', '2019-12-25 06:56:16'),
(18, 13, 5, 'Pizza', 240.00, 1, '2019-12-25 06:56:16', '2019-12-25 06:56:16'),
(19, 14, 4, 'orange Juice', 80.00, 2, '2020-01-09 22:05:13', '2020-01-09 22:05:13');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `payment_date`, `created_at`, `updated_at`) VALUES
(2, 3, 'Cash On Delivery', 'Pending', '12/15/2019', '2019-12-15 05:55:28', '2019-12-15 05:55:28'),
(4, 5, 'Cash On Delivery', 'Pending', '12/15/2019', '2019-12-15 11:26:15', '2019-12-15 11:26:15'),
(5, 6, 'Cash On Delivery', 'Pending', '12/15/2019', '2019-12-15 11:27:48', '2019-12-15 11:27:48'),
(6, 7, 'Cash On Delivery', 'Pending', '12/15/2019', '2019-12-15 11:35:10', '2019-12-15 11:35:10'),
(9, 9, 'Cash On Delivery', 'Pending', '12/17/2019', '2019-12-17 00:00:26', '2019-12-17 00:00:26'),
(10, 10, 'Cash On Delivery', 'Pending', '12/21/2019', '2019-12-20 23:27:37', '2019-12-20 23:27:37'),
(11, 11, 'Cash On Delivery', 'Pending', '12/24/2019', '2019-12-24 11:19:46', '2019-12-24 11:19:46'),
(12, 12, 'Cash On Delivery', 'Pending', '12/24/2019', '2019-12-24 11:29:57', '2019-12-24 11:29:57'),
(13, 13, 'Cash On Delivery', 'Pending', '12/25/2019', '2019-12-25 06:56:16', '2019-12-25 06:56:16'),
(14, 14, 'Cash On Delivery', 'Pending', '01/10/2020', '2020-01-09 22:05:13', '2020-01-09 22:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `product_sku` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `category_id`, `brand_id`, `product_price`, `stock_amount`, `product_sku`, `short_description`, `long_description`, `status`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 'Mixed Vegetable', 'veg00', 2, 5, 120.90, 100, 150, 'Vegetables are parts of plants that are consumed by humans or other animals as food', 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.', 1, './product-images/veg 1.jpg', '2019-12-24 11:47:06', '2019-12-24 11:47:06'),
(2, 'Burger', 'bug123', 4, 2, 380.00, 15, 20, 'Burger Burger’s creators have been in the restaurant business for over 12 years', 'Burger Burger’s creators have been in the restaurant business for over 12 years, and wanted to bring fresh focused concept to Historic Main Street Fredericksburg Texas.\r\nOffering a blend of daytime “family eat in service” and an evening “sipping a cocktail on the patio”, Burger Burger is both family friendly and appealing to those looking for a more refined atmosphere.', 1, './product-images/burger 1.jpg', '2019-12-24 11:53:31', '2019-12-24 11:53:31'),
(3, 'orange', 'fruit01', 1, 3, 130.00, 20, 50, 'Orange S.A., formerly France Télécom S.A.', 'Orange S.A., formerly France Télécom S.A., is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere.', 1, './product-images/orange 1.jpg', '2019-12-24 11:58:44', '2019-12-24 11:58:44'),
(4, 'orange Juice', 'juice123', 5, 4, 80.00, 12, 20, 'Orange S.A., formerly France Télécom S.A., is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere.', 'Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. It can also refer to liquids that are flavored with concentrate or other biological food sources, such as meat or seafood, such as clam juice', 1, './product-images/juice 4.jpg', '2019-12-24 12:01:13', '2020-01-09 22:05:13'),
(5, 'Pizza', 'pizza01', 3, 1, 240.00, 19, 30, 'Pizza (Italian: [ˈpittsa], Neapolitan: [ˈpittsə]) is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes', 'Pizza (Italian: [ˈpittsa], Neapolitan: [ˈpittsə]) is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (anchovies, olives, meat, etc.) baked at a high temperature, traditionally in a wood-fired oven.[1] A small pizza is sometimes called a pizzetta.', 1, './product-images/pizza 1.jpg', '2019-12-24 12:03:46', '2019-12-25 06:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `customer_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 4, 'barsha', 'sarker', 'barsha.se@gmail.com', '01700000000', 'Mohakhali', '2019-12-15 00:52:43', '2019-12-15 00:52:43'),
(2, 5, 'suvashish', 'sarker', 'suvasish@gmail.com', '01700000000', 'Uttara', '2019-12-15 05:46:24', '2019-12-15 05:46:24'),
(3, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-15 05:55:18', '2019-12-15 05:55:18'),
(4, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-15 11:04:04', '2019-12-15 11:04:04'),
(5, 7, 'Pooja', 'Saha', 'poja@gmail.com', '01717001122', 'Dhaka', '2019-12-15 13:19:37', '2019-12-15 13:19:37'),
(6, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-16 03:45:06', '2019-12-16 03:45:06'),
(7, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-17 00:00:17', '2019-12-17 00:00:17'),
(8, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-20 23:27:30', '2019-12-20 23:27:30'),
(9, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-24 11:19:41', '2019-12-24 11:19:41'),
(10, 19, 'shanta', 'islam', 'shanta.soma04@gmail.com', '0172354654', 'Mirpur', '2019-12-24 11:29:50', '2019-12-24 11:29:50'),
(11, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2019-12-25 06:55:52', '2019-12-25 06:55:52'),
(12, 6, 'suvashish', 'sarker', 'admin@gmail.com', '01717001122', 'Dhaka', '2020-01-09 22:05:07', '2020-01-09 22:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `status`, `created_at`, `updated_at`) VALUES
(1, './slider-image/1576482765_slider 1.jpg', 1, '2019-12-10 16:12:51', '2019-12-16 01:52:45'),
(3, './slider-image/slider 2.jpg', 1, '2019-12-16 01:58:24', '2019-12-16 01:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_images`
--

CREATE TABLE `sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_images`
--

INSERT INTO `sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(1, 1, './sub-images/veg 1.jpg', '2019-12-24 11:47:06', '2019-12-24 11:47:06'),
(2, 1, './sub-images/veg 2.jpg', '2019-12-24 11:47:06', '2019-12-24 11:47:06'),
(3, 1, './sub-images/veg 3.jpg', '2019-12-24 11:47:07', '2019-12-24 11:47:07'),
(4, 2, './sub-images/burger 2.jpg', '2019-12-24 11:53:31', '2019-12-24 11:53:31'),
(5, 2, './sub-images/burger 3.jpg', '2019-12-24 11:53:31', '2019-12-24 11:53:31'),
(6, 2, './sub-images/burger 4.jpg', '2019-12-24 11:53:31', '2019-12-24 11:53:31'),
(7, 3, './sub-images/orange 1.jpg', '2019-12-24 11:58:44', '2019-12-24 11:58:44'),
(8, 3, './sub-images/orange 2.jpg', '2019-12-24 11:58:44', '2019-12-24 11:58:44'),
(9, 3, './sub-images/orange 3.jpg', '2019-12-24 11:58:44', '2019-12-24 11:58:44'),
(10, 4, './sub-images/juice 4.jpg', '2019-12-24 12:01:13', '2019-12-24 12:01:13'),
(11, 4, './sub-images/juice 5.jpg', '2019-12-24 12:01:13', '2019-12-24 12:01:13'),
(12, 4, './sub-images/juice 6.jpg', '2019-12-24 12:01:13', '2019-12-24 12:01:13'),
(13, 5, './sub-images/pizza 1.jpg', '2019-12-24 12:03:46', '2019-12-24 12:03:46'),
(14, 5, './sub-images/pizza 2.jpg', '2019-12-24 12:03:46', '2019-12-24 12:03:46'),
(15, 5, './sub-images/pizza 3.jpg', '2019-12-24 12:03:46', '2019-12-24 12:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Barsha Sarker', 'barsha@gmail.com', NULL, '$2y$10$Fl8N1vmNd0xXNyFXMIC5J.tpnj.mQTWXxi7exm4irhWIlmrHk4FxO', NULL, '2019-12-10 14:38:32', '2019-12-10 14:38:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_images`
--
ALTER TABLE `sub_images`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_images`
--
ALTER TABLE `sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
