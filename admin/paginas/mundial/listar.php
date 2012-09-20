<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=utf-8");


//Funciones PHP para el ceabreado cada 1 elemento.
function alt ($cebra) {
	if ($cebra/2 == floor($cebra/2)) {
		return ' class="alt"';
	} else {
		return '';
	}
}
$cebra=1;
$url="listar.php";
$buscar=$_REQUEST["busqueda"];

	if ($_REQUEST["btnbuscar"]=="")
	{
		$rst_query=mysql_query("SELECT * FROM pf_mundial_post WHERE id>0 ORDER BY grupo ASC;", $conexion);
		$num_registros=mysql_num_rows($rst_query);
			
		$registros=20;	
		$pagina=$_GET["pag"];
		if (is_numeric($pagina))
		$inicio=(($pagina-1)*$registros);
		else
		$inicio=0;
		
		$rst_query=mysql_query("SELECT * FROM pf_mundial_post WHERE id>0 ORDER BY grupo ASC LIMIT $inicio, $registros;", $conexion);
		$paginas=ceil($num_registros/$registros);
	}
	
	//----------------------------------------------------------------------------------------------------------------------------
	//BUSQUEDA

	if ($_REQUEST["btnbuscar"]!="" || $_REQUEST["busqueda"]!="")
	{
		$rst_query=mysql_query("SELECT * FROM pf_mundial_post WHERE titulo LIKE '%$buscar%' ORDER BY grupo ASC;", $conexion);
		$num_registros=mysql_num_rows($rst_query);
		
		$registros=20;	
		$pagina=$_GET["pag"];
		if (is_numeric($pagina))
			$inicio=(($pagina-1)*$registros);
		else
			$inicio=0;
		
		$rst_query=mysql_query("SELECT * FROM pf_mundial_post WHERE titulo LIKE '%$buscar%' ORDER BY grupo ASC;LIMIT $inicio, $registros;", $conexion);
		$paginas=ceil($num_registros/$registros);
		
	}
	
	if ($num_registros==0)
	{
		if ($buscar!="")		
			$mensaje2="No hay registros con el nombre de: <b>$buscar</b>";
		else
			$mensaje2="No hay registros en la base de datos";
	}
	
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
	
?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css">

    <div id="contenido">
            	<div id="titulo_principal">
            	  <h2>Lista - Articulos Mundial</h2>
				</div><!-- FIN TITULO PRINCIPAL -->
                <div id="contenido_total">
                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="28%" height="30" align="center"><form id="form1" name="form1" method="get" action="listar.php">
                        <p>Buscar:
                          <input name="busqueda" type="text" id="busqueda" value="<?php echo $_GET["busqueda"]; ?>" />
                          <br />
                          <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
                        </p>
                      </form></td>
                    </tr>
                    <tr>
                      <td height="30" align="center"><p class="mensaje"><?php echo $mensaje; ?></p></td>
                    </tr>
                    <tr>
                      <td><table width="95%" align="center" cellpadding="5" cellspacing="0" id="cebreado-php">
                        <thead>
                          <tr class="titulo-campo">
                            <th width="60%" height="25">ARTICULO</th>
                            <th width="20%" align="center">GRUPO</th>
                            <th width="10%" height="25" align="center">Modificar</th>
                            <th width="10%" height="25" align="center">Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($fila=mysql_fetch_array($rst_query)){ ?>
                          <tr<?php echo alt($zebra); $zebra++; ?>>
                            <td width="60%"><p><?php echo substr($fila["titulo"],0, 35)."..."; ?></p></td>
                            <td width="20%" align="center"><p>
							<?php 
								$grupo=$fila["grupo"];
								$rst_grupo=mysql_query("SELECT * FROM pf_mundial_grupo WHERE id=$grupo;", $conexion);
								$fila_grupo=mysql_fetch_array($rst_grupo);
								echo $fila_grupo["grupo"];							
							?></p></td>
                            <td width="10%" align="center"><a href="form-modificar.php?id=<?php echo $fila["id"] ?>" target="mainFrame"><strong>Modificar</strong></a></td>
                            <td width="10%" align="center"><a href="form-eliminar.php?id=<?php echo $fila["id"] ?>"><strong>Eliminar</strong></a></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="30" align="center"><?php 
if ($_REQUEST["btnbuscar"]=="")
{
	if (!isset($_GET["pag"]))
	$pag = 1;
	else
	$pag = $_GET["pag"];

	function paginar($actual, $total, $por_pagina, $enlace, $maxpags=0)
	{
		$total_paginas = ceil($total/$por_pagina);
		$anterior = $actual - 1;
		$posterior = $actual + 1;
		$minimo = $maxpags ? max(1, $actual-ceil($maxpags/2)): 1;
		$maximo = $maxpags ? min($total_paginas, $actual+floor($maxpags/2)): $total_paginas;
		if ($actual>1)
		$texto = "<a href=\"$enlace$anterior\">Anterior</a> ";
		else
		$texto = "<b>&lt;&lt;</b> ";
		if ($minimo!=1) $texto.= "... ";
		for ($i=$minimo; $i<$actual; $i++)
		$texto .= "<a href=\"$enlace$i\">$i</a> ";
		$texto .= "<b>$actual</b> ";
		for ($i=$actual+1; $i<=$maximo; $i++)
		$texto .= "<a href=\"$enlace$i\">$i</a> ";
		if ($maximo!=$total_paginas) $texto.= "... ";
		if ($actual<$total_paginas)
		$texto .= "<a href=\"$enlace$posterior\">Siguiente</a>";
		else
		$texto .= "<b>&gt;&gt;</b>";
		return $texto;
	}
	echo paginar($pag, $num_registros, $registros, "$url?pag=", 10);
}
?>
                        <?php 
/*----------- PAGINACION CON SOLO DESTINO ------------------*/
if ($_REQUEST["btnbuscar"]!="" || $_REQUEST["busqueda"]!="")
{
	if (!isset($_GET["pag"]))
	$pag = 1;
	else
	$pag = $_GET["pag"];
	
	function paginar2($actual, $total, $por_pagina, $enlace, $maxpags=0)
	{
	$btn="Buscar";
	$busq=$_REQUEST["busqueda"];
	$total_paginas = ceil($total/$por_pagina);
	$anterior = $actual - 1;
	$posterior = $actual + 1;
	$minimo = $maxpags ? max(1, $actual-ceil($maxpags/2)): 1;
	$maximo = $maxpags ? min($total_paginas, $actual+floor($maxpags/2)): $total_paginas;
	if ($actual>1)
	$texto = "<a href=\"$enlace$anterior&busqueda=$busq&btnbuscar=$btn\">Anterior</a> ";
	else
	$texto = "<b>&lt;&lt;</b> ";
	if ($minimo!=1) $texto.= "... ";
	for ($i=$minimo; $i<$actual; $i++)
	$texto .= "<a href=\"$enlace$i&busqueda=$busq&btnbuscar=$btn\">$i</a> ";
	$texto .= "<b>$actual</b> ";
	for ($i=$actual+1; $i<=$maximo; $i++)
	$texto .= "<a href=\"$enlace$i&busqueda=$busq&btnbuscar=$btn\">$i</a> ";
	if ($maximo!=$total_paginas) $texto.= "... ";
	if ($actual<$total_paginas)
	$texto .= "<a href=\"$enlace$posterior&busqueda=$busq&btnbuscar=$btn\">Siguiente</a>";
	else
	$texto .= "<b>&gt;&gt;</b>";
	return $texto;
	}
	
	echo paginar2($pag, $num_registros, $registros, "$url?pag=", 10);
}
?></td>
                    </tr>
                    <tr>
                      <td height="30" align="center"><?php echo $mensaje2; ?></td>
                    </tr>
                  </table>
    </div></div><!-- FIN PANEL DERECHA -->