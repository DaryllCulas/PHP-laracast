-- MariaDB dump 10.19  Distrib 10.11.7-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_22
-- ------------------------------------------------------
-- Server version	10.11.7-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmail` (`userEmail`),
  KEY `is_active` (`is_active`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'jaqueline.zboncak@example.com','Prof. Luisa O\'Hara V',1,'2014-08-09 01:33:46'),
(2,'milo.hettinger@example.net','Jazmin Rodriguez V',0,'1992-05-11 14:34:15'),
(3,'dickinson.alena@example.net','Ms. Colleen Conroy Jr.',1,'1987-03-24 14:06:46'),
(4,'yjones@example.com','Opal Carroll DDS',1,'2023-10-27 12:48:43'),
(5,'shanon62@example.org','Hubert Fay',1,'2000-08-11 20:21:23'),
(6,'janick.johnson@example.org','Prof. Maxime Herzog I',0,'2000-02-26 20:42:49'),
(7,'lacy.hirthe@example.org','Desmond Turcotte V',0,'1999-11-02 17:21:42'),
(8,'aparker@example.com','Creola Kessler',0,'2003-10-17 03:19:16'),
(9,'jacky.lueilwitz@example.net','Rod O\'Hara MD',0,'2018-12-12 14:20:42'),
(10,'omaggio@example.com','Ara Schneider',0,'2005-11-29 04:23:01'),
(11,'ortiz.jenifer@example.com','Brittany Bergnaum',0,'1977-04-18 13:12:53'),
(12,'austen77@example.com','Gage Yundt',1,'1971-02-14 16:47:27'),
(13,'mhagenes@example.net','Dr. Brenden Upton DVM',1,'2013-10-31 12:02:14'),
(14,'vwiza@example.org','Una Breitenberg V',1,'2015-07-06 14:44:31'),
(15,'xsanford@example.com','Jamaal Donnelly',0,'1977-07-10 16:15:03'),
(16,'stamm.leila@example.com','Mia Breitenberg',1,'2018-06-10 21:10:18'),
(17,'bailey.oliver@example.org','Izabella Boyle',1,'1996-04-09 00:44:40'),
(18,'gthiel@example.net','Felicita Cole',0,'1978-12-31 17:36:33'),
(19,'sauer.catalina@example.com','Grant Shields',0,'2019-07-21 12:28:23'),
(20,'dboehm@example.com','Antonia Kemmer',1,'1993-08-01 14:25:58'),
(21,'kutch.peter@example.com','Mr. Vito Willms II',0,'1993-06-20 16:16:30'),
(22,'macejkovic.evan@example.com','Lolita Rau II',1,'1975-07-21 00:37:39'),
(23,'dibbert.arnold@example.org','Gerardo Batz II',1,'2016-12-17 22:05:55'),
(24,'edd.abshire@example.net','Scottie Dare',1,'2004-07-04 20:34:04'),
(25,'dejuan.kutch@example.org','Dr. Jonathan Hoeger DDS',0,'2021-03-29 13:10:31'),
(26,'amani77@example.net','Kareem Ortiz',0,'1986-05-16 00:07:38'),
(27,'soledad42@example.com','Benton Lakin',1,'1972-12-24 06:13:05'),
(28,'cgoyette@example.org','Arielle Rohan',1,'2009-07-21 04:18:17'),
(29,'claudine40@example.net','Dr. Erick Jenkins',0,'2013-09-29 11:37:15'),
(30,'daphnee84@example.org','Hosea Torp',0,'2015-12-22 00:39:12'),
(31,'lstroman@example.net','Dr. Jordy Wiza I',0,'1986-05-08 13:50:25'),
(32,'titus12@example.org','Gilberto Goldner I',0,'2021-11-16 16:42:18'),
(33,'eloy93@example.org','Alexis Hilll',0,'1992-10-23 05:36:32'),
(34,'dion32@example.net','Jeff Turcotte V',0,'2007-09-29 02:52:23'),
(35,'elehner@example.org','Emelia Trantow',1,'1999-04-03 08:29:46'),
(36,'garrett.pouros@example.com','Maritza Schowalter',1,'1979-10-24 20:32:53'),
(37,'brain11@example.net','Mr. Raleigh Runolfsdottir DDS',0,'1994-02-13 00:32:33'),
(38,'myost@example.com','Alize Gerlach III',0,'2018-05-08 12:49:03'),
(39,'tracey.hettinger@example.com','Clementina Satterfield MD',0,'1996-11-07 13:12:38'),
(40,'isac54@example.com','Violet Zulauf',0,'2021-03-26 17:06:01'),
(41,'lschmidt@example.net','Prof. Jaqueline Eichmann',0,'2002-10-24 14:50:32'),
(42,'weldon.kessler@example.net','Dr. Hoyt McLaughlin Jr.',1,'2008-08-20 11:19:29'),
(43,'hermiston.herminio@example.com','Prof. Madelynn Kunze',1,'1977-01-29 04:21:39'),
(44,'walsh.quinn@example.com','Dr. Caitlyn Gerlach II',0,'2023-06-19 14:00:09'),
(45,'kulas.daija@example.org','Helena Dare',0,'1977-04-27 04:48:14'),
(46,'hessel.evangeline@example.com','Nestor Lebsack',0,'2014-07-27 16:23:38'),
(47,'champlin.raquel@example.org','Prof. Virginie Howe II',0,'1974-07-23 13:56:35'),
(48,'kautzer.amely@example.org','Drew Borer',1,'1974-10-31 00:17:40'),
(49,'reed.zulauf@example.com','Helene Stanton',0,'1972-11-02 05:10:16'),
(50,'tromp.ralph@example.com','Prof. Aubrey Hoeger Jr.',0,'1990-05-08 05:42:59'),
(51,'harrison.ebert@example.com','Yadira Casper',0,'1976-09-16 19:20:05'),
(52,'austen53@example.net','Mrs. Breana Stamm Jr.',1,'1989-11-20 22:20:01'),
(53,'adrienne.schumm@example.net','Ms. Frida Oberbrunner',0,'2002-05-28 13:11:56'),
(54,'qhyatt@example.org','Ms. Aylin Considine',1,'1996-03-19 16:23:29'),
(55,'mante.lauriane@example.com','Dr. Erwin Brakus',0,'2000-04-09 03:10:01'),
(56,'rogelio78@example.com','Prof. Scarlett Blick II',0,'1975-11-28 23:44:41'),
(57,'hansen.yoshiko@example.com','Dallin Bergstrom',0,'1992-06-02 06:45:01'),
(58,'wbrakus@example.net','Cale Torphy',1,'1996-10-04 03:49:56'),
(59,'juliet60@example.com','Jaleel Bernhard',0,'1994-11-13 05:35:12'),
(60,'xdare@example.com','Jules Bahringer',1,'2005-08-04 00:37:21'),
(61,'sjast@example.net','Oren Breitenberg',1,'2006-03-09 21:20:20'),
(62,'abbott.eugenia@example.org','Damaris Marquardt',1,'1995-12-22 22:58:27'),
(63,'lorena81@example.net','Greyson Lang',0,'1971-01-06 10:59:03'),
(64,'heller.winnifred@example.net','Rasheed Shields',1,'1989-06-23 02:41:13'),
(65,'bednar.rosetta@example.org','Karley Roob',1,'2002-02-18 03:17:52'),
(66,'ckoelpin@example.com','Dr. Gene Morar',1,'1973-01-13 19:31:56'),
(67,'emilia97@example.com','Prof. Eladio Schaden DVM',0,'2016-10-22 09:29:23'),
(68,'kristopher85@example.com','Emiliano Flatley',1,'1987-05-01 01:04:30'),
(69,'elias.feil@example.net','Frankie Leuschke',0,'1980-04-20 01:27:20'),
(70,'kovacek.evelyn@example.com','Adriana Weber',0,'2000-08-19 21:50:10'),
(71,'thad.ledner@example.com','Mrs. Berniece Mayer DDS',0,'2015-02-13 20:47:49'),
(72,'julio39@example.net','Gardner Kreiger',1,'1984-06-28 06:43:23'),
(73,'eudora48@example.net','Meggie Franecki',0,'1970-01-25 10:48:01'),
(74,'rowe.audie@example.org','Rico Gutkowski',1,'2016-11-21 22:45:50'),
(75,'jamarcus.stoltenberg@example.com','Silas Brown',1,'1976-05-07 08:25:07'),
(76,'mayer.eliza@example.com','Keeley Toy',0,'2013-06-23 23:17:35'),
(77,'fadel.eva@example.net','Prof. Madilyn Cormier Jr.',0,'1991-04-01 19:23:19'),
(78,'olson.mariane@example.org','Mr. Norris Watsica',1,'1973-12-02 12:15:31'),
(79,'dorris75@example.net','Ricky Cormier',0,'1974-05-26 00:50:04'),
(80,'baumbach.hope@example.net','Daron Wilkinson',0,'2009-01-06 01:19:47'),
(81,'kuvalis.jacinto@example.com','Nelle Lockman',0,'1981-10-24 13:02:20'),
(82,'xkovacek@example.net','Vickie Stracke DVM',1,'2005-09-24 05:21:53'),
(83,'jedidiah.yundt@example.com','Mrs. Meaghan Ondricka PhD',0,'2012-01-03 13:15:52'),
(84,'hzemlak@example.com','Osbaldo O\'Hara',0,'1993-09-12 14:56:35'),
(85,'natasha.jerde@example.net','Kallie Wisoky Jr.',0,'1978-04-24 11:48:45'),
(86,'isabella.erdman@example.com','Lavonne Wolff',1,'2010-02-21 22:19:08'),
(87,'hannah34@example.org','Ms. Liliana Marquardt',1,'2011-08-13 09:36:25'),
(88,'preston.farrell@example.net','Jocelyn Heidenreich',1,'2002-12-21 05:51:48'),
(89,'willie27@example.org','Scotty Cole',1,'1999-11-07 08:01:32'),
(90,'maximus39@example.net','Mr. Henry Lynch PhD',0,'2007-09-30 22:50:47'),
(91,'kitty.becker@example.org','Prof. Nestor Stanton',0,'1974-04-20 08:56:00'),
(92,'ratke.zoie@example.net','Cole Maggio',1,'1995-01-14 10:25:41'),
(93,'friedrich77@example.com','Mrs. Mertie Nicolas IV',0,'1981-03-03 11:11:25'),
(94,'ethelyn.boyer@example.org','Isabella Goodwin',1,'1997-08-18 09:21:48'),
(95,'obrown@example.net','Mrs. Lori Marvin III',1,'1974-07-18 07:39:22'),
(96,'dickinson.kathryn@example.com','Elta Lynch II',1,'2015-08-03 11:31:34'),
(97,'rherman@example.org','Rasheed Greenholt',0,'1998-03-11 21:37:23'),
(98,'annalise73@example.net','Kali Bernhard',1,'2018-06-01 18:37:48'),
(99,'maeve.hauck@example.com','Justus Borer',1,'2014-09-19 09:48:00'),
(100,'lindsay.huel@example.org','Nicklaus Bartell',1,'2008-02-29 13:19:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-20 17:48:44
