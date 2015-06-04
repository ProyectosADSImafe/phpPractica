<?php

$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");

mysql_select_db("primerabase",$conexion);

mysql_query("DELETE FROM miprimera WHERE Nombre= 'Marta' AND Apellido= 'Lopez'");

mysql_close($conexion);

?>