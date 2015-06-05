<html>
	<body>
	<table border=1 width=100%>
	<tr>
	<td>
		<form action="login.php" method="post">
		<input type="text" name="usuario" value="introduce aqui tu nombre" width=50%></td>
		</tr>
		<tr>
		<td>
		<input type="text" name="contrasena" value="introduce aqui tu clave" width=50%></td>
		</tr>
		<tr>
		<td>
			<input type="submit"></td>
			</tr>
		</form>
		</table>
		No eres usuario todavia? Pues pulsa <a href="formularioaltausuario.php">AQUI</a>
	</body>
</html>

<?php


echo "<br/>ALgunos links que quizas te puedan interesar";

$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta = "SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 3;";

$resultado = $conexion -> query($consulta);

echo "

<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td></td>
<td></td>
</tr>

";

foreach ($resultado as $fila) {

echo "<tr><td>".$fila['titulo']."</td><td>'".$fila['direccion']."'>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td>";
}


echo "</table>";


?>
