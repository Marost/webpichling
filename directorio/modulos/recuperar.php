<?php
include("../conexion/conexion.php");
$email=$_POST["email"];

$rst_query=mysql_query("SELECT * FROM pf_directorio_usuario WHERE email='$email'", $conexion);
$fila_query=mysql_fetch_array($rst_query);

if($fila_query["email"]==$email){
	$destinatario = $fila_query["email"];
	$asunto = "Recuperacion de Contraseña - DIRECTORIO PICHLING FUTBOL"; 
	$cuerpo = "<html><head><title>Recuperacion de Contraseña - DIRECTORIO PICHLING FUTBOL</title>
	<style type='text/css'>
		body,td,th {color: #000;}
	</style>
	</head>
	<body>
		Recuperacion de Contraseña:<br/><br/>
		<strong>Usuario:</strong> ".$fila_query["usuario"]."<br/>
		<strong>Contraseña:</strong> ".$fila_query["clave"]."<br/>
		No responder este mensaje.		
	</body></html>"; 

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
	$headers .= 'From: <recuperacion@pichlingfutbol.com.pe>' . "\r\n";
	
	mail($destinatario,$asunto,$cuerpo,$headers);
	mysql_close($conexion);
	header("Location:../index.php");
}elseif($fila_query["email"]!=$email){
	header("Location:../recuperar.php?nosesion=1");
}
?>