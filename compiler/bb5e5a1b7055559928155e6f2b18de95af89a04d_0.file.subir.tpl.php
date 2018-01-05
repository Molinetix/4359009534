<?php /* Smarty version 3.1.27, created on 2018-01-05 06:19:36
         compiled from "C:\wamp\www\pro\styles\templates\subir\subir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:42665a4f18f8c48f95_20417383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb5e5a1b7055559928155e6f2b18de95af89a04d' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\subir\\subir.tpl',
      1 => 1515133065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42665a4f18f8c48f95_20417383',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4f18f9059603_38505492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4f18f9059603_38505492')) {
function content_5a4f18f9059603_38505492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '42665a4f18f8c48f95_20417383';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Sube tu captura</h2>
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
			
			<label>Comunidad <span style="color: #FF0000">*</span></label><br />
            <select style="margin-bottom: 10px;" name="categoria">
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

            <label>Lugar de pesca <span style="color: #FF0000"></span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lugar" placeholder="Río, Lago, Embalse, Pantano..." required="" value="" />

            <label>Tipo de pez <span style="color: #FF0000">*</span></label><br />
            <select style="margin-bottom: 10px;" name="tipo_pez">
              <option value="carpa">Carpa</option>
              <option value="siluro">Siluro</option>
              <option value="bass">Black Bass</option>
              <option value="lucio">Lucio</option>
              <option value="lucioperca">Lucioperca</option>
              <option value="barbo">Barbo</option>
              <option value="carpin">Carpín</option>
              <option value="escardino">Escardino</option>
              <option value="tenca">Tenca</option>
              <option value="0">Otros</option>
            </select><br />

            <label>Peso (kg)<span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="peso" placeholder="Ejemplo: 25.5" required="" value="" />  

            <label>Longitud (cm)<span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="longitud" placeholder="Ejemplo: 128.8" required="" value="" />  
                
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

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>