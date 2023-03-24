-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2023 a las 22:54:07
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

--
-- Volcado de datos para la tabla `grupos_chat`
--

INSERT INTO `grupos_chat` (`id_grupo`, `n_grupo`, `propietario`) VALUES
(45, 'Nuevo grupo', 11),
(46, 'Otro grupo', 16),
(47, 'Mas grupos', 16),
(48, 'Grupo 1', 16),
(49, 'Grupo 2', 16),
(50, 'hsagd', 16),
(51, 'Más grupos', 19);

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

--
-- Volcado de datos para la tabla `grupo_integrante`
--

INSERT INTO `grupo_integrante` (`id`, `id_grupo`, `id_usuario`, `tipo_user`) VALUES
(124, 50, 11, 'user'),
(125, 50, 16, 'admin'),
(126, 47, 18, 'user'),
(127, 47, 16, 'user'),
(128, 47, 19, 'admin');

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

--
-- Volcado de datos para la tabla `mensajes_grupos`
--

INSERT INTO `mensajes_grupos` (`id`, `id_msg`, `id_persona`, `id_grupo`, `estado`) VALUES
(105, 215, 11, 50, 0),
(106, 215, 16, 50, 1),
(107, 220, 11, 50, 0),
(108, 220, 16, 50, 1),
(109, 221, 18, 47, 1),
(110, 221, 16, 47, 1),
(111, 221, 19, 47, 1),
(112, 222, 18, 47, 1),
(113, 222, 16, 47, 1),
(114, 222, 19, 47, 1),
(115, 223, 18, 47, 1),
(116, 223, 16, 47, 1),
(117, 223, 19, 47, 1);

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

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `imagen`, `tipo`, `estado`, `fecha`, `hora`, `ip`) VALUES
(257, 11, 16, 'Hola', '', 0, 0, '2023-03-24', '16:21:04', '::1'),
(258, 19, 16, 'Hola', '', 0, 0, '2023-03-24', '16:21:12', '::1'),
(259, 21, 16, 'hey', '', 0, 0, '2023-03-24', '16:21:19', '::1');

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
(18, 'Andres ', 'Moreno', '987', '987', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 19, 2, '1999-04-30', 6, 1, '1679402634clab.jpeg', 'Desconectado'),
(19, 'Pepito', 'Perez', '3003551529', '000', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 6, '1999-04-30', 7, 1, '1679504329auth.jpeg', 'Disponible'),
(20, 'Usuario', 'Privis', '222', '222', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 3, '1999-04-30', 7, 2, '1679665160logo.jpeg', 'Desconectado'),
(21, 'Usuario ', 'Regular', '333', '333', 'c93ccd78b2076528346216b3b2f701e6', '1999-04-30', 22, 6, '1999-04-30', 7, 3, '1679666819img1.jpg', 'Desconectado');

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
  MODIFY `id_grupo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `grupo_integrante`
--
ALTER TABLE `grupo_integrante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `mensajes_grupos`
--
ALTER TABLE `mensajes_grupos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

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
