<?php /* Smarty version 3.1.27, created on 2017-12-15 23:33:58
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:208875a345be6176357_90987673%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11701b22e7cd8468c0bf77593392bbaa672bf6ae' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\overall\\nav.tpl',
      1 => 1513380794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208875a345be6176357_90987673',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a345be61eb9b7_24446808',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a345be61eb9b7_24446808')) {
function content_5a345be61eb9b7_24446808 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208875a345be6176357_90987673';
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PescAPP</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (isset($_GET['view']) && $_GET['view'] == 'index' || !isset($_GET['view'])) {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=index">Inicio</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="busqueda" placeholder="Buscar un post..." size="50">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['user'])) {?>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['user'];?>
 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?view=cuenta">Cuenta</a></li>
            <li><a href="?view=perfil&user=<?php echo $_SESSION['id'];?>
">Perfil</a></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
      <?php } else { ?>
        <?php if (isset($_GET['view']) && $_GET['view'] == 'login' || !isset($_GET['view'])) {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=login">Login</a></li>
        <?php if (isset($_GET['view']) && $_GET['view'] == 'reg' || !isset($_GET['view'])) {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=reg">Registrarme</a></li>
      <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
?>