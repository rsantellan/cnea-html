CREATE TABLE `ci_lang_test`.`novedades` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nombre` VARCHAR( 255 ) NOT NULL ,
`descripcion` TEXT NOT NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;