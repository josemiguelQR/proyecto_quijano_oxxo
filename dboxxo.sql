-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 01:41:16
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dboxxo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Cantidad` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `Marca` varchar(150) NOT NULL,
  `Tipo de Producto` varchar(150) NOT NULL,
  `Distribuidor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `Nombre`, `Cantidad`, `Precio`, `Marca`, `Tipo de Producto`, `Distribuidor`) VALUES
(1, 'Delicias', '5000', '$10', 'Lala', 'Yoghurt', 'Pepito '),
(2, 'Doritos nacho', '5000', '$15', 'Doritos', 'Papas fritas', 'Anuel'),
(3, 'Dr Pepper zero', '10000', '$17', 'Dr Pepper', 'Gaseosa', 'J&L'),
(4, 'Marias', '60000', '$10', 'Marias Gamesa', 'Galletas', 'Frontera'),
(5, 'Cheetos torciditos', '15000', '$19', 'Cheetos', 'Papas fritas', 'Malala'),
(6, 'Cheetos Flaming Hot', '10000', '$17', 'Cheetos', 'Papas fritas', 'Malala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Apellidos` varchar(150) NOT NULL,
  `Correo electronico` varchar(250) NOT NULL,
  `Numero de telefono` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Codigo postal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `Nombre`, `Apellidos`, `Correo electronico`, `Numero de telefono`, `Direccion`, `Codigo postal`) VALUES
(1, 'Manolito', 'Martinez', 'manolo@gmail.com', '6568549742', 'Colonia Reforma', '32864'),
(2, 'Edgar ', 'Lopez', 'LopezE@gmail.com', '6568940539', 'Calle Neptuno', '32843'),
(3, 'Julian', 'Alvarez', 'JuliAlva3@gmail.com', '6567397649', 'Calle Aleman', '32963'),
(4, 'Bruno', 'Dominguez', 'Calle Rio Nilo', '6568495632', 'Calle Rio Nilo', '32856'),
(5, 'Jose', 'Aleman', 'JoseAle@hotmail.com', '6568533529', 'Calle Amazonas', '32757'),
(6, 'Alejandro', 'Obrador', 'Obrador002@hotmail.com', '6565347542', 'Calle Martini', '32658');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha de nacimiento` varchar(50) NOT NULL,
  `Numero de telefono` varchar(50) NOT NULL,
  `Correo electronico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombre`, `Apellidos`, `Direccion`, `Fecha de nacimiento`, `Numero de telefono`, `Correo electronico`) VALUES
(1, 'Jose Miguel', 'Quijano Rincon', 'Colonia Marte', '06/16/2004', '6564578945', 'jquijano3842@gmail.com'),
(2, 'Abraham', 'Gonzalez Lopez', 'Calle Sandia', '03/25/2004', '6568956738', 'lopez@hotmail.com'),
(3, 'David', 'Carrera Torres', 'Calle Manuel', '11/11/2004', '6568629654', 'dct45_@hotmail.com'),
(4, 'Ivan', 'Rodriguez Quiñones', 'Colonia Reforma', '09/3/2004', '6563348643', 'ivan04@gmail.com'),
(5, 'Osvaldo', 'Ortiz Alvarez', 'Calle Suecia', '12/24/2004', '6567489357', 'osvaldo123@gmail.com'),
(24, 'Joaquin', 'Rodriguez Lujano', 'Calle Rio Nilo', '09/10/2004', '6568746785', 'joaquin@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(11) NOT NULL,
  `Fecha de venta` varchar(100) NOT NULL,
  `Vendedor` varchar(150) NOT NULL,
  `Direccion de la tienda` varchar(150) NOT NULL,
  `Articulos vendidos` varchar(150) NOT NULL,
  `Precio pagado` varchar(150) NOT NULL,
  `Metodo de pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventa`, `Fecha de venta`, `Vendedor`, `Direccion de la tienda`, `Articulos vendidos`, `Precio pagado`, `Metodo de pago`) VALUES
(1, '22/09/21', 'AR', 'Calle Sandia', 'Cheetos Flaming Hot', '$17', 'Efectivo'),
(2, '21/02/21', 'Antowan Rodriguez', 'Colonia Marte', 'Cheetos Flaming Hot', '$17', 'Efectivo'),
(3, '15/04/21', 'Jose Miguel Quijano', 'Colonia Reforma', 'Marias', '$10', 'Efectivo'),
(4, '09/09/21', 'David Esquina', 'Calle Manuel', 'Cheetos torciditos', '$19', 'Efectivo'),
(5, '16/08/21', 'Ivan Martinez', 'Colonia Marte', 'Marias', '$10', 'Efectivo'),
(6, '01/01/21', 'David Esquina', 'Calle Manuel', 'Dr Pepper Zero', '$17', 'Efectivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
