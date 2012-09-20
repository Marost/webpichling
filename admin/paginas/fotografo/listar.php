<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
include("../../conexion/funcion-paginacion.php");
header("Content-Type: text/html; charset=utf-8");

$user=$_SESSION["user-dr16"];
$cebra=1;
$url="listar.php";
$buscar=$_REQUEST["busqueda"];

	$rst_query=mysql_query("SELECT * FROM pf_fotografo WHERE id>0 ORDER BY id DESC;", $conexion);
	$num_registros=mysql_num_rows($rst_query);
		
	$registros=20;	
	$pagina=$_GET["pag"];
	if (is_numeric($pagina))
	$inicio=(($pagina-1)*$registros);
	else
	$inicio=0;
	
	$rst_query=mysql_query("SELECT * FROM pf_fotografo WHERE id>0 ORDER BY id DESC LIMIT $inicio, $registros;", $conexion);
	$paginas=ceil($num_registros/$registros);
	
	if ($num_registros==0)
	{
		if ($buscar!="")		
			$mensaje2="No hay registros con el nombre: <b>$buscar</b>";
		else
			$mensaje2="No hay registros en la base de datos";
	}
	
	
	//------- MENSAJE DE ERROR
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
		
	//PRIVILEGIOS USUARIO
	/*$rst_query2=mysql_query("SELECT * FROM dr_privilegio_user WHERE usuario='$user';", $conexion);
	$fila_query2=mysql_fetch_array($rst_query2);
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css">
<script type="text/javascript">
function eliminarRegistro(registro, nombre) {
if(confirm("¿Está seguro de borrar este registro?\n"+nombre)) {
	document.location.href="eliminar.php?id="+registro;
	}
}
</script>
</head>
<body>
<div id="contenido">
    <div id="titulo_principal">
      <h2>Lista - Fotografos</h2></div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
    	<div id="mensaje" class="mensaje">
        	<p><?php echo $mensaje; ?></p>
        </div>
        <div id="contenido">
		  <form action="../../../admin/paginas/nacional/form-eliminar.php" method="post">
              <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2">
                      <table width="700" align="center" cellpadding="5" cellspacing="0" id="cebreado-php">
                        <thead>
                          <tr class="titulo-campo">
                            <th width="85%" height="22" align="left">fotografos</th>
                            <th width="15%" height="22" align="center">acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($fila=mysql_fetch_array($rst_query)){ ?>
                          <tr<?php echo alt($zebra); $zebra++; ?>>
                            <td width="85%">
                            	<p><strong class="up"><?php echo $fila["nombre_completo"]; ?></strong></p></td>
                            <td width="15%" align="center">

                            	<a onclick="eliminarRegistro(<?php echo $fila["id"] ?>, '<?php echo stripslashes(htmlspecialchars($fila["nombre_completo"])) ?>');" href="javascript:;">
                                <img src="../../images/eliminar_16.png" width="16" height="16" title="Eliminar registro" /></a>

                            &nbsp;

                            <a href="form-modificar.php?id=<?php echo $fila["id"] ?>">
                                <img src="../../images/editar_16.png" width="16" height="16" /></a>

&nbsp;
                           	    <a href="foto/listar.php?fotografo=<?php echo $fila["id"] ?>"><img src="../../images/noticia_portada.png" width="16" height="16" title="Galeria de Fotos" /></a>

                                </td>
                          </tr>
                          <?php } ?>
                        </tbody>
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
            </form>
      </div><!-- FIN CONTENIDO -->
  </div>
</div>
</body>
</html>