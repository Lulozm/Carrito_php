-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2017 a las 19:11:28
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `souvenirs`
--

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
  `picture_p` varchar(45) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`product_id`, `name_p`, `desc_p`, `price_p`, `stock_p`, `picture_p`, `created`, `tipo`) VALUES
(1, 'Discografía', 'Doop Hoop Hooligans & Unorthodox Jukebox', 1000, 10, 'public_html/img/uno.jpg', '2014-10-02', 1),
(2, 'Necklace Bootle', 'Shaped  ring necklace', 300, 30, 'public_html/img/dos.jpg', '2014-10-03', 1),
(5, 'Guitar Picks', '2 Guitar Picks With Hooligan text', 200, 200, 'public_html/img/tres.jpg', '2014-10-17', 1),
(6, 'T-Shirt  Lazy Song', 'Black T-shirt about lazy song', 250, 100, 'public_html/img/cuatro.jpg', '2014-10-17', 1),
(7, 'Gorra XXIV', 'Gorra Color negro ', 450, 100, 'views/img/xxiv.jpg', '2017-10-23', 1),
(8, 'Gorra XXIV', 'Gorra Color negro ', 450, 100, 'views/img/xxiv.jpg', '2017-10-23', 1),
(9, 'Necklace Plumilla', 'Chapa de Oro 24k', 400, 3, 'views/img/cinco.jpg', '2017-10-23', 1),
(10, 'Playera Fan', 'Amarilla todas las tallas', 600, 20, 'views/img/seis.jpg', '2017-10-23', 1);

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
-- AUTO_INCREMENT de la tabla `type_product`
--
ALTER TABLE `type_product`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
