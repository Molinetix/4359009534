<?php

$var = 2;

try{
	if($var == 1){
		echo 'ok var = 1';
	}else if($var == 2){
		throw new Exception('ERROR: Var es igual a dos');
	}else{
		throw new Exception('ERROR: Var no es ni 1 ni 2');
	}
}catch(Exception $e){

	echo $e->getMessage();

}
?>