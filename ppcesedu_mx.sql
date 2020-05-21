-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 06:25:16
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
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `id_carrera`, `id_user`, `username`) VALUES
(1, 1, 1, 'Juan Alvarez'),
(7, NULL, NULL, NULL),
(8, 1, 1, 'Pablo Rosas'),
(9, 2, 1, 'ENRIQUE RUIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `user_id` int(11) NOT NULL,
  `carrera` varchar(255) DEFAULT NULL,
  `icono` varchar(100) DEFAULT 'administracion1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`user_id`, `carrera`, `icono`) VALUES
(1, 'ADMINISTRACION', 'administracion1.png'),
(2, 'DERECHO', 'derecho1.png'),
(3, 'Preicial', 'pericial1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catera_materias_alumno`
--

CREATE TABLE `catera_materias_alumno` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_cuatrimestre` int(11) NOT NULL,
  `calificacionfinal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catera_materias_alumno`
--

INSERT INTO `catera_materias_alumno` (`id`, `id_alumno`, `id_materia`, `id_cuatrimestre`, `calificacionfinal`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catera_materias_maestro`
--

CREATE TABLE `catera_materias_maestro` (
  `id` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_cuatrimestre` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catera_materias_maestro`
--

INSERT INTO `catera_materias_maestro` (`id`, `id_materia`, `id_maestro`, `id_cuatrimestre`, `estado`) VALUES
(1, 1, 2, 1, 'ABIERTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id` int(11) NOT NULL,
  `clase` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_carrera` int(100) NOT NULL DEFAULT 0,
  `id_cuatrimestre` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id`, `clase`, `fecha`, `id_carrera`, `id_cuatrimestre`) VALUES
(1, 'D1ahfdjasfh', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuatrimestre`
--

CREATE TABLE `cuatrimestre` (
  `id` int(11) NOT NULL,
  `lapso` varchar(40) DEFAULT NULL,
  `fechainicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuatrimestre`
--

INSERT INTO `cuatrimestre` (`id`, `lapso`, `fechainicio`) VALUES
(1, 'enero mayo 2020', '2020-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id_cuestionario` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_respuesta` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `nombre_evaluacion` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `nombre` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id`, `id_user`, `username`, `nombre`, `email`) VALUES
(1, NULL, 'JF', 'JUAN RULFO', 'JF@GMAIL.COM'),
(2, NULL, 'SF', 'SOFIA FITCH', 'SF@SF.COM'),
(3, NULL, 'HR', 'Hugo Ruiz', 'hr@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(140) DEFAULT NULL,
  `id_cuatrimestre` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `id_cuatrimestre`, `id_carrera`) VALUES
(1, 'DERECHO I', 1, 1),
(2, 'DERECHO II', 1, 1),
(3, 'LEYES I', 1, 1),
(4, 'LEYES II', 1, 1),
(5, 'MACRO I', 1, 1),
(6, 'MACRO II', 1, 1),
(7, 'JURIDICO I', 1, 1),
(8, 'RAZONAMIENTO I', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preguntas` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `nombre_pregunta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profe`
--

CREATE TABLE `profe` (
  `id_profre` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Appat` varchar(100) NOT NULL,
  `apmat` varchar(100) NOT NULL,
  `estudios` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Administrador', 'Admin', NULL, NULL),
(2, 'Profesor', 'Profesor', NULL, NULL),
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
(1, 1, 1),
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
(51, 2, 51),
(52, 2, 52),
(53, 2, 53),
(54, 2, 54),
(55, 2, 55),
(56, 2, 56),
(57, 2, 57),
(58, 2, 58),
(59, 2, 59),
(60, 2, 60),
(61, 2, 61),
(62, 2, 62),
(63, 2, 63),
(64, 2, 64),
(65, 2, 65),
(66, 2, 66),
(67, 2, 67),
(68, 2, 68),
(69, 2, 69),
(70, 2, 70),
(71, 2, 71),
(72, 2, 72),
(73, 2, 73),
(74, 2, 74),
(75, 2, 75),
(76, 2, 76),
(77, 2, 77),
(78, 2, 78),
(79, 2, 79),
(80, 2, 80),
(81, 2, 81),
(82, 2, 82),
(83, 2, 83),
(84, 2, 84),
(85, 2, 85),
(86, 2, 86),
(87, 2, 87),
(88, 2, 88),
(89, 3, 89),
(90, 3, 90);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int(25) UNSIGNED NOT NULL,
  `id_carrera` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `id_materia` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
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
  `id_profesor` int(22) NOT NULL DEFAULT 0,
  `id_clase` int(22) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'miguelus', 'miguelin2491@gmail.com', '$2y$10$uq/tUDWZI.U3QcY9yYZ.rOQLWRdSFFLDHs73l5F.aquxsdOg.T.A.', 'uVv7ZknijssKQb97GVhRZ2f96Qf0r2EAe0ArqNJS8xvcB0RvTJ4FLoF4avn9', '2019-12-05 09:49:09', '2019-12-05 09:49:09'),
(2, 'romero.violeta', '', '$2b$10$l5e2y2AL0IY6rhDHbHY1De.uCcnQdsB16WygafO2mA2t4Z.r1ZTU.', NULL, NULL, NULL),
(3, 'hernandez.gerardo', '', '$2y$10$uq/tUDWZI.U3QcY9yYZ.rOQLWRdSFFLDHs73l5F.aquxsdOg.T.A.', NULL, NULL, NULL),
(4, 'rivera.maria', '', '6121604', NULL, NULL, NULL),
(5, 'santiago.jose', '', '4731325', NULL, NULL, NULL),
(6, 'santiago.beatriz', '', '2584771', NULL, NULL, NULL),
(7, 'mendez.isai', '', '56', NULL, NULL, NULL),
(8, 'hernandez.erika', '', '5691070', NULL, NULL, NULL),
(9, 'olarte.oliver', '', '5650528', NULL, NULL, NULL),
(10, 'galindo.marlene', '', '7852061', NULL, NULL, NULL),
(11, 'alvarez.lizbeth', '', '6303725', NULL, NULL, NULL),
(12, 'garcia.marisol', '', '1409634', NULL, NULL, NULL),
(13, 'martín.clara', '', '4239754', NULL, NULL, NULL),
(14, 'garcia.morales.dario', '', '4088078', NULL, NULL, NULL),
(15, 'robles.luis', '', '3644623', NULL, NULL, NULL),
(16, 'bautista.sandra', '', '2584771', NULL, NULL, NULL),
(17, 'carrillo.omar', '', '2422692', NULL, NULL, NULL),
(18, 'islas.camilo', '', '5666772', NULL, NULL, NULL),
(19, 'zamora.irbin', '', '5691070', NULL, NULL, NULL),
(20, 'zamora.sujey', '', '5650528', NULL, NULL, NULL),
(21, 'manzano.alejandro', '', '7852061', NULL, NULL, NULL),
(22, 'mora.elizabeth', '', '1409634', NULL, NULL, NULL),
(23, 'meneses.aaron', '', '4239754', NULL, NULL, NULL),
(24, 'montes.mariana', '', '4239756', NULL, NULL, NULL),
(25, 'benitez.andrea', '', '4239757', NULL, NULL, NULL),
(26, 'guerra.erika', '', '4239758', NULL, NULL, NULL),
(27, 'roldan.hugo', '', '4239759', NULL, NULL, NULL),
(28, 'amador.jose', '', '4239760', NULL, NULL, NULL),
(29, 'tapia.ariel', '', '4239761', NULL, NULL, NULL),
(30, 'aponte.melissa', '', '4239762', NULL, NULL, NULL),
(31, 'chantes.gustavo', '', '4239763', NULL, NULL, NULL),
(32, 'marin.oscar', '', '2584771', NULL, NULL, NULL),
(33, 'fragoso.sergio', '', '2422692', NULL, NULL, NULL),
(34, 'romero.rey', '', '5691070', NULL, NULL, NULL),
(35, 'ortiz.carlos', '', '5650528', NULL, NULL, NULL),
(36, 'luna.noemi', '', '7852061', NULL, NULL, NULL),
(37, 'baez.jose', '', '1409634', NULL, NULL, NULL),
(38, 'morales.jose', '', '1409635', NULL, NULL, NULL),
(39, 'perez.lizethbet', '', '1409636', NULL, NULL, NULL),
(40, 'olivares.genesis', '', '1409637', NULL, NULL, NULL),
(41, 'cruz.landy', '', '1409639', NULL, NULL, NULL),
(42, 'sanchez.angelica', '', '1409640', NULL, NULL, NULL),
(43, 'carmona.angelica', '', '7852061', NULL, NULL, NULL),
(44, 'flores.alma', '', '7852062', NULL, NULL, NULL),
(45, 'gomez.israel', '', '7852064', NULL, NULL, NULL),
(46, 'ibanez.daniel', '', '7852065', NULL, NULL, NULL),
(47, 'rojas.leticia', '', '7852066', NULL, NULL, NULL),
(48, 'cancino.carmina', '', '7852067', NULL, NULL, NULL),
(49, 'romero.maria', '', '7852068', NULL, NULL, NULL),
(50, 'carmona.leopoldo', '', '7852070', NULL, NULL, NULL),
(51, 'vigueras.andrea', '', '7429647', 'PEUZSSWvxOuy36ppgCFCwXJksZ4AjeZB4DSulMXe9cRclmCuiOfPQCf7C5bH', NULL, NULL),
(52, 'adriana.liliana.cercado', '', '85475984', NULL, NULL, NULL),
(53, 'alberto.flores', '', '38', NULL, NULL, NULL),
(54, 'aldo.benitez', '', '98941003', NULL, NULL, NULL),
(55, 'carlos.alberto.lopez', '', '88888888', NULL, NULL, NULL),
(56, 'christian.israel.rodriguez', '', '98941005', NULL, NULL, NULL),
(57, 'fiorela.benitez', '', '98941006', NULL, NULL, NULL),
(58, 'francisco.maldonado', '', '98941007', NULL, NULL, NULL),
(59, 'gregorio.cruz', '', '98941008', NULL, NULL, NULL),
(60, 'guillermo.contreras', '', '98941009', NULL, NULL, NULL),
(61, 'hortensia.coyotl', '', '98941010', NULL, NULL, NULL),
(62, 'isabel.machorro', '', '389448632', NULL, NULL, NULL),
(63, 'jose.antonio.aguas', '', '389448633', NULL, NULL, NULL),
(64, 'jose.manuel.manuel', '', '389448634', NULL, NULL, NULL),
(65, 'juan jesus.limon', '', '389448635', NULL, NULL, NULL),
(66, 'julio.fernando.alvarado', '', '389448636', NULL, NULL, NULL),
(67, 'laura.carvajal', '', '389448637', NULL, NULL, NULL),
(68, 'lizandro.rios', '', '389448638', NULL, NULL, NULL),
(69, 'maria elena.sanchez', '', '388944562', NULL, NULL, NULL),
(70, 'nan.josedelacueva', '', '12345678', NULL, NULL, NULL),
(71, 'porfirio.rosete', '', '682976807', NULL, NULL, NULL),
(72, 'raymundo.maldonado', '', '682976808', NULL, NULL, NULL),
(73, 'roberto.brambila', '', '682976809', NULL, NULL, NULL),
(74, 'tomas.israel.vazquez', '', '682976810', NULL, NULL, NULL),
(75, 'viridiana.lozada', '', '682976811', NULL, NULL, NULL),
(76, 'waldo.guerrero', '', '682976812', NULL, NULL, NULL),
(77, 'yara.lesly.hernandez', '', '682976813', NULL, NULL, NULL),
(78, 'alejandro.garcia', '', '68297681', NULL, NULL, NULL),
(79, 'ariadna.ayala', '', '68297680', NULL, NULL, NULL),
(80, 'gerardo.torres', '', '3894486', NULL, NULL, NULL),
(81, 'javier.chacon', '', '8976806', NULL, NULL, NULL),
(82, 'francisco.garcia', '', '8297680', NULL, NULL, NULL),
(83, 'juan.rodriguez', '', '3848637', NULL, NULL, NULL),
(84, 'rosario.rojas', '', '9448637', NULL, NULL, NULL),
(85, 'salvador.nunez', '', '89448637', NULL, NULL, NULL),
(86, 'daniel.calixto', '', '8297681', NULL, NULL, NULL),
(87, 'adolfo.emanuel.hernandez', '', '$2y$12$65U/qSeGhbQbMno1Wmmyt.xO.zFIyen5Gv8WO34DmhNw01GCvsn3O', '120OvQxR2Dj46ZWuB8rvyiBjPRh9rEYAPeI6lQXWgzNuQtj8JYYyEoVLml6d', NULL, NULL),
(88, 'francisco.alvarez', 'fcoal@gmail.com', '$2y$10$eI9jmAhKXzJk0tNaOkMTEeT.twmWf9HNQds2jUIlhsOJa4HqdCxxq', 'wGPOyS551gl6yRibfqhXOO8W29qbIabcycrQ9hjV7Jp3rVy6RnC8PamNRfl0', NULL, NULL),
(89, 'Dionisio.espinoza', 'Dae@gmail.com', '$2y$10$xPMc7TOoNO6gYw0gBfez7Ob/79ZS.3D3GifwQ.IPBRYJPX0os/L4u', 'VGVPYGIJsJGPtSnzpwgyAN1dbhKMdqGSHxkBisSlo4q0VlrSv0F5SgEdnRXS', NULL, NULL),
(90, 'ed Ophanim', 'erp.reno@hotmail.com', '$2y$10$L/VvUTPn9dxTWwDLlSbuyeg/GGPQK8iKt9V98ak7ZPHo1wBLW/NGa', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `catera_materias_alumno`
--
ALTER TABLE `catera_materias_alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catera_materias_maestro`
--
ALTER TABLE `catera_materias_maestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `catera_materias_alumno`
--
ALTER TABLE `catera_materias_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `catera_materias_maestro`
--
ALTER TABLE `catera_materias_maestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id_cuestionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preguntas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profe`
--
ALTER TABLE `profe`
  MODIFY `id_profre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `idRolUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `solucion`
--
ALTER TABLE `solucion`
  MODIFY `id_solucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
