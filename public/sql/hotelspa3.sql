-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2018 a las 21:35:51
-- Versión del servidor: 10.1.30-MariaDB
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
------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

-- Volcado de datos para la tabla `migrations`
--
-------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--
-----------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `reservasrestaurants` (`id`, `restaurant`, `fechaentrada`, `comensales`, `hora`, `created_at`, `updated_at`) VALUES
(2, 'Spring Space', '04/05/2018', 0, '13:00', '2018-05-28 16:35:23', '2018-05-28 16:35:23'),
(3, 'Spring Space', '04/05/2018', 0, '15:30', '2018-05-28 16:36:24', '2018-05-28 16:36:24'),
(4, 'Spring Space', '03/05/2018', 1, '22:00', '2018-05-28 16:38:26', '2018-05-28 16:38:26'),
(5, 'Spring Space', '05/05/2018', 2, '13:00', '2018-05-28 16:38:51', '2018-05-28 16:38:51'),
(6, 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 16:45:05', '2018-05-28 16:45:05'),
(7, 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 16:48:15', '2018-05-28 16:48:15'),
(8, 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 16:48:18', '2018-05-28 16:48:18'),
(9, 'Spring Space', 'Selecciona la fecha', 1, '13:00', '2018-05-28 17:14:17', '2018-05-28 17:14:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservasspas`
--

CREATE TABLE `reservasspas` (
  `id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `reservasspas` (`id`, `spa`, `fechaentrada`, `personas`, `hora`, `created_at`, `updated_at`) VALUES
(1, 'Circuito Termal', '06/05/2018', 1, '13:00', '2018-05-28 17:09:16', '2018-05-28 17:09:16'),
(2, 'Circuito Termal', 'Selecciona la fecha', 1, '13:00', '2018-05-28 17:14:22', '2018-05-28 17:14:22'),
(3, 'Termal Aqua', 'Selecciona la fecha', 1, '13:00', '2018-05-28 17:14:27', '2018-05-28 17:14:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservastratamientos`
--

CREATE TABLE `reservastratamientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tratamiento` varchar(50) NOT NULL,
  `fechaentrada` varchar(25) NOT NULL,
  `hora` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservastratamientos`
--

INSERT INTO `reservastratamientos` (`id`, `tratamiento`, `fechaentrada`, `hora`, `created_at`, `updated_at`) VALUES
(1, 'Drenaje Linfático', '04/05/2018', '13:00', '2018-05-28 17:31:45', '2018-05-28 17:31:45'),
(2, 'Masaje Corporal', 'Selecciona la fecha', '13:00', '2018-05-28 17:33:54', '2018-05-28 17:33:54'),
(3, 'Lifting Facial', 'Selecciona la fecha', '13:00', '2018-05-28 17:33:59', '2018-05-28 17:33:59');

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

-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `reservasrestaurants`
--
ALTER TABLE `reservasrestaurants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservasspas`
--
ALTER TABLE `reservasspas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservastratamientos`
--
ALTER TABLE `reservastratamientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
