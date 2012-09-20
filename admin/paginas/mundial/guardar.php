<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$grupo=$_POST["grupo"];

mysql_query("INSERT INTO pf_mundial_post (titulo, contenido, grupo, autor) VALUES('$titulo', '$contenido', $grupo, $autor);",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>