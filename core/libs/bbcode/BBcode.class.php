<?php


function BBcode($str){
	$bbcode = ['[b]','[/b]','[img]','[/img]','/n','[center]','[/center]'];
	$html = ['<b>','</b>','<img src="','" />','<br />','<center>','</center>'];

	$str = nl2br(htmlentities($str));

	$str = str_replace($bbcode, $html, $str);

	return $str;
}


?>