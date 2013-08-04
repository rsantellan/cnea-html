-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2012 at 05:52 PM
-- Server version: 5.1.61
-- PHP Version: 5.3.2-1ubuntu4.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ci_lang_test`
--
CREATE DATABASE `cnea` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cnea`;

-- --------------------------------------------------------

--
-- Table structure for table `actas`
--

DROP TABLE IF EXISTS `actas`;
CREATE TABLE IF NOT EXISTS `actas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `actas`
--

INSERT INTO `actas` (`id`, `nombre`, `ordinal`) VALUES
(1, 'Acta numero 1', 0),
(2, 'Acta numero 2', 3),
(3, 'Acta n 5434', 2),
(4, 'Acta n 12309123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
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
('0b82fef5429ca73ff9d98067bc0713b0', '192.168.1.174', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.79 Safari/535.11', 1332362222, ''),
('222adff18d992d8056dea7df7407a935', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:11.0) Gecko/20100101 Firefox/11.0', 1332361886, ''),
('c40e34feee15cd4ffc9b45d18eaf9201', '192.168.1.174', 'Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko/20100101 Firefox/11.0', 1332362672, '');

-- --------------------------------------------------------

--
-- Table structure for table `language_keys`
--

DROP TABLE IF EXISTS `language_keys`;
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
('language_confirm_lang_delete', 'language_lang.php', '', 'language'),
('language_title', 'language_lang.php', '', 'language'),
('language_delete_lang', 'language_lang.php', '', 'language'),
('language_create_lang', 'language_lang.php', '', 'language'),
('language_create_label', 'language_lang.php', '', 'language'),
('language_key', 'language_lang.php', '', 'language'),
('language_translation', 'language_lang.php', '', 'language'),
('language_confirm_key_delete', 'language_lang.php', '', 'language'),
('language_create_file_info', 'language_lang.php', '', 'language'),
('language_edit_file_info', 'language_lang.php', '', 'language'),
('language_first_time_info', 'language_lang.php', '', 'language'),
('language_yes_label', 'language_lang.php', '', 'language'),
('language_first_time_warning', 'language_lang.php', '', 'language'),
('language_keys_db_warning', 'language_lang.php', '', 'language'),
('language_add_all_keys', 'language_lang.php', '', 'language'),
('language_keys_file_warning', 'language_lang.php', '', 'language'),
('language_show_keys', 'language_lang.php', '', 'language'),
('language_add_this_key', 'language_lang.php', '', 'language'),
('language_delete_key', 'language_lang.php', '', 'language'),
('language_add_new_key', 'language_lang.php', '', 'language'),
('language_save_changes', 'language_lang.php', '', 'language'),
('language_delete_file', 'language_lang.php', '', 'language'),
('language_no_files', 'language_lang.php', '', 'language'),
('language_file_label', 'language_lang.php', '', 'language'),
('language_lang_label', 'language_lang.php', '', 'language'),
('language_langfile_not_exist', 'language_lang.php', '', 'language'),
('language_error_dir_not_exist', 'language_lang.php', '', 'language'),
('language_msg_success', 'language_lang.php', '', 'language'),
('language_error', 'language_lang.php', '', 'language'),
('language_error_no_direct_access', 'language_lang.php', '', 'language'),
('language_file_saved', 'language_lang.php', '', 'language'),
('language_file_not_saved', 'language_lang.php', '', 'language'),
('language_error_keys_db', 'language_lang.php', '', 'language'),
('language_file_created', 'language_lang.php', '', 'language'),
('language_error_creating_permissions', 'language_lang.php', '', 'language'),
('language_error_file_exist', 'language_lang.php', '', 'language'),
('language_error_name_required', 'language_lang.php', '', 'language'),
('language_created', 'language_lang.php', '', 'language'),
('language_error_creating_dir_permissions', 'language_lang.php', '', 'language'),
('language_error_exist', 'language_lang.php', '', 'language'),
('language_msg_deleted', 'language_lang.php', '', 'language'),
('language_error_delete_permissions', 'language_lang.php', '', 'language'),
('language_langdir_not_exist', 'language_lang.php', '', 'language'),
('language_file_deleted', 'language_lang.php', '', 'language'),
('language_error_delete_file_permissions', 'language_lang.php', '', 'language'),
('language_key_deleted', 'language_lang.php', '', 'language'),
('language_confirm_file_delete', 'language_lang.php', '', 'language'),
('language_sh_comments', 'language_lang.php', '', 'language'),
('language_home_link', 'language_lang.php', '', 'language'),
('language_file_list_link', 'language_lang.php', '', 'language'),
('language_create_file_link', 'language_lang.php', '', 'language'),
('language_new_lang_info', 'language_lang.php', '', 'language'),
('header_logued_as', 'header_lang.php', '', NULL),
('set_home', 'breadcrumb_lang.php', '', NULL),
('soy_una_key', 'header_lang.php', '', NULL),
('ney_key', 'language_lang.php', '', NULL),
('new_key_2', 'language_lang.php', '', NULL),
('new_key_2', 'language_lang.php', '', NULL),
('soy_una_key', 'language_lang.php', '', NULL),
('soy_una_key', 'language_lang.php', '', 'language'),
('language_new_lang_module_info', 'language_lang.php', '', NULL),
('language_new_lang_module_info', 'language_lang.php', '', 'language'),
('language_module_label', 'language_lang.php', '', NULL),
('language_module_label', 'language_lang.php', '', 'language');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
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


-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'rodrigo', '$P$BcGvVjyAWHNguznOC39D4hKBe5N3qI.', 'rsantellan@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-03-20 11:43:52', '2012-03-16 17:02:17', '2012-03-20 11:43:52'),
(5, 'pepe', '$P$B7IQtr1EGYpEeiPrIc98zszn3nXa811', 'pepe@gasd.com', 0, 0, NULL, NULL, NULL, NULL, '4160b92a35a78789a64ac7a1912ef485', '127.0.0.1', '0000-00-00 00:00:00', '2012-03-20 11:35:18', '2012-03-20 11:35:18');
SET FOREIGN_KEY_CHECKS=1;
