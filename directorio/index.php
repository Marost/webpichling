<?php
include("conexion/conexion.php");

	$rst_datos=mysql_query("SELECT * FROM pf_empresa WHERE id=1;", $conexion);
	$fila_datos=mysql_fetch_array($rst_datos);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<meta http-equiv="Window-target" content="_top" >
<title>Iniciar Sesión</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="principal">
	<div class="texto_regresar" id="superior_regresar">Directorio - Pichling Futbol</div><!-- FIN TEXTO REGRESAR -->
    <div id="contenido">
    	<div id="content_login">
        	<div id="img_login">
           	  <img src="../imagenes/logo.png" alt="" width="300" height="165">
        </div><!-- FIN IMAGEN LOGIN -->
            <div id="formulario_login">
<form action="conexion/verificar.php" method="post">
            	<div id="text_login"></div>
                <div id="input_login"><input placeholder="Usuario" name="user" type="text" id="user"></div>
                <div id="espacio_login"></div>
                <div id="text_login"></div>
                <div id="input_login"><input placeholder="Contraseña" name="pass" type="password" id="pass"></div>
                <div id="espacio_login"></div>
                <div id="boton_login"><input name="btn_login" type="image" id="btn_login" src="images/btn_ingresar.jpg"></div>
                <div id="mensaje">
                <?php
					if($_REQUEST["nosesion"]==1)
					{
						echo "Inicie sesión para poder ingresar al Panel";
					} elseif($_REQUEST["nosesion"]==2)
					{
						echo "Usuario o contraseña no son correctos";
					} elseif($_REQUEST["nosesion"]==3)
					{
						echo "Salio correctamente del Panel";
					}
				?>
              </div>
            </form>
            
          </div><!-- FIN FORMULARIO LOGIN -->
          <p align="center"><a href='recuperar.php'>¿Olvidaste tu clave?</a></p>
        </div><!-- FIN CONTENI LOGIN -->
    </div><!-- FIN CONTENIDO -->
</div><!-- FIN PRINCIPAL -->
</body>
</html>