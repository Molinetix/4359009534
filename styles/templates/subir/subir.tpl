{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Subir post</h2>
            <!--<div class="alert alert-success" role="alert">...</div>
            <div class="alert alert-info" role="alert">...</div>
            <div class="alert alert-warning" role="alert">...</div>
            <div class="alert alert-danger" role="alert">...</div>-->
            <div class="form-signin">
            <form action="?view=subir" method="POST" enctype="multipart/form-data"><!-- Explicar -->

            <label>Título <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="titulo" placeholder="Título de esta publicación" required="" value="" />
            
            <label>Contenido <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="contenido" placeholder="Cuenta más de tu sesión" required="" value="" /> 

            <label>Lugar de pesca <span style="color: #FF0000"></span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lugar" placeholder="Río, Lago, Embalse, Pantano..." required="" value="" />

            <label>Peso (kg)<span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="peso" placeholder="Ejemplo: 25.5kg" required="" value="" />  

            <label>Longitud (cm)<span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="longitud" placeholder="Ejemplo: 128cm" required="" value="" />  
                
            <br />
           <span style="color: #FF0000; font-size:14px; font-style: italic;">Por motivos de calidad el número de imágenes por publicación es de 4; 1 con el peso, 1 con la longitud y 2 del gusto del pescador.</span></label>   
           <div class="media">
           		<!--
              <div class="media-left">
                <img class="media-object" src="" width="70" height="70" />
              </div>
              -->
            <div class="media-body">

            	<div class="row">
					<div class="col-sm-6">
		                <label>Peso <span style="color: #FF0000">*</span></label>
		                <input style="margin-bottom: 10px;" type="file" name="fotokg" class="form-control" required/> 
	              </div>
	              <div class="col-sm-6">
		                <label>Longitud <span style="color: #FF0000">*</span></label>
		                <input style="margin-bottom: 10px;" type="file" name="fotocm" class="form-control" required/> 
	              </div>
	            	<div class="col-sm-6">
		                <label>Opcion 1 <span style="color: #FF0000">*</span></label>
		                <input style="margin-bottom: 10px;" type="file" name="foto1" class="form-control" required/> 
	              </div>
	              <div class="col-sm-6">
		                <label>Opción 2 <span style="color: #FF0000">*</span></label>
		                <input style="margin-bottom: 10px;" type="file" name="foto2" class="form-control" required/> 
	              </div>
	            </div>

            </div>
            </div>  
                
            <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>
              </form>
          </div>

        </div>
      </div>
    </div>      

{include 'overall/footer.tpl'}
   </body>
</html>       