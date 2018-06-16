-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2018 a las 11:58:09
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
(1, 'prueba1', 'prue', 'ba1', 'prueba1', 'prueba1@gmail.com', '1234', '1997-11-29', 'Hola, este es el perfil de prueba1, primer usuario de la pagina web, un saludito a todxs'),
(2, 'prueba2', 'prue', 'ba2', 'prueba2', 'prueba2@gmail.com', '1234', '1988-06-12', 'Hola a todxs, este es el segundo perfil que se crea, prueba 2, salu2');

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
