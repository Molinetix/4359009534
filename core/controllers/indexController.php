<?php 

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;
if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){ 
	$pagina = $_GET['pag'];
} else {
	$pagina = 1;
};

$db = new Conexion();


$paginado = 5;
$inicio = ($pagina - 1) * $paginado;


switch($type){
	case 'tops';
		$cantidad = $db->query('SELECT COUNT(*) FROM post;');
		$sql = $db->query("SELECT * FROM post ORDER BY puntos DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Los mejores');
	break;
	case '1';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='1';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Andalucía');
	break;
	case '2';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='2';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='2' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Aragón');
	break;
	case '3';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='3';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='3' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Asturias');
	break;
	case '4';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='4';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='4' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Baleares');
	break;
	case '5';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='5';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='5' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Canarias');
	break;
	case '6';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='6';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='6' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Cantabria');
	break;
	case '7';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='7';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='7' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Castilla-La Mancha');
	break;
	case '8';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='8';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='8' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Castilla y León');
	break;
	case '9';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='9';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='9' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Cataluña');
	break;
	case '10';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='10';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='10' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Extremadura');
	break;
	case '11';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='11';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='11' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Galicia');
	break;
	case '12';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='12';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='12' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en La Rioja');
	break;
	case '13';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='13';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='13' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Madrid');
	break;
	case '14';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='14';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='14' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Murcia');
	break;
	case '15';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='15';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='15' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Navarra');
	break;
	case '16';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='16';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='16' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en País Vasco');
	break;
	case '17';
		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE categoria='17';");
		$sql = $db->query("SELECT * FROM post WHERE categoria='17' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Capturas en Valencia');
	break;
	default;
		$cantidad = $db->query('SELECT COUNT(*) FROM post;');
		$sql = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Últimas capturas');

	break;
}


$result = $db->recorrer($cantidad);	
$result = $result[0];

$paginas = ceil($result / $paginado);



if($db->rows($sql) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);


		while($x = $db->recorrer($sql)){

			$votantes = explode(';',$x['votantes']);
			$num_votantes = count($votantes) - 1;
			echo "<script>console.log($num_votantes)</script>";

			if($num_votantes > 0){
			$media = $x['puntos'] / $num_votantes;
			}else{
			$media = 0;
			}

			$id = $x['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();
		

			$posts[] = array(
				'id' => $x['id'],
				'titulo' => $x['titulo'],
				'content' => $x['content'],
				'dueno' => $autor,
				'id_dueno' => $id,
				'puntos' => $media
			);
			}
			$prepare_sql->close();
			$template->assign('posts', $posts);
		}



$db->liberar($sql, $cantidad);
$db->close();
$template->assign('pags', $paginas);
$template->display('home/index.tpl');

?>