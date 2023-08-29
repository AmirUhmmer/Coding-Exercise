-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for frontdeskapp
CREATE DATABASE IF NOT EXISTS `frontdeskapp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `frontdeskapp`;

-- Dumping structure for table frontdeskapp.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `phone_number` varchar(255) NOT NULL DEFAULT '',
  `package_size` varchar(255) NOT NULL DEFAULT '',
  `package_state` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table frontdeskapp.user_info: ~26 rows (approximately)
INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `phone_number`, `package_size`, `package_state`) VALUES
	(1, 'john', 'doe', '999999999', 'Small box', 0),
	(2, 'emilia', 'clark', '888888888', 'Medium box', 1),
	(3, 'will', 'smith', '777777777', 'Large box', 1),
	(4, 'ryan', 'reynolds', '66666666', 'Small box', 0),
	(5, 'Jazmir', 'Julio', '000000000', 'Large box', 1),
	(6, 'Jazmir Bernard', 'Julio', '949876041', 'Medium box', 0),
	(7, 'Belle', 'Diora', '949876041', 'Medium box', 1),
	(8, 'Raine', 'Samantha', '000000000', 'Large box', 1),
	(9, 'Gabriela', 'Bonifacio', '335780700', 'Large box', 1),
	(10, 'Rizal', 'Guanzon', '000000000', 'Large box', 1),
	(11, 'Christian', 'Jose', '000000000', 'Large box', 0),
	(12, 'Jazmir Bernard', 'Guanzon', '000000000', 'Large box', 0),
	(13, 'Reyes', 'James', '596922611', 'Large box', 1),
	(14, 'Mae', 'de la Cruz', '570781711', 'Large box', 1),
	(15, 'Janella', 'Santiago', '011407256', 'Large box', 1),
	(16, 'Janella', 'de la Cruz', '000000000', 'Small box', 1),
	(17, 'Gabriela', 'Jose', '000000000', 'Medium box', 1),
	(18, 'Mae', 'Bonifacio', '949876041', 'Large box', 1),
	(19, 'Jazmir', 'Bonifacio', '949876041', 'Large box', 0),
	(20, 'Jazmir', 'Julio', '000000000', 'Small box', 1),
	(21, 'Mae', 'Julio', '000000000', 'Small box', 1),
	(22, 'Guanzon', 'Santiago', '787247623', 'Medium box', 1),
	(23, '', '', '', 'Small box', 0),
	(24, '', '', '', 'Small box', 0),
	(25, '', '', '', 'Small box', 0),
	(26, '', '', '', 'Small box', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
