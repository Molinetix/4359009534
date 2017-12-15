<?php /* Smarty version 3.1.27, created on 2017-12-15 03:00:18
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:233335a333ac217a749_33011208%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11701b22e7cd8468c0bf77593392bbaa672bf6ae' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\overall\\nav.tpl',
      1 => 1513306812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233335a333ac217a749_33011208',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a333ac21d5a61_65829215',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a333ac21d5a61_65829215')) {
function content_5a333ac21d5a61_65829215 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '233335a333ac217a749_33011208';
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (isset($_GET['view']) && $_GET['view'] == 'index' || !isset($_GET['view'])) {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=index">Inicio</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['user'])) {?>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['user'];?>
 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?view=cuenta">Cuenta</a></li>
            <li><a href="?view=perfil">Perfil</a></li>
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