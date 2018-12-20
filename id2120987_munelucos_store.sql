-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2018 a las 15:57:39
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id2120987_munelucos_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idc` int(8) NOT NULL,
  `nombrec` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudadc` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `callec` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `registro` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idc`, `nombrec`, `ciudadc`, `callec`, `registro`) VALUES
(8, 'Luluu', 'Yucatan', 'jijiji', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_cuenta`
--

CREATE TABLE `cliente_cuenta` (
  `id_clientecuenta` int(8) NOT NULL,
  `cliente` int(8) NOT NULL,
  `cuenta` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idcta` int(8) NOT NULL,
  `saldocta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name_c` varchar(45) DEFAULT NULL,
  `lastname_c` varchar(45) DEFAULT NULL,
  `adress_c` varchar(45) DEFAULT NULL,
  `country_c` varchar(45) DEFAULT NULL,
  `zc_c` varchar(45) DEFAULT NULL,
  `tel_c` varchar(45) DEFAULT NULL,
  `mobile_c` varchar(45) DEFAULT NULL,
  `age_c` varchar(45) DEFAULT NULL,
  `rfc_c` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detail_sale`
--

CREATE TABLE `detail_sale` (
  `detail_sale_id` int(11) NOT NULL,
  `receipt` int(11) DEFAULT NULL,
  `date_sale` date DEFAULT NULL,
  `time_sale` time DEFAULT NULL,
  `cant` int(11) DEFAULT NULL,
  `name_p` varchar(45) DEFAULT NULL,
  `price_p` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `detail_salecol` varchar(45) DEFAULT NULL,
  `type_pay` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `product_product_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name_p` varchar(45) DEFAULT NULL,
  `desc_p` varchar(45) DEFAULT NULL,
  `price_p` double DEFAULT NULL,
  `stock_p` int(11) DEFAULT NULL,
  `picture_p` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`product_id`, `name_p`, `desc_p`, `price_p`, `stock_p`, `picture_p`, `created`, `tipo`) VALUES
(1, 'Juego de baño', 'Juego de baño color verde, muñeco de nieve', 250, 5, 'views/img/juegodebano.jpeg', '2017-10-30', 1),
(2, 'Pinguino', 'Pinguino con bufanda', 125, 30, 'views/img/pinguino.jpeg', '2017-10-30', 1),
(5, 'Santa de mesa', 'Santa claus chiquito', 150, 150, 'views/img/santa.jpeg', '2014-10-17', 1),
(6, 'Ositos con escalera', 'Ositos con escalera verdesita', 180, 15, 'views/img/osoesc.jpeg', '2014-10-17', 1),
(7, 'Santa cocina', 'Santa de cocina y pizarron ', 350, 32, 'views/img/santacocina.jpeg', '2017-10-23', 1),
(8, 'Ositos cortina', 'Osito cortina ', 350, 16, 'views/img/ositocorti.jpeg', '2017-10-23', 1),
(9, 'Pinguinos azules', 'Pinguinos azules con bufanda', 150, 3, 'views/img/pinguinoazul.jpeg', '2017-10-23', 1),
(10, 'Muneco mezclilla', 'Muneco de mezclilla con bufanda verde', 134, 20, 'views/img/munecomezc.jpeg', '2017-10-23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `desc_profile` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idr` int(8) NOT NULL,
  `emailr` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idr`, `emailr`, `contrasena`) VALUES
(23, 'mama@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(24, 'queso@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(25, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(26, 'lulu@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(27, 'lulu1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(28, 'lulu123@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(29, 'lulu123@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_product`
--

CREATE TABLE `type_product` (
  `type_id` int(11) NOT NULL,
  `desc_type:product` varchar(45) DEFAULT NULL,
  `creted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `mail_u` varchar(45) DEFAULT NULL,
  `nickname_u` varchar(45) DEFAULT NULL,
  `pass_u` varchar(60) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `profile_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `registro` (`registro`);

--
-- Indices de la tabla `cliente_cuenta`
--
ALTER TABLE `cliente_cuenta`
  ADD PRIMARY KEY (`id_clientecuenta`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `cuenta` (`cuenta`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idcta`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`,`user_user_id`);

--
-- Indices de la tabla `detail_sale`
--
ALTER TABLE `detail_sale`
  ADD PRIMARY KEY (`detail_sale_id`,`product_product_id`),
  ADD KEY `fk_detail_sale_product1_idx` (`product_product_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_type_product_idx` (`tipo`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idr`);

--
-- Indices de la tabla `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`type_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`,`profile_profile_id`),
  ADD KEY `fk_user_profile1_idx` (`profile_profile_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idc` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cliente_cuenta`
--
ALTER TABLE `cliente_cuenta`
  MODIFY `id_clientecuenta` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detail_sale`
--
ALTER TABLE `detail_sale`
  MODIFY `detail_sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idr` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `type_product`
--
ALTER TABLE `type_product`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`registro`) REFERENCES `registro` (`idr`);

--
-- Filtros para la tabla `cliente_cuenta`
--
ALTER TABLE `cliente_cuenta`
  ADD CONSTRAINT `cliente_cuenta_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`idc`),
  ADD CONSTRAINT `cliente_cuenta_ibfk_2` FOREIGN KEY (`cuenta`) REFERENCES `cuenta` (`idcta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
