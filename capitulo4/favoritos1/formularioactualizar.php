<?php

session_start();

//Recupero variables

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta = "SELECT * FROM favoritos WHERE titulo='".$titulo."' and direccion='".$direccion."' and categoria='".$categoria."' and comentario='".$comentario."'and  valoracion='".$valoracion."'";

$resul= $conexion -> query($consulta);

echo"

<table border=1 width=100%>
<tr>
	<td>Usuario</td>
	<td>clave</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>edad</td>
	<td></td>
</tr>

";

foreach ($resul as $fila) {

echo"

<tr><form action='actualizarfavorito.php' method='post'>
	<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
	<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>
	<td>
	<select name='categoria'>
		<option value='salud'>Salud</option>
		<option value='trabajo'>Trabajo</option>
		<option value='hobby'>Hobby</option>
		<option value='personal'>Personal</option>
		<option value='otros'>Otros</option>
		<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option>
	</select>
	</td>
	<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
	<td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td><td><input type='submit'</td>
	</form>
</tr>

";

}

echo "</table>";

$_SESSION['titulo'] = $titulo;
$conexion= null;


?>
