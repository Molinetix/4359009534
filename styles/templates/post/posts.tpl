{include 'overall/header.tpl'}
    <body>
              
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row" style="padding:3em;">
        <div class="col-sm-12">
          {if isset($post)}

          <h2 class="sub-header">{$post.titulo}</h2>
          {if isset($smarty.session.admin) and $post.aprobado == 0}
            <form action="?view=administrar&post={$post.id}&accion=1" method="POST">
            <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin-bottom:20px;">Validar publicación</button>
            </form>
            <form action="?view=administrar&post={$post.id}&accion=0" method="POST">
            <button style="background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Eliminar publicación</button>
            </form>

          {/if} 
          
          {if !isset($smarty.session.admin) and $post.aprobado == 0}
            <div class="media">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <strong>ERROR:</strong> el post solicitado aún no ha sido revisado por ningún administrador.
                </div>
            </div>
          {else}
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

           <!-- condición de inciio de sesión --> 
            {if isset($smarty.session.user)}
              {if $vota == 0} 
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
                {else}
                <div class="media">
                <div class="alert alert-success" role="alert" style="text-align:center">
                    ¡Ya has valorado esta captura!
                </div>
            </div>
                {/if}
            {/if}   
            
           <!-- Comentario -->
           {if isset($comentarios)}
           {foreach from=$comentarios item=ct}
           <div class="media">
              <div class="media-body comun-post">
                {if isset($smarty.session.user) AND $smarty.session.id == $ct.id_autor}
                <span onclick="editar()" style="margin-right: 2em;cursor: pointer;"><i class="fa fa-pencil" title="editar" aria-hidden="true"></i></span><span onclick="eliminar()" style="margin-right: 2em;cursor: pointer;"><i class="fa fa-trash" title="eliminar" aria-hidden="true"></i></span><br/>
                {/if}
                <span style="padding: 5px 7px 5px 5px;">{$ct.coment}</span>
              </div> 
               <div class="media-right" style="text-align: center;">
                <a href="?view=perfil&user={$ct.id_autor}">
                {if $ct.ext != ''}
                    <img class="media-object" src="uploads/avatar/{$ct.id_autor}.{$ct.ext}" width="40" height="40" style="border-radius: 5em;"/>
                {else}
                    <img class="media-object" src="uploads/avatar/user.png" width="40" height="40" style="border-radius: 5em;"/>
                {/if}
                </a>
                <small><strong>{$ct.autor}</strong> <br /><span style="color: {$ct.color}">{$ct.estado}</span></small>
              </div>
          </div>
          {/foreach}
          <!-- Comentario -->
          {else}
          <div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">No hay comentarios para esta captura.</div>
          {/if}
         

        <!-- AJAX de comentarios -->    
        <div id="_COMMENTS_">
            <!--<div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">Haciendo espacio para tu comentario...</div>-->
        </div>
        

        <!-- condición de inciio de sesión -->
        {if isset($smarty.session.user)}
        <div class="media"> 
            <div class="media-body">
                <textarea class="form-control" id="comentario" placeholder="Hacer un comentario..."></textarea>
                <input type="hidden" id="id_usuario_coment" value="{$smarty.session.id}"/>
                <center>
                <a style="margin-top: 7px;" onclick="comentar()" id="send_request" class="btn btn-primary btn-sm">Comentar</a>
                </center>
            </div> 
            <div class="media-right" style="text-align: center;">
                <img class="media-object" src="uploads/avatar/{$smarty.session.id}.{$smarty.session.ext}" width="80" height="80" />
            </div>
        </div> 
         {else}
            <div class="media">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Debes <a href="?view=login">iniciar sesión</a> para poder comentar.
                </div>
            </div>
         {/if}
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



      function comentar(){

        $id_user = document.getElementById('id_usuario_coment').value;
        $contenido = document.getElementById('comentario').value;

            form = 'comentario=' + $contenido;


            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function(){
              if(connect.readyState == 4 && connect.status == 200){
                if(parseInt(connect.responseText) == 1){
                    //Conectado con exito
                    //redireccion
                    result = '<nav><center>';
                    result += '<div class="puntos-agregados">Comentario agregado correctamente</div>';
                    result += '</center></nav>';
                    document.getElementById('comentario').value = "";
                    document.getElementById('_COMMENTS_').innerHTML = result;
                    window.location = "?view=posts&id={$smarty.get.id}";
                  }else if(parseInt(connect.responseText) == 2){
                    //ERROR: Los datos son incorrectos
                    result = '<nav><center>';
                    result += '<div class="puntos-no-agregados">Ha sucedido un error al realizar tu comentario.</div>';
                    result += '</center></nav>';
                    document.getElementById('_COMMENTS_').innerHTML = result;

                  }else{
                    //ERROR: Los datos son incorrectos
                    result = '<nav><center>';
                    result += '<div class="puntos-no-agregados">Por favor, escribe algo antes de comentar.</div>';
                    result += '</center></nav>';
                    document.getElementById('_COMMENTS_').innerHTML = result;

                  }
                } else if(connect.readyState != 4) {
                    //Procesando...
                    result = '<nav><center>';
                    result += '<div class="agregando-puntos">Agregando comentario...</div>';
                    result += '</center></nav>';
                    document.getElementById('_COMMENTS_').innerHTML = result;
                    
                  }
                }
                connect.open('POST', '?view=posts&&id={$smarty.get.id}&&mode=comentarios', true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);
      }

      function editar(){
        alert("editando...");
      }

      function eliminar(){
        alert("Deseas eliminar este comentario");
      }
    
      </script>
    {/if}
   </body>
</html>       