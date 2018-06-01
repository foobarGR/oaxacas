-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2018 a las 02:30:55
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `exat5`
--
CREATE DATABASE IF NOT EXISTS `exat5` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `exat5`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos`
--

CREATE TABLE `t_alumnos` (
  `idAlumno` int(11) NOT NULL,
  `nAlumno` varchar(150) DEFAULT NULL,
  `aPatAlumno` varchar(100) DEFAULT NULL,
  `aMatAlumno` varchar(100) DEFAULT NULL,
  `INacAlumno` varchar(100) DEFAULT NULL,
  `fNacAlumno` date DEFAULT NULL,
  `eCivil` varchar(20) DEFAULT NULL,
  `gSanguineo` varchar(4) DEFAULT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `calle` varchar(200) DEFAULT NULL,
  `nInterno` varchar(10) DEFAULT NULL,
  `nExterno` varchar(10) DEFAULT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `mpo` varchar(150) DEFAULT NULL,
  `cPostal` int(11) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `sexoAlumno` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_alumnos`
--

INSERT INTO `t_alumnos` (`idAlumno`, `nAlumno`, `aPatAlumno`, `aMatAlumno`, `INacAlumno`, `fNacAlumno`, `eCivil`, `gSanguineo`, `curp`, `calle`, `nInterno`, `nExterno`, `ciudad`, `mpo`, `cPostal`, `tel`, `email`, `sexoAlumno`) VALUES
(1, 'veronica', 'martinez', 'duran', '123456789', '1996-01-09', 'soltera', 'O+', 'VMD96090196MMNRRR06', 'francisco javier mina', '80', '50', 'mexico', 'hidalgo', 611, '7861226410', 'veromd-96@outlook.com', 'F'),
(2, 'marco', 'garcia', 'ramos', '123456789', '1996-01-09', 'soltero', 'O+', 'CDB96090196MMNRRR06', 'francisco javier mina', '80', '50', 'mexico', 'hidalgo', 611, '7861226410', 'marcomd-96@outlook.com', 'M'),
(3, 'daniel', 'moreno', 'bautista', '123456789', '1996-01-09', 'soltero', 'O+', 'GR96090196MMNRRR06', 'francisco javier mina', '80', '50', 'mexico', 'hidalgo', 611, '7861226410', 'bau-96@outlook.com', 'M'),
(4, 'uriel', 'cambron', 'hernandez', '123456789', '1996-01-09', 'soltero', 'O+', 'URI96090196MMNRRR06', 'francisco javier mina', '80', '50', 'mexico', 'hidalgo', 611, '7861226410', 'uriel-97@outlook.com', 'M'),
(5, 'carlos', 'bautista', 'moreno', '123456789', '1996-01-09', 'soltero', 'O+', 'CDBM96090196MMNRRR06', 'francisco javier mina', '80', '50', 'mexico', 'hidalgo', 611, '7861226410', 'cdb-96@outlook.com', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_docentes`
--

CREATE TABLE `t_docentes` (
  `idDocente` int(11) NOT NULL,
  `nDocente` varchar(150) DEFAULT NULL,
  `aPatDocente` varchar(100) DEFAULT NULL,
  `aMatDocente` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `calle` varchar(200) DEFAULT NULL,
  `nInterno` varchar(10) DEFAULT NULL,
  `nExterno` varchar(10) DEFAULT NULL,
  `colonia` varchar(150) DEFAULT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `mpo` varchar(150) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cPostal` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `INacDocente` varchar(100) DEFAULT NULL,
  `fNacDocente` date DEFAULT NULL,
  `eCivil` varchar(20) DEFAULT NULL,
  `gSanguineo` varchar(4) DEFAULT NULL,
  `curp` varchar(30) DEFAULT NULL,
  `sexoAlumno` varchar(2) DEFAULT NULL,
  `sSocial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_docentes`
--

INSERT INTO `t_docentes` (`idDocente`, `nDocente`, `aPatDocente`, `aMatDocente`, `tel`, `calle`, `nInterno`, `nExterno`, `colonia`, `ciudad`, `mpo`, `estado`, `cPostal`, `email`, `INacDocente`, `fNacDocente`, `eCivil`, `gSanguineo`, `curp`, `sexoAlumno`, `sSocial`) VALUES
(1, 'armando', 'lopez', 'hernandez', '7861226410', 'la mangana', '80', '50', 'centro', 'mexico', 'hidalgo', 'michoacan', 6100, 'lopez_96@hotmail.coom', '4579210', '1080-05-02', 'soletar', 'O+', 'ARLH800502HHHH06', 'M', 'sSocial'),
(2, 'erick', 'escobar', 'mendoza', '7861226410', 'la mangana', '80', '50', 'centro', 'mexico', 'hidalgo', 'michoacan', 6100, 'erick_96@hotmail.coom', '4579210', '1950-05-02', 'solteror', 'O+', 'EEMH800502HHHH06', 'M', 'sSocial'),
(3, 'horacio', 'perez', 'marin', '7861226410', 'la mangana', '80', '50', 'centro', 'mexico', 'hidalgo', 'michoacan', 6100, 'horacio_96@hotmail.coom', '4579210', '1960-05-02', 'soltero', 'O+', 'HPM800502HHHH06', 'M', 'sSocial'),
(4, 'mariela', 'chaves', 'mendoza', '7861226410', 'la mangana', '70', '50', 'centro', 'mexico', 'hidalgo', 'michoacan', 6100, 'mendoza_96@hotmail.coom', '4579210', '1960-05-02', 'soletar', 'O+', 'MCM800502HHHH06', 'F', 'sSocial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupos`
--

CREATE TABLE `t_grupos` (
  `idGrupo` int(11) NOT NULL,
  `tplan` varchar(100) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `grupo` varchar(20) DEFAULT NULL,
  `docente` varchar(150) DEFAULT NULL,
  `dias` varchar(25) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `edificio` varchar(4) DEFAULT NULL,
  `salon` varchar(8) DEFAULT NULL,
  `dDos` varchar(15) DEFAULT NULL,
  `hDos` varchar(50) DEFAULT NULL,
  `eDos` varchar(50) DEFAULT NULL,
  `sDos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_grupos`
--

INSERT INTO `t_grupos` (`idGrupo`, `tplan`, `nivel`, `grupo`, `docente`, `dias`, `horas`, `edificio`, `salon`, `dDos`, `hDos`, `eDos`, `sDos`) VALUES
(1, '123abc', '2', '078C', 'erick', '3', 12, 'E', 'lab6', 'dDos', 'hDos', 'eDos', 'sDos'),
(2, '4562a', '3', '078D', 'erick', '5', 5, 'K', 'labMacs', 'dDos', 'hDos', 'eDos', 'sDos'),
(3, 'ert45', '1', '074C', 'erick', 'L-M-M', 45, 'E', 'lab4', 'dDos', 'hDos', 'eDos', 'sDos'),
(4, '456321', '1', '072D', 'erick', 'J-M-V', 5, 'E', 'lab2', 'dDos', 'hDos', 'eDos', 'sDos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_inscripciones`
--

CREATE TABLE `t_inscripciones` (
  `idIns` int(11) NOT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  `idGrupo` int(11) DEFAULT NULL,
  `tPago` int(11) DEFAULT NULL,
  `idPlan` int(11) DEFAULT NULL,
  `idDocente` int(11) DEFAULT NULL,
  `idPeriodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_inscripciones`
--

INSERT INTO `t_inscripciones` (`idIns`, `idAlumno`, `idGrupo`, `tPago`, `idPlan`, `idDocente`, `idPeriodo`) VALUES
(1, 1, 1, 800, 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_periodos`
--

CREATE TABLE `t_periodos` (
  `idPeriodo` int(11) NOT NULL,
  `fInicio` date DEFAULT NULL,
  `fFin` date DEFAULT NULL,
  `idPlan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_periodos`
--

INSERT INTO `t_periodos` (`idPeriodo`, `fInicio`, `fFin`, `idPlan`) VALUES
(1, '2018-05-23', '2018-05-26', 5),
(2, '2010-01-23', '2024-01-23', 2),
(3, '2010-01-23', '2024-01-23', 2),
(5, '2010-01-23', '2024-01-23', 4),
(6, '2010-01-23', '2024-01-23', 5),
(7, '0000-00-00', '0000-00-00', 1),
(8, '0000-00-00', '0000-00-00', 6),
(9, '0000-00-00', '0000-00-00', 6),
(10, '1234-12-11', '1234-11-19', 1),
(11, '2018-05-01', '2018-05-30', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_plan_estudios`
--

CREATE TABLE `t_plan_estudios` (
  `idPlan` int(11) NOT NULL,
  `nPlan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_plan_estudios`
--

INSERT INTO `t_plan_estudios` (`idPlan`, `nPlan`) VALUES
(1, 'Ingenieria en Sistemas Computacionales 2004-2010'),
(2, 'Ingenieria en Sistemas Computacionales 2010-2024'),
(4, 'Ingenieria en Tics 2010-2024'),
(5, 'IGE 2018-220 hola'),
(6, 'IGE 2010-2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `name`, `pass`) VALUES
(1, 'root', '123'),
(4, 'marco antonio', 'yupi'),
(5, 'magaly', '123'),
(7, 'veronica', '123'),
(8, 'hola', 'hola'),
(9, 'dani', 'hola'),
(10, 'spike', '123'),
(11, 'spike', '123'),
(12, 'spike', '123'),
(13, 'jhkh', 'hjkg'),
(14, 'njkhjkoiyuhilhukjhlk', 'hjkhjkhjkhjghjfhty'),
(15, 'marco', '1'),
(16, 'omar', 'alcantar'),
(17, 'veronica', '123'),
(18, 'veronica', '123'),
(19, 'magaly g', '130913'),
(20, 'iraik', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `t_docentes`
--
ALTER TABLE `t_docentes`
  ADD PRIMARY KEY (`idDocente`);

--
-- Indices de la tabla `t_grupos`
--
ALTER TABLE `t_grupos`
  ADD PRIMARY KEY (`idGrupo`);

--
-- Indices de la tabla `t_inscripciones`
--
ALTER TABLE `t_inscripciones`
  ADD PRIMARY KEY (`idIns`),
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `idGrupo` (`idGrupo`),
  ADD KEY `idPlan` (`idPlan`),
  ADD KEY `idDocente` (`idDocente`),
  ADD KEY `idPeriodo` (`idPeriodo`);

--
-- Indices de la tabla `t_periodos`
--
ALTER TABLE `t_periodos`
  ADD PRIMARY KEY (`idPeriodo`),
  ADD KEY `idPlan` (`idPlan`);

--
-- Indices de la tabla `t_plan_estudios`
--
ALTER TABLE `t_plan_estudios`
  ADD PRIMARY KEY (`idPlan`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_inscripciones`
--
ALTER TABLE `t_inscripciones`
  ADD CONSTRAINT `t_inscripciones_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `t_alumnos` (`idAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_inscripciones_ibfk_2` FOREIGN KEY (`idGrupo`) REFERENCES `t_grupos` (`idGrupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_inscripciones_ibfk_3` FOREIGN KEY (`idPlan`) REFERENCES `t_plan_estudios` (`idPlan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_inscripciones_ibfk_4` FOREIGN KEY (`idDocente`) REFERENCES `t_docentes` (`idDocente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_inscripciones_ibfk_5` FOREIGN KEY (`idPeriodo`) REFERENCES `t_periodos` (`idPeriodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_periodos`
--
ALTER TABLE `t_periodos`
  ADD CONSTRAINT `t_periodos_ibfk_1` FOREIGN KEY (`idPlan`) REFERENCES `t_plan_estudios` (`idPlan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
