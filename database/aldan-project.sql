-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-02-2018 a las 00:42:14
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
  `img` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  UNIQUE KEY `id_post` (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id_post`, `title`, `description`, `content`, `img`, `date`) VALUES
(1, 'Título del primer artículo', 'Este es el <b>primer</b> articulo en la página de <b>Aldan Project</b>, aquí puedes insertar información relacionada sobre el tema que se habla en el articulo.<br> Incluyendo una <b>imagen</b> que lo acompaña a su lado izquierdo.<br><br> Y aquí hay un <a href=\'#\'>enlace</a>.', '<center>Estás leyendo el <b>contenido</b> de la primera publicación en <a href=\'#\'>Aldan Project</a>', 'blog01.jpg', '2018-02-09'),
(8, 'Publicación creada con el panel', 'Descripción escrita en un <b>textarea</b> en el panel de administrador, el cual puede eliminar, modificar y buscar publicaciones.', '<center>Contenido centrado</center>', 'blog02.jpg', '2018-02-15'),
(9, 'Nueva publicación', 'Probando el número de publicaciones impar.', 'No hay :c', 'blog01.jpg', '2018-02-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'Azumi', '63f9f9e9354fe12b2a8c1ed30615a8b7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
