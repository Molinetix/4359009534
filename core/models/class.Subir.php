<?php

class Subir {

	private $titulo;
	private $contenido;
	private $fecha;
	private $id;
	private $comunidad;
	private $lugar;
	private $peso;
	private $longitud;
	private $imgkg;
	private $imgcm;
	private $img1;
	private $img2;

	public function SubirPost(){

		if(!empty($_POST['titulo']) and !empty($_POST['contenido']) and !empty($_POST['comunidad']) and !empty($_POST['peso']) and !empty($_POST['longitud']) and !empty($_POST['fotokg']) and !empty($_POST['fotocm']) and !empty($_POST['foto1']) and !empty($_POST['foto2'])){


			$db = new Conexion();

			$this->titulo = $db->real_escape_string($_POST['titulo']);
			$this->contenido = $db->real_escape_string($_POST['contenido']);
			$this->fecha = time();
			$this->comunidad = $db->real_escape_string($_POST['comunidad']);
			$this->lugar = $db->real_escape_string($_POST['lugar']);
			$this->peso = $db->real_escape_string($_POST['peso']);
			$this->longitud = $db->real_escape_string($_POST['longitud']);
			$this->imgkg = '';
			$this->imgcm = '';
			$this->img1 = '';
			$this->img2 = '';
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

			if(!empty($this->fecha)){
				$explode = explode('-', $this->fecha);
				if(!($explode[0] >= 1 and $explode[0] <= 31) or !($explode[1] >= 1 and $explode[1] <= 12) or !($explode[2] >= 1900 and $explode[2] <= 3000)){
					header('location: ?view=cuenta&error=4');
					exit;
				}
			}



			//Control de imagenes
			if($_FILES['foto']['name'] !=''){
				$ext = end(explode('.',$_FILES['foto']['name']));
				$extensiones = array('jpg','jpeg','png','gif','JPG','JPEG','PNG','GIF');
				if(!in_array($ext,$extensiones)){
					header('location: ?view=cuenta&error=6');
					exit;
				}

				$ruta = 'uploads/avatar/'. $this->id.'.'.$_SESSION['ext'];

				if(file_exists($ruta)){
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
			$_SESSION['ext'] = $ext;

			$update = $db->query("UPDATE users SET user='$this->user', email='$this->email', nombre='$this->nombre', apellidos='$this->apellidos', fecha='$this->fecha', cambio='$tiempo_cambio', ext='$ext' WHERE id='$this->id';");

			$db->liberar($update);
			$db->close();
			header('location: ?view=cuenta&success=1');
		}else{
			header('location: ?view=cuenta&error=1');
		}

	}
}


?>