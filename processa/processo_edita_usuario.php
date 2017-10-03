

 <?php
 //PRIMEIRO FIZ UMA QERY NA PAGINA EDITA_USUARIO PARA PEGAR OS DADOS PELO ID
 // AQUI O QUERY PARA ALTERAR OS DADOS.
 session_start();
 include_once("../seguranca.php");
 include_once("../conexao.php");


 $idt      =$_POST['id'];
 $nomet    =$_POST['nome'];
 $logint   =$_POST['usuario'];
 $emailt   =$_POST['email'];
 $senhat   =$_POST['senha'];
 $nivelt   =$_POST['nivel_de_acesso'];

$result = mysql_query("UPDATE usuarios SET nome ='$nomet',login ='$logint',email ='$emailt',senha ='$senhat'  ,nivel_acesso_id ='$nivelt',modified = NOW() WHERE id ='$idt'");
 

 if(mysql_affected_rows() != 0){
    
    		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Usuário Alterado com Sucesso!!.\")</script>";
 }else{
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto php 2018/heade.php?link=2'><script type=\"text/javascript\">alert(\"Os Dados Não Foram Alterados!!.\")</script>";

 }
 ?> 