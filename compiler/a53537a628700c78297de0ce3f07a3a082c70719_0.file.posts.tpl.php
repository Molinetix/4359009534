<?php /* Smarty version 3.1.27, created on 2018-01-05 05:39:38
         compiled from "C:\wamp\www\pro\styles\templates\post\posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183255a4f0f9addd790_17134154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53537a628700c78297de0ce3f07a3a082c70719' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\post\\posts.tpl',
      1 => 1515130775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183255a4f0f9addd790_17134154',
  'variables' => 
  array (
    'post' => 0,
    'imagen' => 0,
    'user' => 0,
    'color' => 0,
    'estado' => 0,
    'content' => 0,
    'imagenkg' => 0,
    'imagencm' => 0,
    'imagen1' => 0,
    'imagen2' => 0,
    'vota' => 0,
    'x' => 0,
    'comentarios' => 0,
    'ct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f0f9af29e90_07082741',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f0f9af29e90_07082741')) {
function content_5a4f0f9af29e90_07082741 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183255a4f0f9addd790_17134154';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
              
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row" style="padding:3em;">
        <div class="col-sm-12">
          <?php if (isset($_smarty_tpl->tpl_vars['post']->value)) {?>

          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
</h2>
          <?php if (isset($_SESSION['admin']) && $_smarty_tpl->tpl_vars['post']->value['aprobado'] == 0) {?>
            <form action="?view=administrar&post=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
&accion=1" method="POST">
            <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin-bottom:20px;">Validar publicación</button>
            </form>
            <form action="?view=administrar&post=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
&accion=0" method="POST">
            <button style="background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">Eliminar publicación</button>
            </form>

          <?php }?> 
          
          <?php if (!isset($_SESSION['admin']) && $_smarty_tpl->tpl_vars['post']->value['aprobado'] == 0) {?>
            <div class="media">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <strong>ERROR:</strong> el post solicitado aún no ha sido revisado por ningún administrador.
                </div>
            </div>
          <?php } else { ?>
          <!-- Post Principal --> 
          <div class="media">
              <div class="media-left" style="text-align: center;">
                <a href="?view=perfil&user=<?php echo $_smarty_tpl->tpl_vars['post']->value['dueno'];?>
">
                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" width="80" height="80" />
                </a>
                <small><strong><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</strong> <br /> <span style="color: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</span></small>
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
                <?php echo '<script'; ?>
 type="text/javascript">
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
                <?php echo '</script'; ?>
>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br />
                <?php if ($_smarty_tpl->tpl_vars['imagenkg']->value != '') {?>
                <div id="menu">
                <img src='imagenes/<?php echo $_smarty_tpl->tpl_vars['imagenkg']->value;?>
' alt='Imagen peso de la captura.' name='fotos1' onclick="mifoto(1,'<?php echo $_smarty_tpl->tpl_vars['imagenkg']->value;?>
')"/>
                <img src='imagenes/<?php echo $_smarty_tpl->tpl_vars['imagencm']->value;?>
' alt='Imagen longitud de la captura.' name='fotos2' onclick="mifoto(2,'<?php echo $_smarty_tpl->tpl_vars['imagencm']->value;?>
')"/>
                <img src='imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen1']->value;?>
' alt='Imagen libre 1.' name='fotos3' onclick="mifoto(3,'<?php echo $_smarty_tpl->tpl_vars['imagen1']->value;?>
')"/>
                <img src='imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen2']->value;?>
' alt='Imagen libre 2.' name='fotos4' onclick="mifoto(4,'<?php echo $_smarty_tpl->tpl_vars['imagen2']->value;?>
')"/>
                </div>
                <div id="principal">
                <div id="visor">
                   <img src='imagenes/<?php echo $_smarty_tpl->tpl_vars['imagen1']->value;?>
' alt='Imagen libre 1.' name='fotoVisor'/>
                   <!--<div id="titulo">Imagen libre 1.</div>-->
                   </div>
                </div>
                <?php }?>
              </div>
           </div> 

           <!-- Post Principal --> 

           <!-- condición de inciio de sesión --> 
            <?php if (isset($_SESSION['user'])) {?>
              <?php if ($_smarty_tpl->tpl_vars['vota']->value == 0) {?> 
                    <div id="_POINTS_">
                        <nav>
                            <center>
                              <ul class="pagination">
                                <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                                <li><a style="cursor:pointer;" onclick="AddPoints(<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
);"><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
                                <?php }} ?>
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
                <?php } else { ?>
                <div class="media">
                <div class="alert alert-success" role="alert" style="text-align:center">
                    ¡Ya has valorado esta captura!
                </div>
            </div>
                <?php }?>
            <?php }?>   
            
           <!-- Comentario -->
           <?php if (isset($_smarty_tpl->tpl_vars['comentarios']->value)) {?>
           <?php
$_from = $_smarty_tpl->tpl_vars['comentarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
$foreach_ct_Sav = $_smarty_tpl->tpl_vars['ct'];
?>
           <div class="media">
              <div class="media-body comun-post" id="comentario_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
">
              <span id="clicked_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
" style="visibility: hidden">not_clicked</span>
                <span style="padding: 5px 7px 5px 5px;"><?php echo $_smarty_tpl->tpl_vars['ct']->value['coment'];?>
</span>
              </div> 
               <div class="media-right" style="text-align: center;">
                <a href="?view=perfil&user=<?php echo $_smarty_tpl->tpl_vars['ct']->value['id_autor'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['ct']->value['ext'] != '') {?>
                    <img class="media-object" src="uploads/avatar/<?php echo $_smarty_tpl->tpl_vars['ct']->value['id_autor'];?>
.<?php echo $_smarty_tpl->tpl_vars['ct']->value['ext'];?>
" width="40" height="40" style="border-radius: 5em;"/>
                <?php } else { ?>
                    <img class="media-object" src="uploads/avatar/user.png" width="40" height="40" style="border-radius: 5em;"/>
                <?php }?>
                </a>
                <small><strong><?php echo $_smarty_tpl->tpl_vars['ct']->value['autor'];?>
</strong> <br /><span style="color: <?php echo $_smarty_tpl->tpl_vars['ct']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['ct']->value['estado'];?>
</span></small>
              </div>
          </div>
          <?php echo '<script'; ?>
>
          window.addEventListener('click', function(e){
  
            var comentario_en_edicion;

            comentario_en_edicion = document.getElementById('clicked_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
').innerHTML;            

            if(<?php echo $_SESSION['id'];?>
 == <?php echo $_smarty_tpl->tpl_vars['ct']->value['id_autor'];?>
){
              if (document.getElementById('comentario_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
').contains(e.target)){
                // Clicked in box
                if(comentario_en_edicion == 'not_clicked'){
                document.getElementById('comentario_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
').innerHTML = '<span id="clicked_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
" style="visibility: hidden">clicked</span><textarea class="form-control" id="textarea_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ct']->value['coment'];?>
</textarea><center><a style="margin-top: 7px; margin-right: 7px; margin-bottom: 7px;" onclick="editar(<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
)" id="editar_comentario" class="btn btn-primary btn-sm">Editar</a><a style="margin-top: 7px; margin-right: 7px; margin-bottom: 7px;" onclick="eliminar(<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
)" id="eliminar_comentario" class="btn btn-primary btn-sm">Eliminar</a></center>';
                }else{
                  e.stopPropagation();
                }
              } else {
                document.getElementById('comentario_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
').innerHTML = '<span id="clicked_<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
" style="visibility: hidden">not_clicked</span><span style="padding: 5px 7px 5px 5px;"><?php echo $_smarty_tpl->tpl_vars['ct']->value['coment'];?>
</span>';
              }
            }
          });
          <?php echo '</script'; ?>
>
          <?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
          <!-- Comentario -->
          <?php } else { ?>
          <div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">No hay comentarios para esta captura.</div>
          <?php }?>
         

        <!-- AJAX de comentarios -->    
        <div id="_COMMENTS_">
            <!--<div class="alert alert-warning" style="margin: 15px 0px -10px 0px;background:#d6b62d;" role="alert">Haciendo espacio para tu comentario...</div>-->
        </div>
        

        <!-- condición de inciio de sesión -->
        <?php if (isset($_SESSION['user'])) {?>
        <div class="media"> 
            <div class="media-body">
                <textarea class="form-control" id="comentario" placeholder="Hacer un comentario..."></textarea>
                <input type="hidden" id="id_usuario_coment" value="<?php echo $_SESSION['id'];?>
"/>
                <center>
                <a style="margin-top: 7px;" onclick="comentar()" id="send_request" class="btn btn-primary btn-sm">Comentar</a>
                </center>
            </div> 
            <div class="media-right" style="text-align: center;">
                <img class="media-object" src="uploads/avatar/<?php echo $_SESSION['id'];?>
.<?php echo $_SESSION['ext'];?>
" width="80" height="80" />
            </div>
        </div> 
        <div class="media">
          <div class="alert alert-info" role="alert" style="text-align:left;color:black;">
              <center><h4>Comandos para dar estilo a tu comentario:</h4></center>
              Resaltar texto: <span style="font-size: 35px;">[b]</span><b>Este comentario utiliza negrita</b><span style="font-size: 35px;">[/b]</span>.<br/>
              Salto de línea:<span style="font-size: 35px;"> /n </span>ahora hacemos un salto <br/><br/>
              Centrar comentario:<center><span style="font-size: 35px;">[center]</span>Este comentario está centrado<span style="font-size: 35px;">[/center]</span>.</center>
          </div>
        </div>
         <?php } else { ?>
            <div class="media">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Debes <a href="?view=login">iniciar sesión</a> para poder comentar.
                </div>
            </div>
         <?php }?>
      <?php }?>
          <?php } else { ?>
            <div class="media">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <strong>ERROR:</strong> el post solicitado no existe o ha sido borrado.
                </div>
            </div>
         <?php }?>
        </div>          
      </div>
    </div>      
<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php if (isset($_SESSION['user'])) {?>
      <?php echo '<script'; ?>
>
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
            connect.open('POST', '?view=posts&&id=<?php echo $_GET['id'];?>
&&mode=puntos', true);
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
                    window.location = "?view=posts&id=<?php echo $_GET['id'];?>
";
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
                connect.open('POST', '?view=posts&&id=<?php echo $_GET['id'];?>
&&mode=comentarios', true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);
      }

      function editar($id_comentario){
        $contenido = document.getElementById('textarea_'+$id_comentario).value;

            form = 'editar_comentario=' + $contenido + '&id_comentario=' +$id_comentario;


            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function(){
              if(connect.readyState == 4 && connect.status == 200){
                if(parseInt(connect.responseText) == 1){
                    //Conectado con exito
                    //redireccion
                    result = '<nav><center>';
                    result += '<div class="puntos-agregados">Comentario editado correctamente</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    window.location = "?view=posts&id=<?php echo $_GET['id'];?>
";
                  }else{
                    //ERROR: Los datos son incorrectos
                    result = '<nav><center>';
                    result += '<div class="puntos-no-agregados">Error, al editar el comentario.</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    window.location = "?view=posts&id=<?php echo $_GET['id'];?>
";

                  }
                } else if(connect.readyState != 4) {
                    //Procesando...
                    result = '<nav><center>';
                    result += '<div class="agregando-puntos">Editando comentario...</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    
                  }
                }
                connect.open('POST', '?view=posts&&id=<?php echo $_GET['id'];?>
&&mode=editar', true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);

      }

      function eliminar($id_comentario){
        var r = confirm("¿Deseas eliminar este comentario?");
        if (r == true) {

            form = 'eliminar_comentario=' + $id_comentario;


            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function(){
              if(connect.readyState == 4 && connect.status == 200){
                if(parseInt(connect.responseText) == 1){
                    //Conectado con exito
                    //redireccion
                    result = '<nav><center>';
                    result += '<div class="puntos-agregados">Comentario eliminado correctamente</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    window.location = "?view=posts&id=<?php echo $_GET['id'];?>
";
                  }else{
                    //ERROR: Los datos son incorrectos
                    result = '<nav><center>';
                    result += '<div class="puntos-no-agregados">No se ha podido eliminar el comentario.</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    window.location = "?view=posts&id=<?php echo $_GET['id'];?>
";

                  }
                } else if(connect.readyState != 4) {
                    //Procesando...
                    result = '<nav><center>';
                    result += '<div class="agregando-puntos">Eliminando comentario...</div>';
                    result += '</center></nav><br/>';
                    document.getElementById('comentario_'+$id_comentario).innerHTML = result;
                    
                  }
                }
                connect.open('POST', '?view=posts&&id=<?php echo $_GET['id'];?>
&&mode=eliminar', true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);

        }
      }


      <?php echo '</script'; ?>
>
    <?php }?>
   </body>
</html>       <?php }
}
?>