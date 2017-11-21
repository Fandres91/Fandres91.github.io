<?php
$servidor="mysql.webcindario.com";
$user="editor";
$pass="fdragon1991";
$bd="editor";

$conexion= mysqli_connect($servidor, $user, $pass, $bd);

if (mysqli_connect_errno()) {
	echo "Fallo la conexion a la BD" . mysqli_connect_error();
}

?>