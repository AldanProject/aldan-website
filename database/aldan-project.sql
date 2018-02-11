-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-02-2018 a las 19:59:21
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aldan-project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id_post` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(35) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `img` varchar(15) NOT NULL,
  PRIMARY KEY (`id_post`),
  UNIQUE KEY `id_post` (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id_post`, `title`, `description`, `content`, `img`) VALUES
(1, 'TÃ­tulo del primer artÃ­culo', 'Este es el <b>primer</b> articulo en la pÃ¡gina de <b>Aldan Project</b>, aquÃ­ puedes insertar informaciÃ³n relacionada sobre el tema que se habla en el articulo.<br><br> Incluyendo una <b>imagen</b> que lo acompaÃ±a a su lado izquierdo.<br><br> Y aquÃ­ hay un <a href=\"#\">enlace</a>. Contiene una clase especÃ­fica para el primer articulo mostrado.', '<center>EstÃ¡s leyendo el <b>contenido</b> de la primera publicaciÃ³n en <a href=\"#\">Aldan Project</b>.</center>', 'blog01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
