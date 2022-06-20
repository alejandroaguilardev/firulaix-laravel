-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2022 a las 17:27:52
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qolkex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `network` varchar(50) NOT NULL,
  `coin` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `amount` float UNSIGNED NOT NULL,
  `transaction` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount_equiv` float UNSIGNED DEFAULT NULL,
  `amount_equiv_total` float UNSIGNED DEFAULT NULL,
  `amount_inticoin` float UNSIGNED DEFAULT NULL,
  `amount_equiv_inticoin` float DEFAULT NULL,
  `transaction_equiv` text DEFAULT NULL,
  `date_send` timestamp NULL DEFAULT NULL,
  `status` enum('Pendiente','Procesado','Enviado','') DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donations`
--

INSERT INTO `donations` (`id`, `email`, `network`, `coin`, `address`, `amount`, `transaction`, `created_at`, `updated_at`, `amount_equiv`, `amount_equiv_total`, `amount_inticoin`, `amount_equiv_inticoin`, `transaction_equiv`, `date_send`, `status`) VALUES
(1, 'alexaguilar281@gmail.com', 'BSC', 'BNB', '0xF2CA767F7F041EeC45f8CCbe414cC798885B7c30', 10.1, '0x8709c207fc70ea537e407ed7de6ee857b25bd0b0e33074071cff9371a9a183d0', '2022-01-13 15:38:22', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 'Pendiente'),
(2, 'alexaguilar2811@gmail.com', 'BSC', 'BNB', '0xF2CA767F7F041EeC45f8CCbe414cC798885B7c30', 5, '0x8709c207fc70ea537e407ed7de6ee857b25bd0b0e33074071cff9371a9a183d0', '2022-01-13 15:57:07', '2022-01-14 03:54:26', 400, 4000, 1, 4801, '0x2b39a9b5eb67dab0e519b0a385fa58693a4f801eb7f62571438ff9eb65c73cf2', '2022-01-13 15:01:26', 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alexaguilar281@gmail.com', '$2y$10$W7kF4glyVg/sIquoSYq0xe4FftMeXo7gywP6TepaCWSlPXfUp1JkK', '2022-01-14 05:14:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` enum('Admin','Usuario','','') COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`) VALUES
(1, 'Alejandro', 'alexaguilar281@gmail.com', '2022-01-13 20:16:06', '$2y$10$DeICEXW2kbdvX5vixTWTYOW906MU1I/cmDRR334qGUH2Hl.nwLHaG', 'NkdyVUDAyWCAO6DpjYoEHPHqNo9eOS72VdIceiIjHU36MReqvQ9ENWglXbf3', '2022-01-13 20:16:06', '2022-01-13 21:36:53', 'Admin'),
(3, 'Julian', 'alexa281@gmail.com', NULL, '$2y$10$A6vRADL366nJf2pbIpzZEeGpV1BeGH9GF9kZrberqOgM0bBiWOhYO', NULL, '2022-01-14 03:52:41', '2022-01-14 03:52:41', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
