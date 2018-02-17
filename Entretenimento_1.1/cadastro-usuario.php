<?php

	$erro_usuario = isset($_GET['erro_usuario'])  ?  $_GET['erro_usuario'] : 0;
	$erro_email   = isset($_GET['erro_email'])    ?  $_GET['erro_email']   : 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Cadastro - Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->

	<link rel="stylesheet" type="text/css" href="css/estilo-cadastro.css">
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

	<!-- --------------------------------------- Barra de Navegação -------------------------------- -->

	<nav class="navbar navbar-fixed-top navbar-inverse navbar-barra-navegacao">
		<div class="container">
			<!-- ************** header *********************-->

			<div class="navbar-header">
				
				<a href="index.php" class="navbar-brand">
					<span class="img-logo">Entretenimento</span>
				</a>

			</div>

			
		</div> <!-- ************************ /container *********************-->

		
	</nav> <!-- ************************ /nav *********************-->

	<!-- --------------------------------------- Conteúdo -------------------------------- -->

		<div class="container">	

			<div class="conteudo">

				<div class="titulo">
					<h2>Cadastro</h2>
				</div>

			<div class="col-md-12">
				<div class= " panel-default">
					<div class="panel-body">
						<div class="formulario-cadastro">
							<form>
								<div class="row">
									<div class="col-md-4">
										<label for="usuario">Usuário:</label>
										<input type="text" name="usuario" class="form-control" id=usuario> 
									</div>
								
									<div class="col-md-8">
										<label for="nome">Nome:</label>
										<input type="text" name="nome" class="form-control" id=nome> 
									</div>
								</div>

							<!-- ************************** /row ******************* -->


							<div class="row div-form">
									<div class="col-md-4 ">
										<label for="data-nascimento">Data de Nascimento</label>
										<input type="date" name="data-nascimento" class="form-control" id="data-nascimento">
									</div>

									<div class="col-md-4">
										<label for="sexo">Sexo:</label>
										<select name="sexo" class="form-control">
											<option></option>
											<option>Feminino</option>
											<option>Masculino</option>
										</select>
									</div>

									
								</div>

							<!-- ************************** /row ******************* -->


								<div class="row div-form">
									<div class="col-md-8">
										<label for="email">Email:</label>
										<input type="text" name="email" class="form-control" id="email">
									</div>

									<div class="col-md-4">
										<label for="telefone">Telefone:</label>
										<input type="text" name="telefone" class="form-control" id="telefone">
									</div>
								</div>

							<!-- ************************** /row ******************* -->

								<div class="row div-form">
									<div class="col-md-7">
										<label for="endereco">Endereço:</label>
										<input type="text" name="endereco" class="form-control" id="endereco">
									</div>

									<div class="col-md-2">
										<label for="numero">Numero:</label>
										<input type="text" name="numero" class="form-control" id="numero">
									</div>

									<div class="col-md-3">
										<label for="complemenro">Complemento:</label>
										<input type="text" name="complemento" class="form-control" id="complemento">
									</div>
								</div>

							<!-- ************************** /row ******************* -->

								<div class="row div-form">
									<div class="col-md-8">
										<label for="cidade">Cidade:</label>
										<input type="text" name="cidade" class="form-control" id="cidade">
									</div>

									<div class="col-md-4">
										<label for="estado">Telefone:</label>
										<input type="text" name="estado" class="form-control" id="estado">
									</div>
								</div>

								<div class="row div-form">
									<div class="col-md-12">
										<label for="senha">Senha:</label>
										<input type="text" name="senha" class="form-control" id="senha">
									</div>
								</div>


								<div class="botoes">
									<div class="row">
										<div class="col-md-3 btn-cadastrar">										
											<input type="submit" name="" class="btn btn-primary" value="Cadastrar">
										</div>

										<div class="col-md-3 btn-cancelar">										
											<input type="submit" name="" class="btn btn-danger" value="Cancelar">
										</div>

									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>

		
			
		</div>

		</div><!-- ************************ /container *********************-->

		<footer class="rodape-cadastro navbar-inverse">
		<div class="container">

			<div class="row">
				<div class="col-md-2">
					<span class="img-rodape">entretenimento</span>
				</div>

				<div class="col-md-4 col-md-offset-7 fale-conosco">
					<ul class="nav navbar-nav">
						<li><a href="#">Você tem alguma dúvida? Fale conosco</a></li>
					</ul>
				</div>
			</div>

			<div class="direitos">
				<span>&copy;Todos os direitos reservados</span>
			</div>
		
		</div>				
	</footer>

	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>