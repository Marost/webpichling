<?php
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$fotografo=$_POST["fotografo"];

mysql_query("INSERT INTO pf_fotografo (nombre_completo) VALUES('$fotografo');",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=1");
}else{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>