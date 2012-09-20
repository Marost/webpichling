<?php
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");

// IMAGEN
if($_FILES['archivo']['name']!="")
{
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
}
else
{
	$name=$_POST["foto-actual"];
	$name;
}

//DECLARACION DE VARIABLES
$idfotografo=$_REQUEST["fotografo"];

mysql_query("UPDATE pf_fotografo_foto SET foto='$name' WHERE id=". $_REQUEST["id"].";", $conexion);
	
if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2&fotografo=$idfotografo");
}

?>