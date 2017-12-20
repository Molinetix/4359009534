<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
			require('core/models/class.Subir.php');
			$subir = new Subir();
			$subir->subirPost();


	}	
	$template = new Smarty();
	$template->display('subir/subir.tpl');

}else{
	header('location: ?view=login');
}

?>