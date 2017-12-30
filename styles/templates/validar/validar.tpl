{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">{$titulo}</h2>
          <div class="table-responsive">
          {if isset($posts)}
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                </tr>
              </thead>
              <tbody>
              {foreach from=$posts item=pt}
                <tr>
                  <td><a href="?view=posts&id={$pt.id}">{$pt.titulo}</a></td>
                  <td><a href="?view=perfil&&user={$pt.id_dueno}">{$pt.dueno}</a></td>
                </tr>
              {/foreach}
              </tbody>
            </table>
            {else}
              <div class="alert alert-danger" role="alert" style="text-align:center">
                    Por ahora no hay capturas.
              </div>
            {/if}
          </div>
          {if isset($posts)}
          <div class="btn-group" role="group" aria-label="...">
          	{if !isset($smarty.get.pag)}
          	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	          	{if $pags > 1}
	          		{if isset($smarty.get.type)}
	          		<a type="button" href="?view=index&type={$smarty.get.type}&pag=2" class="btn btn-default">Siguiente</a>
	          		{else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
	          		<a type="button" href="?view=buscar&pag=2" class="btn btn-default">Siguiente</a>
	          		{else}
	          		<a type="button" href="?view=index&pag=2" class="btn btn-default">Siguiente</a>
	          		{/if}
	          	{else}
	          	<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
	          	{/if}
	        {else}
	        	{if $smarty.get.pag <= 1}
	        	<a type="button" href="#" class="btn btn-default" disabled>Anterior</a>
	        	{else}
		        		{if isset($smarty.get.type)}
		        		<a type="button" href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag - 1}" class="btn btn-default">Anterior</a>
		          		{else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
		          		<a type="button" href="?view=buscar&pag={$smarty.get.pag - 1}" class="btn btn-default">Anterior</a>
		          		{else}
		        		<a type="button" href="?view=index&pag={$smarty.get.pag - 1}" class="btn btn-default">Anterior</a>
		        		{/if}
		        	{/if}

	        	{if $pags > 1 and $smarty.get.pag >=1 and $smarty.get.pag < $pags}
	        		{if isset($smarty.get.type)}
					<a type="button" href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag + 1}" class="btn btn-default">Siguiente</a>
					{else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
		          	<a type="button" href="?view=buscar&pag={$smarty.get.pag + 1}" class="btn btn-default">Siguiente</a>
		          	{else}
					<a type="button" href="?view=index&pag={$smarty.get.pag + 1}" class="btn btn-default">Siguiente</a>
					{/if}
				{else}
				<a type="button" href="#" class="btn btn-default" disabled>Siguiente</a>
				{/if}
	        {/if}
          </div>
          {/if}
        </div>
      </div>
    </div>      

{include 'overall/footer.tpl'}
   </body>
</html> 