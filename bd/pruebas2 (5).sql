-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-01-2021 a las 02:54:33
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonodeclientes`
--

CREATE TABLE `abonodeclientes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `idnota` decimal(10,2) NOT NULL,
  `forma` decimal(10,2) NOT NULL,
  `cantidad` decimal(12,2) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `abonodeclientes`
--

INSERT INTO `abonodeclientes` (`id`, `nombre`, `idnota`, `forma`, `cantidad`, `fecha`) VALUES
(20, 'AVELINO', 1313, 1, 234, '2020-12-30 20:45:28'),
(21, 'AVELINO', 1313, 1, 4816, '2020-12-30 20:50:39'),
(22, 'AVELINO', 1313, 1, 47000, '2020-12-30 20:55:12'),
(23, 'ELIAS', 1306, 1, 100, '2020-12-30 22:08:16'),
(24, 'ELIAS', 1306, 1, 100, '2020-12-30 22:11:08'),
(25, 'ELIAS', 1306, 1, 100, '2020-12-30 22:13:12'),
(26, 'ELIAS', 1306, 2, 100, '2020-12-30 22:13:26'),
(27, 'ELIAS', 1306, 1, 600, '2020-12-30 22:46:06'),
(28, 'ELIAS', 1306, 1, 600, '2020-12-30 22:47:02'),
(29, 'ELIAS', 1306, 5, 580, '2020-12-30 23:04:29'),
(30, 'ELIAS', 1306, 5, 580, '2020-12-30 23:05:07'),
(31, 'ELIAS', 1306, 5, 580, '2020-12-30 23:07:31'),
(32, 'ELIAS', 1306, 4, 200, '2020-12-30 23:08:32'),
(33, 'ELIAS', 1306, 5, 250, '2020-12-30 23:09:54'),
(34, 'ELIAS', 1306, 5, 345, '2020-12-30 23:12:19'),
(35, 'ELIAS', 1306, 5, 10000, '2020-12-31 09:15:26'),
(36, 'ELIAS', 1, 5, 100, '2020-12-31 10:45:51'),
(37, 'ELIAS', 1, 5, 580, '2020-12-31 10:45:58'),
(38, 'ELIAS', 1, 5, 40000, '2020-12-31 10:51:53'),
(39, 'ELIAS', 1, 5, 4000, '2020-12-31 10:52:03'),
(40, 'ELIAS', 1, 5, 100, '2020-12-31 10:55:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudo`
--

CREATE TABLE `adeudo` (
  `id` int(11) NOT NULL,
  `idcliente` varchar(30) NOT NULL,
  `nombrecliente` varchar(254) NOT NULL,
  `total` decimal(13,2) NOT NULL,
  `idventa` decimal(13,2) NOT NULL,
  `forma` decimal(12,2) NOT NULL,
  `adeudo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adeudo`
--

INSERT INTO `adeudo` (`id`, `idcliente`, `nombrecliente`, `total`, `idventa`, `forma`, `adeudo`) VALUES
(50, 'MOBE810725HMNRZL01', 'ELIAS', 2, 1301, 2, 0),
(51, 'HUTA730209HMNRRV01', 'AVELINO', 0, 1302, 2, 0),
(52, 'HUTA730209HMNRRV01', 'AVELINO', 0, 1303, 2, 0),
(53, 'MOBE810725HMNRZL01', 'ELIAS', 0, 1304, 2, 0),
(54, 'HUTA730209HMNRRV01', 'AVELINO', 0, 1305, 2, 0),
(55, 'MOBE810725HMNRZL01', 'ELIAS', 300, 1306, 2, 0),
(56, 'HUTA730209HMNRRV01', 'AVELINO', 0, 1307, 2, 0),
(57, 'HUTA730209HMNRRV01', 'AVELINO', 150, 1313, 2, 0),
(58, 'HUTA730209HMNRRV01', 'AVELINO', 300, 1323, 1, 300),
(59, 'MOBE810725HMNRZL01', 'ELIAS', 345, 1324, 2, 0),
(60, 'PEU500807HMNDRS05', 'GUSTAVO', 600, 3, 1, 600),
(61, 'MOBE810725HMNRZL01', 'ELIAS', 150, 1, 1, 675),
(62, 'HUTA730209HMNRRV01', 'AVELINO', 400, 1332, 1, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudoproveedoores`
--

CREATE TABLE `adeudoproveedoores` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `claveproducto` varchar(100) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `foliocompra` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `razonsocial` text NOT NULL,
  `forma` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adeudoproveedoores`
--

INSERT INTO `adeudoproveedoores` (`id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`, `razonsocial`, `forma`) VALUES
(29, '2020-09-14', 'CYTS1L', 45132, '125', ' DBI161025T94 ', ' DUX BIOTECH SA DE CV', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `clave` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`clave`, `nombre`, `apellido_paterno`, `apellido_materno`, `domicilio`) VALUES
('BASE661211HMNRRP05', 'EPIFANIO', 'BARRIGA ', ' ', ' LOC. OJO ZARCO '),
('BASS541225HMNZDL09', 'SALVADOR', 'BAEZ', ' ', ' LOC. TIRINDIRITZIO '),
('HUTA730209HMNRRV01', 'AVELINO', 'HURTADO', ' ', ' AV. MORELOS 462 COL. CENTRO ARIO DE ROSALES MICH.'),
('MOBE810725HMNRZL01', 'ELIAS', 'MORA', ' ', ' LOC. PASO REAL'),
('PEU500807HMNDRS05', 'GUSTAVO', 'PEDRAZA', ' ', ' TARIMBARO MICH.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprasproducto`
--

CREATE TABLE `comprasproducto` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `claveproducto` varchar(100) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `foliocompra` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `razonsocial` text NOT NULL,
  `forma` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comprasproducto`
--

INSERT INTO `comprasproducto` (`id`, `fecha`, `claveproducto`, `total`, `foliocompra`, `rfc`, `razonsocial`, `forma`) VALUES
(17, '2020-09-07', 'ROOTADS1', 976, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 1),
(18, '2020-09-07', 'ROOTADS5', 11828, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 1),
(19, '2020-09-07', 'AGROM1X20', 50756, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 1),
(20, '2020-09-08', 'FLOWR3KG', 13000, '0745', ' GARD8707188N2 ', ' DANIEL GARCÍA RODRIGUEZ ', 2),
(21, '2020-09-08', 'AGROFSK1', 5537, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(22, '2020-09-08', 'AGROPLUS1', 29480, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(23, '2020-09-08', 'AGRMV4X5', 5900, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(24, '2020-09-08', 'AGROMV12X1', 3094, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(25, '2020-09-08', 'AGRXABC', 4440, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(26, '2020-09-08', 'AGRXABC1', 3335, '070920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(27, '2020-09-08', 'CYSTR1L', 5796, 'TA325', ' AIB191104J53 ', ' AGRICULTURA INTEGRAL DEL BALSAS SPR DE RL DE CV ', 2),
(28, '2020-09-08', 'DIATOS20KG', 2040, '1CA649', ' AAG1604282M1 ', ' AVOBERRIES AGROQUIMICOS SPR DE RL DE CV ', 2),
(29, '2020-09-08', 'MUSTN1L', 15960, '1CA636', ' AAG1604282M1 ', ' AVOBERRIES AGROQUIMICOS SPR DE RL DE CV ', 2),
(30, '2020-09-08', 'CABRC800', 3090, '1CA636', ' AAG1604282M1 ', ' AVOBERRIES AGROQUIMICOS SPR DE RL DE CV ', 2),
(31, '2020-09-08', 'CYSTRML', 3000, 'TA325', ' CAB041012URA ', ' COMERCIALIZADORA  DE AGROSERVICIOS DEL BALSAS SA DE CV ', 2),
(32, '2020-09-08', 'TRIBG2KG', 19525, '090920', ' PEVA9403152A4 ', ' ANA GABRIELA PEÑA VALENCIA ', 2),
(33, '2020-09-14', 'CYTS1L', 4700, '125', ' DBI161025T94 ', ' DUX BIOTECH SA DE CV ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id` int(11) NOT NULL,
  `idventa` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `idproducto` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `preciounitario` decimal(20,0) NOT NULL,
  `cantidad` decimal(11,2) NOT NULL,
  `vendido` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `total` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`id`, `idventa`, `idproducto`, `preciounitario`, `cantidad`, `vendido`, `total`) VALUES
(310, '152', 'ROOTADS1', '248', 1, 'ROOTING ADS', 248),
(311, '153', 'AGROM1X20', '101', 10, 'AGROMAX', 1010),
(312, '154', 'ROOTADS5', '1225', 1, 'ROOTING ADS', 1225),
(313, '154', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(314, '155', 'ROOTADS5', '1225', 1, 'ROOTING ADS', 1225),
(315, '155', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(316, '156', 'ROOTADS5', '1225', 1, 'ROOTING ADS', 1225),
(317, '156', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(318, '157', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(319, '158', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(320, '159', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(321, '160', 'ROOTADS1', '248', 1, 'ROOTING ADS', 248),
(322, '160', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(323, '1299', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(324, '1300', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(325, '1301', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(326, '1302', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(327, '1299', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(328, '1300', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(329, '1299', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(330, '1300', 'AGROM1X20', '101', 1, 'AGROMAX', 101),
(331, '1301', 'AGROMV12X1', '295', 1, 'AGROMIL V 1', 295),
(332, '1301', 'CABRC800', '1545', 1, 'CABRIO C 80', 1545),
(333, '1301', 'CYSTRML', '3', 200, 'CYSTAR 1 ml', 600),
(334, '1302', 'AGRXABC1', '0', 1, 'AGREX ABC 1', 0),
(335, '1303', 'AGRXABC1', '0', 4, 'AGREX ABC 1', 0),
(336, '1304', 'AGRXABC1', '0', 4, 'AGREX ABC 1', 0),
(337, '1305', 'AGRXABC1', '0', 2, 'AGREX ABC 1', 0),
(338, '1306', 'AGRXABC1', '150', 2, 'AGREX ABC 1', 300),
(339, '1306', 'TRIBG2KG', '0', 1, 'TRIBA KING ', 0),
(340, '1307', 'AGRXABC', '0', 1, 'AGREX ABC 5', 0),
(341, '1307', 'AGROFSK1', '0', 2, 'AGROFOS K 1', 0),
(342, '1308', 'AGRXABC', '0', 3, 'AGREX ABC 5', 0),
(343, '1308', 'TRIBG2KG', '0', 3, 'TRIBA KING ', 0),
(344, '1308', 'AGROFSK1', '0', 2, 'AGROFOS K 1', 0),
(345, '1309', 'AGRXABC', '0', 3, 'AGREX ABC 5', 0),
(346, '1309', 'TRIBG2KG', '0', 3, 'TRIBA KING ', 0),
(347, '1309', 'AGROFSK1', '0', 2, 'AGROFOS K 1', 0),
(348, '1310', 'AGRXABC', '0', 3, 'AGREX ABC 5', 0),
(349, '1310', 'TRIBG2KG', '0', 3, 'TRIBA KING ', 0),
(350, '1310', 'AGROFSK1', '0', 2, 'AGROFOS K 1', 0),
(351, '1311', 'TRIBG2KG', '0', 2, 'TRIBA KING ', 0),
(352, '1311', 'ROOTADS1', '0', 2, 'ROOTING AD ', 0),
(353, '1311', 'FLOWR3KG', '0', 3, 'FLOWER 3KG', 0),
(354, '1311', 'AGROMV12X1', '0', 5, 'AGROMIL V 1', 0),
(355, '1324', 'CYTS1L', '115', 3, 'CYTUS 1L', 345),
(356, '1326', 'FLOWR3KG', '0', 1, 'FLOWER 3KG', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(12) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `concepto`, `cantidad`, `fecha`) VALUES
(8, 'GARRAFON DE AGUA', 20, '2020-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `clave` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `in_act` varchar(100) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `cantdad_total` decimal(10,2) NOT NULL,
  `valor_unitario` decimal(10,2) NOT NULL,
  `valor_unitario_venta` decimal(10,2) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `linea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`clave`, `nombre`, `in_act`, `presentacion`, `cantidad`, `cantdad_total`, `valor_unitario`, `valor_unitario_venta`, `valor_total`, `linea`) VALUES
('AGRMV4X5', 'AGROMIL V 5L', 'REGULADOR DE CRECIMIENTO T1', '5 LITROS', 0, 5, '1180.00', '200.00', 5900, 'NUTRIENTE VEGETAL'),
('AGROFSK1', 'AGROFOS K 1KG', 'FERTILIZANTE FOLIAR', '1 KG', 37, 49, '113.00', '0.00', 5537, 'FOLIAR'),
('AGROM1X20', 'AGROMAX 1L', 'ELEMENTOS MENORES', '1 LITRO', 175, 200, '135.00', '0.00', 20200, 'AGROENZIMAS'),
('AGROMV12X1', 'AGROMIL V 1L', 'REGULADOR DE CRECIMIENTO T1', '1 LITRO', 10, 16, '295.00', '0.00', 3094, 'NUTRIENTE VEGETAL'),
('AGROPLUS1', 'AGROMIL PLUS 1L', 'REGULADOR  DE CRECIMIENTO', '1 LITRO', 52, 55, '536.00', '0.00', 29480, 'NUTRIENTE VEGETAL'),
('AGRXABC', 'AGREX ABC 5L', 'COADYUVANTE ACIDIFICANTE', '5 LITROS', -2, 8, '725.00', '0.00', 4440, 'ADHERENTES'),
('AGRXABC1', 'AGREX ABC 1L', 'COADYUVANTE ACIDIFICANTE', '1 LITRO', 22, 29, '110.00', '151.00', 3335, 'ADHERENTES'),
('CABRC800', 'CABRIO C 800g', 'BOSCALID+ PYRACLOSTROBIN', '800 gramos', 1, 2, '1545.00', '0.00', 3090, 'FUNGICIDA'),
('CYSTR1L', 'CYSTAR 1 L', 'CITOQUININAS', '1 LITRO', 7, 7, '828.00', '0.00', 5796, 'NUTRIENTE VEGETAL'),
('CYSTRML', 'CYSTAR 1 ml', 'REGULADOR DE CRECIMIENTO VEGETAL', '1 mililitro', 800, 1000, '3.00', '0.00', 3000, 'NUTRIENTE VEGETAL'),
('CYTS1L', 'CYTUS 1L', 'FERTILIZANTE FOLIAR', '1 LITRO', 47, 50, '94.00', '115.00', 4700, 'NUTRIENTE VEGETAL'),
('DIATOS20KG', 'DIATOSIL SACO 20Kg', 'SILICIO', '20 KILOGRAMOS', 5, 5, '408.00', '0.00', 2040, 'TIERRA DE DEATOMEAS'),
('FLOWR3KG', 'FLOWER 3KG', 'FERTILIZANTE FOLIR', '3 KILOGRAMOS', 96, 100, '225.00', '0.00', 13000, 'FOLIAR'),
('MUSTN1L', 'MUSTANG MAX 1L', 'ZETA CIPERMETRINA', '1 LITRO', 24, 24, '665.00', '0.00', 15960, 'INSECTICIDA'),
('ROOTADS1', 'ROOTING AD STRONG 1L ', 'ENRAIZADOR', '1 LITRO', 8, 12, '248.00', '0.00', 2976, 'AGROENZIMAS'),
('ROOTADS5', 'ROOTING AD STRONG 5L', 'ENRAIZADOR', '5 LITROS', 1, 20, '1225.00', '0.00', 4900, 'AGROENZIMAS'),
('TRIBG2KG', 'TRIBA KING 2kg', 'CLORURO DE CALCIO TRIBASICO DE COBRE', '2 kg', 43, 55, '355.00', '0.00', 19525, 'FUNGICIDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `rfc` varchar(15) NOT NULL,
  `razonsocial` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`rfc`, `razonsocial`) VALUES
('AIB191104J53', 'AGRICULTURA INTEGRAL DEL BALSAS SPR DE RL DE CV'),
('AMI070419JS6', '2018 AGROQUIMICOS EL MILENIO'),
('ANA100407I17', 'ANAJALSA S.A DE C.V.'),
('CAB041012URA', 'COMERCIALIZADORA  DE AGROSERVICIOS DEL BALSAS SA DE CV'),
('DBI161025T94', 'DUX BIOTECH SA DE CV'),
('GARD8707188N2', 'DANIEL GARCÍA RODRIGUEZ'),
('MTR050301MB2', 'MEZFER TRADE S.A DE C.V.'),
('PEVA9403152A4', 'ANA GABRIELA PEÑA VALENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `total` decimal(60,2 )NOT NULL,
  `clave` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `forma` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`id`, `fecha`, `nombre`, `total`, `clave`, `forma`) VALUES
(1301, '2020-09-08 13:33:46', 'ELIAS', 2440, 'MOBE810725HMNRZL01', '1'),
(1302, '2020-09-14 15:10:43', 'AVELINO', 0, 'HUTA730209HMNRRV01', '1'),
(1303, '2020-09-14 15:12:05', 'AVELINO', 0, 'HUTA730209HMNRRV01', '1'),
(1304, '2020-09-14 15:12:30', 'ELIAS', 0, 'MOBE810725HMNRZL01', '1'),
(1305, '2020-09-14 15:15:19', 'AVELINO', 0, 'HUTA730209HMNRRV01', '1'),
(1306, '2020-09-14 16:00:42', 'ELIAS', 300, 'MOBE810725HMNRZL01', '1'),
(1307, '2020-09-14 16:05:15', 'AVELINO', 0, 'HUTA730209HMNRRV01', '1'),
(1308, '2020-09-14 16:08:34', '', 0, '', '2'),
(1309, '2020-09-14 16:09:13', '', 0, '', '2'),
(1310, '2020-09-14 16:12:13', '', 0, '', '2'),
(1311, '2020-09-14 16:14:51', '', 0, '', '2'),
(1312, '2020-12-14 09:55:56', 'dario', 150, 'dario', '2'),
(1313, '2020-12-29 09:06:15', 'AVELINO', 150, 'jose peres ', '1'),
(1314, '2020-12-30 22:46:06', '', 600, '1306', '4'),
(1315, '2020-12-30 22:47:02', 'ELIAS', 600, '1306', '4'),
(1316, '2020-12-30 23:04:29', 'ELIAS', 580, '', '4'),
(1317, '2020-12-30 23:05:07', 'ELIAS', 580, 'jose peres ', '4'),
(1318, '2020-12-30 23:07:31', 'ELIAS', 580, 'jose peres ', '4'),
(1319, '2020-12-30 23:08:32', 'ELIAS', 200, 'jose peres ', '4'),
(1320, '2020-12-30 23:09:54', 'ELIAS', 250, 'jose peres ', '5'),
(1321, '2020-12-30 23:12:19', 'ELIAS', 345, 'jose peres ', '5'),
(1322, '2020-12-31 09:15:26', 'ELIAS', 10000, 'jose peres ', '5'),
(1323, '2020-12-31 09:29:05', 'AVELINO', 300, 'jose peres ', '1'),
(1324, '2020-12-31 09:30:13', 'ELIAS', 345, 'jose peres ', '1'),
(1325, '2020-12-31 09:36:28', 'GUSTAVO', 600, 'jose peres ', '1'),
(1326, '2020-12-31 10:44:10', 'ELIAS', 150, 'jose peres ', '1'),
(1327, '2020-12-31 10:45:51', 'ELIAS', 100, 'jose peres ', '5'),
(1328, '2020-12-31 10:45:58', 'ELIAS', 580, 'jose peres ', '5'),
(1329, '2020-12-31 10:51:53', 'ELIAS', 40000, 'jose peres ', '5'),
(1330, '2020-12-31 10:52:03', 'ELIAS', 4000, 'jose peres ', '5'),
(1331, '2020-12-31 10:55:09', 'ELIAS', 100, 'jose peres ', '5'),
(1332, '2020-12-31 11:02:28', 'AVELINO', 400, 'jose peres ', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL,
  `tipo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `tipo`) VALUES
(1, 'dario', 'quiroz', 'facturapiq@piq.com.m', 'b4b6f4f33b4a889af08937e9e280b8e367ec4640', 2),
(2, 'asdf', 'sdf', 'facturapiq@piq.com.mx', '519ab8e25a5fca44666fae1a90fffb75c6e22fd9', 1),
(3, 'asdf', 'sdf', 'facturapiq@piq.com.mx', '519ab8e25a5fca44666fae1a90fffb75c6e22fd9', 1),
(4, 'dario', 'quiroz', 'facturapiq@piq.com.m', 'b4b6f4f33b4a889af08937e9e280b8e367ec4640', 2),
(5, 'jose peres ', ' castaÃ±eda', '14940077@itstacambaro.edu.mx', 'unodostres', 1),
(6, 'jose peres ', ' castaÃ±eda', '14940077@itstacambaro.edu.mx', 'trescuatrocinco', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventadia`
--

CREATE TABLE `ventadia` (
  `id` int(12) NOT NULL,
  `totaldia` decimal(10,2) NOT NULL,
  `totalcredito` decimal(12,2) NOT NULL,
  `totalcontado` decimal(12,2) NOT NULL,
  `totaltransfer` decimal(10,2) NOT NULL,
  `totalmenos` decimal(12,2) NOT NULL,
  `caja` decimal(12,2) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventadia`
--

INSERT INTO `ventadia` (`id`, `totaldia`, `totalcredito`, `totalcontado`, `totaltransfer`, `totalmenos`, `caja`, `fecha`) VALUES
(5, 80000, 32000, 48000, 0, 48000, 44000, '2020-09-14 01:54:29'),
(6, 80000, 32000, 48000, 0, 48000, 48000, '2020-09-14 01:56:03'),
(7, 80000, 32000, 48000, 0, 48000, 48000, '2020-09-14 01:56:49'),
(8, 80000, 32000, 48000, 0, 48000, 48000, '2020-09-14 01:59:31'),
(9, 0, 0, 0, 0, 0, 0, '2020-12-08 10:46:16'),
(10, 0, 0, 0, 0, 0, 0, '2020-12-08 10:48:25'),
(11, 1000, 1000, 0, 0, 0, 0, '2020-12-08 10:48:58'),
(12, 1000, 1000, 0, 0, 0, 0, '2020-12-08 10:49:05'),
(13, 1000, 1000, 0, 0, 0, 0, '2020-12-08 11:17:31'),
(14, 1000, 1000, 0, 0, 0, 0, '2020-12-08 11:20:31'),
(15, 2820, 1000, 500, 0, 500, 500, '2020-12-08 11:44:18'),
(16, 1820, 1000, 320, 500, 320, 320, '2020-12-08 11:57:30'),
(17, 0, 0, 0, 0, 0, 0, '2020-12-16 12:39:19'),
(18, 0, 0, 0, 0, 0, 0, '2020-12-16 12:40:14'),
(19, 0, 0, 0, 0, 0, 0, '2020-12-16 12:40:39'),
(20, 0, 0, 0, 0, 0, 0, '2020-12-16 12:42:06'),
(21, 0, 0, 0, 0, 0, 0, '2020-12-16 12:42:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonodeclientes`
--
ALTER TABLE `abonodeclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `adeudoproveedoores`
--
ALTER TABLE `adeudoproveedoores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `comprasproducto`
--
ALTER TABLE `comprasproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idventa` (`idventa`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`rfc`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventadia`
--
ALTER TABLE `ventadia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonodeclientes`
--
ALTER TABLE `abonodeclientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `adeudoproveedoores`
--
ALTER TABLE `adeudoproveedoores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `comprasproducto`
--
ALTER TABLE `comprasproducto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1333;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventadia`
--
ALTER TABLE `ventadia`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
