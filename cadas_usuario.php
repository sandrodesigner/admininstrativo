 <?php
 session_start();
 include_once("seguranca.php");
 ?> 

 <!DOCTYPE html>
 <html lang="pt-br">
 
<style>
  .titulo{
  margin-bottom: 9px;  
  border-bottom:solid 1px #000000;
  padding: 5px;
  text-shadow: 1px 1px 1px #3985B7;
}
</style>
<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="masthead clearfix">

        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="inner">
            <h3 class="masthead-brand"><i class="fa fa-eercast" aria-hidden="true"></i>|Em Construção</h3>
            
          </div>
          <?php
          include_once("menu.php");
          ?>
          <div class="inner cover">
           <h2 class="titulo">Cadastro de novos Usuários |<i class="fa fa-user-o" aria-hidden="true"></i></h2>

         </p>
       </div>

       <div class="mastfoot">
       <form method="POST" action="processa/processa_cad_usuario.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4" class="col-form-label">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4" class="col-form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu Email"  requered>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity" class="col-form-label">Usuário</label>
              <input type="texto" name="usuario" class="form-control" id="inputCity" placeholder="Dados de Acesso"  requered>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity" class="col-form-label">Senha</label>
              <input type="password" name="senha" class="form-control" id="inputCity" placeholder="Senha"  requered>
            </div>
          </div>
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="inputState" class="col-form-label">Nível de Acesso | _</label>

              <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="nivel_de_acesso" id="inlineFormCustomSelect">
                <option value="1">Administrador</option>
                <option value="2">Usuário</option>
              </select>
            </div><br>

          </div>
          <div class="form-group">
          </div>
          <button type="submit" class="btn btn-primary hvr-float">Cadastrar Usuário</button>
        </form>
        <div class="inner">
         <a href="#" class="btn btn-lg btn-secondary">Conheça Mais</a>
         <button type="button" class="btn btn-dark pull-right"><a href="sair.php">Sair</a></button>


         <p>Sandro Desifgner<a href="https:sandrodesigner.jimdo.com">Acesse</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
       </div>
     </div>
   </div>

 </div>

</div>

</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

