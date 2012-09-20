<?php
//CONEXION CON EL SERVIDOR
$conexion=mysql_connect("Localhost","pfutbol_admin","admin@123");

//SELECCION DE LA BASE DE DATOS
mysql_select_db("pfutbol_admin",$conexion);
?>