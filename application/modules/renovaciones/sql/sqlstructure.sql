
-- --------------------------------------------------------

--
-- Table structure for table `renovacion`
--

CREATE TABLE IF NOT EXISTS `renovacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institucion` int(11) NOT NULL,
  `laboratorio` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `cargahoraria` int(11) NOT NULL,
  `jefe` varchar(255) NOT NULL,
  `categoriaA` tinyint(1) NOT NULL,
  `categoriaB` tinyint(1) NOT NULL,
  `categoriaC1` tinyint(1) NOT NULL,
  `categoriaC2` tinyint(1) NOT NULL,
  `fechaacreditacion` date NOT NULL,
  `numregistro` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion` (`institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `renovacion` ADD `fechasolicitud` DATE NOT NULL AFTER `fechaacreditacion` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `renovacion`
--
ALTER TABLE `renovacion`
  ADD CONSTRAINT `renovacion_ibfk_1` FOREIGN KEY (`institucion`) REFERENCES `institucion` (`id`);

CREATE TABLE IF NOT EXISTS `renovacionprotocolo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `renovacionid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  KEY `renovacionid` (`renovacionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `renovacionprotocolo`
  ADD CONSTRAINT `renovacionprotocolo_ibfk_1` FOREIGN KEY (`renovacionid`) REFERENCES `renovacion` (`id`);

CREATE TABLE IF NOT EXISTS `renovacionevento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `renovacionid` int(11) NOT NULL,
  `name` varchar(255) default '',
  `fecha` date default NULL,
  `lugar` varchar(255) default '',
  PRIMARY KEY (`id`),
  KEY `renovacionid` (`renovacionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `renovacionevento`
  ADD CONSTRAINT `renovacionevento_ibfk_1` FOREIGN KEY (`renovacionid`) REFERENCES `renovacion` (`id`);


CREATE TABLE IF NOT EXISTS `renovaciontitulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `renovacionid` int(11) NOT NULL,
  `name` varchar(255) default '',
  `description` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  KEY `renovacionid` (`renovacionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `renovaciontitulo`
  ADD CONSTRAINT `renovaciontitulo_ibfk_1` FOREIGN KEY (`renovacionid`) REFERENCES `renovacion` (`id`);