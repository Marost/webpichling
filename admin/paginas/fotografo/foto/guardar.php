<?php
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

//SUBIR PORTADA
if(is_uploaded_file($_FILES['archivo']['tmp_name']))
{ 
	$fileName=$_FILES['archivo']['name'];
	$uploadDir="../../../../imagenes/fotos/";
	$uploadFile=$uploadDir.$fileName;
	$num = 0;
	$name = $fileName;
	$extension = end(explode('.',$fileName));     
	$onlyName = substr($fileName,0,strlen($fileName)-(strlen($extension)+1));
	while(file_exists($uploadDir.$name))
	{
		$num++;         
		$name = $onlyName."".$num.".".$extension; 
	}
	$uploadFile = $uploadDir.$name; 
	move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadFile);  
	$name;
}

//DECLARACION DE VARIABLES
$idfotografo=$_REQUEST["fotografo"];

mysql_query("INSERT INTO pf_fotografo_foto (foto, fotografo) VALUES('$name', $idfotografo);",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1&fotografo=$idfotografo");
}

?>