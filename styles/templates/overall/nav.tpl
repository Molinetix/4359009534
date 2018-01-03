<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?view=index">PescAPP</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {if isset($smarty.get.view) and $smarty.get.view == 'index' or !isset($smarty.get.view)}
        <li class="active">
        {else}
        <li>{/if}<a href="?view=index">Inicio</a></li>
      </ul>
      <!--<form class="navbar-form navbar-left" role="search" action="?view=buscar" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="busqueda" placeholder="Buscar un post..." size="50">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
      {if isset($smarty.session.user)}
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {$smarty.session.user} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?view=cuenta">Cuenta</a></li>
            <li><a href="?view=perfil&user={$smarty.session.id}">Perfil</a></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
      {else}
        {if isset($smarty.get.view) and $smarty.get.view == 'login' or !isset($smarty.get.view)}
        <li class="active">
        {else}
        <li>{/if}<a href="?view=login">Login</a></li>
        {if isset($smarty.get.view) and $smarty.get.view == 'reg' or !isset($smarty.get.view)}
        <li class="active">
        {else}
        <li>{/if}<a href="?view=reg">Registrarme</a></li>
      {/if}
      </ul>
    </div>
  </div>
</nav>