-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE `drivers` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `product_type` enum('TITAN','GeForce','Legacy','3D vision','ION') NOT NULL,
  `product_series` enum('RTX 30','RTX 30 laptop','RTX 20','RTX 20 laptop','GTX 16','GXT 10','GXT 10 laptop','GTX 900','GTX 900 laptop','MX','TITAN','QUADRO 2 pro','3D Vision','ION desktop','ION laptop') NOT NULL,
  `os` enum('Windows 11 64-bit','Windows 10 64-bit','Windows 10 32-bit','Windows 8.1 64-bit','Windows 8.1 32-bit','Windows 8 64-bit','Windows 8 32-bit','Windows 7 64-bit','Windows 7 32-bit','Linux 64-bit','Linux 32-bit') NOT NULL,
  `language` enum('enghlish (UK)','enghlish (US)','japanese','deutsch','korean') NOT NULL,
  `download_type` enum('game ready','studio') NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `drivers` (`id`, `version`, `name`, `release_date`, `product_type`, `product_series`, `os`, `language`, `download_type`, `link`, `created_at`, `updated_at`) VALUES
(1,	'512.59 WHQL',	'RTX 3090',	'2022-04-26',	'GeForce',	'RTX 30',	'Windows 11 64-bit',	'enghlish (UK)',	'game ready',	'https://us.download.nvidia.com/Windows/512.59/512.59-desktop-win10-win11-64bit-international-dch-whql.exe',	'2022-04-28 11:53:27',	'2022-04-28 11:55:25'),
(2,	'512.15',	'RTX 2080 WHQL',	'2022-03-22',	'GeForce',	'RTX 20',	'Windows 11 64-bit',	'enghlish (UK)',	'studio',	'https://us.download.nvidia.com/Windows/512.15/512.15-desktop-win10-win11-64bit-international-nsd-dch-whql.exe',	'2022-04-28 12:19:32',	'2022-04-28 12:19:32');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5,	'2022-04-28-015233',	'App\\Database\\Migrations\\Products',	'default',	'App',	1651113477,	1),
(6,	'2022-04-28-020255',	'App\\Database\\Migrations\\Drivers',	'default',	'App',	1651113477,	1);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `series` enum('RTX 30','RTX 30 Laptop','RTX 20','RTX 20 Laptop','GTX 16') NOT NULL,
  `architecture` varchar(255) NOT NULL,
  `cuda` int(11) NOT NULL,
  `boost_clock` float NOT NULL,
  `base_clock` float NOT NULL,
  `memory_size` varchar(255) NOT NULL,
  `memory_bandwith` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `slot` int(5) NOT NULL,
  `power` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `series`, `architecture`, `cuda`, `boost_clock`, `base_clock`, `memory_size`, `memory_bandwith`, `length`, `width`, `slot`, `power`, `photo`, `created_at`, `updated_at`) VALUES
(1,	'RTX 3090 TI',	'RTX 30',	'Ampere',	10752,	1.86,	1.67,	'24 GB GDDR6X',	384,	313,	138,	3,	450,	'3090ti.jpg',	'2022-04-28 09:39:21',	'2022-04-28 11:22:20'),
(2,	'3070 TI',	'RTX 30',	'Ampere',	6144,	1.77,	1.58,	'8 GB GDDR6',	256,	267,	112,	2,	290,	NULL,	'2022-04-28 09:40:25',	'2022-04-28 11:22:26');

-- 2022-04-28 06:54:04
