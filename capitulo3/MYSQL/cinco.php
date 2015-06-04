<?php

$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");

if(!$conexion){

die(mysql_error());

}

mysql_select_db("primerabase",$conexion);

$peticion = mysql_query("SELECT * FROM miprimera WHERE Nombre='maria fernanda'");

while($fila = mysql_fetch_array($peticion))
{
echo $fila['Nombre']. " ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
echo "<br>";
}

mysql_close($conexion);
?>