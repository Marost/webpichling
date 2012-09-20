<?php
include("conexion.php");

$user=$_REQUEST["user"];
$clave=$_REQUEST["pass"];

$rst=mysql_query("SELECT * FROM pf_usuario WHERE usuario='$user' AND clave='$clave';", $conexion);
$num_registros=mysql_num_rows($rst);
if($num_registros>0)
{
	$fila=mysql_fetch_array($rst);
	session_start();
	$_SESSION["user"]=$fila["usuario"];
	$_SESSION["user_nombre"]=$fila["nombre"];
	$_SESSION["user_apellido"]=$fila["apellidos"];
	header("Location:../principal.php");
} else {
	header("Location:../index.php?nosesion=2");
}
mysql_close($conexion);

?>