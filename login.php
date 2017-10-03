<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>projeto em andamento</title>
  <link rel="stylesheet" href="anime/anime.css">
  <link rel="stylesheet" href="anime/animette.css"> 
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> 
  <link href="Hover-master/css/hover.css" rel="stylesheet" media="all">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo2.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

</head>

<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#page-top"><i class="fa fa-eercast" aria-hidden="true"></i>|Em Construção</a>
    </div>
    <div class="collapse navbar-collapse menu-navegacao" id="menu-navegacao">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top"></a></li>

        <li>
          <a class="" href="#">INÍCIO</a>
        </li>
        <li>
          <a class="" href="#">SERVIÇOS</a>
        </li>

        <li>
          <a class="" href="#">QUEM SOMOS</a>
        </li>

        <li>
          <a class="" href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">PRÉ-CADASTRO</a>
        </li>

      </ul>
    </div>

  </nav>

  <div class="container">

    <?php
    unset( $_SESSION['usuarioId'],
      $_SESSION['usuarioNome'],
      $_SESSION['usuarioNivelAcesso'],
      $_SESSION['usuarioLogin'],
      $_SESSION['usuarioSenha']);
      ?>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pré Cadastramento De Usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="POST" action="processa/processa_cad_usuario.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="col-form-label">Nome</label>
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="col-form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu Email" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity" class="col-form-label">Usuário</label>
                  <input type="texto" name="usuario" class="form-control" id="inputCity" placeholder="Dados de Acesso" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity" class="col-form-label">Senha</label>
                  <input type="password" name="senha" class="form-control" id="inputCity" placeholder="Senha" required>
                </div>
              </div>

              <div class="form-group">
              </div>
              <button type="submit" class="btn btn-primary hvr-float">Cadastrar Usuário</button>
            </form>
            <p>Pré cadastramento de usuário.<br>
             Níveis de Acesso só poderão ser cadastrados por um Administrador autorizado.
           </p>
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-md-offset-5 col-xl-4 col-xl-offset-5">
    <form class="form-signin animated pulse"  method="POST" action="valida_login.php">
      <h2 class="form-signin-heading text-center">Área de Login |<i class="fa fa-users" aria-hidden="true"></i></h2>
      <label for="inputEmail" class="sr-only">Email</label>

      <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
        <input type="name" name="usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus><br>
      </div><br>

      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required><br>
      </div><br>


      <label for="inputPassword" class="sr-only">Senha</label>

      <button class="btn btn-lg btn-primary btn-block hvr-float" type="submit">Entrar</button>
    </form>

    <p class="text-center">
     <!--se a variavel global for diferente de vazia-->
     <?php
     if(isset($_SESSION['loginErro'])){
                //PEGANDO MENSAGEM LÁ DO valida_login
      echo $_SESSION['loginErro'];
                //destroindo sessão
      unset ($_SESSION['loginErro']);
    }
    ?>
  </p>
  <p>Está área é destinada para administradores e usuários,com seus respectivos níveis de acesso.<br>
  Digite seu login e senha</p>
</div>
</div>
</div> 
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
