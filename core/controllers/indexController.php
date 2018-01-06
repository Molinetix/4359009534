<?php 

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;

if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){ 
	$pagina = $_GET['pag'];
} else {
	$pagina = 1;
};

if(isset($_GET['pag_evt']) and is_numeric($_GET['pag_evt']) and $_GET['pag_evt'] >= 1){ 
	$pagina_evt = $_GET['pag_evt'];
} else {
	$pagina_evt = 1;
};


$db = new Conexion();


$paginado = 5;

$inicio = ($pagina - 1) * $paginado;

$paginado_evt = 4;

$inicio_evt = ($pagina_evt -1) * $paginado_evt;


switch($type){
	case 'tops';
		$cantidad = $db->query('SELECT COUNT(*) FROM post;');
		$sql = $db->query("SELECT * FROM post WHERE aprobado='1' ORDER BY puntos DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$template->assign('titulo', 'Los mejores');
	break;
	case '1';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='1'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='1' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='1';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='1' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='1' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Andalucía');
	break;
	case '2';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='2'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='2' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='2';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='2' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='2' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Aragón');
	break;
	case '3';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='3'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='3' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='3';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='3' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='3' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Asturias');
	break;
	case '4';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='4'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='4' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='4';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='4' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='4' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Baleares');
	break;
	case '5';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='5'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='5' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='5';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='5' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='5' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Canarias');
	break;
	case '6';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='6'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='6' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='6';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='6' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='6' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Cantabria');
	break;
	case '7';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='7'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='7' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado_evt;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='7';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='7' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='7' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Castilla-La Mancha');
	break;
	case '8';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='8'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='8' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='8';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='8' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='8' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Castilla y León');
	break;
	case '9';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='9'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='9' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='9';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='9' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='9' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Cataluña');
	break;
	case '10';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='10'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='10' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='10';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='10' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='10' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Extremadura');
	break;
	case '11';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='11'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='11' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='11';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='11' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='11' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Galicia');
	break;
	case '12';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='12'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='12' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='12';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='12' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='12' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'La Rioja');
	break;
	case '13';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='13'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='13' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='13';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='13' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='13' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Madrid');
	break;
	case '14';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='14'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='14' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='14';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='14' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='14' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Murcia');
	break;
	case '15';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='15'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='15' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='15';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='15' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='15' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Navarra');
	break;
	case '16';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='16'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='16' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='16';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='16' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='16' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'País Vasco');
	break;
	case '17';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='17'and aprobado='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='17' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query("SELECT COUNT(*) FROM evento WHERE comunidad='17';");
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento WHERE comunidad ='17' ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE categoria='17' and tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'Valencia');
	break;
	default;
		$cantidad = $db->query('SELECT COUNT(*) FROM post WHERE aprobado="1";');
		$sql = $db->query("SELECT * FROM post WHERE aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$cantidad_eventos = $db->query('SELECT COUNT(*) FROM evento;');
		$sql2 = $db->query("SELECT id, organizador, comunidad, STR_TO_DATE( fecha,  '%d-%m-%Y' ) AS fecha_cambiada FROM evento ORDER BY fecha_cambiada DESC LIMIT $inicio_evt,$paginado_evt;");
		$sql3 = $db->query("SELECT * FROM post WHERE tipo_pez='carpa' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql4 = $db->query("SELECT * FROM post WHERE tipo_pez='siluro' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql5 = $db->query("SELECT * FROM post WHERE tipo_pez='bass' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql6 = $db->query("SELECT * FROM post WHERE tipo_pez='lucio' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql7 = $db->query("SELECT * FROM post WHERE tipo_pez='lucioperca' and aprobado='1' ORDER BY peso DESC limit 3");
		$sql8 = $db->query("SELECT * FROM post WHERE tipo_pez='barbo' and aprobado='1' ORDER BY peso DESC limit 3");
		$template->assign('titulo', 'España');

	break;
}


$result = $db->recorrer($cantidad);	
$result = $result[0];

$paginas = ceil($result / $paginado);


if($db->rows($sql) > 0){

		while($x = $db->recorrer($sql)){

			$votantes = explode(';',$x['votantes']);
			$num_votantes = count($votantes) - 1;

			if($num_votantes > 0){
			$media = $x['puntos'] / $num_votantes;
			}else{
			$media = 0;
			}

			//Obtenemos los nombres de los usuarios
			$id = intval($x['dueno']);
			$nombre_usuario = $db->query("SELECT user FROM users WHERE id=$id;");
			$resultado_usuario = $db->recorrer($nombre_usuario);

			//Obtenemos el total de comentarios de cada post
			$id_post = intval($x['id']);
			$total_comentarios = $db->query("SELECT COUNT(*) FROM comentarios WHERE id_post=$id_post;");
			$resultado_comentarios = $db->recorrer($total_comentarios);

			$posts[] = array(
				'id' => $x['id'],
				'titulo' => $x['titulo'],
				'content' => $x['content'],
				'dueno' => $resultado_usuario[0],
				'id_dueno' => $id,
				'puntos' => $media,
				'total' => $resultado_comentarios[0]
			);
			$db->liberar($nombre_usuario,$resultado_usuario,$total_comentarios,$resultado_comentarios);
			}
			$template->assign('posts', $posts);
		}

$result_eventos = $db->recorrer($cantidad_eventos);	
$result_eventos = $result_eventos[0];

$paginas_eventos = ceil($result_eventos / $paginado_evt);

if($db->rows($sql2) > 0){

		while($e = $db->recorrer($sql2)){


			$fecha_actual = strtotime(date("d-m-Y",time()));
			$fecha_entrada = strtotime($e['fecha_cambiada']);
			if($fecha_actual > $fecha_entrada){
			        $color_fecha = "red";
			}else{
			        $color_fecha = "green";
			}

			$eventos[] = array(
				'id_evento' => $e['id'],
				'organizador_evento' => $e['organizador'],
				'fecha_evento' => $e['fecha_cambiada'],
				'lugar_evento' => $e['comunidad'],
				'color_fecha' => $color_fecha
			);
			}
			$template->assign('eventos', $eventos);
		}

if($db->rows($sql3) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql3)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$carpa[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('carpa', $carpa);
		}

if($db->rows($sql4) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql4)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$siluro[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('siluro', $siluro);
		}

if($db->rows($sql5) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql5)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$bass[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('bass', $bass);
		}

if($db->rows($sql6) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql6)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$lucio[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('lucio', $lucio);
		}

if($db->rows($sql7) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql7)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$lucioperca[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('lucioperca', $lucioperca);
		}

if($db->rows($sql8) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		$contador = 0;
		while($c = $db->recorrer($sql3)){
		$contador += 1;

		$id = $c['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();

			$barbo[] = array(
				'id' => $c['id'],
				'id_dueno' => $c['dueno'],
				'ranking' =>$contador,
				'fecha' => $c['fecha'],
				'dueno' => $autor,
				'peso' => $c['peso'],
				'longitud' => $c['longitud']
			);
			}
			$prepare_sql->close();
			$template->assign('barbo', $barbo);
		}





$db->liberar($sql, $cantidad,$sql2, $cantidad_eventos, $sql3,$sql4,$sql5,$sql6,$sql7,$sql8);
$db->close();
$template->assign('pags_evt',$paginas_eventos);
$template->assign('pags', $paginas);
$template->display('home/index.tpl');

?>