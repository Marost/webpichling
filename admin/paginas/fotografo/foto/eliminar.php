<?php
include ("../../../conexion/conexion.php");

$idfotografo=$_REQUEST["fotografo"];

mysql_query("DELETE FROM pf_fotografo_foto WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=6&fotografo=$idfotografo");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3&fotografo=$idfotografo");
}

?>