<?php
session_start();
include("conexion/conexion.php");
include("conexion/verificar_sesion.php");
$usuario=$_SESSION["user-dp"];
$rst_query=mysql_query("SELECT * FROM pf_directorio_usuario WHERE usuario='$usuario'", $conexion);
$fila_query=mysql_fetch_array($rst_query);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Directorio PICHLING FUTBOL</title>
<link href="css/estilo-directorio.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal-directorio.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="cabecera">
	<div id="interior">
    	<div id="cabecera-logo">Directorio PICHLING FUTBOL</div><!--FIN CABECERA LOGO-->
        <div id="cabecera-buscar">
       	  <ul id="MenuBar1" class="MenuBarHorizontal">
        	  <li><a href="principal.php">INICIO</a>       	    </li>
            <li><a href="#">SUBIR</a></li>
            <li><a href="#" class="MenuBarItemSubmenu">USUARIO</a>
              <ul>
<li><a href="datos.php">Datos Personales</a></li>
<li><a href="cambio.php">Cambiar Contrase&ntilde;a</a></li>
              </ul>
            </li>
            <li><a href="conexion/salir.php">CERRAR SESI&Oacute;N</a></li>
       	  </ul>
            <!--<form action="" method="get">
                <input placeholder="Ingresa palabras claves" name="txtbuscar" type="text" id="txtbuscar" size="50">
                <input name="btnbuscar" type="submit" id="btnbuscar" value="Buscar">
            </form>-->
        </div><!--FIN CABECERA BUSCAR-->
    </div><!--FIN INTERIOR-->
</div><!--FIN CABECERA-->

<div id="contenido">
	<div id="interior"><!--FIN MENU IZQ-->
        <div id="contenido-items">
          <p><strong>DATOS PERSONALES</strong></p>
          <p>&nbsp;</p>
          <form action="modulos/cambiar-datos.php" method="post" enctype="multipart/form-data" name="form" id="form">
            <table width="448" border="0" cellspacing="5" cellpadding="5">
              <tr>
                <td width="81"><strong>Nombre:</strong></td>
                <td width="532"><label for="nuevac"></label>
                  <label for="nombre"></label>
                  <span id="sprytextfield1">
                  <input name="nombre" type="text" id="nombre" value="<?php echo $fila_query["nombre"] ?>" size="30">
                  <span class="textfieldRequiredMsg">Ingrese su nombre</span></span></td>
              </tr>
              <tr>
                <td><strong>Apellidos:</strong></td>
                <td><label for="apellidos"></label>
                  <span id="sprytextfield2">
                  <input name="apellidos" type="text" id="apellidos" value="<?php echo $fila_query["apellidos"] ?>" size="30">
                <span class="textfieldRequiredMsg">Ingrese sus apellidos</span></span></td>
              </tr>
              <tr>
                <td><strong>Email:</strong></td>
                <td><label for="email"></label>
                  <span id="sprytextfield3">
                  <input name="email" type="text" id="email" value="<?php echo $fila_query["email"] ?>" size="30">
                <span class="textfieldRequiredMsg">Ingrese su email</span><span class="textfieldInvalidFormatMsg">Email no válido</span></span></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Guardar cambios"></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </form>
          <p>&nbsp;</p>
        </div><!--FIN CONTENIDO ITEMS-->
    </div><!--FIN INTERIOR-->
</div><!--FIN CONTENIDO-->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
</script>
</body>
</html>