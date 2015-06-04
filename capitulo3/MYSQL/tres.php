<?php

$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");


if(!$conexion){

die ("No se ha podido conectar por la siguiente razon: ".mysql_error());
}


mysql_select_db("primerabase",$conexion);


mysql_query("INSERT INTO miprimera (Nombre, Apellido, Edad, Telefono)
VALUES ('Jose Vicente','Carratala',32,'000001')");


mysql_query("INSERT INTO miprimera (Nombre, Apellido, Edad, Telefono)
VALUES ('maria fernanda','sogamoso',32,'000001')"); 

mysql_close($conexion);

?>
