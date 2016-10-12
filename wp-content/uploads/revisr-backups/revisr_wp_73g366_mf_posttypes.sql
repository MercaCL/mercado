
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
DROP TABLE IF EXISTS `wp_73g366_mf_posttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_73g366_mf_posttypes` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci,
  `arguments` text COLLATE utf8mb4_unicode_520_ci,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_73g366_mf_posttypes` WRITE;
/*!40000 ALTER TABLE `wp_73g366_mf_posttypes` DISABLE KEYS */;
INSERT INTO `wp_73g366_mf_posttypes` VALUES (1,'artista','Artista','Ficha art&iacute;stica','a:5:{s:4:\"core\";a:6:{s:2:\"id\";N;s:5:\"label\";s:7:\"Artista\";s:6:\"labels\";s:8:\"Artistas\";s:4:\"type\";s:7:\"artista\";s:11:\"description\";s:22:\"Ficha art&iacute;stica\";s:8:\"quantity\";s:1:\"0\";}s:7:\"support\";a:8:{s:5:\"title\";s:1:\"1\";s:6:\"editor\";s:1:\"1\";s:9:\"thumbnail\";s:1:\"1\";s:7:\"excerpt\";s:1:\"1\";s:10:\"trackbacks\";s:1:\"1\";s:13:\"custom-fields\";s:1:\"1\";s:8:\"comments\";s:1:\"1\";s:9:\"revisions\";s:1:\"1\";}s:8:\"taxonomy\";a:2:{s:8:\"category\";s:1:\"1\";s:8:\"post_tag\";s:1:\"1\";}s:6:\"option\";a:17:{s:6:\"public\";s:1:\"1\";s:18:\"publicly_queryable\";s:1:\"1\";s:19:\"exclude_from_search\";s:1:\"0\";s:7:\"show_ui\";s:1:\"1\";s:12:\"show_in_menu\";s:1:\"1\";s:13:\"menu_position\";s:0:\"\";s:15:\"capability_type\";s:4:\"post\";s:12:\"hierarchical\";s:1:\"1\";s:11:\"has_archive\";s:1:\"1\";s:16:\"has_archive_slug\";s:8:\"artistas\";s:7:\"rewrite\";s:1:\"1\";s:12:\"rewrite_slug\";s:0:\"\";s:10:\"with_front\";s:1:\"1\";s:9:\"query_var\";s:1:\"1\";s:10:\"can_export\";s:1:\"1\";s:17:\"show_in_nav_menus\";s:1:\"1\";s:9:\"menu_icon\";s:0:\"\";}s:5:\"label\";a:13:{s:4:\"name\";s:8:\"Artistas\";s:13:\"singular_name\";s:7:\"Artista\";s:7:\"add_new\";s:11:\"Add Artista\";s:9:\"all_items\";s:12:\"All Artistas\";s:12:\"add_new_item\";s:15:\"Add New Artista\";s:9:\"edit_item\";s:12:\"Edit Artista\";s:8:\"new_item\";s:11:\"New Artista\";s:9:\"view_item\";s:12:\"View Artista\";s:12:\"search_items\";s:15:\"Search Artistas\";s:9:\"not_found\";s:17:\"No Artistas found\";s:18:\"not_found_in_trash\";s:26:\"No Artistas found in Trash\";s:17:\"parent_item_colon\";s:15:\"Parent Artista:\";s:9:\"menu_name\";s:8:\"Artistas\";}}',1);
/*!40000 ALTER TABLE `wp_73g366_mf_posttypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

