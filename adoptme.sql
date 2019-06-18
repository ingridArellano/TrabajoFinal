-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2019 a las 22:37:54
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

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
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `sexo` char(10) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `celular` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombres`, `apellidos`, `correo`, `sexo`, `fechadenacimiento`, `distrito`, `celular`) VALUES
(1, 'fghfghfgh', 'hjgjvhjg', 'fghfghg@d.m', 'F', '1999-10-13', 'La Molina', '789456123');

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
(1, 'momo', 'Macho', 'grande', '30', 3, '1', 'grande', 0),
(2, 'MOMO', 'Macho', 'GRANDE', '30', 3, '1', 'GRANDE', 0),
(3, 'AISHA', 'Hembra', 'PEQUEÑO', '20', 2, '1', 'PEQUEÑO', 0),
(4, 'hoa', 'M', 'mediano', '1', 6, 'mediamo', 'meido', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `id` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
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

INSERT INTO `postulante` (`id`, `idMascota`, `nombre`, `apellido`, `direccion`, `distrito`, `celular`, `telefono`, `fechaNacimiento`, `dni`, `correo`, `estadoCivil`, `ocupacion`, `centroET`) VALUES
(1, 0, 'LILI', 'LAZARO', 'SDVFSDG', '3', '123456789', '123456789', '2019-06-02', '12345678', 'wer@gmail.com', 'soltero', 'ESTUDIANTE', 'USIL'),
(2, 0, 'Lili', 'Del solar', 'sdadfefe', '4', '543634565', '435654', '1987-05-31', '4356356', 'lili@gmail.com', 'soltero', 'Estudiante', 'USIL'),
(3, 0, 'Lili', 'Del solar', 'sdadfefe', '4', '543634565', '435654', '1987-05-31', '4356356', 'lili@gmail.com', 'soltero', 'Estudiante', 'USIL'),
(4, 0, 'Lili', 'Del solar', 'sdadfefe', '4', '543634565', '435654', '1987-05-31', '4356356', 'lili@gmail.com', 'soltero', 'Estudiante', 'USIL'),
(5, 0, 'Lili', 'Del solar', 'sdadfefe', '4', '543634565', '435654', '1987-05-31', '4356356', 'lili@gmail.com', 'soltero', 'Estudiante', 'USIL'),
(6, 0, 'Martha', 'Lazaro', 'tgtnhgnh', '4', '963258741', '012365478', '1986-12-03', '21456398', 'mariaquispe@gmail.com', 'soltero', 'Medico', 'Ricardo Palma');

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
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

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
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_masc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
