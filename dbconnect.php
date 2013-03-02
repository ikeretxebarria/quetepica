<?php


$link = mysql_connect('sql.byethost1.org','ikeretxe_d','*****');
			   if (!$link)
               {
  					die ('No se puede conectar con la base de datos.' . mysql_error());
  			   }
$bd = mysql_select_db('ikeretxe_c');
function EjecutaSQL($consulta)
 {
   $resultado = mysql_query($consulta);
   return($resultado);
 
 }
function send($text)
{
  echo ($text);

}

?>