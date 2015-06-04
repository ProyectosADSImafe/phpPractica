<?php

$codigoutc = $_GET['utc'];

$conexion = sqlite_open('../database/blogs.db');

$consulta = "DELETE FROM posts WHERE utc='".$codigoutc."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

?>
