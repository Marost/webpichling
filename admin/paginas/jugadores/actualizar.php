<?php
include ("../../conexion/conexion.php");

function desactivadoCasilla($elemento){
	if($elemento==""){$regresa=0;
	}else{$regresa=$elemento;}
	return $regresa;
}

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
$titulo=$_POST["titulo"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$nombre_completo="$nombre $apellidos";
$fecha_nac=$_POST["fecha_nac"];
$nacionalidad=$_POST["nacionalidad"];
$posicion=$_POST["posicion"];
$perfil=$_POST["perfil"];
$peso=$_POST["peso"];
$estatura=$_POST["estatura"];
$club_actual=$_POST["club_actual"];
/*$goles_primera=$_POST["goles_primera"];
$partidos_primera=$_POST["partidos_primera"];*/
$seleccion=$_POST["seleccion"];
$video=$_POST["video"];
//$caracteristicas=$_POST["caracteristicas"];
$club1=$_POST["club1"];
$club2=$_POST["club2"];
$club3=$_POST["club3"];
$club4=$_POST["club4"];
$club5=$_POST["club5"];
$posicion_fija=$_POST["posicion_fija"];
$publicar=$_POST["publicar"];

//-->POSICIONES EN LA CANCHA
$arquero=desactivadoCasilla($_POST["arquero"]);
$lateral_derecho=desactivadoCasilla($_POST["lateral_derecho"]);
$back_central_derecho=desactivadoCasilla($_POST["back_central_derecho"]);
$back_central_izquierdo=desactivadoCasilla($_POST["back_central_izquierdo"]);
$lateral_izquierdo=desactivadoCasilla($_POST["lateral_izquierdo"]);
$volante_derecho=desactivadoCasilla($_POST["volante_derecho"]);
$volante_central=desactivadoCasilla($_POST["volante_central"]);
$volante_izquierdo=desactivadoCasilla($_POST["volante_izquierdo"]);
$extremo_derecho=desactivadoCasilla($_POST["extremo_derecho"]);
$delantero=desactivadoCasilla($_POST["delantero"]);
$extremo_izquierdo=desactivadoCasilla($_POST["extremo_izquierdo"]);


mysql_query("UPDATE pf_jugadores SET titulo='$titulo', 
nombre='$nombre', 
apellidos='$apellidos', 
nombre_completo='$nombre_completo', 
fecha_nac='$fecha_nac', 
nacionalidad='$nacionalidad', 
posicion='$posicion',
perfil='$perfil',
peso='$peso', 
estatura='$estatura', 
club_actual='$club_actual', 
seleccion='$seleccion', 
video='$video', 
club1='$club1',
club2='$club2', 
club3='$club3', 
club4='$club4', 
club5='$club5', 
posicion_fija=$posicion_fija, 
publicar=$publicar, 
imagen='$name' WHERE id=".$_REQUEST["id"].";",$conexion);

mysql_query("UPDATE pf_posicion_cancha SET 
arquero=$arquero,
lateral_derecho=$lateral_derecho,
back_central_derecho=$back_central_derecho,
back_central_izquierdo=$back_central_izquierdo,
lateral_izquierdo=$lateral_izquierdo,
volante_derecho=$volante_derecho,
volante_central=$volante_central,
volante_izquierdo=$volante_izquierdo,
extremo_derecho=$extremo_derecho,
delantero=$delantero,
extremo_izquierdo=$extremo_izquierdo WHERE jugador=".$_REQUEST["id"]."", $conexion);


if (mysql_errno()!=0)
{
	//echo $txt_categoria;
	//echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
