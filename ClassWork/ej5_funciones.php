<?php
  require_once("libreria.php");
  $test = array();
  $test[] = llenarArray('1',"Alejandro","hola2","hola3");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>funciones</title>
  </head>
  <body>
    <?php
    foreach ($test as $key) {
      echo $key["Descripcion"];
      # code...
    }
    ?>
  </body>
</html>
