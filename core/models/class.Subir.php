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
	private $imagen;

	public	function AnalizarImagen($nombre){

		 //Cambiamos el nombre de la imagen para evitar complicaciones a la hora de guardarla
	    $target_file  = round(microtime(true)) . '.' . end($nombre);
	    $uploadOk = 1;
	    $imageFileType = pathinfo($target_file ,PATHINFO_EXTENSION);

	    // Comprobamos si la imagen ya existe por si acaso
	    if (file_exists($target_file )) {
	        echo "La imagen ya existe.";
	        $uploadOk = 0;
	    }

	    // Permitimos unos formatos en concreto
	    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
	    && $imageFileType != "GIF" ) {
	        echo "Solo se permiten imagenes JPG, JPEG, PNG & GIF.";
	        $uploadOk = 0;
	    }
	    // Si ha habido algún control que no se haya pasado la imágen no se subirá.
	    if ($uploadOk == 0) {
	        echo "La imagen no se ha subido.";
	        $target_file = "";
	        return $target_file;

	    // Si todo está correcto procedemos a subir la imágen.
	    } else {

	        $result = move_uploaded_file($_FILES["$nombre"]["tmp_name"], "imagenes/" . $target_file);
	        return $target_file;
	    }

	}



	public function SubirPost(){

		if(!empty($_POST['titulo'])){


			$db = new Conexion();

			$fotokg = explode(".", $_FILES['fotokg']['name']);
			$fotocm = explode(".", $_FILES['fotocm']['name']);
			$imagen1 = explode(".", $_FILES['foto1']['name']);
			$imagen2 = explode(".", $_FILES['foto2']['name']);

			$this->titulo = $db->real_escape_string($_POST['titulo']);
			$this->contenido = $db->real_escape_string($_POST['contenido']);
			$this->fecha = time();
			$this->comunidad = $db->real_escape_string($_POST['comunidad']);
			$this->lugar = $db->real_escape_string($_POST['lugar']);
			$this->peso = $db->real_escape_string($_POST['peso']);
			$this->longitud = $db->real_escape_string($_POST['longitud']);

			$imagenkg = $this->AnalizarImagen($fotokg);
			$imagencm = $this->AnalizarImagen($fotocm);
			$imagen1 = $this->AnalizarImagen($imagen1);
			$imagen2 = $this->AnalizarImagen($imagen2);


			if(empty($imagenkg) or empty($imagencm) or empty($imagen1) or empty($imagen2)){
				unlink("imagenes/" . $imagenkg);
				unlink("imagenes/" . $imagencm);
				unlink("imagenes/" . $imagen1);
				unlink("imagenes/" . $imagen2);
				header('location: ?view=cuenta&error=7');
				exit;
			}else{
			$this->imagen = $imagenkg +";"+ $imagencm +";"+ $imagen1 +";"+ $imagen2;
			}
			$this->id = $_SESSION['id'];




				$sql = $db->query("INSERT INTO post (titulo,content,dueno,fecha,comunidad,lugar_pesca,peso,longitud,imagenes) VALUES ($this->titulo,$this->contenido,$this->id,$this->fecha,$this->comunidad,$this->lugar,$this->peso,$this->longitud,$this->imagen);");


					if($db->rows($sql) == 0){
						$db->liberar($sql);
						$db->close();
						header('location: ?view=cuenta&error=6');
						exit;
					}

			$db->liberar($sql);
			$db->close();
			header('location: ?view=cuenta&success=2');
		}else{
			header('location: ?view=cuenta&error=1');
		}
	}


}


?>