<?php
include("../../conexion/conexion.php");
//header("Content-Type: text/html; charset=iso-8859-1");
header("Content-Type: text/html; charset=utf-8");

	$rst_query=mysql_query("SELECT * FROM pf_columnista ORDER BY nombre_completo ASC;", $conexion);
	$rst_query2=mysql_query("SELECT * FROM pf_columnas WHERE id=". $_REQUEST["id"] .";", $conexion);
	$fila_query2=mysql_fetch_array($rst_query2);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script type="text/javascript" src="../../js/ckeditor.js"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Columna</h2>
</div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td colspan="2">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="17%" height="35" align="center"><p><strong>Titulo:</strong></p></td>
            	      <td width="83%" height="35" align="left"><input name="titulo" type="text" id="titulo" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="<?php echo $fila_query2["titulo"] ?>" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td height="35" align="center"><p><strong>Contenido:</strong></p></td>
            	      <td height="35" align="left">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td height="35" colspan="2" align="center"><p>
            	        <textarea class="ckeditor" cols="50" id="contenido2" name="contenido" rows="10"><?php echo $fila_query2["contenido"] ?></textarea>
          	        </p></td>
          	      </tr>
            	    <tr>
            	      <td height="35" align="center"><p><strong>Columnista:</strong></p></td>
            	      <td height="35" align="left"><span id="spryselect4">
            	        <select name="columnista" id="columnista">
            	          <option selected="selected" value="">[Selecciona una posicion]</option>
            	          <?php
							  	while ($fila=mysql_fetch_array($rst_query))
								{
									if ($fila["id"]==$fila_query2["id_autor"])
                                    	echo "<option selected=''  value='". $fila["id"] ."'>". $fila["nombre_completo"] ."</option>";
                                	else
										echo "<option value='". $fila["id"] ."'>". $fila["nombre_completo"] ."</option>";
								}
							  ?>
          	          </select>
            	        <span class="selectRequiredMsg">Seleccione una posicion</span></span></td>
          	      </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><label>
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
<script type="text/javascript">
<!--
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
//-->
</script>