<?php 


if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'],$_SESSION['admin'])){

		$template = new Smarty();
		$type = isset($_GET['type']) ? $_GET['type'] : null;
		if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){ 
			$pagina = $_GET['pag'];
		} else {
			$pagina = 1;
		};

		$db = new Conexion();


		$paginado = 8;
		$inicio = ($pagina - 1) * $paginado;


		$cantidad = $db->query('SELECT COUNT(*) FROM post;');
		$sql = $db->query("SELECT * FROM post WHERE aprobado = 0 ORDER BY id ASC LIMIT $inicio,$paginado;");
		$template->assign('titulo', 'Posts en espera');
			


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
						'id_dueno' => $id
					);
					}
					$prepare_sql->close();
					$template->assign('posts', $posts);
				}



		$db->liberar($sql, $cantidad);
		$db->close();
		$template->assign('pags', $paginas);

		if($_POST){

			echo "<script>console.log('dentro')</script>;"
		}

		$template->display('validar/validar.tpl');
		}else{
	header('location: ?view=login');
}

?>