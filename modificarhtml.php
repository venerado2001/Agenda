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
    <title>Modificar</title>
  </head>

  <body style="background-color: #242424;">
  <br>
  <h1 style=font-family="arial">Modificar</h1>
  <div class="wrapper fadeInDown">
    <div id="container">
      <div class="titulo">
        <img src="icon6.png" height="160px" width="173px">
      </div>
      <hr>
      <form method="POST" action="modificar.php">
        <input type="text" name="id" placeholder="Ingrese la id del usuario" required>
        <br><br>
        <input type="text" name="email" placeholder="Ingrese el nuevo email" required>
        <input type="text" name="clave" placeholder="Ingrese la nueva clave" required>
        <input type="submit" value="Modificar">
      </form>
      <div id="formFooter">
        <a style="color:white" href="agenda.php"><input type="button" name="button" value="VOLVER"></button></a>
      </div>
    </div>
  </div>
</body>
</html>
