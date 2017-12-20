<ul class="nav nav-sidebar">
  
  {if isset($smarty.get.view) and $smarty.get.view == 'posts'}
  <li class="active"><a href="#">Visualización de Post</a></li>{/if}
  {if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
  <li class="active"><a href="#">Resultado de busqueda</a></li>{/if}

  
  {if isset($smarty.get.view) and $smarty.get.view == 'cuenta' or $smarty.get.view == 'subir'}

  {if $smarty.get.view == 'cuenta'}<li class="active">{else}
  <li>{/if}<a href="?view=cuenta">Tu cuenta</a></li>


  {if $smarty.get.view == 'subir'}<li class="active">{else}
  <li>{/if}<a href="?view=subir">Sube tu captura</a></li>

  {else}
  {if isset($smarty.get.type) and $smarty.get.type == 'tops'}
  <li class="active">{else}<li>{/if}<a href="?view=index&type=tops">Los mejores</a></li>
  {/if}

  <!--
  {if !isset($smarty.get.type) and isset($smarty.get.view) and $smarty.get.view == 'index' or (!isset($smarty.get.view))}
  <li class="active">{else}<li>{/if}<a href="?view=index">Inicio</a></li>
  -->


  {if isset($smarty.get.type) and $smarty.get.type == '1'}
  <li class="active"><a href="?view=index&type=1">Andalucía</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '2'}
  <li class="active"><a href="?view=index&type=2">Aragón</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '3'}
  <li class="active"><a href="?view=index&type=3">Asturias</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '4'}
  <li class="active"><a href="?view=index&type=4">Baleares</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '5'}
  <li class="active"><a href="?view=index&type=5">Canarias</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '6'}
  <li class="active"><a href="?view=index&type=6">Cantabria</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '7'}
  <li class="active"><a href="?view=index&type=7">Castilla-La Mancha</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '8'}
  <li class="active"><a href="?view=index&type=8">Castilla y León</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '9'}
  <li class="active"><a href="?view=index&type=9">Cataluña</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '10'}
  <li class="active"><a href="?view=index&type=10">Extremadura</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '11'}
  <li class="active"><a href="?view=index&type=11">Galicia</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '12'}
  <li class="active"><a href="?view=index&type=12">La Rioja</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '13'}
  <li class="active"><a href="?view=index&type=13">Madrid</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '14'}
  <li class="active"><a href="?view=index&type=14">Murcia</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '15'}
  <li class="active"><a href="?view=index&type=15">Navarra</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '16'}
  <li class="active"><a href="?view=index&type=16">País Vasco</a></li>{/if}
  {if isset($smarty.get.type) and $smarty.get.type == '17'}
  <li class="active"><a href="?view=index&type=17">Valencia</a></li>{/if}

</ul>

