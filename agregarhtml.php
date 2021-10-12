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
    <title>Agregar</title>
  </head>

  <body style="background-color: #242424;">
  <br>
  <h1 style=font-family="arial">Agregar</h1>
  <div class="wrapper fadeInDown">
    <div id="container">
      <div class="titulo">
        <img src="icon4.png" height="150px" width="163px">
      </div>
      <hr>
      <form method="POST" action="agregar.php">
        <input type="text" name="nombre" placeholder="Ingrese el nombre" required>
        <input type="text" name="email" placeholder="Ingrese el email" required>
        <input type="text" name="clave" placeholder="Ingrese la clave" required>
        <br>
        <input type="submit" value="Agregar">
      </form>
      <div id="formFooter">
        <a style="color:white" href="agenda.php"><input type="button" value="Volver"></button></a>
      </div>
    </div>
  </div>
</body>
</html>
