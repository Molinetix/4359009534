<?php 

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;


$db = new Conexion();


switch($type){
	case 'tops';
		echo 'tops';
	break;
	case '1';

	break;
	case '2';

	break;
	case '3';

	break;
	default;
		$sql = $db->query("SELECT * FROM post ORDER BY id DESC;");

		//PREPARADA
		$psql = "SELECT user FROM users WHERE id =?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);


		while($x = $db->recorrer($sql)){

			$id = $x['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();
			//TERMINA SENTENCIA PREPARADA

			$posts[] = array(
				'id' => $x['id'],
				'titulo' => $x['titulo'],
				'content' => $x['content'],
				'dueno' => $autor,
				'id_dueno' => $id,
				'puntos' => $x['puntos']
			);
		}
		$template->assign('posts', $posts);
	break;
}

$template->display('home/index.tpl');

?>