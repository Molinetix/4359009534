<?php


if(isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1){

	require('core/libs/bbcode/BBcode.class.php');
	$mode = isset($_GET['mode']) ? $_GET['mode'] : null;
	$id = intval($_GET['id']);
	$db = new Conexion();
	$sql = $db->query("SELECT id,titulo,content,dueno,votantes,imagenes,aprobado FROM post WHERE id='$id';");
	$sql3 = $db->query("SELECT id,id_dueno_coment,id_post,comentario FROM comentarios WHERE id_post='$id';");


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
			if(isset($_POST['comentario']) and $_POST['comentario']!='' and isset($_SESSION['user'])){
				$id_user = $_SESSION['id'];
				//Contenido
				$contenido_coment = BBcode($_POST['comentario']);
				//Codigo comentarios
				$sql4 = $db->query("INSERT INTO comentarios (id_dueno_coment,id_post,comentario) values ('$id_user','$id','$contenido_coment');");

				if($db->affected_rows > 0){
					echo 1;
					}else{
					echo 2;
					}

			} else {
				echo 2;
				$db->liberar($sql);
				$db->close();
				header('location: ?view=posts&id=' . $id);
				exit;
			}
		break;
		case 'editar':
			if(isset($_POST['editar_comentario']) and $_POST['editar_comentario']!='' and isset($_SESSION['user'])){
				//Editar comentario
				$edit_coment = BBcode($_POST['editar_comentario']);
				$id_comentario = intval($_POST['id_comentario']);
				//Codigo comentarios
				$sql4 = $db->query("UPDATE comentarios SET comentario='$edit_coment' WHERE id='$id_comentario';");

				if($db->affected_rows > 0){
					echo 1;
					}else{
					echo 2;
					}

			} else {
				echo 2;
				$db->liberar($sql);
				$db->close();
				header('location: ?view=posts&id=' . $id);
				exit;
			}
		break;
		case 'eliminar':
		if(isset($_POST['eliminar_comentario']) and $_POST['eliminar_comentario']!='' and isset($_SESSION['user'])){
				$eliminar_coment = intval($_POST['eliminar_comentario']);
				//Codigo comentarios
				$sql5 = $db->query("DELETE FROM comentarios WHERE id = $eliminar_coment;");

				if($db->affected_rows > 0){
					echo 1;
					}else{
					echo 2;
					}

			} else {
				echo 2;
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

		//Contenido
		$content = BBcode($post['content']);

		//Imagenes
		if(!empty($post['imagenes'])){
		$imagenes = explode(';',$post['imagenes']);
		}else{
		$imagenes = ['','','',''];
		}

		$busca_votantes = explode(';',$post['votantes']);

		if(isset($_SESSION['id'])){
			if(in_array($_SESSION['id'], $busca_votantes)){
				$ha_votado = 1;
			}else{
				$ha_votado = 0;
			}
		}else{
			$ha_votado = 0;
		}

		
		$template->assign(array(
			'content'=> $content,
			'post'=>$post,
			'user'=>$user['user'],
			'estado'=>$estado,
			'color'=>$color_estado,
			'imagen'=>$ruta,
			'imagenkg'=>$imagenes[0],
			'imagencm' => $imagenes[1],
			'imagen1' => $imagenes[2],
			'imagen2' =>$imagenes[3],
			'vota' => $ha_votado
			));

		$db->liberar($sql2);
	}


	//Seleccionamos los comentarios
	if($db->rows($sql3) > 0){

		while($comentario = $db->recorrer($sql3)){

		$id_user = $comentario['id_dueno_coment'];
		$sql2 = $db->query("SELECT user, online, ext FROM users WHERE id='$id_user';");
		$info_usuario = $db->recorrer($sql2);

		if($info_usuario['online'] <= time()){
			$estado = 'Offline';
			$color_estado = '#FF0000';
		}else{
			$estado = 'Online';
			$color_estado = '#00FF00';
		}


			$comentarios[] = array(
				'id' => $comentario['id'],
				'id_autor'=>$comentario['id_dueno_coment'],
				'autor' => $info_usuario['user'],
				'estado' => $estado,
				'color' => $color_estado,
				'ext' =>$info_usuario['ext'],
				'id_post' => $comentario['id_post'],
				'coment' => $comentario['comentario']
			);
			}
			$template->assign('comentarios', $comentarios);
		}


	$db->liberar($sql,$sql3);
	$db->close();
	$template->display('post/posts.tpl');
}else{
	header('location: ?view=index');
}
?>