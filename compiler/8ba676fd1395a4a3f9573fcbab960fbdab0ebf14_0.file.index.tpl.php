<?php /* Smarty version 3.1.27, created on 2017-12-15 02:16:23
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:266085a3330774417d0_86972773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba676fd1395a4a3f9573fcbab960fbdab0ebf14' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\home\\index.tpl',
      1 => 1513299317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266085a3330774417d0_86972773',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a333077481418_94801542',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a333077481418_94801542')) {
function content_5a333077481418_94801542 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266085a3330774417d0_86972773';
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
?>

	  </body>
</html><?php }
}
?>