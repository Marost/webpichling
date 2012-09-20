<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija ORDER BY posicion ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM pf_publicar ORDER BY publicar DESC;", $conexion);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Jugador</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td height="45" colspan="2" align="center"><input name="titulo" type="text" id="titulo" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Nombre:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="nombre" id="nombre" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Apellidos:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="apellidos" id="apellidos" /></td>
          	          </tr>
            	        <tr>
            	          <td width="50%" height="30" align="right" class="texto_izq"><p><strong>Fecha de Nacimiento:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="fecha_nac" id="fecha_nac" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Nacionalidad:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="nacionalidad" id="nacionalidad" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Posici&oacute;n:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="posicion" id="posicion" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Perfil:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="posicion2" id="posicion2" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Peso:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="peso" id="peso" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Estatura:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="estatura" id="estatura" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Club Actual:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="club_actual" id="club_actual" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Selecci&oacute;n:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="seleccion" id="seleccion" /></td>
          	          </tr>
            	        <tr>
            	          <td height="30" align="right" class="texto_izq"><p><strong>Enlace de Video:</strong></p></td>
            	          <td height="30" align="center" class="texto_der"><input type="text" name="video" id="partidos_primera3" /></td>
          	          </tr>
          	          </table></td>
            	      <td><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
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
            	          <td width="70%" height="25" align="left" class="texto_der"><input type="text" name="club1" id="club1" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2009</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input type="text" name="club2" id="club2" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2008</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input type="text" name="club3" id="club3" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2007</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input type="text" name="club4" id="club4" /></td>
          	          </tr>
            	        <tr>
            	          <td width="20%" height="25" align="center" class="texto_izq"><p><strong>2006</strong></p></td>
            	          <td width="70%" height="25" align="left" class="texto_der"><input type="text" name="club5" id="club5" /></td>
          	          </tr>
            	        <tr>
            	          <td height="25" align="center" class="texto_izq">&nbsp;</td>
            	          <td height="25" align="left" class="texto_der">&nbsp;</td>
          	          </tr>
            	        <tr>
            	          <td height="25" align="center" class="texto_izq"><p><strong>Foto:</strong></p></td>
            	          <td height="25" align="left" class="texto_der">
                          <label><input type="file" name="file" id="file" /></label></td>
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
                          <?php while ($fila=mysql_fetch_array($rst_posicion)){
								echo "<option value='". $fila["id"] ."'>". $fila["posicion"] ."</option>";}?>
                        </select>
                        <span class="selectRequiredMsg">Seleccione una posicion</span></span></td>
                    </tr>
                    <tr>
                      <td height="35" align="center"><p><strong>Posicion en la cancha:</strong></p></td>
                      <td height="35" align="left"><p>
                        <label for="checkbox">
                        <input type="checkbox" name="arquero" id="arquero" value="1" />
                        Arquero</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="lateral_derecho" id="lateral_derecho" value="1" />
                        Lateral Derecho</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="back_central_derecho" id="back_central_derecho" value="1" />
                        Back Central Derecho</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="back_central_izquierdo" id="back_central_izquierdo" value="1" />
                        Back Central Izquierdo</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="lateral_izquierdo" id="lateral_izquierdo" value="1" />
                        Lateral Izquierdo</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="volante_derecho" id="volante_derecho" value="1" />
                        Volante Derecho</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="volante_central" id="volante_central" value="1" />
                        Volante Central</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="volante_izquierdo" id="volante_izquierdo" value="1" />
                        Volante Izquierdo</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="extremo_derecho" id="extremo_derecho" value="1" />
                        Extremo Derecho</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="delantero" id="delantero" value="1" />
                        Delanteo</label><br />
                        <label for="checkbox">
                        <input type="checkbox" name="extremo_izquierdo" id="extremo_izquierdo" value="1" />
                        Extremo Izquierdo</label>
                      </p></td>
                    </tr>
                    <tr>
                      <td height="35" align="center"><p><strong>Publicar:</strong></p></td>
                      <td height="35"><span id="spryselect2">
                        <label>
                          <select name="publicar" id="publicar">
                            <option selected="selected" value="">[Seleccione una opcion]</option>
                            <?php
							  	while ($fila=mysql_fetch_array($rst_publicar))
								{
									echo "<option value='". $fila["id"] ."'>". $fila["publicar"] ."</option>";
								}
							  ?>
                          </select>
                        </label>
                        <span class="selectInvalidMsg">Seleccione una opcion</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                    </tr>
                  </table></td>
          	      </tr>
                <tr>
                  <td width="50%" align="right" class="texto_negro16-MyriadPro"><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
                  <td width="50%" align="left"><label>
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
