<?php

class Acceso {

	private $email;
	private $user;
	private $pass;


	private function Encrypt($string){
		$sizeof = strlen($string) - 1;
		$result = '';
		for($x = $sizeof; $x >= 0; $x--){
			$result .= $string[$x];
		}
		$result = md5($result);
		return $result;
	}

	public function Login(){
		try{
			if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['session'])){
				$db = new Conexion();
				$this->user = $db->real_escape_string($_POST['user']);
				$this->pass = $this->Encrypt($_POST['pass']);

				$sql = $db->query("SELECT * FROM users WHERE user='$this->user' AND pass='$this->pass'; ");
				if($db->rows($sql) > 0){
					$datos = $db->recorrer($sql);
					$id = $datos['id'];
					$online = time() + (60*5);

					$sql2 = $db->query("UPDATE users SET online='$online' WHERE id ='$id';");

					$_SESSION['id'] = $id;
					$_SESSION['user'] = $datos['user'];
					$_SESSION['email'] = $datos['email'];
					$_SESSION['fecha'] = $datos['fecha'];
					$_SESSION['nombre'] = $datos['nombre'];
					$_SESSION['apellidos'] = $datos['apellidos'];
					$_SESSION['cambio'] = $datos['cambio'];
					$_SESSION['ext'] = $datos['ext'];
					if($datos['admin'] == 1){
						$_SESSION['admin'] = $datos['admin'];
					}
					$_SESSION['online'] = $online;

					if($_POST['session'] == true) { ini_set('session.cookie_lifetime', time() + (60*60*24*2)); }
					echo 1;
				}else{
					throw new Exception(2);
				}

				$db->liberar($sql);
				$db->close();
			} else {
				throw new Exception('Error: Datos vacios.');
			}
		}catch(Exception $login){
			echo $login->getMessage();
		}
	}

	public function Recuperar(){

	}

	public function Registrar(){
		try{
			if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['email'])){
				$db = new Conexion();
				$this->user = $db->real_escape_string($_POST['user']);
				$this->email = $db->real_escape_string($_POST['email']);
				$this->pass = $this->Encrypt($_POST['pass']);

				$sql = $db->query("SELECT * FROM users WHERE user='$this->user' OR email='$this->email'; ");
				if($db->rows($sql) == 0){
					$online = time() + (60*5);
					$sql2 = $db->query("INSERT INTO users (user,pass,email,online) VALUES ('$this->user', '$this->pass', '$this->email', '$online');");
					$sql3 = $db->query("SELECT MAX(id) AS id FROM users;");
					$id = $db->recorrer($sql3);
					$_SESSION['id'] = $id[0];
					$_SESSION['user'] = $this->user;
					$_SESSION['email'] = $this->email;
					$_SESSION['fecha'] = '';
					$_SESSION['nombre'] = '';
					$_SESSION['apellidos'] = '';
					$_SESSION['cambio'] = 0;
					$_SESSION['ext'] = 'jpg';
					$_SESSION['online'] = $online;
					echo 1;
					$db->liberar($sql2,$sql3);
				}else{
					$datos = $db->recorrer($sql);
					if(strtolower($this->user) == strtolower($datos['user'])){
						throw new Exception(2);
					}else{
						throw new Exception(3);
					}

				}
				$db->liberar($sql);
				$db->close();
			} else {
				throw new Exception('Error: Datos vacios.');
			}
		}catch(Exception $reg){
			echo $reg->getMessage();
		}
	}
}

?>