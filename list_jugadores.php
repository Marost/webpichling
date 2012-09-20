<?php 
include("admin/conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

$id=$_REQUEST["id"];
//JUGADOR
$rst_jugadores=mysql_query("SELECT * FROM pf_jugadores WHERE id=$id;", $conexion);
$fila_jugador=mysql_fetch_array($rst_jugadores);

//POSICION CANCHA
$rst_posicion=mysql_query("SELECT * FROM pf_posicion_cancha WHERE jugador=$id", $conexion);
$fila_posicion=mysql_fetch_array($rst_posicion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $fila_jugador["nombre_completo"]; ?></title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/videobox.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/videobox.js"></script>

</head>

<body id="jugadores">
<table width="10%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="650" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="385" height="560" rowspan="2"><table width="370" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td height="35" colspan="2" class="titulo_principal"><?php echo $fila_jugador["titulo"]; ?></td>
          </tr>
          <tr>
            <td width="128" class="titulo_dato">&nbsp;</td>
            <td width="242" class="dato">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="titulo_dato"><table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td width="34%" height="20" align="right" class="titulo_dato">Nombre: </td>
                <td width="66%" height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["nombre"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Apellidos: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["apellidos"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Fecha de Nac.: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["fecha_nac"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Nacionalidad: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["nacionalidad"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Posici&oacute;n: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["posicion"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Perfil: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["perfil"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Peso: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["peso"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Estatura: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["estatura"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Club Actual: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["club_actual"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Selección: </td>
                <td height="20" align="left" valign="middle" class="dato"><?php echo $fila_jugador["seleccion"]; ?></td>
              </tr>
              <tr>
                <td height="20" align="right" class="titulo_dato">Video: </td>
                <td height="20" align="left" valign="middle" class="dato">
				<?php
				if ($fila_jugador["video"]!=""){
					if(ereg(",", $fila_jugador["video"])){
						$video=explode(",",$fila_jugador["video"]);
						echo "<a href='".$video[0]."' rel='vidbox' title='Da clic aqui para ver el video'>Ver Video 1</a><br/>";
						echo "<a href='".$video[1]."' rel='vidbox' title='Da clic aqui para ver el video'>Ver Video 2</a>"; 
					}else{
						echo "<a href='".$fila_jugador["video"]."' rel='vidbox' title='Da clic aqui para ver el video'>Ver Video</a>"; 
					}
				}else{
					echo "No disponible";
				}?>
                </td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><p><strong>POSICION EN LA CANCHA</strong></p></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <div id="cancha_futbol">
            <?php if($fila_posicion["arquero"]==1){ ?>
            <div id="arquero"></div>
            <?php } ?>
            <?php if($fila_posicion["lateral_derecho"]==1){ ?>
            <div id="lateral_derecho"></div>
            <?php } ?>
            <?php if($fila_posicion["back_central_derecho"]==1){ ?>
            <div id="defensa_central_derecha"></div>
            <?php } ?>
            <?php if($fila_posicion["back_central_izquierdo"]==1){ ?>
            <div id="defensa_central_izquierda"></div>
            <?php } ?>
            <?php if($fila_posicion["lateral_izquierdo"]==1){ ?>
            <div id="lateral_izquierdo"></div>
            <?php } ?>
            <?php if($fila_posicion["volante_derecho"]==1){ ?>
            <div id="volante_derecho"></div>
            <?php } ?>
            <?php if($fila_posicion["volante_central"]==1){ ?>
            <div id="volante_central"></div>
            <?php } ?>
            <?php if($fila_posicion["volante_izquierdo"]==1){ ?>
            <div id="volante_izquierdo"></div>
            <?php } ?>
            <?php if($fila_posicion["extremo_derecho"]==1){ ?>
            <div id="extremo_derecho"></div>
            <?php } ?>
            <?php if($fila_posicion["delantero"]==1){ ?>
            <div id="delantero"></div>
            <?php } ?>
            <?php if($fila_posicion["extremo_izquierdo"]==1){ ?>
            <div id="extremo_izquierdo"></div>
            <?php } ?>

            <img src="imagenes/cancha_futbol.jpg" width="320" height="190" alt="Posición en la cancha de futbol" /></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table></td>
        <td width="265" height="373" align="right" class="img">
			<img src="imagenes/upload/escala235.php?imagen=<?php echo $fila_jugador["imagen"]; ?>" />
        </td>
      </tr>
      <tr>
        <td align="right" class="img"><table width="260" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="60" class="titulo_tabla">A&Ntilde;O</td>
            <td width="200" class="titulo_tabla">CLUB</td>
          </tr>
          <tr>
            <td height="20" bgcolor="#006699" class="anio_tabla">2010</td>
            <td height="20" valign="middle" class="dato_tabla"><?php echo $fila_jugador["club1"]; ?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#006699" class="anio_tabla">2009</td>
            <td height="20" valign="middle" class="dato_tabla"><?php echo $fila_jugador["club2"]; ?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#006699" class="anio_tabla">2008</td>
            <td height="20" valign="middle" class="dato_tabla"><?php echo $fila_jugador["club3"]; ?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#006699" class="anio_tabla">2007</td>
            <td height="20" valign="middle" class="dato_tabla"><?php echo $fila_jugador["club4"]; ?></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#006699" class="anio_tabla">2006</td>
            <td height="20" valign="middle" class="dato_tabla"><?php echo $fila_jugador["club5"]; ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>