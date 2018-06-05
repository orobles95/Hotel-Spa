-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2018 a las 13:25:07
-- Versión del servidor: 5.7.21-log
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotelspa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@hotelspa.com', 'Administrador_BBDD', '$2y$10$DZ.nIS.98xOJn2yG6PO1OOvwu.06mQ2JjSHO5KxKIuH6a37ZYTkpW', 'M9tf84jrcYt1FX1EujS28fumYTOOsqnMnnBybQ8yI9iptGUiFEEy0Der8r7Q', '2018-05-30 15:34:46', '2018-06-04 19:29:02');

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
(3, '2018_05_24_181958_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_card` varchar(50) NOT NULL,
  `expDate_card` varchar(5) NOT NULL,
  `room` varchar(50) NOT NULL,
  `fechaentrada` int(25) NOT NULL,
  `fechasalida` int(25) NOT NULL,
  `huespedes` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservasrestaurants`
--

CREATE TABLE `reservasrestaurants` (
  `id` int(10) NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_card` varchar(50) NOT NULL,
  `expDate_card` varchar(5) NOT NULL,
  `restaurant` varchar(50) NOT NULL,
  `fechaentrada` varchar(25) NOT NULL,
  `comensales` int(11) NOT NULL,
  `hora` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservasspas`
--

CREATE TABLE `reservasspas` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_card` varchar(50) NOT NULL,
  `expDate_card` varchar(5) NOT NULL,
  `spa` varchar(50) NOT NULL,
  `fechaentrada` varchar(25) NOT NULL,
  `personas` int(11) DEFAULT NULL,
  `hora` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservastratamientos`
--

CREATE TABLE `reservastratamientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `holder_card` varchar(50) NOT NULL,
  `expDate_card` varchar(5) NOT NULL,
  `tratamiento` varchar(50) NOT NULL,
  `fechaentrada` varchar(25) NOT NULL,
  `hora` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `id` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id`, `nom`, `img`) VALUES
('0', 'Spring Space', ''),
('1', 'Delicias Supremas', ''),
('2', 'Media Luna', ''),
('3', 'Sunset Chill Out', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `nom`, `img`) VALUES
('0', 'Suite Presidencial', 'suitePresidencial.jpg'),
('1', 'Suite Superior', 'suiteSuperior.jpg'),
('2', 'Suite Estándar', 'SuiteStandar.jpg'),
('3', 'Habitación Superior', 'habitacionSuperior.jpg'),
('4', 'Habitación Estándar', 'habitacionStandar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spas`
--

CREATE TABLE `spas` (
  `id` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `spas`
--

INSERT INTO `spas` (`id`, `nom`, `img`) VALUES
('0', 'Circuito Termal', ''),
('1', 'Termal Aqua', ''),
('2', 'Divinium', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `nom`, `img`) VALUES
('0', 'Masaje Corporal', ''),
('1', 'Lifting Facial', ''),
('2', 'Drenaje Linfático', ''),
('3', 'Terapia geotermal', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expDate_card` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservasrestaurants`
--
ALTER TABLE `reservasrestaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservasspas`
--
ALTER TABLE `reservasspas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservastratamientos`
--
ALTER TABLE `reservastratamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `spas`
--
ALTER TABLE `spas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `reservasrestaurants`
--
ALTER TABLE `reservasrestaurants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reservasspas`
--
ALTER TABLE `reservasspas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservastratamientos`
--
ALTER TABLE `reservastratamientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
