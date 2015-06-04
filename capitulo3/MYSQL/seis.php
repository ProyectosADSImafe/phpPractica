<?php

$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");

if(!$conexion){
die(mysql_error());
}

mysql_select_db("primerabase",$conexion);

$peticion = mysql_query("SELECT * FROM miprimera ORDER BY Edad DESC");

while($fila = mysql_fetch_array($peticion)){

echo $fila['Nombre'];
echo " ";
echo $fila['Apellido'];
echo " ";
echo $fila['Edad'];
echo " ";
echo $fila['Telefono'];
echo "<br>";


}

mysql_close($conexion);

?>