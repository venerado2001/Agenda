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
    <link rel="icon" type="image/png" href="icon3.png">
    <title>TP9</title>
  </head>

  <body style="background-color: #242424;">
  <br>
  <h1 style=font-family="arial">Login</h1>
  <div class="wrapper fadeInDown">
    <div id="container">
      <div class="titulo">
        <img src="icon3.png" height="160px" width="173px">
      </div>
      <hr>
      <form method="POST" action="login.php">
        <input type="text" name="email" placeholder="Ingrese el email" required>
        <input type="text" name="clave" placeholder="Ingrese la clave" required>
        <input type="submit" value="Enviar">
        <br>
      </form>
    </div>
  </div>
  </body>
</html>
