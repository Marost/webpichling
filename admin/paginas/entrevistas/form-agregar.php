<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

	$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija ORDER BY posicion ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM pf_publicar ORDER BY publicar DESC;", $conexion);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Entrevista</h2>
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
            	      <td height="45" align="right"><p><strong>Nombre:</strong></p></td>
            	      <td height="45" align="left"><input name="nombre" type="text" id="nombre" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="" size="50" /></td>
          	        </tr>
            	    <tr>
            	      <td width="15%" height="25" align="right" class="texto_izq"><p><strong>Foto:</strong></p></td>
            	      <td width="85%" height="25" align="left" class="texto_der"><label>
            	        <input type="file" name="file" id="file" />
          	        </label></td>
          	      </tr>
            	    <tr>
            	      <td height="25" align="right" class="texto_izq"><p><strong>Descripcion:</strong></p></td>
            	      <td height="25" align="left" class="texto_der"><textarea name="descripcion" cols="70" rows="3" id="descripcion" title="Ingrese el Titulo que se mostrara en la ficha del Jugador"></textarea></td>
          	      </tr>
            	    <tr>
            	      <td height="25" colspan="2" align="left" class="texto_izq"><p><strong>Contenido:</strong></p></td>
           	        </tr>
            	    <tr>
            	      <td height="25" colspan="2" align="center" class="texto_izq"><label for="textarea"></label>
           	          <textarea class="ckeditor" cols="50" id="contenido2" name="contenido"><?php echo $fila_query2["contenido"] ?></textarea></td>
           	        </tr>
            	    <tr>
            	      <td height="35" align="right"><p><strong>Publicar:</strong></p></td>
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
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><input type="submit" name="guardar" id="guardar" value="Guardar" />                    <label>
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
