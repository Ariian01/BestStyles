<?php

$destino ="Arianmeccia@hotmail.com";
$nombre = $_POST ["nombre"];
$correo = $_POST ["correo"];
$mensaje = $_POST ["mensaje"];
$contenido = "nombre: " . $nombre . "\nCorreo: " . $correo . "\nmensaje: " . 
$mensaje;
mail($destino,"contacto",$contenido);
header("location:contacto.php");

?>
