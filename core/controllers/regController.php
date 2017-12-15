<?php

if(!isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
		include('core/models/class.Acceso.php');
		$acceso = new Acceso();
		$acceso->Registrar();
		exit;
	}else{
		$template = new Smarty();
		$template->display('public/registro.tpl');
	}
}else{
	header('location: ?view=index');
}

?>