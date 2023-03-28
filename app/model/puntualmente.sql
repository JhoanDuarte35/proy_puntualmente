-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 18:34:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puntualmente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(10) NOT NULL,
  `n_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `n_area`) VALUES
(20, 'Administrativo'),
(21, 'Tecnologia'),
(22, 'Operativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(10) NOT NULL,
  `n_empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `n_empresa`) VALUES
(3, 'Puntualmente'),
(6, 'CLAB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `n_grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `n_grupo`) VALUES
(7, 'Grupo 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_chat`
--

CREATE TABLE `grupos_chat` (
  `id_grupo` int(10) NOT NULL,
  `n_grupo` varchar(50) NOT NULL,
  `propietario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_integrante`
--

CREATE TABLE `grupo_integrante` (
  `id` int(10) NOT NULL,
  `id_grupo` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `tipo_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes_grupos`
--

CREATE TABLE `mensajes_grupos` (
  `id` int(10) NOT NULL,
  `id_msg` int(10) NOT NULL,
  `id_persona` int(10) NOT NULL,
  `id_grupo` int(10) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id_sede` int(10) NOT NULL,
  `n_sede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id_sede`, `n_sede`) VALUES
(3, 'Sede Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `n_user` varchar(100) NOT NULL,
  `l_user` varchar(100) NOT NULL,
  `tel_user` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `id_area` int(10) NOT NULL,
  `id_empresa` int(10) NOT NULL,
  `f_ingreso_empre` date NOT NULL,
  `id_grupo` int(10) NOT NULL,
  `rol` int(5) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `n_user`, `l_user`, `tel_user`, `cedula`, `password`, `f_nacimiento`, `id_area`, `id_empresa`, `f_ingreso_empre`, `id_grupo`, `rol`, `img`, `status`) VALUES
(11, 'Edward', 'Galindo', '3003551529', '123', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 1, 1, '1999-04-30', 1, 1, '1679055552img1.jpg', 'Desconectado'),
(16, 'Jhoan', 'Duarte', '3214096428', '1069766798', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 19, 3, '1999-04-30', 6, 1, '1679089658giftbox.png', 'Disponible'),
(18, 'Andres ', 'Moreno', '987', '987', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 19, 2, '1999-04-30', 6, 1, '1679402634clab.jpeg', 'Disponible'),
(19, 'Pepito', 'Perez', '3003551529', '000', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 6, '1999-04-30', 7, 1, '1679504329auth.jpeg', 'Disponible'),
(20, 'Usuario', 'Privis', '222', '222', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 3, '1999-04-30', 7, 2, '1679665160logo.jpeg', 'Desconectado'),
(21, 'Usuario ', 'Regular', '333', '333', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 6, '1999-04-30', 7, 3, '1679666819img1.jpg', 'Disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `grupos_chat`
--
ALTER TABLE `grupos_chat`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `grupo_integrante`
--
ALTER TABLE `grupo_integrante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes_grupos`
--
ALTER TABLE `mensajes_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tel_user` (`tel_user`,`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grupos_chat`
--
ALTER TABLE `grupos_chat`
  MODIFY `id_grupo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `grupo_integrante`
--
ALTER TABLE `grupo_integrante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `mensajes_grupos`
--
ALTER TABLE `mensajes_grupos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id_sede` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
