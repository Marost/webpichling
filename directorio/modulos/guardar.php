<?php
include ("../conexion/conexion.php");
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set("max_execution_time", 120000);
ini_set("max_input_time", 120000);

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];

//ARCHIVO
if(is_uploaded_file($_FILES['archivo']['tmp_name']))
{ 
	$fileName=$_FILES['archivo']['name'];
	$uploadDir="../archivos/";
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
	$subida=move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadFile);  
	$name;
}
	
if(!$subida){
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:../principal.php?mensaje=2");
}else{
	mysql_query("INSERT INTO pf_directorio_archivos (titulo, archivo, extension) VALUES('$titulo', '$name', '$extension')",$conexion);

	if (mysql_errno()!=0)
	{
		//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
		mysql_close($conexion);
		header("Location:listar.php?mensaje=3");
	} else {
		mysql_close($conexion);
		header("Location:../principal.php?mensaje=1");
	}
}
?>