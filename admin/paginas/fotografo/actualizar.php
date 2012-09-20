<?php
include ("../../conexion/conexion.php");

//DECLARACION DE VARIABLES
$fotografo=$_POST["fotografo"];

mysql_query("UPDATE pf_fotografo SET nombre_completo='$fotografo' WHERE id=". $_REQUEST["id"].";", $conexion);
	
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