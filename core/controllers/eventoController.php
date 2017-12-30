<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
		
			require('core/models/class.Evento.php');
			$evento = new Evento();
			$evento->crearEvento();


	}	
	$template = new Smarty();
	$template->display('eventos/eventos.tpl');

}else{
	header('location: ?view=login');
}

?>