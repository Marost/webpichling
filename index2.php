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

<script type="text/javascript" src="highslide/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

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
    	<div id="panel-izq-centro">
        
        	<div id="panel-izq">
    	  <table width="178" border="0" align="center" cellpadding="0" cellspacing="0">
    	    <tr>
    	      <th align="center" valign="middle"><object id="FlashID9" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="158" height="328">
    	        <param name="movie" value="flash/banner_jugadores.swf" />
    	        <param name="quality" value="high" />
    	        <param name="wmode" value="opaque" />
    	        <param name="swfversion" value="7.0.70.0" />
    	        <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versi&oacute;n m&aacute;s reciente de Flash Player. Elim&iacute;nela si no desea que los usuarios vean el mensaje. -->
    	        <param name="expressinstall" value="Scripts/expressInstall.swf" />
    	        <!-- La siguiente etiqueta object es para navegadores distintos de IE. Oc&uacute;ltela a IE mediante IECC. -->
    	        <!--[if !IE]>-->
    	        <object type="application/x-shockwave-flash" data="flash/banner_jugadores.swf" width="158" height="328">
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
  	    </table>
        	
        </div>
        
        <div id="contenido-izq">
            <div id="bienvenido">
              <div id="cabecera-titulo">
           		<object id="FlashID3" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="500" height="35">
               		  <param name="movie" value="flash/barra_bienvenidos.swf" />
               		  <param name="quality" value="high" />
               		  <param name="wmode" value="opaque" />
               		  <param name="swfversion" value="6.0.65.0" />
               		  <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
               		  <param name="expressinstall" value="Scripts/expressInstall.swf" />
               		  <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
               		  <!--[if !IE]>-->
               		  <object type="application/x-shockwave-flash" data="flash/barra_bienvenidos.swf" width="500" height="35">
               		    <!--<![endif]-->
               		    <param name="quality" value="high" />
               		    <param name="wmode" value="opaque" />
               		    <param name="swfversion" value="6.0.65.0" />
               		    <param name="expressinstall" value="Scripts/expressInstall.swf" />
               		    <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
               		    <div>
               		      <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
               		      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
           		        </div>
               		    <!--[if !IE]>-->
       		      </object>
               		  <!--<![endif]-->
       		    </object>
              </div>
              <div id="contenido-bienvenido">
              	<p>&nbsp;</p>
              	<p>Bienvenidos a la Pagina Web de  Pichling Representaciones. Somos una empresa de representaci&oacute;n de Jugadores y  T&eacute;cnicos de futbol, que trabaja con Agentes asociados en Argentina, Colombia y  Espa&ntilde;a. <br />
                      Caracterizados, todos, por la  seriedad, confiabilidad y transparencia en sus operaciones.<br />
                Esperamos que la informaci&oacute;n que  mostramos sea de su inter&eacute;s y les sirvan como base para iniciar conversaciones  sobre futuros negocios con nuestros representados.</p>
           	<p><br />
                      Muchas gracias por su visita y  estamos a su disposici&oacute;n para cualquier consulta.</p>
           	<p>&nbsp;</p>
           	<p>&nbsp;</p>
              </div>
              <div id="contenido-bienvenido-der">
                <p>William Pichling Rojas</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
          </div>
         
          
        </div>
        
        	<div id="panel-izq-centro">
            	<div class="espacio100"></div>
  <div id="entrevista">
           	  <div class="texto-blanco22-ArialBlack" id="cabecera-titulo">
                	NUESTRAS OFICINAS</div>
            	<!--FIN CABECERA TITULO -->
                <div id="contenido-entrevista2">
               	  
	                  <iframe id="oficina" src="frame/fotos-oficina.php" width="500" height="374" scrolling="no" frameborder="0"></iframe>
                  
              </div><!--FIN CONTENIDO ENTREVISTA -->
          </div>
            <div class="espacio100"></div>
    <div id="entrevista">
           	  <div class="texto-blanco28-ArialBlack" id="cabecera-titulo">
                	Entrevista del Mes	
              </div><!--FIN CABECERA TITULO -->
              <div id="contenido-entrevista2">
           	    	<div id="imagen-entrevista"><img src="imagenes/upload/escala150.php?imagen=<?php echo $fila_query3["foto"] ?>" alt="" /></div><!--FIN IMAGEN ENTREVISTA -->
                    <div class="texto_fnd-plomo_negro" id="texto-entrevista-der"><?php echo $fila_query3["texto_corto"] ?></div><!--FIN TEXTO ENTREVISTA DERECHA -->
               	  <div class="texto_fnd-plomo_negro" id="texto-entrevista-inf"><?php echo $fila_query3["contenido"] ?></div><!--FIN TEXTO ENTREVISTA INFERIOR -->
              </div><!--FIN CONTENIDO ENTREVISTA -->
          </div><!--FIN ENTREVISTA -->
          <div class="espacio100"></div><!--FIN COLUMNISTAS --><!--FIN COLUMNISTAS -->
          
          <div class="espacio100"></div><!--FIN COLUMNISTAS -->
          
          <div class="espacio100"></div><!--FIN COLUMNISTAS -->
          </div>
        
        </div><!--FIN PANEL IZQ CENTRO-->
			    

        <div id="contenido-der">
          <table width="242" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="240" align="center" bgcolor="#FFFFFF"><p><img src="imagenes/empresas/amazon_apart_hotel.jpg" alt="Amazon" width="220" height="200" border="0" usemap="#Map2" /></p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><img src="imagenes/menujugadores.gif" alt="" width="242" height="30" /></td>
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
<map name="Map2" id="Map2">
  <area shape="rect" coords="58,170,179,191" href="flash/Ficha Tecnica Amazon Apart Hotel.pdf" target="_blank" alt="Información AMAZON" />
  <area shape="rect" coords="38,142,115,163" href="http://www.amazonaparthotel.com/" target="_blank" alt="Web AMAZON Apart Hotel" />
</map>
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
var MenuBar1 = new Spry.Widget.MenuBar("MenuHorizontal", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
swfobject.registerObject("FlashID3");
</script>
</body>
</html>