<?php /* Smarty version 3.1.27, created on 2017-12-19 23:08:59
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\overall\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:241185a399c0b71f981_33507694%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04b97690df1f02a5b5248de35d617ab4604ac58' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\overall\\footer.tpl',
      1 => 1513724935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241185a399c0b71f981_33507694',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a399c0b75cfd3_26495037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a399c0b75cfd3_26495037')) {
function content_5a399c0b75cfd3_26495037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '241185a399c0b71f981_33507694';
?>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="core/libs/image-map-resizer-master/js/imageMapResizer.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">

		$('map').imageMapResize();

	<?php echo '</script'; ?>
>


<?php }
}
?>