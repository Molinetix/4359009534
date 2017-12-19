<ul class="nav nav-sidebar">

  {if isset($smarty.get.view) and $smarty.get.view == 'perfil'}
  <li class="active"><a href="#">Perfil de {$user.user}</a></li>{/if}
  {if isset($smarty.get.view) and $smarty.get.view == 'cuenta'}
  <li class="active"><a href="#">Tu Cuenta</a></li>{/if}
  {if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
  <li class="active"><a href="#">Resultado de busqueda</a></li>{/if}


  {if isset($smarty.get.type) and $smarty.get.type == 'tops'}
  <li class="active">{else}<li>{/if}<a href="?view=index&type=tops">Los mejores</a></li>


  {if !isset($smarty.get.type) and isset($smarty.get.view) and $smarty.get.view == 'index' or (!isset($smarty.get.view))}
  <li class="active">{else}<li>{/if}<a href="?view=index">Inicio</a></li>


  {if isset($smarty.get.type) and $smarty.get.type == '1'}
  <li class="active">{else}<li>{/if}<a href="?view=index&type=1">Categoria 1</a></li>
  {if isset($smarty.get.type) and $smarty.get.type == '2'}
  <li class="active">{else}<li>{/if}<a href="?view=index&type=2">Categoria 2</a></li>
  {if isset($smarty.get.type) and $smarty.get.type == '3'}
  <li class="active">{else}<li>{/if}<a href="?view=index&type=3">Categoria 3</a></li>
</ul>