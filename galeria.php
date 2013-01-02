<?php
include("admin/conexion/conexion.php");
include("libs/ssdtube/SSDTube.php");
header("Content-Type: text/html; charset=utf-8");

	//JUGADORES
	$rst_arquero=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=1 and publicar=1 ORDER BY apellidos ASC;", $conexion);
	$rst_defensa=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=2 and publicar=1 ORDER BY apellidos ASC;", $conexion);
	$rst_volante=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=3 and publicar=1 ORDER BY apellidos ASC;", $conexion);
	$rst_delantero=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=4 and publicar=1 ORDER BY apellidos ASC;", $conexion);

	$rst_query=mysql_query("SELECT * FROM pf_columnas WHERE id_autor=8 ORDER BY id DESC;", $conexion);
	$rst_query2=mysql_query("SELECT * FROM pf_columnas WHERE id_autor=9 ORDER BY id DESC;", $conexion);
	
	$rst_query3=mysql_query("SELECT * FROM pf_entrevista_mes WHERE id>0 ORDER BY id DESC LIMIT 1;", $conexion);
	$fila_query3=mysql_fetch_array($rst_query3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>: : : PICHLING : : :</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>

<link rel="stylesheet" href="css/videobox.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/videobox.js"></script>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="highslide/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
	hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
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
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab Estilo4 Estilo6" tabindex="0">VIDEOS</li>
        <li class="TabbedPanelsTab Estilo4 Estilo6" tabindex="0">FOTOS</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <table width="100%" border="0" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td width="171" align="center">
                <a href="http://www.youtube.com/watch?v=5M1NtUCECRA" rel="vidbox" title="Berko Heringman"> <img src="imagenes/videos/berko_heringman.jpg" alt="" width="120" height="90" /><br />
                  Berko Heringman</a>
              </td>
              <td align="center"><a href="http://www.youtube.com/watch?v=Sf3TNhgG3Y8" rel="vidbox" title="Carlos Solis"> <img src="imagenes/videos/carlos_solis.jpg" width="128" height="96" alt="CARLOS SOLIS" /><br />
                Carlos Solis</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=fVKWnMsw4iM" rel="vidbox" title="Christian Garcia"> <img src="imagenes/videos/cristian_garcia.jpg" width="120" height="90" alt="CHRISTIAN GARCIA" /><br />
                Christian Garcia</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=AmLOClQn6yg" rel="vidbox" title="Humberto Osorio Botello"> <img src="imagenes/videos/humberto_osorio.jpg" alt="" width="120" height="90" /><br />
                Humberto Osorio Botello</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=gtFU5Rh4XMc" rel="vidbox" title="Pedro Ascoy">
                <?php $youtube_pascoy = new SSDTube(); $youtube_pascoy->identify("http://www.youtube.com/watch?v=gtFU5Rh4XMc", true); ?>
                <img src="<?php echo $youtube_pascoy->thumbnail_1_url; ?>" width="120" height="90" alt="Pedro Ascoy" /> <br />
                Pedro Ascoy</a></td>
              </tr>
            <tr>
              <td align="center"><a href="http://www.youtube.com/watch?v=J7RI6reJjA4" rel="vidbox" title="Sergio Ibarra">
              <img src="imagenes/videos/sergio_ibarra.jpg" width="120" height="90" alt="SERGIO IBARRA" /><br />
                Sergio Ibarra</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=9oScTb_X_ck" rel="vidbox" title="Jesús Chavez"> <img src="imagenes/videos/jesus_chavez.jpg" width="128" height="96" alt="JESUS CHAVEZ" /><br />
                Jesús Chavez</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=lvXWLExIj5Q" rel="vidbox" title="Cristian José Figuera"> <img src="imagenes/videos/cristian_figuera.jpg" width="120" height="90" alt="CRISTIAN FIGUERA" /><br />
                Cristian José Figuera</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=hn9SDaiWWPU" rel="vidbox" title="Jorge Rivera"> <img src="imagenes/videos/jorge-rivera.jpg" width="120" height="90" alt="Jorge Rivera" /> <br />
                Jorge Rivera</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=dgpt_Wrf89A" rel="vidbox" title="Cristian Laura"> <img src="imagenes/videos/cristian_laura.jpg" alt="" width="120" height="90" /><br />
                Cristian Laura</a></td>
              </tr>
            <tr>
              <td align="center"><a href="http://www.youtube.com/watch?v=-xJURL95Nv0" rel="vidbox" title="Yancarlo Casas Acosta"> <img src="imagenes/videos/yancarlo_casas.jpg" alt="" width="120" height="90" /><br />
                Yancarlo Casas </a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=AxtetFnz5uU" rel="vidbox" title="Carlos Antonio Salom"><img src="imagenes/videos/carlos_salom_argentina.jpg" alt="" width="128" height="96" /><br />
                Carlos Antonio Salom</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=_-2bPnbEeuI" rel="vidbox" title="Juan Carlos Mariño" > <img src="imagenes/videos/juan_carlos marinio.jpg" width="120" height="90" alt="JUAN CARLOS MARIÑOS" /><br />
                Juan Carlos Mariño</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=FYexAKiEixE" rel="vidbox" title="Antonio Meza Cuadra"> <img src="imagenes/videos/meza_cuadra.jpg" alt="" width="120" height="90" /><br />
                Antonio Meza Cuadra</a></td>
              <td width="171" align="center"><a href="http://www.youtube.com/watch?v=1SolLX2NMRU" rel="vidbox" title="Javier Chumpitaz"> <img src="imagenes/videos/javier_chumpitaz.jpg" alt="" width="120" height="90" /><br />
                Javier Chumpitaz</a></td>
              </tr>
            <tr>
              <td colspan="5" align="center"></td>
            </tr>
            <tr>
              <td width="171" align="center">              
                <a href="http://www.youtube.com/watch?v=MEeyw_DL128" rel="vidbox" title="Ryan Salazar">
                  <img src="imagenes/videos/ryan_salazar.jpg" width="120" height="90" /><br />Ryan Salazar</a>
                
                </td>
              <td width="171" align="center"><a href="http://www.youtube.com/watch?v=Fom_KTVp8Dw" rel="vidbox" title="Oscar Vilchez"><img src="imagenes/videos/oscarvilchez.jpg" width="120" height="90" alt="Oscar Vilchez" /><br />
                Oscar Vilchez</a></td>
              <td width="171" align="center">
                <a href="http://www.youtube.com/watch?v=Mqf3KiswHe4" rel="vidbox" title="Ricky Perez">
                  <img src="imagenes/videos/ricky_perez.jpg" width="120" height="90" alt="RICKY PEREZ" /><br />Ricky Perez</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=LPi_aQfc078" rel="vidbox" title="Rai Gomez">
                <?php $youtube_raigomez = new SSDTube(); $youtube_raigomez->identify("http://www.youtube.com/watch?v=LPi_aQfc078", true); ?>
                <img src="<?php echo $youtube_raigomez->thumbnail_1_url; ?>" width="120" height="90" alt="Rai Gomez" /> <br />
                Rai Gomez</a></td>
              <td width="171" align="center"><a href="http://www.youtube.com/watch?v=8veQn3Z0To0" rel="vidbox" title="Renzo Benavides"> <img src="imagenes/videos/renzo_benavides.jpg" alt="Renzo Benavides" width="120" height="90" /><br />
                Renzo Benavides</a></td>
            </tr>
            <tr>
              <td width="171" align="center"><a href="http://www.youtube.com/watch?v=GhuOiiHLsco" rel="vidbox" title="Jean Pierre Cancar"> <img src="imagenes/videos/pierrecancar.jpg" width="120" height="90" alt="Jean Pierre Cancar" /><br />
                Jean Pierre Cancar</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=NTp-bcpBsDs" rel="vidbox" title="Jesús Cisneros"> <img src="imagenes/videos/jesus_cisneros.jpg" width="120" height="90" alt="JESUS CISNEROS" /><br />
                Jesús Cisneros Parte 1</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=owak3_S0icw" rel="vidbox" title="Jesús Cisneros"> <img src="imagenes/videos/jesus_cisneros.jpg" width="120" height="90" alt="JESUS CISNEROS" /><br />
                Jesús Cisneros Parte 2</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=MCJ1aWlRORE" rel="vidbox" title="Criffford Seminario Parte 1"> <img src="imagenes/videos/crifford_seminario1.jpg" alt="Criffford Seminario Parte 1" width="120" height="90" /><br />
                Criffford Seminario Parte 1</a></td>
              <td width="171" align="center"><a href="http://www.youtube.com/watch?v=fL-od6tReTQ" rel="vidbox" title="Criffford Seminario Parte 2"> <img src="imagenes/videos/crifford_seminario2.jpg" alt="Criffford Seminario Parte 2" width="120" height="90" /><br />
                Criffford Seminario Parte 2</a></td>
              </tr>
            <tr>
              <td align="center"><a href="http://www.youtube.com/watch?v=GbwrvjWJhds" rel="vidbox" title="Renzo Sheput Parte 1"> <img src="imagenes/videos/renzo_sheput1.jpg" alt="Renzo Sheput Parte 2" width="120" height="90" /><br />
                Renzo Sheput Parte 1</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=Bt7paccGih0" rel="vidbox" title="Renzo Sheput Parte 2"> <img src="imagenes/videos/renzo_sheput2.jpg" alt="Renzo Sheput Parte 2" width="120" height="90" /><br />
                Renzo Sheput Parte 2</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=tkj-Cdmavms" rel="vidbox" title="Joel Pinto">
              	<img src="imagenes/videos/pinto.jpg" alt="Joel Pinto" width="120" height="90" /><br />
                Joel Pinto</a></td>
              <td align="center"><a href="http://www.youtube.com/watch?v=xmYDMPWZHrM" rel="vidbox" title="Jorge Leiva">
                <?php $youtube_jorgeleiva=new SSDTube(); $youtube_jorgeleiva->identify("http://www.youtube.com/watch?v=xmYDMPWZHrM", true); ?>
                <img src="<?php echo $youtube_jorgeleiva->thumbnail_1_url; ?>" width="120" height="90" alt="Jorge Leiva" /> <br />
                Jorge Leiva</a></td>
              <td align="center">
              	<a href="http://www.youtube.com/watch?v=KaTESKIkJXs" rel="vidbox" title="Edson Uribe">
					<?php $youtube_ramonrodriguez = new SSDTube(); $youtube_ramonrodriguez->identify("http://www.youtube.com/watch?v=KaTESKIkJXs", true); ?>
                    <img src="<?php echo $youtube_ramonrodriguez->thumbnail_1_url; ?>" width="120" height="90" alt="Edson Uribe" /><br />
                    Edson Uribe</a>
              		<!--<a href="http://www.youtube.com/watch?v=IeXAU8Hul0U" rel="vidbox" title="Jair Gonzales">
					?php $youtube_jairgonza=new SSDTube(); $youtube_jairgonza->identify("http://www.youtube.com/watch?v=IeXAU8Hul0U", true); ?>
                    <img src="?php echo $youtube_jairgonza->thumbnail_1_url; ?>" width="120" height="90" alt="Jair Gonzales" /> <br />
                    Jair Gonzales</a>-->
                </td>
              </tr>
            <tr>
              <td align="center"><a href="http://www.youtube.com/watch?v=pSd0kTo14kI" rel="vidbox" title="Oscar Vilchez - Parte 1">
                <?php $youtube_oscarvilchez1 = new SSDTube(); $youtube_oscarvilchez1->identify("http://www.youtube.com/watch?v=pSd0kTo14kI", true); ?>
                <img src="<?php echo $youtube_oscarvilchez1->thumbnail_1_url; ?>" width="120" height="90" alt="Oscar Vilchez - Parte 1" /> <br />
                Oscar Vilchez - Parte 1</a></td>
            <td align="center"><a href="http://www.youtube.com/watch?v=W26ojy_9lZk" rel="vidbox" title="Oscar Vilchez - Parte 2">
                <?php $youtube_oscarvilchez2 = new SSDTube(); $youtube_oscarvilchez2->identify("http://www.youtube.com/watch?v=W26ojy_9lZk", true); ?>
                <img src="<?php echo $youtube_oscarvilchez2->thumbnail_1_url; ?>" width="120" height="90" alt="Oscar Vilchez - Parte 2" /> <br />
                Oscar Vilchez - Parte 2</a></td>
            <td align="center"><a href="http://www.youtube.com/watch?v=F3yngMs1c90" rel="vidbox" title="Walter Vilchez">
                <?php $youtube_waltervilchez = new SSDTube(); $youtube_waltervilchez->identify("http://www.youtube.com/watch?v=F3yngMs1c90", true); ?>
                <img src="<?php echo $youtube_waltervilchez->thumbnail_1_url; ?>" width="120" height="90" alt="Walter Vilchez" /><br />
                Walter Vilchez</a></td>
            <td align="center"><a href="http://www.youtube.com/watch?v=aFi2AgLABeE" rel="vidbox" title="Henry Quinteros">
                <?php $youtube_waltervilchez = new SSDTube(); $youtube_waltervilchez->identify("http://www.youtube.com/watch?v=aFi2AgLABeE", true); ?>
                <img src="<?php echo $youtube_waltervilchez->thumbnail_1_url; ?>" width="120" height="90" alt="Henry Quinteros" /><br />
                Henry Quinteros</a></td>
				<td align="center">
            	<a href="http://www.youtube.com/watch?v=jYAtcyzvsDQ" rel="vidbox" title="Leo Aguilar">
					<?php $youtube_ramonrodriguez = new SSDTube(); $youtube_ramonrodriguez->identify("http://www.youtube.com/watch?v=jYAtcyzvsDQ", true); ?>
                    <img src="<?php echo $youtube_ramonrodriguez->thumbnail_1_url; ?>" width="120" height="90" alt="Leo Aguilar" /><br />
                    Leo Aguilar</a>
                </td>
              </tr>
          </table>
        </div>
        <div class="TabbedPanelsContent">
          <table width="750" border="0" align="center" cellpadding="4" cellspacing="4">
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Socios</strong></td>
            </tr>
            <tr>
              <td width="33%" align="center" valign="middle">&nbsp;</td>
              <td width="33%" align="center" valign="middle">
                <a href="imagenes/galeria/socios3.jpg" class="highslide" onclick="return hs.expand(this)">
                <img src="imagenes/galeria/mini/socios3.jpg" alt="" width="94" height="150" /></a>
                <div class="highslide-caption">
                <p align="center">Javier Alvan y William Pichling</p>
              </div>
                </td>
              <td width="33%" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Nuestros Jugadores</strong></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle" class="Estilo121">
              <table width="100%" border="0" cellpadding="2" cellspacing="2">
                <tr>
                  <td align="center"><a href="imagenes/galeria/fischer-guevara.jpg" class="highslide" onclick="return hs.expand(this)"> <img src="imagenes/galeria/fischer-guevara.jpg" width="200" height="154" alt="Fischer Guevara" /></a>
                    <div class="highslide-caption">
                      <p align="center">Fischer Guevara</p>
                    </div></td>
                  <td width="24%" align="center">
                    <a href="imagenes/galeria/solis.jpg" class="highslide" onclick="return hs.expand(this)">
                      <img src="imagenes/galeria/mini/solis.jpg" alt="" width="101" height="150" /></a>
                    <div class="highslide-caption">
                      <p align="center">Carlos Solis Alvarado</p>
                    </div></td>
                  <td width="22%" align="center"><a href="imagenes/galeria/salom.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/salom.jpg" width="84" height="150" alt="Carlos Antonio Salom" /></a></td>
                  <td width="30%" align="center"><a href="imagenes/galeria/quintanilla.jpg" class="highslide" onclick="return hs.expand(this)"> <img src="imagenes/galeria/mini/quintanilla.jpg" alt="" width="137" height="150" /></a>
                    <div class="highslide-caption">
                      <p align="center">Hector Quintanilla</p>
                    </div></td>
                  </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" align="center">
                    <a href="imagenes/galeria/reyes.jpg" class="highslide" onclick="return hs.expand(this)">
                    <img src="imagenes/galeria/mini/reyes.jpg" alt="" width="194" height="150" /></a>
                    <div class="highslide-caption">
                      <p align="center">Jeickson Reyes</p>
                    </div>
                    </td>
                  <td width="24%" align="center">
                  <a href="imagenes/galeria/mori.jpg" class="highslide" onclick="return hs.expand(this)">
                  <img src="imagenes/galeria/mini/mori.jpg" alt="" width="117" height="150" /></a>
                    <div class="highslide-caption">
                      <p align="center">Ruben Mori</p>
                    </div></td>
                  <td width="22%" align="center">
                  <a href="imagenes/galeria/cisneros2.jpg" class="highslide" onclick="return hs.expand(this)">
                  <img src="imagenes/galeria/mini/cisneros2.jpg" alt="" width="125" height="150" /></a>
                  <div class="highslide-caption">
                    <p align="center">William Pichling y Jesus Cisneros</p>
                  </div>
                  </td>
                  <td width="30%" align="center">
                  <a href="imagenes/galeria/jaime_rozeznic.jpg" class="highslide" onclick="return hs.expand(this)">
                  <img src="imagenes/galeria/jaime_rozeznic.jpg" alt="" width="125" height="150" /></a>
                  <div class="highslide-caption">
                      <p align="center">Jaime Rozeznic</p>
                    </div
                  ></td>
                </tr>
              </table>
               </td>
            </tr>
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Arqueros</strong></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle" class="Estilo121">
                <table width="600" border="0" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="33%" align="center">
                      <a href="imagenes/galeria/joel-pinto.jpg" class="highslide" onclick="return hs.expand(this)">
                      <img src="imagenes/galeria/joel-pinto.jpg" alt="" width="97" height="150" /></a>
                      <div class="highslide-caption">
                      <p align="center">Joel Pinto</p>
                    </div>
                      </td>
                    <td width="33%" align="center">
                      <a href="imagenes/galeria/cisneros1.jpg" class="highslide" onclick="return hs.expand(this)">
                      <img src="imagenes/galeria/mini/cisneros1.jpg" alt="" width="100" height="150" /></a>
                      <div class="highslide-caption">
                        <p align="center">Jesús Cisneros</p>
                      </div>
                      </td>
                    <td width="33%" align="center">
                    <a href="imagenes/galeria/exal1.jpg" class="highslide" onclick="return hs.expand(this)">
                    <img src="imagenes/galeria/mini/exal1.jpg" alt="" width="158" height="150" /></a>
                    <div class="highslide-caption">
                        <p align="center">Exar Rosales</p>
                      </div>
                    </td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Nuestros Menores</strong></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/gomez2.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/gomez2.jpg" alt="" width="144" height="119" /></a></td>
              <td height="144" align="center" valign="middle" class="Estilo121"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="middle"><div class="highslide-caption">
                    <p align="center">Diego Donayre</p>
                  </div></td>
                  <td align="center" valign="middle"><div class="highslide-caption">
                    <p align="center">Felix Goyzueta</p>
                  </div></td>
                  <td align="center" valign="middle"><div class="highslide-caption">
                    <p align="center">Jack Durand</p>
                  </div></td>
                </tr>
              </table>
                <a href="imagenes/galeria/bazan_alguedas.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/bazan_alguedas.jpg" alt="" width="137" height="119" /></a>
                <div class="highslide-caption">
                  <p align="center">Jorge Bazan y Jerson Alguedas</p>
                </div></td>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/jackdurand.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/jackdurand.jpg" alt="" width="81" height="150" /></a></td>
            </tr>
            <tr>
              <td height="144" align="center" valign="middle" class="Estilo121">&nbsp;</td>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/gomez1.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/gomez1.jpg" alt="" width="154" height="119" /></a>
                <div class="highslide-caption">
                  <p align="center">Rai Gomez</p>
                </div></td>
              <td align="center" valign="middle" class="Estilo121"><div class="highslide-caption">
                <p align="center">Rai Gomez</p>
              </div></td>
            </tr>
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Juan Carlos Mariño - Selección Perú</strong></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle" class="Estilo121"><table width="500" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" align="center"><a href="imagenes/galeria/marinio6.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/marinio6.jpg" alt="" width="150" height="103" /></a></td>
                  <td width="50%" align="center"><a href="imagenes/galeria/marinio7.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/marinio7.jpg" alt="" width="199" height="150" /></a></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="3" align="left" valign="middle" bgcolor="#0099CC" class="Estilo121"><strong>Juan Carlos Mariño - Nacional de Medellin</strong></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/manac1.jpg" class="highslide" onclick="return hs.expand(this)"> <img src="imagenes/galeria/mini/manac1.jpg" alt="" width="113" height="150" /></a></td>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/manac3.jpg" class="highslide" onclick="return hs.expand(this)"> <img src="imagenes/galeria/mini/manac3.jpg" alt="" width="113" height="150" /></a></td>
              <td align="center" valign="middle" class="Estilo121"><a href="imagenes/galeria/manac2.jpg" class="highslide" onclick="return hs.expand(this)"><img src="imagenes/galeria/mini/manac2.jpg" alt="" width="150" height="113" /></a></td>
            </tr>
            <tr>
              <td colspan="3" align="center" valign="middle" class="Estilo121">&nbsp;</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
      <!--FIN CONTENIDO IZQUIERDA -->
        <div id="contenido-der">
          <table width="242" border="0" cellpadding="0" cellspacing="0">
          <tr>            </tr>
          <tr>            </tr>
          <tr>            </tr>
          <tr>            </tr>
          </table>
      </div></td>
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
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
	</body>
</html>