 <?php
 session_start();
 include_once("seguranca.php");
 include_once("conexao.php");

 $idt = $_GET['id'];

 $result = mysql_query("SELECT * FROM usuarios WHERE id='$idt' LIMIT 1");
 $resultado = mysql_fetch_assoc($result);

 ?> 

 <!DOCTYPE html>
 <html lang="pt-br">

 <style>
 .menu_form{
  margin-left: 30px;
  margin-top: 10px;
 }
 #visual{
   background-color: #0E6BA8;
   height: 100%;

 }
 #visual h1{
   background-color: #3985B7; 
   padding: 70px;
   text-shadow: 1px 1px 1px #000000;
   margin-top: 150px;
   border-bottom: solid 2px #000000;
 }
 #info{
  height: 100%;
}
.cover{
   margin-top: 200px;
}
#info h2{
  background-color: #A6E1FA;
  text-shadow: 2px 2px 2px #fff;
  padding: 10px;
  border-bottom: solid 2px #000000;
}
.inform{
  background-color: #A6E1FA;
}

.colorido{
  background-color: #000000;
  background: linear-gradient(132deg,#3985B7,#fff); 
  background-size: 400% 400%;
  animation: BackgroundGradient 15s ease infinite;
}
@keyframes BackgroundGradient{
  0%{background-position: 0% 50%;}
  50%{background-position: 100% 50%;}
  100%{background-position: 0% 50%;}
}
</style>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

       <div id="visual" class="col-md-6">
         <div class="menu_form">
          <h3 class="masthead-brand"><i class="fa fa-eercast" aria-hidden="true"></i>|Em Construção</h3>  
        
        <?php
        include_once("menu.php");
        ?>
        </div>
        <h1>Sistema em Desenvolvimento</h1>
        
        
      </div>
      <div id="info" class="col-md-6  colorido">

        <div class="inner cover">
         <h2>Informações Do Usuários</h2>
         <div class="col-md-6 col-offset-4 inform"><i class="fa fa-circle-o" aria-hidden="true"> |</i><b>ID</b></div>  
         <div class="col-md-6 col-offset-4"> <?php echo  $resultado['id']; ?></div>
         <div class="col-md-6 col-offset-4 inform"><i class="fa fa-user-o" aria-hidden="true"> |</i>NOME</div>     
         <div class="col-md-6 col-offset-4"><?php echo  $resultado['nome'];  ?></div>
         <div class="col-md-6 col-offset-4 inform"><i class="fa fa-font" aria-hidden="true"> |</i><b>LOGIN</b></div>
         <div class="col-md-6 col-offset-4"> <?php echo  $resultado['login']; ?></div>
         <div class="col-md-6 col-offset-4 inform"><i class="fa fa-at" aria-hidden="true"> |</i>EMAIL</div>
         <div class="col-md-6 col-offset-4"> <?php echo  $resultado['email']; ?></div> 
         <div class="col-md-6 col-offset-4 inform"><i class="fa fa-unlock" aria-hidden="true"> |</i><b>NIVEL DE ACESSO</b></div>
         <div class="col-md-6 col-offset-4"> <?php echo  $resultado['nivel_acesso_id']; ?></div>



       </div>


       <div class="inner">
         <a href="#" class="btn btn-lg btn-secondary">Conheça Mais</a>


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

