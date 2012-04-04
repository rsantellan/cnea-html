CREATE TABLE `ci_lang_test`.`registro_persona` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`code` VARCHAR( 255 ) NOT NULL ,
`email` VARCHAR( 255 ) NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;

CREATE TABLE `registro_institucion` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`code` VARCHAR( 255 ) NOT NULL ,
`url` VARCHAR( 255 ) NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;