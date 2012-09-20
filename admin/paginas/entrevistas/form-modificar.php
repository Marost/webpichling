<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

	$rst_publicar=mysql_query("SELECT * FROM pf_publicar ORDER BY publicar DESC;", $conexion);
	
	$rst_query=mysql_query("SELECT * FROM pf_entrevista_mes WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script type="text/javascript" src="../../js/ckeditor.js"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Entrevista</h2>
</div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td width="16%" height="45" align="right"><p><strong>Nombre:</strong></p></td>
            	      <td width="84%" height="45" align="left"><input name="nombre" type="text" id="nombre" value="<?php echo $fila_query["nombre"] ?>" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td height="25" align="right" class="texto_izq"><p><strong>Foto:</strong></p></td>
            	      <td height="25" align="left" class="texto_der"><label>
            	        <input type="file" name="file" id="file4" />
          	        </label></td>
          	      </tr>
            	    <tr>
            	      <td height="25" align="right" class="texto_izq"><p><strong>Foto actual:</strong></p></td>
            	      <td height="25" align="left" class="texto_der"><img src="../../../imagenes/upload/escala150.php?imagen=<?php echo $fila_query["foto"]; ?>" alt="" />
            	        <input name="img-actual" type="hidden" id="img-actual3" value="<?php echo $fila_query["foto"]; ?>" /></td>
          	      </tr>
            	    <tr>
            	      <td height="25" align="right" class="texto_izq"><p><strong>Descripcion:</strong></p></td>
            	      <td height="25" align="left" class="texto_der"><textarea name="descripcion" cols="70" rows="3" id="descripcion" title="Ingrese el Titulo que se mostrara en la ficha del Jugador"><?php echo $fila_query["texto_corto"] ?></textarea></td>
          	      </tr>
            	    <tr>
            	      <td height="25" colspan="2" align="left" class="texto_izq"><p><strong>Contenido:</strong></p></td>
          	      </tr>
            	    <tr>
            	      <td height="25" colspan="2" align="center" class="texto_izq"><label for="textarea"></label>
            	        <textarea class="ckeditor" cols="50" id="contenido2" name="contenido"><?php echo $fila_query["contenido"] ?></textarea></td>
          	      </tr>
            	    <tr>
            	      <td height="35" align="center"><p><strong>Publicar:</strong></p></td>
            	      <td height="35"><span id="spryselect3">
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
