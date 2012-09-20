<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$fuente=$_POST["fuente"];
$publicar=$_POST["publicar"];

mysql_query("INSERT INTO pf_noticias (titulo_principal, contenido, fuente, publicar) VALUES('$titulo', '$contenido', '$fuente', $publicar)",$conexion);

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