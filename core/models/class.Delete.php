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

}


?>