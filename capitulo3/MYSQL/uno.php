<?php

//conexion de la base de datos
$conexion = mysql_connect("localhost","miusuamafe","miusuamafe");
if(!$conexion){
die('No he podido conectar a  mi base de datos: '.mysql_error());
}
//creacion de la base de datos
if(mysql_query("CREATE DATABASE primerabase",$conexion))
{
echo "Se ha creado la base de datos";
}
else{
echo "No se ha podido crear la base de datos por el siguiente error: ". mysql_error();
}

//Preparo esta peticion

mysql_select_db("primerabase",$conexion);
$sql = "CREATE TABLE miprimera
(
personaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";

//Ejecuto la peticion
mysql_query($sql,$conexion);

//Cerrar la conexion

mysql_close($conexion);

?>