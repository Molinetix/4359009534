<?php /* Smarty version 3.1.27, created on 2017-12-20 17:51:13
         compiled from "C:\wamp\www\pro\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:313985a3aa31127cdf1_38751369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13af3fe449bed055ea67545ef3dab656e358ee0a' => 
    array (
      0 => 'C:\\wamp\\www\\pro\\styles\\templates\\home\\index.tpl',
      1 => 1513781256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313985a3aa31127cdf1_38751369',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3aa3113a8b15_36492605',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3aa3113a8b15_36492605')) {
function content_5a3aa3113a8b15_36492605 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '313985a3aa31127cdf1_38751369';
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
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <div class="table-responsive">
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$foreach_pt_Sav = $_smarty_tpl->tpl_vars['pt'];
?>
                <tr>
                  <td><a href="?view=posts&id=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><a href="?view=perfil&&user=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id_dueno'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['dueno'];?>
</a></td>
                  <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
                  <td style="text-align: center;">0</td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
              </tbody>
            </table>
            <?php } else { ?>
              <div class="alert alert-danger" role="alert" style="text-align:center">
                    Por ahora no hay capturas.
              </div>
            <?php }?>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
          <div class="btn-group" role="group" aria-label="...">
          	<?php if (!isset($_GET['pag'])) {?>
          	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	          	<?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?>
	          		<?php if (isset($_GET['type'])) {?>
	          		<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
	          		<a type="button" href="?view=buscar&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php } else { ?>
	          		<a type="button" href="?view=index&pag=2" class="btn btn-default">Siguiente</a>
	          		<?php }?>
	          	<?php } else { ?>
	          	<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
	          	<?php }?>
	        <?php } else { ?>
	        	<?php if ($_GET['pag'] <= 1) {?>
	        	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	        	<?php } else { ?>
		        		<?php if (isset($_GET['type'])) {?>
		        		<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		          		<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
		          		<a type="button" href="?view=buscar&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		          		<?php } else { ?>
		        		<a type="button" href="?view=index&pag=<?php echo $_GET['pag']-1;?>
" class="btn btn-default">Anterior</a>
		        		<?php }?>
		        	<?php }?>

	        	<?php if ($_smarty_tpl->tpl_vars['pags']->value > 1 && $_GET['pag'] >= 1 && $_GET['pag'] < $_smarty_tpl->tpl_vars['pags']->value) {?>
	        		<?php if (isset($_GET['type'])) {?>
					<a type="button" href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
					<?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
		          	<a type="button" href="?view=buscar&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
		          	<?php } else { ?>
					<a type="button" href="?view=index&pag=<?php echo $_GET['pag']+1;?>
" class="btn btn-default">Siguiente</a>
					<?php }?>
				<?php } else { ?>
				<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
				<?php }?>
	        <?php }?>
          </div>
          <?php }?>


          <br>
          <br>
          <style>
              area {
               outline: none;
              }
          </style>
        
        <img name="usaMap" src="styles/images/mapa/mapa.gif" usemap="#m_usaMap" border="0" width="100%">
        <map name="m_usaMap">
            <area alt="" title="Andalucía" href="?view=index&type=1" shape="poly" coords="535,867,635,798,806,780,869,729,806,668,778,612,698,623,622,626,589,588,569,596,545,624,526,653,511,665,494,665,467,662,436,659,412,660,395,674,383,704,391,738" />
            <area alt="" title="Extremadura" href="?view=index&type=10" shape="poly" coords="604,513,515,635,443,653,421,630,409,614,398,587,428,564,422,531,413,524,400,512,392,492,388,486,419,474,428,464,433,450,433,440,433,432,428,426,448,420,469,414,485,402,517,416,541,425,553,431" />
            <area alt="" title="Castilla-La Mancha" href="?view=index&type=7" shape="poly" coords="643,615,871,593,875,611,890,579,892,554,898,537,893,524,877,510,869,495,872,474,881,465,884,441,875,440,862,426,848,399,851,380,859,363,862,350,850,332,838,329,818,332,604,584" />
            <area alt="" title="Castilla-La Mancha" href="?view=index&type=7" shape="poly" coords="569,437,643,531,640,534,634,539,626,546,683,495,692,461,673,444,676,431,689,431,656,423,634,426" />
            <area alt="" title="Castilla-La Mancha" href="?view=index&type=7" shape="poly" coords="719,315,775,306,799,329,802,338,794,356,775,369,760,387,749,402" />
            <area alt="" title="Madrid" href="?view=index&type=13" shape="poly" coords="635,407,716,419,718,437,733,423,725,408,731,404,722,386,716,372,701,359,707,348,713,329,706,320,686,335" />
            <area alt="" title="Murcia" href="?view=index&type=14" shape="poly" coords="817,651,880,711,874,720,896,702,913,698,931,701,926,689,935,674,913,660,908,638,914,618,914,596" />
            <area alt="" title="Comunidad Valenciana" href="?view=index&type=17" shape="poly" coords="922,618,944,663,941,666,950,653,953,632,967,612,989,596,1009,587,1000,569,980,540,971,506,971,482,992,459,1027,416,1039,386,1028,384,1016,377,998,377,986,380,964,437,949,458,928,470,925,461,907,476,899,500,905,543" />
            <area alt="" title="Cataluña" href="?view=index&type=9" shape="poly" coords="1030,365,1067,363,1066,369,1066,344,1094,312,1118,300,1166,300,1192,282,1259,239,1277,210,1270,177,1247,171,1214,186,1189,183,1162,177,1136,173,1121,162,1118,146,1091,140,1075,134" />
            <area alt="" title="Aragón" href="?view=index&type=2" shape="poly" coords="868,405,953,432,934,447,961,410,979,384,971,354,1009,354,1030,344,1033,294,1034,257,1055,197,1061,147,1037,147,1007,146,985,132,962,137,944,125,919,150,908,182,884,234,860,237,850,287" />
            <area alt="" title="Navarra" href="?view=index&type=15" shape="poly" coords="859,210,889,206,881,224,890,171,898,153,926,128,932,116,905,105,875,99,862,80,844,108,823,128,812,153" />
            <area alt="" title="La Rioja" href="?view=index&type=12" shape="poly" coords="754,203,848,219,844,225,854,191,827,174,776,164,761,155,755,155" />
            <area alt="" title="País Vasco" href="?view=index&type=16" shape="poly" coords="751,137,794,161,806,140,824,117,850,68,817,75,805,75,787,65,766,60,733,72" />
            <area alt="" title="Cantabría" href="?view=index&type=6" shape="poly" coords="607,90,667,129,673,96,686,92,715,80,733,65,706,56,680,56,643,63,628,60" />
            <area alt="" title="Asturias" href="?view=index&type=3" shape="poly" coords="427,99,452,104,466,98,562,84,593,72,623,54,517,45,514,35,422,45,410,60" />
            <area alt="" title="Galicia" href="?view=index&type=11" shape="poly" coords="322,234,400,236,416,194,412,159,431,167,401,141,416,116,413,86,398,41,346,27,317,51,274,72,235,98,269,213" />
            <area alt="" title="Castilla y León" href="?view=index&type=8" shape="poly" coords="436,396,608,416,658,357,679,315,743,272,752,212,740,122,712,93,653,138,625,117,575,96,502,114,431,125,428,221,493,266" />
            <area alt="" title="Castilla y León" href="?view=index&type=8" shape="poly" coords="736,284,821,320,838,267,844,236,812,219,758,212" />
            <area alt="" title="Islas Canarias" href="?view=index&type=5" shape="poly" coords="5,962,433,959,431,806,8,804" />
            <area alt="" title="Islas Baleares" href="?view=index&type=4" shape="poly" coords="1061,444,1067,624,1361,605,1378,408" />
        </map>
        </div>
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>