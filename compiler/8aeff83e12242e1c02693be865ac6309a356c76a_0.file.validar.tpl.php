<?php /* Smarty version 3.1.27, created on 2017-12-30 04:32:14
         compiled from "C:\wamp\www\pro\styles\templates\validar\validar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9735a4716ced64726_59312067%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aeff83e12242e1c02693be865ac6309a356c76a' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\validar\\validar.tpl',
      1 => 1514608331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9735a4716ced64726_59312067',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4716cee47de9_94681086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4716cee47de9_94681086')) {
function content_5a4716cee47de9_94681086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9735a4716ced64726_59312067';
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
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <div class="table-responsive">
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                </tr>
              </thead>
              <tbody>
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
                <tr>
                  <td><a href="?view=posts&id=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><a href="?view=perfil&&user=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id_dueno'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['dueno'];?>
</a></td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
              </tbody>
            </table>
            <?php } else { ?>
              <div class="alert alert-danger" role="alert" style="text-align:center">
                    Por ahora no hay capturas.
              </div>
            <?php }?>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
          <div class="btn-group" role="group" aria-label="...">
          	<?php if (!isset($_GET['pag'])) {?>
          	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	          	<?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?>
	          		<?php if (isset($_GET['type'])) {?>
	          		<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
	          		<a type="button" href="?view=buscar&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php } else { ?>
	          		<a type="button" href="?view=index&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php }?>
	          	<?php } else { ?>
	          	<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
	          	<?php }?>
	        <?php } else { ?>
	        	<?php if ($_GET['pag'] <= 1) {?>
	        	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	        	<?php } else { ?>
		        		<?php if (isset($_GET['type'])) {?>
		        		<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		          		<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
		          		<a type="button" href="?view=buscar&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		          		<?php } else { ?>
		        		<a type="button" href="?view=index&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		        		<?php }?>
		        	<?php }?>

	        	<?php if ($_smarty_tpl->tpl_vars['pags']->value > 1 && $_GET['pag'] >= 1 && $_GET['pag'] < $_smarty_tpl->tpl_vars['pags']->value) {?>
	        		<?php if (isset($_GET['type'])) {?>
					<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
					<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
		          	<a type="button" href="?view=buscar&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
		          	<?php } else { ?>
					<a type="button" href="?view=index&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
					<?php }?>
				<?php } else { ?>
				<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
				<?php }?>
	        <?php }?>
          </div>
          <?php }?>
        </div>
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html> <?php }
}
?>