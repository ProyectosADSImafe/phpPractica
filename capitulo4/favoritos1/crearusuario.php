<?php

session_start();

$contador = 0;

//Obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad= $_POST['edad'];


//Comprobar si el usuario existe conectandome a la base de datos


$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta = "SELECT * FROM usuarios";

$resultado = $conexion -> query($consulta);

foreach ($resultado as $fila) {

if($fila['usuario'] == $usuario){

$contador++;

}else{}

}



if($contador == 0){
//conexion
$conexion = new PDO('sqlite:favoritos.sqlite');
//consulta
/*Privilegios son:
1=administrador
2=controlador
3=usuario registrado
4=usuario invitado

*/

$consulta ="INSERT INTO usuarios VALUES('$usuario','$contrasena','$nombre','$apellido','$edad',3)";



//ejecutar
$resultado =$conexion -> exec($consulta);

//cerrar

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=gestionusuarios.php">
	</head>
</html>

';
}
else{echo "El nombre de usuario que has elegido ya existe. Elige otro";}
?>
