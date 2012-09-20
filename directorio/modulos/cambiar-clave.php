<?php
session_start();
include("../conexion/conexion.php");

//DECLARACION DE VARIABLES
$usuario=$_SESSION["user-dp"];
$clave=$_POST["rnuevac"];

mysql_query("UPDATE pf_directorio_usuario SET clave='$clave' WHERE usuario='$usuario' ", $conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=3");
} else {
	mysql_close($conexion);
	header("Location:../principal.php?mensaje=4");
}

?>