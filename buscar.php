<?php
  include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="agenda.css">
    <title></title>
  </head>
  <script type="text/javascript">
    function Confirm(){
      var respuesta=confirm("¿Seguro que quiere eliminar a este usuario?");

      if (respuesta==true) {
        return true;
      }else{
        return false;
      }
    }
  </script>
  <body style="background-color: #242424;">

    <div class="container">
      <div class="tabla" align="center">
        <a style="color:white" href="buscarhtml.php"><input type="button" class="button2" value="REGRESAR"></button></a>
        <br>
        <table>
            <td bgcolor=#9548fa>#usuario</td>
            <td bgcolor=#9548fa>Nombre del usuario</td>
            <td bgcolor=#9548fa>Email del usuario</td>
            <td bgcolor=#242424></td>
            <td bgcolor=#242424></td>
      </body>
    </html>

    <?php
      $nombre_usuario=$_REQUEST['nombre'];

      $query = "SELECT id_usuario,nombre_usuario,email_usuario FROM usuarios WHERE nombre_usuario LIKE '%$nombre_usuario%'" ;
      $envio = $conexion->query($query);

      $filas=mysqli_num_rows($envio);
      if ($filas>0) {
      }else {
          header("location: error.php");
      }
        while ($mostrar=mysqli_fetch_array($envio)) {
    ?>
      <tr>
        <td><?php echo $mostrar['id_usuario']; ?></td>
        <td><?php echo $mostrar['nombre_usuario']; ?></td>
        <td><?php echo $mostrar['email_usuario']; ?></td>
        <td><?php echo'<a href="listar.php?nombre_usuario='.$mostrar['nombre_usuario'].'" style="color:white"><button type="button" class="button3" onclick="return Confirm()">';?>Eliminar</button></a></td>
        <td><a style="color:white" href="modificarhtml.php"><button type="button" class="button3">Modificar</button></a></td>
      </tr>
    </div>
    <?php
      }
     ?>
      </table>
    </div>
<br><br>
</body>
</html>
