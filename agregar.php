<?php
  include("conexion.php");

  $nombre_usuario = $_REQUEST['nombre'];
  $email_usuario=$_REQUEST['email'];
  $clave_usuario=$_REQUEST['clave'];

  $query = "INSERT INTO usuarios (nombre_usuario, email_usuario, clave_usuario) VALUES ('$nombre_usuario','$email_usuario','$clave_usuario')";
  $envio = $conexion->query($query);

?>
