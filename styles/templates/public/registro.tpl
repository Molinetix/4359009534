{include 'overall/header.tpl'}

<body>      
	{include 'overall/nav.tpl'}
	
	<div class="container" style="margin-top: 100px;">
		<div class="container">
		<center>
		  <div id="_AJAX_"></div>
	      <div class="form-signin" style="width: 500px;">
	        <h2 class="form-signin-heading">Registro</h2>
	        <label for="inputUser" class="sr-only">Usuario</label>
	        <input type="text" id="user" class="form-control" placeholder="introduce tu usuario" required="" autofocus="">
	        <label for="inputPassword" class="sr-only">Contrasña</label>
	        <input type="password" id="pass" class="form-control" placeholder="*******" required="">
	        <label for="inputEmail" class="sr-only">Email</label>
	        <input type="email" id="email" class="form-control" placeholder="tu@correo" required=""><br>
	        <button class="btn btn-lg btn-primary btn-block" id="send_request" type="button">Registrarme</button>
	      </div>
		</center>
    	</div>
	</div>

	{include 'overall/footer.tpl'}
	<script>
		window.onload = function(){
			document.getElementById('send_request').onclick = function(){
				var connect, user, pass, email, form, result;

				user = document.getElementById('user').value;
				pass = document.getElementById('pass').value;
				email = document.getElementById('email').value;

				if(user != '' && pass != '' && email != ''){

				form = 'user=' + user + '&pass=' + pass + '&email=' + email;


				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				connect.onreadystatechange = function(){
					if(connect.readyState == 4 && connect.status == 200){
						if(parseInt(connect.responseText) == 1){
							//Conectado con exito
							//redireccion
							result = '<div class="alert alert-dismissible alert-success" style="width:500px;">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += '<strong>Registrado!</strong> Bienvenido, solo un poco más.';
							result += '</div>';
							location.href = '?view=index';
							document.getElementById('_AJAX_').innerHTML = result;
						}else if(parseInt(connect.responseText) == 2){
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger" style="width:500px;">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> El usuario ya existe.';
						result += '</div>';
						document.getElementById('_AJAX_').innerHTML = result;

						}else{
						//ERROR: Los datos son incorrectos
						result = '<div class="alert alert-dismissible alert-danger" style="width:500px;">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>ERROR:</strong> El email ya existe.';
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
				connect.open('POST', '?view=reg', true);
				connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				connect.send(form);
				}else{
					//ERROR: datos vacios
					result = '<div class="alert alert-dismissible alert-danger" style="width:500px;">';
					result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					result += '<strong>ERROR:</strong> todos los campos deben estar llenos.';
					result += '</div>';
					document.getElementById('_AJAX_').innerHTML = result;
				}

			}
		}
	</script>
  </body>
</html>