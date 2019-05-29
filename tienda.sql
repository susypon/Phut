-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 00:28:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--
CREATE DATABASE IF NOT EXISTS `tienda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tienda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `img`) VALUES
(1, 'carnes', 'assets/img/categoria_carne.jpg'),
(2, 'cereales', 'assets/img/categoria_cereales.jpg'),
(3, 'Limpieza', 'assets/img/Limpieza.jpeg'),
(4, 'Frutas y Verdura', 'assets/img/Frutas_y_Verdura.jpeg'),
(5, 'Accesorios para el Hogar', 'assets/img/hogar.jpeg'),
(6, 'Bebidas y Licores', 'assets/img/bebidas.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_categoria`
--

CREATE TABLE `detalle_categoria` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_productos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_categoria`
--

INSERT INTO `detalle_categoria` (`id`, `id_categoria`, `id_productos`) VALUES
(1, 6, 17),
(2, 6, 8),
(3, 6, 6),
(4, 6, 7),
(5, 6, 23),
(6, 6, 21),
(7, 1, 13),
(8, 1, 5),
(9, 1, 2),
(10, 2, 23),
(11, 4, 12),
(12, 4, 16),
(13, 4, 14),
(14, 4, 19),
(15, 5, 20),
(16, 3, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `f_creacion` date DEFAULT NULL,
  `total` decimal(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `f_llegada` date DEFAULT NULL,
  `f_expiracion` date DEFAULT NULL,
  `precio` decimal(16,2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `cantidad`, `f_llegada`, `f_expiracion`, `precio`, `img`) VALUES
(2, 'Pollo', '', 510, '2019-05-23', '2019-07-23', '1.13', 'assets/img/Pollo.png'),
(5, 'Salchicha con queso', '', 56, '2019-05-23', '2019-07-23', '2.30', 'assets/img/Salchicha con queso.png'),
(6, 'cremasoda', '', 965, '2019-05-23', '2019-08-23', '1.85', 'assets/img/cremasoda.png'),
(7, 'gaseosa 7 up', '', 25869, '2019-05-23', '2019-08-23', '1.00', 'assets/img/gaseosa 7 up.png'),
(8, 'Coca cola', '', 965, '2019-05-23', '2019-08-23', '0.60', 'assets/img/coca cola.png'),
(9, 'Cicatricure', '', 5374, '2019-05-23', '2019-09-26', '15.33', 'assets/img/Cicatricure.png'),
(10, 'Alimento para perro', '', 4547, '2019-05-23', '2026-11-02', '13.72', 'assets/img/Alimento para perro.png'),
(11, 'Acelgas', '', 510, '2019-06-01', '0000-00-00', '5.36', 'assets/img/Acelgas.jpeg'),
(12, 'Aguacate', '', 45134, '2019-05-23', '2019-06-09', '1.15', 'assets/img/Aguacate.png'),
(13, 'alitas', '', 1574, '2019-05-23', '2019-12-23', '3.25', 'assets/img/alitas.png'),
(14, 'banano', '', 1853, '2019-05-23', '2019-05-28', '0.39', 'assets/img/banano.png'),
(15, 'Bolsas para basura', '', 124, '2019-05-23', '0000-00-00', '5.25', 'assets/img/Bolsas para basura.png'),
(16, 'Cebolla', '', 57424, '2019-06-23', '2019-09-23', '1.25', 'assets/img/Cebolla.png'),
(17, 'Chocolatina', '', 75214, '2019-05-23', '2020-12-29', '1.50', 'assets/img/Chocolatina.png'),
(18, 'Gelatina', '', 4247, '2019-08-23', '2019-09-23', '0.35', 'assets/img/Gelatina.png'),
(19, 'Guisquil', '', 596, '2019-05-23', '2019-07-23', '0.49', 'assets/img/Guisquil.png'),
(20, 'Pelota', '', 567, '2019-05-23', '0000-00-00', '35.00', 'assets/img/Pelota.png'),
(21, 'Yogurt', '', 211, '2019-05-23', '2019-09-23', '2.22', 'assets/img/Yogurt.png'),
(22, 'Arrroz', '', 510, '2019-05-23', '2023-05-23', '0.35', 'assets/img/Arrroz.png'),
(23, 'leche', '', 5, '2019-05-28', '2019-05-31', '4.50', 'assets/img/leche.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `subtotal` decimal(16,2) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `tipo` enum('Administrador','Estandar') DEFAULT 'Estandar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `pass`, `telefono`, `direccion`, `tipo`) VALUES
(2, 'Melvin ', 'melvin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7474-2514', 'Calle horizontal, pasaje arriba, casa n5', 'Estandar'),
(3, 'daniel', 'daniel@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '6589-2514', 'Calle horizontal, pasaje arriba, casa n5', 'Estandar'),
(4, 'Melvin Admin', 'admin@admin.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '45469-8523', 'calle, estandar, avemnita Arbolito, sobre la calle recta', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_categoria`
--
ALTER TABLE `detalle_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_productos` (`id_productos`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detalle_categoria`
--
ALTER TABLE `detalle_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_categoria`
--
ALTER TABLE `detalle_categoria`
  ADD CONSTRAINT `detalle_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `detalle_categoria_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
