-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2018 a las 19:28:58
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
(1, 'Alex', 'Cipoesu', 'Guapo', 'prueba1', 'prueba1@gmail.com', '1234', '1997-11-29', 'ME gustan los pitos tiesos'),
(2, 'prueba2', 'prue', 'ba2', 'prueba2', 'prueba2@gmail.com', '1234', '1988-06-11', 'Hola a todxs, este es el segundo perfil que se crea, prueba 2, salu2'),
(3, 'Alex', 'Ito', 'El ', 'asd', 'asd', 'asd', '2112-12-12', 'Culito'),
(4, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '1997-11-29', 'qweqweqweqwe'),
(5, 'Manolo', 'Manolo', 'Manolo', 'manolo', 'Manolo', 'Manolo', '1997-11-29', 'ManoloManoloManoloManoloManoloManoloManoloManoloManoloManoloManoloManolo cabezabolo'),
(6, '', '', '', 'xxalexthrashxx', 'alexman.melchor@gmail.com', '1234', '1997-11-29', ''),
(7, 'pedro', 'sancheasdkÃ±l', 'martinez', 'pedritox', 'pedro@gmail.com', '1234', '1997-11-29', '  me gusta el counter y overwatch jejeje'),
(8, 'pepe', 'asd', 'dsa', 'pepito', 'pepito@gmail.com', '1234', '1997-11-29', 'Hola soy pepe');

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
