-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2020 a las 06:40:03
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
(4, 5, 8, 'miguel angel dominguez');

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
(3, 'Preicial', 'pericial1.png'),
(5, 'informatica', 'educacion.png');

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
(2, 2, 2),
(4, 3, 5),
(5, 3, 6),
(6, 3, 7),
(7, 3, 8);

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
(1, 'miguelus', 'miguelin2491@gmail.com', '$2y$10$uq/tUDWZI.U3QcY9yYZ.rOQLWRdSFFLDHs73l5F.aquxsdOg.T.A.', 'I7YlPBWGciSjah5p7EFr8Tjf53ikQUa2EMfXf1n5bRDuGapuAwXwir9RZtOs', '2019-12-05 09:49:09', '2019-12-05 09:49:09'),
(2, 'Marifer', 'mari@mail.com', '$2y$10$QAnsWnizPFgOQnWvVIo3R.uFQiDJh4MBf836FGn1gF9sZhrhx2wzy', NULL, NULL, NULL),
(8, 'miguelin', 'miguelb@mailer.com', '$2y$10$QnNDJskqJrP2/VYGbYaW5OfyqAl3qobfzpDPG9J2azs85mpQzFMpa', 'aNd32FxAqTnFahz6SQfE2f56QoIkcnk8MMbHZ0Au7xFQBNz4DP9PAs3pmM4E', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preguntas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `idRolUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `solucion`
--
ALTER TABLE `solucion`
  MODIFY `id_solucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
