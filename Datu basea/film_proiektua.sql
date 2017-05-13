-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2017 a las 13:00:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `film_proiektua`
--
CREATE DATABASE IF NOT EXISTS `film_proiektua` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `film_proiektua`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aktorea`
--

CREATE TABLE `aktorea` (
  `Id` int(11) NOT NULL,
  `Izena` varchar(20) NOT NULL,
  `Abizena` varchar(25) NOT NULL,
  `Adina` int(11) NOT NULL,
  `Bizilekua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aktorea`
--

INSERT INTO `aktorea` (`Id`, `Izena`, `Abizena`, `Adina`, `Bizilekua`) VALUES
(1, 'Leonardo', 'DiCaprio', 42, 'Hollywood, EEBB'),
(2, 'Will', 'Smith', 48, 'Los Angeles, EEBB'),
(3, 'Clint', 'Eastwood', 86, 'San Francisco, EEBB'),
(4, 'Quentin', 'Tarantino', 49, 'Washington, EEBB'),
(5, 'Scarlett', 'Johansson', 34, 'Los Angeles, EEBB'),
(6, 'Johnny', 'Depp', 52, 'Texas'),
(7, 'Uma', 'Thurman', 46, 'Boston, EEBB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzailea`
--

CREATE TABLE `erabiltzailea` (
  `Id` int(11) NOT NULL,
  `Izena` varchar(15) NOT NULL,
  `Pasahitza` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `erabiltzailea`
--

INSERT INTO `erabiltzailea` (`Id`, `Izena`, `Pasahitza`) VALUES
(1, 'admin', 'admin'),
(2, 'Mikel', 'Mikel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filma`
--

CREATE TABLE `filma` (
  `Id` int(11) NOT NULL,
  `Izena` varchar(35) NOT NULL,
  `Mota` varchar(20) NOT NULL,
  `Zuzendaria` int(11) NOT NULL,
  `Aktore_Protagonista` int(11) NOT NULL,
  `Urtea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `filma`
--

INSERT INTO `filma` (`Id`, `Izena`, `Mota`, `Zuzendaria`, `Aktore_Protagonista`, `Urtea`) VALUES
(1, 'Titanic', 'Drama', 1, 1, 1997),
(2, 'Kill Bill', 'Akzioa', 2, 7, 2003),
(3, 'Edward Scissorhands', 'Fantasia', 3, 6, 1990),
(4, 'Ghost in the shell', 'Zientzia fikzioa', 4, 5, 2017),
(5, 'The eiger sanction', 'Akzioa', 5, 3, 1975);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zuzendaria`
--

CREATE TABLE `zuzendaria` (
  `Id` int(11) NOT NULL,
  `Izena` varchar(20) NOT NULL,
  `Abizena` varchar(25) NOT NULL,
  `Adina` int(11) NOT NULL,
  `Bizilekua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zuzendaria`
--

INSERT INTO `zuzendaria` (`Id`, `Izena`, `Abizena`, `Adina`, `Bizilekua`) VALUES
(1, 'James', 'Cameron', 53, 'San Diego, EEBB'),
(2, 'Quentin', 'Tarantino', 49, 'Washington, EEBB'),
(3, 'Tim', 'Burton', 58, 'Pennsylvania, EBBB'),
(4, 'Rupert', 'Sanders', 46, 'Westminster, Ingalaterra'),
(5, 'Clint', 'Eastwood', 86, 'San Francisco, EEBB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aktorea`
--
ALTER TABLE `aktorea`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erabiltzailea`
--
ALTER TABLE `erabiltzailea`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `filma`
--
ALTER TABLE `filma`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Aktore_Protagonista` (`Aktore_Protagonista`),
  ADD KEY `Zuzendaria` (`Zuzendaria`);

--
-- Indices de la tabla `zuzendaria`
--
ALTER TABLE `zuzendaria`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aktorea`
--
ALTER TABLE `aktorea`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `erabiltzailea`
--
ALTER TABLE `erabiltzailea`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `filma`
--
ALTER TABLE `filma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `zuzendaria`
--
ALTER TABLE `zuzendaria`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `filma`
--
ALTER TABLE `filma`
  ADD CONSTRAINT `filma_ibfk_1` FOREIGN KEY (`Aktore_Protagonista`) REFERENCES `aktorea` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `filma_ibfk_2` FOREIGN KEY (`Zuzendaria`) REFERENCES `zuzendaria` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
