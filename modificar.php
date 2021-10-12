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
      $id_usuario=$_REQUEST['id'];
      $email_usuario = $_REQUEST['email'];
      $clave_usuario= $_REQUEST['clave'];

      $query2 = "SELECT id_usuario FROM usuarios WHERE id_usuario='$id_usuario'";
      $envio2 = $conexion->query($query2);
      $filas2=mysqli_num_rows($envio2);

      if ($filas2>0) {
        $query3="UPDATE usuarios SET email_usuario='$email_usuario', clave_usuario='$clave_usuario' WHERE id_usuario='$id_usuario'";
        $envio3 = $conexion->query($query3);
        header("location:cambio.php");
      }else {
          header("location: modificarhtml.php");
      }

     ?>
  </body>
</html>
>
