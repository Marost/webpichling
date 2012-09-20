<?php
function fecha(){
	$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
	$dia = date(j); // devuelve el día del mes
	$dia2 = date(w); // devuelve el número de día de la semana
	$mes = date(n)-1; // devuelve el número del mes
	$ano = date(Y); // devuelve el año
	$fecha = $dia." de ".$meses[$mes]." de ".$ano;
	return $fecha;
}

function alt ($cebra) {
	if ($cebra/2 == floor($cebra/2)) {
		return ' class="alt"';
	} else {
		return '';
	}
}
?>