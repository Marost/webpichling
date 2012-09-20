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
<title>Directorio - Recuperar contraseña</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
<form action="modulos/recuperar.php" method="post">
            	<div id="text_login">Ingrese su Email:</div>
                <div id="input_login"><span id="sprytextfield1">
                <input placeholder="Usuario" name="email" type="text" id="email">
    <span class="textfieldRequiredMsg"></span><span class="textfieldInvalidFormatMsg"></span></span></div>
                <div id="espacio_login"></div>
    <div id="espacio_login"></div>
                <div id="boton_login">
                  <input name="button" type="submit" id="button" value="Enviar contraseña">
</div>
                <div id="mensaje">
                <?php
					if($_REQUEST["nosesion"]==1){
						echo "No hay usuario registrado con el email ingresado";
					}
				?>
              </div>
            </form>
            
          </div><!-- FIN FORMULARIO LOGIN -->
        </div><!-- FIN CONTENI LOGIN -->
    </div><!-- FIN CONTENIDO -->
</div><!-- FIN PRINCIPAL -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
</script>
</body>
</html>