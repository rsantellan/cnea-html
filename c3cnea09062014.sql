-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2014 at 07:22 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=300 ;

--
-- Dumping data for table `acreditacion`
--

INSERT INTO `acreditacion` (`id`, `fecha`, `nombreapellido`, `formacion`, `documento`, `fechanacimiento`, `direccionpostal`, `direccionelectronica`, `telefonocontacto`, `instituciondesempeno`, `laboratoriounidad`, `cargofuncioninstitucion`, `cargahorariasemanal`, `nombresupervisor`, `especiestrabajadas`, `describatareas`, `pctinvestigacion`, `pctmedicinaclinica`, `pctcirugia`, `pctmantenimientocolonias`, `pctmanipulacion`, `pctdirprojectos`, `pctnecropsia`, `pctdiaglaboratorio`, `pctceua`, `pcthistopatologia`, `pctentedu`, `pctapoyoinvestigadores`, `pctsupervision`, `pctprodanimal`, `pctlegal`, `pctotrasfunciones`, `pctfuncnorel`, `pctobservaciones`, `realizocursos`, `acrpersonales`, `curso1`, `curso2`, `curso3`, `cursoobservacion`, `acrorganismo`, `acrcategoria`, `acrfecha`, `categoria`, `categoriaA`, `categoriaB`, `categoriaC1`, `categoriaC2`, `cvfile`, `cvpath`, `isactive`, `fechavencimiento`) VALUES
(7, '2012-07-06', 'Vilariño Pereda Marcela', 'terciaria', '30237920', '1981-12-31', 'Juan Pablo Laguna 3401 Apto 6', 'mvilarinio@gmail.com', '099957588', 29, 'Fundación IRAUy', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', 'A', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(8, '2012-05-25', 'Menchaca Alejo', 'terciaria', '34520327', '0000-00-00', 'Camino Cruz del Sur 2250', 'alejomen@adinet.com.uy', '099687206', 29, 'Fundación IRAUy', 'Director', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bienestar y ética en experimentación animal', '', '', '', '', '', '0000-00-00', 'C2', 0, 0, 0, 1, '', '', 1, '2018-01-31'),
(9, '2012-06-02', 'Mattia Rossi Francesco', 'terciaria', '57487966', '0000-00-00', 'Mataojo 2020', 'fmrossi@pasteur.edu.uy', '25220910 interno 144', 30, 'Laboratorio de Neurodegeneración', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2016-05-04', 'B', 0, 1, 0, 1, '', '', 1, '2016-05-04'),
(11, '2012-06-29', 'Fernandez Graña Gabriel', 'terciaria', '33368592', '1978-12-29', 'xx', 'gabifergra@pasteur.edu.uy', '098228063', 30, 'Instituto Pasteur', 'Ayudante Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso sobre cuidado y manejo de animales de experimentación', 'Salud, bienestar y producción de animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', '', '', '', '0000-00-00', 'A', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(14, '2012-06-26', 'Arévalo Ana Paula', 'primaria', '26726664', '1979-01-04', 'Mataojo 2020', 'aparevalo@pasteur.edu.uy', '25220910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Ayudante Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Cuidados e manejo de animales de experimentación', 'Genétics of Laboratorie Rodens course', '', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(15, '2012-07-26', 'Medeiro Andrea', 'terciaria', '19352818', '1973-05-09', 'Estanislao López 4988', 'amedeiro@fmed.edu.uy', '098599876', 30, 'Biología redox tripanosomas', 'Investigador Post Doctoral', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo, técnico de administración de sustancias y obtención d emuestras de ratones', 'Diseño experimental y tamaño de la muestra en trabajos con animales de laboratorio', 'Uso y manejo de animales de laboratorio', '', 'CHEA', 'B y C2', '2017-12-31', '', 0, 1, 0, 1, '', '', 1, '2017-07-23'),
(16, '2012-07-06', 'Benitez Diego', 'primaria', '34310110', '1982-06-30', 'Mataojo 2020', 'dbenitez@pasteur.edu.uy', '096914554', 30, 'Laboratorio de Biología Redox de Tripanosomas', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de uso de manejo de animales de laboratorio', 'Curso de manejo, técnicas de administración de sustancias y obtención de muestras de ratones', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(17, '2012-07-26', 'Osinaga Eduardo', 'primaria', '19181502', '1954-08-28', 'Plaza de los Olímpicos 4431', 'eosinaga@pasteur.edu.uy', '099219572', 30, 'Instituto Pasteur', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(18, '2012-07-06', 'Cetra Federica', 'primaria', '55133387', '1981-12-21', '21 de Setiembre 2570', 'fedecetra@pasteur.edu.uy', '098302806', 30, 'Instituto Pasteur', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(19, '2012-06-12', 'Schlapp Geraldine', 'primaria', '26499047', '1979-09-21', 'Enrique Pouey 2520 apto 101', 'gschlapp@pasteur.edu.uy', '252550910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Ayudante Técnico DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de uso de manejo de animales de laboratorio', 'Curso taller monitorie microbiológico de ratas y ratones de experimentación', 'Workshop on colony manangment', '', '', '', '0000-00-00', '', 0, 1, 1, 0, '', '', 1, '2017-09-11'),
(20, '2012-06-29', 'Peluffo Hugo', 'primaria', '18700953', '1973-12-08', 'Mataojo 2020', 'hugo.peluffo@pasteur.edu.uy', '25220910 interno 144', 30, 'Laboratorio de Neurodegeneración', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Formación para el personal investigador, usario de animales de experimentación y otras finalidades científica', '', '', 'Curso 1: Universidad Autónoma de Barcelona', 'CHEA', 'C2', '2013-06-30', '', 0, 0, 0, 1, '', '', 1, '2013-06-18'),
(21, '2012-07-09', 'Goyeneche Lucía', 'primaria', '41105782', '1983-07-24', 'Pablo de María 1247 apto. 2', 'luciagoye@gmail.com', '099143011', 30, 'Instituto Pasteur', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(22, '2012-06-07', 'Cárdenas Magadalena', 'primaria', '29364271', '1980-01-05', 'Mataojo 2020', 'cardenas@pasteur.edu.uy', '25220910 interno 146', 30, 'Laboratorio de Genética Molecular Humana', 'Asistente de Investigación', 400, 'José Badano', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Procedimientos experimentales en pequeños animales de experimentación', 'Monitoreo microbiológico de ratas y ratones de experimentación', 'Producción y mantenimiento de animales libres de patógenos específicos. Administración y manejo de instalaciones con barreras sanitarias', 'Curso 1 al 3:Facultad de Ciencias Veterinaria - Universidad de la Plata ', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(23, '2012-07-08', 'Marcelo Comini', 'primaria', '56971560', '1973-10-30', 'Mataojo 2020', 'mcomini@pasteur.edu.uy', '5220910 interno 164', 30, 'Instituto Pasteur', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Principles of Laboratory Animal and Methods of Animal Experimentation. Gesellschaft fur Versuchstierkunde, Society of Laboratory Animal Science.', '', '', 'Heidelberg, Alemania.', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-01-31'),
(24, '2012-06-30', 'Bollati Mariela', 'primaria', '56249995', '1970-10-04', 'Mataojo 2020', 'mbollati@pasteur.edu.uy', '25220910 interno 126', 30, 'Unidad de Biología Celular', 'Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Principles of Laboratory Animal and Methods of Animal Experimentation. ', '', '', 'Gesellschaft fur Versuchstierkunde, Society of Laboratory Animal Science.', '', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-01-31'),
(25, '2012-06-27', 'Crispo Martina', 'primaria', '17389976', '1973-04-02', 'Mataojo 2020', 'crispo@pasteur.edu.uy', '25220910 interno 127', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Genetique de la Souries', '', '', 'Curso 1: Instituto Pasteur de París 2006', '', '', '0000-00-00', '', 0, 1, 1, 1, '', '', 1, '2018-01-31'),
(26, '2012-07-10', 'Lago Natalia', 'primaria', '58458025', '1976-11-28', 'Mataojo 2020', 'nlago@paster.edu.uy', '25220910 interno 144', 30, 'Instituto Pasteur', 'Técnico Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de Formación de personal investigador, usario de animales para experimentación y otras finalidades científicas', '', '', '', 'CHEA', '', '2016-08-01', '', 0, 0, 0, 1, '', '', 1, '2016-08-01'),
(27, '2012-07-26', 'Berois Nora', 'primaria', '19181132', '1954-09-09', 'Plaza de los Olímpicos 4431', 'nberois@pasteur.edu.uy', '099269989', 30, 'Instituto Pasteur', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(28, '0000-00-00', 'Agrelo Rúben', 'primaria', '15782128', '0000-00-00', 'Mataojo 2020', 'agrelo@pasteur.edu.uy', '25220910 interno 172', 30, 'Laboratoria Epigenética de cancer y envejecimiento', 'Líder de grupo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Acreditación Europea (felasa)', '', '', 'Centro Nacional de Investigaciones Oncológicas de Madrid', 'Centro Nacional de Investigaciones Oncológicas de Madrid', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-01-31'),
(29, '2012-07-03', 'Ramírez Ana Sofía', 'terciaria', '35998056', '1985-05-17', 'Mataojo 2020', 'sramirez@pasteur.edu.uy', '099972392', 30, 'Instituto Pasteur', 'Asistente Técnico, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Genetics of Laboratory Rodens Course', '', '', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(30, '2013-03-01', 'Meikle María Noel', 'terciaria', '30470887', '1982-04-13', 'Mataojo 2020', 'manomeikle@pasteur.edu.uy', '099210499', 30, 'Unidad de Animales Trangénicos y de Experimentación', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CHEA', '', '2017-12-31', '', 1, 1, 0, 0, '', '', 1, '2018-09-23'),
(31, '2012-12-19', 'Charquero Diego', 'primaria', '39818690', '1987-11-11', 'Mataojo 2020', 'dcharquero@pasteur.edu.uy', '099394664', 30, 'Instituto Pasteur', 'Pasante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-07-23'),
(32, '2013-03-13', 'Hill Marcelo', 'primaria', '19742283', '1975-11-24', 'Daymán 1131 - Parque Myramar - Canelones', 'mhill@nantes.inserm.fr', '091692421', 30, 'Instituto Pasteur', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-09-30'),
(33, '2012-07-01', 'Chiesa Ernesto', 'primaria', '11457245', '0000-00-00', 'DINARA MGAP', 'echiesa@dinara.gub.uy', '24004689', 31, 'DINARA', 'Técnico Especilizado Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales no tradicionales en investigación', '', '', 'CHEA - Facultad de Ciencias - CURE', 'No especifica', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(34, '2012-07-04', 'Bellagamba Miguel Ángel', 'primaria', '33892177', '0000-00-00', 'Osimani y Llerena 835, Salto', 'miguelbellagamba@gmail.com', '098908299', 31, 'DINARA', 'Técnico Profesional A4', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 1, '2018-12-31'),
(35, '2012-07-15', 'Bessonart Martín', 'terciaria', '31201326', '0000-00-00', 'Orinoco 5086', 'martinb@fciend.edu.uy', '099593969', 31, 'Estación Acuicultura Cabo Polonio', 'Consultor FAO', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Doctora de Acuicultura', '', '', 'Universidad de Las Palmas - España', 'CHEA', 'B', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(36, '2012-07-10', 'Mesa Luciana', 'primaria', '31091078', '0000-00-00', 'xx', 'lucianamesa@gmail.com', '22221063', 32, 'Miguel Rubino', 'Asistente Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Curso Pre Congreso Current Topics in Laboratory Animal Science - III', 'III Reunión Científica Regional ICLAS, FESSACAL, ACCMAL: Biomodelos Aplicados al Desarrollo e Innovación Tecnológica', 'Curso 1: Chea', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(37, '2012-07-11', 'Solari María Angélica', 'primaria', '12046539', '0000-00-00', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'masolari@mgap.gub.uy', '098814027', 32, 'Depto. de Parasitología', 'Técnico Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(38, '2012-07-27', 'Rivero García Rodolfo', 'primaria', '38401521', '0000-00-00', 'Florida 1233 - Paysandú', 'rrivero@mgap.gub.uy', '099719008', 32, 'Laboratorio Regional Noroeste', 'Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'Universidad de Ciencias Agrícolas de Suecia', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(39, '2012-07-11', 'Cuore Ulises', 'primaria', '13789287', '0000-00-00', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'ucuore@mgap.gub.uy', '099623516', 32, 'Depto. de Parasitología/ Sección Etoparásitos', 'Encargado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(40, '0000-00-00', 'Gayo Valeria', 'primaria', '16514213', '0000-00-00', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'valeriagayo@gmail.com', '099681798', 32, 'DILAVE', 'Técnico Encargado de Sección', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(41, '2012-05-25', 'Antenucci Mariángeles', 'primaria', '111111111', '0000-00-00', 'René 1672 apto 001', 'mariangeles@laboratoriosmicrosules.com', '099023055', 33, 'Laboratorio Microsules', 'Jefa de Control de Calidad de Planta Biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(42, '2012-05-25', 'Gutierrez Castro Verónica', 'terciaria', '46090685', '1985-02-12', 'Avda. Italia 2917 apto. 7', 'vgutierrez@laboratoriosmicrosules.com', '095819798', 33, 'Laboratorio Microsules', 'Encargada de Bioterio de Planta Biológica de Ensayos', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de docencia e investigación universitaria', 'Maestría en Ciencias Agrarias, opción Animal', 'Capacitación de 6 meses sobre Gestión y Manejo de Bioterio, Manipulación y ejecución de Experimentos con Animales de Laboratorioa', 'Curso 1: CHEA\nCurso2: Facultad de Agronomía - UDELAR\nCurso3 Instituto Pasteur de Montevideo', 'CHEA', 'B', '2018-11-05', '', 0, 1, 1, 0, '', '', 1, '2018-11-05'),
(43, '2013-09-13', 'Sosa Vanessa', 'primaria', '19668366', '1977-05-10', 'Serafín J. García 3920', 'vsosa@laboratoriosmicrosules.com', '094267992', 33, 'Planta Biológico', 'Jefa de Laboratorio de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Monitoreo microbiológico de ratas y ratones de experimentación', '', 'Curso1:Facultad de Química\nCurso2: CHEA', 'Prondil S.A.', 'A y B', '2017-09-11', '', 1, 1, 0, 0, '', '', 1, '2018-11-05'),
(44, '2012-07-11', 'Terevinto María Alejandro', 'primaria', '31706978', '0000-00-00', 'Francisco Solano Antuña 2777 apto 801', 'ale4782@hotmail.com', '099171198', 34, 'Fisiología y Nutrición', 'Grado I, Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1:Facultad de Veterinaria', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-04-30'),
(45, '2012-07-24', 'Silva Ana', 'terciaria', '15418971', '0000-00-00', 'Avda. Italia 3318', 'anasilvabarbato@gmail.com', '24875532', 34, 'Laboratorio de Neurociencias', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-11-10'),
(46, '2012-07-03', 'Hernandez Ana María', 'terciaria', '16812590', '0000-00-00', 'Alfredo Navarro 3051, piso 2', 'aherna@fq.edu.uy', '24801196', 34, 'Inmunología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-11-05'),
(47, '2012-07-01', 'Ferreira Anabell', 'terciaria', '13015187', '0000-00-00', 'Iguá 4225', 'ferreira.anabell@gmail.com', '25258618 interno 7151', 34, 'Fisiología y Nutrición', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C1 y C2', '0000-00-00', '', 0, 0, 1, 1, '', '', 1, '2014-12-31'),
(48, '2012-07-04', 'García Daniel', 'terciaria', '26027733', '0000-00-00', 'Colonia 1392 apto 302', 'dgfsan@gmail.com', '096849341', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(49, '2012-07-26', 'Hernández Daniel', 'terciaria', '40522692', '0000-00-00', 'Gaboto 1696 apto 202', 'gallegodez@gmail.com', '098233051', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(50, '2012-06-27', 'Prieto Daniel', 'terciaria', '111111111', '0000-00-00', 'Iguá 4225', 'dprieto@fcien.edu.uy', '11111111111111111', 34, 'xx', 'Docente, Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'xxxxxxxx', '', '', '', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-04-30'),
(51, '2012-07-13', 'Agrati Daniella', 'terciaria', '30769450', '0000-00-00', 'Iguá 4225', 'dagrati@fcien.edu.uy', '25258618 interno 7151 - 098660428', 34, 'Sección Fisiología y Nutrición', 'Asistente Técnico, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', 'Curso 1: Facultad de Química\nCurso 2: CHEA\nCurso 3: AUCYTAL', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-11-10'),
(52, '2012-07-02', 'Zolessi Flavio', 'terciaria', '17942514', '0000-00-00', 'Iguá 4225', 'fzolessi@gmail.com', '25258618 interno 7144', 34, 'Unidad de Biología Celular', 'Profesor Adjunto, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 1, '2013-07-10'),
(53, '2012-06-02', 'Rossi Francesco', 'terciaria', '57487966', '0000-00-00', 'Iguá 4225', 'fmrossi@pasteur.edu.uy', '25258618 interno 7138', 34, 'Facultad de Ciencias', 'Profesor Adjunto, Grado III, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2016-05-04'),
(54, '2012-07-24', 'Francescoli Gabriel', 'terciaria', '13539410', '0000-00-00', 'Iguá 4225', 'gabo@fcien.edu.uy', '098363738', 34, 'Etiología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-11-10'),
(55, '2012-07-24', 'Bedó Gabriela', 'terciaria', '15866192', '0000-00-00', 'Chaná 2013 apto 3', 'bedogabriela@gmail.com', '099283046', 34, 'Genética Evolutiva', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio - módulo I', 'Uso y manejo de animales de laboratorio - módulo II', '', 'Curso 1: CHEA\nCurso 2: CHEA', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(56, '2012-07-30', 'Pereira Gisela', 'terciaria', '38577540', '0000-00-00', 'Iguá 4225', 'gisepe04@gmail.com', '26191150', 34, 'Instituo de Ecología y Ciencias Ambientales', 'Ayudante de Laboratorio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'Facultad de Ciencias - UDELAR', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(57, '2012-07-25', 'Aparicio Díaz Gonzalo', 'terciaria', '47074874', '0000-00-00', 'Iguá 4225', 'gaparicio@fcien.edu.uy', '094104514', 34, 'Unidad de Biología Celular', 'Docente, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(58, '2012-07-03', 'Álvarez Guzman', 'terciaria', '47541243', '0000-00-00', 'Iguá 4225', 'guzmanalvarezlqo@gmail.com', '25258618 interno 216', 34, 'Facultad de Ciencias', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Facultad de Veterinaria', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(59, '2012-07-12', 'Magnone Larisa', 'terciaria', '42336520', '0000-00-00', 'Iguá 4225', 'larisa@fcien.edu.uy', '22099657', 34, 'Laboratorio de Recursos Naturales', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(60, '2012-06-29', 'Celano Laura', 'terciaria', '33922758', '0000-00-00', 'Iguá 4225', 'lcelano@gmail.com', '099990658', 34, 'Facultad de Ciencias', 'Asistente de Enzimología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CNEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(61, '2012-07-09', 'Ruíz Lucía', 'terciaria', '45868865', '0000-00-00', 'Iguá 4225', 'lularuiz@gmail.com', '25258618 interno 7138', 34, 'Facultad de Ciencias', 'Estudiante de Maestría, Ayudante Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: CHEA', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(62, '2012-07-30', 'Ziegler Lucía', 'terciaria', '29730876', '0000-00-00', 'Avda. Italia 3318', 'luciaz@fcien.edu.uy', '24871616 interno 160', 34, 'Depto de Ecología y Evolución - Sección Zoología Vertebrados', 'Estudiante de Doctorado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-09'),
(63, '2012-07-06', 'Arezo María José', 'terciaria', '18502769', '0000-00-00', 'Iguá 4225', 'mjarezo@gmail.com', '25258618 interno 7145', 34, 'Facultad de Ciencias', 'Asistente de Biología Celular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CNEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-07-20'),
(64, '2012-07-11', 'Loureiro Marcelo', 'terciaria', '14600076', '0000-00-00', 'Iguá 4225', 'mapy@fcien.edu.uy', '098569051', 34, 'Depto de Ecología y Evolución ', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(65, '2012-07-04', 'Cabrera Mauricio', 'terciaria', '32559342', '0000-00-00', 'Iguá 4225', 'macabrera@fcien.edu.uy', '098656126', 34, 'Facultad de Ciencias', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Curso sobre diseño experimental y determinación del tamaño de la muestra en trabajos con animales de laboratorio', 'Transgénesis de roedores y su aplicación en biomedicina', 'Curso 1: CHEA, 2006\nCurso 2: Fac. de Ciencias Exactas y Naturales. UBA\nCurso 3: Instituto Pasteur, Uruguay, 2006.', 'CHEA', 'B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-12-31'),
(66, '2012-06-27', 'Meneghel Melitta', 'terciaria', '13823833', '0000-00-00', 'Iguá 4225', 'melitta@fcien.edu.uy', '25258618 interno 146', 34, 'Laboratorio de Sistemática e Historia Natural de Vertebrados - Instituto de Ecología y Ciencias Ambientales', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-11-10'),
(67, '2012-07-03', 'Bornia Natalia', 'terciaria', '44408432', '0000-00-00', 'San José 1188', 'natibornia@gmail.com', '099957394', 34, 'Facultad de Ciencias', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(68, '2012-07-01', 'Uriarte Natalia', 'terciaria', '20182191', '0000-00-00', 'Paraguay 1075', 'natiuria@gmail.com', '099665297', 34, 'Facultad de Ciencias', 'Asistente Grado 2 efectivo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Fundamentos de estadísticas y epidemeología ', 'Curso sobre diseño experimental y determinación del tamaño de la muestra en trabajos con animales de laboratorio', 'Bienestar y ética en experimentación animal', 'Curso 1: UFRGS Porto Alegre\nCurso 2: UBA, Argentina, 2005\nCurso 3: Curso de Postgrado, Fac. de Veterinaria, 2009.', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(69, '2012-07-27', 'Ríos Nestor', 'terciaria', '43403287', '0000-00-00', 'Iguá 4225', 'nrriosp@gmail.com', '25258618 interno 7140', 34, 'Facultad de Ciencias', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales no tradicionales en investigación', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(70, '2012-07-12', 'Gutierrez Coppetti Verónica', 'terciaria', '26402638', '0000-00-00', 'Iguá 4225', 'vgutierrez@fcien.edu.uy', '25258618 interno 7140', 34, 'Facultad de Ciencias', 'Estudiante de Doctorado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(71, '2012-07-10', 'Lavaggi María Laura', 'terciaria', '36091674', '0000-00-00', 'Iguá 4225', 'lavaggi@fcien.edu.uy', '25258618 interno 7216', 34, 'Facultad de Ciencias', 'Investigador grado III, Asistente de Química Orgánica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de investigación y docencia', 'Seminario - Taller Ciencia de Animales de Experimentación: Viejos mitos y nuevos paradigamas', 'Curso 1: Facultad de Química\nCurso2: CHEA\nCurso 3: AUCyTAL', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2017-07-01'),
(72, '2012-06-15', 'Reyes Ana Laura', 'terciaria', '111111111', '0000-00-00', 'Ricaldoni 2010', 'laura.reyes@cudim.org', '24803238 interno 242', 35, 'CUDIM', 'Investigación y Desarrollo', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', 'Bioseguridad en Bioterios', 'Curso 1: CHEA 2007\nCurso 2: ICLAS FESSCAL ACCMAL 2009\nCurso 3: FIOCRUZ 2011', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-12-31'),
(73, '2012-06-20', 'Vasilskis Elena', 'terciaria', '111111111', '0000-00-00', 'Ricaldoni 2010', 'elena.vasilskis@cudim.org', '24803236 interno 242', 35, 'CUDIM', 'Funcionario', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-04'),
(74, '2012-06-20', 'Oliver Patricia', 'terciaria', '15414191', '0000-00-00', 'Ricaldoni 2010', 'patricia.oliver@cudim.org', '24803238 ', 35, 'xx', 'Responsable del área I+D Biomédico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(75, '2012-06-22', 'Baletta Silvana', 'terciaria', '30030780', '0000-00-00', 'Manuel Quintela 3166 Apto 1706', 'silvana.baletta@cudim.org', '24870394', 35, 'CUDIM', 'Asistente de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', 'Curso y aplicación de conocimiento en los vertebrados en jardínes biológicos y bioterios', 'Curso básico de uso y manejo animales. Módulos I y II', 'Curso 1: Fac. de Ciencias 2010\nCurso 2: Fac. de Ciencias 2001\nCurso 3: Insituto de Higiene, Fac. de Medicina 2004.', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(76, '2012-06-27', 'Hernández Silvia', 'terciaria', '31826205', '0000-00-00', 'Ricaldoni 2010', 'silvia.hernandez@cudim.org', '24803238', 35, 'CUDIM', 'Director de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Patología y diagnóstico en rata y ratón de laboratorio', 'Cría de animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Curso 1: ROYAL Veterinary College, Univesity of London\nCurso 2: Instituto de Higiene, Fac. de Medicina - Fac. de Ciencias Veterinarias de la Universidad de la Plata.\nCurso 3: Fac. de Química, docente de la UBA y de la Univ. de la Plata', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 1, '2017-09-11'),
(77, '2012-06-06', 'Pardo Taña', 'terciaria', '42967779', '0000-00-00', 'Ricaldoni 2010', 'tania.pardo@cudim.org', '095374445', 35, 'CUDIM', 'Colaborador de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Cría de animales de laboratorio y manejo y utilización de animales de laboratorio', 'Uso y manejo de animales', '', 'Curso 1: CUDIM\nCurso 2: CHEA', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2018-12-31'),
(78, '2012-07-12', 'Vilche Mónica', 'terciaria', '19580158', '0000-00-00', 'Ricaldoni 2010', 'vilcheclaps@gmail.com', '094690072', 35, 'CUDIM', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Fac. de Ciencias, CURE, 2012.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-11-26'),
(79, '0000-00-00', 'Trindade Victoria', 'terciaria', '18537417', '0000-00-00', '8 de Octubre 2830 apto 702', 'victoria.trindade@cudim.org', '24818135', 35, 'C', 'Químico en radiofarmacia', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA 2004', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-11-26'),
(80, '2012-07-01', 'Pochintesta Enrique', 'terciaria', '15206603', '0000-00-00', 'Ruta 8 Brig. Gral. J. A. Lavalleja Km. 17.500', 'epochintesta@gmail.com', '22221063', 32, 'Depto. de Recursos Biológicos', 'Encargado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Curso de entrenamiento individual en animales de experimentación', 'Curso de formación para personal investigador, usario de animales destinados a la experimentación y otros fines científicos', '1er Curso de Monitoreo Microbiológico de Animales de Experimentación', 'Curso 1: Ministerio de Agricultura, Forestación y Pesca de Japón.\nCurso 2 y 3: La Plata, Argentina ', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 1, '2017-12-31'),
(81, '2012-07-30', 'D&#39;Agosto Silvana', 'terciaria', '15477050', '1969-03-28', 'California y Los Medanos, Bo. San Rafael', 'sdagosto@gmail.com', '095659023', 40, 'Instituo St. Clare&#39;s College', 'Docente de Farmacología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Bioseguridad en Bioterios', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(82, '2012-07-27', 'Rivero García Rodolfo', 'terciaria', '38401521', '1952-06-04', 'Florida 1233 - Paysandú', 'rrivero@mgap.gub.uy', '099719008', 40, 'Instituo St. Clare&#39;s College', 'Docente de Patología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'Curso1: Universidad de Ciencias Agrícolas de Suecia', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-01-31'),
(83, '2012-07-26', 'Borteiro Claudio', 'terciaria', '19335541', '0000-00-00', 'Río de Janeiro 4058', 'borteiro@gmail.com', '23111725', 41, 'Museo Nacional de Historia Natural', 'Investigador Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'B', '2015-10-18', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(84, '2012-07-12', 'Sosa Vanessa', 'terciaria', '19668366', '1977-05-10', 'Barros Arana 5402', 'vsosa@prondil.com', '094267992', 44, 'Control de Calidad', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio. Curso de actualización y perfeccionamiento', '', '', 'Curso 1: Facultad de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(85, '0000-00-00', 'William Altamiranda', 'terciaria', '34653734', '0000-00-00', 'Barros Arana 5402', 'waltamiranda@hotmail.com', '094963005', 44, 'Laboratorio Prondil', 'Gerente de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(87, '2012-07-12', 'Maglione Daniel', 'terciaria', '17341477', '1954-05-09', 'Barros Arana 5402', 'maglione1@hotmail.com', '098704894', 44, 'Laboratorio Prondil', 'Director Técnico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Competencia Notoria', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 0, '', '', 1, '0000-00-00'),
(88, '2012-07-01', 'Teixeira de Mello Franco', 'terciaria', '38575611', '0000-00-00', 'Calle Burnett casi M. Chiossi - Maldonado', 'frantex@fcien.edu.uy', '099089451', 46, 'CURE', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', 'Curso de obtención y análisis de datos', '', 'Curso 1: Facultad de Ciencias, 2010.\nCurso 2: Facultad de Ciencias, 2003.', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2015-12-31'),
(90, '2013-07-11', 'Marcia del Campo', 'terciaria', '40625618', '1971-05-14', 'Ruta 5 km 386, Tacuarembó', 'mdelcampo@tb.inia.org.uy', '099835181', 37, 'INIA', 'Investigador Principal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Ética y bienestar animal', '', '', 'Curso 1: UPV España', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-11-23'),
(91, '0000-00-00', 'Álvaro Díaz', 'terciaria', '17587671', '0000-00-00', 'Avda Navarro 3051', 'adiaz@fq.edu.uy', '24874320', 42, 'Depto . de Biociencias', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(92, '2012-07-31', 'Lanz Andrea', 'terciaria', '41989910', '0000-00-00', 'xxxxxxxxxxxxx', 'andreamlanz@hotmail.com', '43347480', 42, 'Farmacología', 'Becario ANII', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio ', '', '', 'Curso 1: Fac. de Química', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(93, '2012-12-31', 'Lopez Andrés', 'terciaria', '38120442', '1986-11-20', 'Gral Flores 2124', 'alopez@fq.edu.uy', '29246629', 42, 'Farmacología', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química 2009', 'CHEA', 'B', '2015-12-31', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(94, '2012-07-27', 'Munguia Beatriz', 'terciaria', '43948029', '1983-12-20', 'Gral Flores 2124', 'munguia@fq.edu.uy', '29246629', 42, 'Farmacología', 'Grado I, Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: Fac. de Química, 2006.\nCurso 2: Fessacal ICLAS, ACCMAL, 2009', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(95, '2012-07-10', 'Casaravilla Cecilia', 'terciaria', '18733976', '1975-02-27', 'Alfredo Navarro 3051', 'ccasarav@higiene.edu.uy', '24874320', 42, 'Instituto de Químcia Biológica', 'Asistente de la Cátedra de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(96, '2012-07-10', 'Gualberto González', 'terciaria', '13518573', '1956-12-27', 'Alfredo Navarro 3051, piso 2', 'ggonzal@fq.edu.uy', '24874334', 42, 'Inmunología', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(97, '2012-07-11', 'Giglio Javier', 'terciaria', '31415921', '0000-00-00', 'Gral Flores 2124', 'fgliglio@fq.edu.uy', '29248571', 42, 'Cátedra de Radioquímica', 'Docente e Investigador', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Diseño experimental y tamaño de la muestra en trabajos con animales de laboratorio', 'Biomodelos Aplicados al Desarrollo e Innovación Tecnológica', 'Curso 1: Fac. de Química\nCurso 2: UBA, Argentina\nCurso 3: Fac. de Química', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(98, '2012-08-11', 'Saldaña Jenny', 'terciaria', '29962924', '0000-00-00', 'Gral Flores 2124', 'jennysal@fq.edu.uy', '29243214', 42, 'Facultad de Química', 'Profesor Adjunto, DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Utilización de animales de experimentación científica', 'Uso y manejo de animales de laboratorio', 'Curso sobre animales de laboratorio, quinta edición.', 'Curso 1: PEDECIBA, 1998.\nCurso 2: Fac. de Química, 2000.\nCurso 3:_ Fac, de Ciencias Exactas, UBA, 2003.', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 1, '2014-12-31'),
(99, '2012-07-30', 'Laura Dominguez', 'terciaria', '151016861', '0000-00-00', 'Gral Flores 2124', 'ldoming@fq.edu.uy', '29246629', 42, 'Facultad de Química', 'Profesor Titular, Grado 5', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B, C1, C2', '0000-00-00', '', 0, 1, 1, 1, '', '', 1, '2014-12-31'),
(100, '2012-06-26', 'Leticia Fernández', 'terciaria', '111111111', '0000-00-00', 'Gral Flores 2124', 'lfernandez@fq.edu.uy', '29248517', 42, 'Facultad de Química', 'Becario ANII, Asistente de Investigación', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(101, '2012-07-24', 'María José Andina', 'terciaria', '´42454166', '0000-00-00', 'Martín C. Martínez 2093', 'majoanda17@hotmail.com', '099595484', 42, 'Facultad de Química', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Bienestar de animales productivo', '', 'Curso1: Fac. de Química, 2005.\nCurso 2 : Organizado por CHEA 2009', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(102, '2012-07-11', 'Ures María Ximena', 'terciaria', '40929171', '0000-00-00', 'Hermanos Ruiz 3370', 'ximenaures@hotmail.com', '099224702', 42, 'Fundación IRAUy', 'Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-03-31'),
(103, '2012-06-20', 'Soledad Fernández', 'terciaria', '111111111', '0000-00-00', 'León Perez 3517', 'sfernandez@fq.edu.uy', '22157252', 42, 'Cátedra de Radioquímica', 'Investigación y docencia', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: Fac. de Química, 2007.\nCurso 2: Montevideo, 2009.', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-12-31'),
(104, '2012-06-20', 'Susana Cácerez', 'terciaria', '111111111', '0000-00-00', 'Camino Aparicio Saravia s/n. Depto de Canelones', 'scacerez@fq.edu.uy', '22922021 interno 106', 42, 'Facultad de Química', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: CHEA 2003\nCurso 2: 2009', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(105, '0000-00-00', 'Ana María Rey', 'terciaria', '19082275', '0000-00-00', 'Gral Flores 2217', 'arey@fq.edu.uy', '29248571', 42, 'Cátedra de Radioquímica', 'Profesor Agregado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Utilización de animales de experimentación científica', '', '', 'Curso 1: Fac. de Química, 1998.', 'CHEA', 'B y C2', '2017-07-31', '', 0, 1, 0, 1, '', '', 1, '2018-07-01'),
(106, '2012-07-04', 'Virginia López', 'terciaria', '33427344', '0000-00-00', 'Buenos Aires Manzana 56 Solar 9, San José de Carrasco, Canelones.', 'vlopez@fq.edu.uy', '26831742', 42, 'Facultad de Química', 'Profesor Adjunto de Química Orgánica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Genetics of Laboratory Rodens Course', 'Current Topics in Laboratory', 'Curso 1: Fac. de Química, 2006\nCurso 2: Instituto Pasteur, 2008\nCurso 3: Fac, de Química, 2009.', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2015-12-31'),
(107, '2012-07-26', 'Sylvia de Matteis', 'terciaria', '13792094', '0000-00-00', 'Pedro Escuder Nuñez 2270 Apto 101', 'sdemat@fq.edu.uy', '24801196', 42, 'Facultad de Química', 'Profesor Agregado de Inmunología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(108, '2012-07-24', 'Baison Martha', 'terciaria', '19990347', '1955-07-31', 'Pasaje Peatonal Joaquín Artigas 4519 E - CO.VI.N.E 7', 'mebaison@hotmail.com', '099931612', 43, 'Laboratorio Santa Elena', 'Idónea', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Curso sobre animales de laboratorio', 'Curso de actualización de bioseguridad en bioterio', 'Curso 1: UDELAR 2000\nCurso 2: UBA, Beoterio Central. Año 2004\nCurso 3: AUCYTAL 2011', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(109, '2012-07-23', 'Drocco Adriana', 'terciaria', '33712212', '1979-08-26', 'Millán 4175', 'drocco@santaelena.com.uy', '23075757', 43, 'Laboratorio Santa Elena', 'Asistente de Dirección Técnica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-01-31'),
(110, '2012-07-22', 'Cattaño Milton Hugo', 'secundaria', '1833483', '1973-03-20', 'Tomás Gomez 3782/5', 'catta1973uy@yahoo.es', '099096747', 43, 'Laboratorio Santa Elena', 'Técnico ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'Facultad de Veterinaria', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-09-23'),
(112, '0000-00-00', 'William Altamiranda', 'secundaria', '34653734', '0000-00-00', 'Barros Arana 5402', 'waltamiranda@hotmail.com', '094963005', 44, 'Laboratorio Prondil', 'Gerente de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(113, '2013-04-25', 'Andina María José', 'terciaria', '42454166', '1985-02-26', 'Martín C. Martínez 2093', 'mjandina@prondil.com', '099595485', 44, 'Laboratorio Prondil', 'Analista del Laboratorio de Control de Calidad', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'B', '2018-04-10', '', 0, 1, 0, 0, '', '', 1, '2018-07-01'),
(114, '0000-00-00', 'Vanessa Sosa', 'terciaria', '19668366', '0000-00-00', 'Barros Arana 5402', 'vsosa@prondil.com', '094267992', 44, 'Laboratorio de Control de Calidad', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Fac. de Química2001', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2017-09-11'),
(115, '2012-07-03', 'Castells Daniel', 'terciaria', '15527110', '0000-00-00', 'Francisco Aguilar 872. Montevideo', 'castells@adinet.com.uy', '099351568', 45, 'Secretariado Uruguayo de la Lana', 'Investigador, categoría I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Diseño y análisis de ensayos clínicos', 'Introducción a la investigación científica', '', 'Curso 1: 2004\nCurso 2: 2001', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-09-23'),
(116, '2012-07-30', 'Bonino Jorge', 'terciaria', '11993595', '0000-00-00', 'Parra del Riego 1036', 'jbm@adinet.com.uy', '27087845', 45, 'Transferencia de Región Sur', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, '', '', '', 'No especifica', '', '', '0000-00-00', '', 0, 0, 0, 0, '', '', 1, '2018-09-23'),
(117, '2012-07-05', 'Fernández Abella Daniel', 'terciaria', '12855409', '0000-00-00', 'Alejandro Chucarro 1218 Apto 301', 'ferabe@sul.org.uy', '099146270', 45, 'Secretariado Uruguayo de la Lana', 'Técnico Especializado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-09-23'),
(118, '2012-07-04', 'Abella Ignacio', 'terciaria', '27978195', '0000-00-00', 'Rambla Baltasar Brum 3764', 'abig@sul.org.uy', '22000707', 45, 'Área de Investigación y Desarrollo', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-09-23');
INSERT INTO `acreditacion` (`id`, `fecha`, `nombreapellido`, `formacion`, `documento`, `fechanacimiento`, `direccionpostal`, `direccionelectronica`, `telefonocontacto`, `instituciondesempeno`, `laboratoriounidad`, `cargofuncioninstitucion`, `cargahorariasemanal`, `nombresupervisor`, `especiestrabajadas`, `describatareas`, `pctinvestigacion`, `pctmedicinaclinica`, `pctcirugia`, `pctmantenimientocolonias`, `pctmanipulacion`, `pctdirprojectos`, `pctnecropsia`, `pctdiaglaboratorio`, `pctceua`, `pcthistopatologia`, `pctentedu`, `pctapoyoinvestigadores`, `pctsupervision`, `pctprodanimal`, `pctlegal`, `pctotrasfunciones`, `pctfuncnorel`, `pctobservaciones`, `realizocursos`, `acrpersonales`, `curso1`, `curso2`, `curso3`, `cursoobservacion`, `acrorganismo`, `acrcategoria`, `acrfecha`, `categoria`, `categoriaA`, `categoriaB`, `categoriaC1`, `categoriaC2`, `cvfile`, `cvpath`, `isactive`, `fechavencimiento`) VALUES
(119, '2012-07-30', 'Leizagoyen Carmen', 'terciaria', '14455992', '1961-07-16', 'Keway 7830 Parque Miramay - Canelones.', 'carmenleizagoyen@gmail.com', '094668685', 50, 'Parque Loccoq', 'Encargada del Cuerpo Veterinaria y del Programa de Educación Ambiental', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 1, 1, '', '', 1, '2018-07-23'),
(120, '2012-07-05', 'Calliari Aldo', 'terciaria', '25102697', '1967-12-12', 'Alberto Las Places 1550', 'aldo@iibce.edu.uy', '26289895', 47, 'Biofísica', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2015-10-05', '', 0, 1, 0, 1, '', '', 1, '2015-10-05'),
(122, '2012-07-26', 'Bielli Alejandro', 'terciaria', '12913837', '1962-05-12', 'Alberto Las Places 1550', 'alejandro.bielli@gmail.com', '098655825', 47, 'Morfología y Desarrollo', 'Profesor Titular, Grado 5 ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Posgrado ', 'Pasantía de Investigación', '', 'Curso 1: Universidad Suecia \nCurso 2: Animales Science Departament en Nebrasca - Universty USA', 'CHEA', 'C2', '2017-07-06', '', 0, 0, 0, 1, '', '', 1, '2017-07-06'),
(123, '2012-07-13', 'Catro Eleonor', 'terciaria', '14428882', '1959-06-15', 'Centenario 2751 Apto 704', 'elinor@adinet.com.uy', '099326401', 47, 'Depto. de Parasitología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B, C1, C2', '2014-10-10', '', 0, 1, 1, 1, '', '', 1, '2014-12-31'),
(124, '2012-07-30', 'Herrera Emiliano', 'terciaria', '111111111', '0000-00-00', 'Alberto Las Places 1550', 'emilianoherrerah@gmail.com', '099072447', 47, 'CIDEC', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Fac. de Veterinaria', 'CHEA', 'B', '2017-12-31', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(125, '2012-07-09', 'Pedrana Graciela', 'terciaria', '18862036', '1975-11-23', 'Alberto Las Places 1620', 'gpedrana@gmail.com', '094710940', 47, 'Facultad de Veterinaria', 'Profesor Titular, Grado 3', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Procedimientos experimentales en pequeños animales de experimentación', 'Curso 1: Fac. de Vetrinaria 2011.\nCurso 2: CHEA 2004.\nCurso 3: Fac. de Veterinaria en la Universidad de la Plata, Argentina 2005.', 'CHEA', 'A, B y C', '2016-12-31', '', 1, 1, 0, 0, '', '', 1, '2016-12-31'),
(126, '2012-07-16', 'Venzal José Manuel', 'terciaria', '111111111', '0000-00-00', 'Rivera 1350 - Salto ', 'dpvuru@hotmail.com', '47328839', 47, 'Depto. de Parasitología Veterinaria, Regional Norte, Salto', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Fac. de Veterinaria', 'Facultad de Veterinaria', 'B y C2', '2013-12-31', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(127, '2012-07-27', 'Verdes José Manuel', 'terciaria', '15829829', '1964-09-19', 'Alberto Las Places 1550', 'jmverdes@fvet.edu.uy', '26289895', 47, 'Depto de Biología Celular y Molecular', 'Profesor Adjunto de Biofísica, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CNEA', 'A, B, C1 y C2', '2014-10-10', '', 1, 1, 1, 1, '', '', 1, '2014-12-31'),
(128, '2012-07-30', 'Cruz Juan Carlos', 'terciaria', '13535630', '1955-10-03', 'Alberto Las Places 1550', 'jucacru73@gmail.com', '099667065', 47, 'Facultad de Veterinaria', 'Docente de Patología Funcional y Morfológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', 'Actualización de Bioseguridad en Bioterios', '', 'Curso 1: Fac. de Veterinaria 2007\nCurso 2: Fac de Veterinaria y Fiocruz de Río de Janeiro, Brasil.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(129, '2012-07-26', 'Damián Juan Pablo', 'terciaria', '19146243', '1976-07-27', 'Alberto Las Places 1550', 'jpablodamian@gmail.com', '099966373', 47, 'Depto de Biología Molecular y Celular', ' Asistente del Área de Bioquímica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bienestar y ética en experimentación animal', 'Etiología Clínica Veterinaria', 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria', 'Curso 1: Fac. de Veterinaria, 1999\nCurso 2: Fac. de Veterinaria, 1999\nCurso 3: Fac. de Veterinaria, 2006', 'CNEA', 'C2', '2017-07-31', '', 0, 0, 0, 1, '', '', 1, '2017-06-23'),
(130, '2012-06-25', 'Cal Luis Gustavo', 'terciaria', '34914992', '0000-00-00', 'Miguel Martínez 3691-001', 'luiscalper@gmail.com', '098763978', 47, 'Depto de Patología', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bienestar y ética en experimentación animal', '', '', '', 'CHEA', 'C2', '2015-10-05', '', 0, 0, 0, 1, '', '', 1, '2015-10-05'),
(131, '2012-06-19', 'Rodríguez Piñon Marcelo', 'terciaria', '19415553', '1970-12-08', 'Alberto Las Places 1550', 'marodri@adinet.com.uy', '099701111', 47, 'Bioquímica', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-11-30', '', 0, 1, 0, 1, '', '', 1, '2015-10-05'),
(132, '0000-00-00', 'Mosca Virginia', 'terciaria', '15855167', '0000-00-00', 'Bulevar Artigas 302 apto 101', 'virginia.mosca@gmail.com', '099379980', 47, 'Toxicología y Enfermedades Toxicológicas', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio - módulo I', 'Uso y manejo de animales de laboratorio - módulo II', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(133, '2012-07-30', 'Genovese Patricia', 'terciaria', '29244239', '1976-04-14', 'Alberto Las Places 1550', 'patriciagenovese@gmail.com', '26222933', 47, 'Morfología y Desarrollo', 'Ayudante Área Histiología y Embriología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Técnicas de experimentación animal (ratas)', 'Bioseguridad en Bioterios', 'Curso 1: Fac. de Química 2004\nCurso 2: Hospital de Clínicas 2007\nCurso 3: Fac. de Veterinaria 2011', 'CHEA', 'B', '2017-07-31', '', 0, 1, 0, 0, '', '', 1, '2015-10-05'),
(134, '2012-07-05', 'Ruíz Paul', 'terciaria', '31787829', '0000-00-00', 'Alberto Las Places 1550', 'paulruiz@fvet.edu.uy', '099224642', 47, 'Depto de Biología Celular y Molecular', 'Ayudante de Área Biofísica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Fac de Veterinaria 2008', 'CHEA', 'B', '2013-04-30', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(135, '2012-07-13', 'Lado Paula', 'terciaria', '41708645', '1985-02-05', 'Resistencia 1636 apto 103', 'pau.lado@adinet.com.uy', '098346857', 47, 'Depto. de Parasitología', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: CHEA, Fac. de Veterinaria 2009', 'CHEA', 'B', '2013-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(136, '2012-07-30', 'Alzogaray Stefanía', 'terciaria', '46263262', '1983-12-14', 'Alberto Las Places 1550', 'stefaniaalzogaray@gmail.com', '098536992', 47, 'Histología y Embriología', 'Docente, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Salud, bienestar y producción de animales de laboratorio', '', 'Curso 1: Fac. de Química 2009\nCurso 2: Fac. de Veterinaria 2011', 'CHEA', 'B y C2', '2017-12-31', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(137, '2012-07-30', 'Riaño Victoria', 'terciaria', '46408092', '1988-11-26', 'Alberto Las Places 1550', 'victoriariano@gmail.com', '26222933', 47, 'Depto de Morfología y Desarrollo', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Salud, bienestar y producción de animales de laboratorio', '', 'Curso 1: Fac. de Química 2008\nCurso 2: Fac. de Veterinaria 2011', 'CHEA', 'B', '2017-05-31', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(138, '0000-00-00', 'Virginia Dehl', 'terciaria', '45276454', '0000-00-00', 'Alberto Las Places 1550', 'virginiadehl@gmail.com', '098639150', 47, 'Biofísica, biología molecualr y celular', 'Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(139, '2012-07-20', 'Fumagalli Fernando', 'terciaria', '20231019', '1974-10-06', 'Alberto Las Places 1550', 'fernandofuma1@yahoo.com', '094435316', 47, 'Facultad de Veterinaria', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Fac. de Veterinaria 2010', 'CHEA', 'B', '2016-12-31', '', 0, 1, 0, 0, '', '', 1, '2016-09-23'),
(140, '2012-07-26', 'Möller Richard', 'terciaria', '19994525', '1972-02-25', 'Independencia, M173 Solar 5, Pinar Sur, Canelones', 'anatomia.uy@gmail.com', '099161789', 47, 'Facultad de Veterinaria', 'Docente, Asistente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Cirugía experimental, curso de postgrado', 'Bioseguridad en Bioterios', '', 'Curso 2: AUCYTAL', 'CHEA', 'B', '2013-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(141, '2013-07-02', 'Rodríguez Palma Ricardo Manuel', 'terciaria', '19607869', '0000-00-00', 'Juan Echeverry 1574 Salto', 'rodripalma@hotmail.com', '47326023', 48, 'Depto de Producción Animal y Pasturas', 'Asistente de Departamento', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(142, '2012-07-01', 'Pérez Raquel', 'terciaria', '12048628', '0000-00-00', 'Garzón 780', 'raquelperezclariget@gmail.com', '23543460', 48, 'Facultad de Agronomía', 'Profesor Titular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2017-12-31'),
(143, '2012-07-01', 'Del Puerto Marta', 'terciaria', '18745096', '0000-00-00', 'Garzón 780', 'marta.delpuerto@gmail.com', '094564233', 48, 'Facultad de Agronomía', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(144, '2013-10-02', 'González Andrea', 'terciaria', '36139370', '0000-00-00', 'Garzón 780', 'agonzalez72@gmail.com', '23546956', 48, 'Facultad de Agronomía', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(145, '2013-07-01', 'Ramos Ana Daniela', 'terciaria', '25193870', '0000-00-00', 'Garzón 780', 'anadaniela72@gmail.com', '25143175', 48, 'Facultad de Agronomía', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Animales de laboratorio, manejo y uso en experimentación científica', '', 'Curso 1: Fac. de Química, año 2000\nCurso 2: Fac. de Química, año 2001', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(146, '2012-10-08', 'Barlocco Nelson', 'terciaria', '13099220', '0000-00-00', 'Garzón 780', 'nbarlocc@fagro.edu.uy', ' 2359 7191/94', 48, 'Facultad de Agronomía', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2015-12-31'),
(147, '2012-10-18', 'Bauzá Roberto', 'terciaria', '33175840', '0000-00-00', 'Vedia 1141, Sayago, Montevideo', 'rbauza@fagro.edu.uy', '235876956', 48, 'Depto de Producción Animal y Pasturas', 'Profesor Agregado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2015-12-31'),
(148, '2012-10-02', 'Marichal María de Jesús', 'terciaria', '10596269', '0000-00-00', 'Garzón 780', 'mariadejesus.marichal@gmail.com', '23572344', 48, 'Facultad de Agronomía', 'Profesor Titular de Nutrición Animal', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2017-12-31'),
(149, '2012-10-05', 'Bell Washington', 'terciaria', '40502771', '0000-00-00', 'Calle 8, 5813', 'washingtonbell@gmail.com', '099009472', 48, 'Facultad de Agronomía', 'Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-07-01'),
(150, '2012-10-09', 'Casal Alberto', 'terciaria', '33008372', '0000-00-00', 'Paraguay 1674 apto 205', 'alcas@adinet.com.uy', '094107469', 48, 'Depto de Producción Animal y Pasturas', 'Asistente de Investigación', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(151, '2013-07-01', 'Petrochelli Hugo', 'terciaria', '27643021', '0000-00-00', 'Joaquín Velazco 3154 apto 104', 'petro@fagro.edu.uy', '098580029', 48, 'Facultad de Agronomía', 'No especifica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2015-12-31'),
(152, '2013-06-27', 'Terevinto María Alejandra', 'terciaria', '31706978', '0000-00-00', 'Francisco Solano Antuña 2777 apto 801', 'ale4782@hotmail.com', '099171198', 48, 'Depto de Producción Animal y Pasturas', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1. Facultad de Veterinaria', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(153, '2013-07-17', 'Carvallo Cecilia', 'terciaria', '45741922', '0000-00-00', 'España N° 100, Las Piedras, Canelones', 'ceciscs@gmail.com', '23546956', 48, 'Facultad de Agronomía', 'Docente Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de docencia e investigación universitaria', '', '', 'Curso 1: No especifica', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(154, '2012-06-21', 'Capoano Carlos Adrián', 'terciaria', '111111111', '0000-00-00', 'Lorenzo Fernández 3263', 'adrianca2@yahoo.com', '24871616 interno 130', 36, 'IIBCE', 'Docente Investigador, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', 'Genetics of Laboratory Rodens Course', '', 'Curso 1: CHEA, 27 de mayo de 2011.\n', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-12-31'),
(155, '2012-06-22', 'Geisinger Adriana', 'terciaria', '14681507', '0000-00-00', 'Avda. Italia 3318', 'adriana.geisinger@gmail.com', '24871616 interno 130', 36, 'Depto de Biología Molecular', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2015-12-31', '', 0, 0, 0, 1, '', '', 1, '2015-12-31'),
(156, '2012-07-05', 'Calliari Aldo', 'primaria', '25102697', '1977-12-12', 'Avda. Italia 3318', 'aldo@iibce.edu.uy', '24871616 interno 170', 36, 'IIBCE', 'Investigador Asociado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2015-10-05', '', 0, 1, 0, 1, '', '', 1, '2015-10-05'),
(157, '2012-06-18', 'Kun Alejandra', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'kun@iibce.edu.uy', '099518712', 36, 'DPAN', 'Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(158, '2012-07-24', 'Ana Silva', 'terciaria', '15418971', '1962-11-02', 'Avda. Italia 3318', 'anasilvabarbato@gmail.com', '24875532', 36, 'Unidad Bases Neurales de la Conducta', 'Investigadora Asociada Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '2014-12-31', '', 0, 1, 0, 1, '', '', 1, '2014-11-10'),
(159, '2012-06-21', 'Umpierrez Ana', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'anitaump@gmail.com', '43328565', 36, 'Depto. de Microbiología', 'Docente Investigador, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA 2006.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(160, '2012-07-10', 'Fernandez Anabell', 'terciaria', '111111111', '1958-12-26', 'Burgues 3589', 'anabellsonia@gmail.com', '24871616 interno 110', 36, 'IIBCE', 'Investigador, Ayudante Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 0, '', '', 1, '2013-06-06'),
(161, '2012-07-10', 'Richeri Analía', 'terciaria', '28909989', '1977-03-07', 'Avda. Italia 3318', 'aricheri@gmail.com', '24871616 interno 115', 36, 'IIBCE', 'Investigador, Ayudante Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: CHEA\nCurso 2: No especifica', '', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-01-31'),
(162, '2012-07-27', 'Caputi Ángel', 'terciaria', '29639052', '1953-04-13', 'Avda. Italia 3318', 'peaabar@gmail.com', '24871616 interno 111', 36, 'IIBCE', 'Investigador, Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'IIBCE', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(163, '2012-07-13', 'Trías Emiliano', 'terciaria', '44840521', '0000-00-00', 'Pilar Cabrera 677. Las Piedras, Canelones', 'emitrias@gmail.com', '23650524', 36, 'IIBCE', 'Investigador, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(164, '2012-07-04', 'Prunell Giselle', 'terciaria', '27153369', '0000-00-00', 'Avda. Italia 3318', 'gisellefprunell@gmail.com', '24871616 interno 123', 36, 'IIBCE', 'Investigador Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Laboratory, Animal Science - Basic Course. ', '', '', 'Curso 1: Karolinska Institute, Solna Suecia. 1999', '', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-01-31'),
(165, '0000-00-00', 'Urvanavisius Jessika', 'terciaria', '34748608', '0000-00-00', 'Avda. Italia 3318', 'jessikau@gmail.com', '24871616 interno 115', 36, 'Laboratorio de Biología Celular', 'Colaborador en investigación', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', 'Curso Pre Congreso Current Topics in Laboratory Animal Science - III', '', 'Curso 1: CHEA, 2006.\nCurso 2: 3a reunión científica  regional ICLAS, FESSACAL, ACMAL, 2009.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(166, '2012-07-04', 'Farías Joaquina', 'terciaria', '42519348', '0000-00-00', 'Julio César 1430 BIS, apto 602', 'joaquinafarias@gmail.com', '098276950', 36, 'IIBCE', 'Becario de maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Facultad de Ciencias 2011', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(167, '2012-07-03', 'Prieto José Pedro', 'terciaria', '43674731', '0000-00-00', 'Avda. Italia 3318', 'jose.ppp@gmail.com', '24871616 interno 115', 36, 'IIBCE', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(168, '2012-07-24', 'Quintana Laura', 'terciaria', '34677742', '1971-06-07', 'Acevedo Díaz 1514 apto 602', 'laura.quintana@gmail.com', '24875532', 36, 'IIBCE', 'Investigador, Ayudante Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(169, '2012-07-24', 'Lucía  Zubizarreta', 'terciaria', '42458413', '1983-08-17', 'Escocia 2151 apto 1', 'luciazubi@gmail.com', '098633979', 36, 'IIBCE', 'Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Coordinado por Ana Silva y Natalia Uriarte, 2010', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-09-11'),
(170, '2012-07-11', 'Fabbiani Gabriela', 'terciaria', '19493173', '1974-02-11', 'Avda. Italia 3318', 'fabbiani@iibce.edu.uy', '24871616 interno 166', 36, 'IIBCE', 'Técnico III, Preparadora', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria', '', 'Curso 1: CHEA 2003\nCurso 2: CHEA 2005', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(171, '2012-06-27', 'Meikle María Noel', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'manomeikle@gmail.com', '099210499', 36, 'IIBCE', 'Grado I docente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', '', 'CHEA', 'B', '2015-12-31', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(172, '2012-06-26', 'Rehermann María Inés', 'terciaria', '111111111', '0000-00-00', 'Mallorca, Manzana 81, Solar 13, El Pinar, Ciudad de la Costa.', 'mirehermann@gmail.com', '094742813', 36, 'IIBCE', 'Técnico Preparador - Estudiante de maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: 2007', 'CHEA', 'A, B y C1', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(173, '2012-07-11', 'Galvalisi Martín', 'terciaria', '40902218', '0000-00-00', 'Avda. Italia 3318', 'martin_galva@hotmail.com', '099095801', 36, 'IIBCE', 'No especifica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-09-11'),
(174, '2012-07-12', 'Rodríguez Héctor', 'terciaria', '111111111', '0000-00-00', 'Mallorca, Manzana 81, Solar 13, El Pinar, Ciudad de la Costa.', 'rodrihec@adinet.com.uy', '099283440', 36, 'Bioterio', 'Responsable', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animal de experimentaicón como reactivo biológico', 'Bioseguridad en Bioterios', 'Uso y manejo de animales tradicionales y no tradicionales en investigación.', 'Curso 1: Facultad de Medicina, 2011\nCurso 2: AUCYTAL, 2011\nCurso 3: Facultad de Ciencias, 2010.', 'CHEA', 'A, B y C1', '2014-09-14', '', 1, 1, 1, 0, '', '', 1, '2014-12-31'),
(175, '2012-06-30', 'Olivo Martín', 'terciaria', '39085126', '0000-00-00', 'Atahona 3667', 'tinolivo@yahoo.com', '098985917', 36, 'IIBCE', 'Mantenimiento y cría en materia de rohedores', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Curso de Iniciación y Avanzado de Acuarismo', 'Curso de Historia Natural de Anfibios y reptiles del Uruguay', 'Curso 1: No especifica\nCurso 2: AUDA\nCurso 3: Facultad de Ciencias', 'CHEA', 'A ', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-09-23'),
(176, '2012-06-22', 'Soumastre Martina', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'martinasoumastre09@gmail.com', '099837535', 36, 'IIBCE', 'Pasante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: CHEA, octubre 2011', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-09-11'),
(177, '2012-07-11', 'Marichal Nicolás', 'terciaria', '34862470', '1982-06-01', 'Avda. Italia 3318', 'neg3mar@gmail.com', '24875532', 36, 'IIBCE', 'Investigador, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA, 2006.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(178, '2012-07-13', 'Díaz Pablo', 'terciaria', '41641396', '1981-09-14', 'Avda. Italia 3318', 'pablojda@gmail.com', '24871616 ', 36, 'IIBCE', 'Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA, 2009.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(179, '0000-00-00', 'Zunino Pablo', 'terciaria', '16880822', '0000-00-00', 'Avda. Italia 3318', 'pmzunino@gmail.com', '24871616 interno 140', 36, 'IIBCE', 'Jefe de Investigación, Grado V', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Animals (Scientific Procedures) Act, 1986', '', '', 'Curso 1: Univesities of Cambrige.', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-01-31'),
(180, '2012-07-05', 'Bianchimano Paola', 'terciaria', '27702328', '0000-00-00', 'Avda. Italia 3318', 'paola.bianchimano@gmail.com', '24871616 interno 115', 36, 'Laboratorio de Biología Celular', 'Estudiante de Doctorado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Facultad de Veterinaria, 2008.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(181, '0000-00-00', 'Scavone Paola', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'pscavone@gmail.com', '096981394', 36, 'IIBCE', 'Investigador, Asistente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1. Facultad de Química, 2001.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-09-11'),
(182, '2012-07-17', 'Pouso Paula', 'primaria', '29509324', '1976-12-05', 'Gral Flores 2125', 'ppouso@fmed.edu.uy', '24017211', 36, 'Unidad Bases Neurales', 'Investigador Asociado, grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA 2007.', 'CHEA', 'B', '2014-07-28', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(183, '2012-07-17', 'Russo Raúl', 'terciaria', '13322960', '1962-11-17', 'Avda. Italia 3318', 'russoblanc@gmail.com', '24807862', 36, 'IIBCE', 'Investigador, Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-01-31'),
(184, '2012-06-22', 'Rodríguez Rosana', 'terciaria', '29405310', '0000-00-00', 'Avda. Italia 3318', 'r.rodriguezcasuriaga@gmail.com', '24871616 interno 130', 36, 'IIBCE', 'Técnico preparador; investigador', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Facultad de Ciencias 2011.', 'CHEA', 'B', '2016-09-30', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(185, '2012-07-24', 'Perrone Rossana', 'terciaria', '17681328', '1970-08-03', 'Miguelete 1385/ 202', 'rossanaperrone@gmail.com', '098988249', 36, 'IIBCE', 'Técnico Especialista', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'No especifica', 'CHEA', 'B', '2012-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-09-30'),
(186, '2012-06-20', 'Olivera Silvia', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'solivera2011@gmail.com', '24871616 interno 171', 36, 'IIBCE', 'Investigador, Ayudante Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-12-31'),
(187, '2012-06-16', 'Acquistapase Sofía', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'sofiaacquistapase@gmail.com', '099759558', 36, 'IIBCE', 'Pasante, Esutdiante de Grado en Lic. en Bioquímica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'No especifica donde', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-09-11'),
(188, '0000-00-00', 'López Ximena', 'terciaria', '37958197', '0000-00-00', 'Avda. Italia 3318', 'ximelopezhill@hotmail.com', '24871616 interno 115', 36, 'IIBCE', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Biomodelos aplicados al desarrollo e innovación tecnológica', '', 'Curso 1: CHEA\nCurso 2: International council for Laboratory animal science (ICLAS)', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(189, '2012-07-03', 'Lafon-Hughes Laura', 'terciaria', '17758711', '0000-00-00', 'Neira 3697', 'lauralafon2010@gmail.com', '24871616 interno 135', 36, 'IIBCE', 'Técnico - Investigador Asociado, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Uso y manejo de animales de laboratorio', '', 'Curso 1: CHEA 2003, Módulo I\nCurso 2: CHEA 2003, Módulo II', 'CHEA', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-07-01'),
(190, '2013-02-18', 'Dipaolo Andrés', 'terciaria', '50939586', '1990-12-10', 'Avda. Italia 3318', 'apdipaolo@gmail.com', '097191795', 36, 'IIBCE', 'Investigador, honorario', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1. Facultad de Veterinaria.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-07-01'),
(191, '2013-02-18', 'Canclini Lucía', 'terciaria', '32595815', '1980-08-01', 'Avda. Italia 3318', 'lcanclini@fcien.edu.uy', '099393462', 36, 'IIBCE', 'Estudiante de Doctorado. Asistente Grado II.', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'No especifica donde', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2018-07-23'),
(192, '2012-07-12', 'Isasi Eugenia', 'terciaria', '42212861', '1988-04-28', 'Arenal Grande 2777', 'eugeei@gmail.com', '22035545', 36, 'IIBCE', 'Becario de maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Facultad de Veterianria, 2010.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-09-23'),
(193, '0000-00-00', 'Scorza Cecilia', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'scorzacecilia@gmail.com', '24871616', 36, 'Laboratorio de Biología Celular', 'xxxxxxxxxx', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2018-12-31'),
(194, '0000-00-00', 'Trujillo Omar', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 3318', 'omartrujilloconoz@gmail.com', '24871616', 36, 'IIBCE', 'Jefe', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-07-01'),
(195, '2012-07-10', 'Cassina Adriana', 'terciaria', '18464553', '1964-11-20', 'Gral Flores 2125', 'acassina@fmed.edu.uy', '29249562', 39, 'Departamento de Bioquímica', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'B', '2013-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(196, '2012-07-09', 'Chabalgoity José', 'terciaria', '29158612', '1963-01-19', 'Alfredo Navarro 3051', 'jachabal@higiene.edu.uy', '24871288 interno 1120', 39, 'Instituto de Higiene', 'Profesor Titular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animals (Scientific Procedures) Act, 1986', '', '', '', 'CHEA', 'C2', '2015-12-31', '', 0, 0, 0, 1, '', '', 1, '2015-12-31'),
(197, '2012-05-23', 'Mónaco Amy', 'terciaria', '111111111', '0000-00-00', 'Avda. Italia 1480 apto 601', 'amonaco@higiene.edu.uy', '099424145', 39, 'Instituto de Higiene', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'No especifica', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(198, '2012-06-20', 'Leonel Malacrida', 'terciaria', '111111111', '0000-00-00', 'Avda Italia s/n', 'lmalacrida@hc.edu.uy', '24819161', 39, 'Depto de Fisiopatología', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química, Noviembre 2009.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(199, '2012-07-10', 'Sosa Anahir', 'terciaria', '111111111', '0000-00-00', 'Avda Italia s/n', 'anahirsosa@yahoo.es', '095463080', 39, 'Depto de Fisiopatología', 'A.S.G', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Entrenamiento en el manejo y mantenimiento de animales de laboratorio (rata - ratón)', 'Uso y manejo de animales de laboratorio - módulo I', 'Uso y manejo de animales de laboratorio - módulo II', 'Curso 1: Instituto de Higiene, Fac. de Medicina, junio 2003.\nCurso 2: CHEA, Noviembre 2003.\nCurso 3: CEHA, Noviembre 2004.', 'CHEA', 'A', '2016-12-31', '', 1, 0, 0, 0, '', '', 1, '2016-12-31'),
(200, '2012-05-14', 'Rial Analía', 'terciaria', '111111111', '0000-00-00', 'Avda Navarro 3051, primer piso', 'arial@higiene.edu.uy', '24871288 interno 1121', 39, 'Instituto de Higiene / Depto de Desarrollo Biotecnológico', 'Asistente Titular Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio - módulo I', 'Uso y manejo de animales de laboratorio - módulo II', 'Taller de monitorio microbiológico de ratas y ratones de experimentación', 'Curso 1: CHEA, 2003.\nCurso 2. CHEA, 2004.\nCurso 3: CHEA, 2005', 'CHEA', 'B', '2016-12-08', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(201, '2012-07-09', 'Medeiros Andrea', 'terciaria', '19352818', '1973-05-09', 'Estanislao López 4988', 'amedeiro@fmed.edu.uy', '098599876', 39, 'Depto de Bioquímica', 'Asistente, Grado 2', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo, técnico de administración de sustancias y obtención de muestras de ratones', 'Diseño experimental y tamaño de la muestra en trabajos con animales de laboratorio', 'Uso y manejo de animales de laboratorio', 'Curso 1: Instituto Pasteur: Marzo 2012.\nCurso 2: Bioterio Central de la Universidad de Buenos Aires. Argentina. Julio 2010\nCurso 3: Facultad de Química, segundo semestre de 2008.', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(202, '2012-07-09', 'Rossi Andrea', 'terciaria', '35849859', '1975-06-12', 'Alfredo Navarro 3051.', 'arossi@higiene.edu.uy', '098565417', 39, 'Depto de Desarrollo Biotecnológico', 'Asistente de Cátedra', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'No especifica', 'CNEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(203, '2012-07-10', 'Falconi vAtilio', 'terciaria', '15442512', '1964-08-14', 'Gral Flores 2125', 'afalconi@fmed.edu.uy', '094458857', 39, 'Depto de Fisiología', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Para su doctorado', '', '', 'Curso 1. Universidad de Salamanca', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(204, '2012-06-09', 'Suhr Bruno', 'terciaria', '47877167', '1988-04-07', 'Gral Flores 2125', 'brunosuhr@hotmail.com', '099703126', 39, 'Facultad de Medicina', 'Ayudante de clase', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animal de experimentaicón como reactivo biológico', '', '', 'no especifica', 'CHEA', 'B', '2016-08-24', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(205, '2012-07-10', 'Costa Carlos Andrés', 'terciaria', '40623820', '1985-07-07', 'Avda. del Libertador 1532 apto 1402', 'carancos@gmail.com', '29242414 interno 3203', 39, 'Depto. de Biofísica', 'Ayudante de Investigación', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facutlad de Química, 2010.', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(206, '2012-07-24', 'Chiale Carolina', 'terciaria', '42121341', '1987-10-31', 'Cufré 2791', 'carolina.chiale@gmail.com', '094508536', 39, 'Facultad de Medicina', 'Ayudante de Inmunobiología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química', 'CHEA', 'B', '2017-09-11', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(207, '2012-07-10', 'Prolo Carolina', 'terciaria', '39842463', '1987-02-20', 'Gral Flores 2125', 'cprolo@fmed.edu.uy', '099824247', 39, 'Depto. de Bioquímica', 'Ayudante Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'No especifica', 'CHEA', 'B', '2016-11-24', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(208, '2012-07-10', 'Quintana Carolina', 'secundaria', '46929672', '1984-09-19', 'Ruta 82, km 46.500', 'cquintana@higiene.edu.uy', '095679649', 39, 'Campo Experimental del Instituto de Higiene', 'Servicios Generales', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de Bioseguridad', '', '', 'Curso 1: Facultad de Veterinaria', 'Facultad de Química', 'A y B', '2016-12-31', '', 1, 1, 0, 0, '', '', 1, '2016-12-31'),
(209, '2012-07-09', 'Pascovich Claudia', 'terciaria', '36106921', '1983-10-30', 'Gral Flores 2125', 'cpascovich@gmail.com', '099070346', 39, 'Depto de Fisiología', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de uso de manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química, Depto de Ciencias Farmacéuticas, 2010', 'CHEA', 'B', '2016-12-31', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(210, '2012-07-26', 'Justet Cristian', 'terciaria', '30922090', '1980-08-10', 'Ildefonso García 4483', 'cjustet@fmed.edu.uy', '099483145', 39, 'PEDECIBA', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales de experimentación como reactivo biológico: principales herramientas para su control y manejo y uso', '', '', 'Curso 1: No especifica donde', 'CHEA', 'B', '2017-09-11', '', 0, 1, 0, 0, '', '', 1, '2016-02-28'),
(211, '2012-07-09', 'Daniel Olazabal', 'terciaria', '33434966', '1968-10-25', 'Alta Gracia 7990, Barra de Carrasco, Canelones, CP15000', 'dolazabal@fmed.edu.uy', '26011211', 39, 'No especifica', 'Profesor Titular, Grado 3', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'realización de varios cursos on line ', '', '', 'cURSO 1: Universidad de Rutgers y Univesidad Emory en USA. Número de acreditación Emory IACUC ID064-2006Y', 'CHEA', 'B y C2', '2013-05-31', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(212, '2012-07-10', 'Moraes Edith', 'terciaria', '35040095', '1941-07-19', 'Martín García 1805 apto 2', 'emoraes@fmed.edu.uy', '29243414 interno 3316', 39, 'No especifica', 'Técnico Medio del Área Biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Curso taller monitorie microbiológico de ratas y ratones de experimentación', '', 'Curso 1: No especifica donde.\nCurso 2. Noviembre 2005, CHEA.', 'CHEA', 'A y B', '2014-12-31', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(213, '2012-07-11', 'Migliaro Eduardo', 'terciaria', '11790812', '1950-06-23', 'Gral Flores 2125', 'erm@fmed.edu.uy', '29249453', 39, 'Depto de Fisiología', 'Profesor Titular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2016-12-31', '', 0, 0, 0, 1, '', '', 1, '2016-12-31'),
(214, '2012-05-24', 'Agote Elbio', 'terciaria', '111111111', '0000-00-00', 'Gral Flores 2125', 'eagote@fmed.edu.uy', '094486020', 39, 'No especifica', 'Auxiliar F7', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio, modulo 1 y 2', '', '', 'Curso. no especifica donde', 'CHEA', 'A, B ', '2014-12-31', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(215, '2012-07-10', 'Gezuele Elbio', 'terciaria', '6795693', '1934-02-21', 'Tristán Narvaja 1513 apto 1101', 'micol@higiene.edu.uy', '24873104', 39, 'Parasitología y Micología del Instituto de Higiene', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', '', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(216, '2012-07-10', 'Miquel Ernesto', 'terciaria', '37666613', '1984-01-16', 'Capdehourat 2789, Montevideo', 'ernestomiquel@gmail.com', '099244934', 39, 'Depto de Histología y Embriología', 'Estudiante de Maestría', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Facultad de Veterinaria, CHEA 2007', 'CHEA', 'B', '2014-08-05', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(217, '2012-07-12', 'Rodríguez Juan Ernesto', 'terciaria', '46944656', '1986-08-03', 'Andes 1577 Apto 402', 'erodriguez@fmed.edu.uy', '099422894', 39, 'Depto de Inmunobiología', 'Docente, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: Facultad de Química', 'CHEA', 'B', '2016-09-30', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(218, '2012-07-04', 'Hernández Federico', 'terciaria', '28592093', '1977-08-06', 'Germán Segura 4347', 'fhernandez@fmed.edu.uy', '29243414 interno 3226', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Auxiliar de Servicios Generales', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: 2011', 'CHEA', 'A', '2017-12-31', '', 1, 0, 0, 0, '', '', 1, '2017-09-11'),
(219, '2012-05-22', 'Luis Fernando Silveira', 'terciaria', '111111111', '0000-00-00', 'Alfredo Navarro 3051', 'fsilveir@higiene.edu.uy', '099088352', 39, 'Instituto de Higiene', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Monitoreo microbiológico de ratas y ratones de experimentación', 'Procedimientos experimentales en pequeños animales de experimentación', 'Curso 1: Facultad de Química, 2000\nCurso 2: CHEA, 2005.\nCurso 3: Universidad de la Plata, 2006.', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2016-12-31'),
(220, '2012-07-02', 'Evans Frances', 'terciaria', '41091480', '1982-03-24', 'Beranger 7369', 'francesevans82@yahoo.com', '095467652', 39, 'Laboratorio de Bioquímica', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: CHEA, 2006.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(221, '2012-07-09', 'Anesetti Gabriel', 'primaria', '27126867', '1969-04-29', 'Gral Flores 2125', 'ganesett@fmed.edu.uy', '29243414 interno 3481', 39, 'Depto de Histología y Embriología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(222, '2012-07-09', 'Kramer María Gabriela', 'terciaria', '15749061', '1970-02-03', 'Avda Navarro 3051', 'mgkramer@higiene.edu.uy', '099858924', 39, 'Instituto de Higiene', 'Profesor Titular, Grado 3', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Acreditación del Servicio Nacional de Salud', '', '', 'Curso 1: Gobierno de Navarra, España.', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2015-12-31'),
(223, '2012-07-09', 'Reta Germán', 'terciaria', '25495250', '1960-08-12', 'Avda Italia s/n', 'greta@hc.edu.uy', '24819161', 39, 'Hospital de Clínica', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2017-12-31', '', 0, 0, 0, 1, '', '', 1, '2017-09-11'),
(224, '2012-07-09', 'Ferreira Gonzalo', 'terciaria', '30123220', '1964-01-02', 'Avda. del Libertador 1532 apto 1402', 'ferreiragon@gmail.com', '29243414 interno 3203', 39, 'Laboratorio Canales Ionicos', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales Use Treining Program', 'Otro que no especifica', '', 'Curso 1: Washinton University, USA.2003\nCurso 2: Rush University Chicagho', 'CHEA', 'C2', '2013-12-31', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(225, '2012-07-10', 'Cabrera Guillermo', 'terciaria', '31517874', '1979-06-27', 'Gral Flores 2125', 'guillermlcp@gmail.com', '099799201', 39, 'Depto de Fisiología', 'Profesor Titular, Grado 3', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', 'Curso 1: CHEA', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(226, '2012-07-09', 'Brum Gustavo', 'terciaria', '13113058', '1953-09-23', 'Gral Flores 2125', 'gbrum@fmed.edu.uy', '29243414 interno 3228', 39, 'No especifica', 'Profesor', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2013-04-30', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(227, '2012-07-09', 'Sarroca Gustavo', 'terciaria', '20224052', '1954-02-07', 'Guayaquí 3233 Apto 4', 'gsarroca@higiene.edu.uy', '094439793', 39, 'Instituto de Higiene', 'Jefe de Servicio Veterinario', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de adiestramiento en cría, manejo y uso de animales de laboratorio. Elaboración de sueros hiperinmune en equinos', 'Bioseguridad en Bioterios', '', 'Curso 1: MSP de Santiago de Chile, abirl - mayo 1991\nCurso 2: Organizado AUCITAL y FIOCRUZ, julio 2011.', 'CHEA', 'C1', '2014-12-31', '', 0, 0, 1, 0, '', '', 1, '2014-12-31');
INSERT INTO `acreditacion` (`id`, `fecha`, `nombreapellido`, `formacion`, `documento`, `fechanacimiento`, `direccionpostal`, `direccionelectronica`, `telefonocontacto`, `instituciondesempeno`, `laboratoriounidad`, `cargofuncioninstitucion`, `cargahorariasemanal`, `nombresupervisor`, `especiestrabajadas`, `describatareas`, `pctinvestigacion`, `pctmedicinaclinica`, `pctcirugia`, `pctmantenimientocolonias`, `pctmanipulacion`, `pctdirprojectos`, `pctnecropsia`, `pctdiaglaboratorio`, `pctceua`, `pcthistopatologia`, `pctentedu`, `pctapoyoinvestigadores`, `pctsupervision`, `pctprodanimal`, `pctlegal`, `pctotrasfunciones`, `pctfuncnorel`, `pctobservaciones`, `realizocursos`, `acrpersonales`, `curso1`, `curso2`, `curso3`, `cursoobservacion`, `acrorganismo`, `acrcategoria`, `acrfecha`, `categoria`, `categoriaA`, `categoriaB`, `categoriaC1`, `categoriaC2`, `cvfile`, `cvpath`, `isactive`, `fechavencimiento`) VALUES
(228, '2012-07-09', 'Tejedor Guy', 'terciaria', '14144626', '1963-05-29', 'Ruta 11 km 138, San Jacinto, Canelones', 'gtejedor@higiene.edu.uy', '094204324', 39, 'Instituto de Higiene - Depto de Desarrollo Biotecnológico y Producción', 'Encargador de Bioterio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria.', 'Alternativas de manejo para una produccción de calidad', 'Bioseguridad en Bioterios', 'Curso 1:CHEA, Facultad de Veterinaria, 2006.\nCurso 2: Sociedad Rural de Durazno, 2004.\nCurso 3: Facultad de Veterinaria, 2011.', 'CHEA', 'A y B', '2015-03-31', '', 1, 1, 0, 0, '', '', 1, '2015-12-31'),
(229, '2012-07-09', 'Kunizawa Héctor', 'terciaria', '39727039', '0000-00-00', 'Gral Flores 2125', 'htatsuya@fmed.edu.uy', '29243414 interno 3343', 39, 'Instituto de Fisiología', 'Estudiante de Maestría, PEDECIBA', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso: Facultad de Química, 2008.', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(230, '2012-07-10', 'Rubbo Homero', 'terciaria', '17897153', '1964-03-21', 'Gral Flores 2125', 'hrubbo@fmed.edu.uy', '29249562', 39, 'Depto de Bioquímica', 'Profesor Titular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica cuales', 'CHEA', 'B y C2', '2013-12-31', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(231, '2012-06-29', 'Peluffo Hugo', 'terciaria', '18700953', '1973-12-08', 'Gral Flores 2125', 'hpeluffo@fmed.edu.uy', '29243414 interno 3465', 39, 'Facultad de Medicina', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Formación para el personal investigador, usario de animales de experimentación y otras finalidades científica', '', '', 'Curso 1: Universidad Autónoma de Barcelona.', 'CHEA', 'C2', '2013-06-18', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(232, '2012-07-09', 'Pose Inés', 'terciaria', '13113008', '1953-11-22', 'Gral Flores 2125', 'iposee@fmed.edu.uy', '29243544', 39, 'Depto de Fisiología', 'Profesor Agregado ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2016-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(233, '2012-07-09', 'Hurtado Francisco', 'terciaria', '13888605', '1955-05-20', 'Avda Italia s/n', 'hurtado@hc.edu.uy', '24819161', 39, 'Depto de Fisiopatología', 'Profesor Director', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo de animales de laboratorio. Animals Care Center. ', '', '', 'Curso 1: Facultad de Medicina, Universidad de Texas, 1990', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(234, '2012-07-10', 'Nogueira Javier', 'terciaria', '32488715', '1975-12-10', 'Emilio Graña 2912', 'noguiera@fmed.edu.uy', '098153367', 39, 'Facultad de Medicina', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(235, '2012-05-29', 'Boggia José', 'terciaria', '111111111', '0000-00-00', 'Avda Italia 2870 piso 15 Ala oeste, oficina 13', 'jboggia@hc.edu.uy', '24871515 interno 2567', 39, 'Hospital de Clínica', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Técnicas de experimentación animal', 'Técnicas de experimentación animal', 'Curso 1: CHEA, 2006.\nCurso 2: CHEA, 2007.\nCurso 3: CHEA, 2010.', 'CHEA', 'B', '2013-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(236, '2012-07-10', 'López Juan Marcelo', 'terciaria', '4679231', '1983-05-04', 'Ruta 82 km 46.500', 'cquintana@higiene.edu.uy', '093945590', 39, 'Campo Experimental del Instituto de Higiene', 'Oficial Rural', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'A y B', '2016-12-31', '', 1, 1, 0, 0, '', '', 1, '2016-12-31'),
(237, '2012-07-06', 'Martínez-Palma Laura', 'terciaria', '26108175', '1969-01-14', 'Marmarajá 2147 apto. 001', 'lmartinezpalma@fmed.edu.uy', '099762710', 39, 'Depto de Histología y Embriología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(238, '2014-06-03', 'Ancheta Rosano Oscar Sergio', 'primaria', '4007212/0', '1976-03-14', '11400', 'sergioancheta@pasteur.edu.uy', '25220910  / 137   _    094184075', 30, 'UATE', 'AUXILIAR DE MANTENIMIENTO', 40, 'MARTINA CRISPO', 'ROEDORES', 'ASISTENCIA EN ENSAYOS DE ACTIVIDAD BIOLOGICA\n\nMANTENIMIENTO DE ANIMALES\n\n\n\n\nSISTENCIA EN ENSAYOS DE ACTIVIDAD BIOLOGICA\nMANTENIMIENTO DE ANIMALE \n\n\n\n\n\n\n\n\n\n\n\n\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'CURSOS INTERNOS EN INSTITUTO PASTEUR', 'CHEA-CUIDADO Y MANEJO DE ANIMALES DE EXPERIMENTACION ACREDITANDO CATEGORIA A Y B ,ORGANIZADO POR LA COMICION HONORARIA DE EXPERIMENTACION ANIMALEN FACULTAD DE MEDICINA.16DE DICIEMBRE DE 2013', 'no', 'NO', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2019-06-03'),
(239, '2012-06-15', 'Gadola Liliana', 'terciaria', '111111111', '0000-00-00', '18 de Julio 2103 apto 802', 'lilianagad@gmail.com', '24809850', 39, 'Depto de Fisiopatología - Hospital de Cliínicas', 'Profesor Agregado de Fisiopatología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'B y C2', '2015-06-29', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(240, '2012-07-04', 'Carvallo Lucía', 'primaria', '18208676', '1961-12-19', 'La Paz 1828 apto 301', 'notiene@gmail.com', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Auxiliar de Servicios Generales', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', '', 'CHEA', 'A', '2014-12-31', '', 1, 0, 0, 0, '', '', 1, '2014-12-31'),
(241, '2012-07-24', 'Fajardo Lucía', 'terciaria', '44281406', '1985-11-30', 'Jackson 1234 apto 102', 'lufajardo85@gmail.com', '098656424', 39, 'Depto de Bioquímica', 'Ayudante', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: no especifica la institución', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(242, '2012-08-07', 'Yim Lucía', 'terciaria', '18003434', '1969-10-14', 'Alfredo Navarro 3051.', 'lyim@higiene.edu.uy', '24871288 interno 1123', 39, 'Instituto de Higiene', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: no especifica la institución que lo hizo.', 'CHEA', 'B', '2015-03-05', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(243, '2012-07-03', 'Benedetto Luciana', 'terciaria', '30132570', '1980-07-03', 'Gral Flores 2125', 'lbenedet@fmed.edu.uy', '29243414 interno 3232', 39, 'Depto de Fisiología', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', '', 'CHEA', 'B', '2012-12-31', '', 0, 1, 0, 0, '', '', 1, '2012-12-31'),
(244, '2012-07-04', 'Abad Luis', 'primaria', '26676128', '1964-11-23', 'Capitán Perez 184, Las Piedras, Canelones', 'notiene@gmail.com', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Auxiliar de Servicios Generales', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'No especifica en que institución lo hizo', 'CHEA', 'A y B', '2015-12-31', '', 1, 1, 0, 0, '', '', 1, '2015-12-31'),
(245, '2012-07-10', 'Oviedo María Cristina', 'secundaria', '19640233', '1965-07-15', 'Alfredo Navarro 3051.', 'coviedo@higiene.edu.uy', '099696286', 39, 'Instituto de Higiene', 'Preparador de área biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales de laboratorio, manejo y uso en experimentación científica', 'Uso y manejo de animales', 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria', 'Curso 1: Fac. de Química, nov de 2001.\nCurso 2: CHEA nov de 2003\nCurso 3: Fac. de Veterinaria, mayo a setiembre de 2003.', 'CHEA', 'A y B', '2014-12-31', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(246, '2012-07-09', 'Vola María Magadalena', 'terciaria', '38791728', '1979-01-06', 'Alfredo Navarro 3051.', 'mvola@higiene.edu.uy', '24871288', 39, 'Dpeto de Bacteriología y Virología', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: Fac. de Veterinaria 2009.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(247, '2012-07-11', 'Alsina Marcela', 'terciaria', '46493306', '1987-03-08', 'Gral Flores 2125', 'marcelalsina@hotmail.com', '099970590', 39, 'No especifica', 'Estudiante de Maestría, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'No especifica la institutción que lo hizo', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(248, '2012-07-09', 'Fernandez Marcelo', 'terciaria', '12868288', '1964-03-25', 'Dr Vazquez Acevedi 7129', 'xxmferna@gmail.com', '25251613', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Técnico preparador; Grado 7', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de cría y explotación de la chinchilla', 'Curso de inseminación artificial de bovinos', 'Curso sobre vigilancia epimediológica de la rabia en Uruguay y tenencia responsable de animales de companía.', 'Curso 1: Fac. de Veterinaria 1983.\nCurso 2: American Breeders Servica 1987.\nCurso 3: MGAP, 2001.', 'CHEA', 'A, B y C1', '2014-12-31', '', 1, 1, 1, 0, '', '', 1, '2016-06-01'),
(249, '2012-07-03', 'Caggiani María', 'terciaria', '37855927', '1985-12-26', 'Gral Flores 2125', 'mcaggiani@fmed.edu.uy', '24107894', 39, 'Depto de Fisiología', 'Ayudante de clase', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales de experimentación como reactivo biológico: principales herramientas para su control y manejo y uso', '', '', 'Curso 1: no especifica donde lo hizo', 'CHEA', 'B', '2016-08-24', '', 0, 1, 0, 0, '', '', 1, '2016-12-31'),
(250, '2012-07-09', 'Menendez María Clara', 'terciaria', '13454464', '1956-07-03', 'Domingo Torres 4380', 'cmenend@higiene.edu.uy', '095717836', 39, 'Instituto de Higiene', 'Técnico de Laboratorio', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso Internacional en Animales Ponzoñosos', 'Bioseguridad en Bioterios', '', 'Curso 1: Organizado JICA, Instituto Butantan, San Pablo, set 2012.\nCurso 2: CHEA, AUCITAL - Fiocruz, jul 2011.', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(251, '2012-06-12', 'Moreno María', 'terciaria', '111111111', '0000-00-00', 'Alfredo Navarro 3051.', 'mmoreno@higiene.edu.uy', '24871288 interno 1123', 39, 'Depto de Desarrollo Biotecnológico, Instituto de Higiene', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', 'Ethische dimensies van de mensgebonden noderzoek', 'Seguridad de Laboratorio', 'Curso 1: Fac. de Veterinaria, 2009.\nCurso 2: University Ámsterdam, Países Bajos, 24, 27 y 28 de feb 2006.\nCurso 3: Fac. de Quíjmica, de agosto a diciembre de 2000.', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2015-12-31'),
(252, '2012-07-11', 'Ures María Ximena', 'terciaria', '40929171', '0000-00-00', 'Hermanos Ruiz 3370', 'ximenaures@hotmail.com', '099224702', 39, 'No especifica', 'Ayudante honorario', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-12-31'),
(253, '2012-07-04', 'Santos Mariela', 'primaria', '25485467', '1969-04-19', 'Luis Braille 3191', 'msantos@fmed.edu.uy', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'No especifica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bioseguridad en Bioterios', 'Bioensayos aplicados a la evaluación de la actividad e inocuidad de productos naturales invitro, invivo e exvivo', 'Animales de experimentación como reactivo biológico: prinicpales herramientas para su control y suo', 'Curso 1. no especifica en donde.\nCurso 2: Curso PEDECIBA, abril 2011.\nCurso: Curso CHEA - Pro inbio, feb de 2011.', 'CHEA', 'B', '2014-12-31', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(254, '2012-07-04', 'Breijo Martín', 'terciaria', '26528947', '1969-02-17', 'Asamblea 4335', 'mbreijo@fmed.edu.uy', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Director', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '2° Curso de Biomodelos de Experimentación', 'Curso de cría de animales de laboratorio', 'Couse on genetics of laboratory rodents', 'Curso 1:Universidad de Costa Rica, feb 1997.\nCurso 2. Instituto de Higiene, 1997.\nFundación Osvaldo Cruz, Brasil, 2004.', 'CHEA', 'C1 y C2', '2015-12-31', '', 0, 0, 1, 1, '', '', 1, '2015-12-31'),
(255, '2012-07-10', 'Cavelli Matías', 'terciaria', '38000541', '1985-05-15', 'Gral Flores 2125', 'mcavelli@fmed.edu.uy', '098405547', 39, 'Depto de Fisiología', 'Ayudante de Departamento', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales de experimentación como reactivo biológico: principales herramientas para su control y manejo y uso', '', '', 'Curso 1: Fac. de Medicina, 2011', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(256, '2012-07-09', 'Carbia Mauricio', 'terciaria', '27702704', '0000-00-00', 'Espinosa 1539', 'mcarbia@higiene.edu.uy', '099264771', 39, 'Parasitología y Micología del Instituto de Higiene', 'Asistente', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Utilización de animales de experimentación científica', '', '', 'Curso 1: CHEA', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2013-12-31'),
(257, '2014-07-10', 'Naviliat Mercedes', 'terciaria', '11613482', '0000-00-00', 'Dionisio Oribe 3327', 'naviliat@fmed.edu.uy', '24805207', 39, 'No especifica', 'No especifica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(258, '2012-07-09', 'Borde Michelle', 'terciaria', '16692051', '0000-00-00', 'Gral Flores 2125', 'mborde@fmed.edu.uy', '29243414 interno 3343', 39, 'Depto de Fisiología', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(259, '2012-07-10', 'Radmilovich Milka', 'terciaria', '11811654', '0000-00-00', 'Santiago de Chile 1304 apto 601', 'milka@fmed.edu.uy', '29022502', 39, 'Depto de Histología y Embriología', 'Profesor Director', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(260, '2012-06-10', 'Scalante Miria', 'secundaria', '16577235', '0000-00-00', 'Alfredo Navarro 3051.', 'm.scalante@higiene.edu.uy', '094370121', 39, 'Instituto de Higiene', 'Técnico de Laboratorio Clínico', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso de animales en experimentación', 'Prevención de riesgos laborales', 'Bioseguridad en Bioterios', 'Cursos: no especifica', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2015-12-31'),
(261, '2012-07-09', 'Natalia Mazza', 'terciaria', '46857831', '0000-00-00', 'Alfredo Navarro 3051.', 'nmazza@higiene.edu.uy', '23078285', 39, 'Depto de Desarrollo Biotecnológico, Instituto de Higiene', 'Becaria grado 1', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: no especifica en donde', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-09-11'),
(262, '2012-07-09', 'Natalia Muñoz', 'terciaria', '34774372', '0000-00-00', 'Alfredo Navarro 3051.', 'nataliam@higiene.edu.uy', '24871288 interno 1132', 39, 'Instituto de Higiene', 'Docente, Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Current Topics in Laboratory Animal Science.', '', 'Curso 1: Facultad de Química, 2006\nCurso 2: Facultad de Química, 2009', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(263, '2012-07-26', 'Alonzo Pablo', 'terciaria', '26633215', '0000-00-00', 'Alfredo Navarro 3051.', 'palonozo@higiene.edu.uy', '098057918', 39, 'Campo Experimental del Instituto de Higiene', 'Dirección Técnica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria.', 'Uso y manejo del cerdo, el ovino y el bovino como modelos para actividades de investigación y docencia', 'Animales de experimentación como reactivo biológico: prinicpales herramientas para su control y suo', 'Curso 1: CHEA 2006\nCurso 2: CHEA 2010\nCurso 3: CHEA 2011', 'CHEA', 'B y C1', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(264, '2014-06-03', 'Mereles Perdomo Martín Andre', 'primaria', '3.720.621.9', '0000-00-00', '11400', 'martinm@pasteur.edu.uy', '23210487_094274550', 30, 'UATE', 'AUXILIAR DE MANTENIMIENTO', 40, 'MARTINA CRISPO', 'ROEDORES ', 'CAMBIO Y MANTENIMIENTO DE CAJAS , EXPANCION DE COLONIAS (SEXADO)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'CURSO INTERNO EN EL INSTITUTO PASTUR', 'CHEA', '', 'NO', '', '', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2019-06-03'),
(265, '2012-07-10', 'Torterolo Pablo', 'terciaria', '1887027', '0000-00-00', 'Gral Flores 2125', 'ptortero@fmed.edu.uy', '29243414 interno 3234', 39, 'Depto de Fisiología', 'Profesor Agregado Grado 4', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', 'Curso 1: Universidad de California de los Ángeles', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2013-12-31'),
(266, '2012-07-09', 'Contreras Paola', 'terciaria', '25102807', '0000-00-00', 'Gral Flores 2125', 'contreras@fmed.edu.uy', '29249453', 39, 'No especifica', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Working with the IACUC y Working with Mice in research settings', 'Técnicas de experimentación animal', 'Uso y manejo de animales de laboratorio', 'Curso 1: On line 2009\nCurso 2: CHEA PROIMBIO, 2007\nCurso 3: CHEA 2006.', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(267, '2012-07-25', 'Lagos Patricia', 'terciaria', '38106622', '0000-00-00', 'Gral Flores 2125', 'plagos@fmed.edu.uy', '29243414 interno 3411', 39, 'Depto de Fisiología', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(268, '2012-07-17', 'Pouso Paula', 'terciaria', '29509324', '0000-00-00', 'Gral Flores 2125', 'ppouso@fmed.edu.uy', '24017211', 39, 'Depto de Histología y Embriología', 'Asistente Grado II', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(269, '2012-07-10', 'Rafael Radi', 'terciaria', '13845833', '0000-00-00', 'Gral Flores 2125', 'rradi@fmed.edu.uy', '29249562', 39, 'Depto de Bioquímica', 'Profesor Titular', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2013-12-31'),
(270, '2012-07-10', 'Quintana Ramón', 'primaria', '16747337', '0000-00-00', 'Ruta 82 km 46.500', 'notiene@gmail.com', '22956810', 39, 'Campo Experimental del Instituto de Higiene', 'Jardinero - Cuidado y mantenimiento en área de cobayos', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', '', 'CHEA', 'A', '0000-00-00', '', 1, 0, 0, 0, '', '', 1, '2017-09-11'),
(271, '2012-07-20', 'Chavez Rebeca', 'terciaria', '47646336', '0000-00-00', 'Gral Flores 2125', 'rchavez@fmed.edu.uy', '29243414 interno 3551', 39, 'No especifica', 'Profesor Agregado DT', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'No especifica', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(272, '2012-07-10', 'Sapiro Rossana', 'terciaria', '15451351', '0000-00-00', 'Gral Flores 2125', 'rsapiro@fmed.edu.uy', '29243414 interno 3505', 39, 'Depto de Histología y Embriología', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2017-09-11'),
(273, '2012-07-04', 'Franco Sandra', 'primaria', '18191366', '0000-00-00', 'Carlos A. López 8062', 'sfranco@fmed.edu.uy', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Capataz General', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Bioseguridad en Bioterios', 'Uso y manejo de animales de laboratorio', '', 'Curso 1: 2011\nCurso 2: 2006', 'CHEA', 'A', '0000-00-00', '', 1, 0, 0, 0, '', '', 1, '2012-12-31'),
(274, '2012-07-30', 'Mai Sandra', 'terciaria', '28321527', '0000-00-00', 'Bvar. Artigas 2540 apto 402', 'mai.sandra@gmail.com', '098821946', 39, 'No especifica', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', 'Manejo y uso de especies productivas para experimentación, docencia e investigación universitaria', '', 'Curso 1 y 2: no especifica\n', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(275, '2012-07-08', 'Castro Santiago', 'terciaria', '43554595', '0000-00-00', 'Gral Flores 2125', 'scastro@fmed.edu.uy', '093722700', 39, 'No especifica', 'Asistente de Fisiología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de modelos de animales tradicionales y no tradicionales en investigación', '', '', 'Curso 1: Fac. de Ciencias 2010', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(276, '2012-07-05', 'Curti Sebastián', 'terciaria', '28924010', '0000-00-00', 'Gral Flores 2125', 'scurti@fmed.edu.uy', '29243414 interno 3936', 39, 'Depto de Fisiología', 'Profesor Adjunto', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(277, '2012-07-10', 'Sasías Sebastián', 'terciaria', '39641487', '0000-00-00', 'Gestido 2635 apto 306', 'ssasias@higiene.edu.uy', '097055213', 39, 'Depto de Desarrollo Biotecnológico, Instituto de Higiene', 'Ayudante, Grado I', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Salud, bienestar y producción de animales de laboratorio', '', '', 'Curso 1: no especifica', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(278, '2012-07-12', 'Freire Teresa', 'terciaria', '19251599', '0000-00-00', 'Gral Flores 2125', 'tfreire@fmed.edu.uy', '29249562', 39, 'Depto de Inmunobiología', 'Profesor Agregado. grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Formación y capacitación para el uso de animales de experimentación', '', '', 'Curso 1: Instituto Pasteur de París', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2014-12-31'),
(279, '2012-07-10', 'Rábago Teresita', 'primaria', '16592203', '0000-00-00', 'Calle Ibicué entre Yamandú y Hum, Manzana 122, solar 29', 'trabajo@higiene.edu.uy', '0999090652', 39, 'No especifica', 'Preparador de área biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Animales de laboratorio, manejo y uso en experimentación científica', '', '', 'Curso 1: Fac de Quíjmica, 2001', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(280, '2012-07-09', 'Alcoba Shirley', 'secundaria', '11760932', '0000-00-00', 'Gral Hornos 4901', 'alco.shy@hotmail.com', '23074682', 39, 'Instituto de Higiene', 'Preparador de área biológica', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Capacitación en bioterios y animales de laboratorio', 'Curso de cunicultura', 'Uso y manejo de animales de laboratorio - módulos I y II', 'Curso 1: no especifica donde\nCurso 2: Fac. de Agronomía\nCurso 3: CHEA, nov de 2003', 'CHEA', 'A y B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2014-12-31'),
(281, '2012-07-31', 'Vallez Valeria', 'primaria', '20255538', '0000-00-00', 'Gral Flores 2125', 'vvallez@fmed.edu.uy', '29249562', 39, 'No especifica', 'Estudiante de Postgrado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y manejo de animales de laboratorio', '', '', 'Curso 1: no especifica', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2013-12-31'),
(282, '2012-06-26', 'Abudara Verónica', 'terciaria', '12818283', '0000-00-00', 'Gral Flores 2125', 'abudara@fmed.edu.uy', '29243414 interno 3323', 39, 'No especifica', 'Profesor Agregado Grado 4', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2014-12-31'),
(283, '2012-07-09', 'Comas Virginia', 'terciaria', '30082783', '0000-00-00', 'Gral Flores 2125', 'vcomas@fmed.edu.uy', '29243414 interno 3343', 39, 'Depto de Fisiología', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'B', '0000-00-00', '', 0, 1, 0, 0, '', '', 1, '2014-12-31'),
(284, '0000-00-00', 'Washington Albornoz', 'primaria', '20190055', '0000-00-00', 'Ruta 8 km 20.200', 'notiene@gmail.com', '29243414 interno 3262', 39, 'Unidad de Reactivos y Biomodelos de Experimentación', 'Auxiliar de Servicios Generales', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, '', '', '', 'No especifica', 'CHEA', 'B', '0000-00-00', '', 1, 1, 0, 0, '', '', 1, '2015-12-31'),
(285, '2012-12-19', 'Grignola Juan Carlos', 'terciaria', '18938306', '1965-09-04', 'Avda Italia s/n', 'jgrig@fmed.edu.uy', '099171999', 39, 'Depto de Fisiopatología - Hospital de Cliínicas', 'Profesor Agregado Grado 4', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '2014-12-31', '', 0, 0, 0, 1, '', '', 1, '2014-07-01'),
(286, '2013-06-30', 'Vitureira Nathalia', 'terciaria', '111111111', '0000-00-00', 'Paname, Manzana 263 Solar 9.1. El Pinar - Canelones', 'nvitureira@fmed.edu.uy', '29243414 interno 3531', 39, 'No especifica', 'Profesor Adjunto, Grado III', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Curso de Formación de personal investigador, usario de animales para experimentación y otras finalidades científicas', 'The animals (Scientific Procedures) Act 1986', '', 'Curso 1: Organizado por la Universidad de Barcelona 2002 - 2003.\nCurso 2: Organizado por University College London', 'CHEA', 'B y C2', '0000-00-00', '', 0, 1, 0, 1, '', '', 1, '2017-07-01'),
(287, '2013-06-25', 'Noboa Oscar', 'terciaria', '16558534', '0000-00-00', 'Avda Italia s/n, piso 14', 'onoboa@hc.edu.uy', '24809850', 39, 'Centro de Nefrología', 'Director ', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-07-23'),
(288, '2012-07-10', 'Cassina Patricia', 'terciaria', '18465080', '0000-00-00', 'Gral Flores 2125', 'ecassina@fmed.edu.uy', '29243414 interno 3502', 39, 'Depto de Histología y Embriología', 'Profesor Agregado', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Habilitación para el trabajo con animales de experimentación', 'Metodología para la investigación en biología de la reproducción', '', 'Curso 1: Universidad de Alabama, Birmingham, USA. oct 1993\nCurso 2:PEDECIBA jun - jul 1989', 'CHEA', 'C2', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2018-09-23'),
(289, '2013-08-19', 'Briva Arturo', 'terciaria', '25946754', '1971-05-25', '21 de Setiembre 2012 apto 1106', 'abriva@hc.edu.uy', '099666902', 39, 'Depto de Fisiopatología - Hospital de Cliínicas', 'Profesor Adjunto Fisiopatología', 400, 'xx', 'xx', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 'Animals Trainig North Western', '', '', 'Curso 1: University, Chicago, USA', '', '', '0000-00-00', '', 0, 0, 0, 1, '', '', 1, '2015-09-23'),
(293, '2014-03-11', 'Silva Karina', 'primaria', '6.003.245/1', '2013-10-08', 'lsdkhf', 'karina@hekj.edu.uy', '2413777', 54, 'ss', 'dd', 400, 'WWW', 'sree', 'grsfdc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, '', '', '', '', 'ksjd', 'C4', '2014-08-07', '', 0, 1, 0, 0, '', '', 1, '2014-08-07'),
(294, '2014-03-14', 'Maria Eugenia Schroeder', 'terciaria', '4.152.452-2', '2014-03-14', '11400', 'mariaeugeniaschroeder@pasteur.edu.uy', '099397776', 30, 'Laboratorio de Inmunoregulación e inflamación', 'Estudiante de Maestría', 30, 'Marcelo Hill (responsable del laboratorio y mi tutor)', 'Especie: Mus. Musculus \nCepa: C57/BL6', 'Actualmente me encuentro llevando a cabo un modelo de sepsis por punción y ligadura cecal en ratones. Este es uno de los los modelos validados para estudiar la activación del inflamasoma (complejo multiproteico que activa la IL-1beta). El equipo del Prof. Dr. Oscar Noboa (Clínica Nefrológica, Hospital de Clínicas) ha utilizado este modelo en el trabajo de Maestría de las Dras M Seija y C Baccino. Colaboraremos con ellos para tratar animales sépticos con Hidroxicloroquina HCQ (esta es una droga ampliamente utilizada a nivel nacional e internacional en pacientes con enfermedades autoinmunes como artritis reumatoidea y lupus eritematoso sistémico).  Analizaremos el suero, la función renal y la sobrevida de los animales tratados. Estos experimentos nos permitirán determinar si el efecto de la HCQ en la producción de IL-1beta (potente citoquina pro-inflamatoria) es relevante in vivo. Nuestra hipótesis de trabajo plantea que la HCQ podría ser capaz de bloquear la producción de una de las citoquinas pro-inflamatorias más potentes: la IL-1beta. Se adjunta protocolo aprobado por la CEUA IPMon.\nLa especie que utilizaremos es Mus. Musculus y la cepa C57/BL6.\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Uso y Manejo de animales de laboratorio', '', '', 'Adjunto certificado de Curso Uso y manejo de animales le laboratorio dictado por la CHEA', 'Udelar-FACULTAD DE Quimica-CSIC-CHEA', 'B', '2016-03-01', '', 0, 1, 0, 0, '', '', 1, '2016-06-03'),
(295, '2014-03-25', 'Carlos Jose Escande Castro', 'primaria', '3.336.530-2', '2014-03-25', 'Mataojo 2020, Montevideo, Uruguay, 11400', 'escande@pasteur.edu.uy', '2522 0910 int 178', 30, 'Laboratorio de Patologias del Metabolismo y Envejecimiento', 'Investigador Principal', 40, 'Luis Barbeito', 'Ratones', 'Diseño de protocolos experimentales, formación de estudiantes en tareas de experimentación animal, manipulación y experimentación de animales', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'Acreditacion de IACUC (Mayo Clinic, USA, 2007) para el manejo de animales de laboratorio ', 'Manipulation of small laboratory animales (Mayo Clinic, USA, 2008)', 'Surgical procedures in small rodents (Mayo Clinic, USA, 2008)', 'Todos los cursos enumerados fueron realizados en el marco de mi tesis doctoral realizada en conjunto entre PEDECIBA y Mayo Clinic (USA).', 'IACUC (Mayo Clinic, USA)', 'Habilitado experimentacion y manejo', '0000-00-00', '', 0, 0, 0, 1, '', '', 0, '2014-03-25'),
(299, '2014-05-22', 'José Manuel Venzal Bianchi', 'primaria', '1912677-0', '2014-05-01', 'Industria 1351, Salto', 'dpvuru@hotmail.com', '098948262 / 47328167', 49, 'Laboratorio de Vectores y enfermedades transmitidas', 'Profesor Agregado', 40, 'Gregory Randall', 'Roedores, Conejos, Cobayos, Animales de producción, domésticos y silvestres', 'Relacionadas con la toma de muestras e infecciones experimentales con parásitos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 'SALUD, BIENESTAR Y PRODUCCIÓN DE ANIMALES DE LABORATORIO, 27 de Octubre al Viernes 7 de Noviembre de 2008, Facultad de Veterinaria.', '', '', '', 'CHEA Facultad de Veterinaria', 'B y C2', '2018-01-01', '', 0, 1, 0, 1, '', '', 0, '2014-05-22');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `acreditacionarchivo`
--

INSERT INTO `acreditacionarchivo` (`id`, `acreditacion_id`, `filename`, `filepath`, `type`) VALUES
(24, 238, 'Hoja_de_firmas.PDF', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(25, 238, 'Certificado.PDF', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(26, 264, 'Firmas_Martin.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(27, 264, 'Cert_Martin.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(31, 293, 'Lectura07.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(32, 293, 'programa_jornada_ceua.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(33, 294, 'Firma_del_interesado_y_firma_de_un_integrante_de_la_CEUA_de_la_institución_señalada_anteriormente._.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(34, 294, 'Certificado_APROBACION_Uso_y_manejo_animales_laboratorio_CHEA.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(35, 294, 'CSIC-CHEA-Programa_Diploma_CHEA.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(36, 294, 'Protocolo_aprobado_comité_de_ética_IPM.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(37, 294, 'Certificado_APROBACION_Uso_y_manejo_animales_laboratorio_CHEA1.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(38, 294, 'CSIC-CHEA-Programa_Diploma_CHEA1.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(39, 294, 'CSIC-CHEA-Programa_Diploma_CHEA2.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(40, 295, 'Escande_CNEA.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(41, 295, 'Escande_Mice_Approval_(A52112-A39511).pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(42, 295, 'Escande_Mice_Approval_(A52112-A39511)1.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(43, 295, 'CVEscande-CNEA.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(44, 295, 'Escande_et_al_2013.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(45, 295, 'JCI39319.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(48, 299, 'Hoja_de_firmas_CEUA_Regional_Norte.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'firmainstitucion'),
(49, 299, 'Curso_CHEA._2008_.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'curso'),
(50, 299, 'Acreditados_Veterinaria2.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion'),
(51, 299, 'CV_resumido_JM_Venzal._CNEA_2014_.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 'acreditacion');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

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
(62, 'Acta N° 05/13', 42),
(63, 'Acta N° 06/13', 43),
(64, 'Acta N° 07/13', 44),
(65, 'Acta N° 08/13', 45),
(66, 'Acta N° 01/14', 46),
(67, 'Acta N° 02/14', 47);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

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
(94, 'default', 44, 'novedad'),
(95, 'default', 45, 'novedad'),
(96, 'default', 63, 'actas'),
(97, 'default', 64, 'actas'),
(98, 'default', 65, 'actas'),
(99, 'default', 46, 'novedad'),
(100, 'default', 66, 'actas'),
(101, 'default', 67, 'actas');

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
('091795bbb2cbce6a8d472f03d44e12e2', '186.54.180.134', 'Mozilla/5.0 (Windows NT 6.1; rv:29.0) Gecko/20100101 Firefox/29.0', 1402275598, ''),
('138846862c40f7cbfb8a8b82dbf0ccec', '157.56.93.71', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1402294293, ''),
('157284004f4d707a0f9daf555458de5d', '217.69.133.169', 'Mozilla/5.0 (X11; Linux x86_64; rv:18.0) Gecko/20100101 Firefox/18.0', 1402308397, ''),
('1d1df43d080faa03ca6e4b334634440b', '98.139.243.52', 'Mozilla/5.0 (Series40; NokiaC3-00/so6.96; Profile/MIDP-2.1 Configuration/CLDC-1.1) Gecko/20100401 S40OviBrowser/1.5.0.34', 1402298408, ''),
('2f14381f68cc79dd538a88e1adff23e7', '208.115.111.69', 'Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)', 1402278729, ''),
('31eede57977e64bdce0dcefac173e6a8', '83.233.207.74', 'Mozilla/4.0 (CMS Crawler: http://www.cmscrawler.com)', 1402287139, ''),
('325b68b1bc4f377060532bd479fa8680', '66.249.67.13', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1402272605, ''),
('393b23020c39b24ba920467610fe6f24', '66.249.67.143', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1402276205, ''),
('3aca9f3228ca08528c155025c0bc39b7', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278758, ''),
('3f6a521a9f98467a4429e35d3be58b87', '5.9.145.110', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278839, ''),
('42476aa39aafe80d68e256635dbb3869', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278753, ''),
('652f516a256706ac3927eface932bfbc', '208.115.111.69', 'Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)', 1402307602, ''),
('6a4cef69f1a8503cbdd9f9d367c76435', '69.147.77.30', 'Mozilla/5.0 (Series40; NokiaC3-00/so6.96; Profile/MIDP-2.1 Configuration/CLDC-1.1) Gecko/20100401 S40OviBrowser/1.5.0.34', 1402298408, ''),
('8afe88866bf9808c9e98ebcaad071e48', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278755, ''),
('8febf3710c57e491a78fb7c20aaaacce', '180.76.5.81', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 1402298091, ''),
('aeb69e2c5f81eedffff6f3ab776d24c3', '157.55.33.181', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1402300152, ''),
('c4676078cb70f4caeeac296b690c5d1f', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278762, ''),
('c74a05685ae6f6655acf737b8850175b', '180.76.6.62', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 1402282959, ''),
('cd081399a8fb633988f79ce65ce2d593', '186.53.75.128', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:29.0) Gecko/20100101 Firefox/29.0', 1402309181, 0x613a323a7b733a393a22757365725f64617461223b733a303a22223b733a32323a2275726c5f746f5f6469726563745f6f6e5f6c6f67696e223b733a31313a2261646d696e2f696e646578223b7d),
('ce2aec31eb82c10ffebc6e5effada688', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278751, ''),
('d004af22d65eef7b024734e5f0eda1bd', '208.115.113.85', 'Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)', 1402272221, ''),
('d4e6f0562010c6d469e206b3b0280ea1', '157.55.33.181', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1402300651, ''),
('d6b05b5dadb208be5a3d35610ab38b07', '144.76.84.47', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1402278760, ''),
('e6c8f1c58a19353be3709528f512216d', '157.55.33.81', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1402276431, ''),
('e7f0e668a2a45eea98ddfe9cd08ad8b3', '208.115.113.85', 'Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)', 1402272216, ''),
('e93600326309c47d006cab584b9adba9', '66.249.67.143', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1402288344, ''),
('fa7cb58c5b4ab3b157135cf1a7029ca2', '68.180.224.235', 'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)', 1402299390, '');

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
(4, 'Ley 18611', 'http://sip.parlamento.gub.uy/leyes/AccesoTextoLey.asp?Ley=18611&amp;Anchor=', 2),
(5, 'Guía para el Cuidado y Uso de los Animales de Laboratorio, National Research Council (libre acceso)', 'http://www.nap.edu/openbook.php?record_id=10929&amp;page=R1', 0),
(6, 'Decreto Reglamentario', 'http://www.cnea.org.uy/documentos/decreto_reglamentario2014.pdf', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=257 ;

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
(251, '/var/www/clients/client3/web3/web/assets/upload/uploads/90/7c8d6457115d67e038f40ea23c1cc188.doc', 'acta 23 de julio de 2013.doc', 'doc', 90, 1),
(252, '/var/www/clients/client3/web3/web/assets/upload/uploads/96/cc518b12128d5fad6ee7d89b132e20c5.pdf', 'acta 27 de agosto de 2013.pdf', 'pdf', 96, 1),
(253, '/var/www/clients/client3/web3/web/assets/upload/uploads/97/3c0d6c6dd5a339e7b708b5ba85764bc1.pdf', 'acta 24 de setiembre de 2013.pdf', 'pdf', 97, 1),
(254, '/var/www/clients/client3/web3/web/assets/upload/uploads/98/d4e1ae652e49f946a3ae8c787d89b6be.pdf', 'acta 26 de noviembre de 2013.pdf', 'pdf', 98, 1),
(255, '/var/www/clients/client3/web3/web/assets/upload/uploads/100/910e847be71a6f3ae25edf66ccbf9865.pdf', 'acta_18_de_febrero_de_2014.pdf', 'pdf', 100, 1),
(256, '/var/www/clients/client3/web3/web/assets/upload/uploads/101/fa8404720d4097015f05bb8d013b8249.pdf', 'acta_18_de_marzo_de_ 2014.pdf', 'pdf', 101, 1);

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
(31, 'Dirección Nacional de Recursos Acuáticos (MGAP)', 'Dirección Nacional de Recursos Acuáticos', '', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección Nacional de Recursos Acutáticos', 'No corresponde', 'Constituyente 1497', '', 'mixto', '', 'Alfredo Pereira', 'apereira@dinara.gub.uy', '24004689', '003/11', 'www.inape.gub.uy', '2tx6jX7v', 1, 'doc20130903115348.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 2),
(32, 'División Laboratorios Veterinarios &quot;Dr. Miguel C. Rubino&quot; (MGAP)', 'MGAP-DILAVE', '214992490017', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección General de Servicios Ganaderos', 'Division Laboratorios Veterinarios (DILAVE)', 'Ruta 8 km 17.500', '', 'mixto', '', 'Ulises Cuore', 'ucuore@mgap.gub.uy', '2 222 1063', '004/11', '', 'Y3p6rmzt', 1, 'dilave_4.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 3),
(33, 'Laboratorios Microsules Uruguay S.A.', 'LaLaboratorios Microsules Uruguay S.A.', '211262100019', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Ruta 101 km 28 Camino al Paso Escobar S/N. Pueblo Capital José A. Artigas. Canelones', 'Ruta 101 km 28', 'mixto', '', 'Verónica Gutierrez', 'v.gutierrezcastro12@gmail.com', '095819798', '005/11', '', 'gRjVDCfY', 1, 'Laboratorio_Microsules_Uruguay.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 4),
(34, 'Facultad de Ciencias, UDELAR', 'No corresponde', '214478920019', 'publica', 'Universidad de la República', 'Facultad de Ciencias', 'No corresponde', 'Iguá 4225, Montevideo. C.P. 11400', 'Iguá 4225, Montevideo', 'mixto', '', 'Natalia Uriarte', 'natiuria@gmail.com', '2525 8618/21 interno 7151', '006/11', '', 'tjpXw8fB', 1, 'Facultad_de_Ciencias_Udelar.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 5),
(35, 'Centro Uruguayo de Imagenología Molecular', 'Centro Uruguayo de Imagenología Molecular (CUDIM)', '216137350014', 'mixta', 'Centro Uruguayo de Imagenología Molecular', 'No corresponde', 'No corresponde', 'Dr. Americo Ricaldoni 2010', '', 'mixto', '', 'Silvia Hernández', 'silvia.hernandez@cudim.org', '2480 3238 interno 242', '007/11', '', 'njgfGZtd', 1, 'cudim_7.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 6),
(36, 'Instituto de Investigaciones Biológicas Clemente Estable (MEC)', 'IIBCE', '', 'publica', 'Ministerio de Educación y Cultura', 'IIBCE', 'No corresponde', 'Avenida Italia 3318', '', 'mixto', '', 'Alicia Hanusz', 'asistentes.iibce@gmail.com', '2487 1616 interno 108', '008/11', '', 'Ct2GzBLR', 1, 'iibce.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 7),
(37, 'Instituto Nacional de Investigación Agropecuaria', 'INIA', '040164300014', 'mixta', 'Instituto Nacional de Investigación Agropecuaria', 'Dirección Nacional', 'No corresponde', 'Andes 1365 piso 12', '', 'mixto', '', 'Marcia Del Campo', 'mdelcampo@tb.inia.org.uy', '099 835 181', '009/11', '', 'BYqKJhGN', 1, 'inia_9.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 8),
(38, 'Instituto Universitario CLAEH', 'Centro Latinoamericano de Economía Humana', '215223670015', 'privada', 'Instituto Universitario CLAEH', 'Facultad de Medicina', 'Departament de Fisiología Humana', 'Prado Salt Lake, Parada 16 Roosevelt, Punta del Este', '', 'experimentación', '', 'Carlos Penengo', 'cpenengo@claeh.edu.uy', '095278576', '010/11', '', 'JNLyxvbM', 1, 'claeh.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 9),
(39, 'Facultad de Medicina - UDELAR', 'Facultad de Medicina', '214499290014', 'publica', 'Universidad de la República', 'Facultad de Medicina', 'Unidad de Reactivos para Biomodelos de Experimentación', 'Avenida General Flores 2125', '', 'mixto', '', 'Mariela Santos', 'msantos@fmed.edu.uy', '29243414 interno 3226', '011/11', '', 'yHvtfPK7', 1, 'Facultad_de_Medicina.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 10),
(40, 'Instituto St. Clare&#39;s College', 'Fundación St. Clare´s College', '100518390019', 'privada', 'Instituto St. Clare&#39;s College', 'Facultad de Veterinaria', 'No corresponde', 'California y Los Médanos, San Rafael, Punta del Este', '', 'experimentación', '', 'Richard Müller ', 'rmoller@scc.edu.uy', '099161789', '012/11', '', 'H4m26jWB', 1, 'Instituto_St_Clares_College.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 11),
(41, 'Museo Nacional de Historia Natural', 'No corresponde', '', 'publica', 'Ministerio de Educación y Cultura', 'Dirección de Innovación, Ciencia y Tecnología para el Desarrollo (DICyT)', 'Museo Nacional de Historia Natural', '25 de Mayo 582, Montevideo', '', 'experimentación', '', 'Javier González', 'info@mnhn.gub.uy', '2916 0908', '013/11', '', '8fQ6kVdx', 1, 'Museo_Nacional_de_Historia_Natural.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 12),
(42, 'Facultad de Química - UDELAR', 'No corresponde', '', 'publica', 'Universidad de la República', 'Facultad de Química', 'Departamento de CIENFAR, Laboratorio de Experimentación Animal (LEA). Establecimiento de cría y experimentación', 'Avenida General Flores 2124', '', 'mixto', '', 'Jenny Carolina Saldaña', 'jennysal@fq.edu.uy', '2924 3213', '014/11', '', 'KvVkQ7jn', 1, 'Facultad_de_Quimicia.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 13),
(43, 'Laboratorios Santa Elena', 'Santa Elena S.A.', '210121720012', 'privada', 'No aplica', 'No aplica', 'No aplica', 'Millán 4175. Montevideo', '', 'experimentación', '', 'Ing. Quím. Leonardo Acosta', 'lacosta@santaelena.com.uy', '2307 5757 interno 123', '015/11', '', 'qb2mtcJ3', 1, 'Laboratorios_Santa_Elena.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 14),
(44, 'Laboratorio Prondil', 'Prondil S.A.', '212523460011', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Barros Arana 5402, Montevideo, Uruguay. CP 12200', '', 'mixto', '', 'Daniel Maglione', 'dmaglione@prondil.com', '2513 3252 / 54 interno 115', '016/11', '', 'Cxk3mKF8', 1, 'Laboratorio_Prondil.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 15),
(45, 'Secretariado Uruguayo de la Lana', 'SUL', '', 'privada', 'SUL', 'No corresponde', 'No corresponde', 'Rambla Baltasar Brum 3764, Montevideo', '', 'mixto', '', 'Dr. Daniel Castell ', 'castell@adinet.com.uy', '099351568', '017/11', '', 'QRwpk3rf', 1, 'Secretariado_Uruguayo_de_la_Lana.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 16),
(46, 'Centro Universitario Regional Este (UDELAR)', 'Universidad de la República', '214393430017', 'publica', 'Universidad de la República', 'Centro Universitario Regional Este', 'Polos de Desarrollo Universitario (Maldonado-Rocha)', 'Calle Burnett, casi M. Chissi, Maldonado.', '', 'mixto', '', 'Frando Texeira de Melo ', 'frantei@fcien.edu.uy', '099089451', '018/11', '', 'C2ncbzBY', 1, 'Centro_Universeitario_Regional_Este.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 17),
(47, 'Facultad de Veterinaria, UDELAR', 'Facultad de Veterinaria, UDELAR', '21 343 354 00 14', 'publica', 'Universidad de la República', 'Facultad de Veterinaria', 'Decanato', 'Av. Alberto Lasplaces 1620', '', 'mixto', '', 'Gonzalo Suárez y/o José Manuel Verdes', 'gsuarez@fvet.edu.uy', '2628 4215', '019/11', '', 'r4BhCRGk', 1, 'Facultad_de_Veterinaria.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 18),
(48, 'Facultad de Agronomía - UDELAR', 'Facultad de Agronomía', '214181750018', 'publica', 'Universidad de la República', 'Facultad de Agronomía', 'No corresponde', 'Avda. E. Garzón 780. CP 12900, Montevideo, Uruguay.', '', 'mixto', '', 'Elize Van Lier', 'evanlier@fagro.edu.uy', '2354 3460', '021/12', '', 'RhQk8wx2', 1, 'Facultad_de_Agronomia.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 20),
(49, 'Regional Norte (UDELAR)', 'Universidad de la República', '160181320010', 'publica', 'Universidad de la República', 'Regional Norte', 'No corresponde', 'Rivera 1350, Salto.', '', 'experimentación', 'secretaria@unorte.edu.uy', 'Alejandro Noboa', 'anoboa@unorte.edu.uy', '4732 4816 interno 120', '022/12', '', '2VtLpTBP', 1, 'Regional_Norte.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 21),
(50, 'Zoológico Parque Leccoq', 'Zoológico', '', 'publica', 'Intendencia Municipal de Montevideo', 'Departamento de Cultura', 'Zoológico Parque Leccoq', 'Luis Batlle Berres s/n km. 19.500. Montevideo', '', 'mixto', '', 'Carmen Leizagoyen', 'carmenleizagoyen@gmail.com', '094 274 8564', '023/12', '', 'qYn2tQd9', 1, 'Zoologico_Parque_Leccoq.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 22),
(51, 'Karumbé', 'Asociación Civil', '110306470016', 'privada', 'No corresponde', 'No corresponde', 'No corresponde', 'Avda. Giannattasio km 30.500 El Pinar, Canelones.', '', 'experimentación', '', 'Virginia Ferrando', 'bluevicone@yahoo.com', '099 758 348', '024/12', '', '9fDbv3n7', 1, 'karumbe.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 23),
(52, 'Merial S.A.', 'Merial S.A.', '210213660016', 'privada', 'Merial, División de Salud Animal de SANOFI - AVENTIS', 'No corresponde', 'No corresponde', 'José María Penco 3427, Montevideo', '', 'mixto', 'Mixto', 'Rafel Pellegrino', 'rafael.pellegrino@merail.com', '2209 7091 - 275', '025/12', '', 'XGDhY8Zz', 1, 'Merial.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 24),
(53, 'Dirección General de Servicios Agrícolas (MGAP)', 'MGAP', '', 'publica', 'Ministerio de Ganadería, Agricultura y Pesca', 'Dirección General de Servicios Agrícolas', 'Departamento de Laboratorios Biológicos', 'Avdea. Millán 4703', '', 'experimentación', 'Experimentación', 'Ethel Rodríguez', 'erodriguez@mgap.gub.uy', '2309 8410', '026/12', '', 'XqbJL6RH', 1, 'Direccion_General_de_Servicios_Agricolas.pdf', '/var/www/clients/client3/web3/web/assets/protectedfiles/', 25),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

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
(42, 'Receso para el Registro de Personas', 'Desde lunes 2 de diciembre y hasta el lunes 31 de marzo de 2014, la Comisi&amp;oacute;n no recepcionar&amp;aacute; solicitudes para el Registro de Personas.', 18),
(44, 'II Encuentro Uruguayo de CEUAS', 'El martes 10 de diciembre se realiz&amp;oacute; el II Encuentro Uruguayo del Comit&amp;eacute; &amp;Eacute;tica en el Uso de Animales.&lt;br /&gt;&lt;br /&gt;Se encuentra disponible la presentaci&amp;oacute;n del Dr. Joel Majerowicz, de la Fundaci&amp;oacute;n Osvaldo Cruz, de Fiocruz, Brasil.&lt;br /&gt;&lt;br /&gt;&lt;a href=&quot;http://www.dicyt.gub.uy/cnea/documentos/presentacion_ceuas.ppt&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;Descargar&lt;/strong&gt;&lt;/a&gt; (Power Point 8.381 kb)', 20),
(45, 'Encuentro IBRO sobre Desafíos Éticos en Latinoamérica', 'Los d&amp;iacute;as 20 y 21 de noviembre, a iniciativa del Dr. Pedro Maldonado, Profesor de la Universidad de Chile y Coordinador del Comit&amp;eacute; de &amp;Eacute;tica en la Investigaci&amp;oacute;n (Ethics in Research Committee) de la International BrainResearchOrganization (IBRO), se realiz&amp;oacute; en la DICyT del MEC la Reuni&amp;oacute;n de IBRO ETHICS IN RESEARCH COMMITTEE.&lt;br /&gt;&lt;br /&gt;Ver el &lt;a href=&quot;http://www.dicyt.gub.uy/cnea/documentos/informe_final_encuentro_ibrp.pdf&quot; target=&quot;_blank&quot;&gt;Informe de Actividades&lt;/a&gt;', 21),
(46, 'Decreto Reglamentario', 'Fue aprobado con fecha 28 de marzo de 2014 el &lt;a href=&quot;../../documentos/decreto_reglamentario2014.pdf&quot; target=&quot;_blank&quot;&gt;Decreto Reglamentario&lt;/a&gt; de la &lt;a href=&quot;http://sip.parlamento.gub.uy/leyes/AccesoTextoLey.asp?Ley=18611&amp;amp;Anchor=&quot; target=&quot;_blank&quot;&gt;Ley 18.611&lt;/a&gt;.&lt;br /&gt;', 22);

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
(63, 18),
(64, 18),
(67, 18),
(58, 19),
(59, 19),
(60, 19),
(61, 19),
(62, 19),
(63, 19),
(64, 19),
(65, 19),
(66, 19),
(67, 19),
(39, 20),
(58, 20),
(64, 20),
(67, 20),
(38, 21),
(39, 22),
(58, 22),
(63, 22),
(64, 22),
(65, 22),
(66, 22),
(67, 22),
(38, 24),
(63, 26),
(64, 26),
(65, 26),
(66, 26),
(67, 26),
(65, 32),
(65, 33),
(63, 34),
(64, 34),
(65, 34),
(66, 34);

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
(44, 19),
(45, 19),
(44, 20),
(41, 22),
(44, 22),
(45, 22),
(13, 25),
(13, 26),
(45, 26),
(15, 27),
(16, 27),
(39, 32),
(40, 32),
(45, 32),
(39, 33),
(41, 33),
(39, 34),
(41, 34),
(44, 34),
(45, 34),
(40, 35);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(6, 'administrador', '$P$B9i132NRMpeWBTD4Ay/DRjSvxkWAd/.', 'rswibmer@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '10.2.1.252', '2014-06-05 11:34:24', '2012-04-17 14:47:59', '2014-06-05 14:34:24');

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
