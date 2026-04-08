-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_flood
DROP DATABASE IF EXISTS `db_flood`;
CREATE DATABASE IF NOT EXISTS `db_flood` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_flood`;

-- membuang struktur untuk table db_flood.enduser_tb
DROP TABLE IF EXISTS `enduser_tb`;
CREATE TABLE IF NOT EXISTS `enduser_tb` (
  `id` varchar(250) DEFAULT NULL,
  `hop` varchar(250) DEFAULT NULL,
  `msgId` varchar(250) DEFAULT NULL,
  `dest` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `msg` text,
  `lat` varchar(250) DEFAULT NULL,
  `lon` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `timetaken` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_flood.sensor_tb
DROP TABLE IF EXISTS `sensor_tb`;
CREATE TABLE IF NOT EXISTS `sensor_tb` (
  `id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hop` int DEFAULT NULL,
  `wake` int DEFAULT NULL,
  `sen_w` float(10,2) DEFAULT NULL,
  `sen_h` float(10,2) DEFAULT NULL,
  `sen_t` float(10,2) DEFAULT NULL,
  `timetaken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_flood.tb_enduser
DROP TABLE IF EXISTS `tb_enduser`;
CREATE TABLE IF NOT EXISTS `tb_enduser` (
  `id` int NOT NULL AUTO_INCREMENT,
  `latitude` float(10,2) NOT NULL,
  `longitude` float(10,2) NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `indicator` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `information` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timetaken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_flood.tb_sensor
DROP TABLE IF EXISTS `tb_sensor`;
CREATE TABLE IF NOT EXISTS `tb_sensor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `waterlevel` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `temperature` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `humidity` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `timetaken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_flood.tb_user
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `timetaken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Pengeluaran data tidak dipilih.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
