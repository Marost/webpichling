<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

$id=$_REQUEST["id"];
//POSICION Y PUBLICAR
$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija ORDER BY posicion ASC;", $conexion);
$rst_publicar=mysql_query("SELECT * FROM pf_publicar ORDER BY publicar DESC;", $conexion);

//JUGADOR
$rst_query=mysql_query("SELECT * FROM pf_jugadores WHERE id=$id;", $conexion);
$fila_query=mysql_fetch_array($rst_query);

//POSICION EN LA CANCGA
$rst_posicion_cancha=mysql_query("SELECT * FROM pf_posicion_cancha WHERE jugador=$id", $conexion);
$fila_posicion_cancha=mysql_fetch_array($rst_posicion_cancha);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script type="text/javascript" src="../../js/ckeditor.js"></script>

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Jugador</h2>
</div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td height="45" colspan="2" align="center"><input name="titulo" type="text" id="titulo" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="<?php echo $fila_query["titulo"]; ?>" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td width="18%"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Nombre:</strong></p></td>
            	          <td width="56%" height="30" align="left" class="texto_der"><input name="nombre" type="text" id="nombre" value="<?php echo $fila_query["nombre"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Apellidos:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="apellidos" type="text" id="apellidos" value="<?php echo $fila_query["apellidos"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td width="44%" height="30" align="right" class="texto_izq"><p><strong>Fecha de Nacimiento:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="fecha_nac" type="text" id="fecha_nac" value="<?php echo $fila_query["fecha_nac"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Nacionalidad:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="nacionalidad" type="text" id="nacionalidad" value="<?php echo $fila_query["nacionalidad"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Posici&oacute;n:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="posicion" type="text" id="posicion" value="<?php echo $fila_query["posicion"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Perfil:</strong></p></td>
            	          <td height="30" align="left" class="texto_der">
            	            <input name="perfil" type="text" id="perfil" value="<?php echo $fila_query["perfil"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Peso:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="peso" type="text" id="peso" value="<?php echo $fila_query["peso"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Estatura:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="estatura" type="text" id="estatura" value="<?php echo $fila_query["estatura"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Club Actual:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="club_actual" type="text" id="club_actual" value="<?php echo $fila_query["club_actual"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Selecci&oacute;n:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="seleccion" type="text" id="seleccion" value="<?php echo $fila_query["seleccion"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Enlace de Video:</strong></p></td>
            	          <td height="30" align="left" class="texto_der"><input name="video" type="text" id="partidos_primera3" value="<?php echo $fila_query["video"]; ?>" /></td>
          	          </tr>
          	        </table></td>
            	      <td width="28%"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            	        <tr>
            	          <td width="20%" height="25" align="right" class="texto_izq"><p>&nbsp;</p></td>
            	          <td width="70%" height="25" class="texto_der">&nbsp;</td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>A&Ntilde;O</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><p><strong>CLUBES</strong></p></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2010</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input name="club1" type="text" id="club1" value="<?php echo $fila_query["club1"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2009</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input name="club2" type="text" id="club2" value="<?php echo $fila_query["club2"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2008</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input name="club3" type="text" id="club3" value="<?php echo $fila_query["club3"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2007</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input name="club4" type="text" id="club4" value="<?php echo $fila_query["club4"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2006</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input name="club5" type="text" id="club5" value="<?php echo $fila_query["club5"]; ?>" /></td>
          	          </tr>
            	        <tr>
            	          <td height="25" align="center" class="texto_izq">&nbsp;</td>
            	          <td height="25" align="left" class="texto_der">&nbsp;</td>
          	          </tr>
            	        <tr>
            	          <td height="25" align="center" class="texto_izq"><p><strong>Foto:</strong></p></td>
            	          <td height="25" align="left" class="texto_der"><label>
            	            <input type="file" name="file" id="file" />
          	            </label></td>
          	          </tr>
            	        <tr>
            	          <td height="25" align="center" class="texto_izq"><p><strong>Foto actual:</strong></p></td>
            	          <td height="25" align="left" class="texto_der"><img src="../../../imagenes/upload/escala150.php?imagen=<?php echo $fila_query["imagen"]; ?>" />
           	              <input name="img-actual" type="hidden" id="img-actual" value="<?php echo $fila_query["imagen"]; ?>" /></td>
          	          </tr>
          	          </table></td>
          	      </tr>
            	    <tr>
            	      <td colspan="2"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            	        <tr>
            	          <td width="25%" height="35" align="center"><p><strong>Posici&oacute;n Fija:</strong></p></td>
            	          <td width="75%" height="35" align="left"><span id="spryselect1">
            	            <select name="posicion_fija" id="posicion_fija">
            	              <option selected="selected" value="">[Selecciona una posicion]</option>
            	              <?php
                            while ($fila1=mysql_fetch_array($rst_posicion))
                            {
                                if ($fila1["id"]==$fila_query["posicion_fija"])
                                    echo "<option selected=''  value='". $fila1["id"] ."'>". $fila1["posicion"] ."</option>";
                                else
                                    echo "<option value='". $fila1["id"] ."'>". $fila1["posicion"] ."</option>";
                            }
                          ?>
          	              </select>
            	            <span class="selectRequiredMsg">Seleccione una posicion</span></span></td>
          	          </tr>
            	        <tr>
            	          <td height="35" align="center"><p><strong>Posicion en la cancha:</strong></p></td>
            	          <td height="35" align="left"><p>
                          <?php if($fila_posicion_cancha["arquero"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="arquero" id="arquero" value="1" checked="checked" /> Arquero</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="arquero" id="arquero" value="1" /> Arquero</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["lateral_derecho"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="lateral_derecho" id="lateral_derecho" value="1" checked="checked" />Lateral Derecho</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="lateral_derecho" id="lateral_derecho" value="1" />Lateral Derecho</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["back_central_derecho"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="back_central_derecho" id="back_central_derecho" value="1" checked="checked" />Back Central Derecho</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="back_central_derecho" id="back_central_derecho" value="1" />Back Central Derecho</label>
                            <?php } ?>
                            <br />
                            <?php if($fila_posicion_cancha["back_central_izquierdo"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="back_central_izquierdo" id="back_central_izquierdo" value="1" checked="checked" />Back Central Izquierdo</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="back_central_izquierdo" id="back_central_izquierdo" value="1" />Back Central Izquierdo</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["lateral_izquierdo"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="lateral_izquierdo" id="lateral_izquierdo" value="1" checked="checked" />Lateral Izquierdo</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="lateral_izquierdo" id="lateral_izquierdo" value="1" />Lateral Izquierdo</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["volante_derecho"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="volante_derecho" id="volante_derecho" value="1" checked="checked" />Volante Derecho</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="volante_derecho" id="volante_derecho" value="1" />Volante Derecho</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["volante_central"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="volante_central" id="volante_central" value="1" checked="checked" />Volante Central</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="volante_central" id="volante_central" value="1" />Volante Central</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["volante_izquierdo"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="volante_izquierdo" id="volante_izquierdo" value="1" checked="checked" />Volante Izquierdo</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="volante_izquierdo" id="volante_izquierdo" value="1" />Volante Izquierdo</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["extremo_derecho"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="extremo_derecho" id="extremo_derecho" value="1" checked="checked" />Extremo Derecho</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="extremo_derecho" id="extremo_derecho" value="1" />Extremo Derecho</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["delantero"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="delantero" id="delantero" value="1" checked="checked" />Delanteo</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="delantero" id="delantero" value="1" />Delanteo</label>
                            <?php } ?>
            	            <br />
                            <?php if($fila_posicion_cancha["extremo_izquierdo"]==1){ ?>
            	            <label for="checkbox"><input type="checkbox" name="extremo_izquierdo" id="extremo_izquierdo" value="1" checked="checked" />Extremo Izquierdo</label>
                            <?php }else{ ?>
                            <label for="checkbox"><input type="checkbox" name="extremo_izquierdo" id="extremo_izquierdo" value="1" />Extremo Izquierdo</label>
                            <?php } ?>
          	            </p></td>
          	          </tr>
            	        <tr>
            	          <td height="35" align="center"><p><strong>Publicar:</strong></p></td>
            	          <td height="35"><span id="spryselect2">
            	            <label>
            	              <select name="publicar" id="publicar">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
                            while ($fila1=mysql_fetch_array($rst_publicar))
                            {
                                if ($fila1["id"]==$fila_query["publicar"])
                                    echo "<option selected=''  value='". $fila1["id"] ."'>". $fila1["publicar"] ."</option>";
                                else
                                    echo "<option value='". $fila1["id"] ."'>". $fila1["publicar"] ."</option>";
                            }
                          ?>
                    </select>
          	              </label>
            	            <span class="selectInvalidMsg">Seleccione una opcion</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
          	          </tr>
          	        </table></td>
          	      </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td align="center"><label>
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    &nbsp;
                    <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                  </label></td>
                  </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
</div><!-- FIN PANEL DERECHA -->
