<?php
session_start();
include("conexion/conexion.php");
include("conexion/verificar_sesion.php");
$rst_query=mysql_query("SELECT * FROM pf_directorio_archivos WHERE id>0 ORDER BY id DESC", $conexion);
$mensaje=$_REQUEST["mensaje"];
if($mensaje==1){
	$txtmensaje="El archivo se guardo con satisfactoriamente";
}elseif($mensaje==2){
	$txtmensaje="El archivo que esta subiendo es mayor a 2Mb";
}elseif($mensaje==3){
	$txtmensaje="Se produjo un error";
}elseif($mensaje==4){
	$txtmensaje="Se realizo el cambio de contraseña";
}elseif($mensaje==5){
	$txtmensaje="Se realizo el cambio de datos personales";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Directorio PICHLING FUTBOL</title>
<link href="css/estilo-directorio.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal-directorio.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function eliminarRegistro(registro, nombre) {
if(confirm("¿Está seguro de borrar este registro?\n"+nombre)) {
	document.location.href="modulos/eliminar.php?id="+registro;
	}
}
</script>
</head>

<body>
<div id="cabecera">
	<div id="interior">
    	<div id="cabecera-logo">Directorio PICHLING FUTBOL</div><!--FIN CABECERA LOGO-->
        <div id="cabecera-buscar">
       	  <ul id="MenuBar1" class="MenuBarHorizontal">
        	  <li><a href="#">INICIO</a>       	    </li>
              <li><a href="subir.php">SUBIR</a></li>
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
        
          <p><strong>ARCHIVOS SUBIDOS</strong></p>
          <p>&nbsp;</p>
          <strong><p class="texto_rojo"><?php echo $txtmensaje; ?></p></strong>
          <p>&nbsp;</p>
          <table width="930" border="0" cellspacing="0" cellpadding="10">
            <tr class="texto_blanco12-Arial">
              <td width="780" bgcolor="#063D7A"><p><strong>TITULO DEL ARCHIVO</strong></p></td>
              <td width="150" align="center" bgcolor="#063D7A"><p><strong>ACCIONES</strong></p></td>
            </tr>
            
            <?php 
			$a=0;
			while($fila_query=mysql_fetch_array($rst_query)){ 
				if($a % 2){ $color="#fff"; }else{$color="#CDF8F9";}
			?>
            <tr style="background-color:<?php echo $color ?>">
              <td valign="middle"><?php echo $fila_query["titulo"]; ?></td>
              <td align="center" valign="middle">
              <a href="archivos/bajando.php?archivo=<?php echo $fila_query["archivo"]; ?>">
              <img src="images/descargar_16.png" width="16" height="16" alt="Descargar"></a>&nbsp;
              <a href="javascript:;" onClick="eliminarRegistro(<?php echo $fila_query["id"]; ?>, '<?php echo $fila_query["titulo"]; ?>')">
              <img src="images/eliminar_16.png" width="16" height="16" alt="Eliminar"></a></td>
            </tr>
            <?php $a++; } ?>
            
          </table>
          <p>&nbsp;</p>
        </div><!--FIN CONTENIDO ITEMS-->
    </div><!--FIN INTERIOR-->
</div><!--FIN CONTENIDO-->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>