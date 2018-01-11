-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2017 a las 05:12:53
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `estado`, `idpersona`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `factura` varchar(45) NOT NULL,
  `facultad` varchar(200) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `talla` varchar(4) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `idcliente` int(11) NOT NULL,
  `idtipoprod` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `factura`, `facultad`, `cantidad`, `talla`, `descripcion`, `fecha_ingreso`, `idcliente`, `idtipoprod`, `estado`) VALUES
(1, '2727', 'CREACIONES GORETTI', 1, 'S', 'PANTALON DERECHO DE CESMAG					\r\n', '2017-09-03', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `nombres` varchar(140) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `cedula`, `nombres`, `telefono`) VALUES
(1, 1085298221, 'JAVIER ALEXANDER LOPEZ', '3128196355'),
(2, 12345, 'ADELE GOMEZ', '3128196355');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `idprecio` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `subvalor` int(11) DEFAULT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`idprecio`, `estado`, `fecha`, `valor`, `subvalor`, `id_prod`) VALUES
(0, '', '0000-00-00', 0, 0, 0),
(1, '1', '0000-00-00', 1000, 1000, 1),
(2, '1', '0000-00-00', 2000, 2000, 2),
(3, '1', '0000-00-00', 4500, 4500, 3),
(4, '1', '0000-00-00', 4000, 4000, 4),
(5, '1', '0000-00-00', 7000, 7000, 5),
(6, '1', '0000-00-00', 7000, 7000, 6),
(7, '1', '0000-00-00', 6000, 6000, 7),
(8, '1', '0000-00-00', 4500, 4500, 8),
(9, '1', '0000-00-00', 4000, 4000, 9),
(10, '1', '0000-00-00', 7000, 7000, 10),
(11, '1', '0000-00-00', 6000, 6000, 11),
(12, '1', '0000-00-00', 3500, 3500, 12),
(13, '1', '0000-00-00', 7500, 7500, 13),
(14, '1', '0000-00-00', 2800, 2800, 14),
(15, '1', '0000-00-00', 2200, 2200, 15),
(16, '1', '0000-00-00', 9000, 9000, 16),
(17, '1', '0000-00-00', 7500, 7500, 17),
(18, '1', '0000-00-00', 7500, 7500, 18),
(19, '1', '0000-00-00', 10000, 10000, 19),
(20, '1', '0000-00-00', 6000, 6000, 20),
(21, '1', '0000-00-00', 5500, 5500, 21),
(22, '1', '0000-00-00', 15000, 15000, 22),
(23, '1', '0000-00-00', 6800, 6800, 23),
(24, '1', '0000-00-00', 5500, 5500, 24),
(25, '1', '0000-00-00', 8500, 8500, 25),
(26, '1', '0000-00-00', 10000, 10000, 26),
(27, '1', '0000-00-00', 7500, 7500, 27),
(28, '1', '0000-00-00', 6500, 6500, 28),
(29, '1', '0000-00-00', 6000, 6000, 29),
(30, '1', '0000-00-00', 2000, 2000, 30),
(31, '1', '0000-00-00', 1500, 1500, 31),
(32, '1', '0000-00-00', 6500, 6500, 32),
(33, '1', '0000-00-00', 8500, 8500, 33),
(34, '1', '0000-00-00', 15000, 15000, 34),
(35, '1', '0000-00-00', 7500, 7500, 35),
(36, '1', '0000-00-00', 10000, 10000, 36),
(37, '1', '0000-00-00', 4200, 4200, 37),
(38, '1', '0000-00-00', 3800, 3800, 38),
(39, '1', '0000-00-00', 8500, 8500, 39),
(40, '1', '0000-00-00', 8500, 8500, 40),
(41, '1', '0000-00-00', 12000, 12000, 41),
(42, '1', '0000-00-00', 3800, 3800, 42),
(43, '1', '0000-00-00', 3300, 3300, 43),
(44, '1', '0000-00-00', 3500, 3500, 44),
(45, '1', '0000-00-00', 2500, 2500, 45),
(46, '1', '0000-00-00', 1800, 1800, 46),
(47, '1', '0000-00-00', 500, 500, 47),
(48, '1', '0000-00-00', 300, 300, 48),
(49, '1', '0000-00-00', 4300, 4300, 49),
(50, '1', '0000-00-00', 4000, 4000, 50),
(51, '1', '0000-00-00', 3500, 3500, 51),
(52, '1', '0000-00-00', 3000, 3000, 52),
(53, '1', '0000-00-00', 2500, 2500, 53),
(54, '1', '0000-00-00', 1500, 1500, 54),
(55, '1', '0000-00-00', 600, 600, 55),
(56, '1', '0000-00-00', 700, 700, 56),
(57, '1', '0000-00-00', 2000, 2000, 57),
(58, '1', '0000-00-00', 8000, 8000, 58);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `idproceso` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_prod` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idtrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `nomprod` varchar(200) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `idtipoprod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nomprod`, `estado`, `idtipoprod`) VALUES
(1, 'ARREGLOS DE 1000', 1, 0),
(2, 'ARREGLOS DE 2000', 1, 0),
(3, 'BATA CORTES', 1, 10),
(4, 'BATA LISA', 1, 10),
(5, 'BATA QUIRÚRGICA ', 1, 10),
(6, 'BLUSA CORTES', 1, 9),
(7, 'BLUSA LISA', 1, 9),
(8, 'BUSO CORTES', 1, 4),
(9, 'BUSO LISO', 1, 4),
(10, 'CAMISA FORMAL CORTES', 1, 8),
(11, 'CAMISA  FORMAL LISA', 1, 8),
(12, 'CAMISETA DEPORTIVA CORTES', 1, 2),
(13, 'CHALECO MONTAGAS FORRADO', 1, 3),
(14, 'CAMISETA  CORTES ', 1, 2),
(15, 'CAMISETA  LISA', 1, 2),
(16, 'CHALECO  PERIODISTA CON FORRO ', 1, 3),
(17, 'CHALECO  PERIODISTA SIN FORRO ', 1, 3),
(18, 'CHALECO ACOLCHADO LISO', 1, 3),
(19, 'CHALECO PERIODISTA ACOLCHADO ', 1, 3),
(20, 'CHALECO SENCILLO  CON FORRO ', 1, 3),
(21, 'CHALECO SENCILLO SIN FORRO ', 1, 3),
(22, 'CHAQUETA  DOBLE FAST  INGENIERÍA CESMAG ', 1, 11),
(23, 'CHAQUETA  LISA', 1, 11),
(24, 'CHAQUETA  LISA SIN FORRO', 1, 11),
(25, 'CHAQUETA ACOLCHADA DE UNA CARA', 1, 11),
(26, 'CHAQUETA ACOLCHADA DOBLE FAST', 1, 11),
(27, 'CHAQUETA CORTES', 1, 11),
(28, 'CHAQUETA CORTES SIN FORRO', 1, 11),
(29, 'FALDA COLEGIAL ', 1, 12),
(30, 'GORRO QUIRÚRGICO CON TIRAS ', 1, 13),
(31, 'GORRO QUIRÚRGICO SALIDA DE BAÑO ', 1, 13),
(32, 'JARDINERA ', 1, 14),
(33, 'OVEROL 6 BOLSILLOS CON CORTES ', 1, 15),
(34, 'OVEROL CRUZ ROJA ', 1, 15),
(35, 'OVEROL SENCILLO 6 BOLSILLOS ABERTURAS ', 1, 15),
(36, 'OVEROL TIPO PILOTO ', 1, 15),
(37, 'PANTALÓN CORTES', 1, 1),
(38, 'PANTALÓN CORTES SIN FORRRO', 1, 1),
(39, 'PANTALÓN DRIL BOLSILLOS CAMUFLADOS ', 1, 1),
(40, 'PANTALÓN DRIL CORTES', 1, 1),
(41, 'PANTALÓN FORMAL DAMA Y/U HOMBRE ', 1, 1),
(42, 'PANTALÓN LISO', 1, 1),
(43, 'PANTALÓN LISO SIN FORRO', 1, 1),
(44, 'PANTALONETA CORTES', 1, 5),
(45, 'PANTALONETA CORTES SIN FORRO', 1, 5),
(46, 'PANTALONETA LISA', 1, 5),
(47, 'PEGAR BOLSILLO', 1, 0),
(48, 'PEGAR ESCUDO ', 1, 0),
(49, 'PIJAMERA CORTES', 1, 16),
(50, 'PIJAMERA LISA', 1, 16),
(51, 'POLAINAS PAR', 1, 0),
(52, 'POLO  CORTES ', 1, 0),
(53, 'POLO LISA', 1, 0),
(54, 'TAPABOCAS ', 1, 6),
(55, 'OJALES Y BOTONES POLO', 1, 0),
(56, 'OJALES Y BOTONES DELANTAL', 1, 0),
(57, 'PETOS ', 1, 7),
(58, 'CHAQUETAS MONTAGAS ROJA NEGRO', 1, 11),
(59, '', 0, 0),
(60, '', 0, 0),
(61, '', 0, 0),
(62, '', 0, 0),
(63, '', 0, 0),
(64, '', 0, 0),
(66, 'pantalon de prueba', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `idtipoprod` int(11) NOT NULL,
  `nomtipoprod` varchar(200) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`idtipoprod`, `nomtipoprod`, `estado`) VALUES
(1, 'PANTALONES', 1),
(2, 'CAMISETAS', 1),
(3, 'CHALECOS', 1),
(4, 'BUSOS', 1),
(5, 'PANTALONETAS', 1),
(6, 'TAPABOCAS', 1),
(7, 'PETOS', 1),
(8, 'CAMISAS', 1),
(9, 'BLUSAS', 1),
(10, 'BATAS', 1),
(11, 'CHAQUETAS', 1),
(12, 'FALDAS', 1),
(13, 'GORRO', 1),
(14, 'JARDINERA', NULL),
(15, 'GORRO', 1),
(16, 'PIJAMERA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idtrabajador` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idtrabajador`, `idpersona`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `name`, `password`, `tipo`, `estado`, `idpersona`) VALUES
(1, 'admin', '1234', 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`idprecio`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`idproceso`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`idtipoprod`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`idtrabajador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `idproceso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `idtipoprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `idtrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
