CREATE TABLE `enlaces_intereses` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nombre` VARCHAR( 255 ) NOT NULL ,
`link` VARCHAR( 255 ) NOT NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;

CREATE TABLE `documentos_intereses` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nombre` VARCHAR( 255 ) NOT NULL ,
`link` VARCHAR( 255 ) NOT NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;