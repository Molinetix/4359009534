{include 'overall/header.tpl'}
    <body>
              
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row" style="padding:3em;">
        <div class="col-sm-12">
          {if isset($tipo)}
          <h2 class="sub-header">{$tipo} <span style="font-size: 15px;">organizado por <a href="?view=perfil&user={$id_creador}">{$user}</a> para el día <i class="fa fa-calendar" aria-hidden="true"></i> {$fecha}</span></h2>

          <!-- Post Principal --> 
          <div class="media">
              <div class="media-left" style="text-align: center;">
              </div>
              <div class="media-body principal-post">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-4">
                    <h4 class="sub-header"><b>Lugar y hora de quedada</b></h4>
                    <p>{$lugar_quedada} a las {$hora_quedada}</p><br/>
                    <h4 class="sub-header"><b>Lugar de pesca</b></h4>
                    <p>{$lugar_pesca}</p><br/>
                    <h4 class="sub-header"><b>Información adicional</b></h4>
                    <p>Tiempo estimado del evento: {$duracion}</p>
                    <p>Tipo de pesca: {$tipo_pesca}</p><br/> 
                    </div>
                    <div class="col-sm-4">
                    <h4 class="sub-header"><b>Contacto</b></h4>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> {$tfn_movil}</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> {$correo}</p><br/>
                    {if $tipo == 'Concurso'}
                    <h4 class="sub-header"><b>Requisitos de participación</b></h4>
                    <p>Precio de inscripción: {$inscripcion}</p><br/>
                    <h4 class="sub-header"><b>Premios</b></h4>
                    <p>{$premio}</p><br/>
                    {/if}
                    </div>
                    <div class="col-sm-4">
                    <h4 class="sub-header"><b>Pescadores apuntados: {$participantes}</b></h4><br/>
                    <!-- condición de inciio de sesión -->
                   {if $fecha_pasada == 'true'}
                    <div class="media">
                        <div class="alert alert-warning" role="alert" style="text-align:center">
                          Este evento ya se ha realizado.
                        </div>
                    </div>
                   {else}
                   {if isset($smarty.session.user)} 
                    <div id="_POINTS_">
                        <nav>
                              {if ($participa) == 0}
                              <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin-bottom:20px;" onclick="darAlta();">Participar</button>
                              {else if ($participa) == 1}
                              <button style="background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" onclick="darAlta();">Dar de baja</button>
                              {/if}
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
                          <div class="alert alert-warning" role="alert" style="text-align:center">
                              Debes <a href="?view=login">iniciar sesión</a> para poder participar.
                          </div>
                      </div>
                   {/if}
                   {/if}
                    </div>
                </div>
              </div>
              </div>
           </div> 

           <!-- Post Principal --> 
        </div>
        {else}
        <div class="media">
              <div class="media-left" style="text-align: center;">
              </div>
              <div class="media-body principal-post">
                <div class="alert alert-warning" role="alert" style="text-align:center">
                    Este evento no existe...
                </div> 
              </div>
           </div> 
        {/if}         
      </div>
    </div>      
{include 'overall/footer.tpl'}
    {if isset($smarty.session.user)}
      <script>
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
            connect.open('POST', '?view=ver_evento&id_evento={$id}&mode=alta', true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
      }
    
      </script>
    {/if}
   </body>
</html>       