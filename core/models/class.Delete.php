<?php

class Delete {

	public function deletePost($id_user,$id_post){

		$db = new Conexion();

		echo $id_post;

		$sql = $db->query("DELETE FROM post WHERE id = $id_post;");


		$db->liberar($sql);
		$db->close();
		header('location: ?view=perfil&user='.$id_user.);
		
	}

		public function deleteComent($id_post,$id_comentario){

		$db = new Conexion();

		echo $id_post;

		$sql = $db->query("DELETE FROM comentarios WHERE id = $id_comentario;");


		$db->liberar($sql);
		$db->close();
		header('location: ?view=posts&id='.$id_post.);
		
	}
}


?>