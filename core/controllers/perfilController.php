<?php

if(isset($_GET['user']) and is_numeric($_GET['user']) and $_GET['user'] >= 1){
	$db = new Conexion();
	$id = intval($_GET['user']);
	$sql = $db->query("SELECT * FROM users WHERE id='$id'");


	$template = new Smarty();
	if($db->rows($sql) > 0){

		//PAGINACION
		if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){ 
			$pagina = $_GET['pag'];
		} else {
			$pagina = 1;
		};

		$paginado = 5;
		$inicio = ($pagina - 1) * $paginado;

		//AVATAR
		$user = $db->recorrer($sql);

		if(file_exists('uploads/avatar/'.$user['id'].'.'.$user['ext'])){
			$ruta = 'uploads/avatar/'.$user['id'].'.'.$user['ext'];
		}else{
			$ruta = 'uploads/avatar/user.png';
		}

		$sin_registros = 'Sin registros';
		if($user['nombre'] == '' or $user['apellidos'] == ''){
			$nombres = $sin_registros;
		}else{
			$nombres = $user['nombre'] . ' ' . $user['apellidos'];
		}

		if($user['fecha'] == ''){
			$fecha = $sin_registros;
		}else{
			$fecha = $user['fecha'];
		}

		if($user['online'] <= time()){
			$estado = 'Offline';
			$color_estado = '#FF0000';
		}else{
			$estado = 'Online';
			$color_estado = '#00FF00';
		}

		$cantidad = $db->query("SELECT COUNT(*) FROM post WHERE dueno='$id' and aprobado='1';");
		$result = $db->recorrer($cantidad);
		$posts = $db->query("SELECT * FROM post WHERE dueno='$id' and aprobado='1' ORDER BY id DESC LIMIT $inicio,$paginado;");
		$c_post = $result[0];

		$x=0;
		if($c_post > 0 and $db->rows($posts) > 0){
			while($p = $db->recorrer($posts)) {

			$votantes = explode(';',$p['votantes']);
			$num_votantes = count($votantes) - 1;
			if($num_votantes <= 0){
			$media = 0;
			}else{
			$media = $p['puntos'] / $num_votantes;
			}

				$x++;
				$z = $x % 2;
				$post[] = array(
					'id'=>$p['id'],
					'titulo'=>$p['titulo'],
					'puntos'=>$media,
					'z'=>$z
				);
			}

			$paginas = ceil($c_post / $paginado);
			$template->assign(array('pags' => $paginas, 'posts' => $post));
		}
		$db->liberar($posts,$cantidad);


		$template->assign(array(
			'existe' => 1,
			'user' => $user,
			'fecha' =>$fecha,
			'nombres' =>$nombres,
			'c_posts' =>$c_post,
			'image' => $ruta,
			'estado' => $estado,
			'c_estado' => $color_estado,
			'id_dueno_perfil' => $id
			));	
	}

	$template->display('perfil/perfil.tpl');
	$db->liberar($sql);
	$db->close();
}else{
	header('location: ?view=index');
}



?>