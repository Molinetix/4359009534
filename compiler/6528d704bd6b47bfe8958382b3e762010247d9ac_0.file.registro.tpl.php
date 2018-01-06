<?php /* Smarty version 3.1.27, created on 2018-01-05 15:16:22
         compiled from "C:\wamp\www\pro\styles\templates\public\registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:301405a4f96c68706a5_66194259%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6528d704bd6b47bfe8958382b3e762010247d9ac' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\public\\registro.tpl',
      1 => 1515165379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301405a4f96c68706a5_66194259',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f96c68be149_34184276',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f96c68be149_34184276')) {
function content_5a4f96c68be149_34184276 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '301405a4f96c68706a5_66194259';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>      
	<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
	<div class="container" style="margin-top: 30px;">
		<div class="container">
		<center>
		  <div id="_AJAX_"></div>
	      <div class="form-signin">
	        <h2 class="form-signin-heading">Registro</h2>
	        <label for="user" style="float:left;">Usuario:</label>
	        <input type="text" id="user" class="form-control" placeholder="introduce tu usuario" required="" autofocus="">
	        <label for="email" style="float:left;">Email:</label>
	        <input type="email" id="email" class="form-control" placeholder="tu@correo" required=""><br>
	        <label for="pass" style="float:left;">Contraseña:</label>
	        <input type="password" id="pass" class="form-control" placeholder="*******" required="">
	        <label for="repeatpass" style="float:left;">Repite la contraseña:</label>
	        <input type="password" id="repeatpass" class="form-control" placeholder="*******" required=""><br>
	        <button class="btn btn-lg btn-primary btn-block" id="send_request" type="button">Registrarme</button>
	      </div>
		</center>
    	</div>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php echo '<script'; ?>
>
		window.onload = function(){
			document.getElementById('send_request').onclick = function(){
				var connect, user, pass, repeatpass, email, form, result;

				user = document.getElementById('user').value;
				pass = document.getElementById('pass').value;
				repeatpass = document.getElementById('repeatpass').value;
				email = document.getElementById('email').value;

				if(user != '' && pass != '' && email != ''){

				form = 'user=' + user + '&pass=' + pass + '&email=' + email + "&repeatpass=" + repeatpass;


				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				connect.onreadystatechange = function(){
					if(connect.readyState == 4 && connect.status == 200){
						if(parseInt(connect.responseText) == 1){
							//Conectado con exito
							//redireccion
							result = '<div class="alert alert-dismissible alert-success">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += '<strong>Registrado!</strong> Bienvenido, solo un poco más.';
							result += '</div>';
							location.href = '?view=index';
							document.getElementById('_AJAX_').innerHTML = result;
						}else if(parseInt(connect.responseText) == 2){
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> El usuario ya existe.';
						result += '</div>';
						document.getElementById('_AJAX_').innerHTML = result;

						}else if(parseInt(connect.responseText) == 5){
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> Las contraseñas no coinciden.';
						result += '</div>';
						document.getElementById('_AJAX_').innerHTML = result;

						}else{
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> El email ya existe.';
						result += '</div>';
						document.getElementById('_AJAX_').innerHTML = result;

						}
					} else if(connect.readyState != 4) {
							//Procesando
							result = '<div class="alert alert-dismissible alert-warning">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += 'Procesando...';
							result += '</div>';
							document.getElementById('_AJAX_').innerHTML = result;
						}
				}
				connect.open('POST', '?view=reg', true);
				connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				connect.send(form);
				}else{
					//ERROR: datos vacios
					result = '<div class="alert alert-dismissible alert-danger">';
					result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					result += '<strong>ERROR:</strong> todos los campos deben estar llenos.';
					result += '</div>';
					document.getElementById('_AJAX_').innerHTML = result;
				}

			}
		}
	<?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>