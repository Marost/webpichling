<?php
include ("../../conexion/conexion.php");

	// IMAGEN
	if($_FILES['file']['name']!="")
	{
		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{ 
			$fileName=$_FILES['file']['name'];
			$uploadDir="../../../imagenes/upload/";
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
			move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);  
			$name;
		}
	}
	else
	{
		$name=$_POST["img-actual"];
		$name;
	}
	
//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$contenido=$_POST["contenido"];
$publicar=$_POST["publicar"];

mysql_query("UPDATE pf_entrevista_mes SET nombre='$nombre', foto='$name', texto_corto='$descripcion', contenido='$contenido', publicar=$publicar WHERE id=".$_REQUEST["id"].";",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
