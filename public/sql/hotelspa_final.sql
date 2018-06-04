-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 20:12:36
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
(1, 'Administrador 1', 'admin@hotelspa.com', 'Administrador_BBDD', '$2y$10$DZ.nIS.98xOJn2yG6PO1OOvwu.06mQ2JjSHO5KxKIuH6a37ZYTkpW', 'M9tf84jrcYt1FX1EujS28fumYTOOsqnMnnBybQ8yI9iptGUiFEEy0Der8r7Q', '2018-05-30 15:34:46', '2018-06-04 11:00:18');

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

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `client_email`, `card_number`, `holder_card`, `expDate_card`, `room`, `fechaentrada`, `fechasalida`, `huespedes`, `created_at`, `updated_at`) VALUES
(67, 'Usuario no registrado', '3', '', '', 'Suite Presidencial', 6012018, 6022018, NULL, '2018-05-31 07:06:19', '2018-05-31 07:06:19'),
(68, 'k@k.com', '1234567890123456', '', '', 'Suite Superior', 6012018, 6032018, NULL, '2018-05-31 09:51:02', '2018-05-31 09:51:02'),
(69, 'Usuario no registrado', '1234567890123456', 'Wewre erer', '02/21', 'Suite Presidencial', 7052018, 7072018, NULL, '2018-05-31 20:24:34', '2018-05-31 20:24:34');

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

--
-- Volcado de datos para la tabla `reservasrestaurants`
--

INSERT INTO `reservasrestaurants` (`id`, `client_email`, `card_number`, `holder_card`, `expDate_card`, `restaurant`, `fechaentrada`, `comensales`, `hora`, `created_at`, `updated_at`) VALUES
(2, '', '0', '', '', 'Spring Space', '04/05/2018', 0, '13:00', '2018-05-28 14:35:23', '2018-05-28 14:35:23'),
(3, '', '0', '', '', 'Spring Space', '04/05/2018', 0, '15:30', '2018-05-28 14:36:24', '2018-05-28 14:36:24'),
(4, '', '0', '', '', 'Spring Space', '03/05/2018', 1, '22:00', '2018-05-28 14:38:26', '2018-05-28 14:38:26'),
(5, '', '0', '', '', 'Spring Space', '05/05/2018', 2, '13:00', '2018-05-28 14:38:51', '2018-05-28 14:38:51'),
(6, '', '0', '', '', 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 14:45:05', '2018-05-28 14:45:05'),
(7, '', '0', '', '', 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 14:48:15', '2018-05-28 14:48:15'),
(8, '', '0', '', '', 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 14:48:18', '2018-05-28 14:48:18'),
(9, '', '0', '', '', 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 15:14:17', '2018-05-28 15:14:17'),
(10, '', '0', '', '', 'Spring Space', '30/05/2018', 1, '13:00', '2018-05-29 16:15:28', '2018-05-29 16:15:28');

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

--
-- Volcado de datos para la tabla `reservasspas`
--

INSERT INTO `reservasspas` (`id`, `client_email`, `card_number`, `holder_card`, `expDate_card`, `spa`, `fechaentrada`, `personas`, `hora`, `created_at`, `updated_at`) VALUES
(1, '', '0', '', '', 'Circuito Termal', '06/05/2018', 1, '13:00', '2018-05-28 15:09:16', '2018-05-28 15:09:16'),
(2, '', '0', '', '', 'Circuito Termal', 'Selecciona la fecha', 1, '13:00', '2018-05-28 15:14:22', '2018-05-28 15:14:22'),
(3, '', '0', '', '', 'Termal Aqua', 'Selecciona la fecha', 1, '13:00', '2018-05-28 15:14:27', '2018-05-28 15:14:27');

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

--
-- Volcado de datos para la tabla `reservastratamientos`
--

INSERT INTO `reservastratamientos` (`id`, `client_email`, `card_number`, `holder_card`, `expDate_card`, `tratamiento`, `fechaentrada`, `hora`, `created_at`, `updated_at`) VALUES
(1, '', '0', '', '', 'Drenaje Linfático', '04/05/2018', '13:00', '2018-05-28 15:31:45', '2018-05-28 15:31:45'),
(2, '', '0', '', '', 'Masaje Corporal', 'Selecciona la fecha', '13:00', '2018-05-28 15:33:54', '2018-05-28 15:33:54'),
(3, '', '0', '', '', 'Lifting Facial', 'Selecciona la fecha', '13:00', '2018-05-28 15:33:59', '2018-05-28 15:33:59'),
(4, 'k@k.com', '1234567890123456', '', '', 'Masaje Corporal', '31/05/2018', '13:00', '2018-05-30 14:06:08', '2018-05-30 14:06:08'),
(5, 'k@k.com', '1234567890123456', '', '', 'Masaje Corporal', 'Selecciona la fecha', '13:00', '2018-05-30 14:07:09', '2018-05-30 14:07:09'),
(6, 'k@k.com', '1234567890123456', '', '', 'Masaje Corporal', 'Selecciona la fecha', '13:00', '2018-05-30 14:11:58', '2018-05-30 14:11:58');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `phoneNumber`, `card_number`, `holder_card`, `expDate_card`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'no', 'sdsds', '111111111', '1234567890123456', 'dsdsd', '54/78', 'k@k.com', '$2y$10$UD6TMqbR.B9SrvQofPNe7./eWp/gwYmDOrpmbsp41kXKuBrx9ChS2', 'vo3JchzNefpQ9mrSzBVlefJhYYu9LiyZCmTYz5GFV9EYwa5MthxsVMzB8sBt', '2018-05-30 08:11:25', '2018-06-04 15:01:33'),
(7, 'Usuario 1', 'URIVBE', '5555555555555', '1234567890123455', 'yo mismo', '02/22', 'prueba@prueba.com', '$2y$10$/VVOMPHvjVvIQRqhnwUpe.wFEwqniupYAq2wKekOLOx2t4j.NPZwe', 'exgNul8pj1sk823Z5wtjC2UChh7rNZrV8ugauPigDUVFcatr0t6MuYnRJG9H', '2018-05-31 08:18:22', '2018-06-04 13:51:56'),
(8, 'Nuevo', 'Apellido', '665544555', '1234567890654321', 'Oscar Robles', '04/21', 'p@p.com', '$2y$10$vb8uxg15cuwRBUkL.i5m6e57GYGRBL6Q7pFmyFW.UuTc4.iaUcn8O', 'CNjVicQ4mlfozTGhYRQfXtNvY4iR6TRYj7gY8Y8wHqHroEDy7Kj68te6wYyn', '2018-06-04 10:40:27', '2018-06-04 10:40:27'),
(9, 'maria', 'Taboada', '545444445', '1325476980123456', 'Gloria tabo', '07/67', 'prueba@2.com', '$2y$10$Itvm0bWK/ogbhPhjT2y15OcC3wlZEqb0YmU5Rj4iHwjuHyp/faRXO', 'jXf1Zt5VPe66ZaPDxH3nqw2gyQxH9pQ9YH3rPnFqExv1voUtHzO7jI2unwnR', '2018-06-04 10:43:42', '2018-06-04 10:56:05'),
(11, 'ANa', 'Bel', '654654645', '1234567890123456', 'Anabel', '76/54', 'ana@bel', '$2y$10$Q.BCAlBI5Rh7LrzSbQMm1usdAlGgh7tFVvdLWOByxEu.NgUDEFa.G', NULL, '2018-06-04 13:21:22', '2018-06-04 13:21:22'),
(12, 'Prueba1', 'wdwd', '434346', '1234567890123456', 'ereref', '54/45', 'dwdwd@f.vom', '$2y$10$k.p9WcTfO9SbuZTArTZTSuTNadwdj6Og6R/7O0XUEtq1lYLc8a0Xu', NULL, '2018-06-04 13:46:56', '2018-06-04 13:49:51');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `reservasrestaurants`
--
ALTER TABLE `reservasrestaurants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reservasspas`
--
ALTER TABLE `reservasspas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservastratamientos`
--
ALTER TABLE `reservastratamientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
