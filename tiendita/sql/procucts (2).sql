-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 00:38:13
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
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procucts`
--

CREATE TABLE `procucts` (
  `ID_P` int(11) NOT NULL,
  `Nombre_P` varchar(100) NOT NULL,
  `Descripcion_P` varchar(100) NOT NULL,
  `Precio_P` decimal(10,2) NOT NULL,
  `Descuento_P` int(10) NOT NULL,
  `Disponibilidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procucts`
--

INSERT INTO `procucts` (`ID_P`, `Nombre_P`, `Descripcion_P`, `Precio_P`, `Descuento_P`, `Disponibilidad`) VALUES
(1, 'Hamburguesa', 'Hamburguesa de carne de caballo en descomposición', 1000.99, 10, 1),
(2, 'Perro caliente', 'Perro caliente con salchicha de perro atropellado', 2000.00, 20, 1),
(3, 'Venezuela Food', 'No existe pero bueno', 1050.00, 10, 1),
(4, 'mojarra', 'mojarra de charco', 3000.00, 12, 1),
(5, 'Bandeja Rola', '100% Real Rola', 20000.00, 20, 1),
(6, 'POLLAS', 'si no sabe no opine', 2000.00, 12, 1),
(7, 'Waffles', 'Wafless con nutela casera', 100000.00, 50, 1),
(8, 'Creepes', 'Salsa blanca casera en ricos creepes', 30000.00, 70, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `procucts`
--
ALTER TABLE `procucts`
  ADD PRIMARY KEY (`ID_P`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `procucts`
--
ALTER TABLE `procucts`
  MODIFY `ID_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
