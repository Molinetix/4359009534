<?php

class Cuentas {

	private $user;
	private $email;
	private $fecha;
	private $id;
	private $nombre;
	private $apellidos;

	public function EditUser(){

				if(!empty($_POST['user']) and !empty($_POST['email'])){


			$db = new Conexion();

			$this->user = $db->real_escape_string($_POST['user']);
			$this->email = $db->real_escape_string($_POST['email']);
			$this->id = $_SESSION['id'];


			//Control de error para el usuario
			if(strtolower($this->user) != strtolower($_SESSION['user'])){
				$time = time();

				$sql = $db->query("SELECT cambio FROM users WHERE cambio >= '$time' AND cambio <> '0' AND id='$this->id';");
				$sql2 = $db->query("SELECT user FROM users WHERE user='$user' AND id <> '$this->id';");

					if($db->rows($sql) > 0){
						$db->liberar($sql,$sql2);
						$db->close();
						header('location: ?view=cuenta&error=5');
						exit;
					}

						if($db->rows($sql2) > 0){
							$db->liberar($sql,$sql2);
							$db->close();
							header('location: ?view=cuenta&error=2');
							exit;
						}

						$c_cambio = 1;
					}
			

			//Control de error para el email
			if(strtolower($email) != strtolower($_SESSION['email'])){
				$sql = $db->query("SELECT email FROM users WHERE email='$email' AND id <> '$this->id';");
				if($db->rows($sql) > 0){
					$db->liberar($sql);
					$db->close();
					header('location: ?view=cuenta&error=3');
					exit;	
				}
			}

			//Control de error para la fecha
			$this->fecha = $db->real_escape_string($_POST['fecha']);

			$explode = explode('-', $this->fecha);
			if(!($explode[0] >= 1 and $explode[0] <= 31) or !($explode[1] >= 1 and $explode[1] <= 12) or !($explode[2] >= 1900 and $explode[2] <= 3000)){
				header('location: ?view=cuenta&error=4');
				exit;
			}
			unset($explode);

			//Control de imagenes
			if($_FILES['foto']['name'] !=''){
				$ext = end(explode('.',$_FILES['foto']['name']));
				$extensiones = array('jpg','jpeg','png','gif','JPG','JPEG','PNG','GIF');
				if(!in_array($ext,$extensiones)){
					header('location: ?view=cuenta&error=6');
					exit;
				}

				$ruta = 'uploads/avatar/'. $this->id;

				if(file_exists($ruta . '.jpg')){
					$ruta = 'uploads/avatar/'. $this->id . '.jpg';
					unlink($ruta);
				}else if(file_exists($ruta . '.png')){
					$ruta = 'uploads/avatar/'. $this->id . '.png';
					unlink($ruta);
				}else if(file_exists($ruta . '.jpeg')){
					$ruta = 'uploads/avatar/'. $this->id . '.jpeg';
					unlink($ruta);
				}else if(file_exists($ruta . '.gif')){
					$ruta = 'uploads/avatar/'. $this->id . '.gif';
					unlink($ruta);		
				}else if(file_exists($ruta . '.JPG')){
					$ruta = 'uploads/avatar/'. $this->id . '.JPG';
					unlink($ruta);		
				}else if(file_exists($ruta . '.JPEG')){
					$ruta = 'uploads/avatar/'. $this->id . '.JPEG';
					unlink($ruta);			
				}else if(file_exists($ruta . '.PNG')){
					$ruta = 'uploads/avatar/'. $this->id . '.PNG';
					unlink($ruta);		
				}else if(file_exists($ruta . '.GIF')){
					$ruta = 'uploads/avatar/'. $this->id . '.GIF';
					unlink($ruta);			
				}

				$ruta = 'uploads/avatar/'. $this->id .'.'. $ext;
				move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
			}

			if(isset($c_cambio)){
				$tiempo_cambio = time() + (60*60*24*31);
			} else {
				$tiempo_cambio = $_SESSION['cambio'];
			}
			$this->nombre = $db->real_escape_string($_POST['names']);
			$this->apellidos = $db->real_escape_string($_POST['lastnames']);

			$_SESSION['nombre'] = $this->nombre;
			$_SESSION['apellidos'] = $this->apellidos;
			$_SESSION['fecha'] = $this->fecha;
			$_SESSION['user'] = $this->user;
			$_SESSION['email'] = $this->email;
			$_SESSION['cambio'] = $tiempo_cambio;

			$update = $db->query("UPDATE users SET user='$this->user', email='$this->email', nombre='$this->nombre', apellidos='$this->apellidos', fecha='$this->fecha', cambio='$tiempo_cambio' WHERE id='$this->id';");

			$db->liberar($update);
			$db->close();
			header('location: ?view=cuenta&success=1');
		}else{
			header('location: ?view=cuenta&error=1');
		}

	}
}


?>