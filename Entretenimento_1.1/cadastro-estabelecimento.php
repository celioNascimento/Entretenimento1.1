<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Cadastro - Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->

	<link rel="stylesheet" type="text/css" href="css/estilo-cadastro.css?version=12">
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

	<nav class="navbar navbar-fixed-top  navbar-barra-navegacao">
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
		<div class="form-cadastro">
			<form>
			<h3>Cadastra-se</h3>
			<div class="row">
				<div class="col-md-8 form-group ">
					<label for="nome-estabelecimento">Nome do estabelecimento: </label>
					<input type="text" name="" class="form-control" id="nome-estabelecimento" required="">
				</div>
			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-5 form-group  ">
					<label for="email-estabelecimento">Email:</label>
					<input type="email" name="" class="form-control" id="email-cadastro" required="">
				</div>

				<div class="col-md-3 form-group">
					<label for="telefone-estabelecimento">Telefone: </label>
					<input type="text" name="" class="form-control" id="telefone-estabelecimento" required="">
				</div>
			</div><!-- ************************ /row *********************-->


			<div class="row">
				<div class="col-md-5 form-group">
					<label for="endereco-cadastro">Endereço:</label>			
					<input type="text" name="" class="form-control" id="endereco-cadastro" required="">
				</div>

				<div class="col-md-1 form-group">
					<label for="numero-endereco-cadastro">Número:</label>			
					<input type="text" name="" class="form-control" id="numero-endereco-cadastro" required="">
				</div>

				<div class="col-md-2 form-group">
					<label for="complemento-endereco-cadastro">Complemento:</label>			
					<input type="text" name="" class="form-control" id="complemento-endereco-cadastro" required="">
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-8 form-group">
					<label for="senha-cadastro">Senha:</label>
					<input type="password" name="" class="form-control" id="senha-cadastro" required="">
				</div>
			</div><!-- ************************ /row *********************-->

			<div class="btn-entrar-cadastro">

				<div class="row">
					<div class="col-md-2">
						<input type="submit" name="" class="btn btn-default" value="Cadastrar">
					</div>

				</div><!-- ************************ /row *********************-->

			</div>

			</div><!-- ************************ /form-cadastro *********************-->
			</form>
		</div><!-- ************************ /container *********************-->

		<footer class="rodape-cadastro">
			<div class="container">
				<span>&copy;Todos os direitos reservados</span>
			</div>
		</footer>

	
	

</body>
</html>