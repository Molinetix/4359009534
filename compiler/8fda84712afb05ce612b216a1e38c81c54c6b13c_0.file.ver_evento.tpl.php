<?php /* Smarty version 3.1.27, created on 2018-01-06 05:10:50
         compiled from "C:\wamp\www\pro\styles\templates\eventos\ver_evento.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21185a505a5a2ca814_46824895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fda84712afb05ce612b216a1e38c81c54c6b13c' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\eventos\\ver_evento.tpl',
      1 => 1515215447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21185a505a5a2ca814_46824895',
  'variables' => 
  array (
    'tipo' => 0,
    'id_creador' => 0,
    'user' => 0,
    'fecha' => 0,
    'lugar_quedada' => 0,
    'hora_quedada' => 0,
    'lugar_pesca' => 0,
    'duracion' => 0,
    'tipo_pesca' => 0,
    'tfn_movil' => 0,
    'correo' => 0,
    'inscripcion' => 0,
    'premio' => 0,
    'participantes' => 0,
    'fecha_pasada' => 0,
    'participa' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a505a5a3490a6_10748669',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a505a5a3490a6_10748669')) {
function content_5a505a5a3490a6_10748669 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21185a505a5a2ca814_46824895';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
              
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row" style="padding:3em;">
        <div class="col-sm-12">
          <?php if (isset($_smarty_tpl->tpl_vars['tipo']->value)) {?>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
 <span style="font-size: 15px;">organizado por <a href="?view=perfil&user=<?php echo $_smarty_tpl->tpl_vars['id_creador']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a> para el día <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</span></h2>

          <!-- Post Principal --> 
          <div class="media">
              <div class="media-left" style="text-align: center;">
              </div>
              <div class="media-body principal-post">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-4">
                    <h4 class="sub-header"><b>Lugar y hora de quedada</b></h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['lugar_quedada']->value;?>
 a las <?php echo $_smarty_tpl->tpl_vars['hora_quedada']->value;?>
</p><br/>
                    <h4 class="sub-header"><b>Lugar de pesca</b></h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['lugar_pesca']->value;?>
</p><br/>
                    <h4 class="sub-header"><b>Información adicional</b></h4>
                    <p>Tiempo estimado del evento: <?php echo $_smarty_tpl->tpl_vars['duracion']->value;?>
</p>
                    <p>Tipo de pesca: <?php echo $_smarty_tpl->tpl_vars['tipo_pesca']->value;?>
</p><br/> 
                    </div>
                    <div class="col-sm-4">
                    <h4 class="sub-header"><b>Contacto</b></h4>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['tfn_movil']->value;?>
</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</p><br/>
                    <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'Concurso') {?>
                    <h4 class="sub-header"><b>Requisitos de participación</b></h4>
                    <p>Precio de inscripción: <?php echo $_smarty_tpl->tpl_vars['inscripcion']->value;?>
</p><br/>
                    <h4 class="sub-header"><b>Premios</b></h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['premio']->value;?>
</p><br/>
                    <?php }?>
                    </div>
                    <div class="col-sm-4">
                    <h4 class="sub-header"><b>Pescadores apuntados: <?php echo $_smarty_tpl->tpl_vars['participantes']->value;?>
</b></h4><br/>
                    <!-- condición de inciio de sesión -->
                   <?php if ($_smarty_tpl->tpl_vars['fecha_pasada']->value == 'true') {?>
                    <div class="media">
                        <div class="alert alert-warning" role="alert" style="text-align:center">
                          Este evento ya se ha realizado.
                        </div>
                    </div>
                   <?php } else { ?>
                   <?php if (isset($_SESSION['user'])) {?> 
                    <div id="_POINTS_">
                        <nav>
                              <?php if (($_smarty_tpl->tpl_vars['participa']->value) == 0) {?>
                              <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin-bottom:20px;" onclick="darAlta();">Participar</button>
                              <?php } elseif (($_smarty_tpl->tpl_vars['participa']->value) == 1) {?>
                              <button style="background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" onclick="darAlta();">Dar de baja</button>
                              <?php }?>
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
                          <div class="alert alert-warning" role="alert" style="text-align:center">
                              Debes <a href="?view=login">iniciar sesión</a> para poder participar.
                          </div>
                      </div>
                   <?php }?>
                   <?php }?>
                    </div>
                </div>
              </div>
              </div>
           </div> 

           <!-- Post Principal --> 
        </div>
        <?php } else { ?>
        <div class="media">
              <div class="media-left" style="text-align: center;">
              </div>
              <div class="media-body principal-post">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Este evento no existe...
                </div> 
              </div>
           </div> 
        <?php }?>         
      </div>
    </div>      
<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php if (isset($_SESSION['user'])) {?>
      <?php echo '<script'; ?>
>
        function darAlta(){
        var connect, form, result;


        form = 'alta=0';


        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function(){
          if(connect.readyState == 4 && connect.status == 200){
            if(parseInt(connect.responseText) == 1){
                //Conectado con exito
                //redireccion
                result = '<nav><center>';
                result += '<div class="puntos-agregados">Te has inscrito en este evento!</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;
              }else{
                //ERROR: Los datos son incorrectos
                result = '<nav><center>';
                result += '<div class="puntos-no-agregados">Te has dado de baja en el evento.</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;

              }
            } else if(connect.readyState != 4) {
                //Procesando...
                result = '<nav><center>';
                result += '<div class="agregando-puntos">Realizando petición...</div>';
                result += '</center></nav>';
                document.getElementById('_POINTS_').innerHTML = result;
                
              }
            }
            connect.open('POST', '?view=ver_evento&id_evento=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&mode=alta', true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
      }
    
      <?php echo '</script'; ?>
>
    <?php }?>
   </body>
</html>       <?php }
}
?>