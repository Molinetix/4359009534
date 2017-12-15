{include 'overall/header.tpl'}

<body>      
	{include 'overall/nav.tpl'}
	
	<div class="container" style="margin-top: 100px;">
		<div class="container">
		<center>
		  <div id="_AJAX_"></div>
	      <div class="form-signin" style="width: 500px;">
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
	      </div>
		</center>
    	</div>
	</div>

	{include 'overall/footer.tpl'}
	<script>
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
	</script>
  </body>
</html>