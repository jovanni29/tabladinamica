-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para inventario
CREATE DATABASE IF NOT EXISTS `inventario` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `inventario`;

-- Volcando estructura para tabla inventario.computadora
CREATE TABLE IF NOT EXISTS `computadora` (
  `id_computadora` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_gab` char(50) NOT NULL,
  `marca_gab` char(50) NOT NULL,
  `modelo_gab` char(50) NOT NULL,
  `tipo_gab` char(50) NOT NULL,
  `noserie_gab` char(50) NOT NULL,
  `estado_gab` char(50) NOT NULL,
  `comentario_gab` char(50) NOT NULL,
  `arquitectura_so` char(50) NOT NULL,
  `version_so` char(50) NOT NULL,
  `id_so` char(50) NOT NULL,
  `marca_pro` char(50) NOT NULL,
  `modelo_pro` char(50) NOT NULL,
  `frecuencia_pro` char(50) NOT NULL,
  `nucleos_pro` char(50) NOT NULL,
  `hilos_pro` char(50) NOT NULL,
  `marca_ram` char(50) NOT NULL,
  `tipo_ram` char(50) NOT NULL,
  `tamano_ram` char(50) NOT NULL,
  `frecuencia_ram` char(50) NOT NULL,
  PRIMARY KEY (`id_computadora`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.impresora
CREATE TABLE IF NOT EXISTS `impresora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` char(50) NOT NULL,
  `modelo` char(50) NOT NULL,
  `numero_serie` char(50) NOT NULL,
  `estado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.monitor
CREATE TABLE IF NOT EXISTS `monitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` char(50) NOT NULL,
  `modelo` char(50) NOT NULL,
  `numero_serie` char(50) NOT NULL,
  `estado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.router
CREATE TABLE IF NOT EXISTS `router` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` char(50) NOT NULL,
  `modelo` char(50) NOT NULL,
  `numero_serie` char(50) NOT NULL,
  `estado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.telefono
CREATE TABLE IF NOT EXISTS `telefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` char(50) NOT NULL,
  `modelo` char(50) NOT NULL,
  `numero_serie` char(50) NOT NULL,
  `estado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.ups
CREATE TABLE IF NOT EXISTS `ups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` char(50) NOT NULL,
  `modelo` char(50) NOT NULL,
  `numero_serie` char(50) NOT NULL,
  `estado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla inventario.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(50) NOT NULL,
  `apellido` char(50) NOT NULL,
  `usuario` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
