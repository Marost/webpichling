<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
include("../../../conexion/funcion-paginacion.php");
header("Content-Type: text/html; charset=utf-8");

	$user=$_SESSION["user-dr16"];
	$cebra=1;
	$url="listar.php";
	$buscar=$_REQUEST["busqueda"];
	$idfotografo=$_REQUEST["fotografo"];

	$rst_query=mysql_query("SELECT * FROM pf_fotografo_foto WHERE id>0 AND fotografo=$idfotografo ORDER BY id DESC;", $conexion);
	$num_registros=mysql_num_rows($rst_query);
		
	$registros=100;	
	$pagina=$_GET["pag"];
	if (is_numeric($pagina))
	$inicio=(($pagina-1)*$registros);
	else
	$inicio=0;
	
	$rst_query=mysql_query("SELECT * FROM pf_fotografo_foto WHERE id>0 AND fotografo=$idfotografo ORDER BY id DESC LIMIT $inicio, $registros;", $conexion);
	$paginas=ceil($num_registros/$registros);
		
	if ($num_registros==0)
	{
		if ($buscar!="")		
			$mensaje2="No hay registros con el nombre: <b>$buscar</b>";
		else
			$mensaje2="No hay registros en la base de datos";
	}
	
	// MENSAJE DE ERROR
	if($_REQUEST["mensaje"]==1)
	{
		$mensaje="El registro fue agregado exitosamente";
	}elseif($_REQUEST["mensaje"]==2)
			$mensaje="El registro fue modificado exitosamente";
	elseif($_REQUEST["mensaje"]==3)
			$mensaje="El registro fue eliminado exitosamente";
	elseif($_REQUEST["mensaje"]==4)
			$mensaje="Se ha producido un error al ingresar el nuevo registro";
	elseif($_REQUEST["mensaje"]==5)
			$mensaje="Se ha producido un error al modificar el registro";
	elseif($_REQUEST["mensaje"]==6)
			$mensaje="Se ha producido un error al eliminar el registro";	
	
	//PRIVILEGIOS USER
	/*$rst_query3=mysql_query("SELECT * FROM dr_privilegio_user WHERE usuario='$user'", $conexion);
	$fila_query3=mysql_fetch_array($rst_query3);*/
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../../../css/style-listas.css">
<script type="text/javascript">
function eliminarRegistro(registro, fotografo) {
if(confirm("¿Está seguro de borrar este registro?")) {
	document.location.href="eliminar.php?id="+registro+"&fotografo="+fotografo;
	}
}
</script>
</head>
<body>
<div id="contenido">
    <div id="titulo_principal">
      <h2>Lista - Fotos</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
    	<div id="mensaje" >
    	  <p class="mensaje"><?php echo $mensaje; ?></p>
        </div>
        <div id="contenido">

              <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2" ><p><a href="form-agregar.php?fotografo=<?php echo $idfotografo; ?>"><strong>AGREGAR FOTOS</strong></a></p></td>
                  </tr>
                  <tr>
                    <td colspan="2" >
                      <table width="740" border="0" align="center" cellpadding="10" cellspacing="0">
			 <?php 
                            while($fila_query2 = mysql_fetch_array($rst_query)){
                                    if ($contador_noticia==0) {echo '<tr>';}
                               echo '<td width="185" valign="baseline" align="center">'; ?>
                                       <img src="../../../../imagenes/fotos/escala-180x140.php?imagen=<?php echo $fila_query2["foto"] ?>" /><br /><br />
                                       <a onclick="eliminarRegistro(<?php echo $fila_query2["id"] ?>, <?php echo $idfotografo ?>);" href="javascript:;">
                                       	<img src="../../../images/eliminar_16.png" width="16" height="16" title="Eliminar registro" /></a>
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a href="form-modificar.php?id=<?php echo $fila_query2["id"] ?>&fotografo=<?php echo $idfotografo ?>">
                                       <img src="../../../images/editar_16.png" width="16" height="16" /></a>
                            	<?php echo '</td>'; $contador_noticia++;
                               if ($contador_noticia==4){ $contador_noticia=0; echo '</tr><tr><td>&nbsp;</td></tr>';}
                            } ?>
                        </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2" align="center">
                    <?php 
                    if ($_REQUEST["btnbuscar"]=="")
                    {
                    if (!isset($_GET["pag"]))
                    $pag = 1;
                    else
                    $pag = $_GET["pag"];
                    echo paginar($pag, $num_registros, $registros, "$url?pag=", 10);
                    }
                    ?>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2" align="center"><p><?php echo $mensaje2; ?></p></td>
                  </tr>
          </table>

      </div><!-- FIN CONTENIDO -->
  </div>
</div>
</body>
</html>