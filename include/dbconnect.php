<?php


$link = mysql_connect('YOUR SERVER','YOUR USER','YOUR PASSWORD');
			   if (!$link)
               {
  					die ('No se puede conectar con la base de datos.' . mysql_error());
  			   }
$bd = mysql_select_db('YOUR DATABASE');
function EjecutaSQL($consulta)
 {
   $resultado = mysql_query($consulta);
   return($resultado);
 
 }
$googlemapsapikey = "YOUR API KEY GOOGLE STATIC MAPS";


?>