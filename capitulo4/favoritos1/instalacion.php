<?php
//CREAR UNA TABLA DE FAVORITOS-----------------------------------------------------------
//Conexion---------------------------------
$conexion =  new PDO('sqlite:favoritos.sqlite');
$consulta =' 

CREATE TABLE favoritos(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
titulo Char (40) Not Null,
direccion Char (100) Not Null,
categoria Char (40),
comentario Char (200),
valoracion Int
);';

//Insertar contenido en la tabla--------------------
$conexion = $conexion -> exec($consulta);
//Cerrar la conexion---------------------------------

//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS--------------------------------------
//Establecer
$conexion =new PDO('sqlite:favoritos.sqlite');
//Preparar
 $consulta= $conexion -> exec("INSERT INTO favoritos ('usuario','contrasena','titulo','direccion','categoria','comentario','valoracion') VALUES ('jocarsa','jocarsa','Google','http://www.google.com','Tecnologia','Este es un buscador muy famoso',10)");
 $consulta= $conexion -> exec("INSERT INTO favoritos ('usuario','contrasena','titulo','direccion','categoria','comentario','valoracion') VALUES ('jocars','jocars','opera','http://www.opera.com','Tecnologia','Este es un buscador muy famoso',10)");


//Insertar


//Cerrar

//CREAR UNA TABLA DE USUARIOS------------------------------------------------------------
//Conexion---------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');
//Crear tabla---------------------------------
$consulta = '

CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40) Not Null,
apellido Char(100) Not Null,
edad Int,
permisos Int
);';

//Insertar contenido en la tabla--------------
$conexion = $conexion -> exec($consulta);
//Cerrar la conexion--------------------------

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
$conexion= new PDO('sqlite:favoritos.sqlite');
//Preparar
$insert=  $conexion -> exec("INSERT INTO usuarios ('usuario','contrasena','nombre','apellido','edad','permisos') VALUES ('jocarsa','jocarsa','manuel Vicente','Carratala',32,1)");
$insert=  $conexion -> exec("INSERT INTO usuarios ('usuario','contrasena','nombre','apellido','edad','permisos') VALUES ('jocara','jocara','jose Vicente','Carratala',33,2)");
//Insertar

//$conexion -> exec("INSERT INTO Discos ('Artista','Disco','Anio') VALUES ('maluma','besos',2015)");
//Cerrar



//CREAR UNA TABLA DE LOGS------------------------------------------------------------
//Conexion---------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');
//Crear tabla---------------------------------
$consulta =' 

CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)
);';


//Insertar contenido en la tabla--------------
$conexion = $conexion -> exec($consulta);
//Cerrar la conexion--------------------------

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
$conexion =new PDO('sqlite:favoritos.sqlite');
//Preparar
 $insert= $conexion -> exec("INSERT INTO logs ('utc','anio','mes','dia','hora','minuto','segundo','ip','navegador','usuario','contrasena') VALUES (000000000,2011,02,07,21,03,00,'127.0.0.1','chrome','jocars','jocars')"); 
 $insert= $conexion -> exec("INSERT INTO logs ('utc','anio','mes','dia','hora','minuto','segundo','ip','navegador','usuario','contrasena') VALUES (000011000,2010,05,07,11,03,00,'126.0.0.1','opera','jocrsa','jocrsa')"); 

//Cerrar

?>

