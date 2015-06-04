<?php

$conexion = new PDO('sqlite:prueba.sqlite'); 

$consulta = "UPDATE Discos SET Artista ='Maria Fernanda' WHERE Artista = 'Prueba'";

$conexion = $conexion -> exec($consulta);

$conexion = null;

?>