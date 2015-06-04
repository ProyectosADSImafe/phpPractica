<?php session_start(); 

include "includes/variablesusuario.php";

if (isset($_GET['editando'])){
$editando = $_GET['editando'];}
else{$editando = "no";}

?>
<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>WebLog de Jose Vicente Carratala</title>
		<meta name="description" content="WebLog de Jose Vicente Carratala" />
		<meta name="keywords" content="weblog, blog, Jose Vicente Carratala, diseño, multimedia" />
		<meta http-equiv="refresh" content="500" />
		<link rel=stylesheet href="css/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="cajaheader">

		</div>
		<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
			<header>
				<div id="logo">
					
				</div>
				<div id="tipo">	
				<h1><span itemprop="name"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidouno'] ?></span></h1> - 
				<h2><span itemprop="title"><?php echo $_SESSION['titulo'] ?></span></h2>
				</div>
				<nav>
					<ul>
						<li><a href="index.html?log=new"><canvaas id="iconoinicio" width="50" height="50"></canvas><br />Crea tu propio blog</a></li>
						
					</ul>
				</nav>

			</header>
			<div id="contenido">
				<section id="sobremi">
					<span itemprop="photo"><div id="mifoto" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div><!--<img src="photo/josevicentecarratala.jpg" width=50px height=50px />--></span>
					<h6><?php echo $_SESSION['descripcion'] ?><span itemprop="url"><br/><a href="<?php echo $_SESSION['webpersonal'] ?>"><?php echo $_SESSION['webpersonal'] ?></a></span></h6> 
				</section>


				<aside id="contacto">
<h3>Contacto</h3>
<form action="php/enviamail.php" method="post">
				<p >Introduce tu nombre</p>
				<input type="text" required name="nombre"/>
				<p >Introduce tu email</p>
				<input type="email" value="ejemplo: usuario@dominio.com" name="email"/>
				<p >Escribe tu mensaje</p>
				<textarea rows=6 name="mensaje"></textarea>
				<input type="submit" value="Enviar">
					

				</form>
				
				</aside>
				<aside id="posts">
				<h5>Posts previos</h5>
					<ul>
						<li><a href=""><time>2011-01-01</time> / Feliz Año Nuevo</a></li>
						<li><a href=""><time>2010-12-05</time> / Visita a Video2Brain</a></li>
						<li><a href=""><time>2010-11-05</time> / Fotos de otoño</a></li>
						<li><a href=""><time>2010-08-12</time> / Vacaciones de verano</a></li>
						<li><a href=""><time>2011-01-01</time> / Feliz Año Nuevo</a></li>
						<li><a href=""><time>2010-12-05</time> / Visita a Video2Brain</a></li>
						<li><a href=""><time>2010-11-05</time> / Fotos de otoño</a></li>
						<li><a href=""><time>2010-08-12</time> / Vacaciones de verano</a></li>
						<li><a href=""><time>2011-01-01</time> / Feliz Año Nuevo</a></li>
						<li><a href=""><time>2010-12-05</time> / Visita a Video2Brain</a></li>
						<li><a href=""><time>2010-11-05</time> / Fotos de otoño</a></li>
						<li><a href=""><time>2010-08-12</time> / Vacaciones de verano</a></li>
						<li><a href=""><time>2011-01-01</time> / Feliz Año Nuevo</a></li>
						<li><a href=""><time>2010-12-05</time> / Visita a Video2Brain</a></li>
						<li><a href=""><time>2010-11-05</time> / Fotos de otoño</a></li>
						
					</ul>
				</aside>
				<section>
				<?php if ($editando=="no"){include "includes/crearnuevopost.php"; }?>
					Aqui van los post
					<?php if ($editando=="no"){include "includes/posts.php";}?>
				</section>
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div> <span class="name">Jose Vicente Carratala</span>-<span class="locality">Mislata</span>-<span class="region">Valencia</span>-<span class="postal-code">46920</span>-<span class="country-name">España</span></div>
						<div> <span class="tel">96 000 00 00</span>-<span class="email">info@jocarsa.com</span></div>
					</div>
				
				</h6>
				<script type="text/javascript">
					if(localStorage.pagecount){localStorage.pagecount = Number(localStorage.pagecount)+1;}else{localStorage.pagecount = 1;}
					document.write("Has visitado mi página " + localStorage.pagecount + " veces");
				</script>
				<script type="text/javascript">
					if(sessionStorage.pagecount){sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;}else{sessionStorage.pagecount = 1;}
					document.write("En esta sesión, has visitado mi página :" + sessionStorage.pagecount + " veces");
				</script>
			</footer>
		</div>
	</body>
</html>

<script type="text/javascript">

	var micolor = "White";
	var miotrocolor = "Grey";
	var mitercercolor = "Black";
	var escala = 0.5;

	//Dibujo el icono Sobre Mi
	
	var c=document.getElementById("iconosobreMi");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Contacto

	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Inicio
	
	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(mitercercolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Noticias
	
	var c=document.getElementById("icononoticias");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

</script>
