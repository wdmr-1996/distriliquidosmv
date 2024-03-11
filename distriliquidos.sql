-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 15:11:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distriliquidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdminstrador` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `numDocumento` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipoDocumento` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdminstrador`, `nombres`, `apellidos`, `numDocumento`, `correo`, `tipoDocumento`, `contrasena`) VALUES
(1, 'William David', 'Montenegro Realpe', '1143399418', 'dmontenegrorealpe@gmail.com', 'cedula', 'ArcangelMiguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteempresa`
--

CREATE TABLE `clienteempresa` (
  `idClienteEmpresa` int(11) NOT NULL,
  `NIT` varchar(9) NOT NULL,
  `RUT` varchar(9) NOT NULL,
  `nombreEmpresa` varchar(40) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `celularAlternativo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientepersona`
--

CREATE TABLE `clientepersona` (
  `idClientePersona` int(11) NOT NULL,
  `tipoDocumento` varchar(55) NOT NULL,
  `numDocumento` varchar(12) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientepersona`
--

INSERT INTO `clientepersona` (`idClientePersona`, `tipoDocumento`, `numDocumento`, `nombres`, `apellidos`, `celular`, `correo`, `contrasena`, `rol`) VALUES
(1, 'cédula', '1143399418', 'William', 'Montenegro Realpe', '3053274457', 'dmontenegro@gmail.com', '1143399418', 'administrador'),
(2, 'cedula', '123', 'jesus', 'vergara', '3014538208', 'jesus@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `precio` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre` varchar(255) NOT NULL,
  `sabor` varchar(30) NOT NULL,
  `descripAdicional` varchar(30) NOT NULL,
  `material` varchar(20) NOT NULL,
  `capacidad` double(4,3) NOT NULL,
  `unidades` int(2) NOT NULL,
  `tipoBebida` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `existencias` int(10) NOT NULL,
  `precioCompra` decimal(10,2) NOT NULL,
  `precioVenta` decimal(10,2) NOT NULL,
  `imagen` longblob NOT NULL,
  `idProducto` int(11) NOT NULL,
  `rutaImagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre`, `sabor`, `descripAdicional`, `material`, `capacidad`, `unidades`, `tipoBebida`, `marca`, `existencias`, `precioCompra`, `precioVenta`, `imagen`, `idProducto`, `rutaImagen`) VALUES
('agua HATSU pet 600ml 6 unidades', 'ninguno', 'ninguna', 'vidrio', 9.999, 6, 'agua', 'HATSU', 100, 800.00, 2000.00, 0x6167612068617473752d7065742d363030206d6c2d3620756e6964616465732e706e67, 29, 'uploads/aga hatsu-pet-600 ml-6 unidades.png'),
('gaseosa Canada dry PET 1.5 ml 1 unidad(es) ', 'ninguno', 'ninguno', 'PET', 1.500, 1, 'gaseosa', 'Canada dry', 100, 1200.00, 3000.00, 0x63616e616461206472792067696e67657220616c652070657420312e356c7831756e642e706e67, 33, 'uploads/canada dry ginger ale pet 1.5lx1und.png'),
('gaseosa Pepsi  original cero calorías PET 400 ml 4 unidad(es) ', 'original', 'cero calorías', 'PET', 9.999, 4, 'gaseosa', 'Pepsi', 100, 5000.00, 8000.00, 0x476173656f7361205065707369204365726f20417ac3ba63617220506574203430306d6c207834756e642e706e67, 34, 'uploads/Gaseosa Pepsi Cero Azúcar Pet 400ml x4und.png'),
('gaseosa postobon  tamarindo PET 250 ml 6 unidad(es) ', 'tamarindo', 'ninguna', 'PET', 9.999, 6, 'gaseosa', 'postobon', 100, 7000.00, 10000.00, 0x476173656f73612054616d6172696e646f20506f73746f62c3b36e20506574203235306d6c207836756e642e706e67, 36, 'uploads/Gaseosa Tamarindo Postobón Pet 250ml x6und.png'),
('gaseosa postobon  naranja ninguna PET 250 ml 6 unidad(es) ', 'naranja', 'ninguna', 'PET', 9.999, 6, 'gaseosa', 'postobon', 200, 8000.00, 12000.00, 0x476173656f7361204e6172616e6a6120506f73746f62c3b36e20506574203235306d6c207836756e642e706e67, 37, 'uploads/Gaseosa Naranja Postobón Pet 250ml x6und.png'),
('gaseosa postobon  frutos rojos ninguna PET 400 ml 4 unidad(es) ', 'frutos rojos', 'ninguna', 'PET', 9.999, 4, 'gaseosa', 'postobon', 150, 7000.00, 10000.00, 0x506f73746f62c3b36e20416371756120467275746f7320526f6a6f7320506574203430306d6c20782034756e642e706e67, 39, 'uploads/Postobón Acqua Frutos Rojos Pet 400ml x 4und.png'),
('energizante Pool  tropical pet 350 ml 6 unidad(es) ', 'tropical', 'ninguna', 'pet', 9.999, 6, 'energizante', 'Pool', 300, 500.00, 2000.00, 0x54726f706963616c2e706e67, 40, 'uploads/Tropical.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdminstrador`);

--
-- Indices de la tabla `clienteempresa`
--
ALTER TABLE `clienteempresa`
  ADD PRIMARY KEY (`idClienteEmpresa`);

--
-- Indices de la tabla `clientepersona`
--
ALTER TABLE `clientepersona`
  ADD PRIMARY KEY (`idClientePersona`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdminstrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clienteempresa`
--
ALTER TABLE `clienteempresa`
  MODIFY `idClienteEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientepersona`
--
ALTER TABLE `clientepersona`
  MODIFY `idClientePersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
