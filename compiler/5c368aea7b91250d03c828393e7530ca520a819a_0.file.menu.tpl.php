<?php /* Smarty version 3.1.27, created on 2017-12-19 04:01:56
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\overall\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194915a388f34a577b4_41814776%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c368aea7b91250d03c828393e7530ca520a819a' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\overall\\menu.tpl',
      1 => 1513656113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194915a388f34a577b4_41814776',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a388f34b16f82_85960918',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a388f34b16f82_85960918')) {
function content_5a388f34b16f82_85960918 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194915a388f34a577b4_41814776';
?>
<ul class="nav nav-sidebar">

  <?php if (isset($_GET['view']) && $_GET['view'] == 'perfil') {?>
  <li class="active"><a href="#">Perfil de <?php echo $_smarty_tpl->tpl_vars['user']->value['user'];?>
</a></li><?php }?>
  <?php if (isset($_GET['view']) && $_GET['view'] == 'cuenta') {?>
  <li class="active"><a href="#">Tu Cuenta</a></li><?php }?>
  <?php if (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
  <li class="active"><a href="#">Resultado de busqueda</a></li><?php }?>


  <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>


  <?php if (!isset($_GET['type']) && isset($_GET['view']) && $_GET['view'] == 'index' || (!isset($_GET['view']))) {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>


  <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=1">Categoria 1</a></li>
  <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=2">Categoria 2</a></li>
  <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=3">Categoria 3</a></li>
</ul><?php }
}
?>