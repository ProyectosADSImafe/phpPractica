<?php

$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");

if(!$conexion){
die ("No he podido conectar por la siguiente razon: ".mysql_error());
}

mysql_select_db("primerabase",$conexion);

mysql_query("INSERT INTO miprimera (Nombre, Apellido, Edad, Telefono)
VALUES ('Marta','Lopez',14,'5400001')");

mysql_close($conexion);

?>