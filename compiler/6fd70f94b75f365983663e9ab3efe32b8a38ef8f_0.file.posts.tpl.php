<?php /* Smarty version 3.1.27, created on 2017-12-20 14:40:37
         compiled from "C:\wamp\www\PHP Avanzado\styles\templates\post\posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:248055a3a7665c8d7d4_22777106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd70f94b75f365983663e9ab3efe32b8a38ef8f' => 
    array (
      0 => 'C:\\wamp\\www\\PHP Avanzado\\styles\\templates\\post\\posts.tpl',
      1 => 1513780829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248055a3a7665c8d7d4_22777106',
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
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3a7665d29756_65639436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3a7665d29756_65639436')) {
function content_5a3a7665d29756_65639436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '248055a3a7665c8d7d4_22777106';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
              
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php if (isset($_smarty_tpl->tpl_vars['post']->value)) {?> 
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
</h2> 
          
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
        <?php if (isset($_SESSION['user'])) {?> 
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
        <?php }?>   
        <!-- condición de inciio de sesión -->

        <?php if (isset($_SESSION['user'])) {?>
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
         <?php } else { ?>
            <div class="media">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Debes <a href="?view=login">iniciar sesión</a> para poder comentar.
                </div>
            </div>
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
    
      <?php echo '</script'; ?>
>
    <?php }?>
   </body>
</html>       <?php }
}
?>