
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wp_73g366_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_73g366_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text,
  `event` varchar(42) NOT NULL,
  `user` varchar(60) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_73g366_revisr` WRITE;
/*!40000 ALTER TABLE `wp_73g366_revisr` DISABLE KEYS */;
INSERT INTO `wp_73g366_revisr` VALUES (1,'2016-10-12 20:19:48','Successfully created a new repository.','init','dev_0c27rr'),(2,'2016-10-12 20:21:13','Successfully backed up the database.','backup','dev_0c27rr'),(3,'2016-10-12 20:21:21','Committed <a href=\"http://dev.merca.cl/site/wp-admin/admin.php?page=revisr_view_commit&commit=46e509d&success=true\">#46e509d</a> to the local repository.','commit','dev_0c27rr'),(4,'2016-10-13 18:53:51','Successfully backed up the database.','backup','Revisr Bot'),(5,'2016-10-13 18:53:51','The daily backup was successful.','backup','Revisr Bot'),(6,'2016-10-13 19:57:26','Error pushing changes to the remote repository.','error','zenemig'),(7,'2016-10-13 20:05:28','Successfully pushed 3 commits to origin/master.','push','zenemig'),(8,'2016-10-13 21:17:43','Successfully backed up the database.','backup','zenemig'),(9,'2016-10-13 21:17:44','Successfully pushed 1 commit to origin/master.','push','zenemig'),(10,'2016-10-13 21:20:16','Successfully backed up the database.','backup','zenemig'),(11,'2016-10-13 21:20:18','Successfully pushed 1 commit to origin/master.','push','zenemig'),(12,'2016-10-13 22:54:35','Successfully imported the database. ','import','dev_0c27rr'),(13,'2016-10-16 04:38:20','Successfully backed up the database.','backup','Revisr Bot'),(14,'2016-10-16 04:38:22','Successfully pushed 1 commit to origin/master.','push','Revisr Bot'),(15,'2016-10-16 04:38:22','The daily backup was successful.','backup','Revisr Bot');
/*!40000 ALTER TABLE `wp_73g366_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

