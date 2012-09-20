<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_idioma=mysql_query("SELECT * FROM ub_idioma WHERE id>0 ORDER BY idioma ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM ub_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	
	$rst_query=mysql_query("SELECT * FROM ub_servicios WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

?>
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Eliminar - Servicio</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="../Copia de servicios/eliminar.php?id=<?php echo $_REQUEST["id"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3" align="center"><input type="submit" name="eliminar2" id="eliminar2" value="Eliminar" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><span class="texto_negro16-MyriadPro">Nombre Menu: </span><?php echo $fila_query["nombre_menu"]; ?></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><span class="texto_negro16-MyriadPro">Titulo: </span><?php echo $fila_query["titulo"]; ?></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="5" class="texto_negro16-MyriadPro">Contenido:</td>
                </tr>
                <tr>
                  <td colspan="5" align="left"><p><?php echo $fila_query["contenido"]; ?></p></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">Idioma:</td>
                <td colspan="3">
						  <?php
                            if ($fila_query["idioma"]==1)
								echo "Español";
							else
							{
								if ($fila_query["idioma"]==2)
									echo "Catalan";
							}
                          ?>
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
                  <td colspan="3">
                      <?php
							if ($fila_query["publicar"]==1)
								echo "SI";
							else
							{
								if ($fila_query["publicar"]==2)
									echo "NO";
							}
					  ?>
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
                    <input type="submit" name="eliminar" id="eliminar" value="Eliminar" />
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
