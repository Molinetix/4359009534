<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
			require('core/models/class.Cuentas.php');
			$cuentas = new Cuentas();
			$cuentas->EditUser();
		}else{
		$ruta = 'uploads/avatar/'.$_SESSION['id'].'.'.$_SESSION['ext'];

		if(file_exists($ruta)){
			$ruta = $ruta;
		}else{
			$ruta = 'uploads/avatar/user.png';
		}


		$template = new Smarty();
		$template->assign('image',$ruta);
		$template->display('cuentas/cuentas.tpl');

	}
}else{
	header('location: ?view=login');
}

?>