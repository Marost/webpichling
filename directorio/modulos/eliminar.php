<?php
include ("../conexion/conexion.php");

mysql_query("DELETE FROM pf_directorio_archivos WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:../principal.php?mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:../principal.php?mensaje=3");
}

?>