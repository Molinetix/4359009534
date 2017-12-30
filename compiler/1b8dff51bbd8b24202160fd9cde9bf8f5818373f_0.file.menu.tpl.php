<?php /* Smarty version 3.1.27, created on 2017-12-30 04:36:20
         compiled from "C:\wamp\www\pro\styles\templates\overall\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175385a4717c44032e6_20676688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8dff51bbd8b24202160fd9cde9bf8f5818373f' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\overall\\menu.tpl',
      1 => 1514608505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175385a4717c44032e6_20676688',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4717c4565729_65362600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4717c4565729_65362600')) {
function content_5a4717c4565729_65362600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175385a4717c44032e6_20676688';
?>
<ul class="nav nav-sidebar">
  <?php if (isset($_GET['view'])) {?>

  <?php if (isset($_GET['view']) && $_GET['view'] == 'posts') {?>
  <li class="active"><a href="#">Visualización de Post</a></li><?php }?>
  <?php if (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
  <li class="active"><a href="#">Resultado de busqueda</a></li><?php }?>

  
  <?php if (isset($_GET['view']) && $_GET['view'] == 'cuenta' || $_GET['view'] == 'subir' || $_GET['view'] == 'administrar') {?>

  <?php if (isset($_GET['view']) && $_GET['view'] == 'cuenta') {?><li class="active"><?php } else { ?>
  <li><?php }?><a href="?view=cuenta">Tu cuenta</a></li>


  <?php if (isset($_GET['view']) && $_GET['view'] == 'subir') {?><li class="active"><?php } else { ?>
  <li><?php }?><a href="?view=subir">Sube tu captura</a></li>
  
  <?php if (isset($_SESSION['admin'])) {?>
  <?php if (isset($_GET['view']) && $_GET['view'] == 'administrar') {?><li class="active"><?php } else { ?>
  <li><?php }?><a href="?view=administrar">Administrar Posts</a></li>
  <?php }?>

  <?php } else { ?>
  <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>
  <?php }?>

  <!--
  <?php if (!isset($_GET['type']) && isset($_GET['view']) && $_GET['view'] == 'index' || (!isset($_GET['view']))) {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>
  -->


  <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
  <li class="active"><a href="?view=index&type=1">Andalucía</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
  <li class="active"><a href="?view=index&type=2">Aragón</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
  <li class="active"><a href="?view=index&type=3">Asturias</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '4') {?>
  <li class="active"><a href="?view=index&type=4">Baleares</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '5') {?>
  <li class="active"><a href="?view=index&type=5">Canarias</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '6') {?>
  <li class="active"><a href="?view=index&type=6">Cantabria</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '7') {?>
  <li class="active"><a href="?view=index&type=7">Castilla-La Mancha</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '8') {?>
  <li class="active"><a href="?view=index&type=8">Castilla y León</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '9') {?>
  <li class="active"><a href="?view=index&type=9">Cataluña</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '10') {?>
  <li class="active"><a href="?view=index&type=10">Extremadura</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '11') {?>
  <li class="active"><a href="?view=index&type=11">Galicia</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '12') {?>
  <li class="active"><a href="?view=index&type=12">La Rioja</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '13') {?>
  <li class="active"><a href="?view=index&type=13">Madrid</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '14') {?>
  <li class="active"><a href="?view=index&type=14">Murcia</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '15') {?>
  <li class="active"><a href="?view=index&type=15">Navarra</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '16') {?>
  <li class="active"><a href="?view=index&type=16">País Vasco</a></li><?php }?>
  <?php if (isset($_GET['type']) && $_GET['type'] == '17') {?>
  <li class="active"><a href="?view=index&type=17">Valencia</a></li><?php }?>

  <?php } else { ?>
  <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
  <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>
  <?php }?>

</ul>

<?php }
}
?>