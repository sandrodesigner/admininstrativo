<?php
  session_start();
  //destroindo a sessao
  session_destroy();

  //removendo os dados da sessão
  unset( $_SESSION['usuarioId'],
          $_SESSION['usuarioNome'],
          $_SESSION['usuarioNivelAcesso'],
          $_SESSION['usuarioLogin'],
          $_SESSION['usuarioSenha']);

  //rediremencionando para pagina inicial

  header("Location:heade.php?link=1");
?>