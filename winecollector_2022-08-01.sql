# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: winecollector
# Generation Time: 2022-08-01 15:15:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table wines
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wines`;

CREATE TABLE `wines` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wine` varchar(500) NOT NULL,
  `producer` varchar(500) DEFAULT NULL,
  `region` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `drinking_location` varchar(500) DEFAULT NULL,
  `colour` varchar(500) DEFAULT NULL,
  `vintage` year(4) DEFAULT NULL,
  `price_gbp` float unsigned DEFAULT NULL,
  `rating` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;

INSERT INTO `wines` (`id`, `wine`, `producer`, `region`, `date`, `drinking_location`, `colour`, `vintage`, `price_gbp`, `rating`)
VALUES
	(1,'SOTTORIVA COL FONDO','Malibran','Veneto (IT) ','2022-07-01','Marmo','Sparkling','2020',48,4),
	(2,'TULE BIANCO','Cantine Rallo','Sicily (IT)','2021-06-04','Snobby\'s','White','2020',27,3),
	(3,'GRÜNER VELTLINER','Christina','Carnuntum (AU)','2020-08-12','Root','White','2021',28.5,1),
	(4,'JE SUIS AU JARDIN','Christophe Lindenlau','Alsace (FR)','2022-01-30','Box-E','White','2020',47.5,5),
	(5,'JUST ENJOY','Bott Frigyes','Garam V. (SK)','2022-04-02','Kask','Skin Contact','2021',50,5),
	(6,'TULE ROSSO','Cantine Rallo','Sicily (IT)','2020-02-11','Cave','Red','2020',27,2),
	(7,'SANGIOVESE','Fattoria di Sammonta','Tuscany (IT)','2019-12-28','Marmo','Red','2020',39,4),
	(8,'L’APOSTROPHE ','Terres Promises','Provence (FR)','2022-07-11','Marmo','Rose','2020',42,4),
	(9,'KOFOROBÉ','Grégory Guillaume','Ardèche (FR)','2021-10-07','Marmo','Red','2020',47.5,3);

/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
