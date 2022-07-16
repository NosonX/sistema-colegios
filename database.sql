-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 16, 2022 at 03:39 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colegiosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
                                 `id` int(11) NOT NULL,
                                 `login` varchar(255) DEFAULT NULL,
                                 `clave` varchar(50) DEFAULT NULL,
                                 `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
                          `id` int(11) NOT NULL,
                          `login` varchar(255) NOT NULL,
                          `clave` varchar(50) NOT NULL,
                          `nombre` varchar(100) NOT NULL,
                          `apellidos` varchar(100) NOT NULL,
                          `nivel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
                              `id` int(11) NOT NULL,
                              `nombre` varchar(45) DEFAULT NULL,
                              `nivel_id` int(11) NOT NULL,
                              `profesor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asignatura_has_alumno`
--

CREATE TABLE `asignatura_has_alumno` (
                                         `asignatura_id` int(11) NOT NULL,
                                         `alumno_id` int(11) NOT NULL,
                                         `id_nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `falta_asistencia`
--

CREATE TABLE `falta_asistencia` (
                                    `id` int(11) NOT NULL,
                                    `fecha` date DEFAULT NULL,
                                    `justificada` tinyint(4) DEFAULT NULL,
                                    `alumno_id` int(11) NOT NULL,
                                    `asignatura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
                           `id` int(11) NOT NULL,
                           `dia` date NOT NULL,
                           `horaInicio` time NOT NULL,
                           `horaFin` time NOT NULL,
                           `asignatura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE `nivel` (
                         `id` int(11) NOT NULL,
                         `nivel` varchar(45) NOT NULL,
                         `curso` varchar(45) NOT NULL,
                         `aula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
                        `id` int(11) NOT NULL,
                        `trimestre` int(11) NOT NULL,
                        `nota` decimal(10,0) NOT NULL,
                        `asignatura_has_alumno_asignatura_id` int(11) NOT NULL,
                        `asignatura_has_alumno_alumno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
                            `id` int(11) NOT NULL,
                            `login` varchar(255) NOT NULL,
                            `clave` varchar(50) NOT NULL,
                            `nombre` varchar(100) NOT NULL,
                            `apellidos` varchar(100) NOT NULL,
                            `email` varchar(100) NOT NULL,
                            `especialista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_alumno_nivel1_idx` (`nivel_id`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_asignatura_nivel1_idx` (`nivel_id`),
  ADD KEY `fk_asignatura_profesor1_idx` (`profesor_id`);

--
-- Indexes for table `asignatura_has_alumno`
--
ALTER TABLE `asignatura_has_alumno`
    ADD PRIMARY KEY (`asignatura_id`,`alumno_id`),
  ADD KEY `fk_asignatura_has_alumno_alumno1_idx` (`alumno_id`),
  ADD KEY `fk_asignatura_has_alumno_asignatura1_idx` (`asignatura_id`);

--
-- Indexes for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_falta_asistencia_alumno1_idx` (`alumno_id`),
  ADD KEY `fk_falta_asistencia_asignatura1_idx` (`asignatura_id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_horario_asignatura1_idx` (`asignatura_id`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
    ADD PRIMARY KEY (`id`,`asignatura_has_alumno_asignatura_id`,`asignatura_has_alumno_alumno_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_nota_asignatura_has_alumno1_idx` (`asignatura_has_alumno_asignatura_id`,`asignatura_has_alumno_alumno_id`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asignatura`
--
ALTER TABLE `asignatura`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
    ADD CONSTRAINT `fk_alumno_nivel1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asignatura`
--
ALTER TABLE `asignatura`
    ADD CONSTRAINT `fk_asignatura_nivel1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asignatura_profesor1` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `asignatura_has_alumno`
--
ALTER TABLE `asignatura_has_alumno`
    ADD CONSTRAINT `fk_asignatura_has_alumno_alumno1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asignatura_has_alumno_asignatura1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
    ADD CONSTRAINT `fk_falta_asistencia_alumno1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_falta_asistencia_asignatura1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
    ADD CONSTRAINT `fk_horario_asignatura1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
    ADD CONSTRAINT `fk_nota_asignatura_has_alumno1` FOREIGN KEY (`asignatura_has_alumno_asignatura_id`,`asignatura_has_alumno_alumno_id`) REFERENCES `asignatura_has_alumno` (`asignatura_id`, `alumno_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
