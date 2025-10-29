-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2025 a las 21:34:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_mecanico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `anio` year(4) NOT NULL,
  `patente` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `automoviles`
--

INSERT INTO `automoviles` (`id`, `marca`, `modelo`, `anio`, `patente`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 'enim', 2003, 'ZK242CO', 4, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(2, 'Peugeot', 'et', 2005, 'JO636PZ', 4, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(3, 'Renault', 'aut', 2010, 'PM826OB', 9, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(4, 'Ford', 'aperiam', 2017, 'OM111BJ', 9, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(5, 'Toyota', 'rem', 2012, 'LU086ZG', 9, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(6, 'Chevrolet', 'Prisma', 2005, 'BX379NP', 10, '2025-08-12 23:24:28', '2025-08-18 23:40:33'),
(7, 'Toyota', 'nemo', 2010, 'ZF676SI', 10, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(8, 'Chevrolet', 'corsa', 2011, 'FY625HW', 11, '2025-08-12 23:24:28', '2025-08-18 23:41:00'),
(10, 'Toyota', 'doloribus', 2004, 'AY458WN', 11, '2025-08-12 23:24:28', '2025-08-12 23:24:28'),
(11, 'hyundai', 'traffic', 2024, '3fg522', 7, '2025-08-18 23:35:44', '2025-08-18 23:35:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `automoviles_patente_unique` (`patente`),
  ADD KEY `automoviles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automoviles`
--
ALTER TABLE `automoviles`
  ADD CONSTRAINT `automoviles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
