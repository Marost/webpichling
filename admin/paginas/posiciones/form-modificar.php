<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");

$id=$_REQUEST["id"];
	$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija WHERE id=$id;", $conexion);
	$fila_query=mysql_fetch_array($rst_posicion);
?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Posicion</h2>
</div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td height="45" align="center"><input name="posicion" type="text" id="posicion" value="<?php echo $fila_query["posicion"]; ?>" size="50" /></td>
          	      </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><label>
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
