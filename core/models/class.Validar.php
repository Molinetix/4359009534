<?php

class Validar {

  public function aprobarPost($id_post){

    $db = new Conexion();
    $sql = $db->query("UPDATE post SET aprobado = 1 WHERE id=$id_post;");


    $db->liberar($sql);
    $db->close();
    header('location: ?view=administrar');
    
  }

  public function eliminarPost($id_post){

    $db = new Conexion();
    $sql = $db->query("DELETE FROM post WHERE id = $id_post;");


    $db->liberar($sql);
    $db->close();
    header('location: ?view=administrar');
    
  }

}


?>