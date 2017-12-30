<?php

if(isset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'])){

		$id_user = $_GET['id_user'];
		$id_post = $_GET['id_post'];

		require('core/models/class.Delete.php');
		$delete = new Delete();
		$delete->deletePost($id_user,$id_post);

}else{
	header('location: ?view=login');
}

?>