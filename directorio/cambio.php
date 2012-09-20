<?php
session_start();
include("conexion/conexion.php");
include("conexion/verificar_sesion.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Directorio PICHLING FUTBOL</title>
<link href="css/estilo-directorio.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal-directorio.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
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
          <p><strong>CAMBIAR CONTRASEÑA</strong></p>
          <p>&nbsp;</p>
          <form action="modulos/cambiar-clave.php" method="post" enctype="multipart/form-data" name="form" id="form">
            <table width="648" border="0" cellspacing="5" cellpadding="5">
              <tr>
                <td width="154"><strong>Nueva contraseña</strong></td>
                <td width="459"><label for="nuevac"></label>
                <input name="nuevac" type="password" id="nuevac" size="30"></td>
              </tr>
              <tr>
                <td><strong>Repetir nueva contraseña</strong></td>
                <td><span id="spryconfirm1">
                  <label for="archivo2">
                    <input name="rnuevac" type="password" id="rnuevac" size="30">
                  </label>
                <span class="confirmRequiredMsg">Ingrese la contraseña.</span><span class="confirmInvalidMsg">Las contraseñas no coinciden.</span></span></td>
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
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "nuevac");
</script>
</body>
</html>