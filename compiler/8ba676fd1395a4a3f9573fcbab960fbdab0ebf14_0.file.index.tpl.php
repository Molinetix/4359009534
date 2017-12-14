<?php /* Smarty version 3.1.27, created on 2017-12-14 17:52:30
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179075a32ba5ee0f373_05797206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba676fd1395a4a3f9573fcbab960fbdab0ebf14' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\home\\index.tpl',
      1 => 1513273944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179075a32ba5ee0f373_05797206',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a32ba5ee59667_68966051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a32ba5ee59667_68966051')) {
function content_5a32ba5ee59667_68966051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179075a32ba5ee0f373_05797206';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>      
	<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
	<div class="container" style="margin-top: 100px;">
		<div class="jumbotron">
			<h1>Bienvenido al curso!</h1>
			<p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
			<p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
			
		</div>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>