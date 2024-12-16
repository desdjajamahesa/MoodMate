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

-- Dumping data for table moodmate.mood_entries: ~0 rows (approximately)

-- Dumping data for table moodmate.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `birth_date`, `created_at`) VALUES
	(1, 'Des Djaja Mahesa', 'desdjajamahesa@gmail.com', '$2y$10$Qr4Z48LPZqefJulhtaze7OEVIxLNN6/ODxPX2QKItmUkpQLlQbWIW', '1995-12-02', '2024-12-11 14:23:53'),
	(2, 'Muhamad Alfiansyah', 'muhamadalfiansyah@gmail.com', '$2y$10$fB2bJVGC/BdM4dQf5GDRcunzEsqDz6b9.qkD7DKyQ4829T8RiETPu', '2003-06-18', '2024-12-11 17:18:33');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
