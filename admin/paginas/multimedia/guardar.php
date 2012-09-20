<?php
include ("../../conexion/conexion.php");

$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$menu=$_POST["nombre_menu"];
$idioma=$_POST["idioma"];
$publicar=$_POST["publicar"];

mysql_query("INSERT INTO ub_servicios (nombre_menu, titulo, contenido, idioma, publicar) 
									  VALUES ('".addslashes($menu)."', '".addslashes($titulo)."', '".addslashes($contenido)."', $idioma, $publicar);",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>