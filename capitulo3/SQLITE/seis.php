
<?php

$conexion = new PDO('sqlite:prueba.sqlite'); 

$consulta = "DELETE FROM Discos WHERE Artista='maluma'";

$conexion = $conexion -> exec($consulta);

$conexion=null;


?>