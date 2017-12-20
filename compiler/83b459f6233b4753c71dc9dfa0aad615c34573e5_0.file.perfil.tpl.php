<?php /* Smarty version 3.1.27, created on 2017-12-20 04:14:11
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\perfil\perfil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174445a39e393234394_90758134%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b459f6233b4753c71dc9dfa0aad615c34573e5' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\perfil\\perfil.tpl',
      1 => 1513743242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174445a39e393234394_90758134',
  'variables' => 
  array (
    'existe' => 0,
    'user' => 0,
    'image' => 0,
    'nombres' => 0,
    'fecha' => 0,
    'c_posts' => 0,
    'c_estado' => 0,
    'estado' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a39e39335b283_92614870',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a39e39335b283_92614870')) {
function content_5a39e39335b283_92614870 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '174445a39e393234394_90758134';
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

                <?php if (isset($_smarty_tpl->tpl_vars['existe']->value)) {?>  
          <h2 class="sub-header">Perfil de <?php echo $_smarty_tpl->tpl_vars['user']->value['user'];?>
</h2> 
                  
           <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="110" height="110" />
              </div>
              <div class="media-body">
                <ul style="list-style: none; padding-left: 8px;">
                    <li style="margin-bottom: 2px;"><i class="fa fa-user"></i> <strong>Usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value['user'];?>
 </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-user-secret"></i> <strong>Nombre Real:</strong> <?php echo $_smarty_tpl->tpl_vars['nombres']->value;?>
 </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-birthday-cake"></i> <strong>Nacimiento:</strong> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
 </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-book"></i> <strong>Posts:</strong> <?php echo $_smarty_tpl->tpl_vars['c_posts']->value;?>
</li>
                    <li style="margin-bottom: 2px;color:<?php echo $_smarty_tpl->tpl_vars['c_estado']->value;?>
;"><i class="fa fa-bolt"></i> <strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</li>
                </ul>
              </div>
           </div>     
                    
           <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th style="width: 80%;">Posts</th>
                  <th style="width: 10%;">Puntos</th>
                  <th style="width: 10%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
                
                <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$foreach_pt_Sav = $_smarty_tpl->tpl_vars['pt'];
?>
                <?php if ($_smarty_tpl->tpl_vars['pt']->value['z'] == 0) {?><tr><?php } else { ?><tr class="active"><?php }?>
                  <td><a href="?view=posts&id=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
                  <td>0</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
                 <?php } else { ?>
                <tr class="info">
                    <?php if (!isset($_GET['pag'])) {?>
                    <td colspan="3" style="text-align: center;">Este usuario no ha creado ningún posts.</td>
                    <?php } else { ?>
                    <td colspan="3" style="text-align: center;">No existen más posts.</td>
                    <?php }?>
                </tr>
                <?php }?> 
         
              </tbody>
            </table> 
            
            <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
            <nav>
              <ul class="pager">
                <?php if (!isset($_GET['pag'])) {?>
                <li class="disabled"><a href="#">Anterior</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?>
                    <li><a href="?view=perfil&user=<?php echo $_GET['user'];?>
&pag=2">Siguiente</a></li>
                  <?php } else { ?>
                    
                  <?php }?>
                <?php } else { ?>
                  <?php if ($_GET['pag'] <= 1) {?>
                  <li class="disabled"><a href="#">Anterior</a></li>
                  <?php } else { ?>
                  <li><a href="?view=perfil&user=<?php echo $_GET['user'];?>
&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a></li>
                  <?php }?>

                  <?php if ($_GET['pag'] >= $_smarty_tpl->tpl_vars['pags']->value) {?>
                  <li class="disabled"><a href="#">Siguiente</a></li>
                  <?php } else { ?>
                  <li><a href="?view=perfil&user=<?php echo $_GET['user'];?>
&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a></li>
                  <?php }?> 
                <?php }?>
              </ul>
            </nav>
            <?php }?>
            
            <?php } else { ?>
            <div class="media">
              <div class="alert alert-danger" role="alert">ERROR: El perfil solicitado no existe.</div>
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