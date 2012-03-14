<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2012-03-05 16:06:50 --> Severity: Notice  --> Undefined variable: module /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/models/model_language.php 257
QUERIES - 2012-03-05 16:06:50 --> user : nobody | query: DELETE FROM `language_keys`
WHERE `filename` =  'language_lang.php'
AND `key` =  'key_key'
AND `module` IS NULL
QUERIES - 2012-03-05 16:07:37 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:07:37 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:07:42 --> user : nobody | query: DELETE FROM `language_keys`
WHERE `filename` =  'language_lang.php'
AND `key` =  'key_key'
AND `module` =  'language'
QUERIES - 2012-03-05 16:07:46 --> user : nobody | query: DELETE FROM `language_keys`
WHERE `filename` =  'language_lang.php'
AND `key` =  'ney_key'
AND `module` =  'language'
QUERIES - 2012-03-05 16:08:46 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:08:46 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
ERROR - 2012-03-05 16:15:28 --> Severity: Notice  --> Undefined variable: new_keys /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
ERROR - 2012-03-05 16:15:28 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','new_key_2',NULL)
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_lang_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_title' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_translation' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_key_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_edit_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_yes_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_db_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_all_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_file_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_show_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_this_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_new_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_save_changes' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_file' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_no_files' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_lang_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langfile_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_dir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_success' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_no_direct_access' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_not_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_keys_db' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_file_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_name_required' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_dir_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langdir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_file_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_file_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_sh_comments' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_home_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_list_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_new_lang_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:15:28 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:15:30 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:15:30 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','new_key_2','language')
QUERIES - 2012-03-05 16:15:34 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:15:34 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:16:53 --> user : nobody | query: DELETE FROM `language_keys`
WHERE `filename` =  'language_lang.php'
AND `key` =  'new_key_2'
AND `module` =  'language'
QUERIES - 2012-03-05 16:17:47 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:17:47 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:19:06 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:06 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
ERROR - 2012-03-05 16:19:19 --> Severity: Notice  --> Undefined variable: new_keys /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
ERROR - 2012-03-05 16:19:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','new_key_2',NULL)
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_lang_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_title' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_translation' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_key_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_edit_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_yes_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_db_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_all_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_file_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_show_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_this_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_new_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_save_changes' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_file' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_no_files' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_lang_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langfile_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_dir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_success' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_no_direct_access' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_not_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_keys_db' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_file_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_name_required' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_dir_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langdir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_file_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_file_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_sh_comments' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_home_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_list_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_new_lang_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:19 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:19:21 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:21 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','new_key_2','language')
QUERIES - 2012-03-05 16:19:25 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:25 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:19:39 --> user : nobody | query: DELETE FROM `language_keys`
WHERE `filename` =  'language_lang.php'
AND `key` =  'new_key_2'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:50 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:19:50 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
ERROR - 2012-03-05 16:22:31 --> Severity: Notice  --> Undefined variable: new_keys /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
ERROR - 2012-03-05 16:22:31 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 283
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','soy_una_key',NULL)
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_lang_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_title' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_translation' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_key_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_edit_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_yes_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_db_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_all_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_file_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_show_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_this_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_new_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_save_changes' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_file' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_no_files' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_lang_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langfile_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_dir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_success' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_no_direct_access' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_not_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_keys_db' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_file_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_name_required' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_dir_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langdir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_file_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_file_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_sh_comments' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_home_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_list_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_new_lang_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:22:31 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:22:36 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:22:36 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','soy_una_key','language')
QUERIES - 2012-03-05 16:22:39 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:22:39 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:31:43 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:31:43 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
QUERIES - 2012-03-05 16:33:07 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:33:07 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:33:07 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 29
ERROR - 2012-03-05 16:33:11 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 29
ERROR - 2012-03-05 16:34:11 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list.php 33
ERROR - 2012-03-05 16:34:11 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 29
QUERIES - 2012-03-05 16:37:10 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:37:10 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:37:10 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:37:10 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:37:39 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
ERROR - 2012-03-05 16:37:39 --> Severity: Notice  --> Undefined variable: new_keys /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 285
ERROR - 2012-03-05 16:37:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 285
QUERIES - 2012-03-05 16:37:39 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','language_new_lang_module_info',NULL)
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_lang_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_title' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_lang' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_translation' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_key_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_edit_file_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_yes_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_first_time_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_db_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_all_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_keys_file_warning' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_show_keys' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_this_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_add_new_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_save_changes' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_delete_file' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_no_files' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_lang_label' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langfile_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_dir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_success' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_no_direct_access' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_not_saved' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_keys_db' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_file_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_name_required' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_created' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_creating_dir_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_msg_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_langdir_not_exist' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_error_delete_file_permissions' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_key_deleted' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_confirm_file_delete' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_sh_comments' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_home_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_file_list_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_create_file_link' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_new_lang_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'soy_una_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:37:40 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:37:40 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:37:40 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:37:41 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:37:41 --> user : nobody | query: INSERT INTO `language_keys` (`filename`, `key`, `module`) VALUES ('language_lang.php','language_new_lang_module_info','language')
QUERIES - 2012-03-05 16:37:45 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:37:45 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:37:45 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:37:45 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:38:23 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:38:23 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:38:23 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:38:23 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:39:04 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` IS NULL
QUERIES - 2012-03-05 16:39:04 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` IS NULL
QUERIES - 2012-03-05 16:39:04 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:39:04 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:39:04 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:39:08 --> Severity: Warning  --> copy(application/modules//language/spanish/backup_language_lang.php): failed to open stream: No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 534
ERROR - 2012-03-05 16:39:08 --> Severity: Warning  --> require(application//language/english/language_lang.php): failed to open stream: No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 523
QUERIES - 2012-03-05 16:39:24 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` IS NULL
QUERIES - 2012-03-05 16:39:24 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'ney_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:39:24 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'new_key_2' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:39:24 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'soy_una_key' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:39:24 --> user : nobody | query: UPDATE `language_keys` SET `comment` = '' WHERE `key` =  'language_new_lang_module_info' AND `filename` =  'language_lang.php' AND `module` IS NULL
QUERIES - 2012-03-05 16:39:25 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` IS NULL
QUERIES - 2012-03-05 16:39:25 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:39:25 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:39:25 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:39:28 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` IS NULL
QUERIES - 2012-03-05 16:39:28 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:39:28 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:39:28 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
QUERIES - 2012-03-05 16:42:07 --> user : nobody | query: SELECT `key` as `keys`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
AND `module` =  'language'
QUERIES - 2012-03-05 16:42:07 --> user : nobody | query: SELECT `key` as `keys`, `comment`
FROM (`language_keys`)
WHERE `filename` =  'language_lang.php'
ERROR - 2012-03-05 16:42:07 --> Severity: Notice  --> Undefined variable: allModules /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:42:07 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/views/dir_list_view.php 33
ERROR - 2012-03-05 16:47:36 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 411
ERROR - 2012-03-05 16:47:36 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:47:36 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:48:09 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 411
ERROR - 2012-03-05 16:48:09 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:48:09 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:49:11 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 411
ERROR - 2012-03-05 16:49:11 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:49:11 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:49:22 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 411
ERROR - 2012-03-05 16:49:22 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:49:22 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:51:16 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 411
ERROR - 2012-03-05 16:51:16 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:51:16 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:51:33 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 412
ERROR - 2012-03-05 16:51:33 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 414
ERROR - 2012-03-05 16:51:33 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 414
ERROR - 2012-03-05 16:52:13 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 413
ERROR - 2012-03-05 16:52:13 --> Severity: Notice  --> Undefined variable: mDir /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 415
ERROR - 2012-03-05 16:52:13 --> Severity: Warning  --> mkdir(): No such file or directory /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 415
ERROR - 2012-03-05 16:53:01 --> Severity: Warning  --> mkdir(): Permission denied /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 415
ERROR - 2012-03-05 16:54:15 --> Severity: Warning  --> mkdir(): Permission denied /home/rodrigo/proyectos/www/CodeIgniter_1.9/application/modules/language/controllers/language.php 418
