<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body>



<!-- --------------------------------------------- Barra de Navegação ---------------------------------------------------- -->

	<div class="container">

		<div class="navbar-brand img-logo">Entretenimento</div>

		<div class="row conteudo-index">

			<div class="cadastro-login">

	 			<div class="col-md-10 col-md-offset-1 login-index">
	 				
	 				<div class="form-group formulario-index">
	 					<h3>Entrar</h3>
	 					<form>
	 						<div class="-form-login-index">
		 						<label>Login</label>
		 						<input type="text"  id="login-index" class="form-control" name="" required="" placeholder="Insira seu login" />
	 						</div>
	 						<div class="senha-index">
		 						<label>Senha</label>
		 						<input type="password" id="senha-index" class="form-control" name="" required="" placeholder="Insira sua senha">
	 						</div>

	 						<div class="botao-index">
	 							<input type="submit" id="botao-index" name="" class="btn btn-primary" value="Entrar">
	 						</div>
	 					</form>
	 				</div>
	 			</div>
	 				<div class="cadastro-index">
	 					<div class="teste"><h3>Cadastre-se</h3></div>
		 					<div class="row">
		 						<div class="col-md-3 "><a href="cadastro-estabelecimento.php" class="btn btn-warning btn-custom btn-estabelecimento btn-lg">Estabelecimento</a></div></div>

		 						<div class="row">
			 					<div class="col-md-1 col-md-offset-2"> <a href="cadastro-usuario.php" class="btn btn-success btn-custom btn-lg btn-usuario">Usuário</a></div></div>

		 					</div>
		 			</div>				
				
 			</div>
	    </div>

	</div><!-- ***************** /container *********************-->


	<footer class="rodape-index">
		
				<span>&copy;Todos os direitos reservados</span>
		
	</footer>


</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</html>
