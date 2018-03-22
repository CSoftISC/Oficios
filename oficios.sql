-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 07:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oficios`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `promedioPorOficio` ()  BEGIN
	select u.id usuarioId, u.nombre usuarioNombre, sum(aciertos)/count(aciertos)  promedio, o.id oficioId, o.nombre oficioNombre from Usuarios u, Calificaciones c, Oficios o where u.id = c.id_usuario and o.id = c.id_oficios GROUP by c.id_oficios, u.id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `promedios` ()  BEGIN
select id_usuario, sum(aciertos)/count(id_usuario) promedio from Calificaciones GROUP by id_usuario order by id_usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Calificaciones`
--

CREATE TABLE `Calificaciones` (
  `id` int(11) NOT NULL,
  `aciertos` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_oficios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Calificaciones`
--

INSERT INTO `Calificaciones` (`id`, `aciertos`, `fecha`, `id_usuario`, `id_oficios`) VALUES
(1, 86, '2018-03-17', 1, 1),
(2, 86, '2018-03-17', 1, 3),
(3, 71, '2018-03-17', 1, 4),
(4, 86, '2018-03-18', 5, 1),
(5, 86, '2018-03-18', 5, 3),
(6, 86, '2018-03-18', 5, 6),
(7, 100, '2018-03-18', 5, 5),
(8, 57, '2018-03-18', 4, 7),
(9, 71, '2018-03-18', 4, 2),
(10, 71, '2018-03-18', 4, 4),
(11, 43, '2018-03-18', 2, 6),
(12, 86, '2018-03-18', 2, 7),
(13, 100, '2018-03-19', 1, 1),
(14, 100, '2018-03-19', 1, 1),
(15, 100, '2018-03-19', 1, 1),
(16, 100, '2018-03-19', 1, 1),
(17, 100, '2018-03-19', 1, 1),
(18, 57, '2018-03-19', 1, 6),
(19, 57, '2018-03-19', 1, 6),
(20, 57, '2018-03-19', 1, 6),
(21, 57, '2018-03-19', 1, 6),
(22, 57, '2018-03-19', 1, 6),
(23, 71, '2018-03-19', 1, 2),
(24, 71, '2018-03-19', 1, 2),
(25, 71, '2018-03-19', 1, 2),
(26, 71, '2018-03-19', 1, 2),
(27, 71, '2018-03-19', 1, 2),
(28, 71, '2018-03-19', 1, 2),
(29, 71, '2018-03-19', 1, 2),
(30, 71, '2018-03-19', 1, 2),
(31, 71, '2018-03-19', 1, 2),
(32, 71, '2018-03-19', 1, 2),
(33, 71, '2018-03-19', 1, 2),
(34, 71, '2018-03-19', 1, 2),
(35, 71, '2018-03-19', 1, 2),
(36, 71, '2018-03-19', 1, 2),
(37, 71, '2018-03-19', 1, 2),
(38, 71, '2018-03-19', 1, 2),
(39, 71, '2018-03-19', 1, 2),
(40, 71, '2018-03-19', 1, 2),
(41, 71, '2018-03-19', 1, 2),
(42, 71, '2018-03-19', 1, 2),
(43, 86, '2018-03-19', 1, 5),
(44, 100, '2018-03-19', 1, 7),
(45, 100, '2018-03-19', 1, 7),
(46, 100, '2018-03-19', 1, 7),
(47, 71, '2018-03-22', 3, 4),
(48, 86, '2018-03-22', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Oficios`
--

CREATE TABLE `Oficios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Oficios`
--

INSERT INTO `Oficios` (`id`, `nombre`) VALUES
(1, 'Conserje'),
(2, 'Bolero'),
(3, 'Carpintero'),
(4, 'Cocinero'),
(5, 'Jardinero'),
(6, 'Lava Carros'),
(7, 'Bombero');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ap_materno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ap_paterno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promedio` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `ap_materno`, `ap_paterno`, `promedio`) VALUES
(1, 'cosme', 'escobedo', 'sanchez', 0),
(2, 'yadira', 'pena', 'ramirez', NULL),
(3, 'carlos', 'silverira', 'hinojos', NULL),
(4, 'paul', 'estala', 'enriquez', NULL),
(5, 'damian ', 'escobedo', 'sanchez', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Calificaciones`
--
ALTER TABLE `Calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_oficios` (`id_oficios`);

--
-- Indexes for table `Oficios`
--
ALTER TABLE `Oficios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Calificaciones`
--
ALTER TABLE `Calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `Oficios`
--
ALTER TABLE `Oficios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Calificaciones`
--
ALTER TABLE `Calificaciones`
  ADD CONSTRAINT `Calificaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id`),
  ADD CONSTRAINT `Calificaciones_ibfk_2` FOREIGN KEY (`id_oficios`) REFERENCES `Oficios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
