<?php


function BBcode($str){
	$bbcode = ['[b]','[/b]','/n','[center]','[/center]'];
	$html = ['<b>','</b>','<br />','<center>','</center>'];

	$str = nl2br(htmlentities($str));

	$str = str_replace($bbcode, $html, $str);

	return $str;
}


?>