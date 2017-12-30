<?php /* Smarty version 3.1.27, created on 2017-12-20 17:51:13
         compiled from "C:\wamp\www\pro\styles\templates\overall\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:69625a3aa3117b47d5_35356263%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef62c8fa50aa83c6d4fdcb115a76aa6ca9b5b5b0' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\overall\\footer.tpl',
      1 => 1513724935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69625a3aa3117b47d5_35356263',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3aa3117ba527_61542931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3aa3117ba527_61542931')) {
function content_5a3aa3117ba527_61542931 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '69625a3aa3117b47d5_35356263';
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