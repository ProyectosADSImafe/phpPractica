<?php

session_start();

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$usuariolog = $_SESSION['usuario'];
$contrasenalog = $_SESSION['contrasena'];

@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

//Conexion

$conexion = new PDO('sqlite:favoritos.sqlite');

//Consulta

$consulta =" INSERT INTO logs VALUES ('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog')";


//Ejecuto

$conexion = $conexion -> exec($consulta);
//Cierro

echo "Pulsa <a href='verlogs.php'>AQUI</a> para volver a las visitas de la pagina<br/>";

?>
