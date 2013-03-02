<?php
include("dbconnect.php");


$sSQL = "update problemas set apoyos = apoyos +1 where id = " . $_GET['id'];

EjecutaSQL($sSQL);

?>
<html>
 <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
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
            try {

    $(function() {

    });

  } catch (error) {
    console.error("Your javascript has an error: " + error);
  }
        </script>
    </head>
<div data-role="page" id="page1">
    <div data-role="content">
        
        <div style="">
            <img style="width: 100%; height: 60%" src="gracias<?php echo rand(1,7);?>.jpg">
        </div>
       
       
        <a data-role="button" data-theme="b" href="http://www.hitzekinjolastuz.net/k.html" data-icon="back" data-iconpos="left" data-rel="external">
            ¡Muchas Gracias!
        </a>
    </div>
</div>
</html>
