-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2020 a las 19:38:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciberfood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Clientes_Id` int(11) NOT NULL,
  `Clientes_Nombre` varchar(50) NOT NULL,
  `Clientes_Email` varchar(50) NOT NULL,
  `Clientes_Telefono` varchar(50) NOT NULL,
  `Clientes_CodigoPostal` varchar(50) NOT NULL,
  `Clientes_Estado` varchar(50) NOT NULL,
  `Clientes_Alcaldia` varchar(50) NOT NULL,
  `Clientes_Colonia` varchar(50) NOT NULL,
  `Clientes_NumInterior` varchar(50) NOT NULL,
  `Clientes_NumExterior` varchar(50) NOT NULL,
  `Clientes_TipoCliente` varchar(50) NOT NULL,
  `Clientes_Saldo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Clientes_Id`, `Clientes_Nombre`, `Clientes_Email`, `Clientes_Telefono`, `Clientes_CodigoPostal`, `Clientes_Estado`, `Clientes_Alcaldia`, `Clientes_Colonia`, `Clientes_NumInterior`, `Clientes_NumExterior`, `Clientes_TipoCliente`, `Clientes_Saldo`) VALUES
(3, 'don antonio', 'antonio@antonio.antonio', '5566778877', '07900', 'cdmx', 'gam', 'ctm', '01', '90', 'regular', '0'),
(4, 'don francisco', 'francisco@francisco.francisco', '5566778877', '07900', 'cdmx', 'gam', 'ctm', '01', '90', 'regular', '0'),
(5, 'don jose', 'jose@jose.jose', '5566778877', '07900', 'cdmx', 'gam', 'ctm', '01', '90', 'regular', '0'),
(6, 'don pancho', 'pancho@pancho.pancho', '5566778877', '07900', 'cdmx', 'gam', 'ctm', '01', '90', 'regular', '0'),
(7, 'don francisco', 'francisco@francisco.francisco', '5566778877', '07900', 'cdmx', 'gam', 'ctm', '01', '90', 'regular', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `Orden_Folio` int(11) NOT NULL,
  `Orden_IDMesero` int(11) NOT NULL,
  `Orden_IDCliente` int(11) NOT NULL,
  `Orden_Fecha` int(11) NOT NULL,
  `Orden_Hora` int(11) NOT NULL,
  `Orden_Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `Platillos_Id` int(11) NOT NULL,
  `Platillos_Nombre` varchar(30) NOT NULL,
  `Platillos_Descripcion` text NOT NULL,
  `Platillos_Categoria` varchar(30) NOT NULL,
  `Platillo_Costo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`Platillos_Id`, `Platillos_Nombre`, `Platillos_Descripcion`, `Platillos_Categoria`, `Platillo_Costo`) VALUES
(1, 'sopa de chatos con mugre', 'esta es una invención imaginaria de una mente que solo quiere llenar registros para hacer prueba y error', 'sopas', '20'),
(2, 'tacos de fideo', 'esta es una invención imaginaria de una mente que solo quiere llenar registros para hacer prueba y error', 'tacos', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `Id` int(11) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `responsabilidades` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`Id`, `puesto`, `responsabilidades`) VALUES
(1, 'administrador', 'tiene acceso a todos los módulos existentes en el sistema.'),
(2, 'caja', 'encargado de gestionar el flujo de clientes, mesas , y cobro de servicios.'),
(3, 'mesero', 'solo puede generar comandas y cancelarlas de ser el caso , también puede indicarle a los clientes el costo final de su pedido'),
(4, 'cocina', 'puede ver el flujo de los pedidos entrantes para producir platillos y validarlos y llevarlos al cliente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario_Id` int(11) NOT NULL,
  `Usuario_Nombre` varchar(50) NOT NULL,  
  `Usuario_Passport` varchar(50) NOT NULL,
  `Usuario_Perfil` varchar(50) NOT NULL,
  `Usuario_Permisos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario_Id`, `Usuario_Nombre`, `Usuario_Email`, `Usuario_Telefono`, `Usuario_CodigoPostal`, `Usuario_Estado`, `Usuario_Alcaldia`, `Usuario_Colonia`, `Usuario_NumInterior`, `Usuario_NumExterior`, `Usuario_Pass`, `Usuario_Puesto`) VALUES
(1, 'admin', 'mtjamx95@gmail.com', '57967868', '57967868', 'cdmx', 'gam', 'cuchilla del tesoro', '59', '27', 'admin', 'administrador'),
(4, 'mesero', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'mesero', 'mesero'),
(8, 'caja', '123', 'jaaj', 'jaaj', 'jajaja', 'ajjaja', '1', 'ajaja', 'jaaja', 'caja', 'caja'),
(23, 'cocina', 'gv', 'tfc', 'tfc', 'tyf', 'tyfv', 'fv', 'tf', 'tfc', 'cocina', 'cocina'),
(35, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Clientes_Id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`Orden_Folio`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`Platillos_Id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usuario_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Clientes_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `Orden_Folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `Platillos_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Usuario_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
