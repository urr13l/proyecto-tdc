-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 01:20:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tdc`
--
DROP DATABASE IF EXISTS `bd_tdc`;
CREATE DATABASE IF NOT EXISTS `bd_tdc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_tdc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `c_id_administrador` int(3) NOT NULL AUTO_INCREMENT,
  `c_usuario` varchar(100) NOT NULL,
  `c_nombre` varchar(100) NOT NULL,
  `c_contrasenia` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`c_id_administrador`, `c_usuario`, `c_nombre`, `c_contrasenia`) VALUES
(1, 'luis123', 'Luis Fernando de la Cruz López', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `c_id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `c_usuario` varchar(50) NOT NULL,
  `c_nombre` varchar(50) NOT NULL,
  `c_contrasenia` varchar(128) NOT NULL,
  `c_telefono` varchar(10) NOT NULL,
  `c_id_tarjeta` int(3) DEFAULT NULL,
  PRIMARY KEY (`c_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`c_id_usuario`, `c_usuario`, `c_nombre`, `c_contrasenia`, `c_telefono`, `c_id_tarjeta`) VALUES
(2, 'RICKY123', 'RICKY DIDIER PERALTA REYES', 'admin', '9541364103', 1),
(3, 'uriel123', 'uriel romeo cruz cortes', '123456', '9541304589', NULL),
(4, 'pedro123', 'pedro reyes', 'p123456', '9541234578', NULL),
(5, 'Edsel', 'Adsel palacio loco', 'admin', '9541345455', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `c_id_compra` int(3) NOT NULL AUTO_INCREMENT,
  `c_numero_de_asiento` int(2) NOT NULL,
  `c_id_viaje` int(3) NOT NULL,
  `c_id_destino` int(3) NOT NULL,
  `c_costo` int(4) NOT NULL,
  `c_tiempo_de_viaje` varchar(50) NOT NULL,
  `c_id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`c_id_compra`),
  KEY `c_id_usuario` (`c_id_usuario`),
  KEY `c_id_viaje` (`c_id_viaje`),
  KEY `c_id_destino` (`c_id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`c_id_compra`, `c_numero_de_asiento`, `c_id_viaje`, `c_id_destino`, `c_costo`, `c_tiempo_de_viaje`, `c_id_usuario`) VALUES
(1, 1, 1, 1, 500, '1 hora 30 min', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

DROP TABLE IF EXISTS `conductor`;
CREATE TABLE IF NOT EXISTS `conductor` (
  `c_id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `id_urvan` int(3) NOT NULL,
  `c_nombre` varchar(100) NOT NULL,
  `c_tipo_licencia` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id_usuario`),
  KEY `id_urvan` (`id_urvan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`c_id_usuario`, `id_urvan`, `c_nombre`, `c_tipo_licencia`) VALUES
(1, 1, 'Luis fernando de la cruz lopez', 'estatal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_bancarios`
--

DROP TABLE IF EXISTS `datos_bancarios`;
CREATE TABLE IF NOT EXISTS `datos_bancarios` (
  `c_id_tarjeta` int(3) NOT NULL AUTO_INCREMENT,
  `c_fecha_vencimiento` varchar(5) NOT NULL,
  `c_codigo_seguridad` int(3) NOT NULL,
  `c_nombre` varchar(100) NOT NULL,
  `c_numero_tarjeta` varchar(16) NOT NULL,
  PRIMARY KEY (`c_id_tarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_bancarios`
--

INSERT INTO `datos_bancarios` (`c_id_tarjeta`, `c_fecha_vencimiento`, `c_codigo_seguridad`, `c_nombre`, `c_numero_tarjeta`) VALUES
(1, '09/01', 123, 'RICKY DIDIER PERALTA REYES', '1234567891234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

DROP TABLE IF EXISTS `destino`;
CREATE TABLE IF NOT EXISTS `destino` (
  `c_id_destino` int(3) NOT NULL AUTO_INCREMENT,
  `c_nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`c_id_destino`, `c_nombre`) VALUES
(1, 'Juchatengo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urvan`
--

DROP TABLE IF EXISTS `urvan`;
CREATE TABLE IF NOT EXISTS `urvan` (
  `c_id_urvan` int(3) NOT NULL AUTO_INCREMENT,
  `c_disponibilidad` int(1) NOT NULL,
  `c_asiento_1` int(1) NOT NULL,
  `c_asiento_2` int(1) NOT NULL,
  `c_asiento_3` int(1) NOT NULL,
  `c_asiento_4` int(1) NOT NULL,
  `c_asiento_5` int(1) NOT NULL,
  `c_asiento_6` int(1) NOT NULL,
  `c_asiento_7` int(1) NOT NULL,
  `c_asiento_8` int(1) NOT NULL,
  `c_asiento_9` int(1) NOT NULL,
  `c_asiento_10` int(1) NOT NULL,
  `c_asiento_11` int(1) NOT NULL,
  `c_asiento_12` int(1) NOT NULL,
  `c_asiento_13` int(1) NOT NULL,
  `c_asiento_14` int(1) NOT NULL,
  `c_asiento_15` int(1) NOT NULL,
  `c_asiento_16` int(1) NOT NULL,
  PRIMARY KEY (`c_id_urvan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `urvan`
--

INSERT INTO `urvan` (`c_id_urvan`, `c_disponibilidad`, `c_asiento_1`, `c_asiento_2`, `c_asiento_3`, `c_asiento_4`, `c_asiento_5`, `c_asiento_6`, `c_asiento_7`, `c_asiento_8`, `c_asiento_9`, `c_asiento_10`, `c_asiento_11`, `c_asiento_12`, `c_asiento_13`, `c_asiento_14`, `c_asiento_15`, `c_asiento_16`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

DROP TABLE IF EXISTS `viaje`;
CREATE TABLE IF NOT EXISTS `viaje` (
  `c_id_viaje` int(3) NOT NULL AUTO_INCREMENT,
  `c_origen` varchar(50) NOT NULL,
  `c_hora` varchar(50) NOT NULL,
  `c_fecha _salida` varchar(50) NOT NULL,
  `c_id_urvan` int(3) NOT NULL,
  PRIMARY KEY (`c_id_viaje`),
  KEY `c_id_urvan` (`c_id_urvan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`c_id_viaje`, `c_origen`, `c_hora`, `c_fecha _salida`, `c_id_urvan`) VALUES
(1, 'Pto. Escondido', '15:00', '16/06/22', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`c_id_tarjeta`) REFERENCES `datos_bancarios` (`c_id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`c_id_tarjeta`) REFERENCES `datos_bancarios` (`c_id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`c_id_usuario`) REFERENCES `cliente` (`c_id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`c_id_viaje`) REFERENCES `viaje` (`c_id_viaje`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`c_id_destino`) REFERENCES `destino` (`c_id_destino`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`id_urvan`) REFERENCES `urvan` (`c_id_urvan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`c_id_urvan`) REFERENCES `urvan` (`c_id_urvan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
