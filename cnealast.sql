-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2013 at 11:46 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.7

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_lang_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `actas`
--

CREATE TABLE IF NOT EXISTS `actas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `actas`
--

INSERT INTO `actas` (`id`, `nombre`, `ordinal`) VALUES
(13, 'test 2', 3),
(14, 'test 3', 0),
(15, 'test 4', 2),
(16, 'test 5', 1),
(17, '121', 4);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` smallint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `obj_id` smallint(9) DEFAULT NULL,
  `obj_class` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `obj_id`, `obj_class`) VALUES
(1, 'default', 12, 'actas'),
(2, 'default', 13, 'actas'),
(3, 'default', 14, 'actas'),
(4, 'default', 15, 'actas'),
(5, 'default', 16, 'actas'),
(6, 'default', 1, 'novedad'),
(7, 'default', 2, 'novedad'),
(8, 'default', 3, 'novedad'),
(9, 'default', 4, 'novedad'),
(10, 'default', 5, 'novedad'),
(14, 'default', 9, 'novedad'),
(15, 'default', 10, 'novedad'),
(16, 'default', 11, 'novedad'),
(17, 'default', 17, 'actas');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` longtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('21ee6f229b423318d4917dc93a6c93ee', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:22.0) Gecko/20100101 Firefox/22.0', 1374244493, ''),
('b91435359df335f2744b1a17e005cf67', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:22.0) Gecko/20100101 Firefox/22.0', 1374095811, ''),
('f435c0c1f0a63a940583769b797bb3d9', '127.0.0.1', 'Opera/9.80 (X11; Linux x86_64; Edition Linux Mint) Presto/2.12.388 Version/12.16', 1374096297, ''),
('f87a4efc648a60a4ce680256a8738c13', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1', 1347556593, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:7:"rodrigo";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `documentos_intereses`
--

CREATE TABLE IF NOT EXISTS `documentos_intereses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `documentos_intereses`
--

INSERT INTO `documentos_intereses` (`id`, `nombre`, `link`, `ordinal`) VALUES
(2, '897', 'http://localhost/code-igniter-shared-project/trunk/index.php', 0),
(3, '654654', '654654654', 1),
(4, 'tests', 'http://localhost/code-igniter-shared-project/trunk/index.php', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enlaces_intereses`
--

CREATE TABLE IF NOT EXISTS `enlaces_intereses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `enlaces_intereses`
--

INSERT INTO `enlaces_intereses` (`id`, `nombre`, `link`, `ordinal`) VALUES
(5, 'Soy valida ;)', 'http://localhost/code-igniter-shared-project/trunk/index.php', 3);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` smallint(9) NOT NULL AUTO_INCREMENT,
  `path` varchar(256) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `album_id` smallint(9) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `name`, `type`, `album_id`, `ordinal`) VALUES
(11, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/2/dcdd22de631406053f0380b43dc7b159.jpg', '267269.jpg', 'jpg', 2, 0),
(12, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/2/fbf8b6a6ca14fc9331cbf8ca381a0cff.png', '287828.png', 'png', 2, 2),
(13, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/2/d325047dee1623bdeb70618b55c0db79.jpg', '306046.jpg', 'jpg', 2, 1),
(26, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/4/2d5c5aa9e6d9bb77ace8be7433d34cff.jpg', '3pyramids_1024.jpg', 'jpg', 4, 1),
(27, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/4/d01d40f9d91f0eecf5eeaa6de38a0726.jpg', '1024-768-59531.jpg', 'jpg', 4, 2),
(28, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/4/97aed7833edbe887c06ca665994b7fef.jpg', '1024-768-61335.jpg', 'jpg', 4, 3),
(29, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/4/cc5ef5404bfddcd1db7b84d62a713ef4.jpg', '1024-768-61910.jpg', 'jpg', 4, 4),
(31, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/a1504249bdcbf5f6391858bb50bd5e0f.jpg', '3682850844_ab432600f8_b.jpg', 'jpg', 3, 1),
(49, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/81e70ea8a32596cd9dc932eaeb239982.jpg', '3729553907_0c0477f35f_o.jpg', 'jpg', 3, 2),
(56, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/88f376d44e8f186c75cc2d73f8cee7dd.png', 'tux-homes.png', 'png', 3, 3),
(61, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/f22be3ed523633622f02146c71ebb666.jpg', '1024-768-62479.jpg', 'jpg', 3, 4),
(89, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/d2cfe7904fbd1ebb2f8e87e85b34d094.jpg', 'AbstractWallpapers23.jpg', 'jpg', 3, 5),
(95, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/7c4fe9e1a2c6ab214866fa27cca351fb.jpg', 'AbstractWallpapers29.jpg', 'jpg', 3, 6),
(109, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/562c86dd9f77439c8c71245b2742fb8f.jpg', 'AbstractWallpapers44.jpg', 'jpg', 3, 7),
(116, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/3/de38dfa5c6a3e17063c0cca47539fe61.jpg', 'AbstractWallpapers51.jpg', 'jpg', 3, 8),
(117, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/5/71c5627598099da9aaabeec81948beff.docx', '20100216_Push Recarga Feature_Lista Blanca por servicio y monto_', 'docx', 5, 0),
(118, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/5/013719d4c1761e8585da483ff7536def.jpg', '2 Fondo Fantastic.jpg', 'jpg', 5, 1),
(119, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/5/af6a43ea37917941ce085b30ab7982c4.jpg', 'Fondo Fantastic.jpg', 'jpg', 5, 2),
(120, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/8/cc922d49e8743d2192e8524de1d6e04c.png', 'tux-homes.png', 'png', 8, 1),
(121, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/8/0d09e932daea3b2fea8129f332131806.jpg', '3675512817_1c9db4caa9_b.jpg', 'jpg', 8, 2),
(122, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/8/bbdea3e62fb465e9517c425d6ffb262e.jpg', '3682850844_ab432600f8_b.jpg', 'jpg', 8, 3),
(123, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/8/e52f6d3b4dab3905466c605f85c2a116.jpg', '3688571957_9e4147e3bd_b.jpg', 'jpg', 8, 4),
(124, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/8/3bd51eeab1048db29ad3787bcf70318a.jpg', '3688571973_82fa98b1b3_b.jpg', 'jpg', 8, 0),
(140, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/14/0f71bf2e01b6fdf965b41bd656c1c207.jpg', 'wallu4-22.jpg', 'jpg', 14, 1),
(141, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/14/71879a24f4503faeeb1e75f7f418cee1.jpg', 'WebRidesTV_1280x800-1.jpg', 'jpg', 14, 2),
(142, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/14/da3ef268ade7e2e3de5a673e404d9c58.jpg', 'xmas4b.jpg', 'jpg', 14, 3),
(143, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/15/c492a486290518d29698653dc3f842aa.jpg', '2 Fondo Fantastic.jpg', 'jpg', 15, 1),
(144, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/15/040de47cf3e8ae1eb88faa284b0f4252.jpg', 'Fondo Fantastic.jpg', 'jpg', 15, 0),
(151, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/16/c3e51b9c4cb0f9ebd77aa88fa0fa06c0.jpg', '3pyramids_1024.jpg', 'jpg', 16, 1),
(152, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/16/74bb1941f578909773201b3f7891c209.jpg', '1024-768-59531.jpg', 'jpg', 16, 2),
(153, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/16/0d0dc3ea62e8598f49982907ee575f0b.jpg', '1024-768-61335.jpg', 'jpg', 16, 3),
(154, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/16/c269abdf79fbffb86195eb9cf4a692bd.jpg', '1024-768-61910.jpg', 'jpg', 16, 4),
(155, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/16/ddde7beab671940c45fb50d61962844c.jpg', '1024-768-62479.jpg', 'jpg', 16, 5),
(156, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/17/9d55489f234b3c0b148a0fba5374fb67.jpg', 'tggPension.jpg', 'jpg', 17, 1),
(157, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/17/993016021743b28680da12fd510759c4.jpg', 'tggSalary.jpg', 'jpg', 17, 2),
(158, '/home/rodrigo/proyectos/www/code-igniter-shared-project/trunk/assets/upload/uploads/17/0705850c8a1e2c2a2cb1bbdf60eeec48.png', 'tux-homes.png', 'png', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreinsititucion` varchar(255) NOT NULL,
  `razonsocial` varchar(255) DEFAULT NULL,
  `rut` varchar(255) DEFAULT NULL,
  `naturaleza` varchar(255) NOT NULL,
  `primernivel` varchar(255) NOT NULL,
  `segundonivel` varchar(255) NOT NULL,
  `tercernivel` varchar(255) NOT NULL,
  `domicilioinstitucional` varchar(255) NOT NULL,
  `domiciliofiscal` varchar(255) DEFAULT NULL,
  `tipoestablecimiento` varchar(255) NOT NULL,
  `observacionescomite` text,
  `nombrecontacto` varchar(255) NOT NULL,
  `mailcontacto` varchar(255) NOT NULL,
  `telcontacto` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isactive` int(11) NOT NULL DEFAULT '0',
  `cvfilename` varchar(255) DEFAULT NULL,
  `cvfilepath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionarchivos`
--

CREATE TABLE IF NOT EXISTS `institucionarchivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instituciondocenteinvestigador`
--

CREATE TABLE IF NOT EXISTS `instituciondocenteinvestigador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionespecie`
--

CREATE TABLE IF NOT EXISTS `institucionespecie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `observacion` text,
  `escria` tinyint(4) NOT NULL,
  `esuso` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionsociedadcivil`
--

CREATE TABLE IF NOT EXISTS `institucionsociedadcivil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionunidadesdependientes`
--

CREATE TABLE IF NOT EXISTS `institucionunidadesdependientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionveterinario`
--

CREATE TABLE IF NOT EXISTS `institucionveterinario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `language_keys`
--

CREATE TABLE IF NOT EXISTS `language_keys` (
  `key` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `module` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language_keys`
--

INSERT INTO `language_keys` (`key`, `filename`, `comment`, `module`) VALUES
('personal_base_titulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_base_contenido', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_titulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_contenido_vacio', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_subtitulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_reglamentacion_titulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_reglamentacion_contenido', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_titulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_errores', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_identificacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_realizacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_cursos', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_adjuntar_cursos', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_acreditacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_tiene_acreditacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_categoria_aspirada', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_subtitulo_ver_bases', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_categoria', 'acreditaciones_lang.php', '', 'sitio'),
('menu_inicio', 'menu_lang.php', '', 'sitio'),
('menu_cnea', 'menu_lang.php', '', 'sitio'),
('menu_mision', 'menu_lang.php', '', 'sitio'),
('menu_objetivos', 'menu_lang.php', '', 'sitio'),
('menu_integrantes', 'menu_lang.php', '', 'sitio'),
('menu_instituciones', 'menu_lang.php', '', 'sitio'),
('menu_instituciones_bases', 'menu_lang.php', '', 'sitio'),
('menu_instituciones_formulario', 'menu_lang.php', '', 'sitio'),
('menu_instituciones_registro', 'menu_lang.php', '', 'sitio'),
('menu_instituciones_reglamento', 'menu_lang.php', '', 'sitio'),
('menu_personas', 'menu_lang.php', '', 'sitio'),
('menu_personas_bases', 'menu_lang.php', '', 'sitio'),
('menu_personas_formulario', 'menu_lang.php', '', 'sitio'),
('menu_personas_registro', 'menu_lang.php', '', 'sitio'),
('menu_personas_reglamento', 'menu_lang.php', '', 'sitio'),
('menu_actas', 'menu_lang.php', '', 'sitio'),
('menu_novedades', 'menu_lang.php', '', 'sitio'),
('menu_faq', 'menu_lang.php', '', 'sitio'),
('menu_contacto', 'menu_lang.php', '', 'sitio'),
('footer_enlaces_interes', 'sitio_lang.php', '', 'sitio'),
('footer_documentos_interes', 'sitio_lang.php', '', 'sitio'),
('footer_cnea', 'sitio_lang.php', '', 'sitio'),
('inicio_titulo', 'sitio_lang.php', '', 'sitio'),
('inicio_contenido', 'sitio_lang.php', '', 'sitio'),
('contacto_titulo', 'sitio_lang.php', '', 'sitio'),
('contacto_mensaje_enviado', 'sitio_lang.php', '', 'sitio'),
('faq_titulo', 'sitio_lang.php', '', 'sitio'),
('faq_contenido', 'sitio_lang.php', '', 'sitio'),
('cnea_mision_titulo', 'cnea_lang.php', '', 'sitio'),
('cnea_mision_contenido', 'cnea_lang.php', '', 'sitio'),
('cnea_objetivos_titulo', 'cnea_lang.php', '', 'sitio'),
('cnea_objetivos_contenido', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_titulo', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_presidente', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_presidente_persona', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_educacion_cultura', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_educacion_cultura_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_educacion_cultura_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_salud_publica', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_salud_publica_persona', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_ganaderia_agricultura_pesca', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_ganaderia_agricultura_pesca_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_ganaderia_agricultura_pesca_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_vivienda', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_vivienda_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_ministerio_vivienda_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_universidad', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_universidad_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_universidad_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_investigacion', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_investigacion_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_investigacion_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_AUCyTAL', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_AUCyTAL_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_AUCyTAL_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_biociencias', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_biociencias_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_biociencias_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_industria', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_industria_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_industria_persona2', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_protectora_animales', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_protectora_animales_persona1', 'cnea_lang.php', '', 'sitio'),
('cnea_integrantes_protectora_animales_persona2', 'cnea_lang.php', '', 'sitio'),
('intereses_enlaces_titulo', 'intereses_lang.php', '', 'sitio'),
('intereses_documentos_titulo', 'intereses_lang.php', '', 'sitio'),
('actas_titulo', 'actas_lang.php', '', 'sitio'),
('novedades_titulo', 'novedades_lang.php', '', 'sitio'),
('novedades_ver_mas', 'novedades_lang.php', '', 'sitio'),
('instituciones_bases_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_bases_contenido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_reglamentacion_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_reglamentacion_contenido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_registro_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_registro_contenido_vacio', 'instituciones_lang.php', '', 'sitio'),
('instituciones_registro_subtitulo', 'instituciones_lang.php', '', 'sitio'),
('personal_formulario_enviado', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_firma_persona', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_firma_institucion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_fecha', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_primera_vez', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_renovacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_nombre', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_postal', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_email', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_telefono', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_cargo', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_observaciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_expidio', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_categoria_adjudicada', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_fecha_vencimiento_acreditacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_adjuntar_acreditacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_consultas', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_descarga', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_observaciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_titulo_descarga', 'acreditaciones_lang.php', '', 'sitio'),
('instituciones_formulario_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_subtitulo_1', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_subtitulo_2', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_subtitulo_3', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_subtitulo_4', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_nombre_institucion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_razon_social', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_rut', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_naturaleza', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_publica', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_privada', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_mixta', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_1_nivel', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_2_nivel', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_3_nivel', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_domicilio_institucional', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_domicilio_fiscal', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_dicose', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_1', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_2', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_3', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_4', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_cria', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_experimentacion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_mixto', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_nombre_especie', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_uso', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_especies_observaciones', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_docente_nombre_apellido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_docente_profesion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_docente_ocupacion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_veterinario_nombre_apellido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_veterinario_profesion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_veterinario_ocupacion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_sociedades_nombre_apellido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_sociedades_profesion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_sociedades_ocupacion', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_sociedad_civil_observaciones', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_persona_contacto_nombre_completo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_persona_contacto_email', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_persona_contacto_telefono', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_1', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_2', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_3', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_4', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_5', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_6', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_7', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_8', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_strong_text_9', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_info_text_1', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_info_text_2', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_info_text_3', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_info_text_4', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_info_text_5', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_especies_mas', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_docentes_mas', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_veterinarios_mas', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_sociedades_mas', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_copia_resolucion_institucion_adjuntar', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_responsable_institucional_adjuntar', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_responsable_institucional_descargar', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_consultas', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_enviado', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_descarga_texto', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_titulo_descarga', 'instituciones_lang.php', '', 'sitio'),
('personal_formulario_agregar_mas', 'acreditaciones_lang.php', '', 'sitio');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mail_db`
--

CREATE TABLE IF NOT EXISTS `mail_db` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) NOT NULL,
  `tipo` varchar(5) NOT NULL DEFAULT 'to',
  `nombre` varchar(255) NOT NULL,
  `funcion` varchar(255) NOT NULL DEFAULT 'contacto',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mail_db`
--

INSERT INTO `mail_db` (`id`, `direccion`, `tipo`, `nombre`, `funcion`) VALUES
(1, 'rsantellan@gmail.com', 'from', 'Rodrigo Santellan', 'contacto'),
(2, 'rswibmer@hotmail.com', 'to', 'Ignacio Wibmer', 'contacto'),
(3, 'rswibmer@hotmail.com', 'cc', 'Juan', 'contacto'),
(4, 'rsantellan@gmail.com', 'bcc', 'pepito', 'contacto'),
(5, 'rodrigosantellan@yahoo.com.ar', 'reply', 'Reply to', 'contacto');

-- --------------------------------------------------------

--
-- Table structure for table `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `novedades`
--

INSERT INTO `novedades` (`id`, `nombre`, `descripcion`, `ordinal`) VALUES
(3, 'Wizard of Oz', '&amp;amp;lt;p&amp;amp;gt;Then Dorothy and the Lion got up, and the girl helped the Tin Woodman put the straw back into the Scarecrow again, until he was as good as ever. So they started upon their journey once more.&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;The Wicked Witch was so angry when she saw her black bees in little heaps like fine coal that she stamped her foot and tore her hair and gnashed her teeth. And then she called a dozen of her slaves, who were the Winkies, and gave them sharp spears, telling them to go to the strangers and destroy them.&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;The Winkies were not a brave people, but they had to do as they were told. So they marched away until they came near to Dorothy. Then the Lion gave a great roar and sprang towards them, and the poor Winkies were so frightened that they ran back as fast as they could.&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;When they returned to the castle the Wicked Witch beat them well with a strap, and sent them back to their work, after which she sat down to think what she should do next. She could not understand how all her plans to destroy these strangers had failed; but she was a powerful Witch, as well as a wicked one, and she soon made up her mind how to act.&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;There was, in her cupboard, a Golden Cap, with a circle of diamonds and rubies running round it. This Golden Cap had a charm. Whoever owned it could call three times upon the Winged Monkeys, who would obey any order they were given. But no person could command these strange creatures more than three times. Twice already the Wicked Witch had used the charm of the Cap. Once was when she had made the Winkies her slaves, and set herself to rule over their country. The Winged Monkeys had helped her do this. The second time was when she had fought against the Great Oz himself, and driven him out of the land of the West. The Winged Monkeys had also helped her in doing this. Only once more could she use this Golden Cap, for which reason she did not like to do so until all her other powers were exhausted. But now that her fierce wolves and her wild crows and her stinging bees were gone, and her slaves had been scared away by the Cowardly Lion, she saw there was only one way left to destroy Dorothy and her friends.&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;So the Wicked Witch took the Golden Cap from her cupboard and placed it upon her head. Then she stood upon her left foot and said slowly:&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;&quot;Ep-pe, pep-pe, kak-ke!&quot;&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;Next she stood upon her right foot and said:&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;&quot;Hil-lo, hol-lo, hel-lo!&quot;&amp;amp;lt;/p&amp;amp;gt; &amp;amp;lt;p&amp;amp;gt;After this she stood upon both feet and cried in a loud voice:&amp;amp;lt;/p&amp;amp;gt;', 3),
(5, 'fasdfas', 'fasdfasdfas', 4),
(9, 'test 2', '&lt;p&gt;&quot;However,&quot; resumed the guide, &quot;it is certain, not only that we shall risk our lives, but horrible tortures, if we are taken.&quot;&lt;/p&gt;\n&lt;p&gt;&quot;That is foreseen,&quot; replied Mr. Fogg. &quot;I think we must wait till night before acting.&quot;&lt;/p&gt;\n&lt;p&gt;&quot;I think so,&quot; said the guide.&lt;/p&gt;', 8),
(10, 'Nombre ok', '&lt;p&gt;&quot;However,&quot; resumed the guide, &quot;it is certain, not only that we shall risk our lives, but horrible tortures, if we are taken.&quot;&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;&quot;That is foreseen,&quot; replied Mr. Fogg. &quot;I think we must wait till night before acting.&quot;&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;&quot;I think so,&quot; said the guide.&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;The worthy Indian then gave some account of the victim, who, he said, was a celebrated beauty of the Parsee race, and the daughter of a wealthy Bombay merchant. She had received a thoroughly English education in that city, and, from her manners and intelligence, would be thought an European. Her name was Aouda. Left an orphan, she was married against her will to the old rajah of Bundelcund; and, knowing the fate that awaited her, she escaped, was retaken, and devoted by the rajah&#39;s relatives, who had an interest in her death, to the sacrifice from which it seemed she could not escape.&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;The Parsee&#39;s narrative only confirmed Mr. Fogg and his companions in their generous design. It was decided that the guide should direct the elephant towards the pagoda of Pillaji, which he accordingly approached as quickly as possible. They halted, half an hour afterwards, in a copse, some five hundred feet from the pagoda, where they were well concealed; but they could hear the groans and cries of the fakirs distinctly.&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;They then discussed the means of getting at the victim.? The guide was familiar with the pagoda of Pillaji, in which, as he declared, the young woman was imprisoned.? Could they enter any of its doors while the whole party of Indians was plunged in a drunken sleep, or was it safer to attempt to make a hole in the walls?? This could only be determined at the moment and the place themselves; but it was certain that the abduction must be made that night, and not when, at break of day, the victim was led to her funeral pyre.? Then no human intervention could save her.&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;As soon as night fell, about six o&#39;clock, they decided to make a reconnaissance around the pagoda.? The cries of the fakirs were just ceasing; the Indians were in the act of plunging themselves into the drunkenness caused by liquid opium mingled with hemp, and it might be possible to slip between them to the temple itself.&lt;/p&gt;\n&lt;br /&gt;&lt;br /&gt;\n&lt;p&gt;The Parsee, leading the others, noiselessly crept through the wood, and in ten minutes they found themselves on the banks of a small stream, whence, by the light of the rosin torches, they perceived a pyre of wood, on the top of which lay the embalmed body of the rajah, which was to be burned with his wife.? The pagoda, whose minarets loomed above the trees in the deepening dusk, stood a hundred steps away.&lt;/p&gt;', 9),
(11, 'test 2', '&lt;p&gt;En el segundo semestre de 2011, la CNEA realiz&amp;oacute; un llamado a concurso para el dise&amp;ntilde;o de su logotipo. Luego de un dif&amp;iacute;cil proceso de selecci&amp;oacute;n entre las 16 propuestas&amp;nbsp; recibidas, el tribunal integrado por las representantes de la CNEA Cecilia Scorza y Ana Silva, el representante del Departamento de Inform&amp;aacute;tica de la DICYT Leonardo Latorre&amp;nbsp; y la especialista en dise&amp;ntilde;o gr&amp;aacute;fico Carolina Curbelo, pre-seleccion&amp;oacute; dos propuestas finalistas en base a la adecuaci&amp;oacute;n de la propuesta a la misi&amp;oacute;n de la CNEA y a criterios est&amp;eacute;ticos y de formato: los logotipos presentados bajo los seud&amp;oacute;nimos &amp;ldquo;Karra&amp;rdquo; y &amp;ldquo;Nicolai&amp;rdquo; por Sebasti&amp;aacute;n Santana y Nicol&amp;aacute;s Barrios, respectivamente.&amp;nbsp; En la sesi&amp;oacute;n del 13 de diciembre de 2011, la CNEA seleccion&amp;oacute; el logotipo que hoy la representa y otorg&amp;oacute; el premio de US$500 a su creador,&amp;nbsp; Sebastian Santana.&lt;/p&gt;', 10);

-- --------------------------------------------------------

--
-- Table structure for table `registro_institucion`
--

CREATE TABLE IF NOT EXISTS `registro_institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registro_institucion`
--

INSERT INTO `registro_institucion` (`id`, `name`, `code`, `url`, `ordinal`) VALUES
(1, 'test', '13212', 'http://localhost/code-igniter-shared-project/trunk/index.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registro_persona`
--

CREATE TABLE IF NOT EXISTS `registro_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  `ordenInstitucion` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registro_persona`
--

INSERT INTO `registro_persona` (`id`, `name`, `code`, `email`, `ordinal`, `ordenInstitucion`) VALUES
(5, 'un nuevo test', 'pepito', '', 1, 0),
(6, 'test 2', 'pepito 2', '', 0, 2),
(7, 'test 1', 'pepito 3', '', 3, 1),
(8, 'test 2', 'pepito 4', '', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`) VALUES
(3, 'test', '#dbd894'),
(6, 'test2', '#19143f'),
(7, 'test 6', '#1f470a'),
(8, 'test 654', '#0d0d2b'),
(10, 'atest 564', '#4cd74f'),
(11, 'dgdgdf', '#b687df'),
(12, '234 test', '#7329b8'),
(13, 'jajaja', '#413da0'),
(14, 'tag 65412', '#4d7a25');

-- --------------------------------------------------------

--
-- Table structure for table `tags_actas`
--

CREATE TABLE IF NOT EXISTS `tags_actas` (
  `id_acta` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_acta`,`id_tag`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags_actas`
--

INSERT INTO `tags_actas` (`id_acta`, `id_tag`) VALUES
(16, 3),
(17, 3),
(13, 6),
(16, 6),
(16, 7),
(16, 10),
(16, 11),
(17, 11),
(16, 12),
(16, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tags_novedades`
--

CREATE TABLE IF NOT EXISTS `tags_novedades` (
  `id_novedad` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_novedad`,`id_tag`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags_novedades`
--

INSERT INTO `tags_novedades` (`id_novedad`, `id_tag`) VALUES
(10, 7),
(10, 10),
(10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'rodrigo', '$P$BcGvVjyAWHNguznOC39D4hKBe5N3qI.', 'rsantellan@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-09-13 13:59:38', '2012-03-16 17:02:17', '2012-09-13 16:59:38'),
(5, 'pepe', '$P$Bz3doUblYaDtzo3rhMgYqvxGclQWND1', 'algo@algo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-03-29 16:52:25', '2012-03-20 11:35:18', '2012-04-17 17:47:37'),
(6, 'administrador', '$P$B9i132NRMpeWBTD4Ay/DRjSvxkWAd/.', 'rswibmer@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-04-18 16:45:38', '2012-04-17 14:47:59', '2012-04-18 19:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(2, 6, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 1, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `institucionarchivos`
--
ALTER TABLE `institucionarchivos`
  ADD CONSTRAINT `institucionarchivos_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `instituciondocenteinvestigador`
--
ALTER TABLE `instituciondocenteinvestigador`
  ADD CONSTRAINT `instituciondocenteinvestigador_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `institucionespecie`
--
ALTER TABLE `institucionespecie`
  ADD CONSTRAINT `institucionespecie_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `institucionsociedadcivil`
--
ALTER TABLE `institucionsociedadcivil`
  ADD CONSTRAINT `institucionsociedadcivil_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `institucionunidadesdependientes`
--
ALTER TABLE `institucionunidadesdependientes`
  ADD CONSTRAINT `institucionunidadesdependientes_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `institucionveterinario`
--
ALTER TABLE `institucionveterinario`
  ADD CONSTRAINT `institucionveterinario_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

--
-- Constraints for table `tags_actas`
--
ALTER TABLE `tags_actas`
  ADD CONSTRAINT `tags_actas_ibfk_1` FOREIGN KEY (`id_acta`) REFERENCES `actas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tags_actas_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`);

--
-- Constraints for table `tags_novedades`
--
ALTER TABLE `tags_novedades`
  ADD CONSTRAINT `tags_novedades_ibfk_1` FOREIGN KEY (`id_novedad`) REFERENCES `novedades` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tags_novedades_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
