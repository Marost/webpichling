<?php
	include("conexion/verificar_sesion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<title>Administracion de Contenido</title>

<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//Menu desplegable
	$("#menu ul li ul").hide();	
	$("#menu ul li span.current").addClass("open").next("ul").show();
	$("#menu ul li span").click(function(){	
		$(this).next("ul").slideToggle("slow").parent("li").siblings("li").find("ul:visible").slideUp("slow");
		$("#menu ul li").find("span").removeClass("open");
		$(this).addClass("open");
	});

});
</script>
</head>

<body>
<div id="menu">
        <h3>Administrar</h3>
  <div id="datos-usuario">
        	Usuario: <strong><?php echo $_SESSION["user"]; ?></strong><br />
        	Nombre: <strong><?php echo $_SESSION["user_nombre"]; ?> <?php echo $_SESSION["user_apellido"]; ?></strong><br /><br />
	  <a href="conexion/salir.php" target="_top"><strong>Cerrar sesión</strong></a>
    </div>
        <ul>
            <li><span <?php if($p == "opciones"){echo 'class="current"';} ?>><a href="javascript:void(0);" id="link-entrevista">Entrevistas</a></span>
                <ul>
                    <li><a href="paginas/entrevistas/form-agregar.php" target="mainFrame" class="add">Agregar</a></li>
                    <li><a href="paginas/entrevistas/listar.php" target="mainFrame" class="list">Listar</a></li>
                </ul>
            </li>
            <li><span <?php if($p == "opciones"){echo 'class="current"';} ?>><a href="javascript:void(0);" id="link-noticia">Noticias</a></span>
                <ul>
                    <li><a href="paginas/noticias/form-agregar.php" target="mainFrame" class="add">Agregar</a></li>
                    <li><a href="paginas/noticias/listar.php" target="mainFrame" class="list">Listar</a></li>
                </ul>
            </li>
            <li><span <?php if($p == "opciones"){echo 'class="current"';} ?>><a href="javascript:void(0);" id="link-columnista">Columnas</a></span>
                <ul>
                    <li><a href="paginas/columnas/form-agregar.php" target="mainFrame" class="add">Agregar</a></li>
                    <li><a href="paginas/columnas/listar.php" target="mainFrame" class="list">Listar</a></li>
                    
                </ul>
            </li>
            <li><span <?php if($p == "opciones"){echo 'class="current"';} ?>><a href="javascript:void(0);" id="link-jugadores">Jugadores</a></span>
                <ul>
                    <li><a href="paginas/posiciones/listar.php" target="mainFrame" class="add">Posiciones</a></li>
                    <li><a href="paginas/jugadores/listar.php" target="mainFrame" class="list">Jugadores</a></li>
                </ul>
            </li>
            <li><span <?php if($p == "categorias"){echo 'class="current"';} ?>><a href="javascript:void(0);" id="link-info">Galería Fotográfica</a></span>
                <ul>
                    <li><a href="paginas/fotografo/form-agregar.php" target="mainFrame" class="add">Agregar</a></li>
                    <li><a href="paginas/fotografo/listar.php" target="mainFrame" class="list">Listar</a></li>
                </ul>
            </li>
        </ul>
</div>
    <!--/menu-->
</body>
</html>
