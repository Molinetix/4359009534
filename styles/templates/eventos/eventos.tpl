{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Crear evento de pesca</h2>
            <!--<div class="alert alert-success" role="alert">...</div>
            <div class="alert alert-info" role="alert">...</div>
            <div class="alert alert-warning" role="alert">...</div>
            <div class="alert alert-danger" role="alert">...</div>-->
            <div class="form-signin">
            <form action="?view=evento" method="POST"><!-- Explicar -->
            
            <h3>Información general</h3>
            <input type="hidden" class="form-control" name="creador" required value="{$smarty.session.id}" />

            <label>Organizador <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="organizador" placeholder="Ejemplo 1:  Sociedad de Pescadores la Unión, ejemplo 2: Particular" required value="" />   
			
			     <label>Comunidad del evento<span style="color: #FF0000">*</span></label><br />
            <select style="margin-bottom: 10px;" name="comunidad">
            	<option value="1">Andalucía</option>
            	<option value="2">Aragón</option>
            	<option value="3">Asturias</option>
            	<option value="4">Baleares</option>
            	<option value="5">Canarias</option>
            	<option value="6">Cantabria</option>
            	<option value="7">Castilla-La Mancha</option>
            	<option value="8">Castilla y León</option>
            	<option value="9">Cataluña</option>
            	<option value="10">Extremadura</option>
            	<option value="11">Galicia</option>
            	<option value="12">La Rioja</option>
            	<option value="13">Madrid</option>
            	<option value="14">Murcia</option>
            	<option value="15">Navarra</option>
            	<option value="16">País Vasco</option>
            	<option value="17">Valencia</option>
            </select><br />

            <label>Fecha del evento<span style="color: #FF0000">*</span></label>
            <div class="input-group date">
            <input type="text" id="fecha" data-date="01-01-2015" data-date-format="dd-mm-yyyy" class="form-control" name="fecha" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2" value="" readonly="">
            <span class="input-group-addon add-on" id="basic-addon2"><i class="fa fa-calendar"></i></span>
            </div> 
            
            <br/>
            <label>Lugar de quedada <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lugar_quedada" placeholder="Reunión previa a la pesca, ejemplo; Bar Manolo en Fuentes de Ebro" required value="" />

            <label>Hora quedada <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="hora_quedada" placeholder="Horario de quedada, ejemplo; 6:00am" required value="" />

            <label>Lugar de pesca <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lugar_pesca" placeholder="Lugar de pesca, ejemplo; Fuentes de Ebro (Soto aguilar)" required value="" />

            <label>Duración <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="duracion" placeholder="Horas de pesca, ejemplo; 6h aproximadas" required value="" />

            <label>Tipo de pesca <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="tipo_pesca" placeholder="Carpfishing, coup, libre..." required value="" />
  
            <hr/>
            <h3>Contacto</h3>
            <label>Teléfono móvil <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="tfn_movil" placeholder="Carpfishing, coup, libre..." required value="" />

            <label>Correo <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="correo" placeholder="Carpfishing, coup, libre..." required value="" />

            <hr/>
            <h3>Tipo de evento <span style="color: #FF0000;font-size:16px;">*</span></h3>
            <select name="tiene" required>
              <option value="Concurso">Concurso</option>
              <option value="Quedada">Quedada</option>
            </select><hr>
            
            <div class="dinamico">
            <label>Inscripción <span style="color: #FF0000"></span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="inscripcion" placeholder="€" min="0" max ="1000" />

            <label>Premios <span style="color: #FF0000"></span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="premios" placeholder="Indica los premios" value="" />
            </div>

           <div class="media">
           		<!--
              <div class="media-left">
                <img class="media-object" src="" width="70" height="70" />
              </div>
              -->
            </div>  
                
            <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>
            </form>
          </div>

        </div>
      </div>
    </div>      

{include 'overall/footer.tpl'}
<script>$('#fecha').datepicker('place');</script>
<script>

$(document).ready(function(){

  $( "select[name=tiene]" ).change(function() {

        if($('select[name=tiene] option:selected').text() == "Concurso"){
          $("div.dinamico").show("slow");

        }else{
          $("div.dinamico").hide("slow");

          }
      })
    });

</script>
   </body>
</html>       