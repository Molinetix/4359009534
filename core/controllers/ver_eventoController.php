<?php


if(isset($_GET['id_evento']) and is_numeric($_GET['id_evento']) and $_GET['id_evento'] >= 1){

	$mode = isset($_GET['mode']) ? $_GET['mode'] : null;
	$id = intval($_GET['id_evento']);
	$db = new Conexion();
	$sql = $db->query("SELECT id,tipo,fecha,creador,organizador,comunidad,inscripcion,premio,lugar_quedada,lugar_pesca,hora_quedada,duracion,tipo_pesca,tfn_movil,correo,participantes FROM evento WHERE id='$id'");


	switch($mode) {
		case 'alta':
			if(isset($_SESSION['id'],$_POST['alta'])){
				
				$evento = $db->recorrer($sql);
				$participantes = explode(';',$evento['participantes']);
				$id_user = $_SESSION['id'];

				if(!in_array($id_user, $participantes)){

					$participantes = $evento['participantes'] . $_SESSION['id'] . ';';

					$sql2 = $db->query("UPDATE evento SET participantes='$participantes' WHERE id='$id';");
					echo 1;
					
					exit;
				}else{

					$participantes = $evento['participantes'];

					$participantes = str_replace("$id_user;","","$participantes");

					$sql2 = $db->query("UPDATE evento SET participantes='$participantes' WHERE id='$id';");

					echo 2;

				}
				$db->liberar($sql);
				exit;
			} else {
				$db->liberar($sql);
				$db->close();
				header('location: ?view=ver_evento&id_evento=' . $id);
				exit;
			}
		break;
		case 'baja':
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

		$evento= $db->recorrer($sql);

		$id_creator = $evento['creador'];

		$lugar = $evento['comunidad'];
		if($lugar == 1){
			$lugar = 'Andalucía';
		}else if($lugar == 2){
			$lugar = 'Aragón';
		}else if($lugar == 3){
			$lugar = 'Asturias';
		}else if($lugar == 4){
			$lugar = 'Baleares';
		}else if($lugar == 5){
			$lugar = 'Canarias';
		}else if($lugar == 6){
			$lugar = 'Cantabria';
		}else if($lugar == 7){
			$lugar = 'Castilla-La Mancha';
		}else if($lugar == 8){
			$lugar = 'Castilla y León';
		}else if($lugar == 9){
			$lugar = 'Cataluña';
		}else if($lugar == 10){
			$lugar = 'Extremadura';
		}else if($lugar == 11){
			$lugar = 'Galicia';
		}else if($lugar == 12){
			$lugar = 'La Rioja';
		}else if($lugar == 13){
			$lugar = 'Madrid';
		}else if($lugar == 14){
			$lugar = 'Murcia';
		}else if($lugar == 15){
			$lugar = 'Navarra';
		}else if($lugar == 16){
			$lugar = 'País Vasco';
		}else if($lugar == 17){
			$lugar = 'Valencia';
		}else{
			$lugar = '';
		}

		$busca_participantes = explode(';',$evento['participantes']);
		
		if(isset($_SESSION['id'])){
		if(in_array($_SESSION['id'], $busca_participantes)){
			$participa = 1;
		}else{
			$participa = 0;
		}
		}else{
			$participa = 0;
		}

		$numero_participantes = count($busca_participantes)-1;


		$sql2 = $db->query("SELECT user FROM users WHERE id='$id_creator';");
		$user = $db->recorrer($sql2);

		$fecha_actual = strtotime(date("d-m-Y",time()));
		$fecha_entrada = strtotime($evento['fecha']);
		if($fecha_actual > $fecha_entrada){
		        $fecha_pasada = "true";
		}else{
		        $fecha_pasada = "false";
		}
		
		$template->assign(array(
			'id'=> $evento['id'],
			'id_creador' => $evento['creador'],
			'tipo'=>$evento['tipo'],
			'fecha'=>$evento['fecha'],
			'user'=>$user['user'],
			'organizador'=>$evento['organizador'],
			'comunidad'=>$lugar,
			'inscripcion'=>$evento['inscripcion'],
			'premio'=>$evento['premio'],
			'lugar_quedada' => $evento['lugar_quedada'],
			'lugar_pesca' => $evento['lugar_pesca'],
			'hora_quedada' =>$evento['hora_quedada'],
			'duracion' => $evento['duracion'],
			'tipo_pesca' => $evento['tipo_pesca'],
			'tfn_movil' => $evento['tfn_movil'],
			'correo' => $evento['correo'],
			'participantes' => $numero_participantes,
			'participa' => $participa,
			'fecha_pasada' => $fecha_pasada
			));

		$db->liberar($sql2);
	}

	$db->liberar($sql);
	$db->close();
	$template->display('eventos/ver_evento.tpl');
}else{
	header('location: ?view=index');
}
?>