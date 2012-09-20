<?php
//CONEXION CON EL SERVIDOR
$conexion=mysql_connect("Localhost","admin","admin@123");
//$conexion=mysql_connect("Localhost","pfutbol_admin","admin@123");
//$conexion=mysql_connect("Localhost","marostd3_admin","admin@123");

//SELECCION DE LA BASE DE DATOS
mysql_select_db("pichling_futbol",$conexion);
//mysql_select_db("pfutbol_admin",$conexion);
//mysql_select_db("marostd3_pichling",$conexion);
?>