# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25-0ubuntu0.18.04.2)
# Database: devdb
# Generation Time: 2019-04-29 18:18:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bcards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bcards`;

CREATE TABLE `bcards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `property_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `direct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `bcards` WRITE;
/*!40000 ALTER TABLE `bcards` DISABLE KEYS */;

INSERT INTO `bcards` (`id`, `name`, `title`, `description`, `property_website`, `direct`, `office`, `cell`, `fax`, `address`, `address2`, `city`, `state`, `zip`, `created_at`, `updated_at`)
VALUES
	(1,'Moe Howard','Stooge','Chairman Slapstick Comittee','stoogeland.com','123.123.1234','123.123.1234','123.123.1234','123.123.1234','123 Stooge Lane','','Hollywood','CA','95114','2019-04-25 01:19:24','2019-04-25 01:19:24'),
	(2,'Minnie Mouse','Empress','Kingdom of Mouseland',NULL,'231.231.2312',NULL,NULL,NULL,'123 Main Street','Suite 1212','Disneyland','CA','95113','2019-04-26 04:06:44','2019-04-26 04:06:44'),
	(3,'Clark Kent','Superman','Protector of Earth','super.com','123.123.1122','123.123.1122','123.123.1122','123.123.1122','123 Main Street',NULL,'Metropolis City','NY','11011','2019-04-26 19:51:38','2019-04-26 19:51:38'),
	(4,'Clark Kent','Emperor','Kingdom of Mouseland','super.com','8132549444',NULL,'231.231.2312','123.123.1122','123 Main Street','suite 2222','Metropolis City','NY','11011','2019-04-29 17:43:02','2019-04-29 17:43:02');

/*!40000 ALTER TABLE `bcards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(3,'2014_10_12_000000_create_users_table',1),
	(4,'2014_10_12_100000_create_password_resets_table',1),
	(5,'2019_04_24_221501_create_bcards_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `title`, `description`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Allen Cohen','azc666@gmail.com',NULL,'$2y$10$MM07uMSBFByudem7fsVa5eOqZ3GmShj7YIvZM3Ff/wccmDYf.zqli','Emperor','Planet Leader',NULL,'2019-04-22 04:51:18','2019-04-22 04:51:18'),
	(2,'Moe Howard','moe@test.com',NULL,'$2y$10$MM07uMSBFByudem7fsVa5eOqZ3GmShj7YIvZM3Ff/wccmDYf.zqli','Stooge','ASPCA',NULL,'2019-04-22 04:51:18','2019-04-22 04:51:18');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
