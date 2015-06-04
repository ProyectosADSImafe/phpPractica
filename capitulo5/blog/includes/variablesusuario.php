<?php

$_SESSION['usuariotemporal'] = "jocarsa";

$conexion = sqlite_open('database/blogs.db');

$peticion = "SELECT * FROM usuarios WHERE usuario ='".$_SESSION['usuariotemporal']."';";

$ejecuto = sqlite_query($conexion,$peticion);

while ($fila = sqlite_fetch_array($ejecuto)){

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

sqlite_close($conexion);

?>
