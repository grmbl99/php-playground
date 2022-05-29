DROP TABLE IF EXISTS `leden`;
DROP TABLE IF EXISTS `diners`;

--
-- Table structure for table `leden`
--

CREATE TABLE `leden` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Table structure for table `tasks`
--

CREATE TABLE `diners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `leden`
--

LOCK TABLES `leden` WRITE;
INSERT INTO `leden` VALUES (1,'daan','test123!'),(2,'jan','test456!'),(3,'puk','test789!'),(4,'klaas','test012!');
UNLOCK TABLES;

--
-- Dumping data for table `diners`
--

LOCK TABLES `diners` WRITE;
INSERT INTO `diners` VALUES (1,'taak 1','bla bla'),(2,'taak 2','bla bla'),(3,'taak 3','fdssdfsdfsdf');
UNLOCK TABLES;
