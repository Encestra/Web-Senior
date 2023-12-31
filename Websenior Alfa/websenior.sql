-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-07-2023 a las 20:21:12
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `websenior`
CREATE DATABASE WEBSENIOR;
USE WEBSENIOR;

--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `imagen` blob,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `usuario`, `imagen`, `correo`, `telefono`) VALUES
(1, 'jos', 0x433a77616d703634096d70706870353039432e746d70, 'Mi correo esdsf', '4545454545'),
(2, 'jos', 0x433a77616d703634096d70706870333236432e746d70, 'Mi correo esasdasd', '666666666'),
(3, 'marco', 0x433a77616d703634096d70706870374436392e746d70, 'asdasdas@gmail.com', '-5554454544'),
(4, 'jos', 0x433a77616d703634096d70706870453244462e746d70, 'loasd@Hotmail.com', '4454545454');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dudas`
--

DROP TABLE IF EXISTS `dudas`;
CREATE TABLE IF NOT EXISTS `dudas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `texto` varchar(255) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `dudas`
--

INSERT INTO `dudas` (`id`, `texto`, `usuario`) VALUES
(1, 'holiwixd', 'jos'),
(2, 'holiwi me va a pasar?', 'marco'),
(3, '', 'marco69');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_users`
--

DROP TABLE IF EXISTS `login_users`;
CREATE TABLE IF NOT EXISTS `login_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(40) NOT NULL,
  `Contrasena` varbinary(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `login_users`
--

INSERT INTO `login_users` (`id`, `Usuario`, `Contrasena`) VALUES
(14, 'MARCO69', 0x24327924313024312e3947435568753457663735546f386c6a5a74384f633037425a59433342366f774d776353356932624d3472716248682f363875),
(11, 'marco', 0x24327924313024727433476e6d54523573646e626f3467562f3241552e77666f5931686c4b71753039713649364e306a306879463364546d47414e75),
(6, 'jos', 0x243279243130244c704c51344768666c5175434364755350767369514f43426557652e417349794e4b5070694869665751636e48777755515637552e),
(10, 'qwe', 0x24327924313024563932762e67416a6a652f6b4b774a796c446c65762e53564746304178526c3347627167724e68514e7031344f43724b446564722e),
(9, 'ts', 0x2432792431302468776c7069524f69522f3971545a6948756835624b2e67544e6765735a363251536b7549326d786541675075566d4744633665766d),
(12, 'enrique', 0x24327924313024744663572e6e6358742e585446493930714c3649454f4950476b493756396b4b536662442e6e6b594171457379676d417856423643),
(13, 'luis', 0x243279243130246f5147593852344d53444254492e542e4d39766b332e72414f2e2e6542377348315641657557784d692e7165625436366a6250452e),
(15, 'er', 0x243279243130247537646155537070322e70326e722f6f327a44536f656d69374b36643336574b4b577254756432367a6b513475346838766f675175);
COMMIT;

-- ALTER TABLE PARA EL REGISTRO DE HABILIDAD EN LA TABLA DE USUARIOS
ALTER TABLE login_users
ADD COLUMN Habilidad varchar(20);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
