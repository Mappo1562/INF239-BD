-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2024 a las 02:41:44
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
-- Base de datos: `tarea_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `numero_habitacion` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`numero_habitacion`, `tipo`, `precio`) VALUES
(1, 'single', 10000),
(2, 'double', 20000),
(3, 'king', 80000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `ID_Reserva` int(11) NOT NULL,
  `rut_huesped` int(8) NOT NULL,
  `numero_habitacion` int(11) NOT NULL,
  `f_chek_in` date NOT NULL,
  `f_chek_out` date NOT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`ID_Reserva`, `rut_huesped`, `numero_habitacion`, `f_chek_in`, `f_chek_out`, `calificacion`) VALUES
(5, 11, 1, '2024-05-05', '2024-05-17', 2),
(9, 21175466, 3, '2024-05-11', '2024-05-13', 4),
(13, 222, 2, '2024-05-01', '2024-05-02', 3),
(14, 123451, 3, '2024-05-07', '2024-05-08', 5),
(16, 222, 1, '2024-05-13', '2024-05-14', 1),
(17, 33, 2, '2024-05-14', '2024-05-16', 5),
(18, 868, 3, '2024-05-13', '2024-05-15', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_tour`
--

CREATE TABLE `reserva_tour` (
  `ID_reserva` int(11) NOT NULL,
  `ID_tour` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva_tour`
--

INSERT INTO `reserva_tour` (`ID_reserva`, `ID_tour`, `precio`) VALUES
(5, 2, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `ID_tour` int(11) NOT NULL,
  `precio_tour` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `medio_transporte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`ID_tour`, `precio_tour`, `fecha`, `lugar`, `medio_transporte`) VALUES
(1, 500, '2024-06-01', 'Demacia', 'Carreta'),
(2, 2000, '2024-05-24', 'Dust_II', 'Autobus de acercamiento'),
(3, 4200, '2024-05-11', 'Namek', 'Barco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`numero_habitacion`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_Reserva`),
  ADD KEY `numero_habitacion` (`numero_habitacion`);

--
-- Indices de la tabla `reserva_tour`
--
ALTER TABLE `reserva_tour`
  ADD PRIMARY KEY (`ID_reserva`,`ID_tour`),
  ADD KEY `ID_tour` (`ID_tour`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`ID_tour`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `numero_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_Reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `ID_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`numero_habitacion`) REFERENCES `habitacion` (`Numero_habitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva_tour`
--
ALTER TABLE `reserva_tour`
  ADD CONSTRAINT `reserva_tour_ibfk_1` FOREIGN KEY (`ID_reserva`) REFERENCES `reserva` (`ID_Reserva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_tour_ibfk_2` FOREIGN KEY (`ID_tour`) REFERENCES `tour` (`ID_tour`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
