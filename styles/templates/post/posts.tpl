{include 'overall/header.tpl'}
    <body>
              
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          {if isset($post)} 
          <h2 class="sub-header">{$post.titulo}</h2>
          {if isset($smarty.session.admin) and $post.aprobado == 0}
            <form action="" method="POST">
            <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin-right:40px;">Validar publicación</button>
            <button style="background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Eliminar publicación</button>
            </form>
          {/if} 
          
          <!-- Post Principal --> 
          <div class="media">
              <div class="media-left" style="text-align: center;">
                <a href="?view=perfil&user={$post.dueno}">
                    <img class="media-object" src="{$imagen}" width="80" height="80" />
                </a>
                <small><strong>{$user}</strong> <br /> <span style="color: {$color}">{$estado}</span></small>
              </div>
              <div class="media-body principal-post">
              <style type="text/css">
                * { margin: auto; padding: 0; text-align: center }
                #cabecera { font: bold 1.3em verdana; background-color: #feffe4;  }
                h1 { text-align: center ; padding: 0.5em }
                #menu { float: left; width: 25%; background-color: #e3f2ff; }
                #menu img { width: 35%; margin: 5%; cursor: pointer; }
                #principal { float: left; width: 75%; }
                #visor { width: 60%; margin: 10% }
                #visor img { width: 100% }
                </style>
                <script type="text/javascript">
                window.onload = function() { //tras cargar la página ...
                visor1=document.getElementById("visor"); //referencia al visor
                //mititulo=document.getElementById("titulo"); //referencia al pie de foto
                }
                function mifoto(num,image) { //cambiar la imagen
                         f="imagenes/"+image; //ruta de la nueva imagen
                         document.images["fotoVisor"].src=f; //cambiar imagen
                         t=document.images["fotos"+num].alt; //texto de pie de foto
                         //mititulo.innerHTML=t; //cambiar pie de foto
                         }
                </script>
                {$content}<br />
                {if $imagenkg != ''}
                <div id="menu">
                <img src='imagenes/{$imagenkg}' alt='Imagen peso de la captura.' name='fotos1' onclick="mifoto(1,'{$imagenkg}')"/>
                <img src='imagenes/{$imagencm}' alt='Imagen longitud de la captura.' name='fotos2' onclick="mifoto(2,'{$imagencm}')"/>
                <img src='imagenes/{$imagen1}' alt='Imagen libre 1.' name='fotos3' onclick="mifoto(3,'{$imagen1}')"/>
                <img src='imagenes/{$imagen2}' alt='Imagen libre 2.' name='fotos4' onclick="mifoto(4,'{$imagen2}')"/>
                </div>
                <div id="principal">
                <div id="visor">
                   <img src='imagenes/{$imagen1}' alt='Imagen libre 1.' name='fotoVisor'/>
                   <!--<div id="titulo">Imagen libre 1.</div>-->
                   </div>
                </div>
                {/if}
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
        {if isset($smarty.session.user)} 
                <div id="_POINTS_">
                    <nav>
                        <center>
                          <ul class="pagination">
                            {for $x=1 to 10}
                            <li><a style="cursor:pointer;" onclick="AddPoints({$x});">{$x}</a></li>
                            {/for}
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
        {/if}   
        <!-- condición de inciio de sesión -->

        {if isset($smarty.session.user)}
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
         {else}
            <div class="media">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Debes <a href="?view=login">iniciar sesión</a> para poder comentar.
                </div>
            </div>
         {/if}
          {else}
            <div class="media">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <strong>ERROR:</strong> el post solicitado no existe o ha sido borrado.
                </div>
            </div>
         {/if}
        </div>          
      </div>
    </div>      

{include 'overall/footer.tpl'}
    {if isset($smarty.session.user)}
      <script>
        function AddPoints(points){
      var connect, form, result;

      if(parseInt(points) >= 1 && parseInt(points) <= 10){

        form = 'points=' + points;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function(){
          if(connect.readyState == 4 && connect.status == 200){
            if(parseInt(connect.responseText) == 1){
                //Conectado con exito
                //redireccion
                result = '<nav><center>';
                result += '<div class="puntos-agregados">Puntos agregados correctamente</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;
              }else{
                //ERROR: Los datos son incorrectos
                result = '<nav><center>';
                result += '<div class="puntos-no-agregados">Ya has puntuado este post.</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;

              }
            } else if(connect.readyState != 4) {
                //Procesando...
                result = '<nav><center>';
                result += '<div class="agregando-puntos">Agregando puntos...</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;
                
              }
            }
            connect.open('POST', '?view=posts&&id={$smarty.get.id}&&mode=puntos', true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
          }
      }
    
      </script>
    {/if}
   </body>
</html>       