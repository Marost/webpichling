<?php
include("../../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");
$idfotografo=$_REQUEST["fotografo"];
?>
<link rel="stylesheet" type="text/css" href="../../../css/style-listas.css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Foto</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php?fotografo=<?php echo $idfotografo; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td colspan="2" align="center">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td width="20%" height="30" align="right" class="texto_izq"><p><strong>Foto:</strong></p></td>
            	      <td width="80%" height="30" align="left" class="texto_der"><label for="archivo"></label>
           	          <input type="file" name="archivo" id="archivo" /></td>
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
