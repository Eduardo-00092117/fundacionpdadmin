-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: sdb-h.hosting.stackcp.net
-- Tiempo de generación: 13-08-2021 a las 07:27:53
-- Versión del servidor: 10.4.18-MariaDB-log
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel-3138363029`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_trabajo`
--

CREATE TABLE `area_trabajo` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_imagen` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `area_trabajo`
--

INSERT INTO `area_trabajo` (`id`, `nombre`, `descripcion`, `url_imagen`, `created_at`, `updated_at`) VALUES
(1, 'Evaluaciones de nuevo ingreso', 'Las evaluaciones son realizadas con el objetivo de conocer las características y necesidades individuales del usuario, con el fin de brindar una oferta de servicios personalizada que le permita desarrollar al máximo sus habilidades, acompañando a tu familia a lo largo del proceso de desarrollo de tus hijos e hijas.', 'area-trabajo\\August2021\\fnGkmPq04Y9v155o1iki.jpg', NULL, '2021-08-04 04:39:57'),
(2, 'Área de desarrollo físico y motor', 'El objetivo de esta área es desarrollar habilidades y destrezas motoras de los usuarios basados en sus características y capacidades individuales, que permitan la evolución de los movimientos voluntarios acorde a la edad cronológica y reducir patrones de movimientos compensatorios.', 'area-trabajo\\August2021\\2M2aQDDGXZGbvtuXZwuH.jpg', NULL, '2021-08-04 04:40:10'),
(3, 'Área ocupacional', 'El objetivo de esta área es desarrollar habilidades y destrezas motoras finas en los usuarios basados en sus características y capacidades individuales, con el fin de potenciar la independencia y la autonomía en las actividades de la vida diaria.', 'area-trabajo\\August2021\\8kIJ4t8ZVFamvX7PqN8o.jpg', NULL, '2021-08-04 04:40:29'),
(4, 'Área de lenguaje', 'El objetivo del área es desarrollar la adquisición de un lenguaje de acuerdo a las capacidades de cada usuario en sus áreas comprensiva y expresiva, a través de sesiones individuales o grupales que favorezcan la comunicación.', 'area-trabajo\\August2021\\lkjyLjRWKCiUnJ0Lu6K7.jpg', NULL, '2021-08-04 04:40:46'),
(5, 'Área pedagógica', 'El objetivo de esta área es promover las habilidades educativas y sociales de los usuarios, entre tres y catorce años basados en sus características y capacidades individuales para lograr la inclusión escolar y social.', 'area-trabajo\\August2021\\sdPnnoiPWkgCI1RQVe6F.jpg', NULL, '2021-08-04 04:41:09'),
(6, 'Área de desarrollo de adolecentes y adultos', 'El objetivo del área es fortalecer características y habilidades individuales de personas con síndrome de Down entre los catorce y veinticinco años, con el fin de favorecer su crecimiento personal para una inclusión social adecuada, potenciando sus habilidades productivas que favorezcan su autonomía e independencia; brindando un acompañamiento a sus familiares.', 'area-trabajo\\August2021\\y2gkxlpsLg8rr0yOmHBV.jpg', NULL, '2021-08-06 11:46:42'),
(7, 'Área psicológica', 'El objetivo del área es brindar una atención y orientación psicológica a personas con síndrome de Down y sus familias, con el fin de promover una salud mental adecuada.', 'area-trabajo\\August2021\\cJnyZjQkb5gXVNIA0paO.jpg', NULL, '2021-08-04 04:41:35'),
(8, 'Voluntariado', NULL, 'area-trabajo\\August2021\\S8vcNpUzh7PRVgYQ0zKv.png', NULL, '2021-08-04 04:37:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_logo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacional_internacional` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asociacion`
--

INSERT INTO `asociacion` (`id`, `nombre`, `url_logo`, `descripcion`, `telefono`, `url_facebook`, `nacional_internacional`, `created_at`, `updated_at`) VALUES
(1, 'Centro de documentación y Recursos Down España', 'asociacion\\August2021\\aGS7uaHcgxf7V88z24Nd.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', NULL, 'https://www.facebook.com/paraisodown/?hc_ref=ARQX2Qyrnz5aeNMjlBBJnYRfdkF3bfRAUI4_3b6o4rfPlVQxSX_vNaNkzbbfIH3j4f4&fref=nf&__xts__[0]=68.ARAstklNvWd2PbxuH8plDC3nhTyEYDA9ZYc1hwGHMim_0k8n8o_85VAviYl0E8zL9AIgbXa0UYiP11QdDLgriyeWyedBWrfkIpFyqKtbsuNXhoAvyMLnt5zyw2gIRaZPpeHXjtyTCybVclBnw3mMNlY9LvqjfZCn8Z2OnhP8Bu6g-tHyJ9QZ7g1U9brD8eCKIHXIRboxYbw8NUDS_kRmhnJN-zDIpPQYHrtUpMdBbuuctA_9rC9NJ0lb3Pl6lErd-aRnUv96V-VSs9xazJs7UG28zWaSOGgIu1zbLAImllnavZPYbhRUVXO5Kpo7kVLe7sHeH8Lw6vqwmCyTYVDRP_rzKw', 1, NULL, '2021-08-04 14:14:08'),
(2, 'Down España', 'asociacion\\August2021\\FsDaKimjRM95xFubphf4.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 1, NULL, '2021-08-04 14:08:24'),
(3, 'Federacióm Iberoamericana de Síndrome Down', 'asociacion\\August2021\\uPAVB72K68e1zIkh0ayb.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 1, NULL, '2021-08-04 14:09:01'),
(4, 'Fundación Iberoamericana Down21', 'asociacion\\August2021\\eMW0wyp55uvpOqNd20Pb.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 1, NULL, '2021-08-04 14:09:41'),
(5, 'Asociación Autismo Luz Azul', 'asociacion\\August2021\\qizWAB42rERl7fFhtPBB.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 0, NULL, '2021-08-04 14:11:04'),
(6, 'Asociacion de Capacitación e Investigación para la Salud Mental (ACISAM)', 'asociacion\\August2021\\gKshazxOpBCCw2z8S9IN.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 0, NULL, '2021-08-04 14:10:36'),
(7, 'Best Buddies El Salvador', 'asociacion\\August2021\\HBZiHSqJ4yPydiEk5w8B.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 0, NULL, '2021-08-04 14:10:20'),
(8, 'Circulo de Hermanos', 'asociacion\\August2021\\qqzmVoGzmWqF04ouEnA1.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 0, NULL, '2021-08-04 14:10:08'),
(9, 'Circulo de Hermanos', 'asociacion\\August2021\\3pdtvfW4KcUIzSnOmhRS.jpg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. asidjiasjd0i asjd0 ajsd0j as0dijasd 0jads 0iasdj a0is jas0idjais0 dja0si djas0d9ijas d\'iopajsd asidjas do', '(503) 7308-4030', NULL, 0, NULL, '2021-08-04 14:09:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(23, 5, 'nombre', 'text', 'Nombre del área', 0, 1, 1, 1, 1, 0, '{}', 2),
(24, 5, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 0, '{}', 3),
(25, 5, 'url_imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 0, '{\"resize\":{\"width\":\"900\",\"height\":\"700\"}}', 4),
(26, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(27, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(35, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(36, 8, 'nombre', 'text', 'Nombre de la asociación', 0, 1, 1, 1, 1, 1, '{}', 2),
(37, 8, 'url_logo', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"250\",\"height\":\"250\"}}', 3),
(38, 8, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 4),
(39, 8, 'telefono', 'text', 'Teléfono', 0, 1, 1, 1, 1, 1, '{}', 5),
(40, 8, 'url_facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 6),
(41, 8, 'nacional_internacional', 'select_dropdown', 'Origen', 0, 1, 1, 1, 1, 1, '{\"default\":\"Nacional\",\"options\":{\"0\":\"Nacional\",\"1\":\"Internacional\"}}', 7),
(42, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(43, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(44, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(46, 9, 'nombre_fundacion', 'text', 'Nombre de la fundación', 0, 1, 1, 1, 1, 1, '{}', 2),
(47, 9, 'direccion', 'text', 'Dirección', 0, 1, 1, 1, 1, 1, '{}', 3),
(48, 9, 'mapa', 'text', 'Mapa', 0, 1, 1, 1, 1, 1, '{}', 4),
(49, 9, 'url_facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 5),
(50, 9, 'url_instagram', 'text', 'Instagram', 0, 1, 1, 1, 1, 1, '{}', 6),
(51, 9, 'correo', 'text', 'Correo electronico', 0, 1, 1, 1, 1, 1, '{}', 7),
(52, 9, 'telefono1', 'text', 'Número telefónico 1', 0, 1, 1, 1, 1, 1, '{}', 8),
(53, 9, 'telefono2', 'text', 'Número telefónico', 0, 1, 1, 1, 1, 1, '{}', 9),
(54, 9, 'horario_semanal', 'text', 'Horario de la semana', 0, 1, 1, 1, 1, 1, '{}', 10),
(55, 9, 'horario_fin', 'text', 'Horario de fin de semana', 0, 1, 1, 1, 1, 1, '{}', 11),
(56, 10, 'id', 'text', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(58, 10, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 10, 'apellido', 'text', 'Apellido', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 10, 'url_imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(63, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 11, 'presidente', 'text', 'Presidente/a', 0, 1, 1, 1, 1, 1, '{}', 2),
(65, 11, 'vicepresidente', 'text', 'Vicepresidente/a', 0, 1, 1, 1, 1, 1, '{}', 3),
(66, 11, 'tesorero', 'text', 'Tesorero/a', 0, 1, 1, 1, 1, 1, '{}', 4),
(67, 11, 'secretario', 'text', 'Secretario/a', 0, 1, 1, 1, 1, 1, '{}', 5),
(68, 11, 'vocal_1', 'text', 'Vocal 1', 0, 1, 1, 1, 1, 1, '{}', 6),
(69, 11, 'vocal_2', 'text', 'Vocal 2', 0, 1, 1, 1, 1, 1, '{}', 7),
(70, 11, 'vocal_3', 'text', 'Vocal 3', 0, 1, 1, 1, 1, 1, '{}', 8),
(71, 11, 'vocal_4', 'text', 'Vocal 4', 0, 1, 1, 1, 1, 1, '{}', 9),
(72, 11, 'vocal_5', 'text', 'Vocal 5', 0, 1, 1, 1, 1, 1, '{}', 10),
(73, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 11),
(74, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(75, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 12, 'titulo', 'text', 'Título', 0, 1, 1, 1, 1, 1, '{}', 2),
(77, 12, 'url_imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{}', 3),
(79, 12, 'noticia_formacion', 'select_dropdown', 'Sección', 0, 1, 1, 1, 1, 1, '{\"default\":\"Noticias\",\"options\":{\"0\":\"Noticias\",\"1\":\"Informacion\"}}', 8),
(80, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(81, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(82, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(83, 13, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(84, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(85, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(86, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(87, 14, 'nombre', 'text', 'Nombre del patrocinio', 0, 1, 1, 1, 1, 1, '{}', 2),
(88, 14, 'url_imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"120\",\"height\":\"120\"}}', 3),
(89, 14, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 4),
(90, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(91, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(93, 15, 'titulo', 'text', 'Título', 0, 1, 1, 1, 1, 1, '{}', 2),
(94, 15, 'subtitulo', 'text', 'Subtítulo', 0, 1, 1, 1, 1, 1, '{}', 3),
(95, 15, 'url_imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"900\",\"height\":\"700\"}}', 4),
(96, 15, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 5),
(98, 15, 'fkAreaTrabajo', 'text', 'Área correspondiente', 0, 0, 0, 0, 0, 0, '{}', 7),
(99, 15, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(100, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(101, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 16, 'nombre', 'text', 'Nombre del término', 0, 1, 1, 1, 1, 1, '{}', 2),
(103, 16, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(104, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(105, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(106, 17, 'nombre', 'text', 'Nombre del término', 0, 1, 1, 1, 1, 1, '{}', 2),
(107, 17, 'significado', 'text', 'Significado', 0, 1, 1, 1, 1, 1, '{}', 3),
(108, 17, 'fkTerminoCorrecto', 'text', 'FkTerminoCorrecto', 0, 1, 1, 1, 1, 1, '{}', 4),
(109, 17, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(110, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(114, 20, 'nombre', 'text', 'Nombre del voluntario', 0, 1, 1, 1, 1, 1, '{}', 2),
(115, 20, 'apellido', 'text', 'Apellido del voluntario', 0, 1, 1, 1, 1, 1, '{}', 3),
(116, 20, 'area_colaboracion', 'text', 'Área colaboración', 0, 1, 1, 1, 1, 1, '{}', 4),
(117, 20, 'url_foto', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"250\",\"height\":\"250\"}}', 5),
(118, 20, 'experiencia', 'text', 'Experiencia', 0, 1, 1, 1, 1, 1, '{}', 6),
(119, 20, 'genero', 'select_dropdown', 'Genero', 0, 1, 1, 1, 1, 1, '{\"default\":\"Femenino\",\"options\":{\"0\":\"Masculino\",\"1\":\"Femenino\"}}', 7),
(120, 20, 'fkPais', 'text', 'FkPais', 0, 1, 1, 1, 1, 1, '{}', 8),
(121, 15, 'sub_area_belongsto_area_trabajo_relationship', 'relationship', 'Área correspondiente', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Area_trabajo\",\"table\":\"area_trabajo\",\"type\":\"belongsTo\",\"column\":\"fkAreaTrabajo\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"area_trabajo\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(122, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(123, 17, 'termino_erroneo_belongsto_termino_correcto_relationship', 'relationship', 'Termino correcto', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Termino_correcto\",\"table\":\"termino_correcto\",\"type\":\"belongsTo\",\"column\":\"fkTerminoCorrecto\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"area_trabajo\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(124, 20, 'voluntariado_hasone_pai_relationship', 'relationship', 'Pais', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\pais\",\"table\":\"pais\",\"type\":\"belongsTo\",\"column\":\"fkPais\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"area_trabajo\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(125, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(126, 20, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(127, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(128, 12, 'parrafo2', 'text', 'Párrafo2', 0, 1, 1, 1, 1, 1, '{}', 5),
(129, 12, 'parrafo1', 'text', 'Párrafo1', 0, 1, 1, 1, 1, 1, '{}', 4),
(130, 12, 'parrafo3', 'text', 'Párrafo3', 0, 1, 1, 1, 1, 1, '{}', 6),
(131, 12, 'parrafo4', 'text', 'Párrafo4', 0, 1, 1, 1, 1, 1, '{}', 7),
(132, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 12),
(133, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-08-01 01:43:21', '2021-08-01 01:43:21'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-08-01 01:43:21', '2021-08-01 01:43:21'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-08-01 01:43:21', '2021-08-01 01:43:21'),
(5, 'area_trabajo', 'area-trabajo', 'Área de trabajo', 'Áreas de trabajo', 'voyager-book', 'App\\Area_trabajo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-01 06:07:13', '2021-08-09 02:53:19'),
(8, 'asociacion', 'asociacion', 'Asociación de apoyo', 'Asociaciones de apoyo', 'voyager-people', 'App\\asociacion', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-01 10:17:23', '2021-08-07 05:25:11'),
(9, 'dato_general', 'dato-general', 'Datos generales', 'Datos generales', 'voyager-data', 'App\\Datos_generales', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-01 10:30:58', '2021-08-09 02:53:12'),
(10, 'imagen_ninio', 'imagen-ninio', 'Leyes y derechos', 'Leyes y derechos (Imagenes de niños)', 'voyager-images', 'App\\Imagen_ninio', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-01 10:52:23', '2021-08-07 05:27:23'),
(11, 'junta_directiva', 'junta-directiva', 'Junta directiva', 'Junta directiva', 'voyager-group', 'App\\junta_directiva', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-01 11:12:28', '2021-08-07 11:56:39'),
(12, 'noticia_formacion', 'noticia-formacion', 'Noticia o información', 'Noticias e información', NULL, 'App\\noticia', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 03:02:27', '2021-08-07 05:28:33'),
(13, 'pais', 'pais', 'Pais', 'Paises', 'voyager-location', 'App\\pais', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-08-02 03:12:16', '2021-08-02 03:12:16'),
(14, 'patrocinador', 'patrocinador', 'Patrocinador', 'Patrocinadores', 'voyager-person', 'App\\Patrocinadores', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 03:20:49', '2021-08-07 05:28:48'),
(15, 'sub_area', 'sub-area', 'Sub-area', 'Sub-areas', 'voyager-categories', 'App\\sub_area', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 03:23:01', '2021-08-13 03:26:33'),
(16, 'termino_correcto', 'termino-correcto', 'Termino correcto', 'Terminos correctos', 'voyager-check', 'App\\Termino_correcto', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 04:06:31', '2021-08-13 03:28:36'),
(17, 'termino_erroneo', 'termino-erroneo', 'Termino erroneo', 'Terminos erroneos', 'voyager-x', 'App\\Termino_erroneo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 04:09:07', '2021-08-07 05:30:08'),
(20, 'voluntariado', 'voluntariado', 'Voluntario', 'Voluntarios', 'voyager-people', 'App\\voluntariado', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-08-02 04:28:02', '2021-08-07 05:30:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_general`
--

CREATE TABLE `dato_general` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_fundacion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono1` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono2` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario_semanal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario_fin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dato_general`
--

INSERT INTO `dato_general` (`id`, `nombre_fundacion`, `direccion`, `mapa`, `url_facebook`, `url_instagram`, `correo`, `telefono1`, `telefono2`, `horario_semanal`, `horario_fin`, `created_at`, `updated_at`) VALUES
(1, 'Fundación Paraíso Down', 'Jardínes de La Libertad, Polígono L, Calle Sacacoyo, Casa #22, Ciudad Merliot, El Salvador.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1629.9707764900375!2d-89.26667949433002!3d13.673221827275189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632f5e7172254f%3A0x7db2905bf414699a!2sFundaci%C3%B3n%20Para%C3%ADso%20Down!5e0!3m2!1sen!2ssv!4v1580010149558!5m2!1sen!2ssv', 'https://www.facebook.com/paraisodown/?hc_ref=ARQX2Qyrnz5aeNMjlBBJnYRfdkF3bfRAUI4_3b6o4rfPlVQxSX_vNaNkzbbfIH3j4f4&fref=nf&__xts__%5B0%5D=68.ARAstklNvWd2PbxuH8plDC3nhTyEYDA9ZYc1hwGHMim_0k8n8o_85VAviYl0E8zL9AIgbXa0UYiP11QdDLgriyeWyedBWrfkIpFyqKtbsuNXhoAvyMLnt5zyw2gIRaZPpeHXjtyTCybVclBnw3mMNlY9LvqjfZCn8Z2OnhP8Bu6g-tHyJ9QZ7g1U9brD8eCKIHXIRboxYbw8NUDS_kRmhnJN-zDIpPQYHrtUpMdBbuuctA_9rC9NJ0lb3Pl6lErd-aRnUv96V-VSs9xazJs7UG28zWaSOGgIu1zbLAImllnavZPYbhRUVXO5Kpo7kVLe7sHeH8Lw6vqwmCyTYVDRP_rzKw&__tn__=kC-R', 'https://www.instagram.com/paraisodownorg/', NULL, '2288-7837', '2288-7891', '8:00 am - 5:00 pm', '8:00 am - 12:00 pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_ninio`
--

CREATE TABLE `imagen_ninio` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_imagen` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagen_ninio`
--

INSERT INTO `imagen_ninio` (`id`, `nombre`, `apellido`, `url_imagen`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'imagen-ninio\\August2021\\GkPnTNtbUnSbVmGNT6Yp.png', '2021-08-07 04:08:08', '2021-08-07 04:10:13'),
(2, NULL, NULL, 'imagen-ninio\\August2021\\QxNqoUZ1Zn7Y1hyI7aF3.png', NULL, '2021-08-07 04:10:50'),
(3, NULL, NULL, 'imagen-ninio\\August2021\\dF6iXFidchbwjtDwMQxT.png', NULL, '2021-08-07 04:11:10'),
(4, NULL, NULL, 'imagen-ninio\\August2021\\2VWuzrAQwk1kGu9jMLne.png', NULL, '2021-08-07 04:11:24'),
(5, NULL, NULL, 'imagen-ninio\\August2021\\XuZSriekSk1WzG76NwNG.png', NULL, '2021-08-07 04:11:43'),
(6, NULL, NULL, 'imagen-ninio\\August2021\\3K9LqzfSHfCrmsZJme6b.png', NULL, '2021-08-07 04:12:21'),
(7, NULL, NULL, 'imagen-ninio\\August2021\\F8qe7cX45HkRCSdMNvGC.png', NULL, '2021-08-07 04:12:36'),
(8, NULL, NULL, 'imagen-ninio\\August2021\\STToNsGi5o1DZNvGpEHx.png', NULL, '2021-08-07 04:12:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta_directiva`
--

CREATE TABLE `junta_directiva` (
  `id` int(10) UNSIGNED NOT NULL,
  `presidente` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vicepresidente` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tesorero` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secretario` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocal_1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocal_2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocal_3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocal_4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocal_5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `junta_directiva`
--

INSERT INTO `junta_directiva` (`id`, `presidente`, `vicepresidente`, `tesorero`, `secretario`, `vocal_1`, `vocal_2`, `vocal_3`, `vocal_4`, `vocal_5`, `created_at`, `updated_at`) VALUES
(1, 'Rosario de Romano', 'Adriana de Argueta', 'Jorge Cañas', 'Mirna de Martínez', 'Miguel Saca', 'Olivia Jacoby', 'Claudia Martínez', 'Mercivonne Loucel', 'Evelyn de Martínez', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-08-01 01:43:22', '2021-08-01 01:43:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-08-01 01:43:22', '2021-08-01 01:43:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2021-08-01 01:43:22', '2021-08-07 05:40:20', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 4, '2021-08-01 01:43:22', '2021-08-07 05:40:20', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 3, '2021-08-01 01:43:22', '2021-08-07 05:40:20', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 6, '2021-08-01 01:43:22', '2021-08-07 05:40:20', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-08-01 01:43:22', '2021-08-01 10:25:27', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-08-01 01:43:22', '2021-08-01 10:25:27', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-08-01 01:43:22', '2021-08-01 10:25:27', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-08-01 01:43:22', '2021-08-01 10:25:28', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 7, '2021-08-01 01:43:22', '2021-08-07 05:40:20', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-08-01 01:43:25', '2021-08-01 10:25:28', 'voyager.hooks', NULL),
(13, 1, 'Áreas de trabajo', '', '_self', 'voyager-book', '#000000', 28, 5, '2021-08-01 06:07:14', '2021-08-07 05:40:09', 'voyager.area-trabajo.index', 'null'),
(15, 1, 'Asociaciones de apoyo', '', '_self', 'voyager-people', '#000000', 28, 4, '2021-08-01 10:17:23', '2021-08-07 05:40:09', 'voyager.asociacion.index', 'null'),
(16, 1, 'Datos Generales', '', '_self', 'voyager-data', NULL, 28, 1, '2021-08-01 10:31:00', '2021-08-07 05:40:02', 'voyager.dato-general.index', NULL),
(17, 1, 'Leyes y derechos', '', '_self', 'voyager-images', '#000000', 28, 7, '2021-08-01 10:52:25', '2021-08-07 05:40:14', 'voyager.imagen-ninio.index', 'null'),
(18, 1, 'Junta Directiva', '', '_self', 'voyager-group', '#000000', 28, 2, '2021-08-01 11:12:28', '2021-08-07 05:40:03', 'voyager.junta-directiva.index', 'null'),
(19, 1, 'Noticias e Información', '', '_self', 'voyager-news', '#000000', 28, 11, '2021-08-02 03:02:28', '2021-08-07 05:40:19', 'voyager.noticia-formacion.index', 'null'),
(20, 1, 'Paises', '', '_self', 'voyager-location', NULL, 28, 12, '2021-08-02 03:12:18', '2021-08-07 05:40:20', 'voyager.pais.index', NULL),
(21, 1, 'Patrocinadores', '', '_self', 'voyager-person', '#000000', 28, 3, '2021-08-02 03:20:51', '2021-08-07 05:40:04', 'voyager.patrocinador.index', 'null'),
(22, 1, 'Sub-Areas', '', '_self', 'voyager-categories', '#000000', 28, 6, '2021-08-02 03:23:02', '2021-08-07 05:40:10', 'voyager.sub-area.index', 'null'),
(23, 1, 'Terminos Correctos', '', '_self', 'voyager-check', NULL, 28, 9, '2021-08-02 04:06:33', '2021-08-07 05:40:15', 'voyager.termino-correcto.index', NULL),
(24, 1, 'Terminos Erroneos', '', '_self', 'voyager-x', NULL, 28, 10, '2021-08-02 04:09:09', '2021-08-07 05:40:17', 'voyager.termino-erroneo.index', NULL),
(25, 1, 'Voluntarios', '', '_self', 'voyager-people', '#000000', 28, 8, '2021-08-02 04:28:05', '2021-08-07 05:40:15', 'voyager.voluntariado.index', 'null'),
(28, 1, 'Gestionar Sitio', '', '_self', 'voyager-folder', '#000000', NULL, 2, '2021-08-07 05:39:52', '2021-08-07 05:42:57', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia_formacion`
--

CREATE TABLE `noticia_formacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_imagen` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parrafo1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parrafo2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parrafo3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parrafo4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticia_formacion` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticia_formacion`
--

INSERT INTO `noticia_formacion` (`id`, `titulo`, `url_imagen`, `parrafo1`, `parrafo2`, `parrafo3`, `parrafo4`, `noticia_formacion`, `created_at`, `updated_at`) VALUES
(1, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA', 'noticia-formacion\\August2021\\fw3nZeyyTYwaYFRxCYTB.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', 'descripcion de prueba de parrafo 2', NULL, NULL, 0, NULL, '2021-08-07 03:37:35'),
(2, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA 2', 'noticia-formacion\\August2021\\JHfu34wmTyk0ukufNzYe.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', 'prueba del parrafo 2', 'prueba del parrafo 3', 'prueba del parrafo 4', 0, NULL, '2021-08-07 03:38:32'),
(3, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA 3', 'noticia-formacion\\August2021\\YuOg6hLB0u274xCSSduQ.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', NULL, NULL, '', 0, NULL, '2021-08-04 05:08:59'),
(4, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA 4', 'noticia-formacion\\August2021\\v9erJxWddnjK590mzpnd.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', NULL, NULL, '', 1, NULL, '2021-08-04 05:09:11'),
(5, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA 5', 'noticia-formacion\\August2021\\Ua7ILj9Cjs5Gkvi6SqEj.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', NULL, NULL, '', 1, NULL, '2021-08-04 05:09:22'),
(6, 'INTRODUCCIÓN A LA ATENCION PSICOLOGICA 6', 'noticia-formacion\\August2021\\jKEWZaJ9lNEAnEQhQBTj.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat eius exercitationem dolor quae cum iusto quo consequatur impedit, maxime labore, ipsa animi fugit? Nesciunt assumenda deleniti nihil ratione temporibus!', NULL, NULL, '', 1, NULL, '2021-08-04 05:09:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Guatemala', '2021-08-02 03:12:44', '2021-08-02 03:12:44'),
(2, 'El Salvador', '2021-08-02 03:12:54', '2021-08-02 03:12:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrocinador`
--

CREATE TABLE `patrocinador` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_imagen` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `patrocinador`
--

INSERT INTO `patrocinador` (`id`, `nombre`, `url_imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'APAC: ACADEMIA PANAMERICANA DE ARTE CULINARIO', 'patrocinador\\August2021\\sXaihISNbmsSZ5Bqu176.jpeg', NULL, NULL, '2021-08-04 05:18:13'),
(2, 'Centro de Desarrollo Humano \"Merced para Crecer\"', 'patrocinador\\August2021\\Zkz4u1CnnstJTQIkFXpG.jpeg', NULL, NULL, '2021-08-04 05:16:14'),
(3, 'Detelas \"Merced para Crecer\"', 'patrocinador\\August2021\\PnKKrMHh1fpDL1X7qTUO.jpeg', NULL, NULL, '2021-08-04 05:16:25'),
(4, 'Fundación cuatro patas', 'patrocinador\\August2021\\U9OMfL7EscAW2fRhlO5W.jpeg', NULL, NULL, '2021-08-04 05:23:54'),
(5, 'Music Time Center', 'patrocinador\\August2021\\ORIXgGYv0JnqL5B8aIZp.jpeg', NULL, NULL, '2021-08-04 05:16:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(2, 'browse_bread', NULL, '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(3, 'browse_database', NULL, '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(4, 'browse_media', NULL, '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(5, 'browse_compass', NULL, '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(6, 'browse_menus', 'menus', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(7, 'read_menus', 'menus', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(8, 'edit_menus', 'menus', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(9, 'add_menus', 'menus', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(10, 'delete_menus', 'menus', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(11, 'browse_roles', 'roles', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(12, 'read_roles', 'roles', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(13, 'edit_roles', 'roles', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(14, 'add_roles', 'roles', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(15, 'delete_roles', 'roles', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(16, 'browse_users', 'users', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(17, 'read_users', 'users', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(18, 'edit_users', 'users', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(19, 'add_users', 'users', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(20, 'delete_users', 'users', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(21, 'browse_settings', 'settings', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(22, 'read_settings', 'settings', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(23, 'edit_settings', 'settings', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(24, 'add_settings', 'settings', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(25, 'delete_settings', 'settings', '2021-08-01 01:43:23', '2021-08-01 01:43:23'),
(26, 'browse_hooks', NULL, '2021-08-01 01:43:25', '2021-08-01 01:43:25'),
(32, 'browse_area_trabajo', 'area_trabajo', '2021-08-01 06:07:13', '2021-08-01 06:07:13'),
(33, 'read_area_trabajo', 'area_trabajo', '2021-08-01 06:07:13', '2021-08-01 06:07:13'),
(34, 'edit_area_trabajo', 'area_trabajo', '2021-08-01 06:07:13', '2021-08-01 06:07:13'),
(35, 'add_area_trabajo', 'area_trabajo', '2021-08-01 06:07:13', '2021-08-01 06:07:13'),
(36, 'delete_area_trabajo', 'area_trabajo', '2021-08-01 06:07:13', '2021-08-01 06:07:13'),
(42, 'browse_asociacion', 'asociacion', '2021-08-01 10:17:23', '2021-08-01 10:17:23'),
(43, 'read_asociacion', 'asociacion', '2021-08-01 10:17:23', '2021-08-01 10:17:23'),
(44, 'edit_asociacion', 'asociacion', '2021-08-01 10:17:23', '2021-08-01 10:17:23'),
(45, 'add_asociacion', 'asociacion', '2021-08-01 10:17:23', '2021-08-01 10:17:23'),
(46, 'delete_asociacion', 'asociacion', '2021-08-01 10:17:23', '2021-08-01 10:17:23'),
(47, 'browse_dato_general', 'dato_general', '2021-08-01 10:31:00', '2021-08-01 10:31:00'),
(48, 'read_dato_general', 'dato_general', '2021-08-01 10:31:00', '2021-08-01 10:31:00'),
(49, 'edit_dato_general', 'dato_general', '2021-08-01 10:31:00', '2021-08-01 10:31:00'),
(50, 'add_dato_general', 'dato_general', '2021-08-01 10:31:00', '2021-08-01 10:31:00'),
(51, 'delete_dato_general', 'dato_general', '2021-08-01 10:31:00', '2021-08-01 10:31:00'),
(52, 'browse_imagen_ninio', 'imagen_ninio', '2021-08-01 10:52:25', '2021-08-01 10:52:25'),
(53, 'read_imagen_ninio', 'imagen_ninio', '2021-08-01 10:52:25', '2021-08-01 10:52:25'),
(54, 'edit_imagen_ninio', 'imagen_ninio', '2021-08-01 10:52:25', '2021-08-01 10:52:25'),
(55, 'add_imagen_ninio', 'imagen_ninio', '2021-08-01 10:52:25', '2021-08-01 10:52:25'),
(56, 'delete_imagen_ninio', 'imagen_ninio', '2021-08-01 10:52:25', '2021-08-01 10:52:25'),
(57, 'browse_junta_directiva', 'junta_directiva', '2021-08-01 11:12:28', '2021-08-01 11:12:28'),
(58, 'read_junta_directiva', 'junta_directiva', '2021-08-01 11:12:28', '2021-08-01 11:12:28'),
(59, 'edit_junta_directiva', 'junta_directiva', '2021-08-01 11:12:28', '2021-08-01 11:12:28'),
(60, 'add_junta_directiva', 'junta_directiva', '2021-08-01 11:12:28', '2021-08-01 11:12:28'),
(61, 'delete_junta_directiva', 'junta_directiva', '2021-08-01 11:12:28', '2021-08-01 11:12:28'),
(62, 'browse_noticia_formacion', 'noticia_formacion', '2021-08-02 03:02:28', '2021-08-02 03:02:28'),
(63, 'read_noticia_formacion', 'noticia_formacion', '2021-08-02 03:02:28', '2021-08-02 03:02:28'),
(64, 'edit_noticia_formacion', 'noticia_formacion', '2021-08-02 03:02:28', '2021-08-02 03:02:28'),
(65, 'add_noticia_formacion', 'noticia_formacion', '2021-08-02 03:02:28', '2021-08-02 03:02:28'),
(66, 'delete_noticia_formacion', 'noticia_formacion', '2021-08-02 03:02:28', '2021-08-02 03:02:28'),
(67, 'browse_pais', 'pais', '2021-08-02 03:12:18', '2021-08-02 03:12:18'),
(68, 'read_pais', 'pais', '2021-08-02 03:12:18', '2021-08-02 03:12:18'),
(69, 'edit_pais', 'pais', '2021-08-02 03:12:18', '2021-08-02 03:12:18'),
(70, 'add_pais', 'pais', '2021-08-02 03:12:18', '2021-08-02 03:12:18'),
(71, 'delete_pais', 'pais', '2021-08-02 03:12:18', '2021-08-02 03:12:18'),
(72, 'browse_patrocinador', 'patrocinador', '2021-08-02 03:20:51', '2021-08-02 03:20:51'),
(73, 'read_patrocinador', 'patrocinador', '2021-08-02 03:20:51', '2021-08-02 03:20:51'),
(74, 'edit_patrocinador', 'patrocinador', '2021-08-02 03:20:51', '2021-08-02 03:20:51'),
(75, 'add_patrocinador', 'patrocinador', '2021-08-02 03:20:51', '2021-08-02 03:20:51'),
(76, 'delete_patrocinador', 'patrocinador', '2021-08-02 03:20:51', '2021-08-02 03:20:51'),
(77, 'browse_sub_area', 'sub_area', '2021-08-02 03:23:02', '2021-08-02 03:23:02'),
(78, 'read_sub_area', 'sub_area', '2021-08-02 03:23:02', '2021-08-02 03:23:02'),
(79, 'edit_sub_area', 'sub_area', '2021-08-02 03:23:02', '2021-08-02 03:23:02'),
(80, 'add_sub_area', 'sub_area', '2021-08-02 03:23:02', '2021-08-02 03:23:02'),
(81, 'delete_sub_area', 'sub_area', '2021-08-02 03:23:02', '2021-08-02 03:23:02'),
(82, 'browse_termino_correcto', 'termino_correcto', '2021-08-02 04:06:33', '2021-08-02 04:06:33'),
(83, 'read_termino_correcto', 'termino_correcto', '2021-08-02 04:06:33', '2021-08-02 04:06:33'),
(84, 'edit_termino_correcto', 'termino_correcto', '2021-08-02 04:06:33', '2021-08-02 04:06:33'),
(85, 'add_termino_correcto', 'termino_correcto', '2021-08-02 04:06:33', '2021-08-02 04:06:33'),
(86, 'delete_termino_correcto', 'termino_correcto', '2021-08-02 04:06:33', '2021-08-02 04:06:33'),
(87, 'browse_termino_erroneo', 'termino_erroneo', '2021-08-02 04:09:09', '2021-08-02 04:09:09'),
(88, 'read_termino_erroneo', 'termino_erroneo', '2021-08-02 04:09:09', '2021-08-02 04:09:09'),
(89, 'edit_termino_erroneo', 'termino_erroneo', '2021-08-02 04:09:09', '2021-08-02 04:09:09'),
(90, 'add_termino_erroneo', 'termino_erroneo', '2021-08-02 04:09:09', '2021-08-02 04:09:09'),
(91, 'delete_termino_erroneo', 'termino_erroneo', '2021-08-02 04:09:09', '2021-08-02 04:09:09'),
(92, 'browse_voluntariado', 'voluntariado', '2021-08-02 04:28:04', '2021-08-02 04:28:04'),
(93, 'read_voluntariado', 'voluntariado', '2021-08-02 04:28:04', '2021-08-02 04:28:04'),
(94, 'edit_voluntariado', 'voluntariado', '2021-08-02 04:28:04', '2021-08-02 04:28:04'),
(95, 'add_voluntariado', 'voluntariado', '2021-08-02 04:28:04', '2021-08-02 04:28:04'),
(96, 'delete_voluntariado', 'voluntariado', '2021-08-02 04:28:04', '2021-08-02 04:28:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(25, 1),
(26, 1),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(36, 1),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(51, 1),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(56, 1),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(61, 1),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(81, 1),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2),
(92, 1),
(92, 2),
(93, 1),
(93, 2),
(94, 1),
(94, 2),
(95, 1),
(95, 2),
(96, 1),
(96, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-08-01 01:43:22', '2021-08-01 01:43:22'),
(2, 'user', 'Normal User', '2021-08-01 01:43:22', '2021-08-01 01:43:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Fundacion Paraiso Down', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', NULL, '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\August2021\\gIqWPFHiSfDE1QMfrVvh.jpg', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\August2021\\I9UEFdUrRtTMq96Rsmw4.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Fundacion Paraiso Down', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Bienvenido al portal de Administracion del sitio web Paraiso Down', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\August2021\\SddjUS4c4NpcYo6c5QKg.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\August2021\\rIllkIZqIq90pVxaMW8t.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_area`
--

CREATE TABLE `sub_area` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `url_imagen` varchar(250) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fkAreaTrabajo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sub_area`
--

INSERT INTO `sub_area` (`id`, `titulo`, `subtitulo`, `url_imagen`, `descripcion`, `fkAreaTrabajo`, `created_at`, `updated_at`) VALUES
(1, 'Contáctanos', NULL, 'sub-area\\August2021\\VVbI0nXDzWrhtU8zVuXX.png', 'Comunícate con la fundación por teléfono o por correo electrónico.', 1, NULL, '2021-08-04 02:27:54'),
(2, 'Inscríbete', NULL, 'sub-area\\August2021\\mODkcgep49bltM8FXLcF.png', 'Brinda tu nombre de contacto, parentesco, número de teléfono, nombre y la edad de la persona para quien solicitas la evaluación.', 1, NULL, '2021-08-04 03:29:47'),
(3, 'Infórmate', NULL, 'sub-area\\August2021\\9qbX9TAhWuS0s6Z0WPfa.png', 'Un profesional de la fundación te brindará la informacion completa sobre nuestros servicios y el proceso de evaluación.', 1, NULL, '2021-08-04 03:38:50'),
(4, 'Evaluación', NULL, 'sub-area\\August2021\\xHlPPyyKxLqi7xk6xqmr.png', 'Se agendará la fecha, horario y se detallarán los documentos a presentar.', 1, NULL, '2021-08-04 03:41:42'),
(5, 'Reporte', NULL, 'sub-area\\August2021\\Yq2Srtau6RN6AjxTbXSk.png', 'Una semana posterior, se hará entrega del reporte completo acompañado de las recomendaciones, cupos disponibles y costos', 1, NULL, '2021-08-04 03:43:03'),
(6, '¡BIENVENIDO!', NULL, 'sub-area\\August2021\\ONcTj0nRDVpaCrvlKU88.png', 'Ya eres parte de nuestra gran familia Paraíso Down.', 1, NULL, '2021-08-04 03:43:31'),
(7, 'Estimulación temprana musical', 'GRUPAL (0-3 AÑOS).', 'sub-area\\August2021\\fNmWt4TQFWzdohqynZCs.jpg', NULL, 2, NULL, '2021-08-12 19:54:20'),
(8, 'Estimulacion multisensorial', 'GRUPAL (0-3 AÑOS).', 'sub-area\\August2021\\s7gDJDV98h4fqfaLAJTV.jpg', NULL, 2, NULL, '2021-08-04 03:50:53'),
(9, 'Fisioterapia', 'INDIVIDUAL.', 'sub-area\\August2021\\d4WSMDnfiAhCQd6cg6rr.jpg', NULL, 2, NULL, '2021-08-04 03:53:08'),
(10, 'Desarrollo', 'MOTOR.', 'sub-area\\August2021\\cRteHHtz0rQbp64FjANy.jpg', NULL, 2, NULL, '2021-08-04 03:53:28'),
(11, 'Terapia sensorial', 'INDIVIDUAL.', 'sub-area\\August2021\\8yq4Pksljv8O3ecuZiwy.jpg', NULL, 2, NULL, '2021-08-04 03:53:46'),
(12, 'Terapia ocupacional', 'NIÑOS Y NIÑAS.', 'sub-area\\August2021\\GnOmBfIvgnBzi7XSsbrJ.jpg', NULL, 3, NULL, '2021-08-04 03:56:15'),
(13, 'Terapia ocupacional', 'ADOLECENTES Y ADULTOS.', 'sub-area\\August2021\\YlVKcYcmbG1X69vGP2SJ.jpg', NULL, 3, NULL, '2021-08-04 03:57:18'),
(14, 'Proceso de', 'alimentación.', 'sub-area\\August2021\\J6Tnr3OtEDDEQAGBik6h.jpg', NULL, 4, NULL, '2021-08-04 03:58:37'),
(15, 'Estimulación de', 'lenguaje.', 'sub-area\\August2021\\uH5RKlyjDnYJAKuN6kp1.jpg', NULL, 4, NULL, '2021-08-04 03:59:00'),
(16, 'Comunicación', 'pre-verbal.', 'sub-area\\August2021\\FljVXJZqydp2ec2ICYes.jpg', NULL, 4, NULL, '2021-08-04 03:59:22'),
(17, 'Comunicación', 'bimodal.', 'sub-area\\August2021\\gWwqPoKARF1uIg1bZ33v.jpg', NULL, 4, NULL, '2021-08-04 03:59:43'),
(18, 'Habilidades de la', 'VIDA DIARIA.', 'sub-area\\August2021\\7QotbXzZcTY24PBWKVnD.jpg', NULL, 5, NULL, '2021-08-04 04:03:06'),
(19, 'Habilidades', 'SOCIALES.', 'sub-area\\August2021\\F33qkIuHY6qbGiuRcvDX.jpg', NULL, 5, NULL, '2021-08-04 04:03:21'),
(20, 'Refuerzo de', 'LECTO-ESCRITURA.', 'sub-area\\August2021\\bCVpveDjdX39g6hlHHGS.jpg', NULL, 5, NULL, '2021-08-04 04:03:40'),
(21, 'Refuerzo de', 'MATEMÁTICAS.', 'sub-area\\August2021\\3n2BXSgglInK5S4UsDxD.jpg', NULL, 5, NULL, '2021-08-04 04:04:00'),
(22, 'Apoyo a la inclusión', 'ESCOLAR.', 'sub-area\\August2021\\hudIJ0UgHg4yVaYhC48O.jpg', NULL, 5, NULL, '2021-08-04 04:13:09'),
(23, 'Desarrollo de habilidades', 'COGNOSITIVAS.', 'sub-area\\August2021\\jwHXrEUnQotEDwJzpEuC.jpg', NULL, 6, NULL, '2021-08-04 04:15:04'),
(24, 'Fortalecimiento de habilidades', 'DE LA VIDA DIARIA.', 'sub-area\\August2021\\MSiYiyQGMBDc2dbj2yKE.jpg', NULL, 6, NULL, '2021-08-04 04:15:22'),
(25, 'Talleres de', 'IDENTIDAD Y SEXUALIDAD.', 'sub-area\\August2021\\ZGvf04wX7LStKF0r5UbQ.jpg', NULL, 6, NULL, '2021-08-04 04:15:46'),
(26, 'Fortalecimiento de habilidades', 'SOCIALES.', 'sub-area\\August2021\\3anzxBgSyimTIVgv5iMZ.jpg', NULL, 6, NULL, '2021-08-04 04:16:05'),
(27, 'Desarrollo de habilidades', 'PRODUCTIVAS.', 'sub-area\\August2021\\rYsMq6OVPWNnieyI5DuL.jpg', NULL, 6, NULL, '2021-08-04 04:16:21'),
(28, 'Programa de inserción', 'LABORAL.', 'sub-area\\August2021\\RhYivmn8iz8qbgqOdq7K.jpg', NULL, 6, NULL, '2021-08-04 04:16:39'),
(29, 'Orientacion psicológica', 'INDIVIDUAL Y GRUPAL.', 'sub-area\\August2021\\rFt9RnN64UfEJ1sGQhEI.jpg', NULL, 7, NULL, '2021-08-04 04:24:37'),
(30, 'Acompañamiento', 'FAMILIAR.', 'sub-area\\August2021\\sc9yfzcGfnkhpHArIrS4.jpg', NULL, 7, NULL, '2021-08-04 04:24:57'),
(31, 'Asesoria psicológica a', 'NUEVOS USUARIO.', 'sub-area\\August2021\\dXSOFo6nVKy8pYoEmrry.jpg', NULL, 7, NULL, '2021-08-04 04:25:27'),
(32, 'Formacion de profesionales', 'Y FAMILIARES.', 'sub-area\\August2021\\seuIw67v9IPmSzHY2Nfp.jpg', NULL, 7, NULL, '2021-08-04 04:25:42'),
(33, 'Contáctanos', NULL, NULL, 'Envía un correo electronico a la direccion apoyosexternos.paraisodown@gmail.com, indicando el tipo de apoyo al que deseas aplicar; horas sociales, voluntariado, trabajo de investigacion o RSE (Responsabilidad Social Empresarial).', 8, NULL, NULL),
(34, 'Cúentanos sobre tu proyecto', NULL, NULL, 'Completa el formulario (a mano o a computadora) y reenvíalo a la misma direccion de correo electronico.', 8, NULL, NULL),
(35, 'Resolución de solicitud', NULL, NULL, 'La persona encargada te indicará la resolución de tu solicitud. Si tu proyecto es aprobado se te informará sobre la disponibilidad de espacios y tiempos ', 8, NULL, NULL),
(36, 'Crearemos compromisos mutuos', NULL, NULL, 'Se coordinará una reunión para especificar los horarios, responsabilidades y lineamientos. A su vez, recibirás una inducción sobre generalidades del sindrome de Down', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `termino_correcto`
--

CREATE TABLE `termino_correcto` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `termino_correcto`
--

INSERT INTO `termino_correcto` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Personas CON Discapacidad', NULL, NULL),
(2, 'Personas con Discapacidad Visual, personas con Discapacidad auditiva', NULL, NULL),
(3, 'Personas con Discapacidad Intelectual', NULL, NULL),
(4, 'Personas con síndrome de Down', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `termino_erroneo`
--

CREATE TABLE `termino_erroneo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `significado` text DEFAULT NULL,
  `fkTerminoCorrecto` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `termino_erroneo`
--

INSERT INTO `termino_erroneo` (`id`, `nombre`, `significado`, `fkTerminoCorrecto`, `created_at`, `updated_at`) VALUES
(1, 'Personas que SUFREN/PADECEN discapacidad', 'Se TIENE una discapacidad, no es un sufrimiento ni enfermedad', 1, NULL, NULL),
(2, 'Discapacitado', 'Indica que TODA la persona tiene discapacidad y no solo una parte de ella.', 1, NULL, NULL),
(3, 'Personas especiales', 'No vuelan ni tienen poderes sobrenaturales', 1, NULL, NULL),
(4, 'Minusválidos', 'Que tiene menor valor, es inferior', 1, NULL, NULL),
(5, 'Cieguitos, Sorditos', 'Postura paternalista', 2, NULL, NULL),
(6, 'Retraso Mental', 'Es un término médico desfasado y considerando peyorativo', 3, NULL, NULL),
(7, 'Mongol', 'Que nace en Mongolia', 4, NULL, NULL),
(8, 'Niño Down', 'Limita el desarrollo de una persona con síndrome de Down a la etapa de la niñez, negando la posibilidad de aceptar que son capaces de crecer y vivir todas las etapas de la vida, incluyendo aspirar a un trabajo o proyecto de emprendimiento.', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administrador', 'admin@paraisodown.org', 'users\\August2021\\E9AveKVhXoSodqvOOA0b.png', NULL, '$2y$10$3V1gcmIcK/AFCDTWz/ztc.SeQlsZ4nAd0Jm1ufb5W5Kvh49kum.Si', NULL, '{\"locale\":\"en\"}', '2021-08-01 01:43:59', '2021-08-03 03:36:19'),
(3, 2, 'AdminFPD', 'administrador@paraisodown.org', 'users\\August2021\\W22gNatX26r7LhaoMkW4.png', NULL, '$2y$10$m4MczAPUFvru9FN0a3hUUeRmB50soQkmyX.4wZznBpaWo0OseevIi', NULL, '{\"locale\":\"en\"}', '2021-08-02 08:31:30', '2021-08-09 02:02:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado`
--

CREATE TABLE `voluntariado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `area_colaboracion` varchar(200) DEFAULT NULL,
  `url_foto` varchar(300) DEFAULT NULL,
  `experiencia` text DEFAULT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `fkPais` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voluntariado`
--

INSERT INTO `voluntariado` (`id`, `nombre`, `apellido`, `area_colaboracion`, `url_foto`, `experiencia`, `genero`, `fkPais`, `created_at`, `updated_at`) VALUES
(1, 'David', 'Pineda', 'Área de colaboración: Etapa Escolar y Estimulación Sensorial.', 'voluntariado\\August2021\\Ul9wrqPKnoAJhKVrFzJx.png', 'El ser voluntario en la Fundación Paraíso Down, me permitió adentrarme al mundo del síndrome Down desde diversas ópticas. Fues una experiencia donde desarrollé muchos aprendizajes previos con todas las personas que formaron parte de esta comunidad, con quienes vivencié que la discapacidad es irreductible a una sola mirada. Sus significados y representaciones son múltiples y cambiantes.', 0, 1, NULL, '2021-08-04 05:43:55'),
(2, 'Salma', 'Herrera', 'Área de colaboración: Diseño Grafico.', 'voluntariado\\August2021\\3bcytw0xKUd7RlZIrz2P.png', 'Estar como pasante en Paraíso Down, ha sido una de las experiencias más gratificantes. No solo puse en práctica mis conocimientos, sino que adquirí nuevos aprendizajes tanto profesional como personalmente.', 1, 2, NULL, '2021-08-04 05:44:23'),
(3, 'Rosie', 'Vargas', 'Área de colaboración: Diseño Grafico, Fotografía y Producción Audiovisual.', 'voluntariado\\August2021\\fc8jungGho3Np6vrDXro.png', 'Realizar mi pasantía en Paraíso Down fue una de las mejores experiencias en mi vida. Sé que ayudé pero fueron ellos que transformaron mi vida.', 1, 1, NULL, '2021-08-04 05:44:35'),
(4, 'Constanza', 'Díaz', 'Área de colaboración: Diseño Estratégico y Grafico.', 'voluntariado\\August2021\\E6LfUiJlMLbYUaRAuYbp.png', 'Realizar mis pasantía en Paraíso Down, ha sido muy emocionanate y gratificador, porque es un acercamiento a las vida laboral y al crecimiento como un profesional. En el cual se pone el práctica muchos conocimiento adquiridos dentro de la universidad. Dentro de Paraíso Down aprendí el lenguaje y la metodología, lo importante de ser incluyente, en crear ambientes acogedores, cómodos y sanos. Donde se tiene mucha cercanía tanto con los niños y jóvenes de la Fundación como los compañeros de trabajo, esta experiencias que he obtenido no solo me ha enriquecido profesionalmente sino como persona.', 1, 2, NULL, '2021-08-04 05:44:53'),
(5, 'Fernanda', 'Cordero', 'Área de colaboración: Diseño Grafico.', 'voluntariado\\August2021\\hEBMRUOkRjy1lWMLJUvW.png', 'Estar en Paraíso Down, fue la mejor experiencia que he tenido en mi vida, conocer sobre el síndrome Down y convivir con los chicos cambió mi vida, al principio sentía preocupacion de no saber como convivir con ellos, pero Paraíso Down me apoyó y paso a paso fui conociendo y aprendiendo, con sus actividades y charlas logré tener un acercamiento con los chicos y supe la importancia no solo de comprender el término sindrome Down, sino el derecho que ellos tienen de una vida normal y aceptada por los demás. Aparte todo el equipo que colabora en la Fundación me recibió y trató muy bien, no solo aprendí cosas nuevas, hice amistades que durarán por siempre. Gracias Paraiso Down, por abrirme las puertas  de su casa y corazón, por darme la oportunidad de crecer como persona, apoyar el síndrome Down y conocer gente asombrosa. Defitivamente todo lo que hacen, colocan un granito de arena para ayudar en la inclusión y aceptación de los chicos en la sociedad. ¡Sigan adelante!.', 1, 2, NULL, '2021-08-04 05:45:03'),
(6, 'Eva', 'Magaña', 'Área de colaboración: Diseño Grafico y Fotografía', 'voluntariado\\August2021\\wGWQebdYLLVVu6dFb3NL.png', 'Trabajar acá es recibir una cubeta de alegría todos los días.', 1, 1, NULL, '2021-08-04 05:45:13'),
(7, 'Andrea', 'Ruano', 'Área de colaboración: Ilustracion y revitalización', 'voluntariado\\August2021\\i0YRcPTwMgSs7ydlrMS5.png', 'Esta experiencia ha sido divertida y revitalizadora. Me han hecho sentir como en casa.', 1, 2, NULL, '2021-08-04 05:45:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indices de la tabla `dato_general`
--
ALTER TABLE `dato_general`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen_ninio`
--
ALTER TABLE `imagen_ninio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `junta_directiva`
--
ALTER TABLE `junta_directiva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia_formacion`
--
ALTER TABLE `noticia_formacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indices de la tabla `sub_area`
--
ALTER TABLE `sub_area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `termino_correcto`
--
ALTER TABLE `termino_correcto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `termino_erroneo`
--
ALTER TABLE `termino_erroneo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `dato_general`
--
ALTER TABLE `dato_general`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_ninio`
--
ALTER TABLE `imagen_ninio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `junta_directiva`
--
ALTER TABLE `junta_directiva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `noticia_formacion`
--
ALTER TABLE `noticia_formacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `patrocinador`
--
ALTER TABLE `patrocinador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `sub_area`
--
ALTER TABLE `sub_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `termino_correcto`
--
ALTER TABLE `termino_correcto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `termino_erroneo`
--
ALTER TABLE `termino_erroneo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
