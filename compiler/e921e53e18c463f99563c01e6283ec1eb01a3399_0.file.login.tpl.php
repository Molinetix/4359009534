<?php /* Smarty version 3.1.27, created on 2018-01-05 14:49:57
         compiled from "C:\wamp\www\pro\styles\templates\public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30975a4f9095511b70_40763767%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e921e53e18c463f99563c01e6283ec1eb01a3399' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\public\\login.tpl',
      1 => 1515163795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30975a4f9095511b70_40763767',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f9095559817_63934265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f9095559817_63934265')) {
function content_5a4f9095559817_63934265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30975a4f9095511b70_40763767';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>      
	<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
	<div class="container" style="margin-top: 25px;">
		<div class="container">
		<center>
		  <div id="_AJAX_"></div>
	      <div class="form-signin">
	        <h2 class="form-signin-heading">Inicia sesión</h2>
	        <label for="inputEmail" class="sr-only">Usuario</label>
	        <input type="text" id="user" class="form-control" placeholder="introduce tu usuario" required="" autofocus="">
	        <label for="inputPassword" class="sr-only">Contrasña</label>
	        <input type="password" id="pass" class="form-control" placeholder="*******" required="">
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" id="session" value="1"> Recordarme
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" id="send_request" type="button">Iniciar sesión</button>
	        <div style="margin-top: 3em; width: 60%; height: 60%;">
	        <img class="img-responsive" src="imagenes/capturapp/captureapp.png" alt=""/>
	        </div>
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
				var connect, user, pass, session, form, result;

				user = document.getElementById('user').value;
				pass = document.getElementById('pass').value;
				session = document.getElementById('session').checked ? true : false;

				if(user != '' && pass != ''){

				form = 'user=' + user + '&pass=' + pass + '&session=' + session;


				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				connect.onreadystatechange = function(){
					if(connect.readyState == 4 && connect.status == 200){
						if(parseInt(connect.responseText) == 1){
							//Conectado con exito
							//redireccion
							result = '<div class="alert alert-dismissible alert-success" style="width:500px;">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += '<strong>Conectado!</strong> Bienvenido, solo un poco más.';
							result += '</div>';
							location.href = '?view=index';
							document.getElementById('_AJAX_').innerHTML = result;
						}else{
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger" style="width:500px;">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> Credenciales incorrectas.';
						result += '</div>';
						document.getElementById('_AJAX_').innerHTML = result;

						}
					} else if(connect.readyState != 4) {
							//Procesando
							result = '<div class="alert alert-dismissible alert-warning" style="width:500px;">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += 'Procesando...';
							result += '</div>';
							document.getElementById('_AJAX_').innerHTML = result;
						}
				}
				connect.open('POST', '?view=login', true);
				connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				connect.send(form);
				}else{
					//ERROR: datos vacios
					result = '<div class="alert alert-dismissible alert-danger" style="width:500px;">';
					result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					result += '<strong>ERROR:</strong> el usuario y la contraseña no pueden estar vacios.';
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