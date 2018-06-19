-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2018 a las 19:28:54
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
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID_MENSAJE` int(10) NOT NULL,
  `ID_USUARIO_EMISOR` int(20) NOT NULL,
  `ID_USUARIO_RECEPTOR` int(20) NOT NULL,
  `MENSAJE` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID_MENSAJE`, `ID_USUARIO_EMISOR`, `ID_USUARIO_RECEPTOR`, `MENSAJE`) VALUES
(1, 1, 7, 'Holis wapi'),
(2, 3, 7, 'helloooo'),
(3, 1, 7, 'que tal, juegas?'),
(4, 7, 1, 'contigo no, puto bicho'),
(5, 7, 3, 'holiwiski'),
(6, 7, 6, 'Jugamos loko?'),
(7, 8, 5, 'hola, jugamos??'),
(8, 5, 5, 'Hola manolo, te apetece jugar conmigo?Â¿'),
(9, 5, 7, 'Hola pedrito, quieres jugar conmigo?');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID_MENSAJE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
