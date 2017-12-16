<?php /* Smarty version 3.1.27, created on 2017-12-16 02:58:27
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\cuentas\cuentas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109685a348bd3733e92_87515266%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20b1c720e4e2d0f928fb8772bcb1df6fc00194f' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\cuentas\\cuentas.tpl',
      1 => 1513392961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109685a348bd3733e92_87515266',
  'variables' => 
  array (
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a348bd37b9371_18118213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a348bd37b9371_18118213')) {
function content_5a348bd37b9371_18118213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109685a348bd3733e92_87515266';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Configuración de tu cuenta</h2>
            <!--<div class="alert alert-success" role="alert">...</div>
            <div class="alert alert-info" role="alert">...</div>
            <div class="alert alert-warning" role="alert">...</div>
            <div class="alert alert-danger" role="alert">...</div>-->

            <?php if (isset($_GET['error'])) {?>
              <?php if ($_GET['error'] == '1') {?>
              <div class="alert alert-danger" role="alert">Los campos usuario y email deben estar llenos.</div>
              <?php } elseif ($_GET['error'] == '2') {?>
              <div class="alert alert-danger" role="alert">El nombre de usuario ya existe.</div>
              <?php } elseif ($_GET['error'] == '3') {?>
              <div class="alert alert-danger" role="alert">El email indicado ya está en uso.</div>
              <?php } elseif ($_GET['error'] == '4') {?>
              <div class="alert alert-danger" role="alert">La fecha debe tener un formato válido.</div>
              <?php } elseif ($_GET['error'] == '5') {?>
              <div class="alert alert-danger" role="alert">El nombre de usuario solo se puede moficiar 1 vez por mes.</div>
              <?php } else { ?>
              <div class="alert alert-danger" role="alert">Solo se aceptan imagenes (jpg,png,jpeg y gif).</div>
              <?php }?>
            <?php }?>
            <?php if (isset($_GET['success'])) {?>
              <?php if ($_GET['success'] == '1') {?>
              <div class="alert alert-success" role="alert">Cambios efectuados con éxito!</div>
              <?php }?>
            <?php }?>
          <div class="form-signin">
            <form action="?view=cuenta" method="POST" enctype="multipart/form-data"><!-- Explicar -->          
            <label>Nombre de Usuario <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="user" placeholder="Tu nombre de usuario" required="" value="<?php echo $_SESSION['user'];?>
" />
            
             <label>Email <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="email" class="form-control" name="email" placeholder="Tu correo electrónico" required="" value="<?php echo $_SESSION['email'];?>
" />  
              
            <label>Fecha de Nacimiento</label>
            <div class="input-group date">
            <input type="text" id="nacimiento" data-date="01-01-2015" data-date-format="dd-mm-yyyy" class="form-control" name="fecha" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2" value="<?php echo $_SESSION['fecha'];?>
" readonly="">
            <span class="input-group-addon add-on" id="basic-addon2"><i class="fa fa-calendar"></i></span>
            </div>    
                
            <label>Nombres</label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="names" placeholder="Tus nombres" value="<?php echo $_SESSION['nombre'];?>
" />  
           
             <label>Apellidos</label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lastnames" placeholder="Tus apellidos" value="<?php echo $_SESSION['apellidos'];?>
" />  
          
             
                
           <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="70" height="70" />
              </div>
              <div class="media-body">
                <label>Nueva foto de Perfil</label>
                <input style="margin-bottom: 10px;" type="file" name="foto" class="form-control" /> 
              </div>
            </div>     
                
            <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>
              </form>
          </div>
        </div>
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
>$('#nacimiento').datepicker('place');<?php echo '</script'; ?>
>
   </body>
</html>       <?php }
}
?>