
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
DROP TABLE IF EXISTS `wp_73g366_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_73g366_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_73g366_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_73g366_usermeta` DISABLE KEYS */;
INSERT INTO `wp_73g366_usermeta` VALUES (1,1,'nickname','dev_0c27rr'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_73g366_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_73g366_user_level','10'),(12,1,'dismissed_wp_pointers',''),(13,1,'default_password_nag',''),(14,1,'show_welcome_panel','0'),(15,1,'session_tokens','a:1:{s:64:\"4bfafa3274b64fd9d4e9c869ac5b82bd3e68cbaca35e492f30f7b1fca17e91d6\";a:4:{s:10:\"expiration\";i:1476476133;s:2:\"ip\";s:14:\"200.112.42.130\";s:2:\"ua\";s:82:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:51.0) Gecko/20100101 Firefox/51.0\";s:5:\"login\";i:1476303333;}}'),(16,1,'wp_73g366_dashboard_quick_press_last_post_id','53'),(17,2,'nickname','zara'),(18,2,'first_name','Zara'),(19,2,'last_name',''),(20,2,'description',''),(21,2,'rich_editing','true'),(22,2,'comment_shortcuts','false'),(23,2,'admin_color','fresh'),(24,2,'use_ssl','0'),(25,2,'show_admin_bar_front','true'),(26,2,'wp_73g366_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(27,2,'wp_73g366_user_level','10'),(28,2,'dismissed_wp_pointers',''),(29,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(30,1,'metaboxhidden_nav-menus','a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),(31,1,'manageedit-shop_ordercolumnshidden','a:1:{i:0;s:15:\"billing_address\";}'),(32,3,'nickname','johanna'),(33,3,'first_name','Johanna'),(34,3,'last_name','Cáceres'),(35,3,'description',''),(36,3,'rich_editing','true'),(37,3,'comment_shortcuts','false'),(38,3,'admin_color','fresh'),(39,3,'use_ssl','0'),(40,3,'show_admin_bar_front','true'),(41,3,'wp_73g366_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(42,3,'wp_73g366_user_level','10'),(43,3,'dismissed_wp_pointers',''),(44,1,'closedpostboxes_page','a:2:{i:0;s:4:\"mf_1\";i:1;s:4:\"mf_3\";}'),(45,1,'metaboxhidden_page','a:5:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:11:\"commentsdiv\";i:3;s:7:\"slugdiv\";i:4;s:9:\"authordiv\";}'),(46,1,'billing_first_name',''),(47,1,'billing_last_name',''),(48,1,'billing_company',''),(49,1,'billing_address_1',''),(50,1,'billing_address_2',''),(51,1,'billing_city',''),(52,1,'billing_postcode',''),(53,1,'billing_country',''),(54,1,'billing_state',''),(55,1,'billing_phone',''),(56,1,'billing_email',''),(57,1,'shipping_first_name',''),(58,1,'shipping_last_name',''),(59,1,'shipping_company',''),(60,1,'shipping_address_1',''),(61,1,'shipping_address_2',''),(62,1,'shipping_city',''),(63,1,'shipping_postcode',''),(64,1,'shipping_country',''),(65,1,'shipping_state',''),(66,1,'last_update','1474433109'),(67,4,'nickname','zenemig'),(68,4,'first_name','Matias'),(69,4,'last_name','Gimenez'),(70,4,'description',''),(71,4,'rich_editing','true'),(72,4,'comment_shortcuts','false'),(73,4,'admin_color','fresh'),(74,4,'use_ssl','0'),(75,4,'show_admin_bar_front','true'),(76,4,'wp_73g366_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(77,4,'wp_73g366_user_level','10'),(78,4,'dismissed_wp_pointers',''),(79,4,'session_tokens','a:1:{s:64:\"ed7f6837f4d5e52a4b74f41c527e4a2524861229f3e6ad449ae942ef1d85f03a\";a:4:{s:10:\"expiration\";i:1476732996;s:2:\"ip\";s:13:\"200.112.41.76\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36\";s:5:\"login\";i:1475523396;}}'),(80,4,'manageedit-shop_ordercolumnshidden','a:1:{i:0;s:15:\"billing_address\";}'),(81,4,'wp_73g366_dashboard_quick_press_last_post_id','54'),(82,1,'whatthefile-hide-notice','1'),(83,4,'whatthefile-hide-notice','1');
/*!40000 ALTER TABLE `wp_73g366_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

