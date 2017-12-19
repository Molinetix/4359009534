<?php /* Smarty version 3.1.27, created on 2017-12-19 17:36:06
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\post\posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:239265a394e06418b85_40539059%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd70f94b75f365983663e9ab3efe32b8a38ef8f' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\post\\posts.tpl',
      1 => 1513704963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239265a394e06418b85_40539059',
  'variables' => 
  array (
    'post' => 0,
    'content' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a394e06482450_91817555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a394e06482450_91817555')) {
function content_5a394e06482450_91817555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '239265a394e06418b85_40539059';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
              
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php if (isset($_smarty_tpl->tpl_vars['post']->value)) {?> 
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
</h2> 
          
          <!-- Post Principal --> 
          <div class="media">
              <div class="media-left" style="text-align: center;">
                <a href="?view=perfil&user=ID">
                    <img class="media-object" src="uploads/avatar/user.png" width="80" height="80" />
                </a>
                <small><strong>Usuario</strong> <br /> <span style="color: #FF0000">Offline</span></small>
              </div>
              <div class="media-body principal-post">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

              </div>
           </div> 
           <!-- Post Principal --> 
            
           <!-- Comentario --> 
           <div class="media"> 
              <div class="media-body comun-post">
                Esto es un comentario
              </div> 
               <div class="media-right" style="text-align: center;">
                <a href="?view=perfil&user=ID">
                    <img class="media-object" src="uploads/avatar/user.png" width="80" height="80" />
                </a>
                <small><strong>Usuario</strong> <br /> <span style="color: #FF0000">Offline</span></small>
              </div>
          </div> 
          <!-- Comentario --> 
        
        <!-- AJAX de comentarios -->    
        <div id="_COMMENTS_">
            <!--<div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">Haciendo espacio para tu comentario...</div>-->
        </div>
        
        <!-- condición de inciio de sesión --> 
        <?php if (isset($_SESSION['user'])) {?>  
        <div id="_POINTS_">
            <nav>
                <center>
                  <ul class="pagination">
                    <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                    <li><a href="#" onclick="AddPoints(<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
);"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
                    <?php }} ?>
                  </ul>
                </center>
            </nav>

            <!--<nav>
                <center>
                      <div class="puntos-agregados">Puntos agregados correctamente</div>
                </center>
            </nav>
            <nav>
                <center>
                      <div class="puntos-no-agregados">Ya has puntuado antes este post</div>
                </center>
            </nav>-->
        </div>  
        <?php }?>   
        <!-- condición de inciio de sesión -->

        <?php if (isset($_SESSION['user'])) {?>
        <div class="media"> 
            <div class="media-body">
                <textarea class="form-control" id="comentario" placeholder="Hacer un comentario..."></textarea>
                <center>
                <a style="margin-top: 7px;" href="#" id="send_request" class="btn btn-primary btn-sm">Comentar</a>
                </center>
            </div> 
            <div class="media-right" style="text-align: center;">
                <img class="media-object" src="uploads/avatar/user.png" width="80" height="80" />
            </div>
        </div> 
         <?php } else { ?>
            <div class="media">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Debes <a href="?view=login">iniciar sesión</a> para poder comentar.
                </div>
            </div>
         <?php }?>
          <?php } else { ?>
            <div class="media">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <strong>ERROR:</strong> el post solicitado no existe o ha sido borrado.
                </div>
            </div>
         <?php }?>
        </div>          
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>