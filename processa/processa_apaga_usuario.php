<?php
  session_start();

  include_once("../conexao.php");
  include_once("../seguranca.php");

  $idt = $_GET['id'];

  $query = "DELETE * FROM usuarios WHERE id = $idt";
  $resultado = mysql_query($query);
  $linhas = mysql_affected_rows();

  if(mysql_affected_rows() != 0){
    //MENSAGEM JAVASCRIPT DENTRO DO PHP.
	//echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/listar_usuario.php'><script type=\"text/javascript\">alert(\"Usuário Cadastrado com Sucesso!!.\")</script>";

		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Dados Apagados com Sucesso!!.\")</script>";

}else{

	//echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/listar_usuario.php'><script type=\"text/javascript\">alert(\"Usuário não foi Cadastrado!!.\")</script>";
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Usuário Não Foi Deletado!!.\")</script>";

}
?>