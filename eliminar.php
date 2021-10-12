<?php
  include("conexion.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nombre_usuario = $_REQUEST['nombre'];

      $query2 = "SELECT nombre_usuario FROM usuarios WHERE nombre_usuario='$nombre_usuario'";
      $envio2 = $conexion->query($query2);
      $filas2=mysqli_num_rows($envio2);

      if ($filas2>0) {
        $query="DELETE FROM usuarios WHERE nombre_usuario='$nombre_usuario'";
        $envio = $conexion->query($query);
        header("location: cambio2.php");
      }else {
        header("location: error2.php");
      }
     ?>
  </body>
</html>
