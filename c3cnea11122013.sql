-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 04:00 PM
-- Server version: 5.1.50
-- PHP Version: 5.2.17

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3cnea`
--

-- --------------------------------------------------------

--
-- Table structure for table `acreditacion`
--

DROP TABLE IF EXISTS `acreditacion`;
CREATE TABLE IF NOT EXISTS `acreditacion` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombreapellido` varchar(255) NOT NULL,
  `formacion` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `direccionpostal` varchar(255) NOT NULL,
  `direccionelectronica` varchar(255) NOT NULL,
  `telefonocontacto` varchar(255) NOT NULL,
  `instituciondesempeno` int(11) NOT NULL,
  `laboratoriounidad` varchar(255) NOT NULL,
  `cargofuncioninstitucion` varchar(255) NOT NULL,
  `cargahorariasemanal` int(11) NOT NULL,
  `nombresupervisor` varchar(255) NOT NULL,
  `especiestrabajadas` text NOT NULL,
  `describatareas` text NOT NULL,
  `pctinvestigacion` int(11) NOT NULL,
  `pctmedicinaclinica` int(11) NOT NULL,
  `pctcirugia` int(11) NOT NULL,
  `pctmantenimientocolonias` int(11) NOT NULL,
  `pctmanipulacion` int(11) NOT NULL,
  `pctdirprojectos` int(11) NOT NULL,
  `pctnecropsia` int(11) NOT NULL,
  `pctdiaglaboratorio` int(11) NOT NULL,
  `pctceua` int(11) NOT NULL,
  `pcthistopatologia` int(11) NOT NULL,
  `pctentedu` int(11) NOT NULL,
  `pctapoyoinvestigadores` int(11) NOT NULL,
  `pctsupervision` int(11) NOT NULL,
  `pctprodanimal` int(11) NOT NULL,
  `pctlegal` int(11) NOT NULL,
  `pctotrasfunciones` int(11) NOT NULL,
  `pctfuncnorel` int(11) NOT NULL,
  `pctobservaciones` text NOT NULL,
  `realizocursos` tinyint(1) NOT NULL,
  `acrpersonales` tinyint(1) NOT NULL,
  `curso1` varchar(255) DEFAULT NULL,
  `curso2` varchar(255) DEFAULT NULL,
  `curso3` varchar(255) DEFAULT NULL,
  `cursoobservacion` text,
  `acrorganismo` varchar(255) DEFAULT NULL,
  `acrcategoria` varchar(255) DEFAULT NULL,
  `acrfecha` date DEFAULT NULL,
  `categoria` varchar(255) NOT NULL,
  `categoriaA` tinyint(1) NOT NULL DEFAULT '0',
  `categoriaB` tinyint(1) NOT NULL DEFAULT '0',
  `categoriaC1` tinyint(1) NOT NULL DEFAULT '0',
  `categoriaC2` tinyint(1) NOT NULL DEFAULT '0',
  `cvfile` varchar(255) NOT NULL,
  `cvpath` varchar(255) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `fechavencimiento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `acreditacion`
--

INSERT INTO `acreditacion` (`id`, `fecha`, `nombreapellido`, `formacion`, `documento`, `fechanacimiento`, `direccionpostal`, `direccionelectronica`, `telefonocontacto`, `instituciondesempeno`, `laboratoriounidad`, `cargofuncioninstitucion`, `cargahorariasemanal`, `nombresupervisor`, `especiestrabajadas`, `describatareas`, `pctinvestigacion`, `pctmedicinaclinica`, `pctcirugia`, `pctmantenimientocolonias`, `pctmanipulacion`, `pctdirprojectos`, `pctnecropsia`, `pctdiaglaboratorio`, `pctceua`, `pcthistopatologia`, `pctentedu`, `pctapoyoinvestigadores`, `pctsupervision`, `pctprodanimal`, `pctlegal`, `pctotrasfunciones`, `pctfuncnorel`, `pctobservaciones`, `realizocursos`, `acrpersonales`, `curso1`, `curso2`, `curso3`, `cursoobservacion`, `acrorganismo`, `acrcategoria`, `acrfecha`, `categoria`, `categoriaA`, `categoriaB`, `categoriaC1`, `categoriaC2`, `cvfile`, `cvpath`, `isactive`, `fechavencimiento`) VALUES
(7, '2012-07-06', 'Marcela Vilariño Pereda', 'terciaria', '30237920', '0000-00-00', 'Juan Pablo Laguna 3401 Apto 6', 'mvilarinio@gmail.com', '099957588', 29, 'Fundación IRAUy', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', 'A', 1, 1, 0, 0, '', '', 0, '2017-01-01'),
(8, '2012-05-25', 'Alejo Menchaca', 'terciaria', '34520327', '1973-03-24', 'Camino Cruz del Sur 2250', 'alejomen@adinet.com.uy', '099687206', 29, 'Fundación IRAUy', 'Director', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bienestar y ética en experimentación animal', '', '', '', '', '', '0000-00-00', 'C2', 0, 0, 0, 1, '', '', 0, '2018-01-09'),
(9, '2012-06-02', 'Francesco Mattia Rossi', 'terciaria', '57487966', '0000-00-00', 'Mataojo 2020', 'fmrossi@pasteur.edu.uy', '25220910 interno 144', 30, 'Laboratorio de Neurodegeneración', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', 'B', 0, 1, 0, 1, '', '', 0, '2016-01-01'),
(11, '2012-06-29', 'Gabriel Fernandez Graña', 'terciaria', '33368592', '1978-12-29', 'xx', 'gabifergra@pasteur.edu.uy', '098228063', 30, 'Instituto Pasteur', 'Ayudante Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso sobre cuidado y manejo de animales de experimentación', 'Salud, bienestar y producción de animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', '', '', '', '0000-00-00', 'A', 1, 1, 0, 0, '', '', 0, '2017-09-11'),
(14, '2012-06-26', 'Ana Paula Arévalo', 'primaria', '26726664', '1979-01-04', 'Mataojo 2020', 'aparevalo@pasteur.edu.uy', '25220910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Ayudante Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Cuidados e manejo de animales de experimentación', 'Genétics of Laboratorie Rodens course', '', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2017-12-11'),
(15, '2012-07-26', 'Andrea Medeiro', 'primaria', '19352818', '1973-05-09', 'Estanislao López 4988', 'amedeiro@fmed.edu.uy', '098599876', 30, 'Biología redox tripanosomas', 'Investigador Post Doctoral', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo, técnico de administración de sustancias y obtención d emuestras de ratones', 'Diseño experimental y tamaño de la muestra en trabajos con animales de laboratorio', 'Uso y manejo de animales de laboratorio', '', 'CHEA', 'B y C2', '2017-07-23', '', 0, 1, 0, 1, '', '', 0, '2017-07-23'),
(16, '2012-07-06', 'Diego Benitez', 'primaria', '34310110', '1982-06-30', 'Mataojo 2020', 'dbenitez@pasteur.edu.uy', '096914554', 30, 'Laboratorio de Biología Redox de Tripanosomas', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de uso de manejo de animales de laboratorio', 'Curso de manejo, técnicas de administración de sustancias y obtención de muestras de ratones', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(17, '2012-07-26', 'Eduardo Osinaga', 'primaria', '19181502', '1954-08-28', 'Plaza de los Olímpicos 4431', 'eosinaga@pasteur.edu.uy', '099219572', 30, 'Instituto Pasteur', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-10-31', '', 0, 0, 0, 1, '', '', 0, '2014-12-31'),
(18, '2012-07-06', 'Federico Cetra', 'primaria', '55133387', '1981-12-21', '21 de Setiembre 2570', 'fedecetra@pasteur.edu.uy', '098302806', 30, 'Instituto Pasteur', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(19, '2012-06-11', 'Geraldine Schlapp', 'primaria', '26499047', '1979-09-21', 'Enrique Pouey 2520 apto 101', 'gschlapp@pasteur.edu.uy', '252550910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Ayudante Técnico DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de uso de manejo de animales de laboratorio', 'Curso taller monitorie microbiológico de ratas y ratones de experimentación', 'Workshop on colony manangment', '', '', '', '0000-00-00', '', 0, 1, 1, 0, '', '', 0, '2017-09-11'),
(20, '2012-06-29', 'Hugo Peluffo', 'primaria', '18700953', '1973-12-08', 'Mataojo 2020', 'hugo.peluffo@pasteur.edu.uy', '25220910 interno 144', 30, 'Laboratorio de Neurodegeneración', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Formación para el personal investigador, usario de animales de experimentación y otras finalidades científica', '', '', 'Curso 1: Universidad Autónoma de Barcelona', 'CHEA', 'C2', '2013-06-18', '', 0, 0, 0, 1, '', '', 0, '2013-06-18'),
(21, '2012-07-09', 'Lucía Goyeneche', 'primaria', '41105782', '1983-07-28', 'Pablo de María 1247 apto. 2', 'luciagoye@gmail.com', '099143011', 30, 'Instituto Pasteur', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(22, '2012-06-07', 'Magadalena Cardenas', 'primaria', '29364271', '1980-01-05', 'Mataojo 2020', 'cardenas@pasteur.edu.uy', '25220910 interno 146', 30, 'Laboratorio de Genética Molecular Humana', 'Asistente de Investigación', 400, 'José Badano', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Procedimientos experimentales en pequeños animales de experimentación', 'Monitoreo microbiológico de ratas y ratones de experimentación', 'Producción y mantenimiento de animales libres de patógenos específicos. Administración y manejo de instalaciones con barreras sanitarias', 'Curso 1 al 3:Facultad de Ciencias Veterinaria - Universidad de la Plata ', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(23, '2012-07-08', 'Marcelo Comini', 'primaria', '56971560', '1973-10-30', 'Mataojo 2020', 'mcomini@pasteur.edu.uy', '5220910 interno 164', 30, 'Instituto Pasteur', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Principles of Laboratory Animal and Methods of Animal Experimentation. Gesellschaft fur Versuchstierkunde, Society of Laboratory Animal Science.', '', '', 'Heidelberg, Alemania.', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-01-31'),
(24, '2012-06-30', 'Mariela Bollati', 'primaria', '56249995', '1970-10-04', 'Mataojo 2020', 'mbollati@pasteur.edu.uy', '25220910 interno 126', 30, 'Unidad de Biología Celular', 'Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Principles of Laboratory Animal and Methods of Animal Experimentation. ', '', '', 'Gesellschaft fur Versuchstierkunde, Society of Laboratory Animal Science.', '', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 0, '2018-01-30'),
(25, '2012-06-27', 'Martina Crispo', 'primaria', '17389976', '1973-04-02', 'Mataojo 2020', 'crispo@pasteur.edu.uy', '25220910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Genetique de la Souries', '', '', 'Curso 1: Instituto Pasteur de París 2006', '', '', '0000-00-00', '', 0, 1, 1, 1, '', '', 0, '2018-01-31'),
(26, '2012-07-10', 'Natalia Lago', 'primaria', '58458025', '1976-11-28', 'Mataojo 2020', 'nlago@paster.edu.uy', '25220910 interno 144', 30, 'Instituto Pasteur', 'Técnico Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de Formación de personal investigador, usario de animales para experimentación y otras finalidades científicas', '', '', '', 'CHEA', '', '2016-08-01', '', 0, 0, 0, 1, '', '', 0, '2016-08-01'),
(27, '2012-07-26', 'Nora Veroa', 'primaria', '19181132', '1954-09-09', 'Plaza de los Olímpicos 4431', 'nveroa@pasteur.edu.uy', '099269989', 30, 'Instituto Pasteur', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '2014-10-01', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(28, '2012-07-09', 'Rúben Agrelo', 'primaria', '15782128', '1966-10-13', 'Mataojo 2020', 'agrelo@pasteur.edu.uy', '25220910 interno 172', 30, 'Laboratoria Epigenética de cancer y envejecimiento', 'Líder de grupo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Acreditación Europea (felasa)', '', '', 'Centro Nacional de Investigaciones Oncológicas de Madrid', 'Centro Nacional de Investigaciones Oncológicas de Madrid', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 0, '2018-01-31'),
(29, '2012-06-01', 'Ana Sofía Ramírez', 'primaria', '35998056', '1985-05-17', 'Mataojo 2020', 'sramirez@pasteur.edu.uy', '099972392', 30, 'Instituto Pasteur', 'Asistente Técnico, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Genetics of Laboratory Rodens Course', '', '', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2017-09-11'),
(30, '2013-03-01', 'María Noel Meikle', 'primaria', '30470887', '1982-04-13', 'Mataojo 2020', 'manomeikle@pasteur.edu.uy', '099210499', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CNEA', '', '2017-09-11', '', 1, 1, 0, 0, '', '', 0, '2018-07-01'),
(31, '2012-12-19', 'Diego Charquero', 'primaria', '39818690', '1987-11-11', 'Mataojo 2020', 'dcharquero@pasteur.edu.uy', '099394664', 30, 'Instituto Pasteur', 'Pasante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2018-07-09'),
(32, '2013-03-13', 'Marcelo Hill', 'primaria', '19742283', '1975-11-24', 'Daymán 1131 - Parque Myramar - Canelones', 'mhill@nantes.inserm.fr', '091692421', 30, 'Instituto Pasteur', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-07-23'),
(33, '2012-07-15', 'Ernesto Chiesa', 'primaria', '11457245', '1913-12-31', 'DINARA MGAP', 'echiesa@dinara.gub.uy', '24004689', 31, 'DINARA', 'Técnico Especilizado Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales no tradicionales en investigación', '', '', 'CHEA - Facultad de Ciencias - CURE', 'No especifica', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(34, '2012-07-04', 'Miguel Ángel Bellagamba', 'primaria', '33892177', '1963-07-30', 'Osimani y Llerena 835, Salto', 'miguelbellagamba@gmail.com', '098908299', 31, 'DINARA', 'Técnico Profesional A4', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 0, '2018-01-31'),
(35, '2012-07-15', 'Martín Bessonart', 'terciaria', '31201326', '1968-05-23', 'Orinoco 5086', 'martinb@fciend.edu.uy', '099593969', 31, 'Estación Acuicultura Cabo Polonio', 'Consultor FAO', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Doctora de Acuicultura', '', '', 'Universidad de Las Palmas - España', 'CHEA', 'B', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-01-31'),
(36, '2012-07-10', 'Luciana Mesa', 'primaria', '31091078', '1913-01-01', 'xx', 'lucianamesa@gmail.com', '22221063', 32, 'Miguel Rubino', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Curso Pre Congreso Current Topics in Laboratory Animal Science - III', 'III Reunión Científica Regional ICLAS, FESSACAL, ACCMAL: Biomodelos Aplicados al Desarrollo e Innovación Tecnológica', 'Curso 1: Chea', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(37, '2012-07-11', 'María Angélica Solari', 'primaria', '12046539', '1950-10-23', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'masolari@mgap.gub.uy', '098814027', 32, 'Depto. de Parasitología', 'Técnico Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-07-01'),
(38, '2012-07-27', 'Rodolfo Rivero García', 'primaria', '38401521', '1952-06-04', 'Florida 1233 - Paysandú', 'rrivero@mgap.gub.uy', '099719008', 32, 'Laboratorio Regional Noroeste', 'Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'Universidad de Ciencias Agrícolas de Suecia', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2013-07-23'),
(39, '2012-07-11', 'Ulises Cuore', 'primaria', '13789287', '1958-12-15', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'ucuore@mgap.gub.uy', '099623516', 32, 'Depto. de Parasitología/ Sección Etoparásitos', 'Encargado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-07-01'),
(40, '2012-07-11', 'Valeria Gayo', 'primaria', '16514213', '1963-08-14', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'valeriagayo@gmail.com', '099681798', 32, 'DILAVE', 'Técnico Encargado de Sección', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-07-01'),
(41, '2012-05-25', 'Mariángeles Antenucci', 'primaria', '111111111', '0000-00-00', 'René 1672 apto 001', 'mariangeles@laboratoriosmicrosules.com', '099023055', 33, 'Laboratorio Microsules', 'Jefa de Control de Calidad de Planta Biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(42, '0000-00-00', 'Verónica Gutierrez Castro', 'primaria', '111111111', '0000-00-00', 'Avda. Italia 2917 apto. 7', 'vgutierrez@laboratoriosmicrosules.com', '095819798', 33, 'Laboratorio Microsules', 'Encargada de Bioterio de Planta Biológica de Ensayos', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de docencia e investigación universitaria', 'Maestría en Ciencias Agrarias, opción Animal', 'Capacitación de 6 meses sobre Gestión y Manejo de Bioterio, Manipulación y ejecución de Experimentos con Animales de Laboratorioa', 'Curso 1: CHEA\nCurso2: Facultad de Agronomía - UDELAR\nCurso3 Instituto Pasteur de Montevideo', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '0000-00-00'),
(43, '2013-09-13', 'Vanessa Sosa', 'primaria', '19668366', '1977-05-10', 'Serafín J. García 3920', 'vsosa@laboratoriosmicrosules.com', '094267992', 33, 'Planta Biológico', 'Jefa de Laboratorio de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Monitoreo microbiológico de ratas y ratones de experimentación', '', 'Curso1:Facultad de Química\nCurso2: CHEA', 'Prondil S.A.', 'A y B', '2017-09-11', '', 1, 1, 0, 0, '', '', 0, '2013-11-05'),
(44, '2012-07-11', 'María Alejandro Terevinto', 'primaria', '31706978', '1982-07-04', 'Francisco Solano Antuña 2777 apto 801', 'ale4782@hotmail.com', '099171198', 34, 'Fisiología y Nutrición', 'Grado I, Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1:Facultad de Veterinaria', 'CHEA', 'B', '2015-04-23', '', 0, 1, 0, 0, '', '', 0, '2015-04-30'),
(45, '2012-07-24', 'Ana Silva', 'terciaria', '15418971', '1962-11-02', 'Avda. Italia 3318', 'anasilvabarbato@gmail.com', '24875532', 34, 'Laboratorio de Neurociencias', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-11-10', '', 0, 1, 0, 1, '', '', 0, '2014-11-10'),
(46, '2012-07-03', 'Ana María Hernandez', 'terciaria', '16812590', '0000-00-00', 'Alfredo Navarro 3051, piso 2', 'aherna@fq.edu.uy', '24801196', 34, 'Inmunología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-11-05', '', 0, 1, 0, 1, '', '', 0, '2014-11-05'),
(47, '2012-07-01', 'Anabell Ferreira', 'terciaria', '13015187', '0000-00-00', 'Iguá 4225', 'ferreira.anabell@gmail.com', '25258618 interno 7151', 34, 'Fisiología y Nutrición', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C1 y C2', '2014-11-30', '', 0, 0, 1, 1, '', '', 0, '2014-12-31'),
(48, '2012-07-04', 'Daniel García', 'terciaria', '26027733', '0000-00-00', 'Colonia 1392 apto 302', 'dgfsan@gmail.com', '096849341', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(49, '2012-07-26', 'Daniel Hernández', 'terciaria', '40522692', '0000-00-00', 'Gaboto 1696 apto 202', 'gallegodez@gmail.com', '098233051', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(50, '0000-00-00', 'Daniel Prieto', 'terciaria', '111111111', '1912-01-01', 'Iguá 4225', 'dprieto@fcien.edu.uy', '11111111111111111', 34, 'xx', 'Docente, Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'xxxxxxxx', '', '', '', 'CHEA', 'A y B', '2013-12-31', '', 1, 1, 0, 0, '', '', 0, '2013-04-30'),
(51, '2012-07-13', 'Daniella Agrati', 'terciaria', '30769450', '1979-04-18', 'Iguá 4225', 'dagrati@fcien.edu.uy', '25258618 interno 7151 - 098660428', 34, 'Sección Fisiología y Nutrición', 'Asistente Técnico, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', 'Curso 1: Facultad de Química\nCurso 2: CHEA\nCurso 3: AUCYTAL', 'CHEA', 'B y C2', '2014-11-10', '', 0, 1, 0, 1, '', '', 0, '2014-11-10'),
(52, '2012-07-02', 'Flavio Zolessi', 'terciaria', '17942514', '0000-00-00', 'Iguá 4225', 'fzolessi@gmail.com', '25258618 interno 7144', 34, 'Unidad de Biología Celular', 'Profesor Adjunto, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 0, '2013-07-10'),
(53, '2012-06-02', 'Francesco Mattia Rossi', 'terciaria', '57487966', '0000-00-00', 'Iguá 4225', 'fmrossi@pasteur.edu.uy', '25258618 interno 7138', 34, 'Facultad de Ciencias', 'Profesor Adjunto, Grado III, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2016-05-04', '', 0, 1, 0, 1, '', '', 0, '2016-05-04'),
(54, '2012-07-24', 'Gabriel Francescoli', 'terciaria', '13539410', '1959-11-29', 'Iguá 4225', 'gabo@fcien.edu.uy', '098363738', 34, 'Etiología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-11-10', '', 0, 0, 0, 1, '', '', 0, '2014-11-10'),
(55, '2012-07-24', 'Gabriel Bedó', 'terciaria', '15866192', '1958-09-27', 'Chaná 2013 apto 3', 'bedogabriela@gmail.com', '099283046', 34, 'Genética Evolutiva', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio - módulo I', 'Uso y manejo de animales de laboratorio - módulo II', '', 'Curso 1: CHEA\nCurso 2: CHEA', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 0, '2014-12-31'),
(56, '2012-07-30', 'Gisela Perira', 'terciaria', '38577540', '1986-06-22', 'Iguá 4225', 'gisepe04@gmail.com', '26191150', 34, 'Instituo de Ecología y Ciencias Ambientales', 'Ayudante de Laboratorio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'Facultad de Ciencias - UDELAR', 'B', '2016-09-06', '', 0, 1, 0, 0, '', '', 0, '2016-09-11'),
(57, '2012-07-25', 'Gonzalo Aparicio Díaz', 'terciaria', '47074874', '0000-00-00', 'Iguá 4225', 'gaparicio@fcien.edu.uy', '094104514', 34, 'Unidad de Biología Celular', 'Docente, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '2017-07-20', '', 0, 1, 0, 0, '', '', 0, '2018-01-31'),
(58, '2012-07-03', 'Guzman Álvarez', 'terciaria', '47541243', '0000-00-00', 'Iguá 4225', 'guzmanalvarezlqo@gmail.com', '25258618 interno 216', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Facultad de Veterinaria', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(59, '2012-07-12', 'Larisa Magnone', 'terciaria', '42336520', '1978-01-18', 'Iguá 4225', 'larisa@fcien.edu.uy', '22099657', 34, 'Laboratorio de Recursos Naturales', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(60, '2012-06-29', 'Laura Celano', 'terciaria', '33922758', '0000-00-00', 'Iguá 4225', 'lcelano@gmail.com', '099990658', 34, 'Facultad de Ciencias', 'Asistente de Enzimología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CNEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(61, '2012-07-09', 'Lucía Ruíz', 'terciaria', '45868865', '0000-00-00', 'Iguá 4225', 'lularuiz@gmail.com', '25258618 interno 7138', 34, 'Facultad de Ciencias', 'Estudiante de Maestría, Ayudante Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: CHEA', 'CHEA', 'B', '2016-05-05', '', 0, 1, 0, 0, '', '', 0, '2016-09-11'),
(62, '2012-07-30', 'Lucía Ziegler', 'terciaria', '29730876', '1979-06-24', 'Avda. Italia 3318', 'luciaz@fcien.edu.uy', '24871616 interno 160', 34, 'Depto de Ecología y Evolución - Sección Zoología Vertebrados', 'Estudiante de Doctorado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CHEA', 'B', '2015-02-12', '', 0, 1, 0, 0, '', '', 0, '2015-12-09'),
(63, '2012-07-06', 'María José Arezo', 'terciaria', '18502769', '1973-03-29', 'Iguá 4225', 'mjarezo@gmail.com', '25258618 interno 7145', 34, 'Facultad de Ciencias', 'Asistente de Biología Celular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CNEA', 'B', '2015-08-17', '', 0, 1, 0, 0, '', '', 0, '2015-07-20'),
(64, '2012-07-17', 'Marcelo Loureiro', 'terciaria', '14600076', '1968-08-26', 'Iguá 4225', 'mapy@fcien.edu.uy', '098569051', 34, 'Depto de Ecología y Evolución ', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 0, '2014-12-31'),
(65, '2012-07-04', 'Mauricio Cabarero', 'terciaria', '32559342', '0000-00-00', 'Iguá 4225', 'macabrera@fcien.edu.uy', '098656126', 34, 'Facultad de Ciencias', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Curso sobre diseño experimental y determinación del tamaño de la muestra en trabajos con animales de laboratorio', 'Transgénesis de roedores y su aplicación en biomedicina', 'Curso 1: CHEA, 2006\nCurso 2: Fac. de Ciencias Exactas y Naturales. UBA\nCurso 3: Instituto Pasteur, Uruguay, 2006.', 'CHEA', 'B', '2013-12-31', '', 1, 1, 0, 0, '', '', 0, '2013-12-31'),
(66, '2012-07-27', 'Melitta Meneghel', 'terciaria', '13823833', '1954-10-12', 'Iguá 4225', 'melitta@fcien.edu.uy', '25258618 interno 146', 34, 'Laboratorio de Sistemática e Historia Natural de Vertebrados - Instituto de Ecología y Ciencias Ambientales', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-11-10', '', 0, 1, 0, 1, '', '', 0, '2014-11-10'),
(67, '2012-07-03', 'Natalia Bornia', 'terciaria', '44408432', '0000-00-00', 'San José 1188', 'natibornia@gmail.com', '099957394', 34, 'Facultad de Ciencias', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-14'),
(68, '2012-07-03', 'Natalia Uriarte', 'terciaria', '20182191', '1976-03-14', 'Paraguay 1075', 'natiuria@gmail.com', '099665297', 34, 'Facultad de Ciencias', 'Asistente Grado 2 efectivo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Fundamentos de estadísticas y epidemeología ', 'Curso sobre diseño experimental y determinación del tamaño de la muestra en trabajos con animales de laboratorio', 'Bienestar y ética en experimentación animal', 'Curso 1: UFRGS Porto Alegre\nCurso 2: UBA, Argentina, 2005\nCurso 3: Curso de Postgrado, Fac. de Veterinaria, 2009.', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 0, '2013-12-31'),
(69, '2012-07-27', 'Nestor Ríos', 'terciaria', '43403287', '1986-03-15', 'Iguá 4225', 'nrriosp@gmail.com', '25258618 interno 7140', 34, 'Facultad de Ciencias', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales no tradicionales en investigación', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(70, '0000-00-00', 'Verónica Gutierrez Coppetti', 'terciaria', '26402638', '0000-00-00', 'Iguá 4225', 'vgutierrez@fcien.edu.uy', '25258618 interno 7140', 34, 'Facultad de Ciencias', 'Estudiante de Doctorado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '0000-00-00'),
(71, '2012-07-10', 'María Laura Lavaggi', 'terciaria', '36091674', '1976-05-10', 'Iguá 4225', 'lavaggi@fcien.edu.uy', '25258618 interno 7216', 34, 'Facultad de Ciencias', 'Investigador grado III, Asistente de Química Orgánica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de investigación y docencia', 'Seminario - Taller Ciencia de Animales de Experimentación: Viejos mitos y nuevos paradigamas', 'Curso 1: Facultad de Química\nCurso2: CHEA\nCurso 3: AUCyTAL', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2017-07-01'),
(72, '2012-06-15', 'Ana Laura Reyes', 'terciaria', '111111111', '0000-00-00', 'Ricaldoni 2010', 'laura.reyes@cudim.org', '24803238 interno 242', 35, 'CUDIM', 'Investigación y Desarrollo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', 'Bioseguridad en Bioterios', 'Curso 1: CHEA 2007\nCurso 2: ICLAS FESSCAL ACCMAL 2009\nCurso 3: FIOCRUZ 2011', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2013-12-31'),
(73, '0000-00-00', 'Elena Vasilskis', 'terciaria', '111111111', '0000-00-00', 'Ricaldoni 2010', 'elena.vasilskis@cudim.org', '24803236 interno 242', 35, 'CUDIM', 'Funcionario', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(74, '2012-06-20', 'Patricia Oliver', 'terciaria', '15414191', '0000-00-00', 'Ricaldoni 2010', 'patricia.oliver@cudim.org', '24803238 ', 35, 'xx', 'Responsable del área I+D Biomédico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-11-10', '', 0, 0, 0, 1, '', '', 0, '2014-12-31'),
(75, '2012-06-22', 'Silvana Baletta', 'terciaria', '30030780', '0000-00-00', 'Manuel Quintela 3166 Apto 1706', 'silvana.baletta@cudim.org', '24870394', 35, 'CUDIM', 'Asistente de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', 'Curso y aplicación de conocimiento en los vertebrados en jardínes biológicos y bioterios', 'Curso básico de uso y manejo animales. Módulos I y II', 'Curso 1: Fac. de Ciencias 2010\nCurso 2: Fac. de Ciencias 2001\nCurso 3: Insituto de Higiene, Fac. de Medicina 2004.', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2017-09-11'),
(76, '2012-06-26', 'Silvia Hernández', 'terciaria', '31826205', '0000-00-00', 'Ricaldoni 2010', 'silvia.hernandez@cudim.org', '24803238', 35, 'CUDIM', 'Director de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Patología y diagnóstico en rata y ratón de laboratorio', 'Cría de animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Curso 1: ROYAL Veterinary College, Univesity of London\nCurso 2: Instituto de Higiene, Fac. de Medicina - Fac. de Ciencias Veterinarias de la Universidad de la Plata.\nCurso 3: Fac. de Química, docente de la UBA y de la Univ. de la Plata', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 0, '2017-09-11'),
(77, '2012-07-16', 'Taña Pardo', 'terciaria', '42967779', '1989-09-06', 'Ricaldoni 2010', 'tania.pardo@cudim.org', '095374445', 35, 'CUDIM', 'Colaborador de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Cría de animales de laboratorio y manejo y utilización de animales de laboratorio', 'Uso y manejo de animales', '', 'Curso 1: CUDIM\nCurso 2: CHEA', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2018-11-26'),
(78, '2012-07-12', 'Mónica Vilche', 'terciaria', '19580158', '1965-07-18', 'Ricaldoni 2010', 'vilcheclaps@gmail.com', '094690072', 35, 'CUDIM', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Fac. de Ciencias, CURE, 2012.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2018-11-26'),
(79, '0000-00-00', 'Victoria Trindade', 'terciaria', '18537417', '0000-00-00', '8 de Octubre 2830 apto 702', 'victoria.trindade@cudim.org', '24818135', 35, 'C', 'Químico en radiofarmacia', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA 2004', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '0000-00-00'),
(80, '0000-00-00', 'Enrique Pochintesta', 'terciaria', '15206603', '1960-10-26', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'epochintesta@gmail.com', '22221063', 32, 'Depto. de Recursos Biológicos', 'Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de entrenamiento individual en animales de experimentación', 'Curso de formación para personal investigador, usario de animales destinados a la experimentación y otros fines científicos', '1er Curso de Monitoreo Microbiológico de Animales de Experimentación', 'Curso 1: Ministerio de Agricultura, Forestación y Pesca de Japón.\nCurso 2 y 3: La Plata, Argentina ', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 0, '2018-01-31'),
(81, '2012-07-30', 'Silvana D&#39;Agosto', 'terciaria', '15477050', '1969-03-28', 'California y Los Medanos, Bo. San Rafael', 'sdagosto@gmail.com', '095659023', 40, 'Instituo St. Clare&#39;s College', 'Docente de Farmacología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Bioseguridad en Bioterios', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(82, '2012-07-27', 'Rodolfo Rivero García', 'terciaria', '38401521', '1952-06-04', 'Florida 1233 - Paysandú', 'rrivero@mgap.gub.uy', '099719008', 40, 'Instituo St. Clare&#39;s College', 'Docente de Patología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'Curso1: Universidad de Ciencias Agrícolas de Suecia', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-01-31'),
(83, '2012-07-26', 'Claudio Borteiro', 'terciaria', '19335541', '0000-00-00', 'Río de Janeiro 4058', 'borteiro@gmail.com', '23111725', 41, 'Museo Nacional de Historia Natural', 'Investigador Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'B', '2015-10-18', '', 0, 1, 0, 0, '', '', 0, '2015-10-18'),
(84, '2012-07-12', 'Vanessa Sosa', 'terciaria', '19668366', '1977-05-10', 'Barros Arana 5402', 'vsosa@prondil.com', '094267992', 44, 'Control de Calidad', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio. Curso de actualización y perfeccionamiento', '', '', 'Curso 1: Facultad de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2017-09-11'),
(85, '0000-00-00', 'William Altamiranda', 'terciaria', '34653734', '0000-00-00', 'Barros Arana 5402', 'waltamiranda@hotmail.com', '094963005', 44, 'Laboratorio Prondil', 'Gerente de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '0000-00-00'),
(86, '2013-04-28', 'María José Andina', 'terciaria', '42454166', '1985-02-26', 'Martín C. Martínez 2093', 'mjandina@prondil.com', '099595485', 44, 'Control de Calidad', 'Analista', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2018-04-10', '', 0, 1, 0, 0, '', '', 0, '2018-07-01'),
(87, '2012-07-12', 'Daniel Maglione', 'terciaria', '17341477', '1954-05-09', 'Barros Arana 5402', 'maglione1@hotmail.com', '098704894', 44, 'Laboratorio Prondil', 'Director Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Competencia Notoria', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 0, '0000-00-00'),
(88, '0000-00-00', 'Franco Teixeira de Mello', 'terciaria', '38575611', '0000-00-00', 'Calle Burnett casi M. Chiossi - Maldonado', 'frantex@fcien.edu.uy', '099089451', 46, 'CURE', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', 'Curso de obtención y análisis de datos', '', 'Curso 1: Facultad de Ciencias, 2010.\nCurso 2: Facultad de Ciencias, 2003.', 'CHEA', 'B y C2', '2015-12-31', '', 0, 1, 0, 1, '', '', 0, '2015-12-31'),
(90, '2013-07-11', 'Marcia del Campo', 'terciaria', '40625618', '1971-05-14', 'Ruta 5 km 386, Tacuarembó', 'mdelcampo@tb.inia.org.uy', '099835181', 37, 'INIA', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Ética y bienestar animal', '', '', 'Curso 1: UPV España', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-11-23'),
(91, '0000-00-00', 'Álvaro Díaz', 'terciaria', '17587671', '0000-00-00', 'Avda Navarro 3051', 'adiaz@fq.edu.uy', '24874320', 42, 'Depto . de Biociencias', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '0000-00-00'),
(92, '2012-07-31', 'Andrea Lanz', 'terciaria', '41989910', '0000-00-00', 'xxxxxxxxxxxxx', 'andreamlanz@hotmail.com', '43347480', 42, 'Farmacología', 'Becario ANII', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio ', '', '', 'Curso 1: Fac. de Química', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2014-09-11'),
(93, '2012-12-31', 'Andrés Lopez', 'terciaria', '38120442', '1986-11-20', 'Gral Flores 2124', 'alopez@fq.edu.uy', '29246629', 42, 'Farmacología', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química 2009', 'CHEA', 'B', '2015-12-31', '', 0, 1, 0, 0, '', '', 0, '2015-12-31'),
(94, '2012-07-27', 'Beatriz Munguia', 'terciaria', '43948029', '1983-12-20', 'Gral Flores 2124', 'munguia@fq.edu.uy', '29246629', 42, 'Farmacología', 'Grado I, Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: Fac. de Química, 2006.\nCurso 2: Fessacal ICLAS, ACCMAL, 2009', 'CHEA', 'B', '2015-12-31', '', 0, 1, 0, 0, '', '', 0, '2013-12-31'),
(95, '2012-07-10', 'Cecilia Casaravilla', 'terciaria', '18733976', '1975-02-27', 'Alfredo Navarro 3051', 'ccasarav@higiene.edu.uy', '24874320', 42, 'Instituto de Químcia Biológica', 'Asistente de la Cátedra de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 0, '2014-12-31'),
(96, '2012-07-10', 'Gualberto González', 'terciaria', '13518573', '1956-12-27', 'Alfredo Navarro 3051, piso 2', 'ggonzal@fq.edu.uy', '24874334', 42, 'Inmunología', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 0, '2014-12-31'),
(97, '2012-07-11', 'Javier Giglio', 'terciaria', '31415921', '1977-03-11', 'Gral Flores 2124', 'fgliglio@fq.edu.uy', '29248571', 42, 'Cátedra de Radioquímica', 'Docente e Investigador', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Diseño experimental y tamaño de la muestra en trabajos con animales de laboratorio', 'Biomodelos Aplicados al Desarrollo e Innovación Tecnológica', 'Curso 1: Fac. de Química\nCurso 2: UBA, Argentina\nCurso 3: Fac. de Química', 'CHEA', 'B y C2', '2014-12-31', '', 0, 1, 0, 1, '', '', 0, '2014-12-31'),
(98, '2012-08-11', 'Jenny Saldaña', 'terciaria', '29962924', '0000-00-00', 'Gral Flores 2124', 'jennysal@fq.edu.uy', '29243214', 42, 'Facultad de Química', 'Profesor Adjunto, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Utilización de animales de experimentación científica', 'Uso y manejo de animales de laboratorio', 'Curso sobre animales de laboratorio, quinta edición.', 'Curso 1: PEDECIBA, 1998.\nCurso 2: Fac. de Química, 2000.\nCurso 3:_ Fac, de Ciencias Exactas, UBA, 2003.', 'CHEA', 'B, C1, C2', '2014-12-31', '', 0, 1, 1, 1, '', '', 0, '2014-12-31'),
(99, '2012-07-30', 'Laura Dominguez', 'terciaria', '151016861', '1958-05-01', 'Gral Flores 2124', 'ldoming@fq.edu.uy', '29246629', 42, 'Facultad de Química', 'Profesor Titular, Grado 5', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B, C1, C2', '2014-12-31', '', 0, 1, 1, 1, '', '', 0, '2014-12-31'),
(100, '2012-06-26', 'Leticia Fernández', 'terciaria', '111111111', '0000-00-00', 'Gral Flores 2124', 'lfernandez@fq.edu.uy', '29248517', 42, 'Facultad de Química', 'Becario ANII, Asistente de Investigación', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2017-03-13', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(101, '2012-07-24', 'María José Andina', 'terciaria', '´42454166', '1985-02-26', 'Martín C. Martínez 2093', 'majoanda17@hotmail.com', '099595484', 42, 'Facultad de Química', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Bienestar de animales productivo', '', 'Curso1: Fac. de Química, 2005.\nCurso 2 : Organizado por CHEA 2009', 'CHEA', 'B', '2013-12-31', '', 0, 1, 0, 0, '', '', 0, '2013-12-31'),
(102, '0000-00-00', 'Ximena Ures', 'terciaria', '40929171', '0000-00-00', 'Hermanos Ruiz 3370', 'ximenaures@hotmail.com', '099224702', 42, 'Fundación IRAUy', 'Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '0000-00-00'),
(103, '2012-06-20', 'Soledad Fernández', 'terciaria', '111111111', '0000-00-00', 'León Perez 3517', 'sfernandez@fq.edu.uy', '22157252', 42, 'Cátedra de Radioquímica', 'Investigación y docencia', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: Fac. de Química, 2007.\nCurso 2: Montevideo, 2009.', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 0, '2013-12-31'),
(104, '2012-06-20', 'Susana Cácerez', 'terciaria', '111111111', '0000-00-00', 'Camino Aparicio Saravia s/n. Depto de Canelones', 'scacerez@fq.edu.uy', '22922021 interno 106', 42, 'Facultad de Química', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: CHEA 2003\nCurso 2: 2009', 'CHEA', 'B y C2', '2013-12-31', '', 0, 1, 0, 1, '', '', 0, '2013-12-31'),
(105, '0000-00-00', 'Ana María Rey', 'terciaria', '19082275', '0000-00-00', 'Gral Flores 2217', 'arey@fq.edu.uy', '29248571', 42, 'Cátedra de Radioquímica', 'Profesor Agregado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Utilización de animales de experimentación científica', '', '', 'Curso 1: Fac. de Química, 1998.', 'CHEA', 'B y C2', '2017-07-01', '', 0, 1, 0, 1, '', '', 0, '2018-07-01'),
(106, '0000-00-00', 'Virginia López', 'terciaria', '33427344', '0000-00-00', 'Buenos Aires Manzana 56 Solar 9, San José de Carrasco, Canelones.', 'vlopez@fq.edu.uy', '26831742', 42, 'Facultad de Química', 'Profesor Adjunto de Química Orgánica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Genetics of Laboratory Rodens Course', 'Current Topics in Laboratory', 'Curso 1: Fac. de Química, 2006\nCurso 2: Instituto Pasteur, 2008\nCurso 3: Fac, de Química, 2009.', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '0000-00-00'),
(107, '2012-07-26', 'Sylvia de Matteis', 'terciaria', '13792094', '1956-03-16', 'Pedro Escuder Nuñez 2270 Apto 101', 'sdemat@fq.edu.uy', '24801196', 42, 'Facultad de Química', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-12-31', '', 0, 1, 0, 1, '', '', 0, '2013-12-31'),
(108, '2012-07-24', 'Martha Baison', 'terciaria', '19990347', '1955-07-31', 'Pasaje Peatonal Joaquín Artigas 4519 E - CO.VI.N.E 7', 'mebaison@hotmail.com', '099931612', 43, 'Laboratorio Santa Elena', 'Idónea', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Curso sobre animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', 'Curso 1: UDELAR 2000\nCurso 2: UBA, Beoterio Central. Año 2004\nCurso 3: AUCYTAL 2011', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2017-09-11'),
(109, '0000-00-00', 'Adriana Drocco', 'terciaria', '33712212', '1979-08-26', 'Millán 4175', 'drocco@santaelena.com.uy', '23075757', 43, 'Laboratorio Santa Elena', 'Asistente de Dirección Técnica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2018-01-31'),
(110, '2012-07-22', 'Milton Hugo Cattaño', 'secundaria', '1833483', '1973-03-20', 'Tomás Gomez 3782/5', 'catta1973uy@yahoo.es', '099096747', 43, 'Laboratorio Santa Elena', 'Técnico ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'Facultad de Veterinaria', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 0, '2018-09-23'),
(111, '0000-00-00', 'Daniel Maglione', 'terciaria', '17341477', '0000-00-00', 'Barros Arana 5402', 'maglione1@hotmail.com', '098704894', 44, 'Laboratorio Prondil', 'Director Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Competencia Notoria', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 1, '0000-00-00'),
(112, '0000-00-00', 'William Altamiranda', 'secundaria', '34653734', '0000-00-00', 'Barros Arana 5402', 'waltamiranda@hotmail.com', '094963005', 44, 'Laboratorio Prondil', 'Gerente de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '0000-00-00'),
(113, '2013-04-25', 'María José Andina', 'terciaria', '42454166', '1985-02-26', 'Martín C. Martínez 2093', 'mjandina@prondil.com', '099595485', 44, 'Laboratorio Prondil', 'Analista del Laboratorio de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2018-04-10', '', 0, 1, 0, 0, '', '', 0, '2018-07-01'),
(114, '0000-00-00', 'Vanessa Sosa', 'terciaria', '19668366', '0000-00-00', 'Barros Arana 5402', 'vsosa@prondil.com', '094267992', 44, 'Laboratorio de Control de Calidad', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química2001', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '0000-00-00'),
(115, '2012-07-03', 'Daniel Castells', 'terciaria', '15527110', '0000-00-00', 'Francisco Aguilar 872. Montevideo', 'castells@adinet.com.uy', '099351568', 45, 'Secretariado Uruguayo de la Lana', 'Investigador, categoría I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Diseño y análisis de ensayos clínicos', 'Introducción a la investigación científica', '', 'Curso 1: 2004\nCurso 2: 2001', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-09-23'),
(116, '0000-00-00', 'Jorge Bonino', 'terciaria', '11993595', '0000-00-00', 'Parra del Riego 1036', 'jbm@adinet.com.uy', '27087845', 45, 'Transferencia de Región Sur', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'No especifica', '', '', '0000-00-00', '', 0, 0, 0, 0, '', '', 0, '2018-09-23');
INSERT INTO `acreditacion` (`id`, `fecha`, `nombreapellido`, `formacion`, `documento`, `fechanacimiento`, `direccionpostal`, `direccionelectronica`, `telefonocontacto`, `instituciondesempeno`, `laboratoriounidad`, `cargofuncioninstitucion`, `cargahorariasemanal`, `nombresupervisor`, `especiestrabajadas`, `describatareas`, `pctinvestigacion`, `pctmedicinaclinica`, `pctcirugia`, `pctmantenimientocolonias`, `pctmanipulacion`, `pctdirprojectos`, `pctnecropsia`, `pctdiaglaboratorio`, `pctceua`, `pcthistopatologia`, `pctentedu`, `pctapoyoinvestigadores`, `pctsupervision`, `pctprodanimal`, `pctlegal`, `pctotrasfunciones`, `pctfuncnorel`, `pctobservaciones`, `realizocursos`, `acrpersonales`, `curso1`, `curso2`, `curso3`, `cursoobservacion`, `acrorganismo`, `acrcategoria`, `acrfecha`, `categoria`, `categoriaA`, `categoriaB`, `categoriaC1`, `categoriaC2`, `cvfile`, `cvpath`, `isactive`, `fechavencimiento`) VALUES
(117, '2012-07-05', 'Daniel Fernández Abella', 'terciaria', '12855409', '0000-00-00', 'Alejandro Chucarro 1218 Apto 301', 'ferabe@sul.org.uy', '099146270', 45, 'Secretariado Uruguayo de la Lana', 'Técnico Especializado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-09-23'),
(118, '2012-07-04', 'Iganacio Abella', 'terciaria', '27978195', '0000-00-00', 'Rambla Baltasar Brum 3764', 'abig@sul.org.uy', '22000707', 45, 'Área de Investigación y Desarrollo', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2018-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `acreditacionarchivo`
--

DROP TABLE IF EXISTS `acreditacionarchivo`;
CREATE TABLE IF NOT EXISTS `acreditacionarchivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acreditacion_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acreditacion_id` (`acreditacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

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
(57, 'Acta N° 16/12', 37),
(58, 'Acta N° 01/13', 38),
(59, 'Acta N° 02/13', 39),
(60, 'Acta N° 03/13', 40),
(61, 'Acta N° 04/13', 41),
(62, 'Acta N° 05/13', 42);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` smallint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `obj_id` smallint(9) DEFAULT NULL,
  `obj_class` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

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
(85, 'default', 40, 'novedad'),
(86, 'default', 58, 'actas'),
(87, 'default', 59, 'actas'),
(88, 'default', 60, 'actas'),
(89, 'default', 61, 'actas'),
(90, 'default', 62, 'actas'),
(91, 'default', 41, 'novedad'),
(92, 'default', 42, 'novedad'),
(93, 'default', 43, 'novedad');

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
('0a7e2655840e7181fd8bc727c11a778c', '208.115.113.85', 'Mozilla/5.0 (compatible; Ezooms/1.0; help@moz.com)', 1386777932, ''),
('15241c04a781931fc3ade2f1c48c7294', '186.54.7.106', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386784149, 0x613a343a7b733a393a22757365725f64617461223b733a303a22223b733a373a22757365725f6964223b733a313a2236223b733a383a22757365726e616d65223b733a31333a2261646d696e6973747261646f72223b733a363a22737461747573223b733a313a2231223b7d),
('1ecb1390434cda6512e4a21094997ec0', '120.43.20.76', 'Mozilla/5.0 (Windows NT 5.1; rv:15.0) Gecko/20100101 Firefox/15.0.1', 1386783489, ''),
('29b46236329c1153cc2b5bf91feb8447', '190.0.155.227', 'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.0)', 1386780097, ''),
('3179e9205b33c43a53701d1ceebd733d', '166.147.104.165', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; es-es) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2', 1386771796, ''),
('3269c715c4b450251b71b4a8998da0d6', '199.189.84.248', 'ADmantX Platform Semantic Analyzer - ADmantX Inc. - www.admantx.com - support@admantx.com', 1386774526, ''),
('3d51626c46d4fcdc21a0cec4974356a3', '66.249.76.8', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1386774470, ''),
('4a8bec622d9e75413ed5532b7621d227', '195.57.139.13', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET4', 1386773721, ''),
('5f1a620fc95c190aae25799becd6c098', '165.124.35.202', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386776441, 0x613a323a7b733a393a22757365725f64617461223b733a303a22223b733a343a22776f7264223b733a383a2275646e7861726670223b7d),
('67e0b0e75e58262131da37714b846d52', '157.56.93.40', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1386772201, ''),
('7885d6859dcb0ae2e6ad8db118012bfc', '165.124.35.202', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386774481, ''),
('7f6c5348ef9f52c5c10c882681ff5c23', '208.115.113.85', 'Mozilla/5.0 (compatible; Ezooms/1.0; help@moz.com)', 1386777936, ''),
('957f9d5cf8367f218015d56f5de618d6', '201.217.158.4', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386773140, ''),
('9a45cdadf1c7ff986a3520f490e4359d', '186.54.7.106', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386772551, 0x613a343a7b733a393a22757365725f64617461223b733a303a22223b733a373a22757365725f6964223b733a313a2236223b733a383a22757365726e616d65223b733a31333a2261646d696e6973747261646f72223b733a363a22737461747573223b733a313a2231223b7d),
('a5a107f090b9130e2ac2eb11eaee8b6f', '82.40.212.104', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.59.10 (KHTML, like Gecko) Version/5.1.9 Safari/534.59.10', 1386773187, 0x613a333a7b733a393a22757365725f64617461223b733a303a22223b733a31353a22776f7264696e737469747563696f6e223b733a383a22536e565562524972223b733a343a22776f7264223b733a383a22636a7574796d6879223b7d),
('b214eab5997f9e811aaa8e4361b85094', '190.64.49.18', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386776889, ''),
('ce0d4358a08d9a075d627e1d5af32313', '54.204.154.96', 'A6-Indexer/1.0 (http://www.a6corp.com/a6-web-scraping-policy/)', 1386774507, ''),
('e3baafd7883b53bfea4b8cc8db779868', '157.55.33.112', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1386772383, ''),
('f855ca10641067d85705a87973208de4', '10.2.1.252', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 1386772836, 0x613a313a7b733a393a22757365725f64617461223b733a303a22223b7d),
('fd955fbc2378154c371867ccf959504f', '85.53.190.86', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36', 1386778614, '');

-- --------------------------------------------------------

--
-- Table structure for table `documentos_intereses`
--

DROP TABLE IF EXISTS `documentos_intereses`;
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

DROP TABLE IF EXISTS `enlaces_intereses`;
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

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` smallint(9) NOT NULL AUTO_INCREMENT,
  `path` varchar(256) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `album_id` smallint(9) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=252 ;

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
(240, '/var/www/clients/client3/web3/web/assets/upload/uploads/82/6ff1970b894eb98f5a8021212f98fcba.jpg', 'Programa del primer encuentro de CEUAs 2012.jpg', 'jpg', 82, 5),
(245, '/var/www/clients/client3/web3/web/assets/upload/uploads/86/f4c3406b69e5a5de8bac3f1c3a734cb2.doc', 'acta 19 de febrero de 2013.doc', 'doc', 86, 1),
(247, '/var/www/clients/client3/web3/web/assets/upload/uploads/87/e0e65641621533ea5534bc8aa43ef08e.doc', 'acta 19 de marzo de 2013.doc', 'doc', 87, 1),
(249, '/var/www/clients/client3/web3/web/assets/upload/uploads/88/e76a8a396139b5561c2fdba21b284eb0.doc', 'acta 7 de mayor de 2013.doc', 'doc', 88, 1),
(250, '/var/www/clients/client3/web3/web/assets/upload/uploads/89/3277de36b8932f932ecaac13d7246c1a.doc', 'acta 26 de junio de 2013.doc', 'doc', 89, 1),
(251, '/var/www/clients/client3/web3/web/assets/upload/uploads/90/7c8d6457115d67e038f40ea23c1cc188.doc', 'acta 23 de julio de 2013.doc', 'doc', 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
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
  `code` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isactive` int(11) NOT NULL DEFAULT '0',
  `responsablefilename` varchar(255) DEFAULT NULL,
  `responsablefilepath` varchar(255) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `institucion`
--

INSERT INTO `institucion` (`id`, `nombreinsititucion`, `razonsocial`, `rut`, `naturaleza`, `primernivel`, `segundonivel`, `tercernivel`, `domicilioinstitucional`, `domiciliofiscal`, `tipoestablecimiento`, `observacionescomite`, `nombrecontacto`, `mailcontacto`, `telcontacto`, `code`, `url`, `password`, `isactive`, `responsablefilename`, `responsablefilepath`, `ordinal`) VALUES
(29, 'Fundación IRAUy', 'Fundación IRAUy', '216497340010', 'privada', 'Fundación IRAUy', 'No corresponde', 'No corresponde', 'Camino Cruz del Sur 2250', '', 'experimentación', '', 'Marcela Vilariño', 'mvilarino@gmail.com', '099957588', '001/11', 'www.irauy.org.uy', 'hLWRQZ39', 1, 'doc20130903115050.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 0),
(30, 'Institut Pasteur de Montevideo', 'Institut Pasteur de Montevideo', '215106660013', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Mataojo 2020', '', 'mixto', '', 'Daniela Martínez Machín', 'Sc@pasteur.edu.uy', '25220910', '002/11', 'www.pasteur.edu.uy', 'rxLXt3MH', 1, 'doc20130903115229.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 1),
(31, 'Dirección Nacional de Recursos Acuáticos', 'Dirección Nacional de Recursos Acuáticos', '', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección Nacional de Recursos Acutáticos', 'No corresponde', 'Constituyente 1497', '', 'mixto', '', 'Alfredo Pereira', 'apereira@dinara.gub.uy', '24004689', '003/11', 'www.inape.gub.uy', '2tx6jX7v', 1, 'doc20130903115348.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 2),
(32, 'División Laboratorios Veterinarios &quot;Dr. Miguel C. Rubino&quot;', 'MGAP-DILAVE', '214992490017', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección General de Servicios Ganaderos', 'Division Laboratorios Veterinarios (DILAVE)', 'Ruta 8 km 17.500', '', 'mixto', '', 'Ulises Cuore', 'ucuore@mgap.gub.uy', '2 222 1063', '004/11', '', 'Y3p6rmzt', 1, 'dilave_4.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 3),
(33, 'Laboratorios Microsules Uruguay S.A.', 'LaLaboratorios Microsules Uruguay S.A.', '211262100019', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Ruta 101 km 28 Camino al Paso Escobar S/N. Pueblo Capital José A. Artigas. Canelones', 'Ruta 101 km 28', 'mixto', '', 'Verónica Gutierrez', 'v.gutierrezcastro12@gmail.com', '095819798', '005/11', '', 'gRjVDCfY', 1, 'Laboratorio_Microsules_Uruguay.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 4),
(34, 'Facultad de Ciencias, UDELAR', 'No corresponde', '214478920019', 'publica', 'Universidad de la República', 'Facultad de Ciencias', 'No corresponde', 'Iguá 4225, Montevideo. C.P. 11400', 'Iguá 4225, Montevideo', 'mixto', '', 'Natalia Uriarte', 'natiuria@gmail.com', '2525 8618/21 interno 7151', '006/11', '', 'tjpXw8fB', 1, 'Facultad_de_Ciencias_Udelar.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 5),
(35, 'Centro Uruguayo de Imagenología Molecular (CUDIM)', 'Centro Uruguayo de Imagenología Molecular (CUDIM)', '216137350014', 'mixta', 'Centro Uruguayo de Imagenología Molecular', 'No corresponde', 'No corresponde', 'Dr. Americo Ricaldoni 2010', '', 'mixto', '', 'Silvia Hernández', 'silvia.hernandez@cudim.org', '2480 3238 interno 242', '007/11', '', 'njgfGZtd', 1, 'cudim_7.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 6),
(36, 'Instituto de Investigaciones Clemente Estable', 'IIBCE', '', 'publica', 'Ministerio de Educación y Cultura', 'IIBCE', 'No corresponde', 'Avenida Italia 3318', '', 'mixto', '', 'Alicia Hanusz', 'asistentes.iibce@gmail.com', '2487 1616 interno 108', '008/11', '', 'Ct2GzBLR', 1, 'iibce.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 7),
(37, 'Instituto Nacional de Investigación Agropecuaria', 'INIA', '040164300014', 'mixta', 'Instituto Nacional de Investigación Agropecuaria', 'Dirección Nacional', 'No corresponde', 'Andes 1365 piso 12', '', 'mixto', '', 'Marcia Del Campo', 'mdelcampo@tb.inia.org.uy', '099 835 181', '009/11', '', 'BYqKJhGN', 1, 'inia_9.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 8),
(38, 'Instituto Universitario CLAEH', 'Centro Latinoamericano de Economía Humana', '215223670015', 'privada', 'Instituto Universitario CLAEH', 'Facultad de Medicina', 'Departament de Fisiología Humana', 'Prado Salt Lake, Parada 16 Roosevelt, Punta del Este', '', 'experimentación', '', 'Carlos Penengo', 'cpenengo@claeh.edu.uy', '095278576', '010/11', '', 'JNLyxvbM', 1, 'claeh.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 9),
(39, 'Facultad de Medicina', 'Facultad de Medicina', '214499290014', 'publica', 'Universidad de la República', 'Facultad de Medicina', 'Unidad de Reactivos para Biomodelos de Experimentación', 'Avenida General Flores 2125', '', 'mixto', '', 'Mariela Santos', 'msantos@fmed.edu.uy', '29243414 interno 3226', '011/11', '', 'yHvtfPK7', 1, 'Facultad_de_Medicina.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 10),
(40, 'Instituto St. Clare&#39;s College', 'Fundación St. Clare´s College', '100518390019', 'privada', 'Instituto St. Clare&#39;s College', 'Facultad de Veterinaria', 'No corresponde', 'California y Los Médanos, San Rafael, Punta del Este', '', 'experimentación', '', 'Richard Müller ', 'rmoller@scc.edu.uy', '099161789', '012/11', '', 'H4m26jWB', 1, 'Instituto_St_Clares_College.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 11),
(41, 'Museo Nacional de Historia Natural', 'No corresponde', '', 'publica', 'Ministerio de Educación y Cultura', 'Dirección de Innovación, Ciencia y Tecnología para el Desarrollo (DICyT)', 'Museo Nacional de Historia Natural', '25 de Mayo 582, Montevideo', '', 'experimentación', '', 'Javier González', 'info@mnhn.gub.uy', '2916 0908', '013/11', '', '8fQ6kVdx', 1, 'Museo_Nacional_de_Historia_Natural.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 12),
(42, 'Facultad de Química', 'No corresponde', '', 'publica', 'Universidad de la República', 'Facultad de Química', 'Departamento de CIENFAR, Laboratorio de Experimentación Animal (LEA). Establecimiento de cría y experimentación', 'Avenida General Flores 2124', '', 'mixto', '', 'Jenny Carolina Saldaña', 'jennysal@fq.edu.uy', '2924 3213', '014/11', '', 'KvVkQ7jn', 1, 'Facultad_de_Quimicia.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 13),
(43, 'Laboratorios Santa Elena', 'Santa Elena S.A.', '210121720012', 'privada', 'No aplica', 'No aplica', 'No aplica', 'Millán 4175. Montevideo', '', 'experimentación', '', 'Ing. Quím. Leonardo Acosta', 'lacosta@santaelena.com.uy', '2307 5757 interno 123', '015/11', '', 'qb2mtcJ3', 1, 'Laboratorios_Santa_Elena.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 14),
(44, 'Laboratorio Prondil', 'Prondil S.A.', '212523460011', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Barros Arana 5402, Montevideo, Uruguay. CP 12200', '', 'mixto', '', 'Daniel Maglione', 'dmaglione@prondil.com', '2513 3252 / 54 interno 115', '016/11', '', 'Cxk3mKF8', 1, 'Laboratorio_Prondil.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 15),
(45, 'Secretariado Uruguayo de la Lana', 'SUL', '', 'privada', 'SUL', 'No corresponde', 'No corresponde', 'Rambla Baltasar Brum 3764, Montevideo', '', 'mixto', '', 'Dr. Daniel Castell ', 'castell@adinet.com.uy', '099351568', '017/11', '', 'QRwpk3rf', 1, 'Secretariado_Uruguayo_de_la_Lana.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 16),
(46, 'Centro Universitario Regional Este', 'Universidad de la República', '214393430017', 'publica', 'Universidad de la República', 'Centro Universitario Regional Este', 'Polos de Desarrollo Universitario (Maldonado-Rocha)', 'Calle Burnett, casi M. Chissi, Maldonado.', '', 'mixto', '', 'Frando Texeira de Melo ', 'frantei@fcien.edu.uy', '099089451', '018/11', '', 'C2ncbzBY', 1, 'Centro_Universeitario_Regional_Este.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 17),
(47, 'Facultad de Veterinaria, UDELAR', 'Facultad de Veterinaria, UDELAR', '21 343 354 00 14', 'publica', 'Universidad de la República', 'Facultad de Veterinaria', 'Decanato', 'Av. Alberto Lasplaces 1620', '', 'mixto', '', 'Gonzalo Suárez y/o José Manuel Verdes', 'gsuarez@fvet.edu.uy', '2628 4215', '019/11', '', 'r4BhCRGk', 1, 'Facultad_de_Veterinaria.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 18),
(48, 'Facultad de Agronomía', 'Facultad de Agronomía', '214181750018', 'publica', 'Universidad de la República', 'Facultad de Agronomía', 'No corresponde', 'Avda. E. Garzón 780. CP 12900, Montevideo, Uruguay.', '', 'mixto', '', 'Elize Van Lier', 'evanlier@fagro.edu.uy', '2354 3460', '021/12', '', 'RhQk8wx2', 1, 'Facultad_de_Agronomia.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 20),
(49, 'Regional Norte', 'Universidad de la República', '160181320010', 'publica', 'Universidad de la República', 'Regional Norte', 'No corresponde', 'Rivera 1350, Salto.', '', 'experimentación', 'secretaria@unorte.edu.uy', 'Alejandro Noboa', 'anoboa@unorte.edu.uy', '4732 4816 interno 120', '022/12', '', '2VtLpTBP', 1, 'Regional_Norte.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 21),
(50, 'Zoológico Parque Leccoq', 'Zoológico', '', 'publica', 'Intendencia Municipal de Montevideo', 'Departamento de Cultura', 'Zoológico Parque Leccoq', 'Luis Batlle Berres s/n km. 19.500. Montevideo', '', 'mixto', '', 'Carmen Leizagoyen', 'carmenleizagoyen@gmail.com', '094 274 8564', '023/12', '', 'qYn2tQd9', 1, 'Zoologico_Parque_Leccoq.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 22),
(51, 'Karumbé', 'Asociación Civil', '110306470016', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Avda. Giannattasio km 30.500 El Pinar, Canelones.', '', 'experimentación', '', 'Virginia Ferrando', 'bluevicone@yahoo.com', '099 758 348', '024/12', '', '9fDbv3n7', 1, 'karumbe.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 23),
(52, 'Merial S.A.', 'Merial S.A.', '210213660016', 'privada', 'Merial, División de Salud Animal de SANOFI - AVENTIS', 'No corresponde', 'No corresponde', 'José María Penco 3427, Montevideo', '', 'mixto', 'Mixto', 'Rafel Pellegrino', 'rafael.pellegrino@merail.com', '2209 7091 - 275', '025/12', '', 'XGDhY8Zz', 1, 'Merial.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 24),
(53, 'Dirección General de Servicios Agrícolas', 'No corresponde', '', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección General de Servicios Agrícolas', 'Departamento de Laboratorios Biológicos', 'Avdea. Millán 4703', '', 'experimentación', 'Experimentación', 'Ethel Rodríguez', 'erodriguez@mgap.gub.uy', '2309 8410', '026/12', '', 'XqbJL6RH', 1, 'Direccion_General_de_Servicios_Agricolas.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 25),
(54, 'Laboratorio Tecnológico del Uruguay', 'No corresponde', '', 'mixta', 'Ministerio de Industria, Energía y Minería', 'LATU', 'No corresponde', 'Av. Italia 6201 - C.P. 11500 Montevideo, Uruguay', '', 'mixto', '', 'Natalia Uriarte', 'natiuria@gmail.com', '2525 8618 / 21 interno 7151', '020/11', '', 'vtV3rZbW', 1, 'Facultad_de_Ciencias_Udelar1.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 19);

-- --------------------------------------------------------

--
-- Table structure for table `institucionarchivos`
--

DROP TABLE IF EXISTS `institucionarchivos`;
CREATE TABLE IF NOT EXISTS `institucionarchivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Table structure for table `instituciondocenteinvestigador`
--

DROP TABLE IF EXISTS `instituciondocenteinvestigador`;
CREATE TABLE IF NOT EXISTS `instituciondocenteinvestigador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionespecie`
--

DROP TABLE IF EXISTS `institucionespecie`;
CREATE TABLE IF NOT EXISTS `institucionespecie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `observacion` text,
  `escria` tinyint(4) NOT NULL,
  `esuso` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionsociedadcivil`
--

DROP TABLE IF EXISTS `institucionsociedadcivil`;
CREATE TABLE IF NOT EXISTS `institucionsociedadcivil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionunidadesdependientes`
--

DROP TABLE IF EXISTS `institucionunidadesdependientes`;
CREATE TABLE IF NOT EXISTS `institucionunidadesdependientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- --------------------------------------------------------

--
-- Table structure for table `institucionveterinario`
--

DROP TABLE IF EXISTS `institucionveterinario`;
CREATE TABLE IF NOT EXISTS `institucionveterinario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `institucion_id` (`institucion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
('instituciones_formulario_titulo_descarga', 'instituciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_observaciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_nivel_formacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_documento', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_fechanacimiento', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_laboratorio_unidad', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_carga_horaria_semanal', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_institucion_nombre_supervisor', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_especies_que_trabaja', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_describa_tareas', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_investigacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_medicina_clinica', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_cirugia', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_mantenimiento_colonias', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_manipulacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_direccion_proyectos', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_necropsia', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_diagnostico_laboratorio', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_ceua', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_histopatologia', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_entrenamiento_educacion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_apoyo_investigadores', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_supervision', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_produccion_animal', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_responsabilidad_legal', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_otras_funciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_funciones_no_relacionadas', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_pct_observaciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_curso_observaciones', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_elija_institucion', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_password', 'acreditaciones_lang.php', '', 'sitio'),
('personal_registro_buscar', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_instituciondesempeno', 'acreditaciones_lang.php', '', 'sitio'),
('personal_formulario_instituciondesempeno_texto', 'acreditaciones_lang.php', '', 'sitio');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `mail_db`
--

DROP TABLE IF EXISTS `mail_db`;
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

DROP TABLE IF EXISTS `novedades`;
CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

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
(39, 'SE PRORROGA CURSO: Cuidado y manejo de animales para experimentación. Habilitante CATEGORÍAS A y B', '&lt;strong&gt;OBJETIVOS:&lt;/strong&gt; Capacitar a personal que produce, cuida y/o mantiene animales  para tareas de experimentaci&amp;oacute;n y/o investigaci&amp;oacute;n.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;DIRIGIDO A:&lt;/strong&gt; Funcionarios de Bioterio, Laboratorios, Campos Experimentales y afines, donde se trabaja con animales tradicionales y/o productivos de experimentaci&amp;oacute;n.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;CAPACIDADES A ADQUIRIR:&lt;/strong&gt; Conocer las caracter&amp;iacute;sticas biol&amp;oacute;gicas de diferentes especies de animales utilizadas.&lt;br /&gt;&lt;br /&gt;1. Conocer las principales caracter&amp;iacute;sticas de cuidado, manejo y producci&amp;oacute;n de las especies de trabajo.&lt;br /&gt;2. Adquirir entrenamiento en manejo de animales y buenas practicas de laboratorio.&lt;br /&gt;3. Adquirir conocimientos en normas de Bioseguridad y Bio&amp;eacute;tica.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;INICIO DE CURSO: 26 de setiembre&lt;/strong&gt; de 2013.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&quot;INSCRIPCIONES&lt;/strong&gt; abiertas hasta el &lt;strong&gt;20 de setiembre&lt;/strong&gt; a las 24 hs,&amp;nbsp; enviando Formulario de Inscripci&amp;oacute;n (&lt;a href=&quot;http://www.chea.udelar.edu.uy/&quot; target=&quot;_blank&quot;&gt;http://www.chea.udelar.edu.uy/&lt;/a&gt;) y Carta Aval del CEUA&quot;.&lt;br /&gt;&lt;br /&gt;Las personas que no trabajan en la Universidad de la Rep&amp;uacute;blica deber&amp;aacute;n abonar la suma de 2000 pesos Uruguayos en la cuenta en pesos del BROU&lt;br /&gt;N&amp;deg;:15225493. Se deber&amp;aacute; adjuntar la copia digital del recibo de deposito junto con este formulario al correo: &lt;a href=&quot;mailto:chea@csic.edu.uy&quot;&gt;chea@csic.edu.uy&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt; &lt;strong&gt;La CNEA otorgar&amp;aacute; un n&amp;uacute;mero limitado de becas&lt;/strong&gt;. Los aspirantes a las mismas deber&amp;aacute;n presentar una carta del CEUA de la instituci&amp;oacute;n que avale la solicitud. El l&amp;iacute;mite de recepci&amp;oacute;n de las mencionadas cartas ser&amp;aacute; el&amp;nbsp;&lt;strong&gt;20 de setiembre de 2013&lt;/strong&gt;. &lt;br /&gt;Deber&amp;aacute; enviar la solicitud de la beca a &lt;a href=&quot;mailto:secretaria@cnea.org.uy&quot; target=&quot;_blank&quot;&gt;secretaria@cnea.org.uy.&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;Ver el &lt;a href=&quot;http://www.dicyt.gub.uy/ftp/cnea/objetivos_curso_cuidado_manejo_animales.pdf&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;objetivo del curso&lt;/strong&gt;&lt;/a&gt; y el &lt;strong&gt;&lt;a href=&quot;http://www.dicyt.gub.uy/ftp/cnea/curso_chea2013.pdf&quot; target=&quot;_blank&quot;&gt;programa&lt;/a&gt;.&lt;/strong&gt;&lt;a href=&quot;http://www.dicyt.gub.uy/ftp/cnea/programa.pdf&quot;&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/a&gt;&lt;br /&gt;', 15),
(40, 'Técnico en Prevención de Riesgos Laborales en Experimentación Animal', 'Curso on line de &lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&quot;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;T&amp;eacute;cnico en Prevenci&amp;oacute;n de Riesgos Laborales en Experimentaci&amp;oacute;n Animal&quot;.&lt;br /&gt; &lt;/span&gt;&lt;/span&gt;La Comisi&amp;oacute;n Directiva de AUCyTAL&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;convoca&amp;nbsp;a los socios interesados a presentar su postulaci&amp;oacute;n para la realizaci&amp;oacute;n&amp;nbsp; del curso. &lt;br /&gt; La beca para la realizaci&amp;oacute;n de este curso ser&amp;aacute; sorteada entre los aspirantes que se presenten y cumplan todos los requisitos.&lt;/span&gt;&lt;/span&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;Requisitos:&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Ser socio AUCyTAL y tener la cuota social al d&amp;iacute;a&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;- Trabajar en un bioterio&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: #000000;&quot;&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;de alguna&amp;nbsp;instituci&amp;oacute;n&amp;nbsp;p&amp;uacute;blica o privada del pa&amp;iacute;s.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Poseer acreditaci&amp;oacute;n personal otorgada por la CNEA (Categor&amp;iacute;a a y/o B)&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Presentar carta de intenci&amp;oacute;n&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;line-height: 19.03px;&quot;&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;- Presentar carta de recomendaci&amp;oacute;n y aval se su vinculaci&amp;oacute;n laboral al bioterio correspondiente&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\n&lt;div&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;&lt;br /&gt;&lt;br /&gt;&lt;/span&gt;&lt;span style=&quot;font-family: tahoma, sans-serif;&quot;&gt;Habr&amp;aacute; plazo de presentar las aspiraciones hasta el d&amp;iacute;a&lt;strong&gt; Viernes 23 de Agosto de 2013.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;a href=&quot;http://aulavirtual.ciemat.es/AVCIEMATportal/cargarFichaCurso.do?texto=&amp;amp;identificador=49&amp;amp;idCategoria=0&amp;amp;fechaDesde=&amp;amp;tipo=1&amp;amp;fechaHasta=&quot; target=&quot;_blank&quot;&gt;Ampliar informaci&amp;oacute;n&lt;/a&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;', 16),
(41, 'Atentado Instituto Royal en Brasil', '&lt;p&gt;La Comisi&amp;oacute;n Nacional Honoraria de Experimentaci&amp;oacute;n Animal (CNEA), comisi&amp;oacute;n creada por la Ley N&amp;deg; 18611 con el fin de regular el uso &amp;eacute;tico de animales con fines de experimentaci&amp;oacute;n y docencia en la Rep&amp;uacute;blica Oriental del Uruguay, desea manifestar su profunda preocupaci&amp;oacute;n frente a los graves hechos acontecidos en el Instituto Royal de Sao Paulo (Brasil). Esta Instituci&amp;oacute;n, acreditada por el organismo regulador en Brasil (CONCEA), fue v&amp;iacute;ctima de un atentado en el que se robaron 178 perros Beagle, destruyendo adem&amp;aacute;s de buena parte de las instalaciones existentes, varias l&amp;iacute;neas de investigaci&amp;oacute;n con estos animales, los que de acuerdo a la opini&amp;oacute;n de sus responsables, llevaban en algunos casos varios a&amp;ntilde;os de trabajo.&lt;/p&gt;\n&lt;p&gt;La CNEA desea manifestar que este tipo de actos vand&amp;aacute;licos no contribuye a dar una discusi&amp;oacute;n amplia entre todos los actores sociales, en cuanto a la necesidad o no del uso de animales con fines de experimentaci&amp;oacute;n y docencia.&lt;/p&gt;\n&lt;p&gt;Por otra parte la CNEA entiende, que el uso de animales con estos fines, no es de por si deseable y se deben realizar esfuerzos para reducir su uso y progresivamente implementar el uso de m&amp;eacute;todos alternativos, pero que en la actualidad a&amp;uacute;n es necesario el uso de animales en varios campos de las Ciencias M&amp;eacute;dicas.&lt;/p&gt;\n&lt;p&gt;Finalmente, la CNEA reconoce que la utilizaci&amp;oacute;n de animales ha permitido lograr avances notorios y f&amp;aacute;cilmente confirmables para mejorar la salud y calidad de vida del hombre y los animales, y que es a trav&amp;eacute;s del fortalecimiento de los sistemas formales nacionales que se lograr&amp;aacute; controlar la actividad de experimentaci&amp;oacute;n animal en el futuro.&lt;/p&gt;\n&lt;p&gt;&lt;a style=&quot;font-family: &#39;Times New Roman&#39;,serif; font-size: 16.363636016845703px;&quot; href=&quot;http://www.cromo.com.uy/2013/11/por-que-no-siempre-es-heroico-liberar-animales/&quot; target=&quot;_blank&quot;&gt;http://www.cromo.com.uy/2013/11/por-que-no-siempre-es-heroico-liberar-animales/&lt;/a&gt;&lt;/p&gt;', 17),
(42, 'Receso para el Registro de Personas', 'A partir del lunes 2 de diciembre y hasta el lunes 10 de marzo de 2014, la Comisi&amp;oacute;n no recepcionar&amp;aacute; solicitudes para el Registro de Personas.', 18),
(43, 'II Encuentro Uruguayo de CEUAS', 'El martes 10 de dic. de 09:30 a 12:30 hs., los Comit&amp;eacute;s de &amp;Eacute;tica en el Uso de Animales se reunir&amp;aacute;n en DILAVE para la discuci&amp;oacute;n de temas afines. &lt;br /&gt;&lt;br /&gt;El encuentro contar&amp;aacute; con la presencia del conferencista Dr. Joel Majerowicz de la Fundaci&amp;oacute;n Osvaldo Cruz, de Fiocruz, Brasil.', 19);

-- --------------------------------------------------------

--
-- Table structure for table `registro_institucion`
--

DROP TABLE IF EXISTS `registro_institucion`;
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
(20, 'Facultad Veterinaria (Universidad de la República)', '019/11', 'www.fvet.edu.uy', 19),
(21, 'LATU (Laboratorio Tecnológico del Uruguay) ', '020/11', 'www.latu.org.uy', 18),
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

DROP TABLE IF EXISTS `registro_persona`;
CREATE TABLE IF NOT EXISTS `registro_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ordinal` int(11) NOT NULL DEFAULT '0',
  `ordenInstitucion` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
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

DROP TABLE IF EXISTS `tags_actas`;
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
(58, 18),
(59, 18),
(60, 18),
(61, 18),
(62, 18),
(58, 19),
(59, 19),
(60, 19),
(61, 19),
(62, 19),
(39, 20),
(58, 20),
(38, 21),
(39, 22),
(58, 22),
(38, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tags_novedades`
--

DROP TABLE IF EXISTS `tags_novedades`;
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
(41, 19),
(41, 22),
(43, 22),
(43, 24),
(13, 25),
(13, 26),
(43, 26),
(15, 27),
(16, 27),
(43, 27),
(39, 32),
(40, 32),
(39, 33),
(41, 33),
(43, 33),
(39, 34),
(41, 34),
(43, 34),
(40, 35);

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

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('02a6bd7411211c04394ec2a8ecbfc06a', 6, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.46 Safari/536.5', '190.132.64.229', '2012-05-17 14:53:02'),
('638bd4d216e836c7946d40fd4b2eb5eb', 6, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.46 Safari/536.5', '201.217.158.3', '2012-05-22 19:56:19');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(6, 'administrador', '$P$B9i132NRMpeWBTD4Ay/DRjSvxkWAd/.', 'rswibmer@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '186.54.7.106', '2013-12-11 15:49:11', '2012-04-17 14:47:59', '2013-12-11 17:49:11');

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
