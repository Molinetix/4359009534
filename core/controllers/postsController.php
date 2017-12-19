<?php


if(isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1){

	$mode = isset($_GET['mode']) ? $_GET['mode'] : null;
	$id = intval($_GET['id']);
	$db = new Conexion();
	$sql = $db->query("SELECT titulo,content,dueno,votantes FROM post WHERE id='$id'");


	switch($mode) {
		case 'puntos':
			if(isset($_SESSION['id'],$_POST['points']) and is_numeric($_POST['points']) and $_POST['points'] >= 1 and $_POST['points'] <= 10){
				//Meno o igual a diez, mayor o igual a uno
				$post = $db->recorrer($sql);
				$votantes = explode(';',$post['votantes']);
				$id_user = $_SESSION['id'];

				if(!in_array($id_user, $votantes)){

					$puntos = intval($_POST['points']);
					$votantes = $post['votantes'] . $_SESSION['id'] . ';';

					$sql2 = $db->query("UPDATE post SET puntos=puntos + '$puntos', votantes='$votantes' WHERE id='$id';");
					echo 1;
					
					exit;
				}else{
					echo 2;
				}
				$db->liberar($sql);
				exit;
			} else {
				$db->liberar($sql);
				$db->close();
				header('location: ?view=posts&id=' . $id);
				exit;
			}
		break;
		case 'comentarios':
			if($_POST and isset($_SESSION['user'])){
				//Codigo comentarios

			} else {
				$db->liberar($sql);
				$db->close();
				header('location: ?view=posts&id=' . $id);
				exit;
			}
		break;
	}

	//Visualización de los posts
	$template = new Smarty();
	if($db->rows($sql) > 0){

		$post = $db->recorrer($sql);

		$id_creator = $post['dueno'];

		$sql2 = $db->query("SELECT user, online, ext FROM users WHERE id='$id_creator';");
		$user = $db->recorrer($sql2);

		if($user['online'] <= time()){
			$estado = 'Offline';
			$color_estado = '#FF0000';
		}else{
			$estado = 'Online';
			$color_estado = '#00FF00';
		}

		//Avatar
		if(file_exists('uploads/avatar/'.$id_creator.'.'.$user['ext'])){
			$ruta = 'uploads/avatar/'.$id_creator.'.'.$user['ext'];
		}else{
			$ruta = 'uploads/avatar/user.png';
		}

		require('core/libs/bbcode/BBcode.class.php');
		$content = BBcode($post['content']);
		
		$template->assign(array(
			'content'=> $content,
			'post'=>$post,
			'user'=>$user['user'],
			'estado'=>$estado,
			'color'=>$color_estado,
			'imagen'=>$ruta
			));

		$db->liberar($sql2);
	}

	$db->liberar($sql);
	$db->close();
	$template->display('post/posts.tpl');
}else{
	header('location: ?view=index');
}
?>