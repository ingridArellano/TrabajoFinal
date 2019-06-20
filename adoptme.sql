-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2019 a las 19:23:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
(5, 2, 11),
(6, 2, 10),
(7, 2, 10),
(8, 2, 10),
(9, 2, 14);

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
  `tiempo_solo` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `tipo_masc` varchar(70) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_masc`, `nombre_masc`, `sexo_masc`, `tamaño_masc`, `peso_masc`, `edad_masc`, `nivel_act`, `espacio_req`, `tiempo_solo`, `estado`, `tipo_masc`, `imagen`) VALUES
(6, 'a', 'hembra', 'mediano', '1', 12, 'medio', 'pequeño', 2, '', '', ''),
(7, 'maria', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, '', '', ''),
(9, 'monica', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, '', '', ''),
(10, 'maria', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, 'adoptado', '', ''),
(12, 'mola', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, 'adoptado', '', ''),
(13, 'milagros', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, 'en adopcio', '', ''),
(14, 'mola', 'hembra', 'mediano', '1', 12, 'fuerte', 'mediano', 2, 'adoptado', '', ''),
(15, 'hola', 'hembra', 'grande', '30', 6, 'bajo', 'grande', 1, '', 'perro', ''),
(16, 'hola', 'hembra', 'grande', '30', 6, 'bajo', 'grande', 1, '', 'perro', ''),
(17, 'hola', 'hembra', 'mediano', '30', 3, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(18, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(19, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(20, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(21, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(22, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(23, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(24, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(25, 'hola', 'macho', 'mediano', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(26, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(27, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(28, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(29, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(30, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(31, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(32, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(33, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(34, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(35, 'mini', 'macho', 'grande', '2', 6, '1', 'mediano', 1, '', 'perro', 'img/.perro.jpg'),
(36, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(37, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(38, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(39, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(40, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(41, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(42, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(43, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(44, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(45, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(46, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(47, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(48, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(49, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(50, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(51, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(52, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg'),
(53, 'hi', 'macho', 'mediano', '2', 6, 'bajo', 'grande', 1, '', 'perro', 'img/.perro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `id_usuario` int(11) NOT NULL,
  `usuarioNick` varchar(30) NOT NULL,
  `contraseñaNick` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `celular` char(9) NOT NULL,
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

INSERT INTO `postulante` (`id_usuario`, `usuarioNick`, `contraseñaNick`, `nombre`, `apellido`, `direccion`, `distrito`, `celular`, `fechaNacimiento`, `dni`, `correo`, `estadoCivil`, `ocupacion`, `centroET`) VALUES
(1, 'hola', '123', 's', 'q', 'f', '17', '989658210', '2001-12-12', '12345678', 'ss@hotmail.com', 'casado', 'estudiante', 'usil'),
(2, 'ajam', 'ajam', 'si', 'no', 'ese', 'Carabayllo', '123456789', '2001-03-12', '12345678', 'ss@hotmail.com', 'soltero', 'estudiante', 'usil');

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
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_masc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
