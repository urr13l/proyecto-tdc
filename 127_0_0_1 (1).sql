-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2022 a las 23:24:06
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
  PRIMARY KEY (`c_id_usuario`),
  KEY `cliente_ibfk_2` (`c_id_tarjeta`)
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
  `c_id_usaurio` int(3) NOT NULL,
  `c_numero_asiento` int(2) NOT NULL,
  `c_id_urvan` int(3) NOT NULL,
  `c_id_destino` int(2) NOT NULL,
  `c_costo` float NOT NULL,
  `c_tiempo_viaje` varchar(100) NOT NULL,
  `c_fecha_salida` varchar(100) NOT NULL,
  `c_hora_salida` varchar(100) NOT NULL,
  KEY `c_id_usaurio` (`c_id_usaurio`),
  KEY `c_id_urvan` (`c_id_urvan`),
  KEY `c_id_destino` (`c_id_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`c_id_usuario`, `id_urvan`, `c_nombre`, `c_tipo_licencia`) VALUES
(1, 1, 'Juan Perez', 'estatal'),
(2, 2, 'Juan Lopez', 'estatal'),
(3, 3, 'Juan Mendez', 'estatal'),
(4, 4, 'Juan Hernandez', 'estatal'),
(5, 5, 'Samuel Hernandez', 'estatal'),
(6, 6, 'Cristian Lopez', 'estatal'),
(7, 7, 'Manuel Valdez', 'estatal'),
(8, 8, 'Hernan Lopez', 'estatal'),
(9, 9, 'Mauricio Estrada', 'estatal'),
(10, 10, 'Sergio Perez', 'estatal'),
(11, 11, 'Max verstapen', 'estatal'),
(12, 12, 'Lewis Hamilton', 'estatal'),
(13, 13, 'Charles lecrec', 'estatal'),
(14, 14, 'Carlos sainz', 'estatal'),
(15, 15, 'Fernando alonso', 'estatal'),
(16, 16, 'Enrique peña', 'estatal'),
(17, 17, 'Andres manuel', 'estatal'),
(18, 18, 'Leonardo Reyes', 'estatal'),
(19, 19, 'Zaira Gil', 'estatal'),
(20, 20, 'Ricky Didier', 'estatal'),
(21, 21, 'Xiomara Lopez', 'estatal'),
(22, 22, 'ADRIANA CAROLINA HERNANDEZ MONTERROZA', 'estatal'),
(23, 23, 'ADRIANA MARCELA REY SANCHEZ', 'estatal'),
(24, 24, 'ALEJANDRO ABONDANO ACEVEDO', 'estatal'),
(25, 25, 'ALEXANDER CARVAJAL VARGAS', 'estatal'),
(26, 26, 'ANDREA CATALINA ACERO CARO', 'estatal'),
(27, 27, 'ANDREA LILIANA CRUZ GARCIA', 'estatal'),
(28, 28, 'ANDRES FELIPE VILLA MONROY ', 'estatal'),
(29, 29, 'ANGELA PATRICIA MAHECHA PIÑEROS', 'estatal'),
(30, 30, 'ANGELICA LISSETH BLANCO CONCHA', 'estatal'),
(31, 31, 'ANGELICA MARIA ROCHA GARCIA', 'estatal'),
(32, 32, 'ANGIE TATIANA FERNÁNDEZ MARTÍNEZ', 'estatal'),
(33, 33, 'BRIGITE POLANCO RUIZ', 'estatal'),
(34, 34, 'CAMILO VILLAMIZAR ARISTIZABAL', 'estatal'),
(35, 35, 'CAMILO RODRÍGUEZ BOTERO', 'estatal'),
(36, 36, 'CAMILO ALBERTO CORTÉS MONTEJO', 'estatal'),
(37, 37, 'CAMILO ENRIQUE GOMEZ RODRIGUEZ', 'estatal'),
(38, 38, 'CARLOS ANDRÉS POLO CASTELLANOS', 'estatal'),
(39, 39, 'CARLOS DIDIER CASTAÑO CONTRERAS', 'estatal'),
(40, 40, 'CARLOS FELIPE MOGOLLÓN PACHÓN', 'estatal'),
(41, 41, 'CAROL RUCHINA GOMEZ GIANINE', 'estatal'),
(42, 42, 'DANIEL GÓMEZ DELGADO ', 'estatal');

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
  `c_id_urvan` int(3) NOT NULL,
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
  `c_hora_salida` varchar(100) NOT NULL,
  `c_origen` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id_urvan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `urvan`
--

INSERT INTO `urvan` (`c_id_urvan`, `c_disponibilidad`, `c_asiento_1`, `c_asiento_2`, `c_asiento_3`, `c_asiento_4`, `c_asiento_5`, `c_asiento_6`, `c_asiento_7`, `c_asiento_8`, `c_asiento_9`, `c_asiento_10`, `c_asiento_11`, `c_asiento_12`, `c_asiento_13`, `c_asiento_14`, `c_asiento_15`, `c_asiento_16`, `c_hora_salida`, `c_origen`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3:30', 'Puerto Escondido'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4:30', 'Puerto Escondido'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5:30', 'Puerto Escondido'),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6:30', 'Puerto Escondido'),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '7:30', 'Puerto Escondido'),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '8:30', 'Puerto Escondido'),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '9:30', 'Puerto Escondido'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10:30', 'Puerto Escondido'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '11:30', 'Puerto Escondido'),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '12:30', 'Puerto Escondido'),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '13:30', 'Puerto Escondido'),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14:30', 'Puerto Escondido'),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '15:30', 'Puerto Escondido'),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '16:30', 'Puerto Escondido'),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '17:30', 'Puerto Escondido'),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '18:30', 'Puerto Escondido'),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '19:30', 'Puerto Escondido'),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '20:30', 'Puerto Escondido'),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '21:30', 'Puerto Escondido'),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '22:30', 'Puerto Escondido'),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '23:30', 'Puerto Escondido'),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3:30', 'Oaxaca'),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4:30', 'Oaxaca'),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5:30', 'Oaxaca'),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca'),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Oaxaca');

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
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`c_id_usaurio`) REFERENCES `cliente` (`c_id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`c_id_urvan`) REFERENCES `urvan` (`c_id_urvan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`c_id_destino`) REFERENCES `destino` (`c_id_destino`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`id_urvan`) REFERENCES `urvan` (`c_id_urvan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
