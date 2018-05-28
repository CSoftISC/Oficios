-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 05:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.4

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
(48, 86, '2018-03-22', 3, 4),
(49, 86, '2018-04-19', 2, 7),
(50, 57, '2018-04-19', 2, 7),
(51, 57, '2018-04-19', 2, 7),
(52, 71, '2018-04-19', 2, 7),
(53, 71, '2018-04-19', 2, 7),
(54, 57, '2018-04-19', 2, 1),
(55, 57, '2018-04-19', 2, 2),
(56, 86, '2018-04-19', 2, 3),
(57, 100, '2018-04-19', 2, 4),
(58, 100, '2018-04-19', 2, 5),
(59, 71, '2018-04-19', 2, 6),
(60, 71, '2018-04-19', 2, 6),
(61, 71, '2018-04-19', 2, 6),
(62, 71, '2018-04-19', 2, 6),
(63, 43, '2018-04-19', 2, 6),
(64, 100, '2018-04-22', 10, 3),
(65, 71, '2018-04-22', 10, 3),
(66, 71, '2018-04-22', 9, 1),
(67, 71, '2018-05-20', 1, 3),
(68, 100, '2018-05-24', 11, 4),
(69, 100, '2018-05-24', 11, 7),
(70, 100, '2018-05-24', 11, 1),
(71, 86, '2018-05-24', 11, 2),
(72, 100, '2018-05-24', 11, 6),
(73, 100, '2018-05-24', 11, 5),
(74, 100, '2018-05-24', 11, 3),
(75, 100, '2018-05-24', 11, 4),
(76, 100, '2018-05-24', 11, 6),
(77, 43, '2018-05-28', 1, 3),
(78, 43, '2018-05-28', 1, 3);

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
  `promedio` double DEFAULT NULL,
  `imagen` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `ap_materno`, `ap_paterno`, `promedio`, `imagen`) VALUES
(1, 'cosme', 'escobedo', 'sanchez', 0, NULL),
(2, 'yadira', 'pena', 'ramirez', NULL, NULL),
(3, 'carlos', 'silverira', 'hinojos', NULL, NULL),
(4, 'paul', 'estala', 'enriquez', NULL, NULL),
(5, 'damian ', 'escobedo', 'sanchez', NULL, NULL),
(9, '12', '12', '12', NULL, NULL),
(10, 'thisnuts', 'asdf', 'ad', NULL, NULL),
(11, 'Ulises', 'Perez', 'Pada', NULL, NULL),
(12, 'Carlos', 'Salazar', 'Fernandez', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `Oficios`
--
ALTER TABLE `Oficios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
