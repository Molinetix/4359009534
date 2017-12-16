<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){
	if($_POST){
			require('core/models/class.Cuentas.php');
			$cuentas = new Cuentas();
			$cuentas->EditUser();
		}else{
		$ruta = 'uploads/avatar/'.$_SESSION['id'];

		if(file_exists($ruta . '.jpg')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.jpg';
		}else if(file_exists($ruta . '.png')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.png';
		}else if(file_exists($ruta . '.jpeg')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.jpeg';
		}else if(file_exists($ruta . '.gif')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.gif';			
		}else if(file_exists($ruta . '.JPG')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.JPG';			
		}else if(file_exists($ruta . '.JPEG')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.JPEG';			
		}else if(file_exists($ruta . '.PNG')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.PNG';			
		}else if(file_exists($ruta . '.GIF')){
			$ruta = 'uploads/avatar/'.$_SESSION['id'] . '.GIF';			
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