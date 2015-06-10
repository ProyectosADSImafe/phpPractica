<?php

$_SESSION['usuariotemporal'] = "jocarsa";

$conexion = new PDO('sqlite:database/blogs.sqlite');
$peticion = "SELECT * FROM usuarios WHERE usuario ='".$_SESSION['maria']."';";

$ejecuto = $conexion-> query($peticion);

foreach ($ejecuto as $fila) {

$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['nombre'] = $fila['nombre'];
$_SESSION['apellidouno'] = $fila['apellidouno'];
$_SESSION['apellidodos'] = $fila['apellidodos'];
$_SESSION['titulo'] = $fila['titulo'];
$_SESSION['descripcion'] = $fila['descripcion'];
$_SESSION['foto'] = $fila['foto'];
$_SESSION['webpersonal'] = $fila['webpersonal'];
$_SESSION['email'] = $fila['email'];
$_SESSION['permisos'] = $fila['permisos'];

}



?>
