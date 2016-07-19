-- phpMyAdmin SQL Dump
-- version 4.4.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-07-2016 a las 09:00:58
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `tlp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atiende`
--

CREATE TABLE `atiende` (
  `idatiende` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `codempleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(123, 'sda', 'wsda', 'asda', 'asdas'),
(124, 'Favio', 'Chavez', 'La Esperanza', '12312312'),
(125, 'Juan', 'Perez', 'El Porvenir', '23423');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `idcontiene` int(11) NOT NULL,
  `irordenpago` int(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `codempleado` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `fechaingreso` date DEFAULT NULL,
  `fechasalida` date DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`codempleado`, `nombre`, `apellido`, `fechaingreso`, `fechasalida`, `clave`) VALUES
(324, 'sdfs', 'dfs', '2016-01-01', NULL, NULL),
(325, 'Favio', 'Chavez', NULL, NULL, NULL),
(326, 'Jorge', 'Lopez', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `idimagen` int(11) NOT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `codproducto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1247 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`idimagen`, `ruta`, `codproducto`) VALUES
(1238, '1.jpg', 132),
(1239, 'Captura de pantalla 2016-07-19 a las 5.28.10.png', 132),
(1240, 'Captura de pantalla 2016-07-19 a las 6.43.26.png', 132),
(1241, 'meme-simple-el-conocimiento-es-poder.jpg', 133),
(1242, 'ratas.jpg', 133),
(1243, '11141257_10204794230671240_461809606836301688_n.jpg', 134),
(1244, '11750613_856227971122105_3426268742415048555_n.jpg', 134),
(1245, '024.png', 135),
(1246, '12072646_784177891692580_4496426505409819024_n.jpg', 135);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendepago`
--

CREATE TABLE `ordendepago` (
  `codordendepago` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idatiende` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codproducto` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `detalles` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codproducto`, `nombre`, `stock`, `detalles`, `precio`) VALUES
(132, 'Muebeleeee', 45, 'Muble nuevecito', 100),
(133, 'Producto C', 45, 'Detalle familiar', 200),
(134, 'Producto X', 45, 'Detalle del prod', 350),
(135, 'Producto Final', 100, 'Detalle de proddd', 595);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD PRIMARY KEY (`idatiende`,`idcliente`,`codempleado`),
  ADD KEY `fk_CLIENTE_has_EMPLEADO_EMPLEADO1_idx` (`codempleado`),
  ADD KEY `fk_CLIENTE_has_EMPLEADO_CLIENTE1_idx` (`idcliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`idcontiene`,`irordenpago`,`codproducto`),
  ADD KEY `fk_ORDENDEPAGO_has_PRODUCTO_PRODUCTO1_idx` (`codproducto`),
  ADD KEY `fk_ORDENDEPAGO_has_PRODUCTO_ORDENDEPAGO1_idx` (`irordenpago`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codempleado`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`idimagen`,`codproducto`),
  ADD KEY `fk_IMAGEN_PRODUCTO1_idx` (`codproducto`);

--
-- Indices de la tabla `ordendepago`
--
ALTER TABLE `ordendepago`
  ADD PRIMARY KEY (`codordendepago`,`idatiende`),
  ADD KEY `fk_ORDENDEPAGO_ATIENDE1_idx` (`idatiende`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atiende`
--
ALTER TABLE `atiende`
  MODIFY `idatiende` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `contiene`
--
ALTER TABLE `contiene`
  MODIFY `idcontiene` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `codempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=327;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1247;
--
-- AUTO_INCREMENT de la tabla `ordendepago`
--
ALTER TABLE `ordendepago`
  MODIFY `codordendepago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD CONSTRAINT `fk_CLIENTE_has_EMPLEADO_CLIENTE1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CLIENTE_has_EMPLEADO_EMPLEADO1` FOREIGN KEY (`codempleado`) REFERENCES `empleado` (`codempleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `fk_ORDENDEPAGO_has_PRODUCTO_ORDENDEPAGO1` FOREIGN KEY (`irordenpago`) REFERENCES `ordendepago` (`codordendepago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ORDENDEPAGO_has_PRODUCTO_PRODUCTO1` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_IMAGEN_PRODUCTO1` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordendepago`
--
ALTER TABLE `ordendepago`
  ADD CONSTRAINT `fk_ORDENDEPAGO_ATIENDE1` FOREIGN KEY (`idatiende`) REFERENCES `atiende` (`idatiende`) ON DELETE NO ACTION ON UPDATE NO ACTION;
