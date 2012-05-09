
CREATE TABLE `registro_institucion` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`code` VARCHAR( 255 ) NOT NULL ,
`url` VARCHAR( 255 ) NULL ,
`ordinal` INT NOT NULL DEFAULT '0'
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `registro_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  `ordenInstitucion` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;