-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour laravel9
CREATE DATABASE IF NOT EXISTS `laravel9` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel9`;

-- Listage de la structure de la table laravel9. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. feeders
CREATE TABLE IF NOT EXISTS `feeders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `designation` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `api` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.feeders : ~3 rows (environ)
/*!40000 ALTER TABLE `feeders` DISABLE KEYS */;
INSERT INTO `feeders` (`id`, `designation`, `ip`, `value`, `name`, `api`, `created_at`, `updated_at`) VALUES
	(2, 'nguba', 'https://api.thingspeak.com/update?api_key=KV5SBY9K5FGM4TRL&field2', 0, 'field2', 'https://api.thingspeak.com/channels/1942024/fields/2.json?results=2', '2022-12-01 03:23:25', '2022-12-03 01:37:24'),
	(3, 'essence', 'https://api.thingspeak.com/update?api_key=KV5SBY9K5FGM4TRL&field3', 0, 'field3', 'https://api.thingspeak.com/channels/1942024/fields/3.json?results=2', '2022-12-01 03:26:10', '2022-12-04 16:52:09'),
	(4, 'ISP', 'https://api.thingspeak.com/update?api_key=KV5SBY9K5FGM4TRL&field1', 0, 'field1', 'https://api.thingspeak.com/channels/1942024/fields/1.json?results=2', '2022-12-03 00:10:57', '2022-12-03 01:34:13');
/*!40000 ALTER TABLE `feeders` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. horaires
CREATE TABLE IF NOT EXISTS `horaires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `HeureDebut` time NOT NULL,
  `HeureFin` time NOT NULL,
  `Type` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `horaires_feeder_id_foreign` (`feeder_id`),
  CONSTRAINT `horaires_feeder_id_foreign` FOREIGN KEY (`feeder_id`) REFERENCES `feeders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.horaires : ~6 rows (environ)
/*!40000 ALTER TABLE `horaires` DISABLE KEYS */;
INSERT INTO `horaires` (`id`, `HeureDebut`, `HeureFin`, `Type`, `feeder_id`, `created_at`, `updated_at`) VALUES
	(1, '01:00:00', '05:00:00', '0', 4, '2022-12-03 00:22:26', '2022-12-03 00:22:26'),
	(2, '05:00:00', '08:00:00', '1', 4, '2022-12-03 00:23:06', '2022-12-03 00:23:06'),
	(3, '08:00:00', '12:00:00', '0', 4, '2022-12-03 00:23:34', '2022-12-03 00:26:02'),
	(4, '10:00:00', '15:30:00', '1', 4, '2022-12-03 00:23:50', '2022-12-03 00:23:50'),
	(5, '15:30:00', '22:00:00', '0', 4, '2022-12-03 00:24:16', '2022-12-03 00:24:52'),
	(7, '22:00:00', '01:00:00', '1', 4, '2022-12-03 00:36:00', '2022-12-03 00:36:00');
/*!40000 ALTER TABLE `horaires` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.migrations : ~7 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(43, '2014_10_12_000000_create_users_table', 1),
	(44, '2014_10_12_100000_create_password_resets_table', 1),
	(45, '2019_08_19_000000_create_failed_jobs_table', 1),
	(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(47, '2022_11_26_114724_create_feeders_table', 1),
	(48, '2022_11_26_114817_create_programs_table', 1),
	(49, '2022_11_26_114832_create_horaires_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. programs
CREATE TABLE IF NOT EXISTS `programs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `feeder_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `dateP` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `programs_feeder_id_foreign` (`feeder_id`),
  KEY `programs_user_id_foreign` (`user_id`),
  CONSTRAINT `programs_feeder_id_foreign` FOREIGN KEY (`feeder_id`) REFERENCES `feeders` (`id`),
  CONSTRAINT `programs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.programs : ~1 rows (environ)
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` (`id`, `feeder_id`, `user_id`, `dateP`, `created_at`, `updated_at`) VALUES
	(9, 4, 1, '2022-12-09 04:24:56', '2022-12-09 04:24:56', '2022-12-09 04:24:56');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;

-- Listage de la structure de la table laravel9. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `sexe` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)66
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table laravel9.users : ~1 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isadmin`, `sexe`, `phone`, `file`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'malipo ngwangwa', 'dieudonneopilam2@gmail.com', NULL, '$2y$10$cYePsKVypy.07K.nFBAgeeLbnxz69oyavwcDBDcKrZQjG.z85cv3u', 1, 'm', '9338998', 'avatars/1669864749.jpg', NULL, NULL, '2022-12-01 03:19:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
