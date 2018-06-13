-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 17:41:54
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

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
  `FECHA_NAC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO_1`, `APELLIDO_2`, `USUARIO`, `EMAIL`, `CONTRASENA`, `FECHA_NAC`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', '', 'asd', '1997-11-29'),
(2, 'Pablote', 'saez', 'maroto', 'Pablote', '', '1234', '2202-02-02'),
(3, 'alex', 'Gitano', 'Rumano', 'alex', 'alex@gmail.com', 'alex', '1996-01-01'),
(4, 'minicay', 'bbbb', 'ccccc', 'minicay', 'minicay@gmail.com', '1234', '1988-07-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`ID_INCRIPCION`),
  ADD KEY `fk_id_usuario` (`ID_USUARIO`),
  ADD KEY `fk_id_juego` (`ID_JUEGO`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID_JUEGO`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD KEY `fk_id_usuario_emisor` (`ID_USUARIO_EMISOR`),
  ADD KEY `fk_id_usuario_receptor` (`ID_USUARIO_RECEPTOR`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_id_juego` FOREIGN KEY (`ID_JUEGO`) REFERENCES `juegos` (`ID_JUEGO`),
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_id_usuario_emisor` FOREIGN KEY (`ID_USUARIO_EMISOR`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `fk_id_usuario_receptor` FOREIGN KEY (`ID_USUARIO_RECEPTOR`) REFERENCES `usuarios` (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
