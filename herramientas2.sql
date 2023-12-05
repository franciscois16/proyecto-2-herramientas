-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-11-2023 a las 09:21:31
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `herramientas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general`
--

DROP TABLE IF EXISTS `general`;
CREATE TABLE IF NOT EXISTS `general` (
  `nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `objetivo` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `telefono` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `RUT` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`RUT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `general`
--

INSERT INTO `general` (`nombre`, `objetivo`, `fecha`, `telefono`, `RUT`) VALUES
('Diego Arias', 'Cita para leer la biblia', '2023-10-26', '+5695683412', '21.320.275-8'),
('Ignacio Contreras', 'Arreglar el login', '2023-11-15', '+5695683412', '15.311.387-4'),
('Claudio Matulich', 'Nose', '2023-11-07', '+569287753', '13.211.124-4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('ignacio', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resoluciones`
--

DROP TABLE IF EXISTS `resoluciones`;
CREATE TABLE IF NOT EXISTS `resoluciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `resoluciones`
--

INSERT INTO `resoluciones` (`id`, `name`, `file_name`) VALUES
(1, 'Ignacio Contreras Norambuena', 'DIAGRAMA BPMN.docx'),
(2, 'Ignacio Contreras Norambuena', 'DSIA EXPPO.pptx'),
(3, 'Ignacio Contreras Norambuena', '6d5eba0a-5719-4689-91af-bc5a08f85f85.jpeg'),
(4, 'Pepe', '2022-02-13[14-33] (0).png'),
(5, 'Juan', 'ScreenShot-2022-1-21_16-35-20.png'),
(6, 'zaza', 'RobloxScreenShot20220319_152531828.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ignacio', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
