-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hedera_waste
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

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
-- Table structure for table `composting`
--

DROP TABLE IF EXISTS `composting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `composting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(130) DEFAULT NULL,
  `pickup_address` varchar(130) DEFAULT NULL,
  `city` varchar(130) DEFAULT NULL,
  `info` varchar(130) DEFAULT NULL,
  `compost_material` varchar(300) DEFAULT NULL,
  `compost_material_lbs` varchar(130) DEFAULT NULL,
  `timing` varchar(130) DEFAULT NULL,
  `timing2` varchar(130) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `monthx` varchar(100) DEFAULT NULL,
  `yearx` varchar(100) DEFAULT NULL,
  `rewards` varchar(20) DEFAULT NULL,
  `hedera_account` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `composting`
--

LOCK TABLES `composting` WRITE;
/*!40000 ALTER TABLE `composting` DISABLE KEYS */;
INSERT INTO `composting` VALUES (5,'643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','Venus John','venusjohnson@gmail.com',' Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','branches, twigs, dead flower heads, grass cuttings, fallen leaves, fruit dropped from trees, animal or chicken droppings','13','1681832779','Tuesday, April 18, 2023, 11:46 am',51.289257,1.084882,'collected','Apr ','2023 ','1300','0.0.4161416'),(6,'643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','Venus John','venusjohnson@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks',' potato peelings, apple cores, coconut husks, orange peel, cauliflower leaves,Egg Shell ','23.6','1681833564','Tuesday, April 18, 2023, 11:59 am',51.289257,1.084882,'collected','Apr ','2023 ','2360','0.0.4161416'),(7,'643ec26361a511681834595f97ad0763ae541bf7b1fdebb1e3502b5','Richard More','richardmore@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks',' branches, twigs, dead flower heads, grass cuttings, fallen leaves, fruit dropped from trees,','23','1681834810','Tuesday, April 18, 2023, 12:20 pm',51.289257,1.084882,'awaiting','Apr ','2023 ','2300','0.0.4161416');
/*!40000 ALTER TABLE `composting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recycling`
--

DROP TABLE IF EXISTS `recycling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recycling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(130) DEFAULT NULL,
  `pickup_address` varchar(130) DEFAULT NULL,
  `city` varchar(130) DEFAULT NULL,
  `info` varchar(130) DEFAULT NULL,
  `glass` varchar(130) DEFAULT NULL,
  `paper_card` varchar(130) DEFAULT NULL,
  `metals` varchar(130) DEFAULT NULL,
  `plastic` varchar(130) DEFAULT NULL,
  `textiles` varchar(130) DEFAULT NULL,
  `weee_metals` varchar(130) DEFAULT NULL,
  `iba_metals` varchar(130) DEFAULT NULL,
  `other` varchar(130) DEFAULT NULL,
  `timing` varchar(130) DEFAULT NULL,
  `timing2` varchar(130) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `monthx` varchar(100) DEFAULT NULL,
  `yearx` varchar(100) DEFAULT NULL,
  `rewards` varchar(20) DEFAULT NULL,
  `hedera_account` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recycling`
--

LOCK TABLES `recycling` WRITE;
/*!40000 ALTER TABLE `recycling` DISABLE KEYS */;
INSERT INTO `recycling` VALUES (4,'643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','Venus John','venusjohnson@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','12','4','6.8','6','14','9','6','2','1681832409','Tuesday, April 18, 2023, 11:40 am',51.289257,1.084882,'awaiting','Apr ','2023 ','5980','0.0.4161416'),(5,'643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','Venus John','venusjohnson@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','2.4','5','7','9','11','12','6','0','1681832517','Tuesday, April 18, 2023, 11:41 am',51.289257,1.084882,'collected','Apr ','2023 ','5240','0.0.4161416'),(6,'643ec26361a511681834595f97ad0763ae541bf7b1fdebb1e3502b5','Richard More','richardmore@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','2.4','4','7','9','8','9','4','11','1681834659','Tuesday, April 18, 2023, 12:17 pm',51.289257,1.084882,'awaiting','Apr ','2023 ','5440','0.0.4161416'),(7,'643ec26361a511681834595f97ad0763ae541bf7b1fdebb1e3502b5','Richard More','richardmore@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','2.4','2','6','8','11','23','13','6','1681834930','Tuesday, April 18, 2023, 12:22 pm',51.289257,1.084882,'collected','Apr ','2023 ','7140','0.0.4161416'),(8,'643eb845970a21681832005a1abf1231a95f14383c03b26e23261ae','Admin','admin@gmail.com','Abbey Gardens CT2 7EU, Canterbury, Canterbury , England','Canterbury','Thanks','6','7','8','8.4','7','5','8','0','1681840386','Tuesday, April 18, 2023, 1:53 pm',51.289257,1.084882,'collected','Apr ','2023 ','4940','0.0.4127393');
/*!40000 ALTER TABLE `recycling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `data` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `userid` varchar(300) DEFAULT NULL,
  `hedera_account` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (13,'venusjohnson@gmail.com','Venus John','$2y$04$XtgVLH5MZii0odMv/6ANu.eLPFskBN5HkPS1g30ELEQcTWLlSx1iG','Tuesday, April 18, 2023, 7:55 am','1681818901','User',NULL,NULL,'16818189011681818902.png','643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','0.0.4161416'),(15,'admin@gmail.com','Admin','$2y$04$ZZ4E9v2cwMDSRYqdtpyO9uFMW56xWCmOP7a0ewEV6ajpfJtPVVEaa','Tuesday, April 18, 2023, 11:33 am','1681832005','Admin',NULL,NULL,'admin.png','643eb845970a21681832005a1abf1231a95f14383c03b26e23261ae','0.0.4127393'),(16,'richardmore@gmail.com','Richard More','$2y$04$j0rmAbksgSwyrCZxKzaTbux1vq5pSu.lZzDshQSgtK/flqCm41Vzi','Tuesday, April 18, 2023, 12:16 pm','1681834595','User',NULL,NULL,'16818345951681834595.png','643ec26361a511681834595f97ad0763ae541bf7b1fdebb1e3502b5','0.0.4161416');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_recycling`
--

DROP TABLE IF EXISTS `users_recycling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_recycling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(300) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `glass` varchar(130) DEFAULT NULL,
  `paper_card` varchar(130) DEFAULT NULL,
  `metals` varchar(130) DEFAULT NULL,
  `plastic` varchar(130) DEFAULT NULL,
  `textiles` varchar(130) DEFAULT NULL,
  `weee_metals` varchar(130) DEFAULT NULL,
  `iba_metals` varchar(130) DEFAULT NULL,
  `other` varchar(130) DEFAULT NULL,
  `compost_material` varchar(100) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `total_rewards` varchar(100) DEFAULT NULL,
  `hedera_account` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_recycling`
--

LOCK TABLES `users_recycling` WRITE;
/*!40000 ALTER TABLE `users_recycling` DISABLE KEYS */;
INSERT INTO `users_recycling` VALUES (10,'643e8515c7f831681818901d52254b23c225eacf0fe16fd420cfedc','Venus John','16818189011681818902.png','venusjohnson@gmail.com','England','14.4','9','13.8','15','25','21','12','2','36.6','90','14880','0.0.4161416'),(12,'643eb845970a21681832005a1abf1231a95f14383c03b26e23261ae','Admin','admin.png','admin@gmail.com','England','6','7','8','8.4','7','5','8','0','0','30','4940','0.0.4127393'),(13,'643ec26361a511681834595f97ad0763ae541bf7b1fdebb1e3502b5','Richard More','16818345951681834595.png','richardmore@gmail.com','England','4.8','6','13','17','19','32','17','17','23','10','14880','0.0.4161416');
/*!40000 ALTER TABLE `users_recycling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hedera_waste'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-21 14:49:12
