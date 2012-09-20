<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$posicion=$_POST["posicion"];

mysql_query("UPDATE pf_posicion_fija SET posicion='$posicion' WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
