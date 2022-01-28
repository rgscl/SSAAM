-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2022 a las 02:05:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ssaam_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sam`
--

CREATE TABLE `sam` (
  `id` int(11) NOT NULL,
  `IdOficio` varchar(50) NOT NULL,
  `IdInscripcion` varchar(20) NOT NULL,
  `Tenor` varchar(255) NOT NULL,
  `Ingreso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sam`
--

INSERT INTO `sam` (`id`, `IdOficio`, `IdInscripcion`, `Tenor`, `Ingreso`) VALUES
(5, 'S-98450982534', 'RC1SER193559912345', 'oiuwroiuweoiuweoriuweoriuppp', '2022-01-22 17:16:20'),
(7, 'T86868686868686', 'CC1COP1935044400145', 'Traspasados los derechos de fulano a fulana según inscripción 333 del 23ago1964.', '2022-01-23 03:09:42'),
(8, 'S456789J', 'CC1COP1901023400345', 'Traspasados los derechos según inscripción 981 del 24dic2021.', '2022-01-24 01:57:21'),
(9, 'C39876123', 'RC3SER1940025400237', 'Prohibición de gravar o enajenar según inscripción 665 del 18octubre2020.', '2022-01-24 02:00:25'),
(10, 'V-87634567', 'CM1VAL1937015100089', 'Traspasa derechos mineros sobre placer aurífero según contrato en inscr.855 del 12feb2019. ', '2022-01-24 02:06:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sam`
--
ALTER TABLE `sam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sam`
--
ALTER TABLE `sam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
