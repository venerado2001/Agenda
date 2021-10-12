<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="agenda.css">
    <meta name="viewport" content="width=device, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body style="background-color: #242424;">
  </body>
</html>

<?php

  include("conexion.php");

  $email_usuario=$_REQUEST['email'];
  $clave_usuario=$_REQUEST['clave'];

  $query = "SELECT * FROM usuarios WHERE email_usuario='$email_usuario' AND clave_usuario='$clave_usuario'";
  $envio = $conexion->query($query);
  $filas=mysqli_num_rows($envio);

  if ($filas>0) {
      while ($mostrar=mysqli_fetch_array($envio)) {
        echo '<div class="wrapper2 fadeInDown">
            <div id="container2">
                <br>
                <h2>BIENVENIDO: '.$mostrar['nombre_usuario'].'</h2>
                <a style="color:white" href="agenda.php"><input type="button" class="button5" value="Ir a inicio"></button></a>
            </div>
        </div>';
      }
  }else {
      header("location: loginhtml.php");
  }

?>
