{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                {if isset($existe)}  
          <h2 class="sub-header">Perfil de {$user.user}</h2> 
                  
           <div class="media">
              <div class="media-left">
                <img class="media-object" src="{$image}" width="110" height="110" />
              </div>
              <div class="media-body">
                <ul style="list-style: none; padding-left: 8px;">
                    <li style="margin-bottom: 2px;"><i class="fa fa-user"></i> <strong>Usuario:</strong> {$user.user} </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-user-secret"></i> <strong>Nombre Real:</strong> {$nombres} </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-birthday-cake"></i> <strong>Nacimiento:</strong> {$fecha} </li>
                    <li style="margin-bottom: 2px;"><i class="fa fa-book"></i> <strong>Posts:</strong> {$c_posts}</li>
                    <li style="margin-bottom: 2px;color:{$c_estado};"><i class="fa fa-bolt"></i> <strong>Estado:</strong> {$estado}</li>
                </ul>
              </div>
           </div>     
                    
           <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th style="width: 80%;">Posts</th>
                  <th style="width: 10%;">Puntos</th>
                  <th style="width: 10%;">Comentarios</th>
                  {if isset($smarty.session.id) and $smarty.session.id == $id_dueno_perfil}
                  <th style="width: 10%;">Eliminar</th> 
                  {/if}
                </tr>
              </thead>
              <tbody>
                
                {if isset($posts)}
                {foreach from=$posts item=pt}
                {if $pt.z == 0}<tr>{else}<tr class="active">{/if}
                  <td><a href="?view=posts&id={$pt.id}">{$pt.titulo}</a></td>
                  <td>{$pt.puntos}</td>
                  <td>{$pt.comentarios}</td>
                  {if isset($smarty.session.id) and $smarty.session.id == $id_dueno_perfil}
                  <td><button onclick="myFunction('{$pt.id}','{$smarty.session.id}')"><i class="fa fa-trash" title="Eliminar post: {$pt.titulo}"></i></button>
                  </td> 
                  {/if}
                </tr>
                {/foreach}
                 {else}
                <tr class="info">
                    {if !isset($smarty.get.pag)}
                    <td colspan="4" style="text-align: center;">Este usuario no tiene posts o no han sido validados todavía.</td>
                    {else}
                    <td colspan="4" style="text-align: center;">No existen más posts.</td>
                    {/if}
                </tr>
                {/if} 
         
              </tbody>
            </table> 
            
            {if isset($posts)}
            <nav>
              <ul class="pager">
                {if !isset($smarty.get.pag)}
                <li class="disabled"><a href="#">Anterior</a></li>
                  {if $pags > 1}
                    <li><a href="?view=perfil&user={$smarty.get.user}&pag=2">Siguiente</a></li>
                  {else}
                    
                  {/if}
                {else}
                  {if $smarty.get.pag <= 1}
                  <li class="disabled"><a href="#">Anterior</a></li>
                  {else}
                  <li><a href="?view=perfil&user={$smarty.get.user}&pag={$smarty.get.pag - 1}">Anterior</a></li>
                  {/if}

                  {if $smarty.get.pag >= $pags}
                  <li class="disabled"><a href="#">Siguiente</a></li>
                  {else}
                  <li><a href="?view=perfil&user={$smarty.get.user}&pag={$smarty.get.pag + 1}">Siguiente</a></li>
                  {/if} 
                {/if}
              </ul>
            </nav>
            {/if}
            
            {else}
            <div class="media">
              <div class="alert alert-danger" role="alert">ERROR: El perfil solicitado no existe.</div>
            </div>

          {/if}
        </div>          
      </div>
    </div>
    <script>
    function myFunction($id,$nombre) {

        var r = confirm("¿Deseas eliminar este post? ¡Se perderán todas las valoraciones y comentarios!");
        if (r == true) {

            window.location.replace("?view=delete&id_user="+$nombre+"&id_post="+$id+"");

        }
    }
    </script>  
{include 'overall/footer.tpl'}
   </body>
</html> 

