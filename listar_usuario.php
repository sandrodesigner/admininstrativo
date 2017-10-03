 <?php
   session_start();
   include_once("conexao.php");
   include_once("seguranca.php");
 ?> 

<!DOCTYPE html>
<html lang="en">
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
             //SELECIOANDO TODOS OS DADOS E ORDENANDO PELO ID
             $resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
             //CONTANDO QAUNTAS LINHAS TEM E JOGANDO NA VARIAVEL LINHAS
             $linhas=mysql_num_rows($resultado);
           ?>
          
          <div class="mastfoot">
            <div class="inner">
            <table class="table">
  <thead class="thead-inverse"><br>
  <form >
   <label> Consulta Por Email | Nome ou Id |<i class="fa fa-search" aria-hidden="true"></i>
</label><br>
    <input type="name" name="pesquisa">
  </form>
  <h2 class="titulo">Lista de Usuários |<i class="fa fa-file-text-o" aria-hidden="true"></i></h2>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>NÍVEL DE ACESSO</th>
      <th>OPÇÕES</th>
    </tr>
  </thead>
  <tbody>

  <?php
     //ENQUANTO LINHAS FOR = O MYSQL_ARRAY FAÇA A SEGUINTE INSTRUÇÃO
     while($linhas = mysql_fetch_array($resultado)){

        echo"<tr>";
        echo "<td>".$linhas['id']."</td>";
        echo"<td>".$linhas['nome']."</td>";
        echo"<td>".$linhas['email']."</td>";
        echo"<td>".$linhas['nivel_acesso_id']."</td>";
        ?> 
        <td>      <!--SETEANDO ID E NO BOTÃO PARA PÁGINAS ALTERA E VIZUALIZA USUARIO-->
        
                  <a href='heade.php?link=5&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-primary' title='Informações De Usuários'>Vizualizar</button></a>
                  <a href='heade.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-primary' title='Alteração de Dados Cadastrados'>Editar</button></a>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Apagar
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Tem certeza que deseja excluir<br>
                            o usuário?
                          </h5>
                         
                        </div>
                        <div class="modal-body">
                           <a href='processa/processa_apaga_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-primary' title='Deletar Informação De Usuários'>Sim</button></a>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Fechar</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                 
            
        <?php
        echo"</tr>";
     }
  ?>
  </tbody>
</table>
        <button type="button" class="btn btn-light pull-right" title="Sair da lista"><a href="sair.php">Sair</a></button>


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

