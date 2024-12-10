-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-12-2024 a las 08:10:55
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `argamasilla-cultural`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Musica', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(2, 'Deportes', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(3, 'Tecnologia', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(4, 'Cine', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(5, 'Libros', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(6, 'Viajes', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(7, 'Cocina', '2024-10-30 08:34:05', '2024-10-30 08:34:05'),
(8, 'Teatro', '2024-10-30 08:34:05', '2024-10-30 08:34:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacionExtra` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `direccion`, `telefono`, `email`, `web`, `informacionExtra`, `created_at`, `updated_at`) VALUES
(1, 'Empresa . Qui sint.S.L.', '339 Wade Alley', '+1.914.473.0268', 'aiden.grant@lebsack.com', 'webempresa', 'Aut distinctio id dolorem ea accusantium ut quis. Error laboriosam dolore laborum in voluptatibus.', '2024-10-28 14:22:49', '2024-10-28 14:22:49'),
(2, 'Empresa . Dolorem.S.L.', '811 Chet Point', '+17023102137', 'vglover@yahoo.com', 'webempresa', 'A facere dolor quia. In dolore occaecati voluptatum id libero impedit.', '2024-10-28 14:22:49', '2024-10-28 14:22:49'),
(3, 'Empresa . Quaerat.S.L.', '764 Leopoldo Canyon Suite 602', '1-470-543-9230', 'roberts.hermann@gmail.com', 'webempresa', 'Et sed autem corporis est dolores. Magni vel aperiam corrupti sequi sunt quam.', '2024-10-28 14:22:49', '2024-10-28 14:22:49'),
(4, 'Empresa . Numquam.S.L.', '53940 Nader Park Suite 295', '+1 (251) 887-0760', 'carter.myrtice@schuppe.com', 'webempresa', 'Dignissimos voluptate deleniti magnam qui est eveniet. Voluptatem eveniet in culpa consequatur.', '2024-10-28 14:22:49', '2024-10-28 14:22:49'),
(5, 'Empresa . Saepe.S.L.', '170 Kautzer Expressway', '1-929-587-1131', 'hettinger.efrain@botsford.org', 'webempresa', 'Enim suscipit modi vitae. Doloremque similique omnis quas qui. Sed sit voluptatum perferendis quia.', '2024-10-28 14:22:49', '2024-10-28 14:22:49'),
(6, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', NULL, NULL),
(7, 'asistente', 'asistente', 'asistente', 'asistente', 'asistente', 'asistente', NULL, NULL),
(8, 'Empresa1', 'Calle la torre 4', '897876524', 'biografias@correo.es', 'www.google.com', 'Empresa muy chula', '2024-10-29 13:58:52', '2024-10-29 13:58:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('creado','cancelado','terminado') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aforoMax` double NOT NULL,
  `tipo` enum('online','presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numMaxEntradasPersona` double NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `fecha`, `hora`, `descripcion`, `ciudad`, `direccion`, `estado`, `aforoMax`, `tipo`, `numMaxEntradasPersona`, `imagen`, `categoria_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Fiesta años 80', '2025-04-30', '20:00:00', 'Fiesta para recordar los años 80, su estilo, su música y su grastronomía', 'Argamasilla de Calatrava', 'Plaza del Ayto 1', 'cancelado', 120000, 'presencial', 100000000, '2572129.jpg', 1, 4, '2024-10-31 09:29:11', '2024-11-17 19:40:28'),
(20, 'Survival Zombie', '2025-05-31', '23:00:00', 'Survival zombie pruebas deportivas', 'Argamasilla de Calatrava', 'Plaza ayto 1', 'creado', 10000000, 'presencial', 4, '1730398807_zombies.jpg', 2, 4, '2024-10-31 17:20:07', '2024-10-31 17:20:07'),
(21, 'Actuación Orquesta Viena', '2025-04-17', '23:00:00', 'Actuación estelar de la orquesta Viena en el parque Asaura, la entrada incluye una consumición.', 'Argamasilla de Calatrava', 'Parque Asaura', 'creado', 1000000, 'presencial', 4, '1730399231_orquesta.jpg', 1, 4, '2024-10-31 17:27:11', '2024-10-31 17:27:11'),
(22, 'Actuación Musical \"Amas de Casa\"', '2025-01-14', '20:00:00', 'Actuación Musical a cargo de la Asociación de Amas de Casa del Municipio.', 'Argamasilla de Calatrava', 'Roales 43', 'creado', 23456, 'presencial', 3, '1730978322_musicas.jpg', 1, 4, '2024-11-07 10:18:42', '2024-11-07 10:18:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--

CREATE TABLE `experiencias` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `descripcionCorta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcionLarga` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`id`, `nombre`, `fechaInicio`, `fechaFin`, `descripcionCorta`, `descripcionLarga`, `precio`, `imagen`, `empresa_id`, `created_at`, `updated_at`) VALUES
(2, 'Visita Casa Inquisición', '2025-04-30', '2025-08-28', 'Visitas Guiadas a la casa de la Inquisición', 'Visitas guiadas por el historiador Pablo Santos en la que realiza una exposición sobre la historia de las distintas dependencias de este conocido edificio del siglo XIV de nuestra localidad.', 45, '1730403680_casa-inquisición.jpg', 1, '2024-10-31 18:41:20', '2024-10-31 18:41:20'),
(3, 'Festival Gastronómico del Jamón XV edición', '2025-04-26', '2025-04-28', 'Degustación y muestras de corte de Jamón de Reserva', 'Catas de jamón con maridaje de vinos. Si tu pasión es el jamón ibérico, no te puedes perder esta cata. 3 tipos de jamón y 3 excelentes vinos para acompañarlos.', 20, '1730404380_jamon.jpg', 5, '2024-10-31 18:53:00', '2024-10-31 18:53:00'),
(5, 'Ruta Alma WildNature', '2024-12-01', '2026-12-31', 'Parque Natural Valle de Alcudia y Sierra Madrona', 'Sumérgete en una experiencia que no olvidarás bajos los cielos del Valle de Alcudia, Yacimientos arqueológicos, pasado minero y encinas centenarias para deleitarse. La ruta incluye alojamiento y desayuno.', 600, '1730981630_alcudia.jpg', 8, '2024-11-07 11:13:50', '2024-11-07 11:13:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcions`
--

CREATE TABLE `inscripcions` (
  `id` bigint UNSIGNED NOT NULL,
  `numEntradas` double NOT NULL,
  `estado` enum('recibida','confirmada','cancelada') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `evento_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcions`
--

INSERT INTO `inscripcions` (`id`, `numEntradas`, `estado`, `user_id`, `evento_id`, `created_at`, `updated_at`) VALUES
(4, 3, 'recibida', 57, 21, '2024-11-03 18:57:28', '2024-11-03 18:57:28'),
(6, 2, 'recibida', 5, 22, '2024-11-19 15:47:13', '2024-11-19 15:47:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_10_21_000000_create_empresas_table', 1),
(2, '2024_10_22_000000_create_users_table', 1),
(3, '2024_10_22_100000_create_password_reset_tokens_table', 1),
(4, '2024_10_24_000000_create_failed_jobs_table', 1),
(5, '2024_10_24_191000_create_personal_access_tokens_table', 1),
(6, '2024_10_25_163709_create_categorias_table', 1),
(7, '2024_10_25_163715_create_eventos_table', 1),
(8, '2024_10_25_163823_create_inscripcions_table', 1),
(9, '2024_10_25_164041_create_experiencias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('asistente','empresa','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_id` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellidos`, `edad`, `direccion`, `ciudad`, `telefono`, `email`, `email_verified_at`, `password`, `rol`, `empresa_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Ines', 'Ruiz', 53, 'Clavel 3', 'Argamasilla de calatrava', '926543456', 'ines@correo.es', NULL, '$2y$12$abIRb6NJ8grlaM9EyakxT.vSsepsw1BkRCk5prKImmlrRQA63b8su', 'admin', 6, NULL, '2024-10-28 14:24:56', '2024-11-02 18:24:36'),
(5, 'Pepe', 'Palotes', 43, 'Pinto 23', 'Madrid', '936786521', 'pepe@correo.es', NULL, '$2y$12$nMoXNaW80R3cthpbregbG.epaqIrYz1v9CftfmhhJDyl/7kt7Vk1S', 'asistente', 7, NULL, '2024-10-28 14:29:03', '2024-10-28 14:29:03'),
(6, 'Turner Kerluke', 'Abernathy', 82, '70215 Leta Square Apt. 918', 'Johnsonport', '+18313542571', 'uriah01@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'CMMfnp6KXi', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(7, 'Joanny Zulauf Sr.', 'Dietrich', 80, '17903 Zieme Burg', 'East Olaf', '(469) 949-6969', 'oreilly.alisha@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'O0xQbw3uFB', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(8, 'Miss Ashlee Abbott Jr.', 'O\'Conner', 80, '513 Adams Row', 'East Kelvin', '(224) 835-2346', 'gladys98@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, 'EQTylzSf09', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(9, 'Prof. Collin Beatty V', 'Gleason', 30, '7006 Lacy Plaza Apt. 231', 'Lake Jean', '903-755-1396', 'kacie.johnston@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'ERAGNODBLZ', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(10, 'Prof. Mortimer Fahey', 'Reinger', 19, '89473 Mosciski Causeway Suite 813', 'Kennedyfort', '1-616-746-6917', 'alvah10@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'V5mzRpkSJU', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(11, 'Miss Esta Mayert DDS', 'Schmidt', 35, '8061 Taurean Heights', 'Lake Dorotheafurt', '409-654-7380', 'rrolfson@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'UzWKxSu2m7', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(12, 'Dr. Erwin Rolfson', 'Emmerich', 90, '944 Herzog Crescent', 'Walkerport', '901-684-9972', 'yundt.rosalinda@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'ME04xHkfNw', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(13, 'Justice Mann II', 'Hand', 77, '6821 Ali Mission Suite 541', 'Mrazville', '+1 (562) 492-6071', 'gottlieb.eugenia@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, '1GmUbr8kA9', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(14, 'Elsie Ritchie', 'Huel', 37, '553 Ima Mountain', 'Botsfordhaven', '1-781-862-6779', 'antoinette55@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'NjwTk8Sh0A', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(15, 'Ms. Renee Goyette', 'Beatty', 25, '87976 Rickey Tunnel', 'North Arnaldobury', '775-451-4788', 'pfannerstill.jed@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, '8uMOoSWqdV', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(16, 'Winston Swift', 'Bins', 58, '45618 Selena Summit Apt. 204', 'Marquardtfort', '1-503-647-7993', 'kaylee.goldner@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'aiafPcBjhf', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(17, 'Estell Stiedemann DDS', 'Murphy', 47, '49349 Adams Shores', 'New Keshawn', '+13642096452', 'rippin.brent@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'uvltMnQ2UO', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(18, 'Judah Stamm', 'Beier', 27, '8994 Harvey Brook', 'Hirthebury', '623-448-3039', 'elsa.koch@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'RRXb8hmMLC', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(19, 'Horace Padberg', 'Leuschke', 33, '692 Durgan Pine Suite 255', 'Streichburgh', '1-818-583-1333', 'adelbert.schimmel@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, '06XOdgRbbD', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(20, 'Maurine Ferry', 'Doyle', 31, '880 Marvin Cape', 'Port Sisterside', '+15204496894', 'halvorson.katheryn@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'j4L1NhsTpH', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(21, 'Alessandra Treutel', 'Johns', 29, '5618 Okuneva Lodge', 'Hamillshire', '+1.661.365.4550', 'lstanton@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, 'wKTxS1S1Qa', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(22, 'Morgan Feest DDS', 'Leannon', 39, '6457 Nat River Suite 381', 'Murrayberg', '(530) 308-0154', 'stanton.neha@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, 'mXgMWt1yqd', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(23, 'Soledad Huels PhD', 'Daugherty', 35, '5423 Bruen Route', 'Rosemariemouth', '+1-906-488-9433', 'stefanie.padberg@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, '1eUBsQ6Frp', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(24, 'Trace Corwin', 'Lynch', 31, '995 Adriana Springs', 'Stehrhaven', '714-796-4358', 'garrick.gibson@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'Xwyg1CZa61', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(25, 'Conrad White', 'Bins', 79, '344 Lurline Crest Suite 323', 'Port Anita', '332-810-8612', 'block.adah@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'oOgQ1ewphN', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(26, 'Marianne Block', 'Howe', 84, '81612 Florencio Vista Suite 476', 'East Ethel', '952-736-3190', 'grimes.shad@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'qXKwljCUFc', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(27, 'Maximilian Stehr I', 'Wisozk', 89, '97531 Nels Knoll', 'Fadelborough', '+1-484-659-5172', 'dell79@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'Rc6XVtms61', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(28, 'Harrison O\'Keefe', 'Hammes', 21, '1302 Sherwood River Apt. 092', 'Gerlachhaven', '+1 (225) 713-7133', 'leanna49@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, 'g7FWKuLxSC', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(29, 'Barney Raynor', 'Johns', 41, '76142 Lenna Neck Suite 476', 'Rauside', '+15136883377', 'garret.bruen@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'BH0MhaR5Qn', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(30, 'Kelsi Cummings', 'Pfeffer', 67, '35704 Sanford Islands', 'New Lonnyborough', '+14346359935', 'holly.cummings@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'vvIMZLJYvl', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(31, 'Moises Schmitt', 'Schulist', 27, '72105 Saige Lodge Suite 774', 'Alannashire', '1-414-512-7577', 'avis.halvorson@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, '9kwmLymqhZ', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(32, 'Nina Koss Sr.', 'Mohr', 84, '114 Sauer Course Apt. 880', 'South Florida', '850-204-3053', 'keebler.kaden@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'SNHFW1NHaZ', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(33, 'Miss Ozella McDermott', 'Walsh', 28, '73140 Derek Mountain', 'Gleasonhaven', '+1 (272) 408-6063', 'brown.ezra@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'EXCCik7p3V', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(34, 'Lawson Koch', 'Haley', 89, '773 Nina Ramp', 'Douglasview', '1-352-667-2128', 'catalina30@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, '7maLMzx2Nn', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(35, 'Andres West V', 'Hauck', 35, '23571 Alize Prairie Suite 093', 'Alyshafurt', '+1.214.868.8416', 'zcrist@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'DEcNnYxs43', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(36, 'Chelsea Erdman', 'Klein', 48, '897 Ledner Courts Suite 747', 'New Hilmafort', '(612) 534-7905', 'obradtke@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'IWAR9xjDYA', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(37, 'Greta Berge', 'Dooley', 27, '45911 Melissa Flats Apt. 512', 'Herzogmouth', '(432) 848-9057', 'adelbert98@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'jm9Nppb0KX', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(38, 'Iva Reichel', 'Wolf', 86, '466 Marks Station', 'Brantstad', '385.381.4708', 'ugutmann@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'lBLI9cuxOP', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(39, 'Dr. Hermann Wilderman', 'Auer', 32, '478 Kovacek Drive Suite 536', 'New Armand', '+1 (256) 319-4902', 'towne.otilia@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'DztL5F4ndf', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(40, 'Nicklaus Considine', 'Weissnat', 78, '18342 Moen Gateway Apt. 005', 'New Alivia', '+1-804-872-9452', 'antone.langworth@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'A0GJi45NJ3', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(41, 'Harley Hegmann III', 'Kunde', 88, '455 Federico Highway Apt. 197', 'Brentland', '(951) 340-3901', 'kelvin.hahn@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, 'M96SSXXJ1X', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(42, 'Armani Johns', 'Jacobi', 42, '5781 Rowe Manor Apt. 951', 'New Maribel', '531-682-3960', 'grant90@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, '6UkLo7008Z', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(43, 'Maryam Rosenbaum', 'Medhurst', 75, '1561 Jacky Haven Suite 203', 'Danielside', '+15185583089', 'kihn.gussie@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'rJLUYjf1bL', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(44, 'Kole Block', 'Rau', 59, '6392 Carter Corners Apt. 121', 'Blakestad', '650-236-7802', 'demarco74@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 1, 'hfqGMZ0uU8', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(45, 'Ms. Elda Gutkowski II', 'Koch', 21, '548 Liana Fork', 'Lake Wilsonton', '(682) 508-5255', 'chasity.heaney@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'orlTjuGwwM', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(46, 'Mrs. Beth Hodkiewicz', 'Kohler', 50, '110 Kemmer Mountains Suite 326', 'Lake Daniella', '469-999-3768', 'idoyle@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 4, '42At7zL2ob', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(47, 'Mr. Wyatt Cruickshank IV', 'Deckow', 25, '4661 Moore Grove Suite 611', 'Lake Sanford', '1-564-789-7203', 'dean48@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'D5eyafDmgi', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(48, 'Dr. Corrine Berge Jr.', 'Homenick', 71, '75241 Jada Trail Suite 672', 'Lake Aracelifurt', '1-865-446-0934', 'amalia12@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'HMaRp640sS', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(49, 'Dillon Jerde', 'Heidenreich', 81, '68684 O\'Hara Harbor', 'South Elsachester', '(463) 542-9844', 'iliana.streich@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'i0RyfXrj8N', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(50, 'Laney Connelly', 'Skiles', 35, '978 Kris Shoal Apt. 195', 'Lake Karelleburgh', '662-364-9565', 'white.lauren@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, 'bg6ifD2qWr', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(51, 'Geovany Haley', 'Hill', 46, '92992 Anais Pine', 'Susannaborough', '+1.678.439.9065', 'jarrett15@example.com', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 5, '38VCcjfq96', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(52, 'Lucinda Ernser', 'Mohr', 48, '400 Adriana Path', 'Chadrickburgh', '831-390-5812', 'ncartwright@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'jo95rZug4F', '2024-10-28 16:05:01', '2024-10-28 16:05:01'),
(53, 'Ms. Tyra Koch', 'Anderson', 61, '23201 Ervin Rapid Suite 375', 'Delbertfort', '+1-860-736-9831', 'gerson50@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'lnpXDm6lOx', '2024-10-28 16:05:02', '2024-10-28 16:05:02'),
(54, 'Bette Harris', 'Aufderhar', 35, '311 Toy Courts Apt. 160', 'Meaghanstad', '832.948.4028', 'conor.kub@example.net', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 2, 'nly5D4hiIt', '2024-10-28 16:05:02', '2024-10-28 16:05:02'),
(55, 'Chasity Fay', 'Rath', 24, '476 Fritsch Shoal Suite 388', 'Markschester', '+14632478383', 'lane60@example.org', '2024-10-28 16:05:01', '$2y$12$SEhO1EztSA34Uc.sgGo/HuoWVhmVHY0jKqsfJdk.KG18ZtHV3TJPO', 'empresa', 3, 'G4cgJu5mrt', '2024-10-28 16:05:02', '2024-10-28 16:05:02'),
(56, 'Sara', 'Martin', 34, 'Madrid 4', 'Ciudad Real', '9764312786', 'sara@correo.es', '2024-10-29 14:00:03', '$2y$12$NH3ErClTl0iWjdT3tYwf/uYvs1oby98POaHk/CsG85s0E5TC3PmQO', 'asistente', 7, NULL, '2024-10-29 14:00:04', '2024-10-29 14:00:04'),
(57, 'Norma', 'Sanz', 32, 'Ronda 3', 'Toledo', '654890765', 'norma@correo.es', NULL, '$2y$12$qAypaim3HLw7kkJRpr.abeOK9Ae8sDRh4F7a4oIyoXRBtkNPGROge', 'asistente', 7, NULL, '2024-11-03 17:01:24', '2024-11-03 17:01:24'),
(58, 'Rosa', 'españa', 43, 'Malabar 2', 'Toledo', '94326789', 'rosa@correo.es', NULL, '$2y$12$hGixAzBVs08kkrAQRA//7.bI5BekZ1kvGqyooc3VezSsxP/kWOYDO', 'asistente', 7, NULL, '2024-11-06 09:28:46', '2024-11-06 09:28:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventos_categoria_id_foreign` (`categoria_id`),
  ADD KEY `eventos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiencias_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripcions_user_id_foreign` (`user_id`),
  ADD KEY `inscripcions_evento_id_foreign` (`evento_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_empresa_id_foreign` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `eventos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD CONSTRAINT `experiencias_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD CONSTRAINT `inscripcions_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inscripcions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
