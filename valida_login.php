<?php
  session_start();

  $usuariot = $_POST['usuario'];
  $senhat = $_POST['senha'];

  //VERIFICANDO SE OS DADOS ESTÃO SENDO PUXADOS PELA PÁGINA 
  //echo $usuariot.' - '.$senhat;

  include_once("conexao.php");
   //criando variavel para pegar dados do banco
  $result = mysql_query("SELECT * FROM usuarios WHERE login ='$usuariot' AND senha ='$senhat' LIMIT 1");
  $resultado = mysql_fetch_assoc($result);

  echo "usuario:".$resultado['nome'];

  if(empty($resultado)){
    $_SESSION['loginErro'] = 'usuário ou  senha inválida';

    //redirencionando par tela inicial
    //header("Location:login.php");
    header("Location:heade.php?link=1");
  }else{
   $_SESSION['usuarioId']          = $resultado['id']; 
   $_SESSION['usuarioNome']        = $resultado['nome'];
   $_SESSION['usuarioEmail']       = $resultado['email'];
   $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
   $_SESSION['usuarioLogin']       = $resultado['login'];
   $_SESSSION['usuarioSenha']      = $resultado['senha'];

   //se o id for igual a 1 ira para pagina admininstrativa.
   if($_SESSION['usuarioNivelAcesso'] == 1){

    header("Location:administrativo.php");
    
   }else{

    header("Location:usuario.php");
   }
 
  }
?>

