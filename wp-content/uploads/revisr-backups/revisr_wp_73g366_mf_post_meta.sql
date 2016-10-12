
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
DROP TABLE IF EXISTS `wp_73g366_mf_post_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_73g366_mf_post_meta` (
  `meta_id` int(11) NOT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `field_count` int(11) NOT NULL,
  `group_count` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `idx_post_field` (`post_id`,`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_73g366_mf_post_meta` WRITE;
/*!40000 ALTER TABLE `wp_73g366_mf_post_meta` DISABLE KEYS */;
INSERT INTO `wp_73g366_mf_post_meta` VALUES (213,'modulo_landing_imagen_fondo',1,1,2),(214,'modulo_landing_anchor',1,1,2),(215,'modulo_landing_imagen_fondo_url',1,1,2),(216,'modulo_landing_imagen_fondo_repeat',1,1,2),(217,'modulo_landing_logo',1,1,2),(218,'modulo_landing_video_fondo_url',1,1,2),(219,'modulo_landing_titulo',1,1,2),(220,'modulo_landing_cuerpo',1,1,2),(221,'modulo_landing_color_texto',1,1,2),(222,'modulo_landing_color_fondo',1,1,2),(223,'modulo_landing_logo_catalogo',1,1,2),(224,'modulo_landing_ancho_100',1,1,2),(225,'modulo_landing_ancho_maximo',1,1,2),(226,'modulo_landing_altura_minima',1,1,2),(227,'modulo_landing_altura_maxima',1,1,2),(228,'modulo_landing_margin',1,1,2),(229,'modulo_landing_fondo_fijo',1,1,2),(230,'modulo_landing_barra_lateral_derecha',1,1,2),(231,'modulo_landing_titulo_barra_derecha',1,1,2),(232,'modulo_landing_logo_sidebar',1,1,2),(233,'modulo_landing_mostrar_barra_lateral',1,1,2),(234,'modulo_landing_ancho_barra_lateral',1,1,2),(235,'modulo_landing_mostrar_menu_redes_sociales',1,1,2),(236,'modulo_landing_color_barra_lateral',1,1,2),(237,'modulo_landing_padding_barra_lateral',1,1,2),(238,'modulo_landing_mascara',1,1,2),(239,'diseno_header_logo_expandido',1,1,2),(240,'diseno_filtro_fotografias',1,1,2),(241,'diseno_boton_radio_esquina',1,1,2),(242,'diseno_ocultar_header_sitio',1,1,2),(243,'diseno_open_graph_imagen',1,1,2),(244,'diseno_open_graph_descripcion',1,1,2),(245,'diseno_fondo',1,1,2),(246,'diseno_mascara',1,1,2),(247,'diseno_fondo_url',1,1,2),(248,'diseno_fondo_repeat',1,1,2),(249,'diseno_color_principal',1,1,2),(250,'diseno_color_secundario',1,1,2),(251,'diseno_color_texto',1,1,2),(252,'diseno_color_fondo',1,1,2),(253,'diseno_color_texto_boton',1,1,2),(254,'diseno_tamano_tipografia',1,1,2),(255,'diseno_tamano_titulos',1,1,2),(256,'diseno_link_tipografia',1,1,2),(257,'diseno_import_tipografia',1,1,2),(258,'diseno_css_tipografia',1,1,2),(259,'diseno_import_tipografia_titulos',1,1,2),(260,'diseno_tipografia_titulos',1,1,2),(261,'diseno_sombra_texto',1,1,2),(561,'modulo_landing_imagen_fondo',1,1,51),(562,'modulo_landing_fondo_alineacion',1,1,51),(563,'modulo_landing_fondo_tamano',1,1,51),(564,'modulo_landing_anchor',1,1,51),(565,'modulo_landing_imagen_fondo_url',1,1,51),(566,'modulo_landing_imagen_fondo_repeat',1,1,51),(567,'modulo_landing_logo',1,1,51),(568,'modulo_landing_video_fondo_url',1,1,51),(569,'modulo_landing_titulo',1,1,51),(570,'modulo_landing_cuerpo',1,1,51),(571,'modulo_landing_color_texto',1,1,51),(572,'modulo_landing_color_fondo',1,1,51),(573,'modulo_landing_logo_catalogo',1,1,51),(574,'modulo_landing_alineacion',1,1,51),(575,'modulo_landing_ancho_100',1,1,51),(576,'modulo_landing_ancho_maximo',1,1,51),(577,'modulo_landing_altura_minima',1,1,51),(578,'modulo_landing_altura_maxima',1,1,51),(579,'modulo_landing_margin',1,1,51),(580,'modulo_landing_fondo_fijo',1,1,51),(581,'modulo_landing_barra_lateral_derecha',1,1,51),(582,'modulo_landing_titulo_barra_derecha',1,1,51),(583,'modulo_landing_logo_sidebar',1,1,51),(584,'modulo_landing_mostrar_barra_lateral',1,1,51),(585,'modulo_landing_ancho_barra_lateral',1,1,51),(586,'modulo_landing_mostrar_menu_redes_sociales',1,1,51),(587,'modulo_landing_color_barra_lateral',1,1,51),(588,'modulo_landing_padding_barra_lateral',1,1,51),(589,'modulo_landing_mascara',1,1,51),(590,'diseno_header_logo_expandido',1,1,51),(591,'diseno_filtro_fotografias',1,1,51),(592,'diseno_boton_radio_esquina',1,1,51),(593,'diseno_ocultar_header_sitio',1,1,51),(594,'diseno_open_graph_imagen',1,1,51),(595,'diseno_open_graph_descripcion',1,1,51),(596,'diseno_fondo',1,1,51),(597,'diseno_mascara',1,1,51),(598,'diseno_fondo_url',1,1,51),(599,'diseno_fondo_repeat',1,1,51),(600,'diseno_color_principal',1,1,51),(601,'diseno_color_secundario',1,1,51),(602,'diseno_color_texto',1,1,51),(603,'diseno_color_fondo',1,1,51),(604,'diseno_color_texto_boton',1,1,51),(605,'diseno_alineacion_general',1,1,51),(606,'diseno_tamano_tipografia',1,1,51),(607,'diseno_tamano_titulos',1,1,51),(608,'diseno_link_tipografia',1,1,51),(609,'diseno_import_tipografia',1,1,51),(610,'diseno_css_tipografia',1,1,51),(611,'diseno_import_tipografia_titulos',1,1,51),(612,'diseno_tipografia_titulos',1,1,51),(613,'diseno_sombra_texto',1,1,51);
/*!40000 ALTER TABLE `wp_73g366_mf_post_meta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

