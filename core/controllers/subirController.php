<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
			require('core/models/class.Cuentas.php');
			$subir = new Cuentas();
			$subir->subirPost();


	}	
	$template = new Smarty();
	$template->display('subir/subir.tpl');

}else{
	header('location: ?view=login');
}

?>