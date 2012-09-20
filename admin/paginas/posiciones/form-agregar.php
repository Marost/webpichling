<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");
?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Posicion</h2>
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
            	      <td height="33" colspan="2" align="center"><input name="posicion" type="text" id="posicion" title="Ingrese el Titulo que se mostrara en la ficha del Jugador" value="" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td colspan="2">&nbsp;</td>
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
