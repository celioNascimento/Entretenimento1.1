<?php

session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: index.php?erro=1');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" >

  <title>Home - Entretenimento</title>

  <!------------------- Folhas de estilo ------------------------ -->

  <link rel="stylesheet" type="text/css" href="css/estilo-home.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <!-- link cnd para jquery -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->





</head>
<body>

 <nav class="navbar navbar-fixed-top navbar-inverse navbar-vermelha">

      <div class="container">


        <!--******************************* header ********************************-->


        <div class="navbar-header">

          <!-- botão toggle -->

          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#barra-navegacao">
            
            <span class="sr-only">Alternar navegação</span><!-- Exibido apenas para leitores de tela
            (Acessibilidade) -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
            <a href="home.php" class="navbar-brand">
              <span class="img-logo"></span>
            </a>
        </div> <!-- header -->


        <!--******************************** navbar *****************************-->



        <div class="collapse navbar-collapse" id="barra-navegacao">

            <ul class="nav navbar-nav navbar-right">

                  <li><a href="home.php" >Home</a></li>
                  <li><a href="es-bares.php" >Bares</a></li>
                  <li><a href="es-boates.php" >Boates</a></li>                  
                  <li><a href="es-cinemas.php" >Cinemas</a></li>                  
                  <li><a href="es-pubs.php" >Pub's</a></li>  
                  <li class="divisor"></li>    
                  <li>
                    <a id="conta-usuario" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><?= $_SESSION['usuario'] ?></a>

                      <ul class="dropdown-menu" aria-labelledby="conta-usuario" >
                        <li><a href="#">Editar</a></li>
                        <li><a href="sair.php">Sair</a></li>
                      </ul>
                  </li>       

            </ul>
          


        </div> <!-- /navbar -->        

      </div><!-- /container --> 

    </nav><!-- /nav -->

    <!-- -------------------------------------------- Conteúdo página ----------------------------- -->

bares
    
       
    </div><!-- **************************************** /container ******************************** -->


<!-- -------------------------------------------- Rodapé ----------------------------- -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>