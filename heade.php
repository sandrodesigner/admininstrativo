<!--ADICIONANDO CABEÇALHO DINAMICAMENTE NAS PÁGINAS-->

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

<?php
  $link = $_GET["link"];
  //criando ARRAY  de páginas
  $pag[1] = "login.php";
  $pag[2] = "listar_usuario.php";
  $pag[3] = "cadas_usuario.php";
  $pag[4] = "editar_usuario.php";
  $pag[5] = "vizualiza_usuario.php";
  
  //se a variavel link for diferente de vazio
  if(!empty($link)){
    // se arquivo de determinada pagina existir,inclua a pagina que o usuário selecionar no menu
    if(file_exists($pag[$link]))
    {
      include $pag[$link];
    }
  }else{
    //se nao retorne para página inicial
    include "login.php";
  }
?> 