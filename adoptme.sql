-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2019 a las 06:05:31
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adoptme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `asunto` varchar(300) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `nombre`, `apellido`, `correo`, `asunto`, `mensaje`) VALUES
(1, 'Lili', 'Lazaro', 'lili@gmail.com', 'Menor de edad', 'Soy menor de edad quisiera saber como debo hacer para adoptar una mascota'),
(2, 'Lili', 'Lazaro', 'lili@gmail.com', 'Menor de edad', 'gmuygu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id_ficha` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_mascotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id_ficha`, `id`, `id_mascotas`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 39, 2),
(4, 39, 2),
(5, 39, 2),
(6, 39, 1),
(7, 39, 1),
(8, 39, 1),
(9, 39, 1),
(10, 39, 1),
(11, 39, 1),
(12, 39, 1),
(13, 39, 1),
(14, 39, 1),
(15, 39, 1),
(16, 39, 1),
(17, 39, 1),
(18, 39, 1),
(19, 39, 1),
(20, 39, 1),
(21, 39, 1),
(22, 39, 1),
(23, 39, 1),
(24, 39, 1),
(25, 39, 1),
(26, 39, 3),
(27, 39, 1),
(28, 39, 1),
(29, 39, 1),
(30, 39, 1),
(31, 39, 1),
(32, 39, 4),
(33, 40, 1),
(34, 40, 2),
(35, 40, 3),
(36, 41, 4),
(37, 41, 2),
(38, 41, 1),
(39, 41, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_masc` int(11) NOT NULL,
  `nombre_masc` varchar(50) NOT NULL,
  `sexo_masc` char(6) NOT NULL,
  `tamaño_masc` varchar(15) NOT NULL,
  `peso_masc` decimal(10,0) NOT NULL,
  `edad_masc` int(11) NOT NULL,
  `nivel_act` varchar(15) NOT NULL,
  `espacio_req` varchar(15) NOT NULL,
  `tiempo_solo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_masc`, `nombre_masc`, `sexo_masc`, `tamaño_masc`, `peso_masc`, `edad_masc`, `nivel_act`, `espacio_req`, `tiempo_solo`) VALUES
(3, 'chu', 'median', 'mediano', '1', 1, 'medio', 'pequeño', 2),
(4, 'chu', 'median', 'mediano', '1', 1, 'medio', 'pequeño', 2),
(6, 'a', 'hembra', 'mediano', '1', 12, 'medio', 'pequeño', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `id` int(11) NOT NULL,
  `usuarioNick` varchar(30) NOT NULL,
  `contraseñaNick` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `celular` char(9) NOT NULL,
  `telefono` char(9) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `dni` char(8) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `centroET` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`id`, `usuarioNick`, `contraseñaNick`, `nombre`, `apellido`, `direccion`, `distrito`, `celular`, `telefono`, `fechaNacimiento`, `dni`, `correo`, `estadoCivil`, `ocupacion`, `centroET`) VALUES
(1, '', '', 'LILI', 'LAZARO', 'SDVFSDG', '3', '123456789', '123456789', '2019-06-02', '12345678', 'wer@gmail.com', 'soltero', 'ESTUDIANTE', 'USIL'),
(2, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(3, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(4, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(5, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(6, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(7, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(8, '', '', 's', 'q', 's', '2', '989766688', '1234567', '2012-02-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(9, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(10, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(11, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(12, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(13, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(14, '', '', 's', 'h', 'f', '2', '999882999', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(15, '', '', 'idMascota', 'e', 't', 'f', '2', '123456789', '0000-00-00', '2001-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(16, '', '', 'idMascota', 'r', 't', 'f', '2', '123456789', '0000-00-00', '2001-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(17, '', '', 'idMascota', 'r', 't', 'f', '2', '123456789', '0000-00-00', '2001-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(18, '', '', 'idMascota', 'r', 't', 'f', '2', '123456789', '0000-00-00', '2001-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(19, '', '', 'idMascota', 'r', 't', 'f', '2', '123456789', '0000-00-00', '2001-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(20, '', '', 'e', 'k', 'k', '18', '123456789', '1234567', '2001-12-23', '12345678', 'ss@hotmail.com', 'casado', 'soltero', 'usil'),
(21, '', '', 'e', 'k', 'k', '18', '123456789', '1234567', '2001-12-23', '12345678', 'ss@hotmail.com', 'casado', 'soltero', 'usil'),
(22, '', '', 'e', 'k', 'k', '18', '123456789', '1234567', '2001-12-23', '12345678', 'ss@hotmail.com', 'casado', 'soltero', 'usil'),
(23, '', '', 's', 'q', 'f', '19', '123456789', '1234567', '2001-02-12', '12345677', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(24, '', '', 's', 'q', 'f', '19', '123456789', '1234567', '2001-02-12', '12345677', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(26, '', '', '', 'sol', 't', 'f', '21', '123456789', '0000-00-00', '2001-12-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(27, '', '', '', 'ese', '1', 'palu', '2', '123456789', '0000-00-00', '2018-03-', '12345678', 'ss@hotmail.com', 'soltero', 'soltero'),
(28, '', '', 'qqq', 'q', 'f', '16', '123456789', '1234567', '2001-03-12', '1234567', 'ss@hotmail.com', 'soltero', 'soltero', 'd'),
(29, '', '', 'no', 'no', 'k', '17', '123456789', '1234567', '2001-02-12', '12345678', 'ss@hotmail.com', 'viudo', 'soltero', 'usil'),
(30, '', '', 'efe', 'q', 's', '15', '123456789', '1234567', '2001-12-12', '12345678', 'ss@hotmail.com', 'casado', 'soltero', 'usil'),
(31, '', '', 'efe', 'q', 's', '15', '123456789', '1234567', '2001-12-12', '12345678', 'ss@hotmail.com', 'casado', 'soltero', 'usil'),
(32, '', '', 'juan', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(33, '', '', 'juan', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(34, '', '', 'juan', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(35, '', '', 'juan', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(36, '', '', 'mark', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(37, '', '', 'mark', 'juan', 's', '15', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'divorciado', 'soltero', 'usil'),
(38, '', '', 'ah', 'ah', 'f', '2', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(39, '', '', 'nell', 'nell', 'f', '2', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(40, '', '', 'serafin', 'seraf', 'd', '17', '123456789', '1234567', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'soltero', 'usil'),
(41, '', '', 'Martha', 'Flores', 'assa', '6', '963258741', '012365478', '1985-09-10', '41256398', 'marthaflores@gmail.com', 'soltero', 'Ingeniera Industrial', 'USIL'),
(42, '', '', 'Lili', 'Del solar', 'sdadfefe', '1', '123456789', '1234567', '2001-02-21', '12345678', 'lili@gmail.com', 'soltero', 'Medico', 'Ricardo Palma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'admin', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id_ficha`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_masc`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
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
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_masc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
