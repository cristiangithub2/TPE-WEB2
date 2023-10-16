-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 23:51:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recetario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria`, `descripcion`) VALUES
(1, 'salado', NULL),
(2, 'dulce', NULL),
(3, 'agridulce', NULL),
(4, 'picante', NULL),
(5, 'amargo', NULL),
(6, 'sin tac', 'no contiene gluten ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `plato_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre_plato` varchar(50) NOT NULL,
  `ingredientes` varchar(50) NOT NULL,
  `tiempo_coccion` varchar(50) DEFAULT NULL,
  `origen` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`plato_id`, `categoria_id`, `nombre_plato`, `ingredientes`, `tiempo_coccion`, `origen`, `precio`, `foto`) VALUES
(12, 4, 'Salsa de chile habanero', '3 chiles habaneros. 2 jitomates. 1 pizca de sal. 1', '5 minutos', 'mexicano', 800, NULL),
(13, 4, 'Salsa macha', '30 gr de chile de árbol seco. 3 dientes de ajo. 1 ', '5 minutos', 'mexicano', 700, NULL),
(14, 4, 'Salsa cacahuete picante', '100 gr de cacahuetes pelados sin sal. 5 piezas de ', '5 minutos', 'mexicano', 800, NULL),
(16, 5, 'BIZCOCHO NARANJA AMARGA', '300 gr. mermelada naranja amarga -- 6 huevos -- 30', '35 minutos', 'español', 1500, NULL),
(17, 5, 'Mermelada de naranjas amargas sevillanas', 'Naranjas amargas sevillanas Azúcar, 1 kilo por cad', '2 dias', 'español', 700, NULL),
(18, 3, 'Salsa Gastrique', 'El zest de una naranja y unas supremas (gajos de n', '7 minutos', 'frances', 1100, NULL),
(20, 3, ' Copa de frutas con nata a la francesa', '250 gr de fresas (preferiblemente ser sous-vide) 2', '5 minutos', 'frances', 1300, NULL),
(21, 2, 'Desayuno con brioche y fresas compotadas en cocott', '2 rebanas de brioche 100 gr de fresas (frescas o s', '10 minutos', 'frances', 2000, NULL),
(22, 2, 'Crema de almendras ', '200 gr de azúcar 200 gr de almendras en polvo 200 ', '5 minutos', 'frances', 900, NULL),
(23, 1, 'Crema dubarry', 'Coliflor 1 Cebolla 0.5 Puerro 1 Patata mediana 1 M', '50 minutos', 'frances', 1700, NULL),
(25, 1, 'Suflé o souffle de queso y pimiento', 'Pimiento rojo asado 60 g Queso cheddar 100 g Mante', '50 minutos', 'frances', 800, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `nombre`, `password`) VALUES
(2, 'webAdmin@gmail.com', 'webAdmin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`plato_id`),
  ADD KEY `platos_ibfk_1` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `plato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `platos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
