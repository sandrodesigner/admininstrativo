<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");

$nomet     =$_POST['nome'];
$emailt    =$_POST['email'];
$usuariot  =$_POST['usuario'];
$senhat    =$_POST['senha'];
$nivelt    =$_POST['nivel_de_acesso'];

//imprimindo dados para ver se estão pegando do formulario
//echo $nomet;
//echo $emailt;

//video aula numero 11
$query = mysql_query("INSERT INTO usuarios (nome,email,login,senha,nivel_acesso_id,created) VALUES ('$nomet','$emailt','$usuariot','$senhat','$nivelt',NOW())");
//SE ALGUMA COLUNA DO MYSQL FOR DIFERENTE DE 0 REDIREMENCIONE ELE PARA LISTAR.PHP
if(mysql_affected_rows() != 0){
    //MENSAGEM JAVASCRIPT DENTRO DO PHP.
	//echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/listar_usuario.php'><script type=\"text/javascript\">alert(\"Usuário Cadastrado com Sucesso!!.\")</script>";

		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Usuário Cadastrado com Sucesso!!.\")</script>";

}else{

	//echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/listar_usuario.php'><script type=\"text/javascript\">alert(\"Usuário não foi Cadastrado!!.\")</script>";
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Usuário Não Foi Cadastrado!!.\")</script>";

}
?>