-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2018 a las 11:40:37
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `game-in`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `ID_INCRIPCION` int(2) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_JUEGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `ID_JUEGO` int(2) NOT NULL,
  `NOMBRE_JUEGO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`ID_JUEGO`, `NOMBRE_JUEGO`) VALUES
(1, 'CS-GO'),
(2, 'League of Legends'),
(3, 'Overwatch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `MENSAJES` varchar(65) NOT NULL,
  `ID_USUARIO_EMISOR` int(20) NOT NULL,
  `ID_USUARIO_RECEPTOR` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO_1` varchar(50) NOT NULL,
  `APELLIDO_2` varchar(50) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `CONTRASENA` varchar(60) NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `DESCRIPCION` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO_1`, `APELLIDO_2`, `USUARIO`, `EMAIL`, `CONTRASENA`, `FECHA_NAC`, `DESCRIPCION`) VALUES
(0, '', '', '', '', '', '', '0000-00-00', ''),
(1, 'asd', 'asd', 'asd', 'asd', '', 'asd', '1997-11-29', ''),
(2, 'Pablote', 'saez', 'maroto', 'Pablote', '', '1234', '2202-02-02', ''),
(3, 'yyy', 'yyy', 'yyy', 'yyy', 'yyy', 'yyy', '1111-11-11', ''),
(4, 'AlexThrash', 'Melchor', 'Martinez', 'alexthrash', 'alexman.melchor@gmail.com', '1997', '1997-11-29', ''),
(6, 'AlexThrash2', 'melchor', 'martinez', 'alexthrash2', 'alexman.melchor@gmail.com', 'alex', '1997-11-29', 'Hola me gusta el counter y el lol y el overwatch jeje salu2'),
(7, 'Mamonsete', 'de', 'pijas', 'mamonsete', 'mamonsete@gmail.com', 'mamon', '3203-12-04', 'Hola me llamo mamon y me gusta jugar a los juegos Salu2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
