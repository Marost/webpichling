<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$posicion=$_POST["posicion"];

mysql_query("INSERT INTO pf_posicion_fija (posicion) VALUES('$posicion')",$conexion);

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