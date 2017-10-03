<?php
ob_start();
//NÃO PE NECESSÁRIO FAZER COM TODOS OS CAMPOS APENAS COM LOGIN E SENHA.
// IMPEDE DO USUARIO ESNTRA NA AREA RESTRITA ATRAVÉS DA URL COPIADA.
//TIVE QUE RETIRAR A SESSAO LOGIN E SENHA POIS NÃO ESTAVA DEIXANDO LOGAR
//|| ($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "")|| ($_SESSION['usuarioNivelAcesso'] == "")){
	//DESTROINDO QUANDO ELE ENTRA NESTA CONDIÇÃO TBM.
	//destrua para mim tudo o que estiver dentro dessas sessóes
   unset( $_SESSION['usuarioId'],
          $_SESSION['usuarioNome'],
          $_SESSION['usuarioNivelAcesso'],
          $_SESSION['usuarioLogin'],
          $_SESSION['usuarioSenha']);

  $_SESSION['loginErro'] = "ÁREA RESTRITA PARA USUÁRIO CADASTRADOS!";

  header("Location:heade.php?link=1");
}
?>