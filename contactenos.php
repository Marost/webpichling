<?php
include("admin/conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

	$rst_query=mysql_query("SELECT * FROM pf_columnas WHERE id_autor=8 ORDER BY id DESC;", $conexion);
	$rst_query2=mysql_query("SELECT * FROM pf_columnas WHERE id_autor=9 ORDER BY id DESC;", $conexion);
	
	$rst_query3=mysql_query("SELECT * FROM pf_entrevista_mes WHERE id>0 ORDER BY id DESC LIMIT 1;", $conexion);
	$fila_query3=mysql_fetch_array($rst_query3);
	
	//POSICION FIJA
	$rst_query4=mysql_query("SELECT * FROM pf_posicion_fija WHERE id>0 ORDER BY id ASC", $conexion);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: : : PICHLING : : :</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>

<body>
<?php include("superior.php"); ?>
<?php include("frame/menu.php"); ?>
<div id="contenido">
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15" class="barra-izq">&nbsp;</td>
    <td width="950" class="contenido-pasto">
    	
        <div id="panel-izq">
    	  <table width="178" border="0" align="center" cellpadding="0" cellspacing="0">
    	    <tr>
    	      <th align="center" valign="middle"><object id="FlashID9" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="170" height="353">
    	        <param name="movie" value="flash/banner_jugadores.swf" />
    	        <param name="quality" value="high" />
    	        <param name="wmode" value="opaque" />
    	        <param name="swfversion" value="7.0.70.0" />
    	        <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versi&oacute;n m&aacute;s reciente de Flash Player. Elim&iacute;nela si no desea que los usuarios vean el mensaje. -->
    	        <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	        <!-- La siguiente etiqueta object es para navegadores distintos de IE. Oc&uacute;ltela a IE mediante IECC. -->
    	        <!--[if !IE]>-->
    	        <object type="application/x-shockwave-flash" data="flash/banner_jugadores.swf" width="170" height="353">
    	          <!--<![endif]-->
    	          <param name="quality" value="high" />
    	          <param name="wmode" value="opaque" />
    	          <param name="swfversion" value="7.0.70.0" />
    	          <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	          <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
    	          <div>
    	            <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
    	            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
    	            </div>
    	          <!--[if !IE]>-->
    	          </object>
    	        <!--<![endif]-->
  	        </object></th>
  	      </tr>
    	    <tr>
    	      <th align="center" valign="middle">&nbsp;</th>
  	      </tr>
    	    <tr>
    	      <th align="center" valign="middle">&nbsp;</th>
  	      </tr>
    	    <tr>
    	      <td align="center" valign="middle">&nbsp;</td>
  	      </tr>
    	    <tr>
    	      <td align="center" valign="middle">&nbsp;</td>
  	      </tr>
    	    <tr>
    	      <td align="center" valign="middle">&nbsp;</td>
  	      </tr>
  	    </table>
        	
        </div><!--FIN PANEL IZQUIERDA-->
    
        <div id="contenido-izq">
          <div id="entrevista">
       	  <div class="texto-blanco28-ArialBlack" id="cabecera-titulo">
                	DATOS DE LA EMPRESA
                </div><!--FIN CABECERA TITULO -->
                <div id="contenido-entrevista"><!--FIN IMAGEN ENTREVISTA --><!--FIN TEXTO ENTREVISTA DERECHA --><!--FIN TEXTO ENTREVISTA INFERIOR -->
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
                    <tr>
                      <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <iframe id="frame" width="100%" height="350" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="http://maps.google.es/maps/ms?ie=UTF8&amp;hl=es&amp;msa=0&amp;msid=107560951477305101362.0004582b8c3d6a4467eb7&amp;ll=-12.109613,-76.978819&amp;spn=0.007343,0.00912&amp;z=16&amp;output=embed"></iframe>
                            </td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p align="left" class="Estilo9"><u><strong>Oficina:</strong></u></p>
                        <p align="center" class="Estilo11"> <strong>Cristobal de Peralta N&deg; 110 Oficina 1002<br />
                        Santiago de Surco<br />
                        Telefono:   4370297 / 4376855</strong></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td height="25" colspan="2" bgcolor="#660000" class="text_titulo_contacto">William Pichling</td>
                    </tr>
                    <tr>
                      <td width="251" height="25" align="center"><p><span class="text_subtitulo_contacto">Celular:</span> (511)   964106640</p></td>
                      <td width="249" height="25" align="center"><p><span class="text_subtitulo_contacto">Nextel:</span> 421*8538</p></td>
                    </tr>
                    <tr>
                      <td height="60" colspan="2" align="center"><p><a href="mailto:wpichling@speedy.com.pe">wpichling@speedy.com.pe</a><a href="mailto:willam@pichlingfutbol.com"><br />
                        william@pichlingfutbol.com</a><br />
                        <a href="mailto:pichlingw@hotmail.com">pichlingw@hotmail.com</a></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr align="center" bgcolor="#660000">
                      <td height="25" colspan="2" bgcolor="#660000" class="text_titulo_contacto">Javier Alvan</td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><p><span class="text_subtitulo_contacto">Celular:</span> (511) 996491085</p></td>
                      <td height="25" align="center"><p><span class="text_subtitulo_contacto">Nextel:</span> 400*6544</p></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center"><p><a href="mailto:javieralvan@pichlingfutbol.com">javieralvan@pichlingfutbol.com</a></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle" bgcolor="#660000">
                      <td height="25" colspan="2" class="text_titulo_contacto">Oswaldo Martorano - Argentina</td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center"><p><span class="text_subtitulo_contacto">Celular:</span> 005491144703772</p></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center"><p><a href="mailto:omatorano@yahoo.es">omatorano@yahoo.es</a></p></td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr align="center" bgcolor="#660000">
                      <td height="25" colspan="2" class="text_titulo_contacto"> Miguel Villegas Vassallo </td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><p><span class="text_subtitulo_contacto">Celular</span>: (511) 997576775</p></td>
                      <td height="25" align="center"><p><strong>Nextel:</strong> 111*2233</p></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center"><p><a href="mailto:mvillegas@pichlingfutbol.com">mvillegas@pichlingfutbol.com</a></p></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center" bgcolor="#660000" class="text_titulo_contacto"> Giuliano Zuin (USA) </td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="center"><p><strong>Nextel: </strong>126*321626*2</p></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">&nbsp;</td>
                    </tr>
                  </table>
                </div><!--FIN CONTENIDO ENTREVISTA -->
          </div><!--FIN ENTREVISTA --><!--FIN COLUMNISTAS -->
          
          <div class="espacio680"></div><!--FIN COLUMNISTAS --><!--FIN COLUMNISTAS --><!--FIN COLUMNISTAS -->
          
        </div><!--FIN CONTENIDO IZQUIERDA -->
        <div id="contenido-der">
          <table width="242" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="240"><img src="imagenes/menujugadores.gif" alt="" width="242" height="30" /></td>
            </tr>
            
            <?php while($fila_query4=mysql_fetch_array($rst_query4)){ ?>
            <tr>
              <td height="16" align="left" valign="middle">
              
              <div id="CollapsiblePanel<?php echo $fila_query4["id"]; ?>" class="CollapsiblePanel">
                <div class="CollapsiblePanelTab" tabindex="<?php echo $fila_query4["id"]; ?>">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="168"><span class="Estilo12"><?php echo $fila_query4["posicion"] ?></span></td>
                      <td width="66"><img src="imagenes/siluetas/arquerochico.gif" alt="" width="31" height="20" /></td>
                      </tr>
                    </table>
                  </div>
                <div class="CollapsiblePanelContent">
                  <table width="242" border="0" cellpadding="2" cellspacing="2" bgcolor="#D8D7DD">
                    <?php 
					$idposicion=$fila_query4["id"];
					$rst_query5=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=$idposicion and publicar=1 ORDER BY apellidos ASC;", $conexion);
					while ($fila=mysql_fetch_array($rst_query5)){ ?>
                    <tr>
                      <td width="15"><img src="imagenes/pelota.gif" alt="" width="15" height="15" /></td>
                      <td width="206" nowrap="nowrap"><a href="javascript:;" class="texto_lista_jugagores" onclick="MM_openBrWindow('list_jugadores.php?id=<?php echo $fila["id"]; ?>','<?php echo $fila["id"]; ?>','scrollbars=yes,width=654,height=645')"><?php echo $fila["apellidos"]; ?>, <?php echo $fila["nombre"]; ?></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
              </div>
<script type="text/javascript">
var CollapsiblePanel<?php echo $fila_query4["id"]; ?> = new Spry.Widget.CollapsiblePanel("CollapsiblePanel<?php echo $fila_query4["id"]; ?>"); 
</script>
              </td>
			</tr>
            <?php } ?>
            
            
          </table>
        </div>
    </td>
    <td width="15" class="barra-der">&nbsp;</td>
  </tr>
  <tr>
    <td class="barra-izq">&nbsp;</td>
    <td class="contenido-pasto">&nbsp;</td>
    <td class="barra-der">&nbsp;</td>
  </tr>
</table>
</div><!--FIN CONTENIDO -->

<?php include("frame/footer.php") ?>

<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
var MenuBar1 = new Spry.Widget.MenuBar("MenuHorizontal", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>