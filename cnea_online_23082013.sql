-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2013 at 09:48 AM
-- Server version: 5.1.50
-- PHP Version: 5.2.17

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3cnea`
--
CREATE DATABASE `c3cnea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `c3cnea`;

-- --------------------------------------------------------

--
-- Table structure for table `actas`
--

CREATE TABLE IF NOT EXISTS `actas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `actas`
--

INSERT INTO `actas` (`id`, `nombre`, `ordinal`) VALUES
(17, 'Acta Nº 01/10', 0),
(18, 'Acta Nº 02/10', 1),
(19, 'Acta Nº 03/10 ', 2),
(20, 'Acta Nº 01/11 ', 3),
(21, 'Acta Nº 02/11 ', 4),
(22, 'Acta Nº 03/11', 5),
(23, 'Acta Nº 04/11', 6),
(24, 'Acta Nº 05/11', 7),
(25, 'Acta Nº 06/11', 8),
(26, 'Acta Nº 07/11', 9),
(27, 'Acta Nº 08/11', 10),
(28, 'Acta Nº 09/11', 11),
(29, 'Acta Nº 10/11', 12),
(30, 'Acta Nº 11/11 ', 13),
(31, 'Acta Nº 12/11 ', 14),
(32, 'Acta Nº 13/11', 15),
(33, 'Acta Nº 14/11', 16),
(34, 'Acta Nº 15/11', 17),
(35, 'Acta Nº 16/11', 18),
(36, 'Acta Nº 17/11', 19),
(37, 'Acta Nº 01/12', 20),
(38, 'Acta Nº 02/12', 22),
(39, 'Acta Nº 03/12', 23),
(44, 'Acta Nº 04/12', 24),
(45, 'Acta Nº 05/12', 25),
(46, 'Acta Nº 06/12', 26),
(47, 'Acta Nº 07/12', 27),
(48, 'Acta Nº 08/12', 28),
(49, 'Acta Nº 09/12', 29),
(50, 'Acta Nº 10/12', 30),
(51, 'Acta Nº 11/12', 31),
(52, 'Acta Nº 12/12', 32),
(54, 'Acta Nº 13/12', 34),
(55, 'Acta Nº 14/12', 35),
(56, 'Acta Nº 15/12', 36),
(57, 'Acta N° 16/12', 37);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `obj_id`, `obj_class`) VALUES
(17, 'default', 17, 'actas'),
(18, 'default', 18, 'actas'),
(19, 'default', 12, 'novedad'),
(20, 'default', 13, 'novedad'),
(22, 'default', 15, 'novedad'),
(23, 'default', 19, 'actas'),
(24, 'default', 20, 'actas'),
(25, 'default', 21, 'actas'),
(26, 'default', 22, 'actas'),
(27, 'default', 23, 'actas'),
(28, 'default', 24, 'actas'),
(29, 'default', 25, 'actas'),
(30, 'default', 26, 'actas'),
(31, 'default', 27, 'actas'),
(32, 'default', 28, 'actas'),
(33, 'default', 29, 'actas'),
(34, 'default', 30, 'actas'),
(35, 'default', 31, 'actas'),
(36, 'default', 32, 'actas'),
(37, 'default', 33, 'actas'),
(38, 'default', 34, 'actas'),
(39, 'default', 35, 'actas'),
(40, 'default', 36, 'actas'),
(41, 'default', 37, 'actas'),
(42, 'default', 38, 'actas'),
(43, 'default', 39, 'actas'),
(44, 'default', 16, 'novedad'),
(45, 'default', 17, 'novedad'),
(46, 'default', 18, 'novedad'),
(65, 'default', 44, 'actas'),
(66, 'default', 45, 'actas'),
(67, 'default', 46, 'actas'),
(68, 'default', 47, 'actas'),
(69, 'default', 48, 'actas'),
(70, 'default', 49, 'actas'),
(71, 'default', 50, 'actas'),
(72, 'default', 33, 'novedad'),
(73, 'default', 51, 'actas'),
(74, 'default', 52, 'actas'),
(78, 'default', 54, 'actas'),
(79, 'default', 55, 'actas'),
(80, 'default', 56, 'actas'),
(81, 'default', 57, 'actas'),
(82, 'default', 36, 'novedad'),
(84, 'default', 39, 'novedad'),
(85, 'default', 40, 'novedad');

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
('0e8d504b3c8ca38391818304fd3bfa47', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377257391, ''),
('16d7c4c194bee6472ba4b30d5a7d295a', '157.55.33.49', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1377257772, ''),
('24773b2b5d9217a4e721b5e15687c803', '180.76.5.8', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 1377261921, ''),
('29b3d43ef988b03b337e8e9cf700698d', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377257327, ''),
('2f0c7f240fd9b1496bf720fceaa87e78', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377252201, ''),
('3ee5ee8515fd7e391f95594a78095e7a', '66.249.75.5', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_1 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobi', 1377256373, ''),
('46e582be9f9f60e61187474528b304f0', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377254149, ''),
('49c2f3a5a9d28fac9e74d9cf3bce3006', '201.217.158.4', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1377258850, ''),
('578102ae5ac98fdd87995ee50c5d29ef', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377261457, ''),
('58db18ed7d85e2eedb138443baaf3aca', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377260538, ''),
('7d8db8b6a50ba812686cc4a0b2ec6aae', '157.55.32.49', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1377253076, ''),
('a8d00706aa2687ed438d5898e3774878', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377259597, ''),
('e786d48040208a0e236439d31d43c530', '66.249.75.5', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_1 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobi', 1377254240, ''),
('e78d2871ae967a764bb98f68f6d97d1c', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377254010, ''),
('e8650edaf8f8214c39f9c70856175ed6', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377261621, ''),
('f0cd52a777f489f36a4c1a9cd5ec6a6a', '5.10.83.33', 'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)', 1377255565, ''),
('f1702b847a28e38e148b2bcbc91d1d35', '66.249.75.5', 'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 (compatible; Googl', 1377260973, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `documentos_intereses`
--

INSERT INTO `documentos_intereses` (`id`, `nombre`, `link`, `ordinal`) VALUES
(4, 'Ley 18611', 'http://sip.parlamento.gub.uy/leyes/AccesoTextoLey.asp?Ley=18611&amp;Anchor=', 1),
(5, 'Guía para el Cuidado y Uso de los Animales de Laboratorio, National Research Council (libre acceso)', 'http://www.nap.edu/openbook.php?record_id=10929&amp;page=R1', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `enlaces_intereses`
--

INSERT INTO `enlaces_intereses` (`id`, `nombre`, `link`, `ordinal`) VALUES
(6, 'Comisión Honoraria Experimentación Animal, CHEA-UdelaR', 'http://www.chea.udelar.edu.uy/', 5),
(7, 'Institute for Laboratory Animal Research', 'http://dels.nas.edu/ilar', 3),
(8, 'International Council for Laboratory Animal Science', 'http://www.iclas.org/', 2),
(9, 'Federation of European Laboratory Animal Science Associations', 'http://www.felasa.eu/', 1),
(10, 'Conselho Nacional de Controle de Experimentacao Animal, Brasil', 'http://www.mct.gov.br/index.php/content/view/310554.html#tt', 0),
(11, 'Federación de Sociedades Sudamericanas de Ciencias en Animales de Laboratorio, Fessacal', 'http://fessacal.com/es/', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=245 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `name`, `type`, `album_id`, `ordinal`) VALUES
(146, '/var/www/clients/client3/web3/web/beta/assets/upload/uploads/20/f6f62706c11927919fb29679b8a69c08.jpg', 'nov_logotipo.jpg', 'jpg', 20, 1),
(175, '/var/www/clients/client3/web3/web/assets/upload/uploads/43/28fd771e0358933c1670f73c5a1e3989.pdf', 'acta 27 de marzo de 2012.pdf', 'pdf', 43, 2),
(176, '/var/www/clients/client3/web3/web/assets/upload/uploads/42/c2c8aba448136abd8250e94d5a32fd8e.pdf', 'acta 13 de marzo de 2012.pdf', 'pdf', 42, 1),
(177, '/var/www/clients/client3/web3/web/assets/upload/uploads/41/cdc9d5ba8c8142e7f001d73b05972774.pdf', 'acta 28 de febrero de 2012.pdf', 'pdf', 41, 1),
(178, '/var/www/clients/client3/web3/web/assets/upload/uploads/40/fff54cd890831f4a7630c3c67c8e8575.pdf', 'acta 13 de diciembre de 2 011.pdf', 'pdf', 40, 1),
(179, '/var/www/clients/client3/web3/web/assets/upload/uploads/39/fc164d2eea8de44565c8a02386e83334.pdf', 'acta 8 de noviembre de 2011.pdf', 'pdf', 39, 1),
(180, '/var/www/clients/client3/web3/web/assets/upload/uploads/38/bb886868d6979f0921e0fb6eae1d5077.pdf', 'acta 25 de octubre de 2011.pdf', 'pdf', 38, 1),
(181, '/var/www/clients/client3/web3/web/assets/upload/uploads/37/fe0d599a3524ae414fa367186b77f5b0.pdf', 'acta 11 de octubre de 2011.pdf', 'pdf', 37, 1),
(182, '/var/www/clients/client3/web3/web/assets/upload/uploads/36/d9e49fd9490f9f99722fa9bfe2058e73.pdf', 'Acta_27_09_2011.pdf', 'pdf', 36, 1),
(183, '/var/www/clients/client3/web3/web/assets/upload/uploads/35/a6f1169cc83aac0b589240c80588670c.pdf', 'Acta_12_09_2011.pdf', 'pdf', 35, 1),
(184, '/var/www/clients/client3/web3/web/assets/upload/uploads/34/21c0290810d3cc61c56df7602ad32c7c.pdf', 'Acta_30_08_2011.pdf', 'pdf', 34, 1),
(185, '/var/www/clients/client3/web3/web/assets/upload/uploads/17/bfd0a95179bf21a6a9b3cb6071b50801.pdf', 'Acta_1ra_Reunion.pdf', 'pdf', 17, 1),
(186, '/var/www/clients/client3/web3/web/assets/upload/uploads/23/83ab0d16df760afd49eab08cf02b7612.pdf', 'Acta_12_04_2011.pdf', 'pdf', 23, 1),
(187, '/var/www/clients/client3/web3/web/assets/upload/uploads/24/b5e7fe7204ec16289ba2dec346e007dc.pdf', 'Acta_15_02_2011.pdf', 'pdf', 24, 1),
(188, '/var/www/clients/client3/web3/web/assets/upload/uploads/25/c2efb90ecea75bb6ef83894b4e7b6059.pdf', 'Acta_15_03_2011.pdf', 'pdf', 25, 1),
(189, '/var/www/clients/client3/web3/web/assets/upload/uploads/26/0f9c26371fc57a37de8c53d2d6e6d957.pdf', 'Acta_29_03_2011.pdf', 'pdf', 26, 1),
(190, '/var/www/clients/client3/web3/web/assets/upload/uploads/27/bc65bcc6c1ad182fc42da6c8fc15d472.pdf', 'Acta_12_04_2011.pdf', 'pdf', 27, 1),
(191, '/var/www/clients/client3/web3/web/assets/upload/uploads/28/3ac3bb8540620e83f997b40038d6e2a5.pdf', 'Acta_26_04_2011.pdf', 'pdf', 28, 1),
(192, '/var/www/clients/client3/web3/web/assets/upload/uploads/29/44e50357518a8ab905cb04df46d9a7ad.pdf', 'Acta_10_05_2011.pdf', 'pdf', 29, 1),
(193, '/var/www/clients/client3/web3/web/assets/upload/uploads/30/f19bf9f1cb32aaab64daa9f96d748a7f.pdf', 'Acta_7_06_2011.pdf', 'pdf', 30, 1),
(194, '/var/www/clients/client3/web3/web/assets/upload/uploads/31/89fd1d0533c05a554c7ef8de949148e7.pdf', 'Acta_21_06_2011.pdf', 'pdf', 31, 1),
(195, '/var/www/clients/client3/web3/web/assets/upload/uploads/32/ca2b38218443a76d222162a6c04f9b23.pdf', 'Acta_19_07_2011.pdf', 'pdf', 32, 1),
(196, '/var/www/clients/client3/web3/web/assets/upload/uploads/33/b58d938c84527294462b10bc6bec3ce5.pdf', 'Acta_2_08_2011.pdf', 'pdf', 33, 1),
(197, '/var/www/clients/client3/web3/web/assets/upload/uploads/18/44356fffbdd2fdd62ea46ac353eb6f09.pdf', 'acta 30 noviembre 2010.pdf', 'pdf', 18, 1),
(212, '/var/www/clients/client3/web3/web/assets/upload/uploads/65/1b587338ddfefb02caa6d4ac1abdc424.pdf', 'acta 17 de abril de 2012.pdf', 'pdf', 65, 1),
(213, '/var/www/clients/client3/web3/web/assets/upload/uploads/66/435983951acf4b871cd3883c773628a9.pdf', 'acta 8 de mayo de 2012.pdf', 'pdf', 66, 1),
(214, '/var/www/clients/client3/web3/web/assets/upload/uploads/67/f412c5aec99ff17734233e5e4ada03b4.pdf', 'acta 22 de mayo de 2012.pdf', 'pdf', 67, 1),
(215, '/var/www/clients/client3/web3/web/assets/upload/uploads/68/60afbf25dc8225bac86a61b81819fec2.pdf', 'acta 5 de junio de 2012.pdf', 'pdf', 68, 1),
(216, '/var/www/clients/client3/web3/web/assets/upload/uploads/69/cd6a288f2975acb4a85a801344275f2a.pdf', 'acta 26 de junio de 2012.pdf', 'pdf', 69, 1),
(217, '/var/www/clients/client3/web3/web/assets/upload/uploads/70/db7e8ec649146a62f6fd49554ee37cae.pdf', 'acta 24 de julio de 2012.pdf', 'pdf', 70, 1),
(218, '/var/www/clients/client3/web3/web/assets/upload/uploads/71/cafc758ae3cd15db1c0785d715f5ed96.pdf', 'acta 7 de agosto de 2012.pdf', 'pdf', 71, 1),
(219, '/var/www/clients/client3/web3/web/assets/upload/uploads/73/382301aa2dc69deec203a301827817f3.pdf', 'acta 28 de agosto de 2012.pdf', 'pdf', 73, 1),
(220, '/var/www/clients/client3/web3/web/assets/upload/uploads/74/fd26ff99a8b7adc2c33bc9b0d9e16af0.pdf', 'acta 2 de octubre de 2012.pdf', 'pdf', 74, 1),
(225, '/var/www/clients/client3/web3/web/assets/upload/uploads/78/9a50d33ac1cc6eba9707448079aa802a.pdf', 'acta 30 de octubre de 2012.pdf', 'pdf', 78, 1),
(226, '/var/www/clients/client3/web3/web/assets/upload/uploads/79/cd0b4c6682c21bc60d4ea2a84403bfbf.pdf', 'acta 13 de noviembre de 2012.pdf', 'pdf', 79, 1),
(227, '/var/www/clients/client3/web3/web/assets/upload/uploads/80/6c6775047e1ea7c334053b6d05644eea.pdf', 'acta 04 de diciembre de 2012.pdf', 'pdf', 80, 1),
(228, '/var/www/clients/client3/web3/web/assets/upload/uploads/81/79fa2fc9c978f65c794225b7d31330d1.pdf', 'acta 18 de diciembre de 2012.pdf', 'pdf', 81, 1),
(233, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/1f05c890a6e7ee5c56a8f5bea98bac76.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 1),
(234, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/16b05c94924fa6aba4e367d542802306.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 2),
(235, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/e85948f2e97817f9a2f802e39fc157ce.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 3),
(239, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/448d2b669464c779f73fe72a52a28bbf.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 4),
(240, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/6ff1970b894eb98f5a8021212f98fcba.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 5);

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
('intereses_enlaces_titulo', 'intereses_lang.php', '', 'sitio'),
('intereses_documentos_titulo', 'intereses_lang.php', '', 'sitio'),
('novedades_titulo', 'novedades_lang.php', '', 'sitio'),
('novedades_ver_mas', 'novedades_lang.php', '', 'sitio'),
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
('instituciones_bases_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_bases_contenido', 'instituciones_lang.php', '', 'sitio'),
('instituciones_reglamentacion_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_reglamentacion_contenido', 'instituciones_lang.php', '', 'sitio'),
('actas_titulo', 'actas_lang.php', '', 'sitio'),
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
('personal_formulario_enviado', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_firma_persona', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_texto_firma_institucion', 'acreditaciones_lang.php', '', 'sitio'),
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
('instituciones_formulario_eso', 'instituciones_lang.php', '', 'sitio'),
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
('contacto_titulo', 'contacto_lang.php', '', 'sitio'),
('contacto_subtitulo', 'contacto_lang.php', '', 'sitio'),
('contacto_nombre', 'contacto_lang.php', '', 'sitio'),
('contacto_institucion', 'contacto_lang.php', '', 'sitio'),
('contacto_telefono', 'contacto_lang.php', '', 'sitio'),
('contacto_celular', 'contacto_lang.php', '', 'sitio'),
('contacto_email', 'contacto_lang.php', '', 'sitio'),
('contacto_consulta', 'contacto_lang.php', '', 'sitio'),
('contacto_denuncias', 'contacto_lang.php', '', 'sitio'),
('instituciones_formulario_enviado', 'instituciones_lang.php', '', 'sitio'),
('instituciones_registro_titulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_registro_subtitulo', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_uso', 'instituciones_lang.php', '', 'sitio'),
('instituciones_formulario_descarga_texto', 'instituciones_lang.php', '', 'sitio'),
('personal_formulario_texto_descarga', 'acreditaciones_lang.php', '', 'sitio'),
('buscador_titulo', 'sitio_lang.php', '', 'sitio'),
('buscador_palabra_buscada', 'sitio_lang.php', '', 'sitio'),
('buscador_titulo_novedad', 'sitio_lang.php', '', 'sitio'),
('buscador_titulo_actas', 'sitio_lang.php', '', 'sitio'),
('buscador_sin_resultados', 'sitio_lang.php', '', 'sitio'),
('personal_formulario_agregar_mas', 'acreditaciones_lang.php', '', 'sitio'),
('instituciones_formulario_especies_sacar', 'instituciones_lang.php', '', 'sitio'),
('personal_formulario_titulo_descarga', 'acreditaciones_lang.php', '', 'sitio'),
('instituciones_formulario_titulo_descarga', 'instituciones_lang.php', '', 'sitio');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `login_attempts`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mail_db`
--

INSERT INTO `mail_db` (`id`, `direccion`, `tipo`, `nombre`, `funcion`) VALUES
(1, '-t@geminis.dicyt.gub.uy', 'from', 'cnea.gub.uy', 'contacto'),
(2, 'secretaria@cnea.gub.uy', 'to', 'cnea.gub.uy', 'contacto');

-- --------------------------------------------------------

--
-- Table structure for table `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `novedades`
--

INSERT INTO `novedades` (`id`, `nombre`, `descripcion`, `ordinal`) VALUES
(12, 'REGISTRO NACIONAL DE INSTITUCIONES', 'En su sesi&amp;oacute;n del 13 de diciembre de 2011, la CNEA dio apertura al  Registro Nacional de Instituciones con el ingreso de 20 instituciones,  entre las que se cuentan organismos p&amp;uacute;blicos y privados, que quedaron  entonces habilitadas para la cr&amp;iacute;a, transporte, o utilizaci&amp;oacute;n de animales  vertebrados para actividades de experimentaci&amp;oacute;n, docencia o  investigaci&amp;oacute;n cient&amp;iacute;fica. Agradecemos la respuesta a nuestra  convocatoria y celebramos este logro que nos acerca a la formalizaci&amp;oacute;n  del sistema para el uso de animales de experimentaci&amp;oacute;n en el pa&amp;iacute;s.  Recordamos que el registro de instituciones permanece siempre abierto  para facilitar la postulaci&amp;oacute;n  permanente de nuevas instituciones.  Pr&amp;oacute;xima fecha de actualizaci&amp;oacute;n del Registro Nacional de Instituciones:  JUNIO 2012.', 2),
(13, 'NUEVO LOGOTIPO', 'En el segundo semestre de 2011, la CNEA realiz&amp;oacute; un llamado a concurso  para el dise&amp;ntilde;o de su logotipo. Luego de un dif&amp;iacute;cil proceso de selecci&amp;oacute;n  entre las 16 propuestas  recibidas, el tribunal integrado por las  representantes de la CNEA Cecilia Scorza y Ana Silva, el representante  del Departamento de Inform&amp;aacute;tica de la DICYT Leonardo Latorre  y la  especialista en dise&amp;ntilde;o gr&amp;aacute;fico Carolina Curbelo, pre-seleccion&amp;oacute; dos  propuestas finalistas en base a la adecuaci&amp;oacute;n de la propuesta a la  misi&amp;oacute;n de la CNEA y a criterios est&amp;eacute;ticos y de formato: los logotipos  presentados bajo los seud&amp;oacute;nimos &amp;ldquo;Karra&amp;rdquo; y &amp;ldquo;Nicolai&amp;rdquo; por Sebasti&amp;aacute;n  Santana y Nicol&amp;aacute;s Barrios, respectivamente.  En la sesi&amp;oacute;n del 13 de  diciembre de 2011, la CNEA seleccion&amp;oacute; el logotipo que hoy la representa y  otorg&amp;oacute; el premio de US$500 a su creador,  Sebastian Santana.&lt;br /&gt;\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\n&lt;p&gt;La tipograf&amp;iacute;a utilizada en el logotipo es la PT Sans Bold, una tipograf&amp;iacute;a dise&amp;ntilde;ada por el estudio ruso ParaType Ltd. (&lt;a href=&quot;http://www.paratype.ru&quot; target=&quot;_blank&quot;&gt;www.paratype.ru&lt;/a&gt;), obtenida a trav&amp;eacute;s del sitio &lt;a href=&quot;http://AbstractFonts.com&quot; target=&quot;_blank&quot;&gt;AbstractFonts.com&lt;/a&gt;. Se&amp;nbsp; seleccion&amp;oacute; esta tipograf&amp;iacute;a para reforzar el grafismo manuscrito del logotipo con un tipo de letra de dise&amp;ntilde;o limpio pero con un car&amp;aacute;cter personal, teniendo en cuenta adem&amp;aacute;s la condici&amp;oacute;n (fundamental) de que se tratara una tipograf&amp;iacute;a de uso libre.&lt;/p&gt;', 3),
(15, 'PRIMER CONVOCATORIA PARA EL REGISTRO NACIONAL DE PERSONAS ACREDITADAS', 'A partir del 10 de mayo de 2012 se encuentra abierta la primer convocatoria al Registro Nacional de Personas Acreditadas para la cr&amp;iacute;a, transporte, o utilizaci&amp;oacute;n de animales vertebrados para actividades de experimentaci&amp;oacute;n, docencia o investigaci&amp;oacute;n cient&amp;iacute;fica que desarrollen sus actividades en instituciones previamente ingresadas al Registro Nacional de Instituciones. &lt;br /&gt;Los interesados deber&amp;aacute;n hacer llegar su solicitud a la CNEA completando el formulario que a los efectos se encuentra disponible en este sitio web. Aquellos interesados que respondan a la convocatoria antes del 15 de julio de 2012 podr&amp;aacute;n ser integrados al Registro Nacional en 2012. &lt;br /&gt;Recordamos que el Registro Nacional de Personas Acreditadas permanecer&amp;aacute; siempre abierto para facilitar la postulaci&amp;oacute;n permanente de nuevos interesados.&lt;br /&gt;', 4),
(16, 'Extensión del plazo de la Primera Convocatoria para el Registro Nacional de Acreditaciones Personales hasta el 31 de julio de 2012', '&lt;strong&gt;PRIMERA CONVOCATORIA&lt;/strong&gt;&lt;br /&gt;&lt;strong&gt;PARA EL REGISTRO NACIONAL DE ACREDITACIONES PERSONALES&lt;/strong&gt;&lt;br /&gt;Extensi&amp;oacute;n del plazo hasta el 31 de julio de 2012&lt;br /&gt;&lt;br /&gt;A partir del 10 de mayo de 2012 se encuentra abierta se encuentra abierta la primera convocatoria al Registro Nacional de Acreditaciones Personales para la cr&amp;iacute;a, transporte, o utilizaci&amp;oacute;n de animales vertebrados para actividades de experimentaci&amp;oacute;n, docencia o investigaci&amp;oacute;n cient&amp;iacute;fica que desarrollen sus actividades en instituciones previamente ingresadas al Registro Nacional de Instituciones.&lt;br /&gt;Los interesados deber&amp;aacute;n hacer llegar su solicitud a la CNEA completando el formulario que a los efectos se encuentra disponible en este sitio web.&lt;br /&gt;La CNEA ha decidido extender el plazo de inscrici&amp;oacute;n para esta Primera Convocatoria hasta el 31 de julio de 2012.&lt;br /&gt;Los interesados que se inscriban en esta instancia, ser&amp;aacute;n integrados al Registro Nacional de Acreditaciones Personales del a&amp;ntilde;o 2012.&lt;br /&gt;Recordamos que este Registro permanecer&amp;aacute; siempre abierto para facilitar la postulaci&amp;oacute;n permanente de nuevos interesados.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Bases y Formularios disponibles en la p&amp;aacute;gina web&lt;/strong&gt; &lt;a href=&quot;../../../&quot;&gt;www,cnea.org.uy&lt;/a&gt;&lt;br /&gt;', 5),
(17, 'II Jornada Nacional de Bioteristas (Buenos Aires, 24 y 25 de octubre 2012)', 'El pr&amp;oacute;ximo 24 y 25 de octubre de 2012 se desarrollar&amp;aacute; en la Ciudad Aut&amp;oacute;noma de Buenos Aires la &lt;strong&gt;&quot;II Jornada Nacional de Bioteristas&quot;&lt;/strong&gt;.&lt;br /&gt;Se invita a presentar trabajos en formato de poster (con opci&amp;oacute;n a presentaci&amp;oacute;n oral).&lt;br /&gt;La inscripci&amp;oacute;n permanecer&amp;aacute; abierta &lt;strong&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;SOLO&lt;/span&gt;&lt;/strong&gt; hasta el 15 de octubre de 2012 o hasta completar vacantes.&lt;br /&gt;SOCIOS DE AACyTAL&amp;nbsp; 250 PESOS ARGENTINOS.&lt;br /&gt;NO SOCIOS DE AACyTAL 400 PESOS ARGENTINOS.&lt;br /&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Por informes e inscripciones:&lt;/strong&gt;&lt;/span&gt; tecnicosaacytal@yahoo.ar', 6),
(18, 'UdelaR ofrece en 2012 y 2013 Cursos para Acreditación en A y B', 'La Comisi&amp;oacute;n Honoraria de Experimentaci&amp;oacute;n Animal de la UdelaR ofrece los siguientes cursos de capacitaci&amp;oacute;n habilitantes para la acreditaci&amp;oacute;n en Categor&amp;iacute;as A y B en 2012. En forma excepcional, se aceptar&amp;aacute;n participantes extra-universitarios.\n&lt;p&gt;Uso y Manejo de animales de laboratorio, Fac. de Qu&amp;iacute;mica, UdelaR (inscripciones abiertas).&lt;/p&gt;\n&lt;p&gt;Salud, Bienestar y Producci&amp;oacute;n de animales de laboratorio, Fac. de Veterinaria, UdelaR (fecha tentativa: Noviembre de 2012).&lt;/p&gt;\n&lt;p&gt;Bases e inscripciones:&lt;/p&gt;\n&lt;p&gt;&lt;a href=&quot;http://www.chea.udelar.edu.uy/-Cursos-&quot;&gt;http://www.chea.udelar.edu.uy/-Cursos-&lt;/a&gt;&lt;/p&gt;\n&lt;p&gt;Por otra parte, la Comisi&amp;oacute;n Honoraria de Experimentaci&amp;oacute;n Animal de la UdelaR anuncia la realizaci&amp;oacute;n en el primer semestre de 2013 de un curso de capacitaci&amp;oacute;n para la Categor&amp;iacute;a A especialmente dedicado a participantes extra-universitarios. Las bases de este curso se anunciar&amp;aacute;n oportunamente.&lt;/p&gt;', 7),
(33, 'Se abrieron las inscripciones para el Curso CHEA 2012 de la Facultad de Veterinaria (UdelaR), hay cupo para interesados del sector extra-universitario en acreditarse en la categoría B.', '&lt;span style=&quot;font-size: large;&quot;&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Curso&lt;/strong&gt;&lt;/span&gt;: Salud, Bienestar y Producci&amp;oacute;n de Animales de Laboratorio (CHEA-UdelaR) 2012.&lt;br /&gt;&lt;br /&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Fecha&lt;/strong&gt;&lt;/span&gt;: 12 al 30 de noviembre de 2012.&lt;br /&gt;&lt;br /&gt;Lugar: Facultad de Veterinaria, Universidad de la Rep&amp;uacute;blica. Av. Alberto Lasplaces 1550 - 1620, CP 11600, Montevideo.&lt;br /&gt;&lt;br /&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Inscripciones&lt;/strong&gt;&lt;/span&gt;: 23 de octubre al 5 de noviembre de 2012.&lt;br /&gt;&lt;br /&gt;&lt;span style=&quot;text-decoration: underline;&quot;&gt;&lt;strong&gt;Informaci&amp;oacute;n&lt;/strong&gt;&lt;/span&gt;: &lt;a href=&quot;http://chea.udelar.edu.uy/%20&quot;&gt;http://chea.udelar.edu.uy/&amp;nbsp;&lt;/a&gt;&lt;/span&gt;', 10),
(36, 'PROGRAMA &quot;I Encuentro Uruguayo de Comités de Ética en el Uso de Animales&quot; 22 de Noviembre de 2012 Salón de Actos Instituto Pasteur Montevideo', '&lt;div&gt;PROGRAMA&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;14:00 Apertura a cargo de autoridades&lt;/div&gt;\n&lt;div&gt;- Dra. Ana C. Silva (Presidenta CNEA)&lt;/div&gt;\n&lt;div&gt;- Dr. Richard M&amp;ouml;ller (Presidente AUCyTAL)&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;14:20 Situaci&amp;oacute;n actual de CEUAs de diferentes &amp;aacute;mbitos&lt;/div&gt;\n&lt;div&gt;- Extrauniversitario Dr. Pablo Zunino (CEUA-IIBCE)&lt;/div&gt;\n&lt;div&gt;- Privado. Adriana Drocco (Laboratorio Santa Elena)&lt;/div&gt;\n&lt;div&gt;- Universitario. Dr. Mart&amp;iacute;n Breijo (CHEA-UdelaR)&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;15:15 Situaci&amp;oacute;n actual de la experimentaci&amp;oacute;n animal en la Universidad&lt;/div&gt;\n&lt;div&gt;- Dr. Mart&amp;iacute;n Breijo (CHEA-UdelaR)&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;15: 30 Rol del representante de la sociedad civil en el CEUA&lt;/div&gt;\n&lt;div&gt;- Ana Pais (CEUA-Fac. de Qu&amp;iacute;mica, UdelaR)&lt;/div&gt;\n&lt;div&gt;- Silvia Umpi&amp;eacute;rrez (CEUA-Fac. de Medicina)&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;15: 45 Conferencia de clausura a cargo de la Dra. Alba Salvarrey (USA)&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;16:30 Instancia para debate&lt;/div&gt;\n&lt;div&gt;&lt;br /&gt;17:30 Cierre&lt;/div&gt;', 12),
(39, 'SE PRORROGA CURSO: Cuidado y manejo de animales para experimentación. Habilitante categoría A', '&lt;strong&gt;OBJETIVOS:&lt;/strong&gt; Capacitar a personal que produce, cuida y/o mantiene animales  para tareas de experimentaci&amp;oacute;n y/o investigaci&amp;oacute;n.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;DIRIGIDO A:&lt;/strong&gt; Funcionarios de Bioterio, Laboratorios, Campos Experimentales y afines, donde se trabaja con animales tradicionales y/o productivos de experimentaci&amp;oacute;n.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;CAPACIDADES A ADQUIRIR:&lt;/strong&gt; Conocer las caracter&amp;iacute;sticas biol&amp;oacute;gicas de diferentes especies de animales utilizadas.&lt;br /&gt;&lt;br /&gt;1. Conocer las principales caracter&amp;iacute;sticas de cuidado, manejo y producci&amp;oacute;n de las especies de trabajo.&lt;br /&gt;2. Adquirir entrenamiento en manejo de animales y buenas practicas de laboratorio.&lt;br /&gt;3. Adquirir conocimientos en normas de Bioseguridad y Bio&amp;eacute;tica.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;INICIO DE CURSO: 5 de setiembre&lt;/strong&gt; de 2013.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;INSCRIPCIONES&lt;/strong&gt; abiertas hasta el &lt;strong&gt;30 de agosto&lt;/strong&gt;,&amp;nbsp; enviando Formulario de Inscripci&amp;oacute;n y Carta Aval del CEUA.&lt;br /&gt;&lt;br /&gt;Las personas que no trabajan en la Universidad de la Rep&amp;uacute;blica deber&amp;aacute;n abonar la suma de 2000 pesos Uruguayos en la cuenta en pesos del BROU&lt;br /&gt;N&amp;deg;:15225493. Se deber&amp;aacute; adjuntar la copia digital del recibo de deposito junto con este formulario al correo: &lt;a href=&quot;mailto:chea@csic.edu.uy&quot;&gt;chea@csic.edu.uy&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;Por becas consultar en &lt;a href=&quot;mailto:secretaria@cnea.org.uy&quot; target=&quot;_blank&quot;&gt;secretaria@cnea.org.uy&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;Ver el &lt;a href=&quot;http://www.dicyt.gub.uy/ftp/cnea/objetivos_curso_cuidado_manejo_animales.pdf&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;objetivo del curso&lt;/strong&gt;&lt;/a&gt; y el &lt;a href=&quot;http://www.dicyt.gub.uy/ftp/cnea/programa.pdf&quot;&gt;&lt;strong&gt;programa&lt;/strong&gt;&lt;/a&gt;.&lt;br /&gt;', 15),
(40, 'Técnico en Prevención de Riesgos Laborales en Experimentación Animal', 'Curso on line de &lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&quot;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;T&amp;eacute;cnico en Prevenci&amp;oacute;n de Riesgos Laborales en Experimentaci&amp;oacute;n Animal&quot;.&lt;br /&gt; &lt;/span&gt;&lt;/span&gt;La Comisi&amp;oacute;n Directiva de AUCyTAL&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;convoca&amp;nbsp;a los socios interesados a presentar su postulaci&amp;oacute;n para la realizaci&amp;oacute;n&amp;nbsp; del curso. &lt;br /&gt; La beca para la realizaci&amp;oacute;n de este curso ser&amp;aacute; sorteada entre los aspirantes que se presenten y cumplan todos los requisitos.&lt;/span&gt;&lt;/span&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;Requisitos:&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Ser socio AUCyTAL y tener la cuota social al d&amp;iacute;a&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;- Trabajar en un bioterio&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: #000000;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;de alguna&amp;nbsp;instituci&amp;oacute;n&amp;nbsp;p&amp;uacute;blica o privada del pa&amp;iacute;s.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Poseer acreditaci&amp;oacute;n personal otorgada por la CNEA (Categor&amp;iacute;a a y/o B)&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Presentar carta de intenci&amp;oacute;n&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Presentar carta de recomendaci&amp;oacute;n y aval se su vinculaci&amp;oacute;n laboral al bioterio correspondiente&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;br /&gt;&lt;br /&gt;&lt;/span&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;Habr&amp;aacute; plazo de presentar las aspiraciones hasta el d&amp;iacute;a&lt;strong&gt; Viernes 23 de Agosto de 2013.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;a href=&quot;http://aulavirtual.ciemat.es/AVCIEMATportal/cargarFichaCurso.do?texto=&amp;amp;identificador=49&amp;amp;idCategoria=0&amp;amp;fechaDesde=&amp;amp;tipo=1&amp;amp;fechaHasta=&quot; target=&quot;_blank&quot;&gt;Ampliar informaci&amp;oacute;n&lt;/a&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;', 16);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `registro_institucion`
--

INSERT INTO `registro_institucion` (`id`, `name`, `code`, `url`, `ordinal`) VALUES
(2, 'Fundación IRAUy', '001/11', 'www.irauy.org.uy', 0),
(3, 'Institut Pasteur', '002/11', 'www.pasteur.edu.uy', 1),
(4, 'Dinara (Dirección Nacional de Recursos Acuáticos, Ministerio de Ganaderia, Agricultura y Pesca)', '003/11', 'www.dinara.gub.uy', 2),
(5, 'Dilave (División Laboratorios Veterinarios &quot;Dr. Miguel C. Rubino, Ministerio de Ganadería, Agricultura y Pesca) ', '004/11', 'www.mgap.gub.uy', 3),
(6, 'Laboratorios Microsules Uruguay S.A ', '005/11', 'www.laboratoriosmicrosules.com', 4),
(7, 'Facultad de Ciencias (Universidad de la República) ', '006/11', 'www.fcien.edu.uy', 5),
(8, 'Centro Uruguayo de Imagenología (Cudim)', '007/11', 'www.cudim.org', 6),
(9, 'IIBCE (Instituto de Investigaciones Clemente Estable, Ministerio de Educación y Cultura)', '008/11', 'iibce.edu.uy', 7),
(10, 'INIA (Instituto Nacional de Investigación Agropecuaria)', '009/11', 'www.inia.org.uy', 8),
(11, 'Instituto Universitario CLAEH (Centro Latinoamericano de Economía Humana)', '010/11', 'www.claeh.org.uy', 9),
(12, 'Facultad de Medicina (Universidad de la República)', '011/11', 'www.fmed.edu.uy', 10),
(13, 'Instituto St Claire`s College (Fundación St. Claire`s College)', '012/11', 'www.stclares.edu.uy', 11),
(14, 'Museo Nacional de Historia Natural (Dirección de Innovación, Ciencia y Tecnología, Ministerio Educación y Cultura)', '013/11', 'mnhn.gub.uy', 12),
(15, 'Facultad de Química (Universidad de la República)', '014/11', 'www.fq.edu.uy', 13),
(16, 'Laboratorios Santa Elena (Santa Elena S.A)', '015/11', 'www.santaelena.com.uy', 14),
(17, 'Prondil S.A.', '016/11', 'www.prondil.com', 15),
(18, 'S.U.L (Secretariado Uruguayo de la Lana)', '017/11', 'www.sul.org.uy', 16),
(19, 'CURE (Centro Universitario Regional Este, Universidad de la República)', '018/11', 'www.cure.edu.uy', 17),
(20, 'Facultad Veterinaria (Universidad de la República)', '019/11', 'www.fvet.edu.uy', 18),
(21, 'LATU (Laboratorio Tecnológico del Uruguay) ', '020/11', 'www.latu.org.uy', 19),
(22, 'Facultad de Agronomía (Universidad de la República)', '021/12', 'http://portal.fagro.edu.uy/', 20),
(23, 'Regional Norte (Universidad de la República)', '022/12', 'http://www.unorte.edu.uy/', 21),
(24, 'Zoológico Parque Lecocq', '023/12', 'http://www.montevideo.gub.uy/ciudad/paseos/zoo-parque-lecocq', 22),
(25, 'Karumbé', '024/12', 'http://www.karumbe.org/', 23),
(26, 'Laboratorios Merial S.A.', '025/12', 'http://uy.merial.com/', 24),
(27, 'Dirección General de Servicios Agrícolas (MGAP)', '026/12', 'http://www.mgap.gub.uy/DGSSAA/', 25);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registro_persona`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `color`) VALUES
(17, '01', '#05d1c0'),
(18, 'acta', '#07963d'),
(19, 'cnea', '#849aa4'),
(20, 'Comisión', '#664d90'),
(21, 'Nacional', '#324fa2'),
(22, 'Experimientación', '#260011'),
(24, 'Ana Silva', '#1043cb'),
(25, 'Logotipo', '#ce6750'),
(26, 'DICYT', '#aa9e2b'),
(27, 'Acreditaciones personales', '#f56f49'),
(28, '123', '#ef5308'),
(30, 'test 2', '#ff8f53'),
(31, 'Test1', '#d8aea3'),
(32, 'curso', '#ca22fb'),
(33, 'chea', '#86a314'),
(34, 'animales de experimentación', '#03e5fc'),
(35, 'Aucytal', '#9e5ce9');

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
(31, 17),
(39, 17),
(39, 18),
(39, 20),
(38, 21),
(39, 22),
(38, 24);

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
(13, 19),
(13, 25),
(13, 26),
(15, 27),
(16, 27),
(39, 32),
(40, 32),
(39, 33),
(39, 34),
(40, 35);

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

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('02a6bd7411211c04394ec2a8ecbfc06a', 6, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.46 Safari/536.5', '190.132.64.229', '2012-05-17 11:53:02'),
('638bd4d216e836c7946d40fd4b2eb5eb', 6, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.46 Safari/536.5', '201.217.158.3', '2012-05-22 16:56:19');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(4, 6, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(6, 'administrador', '$P$B9i132NRMpeWBTD4Ay/DRjSvxkWAd/.', 'rswibmer@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '201.217.158.4', '2013-08-19 12:14:19', '2012-04-17 14:47:59', '2013-08-19 12:14:19');

--
-- Constraints for dumped tables
--

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
