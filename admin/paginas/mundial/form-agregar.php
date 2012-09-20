<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

	$rst_query=mysql_query("SELECT * FROM pf_mundial_autor ORDER BY autor ASC;", $conexion);
	$rst_query1=mysql_query("SELECT * FROM pf_mundial_grupo ORDER BY grupo ASC;", $conexion);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Articulo Mundial</h2>
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
            	      <td height="35" align="center"><p><strong>Titulo:</strong></p></td>
            	      <td height="35" align="left"><input name="titulo" type="text" id="titulo" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="" size="50" /></td>
          	        </tr>
            	    <tr>
            	      <td height="35" align="center"><p><strong>Contenido:</strong></p></td>
            	      <td height="35" align="left">&nbsp;</td>
           	        </tr>
            	    <tr>
            	      <td height="35" colspan="2" align="center"><p>
            	        <textarea class="ckeditor" cols="50" id="contenido2" name="contenido" rows="10"></textarea>
            	      </p></td>
           	        </tr>
            	    <tr>
            	      <td width="20%" height="35" align="center"><p><strong>Autor:</strong></p></td>
            	      <td width="80%" height="35" align="left"><span id="spryselect2">
            	        <select name="autor" id="autor">
            	          <option selected="selected" value="">[Selecciona una posicion]</option>
            	          <?php
							  	while ($fila=mysql_fetch_array($rst_query))
								{
									echo "<option value='". $fila["id"] ."'>". $fila["autor"] ."</option>";
								}
							  ?>
          	          </select>
           	          <span class="selectRequiredMsg">Seleccione un elemento.</span></span></td>
          	      </tr>
            	    <tr>
            	      <td height="35" align="center"><p><strong>Grupo:</strong></p></td>
            	      <td height="35" align="left"><span id="spryselect">
            	        <select name="grupo" id="grupo">
                          <option selected="selected" value="">[Selecciona una opcion]</option>
                          <?php
							  	while ($fila1=mysql_fetch_array($rst_query1))
								{
									echo "<option value='". $fila1["id"] ."'>". $fila1["grupo"] ."</option>";
								}
							  ?>
                      </select>
            	        <span class="selectRequiredMsg">Seleccione un elemento.</span></span></td>
          	      </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><label>
                    <span class="texto_negro16-MyriadPro">
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    </span>
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
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect = new Spry.Widget.ValidationSelect("spryselect");
//-->
</script>
