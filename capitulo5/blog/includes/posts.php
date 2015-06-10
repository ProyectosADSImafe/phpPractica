
<?php

$conexion = new PDO('sqlite:database/blogs.sqlite');

$peticion = "SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC;";

$ejecucion = $conexion$ ->query($peticion);

foreach ($ejecucion as $fila) {
echo "
<article>
						<div id='logov2b' style='background:url(\"photo/".$fila['imagen'].".jpg\");'></div>
						<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
						<h3>".$fila['titulo']."</h3>
						<h4>".$fila['subtitulo']."</h4>
						<p>".$fila['texto']."</p>
						<br/><a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a><br/>
						Modificar<br/>
					</article>
";

}

sqlite_close($conexion);

?>





<!--Esta es una plantilla de articulo
<article>
						<div id="logov2b"></div>
						<time>2011-01-31</time>
						<h3>De nuevo en Austria!</h3>
						<h4>Grabación de nuevos cursos con <span itemprop="contact">Video2Brain</span></h4>
						<p>Durante los próximos 15 dias estaré en Graz grabando dos cursos para Video2Brain: HTML5 y CSS3, y Creación de Aplicaciones Web 2.0 con PHP.</p>
					</article>

					-->
