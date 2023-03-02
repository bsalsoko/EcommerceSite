-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 08:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'MANISH ADHIKARI', 'adminmanish@gmail.com', 'manish123', NULL, NULL),
(2, 'ISHAN DHAKAL', 'adminishan@gmail.com', '@ishan123', NULL, NULL),
(3, 'Jhony Jung Karki', 'adminjony@gmail.com', '@jony123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(15, 8, 8, '2023-01-29 00:39:24', '2023-01-29 00:39:24'),
(18, 1, 8, '2023-01-29 01:09:46', '2023-01-29 01:09:46'),
(19, 9, 18, '2023-01-29 09:02:38', '2023-01-29 09:02:38'),
(20, 5, 17, '2023-01-29 09:24:30', '2023-01-29 09:24:30'),
(22, 10, 22, '2023-01-30 02:53:02', '2023-01-30 02:53:02'),
(23, 14, 22, '2023-01-30 02:56:34', '2023-01-30 02:56:34'),
(25, 16, 22, '2023-01-30 03:30:30', '2023-01-30 03:30:30'),
(26, 11, 23, '2023-01-30 20:27:00', '2023-01-30 20:27:00'),
(31, 20, 25, '2023-02-06 21:47:27', '2023-02-06 21:47:27'),
(34, 9, 26, '2023-02-07 07:50:20', '2023-02-07 07:50:20'),
(36, 24, 26, '2023-02-07 21:26:50', '2023-02-07 21:26:50'),
(37, 24, 26, '2023-02-09 03:07:47', '2023-02-09 03:07:47'),
(41, 2, 42, '2023-02-10 22:09:48', '2023-02-10 22:09:48'),
(43, 22, 42, '2023-02-10 22:21:41', '2023-02-10 22:21:41'),
(44, 21, 26, '2023-02-10 22:29:58', '2023-02-10 22:29:58'),
(47, 22, 31, '2023-02-12 13:47:21', '2023-02-12 13:47:21'),
(49, 22, 6, '2023-02-12 21:23:08', '2023-02-12 21:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_12_10_071358_create_users_table', 2),
(6, '2023_01_05_145439_create_products_table', 3),
(7, '2023_01_19_102759_create_cart_table', 4),
(8, '2023_01_29_032126_create_orders_table', 5),
(9, '2023_01_30_032425_create_admins_table', 6),
(10, '2023_01_30_033712_create_admins_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 4, 6, 'pending', 'cash', 'pending', 'brt', '2023-02-12 13:12:22', '2023-02-12 13:12:22'),
(2, 2, 6, 'pending', 'cash', 'pending', 'brt', '2023-02-12 13:12:22', '2023-02-12 13:12:22'),
(3, 16, 6, 'pending', 'cash', 'pending', 'brt', '2023-02-12 13:12:22', '2023-02-12 13:12:22'),
(4, 1, 6, 'pending', 'cash', 'pending', 'brt', '2023-02-12 13:12:22', '2023-02-12 13:12:22'),
(5, 8, 31, 'pending', 'cash', 'pending', 'bargachhi', '2023-02-12 13:26:40', '2023-02-12 13:26:40'),
(6, 22, 31, 'pending', 'cash', 'pending', 'ok', '2023-02-12 13:41:36', '2023-02-12 13:41:36'),
(7, 22, 6, 'pending', 'cash', 'pending', 'brt', '2023-02-12 20:11:05', '2023-02-12 20:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'Football Shoes', '1500', 'FOOTBALL', 'This football shoes are used to play football games.', 'footballshoes.jpg', NULL, '2023-02-01 05:37:23'),
(2, 'Manchester city Football Club half Tshirt', '100', 'FOOTBALL', 'A football tshirt of one of the best club in the world from Manchester', 'mc.jpg', NULL, '2023-02-01 06:16:12'),
(3, 'Barcelona Football Club half Tshirt Jersey', '300', 'FOOTBALL', 'A football tshirt of one of the best club in the world from spain', 'barca.jpg', NULL, '2023-02-01 06:43:48'),
(4, 'Cricket Bat', '250', 'CRICKET', 'It is one of the best quality cricket bat available in Nepalese market..', 'cricketbat.jpg', NULL, '2023-02-01 06:43:59'),
(6, 'Volleyball Ball', '500', 'VOLLEYBALL', 'It is the ball of volleyball. A good quality ball that has longer life for normal players.', 'volleyball.jpg', NULL, '2023-02-01 06:44:13'),
(7, 'World cup football ball', '1800', 'FOOTBALL', 'This ball is authentic football ball from world cup 2018. Material used in this product is of higher quality.', 'wcfootball.jpg', NULL, '2023-02-01 06:44:23'),
(8, 'Cricket kit set', '8000', 'CRICKET', 'This is the combo product of all the cricket items that are required for cricketers.', 'cricket-kit.jpg', NULL, '2023-02-01 06:44:38'),
(9, 'Cricket white leather ball', '250', 'CRICKET', 'This type of leather ball is used in playing cricket. Users are requested to play with this ball with full security.', 'cricket-white-leather-ball.jpg', NULL, '2023-02-01 06:44:51'),
(20, 'Badminton set', '1700', 'BADMINTON', 'This product contains the set of racket and cock.', 'badminton.jpg', '2023-02-01 05:04:37', '2023-02-01 05:04:37'),
(21, 'Arsenal football club half tshirt', '1200', 'FOOTBALL', 'A football tshirt of one of the best club in the world from London.', 'arsenal.jpg', '2023-02-01 06:18:06', '2023-02-01 06:19:40'),
(22, 'Manchester United Football Club half tshirt', '1200', 'FOOTBALL', 'A football tshirt of one of the best club in the world from London.', 'mu.jpg', '2023-02-01 06:21:14', '2023-02-01 06:21:14'),
(24, 'red cricket leather ball', '1200', 'CRICKET', 'This type of leather ball is used in playing cricket. Users are requested to play with this ball with full security.', 'red cricket leather ball.jpg', '2023-02-01 06:49:27', '2023-02-01 06:49:27'),
(25, 'Badminton net', '2300', 'BADMINTON', 'This product is made up of plastic. It is useful for badminton players to make an environment to play badminton.', 'badminton net.jpg', '2023-02-03 04:03:24', '2023-02-03 04:03:24'),
(26, 'Badminton shoes', '2200', 'BADMINTON', 'This shoe is one of the best badminton shoes available in the market.', 'badminton-shoe.jpg', '2023-02-03 04:11:01', '2023-02-03 04:13:30'),
(27, 'volleyball net', '2700', 'VOLLEYBALL', 'This net is used to play volleyball match. It is a very durable net  and it is high quality product.', 'volleyballnet.jpg', '2023-02-07 07:40:45', '2023-02-07 07:40:45'),
(28, 'Volleyball Shoes', '1500', 'VOLLEYBALL', 'This shoe is designed specially for playing volleyball.', 'volleyball shoes.png', '2023-02-10 00:08:18', '2023-02-10 00:08:18'),
(29, 'Psg football club banner', '600', 'FOOTBALL', 'This banner belongs to psg football club.', 'psg banner.jpg', '2023-02-10 00:13:52', '2023-02-10 00:13:52'),
(30, 'Adidas Football', '2500', 'FOOTBALL', 'Shop our selection of adidas football cleats & football clothing at SportsHub', 'Addidas Football.jpg', '2023-02-10 06:47:11', '2023-02-10 06:47:11'),
(31, 'Man Jersey', '2100', 'FOOTBALL', 'Shop our selection of adidas football cleats & football clothing at SportsHub', 'thumb_1656395585.jpg', '2023-02-10 08:42:42', '2023-02-10 08:42:42'),
(37, 'nepal jersey', '1250', 'FOOTBALL', 'football description again', 'badminton-shoe.jpg', '2023-02-13 02:57:15', '2023-02-13 03:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(6, 'manish', 'manish@gmail.com', 'manish123', NULL, NULL),
(8, 'anish', 'anish@gmail.com', 'anish123', NULL, NULL),
(25, 'sushma', 'sushma@gmail.com', 'sushma123', '2023-02-06 21:46:54', '2023-02-06 21:46:54'),
(26, 'Ishan Dhakal', 'ishan@gmail.com', 'ishan123', '2023-02-07 07:48:32', '2023-02-07 07:48:32'),
(28, 'Manish Adhikari', 'manish@gks', 'sadf', '2023-02-09 21:56:50', '2023-02-09 21:56:50'),
(31, 'kishor', 'kishor@gmail.com', 'fd', '2023-02-09 22:51:59', '2023-02-09 22:51:59'),
(33, 'mukunda', 'mukunda@gmail.com', 'mukunda', '2023-02-09 22:58:03', '2023-02-09 22:58:03'),
(38, 'kailashi', 'manish@gm', 'jb', '2023-02-10 05:05:27', '2023-02-10 05:05:27'),
(40, 'Raju Dahal', 'rajudahal123@gmail.com', 'rajudahal123', '2023-02-10 06:55:18', '2023-02-10 06:55:18'),
(41, 'safdasd', 'sadf@fdsa', 'dsf', '2023-02-10 21:27:57', '2023-02-10 21:27:57'),
(44, 'aakash', 'aakash@gmail.com', 'aakash123', '2023-02-12 15:44:43', '2023-02-12 15:44:43'),
(46, 'sulav', 'sulav@gmail.com', 'sul', '2023-02-12 16:23:19', '2023-02-12 16:23:19'),
(57, 'ram', 'ram@gmail.com', 'ram123', '2023-02-13 00:40:31', '2023-02-13 00:40:31'),
(58, 'hari', 'hari@gmail.com', 'hari1234', '2023-02-13 00:42:29', '2023-02-13 00:42:29'),
(59, 'maxx', 'maxx@gmail.com', 'maxx123', '2023-02-13 00:49:28', '2023-02-13 00:49:28'),
(60, 'gita', 'gita@gmail.com', 'gita1234', '2023-02-13 00:56:59', '2023-02-13 00:56:59'),
(61, 'kaka', 'kaka@gmail.com', 'kaka1234', '2023-02-13 01:06:51', '2023-02-13 01:06:51'),
(62, 'city', 'city@gmail.com', 'city1234', '2023-02-13 01:15:42', '2023-02-13 01:15:42'),
(63, 'kaki', 'kaki@gmail.com', 'kaki1234', '2023-02-13 02:20:49', '2023-02-13 02:20:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
