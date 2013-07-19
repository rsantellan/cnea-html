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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `institucion` ADD `cvfilename` VARCHAR( 255 ) NOT NULL ,
ADD `cvfilepath` VARCHAR( 255 ) NOT NULL;

ALTER TABLE `institucion` CHANGE `cvfilename` `cvfilename` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
CHANGE `cvfilepath` `cvfilepath` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;



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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `institucionespecie`
--
ALTER TABLE `institucionespecie`
  ADD CONSTRAINT `institucionespecie_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);


CREATE TABLE IF NOT EXISTS `instituciondocenteinvestigador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `instituciondocenteinvestigador`
  ADD CONSTRAINT `instituciondocenteinvestigador_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

CREATE TABLE IF NOT EXISTS `institucionveterinario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `institucionveterinario`
  ADD CONSTRAINT `institucionveterinario_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

CREATE TABLE IF NOT EXISTS `institucionsociedadcivil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `institucionsociedadcivil`
  ADD CONSTRAINT `institucionsociedadcivil_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);

CREATE TABLE IF NOT EXISTS `institucionunidadesdependientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `institucionunidadesdependientes` ADD `nombre` VARCHAR( 255 ) NOT NULL; 

ALTER TABLE `institucionunidadesdependientes`
  ADD CONSTRAINT `institucionunidadesdependientes_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);


CREATE TABLE IF NOT EXISTS `institucionarchivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `institucionarchivos`
  ADD CONSTRAINT `institucionarchivos_ibfk_1` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);