<?php

class Evento {

	private $creador;
	private $organizador;
	private $comunidad;
	private $fecha;
	private $lugar_quedada;
	private $hora_quedada;
	private $lugar_pesca;
	private $duracion;
	private $tipo_pesca;
	private $tfn_movil;
	private $correo;
	private $tipo_evento;
	private $inscripcion;
	private $premios;



	//Añadir controles de seguridad...
	public function crearEvento(){

		if(!empty($_POST['creador']) and !empty($_POST['organizador']) and !empty($_POST['comunidad']) and !empty($_POST['fecha']) and !empty($_POST['lugar_quedada']) and !empty($_POST['hora_quedada']) and !empty($_POST['lugar_pesca']) and !empty($_POST['duracion']) and !empty($_POST['tipo_pesca']) and !empty($_POST['tfn_movil']) and !empty($_POST['correo']) and !empty($_POST['tiene'])){


			$db = new Conexion();

			$this->creador = $db->real_escape_string($_POST['creador']);
			$this->organizador = $db->real_escape_string($_POST['organizador']);
			$this->comunidad = $db->real_escape_string($_POST['comunidad']);
			$this->fecha = $db->real_escape_string($_POST['fecha']);
			$this->lugar_quedada = $db->real_escape_string($_POST['lugar_quedada']);
			$this->hora_quedada = $db->real_escape_string($_POST['hora_quedada']);
			$this->lugar_pesca = $db->real_escape_string($_POST['lugar_pesca']);
			$this->duracion = $db->real_escape_string($_POST['duracion']);
			$this->tipo_pesca = $db->real_escape_string($_POST['tipo_pesca']);
			$this->tfn_movil = $db->real_escape_string($_POST['tfn_movil']);
			$this->correo = $db->real_escape_string($_POST['correo']);
			$this->tipo_evento = $db->real_escape_string($_POST['tiene']);
			$this->inscripcion = $db->real_escape_string($_POST['inscripcion']);
			$this->premios = $db->real_escape_string($_POST['premios']);



			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			


			$sql = $db->query("INSERT INTO evento (tipo,fecha,creador,organizador,comunidad,inscripcion,premio,lugar_quedada,lugar_pesca,hora_quedada,duracion,tipo_pesca,tfn_movil,correo) VALUES ('$this->tipo_evento','$this->fecha','$this->creador','$this->organizador','$this->comunidad','$this->inscripcion','$this->premios','$this->lugar_quedada','$this->lugar_pesca','$this->hora_quedada','$this->duracion','$this->tipo_pesca','$this->tfn_movil','$this->correo');");

			if($db->affected_rows > 0){
				$db->liberar($sql);
				$db->close();
				header('location: ?view=cuenta&success=3');
			}else{
				$db->liberar($sql);
				$db->close();
				header('location: ?view=cuenta&error=8');
			}

		}else{
			header('location: ?view=cuenta&error=1');
		}
	}


}


?>