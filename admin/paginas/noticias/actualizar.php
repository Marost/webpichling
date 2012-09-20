<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$fuente=$_POST["fuente"];
$publicar=$_POST["publicar"];

mysql_query("UPDATE pf_noticias SET titulo_principal='$titulo', contenido='$contenido', fuente='$fuente', publicar=$publicar WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
