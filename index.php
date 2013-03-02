<!DOCTYPE html>
<html>
<?php
include("dbconnect.php");
$con = mysql_query("select * from problemas");
$markas = "";
while($row=mysql_fetch_array($con))
{
if ($row['categoria']=="salud")
  {
    $eti = "H";
    $color = red;
  }

if ($row['categoria']=="educacion")
  {
    $eti = "E";
    $color = blue;
  
  
  }
  
if ($row['categoria']=="desarrollo")
  {
    $eti = "D";
    $color = yellow;
  }
if ($row['categoria']=="medioambiente")
  {
    $eti = "M";
    $color = green;
  }
if ($row['categoria']=="animales")
  {
    $eti = "H";
    $color = red;
  }
if ($row['categoria']=="social")
  {
    $eti = "S";
    $color = magenta;
   
  }
 $markas = $markas . "&amp;markers=color:" . $color . "%7Ccolor:" . $color . "%7Clabel:" . $eti . "%7C" . $row['localizacion'];

}
?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
       <meta http-equiv="Cache-Control" content="no-cache, private, max-stale=0, post-check=0, pre-check=0,no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="my.js">
        </script>
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->
        <script>
          
           function localiza(){
           if (navigator.geolocation) 
              navigator.geolocation.getCurrentPosition(muestra)   ;       
           
           }
           function muestra(objeto)
           {
            
            document.getElementById("mapa").innerHTML = "<img src='https://maps.googleapis.com/maps/api/staticmap?center=" + objeto.coords.latitude + "," + objeto.coords.longitude + "&amp;zoom=3&amp;size=288x120<?php echo $markas ?>&amp;sensor=false&amp;key=AIzaSyBmH76Ojg_3oiRAJaIx6EMk0hW57LyaBWM' width='288' height='120'  />";
           }
           
         </script>
    </head>
    <body onload="return localiza();">
    
        <!-- Home -->
    
        <div data-role="page" id="page1">
            <div data-role="content">
                <div style="">
                    <img style="width: 40%" src="https://www.flipover.org/assets/flipover_logo_header.png" />
                </div>
                <div id="mapa"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Bilbao, Spain&amp;zoom=3&amp;size=288x120&amp;markers=Madison, WI&amp;sensor=false&amp;key=AIzaSyBmH76Ojg_3oiRAJaIx6EMk0hW57LyaBWM" width="288" height="120" /></div>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    
                   <li data-theme="c">
                        <a href="#social" data-transition="slide">
                            <img src="social.png" alt="" />
                            <h2>Social</h2>
                            <p>Mejora tu sociedad</p>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#animales" data-transition="slide">
                        	<img src="animales.png" alt="" />
                            <h2>Protección animal</h2>
                            <p>Denuncia el maltrato animal</p>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#educacion" data-transition="slide">
                        <img src="educacion.png" alt="" />
                        <h2>Educación</h2>
                        <p>Construye un futuro mejor</p>
                        </a>
                    </li>
                     <li data-theme="c">
                        <a href="#desarrollo" data-transition="slide">
                        <img src="desarrollo.png" alt="" />
                           <h2>
                           	Desarrollo
                           </h2>
                           <p>Progreso sostenible</p>
                        </a>
                    </li>
                     <li data-theme="c">
                        <a href="#medioambiente" data-transition="slide">
                        <img src="medioambiente.png" alt="" />
                        <h2>Medio Ambiente</h2>
                         <p>Protege el medio ambiente</p>
                        </a>
                    </li>
<li data-theme="c"><a href="#salud" data-transition="slide">
                        <img src="salud.png" alt="" />
                        <h2>Salud</h2>
                         <p>¿Qué te gustaría sanar?</p>
                        </a>
                    </li>
                    
                </ul>
                <small><?php
                $con=mysql_query("select count(*) as num, sum(apoyos) as apo from problemas");
                $row=mysql_fetch_array($con);
                echo "<center>" . $row['num'] .  " problemas planteados con " . $row['apo'] . " apoyos. </center>";
                mysql_free_result($con);
                ?></small>
            </div>
        </div>
        
        
        <!--SALUD -->
        
        
        <div data-role="page" id="salud" data-cache="never">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="salud.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altasalud" data-icon="add" data-theme="a">
                    Dinos que te preocupa
                </a>
                <h4><center>o apoya a estos retos</center></h4>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    
                   
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='salud'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta salud -->
     
     <div data-role="page" id="altasalud">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="salud.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Salud
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="salud" name="categoria" />
                </form>
            </div>
            <a href="#salud" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>
   
        
        
        <?php
        
        $con = mysql_query("select * from problemas");
        while($row=mysql_fetch_array($con))
        {
        echo '<div data-role="page" " id="reto' . $row['id'] . '">';
        echo '    <div data-role="content">';
        echo '        <h2>';
        echo utf8_encode($row['titulo']);
        echo'                </h2>';
        echo '        <img src="https://maps.googleapis.com/maps/api/staticmap?center=' . $row['localizacion'] . '&amp;zoom=12&amp;size=288x100&amp;markers=' . $row['localizacion'] . '&amp;sensor=false&amp;key=AIzaSyBmH76Ojg_3oiRAJaIx6EMk0hW57LyaBWM" width="288" height="100" />';
        echo'        <h3>                    Descripción                </h3>';
        echo '<p>' . utf8_encode($row['problema']) . '</p>';
        echo '<small>A ' . $row['apoyos'] . ' personas le importa este proyecto, ¿y a ti?</small>';
        echo '        <form action="importa.php"><input type="hidden" name="id" value="' . $row['id'] . '" /><input type="submit" data-icon="star" data-iconpos="left" value="¡Me importa!" /></form>';
        echo '        <a data-role="button" data-theme="b" href="#page1" data-icon="back" data-iconpos="left">Volver</a></div></div> ';   
        
        }
        
        ?>
        
  
     <!-- animales -->
        
        
        <div data-role="page" id="animales">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="animales.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altaanimales" data-theme="a" data-icon="add">
                    Dinos que te preocupa
                </a>
                <h4><center>o apoya a estos retos</center></h4>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    
                   
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='animales'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta  -->
     
     <div data-role="page" id="altaanimales">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="animales.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Protección animales
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="animales" name="categoria" />
                </form>
            </div>
            <a href="#animales" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>

  
  
  
  
  
  <!-- desarrollo -->
        
        
        <div data-role="page" id="desarrollo">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="desarrollo.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altadesarrollo" data-theme="a" data-icon="add">
                    Dinos que te preocupa
                </a>
                                <h4><center>o apoya a estos retos</center></h4>

                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                                    
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='desarrollo'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta  -->
     
     <div data-role="page" id="altadesarrollo">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="desarrollo.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Desarrollo
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="desarrollo" name="categoria" />
                </form>
            </div>
            <a href="#desarrollo" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>

  

  
  
  
   <!-- <social></social> -->
        
        
        <div data-role="page" id="social">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="social.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altasocial" data-theme="a" data-icon="add">
                    Dinos que te preocupa
                </a>
                                <h4><center>o apoya a estos retos</center></h4>

                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    
                   
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='social'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta  -->
     
     <div data-role="page" id="altasocial">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="social.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Social
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="social" name="categoria" />
                </form>
            </div>
            <a href="#social" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>
  
  
  
   <!-- educacion -->
        
        
        <div data-role="page" id="educacion">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="educacion.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altaeducacion" data-theme="a" data-icon="add">
                    Dinos que te preocupa
                </a>
                                <h4><center>o apoya a estos retos</center></h4>

                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                                      
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='educacion'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta  -->
     
     <div data-role="page" id="altaeducacion">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="educacion.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Educación
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="educacion" name="categoria" />
                </form>
            </div>
            <a href="#educacion" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>
  
  
  
   <!-- medio ambiente -->
        
        
        <div data-role="page" id="medioambiente">
            <div data-role="content">
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <table border="0" width="100%">
                            	<tr>
                            		<td align="left" width="40 %"><img src="https://www.flipover.org/assets/flipover_logo_header.png" alt="" /> </td>
                            		<td width="30 %">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            		<td align="right" width="30 %"><img src="medioambiente.png" alt="" /> </td>
                            	</tr>
                            </table> 
                        </div>
                    </div>
                                    </div>
                <a data-role="button" href="#altamedioambiente" data-theme="a" data-icon="add">
                    Dinos que te preocupa
                </a>
                                <h4><center>o apoya a estos retos</center></h4>

                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                   
                   
                   
                   <?php
                   
                   $con = mysql_query("select * from problemas where categoria='medioambiente'");
                   while($row=mysql_fetch_array($con))
                    {
                      echo '<li data-theme="c"><a href="#reto' . $row['id'] . '" data-transition="slide"><h2>' . utf8_encode($row['titulo']) . '<span class="ui-li-count">' . $row['apoyos'] . '</span></h2><p>' . utf8_encode($row['problema']) . '</p></a></li>';
                    }
                    mysql_free_result($con);
                   ?>
                   </ul>
            </div>
           
		<a href="#page1" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	    </div>
        
     <!-- Alta  -->
     
     <div data-role="page" id="altamedioambiente">
            <div data-role="content">
            <div class="ui-grid-a">
                    <div class="ui-block-a">
                        <div style=" text-align:center">
                            <img style="width: 50%" src="medioambiente.png" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <h1>
                            Medio Ambiente
                        </h1>
                    </div>
                </div>
                <h5>
                    Divulga el problema que a ti te preocupa
                </h5>
                <form action="altaproblema.php" data-rel="external">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea1">
                                Ponle un título corto al problema
                            </label>
                            <input name="titulo" id="titulo" placeholder="" data-mini="true" value="" type="text" />
                           
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textarea2">
                                Describe el problema
                            </label>
                            <textarea name="problema" id="problema" placeholder="">
                            </textarea>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="textinput1">
                                Donde se dá el problema (ciudad, país)
                            </label>
                            <input name="localizacion" id="localizacion" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <input type="submit" data-icon="star" data-iconpos="left" value="Envia tu problema" />
                    <input type="hidden" value="medioambiente" name="categoria" />
                </form>
            </div>
            <a href="#medioambiente" data-transition="slide" data-theme="b" data-role="button" data-icon="back">Volver</a>
	  
        </div>
  
  
        
        
    </body>
</html>
