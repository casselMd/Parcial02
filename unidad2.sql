-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2025 a las 19:23:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unidad2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id` bigint(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `linea_investigacion` varchar(64) NOT NULL,
  `resumen` varchar(64) NOT NULL,
  `objetivos` varchar(64) NOT NULL,
  `fecha_inicio` varchar(64) NOT NULL,
  `fecha_fin` varchar(64) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_tesista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id`, `titulo`, `linea_investigacion`, `resumen`, `objetivos`, `fecha_inicio`, `fecha_fin`, `estado`, `id_tesista`) VALUES
(1, 'Teoria General de Sistemas', 'ING.Sistemas', 'plan de mejora de sistemas', 'plan de mejora', '11/06/2024', '11/08/2024', 1, 1),
(2, 'Cyberseguridad', 'Seguridad', 'problematica de seguridad', 'promover la seguridad', '25/01/2024', '20/12/2024', 1, 2),
(3, 'Informática Forence', 'Seguridad', 'Metodos de informática', 'informar acerca de las nuevas tendencias en seguridad forence', '09/02/2022', '24/06/2023', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesista`
--

CREATE TABLE `tesista` (
  `id` bigint(20) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `nombres` varchar(64) NOT NULL,
  `dni` int(8) NOT NULL,
  `escuela` varchar(64) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tesista`
--

INSERT INTO `tesista` (`id`, `apellidos`, `nombres`, `dni`, `escuela`, `estado`) VALUES
(1, 'Gustavo Perez', 'Cristian ', 75513009, 'ING.Sistemas', 1),
(2, 'Urupeque Chumioque', 'Deybi Joel', 75503956, 'ING.sistemas', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_tesista` (`id_tesista`);

--
-- Indices de la tabla `tesista`
--
ALTER TABLE `tesista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tesista`
--
ALTER TABLE `tesista`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
