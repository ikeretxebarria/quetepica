Y a ti, ¿qué te importa?
=======================

Webapp para smartphone para crear el mayor repositorio de retos sociales valorados por la comunidad.

Requiere una base de datos mysql con una tabla:
>CREATE TABLE IF NOT EXISTS `problemas` (
>  `id` int(11) NOT NULL AUTO_INCREMENT,
>  `titulo` varchar(30) NOT NULL,
>  `problema` text NOT NULL,
>  `localizacion` varchar(100) NOT NULL,
>  `categoria` varchar(20) NOT NULL,
>  `apoyos` int(11) NOT NULL,
>  PRIMARY KEY (`id`),
>  KEY `id` (`id`)
> )
