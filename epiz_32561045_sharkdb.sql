-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql112.epizy.com
-- Tiempo de generación: 06-10-2022 a las 23:25:04
-- Versión del servidor: 10.3.27-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_32561045_sharkdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `idCategoria` int(2) NOT NULL,
  `nombreCategoria` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Perdida de grasa'),
(2, 'Aumento de masa'),
(3, 'Aumento de masa'),
(4, 'Aumento de masa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `idCliente` int(2) NOT NULL,
  `nombreCliente` varchar(20) DEFAULT NULL,
  `apellidoCliente` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dni` int(9) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `pesoCliente` int(3) DEFAULT NULL,
  `alturaCliente` int(3) DEFAULT NULL,
  `aptoFisico` varchar(600) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `design`
--

CREATE TABLE `design` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `precio` float NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `design`
--

INSERT INTO `design` (`id`, `nombre`, `imagen`, `precio`, `url`) VALUES
(17, 'prueba conexion db', '1665091979_0.jpg', 0, ''),
(18, 'Prueba pk continua mod', '1665093108_89cdf69d61441c20a7afcbe7fd9065ce0f2fa7c67ad01a7dbbed1653314e2105.jpg', 0, ''),
(19, 'A diseÃ±ar', '1665093140_17574.jpg', 0, ''),
(20, 'Ale estuvo aquÃ­ xd', '1665103687_Foto insta.png', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrenadores`
--

CREATE TABLE `Entrenadores` (
  `idEntrenador` int(2) NOT NULL,
  `nombreEntrenados` varchar(20) DEFAULT NULL,
  `apellidoEntrenador` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Login`
--

CREATE TABLE `Login` (
  `idLogin` int(2) NOT NULL,
  `idCliente` int(2) DEFAULT NULL,
  `idEntrenador` int(2) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedidos`
--

CREATE TABLE `Pedidos` (
  `id` int(2) NOT NULL,
  `idEntrenador` int(2) DEFAULT NULL,
  `idRutina` int(2) DEFAULT NULL,
  `idCliente` int(2) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rutinas`
--

CREATE TABLE `Rutinas` (
  `idRutina` int(2) NOT NULL,
  `idCategoria` int(2) DEFAULT NULL,
  `nombreRutina` varchar(30) DEFAULT NULL,
  `ejercicio` varchar(250) DEFAULT NULL,
  `duracion` int(3) DEFAULT NULL,
  `fechainicio` date DEFAULT NULL,
  `videoEjercicio` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Entrenadores`
--
ALTER TABLE `Entrenadores`
  ADD PRIMARY KEY (`idEntrenador`);

--
-- Indices de la tabla `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Rutinas`
--
ALTER TABLE `Rutinas`
  ADD PRIMARY KEY (`idRutina`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `idCategoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `idCliente` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `design`
--
ALTER TABLE `design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `Rutinas`
--
ALTER TABLE `Rutinas`
  MODIFY `idRutina` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
