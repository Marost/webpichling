<?php
include("conexion.php");

$user=$_REQUEST["user"];
$clave=$_REQUEST["pass"];

$usuario=mysql_real_escape_string($user);
$pass=mysql_real_escape_string($clave);

$rst=mysql_query("SELECT * FROM pf_directorio_usuario WHERE usuario='$usuario' AND clave='$pass';", $conexion);
$num_registros=mysql_num_rows($rst);
if($num_registros>0)
{
	$fila=mysql_fetch_array($rst);
	session_start();
	$_SESSION["user-dp"]=$fila["usuario"];
	$_SESSION["user_nombre-dp"]=$fila["nombre"];
	$_SESSION["user_apellido-dp"]=$fila["apellidos"];
	header("Location:../principal.php");
} else {
	header("Location:../index.php?nosesion=2");
}
mysql_close($conexion);

?>