<?php
include ("admin/conexion/conexion.php");

$cont=1;
while($cont<129){
	$cont;
	mysql_query("INSERT INTO pf_posicion_cancha (jugador) VALUES ($cont)", $conexion);
	$cont++;
}

?>