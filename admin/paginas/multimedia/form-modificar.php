<?php
	//include("../Copia de servicios/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_idioma=mysql_query("SELECT * FROM ub_idioma WHERE id>0 ORDER BY idioma ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM ub_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	
	$rst_query=mysql_query("SELECT * FROM ub_servicios WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

?>
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<script type="text/javascript" src="../../js/ckeditor.js"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Servicios</h2>
</div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="../Copia de servicios/actualizar.php?id=<?php echo $_REQUEST["id"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><label> <span class="texto_negro16-MyriadPro">Nombre Menu:</span>
                      <input name="nombre_menu" type="text" id="nombre_menu" value="<?php echo $fila_query["nombre_menu"]; ?>" size="80" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><label> <span class="texto_negro16-MyriadPro">Titulo:</span>
                      <input name="titulo" type="text" id="titulo" value="<?php echo $fila_query["titulo"]; ?>" size="80" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" class="texto_negro16-MyriadPro">Contenido:</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><textarea class="ckeditor" cols="80" id="contenido2" name="contenido" rows="10"><?php echo $fila_query["contenido"]; ?></textarea></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">Idioma:</td>
                <td colspan="3"><span id="spryselect1">
                    <select name="idioma" id="idioma">
                      <option value="0">[ Seleccionar opcion ]</option>
						  <?php
                            while ($fila1=mysql_fetch_array($rst_idioma))
                            {
                                if ($fila1["id"]==$fila_query["idioma"])
                                    echo "<option selected=''  value='". $fila1["id"] ."'>". $fila1["idioma"] ."</option>";
                                else
                                    echo "<option value='". $fila1["id"] ."'>". $fila1["idioma"] ."</option>";
                            }
                          ?>
                    </select>
                  <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                  <td width="23%">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                  <td width="28%">&nbsp;</td>
                  <td width="8%">&nbsp;</td>
                  <td width="23%" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">Publicar:</td>
                  <td colspan="3"><span id="spryselect2">
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
                  <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td colspan="3" align="center"><label>
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    &nbsp;
                    <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                  </label></td>
                  <td>&nbsp;</td>
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
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"0"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"0"});
//-->
</script>
