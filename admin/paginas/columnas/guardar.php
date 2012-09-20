<?php
include ("../../conexion/conexion.php");
include ("../../conexion/funciones.php");

//BUSQUEDA DE CATEGORIA
	$id_columnista=$_POST["columnista"];
	$rst_query=mysql_query("SELECT * FROM pf_columnista WHERE id=$id_columnista;", $conexion);
	$fila_query=mysql_fetch_array($rst_query);


//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$idcolumnista=$_POST["columnista"];
$columnista=$fila_query["nombre_completo"];
$tema=$fila_query["tema"];
$fecha = fecha();

mysql_query("INSERT INTO pf_columnas(titulo, contenido, fecha, id_autor, autor, tema) VALUES('$titulo', '$contenido', '$fecha', $idcolumnista, '$columnista', '$tema');",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>