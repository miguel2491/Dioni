-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2020 a las 05:35:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ppcesedu_mx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos1`
--

CREATE TABLE `alumnos1` (
  `id` int(2) NOT NULL,
  `id_alumn` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nombre` varchar(16) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `appat` varchar(12) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `appmat` varchar(36) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `user_alum` varchar(33) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `pass_alumn` varchar(19) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cuatrimestre` varchar(25) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `carrera` varchar(25) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `id_carrera` varchar(5) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `foto` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `info` varchar(500) COLLATE utf8_spanish_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci PACK_KEYS=1;

--
-- Volcado de datos para la tabla `alumnos1`
--

INSERT INTO `alumnos1` (`id`, `id_alumn`, `nombre`, `appat`, `appmat`, `user_alum`, `pass_alumn`, `cuatrimestre`, `carrera`, `id_carrera`, `foto`, `info`) VALUES
(1, '201701001', 'Andrea Guadalupe', 'Vigueras', 'Sánchez', 'vigueras.andrea', '7429647', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(2, '201701005', 'Violeta ', 'Romero', 'Bustamante', 'romero.violeta', '96', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(3, '201701007', 'Gerardo Abraham', 'Hernández', 'Chávez', 'hernandez.gerardo', '5497755', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(4, '201701011', 'María Martha', 'Rivera', 'Pérez', 'rivera.maria', '6121604', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(5, '201701013', 'José Armando', 'Santiago', 'Valente', 'santiago.jose', '4731325', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(6, '201701012', 'Beatriz ', 'Santiago', 'Miguel', 'santiago.beatriz', '2584771', 'II     CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(7, '201704001', 'Isai ', 'Méndez', 'Rodríguez', 'mendez.isai', '56', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(8, '201704002', 'Erika ', 'Hernández', 'Paz', 'hernandez.erika', '5691070', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(9, '201704003', 'Oliver Albino', 'Olarte', 'Rodríguez', 'olarte.oliver', '5650528', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(10, '201704004', 'Marlene', 'Galindo', 'Molina', 'galindo.marlene', '7852061', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(11, '201704005', 'Lizbeth ', 'Álvarez', 'Rugerio', 'alvarez.lizbeth', '6303725', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(12, '201704009', 'Marisol ', 'GarcÍa', 'Aguirre', 'garcia.marisol', '1409634', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(13, '201704008', 'Clara ', 'Francisco', 'Martín', 'martín.clara', '4239754', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(14, '201705001', 'DarÍo Cesáreo', 'Morales', 'García', 'garcia.morales.dario', '4088078', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(15, '201705002', 'Luis Alberto', 'Robles', 'Sauz', 'robles.luis', '3644623', 'II     CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(16, '20160202006', 'Sandra Sabina', 'Bautista', 'Dimas', 'bautista.sandra', '2584771', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(17, '201602001', 'Omar', 'Carrillo', 'Reyes', 'carrillo.omar', '2422692', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(18, '201602002', 'Camilo', 'Islas', 'Hidalgo', 'islas.camilo', '5666772', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(19, '201602003', 'Irbin  Cristian', 'Zamora', 'Hernández', 'zamora.irbin', '5691070', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(20, '201602004', 'Sujey  Ali', 'Zamora', 'Hernández', 'zamora.sujey', '5650528', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(21, '201602007', 'Alejandro', 'Manzano', 'Ríos', 'manzano.alejandro', '7852061', 'QUINTO CUATRIMESTRE', 'Investigación Pericial', 'IP00', '', ''),
(22, '201604002', 'Elizabeth', 'Mora', 'Hernández', 'mora.elizabeth', '1409634', 'QUINTO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(23, '201604004', 'Aarón', 'Meneses', 'Romero', 'meneses.aaron', '4239754', 'QUINTO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(24, '20160102001', 'Mariana Itzel', 'Montes', 'González', 'montes.mariana', '4239756', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(25, '20160102008', 'Andrea', 'Benítez', 'Chávez', 'benitez.andrea', '4239757', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(26, '20160102006', 'Erika', 'Guerra', 'Muñoz', 'guerra.erika', '4239758', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(27, '20160102007', 'Hugo', 'Roldan', 'Najera', 'roldan.hugo', '4239759', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(28, '20160102011', 'José Ángel', 'Amador', 'Jiménez', 'amador.jose', '4239760', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(29, '2015010005', 'Ariel', 'Tapia', 'Chávez', 'tapia.ariel', '4239761', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(30, '20160102012', 'Melissa', 'Aponte', 'Vázquez', 'aponte.melissa', '4239762', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(31, '20160102014', 'Gustavo', 'Chantes', 'Pérez', 'chantes.gustavo', '4239763', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(32, '201401006', 'Oscar Alberto', 'Marín', 'Bravo', 'marin.oscar', '2584771', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(33, '20160102013', 'Sergio', 'Fragoso', 'Días', 'fragoso.sergio', '2422692', 'QUINTO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(34, '201605001', 'Rey David', 'Romero', 'Salgado', 'romero.rey', '5691070', 'QUINTO CUATRIMESTRE', 'Ingeniería en  Logística', 'ILD00', 'imagenes/logoo.jpeg', ''),
(35, '201605005', 'Carlos Alberto', 'Ortíz', 'Ortíz', 'ortiz.carlos', '5650528', 'QUINTO CUATRIMESTRE', 'Ingeniería en  Logística', 'ILD00', 'imagenes/FB_IMG_1549842088275.jpg', ' '),
(36, '20160402013', 'Noemi', 'Luna', 'Cortez', 'luna.noemi', '7852061', 'QUINTO CUATRIMESTRE', 'Ingeniería en  Logística', 'ILD00', '', ''),
(37, '201603001', 'José Oscar Artur', 'Baez', 'Sánchez', 'baez.jose', '1409634', 'QUINTO CUATRIMESTRE', 'Contaduría', 'CT00', '', ''),
(38, '201603002', 'José Carlos', 'Morales', 'Sánchez', 'morales.jose', '1409635', 'QUINTO CUATRIMESTRE', 'Contaduría', 'CT00', '', ''),
(39, '201603008', 'Lizethbet Birai', 'Pérez', 'Cuatzo', 'perez.lizethbet', '1409636', 'QUINTO CUATRIMESTRE', 'Contaduría', 'CT00', '', ''),
(40, '201603005', 'Genesis ', 'Olivares', 'Medina', 'olivares.genesis', '1409637', 'QUINTO CUATRIMESTRE', 'Contaduría', 'CT00', '', ''),
(41, '201601002', 'Landy Patricia', 'De La Cruz', 'Camacho', 'cruz.landy', '1409639', 'SEPTIMO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(42, '201601004', 'Ángelica ', 'Sánchez', 'Romero', 'sanchez.angelica', '1409640', 'SEPTIMO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(43, '201601006', 'Ángelica ', 'Carmona', 'Hernández', 'carmona.angelica', '7852061', 'SEPTIMO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(44, '201601008', 'Alma Cecilia', 'Flores', 'Martínez', 'flores.alma', '7852062', 'SEPTIMO CUATRIMESTRE', 'Derecho', 'DR00', '', ''),
(45, '201504001', 'Israel Jesús', 'Gómez', 'Jiménez', 'gomez.israel', '7852064', 'OCTAVO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(46, '201504003', 'Daniel ', 'Ibañez', 'Méndez', 'ibanez.daniel', '7852065', 'OCTAVO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(47, '201504006', 'Leticia ', 'Rojas', 'García', 'rojas.leticia', '7852066', 'OCTAVO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(48, '201504009', 'Carmina ', 'Cancino', 'Hoyos', 'cancino.carmina', '7852067', 'OCTAVO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(49, '201504010', 'María Aurelia', 'Romero', 'De La Luz', 'romero.maria', '7852068', 'OCTAVO CUATRIMESTRE', 'Administración de Empresa', 'ADE00', '', ''),
(50, '201501003', 'Leopoldo', 'Carmona', 'Leal', 'carmona.leopoldo', '7852070', 'OCTAVO CUATRIMESTRE', 'Derecho', 'DR00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `id_carrera` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Carrera` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave_sep` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `id_carrera`, `Carrera`, `clave_sep`) VALUES
('1', 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'sep'),
('2', 'CT00', ' CONTADURÍA  ', 'sep'),
('3', 'DR00	', ' DERECHO ', 'sep'),
('4', 'ILD00', ' INGENIERÍA EN LOGÓSTICA Y ALTA DIRECCIÓ', 'sep'),
('5', 'IP00', ' INVESTIGACIÓN PERICIAL  ', 'sep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clase` int(2) NOT NULL DEFAULT 0,
  `fecha` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_unico_mat` varchar(10) COLLATE utf8_spanish_ci DEFAULT '',
  `id_carrera` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_cuatri` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `llave_clase` varchar(45) COLLATE utf8_spanish_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clase`, `fecha`, `id_unico_mat`, `id_carrera`, `id_cuatri`, `llave_clase`) VALUES
(1, '06/01/2018', '232', 'ADE00', '2', '1205'),
(2, '13/01/2018', '232', 'ADE00', '2', '1206');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases_asig`
--

CREATE TABLE `clases_asig` (
  `id_clase_asignada` int(25) UNSIGNED NOT NULL,
  `id_carrera` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `id_unico_mat` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `descripcion_tarea` text COLLATE utf8_spanish_ci NOT NULL,
  `link_video1` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `link_video2` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `link_video3` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `video` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `anexo1` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `anexo2` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nom_anexo1` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nom_anexo2` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecha` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `llave_clase` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `name_alumn` varchar(80) COLLATE utf8_spanish_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clases_asig`
--

INSERT INTO `clases_asig` (`id_clase_asignada`, `id_carrera`, `id_unico_mat`, `descripcion_tarea`, `link_video1`, `link_video2`, `link_video3`, `video`, `anexo1`, `anexo2`, `nom_anexo1`, `nom_anexo2`, `fecha`, `llave_clase`, `name_alumn`) VALUES
(2, 'ADE00', '232', 'El inglés es una lengua germánica occidental originada de los dialectos anglofrisios traídos a Britania por los invasores germanos desde varias partes de lo que ahora es el noroeste de Alemania, sur de Dinamarca y el norte de los Países Bajos.\r\n\r\nInicialmente, el inglés antiguo era un grupo de varios dialectos, que reflejaba el variado origen de los reinos anglosajones de Inglaterra. Uno de estos dialectos, el late west saxon (sajón occidental tardío), en cierto momento llegó a dominar. La lengua inglesa antigua original fue luego influenciada por dos oleadas invasoras: la primera fue de hablantes de la rama escandinava de las lenguas germánicas, que conquistaron y colonizaron partes de Britania, la segunda fue de los Normandos en el siglo XI, que hablaban antiguo normando y desarrollaron una variedad del inglés denominada como anglonormado. Estas dos invasiones hicieron que el inglés se mezclara hasta cierto punto.\r\n\r\nLa cohabitación con los Escandinavos, que habrían hablado dialectos del antiguo nórdico, derivó en una significativa simplificación gramatical y un enriquecimiento léxico del núcleo anglofrisio del inglés; la posterior ocupación normanda llevó a un injerto de una capa de palabras más elaboradas provenientes de las lenguas romances (derivadas del latín). Esta influencia normanda en el inglés penetró a través de las cortes y del gobierno. Con la llegada del Renacimiento, el latín y el griego clásico suplantaron al francés normando como principal fuente de nuevas palabras. ', 'xduoAXAcW6s', 'iFHWC3S2vXY', 'Ge9O8W0oUdc', 'videos/leccion1.mp4', '../doc/DOC-20170605-WA0009.xlsx', '../doc/DOC-20170605-WA0009.xlsx', 'anexo1', 'anexo2', '2018-04-12 13:30:55', '1205', ''),
(3, 'ADE00', '232', '324', '32432', '', '', '432', 'fwe', 'ewew', 'rew', 'rew', 'rew', '1206', 'rew');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuatrimestres`
--

CREATE TABLE `cuatrimestres` (
  `id_cuatri` int(1) NOT NULL DEFAULT 0,
  `cuatri` varchar(29) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuatrimestres`
--

INSERT INTO `cuatrimestres` (`id_cuatri`, `cuatri`) VALUES
(1, 'I     CUATRIMESTRE'),
(2, 'II     CUATRIMESTRE'),
(3, 'III    CUATRIMESTRE'),
(4, 'IV    CUATRIMESTRE'),
(5, 'V    CUATRIMESTRE'),
(6, 'VI    CUATRIMESTRE'),
(7, 'VII    CUATRIMESTRE'),
(8, 'VIII    CUATRIMESTRE'),
(9, 'IX     CUATRIMESTRE'),
(10, 'X     CUATRIMESTRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id_cuestionario` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL,
  `id_alumno` varchar(45) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`id_cuestionario`, `id_pregunta`, `id_respuesta`, `id_alumno`, `id_evaluacion`, `status`, `created_at`) VALUES
(1, 1, 2, '201701001', 1, 1, '2020-05-16 20:44:58'),
(2, 2, 1, '201701001', 1, 1, '2020-05-16 21:17:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `nombre_evaluacion` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id_evaluacion`, `id_profesor`, `nombre_evaluacion`, `status`, `created_at`) VALUES
(1, 1, 'Prueba', 1, '2020-05-16 19:24:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `no` int(3) NOT NULL DEFAULT 0,
  `id_carr` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carrera` varchar(55) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_mat` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `materia` varchar(87) COLLATE utf8_spanish_ci DEFAULT '',
  `abre_mat` varchar(39) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_unico_mat` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuatrimestre` varchar(26) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_cuatrimestre` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`no`, `id_carr`, `carrera`, `id_mat`, `materia`, `abre_mat`, `id_unico_mat`, `cuatrimestre`, `id_cuatrimestre`) VALUES
(1, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADMINISTRACIÓN DE EMPRESAS', '0', 'ADMINISTRACIÓN DE EMPRESAS', 0),
(2, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE01', 'ADMINISTRACIÓN I', 'ADMINISTRACIÓN I', '121', 'PRIMER CUATRIMESTRE', 1),
(3, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE02', 'CONTABILIDAD I', 'CONTABILIDAD I', '153', 'PRIMER CUATRIMESTRE', 1),
(4, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ING. EN LOGÍSTICA Y ALTA DIRECCIÓN', '0', 'INGENIERÍA EN LOGÍSTICA Y ', 0),
(5, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD01', 'ADMINISTRACIÓN I', 'ADMINISTRACIÓN I', '121', 'PRIMER CUATRIMESTRE', 1),
(6, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE03', 'METODOLOGÍA DE LA INVESTIGACIÓN', 'MET. DE LA INVESTIGACIÓN', '209', 'PRIMER CUATRIMESTRE', 1),
(7, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE04', 'TÉCNICAS DE EXPRESIÓN ORAL Y ESCRITA', 'TEC. DE EXP. ORAL Y ESCRITA', '279', 'PRIMER CUATRIMESTRE', 1),
(8, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE05', 'INGLÉS I', 'INGLÉS I', '232', 'PRIMER CUATRIMESTRE', 1),
(9, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE06', 'MATEMATICAS', 'MATEMÁTICAS', '246', 'SEGUNDO CUATRIMESTRE', 2),
(10, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE07', 'CONTABILIDAD II', 'CONTABILIDAD II', '155', 'SEGUNDO CUATRIMESTRE', 2),
(11, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE09', 'ADMINISTRACIÓN II', 'ADMINISTRACIÓN II', '122', 'SEGUNDO CUATRIMESTRE', 2),
(12, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE09', 'TECNOLOGÍAS DE LA INFORMACIÓN', 'TEC. DE LA INFORMACIÓN', '269', 'SEGUNDO CUATRIMESTRE', 2),
(13, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE10', 'INGLÉS II', 'INGLÉS II', '233', 'SEGUNDO CUATRIMESTRE', 2),
(14, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE11', 'BASES JURÍDICAS', 'BASES JURÍDICAS', '141', 'TERCER CUATRIMESTRE', 3),
(15, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE12', 'DISEÑO GRAFICO PARA LAS EMPRESAS', 'DISEÑO GRAFICO PARA LAS EMPRESAS', '212', 'TERCER CUATRIMESTRE', 3),
(16, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE13', 'MATEMÁTICAS FINANCIERAS', 'MATEMÁTICAS FINANCIERAS', '247', 'TERCER CUATRIMESTRE', 3),
(17, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE14', 'MERCADOTECNIA ', 'MERCADOTECNIA ', '249', 'TERCER CUATRIMESTRE', 3),
(18, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE15', 'INGLÉS III', 'INGLÉS III', '234', 'TERCER CUATRIMESTRE', 3),
(19, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE16', 'ECONOMÍA', 'ECONOMÍA', '214', 'CUARTO CUATRIMESTRE', 4),
(20, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE17', 'DERECHO LABORAL', 'DERECHO LABORAL', '192', 'CUARTO CUATRIMESTRE', 4),
(21, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE18', 'PROBLEMAS ECONÓMICOS, POLÍTICOS Y SOCIALES DE MÉXICO', 'PROBLEMAS ECO., POL. Y SOC. DE MÉX.', '263', 'CUARTO CUATRIMESTRE', 4),
(22, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE19', 'ADMINISTRACIÓN DE LA PRODUCCIÓN', 'ADMINISTRACIÓN DE LA PRODUCCIÓN', '125', 'CUARTO CUATRIMESTRE', 4),
(23, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE20', 'INGLÉS IV', 'INGLÉS IV', '235', 'CUARTO CUATRIMESTRE', 4),
(24, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE21', 'COMERCIO INTERNACIONAL', 'COMERCIO INTERNACIONAL', '147', 'QUINTO CUATRIMESTRE', 5),
(25, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE22', 'PLANEACIÓN ESTRATEGICA', 'PLANEACIÓN ESTRATÉGICA', '258', 'QUINTO CUATRIMESTRE', 5),
(26, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE23', 'CALIDAD', 'CALIDAD', '146', 'QUINTO CUATRIMESTRE', 5),
(27, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE24', 'DERECHO MERCANTIL', 'DERECHO MERCANTIL', '195', 'QUINTO CUATRIMESTRE', 5),
(28, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE25', 'LOGÍSTICA INTERNACIONAL', 'LOGÍSTICA INTERNACIONAL', '245', 'SEXTO CUATRIMESTRE', 6),
(29, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE26', 'ORGANIZACIÓN EMPRESARIAL', 'ORGANIZACIÓN EMPRESARIAL', '256', 'SEXTO CUATRIMESTRE', 6),
(30, 'CT00', 'CONTADURíA', 'CT00', 'CONTADURÍA', 'CONTADURÍA', '0', 'CONTADURÍA', 0),
(31, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE27', 'COSTOS', 'COSTOS', '163', 'SEXTO CUATRIMESTRE ', 6),
(32, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE28', 'RECURSOS HUMANOS', 'RECURSOS HUMANOS', '266', 'SEXTO CUATRIMESTRE', 6),
(33, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE29', 'SEGURIDAD E HIGINIENE EN LAS EMPRESAS', 'SEG. E HIGIENE EN LAS EMPRESAS', '277', 'SEPTIMO CUATRIMESTRE ', 7),
(34, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE30', 'AUDITORIA', 'AUDITORIA', '136', 'SEPTIMO CUATRIMESTRE ', 7),
(35, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE31', 'MERCADO', 'MERCADO', '248', 'SEPTIMO CUATRIMESTRE ', 7),
(36, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD02', 'CONTABILIDAD', 'CONTABILIDAD', '148', 'PRIMER CUATRIMESTRE', 1),
(37, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD03', 'METODOLOGÍA DE LA INVESTIGACIÓN', 'MET. DE LA INVESTIGACIÓN', '209', 'PRIMER CUATRIMESTRE', 1),
(38, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE32', 'FINANZAS CORPORATIVAS', 'FINANZAS CORPORATIVAS', '222', 'SEPTIMO CUATRIMESTRE ', 7),
(39, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE33', 'ESTRUCTURA DE PRECIOS', 'ESTRUCTURA DE PRECIOS', '218', 'SEPTIMO CUATRIMESTRE ', 7),
(40, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE34', 'INVESTIGACIÓN DE OPERACIONES', 'INVESTIGACIÓN DE OPERACIONES', '242', 'OCTAVO CUATRIMESTRE', 8),
(41, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE35', 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS DE INVERSIÓN', 'FORM. Y EVA. DE PRO. DE INVERSIÓN', '224', 'OCTAVO CUATRIMESTRE', 8),
(42, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE36', 'DERECHO LABORAL', 'DERECHO LABORAL', '225', 'OCTAVO CUATRIMESTRE', 8),
(43, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE37', 'ADMINISTRACIÓN DE COMPRAS', 'ADMINISTRACIÓN DE COMPRAS', '123', 'OCTAVO CUATRIMESTRE', 8),
(44, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE38', 'DESARROLLO SUSTENTABLE', 'DESARROLLO SUSTENTABLE', '208', 'NOVENO CUATRIMESTRE', 9),
(45, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE39', 'DERECHO FISCAL', 'DERECHO FISCAL', '186', 'NOVENO CUATRIMESTRE', 9),
(46, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE40', 'LEGISLACIÓN ADUANERA', 'LEGISLACIÓN ADUANERA', '244', 'NOVENO CUATRIMESTRE', 9),
(47, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE41', 'ADMINISTRACIÓN DE VENTAS', 'ADMINISTRACIÓN DE VENTAS', '127', 'NOVENO CUATRIMESTRE', 9),
(48, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE42', 'OPTATIVA 1', 'OPTATIVA 1', '254', 'NOVENO CUATRIMESTRE', 9),
(49, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE43', 'SERVICIO AL CLIENTE', 'SERVICIO AL CLIENTE', '272', 'DECIMO CUATRIMESTRE', 10),
(50, 'CT00', 'CONTADURíA', 'CT01', 'ADMINISTRACIÓN I', 'ADMINISTRACIÓN I', '121', 'PRIMER CUATRIMESTRE', 1),
(51, 'CT00', 'CONTADURíA', 'CT02', 'CONTABILIDAD I', 'CONTABILIDAD I', '153', 'PRIMER CUATRIMESTRE', 1),
(52, 'CT00', 'CONTADURíA', 'CT03', 'METODOLOGÍA DE LA INVESTIGACIÓN', 'MET. DE LA INVESTIGACIÓN', '209', 'PRIMER CUATRIMESTRE', 1),
(53, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE44', 'SEMINARIO DE TESIS', 'SEMINARIO DE TESIS', '271', 'DECIMO CUATRIMESTRE', 10),
(54, 'CT00', 'CONTADURíA', 'CT04', 'TÉCNICAS DE EXPRESION ORAL Y ESCRITA', 'TEC. DE EXP. ORAL Y ESCRITA', '279', 'PRIMER CUATRIMESTRE', 1),
(55, 'CT00', 'CONTADURíA', 'CT05', 'INGLÉS I', 'INGLÉS I', '232', 'PRIMER CUATRIMESTRE', 1),
(56, 'CT00', 'CONTADURíA', 'CT06', 'MATEMÁTICAS', 'MATEMÁTICAS', '246', 'SEGUNDO CUATRIMESTRE', 2),
(57, 'CT00', 'CONTADURíA', 'CT07', 'CONTABILIDAD II', 'CONTABILIDAD II', '155', 'SEGUNDO CUATRIMESTRE', 2),
(58, 'CT00', 'CONTADURíA', 'CT08', 'ADMINISTRACIÓN II', 'ADMINISTRACIÓN II', '122', 'SEGUNDO CUATRIMESTRE', 2),
(59, 'DR00', 'DERECHO', 'DR00', 'DERECHO', 'DERECHO', '0', 'DERECHO', 0),
(60, 'CT00', 'CONTADURÍA', 'CT09', 'TECNOLOGÍAS DE LA INFORMACIÓN', 'TEC. DE LA INFORMACIÓN', '269', 'SEGUNDO CUATRIMESTRE', 2),
(61, 'CT00', 'CONTADURÍA', 'CT10', 'INGLÉS II', 'INGLÉS II', '233', 'SEGUNDO CUATRIMESTRE', 2),
(62, 'CT00', 'CONTADURÍA', 'CT11', 'BASES JURÍDICAS', 'BASES JURÍDICAS', '141', 'TERCER CUATRIMESTRE', 3),
(63, 'CT00', 'CONTADURÍA', 'CT12', 'CONTABILIDAD III', 'CONTABILIDAD III', '156', 'TERCER CUATRIMESTRE', 3),
(64, 'CT00', 'CONTADURÍA', 'CT13', 'MATEMÁTICAS FINANCIERAS', 'MATEMÁTICAS FINANCIERAS', '247', 'TERCER CUATRIMESTRE', 3),
(65, 'CT00', 'CONTADURÍA', 'CT14', 'SUELDOS Y SALARIOS', 'SUELDOS Y SALARIOS', '275', 'TERCER CUATRIMESTRE', 3),
(66, 'CT00', 'CONTADURÍA', 'CT15', 'INGLÉS III', 'INGLÉS III', '234', 'TERCER CUATRIMESTRE', 3),
(67, 'CT00', 'CONTADURÍA', 'CT16', 'ECONOMÍA', 'ECONOMÍA', '214', 'CUARTO CUATRIMESTRE', 4),
(68, 'CT00', 'CONTADURÍA', 'CT17', 'DERECHO LABORAL', 'DERECHO LABORAL', '192', 'CUARTO CUATRIMESTRE', 4),
(69, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD04', 'TÉCNICAS DE EXPRESIÓN ORAL Y ESCRITA', 'TÉC. DE EXP. ORAL Y ESCRITA', '279', 'PRIMER CUATRIMESTRE', 1),
(70, 'CT00', 'CONTADURÍA', 'CT18', 'CONTABILIDAD IV', 'CONTABILIDAD IV', '157', 'CUARTO CUATRIMESTRE', 4),
(71, 'CT00', 'CONTADURÍA', 'CT19', 'SISTEMAS DE INFORMACIÓN ADMINISTRATIVA', 'SIS. DE INF.  ADMINISTRATIVA', '251', 'CUARTO CUATRIMESTRE', 4),
(72, 'CT00', 'CONTADURÍA', 'CT20', 'INGLÉS IV', 'INGLÉS IV', '235', 'CUARTO CUATRIMESTRE', 4),
(73, 'CT00', 'CONTADURÍA', 'CT21', 'COMERCIO INTERNACIONAL', 'COMERCIO INTERNACIONAL', '147', 'QUINTO CUATRIMESTRE', 5),
(74, 'CT00', 'CONTADURÍA', 'CT22', 'CONTABILIDAD V', 'CONTABILIDAD V', '158', 'QUINTO CUATRIMESTRE', 5),
(75, 'CT00', 'CONTADURÍA', 'CT23', 'CALIDAD', 'CALIDAD', '146', 'QUINTO CUATRIMESTRE', 5),
(76, 'CT00', 'CONTADURÍA', 'CT24', 'DERECHO MERCANTIL', 'DERECHO MERCANTIL', '195', 'QUINTO CUATRIMESTRE', 5),
(77, 'CT00', 'CONTADURÍA', 'CT26', 'FINANZAS PERSONALES', 'FINANZAS PERSONALES', '223', 'SEXTO CUATRIMESTRE', 6),
(78, 'CT00', 'CONTADURÍA', 'CT27', 'ORGANIZACIÓN EMPRESARIAL', 'ORGANIZACIÓN EMPRESARIAL', '256', 'SEXTO CUATRIMESTRE', 6),
(79, 'CT00', 'CONTADURÍA', 'CT28', 'COSTOS I', 'COSTOS I', '164', 'SEXTO CUATRIMESTRE', 6),
(80, 'CT00', 'CONTADURÍA', 'CT29', 'RECURSOS HUMANOS', 'RECURSOS HUMANOS', '266', 'SEXTO CUATRIMESTRE', 6),
(81, 'CT00', 'CONTADURÍA', 'CT31', 'AUDITORIA I', 'AUDITORIA I', '137', 'SEPTIMO CUATRIMESTRE', 7),
(82, 'CT00', 'CONTADURÍA', 'CT32', 'CONTRIBUCIONES I', 'CONTRIBUCIONES I', '159', 'SEPTIMO CUATRIMESTRE', 7),
(83, 'CT00', 'CONTADURÍA', 'CT33', 'FINANZAS CORPORATIVAS', 'FINANZAS CORPORATIVAS', '222', 'SEPTIMO CUATRIMESTRE', 7),
(84, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD05', 'INGLÉS I', 'INGLÉS I', '232', 'PRIMER CUATRIMESTRE', 1),
(85, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD06', 'MATEMATICAS', 'MATEMÁTICAS', '246', 'SEGUNDO CUATRIMESTRE', 2),
(86, 'CT00', 'CONTADURÍA', 'CT34', 'COSTOS II', 'COSTOS II', '165', 'SEPTIMO CUATRIMESTRE', 7),
(87, 'CT00', 'CONTADURÍA', 'CT36', 'COSTOS III', 'COSTOS III', '166', 'OCTAVO CUATRIMESTRE', 8),
(88, 'CT00', 'CONTADURÍA', 'CT37', 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS DE INVERSIÓN', 'FORM. Y EVA. DE PRO. DE INVERSIÓN', '224', 'OCTAVO CUATRIMESTRE', 8),
(89, 'CT00', 'CONTADURÍA', 'CT38', 'TÍTULOS Y OPERACIONES DE CREDITO', 'TIT. Y OPERACIONES DE CREDITO', '252', 'OCTAVO CUATRIMESTRE', 8),
(90, 'CT00', 'CONTADURÍA', 'CT39', 'AUDITORIA II', 'AUDITORIA II', '138', 'OCTAVO CUATRIMESTRE', 8),
(91, 'CT00', 'CONTADURÍA', 'CT40', 'CONTRIBUCIONES II', 'CONTRIBUCIONES II', '161', 'OCTAVO CUATRIMESTRE', 8),
(92, 'CT00', 'CONTADURÍA', 'CT42', 'CONTABILIDAD DE PERSONAS FISICAS', 'CONTABILIDAD DE PERSONAS FÍSICAS', '151', 'NOVENO CUATRIMESTRE', 9),
(93, 'CT00', 'CONTADURÍA', 'CT43', 'DERECHO FISCAL', 'DERECHO FISCAL', '186', 'NOVENO CUATRIMESTRE', 9),
(94, 'CT00', 'CONTADURÍA', 'CT44', 'CONTABILIDAD DE PERSONAS MORALES', 'CONTABILIDAD DE PERSONAS MORALES', '152', 'NOVENO CUATRIMESTRE', 9),
(95, 'CT00', 'CONTADURÍA', 'CT45', 'CONTRIBUCIONES III', 'CONTRIBUCIONES III', '162', 'NOVENO CUATRIMESTRE', 9),
(96, 'CT00', 'CONTADURÍA', 'CT46', 'OPTATIVA 1', 'OPTATIVA 1', '254', 'NOVENO CUATRIMESTRE', 9),
(97, 'CT00', 'CONTADURÍA', 'CT48', 'CONTABILIDAD DE INSTITUCIONES DE GOBIERNO', 'CONT. DE INSTITUCIONES DE GOBIERNO', '149', 'DECIMO CUATRIMESTRE', 10),
(98, 'DR00', 'DERECHO', 'DR01', 'INTRODUCCIÓN AL DERECHO', 'INTRODUCCIÓN AL DERECHO', '238', 'PRIMER CUATRIMESTRE', 1),
(99, 'DR00', 'DERECHO', 'DR02', 'HISTORIA DEL DERECHO', 'HISTORIA DEL DERECHO', '229', 'PRIMER CUATRIMESTRE', 1),
(100, 'DR00', 'DERECHO', 'DR03', 'METODOLOGÍA DE LA INVESTIGACIÓN', 'MET. DE LA INVESTIGACIÓN', '209', 'PRIMER CUATRIMESTRE', 1),
(101, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD07', 'INTRODUCCIÓN A LA INGENIERIA EN LOGISTICA', 'INTRODUCCIÓN A LA INGENIERÍA EN LOGÍSTI', '236', 'SEGUNDO CUATRIMESTRE', 2),
(102, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD08', 'ALMACENES', 'ALMACENES', '128', 'SEGUNDO CUATRIMESTRE', 2),
(103, 'DR00', 'DERECHO', 'DR04', 'TÉCNICAS DE EXPRESIÓN ORAL Y ESCRITA', 'TEC. DE EXP. ORAL Y ESCRITA', '279', 'PRIMER CUATRIMESTRE', 1),
(104, 'DR00', 'DERECHO', 'DR05', 'INGLÉS I', 'INGLÉS I', '232', 'PRIMER CUATRIMESTRE', 2),
(105, 'DR00', 'DERECHO', 'DR06', 'DERECHOS HUMANOS', 'DERECHOS HUMANOS', '207', 'SEGUNDO CUATRIMESTRE', 2),
(106, 'DR00', 'DERECHO', 'DR07', 'DERECHO ROMANO', 'DERECHO ROMANO', '206', 'SEGUNDO CUATRIMESTRE', 2),
(107, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE45', 'ADMINISTRACIÓN DE PYMES', 'ADMINISTRACIÓN DE PYMES', '126', 'DECIMO CUATRIMESTRE', 10),
(108, 'DR00', 'DERECHO', 'DR08', 'TEORÍA DEL ESTADO', 'TEORÍA DEL ESTADO', '281', 'SEGUNDO CUATRIMESTRE', 2),
(109, 'DR00', 'DERECHO', 'DR09', 'TECNOLOGÍAS DE LA INFORMACIÓN', 'TEC. DE LA INFORMACIÓN', '269', 'SEGUNDO CUATRIMESTRE', 2),
(110, 'DR00', 'DERECHO', 'DR10', 'INGLÉS II', 'INGLÉS II', '233', 'SEGUNDO CUATRIMESTRE', 2),
(111, 'DR00', 'DERECHO', 'DR11', 'DERECHO COSTITUCIONAL', 'DERECHO CONSTITUCIONAL', '184', 'TERCER CUATRIMESTRE', 3),
(112, 'DR00', 'DERECHO', 'DR12', 'SISTEMAS JURÍDICOS', 'SISTEMAS JURÍDICOS', '274', 'TERCER CUATRIMESTRE', 3),
(113, 'DR00', 'DERECHO', 'DR13', 'REDACCIÓN JURÍDICA', 'REDACCIÓN JURÍDICA', '267', 'TERCER CUATRIMESTRE', 3),
(114, 'DR00', 'DERECHO', 'DR14', 'TEORÍA GENERAL DEL PROCESO', 'TEORÍA GENERAL DEL PROCESO', '282', 'TERCER CUATRIMESTRE', 3),
(115, 'DR00', 'DERECHO', 'DR15', 'INGLÉS III', 'INGLÉS III', '234', 'TERCER CUATRIMESTRE', 3),
(116, 'DR00', 'DERECHO', 'DR16', 'DERECHO ECONÓMICO', 'DERECHO ECON??MICO', '185', 'CUARTO CUATRIMESTRE', 4),
(117, 'DR00', 'DERECHO', 'DR17', 'DERECHO LABORAL I', 'DERECHO LABORAL I', '193', 'CUARTO CUATRIMESTRE', 4),
(118, 'DR00', 'DERECHO', 'DR18', 'DERECHO CIVIL I', 'DERECHO CIVIL I', '179', 'CUARTO CUATRIMESTRE', 4),
(119, 'DR00', 'DERECHO', 'DR19', 'DERECHO PENAL I', 'DERECHO PENAL I', '196', 'CUARTO CUATRIMESTRE', 4),
(120, 'DR00', 'DERECHO', 'DR20', 'INGLÉS IV', 'INGLÉS IV', '235', 'CUARTO CUATRIMESTRE', 4),
(121, 'DR00', 'DERECHO', 'DR21', 'DERECHO LABORAL II', 'DERECHO LABORAL II', '194', 'QUINTO CUATRIMESTRE', 5),
(122, 'DR00', 'DERECHO', 'DR22', 'DERECHO CIVIL II', 'DERECHO CIVIL II', '181', 'QUINTO CUATRIMESTRE', 5),
(123, 'DR00', 'DERECHO', 'DR23', 'DERECHO PENAL II', 'DERECHO PENAL II', '197', 'QUINTO CUATRIMESTRE', 5),
(124, 'DR00', 'DERECHO', 'DR24', 'DERECHO MERCANTIL', 'DERECHO MERCANTIL', '195', 'QUINTO CUATRIMESTRE', 5),
(125, 'DR00', 'DERECHO', 'DR25', 'DERECHO PROCESAL PENAL', 'DERECHO PROCESAL PENAL', '205', 'SEXTO CUATRIMESTRE', 6),
(126, 'DR00', 'DERECHO', 'DR26', 'DERECHO CIVIL III', 'DERECHO CIVIL III', '182', 'SEXTO CUATRIMESTRE', 6),
(127, 'DR00', 'DERECHO', 'DR27', 'DERECHO PROCESAL LABORAL', 'DERECHO PROCESAL LABORAL', '203', 'SEXTO CUATRIMESTRE', 6),
(128, 'DR00', 'DERECHO', 'DR28', 'DERECHO PROCESAL MERCANTIL', 'DERECHO PROCESAL MERCANTIL', '204', 'SEXTO CUATRIMESTRE', 6),
(129, 'DR00', 'DERECHO', 'DR29', 'DERECHO PENITENCIARIO', 'DERECHO PENITENCIARIO', '199', 'SEPTIMO CUATRIMESTRE', 7),
(130, 'DR00', 'DERECHO', 'DR30', 'DERECHO CIVIL IV', 'DERECHO CIVIL IV', '183', 'SEPTIMO CUATRIMESTRE', 7),
(131, 'DR00', 'DERECHO', 'DR31', 'DERECHO ADMINISTRATIVO I', 'DERECHO ADMINISTRATIVO I', '176', 'SEPTIMO CUATRIMESTRE', 7),
(132, 'DR00', 'DERECHO', 'DR32', 'DERECHO AGRARIO', 'DERECHO AGRARIO', '178', 'SEPTIMO CUATRIMESTRE', 7),
(133, 'DR00', 'DERECHO', 'DR33', 'DERECHO PROCESAL AGRARIO', 'DERECHO PROCESAL AGRARIO', '201', 'OCTAVO CUATRIMESTRE', 8),
(134, 'DR00', 'DERECHO', 'DR34', 'DERECHO ADMINISTRATIVO II', 'DERECHO ADMINISTRATIVO II', '177', 'OCTAVO CUATRIMESTRE', 8),
(135, 'DR00', 'DERECHO', 'DR35', 'DERECHO PROCESAL CIVIL Y FAMILIAR', 'DERECHO PROCESAL CIVIL Y FAMILIAR', '202', 'OCTAVO CUATRIMESTRE', 8),
(136, 'DR00', 'DERECHO', 'DR36', 'DERECHO INTERNACIONAL PÚBLICO', 'DERECHO INTERNACIONAL PÚBLICO', '191', 'OCTAVO CUATRIMESTRE', 8),
(137, 'DR00', 'DERECHO', 'DR37', 'DERECHO INTERNACIONAL PRIVADO', 'DERECHO INTERNACIONAL PRIVADO', '189', 'NOVENO CUATRIMESTRE', 9),
(138, 'DR00', 'DERECHO', 'DR38', 'DERECHO FISCAL I', 'DERECHO FISCAL I', '187', 'NOVENO CUATRIMESTRE', 9),
(139, 'DR00', 'DERECHO', 'DR39', 'ENTREVISTA E INTERROGATORIO', 'ENTREVISTA E INTERROGATORIO', '217', 'NOVENO CUATRIMESTRE', 9),
(140, 'DR00', 'DERECHO', 'DR40', 'AMPARO I', 'AMPARO I', '131', 'NOVENO CUATRIMESTRE', 9),
(141, 'DR00', 'DERECHO', 'DR41', 'ARGUMENTACIÓN JURÍDICA', 'ARGUMENTACIÓN JURÍDICA', '135', 'NOVENO CUATRIMESTRE', 9),
(142, 'DR00', 'DERECHO', 'DR42', 'OPTATIVA 1', 'OPTATIVA 1', '254', 'NOVENO CUATRIMESTRE', 9),
(143, 'DR00', 'DERECHO', 'DR43', 'AMPARO II', 'AMPARO II', '132', 'DECIMO CUATRIMESTRE', 10),
(144, 'DR00', 'DERECHO', 'DR44', 'SEMINARIO DE TESIS', 'SEMINARIO DE TESIS', '271', 'DECIMO CUATRIMESTRE', 10),
(145, 'DR00', 'DERECHO', 'DR45', 'DERECHO FISCAL II', 'DERECHO FISCAL II', '188', 'DÉCIMO CUATRIMESTRE', 10),
(146, 'DR00', 'DERECHO', 'DR46', 'JUICIOS ORALES', 'JUICIOS ORALES', '243', 'DÉCIMO CUATRIMESTRE', 10),
(147, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD09', 'TECNOLOGÍAS DE LA INFORMACIÓN', 'TEC. DE LA INFORMACIÓN', '269', 'SEGUNDO CUATRIMESTRE', 2),
(148, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD10', 'INGLÉS II', 'INGLÉS II', '233', 'SEGUNDO CUATRIMESTRE', 2),
(149, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD11', 'BASES JURÍDICAS', 'BASES JURÍDICAS', '141', 'TERCER CUATRIMESTRE', 3),
(150, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD12', 'INVENTARIOS', 'INVENTARIOS', '239', 'TERCER CUATRIMESTRE', 3),
(151, 'CT00', 'CONTADURÍA', 'CT49', 'SEMINARIO DE TESIS', 'SEMINARIO DE TESIS', '271', 'DECIMO CUATRIMESTRE', 10),
(152, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD13', 'MATEMATICAS FINANCIERAS', 'MATEMÁTICAS FINANCIERAS', '247', 'TERCER CUATRIMESTRE', 3),
(153, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD14', 'MERCADOTECNIA', 'MERCADOTECNIA', '249', 'TERCER CUATRIMESTRE', 3),
(154, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD15', 'INGLÉS III', 'INGLÉS III', '234', 'TERCER CUATRIMESTRE', 3),
(155, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD16', 'ECONOMÍA', 'ECONOMÍA', '214', 'CUARTO CUATRIMESTRE', 4),
(156, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD17', 'DERECHO LABORAL', 'DERECHO LABORAL', '192', 'CUARTO CUATRIMESTRE', 4),
(157, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD18', 'TIPOLOGIA DEL PRODUCTO', 'TIPOLOGÍA DEL PRODUCTO', '283', 'CUARTO CUATRIMESTRE', 4),
(158, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD19', 'SISTEMAS DE INFORMACIÓN ADMINISTRATIVA', 'SIS. DE INF.  ADMINISTRATIVA', '251', 'CUARTO CUATRIMESTRE', 4),
(159, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD20', 'INGLÉS IV', 'INGLÉS IV', '235', 'CUARTO CUATRIMESTRE', 4),
(160, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD21', 'COMERCIO INTERNACIONAL', 'COMERCIO INTERNACIONAL', '147', 'QUINTO CUATRIMESTRE', 5),
(161, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD22', 'PLANEACION ESTRATEGICA', 'PLANEACIÓN ESTRATÉGICA', '258', 'QUINTO CUATRIMESTRE', 5),
(162, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD23', 'CALIDAD', 'CALIDAD', '146', 'QUINTO CUATRIMESTRE', 5),
(163, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD24', 'DERECHO MERCANTIL', 'DERECHO MERCANTIL', '195', 'QUINTO CUATRIMESTRE', 5),
(164, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD25', 'LOGÍSTICA INTERNACIONAL', 'LOGÍSTICA INTERNACIONAL', '245', 'SEXTO CUATRIMESTRE', 6),
(165, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD26', 'CADENA DE SUMINISTRO', 'CADENA DE SUMINISTRO', '143', 'SEXTO CUATRIMESTRE', 6),
(166, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE46', 'EMPRENDEDURISMO', 'EMPRENDEDURISMO', '216', 'DECIMO CUATRIMESTRE', 10),
(167, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD27', 'COSTOS', 'COSTOS', '163', 'SEXTO CUATRIMESTRE', 6),
(168, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD28', 'RECURSOS HUMANOS', 'RECURSOS HUMANOS', '266', 'SEXTO CUATRIMESTRE', 6),
(169, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD29', 'SEGURIDAD E HIGIENE EN LAS EMPRESAS', 'SEG. E HIGIENE EN LAS EMPRESAS', '277', 'SEPTIMO CUATRIMESTRE', 7),
(170, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD30', 'PROCESO DE FABRICACIÓN Y MANEJO DE MATERIALES', 'PRO.DE FABRICACIÓN Y MANEJO DE MATERIAL', '277', 'SEPTIMO CUATRIMESTRE', 7),
(171, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD31', 'GEOGRAFÍA PARA EL TRANSPORTE', 'GEOGRAFÍA PARA EL TRANSPORTE', '226', 'SEPTIMO CUATRIMESTRE', 7),
(172, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD32', 'MODELOS DE SIMULACIÓN Y LOGÍSTICA', 'MODELOS DE SIMULACIÓN Y LOGÓSTICA', '277', 'SEPTIMO CUATRIMESTRE', 7),
(173, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD33', 'CALCULO INTEGRAL', 'CALCULO INTEGRAL', '145', 'OCTAVO CUATRIMESTRE', 8),
(174, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD34', 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS DE INVERSIÓN,FORM. Y EVA. DE PRO. DE INVERSI?N,22', 'FORM. Y EVA. DE PRO. DE INVERSIÓN', '22', 'OCTAVO CUATRIMESTRE', NULL),
(175, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD35', 'TÍTULOS Y OPERACIONES DE CRÉDITO', 'TIT. Y OPERACIONES DE CREDITO', '278', 'OCTAVO CUATRIMESTRE', 8),
(176, 'CT00', 'CONTADURÍA', 'CT50', 'ADMINISTRACIÓN DE PYMES', 'ADMINISTRACIÓN DE PYMES', '126', 'DECIMO CUATRIMESTRE', 10),
(177, 'DR00', 'DERECHO', 'DR47', 'PRACTICA PROFESIONAL', 'PRÁCTICA PROFESIONAL', '261', 'DÉCIMO CUATRIMESTRE', 10),
(178, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD36', 'DISEÑO Y OPERACIONES DE REDES DE LOG?STICAS', 'DIS. Y OPERACIONES DE REDES DE LOG.', '154', 'OCTAVO CUATRIMESTRE', 8),
(179, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD37', 'ADMINISTRACIÓN DE COMPRAS', 'ADMINISTRACIÓN DE COMPRAS', '123', 'OCTAVO CUATRIMESTRE', 8),
(180, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD38', 'CÁLCULO DIFERENCIAL', 'CALCULO DIFERENCIAL', '144', 'NOVENO CUATRIMESTRE', 9),
(181, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD39', 'GESTIÓN DEL ABASTECIMIENTO Y LA DISTRIBUCIÓN', 'GES. DEL ABASTECIMIENTO Y LA DISTRIBUCI', '227', 'NOVENO CUATRIMESTRE', 9),
(182, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD40', 'LEGISLACIÓN ADUANERA', 'LEGISLACIÓN ADUANERA', '244', 'NOVENO CUATRIMESTRE', 9),
(183, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE47', 'PRACTICA PROFESIONAL', 'PRÁCTICA PROFESIONAL', '261', 'DECIMO CUATRIMESTRE', 10),
(184, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD41', 'DISEÑO DE SISTEMAS DE MANUFACTURA', 'DIS. DE SISTEMAS DE MANUFACTURA', '198', 'NOVENO CUATRIMESTRE', 9),
(185, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD42', 'OPTATIVA 1', 'OPTATIVA 1', '254', 'NOVENO CUATRIMESTRE', 9),
(186, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD43', 'SERVICIO AL CLIENTE', 'SERVICIO AL CLIENTE', '272', 'DECIMO CUATRIMESTRE', 10),
(187, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD44', 'SEMINARIO DE TESIS', 'SEMINARIO DE TESIS', '271', 'DECIMO CUATRIMESTRE', 10),
(188, 'CT00', 'CONTADURÍA', 'CT51', 'EMPRENDEDURISMO', 'EMPRENDEDURISMO', '216', 'DECIMO CUATRIMESTRE', 10),
(189, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD45', 'TRÁFICO Y TRANSPORTE', 'TRÁFICO Y TRANSPORTE', '285', 'DECIMO CUATRIMESTRE', 10),
(190, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD46', 'EMPAQUE ENVASE Y EMBALAJE', 'EMPAQUE ENVASE Y EMBALAJE', '215', 'DECIMO CUATRIMESTRE', 10),
(191, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD47', 'PRACTICA PROFESIONAL', 'PRÁCTICA PROFESIONAL', '261', 'DECIMO CUATRIMESTRE', 10),
(192, 'ILD00', 'INGENIERÍA EN LOGÍSTICA Y ALTA DIRECCIÓN', 'ILD48', 'OPTATIVA 2', 'OPTATIVA 2', '255', 'DECIMO CUATRIMESTRE', 10),
(193, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP00', 'INVESTIGACIÓN PERICIAL', 'INVESTIGACIÓN PERICIAL', '0', 'INVESTIGACI?N PERICIAL', 0),
(194, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP01', 'INTRODUCCIÓN AL DERECHO', 'INTRODUCCIÓN AL DERECHO', '238', 'PRIMER CUATRIMESTRE', 1),
(195, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP02', 'CRIMINALISTICA I', 'CRIMINALÁSTICA I', '168', 'PRIMER CUATRIMESTRE', 1),
(196, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP03', 'METODOLOGÍA DE LA INVESTIGACIÓN MET. DE LA INVESTIGACIÓN', 'PRIMER CUATRIMESTRE', '209', 'PRIMER CUATRIMESTRE', 1),
(197, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP04', 'TÉCNICAS DE EXPRECIÓN ORAL Y ESCRITA', 'TÉC. DE EXP. ORAL Y ESCRITA', '279', 'PRIMER CUATRIMESTRE', 1),
(198, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP05', 'INGLÉS I', 'INGLÉS I', '232', 'PRIMER CUATRIMESTRE', 1),
(199, 'DR00', 'DERECHO', 'DR48', 'OPTATIVA 2', 'OPTATIVA 2', '255', 'DÉCIMO CUATRIMESTRE', 10),
(200, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP06', 'DERECHOS HUMANOS', 'DERECHOS HUMANOS', '207', 'SEGUNDO CUATRIMESTRE', 2),
(201, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP07', 'CRIMINALISTICA II', 'CRIMINALÍSTICA II', '169', 'SEGUNDO CUATRIMESTRE', 2),
(202, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP08', 'ANTROPOLOGÍA FORENSE', 'ANTROPOLOGÍA FORENSE', '134', 'SEGUNDO CUATRIMESTRE', 2),
(203, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP09', 'TECNOLOGÍAS DE LA INFORMACIÓN TEC. DE LA INFORMACIÓN', 'SEGUNDO CUATRIMESTRE', '269', 'SEGUNDO CUATRIMESTRE', 2),
(204, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP10', 'INGLÉS II', 'INGLÉS II', '233', 'SEGUNDO CUATRIMESTRE', 2),
(205, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP11', 'CRIMINOLOGÍA I', 'CRIMINOLOGÍA I', '171', 'TERCER CUATRIMESTRE', 3),
(206, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP12', 'INTRODUCCIÓN A LA PSICOLOGÍA', 'INTRODUCCIÓN A LA PSICOLOGÍA', '237', 'SEGUNDO CUATRIMESTRE', 2),
(207, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP13', 'REDACCIÓN JURÍDICA PERICIAL', 'REDACCIÓN JURÍDICA PERICIAL', '268', 'TERCER CUATRIMESTRE', 3),
(208, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP14', 'TÉCNICA FORENSE', 'TÉCNICA FORENSE', '276', 'TERCER CUATRIMESTRE', 3),
(209, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP15', 'INGLÉS III', 'INGLÉS III', '234', 'TERCER CUATRIMESTRE', 3),
(210, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP16', 'CRIMINOLOGÍA II', 'CRIMINOLOGÍA II', '172', 'CUARTO CUATRIMESTRE', 3),
(211, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP17', 'PSICOLOGÍA CRIMINAL', 'PSICOLOGÍA CRIMINAL', '265', 'CUARTO CUATRIMESTRE', 3),
(212, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP18', 'PREVENCIÓN DEL DELITO', 'PREVENCIÓN DEL DELITO', '262', 'CUARTO CUATRIMESTRE', 4),
(213, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP19', 'DERECHO PENAL I', 'DERECHO PENAL I', '196', 'CUARTO CUATRIMESTRE', 4),
(214, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP20', 'INGLÉS IV', 'INGLÉS IV', '235', 'CUARTO CUATRIMESTRE', 4),
(215, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP21', 'VICTIMOLOGÍA', 'VICTIMOLOGÍA', '286', 'QUINTO CUATRIMESTRE', 5),
(216, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP22', 'DACTILOSCOPIA FORENSE', 'DACTILOSCOPIA FORENSE', '174', 'QUINTO CUATRIMESTRE', 5),
(217, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP23', 'DERECHO PENAL II', 'DERECHO PENAL II', '197', 'QUINTO CUATRIMESTRE', 5),
(218, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP24', 'ESTUDIO DEL CRIMEN ORGANIZADO I', 'ESTUDIO DEL CRIMEN ORGANIZADO I', '219', 'QUINTO CUATRIMESTRE', 5),
(219, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP25', 'DERECHO PROCESAL PENAL', 'DERECHO PROCESAL PENAL', '205', 'SEXTO CUATRIMESTRE', 6),
(220, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP26', 'ESTUDIO DEL CRIMEN ORGANIZADO II', 'ESTUDIO DEL CRIMEN ORGANIZADO II', '221', 'SEXTO CUATRIMESTRE', 6),
(221, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP27', 'POLÍTICA CRIMINOLOGICA', 'POLÍTICA CRIMINOLÓGICA', '259', 'SEXTO CUATRIMESTRE', 6),
(222, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP28', 'ANTROPOLOGÍA CRIMINOLOGICA', 'ANTROPOLOGÍA CRIMINOLÓGICA', '133', 'SEXTO CUATRIMESTRE', 6),
(223, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP29', 'DERECHO PENITENCIARIO', 'DERECHO PENITENCIARIO', '199', 'SEPTIMO CUATRIMESTRE', 7),
(224, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP30', 'GEOGRAFÍA INFORMÁTICA PARA EL ANÁLISIS CRIMINALISTICO', 'GEO. INF. PARA EL ANÁLISIS CRIM.', '284', 'SEPTIMO CUATRIMESTRE', 7),
(225, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP31', 'DOCUMENTOSCOPÍA', 'DOCUMENTOSCOPÍA', '213', 'SEPTIMO CUATRIMESTRE', 7),
(226, 'ADE00', 'ADMINISTRACIÓN DE EMPRESAS', 'ADE48', 'OPTATIVA 2', 'OPTATIVA 2', '255', 'DECIMO CUATRIMESTRE', 10),
(227, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP32', 'PERFILES CRIMINALES', 'PERFILES CRIMINALES', '257', 'SEPTIMO CUATRIMESTRE', 7),
(228, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP33', 'CULTURA MATERIAL CRIMINAL', 'CULTURA MATERIAL CRIMINAL', '173', 'SEPTIMO CUATRIMESTRE', 7),
(229, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP34', 'HERRAMIENTAS FORENSES', 'HERRAMIENTAS FORENSES', '228', 'OCTAVO CUATRIMESTRE', 8),
(230, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP35', 'TÉCNICAS FORENSES ALTERNATIVAS', 'TEC. FORENSES ALTERNATIVAS', '231', 'OCTAVO CUATRIMESTRE', 8),
(231, 'CT00', 'CONTADURÍA', 'CT52', 'PRACTICA PROFESIONAL', 'PRÁCTICA PROFESIONAL', '261', 'DECIMO CUATRIMESTRE', 10),
(232, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP36', 'CRIMENES CIBERNETICOS', 'CRIMENES CIBERNÉTICOS', '167', 'OCTAVO CUATRIMESTRE', 8),
(233, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP37', 'INVESTIGACIÓN CRIMINALISTA EN HECHOS DE TRÁNSITO TERRESTRE', 'INV. CRIM. EN HECHOS DE TRÁNSITO TER.', '241', 'OCTAVO CUATRIMESTRE', 8),
(234, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP38', 'ANÁLISIS DEL LUGAR DE LOS HECHOS', 'ANÁLISIS DEL LUGAR DE LOS HECHOS', 'PEN', 'NOVENO CUATRIMESTRE', 9),
(235, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP39', 'MÉTODOS CUALITATIVOS Y CUANTITATIVOS', 'MÉT. CUALITATIVOS Y CUANTITATIVOS', '253', 'NOVENO CUATRIMESTRE', 9),
(236, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP40', 'ENTREVISTA E INTERROGATORIO', 'ENTREVISTA E INTERROGATORIO', '217', 'NOVENO CUATRIMESTRE', 9),
(237, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP41', 'ARGUMENTACIÓN JURÍDICA', 'ARGUMENTACIÓN JURÍDICA', '135', 'NOVENO CUATRIMESTRE', 9),
(238, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP42', 'OPTATIVA 1', 'OPTATIVA 1', '254', 'NOVENO CUATRIMESTRE', 9),
(239, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP43', 'BALÍSTICA FORENSE', 'BALÍSTICA FORENSE', '139', 'DECIMO CUATRIMESTRE', 10),
(240, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP44', 'SEMINARIO DE TESIS', 'SEMINARIO DE TESIS', '271', 'DECIMO CUATRIMESTRE', 10),
(241, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP45', 'CADENA DE CUSTODIA', 'CADENA DE CUSTODIA', '142', 'DECIMO CUATRIMESTRE', 10),
(242, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP46', 'JUICIOS ORALES', 'JUICIOS ORALES', '243', 'DECIMO CUATRIMESTRE', 10),
(243, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP47', 'PRACTICA PROFESIONAL', 'PRÁCTICA PROFESIONAL', '261', 'DECIMO CUATRIMESTRE', 10),
(244, 'IP00', 'INVESTIGACIÓN PERICIAL', 'IP48', 'OPTATIVA 2', 'OPTATIVA 2', '255', 'DECIMO CUATRIMESTRE', 10),
(245, 'CT00', 'CONTADURÍA', 'CT53', 'OPTATIVA2', 'OPTATIVA2', '255', 'DECIMO CUATRIMESTRE', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preguntas` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `nombre_pregunta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_preguntas`, `id_evaluacion`, `nombre_pregunta`) VALUES
(6, 1, 'Tu Nombre'),
(7, 1, 'Tu Nombre 65');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profe`
--

CREATE TABLE `profe` (
  `id_profre` int(2) NOT NULL DEFAULT 0,
  `Nombre` varchar(16) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Appat` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apmat` varchar(39) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_clave` varchar(29) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user` varchar(43) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(27) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estudios` varchar(43) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `info` varchar(600) COLLATE utf8_spanish_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profe`
--

INSERT INTO `profe` (`id_profre`, `Nombre`, `Appat`, `apmat`, `id_clave`, `user`, `pass`, `estudios`, `cedula`, `foto`, `info`) VALUES
(1, 'Adolfo Emanuel', 'Hernández', 'Cruz', '', 'adolfo.emanuel.hernandez', '682976806', 'LICENCIATURA EN RELACIONES INTERNACIONALES', '', 'imagenes/logo-upp.png', ' Agregar información'),
(2, 'Adriana Liliana', 'Cercado', 'Chantes', '', 'adriana.liliana.cercado', '85475984', 'LICENCIATURA EN ADMINISTRACIÓN DE EMPRESAS', '5277657', 'imagenes/aula.png', 'Agregar información'),
(3, 'Alberto', 'Flores', 'López', '', 'alberto.flores', '38', 'LICENCIATURA EN ADMINISTRACIÓN DE EMPRESAS', '3735785', 'imagenes/aula.png', 'Agregar información'),
(4, 'Aldo', 'Benítez', 'Sánchez', '', 'aldo.benitez', '98941003', 'LICENCIATURA EN LENGUAS MODERNAS', '10394963', 'imagenes/aula.png', 'Agregar información'),
(5, 'Carlos Alberto', 'López', 'Raichs', '', 'carlos.alberto.lopez', '88888888', 'LICENCIATURA COMERCIO INTERNACIONAL', 'PASANTE', 'imagenes/logo-upp.png', '  Agregar informaciï¿½n, actualiza 11:07 hrs'),
(6, 'Christian Israel', 'Rodríguez', 'Bautista', '', 'christian.israel.rodriguez', '98941005', 'LICENCIATURA EN ADMINISTRACIÓN DE EMPRESAS', '7682622', 'imagenes/aula.png', 'Agregar información'),
(7, 'Fiorela', 'Benítez', 'Sánchez', '', 'fiorela.benitez', '98941006', 'LICENCIATURA EN DERECHO', '7881642', 'imagenes/aula.png', 'Agregar información'),
(8, 'Francisco', 'Maldonado', '', '', 'francisco.maldonado', '98941007', 'LICENCIADO EN DERECHO', '1032011', 'imagenes/aula.png', 'Agregar información'),
(9, 'Gregorio', 'Cruz', 'Mendoza', '', 'gregorio.cruz', '98941008', 'LICENCIADO EN FILOSOFÍA', '9710068', 'imagenes/aula.png', 'Agregar información'),
(10, 'Guillermo', 'Contreras', 'Mioni', '', 'guillermo.contreras', '98941009', '', '', 'imagenes/aula.png', 'Agregar información'),
(11, 'Hortensia', 'Coyol', '', '', 'hortensia.coyotl', '98941010', 'LICENCIATURA EN DERECHO', '4677219', 'imagenes/aula.png', 'Agregar información'),
(12, 'Isabel', 'Machorro', 'González', '', 'isabel.machorro', '389448632', 'LICENCIATURA EN PSICOLOGÍA', '1838701', 'imagenes/aula.png', 'Agregar información'),
(13, 'José Antonio', 'Aguas', 'Cruz', '', 'jose.antonio.aguas', '389448633', 'LICENCIADO EN CRIMINOLOGÍA', '', 'imagenes/aula.png', 'Agregar información'),
(14, 'José Manuel', 'Meneses', '', '', 'jose.manuel.manuel', '389448634', 'LICENCIATURA EN CONSULTORÍA JURÍDICA', '5540251', 'imagenes/aula.png', 'Agregar información'),
(15, 'Juan Jesús', 'Limón', 'Gutierrez', '', 'juan jesus.limon', '389448635', 'ABOGADO, NOTARIO Y ACTUARIO', '3832980', 'imagenes/aula.png', 'Agregar información'),
(16, 'Julio Fernando', 'Alvarado', 'Cruz', '', 'julio.fernando.alvarado', '389448636', 'LICENCIATURA COMO CONTADOR PÚBLICO Y AUDITO', '7684964', 'imagenes/aula.png', 'Agregar información'),
(17, 'Laura', 'Carvajal', 'González', '', 'laura.carvajal', '389448637', 'LICENCIATURA EN DERECHO', '2229377', 'imagenes/aula.png', 'Agregar información'),
(18, 'Lisandro', 'Ríos', 'Sánchez', '', 'lizandro.rios', '389448638', 'LICENCIADO EN DERECHO', '5619832', 'imagenes/aula.png', 'Agregar información'),
(19, 'María Elena', 'Sánchez', 'Mondragon  ', '389448639', 'maria elena.sanchez', '388944562', 'LICENCIATURA COMO CONTADOR PÚBLICO Y AUDITO', '6120407', 'imagenes/aula.png', 'Agregar información'),
(20, 'Nan Jose', 'de la Cueva', 'Hernández', '', 'nan.josedelacueva', '12345678', 'LICENCIATURA EN FILOSOFIA', '3798614', 'imagenes/aula.png', 'Agregar información'),
(21, 'Porfirio', 'Rosete', 'Saldaña', '', 'porfirio.rosete', '682976807', 'INGENIERO CIVIL', 'PASANTE', 'imagenes/aula.png', 'Agregar información'),
(22, 'Raymundo', 'Maldonado', 'Jazzan', '', 'raymundo.maldonado', '682976808', 'LICENCIATURA EN INGENIERÍA MECÁNICA', '4224347', 'imagenes/aula.png', 'Agregar información'),
(23, 'Roberto', 'Brambila', 'Limón', '', 'roberto.brambila', '682976809', 'LICENCIATURA EN DERECHO', '3023511', 'imagenes/aula.png', 'Agregar información'),
(24, 'Tomás Israel', 'Vázquez', 'Velázquez', '', 'tomas.israel.vazquez', '682976810', 'LICENCIATURA EN DERECHO', '4291580', 'imagenes/aula.png', 'Agregar información'),
(25, 'Viridiana', 'Lozada', 'Romero', '', 'viridiana.lozada', '682976811', 'LICENCIATURA EN LENGUAS MODERNAS', 'PASANTE', 'imagenes/aula.png', 'Agregar información'),
(26, 'Waldo', 'Guerrero', 'Ariza', '', 'waldo.guerrero', '682976812', 'LICENCIATURA EN DERECHO', '4137444', 'imagenes/aula.png', 'Agregar información'),
(27, 'Yara Lesly', 'Hernández', 'Pacheco', '', 'yara.lesly.hernandez', '682976813', 'LICENCIATURA COMO CONTADOR PÚBLICO Y AUDITO', '6856158', 'imagenes/aula.png', 'Agregar información'),
(28, 'Alejandro', 'García', 'Galin', '', 'alejandro.garcia', '68297681', '', NULL, 'imagenes/aula.png', 'Agregar información'),
(29, 'Ariadna', 'Ayala', 'Camarillo', '', 'ariadna.ayala', '68297680', '', '', 'imagenes/aula.png', 'Agregar información'),
(30, 'Gerardo', 'Torres', 'Maceda', '', 'gerardo.torres', '3894486', '', '', 'imagenes/aula.png', 'Agregar información'),
(31, 'Javier', 'de la Fuente', 'Chacón', '', 'javier.chacon', '8976806', '', '', 'imagenes/aula.png', 'Agregar información'),
(32, 'Juan Francisco ', 'García', 'Martínez', '', 'francisco.garcia', '8297680', '', NULL, 'imagenes/aula.png', 'Agregar información'),
(33, 'Juan Javier', 'Rodríguez', 'Trujillo', '', 'juan.rodriguez', '3848637', '', '', 'imagenes/aula.png', 'Agregar información'),
(34, 'Rosario', 'Rojas', 'Ortega', '', 'rosario.rojas', '9448637', '', '', 'imagenes/aula.png', 'Agregar información'),
(35, 'Salvador', 'Nuñez', 'Cano', '', 'salvador.nunez', '89448637', '', NULL, 'imagenes/aula.png', 'Agregar información'),
(36, 'Daniel', 'Calizto', 'Martínez', '', 'daniel.calixto', '8297681', '', '', 'imagenes/aula.png', 'Agregar información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `name`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Profesor', 'Profesor', NULL, NULL),
(2, 'Administrador', 'Admin', NULL, NULL),
(3, 'Alumno', 'Alumno', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `idRolUser` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`idRolUser`, `rol_id`, `user_id`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 3, 12),
(13, 3, 13),
(14, 3, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 3, 18),
(19, 3, 19),
(20, 3, 20),
(21, 3, 21),
(22, 3, 22),
(23, 3, 23),
(24, 3, 24),
(25, 3, 25),
(26, 3, 26),
(27, 3, 27),
(28, 3, 28),
(29, 3, 29),
(30, 3, 30),
(31, 3, 31),
(32, 3, 32),
(33, 3, 33),
(34, 3, 34),
(35, 3, 35),
(36, 3, 36),
(37, 3, 37),
(38, 3, 38),
(39, 3, 39),
(40, 3, 40),
(41, 3, 41),
(42, 3, 42),
(43, 3, 43),
(44, 3, 44),
(45, 3, 45),
(46, 3, 46),
(47, 3, 47),
(48, 3, 48),
(49, 3, 49),
(50, 3, 50),
(51, 1, 51),
(52, 1, 52),
(53, 1, 53),
(54, 1, 54),
(55, 1, 55),
(56, 1, 56),
(57, 1, 57),
(58, 1, 58),
(59, 1, 59),
(60, 1, 60),
(61, 1, 61),
(62, 1, 62),
(63, 1, 63),
(64, 1, 64),
(65, 1, 65),
(66, 1, 66),
(67, 1, 67),
(68, 1, 68),
(69, 1, 69),
(70, 1, 70),
(71, 1, 71),
(72, 1, 72),
(73, 1, 73),
(74, 1, 74),
(75, 1, 75),
(76, 1, 76),
(77, 1, 77),
(78, 1, 78),
(79, 1, 79),
(80, 1, 80),
(81, 1, 81),
(82, 1, 82),
(83, 1, 83),
(84, 1, 84),
(85, 1, 85),
(86, 1, 86);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucion`
--

CREATE TABLE `solucion` (
  `id_solucion` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solucion`
--

INSERT INTO `solucion` (`id_solucion`, `id_pregunta`, `respuesta`, `status`, `created_at`) VALUES
(6, 6, 'Ana', 1, '2020-05-17 18:46:48'),
(7, 6, 'Juan', 1, '2020-05-17 18:46:53'),
(8, 6, 'Mercedes', 1, '2020-05-17 18:46:57'),
(9, 7, '78', 1, '2020-05-17 18:49:20'),
(10, 7, '786454', 1, '2020-05-17 18:49:26'),
(11, 7, '9089hjh', 1, '2020-05-17 18:49:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_clave` int(2) DEFAULT NULL,
  `id_alumn` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_clave`, `id_alumn`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'miguelus', 'miguelin2491@gmail.com', NULL, NULL, '$2y$10$uq/tUDWZI.U3QcY9yYZ.rOQLWRdSFFLDHs73l5F.aquxsdOg.T.A.', 'GuvOq6NrKyZScFNoOmzaT03b30XBMPiMX64R2ttI4uRRQiPm2kJkrsYU6yYT', '2019-12-05 09:49:09', '2019-12-05 09:49:09'),
(2, 'vigueras.andrea', 'vigueras.andrea', NULL, '201701001', '$2y$12$GHzS.mZk8aST4dJmbrrub.oSLSrKAjSc7yvjPV5kUxpLXttrrKKBG', '0YFQkpjjZbu9GTEHMLDsw2rgETJ4dSca7UPiOfQhvbTcs4dE5UwnhEbUPuTQ', NULL, NULL),
(3, 'romero.violeta', 'romero.violeta', NULL, '201701005', '$2y$12$ne.QizuvSnVUub15DSLwt.lIcROoAC3Z7X4x3pWIUVrLPaU7NdqSq', NULL, NULL, NULL),
(4, 'hernandez.gerardo', 'hernandez.gerardo', NULL, '201701007', '$2y$12$zYMFGHA7Vnw.otUxKS3o2.Ou7nEL655v/nCPC3TOKM3OpHPR6ruOC', NULL, NULL, NULL),
(5, 'rivera.maria', 'rivera.maria', NULL, '201701011', '$2y$12$tayXFWJ0yuMBgCEg402k8uFM1Z/1w4VBaxOk3fa1NAQANHnmO8hRe', NULL, NULL, NULL),
(6, 'santiago.jose', 'santiago.jose', NULL, '201701013', '$2y$12$vicSxRILOwJY6700FIDSx.prVQB70K4tZrOF28GfyQLDg0C5Zgu/K', NULL, NULL, NULL),
(7, 'santiago.beatriz', 'santiago.beatriz', NULL, '201701012', '$2y$12$v6trJKfQsFeb82RTEllC5uTYkPyJ06SioBRa4XtzQH0rWLx5YXaxC', NULL, NULL, NULL),
(8, 'mendez.isai', 'mendez.isai', NULL, '201704001', '$2y$12$bHZV1NUvjVTu9Jm4g47EyOWNGYglLWagNNFWJYgXsvgg7litpdcA.', NULL, NULL, NULL),
(9, 'hernandez.erika', 'hernandez.erika', NULL, '201704002', '$2y$12$u9r2tc5oszuIOR7UjOHVnecirmWLm8HykXqD.gKsgYgyaNbHCKqcC', NULL, NULL, NULL),
(10, 'olarte.oliver', 'olarte.oliver', NULL, '201704003', '$2y$12$euQ/e7UKBoVN.tZ5.vYyM.H0VuwWwHoE.k1IoFK9231QfrjXATdAG', NULL, NULL, NULL),
(11, 'galindo.marlene', 'galindo.marlene', NULL, '201704004', '$2y$12$/j0UxmWn9WSbgEP7OPHI4.C/.XwtrQz4RX1z.Ejz3VKHsXpXfOtY2', NULL, NULL, NULL),
(12, 'alvarez.lizbeth', 'alvarez.lizbeth', NULL, '201704005', '$2y$12$FkqlnVbs.ytlg8LJN3JPyOeq/MFiuKqeUsqLxSjPqUFWlbJ8061Pa', NULL, NULL, NULL),
(13, 'garcia.marisol', 'garcia.marisol', NULL, '201704009', '$2y$12$yZ21d2ndL8Jm2IuMhCo9COG8YhWXUPeVESLPqt11c0UPrxVgKLmdu', NULL, NULL, NULL),
(14, 'martin.clara', 'martin.clara', NULL, '201704008', '$2y$12$FY6peYfGBVFnijQtwHQjnu//kB2FikXTWs6oTidRmJcP7d4tR1mBO', NULL, NULL, NULL),
(15, 'garcia.morales.dario', 'garcia.morales.dario', NULL, '201705001', '$2y$12$4NpQYZsD9r0t3rlvvyQ/Ge7C3sHYsaEKs4tsR29otdLZFrUCHHPlW', NULL, NULL, NULL),
(16, 'robles.luis', 'robles.luis', NULL, '201705002', '$2y$12$cGkM87QLBjy7wvsSGc6Ih.CGi8Z/0gV4y9GZVhwra.fjFoPk6dcOS', NULL, NULL, NULL),
(17, 'bautista.sandra', 'bautista.sandra', NULL, '20160202006', '$2y$12$H.m.QxaCVEO3it7BnjyUIem1VmD3QvxFYkmZYSA2xS7EodK2oV9ZK', NULL, NULL, NULL),
(18, 'carrillo.omar', 'carrillo.omar', NULL, '201602001', '$2y$12$8pG8qAwXCbdgdQkwKh2Q1OcTHZW/Qy8EOBJd3uS.JaKcEouN7otPO', NULL, NULL, NULL),
(19, 'islas.camilo', 'islas.camilo', NULL, '201602002', '$2y$12$TswJaGGzbKW43aLYUFBKLeRmi4Mtni.PaV5gzwwR/l2Y0xAnWdFmK', NULL, NULL, NULL),
(20, 'zamora.irbin', 'zamora.irbin', NULL, '201602003', '$2y$12$H0sE8XxLt8MM7VUH4necwuXvU9tyuJS3hqG1oZfn/nClecOIvn62G', NULL, NULL, NULL),
(21, 'zamora.sujey', 'zamora.sujey', NULL, '201602004', '$2y$12$2VVeDpo694eoHXf64TOvMeZisSBzLZ8ooTbGhW4eJYahEwlpBpI/C', NULL, NULL, NULL),
(22, 'manzano.alejandro', 'manzano.alejandro', NULL, '201602007', '$2y$12$xPuBcpXop3sknRBxQoXIIuONciQ.7.DBKOjbYskU9aaimqvuUp00W', NULL, NULL, NULL),
(23, 'mora.elizabeth', 'mora.elizabeth', NULL, '201604002', '$2y$12$fA0jbJwyibqiCgE2vfpyZu0K/frRErN4zjt3DSKf/cjKTmM4nVO7e', NULL, NULL, NULL),
(24, 'meneses.aaron', 'meneses.aaron', NULL, '201604004', '$2y$12$gFB75TdTZuspPeChbldVdeBu/8V7qmLyp/nPbQfWnqdtsv82wbD06', NULL, NULL, NULL),
(25, 'montes.mariana', 'montes.mariana', NULL, '20160102001', '$2y$12$WxXegvjU35fb0OhxHaGSsuUuKtXqmrWyw7aU.RLRpeN/rjuwEJ9Oq', NULL, NULL, NULL),
(26, 'benitez.andrea', 'benitez.andrea', NULL, '20160102008', '', NULL, NULL, NULL),
(27, 'guerra.erika', 'guerra.erika', NULL, '20160102006', '', NULL, NULL, NULL),
(28, 'amador.jose', 'amador.jose', NULL, '20160102007', '', NULL, NULL, NULL),
(29, 'tapia.ariel', 'tapia.ariel', NULL, '20160102011', '', NULL, NULL, NULL),
(30, 'aponte.melissa', 'aponte.melissa', NULL, '20160102012', '', NULL, NULL, NULL),
(31, 'chantes.gustavo', 'chantes.gustavo', NULL, '20160102014', '', NULL, NULL, NULL),
(32, 'marin.oscar', 'marin.oscar', NULL, '201401006', '', NULL, NULL, NULL),
(33, 'fragoso.sergio', 'fragoso.sergio', NULL, '20160102013', '', NULL, NULL, NULL),
(34, 'romero.rey', 'romero.rey', NULL, '201605001', '', NULL, NULL, NULL),
(35, 'ortiz.carlos', 'ortiz.carlos', NULL, '201605005', '', NULL, NULL, NULL),
(36, 'luna.noemi', 'luna.noemi', NULL, '20160402013', '', NULL, NULL, NULL),
(37, 'baez.jose', 'baez.jose', NULL, '201603001', '', NULL, NULL, NULL),
(38, 'morales.jose', 'morales.jose', NULL, '201603002', '', NULL, NULL, NULL),
(39, 'perez.lizethbet', 'perez.lizethbet', NULL, '201603008', '', NULL, NULL, NULL),
(40, 'olivares.genesis', 'olivares.genesis', NULL, '201603005', '', NULL, NULL, NULL),
(41, 'cruz.landy', 'cruz.landy', NULL, '201601002', '', NULL, NULL, NULL),
(42, 'sanchez.angelica', 'sanchez.angelica', NULL, '201601004', '', NULL, NULL, NULL),
(43, 'carmona.angelica', 'carmona.angelica', NULL, '201601006', '', NULL, NULL, NULL),
(44, 'flores.alma', 'flores.alma', NULL, '201601008', '', NULL, NULL, NULL),
(45, 'gomez.israel', 'gomez.israel', NULL, '201504001', '', NULL, NULL, NULL),
(46, 'ibanez.daniel', 'ibanez.daniel', NULL, '201504003', '', NULL, NULL, NULL),
(47, 'rojas.leticia', 'rojas.leticia', NULL, '201504006', '', NULL, NULL, NULL),
(48, 'cancino.carmina', 'cancino.carmina', NULL, '201504009', '', NULL, NULL, NULL),
(49, 'romero.maria', 'romero.maria', NULL, '201504010', '', NULL, NULL, NULL),
(50, 'carmona.leopoldo', 'carmona.leopoldo', NULL, '201501003', '', NULL, NULL, NULL),
(51, 'adolfo.emanuel.hernandez', 'adolfo.emanuel.hernandez', 1, NULL, '$2y$12$65U/qSeGhbQbMno1Wmmyt.xO.zFIyen5Gv8WO34DmhNw01GCvsn3O', 'MJItERIwN28SaDSslaBRIInQ6jSNLDfcIScH9WAvifi19DzGWL50efESwHiY', NULL, NULL),
(52, 'adriana.liliana.cercado', 'adriana.liliana.cercado', 2, NULL, '$2y$12$ePfCLKAhTP8M7SnIhBckL.xp8duM3vjke..hgi4OhNyhNutYUacY.', NULL, NULL, NULL),
(53, 'alberto.flores', 'alberto.flores', 3, NULL, '$2y$12$4bgnqgdht.ybA9Z1djPZz.Tnf02YiHn/B3r7wlYqzlZgh4gkSC7Xa', NULL, NULL, NULL),
(54, 'aldo.benitez', 'aldo.benitez', 4, NULL, '$2y$12$9vm4/GfeBCAGNclToiR9uuvNvnb9D7t6AMb4g.fb1PHDT33IXyqry', NULL, NULL, NULL),
(55, 'carlos.alberto.lopez', 'carlos.alberto.lopez', 5, NULL, '$2y$12$iDMLYxMS5bUPG7ktbQA4U.0OylbbRWMAbrsMM3B5X7Mk.FkuTMnMy', NULL, NULL, NULL),
(56, 'christian.israel.rodriguez', 'christian.israel.rodriguez', 6, NULL, '$2y$12$iGxSERwChUDril1lRK8Vpe/NYk.nyK56Vzsj6fB1PZvq8743j4mSO', NULL, NULL, NULL),
(57, 'fiorela.benitez', 'fiorela.benitez', 7, NULL, '$2y$12$ViCT9TmLXA9BgHWXmmgWZu0/7XI4MDQLEOhokBGZPHdz2uKtUbj1G', NULL, NULL, NULL),
(58, 'francisco.maldonado', 'francisco.maldonado', 8, NULL, '$2y$12$TOtX794vWqmOWWHLNm3v.OhptaMSnocRPukxjYsVNKvxIfR6zKEBm', NULL, NULL, NULL),
(59, 'gregorio.cruz', 'gregorio.cruz', 9, NULL, '$2y$12$KBxZnV2lnAGzBRobl3loYOBWQq84ZrCIJIfdvdSiMdufsQ.F/EC8W', NULL, NULL, NULL),
(60, 'guillermo.contreras', 'guillermo.contreras', 10, NULL, '$2y$12$eHCvf0eyqAxuXeyaLlY9xe/esQX1WXLNqk/DYmbE/pyz0JdnQdXpi', NULL, NULL, NULL),
(61, 'hortensia.coyotl', 'hortensia.coyotl', 11, NULL, '$2y$12$qohljarpzvrrqArV6kztOufxcyyPByBEykvPdufX4qGD7GQzXAWQK', NULL, NULL, NULL),
(62, 'isabel.machorro', 'isabel.machorro', 12, NULL, '$2y$12$F9eMVlCL05iAA8nlNL60EepfuhyyfDGArkzBSwuUp9NEEGQeNRxTu', NULL, NULL, NULL),
(63, 'jose.antonio.aguas', 'jose.antonio.aguas', 13, NULL, '$2y$12$T917szD3zh/AIt4r1c3kFuyWMS24kl4p3tuJUsJwm2K5ZMmhCVZjy', NULL, NULL, NULL),
(64, 'jose.manuel.manuel', 'jose.manuel.manuel', 14, NULL, '$2y$12$IqvtCKdKGXymPwTDu59cLOuak4V2vcNQDlVeN7CXeRn0NAt79c1Eq', NULL, NULL, NULL),
(65, 'juan.jesus.limon', 'juan.jesus.limon', 15, NULL, '$2y$12$5DlOqMumogfLWIo31GrQDeuXxJHgFZ7zPjxIlWKKav5HmUOTv0Udy', NULL, NULL, NULL),
(66, 'julio.fernando.alvarado', 'julio.fernando.alvarado', 16, NULL, '$2y$12$uqjVXIlFzXSZ/qBqzfHXtepcOcxdUKCtdg9eXbgVpzHw5DyxV/75.', NULL, NULL, NULL),
(67, 'laura.carvajal', 'laura.carvajal', 17, NULL, '$2y$12$W5e0iSXdk3obxVve5i3S7eBC8VemB1wsgBh0SLSBqeCdRP8L9ERGq', NULL, NULL, NULL),
(68, 'lizandro.rios', 'lizandro.rios', 18, NULL, '$2y$12$dr1xD/Iq9AD5vsD5ulMtKeL5/95Ut2vEGPhgn6h3K4jK6v89Hxr62', NULL, NULL, NULL),
(69, 'maria.elena.sanchez', 'maria.elena.sanchez', 19, NULL, '', NULL, NULL, NULL),
(70, 'nan.josedelacueva', 'nan.josedelacueva', 20, NULL, '', NULL, NULL, NULL),
(71, 'porfirio.rosete', 'porfirio.rosete', 21, NULL, '', NULL, NULL, NULL),
(72, 'raymundo.maldonado', 'raymundo.maldonado', 22, NULL, '', NULL, NULL, NULL),
(73, 'roberto.brambila', 'roberto.brambila', 23, NULL, '', NULL, NULL, NULL),
(74, 'tomas.israel.vazquez', 'tomas.israel.vazquez', 24, NULL, '', NULL, NULL, NULL),
(75, 'viridiana.lozada', 'viridiana.lozada', 25, NULL, '', NULL, NULL, NULL),
(76, 'waldo.guerrero', 'waldo.guerrero', 26, NULL, '', NULL, NULL, NULL),
(77, 'yara.lesly.hernandez', 'yara.lesly.hernandez', 27, NULL, '', NULL, NULL, NULL),
(78, 'alejandro.garcia', 'alejandro.garcia', 28, NULL, '', NULL, NULL, NULL),
(79, 'ariadna.ayala', 'ariadna.ayala', 29, NULL, '', NULL, NULL, NULL),
(80, 'gerardo.torres', 'gerardo.torres', 30, NULL, '', NULL, NULL, NULL),
(81, 'javier.chacon', 'javier.chacon', 31, NULL, '', NULL, NULL, NULL),
(82, 'francisco.garcia', 'francisco.garcia', 32, NULL, '', NULL, NULL, NULL),
(83, 'juan.rodriguez', 'juan.rodriguez', 33, NULL, '', NULL, NULL, NULL),
(84, 'rosario.rojas', 'rosario.rojas', 34, NULL, '', NULL, NULL, NULL),
(85, 'salvador.nunez', 'salvador.nunez', 35, NULL, '', NULL, NULL, NULL),
(86, 'daniel.calixto', 'daniel.calixto', 36, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `pass` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos1`
--
ALTER TABLE `alumnos1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `clases_asig`
--
ALTER TABLE `clases_asig`
  ADD PRIMARY KEY (`id_clase_asignada`);

--
-- Indices de la tabla `cuatrimestres`
--
ALTER TABLE `cuatrimestres`
  ADD PRIMARY KEY (`id_cuatri`);

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`id_cuestionario`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`no`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_preguntas`);

--
-- Indices de la tabla `profe`
--
ALTER TABLE `profe`
  ADD PRIMARY KEY (`id_profre`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`idRolUser`),
  ADD KEY `fk_rol_idx` (`rol_id`),
  ADD KEY `fk_user_idx` (`user_id`);

--
-- Indices de la tabla `solucion`
--
ALTER TABLE `solucion`
  ADD PRIMARY KEY (`id_solucion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id_cuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preguntas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `idRolUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `solucion`
--
ALTER TABLE `solucion`
  MODIFY `id_solucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
