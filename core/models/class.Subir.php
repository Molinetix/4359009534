<?php

class Subir {

	private $titulo;
	private $contenido;
	private $fecha;
	private $id;
	private $comunidad;
	private $lugar;
	private $tipo_pez;
	private $peso;
	private $longitud;
	private $imagen;



	//Añadir controles de seguridad...
	public function SubirPost(){

		if(!empty($_POST['titulo'])){


			$db = new Conexion();

			$this->id = $_SESSION['id'];
			$this->titulo = $db->real_escape_string($_POST['titulo']);
			$this->contenido = $db->real_escape_string($_POST['contenido']);
			$this->fecha = date("Y-m-d H:i:s");
			$this->lugar = $db->real_escape_string($_POST['lugar']);
			$this->tipo_pez = $db->real_escape_string($_POST['tipo_pez']);
			$this->comunidad = $db->real_escape_string($_POST['categoria']);
			$this->peso = floatval($db->real_escape_string($_POST['peso']));
			$this->longitud = floatval($db->real_escape_string($_POST['longitud']));



			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//Subimos ImagenKg
			$temp = explode(".", $_FILES['fotokg']['name']);
		    $target_file1  = 1 + round(microtime(true)) . '.' . end($temp);
		    $uploadOk = 1;
		    $imageFileType = pathinfo($target_file1 ,PATHINFO_EXTENSION);

		    // Permitimos unos formatos en concreto
		    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
		    && $imageFileType != "GIF") {
		        echo "Solo se permiten imagenes JPG, JPEG, PNG & GIF.";
		        $uploadOk = 0;
		    }
		    // Si ha habido algún control que no se haya pasado la imágen no se subirá.
		    if ($uploadOk == 0) {
		        header('location: ?view=cuenta&error=7');
		        exit;

		    // Si todo está correcto procedemos a subir la imágen.
		    } else {

		        $result = move_uploaded_file($_FILES['fotokg']['tmp_name'], "imagenes/" . $target_file1);
		        $imagenkg = $target_file1;
		    }



		    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		    //Subimos ImagenCm
			$temp = explode(".", $_FILES['fotocm']['name']);
		    $target_file2  = 2 + round(microtime(true)) . '.' . end($temp);
		    $uploadOk = 1;
		    $imageFileType = pathinfo($target_file2 ,PATHINFO_EXTENSION);

		    // Permitimos unos formatos en concreto
		    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
		    && $imageFileType != "GIF") {
		        echo "Solo se permiten imagenes JPG, JPEG, PNG & GIF.";
		        $uploadOk = 0;
		    }
		    // Si ha habido algún control que no se haya pasado la imágen no se subirá.
		    if ($uploadOk == 0) {
		        header('location: ?view=cuenta&error=7');
		        exit;

		    // Si todo está correcto procedemos a subir la imágen.
		    } else {

		        $result = move_uploaded_file($_FILES['fotocm']['tmp_name'], "imagenes/" . $target_file2);
		        $imagencm = $target_file2;
		    }
		    


		    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		    //Subimos Imagen1
			$temp = explode(".", $_FILES['foto1']['name']);
		    $target_file3  = 3 + round(microtime(true)) . '.' . end($temp);
		    $uploadOk = 1;
		    $imageFileType = pathinfo($target_file3 ,PATHINFO_EXTENSION);

		    // Permitimos unos formatos en concreto
		    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
		    && $imageFileType != "GIF") {
		        echo "Solo se permiten imagenes JPG, JPEG, PNG & GIF.";
		        $uploadOk = 0;
		    }
		    // Si ha habido algún control que no se haya pasado la imágen no se subirá.
		    if ($uploadOk == 0) {
		        header('location: ?view=cuenta&error=7');
		        exit;

		    // Si todo está correcto procedemos a subir la imágen.
		    } else {

		        $result = move_uploaded_file($_FILES['foto1']['tmp_name'], "imagenes/" . $target_file3);
		        $imagen1 = $target_file3;
		    }




		    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		    //Subimos Imagen2
			$temp = explode(".", $_FILES['foto2']['name']);
		    $target_file4  = 4 + round(microtime(true)) . '.' . end($temp);
		    $uploadOk = 1;
		    $imageFileType = pathinfo($target_file4 ,PATHINFO_EXTENSION);

		    // Permitimos unos formatos en concreto
		    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		    && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
		    && $imageFileType != "GIF") {
		        echo "Solo se permiten imagenes JPG, JPEG, PNG & GIF.";
		        $uploadOk = 0;
		    }
		    // Si ha habido algún control que no se haya pasado la imágen no se subirá.
		    if ($uploadOk == 0) {
		        header('location: ?view=cuenta&error=7');
		        exit;

		    // Si todo está correcto procedemos a subir la imágen.
		    } else {

		        $result = move_uploaded_file($_FILES['foto2']['tmp_name'], "imagenes/" . $target_file4);
		        $imagen2 = $target_file4;
		    }



			$this->imagen = "$imagenkg;$imagencm;$imagen1;$imagen2";




			$sql = $db->query("INSERT INTO post (titulo,content,dueno,fecha,categoria,lugar_pesca,tipo_pez,peso,longitud,imagenes) VALUES ('$this->titulo','$this->contenido','$this->id','$this->fecha','$this->comunidad','$this->lugar','$this->tipo_pez','$this->peso','$this->longitud','$this->imagen');");

			$db->liberar($sql);
			$db->close();
			header('location: ?view=cuenta&success=2');
		}else{
			header('location: ?view=cuenta&error=1');
		}
	}


}


?>