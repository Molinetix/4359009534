<?php /* Smarty version 3.1.27, created on 2017-12-15 16:33:00
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:104735a33f93caba100_93992057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba676fd1395a4a3f9573fcbab960fbdab0ebf14' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\home\\index.tpl',
      1 => 1513355566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104735a33f93caba100_93992057',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a33f93cbbdf71_80648447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a33f93cbbdf71_80648447')) {
function content_5a33f93cbbdf71_80648447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104735a33f93caba100_93992057';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          	<?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>
            <?php if (!isset($_GET['type'])) {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=1">Categoria 1</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=2">Categoria 2</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=3">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
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
                <tr>
                  <td><a href="?view=posts&id=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><a href="?view=perfil&&user=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id_dueno'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['dueno'];?>
</a></td>
                  <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
                  <td style="text-align: center;">0</td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
              <?php } else { ?>
              <tr>
                  <td>No se han encontrado resultados...</td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
          <div class="btn-group" role="group" aria-label="...">
          	<?php if (!isset($_GET['pag'])) {?>
          	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	          	<?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?>
	          		<?php if (isset($_GET['type'])) {?>
	          		<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=2" class="btn btn-default">Siguiente</a>
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
</html>       <?php }
}
?>