-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 23:02:09
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
  `MENSAJE` varchar(300) NOT NULL,
  `FECHA` datetime NOT NULL,
  `LEIDO` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID_MENSAJE`, `ID_USUARIO_EMISOR`, `ID_USUARIO_RECEPTOR`, `MENSAJE`, `FECHA`, `LEIDO`) VALUES
(1, 3, 0, 'Hola mozuelo', '2018-06-20 17:55:32', 'si'),
(2, 2, 3, 'Funciona?', '2018-06-20 18:31:46', 'si'),
(3, 4, 2, 'Hola, me gustaria ser tu amiguito y jugar juntos', '2018-06-20 22:47:43', 'si'),
(4, 0, 3, 'Hola, me gustaria jkugar contihgo, mi teclado no es mui vueno', '2018-06-20 22:48:09', 'si'),
(5, 2, 4, 'Hola mengan, que tal?', '2018-06-20 22:49:07', 'si'),
(6, 3, 0, 'asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd asdasdasd ', '2018-06-20 22:49:37', 'si');

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
