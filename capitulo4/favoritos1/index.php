<?php

session_start();
/*
$_SESSION['usuario'] = "jocarsa";
$_SESSION['contrasena'] = "jocarsa";
*/

if(isset($_SESSION['usuario'])){

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';

}


else {
	echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=formulariologin.php">
	</head>
</html>

';}


?>
