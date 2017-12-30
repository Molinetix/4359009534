<?php


if($_POST or ($_SESSION['busqueda'] and isset($_GET['pag']))){

	$template = new Smarty();
	$type = isset($_GET['type']) ? $_GET['type'] : null;
	if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){
		$pagina = $_GET['pag'];
	}else{
		$pagina = 1;
	}

	$db = new Conexion();
	$paginado = 1;
	$inicio = ($pagina - 1) * $paginado;

	if(isset($_SESSION['busqueda']) and !isset($_POST['busqueda'])){
		$busqueda = $_SESSION['busqueda'];
	}else{
		$busqueda = $_POST['busqueda'];
	}
	$_SESSION['busqueda'] = $busqueda;

	$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE titulo LIKE '%$busqueda%' and aprobado = 1;");
	$sql = $db->query("SELECT * FROM post WHERE titulo LIKE '%$busqueda%' and aprobado = 1 ORDER BY id DESC LIMIT $inicio,$paginado;");

	$result = $db->recorrer($cantidad);
	$result = $result[0];

	$paginas = ceil($result / $paginado);

	if($db->rows($sql) > 0){
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);


		while($x = $db->recorrer($sql)){

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
				'puntos' => $x['puntos']
			);
			}
			$prepare_sql->close();
			$template->assign('posts', $posts);
		}



	$db->liberar($sql, $cantidad);
	$db->close();

	$template->assign('titulo','Resultado de la busqueda');
	$template->assign('pags',$paginas);
	$template->display('home/index.tpl');
}else{
	header('location: ?view=index');

}

?>