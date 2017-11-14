<?php
require('conexion.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $POST['comentario'];

$insert = "INSERT INTO email (nombre, email, comentario) VALUES ('$nombre', '$email', '$comentario')";
$resultado = mysqli_connect($conexion, $insert);

echo 1;

?>