<?php
$resultado="";
require_once("libreriaPrueba.php");
if(isset($_POST["btnMinimoMC"])){
  $resultado=minimoMultiplo(intval($_POST["txtNum1"]),intval($_POST["txtNum2"]));
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
  </head>
  <body>
    <form  action="prueba.php" method="post">
      <input type="number" name="txtNum1" value="0">
      <br>
      <input type="number" name="txtNum2" value="0">
      <input type="submit" name="btnMinimoMC" value="MMC">
    </form>
    <?php echo $resultado; ?>
  </body>
</html>
