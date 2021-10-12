<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="agenda.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <script type="text/javascript" src="js.js" ></script>
    <title>TP9</title>
  </head>

  <body style="background-color: #242424;">
  <br><br>
  <h1 style=font-family="arial">Inicio</h1>
  <div class="wrapper fadeInDown">
    <div id="container">
      <div class="titulo">
        <img src="icon8.png" height="160px" width="173px">
      </div>
      <hr>
        <a href="agregarhtml.php"><input type="button" value="Agregar"></a>
        <a href="modificarhtml.php"><input type="button" value="Modificar"></a>
        <a href="eliminarhtml.php"><input type="button" value="Eliminar"></a>
        <a href="buscarhtml.php"><input type="button" value="Buscar"></a>
        <br>
        <a href="listar.php"><input type="button" value="Listar"></a>
        <br>
      <div id="formFooter">
      <a style="color:white" href="loginhtml.php"><input type="button" class="button4" value="REGRESAR AL LOGIN"></button></a>
      </div>
    </div>
  </div>
  </body>
</html>
