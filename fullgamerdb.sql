-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2022 a las 12:16:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fullgamerdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_accion`
--

CREATE TABLE `comentarios_accion` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_aventura`
--

CREATE TABLE `comentarios_aventura` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_carreras`
--

CREATE TABLE `comentarios_carreras` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_index`
--

CREATE TABLE `comentarios_index` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_index`
--

INSERT INTO `comentarios_index` (`id`, `nombre`, `comentario`) VALUES
(1, 'Nacho Varga', 'Excelente sitio muchachos, felicitaciones!!!'),
(2, 'Fabian Lamus', 'Maravilloso, amo este sitio para mí y para mis hijos.'),
(3, 'Tuco Salamanca', 'Hola Papis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_terror`
--

CREATE TABLE `comentarios_terror` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `contraseña` text NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `rol`) VALUES
(3, 'mradmin', '1234', 1),
(5, 'Walter', '1234', 0),
(6, 'Lola Salamanca', '1234', 0),
(7, 'mrmolin', '1234', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios_accion`
--
ALTER TABLE `comentarios_accion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios_aventura`
--
ALTER TABLE `comentarios_aventura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios_carreras`
--
ALTER TABLE `comentarios_carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios_index`
--
ALTER TABLE `comentarios_index`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios_terror`
--
ALTER TABLE `comentarios_terror`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios_accion`
--
ALTER TABLE `comentarios_accion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios_aventura`
--
ALTER TABLE `comentarios_aventura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios_carreras`
--
ALTER TABLE `comentarios_carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios_index`
--
ALTER TABLE `comentarios_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentarios_terror`
--
ALTER TABLE `comentarios_terror`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
