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

En el fichero include/dbconnect hay que configurar los parámetros de conexion a la base de datos
En ese mismo fichero hay que incluir el api key de google static maps
