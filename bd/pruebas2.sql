-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2020 at 06:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `clave` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`clave`, `nombre`, `apellido_paterno`, `apellido_materno`, `domicilio`) VALUES
('daewrty345467578', 'juan', 'peres', ' ', ' ARIO'),
('qerrtwe', 'DFJS', 'sdf', ' asdf', ' fdf'),
('qwertyuii', 'dario', 'QUIROZ', 'castañeda', 'conocido');

-- --------------------------------------------------------

--
-- Table structure for table `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `preciounitario` decimal(20,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `vendido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `clave` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `in_act` varchar(100) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `cantdad_total` int(100) NOT NULL,
  `valor_unitario` int(100) NOT NULL,
  `valor_total` int(100) NOT NULL,
  `linea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`clave`, `nombre`, `in_act`, `presentacion`, `cantidad`, `cantdad_total`, `valor_unitario`, `valor_total`, `linea`) VALUES
('ACT', 'ACTIBIOSS', 'Extracto de ajo,canela y chile 1lt.', '1 LITRO', 200, 226, 226, 18000, ''),
('RVNT1015', 'REVENNT', 'TDZ', '1 LITRO', 2002, 100, 4, 3500, 'estimulante');

-- --------------------------------------------------------

--
-- Table structure for table `tblventas`
--

CREATE TABLE `tblventas` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `total` decimal(60,0) NOT NULL,
  `clave` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tblventas`
--

INSERT INTO `tblventas` (`id`, `fecha`, `nombre`, `total`, `clave`) VALUES
(1, '2020-07-12 16:55:30', 'dario', '16', 'qwertyuii'),
(2, '2020-07-12 19:09:54', 'dario', '10186', 'qwertyuii'),
(3, '2020-07-12 19:13:21', 'DFJS', '10186', 'qerrtwe'),
(4, '2020-07-12 20:54:31', 'dario', '10186', 'qwertyuii'),
(5, '2020-07-12 20:55:31', 'dario', '10186', 'qwertyuii'),
(6, '2020-07-12 20:57:11', 'dario', '10186', 'qwertyuii'),
(7, '2020-07-12 21:24:01', 'dario', '10186', 'qwertyuii'),
(8, '2020-07-12 21:24:42', 'dario', '10186', 'qwertyuii'),
(9, '2020-07-12 21:25:23', 'DFJS', '529970', 'qerrtwe'),
(10, '2020-07-15 00:20:06', 'juan', '246', 'daewrty345467578');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'dario', 'quiroz', 'facturapiq@piq.com.m', 'b4b6f4f33b4a889af08937e9e280b8e367ec4640'),
(2, 'asdf', 'sdf', 'facturapiq@piq.com.mx', '519ab8e25a5fca44666fae1a90fffb75c6e22fd9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clave`);

--
-- Indexes for table `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idventa` (`idventa`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`clave`);

--
-- Indexes for table `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
