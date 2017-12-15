{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Los mejores</a></li>  
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Categoria 1</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Inicio</h2>
          <div class="table-responsive">
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
              {foreach from=$posts item=pt}
                <tr>
                  <td><a href="?view=posts&id={$pt.id}">{$pt.titulo}</a></td>
                  <td><a href="?view=perfil&&user={$pt.id_dueno}">{$pt.dueno}</a></td>
                  <td style="text-align: center;">{$pt.puntos}</td>
                  <td style="text-align: center;">0</td>
                </tr>
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>      

{include 'overall/footer.tpl'}
   </body>
</html>       