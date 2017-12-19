<?php


if(isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1){
	$db = new Conexion();
	$id = intval($_GET['id']);
	$sql = $db->query("SELECT titulo,content,dueno FROM post WHERE id='$id'");
	$template = new Smarty();
	if($db->rows($sql) > 0){

		$post = $db->recorrer($sql);

		require('core/libs/bbcode/BBcode.class.php');
		$content = BBcode($post['content']);
		
		$template->assign(array(
			'content'=> $content,
			'post'=>$post
			));
	}
	
	$db->liberar($sql);
	$db->close();
	$template->display('post/posts.tpl');
}else{
	header('location: ?view=index');
}
?>