<?php
include ("../../conexion/conexion.php");

$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$idioma=$_POST["idioma"];
$publicar=$_POST["publicar"];

mysql_query("UPDATE ub_inicio SET titulo='".addslashes($titulo)."', contenido='".addslashes($contenido)."', idioma=$idioma, publicar=$publicar WHERE id=". $_REQUEST["id"].";", $conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
