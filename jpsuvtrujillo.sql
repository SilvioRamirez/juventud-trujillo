-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-07-2018 a las 02:22:16
-- Versión del servidor: 5.7.21-1ubuntu1
-- Versión de PHP: 7.2.4-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jpsuvtrujillo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `codigo`, `nombre`, `rif`, `created_at`, `updated_at`) VALUES
(1, '0001', 'Banco Central de Venezuela', 'G200001100', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(2, '0102', 'Banco de Venezuela S.A.C.A. Banco Universal', 'G200099976', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(3, '0104', 'Venezolano de Credito, S.A. Banco Universal', 'J000029709', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(4, '0105', 'Banco Mercantil, C.A. Banco Universal', 'J000029610', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(5, '0108', 'Banco Provincial, S.A. Banco Universal', 'J000029679', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(6, '0114', 'Bancaribe C.A. Banco Universal', 'J000029490', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(7, '0115', 'Banco Exterior C.A. Banco Universal', 'J000029504', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(8, '0116', 'Banco Occidental de Descuento, Banco Universal C.A', 'J300619460', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(9, '0128', 'Banco Caroni C.A. Banco Universal', 'J095048551', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(10, '0134', 'Banesco Banco Universal S.A.C.A.', 'J070133805', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(11, '0137', 'Banco Sofitasa, Banco Universal', 'J090283846', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(12, '0138', 'Banco Plaza, Banco Universal', 'J002970553', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(13, '0146', 'Banco de la Gente Emprendedora C.A', 'J301442040', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(14, '0151', 'BFC Banco Fondo Comun C.A. Banco Universal', 'J000723060', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(15, '0156', '100% Banco, Banco Universal C.A.', 'J085007768', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(16, '0157', 'DelSur Banco Universal C.A.', 'J000797234', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(17, '0163', 'Banco del Tesoro, C.A. Banco Universal', 'G200051876', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(18, '0166', 'Banco Agricola de Venezuela, C.A. Banco Universal', 'G200057955', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(19, '0168', 'Bancrecer, S.A. Banco Microfinanciero', 'J316374173', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(20, '0169', 'Mi Banco, Banco Microfinanciero C.A.', 'J315941023', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(21, '0171', 'Banco Activo, Banco Universal', 'J080066227', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(22, '0172', 'Bancamica, Banco Microfinanciero C.A.', 'J316287599', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(23, '0173', 'Banco Internacional de Desarrollo, C.A. Banco Universal', 'J294640109', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(24, '0174', 'Banplus Banco Universal, C.A', 'J000423032', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(25, '0175', 'Banco Bicentenario del Pueblo de la Clase Obrera, Mujer y Comunas B.U.', 'G200091487', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(26, '0176', 'Novo Banco, S.A. Sucursal Venezuela Banco Universal', 'J308918644', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(27, '0177', 'Banco de la Fuerza Armada Nacional Bolivariana, B.U.', 'G200106573', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(28, '0190', 'Citibank N.A.', 'J000526621', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(29, '0191', 'Banco Nacional de Credito, C.A. Banco Universal', 'J309841327', '2018-07-03 22:15:42', '2018-07-03 22:15:42'),
(30, '0601', 'Instituto Municipal de Credito Popular', 'G200068973', '2018-07-03 22:15:42', '2018-07-03 22:15:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiars`
--

CREATE TABLE `familiars` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula_persona` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentezco` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruccion` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parroquia` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci,
  `centro_votacion` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiario_mision` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(375, '2014_10_12_000000_create_users_table', 1),
(376, '2014_10_12_100000_create_password_resets_table', 1),
(377, '2015_01_20_084450_create_roles_table', 1),
(378, '2015_01_20_084525_create_role_user_table', 1),
(379, '2015_01_24_080208_create_permissions_table', 1),
(380, '2015_01_24_080433_create_permission_role_table', 1),
(381, '2015_12_04_003040_add_special_role_column', 1),
(382, '2017_10_17_170735_create_permission_user_table', 1),
(383, '2018_06_07_100540_create_personas_table', 1),
(384, '2018_06_12_181224_create_familiars_table', 1),
(385, '2018_06_14_031224_create_reps_table', 1),
(386, '2018_06_15_095348_create_bancos_table', 1),
(387, '2018_06_15_130417_create_municipios_table', 1),
(388, '2018_06_15_130611_create_parroquias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_municipio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `id_municipio`, `id_estado`, `municipio`, `created_at`, `updated_at`) VALUES
(1, 'MP. ANDRES BELLO', 'TRUJILLO', 'MP. ANDRES BELLO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(2, 'MP. BOCONO', 'TRUJILLO', 'MP. BOCONO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(3, 'MP. BOLIVAR', 'TRUJILLO', 'MP. BOLIVAR', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(4, 'MP. CANDELARIA', 'TRUJILLO', 'MP. CANDELARIA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(5, 'MP. CARACHE', 'TRUJILLO', 'MP. CARACHE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(6, 'MP. ESCUQUE', 'TRUJILLO', 'MP. ESCUQUE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(7, 'MP. J.F.MARQUEZ C.', 'TRUJILLO', 'MP. J.F.MARQUEZ C.', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(8, 'MP. J.V. CAMPO ELIAS', 'TRUJILLO', 'MP. J.V. CAMPO ELIAS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(9, 'MP. LA CEIBA', 'TRUJILLO', 'MP. LA CEIBA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(10, 'MP. MIRANDA', 'TRUJILLO', 'MP. MIRANDA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(11, 'MP. MONTE CARMELO', 'TRUJILLO', 'MP. MONTE CARMELO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(12, 'MP. MOTATAN', 'TRUJILLO', 'MP. MOTATAN', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(13, 'MP. PAMPAN', 'TRUJILLO', 'MP. PAMPAN', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(14, 'MP. PAMPANITO', 'TRUJILLO', 'MP. PAMPANITO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(15, 'MP. RAFAEL RANGEL', 'TRUJILLO', 'MP. RAFAEL RANGEL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(16, 'MP. S RAFAEL CARVAJAL', 'TRUJILLO', 'MP. S RAFAEL CARVAJAL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(17, 'MP. SUCRE', 'TRUJILLO', 'MP. SUCRE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(18, 'MP. TRUJILLO', 'TRUJILLO', 'MP. TRUJILLO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(19, 'MP. URDANETA', 'TRUJILLO', 'MP. URDANETA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(20, 'MP. VALERA', 'TRUJILLO', 'MP. VALERA', '2018-07-03 22:15:43', '2018-07-03 22:15:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_parroquia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_municipio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parroquia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id`, `id_parroquia`, `id_municipio`, `parroquia`, `created_at`, `updated_at`) VALUES
(1, 'PQ. ARAGUANEY', 'MP. ANDRES BELLO', 'PQ. ARAGUANEY', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(2, 'PQ. EL JAGUITO', 'MP. ANDRES BELLO', 'PQ. EL JAGUITO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(3, 'PQ. LA ESPERANZA', 'MP. ANDRES BELLO', 'PQ. LA ESPERANZA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(4, 'PQ. SANTA ISABEL', 'MP. ANDRES BELLO', 'PQ. SANTA ISABEL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(5, 'PQ. BOCONO', 'MP. BOCONO', 'PQ. BOCONO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(6, 'PQ. EL CARMEN', 'MP. BOCONO', 'PQ. EL CARMEN', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(7, 'PQ. MOSQUEY', 'MP. BOCONO', 'PQ. MOSQUEY', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(8, 'PQ. AYACUCHO', 'MP. BOCONO', 'PQ. AYACUCHO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(9, 'PQ. BURBUSAY', 'MP. BOCONO', 'PQ. BURBUSAY', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(10, 'PQ. GENERAL RIVAS', 'MP. BOCONO', 'PQ. GENERAL RIVAS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(11, 'PQ. GUARAMACAL', 'MP. BOCONO', 'PQ. GUARAMACAL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(12, 'PQ. LA VEGA DE GUARAMACAL', 'MP. BOCONO', 'PQ. LA VEGA DE GUARAMACAL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(13, 'PQ. MONSENOR JAUREGUI', 'MP. BOCONO', 'PQ. MONSENOR JAUREGUI', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(14, 'PQ. RAFAEL RANGEL', 'MP. BOCONO', 'PQ. RAFAEL RANGEL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(15, 'PQ. SAN MIGUEL', 'MP. BOCONO', 'PQ. SAN MIGUEL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(16, 'PQ. SAN JOSE', 'MP. BOCONO', 'PQ. SAN JOSE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(17, 'PQ. SABANA GRANDE', 'MP. BOLIVAR', 'PQ. SABANA GRANDE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(18, 'PQ. CHEREGUE', 'MP. BOLIVAR', 'PQ. CHEREGUE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(19, 'PQ. GRANADOS', 'MP. BOLIVAR', 'PQ. GRANADOS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(20, 'PQ. ARNOLDO GABALDON', 'MP. CANDELARIA', 'PQ. ARNOLDO GABALDON', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(21, 'PQ. BOLIVIA', 'MP. CANDELARIA', 'PQ. BOLIVIA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(22, 'PQ. CARRILLO', 'MP. CANDELARIA', 'PQ. CARRILLO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(23, 'PQ. CEGARRA', 'MP. CANDELARIA', 'PQ. CEGARRA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(24, 'PQ. CHEJENDE', 'MP. CANDELARIA', 'PQ. CHEJENDE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(25, 'PQ. MANUEL SALVADOR ULLOA', 'MP. CANDELARIA', 'PQ. MANUEL SALVADOR ULLOA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(26, 'PQ. SAN JOSE', 'MP. CANDELARIA', 'PQ. SAN JOSE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(27, 'PQ. CARACHE', 'MP. CARACHE', 'PQ. CARACHE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(28, 'PQ. LA CONCEPCION', 'MP. CARACHE', 'PQ. LA CONCEPCION', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(29, 'PQ. CUICAS', 'MP. CARACHE', 'PQ. CUICAS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(30, 'PQ. PANAMERICANA', 'MP. CARACHE', 'PQ. PANAMERICANA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(31, 'PQ. SANTA CRUZ', 'MP. CARACHE', 'PQ. SANTA CRUZ', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(32, 'PQ. ESCUQUE', 'MP. ESCUQUE', 'PQ. ESCUQUE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(33, 'PQ. LA UNION', 'MP. ESCUQUE', 'PQ. LA UNION', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(34, 'PQ. SANTA RITA', 'MP. ESCUQUE', 'PQ. SANTA RITA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(35, 'PQ. SABANA LIBRE', 'MP. ESCUQUE', 'PQ. SABANA LIBRE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(36, 'PQ. EL SOCORRO', 'MP. J.F.MARQUEZ C.', 'PQ. EL SOCORRO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(37, 'PQ. LOS CAPRICHOS', 'MP. J.F.MARQUEZ C.', 'PQ. LOS CAPRICHOS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(38, 'PQ. ANTONIO JOSE DE SUCRE', 'MP. J.F.MARQUEZ C.', 'PQ. ANTONIO JOSE DE SUCRE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(39, 'PQ. CAMPO ELIAS', 'MP. J.V. CAMPO ELIAS', 'PQ. CAMPO ELIAS', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(40, 'PQ. ARNOLDO GABALDON', 'MP. J.V. CAMPO ELIAS', 'PQ. ARNOLDO GABALDON', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(41, 'PQ. SANTA APOLONIA', 'MP. LA CEIBA', 'PQ. SANTA APOLONIA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(42, 'PQ. EL PROGRESO', 'MP. LA CEIBA', 'PQ. EL PROGRESO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(43, 'PQ. LA CEIBA', 'MP. LA CEIBA', 'PQ. LA CEIBA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(44, 'PQ. TRES DE FEBRERO', 'MP. LA CEIBA', 'PQ. TRES DE FEBRERO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(45, 'PQ. EL DIVIDIVE', 'MP. MIRANDA', 'PQ. EL DIVIDIVE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(46, 'PQ. AGUA SANTA', 'MP. MIRANDA', 'PQ. AGUA SANTA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(47, 'PQ. AGUA CALIENTE', 'MP. MIRANDA', 'PQ. AGUA CALIENTE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(48, 'PQ. EL CENIZO', 'MP. MIRANDA', 'PQ. EL CENIZO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(49, 'PQ. VALERITA', 'MP. MIRANDA', 'PQ. VALERITA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(50, 'PQ. MONTE CARMELO', 'MP. MONTE CARMELO', 'PQ. MONTE CARMELO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(51, 'PQ. BUENA VISTA', 'MP. MONTE CARMELO', 'PQ. BUENA VISTA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(52, 'PQ. STA MARIA DEL HORCON', 'MP. MONTE CARMELO', 'PQ. STA MARIA DEL HORCON', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(53, 'PQ. MOTATAN', 'MP. MOTATAN', 'PQ. MOTATAN', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(54, 'PQ. EL BAÑO', 'MP. MOTATAN', 'PQ. EL BAÑO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(55, 'PQ. JALISCO', 'MP. MOTATAN', 'PQ. JALISCO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(56, 'PQ. PAMPAN', 'MP. PAMPAN', 'PQ. PAMPAN', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(57, 'PQ. FLOR DE PATRIA', 'MP. PAMPAN', 'PQ. FLOR DE PATRIA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(58, 'PQ. LA PAZ', 'MP. PAMPAN', 'PQ. LA PAZ', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(59, 'PQ. SANTA ANA', 'MP. PAMPAN', 'PQ. SANTA ANA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(60, 'PQ. PAMPANITO', 'MP. PAMPANITO', 'PQ. PAMPANITO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(61, 'PQ. LA CONCEPCION', 'MP. PAMPANITO', 'PQ. LA CONCEPCION', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(62, 'PQ. PAMPANITO II', 'MP. PAMPANITO', 'PQ. PAMPANITO II', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(63, 'PQ. BETIJOQUE', 'MP. RAFAEL RANGEL', 'PQ. BETIJOQUE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(64, 'PQ. JOSE G HERNANDEZ', 'MP. RAFAEL RANGEL', 'PQ. JOSE G HERNANDEZ', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(65, 'PQ. LA PUEBLITA', 'MP. RAFAEL RANGEL', 'PQ. LA PUEBLITA', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(66, 'PQ. EL CEDRO', 'MP. RAFAEL RANGEL', 'PQ. EL CEDRO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(67, 'PQ. CARVAJAL', 'MP. S RAFAEL CARVAJAL', 'PQ. CARVAJAL', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(68, 'PQ. CAMPO ALEGRE', 'MP. S RAFAEL CARVAJAL', 'PQ. CAMPO ALEGRE', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(69, 'PQ. ANTONIO N BRICENO', 'MP. S RAFAEL CARVAJAL', 'PQ. ANTONIO N BRICENO', '2018-07-03 22:15:43', '2018-07-03 22:15:43'),
(70, 'PQ. JOSE LEONARDO SUAREZ', 'MP. S RAFAEL CARVAJAL', 'PQ. JOSE LEONARDO SUAREZ', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(71, 'PQ. SABANA DE MENDOZA', 'MP. SUCRE', 'PQ. SABANA DE MENDOZA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(72, 'PQ. JUNIN', 'MP. SUCRE', 'PQ. JUNIN', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(73, 'PQ. VALMORE RODRIGUEZ', 'MP. SUCRE', 'PQ. VALMORE RODRIGUEZ', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(74, 'PQ. EL PARAISO', 'MP. SUCRE', 'PQ. EL PARAISO', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(75, 'PQ. ANDRES LINARES', 'MP. TRUJILLO', 'PQ. ANDRES LINARES', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(76, 'PQ. CHIQUINQUIRA', 'MP. TRUJILLO', 'PQ. CHIQUINQUIRA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(77, 'PQ. CRISTOBAL MENDOZA', 'MP. TRUJILLO', 'PQ. CRISTOBAL MENDOZA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(78, 'PQ. CRUZ CARRILLO', 'MP. TRUJILLO', 'PQ. CRUZ CARRILLO', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(79, 'PQ. MATRIZ', 'MP. TRUJILLO', 'PQ. MATRIZ', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(80, 'PQ. MONSENOR CARRILLO', 'MP. TRUJILLO', 'PQ. MONSENOR CARRILLO', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(81, 'PQ. TRES ESQUINAS', 'MP. TRUJILLO', 'PQ. TRES ESQUINAS', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(82, 'PQ. CABIMBU', 'MP. URDANETA', 'PQ. CABIMBU', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(83, 'PQ. JAJO', 'MP. URDANETA', 'PQ. JAJO', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(84, 'PQ. LA MESA', 'MP. URDANETA', 'PQ. LA MESA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(85, 'PQ. SANTIAGO', 'MP. URDANETA', 'PQ. SANTIAGO', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(86, 'PQ. TUNAME', 'MP. URDANETA', 'PQ. TUNAME', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(87, 'PQ. LA QUEBRADA', 'MP. URDANETA', 'PQ. LA QUEBRADA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(88, 'PQ. JUAN IGNACIO MONTILLA', 'MP. VALERA', 'PQ. JUAN IGNACIO MONTILLA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(89, 'PQ. LA BEATRIZ', 'MP. VALERA', 'PQ. LA BEATRIZ', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(90, 'PQ. LA PUERTA', 'MP. VALERA', 'PQ. LA PUERTA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(91, 'PQ. MENDOZA', 'MP. VALERA', 'PQ. MENDOZA', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(92, 'PQ. MERCEDES DIAZ', 'MP. VALERA', 'PQ. MERCEDES DIAZ', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(93, 'PQ. SAN LUIS', 'MP. VALERA', 'PQ. SAN LUIS', '2018-07-03 22:15:44', '2018-07-03 22:15:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navegar usuarios', 'users.index', 'Lista y navega todos los usuarios del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(2, 'Ver detalle de usuario', 'users.show', 'Ver en detalle cada usuario del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(3, 'Edición usuarios', 'users.edit', 'Editar cualquier dato de un usuario del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(4, 'Eliminar usuario', 'users.destroy', 'Eliminar cualquier usuario del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(5, 'Navegar roles', 'roles.index', 'Lista y navega todos los roles del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(6, 'Ver detalle de rol', 'roles.show', 'Ver en detalle cada rol del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(7, 'Edición roles', 'roles.edit', 'Editar cualquier dato de un rol del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(8, 'Creación roles', 'roles.create', 'Crear cualquier dato de un rol del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(9, 'Eliminar rol', 'roles.destroy', 'Eliminar cualquier rol del sistema', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(10, 'Buscar personas', 'personas.search', 'Buscar personas en el sistema para carnetizar', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(11, 'Ver persona', 'personas.index', 'Ver datos de la persona a carnetizar', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(12, 'Edición de personas', 'personas.update', 'Editar los datos de la persona ya carnetizada.', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(13, 'Carnetizar personas guardar datos', 'personas.store', 'Guardar nuevos datos de la persona a carnetizar.', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(14, 'Registrar datos en REP', 'reps.create', 'Registrar datos nuevos en el REP Local', '2018-07-03 22:15:44', '2018-07-03 22:15:44'),
(15, 'Importar REP', 'import.reps', 'Importar la base de datos del REP', '2018-07-03 22:15:44', '2018-07-03 22:15:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_nacimiento` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci,
  `c_comunal` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parroquia` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centro_votacion` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizacion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsabilidad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estructura` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocero_comunal` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocero_comunal_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiario_mision` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiario_mision_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embarazo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embarazo_semanas` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vivienda` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vivienda_tipo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deporte` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actividad_extra` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campismo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultura` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultura_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grado_instruccion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liceo_universidad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trabajo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar_trabajo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingreso_mensual` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potencialidad` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terreno` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `votantes_centro` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `votantes_centro_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_centro` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_centro_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsables_ubch` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsables_ubch_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrenamiento_especial` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrenamiento_especial_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leer` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leer_descripcion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_lineas` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_estructura` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recuerda_intervencion` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conoce_lineas_maduro` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuenta` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuenta_tipo` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` longtext COLLATE utf8mb4_unicode_ci,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `cedula`, `f_nacimiento`, `edad`, `direccion`, `c_comunal`, `telefono_1`, `telefono_2`, `parroquia`, `municipio`, `centro_votacion`, `correo`, `facebook`, `instagram`, `twitter`, `whatsapp`, `youtube`, `snapchat`, `organizacion`, `responsabilidad`, `estructura`, `vocero_comunal`, `vocero_comunal_descripcion`, `beneficiario_mision`, `beneficiario_mision_descripcion`, `embarazo`, `embarazo_semanas`, `vivienda`, `vivienda_tipo`, `deporte`, `actividad_extra`, `enfermedad`, `campismo`, `cultura`, `cultura_descripcion`, `grado_instruccion`, `liceo_universidad`, `carrera`, `trabajo`, `lugar_trabajo`, `ingreso_mensual`, `ocupacion`, `potencialidad`, `terreno`, `votantes_centro`, `votantes_centro_descripcion`, `conoce_centro`, `conoce_centro_descripcion`, `responsables_ubch`, `responsables_ubch_descripcion`, `entrenamiento_especial`, `entrenamiento_especial_descripcion`, `leer`, `leer_descripcion`, `conoce_lineas`, `conoce_estructura`, `recuerda_intervencion`, `conoce_lineas_maduro`, `banco`, `cuenta`, `cuenta_tipo`, `imagen`, `uuid`, `qrcode`, `created_at`, `updated_at`) VALUES
(6, 'RAMIREZ MOLINA SILVIO ARTURO', 'V20428781', '2018-07-03', '26', '7333 Sincere Street Apt. 044Westburgh, MN 05179', 'Fray Ignacio Alvarez', '0426-4051567', '0271-2950216', 'PQ. ESCUQUE', 'MP. ESCUQUE', 'CENTRO PREESCOLAR SOPOTOCIENTOS', 'silvio.ramirez.m@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'JPSUV', 'Eco Socialismo', 'Municipal', '0', NULL, '1', 'Jovenes de la Patria', '1', NULL, 'alquilada', 'quinta', 'Ajedrez', 'Jugar', 'Alergias', '1', '1', NULL, 'Basica', 'Universidad Politecnica Territorial del Estado Trujillo Mario Briceño Iragorry', 'Informatica', '0', 'Ministerio del Poder Popular para la Juventud y el Deporte', 'Sueldo minimo', 'Estudiante', 'Mineria', 'No', '1', '589', '1', 'Comuna Manuelita Saenz', '1', 'Poche', '1', '78977', '1', 'Historia', '1', '1', '1', '1', '0108', '0108-1111-11-1111111111', 'virtual', 'data:,', '08279013-35ee-591c-b8f0-06bb5254dbf8', NULL, '2018-07-03 22:18:22', '2018-07-03 22:18:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', NULL, '2018-07-03 22:15:37', '2018-07-03 22:15:37', 'all-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dispositivo` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultima_conexion` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `cedula`, `telefono`, `municipio`, `email`, `password`, `visitante`, `dispositivo`, `ultima_conexion`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Silvio Ramirez', 'V20428781', '0426-4051567', 'MP. ESCUQUE', 'silvio.ramirez.m@gmail.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', NULL, NULL, NULL, 'TTH6tyTUyGllXiZkHyVzfVJEv0amWsP5VVFxQ94cSa606lbRwluWorYJsEQn', '2018-07-03 22:15:37', '2018-07-03 22:15:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familiars`
--
ALTER TABLE `familiars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `familiars`
--
ALTER TABLE `familiars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
